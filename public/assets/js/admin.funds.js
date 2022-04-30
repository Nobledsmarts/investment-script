let $_table = null;
let clickedBtn = null;
let catchErrorMsg = "sorry, something went wrong";
let depositMsgs = {
    deny : {
        title : 'Are you sure to deny?',
        msg : 'Record will be denied!'
    },
    approve : {
        title : 'Are you sure to approve?',
        msg : 'Record will be approved!'
    },
    delete : {
        title : 'Are you sure to delete?',
        msg : 'You will not be able to recover this Record !!'
    }
}
let host = location.origin;
let urlPrefix = host + '/app/admin/account/funds/';
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
        actionLink.addEventListener('click', (e) => {
            e.preventDefault();
            handleBtnAction();
        })
    });
}

function initTable(){
    $_table = $('.record-table').DataTable({
        createdRow: function ( row, data, index ) {
            $(row).addClass('selected');
        } 
    });
    $_table.on('click', 'tbody tr', function() {
        let $row = $_table.row(this).nodes().to$();
        let hasClass = $row.hasClass('selected');
        if (hasClass) {
            $row.removeClass('selected')
        } else {
            $row.addClass('selected')
        }
    })
   
    $_table.rows().every(function() {
        this.nodes().to$().removeClass('selected')
    });

    $_table.on('draw', () => {
        // registerBtnActionClick();
    });
}
function handleBtnAction(){
    clickedBtn = event.currentTarget;
    let action = clickedBtn.dataset.action;
    if(depositMsgs.hasOwnProperty(action)){
        doActionConfirm(action);
    }
}

function handleAction(action){
    let tableDetails = getTableDetails();
    let currentTR = tableDetails.currentTR;
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
        if('errors' in data){
            let errorMsg = getResponse(data);
            LobiNotify('error', errorMsg);
        }
        else if('success' in data){
            $_table.row(currentTR).remove().draw(false);
            let successMsg = getResponse(data, 'success');
            LobiNotify('success', successMsg);
        } else {
            LobiNotify("error", catchErrorMsg);
        }
     }).catch((err) => {
         console.log(err);
        LobiNotify("error", catchErrorMsg);
     });
}

function doActionConfirm(action){
    Lobibox.confirm({
        title : depositMsgs[action].title,
        msg : depositMsgs[action].msg,
        soundPath,
        callback :  ($this, type, ev) => {
            if(type == 'yes'){
                blockUI();
                handleAction(action);
            }
        }
    })
}
