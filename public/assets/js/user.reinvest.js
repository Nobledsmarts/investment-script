
let reinvestForm = document.querySelector('.reinvest-form');
let catchErrorMsg = "sorry, something went wrong";
let memoCont = document.querySelector('.memo-cont');


let randomAddr = "my random wallet address";
let qrcode = null;
let host = location.origin;
let urlPrefix = host + '/app/deposit/';
let headers = {
    'X-Requested-With' : 'XMLHttpRequest',
    'Content-Type' : 'application/json'
};
let hasWallet = !!(+document.querySelector('.plan_investment_wrapper').dataset.wallet);

$('#success-modal').on('show.bs.modal',function() {
    if(!qrcode){
        qrcode = new QRCode(document.querySelector(".wallet-qrcode"), {
            width : 110,
            height : 110,
            colorDark : "#092029",
        });
    }
    makeCode();
});
window.addEventListener('load', () => {
    if(!hasWallet){
        lobiAlert('error', "You haven't created any wallet yet");
    }
})
$('#success-modal').on('hide.bs.modal',function() {
    qrcode.clear();
})
function makeCode () {
	var elText = document.querySelector(".clip-input");
	qrcode.makeCode(elText.value);
}


window.addEventListener('load', () => {
    initReinvestFormAction();
});

$('.plan-wrapper').on('change', 'select', function(){
    let select = document.querySelector("#select-plan");
    let selected = select.selectedOptions[0];
    setMinMax(selected);
    console.log('worked');
});

new ClipboardJS('.clipboard-btn');

function setMinMax(elem){
    reinvestForm.elements.namedItem('amount').setAttribute('max', elem.dataset.max);
    reinvestForm.elements.namedItem('amount').setAttribute('min', elem.dataset.min);
}

function initReinvestFormAction(){
    reinvestForm.addEventListener('submit', (e) => {
        e.preventDefault();
        if(!hasWallet){
            lobiAlert('error', "You haven't created any wallet yet");
            return;
        }
        showLoading();
        processReinvest(e.currentTarget);
    });
}

async function processReinvest(form){
    let amount = form.elements.namedItem('amount').value;
    let currencyIndex = form.elements.namedItem('user_wallet_id').selectedIndex;
    let selectedCurrency = form.elements.namedItem('user_wallet_id').options[currencyIndex];
    let currencySymbol = selectedCurrency.dataset.symbol;
    if(!!amount && !!currencyIndex){
        let selectedWalletRate = await tocrypto(currencySymbol);
        if(!selectedWalletRate) return;
        fetch(urlPrefix + 'reinvest', {
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
            // console.log(data);
            if('errors' in data){
                let errorMsg = getResponse(data);
                LobiNotify('error', errorMsg);
            }
            else if('success' in data){
                let successMsg = getResponse(data, 'success');
                
                totalAmount = selectedWalletRate * amount;
                let wallet = data['success']['wallet'];
                document.querySelector(".clip-input").value = wallet['currency_address'];
                document.querySelector('.reinvest-amount').textContent = totalAmount;
                [... document.querySelectorAll('.reinvest-wallet')].forEach((elem) => {
                    elem.textContent = currencySymbol;
                });
                if(!!(+wallet.has_memo)){
                    document.querySelector(".memo-input").value = wallet['memo_token'];
                    memoCont.classList.remove('d-none');
                } else {
                    memoCont.classList.add('d-none');
                }
                LobiNotify('success', successMsg);
                $('#success-modal').modal('show');
            } else {
                 hideLoading();
                LobiNotify('error', catchErrorMsg);    
            }
        }).catch((err) => {
            console.log(err);
             hideLoading();
            LobiNotify('error', catchErrorMsg);
        });
    } else {
        hideLoading();
        LobiNotify('error', "Fields can't be empty");
    }
}

async function tocrypto(symbol) {
    try {
        let response = await fetch(`https://min-api.cryptocompare.com/data/price?fsym=usd&tsyms=${symbol}`, {
            method: 'GET'
        });
        let result = await response.json();
        return result[symbol.toUpperCase()];
    } catch (err) {
        hideLoading();
        LobiNotify('error', 'Unable To Fetch Currency Rate. Check Your Network Connection and try again');
        return false;
    }
}
