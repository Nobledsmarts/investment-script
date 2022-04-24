let catchErrorMsg = "sorry, something went wrong";
let host = location.origin;
let urlPrefix = host + '/app/admin/settings/';
let headers = {
    'X-Requested-With' : 'XMLHttpRequest',
    'Content-Type' : 'application/json'
};
settingsForm = document.querySelector('.settings-form');


window.addEventListener('load', () => {
    settingsForm.addEventListener('submit', (e) => {
        e.preventDefault();
        showLoading();
        saveSettings(e.currentTarget);
    });
})

function saveSettings(form){
    fetch(urlPrefix + form.getAttribute('action'), {
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
            LobiNotify('success', successMsg);
        } else {
            LobiNotify('error', catchErrorMsg);    
        }
     }).catch((err) => {
         hideLoading();
        LobiNotify('error', catchErrorMsg);
     });
}
