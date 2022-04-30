let $_table = null;
let clickedBtn = null;
let catchErrorMsg = "sorry, something went wrong";
let walletMsgs = {
    deactivate : {
        title : 'Are you sure to deactivate?',
        msg : 'Wallet will be deactivated!'
    },
    activate : {
        title : 'Are you sure to activate?',
        msg : 'Wallet will be activated!'
    },
    delete : {
        title : 'Are you sure to delete?',
        msg : 'You will not be able to recover this Record !!'
    }
}
let host = location.origin;
let urlPrefix = host + '/app/admin/wallet/';
let headers = {
    'X-Requested-With' : 'XMLHttpRequest',
    'Content-Type' : 'application/json'
};
let addWalletBtn = document.querySelector('.add-wallet');
let isEdit = false;

let hasMemo = document.querySelector('#has-memo');
let walletForm = document.querySelector('.wallet-form');

window.addEventListener('load', () => {
    initTable();
    registerBtnActionClick();
    addWalletBtn.addEventListener('click', (e) => {
        e.preventDefault();
        $('#wallet-modal').modal({
            fadeDuration: 100,
            closeClass: 'icon-remove',
            closeText: '&times'
          });
        // alert('modal will be closed in 5 secondas');
        // setTimeout(() => {
        //     forceModalClose('#wallet-modal');
        //     alert('closed');
        // }, 5000)
    });
    $('.memo-wrapper').on('change', 'select', function(){
        toggleMemoCont();
    });
    walletForm.addEventListener('submit', (e) => {
        e.preventDefault();
        showLoading();
        // handleSaveWallet(e.currentTarget);
        e.currentTarget.submit();
    });
});
function toggleMemoCont(){
    let hasMemo = !!(+$('#has-memo').val());
    if(hasMemo){
        document.querySelector('.memo-cont').classList.remove('d-none');
    } else {
        document.querySelector('.memo-cont').classList.add('d-none');
    }
}
$('#wallet-modal').on('show.bs.modal', () => {
    if(isEdit){
        document.querySelector('.wallet-action').textContent = 'Edit ';
    } else {
        document.querySelector('.wallet-action').textContent = 'Add New ';
    }
})
$('#wallet-modal').on('hide.bs.modal', () => {
    isEdit = false;
    walletForm.reset();
    clickedBtn = null;
})

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

function initTable(){
    $_table = $('.record-table').DataTable({
        dom: 'Bfrtip',
        "order": [
        ],
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
    });
}
function handleBtnAction(btn){
    let action = clickedBtn.dataset.action;
    if(action == 'edit'){
        isEdit = true;
        let dataset = {... clickedBtn.dataset};
        for(key in dataset){
            if(walletForm.elements.namedItem(key)){
                walletForm.elements.namedItem(key).value = dataset[key].toLowerCase();
            }
        }
        // $('#has-memo').niceSelect('update');
        toggleMemoCont();
        $('#wallet-modal').modal('show');
    } else if(walletMsgs.hasOwnProperty(action)){
        doActionConfirm(action);
    }
}

// function handleSaveWallet(form){
//     let urlAction = isEdit ? 'update' : 'create';
//     fetch(urlPrefix + urlAction, {
//         method : 'post',
//         headers,
//         body : JSON.stringify({
//             ...jsonFormData(form),
//             has_memo : !!(+hasMemo.value),
//             id : isEdit ? clickedBtn.dataset.id : null
//         })
//     }).then((res) => {
//         hideLoading();
//         return res.json();
//     })
//     .then((data) => {
//         if('errors' in data){
//             let errorMsg = getResponse(data);
//             LobiNotify('error', errorMsg);
//         }
//         else if('success' in data){
//             if(isEdit){
//                 tableEdit(form);
//             } else {
//                 lastInsertId = data['success']['id'];
//                 tableAdd(lastInsertId);
//                 form.reset();
//             }
//             let successMsg = getResponse(data, 'success');
//             LobiNotify('success', successMsg);
//         } else {
//             LobiNotify('error', catchErrorMsg);    
//         }
//      }).catch((err) => {
//          hideLoading();
//         LobiNotify('error', catchErrorMsg);
//      });
// }

function doActionConfirm(action){
    Lobibox.confirm({
        title : walletMsgs[action].title,
        msg : walletMsgs[action].msg,
        soundPath,
        callback :  ($this, type, ev) => {
            if(type == 'yes'){
                blockUI();
                doWalletStatus(action);
            }
        }
    })
}
function doWalletStatus(urlAction){
    let tableDetails = getTableDetails();
    let currentTR = tableDetails.currentTR;
    fetch(urlPrefix + urlAction, {
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
            if(urlAction == 'delete'){
                $_table.row(currentTR).remove().draw(false);
            } else {
                toggleActivate(urlAction);
            }
            let successMsg = getResponse(data, 'success');
            lobiAlert('success', successMsg);
        } else {
            lobiAlert('error', catchErrorMsg);    
        }
     }).catch((err) => {
         unblockUI();
        lobiAlert('error', catchErrorMsg);
     });
}
function toggleActivate(action){
    let tableDetails = getTableDetails();
    let currentAction = action == 'deactivate' ? 'True' : 'False';
    let replaceWith = action == 'deactivate' ? 'False' : 'True';
    let nextAction = action == 'deactivate' ? 'activate' : 'deactivate';
    tableDetails.rowData[2] = tableDetails.rowData[2].replace(new RegExp(currentAction, 'ig'), replaceWith);
    tableDetails.rowData[6] = tableDetails.rowData[6].replace(new RegExp(action, 'ig'), nextAction);
    $_table.row(tableDetails.currentTR).data(tableDetails.rowData).draw(false);
}
function tableEdit(form){
    form = document.querySelector('.wallet-form');
    let tableDetails = getTableDetails();
    tableAdd(clickedBtn.dataset.id);
    let rowData = $_table.rows();
    let addedRowIndex = (rowData[0].length - 1);
    let addedRowData = $_table.row(addedRowIndex).data();
    $_table.row(addedRowIndex).remove().draw(false);
    $_table.row(tableDetails.currentTR).data(addedRowData).draw(false);
}

function tableAdd(id){
    let form = document.querySelector('.wallet-form');
    let formData = jsonFormData(form);
    console.log(formData);
    let walletData = [
        `<div class="media cs-media">
            <div class="media-body"> 
                <h5> ${formData.currency} </h5>
            </div>
        </div>`,
        `<div class="media cs-media">
            <div class="media-body"> 
                <h5> ${formData.currency_symbol} </h5>
            </div>
        </div>`,
        `<div class="pretty p-svg p-curve deposit_approved"> True </div>`,
        `<div class="pretty p-svg p-curve"> ${formData.currency_address} </div>`,
        `<div class="pretty p-svg p-curve"> ${formData.has_memo == 'Yes' ? 'True' : 'false'} </div>`,
        `<div class="pretty p-svg p-curve"> ${formData.memo_token} </div>`,
        walletBtnAction(formData, id)
    ];

    let node = $_table.row.add(walletData).draw(false).node();
    let info = $_table.page.info();
    if((info.page + 1) < info.pages){
        $_table.page('next').draw('page');
    }
}

function walletBtnAction(wallet, id){
    return `
    <nav class="navbar navbar-expand">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                </a>
                <div class="dropdown-menu">
                    <a data-currency="${ wallet['currency'] }" data-currency_symbol="${ wallet['currency_symbol'] }" data-has_memo="${ wallet['has_memo'] }" data-memo_token="${ wallet['memo_token'] }" data-currency_address="${ wallet['currency_address'] }"
                    data-action="edit" data-id="${ id }" class="action-link dropdown-item" href="#">Edit</a>
                    <a data-action="deactivate" data-id="${ id }" class="action-link dropdown-item" href="#">Deactivate</a>                                                                                
                    <a data-action="delete" data-id="${ id }" class="action-link dropdown-item" href="#">Delete</a>
                </div>
            </li>
        </ul>
    </nav>
    `
}