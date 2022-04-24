let $_table = null;
let clickedBtn = null;
let catchErrorMsg = "sorry, something went wrong";
let reviewMsgs = {
    delete : {
        title : 'Are you sure to delete?',
        msg : 'You will not be able to recover this Record !!'
    }
}
let host = location.origin;
let urlPrefix = host + '/app/admin/review/';
let headers = {
    'X-Requested-With' : 'XMLHttpRequest',
    'Content-Type' : 'application/json'
};
let addReviewBtn = document.querySelector('.add-review');
let isEdit = false;

let reviewForm = document.querySelector('.review-form');

window.addEventListener('load', () => {
    initTable();
    registerBtnActionClick();
    addReviewBtn.addEventListener('click', (e) => {
        e.preventDefault();
        reviewForm.elements.namedItem('id').value = '';
        isEdit = false;
        reviewForm.reset();
        $('#review-modal').modal({
            fadeDuration: 100,
            closeClass: 'icon-remove',
            closeText: '&times'
          });
    });
    
    // reviewForm.addEventListener('submit', (e) => {
    //     e.preventDefault();
    //     showLoading();
    //     handleSaveReview(e.currentTarget);
    // });
});
$('#review-modal').on('show.bs.modal', () => {
    if(isEdit){
        document.querySelector('.review-action').textContent = 'Edit ';
    } else {
        document.querySelector('.review-action').textContent = 'Add New ';
    }
})
$('#review-modal').on('hide.bs.modal', () => {
    isEdit = false;
    reviewForm.reset();
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
        let dataset = { ...clickedBtn.dataset };
        console.log(dataset);
        console.log(jsonFormData(reviewForm));
        for(key in dataset){
            if(reviewForm.elements.namedItem(key)){
                reviewForm.elements.namedItem(key).value = dataset[key].toLowerCase();
            }
        }

        $('#review-modal').modal({
            fadeDuration: 100,
            closeClass: 'icon-remove',
            closeText: '&times'
          });
    } else if(reviewMsgs.hasOwnProperty(action)){
        doActionConfirm(action);
    }
}

function handleSaveReview(form){
    let urlAction = isEdit ? 'update' : 'create';
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
        console.log(data);
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
            }
            let successMsg = getResponse(data, 'success');
            LobiNotify('success', successMsg);
        } else {
            LobiNotify('error', catchErrorMsg);    
        }
     }).catch((err) => {
         hideLoading();
         console.log(err);
        LobiNotify('error', catchErrorMsg);
     });
}

function doActionConfirm(action){
    Lobibox.confirm({
        title : reviewMsgs[action].title,
        msg : reviewMsgs[action].msg,
        soundPath,
        callback :  ($this, type, ev) => {
            if(type == 'yes'){
                blockUI();
                deleteReview(action);
            }
        }
    })
}
function deleteReview(){
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
        lobiAlert('error', catchErrorMsg);
    });
}

function tableEdit(form){
    form = document.querySelector('.review-form');
    let tableDetails = getTableDetails();
    tableAdd(clickedBtn.dataset.id);
    let rowData = $_table.rows();
    let addedRowIndex = (rowData[0].length - 1);
    let addedRowData = $_table.row(addedRowIndex).data();
    $_table.row(addedRowIndex).remove().draw(false);
    $_table.row(tableDetails.currentTR).data(addedRowData).draw(false);
}

function tableAdd(id){
    let form = document.querySelector('.review-form');
    let formData = jsonFormData(form);
    let reviewData = [
        `<div class="media cs-media">
            <div class="media-body"> 
                <h5> ${formData.user} </h5>
            </div>
        </div>`,
        `<div class="media cs-media">
            <div class="media-body"> 
                <h5> ${formData.plan} </h5>
            </div>
        </div>`,
        `<div class="media cs-media">
            <div class="media-body"> 
                <h5> ${formData.occupation} </h5>
            </div>
        </div>`,
         `<div class="media cs-media">
            <div class="media-body"> 
                <h5> ${formData.review.slice(0, 60)} </h5>
            </div>
        </div>`,
        `<div class="media cs-media">
            <div class="media-body"> 
                <h5> True </h5>
            </div>
        </div>`,
        reviewBtnAction(formData, id)
    ];

    let node = $_table.row.add(reviewData).draw(false).node();
    let info = $_table.page.info();
    if((info.page + 1) < info.pages){
        $_table.page('next').draw('page');
    }
}

function reviewBtnAction(review, id){
    return `
    <nav class="navbar navbar-expand">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                </a>
                <div class="dropdown-menu">
                    <a data-action="edit" data-user="${ review['user'] }" data-review="${ review['review'] }" data-active="${ review['active'] }" data-occupation="${ review['occupation'] }" data-plan="${ review['plan'] }" data-id="${ id }" class="action-link dropdown-item" href="#">Edit</a>
                    <a data-action="activate"  data-to="activate" data-id="${ review['id'] }" class="action-link dropdown-item" href="#">Toggle Activate</a>
                    <a data-action="delete" data-id="${ id }" class="action-link dropdown-item" href="#">Delete</a>
                </div>
            </li>
        </ul>
    </nav>
    `
}