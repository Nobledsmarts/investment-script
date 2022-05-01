let depositBtns = document.querySelectorAll('.deposit-btn');
let depositForm = document.querySelector('.deposit-form');
let catchErrorMsg = "sorry, something went wrong";
let memoCont = document.querySelector('.memo-cont');

// console.log(depositBtns);

let randomAddr = "my random wallet address";
let qrcode = null;
let host = location.origin;
let urlPrefix = host + '/app/deposit/';
let headers = {
    'X-Requested-With' : 'XMLHttpRequest',
    'Content-Type' : 'application/json'
};
// let hasWallet = !!(+document.querySelector('.page-wrapper').dataset.wallet);

$('#success-modal').on('show.bs.modal',function() {
    drawQrCode();
});
function drawQrCode(){
    if(!qrcode){
        qrcode = new QRCode(document.querySelector(".wallet-qrcode"), {
            width : 110,
            height : 110,
            colorDark : "#092029",
        });
    }
    makeCode();
}
$('#success-modal').on('hide.bs.modal',function() {
    qrcode.clear();
})
function makeCode () {
	var elText = document.querySelector(".clip-input");
	qrcode.makeCode(elText.value);
}


window.addEventListener('load', () => {
    initDepositBtnAction();
    initDepositFormAction();
});

$('.plan-wrapper').on('change', 'select', function(){
    let select = document.querySelector("#select-plan");
    let selected = select.selectedOptions[0];
    setMinMax(selected);
    console.log('worked');
});

new ClipboardJS('.clipboard-btn');


function initDepositBtnAction(){
    [... depositBtns].forEach((depositBtn) => {
        depositBtn.addEventListener('click', (e) => {
            e.preventDefault();
            // if(hasWallet){
                showDepositModal(e.currentTarget);
            // } else {
            //     // lobiAlert('error', "You haven't created any wallet yet");
            //     sweetAlert("Oops...","You haven't created any wallet yet","error")
            // }
        })
    });
}

function handleBtnAction(btn){
    let action = clickedBtn.dataset.action;
    if(action == 'edit'){
        isEdit = true;
        let dataset = {... clickedBtn.dataset};
        for(key in dataset){
            if(depositForm.elements.namedItem(key)){
                depositForm.elements.namedItem(key).value = dataset[key].toLowerCase();
            }
        }
        // $('#has-memo').niceSelect('update');
        toggleMemoCont();
        // drawQrCode();
        $('#wallet-modal').modal({
            fadeDuration: 100,
            closeClass: 'icon-remove',
            closeText: '&times'
          });
    } else if(walletMsgs.hasOwnProperty(action)){
        doActionConfirm(action);
    }
}
function setMinMax(elem){
    depositForm.elements.namedItem('amount').setAttribute('max', elem.dataset.max);
    depositForm.elements.namedItem('amount').setAttribute('min', elem.dataset.min);
}
function showDepositModal(elem){
    depositForm.elements.namedItem('child_plan_id').value = elem.dataset.plan;
    setMinMax(elem);
    // $('#select-plan').niceSelect('update');
    // drawQrCode();
    // alert('showing');
    $('#deposit-modal').modal({
            fadeDuration: 100,
            closeClass: 'icon-remove',
            closeText: '&times'
          });
}

function initDepositFormAction(){
    depositForm.addEventListener('submit', (e) => {
        e.preventDefault();
        showLoading();
        processDeposit(e.currentTarget);
    });
}

async function processDeposit(form){
    let amount = form.elements.namedItem('amount').value;
    let currencyIndex = form.elements.namedItem('wallet_id').selectedIndex;
    let selectedCurrency = form.elements.namedItem('wallet_id').options[currencyIndex];
    let currencySymbol = selectedCurrency.dataset.symbol;
    if(!!amount && !!currencyIndex){
        let selectedWalletRate = await tocrypto(currencySymbol);
        if(!selectedWalletRate) return [hideLoading(), sweetAlert("Oops...","Unable to fetch currency rate","error")];
        fetch(urlPrefix + 'create', {
            method : 'post',
            headers,
            body : JSON.stringify({
                ...jsonFormData(form)
            })
        }).then((res) => {
            hideLoading();
            return res.json();
            // return res.text();
        })
        .then((data) => {
            console.log(data);
            if('errors' in data){
                let errorMsg = getResponse(data);
                // LobiNotify('error', errorMsg);
                sweetAlert("Oops...",errorMsg,"error")
            }
            else if('success' in data){
                let successMsg = getResponse(data, 'success');
                totalAmount = selectedWalletRate * amount;
                let wallet = data['success']['wallet'];
                document.querySelector(".clip-input").value = wallet['currency_address'];
                document.querySelector('.deposit-amount').textContent = totalAmount;
                [... document.querySelectorAll('.deposit-wallet')].forEach((elem) => {
                    elem.textContent = currencySymbol;
                });
                if(!!(+wallet.has_memo)){
                    document.querySelector(".memo-input").value = wallet['memo_token'];
                    memoCont.classList.remove('d-none');
                } else {
                    memoCont.classList.add('d-none');
                }
                // LobiNotify('success', successMsg);
                drawQrCode();
                $('#success-modal').modal({
                    fadeDuration: 100,
                    closeClass: 'icon-remove',
                    closeText: '&times'
                });
            } else {
                 hideLoading();
                // LobiNotify('error', catchErrorMsg);   
                sweetAlert("Oops...",catchErrorMsg,"error")

            }
        }).catch((err) => {
            console.log(err);
             hideLoading();
            // LobiNotify('error', catchErrorMsg);
            sweetAlert("Oops...",catchErrorMsg,"error")

        });
    } else {
        hideLoading();
        // LobiNotify('error', "Fields can't be empty");
        sweetAlert("Oops...","Fields can't be empty","error")

    }
}

async function tocrypto(symbol) {
    try {
        // let response = await fetch(`https://min-api.cryptocompare.com/data/price?fsym=usd&tsyms=${symbol}`, {
        //     method: 'GET'
        // });
        // let result = await response.json();
        // return result[symbol.toUpperCase()];
        return 12;
    } catch {
        return false;
    }
}
