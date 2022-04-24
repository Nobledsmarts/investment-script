let form = document.querySelector('.page-form');
let loading = document.querySelector('.form-loading');
let submitText = document.querySelector('.submit-text');
let submitBtn = form ? form.querySelector("button[type='submit']") : null;
let soundPath = '/plugins/lobibox/sounds/';
let lobiboxAlert = null;
let lobiboxConfirm = null;
window.addEventListener('load', () => {
    addPasswordToggle();
})
function showLoading(form){
    loading = form ? form.querySelector('.form-loading') : loading;
    submitText = form ? form.querySelector('.submit-text') : submitText;
    submitBtn = form ? form.querySelector("button[type='submit']") : submitBtn;

    if(loading){
        loading.classList.remove('d-none');
        submitText.classList.add('d-none');
        // submitBtn.classList.add('disabled');
        submitBtn.setAttribute('disabled','');

    }
}
function hideLoading(form){
    loading = form ? form.querySelector('.form-loading') : loading;
    submitText = form ? form.querySelector('.submit-text') : submitText;
    submitBtn = form ? form.querySelector("button[type='submit']") : submitBtn;
    
    if(loading){
        loading.classList.add('d-none')
        submitText.classList.remove('d-none');
        // submitBtn.classList.remove('disabled');
        submitBtn.removeAttribute('disabled');
    }
}
function showErrorMsg(Msg, target){
    hideLoading(target);
    hideSuccessMsg(target);
    target = target ? target : document;
    let errorCont = target.querySelector('.error-cont');
    let errorText = errorCont.querySelector('.err-text');
    errorText.innerHTML = Msg;
    errorCont.classList.remove('d-none');
}
function hideErrorMsg(target){
    target = target ? target : document;
    let errorCont = target.querySelector('.error-cont');
    errorCont.classList.add('d-none');
}
function hideSuccessMsg(target){
    target = target ? target : document;
    let successCont = target.querySelector('.success-cont');
    successCont.classList.add('d-none');
}
function hideMsg(target){
    hideSuccessMsg(target);
    hideErrorMsg(target);
}
function showSuccessMsg(Msg, target){
    hideErrorMsg(target);
    hideLoading(target);
    target = target ? target : document;
    let successCont = target.querySelector('.success-cont');
    let successText = successCont.querySelector('.succ-text');
    successText.innerHTML = Msg;
    successCont.classList.remove('d-none');
}

function redirectTo(url){
    location.href = url;
}

function jsonFormData(form){
    data = new FormData(form);
    return Object.fromEntries(data.entries());
}

function getResponse(data, type){
    type = type ? type : 'errors';
    let firstError = Object.keys(data[type])[0];
    return data[type][firstError][0];
}
function getFetchUrl(form){
  return apiPrefix + form.getAttribute('action');
}
function blockUI(msg){
    $.blockUI({ 
        overlayCSS: { background: 'rgb(6 39 72)' },
        message: msg || '<h3>Processing</h3>', 
    });
}
function unblockUI(){
    $.unblockUI();
}
function getTableDetails(){
    let btn = clickedBtn;
    let action = btn.dataset.action;
    let id = btn.dataset.id;
    let currentTD = $(btn).closest('td');
    let currentTR = $(btn).closest('tr');
    let cellData = $_table.cell(currentTD).data();
    let rowData = $_table.row(currentTR).data();
    return {
        currentTD,
        currentTR,
        cellData,
        rowData,
        action,
        id,
    };
}
function handleView(id){
    fetch(location.origin + '/app/admin/users/view', {
        method : 'post',
        headers,
        body : JSON.stringify({
            id : id || clickedBtn.dataset.id
        })
    }).then((res) => {
        $.unblockUI();
        return res.json();
    })
    .then((data) => {
        if('errors' in data){
            let errorMsg = getResponse(data);
            return swal("Error", errorMsg, "error");
        }
        location.href = userDashboard;
    }).catch((err) => {
        return swal("Error", catchErrorMsg, "error");
    });
}
function addPasswordToggle(){
    let showPasswords =  document.querySelectorAll('.form-show-password');
    let formShowPasswords = [... showPasswords];
    if(formShowPasswords.length){
        formShowPasswords.forEach((formShowPassword) => {
            formShowPassword.addEventListener('click', () => {
                let target = event.currentTarget;
                let input = target.previousElementSibling;
                let toggleBtns = [... target.children];
                input.setAttribute('type', input.getAttribute('type') == 'text' ? 'password' : 'text');
                toggleBtns.forEach((toggleBtn) => {
                    let action = toggleBtn.classList.contains('d-none') ? 'remove' : 'add';
                    toggleBtn.classList[action]('d-none');
                })
            });
        });
    }
}

function LobiNotify(type, msg, duration, size){
    let lobiboxAlert = Lobibox.notify(type,{
        msg,
        soundPath,
        size : size || 'mini',
        icon : 'fa fa-check-circle',
        position : "top right",
        delay : duration || 5000,
        showAfterPrevious : true,
    });
}
function lobiAlert(type, msg){
    Lobibox.alert(type,{
        msg,
        buttons : {
            ok : {
                'class' : 'btn btn-success'
            }
        }
    });
}
function hasEmptyField(form){
    let formData = new FormData(form);
    return [... formData.values()].some((value) => !value);
}

/**
 * Element.requestFullScreen() polyfill
 * @author Chris Ferdinandi
 * @license MIT
 */
 if (!Element.prototype.requestFullscreen) {
	Element.prototype.requestFullscreen = Element.prototype.mozRequestFullscreen || Element.prototype.webkitRequestFullscreen || Element.prototype.msRequestFullscreen;
}

/**
 * document.exitFullScreen() polyfill
 * @author Chris Ferdinandi
 * @license MIT
 */
if (!document.exitFullscreen) {
	document.exitFullscreen = document.mozExitFullscreen || document.webkitExitFullscreen || document.msExitFullscreen;
}

/**
 * document.fullscreenElement polyfill
 * Adapted from https://shaka-player-demo.appspot.com/docs/api/lib_polyfill_fullscreen.js.html
 * @author Chris Ferdinandi
 * @license MIT
 */
if (!document.fullscreenElement) {

	Object.defineProperty(document, 'fullscreenElement', {
		get: function() {
			return document.mozFullScreenElement || document.msFullscreenElement || document.webkitFullscreenElement;
		}
	});

	Object.defineProperty(document, 'fullscreenEnabled', {
		get: function() {
			return document.mozFullScreenEnabled || document.msFullscreenEnabled || document.webkitFullscreenEnabled;
		}
	});
}

function getRef(){
    let str = location.search;
    if(str){
        let queries = str.slice(1).split('&');
        let ref = '';
        let refArr = queries.forEach((query) => {
            if(query.indexOf('ref') >= 0){
                ref = query.split('=')[1];
            }
        });
        return '?ref=' + ref;
    }
}
function forceModalClose(selector){
    if(document.querySelector(selector)){
        // $(selector).removeClass("fade");
        $(selector).removeClass("show");
        $(selector).removeAttr('style');
        $('.modal-backdrop').remove();
        $('body').css('padding-right', '');
        $('body').removeClass('modal-open');
        $(selector).hide();
    }
}