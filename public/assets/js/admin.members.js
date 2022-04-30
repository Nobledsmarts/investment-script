let $_table = null;
let clickedBtn = null;
let catchErrorMsg = "sorry, something went wrong";
let depositMsgs = {
    toggleSuspend : {},
    admin : {},
    suspend : {
        title : 'Are you sure to Suspend?',
        msg : 'User will be suspended!'
    },
    makeAdmin : {
        title : 'Are you sure to make user Admin?',
        msg : 'User will be made an admin!'
    },
    removeAdmin : {
        title : 'Are you sure to remove Admin?',
        msg : 'User will be removed as admin!'
    },
    unsuspend : {
        title : 'Are you sure to Unsuspend?',
        msg : 'User will be unsuspended!'
    },
    moderate : {
        title : 'Are you sure to make user moderator?',
        msg : 'User will be made a moderator!'
    },
    unmoderate : {
        title : 'Are you sure to remove user as moderator?',
        msg : 'User will be removed as moderator!'
    },
    delete : {
        title : 'Are you sure to delete?',
        msg : 'You will not be able to recover this Record !!'
    },
    view : {
        title : 'View As User?',
        msg : 'Browse as current user!'
    }
}
let host = location.origin;
let urlPrefix = host + '/app/admin/user/';
let headers = {
    'X-Requested-With' : 'XMLHttpRequest',
    'Content-Type' : 'application/json'
};

let actionLinks = [... document.querySelectorAll('.action-link')];
window.addEventListener('load', () => {
    initTable();
    registerBtnActionClick();
})
function registerBtnActionClick(target){
    actionLinks.forEach((actionLink) => {
        if(!actionLink.dataset.added){
            actionLink.dataset.added = true;
            actionLink.addEventListener('click', (e) => {
                e.preventDefault();
                handleBtnAction();
            })
        }
    });
}

function initTable(){
    $_table = $('.record-table').DataTable({
        createdRow: function ( row, data, index ) {
            // $(row).addClass('selected');
        } 
    });
    $_table.on('draw', () => {
        registerBtnActionClick();
    });
}
function handleBtnAction(){
    clickedBtn = event.currentTarget;
    let action = clickedBtn.dataset.action;
    if(depositMsgs.hasOwnProperty(action)){
        doActionConfirm(action);
    } else if(action == 'view'){
        viewAsUser(action);
    }
}

function handleAction(action){
    let tableDetails = getTableDetails();
    let currentTR = tableDetails.currentTR;
    action = action == 'unmoderate' ? 'moderate' : action;
    fetch(urlPrefix + action, {
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
        // console.log(data);
        if('errors' in data){
            let errorMsg = getResponse(data);
            LobiNotify('error', errorMsg);
        }
        else if('success' in data){
            if(action == 'view'){
                redirectTo('/user');
            } else {
                if(action == 'delete' || action == 'toggleSuspend'){
                    $_table.row(currentTR).remove().draw(false);   
                }
                tableEdit(action);
                let successMsg = getResponse(data, 'success');
                LobiNotify('success', successMsg);
            }
            
        } else {
            LobiNotify("error", catchErrorMsg);
        }
     }).catch((err) => {
         unblockUI();
         console.log(err);
        LobiNotify("error", catchErrorMsg);
     });
}

function doActionConfirm(action){
    confirmAction = action  == 'toggleSuspend' ? clickedBtn.dataset.to : action;
    confirmAction = action == 'admin' ? clickedBtn.dataset.to : action;
    Lobibox.confirm({
        title : depositMsgs[confirmAction].title,
        msg : depositMsgs[confirmAction].msg,
        soundPath,
        callback :  ($this, type, ev) => {
            if(type == 'yes'){
                blockUI();
                handleAction(action);
            }
        }
    })
}
function tableEdit(action){
    console.log(clickedBtn);
    let tableDetails = getTableDetails();
    let tdActions = tableDetails.currentTD[0].innerHTML;
    let td = $(clickedBtn).closest('td');

    if(action == 'moderate' || action == 'unmoderate' || action == 'admin'){
        if(action == 'toggleSuspend'){
            let to = clickedBtn.dataset.to;
            let nextAction = to == 'suspend' ? 'unsuspend' : 'suspend';
            tdActions = tdActions.replace(new RegExp(to, 'g'), nextAction);
        } else if(action == 'moderate'){
            tdActions = tdActions.replace( new RegExp('moderate', 'ig'), 'unmoderate');
           tdActions = tdActions.replace( new RegExp('make', 'ig'), 'remove');
        } else if(action == 'unmoderate'){
           tdActions = tdActions.replace( new RegExp('unmoderate', 'g'), 'moderate');
            tdActions = tdActions.replace( new RegExp('remove', 'ig'), 'make');
        } else if(action == 'admin') {
            if(clickedBtn.dataset.to == 'makeAdmin'){
                tdActions = tdActions.replace( new RegExp('make', 'ig'), 'remove');
            } else{
                tdActions = tdActions.replace( new RegExp('remove', 'ig'), 'make');
            }
        }
        tdActions = tdActions.replace(new RegExp('data-added="true"', 'ig'), '')
        
        $_table.cell(td).data(tdActions).draw();
        
        setTimeout(()=> {
            [... td[0].querySelectorAll('.action-link')].forEach((actionLink) => {
                actionLink.addEventListener('click', (e) => {
                    e.preventDefault();
                    handleBtnAction();
                })
            })
        });

    }
}
//  $_table.row(addedRowIndex).remove().draw(false);
//     $_table.row(tableDetails.currentTR).data(addedRowData).draw(false);
