let catchErrorMsg = "sorry, something went wrong";
let host = location.origin;
let urlPrefix = host + '/app/';
let headers = {
    'X-Requested-With' : 'XMLHttpRequest',
    'Content-Type' : 'application/json'
};
userBalance = document.querySelector('.user-balance');
walletForm = document.querySelector('.wallet-form');
let actionMsgs = {
    fund : {
        title : 'Fund this user\'s current Invested?',
    },
    debit : {
        title : 'Debit this user\'s current Invested?',
    },
}
let isAdmin = location.pathname.indexOf('admin') == 1;

window.addEventListener('load', () => {
    $('#user-list').select2();
    setFirstUserBalance();
    $('#user-list').on('select2:select', function (e) {
        var data = e.params.data;
        blockUI('<h5>Fetching Current Invested...</h5>');
        getUserData(data.id);
    });
    walletForm.addEventListener('submit', (e) => {
        e.preventDefault();
        let formData = jsonFormData(e.currentTarget);
        doActionConfirm(formData);
    });
})
function setFirstUserBalance(){
    let select = walletForm.elements.namedItem('name');
    let firstUserBalance = select.selectedOptions[0].dataset.balance;
    userBalance.textContent = '$' + firstUserBalance;
}
function updateDomBalance(form){
    userBalance = document.querySelector('.user-balance');
    let amount = userBalance.textContent;
    let dot = '.' + amount.split('.')[1];
    amount = +(amount.slice(1));
    if(form['action'] == 'debit'){
        amount-= +form['amount'];
    } else {
        amount+= +form['amount'];
    }
    userBalance.textContent = '$' + amount + dot;
}
function getUserData(user){
    fetch(urlPrefix + 'admin/user/' + user, {
        headers,
    }).then((res) => {
        unblockUI();
        return res.json();
    })
    .then((data) => {
      userBalance.textContent = '$' + data['currently_invested'];
     }).catch((err) => {
        LobiNotify('error', catchErrorMsg);
     });
}
function manageWallet(form){
    fetch(urlPrefix + 'account/' + form['action'] + '-currently-invested', {
        method : 'post',
        headers,
        body : JSON.stringify((form))
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
            isAdmin && updateDomBalance(form);
            let successMsg = getResponse(data, 'success');
            LobiNotify('success', successMsg);
        } else {
            LobiNotify('error', catchErrorMsg);    
        }
     }).catch((err) => {
         hideLoading();
        LobiNotify('error', catchErrorMsg);
     });
}

function doActionConfirm(formData){
    let actionText = formData['action'] == 'debit' ? 'from' : 'to';
    Lobibox.confirm({
        title : actionMsgs[formData['action']].title,
        msg : `\$${formData['amount']} will be ${formData['action']}ed ${actionText} ${formData['name']}`,
        soundPath,
        callback :  ($this, type, ev) => {
            if(type == 'yes'){
                showLoading();
                manageWallet(formData);
            }
        }
    })
}