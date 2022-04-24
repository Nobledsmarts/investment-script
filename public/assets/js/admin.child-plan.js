let $_table = null;
let clickedBtn = null;
let catchErrorMsg = "sorry, something went wrong";
let planMsgs = {
    delete : {
        title : 'Are you sure to delete?',
        msg : 'You will not be able to recover this Record !!'
    }
}
let host = location.origin;
let urlPrefix = host + '/app/admin/plan/child/';
let headers = {
    'X-Requested-With' : 'XMLHttpRequest',
    'Content-Type' : 'application/json'
};
let addPlanBtn = document.querySelector('.add-plan');
let isEdit = false;

let planForm = document.querySelector('.plan-form');

window.addEventListener('load', () => {
    initTable();
    registerBtnActionClick();
    addPlanBtn.addEventListener('click', (e) => {
        e.preventDefault();
        $('#plan-modal').modal({
            fadeDuration: 100,
            closeClass: 'icon-remove',
            closeText: '&times'
          });
    });
    
    planForm.addEventListener('submit', (e) => {
        e.preventDefault();
        showLoading();
        e.currentTarget.submit();
        // handleSavePlan(e.currentTarget);
    });
});
$('#plan-modal').on('show.bs.modal', () => {
    if(isEdit){
        document.querySelector('.plan-action').textContent = 'Edit ';
    } else {
        document.querySelector('.plan-action').textContent = 'Add New ';
    }
})
$('#plan-modal').on('hide.bs.modal', () => {
    isEdit = false;
    planForm.reset();
    clickedBtn = null;
})

function initTable(){
    $_table = $('.record-table').DataTable({
        dom: 'Bfrtip',
        "order": [
        ],
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
    });
    // $_table.rows().every(function() {
        // this.nodes().to$().removeClass('background_white')
    // });
    $_table.on('draw', () => {
        registerBtnActionClick();
    });
}

function registerBtnActionClick(target){
    let actionLinks = [... document.querySelectorAll('.action-link')];
    actionLinks.forEach((actionLink) => {
        if(!actionLink.dataset.added){
            actionLink.addEventListener('click', (e) => {
                e.preventDefault();
                clickedBtn = e.currentTarget;
                handleBtnAction(e.currentTarget);
            });
            actionLink.dataset.added = true;
        }
    });
}

function handleBtnAction(btn){
    let action = clickedBtn.dataset.action;
    if(action == 'edit'){
        isEdit = true;
        let dataset = {... clickedBtn.dataset};
        console.log(dataset);
        console.log(jsonFormData(planForm));
        for(key in dataset){
            if(planForm.elements.namedItem(key)){
                planForm.elements.namedItem(key).value = dataset[key].toLowerCase();
            }
        }
        // $('#parent_id').niceSelect('update');
        $('#plan-modal').modal({
            fadeDuration: 100,
            closeClass: 'icon-remove',
            closeText: '&times'
          });
    } else if(planMsgs.hasOwnProperty(action)){
        doActionConfirm(action);
    }
}

function handleSavePlan(form){
    let urlAction = isEdit ? 'update' : 'create';
    console.log(jsonFormData(form));
    fetch(urlPrefix + urlAction, {
        method : 'post',
        headers,
        body : JSON.stringify({
            ...jsonFormData(form),
            id : isEdit ? clickedBtn.dataset.id : null
        })
    }).then((res) => {
        hideLoading();
        return res.json();
    })
    .then((data) => {
        if('errors' in data){
            let errorMsg = getResponse(data);
            LobiNotify('error', errorMsg);
        }
        else if('success' in data){
            if(isEdit){
                tableEdit(form);
            } else {
                lastInsertId = data['success']['id'];
                tableAdd(lastInsertId);
                form.reset();
                // $('#parent_id').niceSelect('update');
            }
            let successMsg = getResponse(data, 'success');
            LobiNotify('success', successMsg);
        } else {
            LobiNotify('error', catchErrorMsg);    
        }
     }).catch((err) => {
         console.log(err);
        LobiNotify('error', catchErrorMsg);
     });
}

function doActionConfirm(action){
    Lobibox.confirm({
        title : planMsgs[action].title,
        msg : planMsgs[action].msg,
        soundPath,
        callback :  ($this, type, ev) => {
            if(type == 'yes'){
                blockUI();
                deletePlan(action);
            }
        }
    })
}
function deletePlan(){
    let tableDetails = getTableDetails();
    let currentTR = tableDetails.currentTR;
    fetch(urlPrefix + 'delete', {
        method : 'post',
        headers,
        body : JSON.stringify({
            id : clickedBtn.dataset.id
        })
    }).then((res) => {
        unblockUI();
        return res.json();
    })
    .then((data) => {
        if('errors' in data){
            let errorMsg = getResponse(data);
            lobiAlert('error', errorMsg);
        }
        else if('success' in data){
            $_table.row(currentTR).remove().draw(false);
            let successMsg = getResponse(data, 'success');
            lobiAlert('success', successMsg);
        } else {
            lobiAlert('error', catchErrorMsg);    
        }
    }).catch((err) => {
        console.log(err);
        lobiAlert('error', catchErrorMsg);
    });
}

function tableEdit(form){
    form = document.querySelector('.plan-form');
    let tableDetails = getTableDetails();
    tableAdd(clickedBtn.dataset.id);
    let rowData = $_table.rows();
    let addedRowIndex = (rowData[0].length - 1);
    let addedRowData = $_table.row(addedRowIndex).data();
    $_table.row(addedRowIndex).remove().draw(false);
    $_table.row(tableDetails.currentTR).data(addedRowData).draw(false);
}

function tableAdd(id){
    let form = document.querySelector('.plan-form');
    let formData = jsonFormData(form);
    let planSelect = form.elements.namedItem('parent_id');
    let parentPlan = planSelect.selectedOptions[planSelect.selectedIndex].innerHTML.trim();
    console.log(parentPlan);
    let planData = [
        `<div class="media cs-media">
            <div class="media-body"> 
                <h5> ${formData.name} </h5>
            </div>
        </div>`,
        `<div class="media cs-media">
            <div class="media-body"> 
                <h5> ${parentPlan} </h5>
            </div>
        </div>`,
        `<div class="media cs-media">
            <div class="media-body"> 
                <h5> ${formData.minimum_amount} </h5>
            </div>
        </div>`,
        `<div class="media cs-media">
            <div class="media-body"> 
                <h5> ${formData.maximum_amount} </h5>
            </div>
        </div>`,
        `<div class="media cs-media">
            <div class="media-body"> 
                <h5> ${formData.interest_rate} </h5>
            </div>
        </div>`,
        `<div class="media cs-media">
            <div class="media-body"> 
                <h5> ${formData.referral_bonus} </h5>
            </div>
        </div>`,
        `<div class="media cs-media">
            <div class="media-body"> 
                <h5> ${formData.duration} </h5>
            </div>
        </div>`,
        `<div class="media cs-media">
            <div class="media-body"> 
                <h5> True </h5>
            </div>
        </div>`,
        planBtnAction(formData, id)
    ];

    let node = $_table.row.add(planData).draw(false).node();
    let info = $_table.page.info();
    if((info.page + 1) < info.pages){
        $_table.page('next').draw('page');
    }
}

function planBtnAction(plan, id){
    return `
    <nav class="navbar navbar-expand">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                </a>
                <div class="dropdown-menu">
                    <a data-action="edit" 
                    data-name="${ plan['name'] }" data-minimum_amount="${ plan['minimum_amount'] }" 
                    data-maximum_amount="${ plan['maximum_amount'] }" data-referral_bonus="${ plan['referral_bonus'] }" 
                    data-interest_rate="${ plan['interest_rate'] }" data-duration="${ plan['duration'] }" data-id="${ id }" 
                    data-parent_id="${ plan['parent_id'] }" class="action-link dropdown-item" href="#">Edit</a>
                    <a data-action="delete" data-id="${ id }" class="action-link dropdown-item" href="#">Delete</a>
                </div>
            </li>
        </ul>
    </nav>
    `
}