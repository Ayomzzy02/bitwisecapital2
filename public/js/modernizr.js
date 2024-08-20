window.Modernizr=function(r,u,a){function t(e){h.cssText=e}function i(e,t){return typeof e===t}function o(e,t){return!!~(""+e).indexOf(t)}function c(e,t){for(var n in e){var r=e[n];if(!o(r,"-")&&h[r]!==a)return"pfx"!=t||r}return!1}function s(e,t,n){var r=e.charAt(0).toUpperCase()+e.slice(1),o=(e+" "+w.join(r+" ")+r).split(" ");return i(t,"string")||void 0===t?c(o,t):function(e,t,n){for(var r in e){var o=t[e[r]];if(o!==a)return!1===n?e[r]:i(o,"function")?o.bind(n||t):o}return!1}(o=(e+" "+x.join(r+" ")+r).split(" "),t,n)}function e(e,t,n,r){var o,i,a,c=u.createElement("div"),s=u.body,l=s||u.createElement("body");if(parseInt(n,10))for(;n--;)(i=u.createElement("div")).id=r?r[n]:m+(n+1),c.appendChild(i);return o=["&#173;",'<style id="s',m,'">',e,"</style>"].join(""),c.id=m,(s?c:l).innerHTML+=o,l.appendChild(c),s||(l.style.background="",l.style.overflow="hidden",a=p.style.overflow,p.style.overflow="hidden",p.appendChild(l)),e=t(c,e),s?c.parentNode.removeChild(c):(l.parentNode.removeChild(l),p.style.overflow=a),!!e}var n,l,d,f={},p=u.documentElement,m="modernizr",h=u.createElement(m).style,g=u.createElement("input"),v=":)",y={}.toString,b=" -webkit- -moz- -o- -ms- ".split(" "),E="Webkit Moz O ms",w=E.split(" "),x=E.toLowerCase().split(" "),S="http://www.w3.org/2000/svg",C={},k={},T={},j=[],N=j.slice,P=(l={select:"input",change:"input",submit:"form",reset:"form",error:"img",load:"img",abort:"img"},function(e,t){t=t||u.createElement(l[e]||"div");var n=(e="on"+e)in t;return n||(t.setAttribute||(t=u.createElement("div")),t.setAttribute&&t.removeAttribute&&(t.setAttribute(e,""),n=i(t[e],"function"),void 0===t[e]||(t[e]=a),t.removeAttribute(e))),t=null,n}),M={}.hasOwnProperty,A=void 0!==M&&void 0!==M.call?function(e,t){return M.call(e,t)}:function(e,t){return t in e&&void 0===e.constructor.prototype[t]};for(d in Function.prototype.bind||(Function.prototype.bind=function(n){var r=this;if("function"!=typeof r)throw new TypeError;var o=N.call(arguments,1),i=function(){if(this instanceof i){var e=function(){};e.prototype=r.prototype;var t=new e,e=r.apply(t,o.concat(N.call(arguments)));return Object(e)===e?e:t}return r.apply(n,o.concat(N.call(arguments)))};return i}),C.flexbox=function(){return s("flexWrap")},C.canvas=function(){var e=u.createElement("canvas");return!!e.getContext&&!!e.getContext("2d")},C.canvastext=function(){return!!f.canvas&&!!i(u.createElement("canvas").getContext("2d").fillText,"function")},C.webgl=function(){return!!r.WebGLRenderingContext},C.touch=function(){var t;return"ontouchstart"in r||r.DocumentTouch&&u instanceof DocumentTouch?t=!0:e(["@media (",b.join("touch-enabled),("),m,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(e){t=9===e.offsetTop}),t},C.geolocation=function(){return"geolocation"in navigator},C.postmessage=function(){return!!r.postMessage},C.websqldatabase=function(){return!!r.openDatabase},C.indexedDB=function(){return!!s("indexedDB",r)},C.hashchange=function(){return P("hashchange",r)&&(u.documentMode===a||7<u.documentMode)},C.history=function(){return!!r.history&&!!history.pushState},C.draganddrop=function(){var e=u.createElement("div");return"draggable"in e||"ondragstart"in e&&"ondrop"in e},C.websockets=function(){return"WebSocket"in r||"MozWebSocket"in r},C.rgba=function(){return t("background-color:rgba(150,255,150,.5)"),o(h.backgroundColor,"rgba")},C.hsla=function(){return t("background-color:hsla(120,40%,100%,.5)"),o(h.backgroundColor,"rgba")||o(h.backgroundColor,"hsla")},C.multiplebgs=function(){return t("background:url(https://),url(https://),red url(https://)"),/(url\s*\(.*?){3}/.test(h.background)},C.backgroundsize=function(){return s("backgroundSize")},C.borderimage=function(){return s("borderImage")},C.borderradius=function(){return s("borderRadius")},C.boxshadow=function(){return s("boxShadow")},C.textshadow=function(){return""===u.createElement("div").style.textShadow},C.opacity=function(){return t(b.join("opacity:.55;")+""),/^0.55$/.test(h.opacity)},C.cssanimations=function(){return s("animationName")},C.csscolumns=function(){return s("columnCount")},C.cssgradients=function(){var e="background-image:";return t((e+"-webkit- ".split(" ").join("gradient(linear,left top,right bottom,from(#9f9),to(white));"+e)+b.join("linear-gradient(left top,#9f9, white);"+e)).slice(0,-e.length)),o(h.backgroundImage,"gradient")},C.cssreflections=function(){return s("boxReflect")},C.csstransforms=function(){return!!s("transform")},C.csstransforms3d=function(){var n=!!s("perspective");return n&&"webkitPerspective"in p.style&&e("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(e,t){n=9===e.offsetLeft&&3===e.offsetHeight}),n},C.csstransitions=function(){return s("transition")},C.fontface=function(){var r;return e('@font-face {font-family:"font";src:url("https://")}',function(e,t){var n=u.getElementById("smodernizr"),n=n.sheet||n.styleSheet,n=n?n.cssRules&&n.cssRules[0]?n.cssRules[0].cssText:n.cssText||"":"";r=/src/i.test(n)&&0===n.indexOf(t.split(" ")[0])}),r},C.generatedcontent=function(){var t;return e(["#",m,"{font:0/0 a}#",m,':after{content:"',v,'";visibility:hidden;font:3px/1 a}'].join(""),function(e){t=3<=e.offsetHeight}),t},C.video=function(){var e=u.createElement("video"),t=!1;try{(t=!!e.canPlayType)&&((t=new Boolean(t)).ogg=e.canPlayType('video/ogg; codecs="theora"').replace(/^no$/,""),t.h264=e.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,""),t.webm=e.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/,""))}catch(e){}return t},C.audio=function(){var e=u.createElement("audio"),t=!1;try{(t=!!e.canPlayType)&&((t=new Boolean(t)).ogg=e.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/,""),t.mp3=e.canPlayType("audio/mpeg;").replace(/^no$/,""),t.wav=e.canPlayType('audio/wav; codecs="1"').replace(/^no$/,""),t.m4a=(e.canPlayType("audio/x-m4a;")||e.canPlayType("audio/aac;")).replace(/^no$/,""))}catch(e){}return t},C.localstorage=function(){try{return localStorage.setItem(m,m),localStorage.removeItem(m),!0}catch(e){return!1}},C.sessionstorage=function(){try{return sessionStorage.setItem(m,m),sessionStorage.removeItem(m),!0}catch(e){return!1}},C.webworkers=function(){return!!r.Worker},C.applicationcache=function(){return!!r.applicationCache},C.svg=function(){return!!u.createElementNS&&!!u.createElementNS(S,"svg").createSVGRect},C.inlinesvg=function(){var e=u.createElement("div");return e.innerHTML="<svg/>",(e.firstChild&&e.firstChild.namespaceURI)==S},C.smil=function(){return!!u.createElementNS&&/SVGAnimate/.test(y.call(u.createElementNS(S,"animate")))},C.svgclippaths=function(){return!!u.createElementNS&&/SVGClipPath/.test(y.call(u.createElementNS(S,"clipPath")))},C)A(C,d)&&(n=d.toLowerCase(),f[n]=C[d](),j.push((f[n]?"":"no-")+n));return f.input||(f.input=function(e){for(var t=0,n=e.length;t<n;t++)T[e[t]]=e[t]in g;return T.list&&(T.list=!!u.createElement("datalist")&&!!r.HTMLDataListElement),T}("autocomplete autofocus list placeholder max min multiple pattern required step".split(" ")),f.inputtypes=function(e){for(var t,n,r,o=0,i=e.length;o<i;o++)g.setAttribute("type",n=e[o]),(t="text"!==g.type)&&(g.value=v,g.style.cssText="position:absolute;visibility:hidden;",/^range$/.test(n)&&g.style.WebkitAppearance!==a?(p.appendChild(g),t=(r=u.defaultView).getComputedStyle&&"textfield"!==r.getComputedStyle(g,null).WebkitAppearance&&0!==g.offsetHeight,p.removeChild(g)):/^(search|tel)$/.test(n)||(t=/^(url|email)$/.test(n)?g.checkValidity&&!1===g.checkValidity():g.value!=v)),k[e[o]]=!!t;return k}("search tel url email datetime date month week time datetime-local number range color".split(" "))),f.addTest=function(e,t){if("object"==typeof e)for(var n in e)A(e,n)&&f.addTest(n,e[n]);else{if(e=e.toLowerCase(),f[e]!==a)return f;t="function"==typeof t?t():t,p.className+=" "+(t?"":"no-")+e,f[e]=t}return f},t(""),g=null,function(e,c){function s(){var e=m.elements;return"string"==typeof e?e.split(" "):e}function l(e){var t=p[e[i]];return t||(t={},a++,e[i]=a,p[a]=t),t}function u(e,t,n){return t=t||c,f?t.createElement(e):!(t=(n=n||l(t)).cache[e]?n.cache[e].cloneNode():o.test(e)?(n.cache[e]=n.createElem(e)).cloneNode():n.createElem(e)).canHaveChildren||r.test(e)||t.tagUrn?t:n.frag.appendChild(t)}function t(e){var t,n,r,o,i,a=l(e=e||c);return!m.shivCSS||d||a.hasCSS||(a.hasCSS=(o="article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}",i=(r=e).createElement("p"),r=r.getElementsByTagName("head")[0]||r.documentElement,i.innerHTML="x<style>"+o+"</style>",!!r.insertBefore(i.lastChild,r.firstChild))),f||(t=e,(n=a).cache||(n.cache={},n.createElem=t.createElement,n.createFrag=t.createDocumentFragment,n.frag=n.createFrag()),t.createElement=function(e){return m.shivMethods?u(e,t,n):n.createElem(e)},t.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+s().join().replace(/[\w\-]+/g,function(e){return n.createElem(e),n.frag.createElement(e),'c("'+e+'")'})+");return n}")(m,n.frag)),e}var d,f,n=e.html5||{},r=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,o=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,i="_html5shiv",a=0,p={};!function(){try{var e=c.createElement("a");e.innerHTML="<xyz></xyz>",d="hidden"in e,f=1==e.childNodes.length||function(){c.createElement("a");var e=c.createDocumentFragment();return void 0===e.cloneNode||void 0===e.createDocumentFragment||void 0===e.createElement}()}catch(e){f=d=!0}}();var m={elements:n.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",version:"3.7.0",shivCSS:!1!==n.shivCSS,supportsUnknownElements:f,shivMethods:!1!==n.shivMethods,type:"default",shivDocument:t,createElement:u,createDocumentFragment:function(e,t){if(e=e||c,f)return e.createDocumentFragment();for(var n=(t=t||l(e)).frag.cloneNode(),r=0,o=s(),i=o.length;r<i;r++)n.createElement(o[r]);return n}};e.html5=m,t(c)}(this,u),f._version="2.8.3",f._prefixes=b,f._domPrefixes=x,f._cssomPrefixes=w,f.hasEvent=P,f.testProp=function(e){return c([e])},f.testAllProps=s,f.testStyles=e,f.prefixed=function(e,t,n){return t?s(e,t,n):s(e,"pfx")},p.className=p.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(" js "+j.join(" ")),f}(this,this.document),function(e,p){function d(e){return"[object Function]"==o.call(e)}function m(e){return"string"==typeof e}function f(){}function h(e){return!e||"loaded"==e||"complete"==e||"uninitialized"==e}function g(){var e=b.shift();E=1,e?e.t?v(function(){("c"==e.t?T.injectCss:T.injectJs)(e.s,0,e.a,e.x,e.e,1)},0):(e(),g()):E=0}function t(e,t,n,r,o){return E=0,t=t||"j",m(e)?(a="c"==t?C:S,c=e,s=t,t=this.i++,n=n,r=r,o=(o=o)||T.errorTimeout,l=p.createElement(a),d=u=0,f={t:s,s:c,e:n,a:r,x:o},1===k[c]&&(d=1,k[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){i.call(this,d)},b.splice(t,0,f),"img"!=a&&(d||2===k[c]?(x.insertBefore(l,w?null:y),v(i,o)):k[c].push(l))):(b.splice(this.i++,0,e),1==b.length&&g()),this;function i(e){if(!u&&h(l.readyState)&&(f.r=u=1,E||g(),l.onload=l.onreadystatechange=null,e))for(var t in"img"!=a&&v(function(){x.removeChild(l)},50),k[c])k[c].hasOwnProperty(t)&&k[c][t].onload()}var a,c,s,l,u,d,f}function c(){var e=T;return e.loader={load:t,i:0},e}var n,r=p.documentElement,v=e.setTimeout,y=p.getElementsByTagName("script")[0],o={}.toString,b=[],E=0,i="MozAppearance"in r.style,w=i&&!!p.createRange().compareNode,x=w?r:y.parentNode,r=e.opera&&"[object Opera]"==o.call(e.opera),r=!!p.attachEvent&&!r,S=i?"object":r?"script":"img",C=r?"script":S,a=Array.isArray||function(e){return"[object Array]"==o.call(e)},s=[],k={},l={timeout:function(e,t){return t.length&&(e.timeout=t[0]),e}},T=function(e){function u(e,t,n,r,o){var i=function(e){for(var t,n,e=e.split("!"),r=s.length,o=e.pop(),i=e.length,o={url:o,origUrl:o,prefixes:e},a=0;a<i;a++)n=e[a].split("="),(t=l[n.shift()])&&(o=t(o,n));for(a=0;a<r;a++)o=s[a](o);return o}(e),a=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(t=t&&(d(t)?t:t[e]||t[r]||t[e.split("/").pop().split("?")[0]]),i.instead?i.instead(e,t,n,r,o):(k[i.url]?i.noexec=!0:k[i.url]=1,n.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":void 0,i.noexec,i.attrs,i.timeout),(d(t)||d(a))&&n.load(function(){c(),t&&t(i.origUrl,o,r),a&&a(i.origUrl,o,r),k[i.url]=2})))}function t(e,t){function n(n,e){if(n){if(m(n))e||(c=function(){var e=[].slice.call(arguments);s.apply(this,e),l()}),u(n,c,t,0,i);else if(Object(n)===n)for(o in r=function(){var e,t=0;for(e in n)n.hasOwnProperty(e)&&t++;return t}(),n)n.hasOwnProperty(o)&&(e||--r||(d(c)?c=function(){var e=[].slice.call(arguments);s.apply(this,e),l()}:c[o]=function(t){return function(){var e=[].slice.call(arguments);t&&t.apply(this,e),l()}}(s[o])),u(n[o],c,t,o,i))}else e||l()}var r,o,i=!!e.test,a=e.load||e.both,c=e.callback||f,s=c,l=e.complete||f;n(i?e.yep:e.nope,!!a),a&&n(a)}var n,r,o=this.yepnope.loader;if(m(e))u(e,0,o,0);else if(a(e))for(n=0;n<e.length;n++)m(r=e[n])?u(r,0,o,0):a(r)?T(r):Object(r)===r&&t(r,o);else Object(e)===e&&t(e,o)};T.addPrefix=function(e,t){l[e]=t},T.addFilter=function(e){s.push(e)},T.errorTimeout=1e4,null==p.readyState&&p.addEventListener&&(p.readyState="loading",p.addEventListener("DOMContentLoaded",n=function(){p.removeEventListener("DOMContentLoaded",n,0),p.readyState="complete"},0)),e.yepnope=c(),e.yepnope.executeStack=g,e.yepnope.injectJs=function(e,t,n,r,o,i){var a,c,s=p.createElement("script"),r=r||T.errorTimeout;for(c in s.src=e,n)s.setAttribute(c,n[c]);t=i?g:t||f,s.onreadystatechange=s.onload=function(){!a&&h(s.readyState)&&(a=1,t(),s.onload=s.onreadystatechange=null)},v(function(){a||t(a=1)},r),o?s.onload():y.parentNode.insertBefore(s,y)},e.yepnope.injectCss=function(e,t,n,r,o,i){var a,t=i?g:t||f;for(a in(r=p.createElement("link")).href=e,r.rel="stylesheet",r.type="text/css",n)r.setAttribute(a,n[a]);o||(y.parentNode.insertBefore(r,y),v(t,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};