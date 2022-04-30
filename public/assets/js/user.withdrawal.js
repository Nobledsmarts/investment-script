let withdrawalForm = document.querySelector('.withdrawal-form');
let catchErrorMsg = "sorry, something went wrong";
let hasWallet = !!(+document.querySelector('.plan_investment_wrapper').dataset.wallet);
let host = location.origin;
let urlPrefix = host + '/app/withdrawal/';
let headers = {
    'X-Requested-With' : 'XMLHttpRequest',
    'Content-Type' : 'application/json'
};
window.addEventListener('load', () => {
    initWithdrawalFormAction();
});

function initWithdrawalFormAction(){
    withdrawalForm.addEventListener('submit', (e) => {
        e.preventDefault();
        showLoading();
        if(hasWallet){
            processWithdrawal(e.currentTarget);
        } else {
            lobiAlert('error', "You haven't created any wallet yet");
        }
    });
}

function processWithdrawal(form){
    fetch(urlPrefix + 'create', {
        method : 'post',
        headers,
        body : JSON.stringify(jsonFormData(form))
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
            let successMsg = getResponse(data, 'success');
            lobiAlert('success', successMsg);
        } else {
            LobiNotify('error', catchErrorMsg);    
        }
     }).catch((err) => {
        LobiNotify('error', catchErrorMsg);
     });
}