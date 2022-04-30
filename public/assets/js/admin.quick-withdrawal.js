let catchErrorMsg = "sorry, something went wrong";
let host = location.origin;
let urlPrefix = host + '/app/account/';
let headers = {
    'X-Requested-With' : 'XMLHttpRequest',
    'Content-Type' : 'application/json'
};
withdrawalForm = document.querySelector('.withdrawal-form');

window.addEventListener('load', () => {
    withdrawalForm.addEventListener('submit', (e) => {
        e.preventDefault();
        showLoading();
        quickWithdrawal(jsonFormData(e.currentTarget));
    });
})

function quickWithdrawal(form){
    fetch(urlPrefix + 'quick-withdrawal', {
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
