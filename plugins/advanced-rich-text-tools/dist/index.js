parcelRequire=function(e,r,n,t){var i="function"==typeof parcelRequire&&parcelRequire,o="function"==typeof require&&require;function u(n,t){if(!r[n]){if(!e[n]){var f="function"==typeof parcelRequire&&parcelRequire;if(!t&&f)return f(n,!0);if(i)return i(n,!0);if(o&&"string"==typeof n)return o(n);var c=new Error("Cannot find module '"+n+"'");throw c.code="MODULE_NOT_FOUND",c}p.resolve=function(r){return e[n][1][r]||r},p.cache={};var l=r[n]=new u.Module(n);e[n][0].call(l.exports,p,l,l.exports,this)}return r[n].exports;function p(e){return u(p.resolve(e))}}u.isParcelRequire=!0,u.Module=function(e){this.id=e,this.bundle=u,this.exports={}},u.modules=e,u.cache=r,u.parent=i,u.register=function(r,n){e[r]=[function(e,r){r.exports=n},{}]};for(var f=0;f<n.length;f++)u(n[f]);if(n.length){var c=u(n[n.length-1]);"object"==typeof exports&&"undefined"!=typeof module?module.exports=c:"function"==typeof define&&define.amd?define(function(){return c}):t&&(this[t]=c)}return u}({"DWv3":[function(require,module,exports) {
var e=window.wp.element,t=e.createElement,o=e.Fragment,r=window.wp.richText,c=r.registerFormatType,i=r.unregisterFormatType,n=r.toggleFormat,a=window.wp.i18n.__,l=window.wp.editor,s=l.RichTextToolbarButton,d=l.RichTextShortcut,u="core/code";i(u),c(u,{title:a("Code"),tagName:"code",className:null,edit:function(e){var r=e.isActive,c=e.value,i=e.onChange,l=function(){return i(n(c,{type:u}))};return t(o,null,t(d,{type:"access",character:"x",onUse:l}),t(s,{icon:"editor-code",title:a("Code"),onClick:l,isActive:r,shortcutType:"access",shortcutCharacter:"x"}))}});
},{}],"kql1":[function(require,module,exports) {

var e=module.exports="undefined"!=typeof window&&window.Math==Math?window:"undefined"!=typeof self&&self.Math==Math?self:Function("return this")();"number"==typeof __g&&(__g=e);
},{}],"6SP6":[function(require,module,exports) {
module.exports=function(o){return"object"==typeof o?null!==o:"function"==typeof o};
},{}],"DBsB":[function(require,module,exports) {
var r=require("./_is-object");module.exports=function(e){if(!r(e))throw TypeError(e+" is not an object!");return e};
},{"./_is-object":"6SP6"}],"L6p4":[function(require,module,exports) {
module.exports=function(o){if("function"!=typeof o)throw TypeError(o+" is not a function!");return o};
},{}],"N9ch":[function(require,module,exports) {
var r=require("./_a-function");module.exports=function(n,t,u){if(r(n),void 0===t)return n;switch(u){case 1:return function(r){return n.call(t,r)};case 2:return function(r,u){return n.call(t,r,u)};case 3:return function(r,u,e){return n.call(t,r,u,e)}}return function(){return n.apply(t,arguments)}};
},{"./_a-function":"L6p4"}],"Blc0":[function(require,module,exports) {
exports.f={}.propertyIsEnumerable;
},{}],"B9+e":[function(require,module,exports) {
module.exports=function(e,r){return{enumerable:!(1&e),configurable:!(2&e),writable:!(4&e),value:r}};
},{}],"viv7":[function(require,module,exports) {
var r={}.toString;module.exports=function(t){return r.call(t).slice(8,-1)};
},{}],"kZKK":[function(require,module,exports) {
var e=require("./_cof");module.exports=Object("z").propertyIsEnumerable(0)?Object:function(r){return"String"==e(r)?r.split(""):Object(r)};
},{"./_cof":"viv7"}],"Zcur":[function(require,module,exports) {
module.exports=function(o){if(null==o)throw TypeError("Can't call method on  "+o);return o};
},{}],"mwRI":[function(require,module,exports) {
var e=require("./_iobject"),r=require("./_defined");module.exports=function(i){return e(r(i))};
},{"./_iobject":"kZKK","./_defined":"Zcur"}],"PUNq":[function(require,module,exports) {
var t=require("./_is-object");module.exports=function(r,e){if(!t(r))return r;var o,n;if(e&&"function"==typeof(o=r.toString)&&!t(n=o.call(r)))return n;if("function"==typeof(o=r.valueOf)&&!t(n=o.call(r)))return n;if(!e&&"function"==typeof(o=r.toString)&&!t(n=o.call(r)))return n;throw TypeError("Can't convert object to primitive value")};
},{"./_is-object":"6SP6"}],"nW2g":[function(require,module,exports) {
var r={}.hasOwnProperty;module.exports=function(e,n){return r.call(e,n)};
},{}],"e5T+":[function(require,module,exports) {
module.exports=function(r){try{return!!r()}catch(r){return!0}};
},{}],"ZJLI":[function(require,module,exports) {
module.exports=!require("./_fails")(function(){return 7!=Object.defineProperty({},"a",{get:function(){return 7}}).a});
},{"./_fails":"e5T+"}],"dDni":[function(require,module,exports) {
var e=require("./_is-object"),r=require("./_global").document,t=e(r)&&e(r.createElement);module.exports=function(e){return t?r.createElement(e):{}};
},{"./_is-object":"6SP6","./_global":"kql1"}],"UUWM":[function(require,module,exports) {
module.exports=!require("./_descriptors")&&!require("./_fails")(function(){return 7!=Object.defineProperty(require("./_dom-create")("div"),"a",{get:function(){return 7}}).a});
},{"./_descriptors":"ZJLI","./_fails":"e5T+","./_dom-create":"dDni"}],"SFON":[function(require,module,exports) {
var e=require("./_object-pie"),r=require("./_property-desc"),i=require("./_to-iobject"),t=require("./_to-primitive"),o=require("./_has"),c=require("./_ie8-dom-define"),u=Object.getOwnPropertyDescriptor;exports.f=require("./_descriptors")?u:function(p,q){if(p=i(p),q=t(q,!0),c)try{return u(p,q)}catch(e){}if(o(p,q))return r(!e.f.call(p,q),p[q])};
},{"./_object-pie":"Blc0","./_property-desc":"B9+e","./_to-iobject":"mwRI","./_to-primitive":"PUNq","./_has":"nW2g","./_ie8-dom-define":"UUWM","./_descriptors":"ZJLI"}],"Epal":[function(require,module,exports) {
var t=require("./_is-object"),e=require("./_an-object"),r=function(r,o){if(e(r),!t(o)&&null!==o)throw TypeError(o+": can't set as prototype!")};module.exports={set:Object.setPrototypeOf||("__proto__"in{}?function(t,e,o){try{(o=require("./_ctx")(Function.call,require("./_object-gopd").f(Object.prototype,"__proto__").set,2))(t,[]),e=!(t instanceof Array)}catch(t){e=!0}return function(t,c){return r(t,c),e?t.__proto__=c:o(t,c),t}}({},!1):void 0),check:r};
},{"./_is-object":"6SP6","./_an-object":"DBsB","./_ctx":"N9ch","./_object-gopd":"SFON"}],"oEgy":[function(require,module,exports) {
var t=require("./_is-object"),o=require("./_set-proto").set;module.exports=function(r,e,p){var u,n=e.constructor;return n!==p&&"function"==typeof n&&(u=n.prototype)!==p.prototype&&t(u)&&o&&o(r,u),r};
},{"./_is-object":"6SP6","./_set-proto":"Epal"}],"/+wv":[function(require,module,exports) {
var e=require("./_an-object"),r=require("./_ie8-dom-define"),t=require("./_to-primitive"),i=Object.defineProperty;exports.f=require("./_descriptors")?Object.defineProperty:function(o,n,u){if(e(o),n=t(n,!0),e(u),r)try{return i(o,n,u)}catch(e){}if("get"in u||"set"in u)throw TypeError("Accessors not supported!");return"value"in u&&(o[n]=u.value),o};
},{"./_an-object":"DBsB","./_ie8-dom-define":"UUWM","./_to-primitive":"PUNq","./_descriptors":"ZJLI"}],"cHfm":[function(require,module,exports) {
var o=Math.ceil,r=Math.floor;module.exports=function(t){return isNaN(t=+t)?0:(t>0?r:o)(t)};
},{}],"HdKs":[function(require,module,exports) {
var e=require("./_to-integer"),r=Math.min;module.exports=function(t){return t>0?r(e(t),9007199254740991):0};
},{"./_to-integer":"cHfm"}],"AXg2":[function(require,module,exports) {
var e=require("./_to-integer"),r=Math.max,t=Math.min;module.exports=function(n,a){return(n=e(n))<0?r(n+a,0):t(n,a)};
},{"./_to-integer":"cHfm"}],"/dIP":[function(require,module,exports) {
var e=require("./_to-iobject"),r=require("./_to-length"),t=require("./_to-absolute-index");module.exports=function(n){return function(i,o,u){var f,l=e(i),a=r(l.length),c=t(u,a);if(n&&o!=o){for(;a>c;)if((f=l[c++])!=f)return!0}else for(;a>c;c++)if((n||c in l)&&l[c]===o)return n||c||0;return!n&&-1}};
},{"./_to-iobject":"mwRI","./_to-length":"HdKs","./_to-absolute-index":"AXg2"}],"4KVo":[function(require,module,exports) {
var e=module.exports={version:"2.5.7"};"number"==typeof __e&&(__e=e);
},{}],"Nw1e":[function(require,module,exports) {
module.exports=!1;
},{}],"8sTG":[function(require,module,exports) {

var r=require("./_core"),e=require("./_global"),o="__core-js_shared__",i=e[o]||(e[o]={});(module.exports=function(r,e){return i[r]||(i[r]=void 0!==e?e:{})})("versions",[]).push({version:r.version,mode:require("./_library")?"pure":"global",copyright:"© 2018 Denis Pushkarev (zloirock.ru)"});
},{"./_core":"4KVo","./_global":"kql1","./_library":"Nw1e"}],"f0sk":[function(require,module,exports) {
var o=0,t=Math.random();module.exports=function(n){return"Symbol(".concat(void 0===n?"":n,")_",(++o+t).toString(36))};
},{}],"xSc0":[function(require,module,exports) {
var e=require("./_shared")("keys"),r=require("./_uid");module.exports=function(u){return e[u]||(e[u]=r(u))};
},{"./_shared":"8sTG","./_uid":"f0sk"}],"UrZ8":[function(require,module,exports) {
var r=require("./_has"),e=require("./_to-iobject"),u=require("./_array-includes")(!1),i=require("./_shared-key")("IE_PROTO");module.exports=function(o,a){var n,s=e(o),t=0,h=[];for(n in s)n!=i&&r(s,n)&&h.push(n);for(;a.length>t;)r(s,n=a[t++])&&(~u(h,n)||h.push(n));return h};
},{"./_has":"nW2g","./_to-iobject":"mwRI","./_array-includes":"/dIP","./_shared-key":"xSc0"}],"t611":[function(require,module,exports) {
module.exports="constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf".split(",");
},{}],"yyy+":[function(require,module,exports) {
var e=require("./_object-keys-internal"),r=require("./_enum-bug-keys").concat("length","prototype");exports.f=Object.getOwnPropertyNames||function(t){return e(t,r)};
},{"./_object-keys-internal":"UrZ8","./_enum-bug-keys":"t611"}],"3Mgd":[function(require,module,exports) {
var e=require("./_shared")("wks"),r=require("./_uid"),o=require("./_global").Symbol,u="function"==typeof o,i=module.exports=function(i){return e[i]||(e[i]=u&&o[i]||(u?o:r)("Symbol."+i))};i.store=e;
},{"./_shared":"8sTG","./_uid":"f0sk","./_global":"kql1"}],"g8m6":[function(require,module,exports) {
var e=require("./_is-object"),r=require("./_cof"),i=require("./_wks")("match");module.exports=function(o){var u;return e(o)&&(void 0!==(u=o[i])?!!u:"RegExp"==r(o))};
},{"./_is-object":"6SP6","./_cof":"viv7","./_wks":"3Mgd"}],"aRjg":[function(require,module,exports) {
"use strict";var e=require("./_an-object");module.exports=function(){var i=e(this),r="";return i.global&&(r+="g"),i.ignoreCase&&(r+="i"),i.multiline&&(r+="m"),i.unicode&&(r+="u"),i.sticky&&(r+="y"),r};
},{"./_an-object":"DBsB"}],"i5RL":[function(require,module,exports) {
var r=require("./_object-dp"),e=require("./_property-desc");module.exports=require("./_descriptors")?function(t,u,o){return r.f(t,u,e(1,o))}:function(r,e,t){return r[e]=t,r};
},{"./_object-dp":"/+wv","./_property-desc":"B9+e","./_descriptors":"ZJLI"}],"2l2h":[function(require,module,exports) {

var e=require("./_global"),r=require("./_hide"),t=require("./_has"),i=require("./_uid")("src"),n="toString",o=Function[n],u=(""+o).split(n);require("./_core").inspectSource=function(e){return o.call(e)},(module.exports=function(n,o,c,l){var a="function"==typeof c;a&&(t(c,"name")||r(c,"name",o)),n[o]!==c&&(a&&(t(c,i)||r(c,i,n[o]?""+n[o]:u.join(String(o)))),n===e?n[o]=c:l?n[o]?n[o]=c:r(n,o,c):(delete n[o],r(n,o,c)))})(Function.prototype,n,function(){return"function"==typeof this&&this[i]||o.call(this)});
},{"./_global":"kql1","./_hide":"i5RL","./_has":"nW2g","./_uid":"f0sk","./_core":"4KVo"}],"Bn5Q":[function(require,module,exports) {

"use strict";var e=require("./_global"),r=require("./_object-dp"),i=require("./_descriptors"),t=require("./_wks")("species");module.exports=function(u){var s=e[u];i&&s&&!s[t]&&r.f(s,t,{configurable:!0,get:function(){return this}})};
},{"./_global":"kql1","./_object-dp":"/+wv","./_descriptors":"ZJLI","./_wks":"3Mgd"}],"hBwo":[function(require,module,exports) {

var e=require("./_global"),r=require("./_inherit-if-required"),i=require("./_object-dp").f,t=require("./_object-gopn").f,n=require("./_is-regexp"),o=require("./_flags"),u=e.RegExp,c=u,s=u.prototype,f=/a/g,a=/a/g,g=new u(f)!==f;if(require("./_descriptors")&&(!g||require("./_fails")(function(){return a[require("./_wks")("match")]=!1,u(f)!=f||u(a)==a||"/a/i"!=u(f,"i")}))){u=function(e,i){var t=this instanceof u,f=n(e),a=void 0===i;return!t&&f&&e.constructor===u&&a?e:r(g?new c(f&&!a?e.source:e,i):c((f=e instanceof u)?e.source:e,f&&a?o.call(e):i),t?this:s,u)};for(var p=function(e){e in u||i(u,e,{configurable:!0,get:function(){return c[e]},set:function(r){c[e]=r}})},q=t(c),_=0;q.length>_;)p(q[_++]);s.constructor=u,u.prototype=s,require("./_redefine")(e,"RegExp",u)}require("./_set-species")("RegExp");
},{"./_global":"kql1","./_inherit-if-required":"oEgy","./_object-dp":"/+wv","./_object-gopn":"yyy+","./_is-regexp":"g8m6","./_flags":"aRjg","./_descriptors":"ZJLI","./_fails":"e5T+","./_wks":"3Mgd","./_redefine":"2l2h","./_set-species":"Bn5Q"}],"w7ZK":[function(require,module,exports) {
"use strict";var r=require("./_hide"),e=require("./_redefine"),t=require("./_fails"),i=require("./_defined"),n=require("./_wks");module.exports=function(u,o,c){var f=n(u),s=c(i,f,""[u]),a=s[0],l=s[1];t(function(){var r={};return r[f]=function(){return 7},7!=""[u](r)})&&(e(String.prototype,u,a),r(RegExp.prototype,f,2==o?function(r,e){return l.call(r,this,e)}:function(r){return l.call(r,this)}))};
},{"./_hide":"i5RL","./_redefine":"2l2h","./_fails":"e5T+","./_defined":"Zcur","./_wks":"3Mgd"}],"eUHu":[function(require,module,exports) {
require("./_fix-re-wks")("replace",2,function(r,i,e){return[function(n,t){"use strict";var l=r(this),u=null==n?void 0:n[i];return void 0!==u?u.call(n,l,t):e.call(String(l),n,t)},e]});
},{"./_fix-re-wks":"w7ZK"}],"WtEG":[function(require,module,exports) {
var r=require("./_object-dp").f,t=Function.prototype,e=/^\s*function ([^ (]*)/,n="name";n in t||require("./_descriptors")&&r(t,n,{configurable:!0,get:function(){try{return(""+this).match(e)[1]}catch(r){return""}}});
},{"./_object-dp":"/+wv","./_descriptors":"ZJLI"}],"PxQA":[function(require,module,exports) {
var e=require("./_wks")("unscopables"),r=Array.prototype;null==r[e]&&require("./_hide")(r,e,{}),module.exports=function(o){r[e][o]=!0};
},{"./_wks":"3Mgd","./_hide":"i5RL"}],"t4Zd":[function(require,module,exports) {
module.exports=function(e,n){return{value:n,done:!!e}};
},{}],"oANp":[function(require,module,exports) {
module.exports={};
},{}],"NjVL":[function(require,module,exports) {

var e=require("./_global"),r=require("./_core"),o=require("./_hide"),i=require("./_redefine"),u=require("./_ctx"),n="prototype",t=function(c,f,l){var q,_,a,d,p=c&t.F,v=c&t.G,F=c&t.S,x=c&t.P,y=c&t.B,B=v?e:F?e[f]||(e[f]={}):(e[f]||{})[n],G=v?r:r[f]||(r[f]={}),P=G[n]||(G[n]={});for(q in v&&(l=f),l)a=((_=!p&&B&&void 0!==B[q])?B:l)[q],d=y&&_?u(a,e):x&&"function"==typeof a?u(Function.call,a):a,B&&i(B,q,a,c&t.U),G[q]!=a&&o(G,q,d),x&&P[q]!=a&&(P[q]=a)};e.core=r,t.F=1,t.G=2,t.S=4,t.P=8,t.B=16,t.W=32,t.U=64,t.R=128,module.exports=t;
},{"./_global":"kql1","./_core":"4KVo","./_hide":"i5RL","./_redefine":"2l2h","./_ctx":"N9ch"}],"kfVX":[function(require,module,exports) {
var e=require("./_object-keys-internal"),r=require("./_enum-bug-keys");module.exports=Object.keys||function(u){return e(u,r)};
},{"./_object-keys-internal":"UrZ8","./_enum-bug-keys":"t611"}],"Vixs":[function(require,module,exports) {
var e=require("./_object-dp"),r=require("./_an-object"),t=require("./_object-keys");module.exports=require("./_descriptors")?Object.defineProperties:function(o,i){r(o);for(var u,c=t(i),n=c.length,s=0;n>s;)e.f(o,u=c[s++],i[u]);return o};
},{"./_object-dp":"/+wv","./_an-object":"DBsB","./_object-keys":"kfVX","./_descriptors":"ZJLI"}],"DBa9":[function(require,module,exports) {
var e=require("./_global").document;module.exports=e&&e.documentElement;
},{"./_global":"kql1"}],"d4Ek":[function(require,module,exports) {
var e=require("./_an-object"),r=require("./_object-dps"),t=require("./_enum-bug-keys"),n=require("./_shared-key")("IE_PROTO"),o=function(){},i="prototype",u=function(){var e,r=require("./_dom-create")("iframe"),n=t.length;for(r.style.display="none",require("./_html").appendChild(r),r.src="javascript:",(e=r.contentWindow.document).open(),e.write("<script>document.F=Object<\/script>"),e.close(),u=e.F;n--;)delete u[i][t[n]];return u()};module.exports=Object.create||function(t,c){var a;return null!==t?(o[i]=e(t),a=new o,o[i]=null,a[n]=t):a=u(),void 0===c?a:r(a,c)};
},{"./_an-object":"DBsB","./_object-dps":"Vixs","./_enum-bug-keys":"t611","./_shared-key":"xSc0","./_dom-create":"dDni","./_html":"DBa9"}],"iqAm":[function(require,module,exports) {
var e=require("./_object-dp").f,r=require("./_has"),o=require("./_wks")("toStringTag");module.exports=function(t,u,i){t&&!r(t=i?t:t.prototype,o)&&e(t,o,{configurable:!0,value:u})};
},{"./_object-dp":"/+wv","./_has":"nW2g","./_wks":"3Mgd"}],"O1PE":[function(require,module,exports) {
"use strict";var e=require("./_object-create"),r=require("./_property-desc"),t=require("./_set-to-string-tag"),i={};require("./_hide")(i,require("./_wks")("iterator"),function(){return this}),module.exports=function(o,u,s){o.prototype=e(i,{next:r(1,s)}),t(o,u+" Iterator")};
},{"./_object-create":"d4Ek","./_property-desc":"B9+e","./_set-to-string-tag":"iqAm","./_hide":"i5RL","./_wks":"3Mgd"}],"4JfJ":[function(require,module,exports) {
var e=require("./_defined");module.exports=function(r){return Object(e(r))};
},{"./_defined":"Zcur"}],"kbAb":[function(require,module,exports) {
var t=require("./_has"),e=require("./_to-object"),o=require("./_shared-key")("IE_PROTO"),r=Object.prototype;module.exports=Object.getPrototypeOf||function(c){return c=e(c),t(c,o)?c[o]:"function"==typeof c.constructor&&c instanceof c.constructor?c.constructor.prototype:c instanceof Object?r:null};
},{"./_has":"nW2g","./_to-object":"4JfJ","./_shared-key":"xSc0"}],"kgNZ":[function(require,module,exports) {
"use strict";var e=require("./_library"),r=require("./_export"),t=require("./_redefine"),i=require("./_hide"),n=require("./_iterators"),u=require("./_iter-create"),o=require("./_set-to-string-tag"),s=require("./_object-gpo"),a=require("./_wks")("iterator"),c=!([].keys&&"next"in[].keys()),f="@@iterator",l="keys",q="values",y=function(){return this};module.exports=function(_,p,h,k,v,w,d){u(h,p,k);var x,b,g,j=function(e){if(!c&&e in I)return I[e];switch(e){case l:case q:return function(){return new h(this,e)}}return function(){return new h(this,e)}},m=p+" Iterator",A=v==q,F=!1,I=_.prototype,O=I[a]||I[f]||v&&I[v],P=O||j(v),z=v?A?j("entries"):P:void 0,B="Array"==p&&I.entries||O;if(B&&(g=s(B.call(new _)))!==Object.prototype&&g.next&&(o(g,m,!0),e||"function"==typeof g[a]||i(g,a,y)),A&&O&&O.name!==q&&(F=!0,P=function(){return O.call(this)}),e&&!d||!c&&!F&&I[a]||i(I,a,P),n[p]=P,n[m]=y,v)if(x={values:A?P:j(q),keys:w?P:j(l),entries:z},d)for(b in x)b in I||t(I,b,x[b]);else r(r.P+r.F*(c||F),p,x);return x};
},{"./_library":"Nw1e","./_export":"NjVL","./_redefine":"2l2h","./_hide":"i5RL","./_iterators":"oANp","./_iter-create":"O1PE","./_set-to-string-tag":"iqAm","./_object-gpo":"kbAb","./_wks":"3Mgd"}],"2xsA":[function(require,module,exports) {
"use strict";var e=require("./_add-to-unscopables"),r=require("./_iter-step"),t=require("./_iterators"),i=require("./_to-iobject");module.exports=require("./_iter-define")(Array,"Array",function(e,r){this._t=i(e),this._i=0,this._k=r},function(){var e=this._t,t=this._k,i=this._i++;return!e||i>=e.length?(this._t=void 0,r(1)):r(0,"keys"==t?i:"values"==t?e[i]:[i,e[i]])},"values"),t.Arguments=t.Array,e("keys"),e("values"),e("entries");
},{"./_add-to-unscopables":"PxQA","./_iter-step":"t4Zd","./_iterators":"oANp","./_to-iobject":"mwRI","./_iter-define":"kgNZ"}],"hFdU":[function(require,module,exports) {

for(var e=require("./es6.array.iterator"),t=require("./_object-keys"),i=require("./_redefine"),r=require("./_global"),s=require("./_hide"),L=require("./_iterators"),a=require("./_wks"),o=a("iterator"),l=a("toStringTag"),S=L.Array,n={CSSRuleList:!0,CSSStyleDeclaration:!1,CSSValueList:!1,ClientRectList:!1,DOMRectList:!1,DOMStringList:!1,DOMTokenList:!0,DataTransferItemList:!1,FileList:!1,HTMLAllCollection:!1,HTMLCollection:!1,HTMLFormElement:!1,HTMLSelectElement:!1,MediaList:!0,MimeTypeArray:!1,NamedNodeMap:!1,NodeList:!0,PaintRequestList:!1,Plugin:!1,PluginArray:!1,SVGLengthList:!1,SVGNumberList:!1,SVGPathSegList:!1,SVGPointList:!1,SVGStringList:!1,SVGTransformList:!1,SourceBufferList:!1,StyleSheetList:!0,TextTrackCueList:!1,TextTrackList:!1,TouchList:!1},u=t(n),T=0;T<u.length;T++){var c,g=u[T],M=n[g],y=r[g],f=y&&y.prototype;if(f&&(f[o]||s(f,o,S),f[l]||s(f,l,g),L[g]=S,M))for(c in e)f[c]||i(f,c,e[c],!0)}
},{"./es6.array.iterator":"2xsA","./_object-keys":"kfVX","./_redefine":"2l2h","./_global":"kql1","./_hide":"i5RL","./_iterators":"oANp","./_wks":"3Mgd"}],"nmUB":[function(require,module,exports) {
"use strict";require("core-js/modules/es6.regexp.constructor"),require("core-js/modules/es6.regexp.replace"),require("core-js/modules/es6.function.name"),require("core-js/modules/web.dom.iterable");var e=window.wp.element.createElement,t=window.wp.richText,o=t.registerFormatType,r=t.applyFormat,n=t.removeFormat,a=t.getActiveFormat,l=window.wp.editor,c=l.InspectorControls,i=l.PanelColorSettings;[{name:"color",title:"Inline Text Colour"},{name:"background-color",title:"Inline Background Colour"}].forEach(function(t){var l=t.name,s=t.title,u="advanced/".concat(l);o(u,{title:s,tagName:"span",className:l,attributes:{style:"style"},edit:function(t){var o,m=t.isActive,p=t.value,d=t.onChange;m&&(o=a(p,u).attributes.style.replace(new RegExp("^".concat(l,":\\s*")),""));return e(c,null,e(i,{title:s,initialOpen:!0,colorSettings:[{value:o,onChange:function(e){d(e?r(p,{type:u,attributes:{style:"".concat(l,":").concat(e)}}):n(p,u))},label:"Apply colour to the selected text."}]}))}})});
},{"core-js/modules/es6.regexp.constructor":"hBwo","core-js/modules/es6.regexp.replace":"eUHu","core-js/modules/es6.function.name":"WtEG","core-js/modules/web.dom.iterable":"hFdU"}],"Gl4i":[function(require,module,exports) {
var e=require("./_cof");module.exports=Object("z").propertyIsEnumerable(0)?Object:function(r){return"String"==e(r)?r.split(""):Object(r)};
},{"./_cof":"viv7"}],"CDBu":[function(require,module,exports) {
var e=require("./_iobject"),r=require("./_defined");module.exports=function(i){return e(r(i))};
},{"./_iobject":"Gl4i","./_defined":"Zcur"}],"eM+t":[function(require,module,exports) {
var t=require("./_is-object");module.exports=function(r,e){if(!t(r))return r;var o,n;if(e&&"function"==typeof(o=r.toString)&&!t(n=o.call(r)))return n;if("function"==typeof(o=r.valueOf)&&!t(n=o.call(r)))return n;if(!e&&"function"==typeof(o=r.toString)&&!t(n=o.call(r)))return n;throw TypeError("Can't convert object to primitive value")};
},{"./_is-object":"6SP6"}],"hd3X":[function(require,module,exports) {
module.exports=!require("./_fails")(function(){return 7!=Object.defineProperty({},"a",{get:function(){return 7}}).a});
},{"./_fails":"e5T+"}],"ItUS":[function(require,module,exports) {
var e=require("./_is-object"),r=require("./_global").document,t=e(r)&&e(r.createElement);module.exports=function(e){return t?r.createElement(e):{}};
},{"./_is-object":"6SP6","./_global":"kql1"}],"H2dS":[function(require,module,exports) {
module.exports=!require("./_descriptors")&&!require("./_fails")(function(){return 7!=Object.defineProperty(require("./_dom-create")("div"),"a",{get:function(){return 7}}).a});
},{"./_descriptors":"hd3X","./_fails":"e5T+","./_dom-create":"ItUS"}],"0SEe":[function(require,module,exports) {
var e=require("./_object-pie"),r=require("./_property-desc"),i=require("./_to-iobject"),t=require("./_to-primitive"),o=require("./_has"),c=require("./_ie8-dom-define"),u=Object.getOwnPropertyDescriptor;exports.f=require("./_descriptors")?u:function(p,q){if(p=i(p),q=t(q,!0),c)try{return u(p,q)}catch(e){}if(o(p,q))return r(!e.f.call(p,q),p[q])};
},{"./_object-pie":"Blc0","./_property-desc":"B9+e","./_to-iobject":"CDBu","./_to-primitive":"eM+t","./_has":"nW2g","./_ie8-dom-define":"H2dS","./_descriptors":"hd3X"}],"jFcs":[function(require,module,exports) {
var r=require("./_a-function");module.exports=function(n,t,u){if(r(n),void 0===t)return n;switch(u){case 1:return function(r){return n.call(t,r)};case 2:return function(r,u){return n.call(t,r,u)};case 3:return function(r,u,e){return n.call(t,r,u,e)}}return function(){return n.apply(t,arguments)}};
},{"./_a-function":"L6p4"}],"w4mz":[function(require,module,exports) {
var r=require("./_is-object");module.exports=function(e){if(!r(e))throw TypeError(e+" is not an object!");return e};
},{"./_is-object":"6SP6"}],"YAFO":[function(require,module,exports) {
var e=require("./_an-object"),r=require("./_ie8-dom-define"),t=require("./_to-primitive"),i=Object.defineProperty;exports.f=require("./_descriptors")?Object.defineProperty:function(o,n,u){if(e(o),n=t(n,!0),e(u),r)try{return i(o,n,u)}catch(e){}if("get"in u||"set"in u)throw TypeError("Accessors not supported!");return"value"in u&&(o[n]=u.value),o};
},{"./_an-object":"w4mz","./_ie8-dom-define":"H2dS","./_to-primitive":"eM+t","./_descriptors":"hd3X"}],"/L7a":[function(require,module,exports) {
var r=require("./_object-dp"),e=require("./_property-desc");module.exports=require("./_descriptors")?function(t,u,o){return r.f(t,u,e(1,o))}:function(r,e,t){return r[e]=t,r};
},{"./_object-dp":"YAFO","./_property-desc":"B9+e","./_descriptors":"hd3X"}],"qJpY":[function(require,module,exports) {

var e=require("./_global"),r=require("./_core"),n=require("./_ctx"),t=require("./_hide"),i=require("./_has"),u="prototype",o=function(c,a,f){var l,s,p,h=c&o.F,v=c&o.G,q=c&o.S,w=c&o.P,_=c&o.B,y=c&o.W,d=v?r:r[a]||(r[a]={}),F=d[u],g=v?e:q?e[a]:(e[a]||{})[u];for(l in v&&(f=a),f)(s=!h&&g&&void 0!==g[l])&&i(d,l)||(p=s?g[l]:f[l],d[l]=v&&"function"!=typeof g[l]?f[l]:_&&s?n(p,e):y&&g[l]==p?function(e){var r=function(r,n,t){if(this instanceof e){switch(arguments.length){case 0:return new e;case 1:return new e(r);case 2:return new e(r,n)}return new e(r,n,t)}return e.apply(this,arguments)};return r[u]=e[u],r}(p):w&&"function"==typeof p?n(Function.call,p):p,w&&((d.virtual||(d.virtual={}))[l]=p,c&o.R&&F&&!F[l]&&t(F,l,p)))};o.F=1,o.G=2,o.S=4,o.P=8,o.B=16,o.W=32,o.U=64,o.R=128,module.exports=o;
},{"./_global":"kql1","./_core":"4KVo","./_ctx":"jFcs","./_hide":"/L7a","./_has":"nW2g"}],"DHmZ":[function(require,module,exports) {
var e=require("./_export"),r=require("./_core"),t=require("./_fails");module.exports=function(c,i){var o=(r.Object||{})[c]||Object[c],u={};u[c]=i(o),e(e.S+e.F*t(function(){o(1)}),"Object",u)};
},{"./_export":"qJpY","./_core":"4KVo","./_fails":"e5T+"}],"N051":[function(require,module,exports) {
var r=require("./_to-iobject"),e=require("./_object-gopd").f;require("./_object-sap")("getOwnPropertyDescriptor",function(){return function(t,o){return e(r(t),o)}});
},{"./_to-iobject":"CDBu","./_object-gopd":"0SEe","./_object-sap":"DHmZ"}],"7nq8":[function(require,module,exports) {
require("../../modules/es6.object.get-own-property-descriptor");var e=require("../../modules/_core").Object;module.exports=function(r,o){return e.getOwnPropertyDescriptor(r,o)};
},{"../../modules/es6.object.get-own-property-descriptor":"N051","../../modules/_core":"4KVo"}],"vfwk":[function(require,module,exports) {
module.exports=require("core-js/library/fn/object/get-own-property-descriptor");
},{"core-js/library/fn/object/get-own-property-descriptor":"7nq8"}],"rdPA":[function(require,module,exports) {
module.exports=require("./_hide");
},{"./_hide":"/L7a"}],"Gn0L":[function(require,module,exports) {
var e=require("./_uid")("meta"),r=require("./_is-object"),t=require("./_has"),n=require("./_object-dp").f,i=0,u=Object.isExtensible||function(){return!0},f=!require("./_fails")(function(){return u(Object.preventExtensions({}))}),o=function(r){n(r,e,{value:{i:"O"+ ++i,w:{}}})},s=function(n,i){if(!r(n))return"symbol"==typeof n?n:("string"==typeof n?"S":"P")+n;if(!t(n,e)){if(!u(n))return"F";if(!i)return"E";o(n)}return n[e].i},c=function(r,n){if(!t(r,e)){if(!u(r))return!0;if(!n)return!1;o(r)}return r[e].w},E=function(r){return f&&a.NEED&&u(r)&&!t(r,e)&&o(r),r},a=module.exports={KEY:e,NEED:!1,fastKey:s,getWeak:c,onFreeze:E};
},{"./_uid":"f0sk","./_is-object":"6SP6","./_has":"nW2g","./_object-dp":"YAFO","./_fails":"e5T+"}],"bdh6":[function(require,module,exports) {
module.exports=!0;
},{}],"P3jJ":[function(require,module,exports) {

var r=require("./_core"),e=require("./_global"),o="__core-js_shared__",i=e[o]||(e[o]={});(module.exports=function(r,e){return i[r]||(i[r]=void 0!==e?e:{})})("versions",[]).push({version:r.version,mode:require("./_library")?"pure":"global",copyright:"© 2018 Denis Pushkarev (zloirock.ru)"});
},{"./_core":"4KVo","./_global":"kql1","./_library":"bdh6"}],"HNZL":[function(require,module,exports) {
var e=require("./_shared")("wks"),r=require("./_uid"),o=require("./_global").Symbol,u="function"==typeof o,i=module.exports=function(i){return e[i]||(e[i]=u&&o[i]||(u?o:r)("Symbol."+i))};i.store=e;
},{"./_shared":"P3jJ","./_uid":"f0sk","./_global":"kql1"}],"tgN/":[function(require,module,exports) {
var e=require("./_object-dp").f,r=require("./_has"),o=require("./_wks")("toStringTag");module.exports=function(t,u,i){t&&!r(t=i?t:t.prototype,o)&&e(t,o,{configurable:!0,value:u})};
},{"./_object-dp":"YAFO","./_has":"nW2g","./_wks":"HNZL"}],"qN4y":[function(require,module,exports) {
exports.f=require("./_wks");
},{"./_wks":"HNZL"}],"CbwA":[function(require,module,exports) {

var r=require("./_global"),e=require("./_core"),o=require("./_library"),i=require("./_wks-ext"),l=require("./_object-dp").f;module.exports=function(u){var a=e.Symbol||(e.Symbol=o?{}:r.Symbol||{});"_"==u.charAt(0)||u in a||l(a,u,{value:i.f(u)})};
},{"./_global":"kql1","./_core":"4KVo","./_library":"bdh6","./_wks-ext":"qN4y","./_object-dp":"YAFO"}],"Rwlq":[function(require,module,exports) {
var e=require("./_to-integer"),r=Math.min;module.exports=function(t){return t>0?r(e(t),9007199254740991):0};
},{"./_to-integer":"cHfm"}],"m+aK":[function(require,module,exports) {
var e=require("./_to-integer"),r=Math.max,t=Math.min;module.exports=function(n,a){return(n=e(n))<0?r(n+a,0):t(n,a)};
},{"./_to-integer":"cHfm"}],"f1XA":[function(require,module,exports) {
var e=require("./_to-iobject"),r=require("./_to-length"),t=require("./_to-absolute-index");module.exports=function(n){return function(i,o,u){var f,l=e(i),a=r(l.length),c=t(u,a);if(n&&o!=o){for(;a>c;)if((f=l[c++])!=f)return!0}else for(;a>c;c++)if((n||c in l)&&l[c]===o)return n||c||0;return!n&&-1}};
},{"./_to-iobject":"CDBu","./_to-length":"Rwlq","./_to-absolute-index":"m+aK"}],"HCCw":[function(require,module,exports) {
var e=require("./_shared")("keys"),r=require("./_uid");module.exports=function(u){return e[u]||(e[u]=r(u))};
},{"./_shared":"P3jJ","./_uid":"f0sk"}],"77jj":[function(require,module,exports) {
var r=require("./_has"),e=require("./_to-iobject"),u=require("./_array-includes")(!1),i=require("./_shared-key")("IE_PROTO");module.exports=function(o,a){var n,s=e(o),t=0,h=[];for(n in s)n!=i&&r(s,n)&&h.push(n);for(;a.length>t;)r(s,n=a[t++])&&(~u(h,n)||h.push(n));return h};
},{"./_has":"nW2g","./_to-iobject":"CDBu","./_array-includes":"f1XA","./_shared-key":"HCCw"}],"aZdp":[function(require,module,exports) {
var e=require("./_object-keys-internal"),r=require("./_enum-bug-keys");module.exports=Object.keys||function(u){return e(u,r)};
},{"./_object-keys-internal":"77jj","./_enum-bug-keys":"t611"}],"0/jF":[function(require,module,exports) {
exports.f=Object.getOwnPropertySymbols;
},{}],"koeV":[function(require,module,exports) {
var e=require("./_object-keys"),r=require("./_object-gops"),o=require("./_object-pie");module.exports=function(t){var u=e(t),i=r.f;if(i)for(var c,f=i(t),a=o.f,l=0;f.length>l;)a.call(t,c=f[l++])&&u.push(c);return u};
},{"./_object-keys":"aZdp","./_object-gops":"0/jF","./_object-pie":"Blc0"}],"ngLd":[function(require,module,exports) {
var r=require("./_cof");module.exports=Array.isArray||function(e){return"Array"==r(e)};
},{"./_cof":"viv7"}],"XCVD":[function(require,module,exports) {
var e=require("./_object-dp"),r=require("./_an-object"),t=require("./_object-keys");module.exports=require("./_descriptors")?Object.defineProperties:function(o,i){r(o);for(var u,c=t(i),n=c.length,s=0;n>s;)e.f(o,u=c[s++],i[u]);return o};
},{"./_object-dp":"YAFO","./_an-object":"w4mz","./_object-keys":"aZdp","./_descriptors":"hd3X"}],"441S":[function(require,module,exports) {
var e=require("./_global").document;module.exports=e&&e.documentElement;
},{"./_global":"kql1"}],"1GJS":[function(require,module,exports) {
var e=require("./_an-object"),r=require("./_object-dps"),t=require("./_enum-bug-keys"),n=require("./_shared-key")("IE_PROTO"),o=function(){},i="prototype",u=function(){var e,r=require("./_dom-create")("iframe"),n=t.length;for(r.style.display="none",require("./_html").appendChild(r),r.src="javascript:",(e=r.contentWindow.document).open(),e.write("<script>document.F=Object<\/script>"),e.close(),u=e.F;n--;)delete u[i][t[n]];return u()};module.exports=Object.create||function(t,c){var a;return null!==t?(o[i]=e(t),a=new o,o[i]=null,a[n]=t):a=u(),void 0===c?a:r(a,c)};
},{"./_an-object":"w4mz","./_object-dps":"XCVD","./_enum-bug-keys":"t611","./_shared-key":"HCCw","./_dom-create":"ItUS","./_html":"441S"}],"YNXA":[function(require,module,exports) {
var e=require("./_object-keys-internal"),r=require("./_enum-bug-keys").concat("length","prototype");exports.f=Object.getOwnPropertyNames||function(t){return e(t,r)};
},{"./_object-keys-internal":"77jj","./_enum-bug-keys":"t611"}],"N4aV":[function(require,module,exports) {
var e=require("./_to-iobject"),t=require("./_object-gopn").f,o={}.toString,r="object"==typeof window&&window&&Object.getOwnPropertyNames?Object.getOwnPropertyNames(window):[],n=function(e){try{return t(e)}catch(e){return r.slice()}};module.exports.f=function(c){return r&&"[object Window]"==o.call(c)?n(c):t(e(c))};
},{"./_to-iobject":"CDBu","./_object-gopn":"YNXA"}],"BWNl":[function(require,module,exports) {

"use strict";var e=require("./_global"),r=require("./_has"),t=require("./_descriptors"),i=require("./_export"),n=require("./_redefine"),o=require("./_meta").KEY,u=require("./_fails"),s=require("./_shared"),f=require("./_set-to-string-tag"),a=require("./_uid"),c=require("./_wks"),l=require("./_wks-ext"),p=require("./_wks-define"),b=require("./_enum-keys"),h=require("./_is-array"),y=require("./_an-object"),_=require("./_is-object"),q=require("./_to-iobject"),g=require("./_to-primitive"),m=require("./_property-desc"),v=require("./_object-create"),d=require("./_object-gopn-ext"),S=require("./_object-gopd"),j=require("./_object-dp"),O=require("./_object-keys"),k=S.f,w=j.f,P=d.f,E=e.Symbol,F=e.JSON,N=F&&F.stringify,J="prototype",x=c("_hidden"),I=c("toPrimitive"),T={}.propertyIsEnumerable,C=s("symbol-registry"),M=s("symbols"),D=s("op-symbols"),G=Object[J],K="function"==typeof E,Q=e.QObject,W=!Q||!Q[J]||!Q[J].findChild,Y=t&&u(function(){return 7!=v(w({},"a",{get:function(){return w(this,"a",{value:7}).a}})).a})?function(e,r,t){var i=k(G,r);i&&delete G[r],w(e,r,t),i&&e!==G&&w(G,r,i)}:w,z=function(e){var r=M[e]=v(E[J]);return r._k=e,r},A=K&&"symbol"==typeof E.iterator?function(e){return"symbol"==typeof e}:function(e){return e instanceof E},B=function(e,t,i){return e===G&&B(D,t,i),y(e),t=g(t,!0),y(i),r(M,t)?(i.enumerable?(r(e,x)&&e[x][t]&&(e[x][t]=!1),i=v(i,{enumerable:m(0,!1)})):(r(e,x)||w(e,x,m(1,{})),e[x][t]=!0),Y(e,t,i)):w(e,t,i)},H=function(e,r){y(e);for(var t,i=b(r=q(r)),n=0,o=i.length;o>n;)B(e,t=i[n++],r[t]);return e},L=function(e,r){return void 0===r?v(e):H(v(e),r)},R=function(e){var t=T.call(this,e=g(e,!0));return!(this===G&&r(M,e)&&!r(D,e))&&(!(t||!r(this,e)||!r(M,e)||r(this,x)&&this[x][e])||t)},U=function(e,t){if(e=q(e),t=g(t,!0),e!==G||!r(M,t)||r(D,t)){var i=k(e,t);return!i||!r(M,t)||r(e,x)&&e[x][t]||(i.enumerable=!0),i}},V=function(e){for(var t,i=P(q(e)),n=[],u=0;i.length>u;)r(M,t=i[u++])||t==x||t==o||n.push(t);return n},X=function(e){for(var t,i=e===G,n=P(i?D:q(e)),o=[],u=0;n.length>u;)!r(M,t=n[u++])||i&&!r(G,t)||o.push(M[t]);return o};K||(n((E=function(){if(this instanceof E)throw TypeError("Symbol is not a constructor!");var e=a(arguments.length>0?arguments[0]:void 0),i=function(t){this===G&&i.call(D,t),r(this,x)&&r(this[x],e)&&(this[x][e]=!1),Y(this,e,m(1,t))};return t&&W&&Y(G,e,{configurable:!0,set:i}),z(e)})[J],"toString",function(){return this._k}),S.f=U,j.f=B,require("./_object-gopn").f=d.f=V,require("./_object-pie").f=R,require("./_object-gops").f=X,t&&!require("./_library")&&n(G,"propertyIsEnumerable",R,!0),l.f=function(e){return z(c(e))}),i(i.G+i.W+i.F*!K,{Symbol:E});for(var Z="hasInstance,isConcatSpreadable,iterator,match,replace,search,species,split,toPrimitive,toStringTag,unscopables".split(","),$=0;Z.length>$;)c(Z[$++]);for(var ee=O(c.store),re=0;ee.length>re;)p(ee[re++]);i(i.S+i.F*!K,"Symbol",{for:function(e){return r(C,e+="")?C[e]:C[e]=E(e)},keyFor:function(e){if(!A(e))throw TypeError(e+" is not a symbol!");for(var r in C)if(C[r]===e)return r},useSetter:function(){W=!0},useSimple:function(){W=!1}}),i(i.S+i.F*!K,"Object",{create:L,defineProperty:B,defineProperties:H,getOwnPropertyDescriptor:U,getOwnPropertyNames:V,getOwnPropertySymbols:X}),F&&i(i.S+i.F*(!K||u(function(){var e=E();return"[null]"!=N([e])||"{}"!=N({a:e})||"{}"!=N(Object(e))})),"JSON",{stringify:function(e){for(var r,t,i=[e],n=1;arguments.length>n;)i.push(arguments[n++]);if(t=r=i[1],(_(r)||void 0!==e)&&!A(e))return h(r)||(r=function(e,r){if("function"==typeof t&&(r=t.call(this,e,r)),!A(r))return r}),i[1]=r,N.apply(F,i)}}),E[J][I]||require("./_hide")(E[J],I,E[J].valueOf),f(E,"Symbol"),f(Math,"Math",!0),f(e.JSON,"JSON",!0);
},{"./_global":"kql1","./_has":"nW2g","./_descriptors":"hd3X","./_export":"qJpY","./_redefine":"rdPA","./_meta":"Gn0L","./_fails":"e5T+","./_shared":"P3jJ","./_set-to-string-tag":"tgN/","./_uid":"f0sk","./_wks":"HNZL","./_wks-ext":"qN4y","./_wks-define":"CbwA","./_enum-keys":"koeV","./_is-array":"ngLd","./_an-object":"w4mz","./_is-object":"6SP6","./_to-iobject":"CDBu","./_to-primitive":"eM+t","./_property-desc":"B9+e","./_object-create":"1GJS","./_object-gopn-ext":"N4aV","./_object-gopd":"0SEe","./_object-dp":"YAFO","./_object-keys":"aZdp","./_object-gopn":"YNXA","./_object-pie":"Blc0","./_object-gops":"0/jF","./_library":"bdh6","./_hide":"/L7a"}],"ZsWX":[function(require,module,exports) {
require("../../modules/es6.symbol"),module.exports=require("../../modules/_core").Object.getOwnPropertySymbols;
},{"../../modules/es6.symbol":"BWNl","../../modules/_core":"4KVo"}],"FJAN":[function(require,module,exports) {
module.exports=require("core-js/library/fn/object/get-own-property-symbols");
},{"core-js/library/fn/object/get-own-property-symbols":"ZsWX"}],"CaiI":[function(require,module,exports) {
var e=require("./_defined");module.exports=function(r){return Object(e(r))};
},{"./_defined":"Zcur"}],"3nCR":[function(require,module,exports) {
var e=require("./_to-object"),r=require("./_object-keys");require("./_object-sap")("keys",function(){return function(t){return r(e(t))}});
},{"./_to-object":"CaiI","./_object-keys":"aZdp","./_object-sap":"DHmZ"}],"IbOj":[function(require,module,exports) {
require("../../modules/es6.object.keys"),module.exports=require("../../modules/_core").Object.keys;
},{"../../modules/es6.object.keys":"3nCR","../../modules/_core":"4KVo"}],"rmah":[function(require,module,exports) {
module.exports=require("core-js/library/fn/object/keys");
},{"core-js/library/fn/object/keys":"IbOj"}],"aWcg":[function(require,module,exports) {
var e=require("./_export");e(e.S+e.F*!require("./_descriptors"),"Object",{defineProperty:require("./_object-dp").f});
},{"./_export":"qJpY","./_descriptors":"hd3X","./_object-dp":"YAFO"}],"N/kx":[function(require,module,exports) {
require("../../modules/es6.object.define-property");var e=require("../../modules/_core").Object;module.exports=function(r,o,t){return e.defineProperty(r,o,t)};
},{"../../modules/es6.object.define-property":"aWcg","../../modules/_core":"4KVo"}],"JoVB":[function(require,module,exports) {
module.exports=require("core-js/library/fn/object/define-property");
},{"core-js/library/fn/object/define-property":"N/kx"}],"P3gp":[function(require,module,exports) {
var e=require("../core-js/object/define-property");function r(r,n,o){return n in r?e(r,n,{value:o,enumerable:!0,configurable:!0,writable:!0}):r[n]=o,r}module.exports=r;
},{"../core-js/object/define-property":"JoVB"}],"ES/5":[function(require,module,exports) {
var e=require("../core-js/object/get-own-property-descriptor"),r=require("../core-js/object/get-own-property-symbols"),o=require("../core-js/object/keys"),t=require("./defineProperty");function n(n){for(var c=1;c<arguments.length;c++){var u=null!=arguments[c]?arguments[c]:{},i=o(u);"function"==typeof r&&(i=i.concat(r(u).filter(function(r){return e(u,r).enumerable}))),i.forEach(function(e){t(n,e,u[e])})}return n}module.exports=n;
},{"../core-js/object/get-own-property-descriptor":"vfwk","../core-js/object/get-own-property-symbols":"FJAN","../core-js/object/keys":"rmah","./defineProperty":"P3gp"}],"ULhu":[function(require,module,exports) {
"use strict";var e=t(require("@babel/runtime-corejs2/helpers/objectSpread"));function t(e){return e&&e.__esModule?e:{default:e}}var r=window.wp.element.createElement,n=window.wp.richText.registerFormatType,o=window.wp.editor.InspectorControls,a=window.wp.components,i=a.PanelBody,l=a.Button,m="advanced/remove-formatting";n(m,{title:"Remove formatting",tagName:"span",className:"remove",edit:function(t){t.isActive;var n=t.value,a=t.onChange;return r(o,null,r(i,{title:"Remove Formatting"},r(l,{isDefault:!0,onClick:function(){return a((0,e.default)({},n,{formats:Array(n.formats.length)}))}},"Remove All formatting")))}});
},{"@babel/runtime-corejs2/helpers/objectSpread":"ES/5"}],"u88s":[function(require,module,exports) {
"use strict";require("core-js/modules/es6.function.name"),require("core-js/modules/web.dom.iterable");var t=window.wp.element,e=t.createElement,r=t.Fragment,a=window.wp.richText,c=a.registerFormatType,o=a.toggleFormat,n=window.wp.editor,i=n.RichTextToolbarButton,u=n.RichTextShortcut;[{name:"sup",title:"Superscript",character:"."},{name:"sub",title:"Subscript",character:","}].forEach(function(t){var a=t.name,n=t.title,l=t.character,s=(t.icon,"advanced/".concat(a));c(s,{title:n,tagName:a,className:null,edit:function(t){var c=t.isActive,m=t.value,h=t.onChange,p=function(){return h(o(m,{type:s}))};return e(r,null,e(u,{type:"primary",character:l,onUse:p}),e(i,{title:n,onClick:p,isActive:c,shortcutType:"primary",shortcutCharacter:l,className:"toolbar-button-with-text toolbar-button__advanced-".concat(a)}))}})});
},{"core-js/modules/es6.function.name":"WtEG","core-js/modules/web.dom.iterable":"hFdU"}],"Focm":[function(require,module,exports) {
"use strict";require("./code"),require("./colour"),require("./remove"),require("./sub-sup");
},{"./code":"DWv3","./colour":"nmUB","./remove":"ULhu","./sub-sup":"u88s"}]},{},["Focm"], null)
//# sourceMappingURL=/index.map