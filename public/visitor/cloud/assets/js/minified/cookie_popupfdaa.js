(function(c){function d(){var e=typeof domainName==="undefined"?cookieDomain:domainName;var h="xmcplc";var f="xmck_";var g=[];this.setCookie=function(j,l,m){var k=f+j||h;l=l||"1";m=m||180;if(c.cookie(k)!==l){c.cookie(k,l,{expires:m,path:"/",domain:e});if(window.location.hostname==="localhost"){c.cookie(k,l,{expires:m,path:"/",domain:"localhost"})}if(typeof dataLayer!=="undefined"&&Array.isArray(dataLayer)&&parseInt(l)===1){var i=k+"_on";if(c.inArray(i,g)===-1){dataLayer.push({event:i});g.push(i)}}}};this.getCookie=function(j,i){var k=!!i?j:f+j||h;return c.cookie(k)}}function b(g){var e=this;var f={functional:true,analytical:false,promotional:false,preferences:false};this.onDataChanged=function(){};this.onSave=function(){};this.setCookiePart=function(h,j,i){var k={};k[h]=j;this.setData(k,i)};this.setData=function(i,k){var h=false;for(var j in i){if(f.hasOwnProperty(j)){f[j]=!!i[j];h=true}}if(h){if(k){this.save()}this.onDataChanged()}};this.enableAll=function(h){this.setData({functional:true,analytical:true,promotional:true,preferences:true},h)};this.isEnabledAll=function(){for(var h in this.getData()){if(!this.get(h)){return false}}return true};this.getData=function(){return f};this.has=function(h){return f.hasOwnProperty(h)};this.get=function(h){return f[h]};this.save=function(h){Object.keys(this.getData()).forEach(function(i){var j=i;if(!h||g.getCookie(j)===null){g.setCookie(j,e.get(i)?"1":"0")}});this.onSave()};this.load=function(){var h={};Object.keys(this.getData()).forEach(function(i){var j=g.getCookie(i);if(j!==null){h[i]=g.getCookie(i)==="1"}});h.functional=true;this.setData(h)}}function a(l,g){var m=this;var h=false;var i=c(document);var f="popupShown";var n=c("#cookieModal");var j="riskWarningBarDisplay";var k=navigator.userAgent.toLowerCase().match(/mobile/i);var e=c("#risk-block span").hasClass("js-esmaRiskMsg");l.load();l.save(true);l.onDataChanged=function(){if(!h){h=true;m.refreshInputs();h=false}};l.onSave=function(){m.displayBottomPanel(!l.isEnabledAll())};n.on("hidden.bs.modal",function(){m.displayBottomPanel(!l.isEnabledAll())});i.on("click",".js-cookieCheckList input[type=checkbox]",function(o){l.setCookiePart(o.target.dataset.cookiesParts,o.target.checked)});i.on("click",".js-saveCookie",function(){l.save();m.setPopupShown()});i.on("click","#js-changeModalSettings",function(){c(".cookie-modal__defaultBlock").hide();c(".cookie-modal__settingBlock").fadeIn()});i.on("click",".js-showModalCookieGeneral",function(){m.displayPopup(true)});i.on("click",".js-showModalCookieSettings",function(){m.displayPopup(true);c(".cookie-modal__defaultBlock").hide();c(".cookie-modal__settingBlock").fadeIn();c('.cookie-modalTabs a[href="#changeSettings"]').tab("show")});i.on("click","#js-cookieBarCloseButton",function(){m.displayBottomPanel(false)});i.on("click","#accept_default_cookie,  .js-acceptDefaultCookie",function(o){o.preventDefault();l.enableAll(true);m.displayPopup(false);m.setPopupShown()});if(k&&e){i.on("click","#js-riskCloseButton",function(){var o=c("#js-riskCloseButton").attr("class");var p;if(o==="minimise"){p=1}else{if((o==="minimise up")){p=2}}m.setRiskWarningBarDisplayCookie(p)})}n.addClass("js-cookie-popup-loaded");this.refreshInputs=function(){try{c(".js-cookieCheckList input[type=checkbox]").each(function(p,r){var q=r.dataset.cookiesParts;if(l.has(q)){r.checked=l.get(q)}})}catch(o){console.log("Error",o)}};this.displayPopup=function(o){if(typeof isXmauPopupDisplayed==="function"&&isXmauPopupDisplayed()){return}if(o){n.modal({backdrop:"static",keyboard:false,show:true});m.displayBottomPanel(false)}else{n.modal({backdrop:"static",keyboard:false,show:false})}};this.setPopupShown=function(){g.setCookie(f,"1")};this.setRiskWarningBarDisplayCookie=function(o){g.setCookie(j,o,14)};this.isRiskWarningBarDisplayCookieSet=function(){return g.getCookie(j)==="1"||g.getCookie(j)==="2"};this.getRiskWarningBarDisplayCookie=function(){return g.getCookie(j)};this.isPopupShown=function(){return g.getCookie(f)==="1"};this.displayBottomPanel=function(o){if(o){c("#cookies-block").show();c("#js-cookieBarHeight").show()}else{c("#cookies-block").hide();c("#js-cookieBarHeight").hide()}};this.isMobile=function(){return k};this.isEsma=function(){return e};this.displayRiskWarningBar=function(o){if(o==="2"){c("#js-riskCloseButton").addClass("minimise up");c(this).toggleClass("up");c("#risk-block span.js-esmaRiskMsg").toggle()}else{if(o==="1"){c("#js-riskCloseButton").removeClass("minimise up");c("#js-riskCloseButton").addClass("minimise")}}}}c(document).ready(function(){function f(){var i=new d();var g=new b(i);var h=new a(g,i);h.refreshInputs();h.displayBottomPanel(!g.isEnabledAll());h.displayPopup(!g.isEnabledAll()&&!h.isPopupShown());if(h.isRiskWarningBarDisplayCookieSet()&&h.isMobile()&&h.isEsma()){h.displayRiskWarningBar(h.getRiskWarningBarDisplayCookie())}}var e=setInterval(function(){if(typeof c().modal==="function"&&typeof c.cookie==="function"){clearInterval(e);f()}},100)})})(jQuery);