(()=>{var e={2151:e=>{var t={utf8:{stringToBytes:function(e){return t.bin.stringToBytes(unescape(encodeURIComponent(e)))},bytesToString:function(e){return decodeURIComponent(escape(t.bin.bytesToString(e)))}},bin:{stringToBytes:function(e){for(var t=[],r=0;r<e.length;r++)t.push(255&e.charCodeAt(r));return t},bytesToString:function(e){for(var t=[],r=0;r<e.length;r++)t.push(String.fromCharCode(e[r]));return t.join("")}}};e.exports=t},3939:e=>{var t,r;t="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/",r={rotl:function(e,t){return e<<t|e>>>32-t},rotr:function(e,t){return e<<32-t|e>>>t},endian:function(e){if(e.constructor==Number)return 16711935&r.rotl(e,8)|4278255360&r.rotl(e,24);for(var t=0;t<e.length;t++)e[t]=r.endian(e[t]);return e},randomBytes:function(e){for(var t=[];e>0;e--)t.push(Math.floor(256*Math.random()));return t},bytesToWords:function(e){for(var t=[],r=0,n=0;r<e.length;r++,n+=8)t[n>>>5]|=e[r]<<24-n%32;return t},wordsToBytes:function(e){for(var t=[],r=0;r<32*e.length;r+=8)t.push(e[r>>>5]>>>24-r%32&255);return t},bytesToHex:function(e){for(var t=[],r=0;r<e.length;r++)t.push((e[r]>>>4).toString(16)),t.push((15&e[r]).toString(16));return t.join("")},hexToBytes:function(e){for(var t=[],r=0;r<e.length;r+=2)t.push(parseInt(e.substr(r,2),16));return t},bytesToBase64:function(e){for(var r=[],n=0;n<e.length;n+=3)for(var a=e[n]<<16|e[n+1]<<8|e[n+2],s=0;s<4;s++)8*n+6*s<=8*e.length?r.push(t.charAt(a>>>6*(3-s)&63)):r.push("=");return r.join("")},base64ToBytes:function(e){e=e.replace(/[^A-Z0-9+\/]/gi,"");for(var r=[],n=0,a=0;n<e.length;a=++n%4)0!=a&&r.push((t.indexOf(e.charAt(n-1))&Math.pow(2,-2*a+8)-1)<<2*a|t.indexOf(e.charAt(n))>>>6-2*a);return r}},e.exports=r},7206:e=>{function t(e){return!!e.constructor&&"function"==typeof e.constructor.isBuffer&&e.constructor.isBuffer(e)}e.exports=function(e){return null!=e&&(t(e)||function(e){return"function"==typeof e.readFloatLE&&"function"==typeof e.slice&&t(e.slice(0,0))}(e)||!!e._isBuffer)}},3503:(e,t,r)=>{var n,a,s,o,l;n=r(3939),a=r(2151).utf8,s=r(7206),o=r(2151).bin,(l=function(e,t){e.constructor==String?e=t&&"binary"===t.encoding?o.stringToBytes(e):a.stringToBytes(e):s(e)?e=Array.prototype.slice.call(e,0):Array.isArray(e)||e.constructor===Uint8Array||(e=e.toString());for(var r=n.bytesToWords(e),i=8*e.length,c=1732584193,p=-271733879,d=-1732584194,u=271733878,g=0;g<r.length;g++)r[g]=16711935&(r[g]<<8|r[g]>>>24)|4278255360&(r[g]<<24|r[g]>>>8);r[i>>>5]|=128<<i%32,r[14+(i+64>>>9<<4)]=i;var y=l._ff,f=l._gg,v=l._hh,b=l._ii;for(g=0;g<r.length;g+=16){var w=c,h=p,m=d,S=u;c=y(c,p,d,u,r[g+0],7,-680876936),u=y(u,c,p,d,r[g+1],12,-389564586),d=y(d,u,c,p,r[g+2],17,606105819),p=y(p,d,u,c,r[g+3],22,-1044525330),c=y(c,p,d,u,r[g+4],7,-176418897),u=y(u,c,p,d,r[g+5],12,1200080426),d=y(d,u,c,p,r[g+6],17,-1473231341),p=y(p,d,u,c,r[g+7],22,-45705983),c=y(c,p,d,u,r[g+8],7,1770035416),u=y(u,c,p,d,r[g+9],12,-1958414417),d=y(d,u,c,p,r[g+10],17,-42063),p=y(p,d,u,c,r[g+11],22,-1990404162),c=y(c,p,d,u,r[g+12],7,1804603682),u=y(u,c,p,d,r[g+13],12,-40341101),d=y(d,u,c,p,r[g+14],17,-1502002290),c=f(c,p=y(p,d,u,c,r[g+15],22,1236535329),d,u,r[g+1],5,-165796510),u=f(u,c,p,d,r[g+6],9,-1069501632),d=f(d,u,c,p,r[g+11],14,643717713),p=f(p,d,u,c,r[g+0],20,-373897302),c=f(c,p,d,u,r[g+5],5,-701558691),u=f(u,c,p,d,r[g+10],9,38016083),d=f(d,u,c,p,r[g+15],14,-660478335),p=f(p,d,u,c,r[g+4],20,-405537848),c=f(c,p,d,u,r[g+9],5,568446438),u=f(u,c,p,d,r[g+14],9,-1019803690),d=f(d,u,c,p,r[g+3],14,-187363961),p=f(p,d,u,c,r[g+8],20,1163531501),c=f(c,p,d,u,r[g+13],5,-1444681467),u=f(u,c,p,d,r[g+2],9,-51403784),d=f(d,u,c,p,r[g+7],14,1735328473),c=v(c,p=f(p,d,u,c,r[g+12],20,-1926607734),d,u,r[g+5],4,-378558),u=v(u,c,p,d,r[g+8],11,-2022574463),d=v(d,u,c,p,r[g+11],16,1839030562),p=v(p,d,u,c,r[g+14],23,-35309556),c=v(c,p,d,u,r[g+1],4,-1530992060),u=v(u,c,p,d,r[g+4],11,1272893353),d=v(d,u,c,p,r[g+7],16,-155497632),p=v(p,d,u,c,r[g+10],23,-1094730640),c=v(c,p,d,u,r[g+13],4,681279174),u=v(u,c,p,d,r[g+0],11,-358537222),d=v(d,u,c,p,r[g+3],16,-722521979),p=v(p,d,u,c,r[g+6],23,76029189),c=v(c,p,d,u,r[g+9],4,-640364487),u=v(u,c,p,d,r[g+12],11,-421815835),d=v(d,u,c,p,r[g+15],16,530742520),c=b(c,p=v(p,d,u,c,r[g+2],23,-995338651),d,u,r[g+0],6,-198630844),u=b(u,c,p,d,r[g+7],10,1126891415),d=b(d,u,c,p,r[g+14],15,-1416354905),p=b(p,d,u,c,r[g+5],21,-57434055),c=b(c,p,d,u,r[g+12],6,1700485571),u=b(u,c,p,d,r[g+3],10,-1894986606),d=b(d,u,c,p,r[g+10],15,-1051523),p=b(p,d,u,c,r[g+1],21,-2054922799),c=b(c,p,d,u,r[g+8],6,1873313359),u=b(u,c,p,d,r[g+15],10,-30611744),d=b(d,u,c,p,r[g+6],15,-1560198380),p=b(p,d,u,c,r[g+13],21,1309151649),c=b(c,p,d,u,r[g+4],6,-145523070),u=b(u,c,p,d,r[g+11],10,-1120210379),d=b(d,u,c,p,r[g+2],15,718787259),p=b(p,d,u,c,r[g+9],21,-343485551),c=c+w>>>0,p=p+h>>>0,d=d+m>>>0,u=u+S>>>0}return n.endian([c,p,d,u])})._ff=function(e,t,r,n,a,s,o){var l=e+(t&r|~t&n)+(a>>>0)+o;return(l<<s|l>>>32-s)+t},l._gg=function(e,t,r,n,a,s,o){var l=e+(t&n|r&~n)+(a>>>0)+o;return(l<<s|l>>>32-s)+t},l._hh=function(e,t,r,n,a,s,o){var l=e+(t^r^n)+(a>>>0)+o;return(l<<s|l>>>32-s)+t},l._ii=function(e,t,r,n,a,s,o){var l=e+(r^(t|~n))+(a>>>0)+o;return(l<<s|l>>>32-s)+t},l._blocksize=16,l._digestsize=16,e.exports=function(e,t){if(null==e)throw new Error("Illegal argument "+e);var r=n.wordsToBytes(l(e,t));return t&&t.asBytes?r:t&&t.asString?o.bytesToString(r):n.bytesToHex(r)}},1020:(e,t,r)=>{"use strict";var n=r(1609),a=Symbol.for("react.element"),s=Symbol.for("react.fragment"),o=Object.prototype.hasOwnProperty,l=n.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED.ReactCurrentOwner,i={key:!0,ref:!0,__self:!0,__source:!0};function c(e,t,r){var n,s={},c=null,p=null;for(n in void 0!==r&&(c=""+r),void 0!==t.key&&(c=""+t.key),void 0!==t.ref&&(p=t.ref),t)o.call(t,n)&&!i.hasOwnProperty(n)&&(s[n]=t[n]);if(e&&e.defaultProps)for(n in t=e.defaultProps)void 0===s[n]&&(s[n]=t[n]);return{$$typeof:a,type:e,key:c,ref:p,props:s,_owner:l.current}}t.Fragment=s,t.jsx=c,t.jsxs=c},4848:(e,t,r)=>{"use strict";e.exports=r(1020)},1609:e=>{"use strict";e.exports=window.React}},t={};function r(n){var a=t[n];if(void 0!==a)return a.exports;var s=t[n]={exports:{}};return e[n](s,s.exports,r),s.exports}r.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return r.d(t,{a:t}),t},r.d=(e,t)=>{for(var n in t)r.o(t,n)&&!r.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{"use strict";const e=window.wp.blocks;var t,n=r(1609);function a(){return a=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var n in r)({}).hasOwnProperty.call(r,n)&&(e[n]=r[n])}return e},a.apply(null,arguments)}const s=window.wp.i18n,o=window.wp.blockEditor,l=window.wp.components,i=window.wp.serverSideRender;var c=r.n(i),p=r(3503),d=r.n(p);const u=window.wp.editPost,g=window.wp.data;function y(){return y=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var n in r)({}).hasOwnProperty.call(r,n)&&(e[n]=r[n])}return e},y.apply(null,arguments)}var f=function(e){return n.createElement("svg",y({xmlns:"http://www.w3.org/2000/svg",width:19,height:20,viewBox:"0 0 19 19"},e),n.createElement("path",{d:"M18.21.05c-.046.028-.187.196-.32.376-.132.18-.484.652-.777 1.047a75 75 0 0 0-1.218 1.703q-.346.496-.688.992a4 4 0 0 1-.246-.34 7.3 7.3 0 0 0-.945-1.144c-.313-.305-.52-.442-.864-.559-.32-.113-.882-.121-1.218-.016-.727.22-1.278.852-1.418 1.618-.047.27-.02.726.062 1.03.035.126.074.294.086.372l.02.14-.13.051a1 1 0 0 1-.171.051c-.024 0-.418-.543-.883-1.207-.687-.984-.895-1.258-1.14-1.504a4.1 4.1 0 0 0-1.192-.863c-.684-.324-1.047-.402-1.844-.399-.515 0-.61.008-.914.082a4.23 4.23 0 0 0-1.96 1.051A7.73 7.73 0 0 0 .163 9.695c.598 2.918 2.84 5.239 5.824 6.028 1.13.3 2.364.363 3.48.175a4 4 0 0 1 .345-.05c.003.004.023.164.042.355.082.82-.05 1.102-.625 1.348-.41.176-.437.195-.53.367-.141.27-.106.504.1.645.114.078.516.21.876.296.21.047.375.059.922.055.593 0 .699-.008.93-.066.605-.16 1.14-.399 1.55-.692.504-.355 1.05-.972 1.317-1.488.437-.844.457-1.79.054-2.438l-.11-.171.212-.133c.426-.262.941-.832 1.36-1.5 1.187-1.903 2.26-5.664 2.948-10.34.235-1.61.243-1.742.075-1.895-.188-.171-.559-.242-.723-.14m-.484 2.625c-.465 2.972-1.157 5.75-1.86 7.512-.078.195-.148.378-.16.406-.008.031-.031.05-.05.043-.192-.075-2.36-.918-2.36-.922-.02-.016.426-.973.683-1.477.633-1.234 1.38-2.472 2.391-3.965.602-.886 1.375-1.972 1.406-1.972.004 0-.015.168-.05.375M6.039 2.73c.512.141.973.415 1.336.79.098.101.563.734 1.027 1.41.47.672.899 1.27.953 1.324.247.25.575.375 1.004.375.5 0 .891-.156 1.23-.484.106-.106.235-.27.286-.368.086-.168.09-.199.09-.605 0-.387-.012-.461-.09-.719-.074-.23-.09-.328-.074-.469.043-.476.48-.8.898-.671.324.105 1.074 1.015 1.489 1.812l.183.352-.402.675c-.434.73-1.149 2.086-1.399 2.653-.808 1.847-1.07 3.222-.793 4.172a.5.5 0 0 1 .036.175c-.008.008-.098.032-.2.059a3 3 0 0 0-.457.172c-.215.101-.324.18-.543.39-.152.149-.32.348-.383.454l-.109.191-.238.062c-.578.153-.965.196-1.73.2-.801.004-1.122-.032-1.782-.2a6.8 6.8 0 0 1-3.926-2.714 6.35 6.35 0 0 1-1.11-3.2A6.43 6.43 0 0 1 3.103 3.68c.304-.32.554-.524.828-.672.273-.153.683-.293.972-.336.309-.047.86-.016 1.137.058M4.914 4.34c-.351.14-.523.3-.68.625-.074.152-.086.215-.086.465 0 .398.082.593.344.847.266.254.469.332.88.332.273.004.32-.007.515-.093.379-.176.633-.5.683-.891a1.165 1.165 0 0 0-.691-1.262c-.14-.066-.234-.082-.477-.09-.261-.007-.324 0-.488.067m-1.07 3.41c-.29.102-.512.297-.617.547a.993.993 0 0 0 .523 1.332c.234.105.61.113.832.016.367-.16.598-.485.625-.872.016-.289-.039-.468-.21-.687-.247-.313-.774-.465-1.153-.336m1.511 2.89c-.316.106-.507.305-.605.633a.9.9 0 0 0 .29.934c.6.512 1.55.09 1.55-.684a.84.84 0 0 0-.313-.687.91.91 0 0 0-.922-.195m9.875.925c-.015.07-.398.66-.562.871-.57.731-1.25 1.055-1.605.766-.118-.09-.262-.36-.317-.574-.047-.184-.047-.8 0-1.082.035-.227.18-.828.203-.867.024-.035 2.29.847 2.281.886m-2.41 2.735c.684.203.961.804.711 1.543-.3.89-1.12 1.629-2.105 1.906-.278.078-.781.14-.781.098 0-.012.035-.075.078-.137.129-.188.242-.57.265-.871.008-.152 0-.52-.023-.817-.04-.5-.035-.558.015-.742.168-.594.54-.969 1.028-1.043.238-.035.57-.011.812.063",style:{stroke:"none",fillRule:"evenodd",fill:"#5246ec",fillOpacity:1}}))};function v(e){const{deviceType:t}=(0,g.useSelect)((e=>({deviceType:e(u.store).__experimentalGetPreviewDeviceType()})),[]),{attributes:r,setAttributes:a}=e;styler.currentSelectedBlock!==e.clientId&&(styler.currentSelectedBlock=e.clientId,wp.hooks.doAction("StylerNeedsDestroy","GutenbergStyler"));const s=d()(e.selector);var o=e.wrapper,l=r.styler;if(!e.clientId)return!1;styler&&void 0===styler.GeneratedStyles.gutenberg.wrappers&&(styler.GeneratedStyles.gutenberg.wrappers={}),styler.GeneratedStyles.gutenberg.wrappers[e.clientId]&&styler.GeneratedStyles.gutenberg.wrappers[e.clientId]!==e.wrapperID&&(o=o.replaceAll(r.wrapperID,styler.GeneratedStyles.gutenberg.wrappers[e.clientId]));const i=l.match(/.wrapper-(.*?) /);if(i&&o!==i[0].trim()){l=l.replaceAll(i[0].trim(),o);const t=new RegExp(/\"cid\":\"(.*?)\"/,"g");let r;for(;r=t.exec(l);){var c=Math.floor(window.performance&&window.performance.now&&window.performance.timeOrigin?window.performance.now()+window.performance.timeOrigin:Date.now()).toString();l=l.replaceAll(r[1].trim(),c)}void 0!==e.setAttributes&&e.setAttributes({styler:l}),wp.hooks.doAction("StylerNeedsUpdateLive","GutenbergStyler",l)}styler.ActiveDevice!==t&&(styler.ActiveDevice=t,!0===styler.doDestroy&&(styler.doDestroy=!1,wp.hooks.doAction("StylerNeedsDestroy","GutenbergStyler")),wp.hooks.doAction("StylerNeedsUpdateLive","GutenbergStyler",l)),l=JSON.parse(l);var p={};p=l?void 0===l[s]?{cid:"",data:{}}:l[s]:{cid:"",data:{}};const y=(e,t)=>{switch(e){case"cid":p.cid=t;break;case"data":p.data=t}l[s]=p,wp.hooks.doAction("StylerNeedsUpdateLive","GutenbergStyler",l),a({styler:JSON.stringify(l)})};return(0,n.createElement)("div",{className:"climax-style"},(0,n.createElement)("div",{className:"gutenberg-styler-control-field"},(0,n.createElement)("div",{className:"gutenberg-styler-control-input-wrapper"},(0,n.createElement)("label",{className:"gutenberg-control-title"},e.label),(0,n.createElement)("div",{className:"tmp-styler-gutenberg-dialog-btn","data-title":e.label,"data-id":"gutenberg","data-parent-id":"","data-selector":e.selector,"data-wrapper":o,"data-type":"","data-active-device":t.toLowerCase(),"data-field-id":s,"data-is-svg":e.isSVG,"data-is-input":e.isInput,"data-hover-selector":e.hoverSelector},(0,n.createElement)("input",{type:"hidden",value:"string"==typeof p.data?p.data:JSON.stringify(p.data),"data-setting":"stdata",onInput:e=>{var t=e.target.value;y("data",t)}}),(0,n.createElement)("input",{type:"hidden",value:p.cid,"data-setting":"cid",onInput:e=>{var t=e.target.value;y("cid",t)}}),(0,n.createElement)(f,null)))),void 0!==e.description?(0,n.createElement)("div",{className:"gutenberg-styler-control-field-description"},e.description):"")}v.defaultProps={label:"",selector:"",wrapper:"",isSVG:!1,isInput:!1,hoverSelector:"",description:""};const b=v,w=(e,t,...r)=>{if(!e)return;styler&&void 0===styler.GeneratedStyles.gutenberg.wrappers&&(styler.GeneratedStyles.gutenberg.wrappers={});const n=styler.currentPageID?styler.currentPageID:wp.data.select("core/editor").getCurrentPostId(),a="wrapper-"+Date.now().toString(36)+Math.random().toString(36).substr(20)+"-"+n;return styler.GeneratedStyles.gutenberg.wrappers[e]=a,a},h=(e,t)=>{var r=!0,n=styler.currentPageID?styler.currentPageID:wp.data.select("core/editor").getCurrentPostId();if(n=null===n?"":n,e.split("-").at(-1).toString()!==n.toString())return!1;var a=styler.GeneratedStyles.gutenberg.wrappers;return Object.keys(a).map((n=>{a[n]===e&&n!==t&&(r=!1)})),r};function m(e){const{TagName:t,clientId:r,children:n,attributes:a,className:s}=e;var o=void 0===s?"":s;if(!r){var l="";return a&&(l=a.wrapperID),o=l&&void 0!==o?o+" "+l:l,wp.element.createElement(t,{...e,className:o},n)}return styler&&(void 0===styler.GeneratedStyles&&(styler.GeneratedStyles={}),void 0===styler.GeneratedStyles.gutenberg&&(styler.GeneratedStyles.gutenberg={}),void 0===styler.GeneratedStyles.gutenberg.wrappers&&(styler.GeneratedStyles.gutenberg.wrappers={})),l=a.wrapperID,void 0===styler?.GeneratedStyles?.gutenberg?.wrappers?.[r]?h(l,r)?styler.GeneratedStyles.gutenberg.wrappers[r]=l:l=w(r):styler.GeneratedStyles.gutenberg.wrappers[r]?l=styler.GeneratedStyles.gutenberg.wrappers[r]:h(l,r)?styler.GeneratedStyles.gutenberg.wrappers[r]=l:l=w(r),l!==a.wrapperID&&void 0!==e.setAttributes&&e.setAttributes({wrapperID:l}),l&&(o=o+" "+l),wp.element.createElement(t,{...e,className:o},n)}m.defaultProps={TagName:"div"};const S=m;var _=r(4848);const x=({attributes:e,setAttributes:t,clientId:r})=>{const{overlay:n,icon:a,icon_position:i}=e,c=()=>{t({icon:{value:"",url:"",type:""}})};return(0,_.jsxs)(o.InspectorControls,{children:[(0,_.jsxs)(l.PanelBody,{title:(0,s.__)("General","shop-press"),initialOpen:!0,children:[(0,_.jsx)(l.ToggleControl,{label:(0,s.__)("Overlay","shop-press"),checked:n,onChange:()=>t({overlay:!n})}),(0,_.jsx)(l.SelectControl,{label:(0,s.__)("Icon Position","shop-press"),value:i,options:[{label:"None",value:""},{label:"Before",value:"before"},{label:"After",value:"after"}],onChange:e=>t({icon_position:e}),__nextHasNoMarginBottom:!0}),(0,_.jsxs)(o.MediaUploadCheck,{children:[(0,_.jsx)(o.MediaUpload,{onSelect:e=>(e=>{const{id:r,url:n,type:a}=e;t({icon:{value:r,url:n,type:a}})})(e),allowedTypes:["image"],value:a?.value,render:({open:e})=>(0,_.jsxs)(_.Fragment,{children:[(0,_.jsx)(l.__experimentalHeading,{children:(0,s.__)("Icon","shop-press")}),(0,_.jsxs)("div",{style:{display:"flex",gap:"10px"},children:[(0,_.jsx)(l.Button,{variant:"primary",onClick:e,children:(0,s.__)("Upload","shop-press")}),a?.value&&(0,_.jsx)(l.Button,{variant:"secondary",onClick:c,children:(0,s.__)("Remove","shop-press")})]})]})}),a&&(0,_.jsx)("div",{style:{marginTop:"15px"},children:(0,_.jsx)("img",{width:70,src:a?.url})})]})]}),(0,_.jsxs)(l.PanelBody,{title:(0,s.__)("Styles","shop-press"),initialOpen:!1,children:[(0,_.jsx)(b,{clientId:r,label:(0,s.__)("Wrapper","shop-press"),selector:" .sp-product-add-to-cart",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:t}),(0,_.jsx)(b,{clientId:r,label:(0,s.__)("Button","shop-press"),selector:".sp-product-add-to-cart a.button:not([disabled]):not(.disabled)",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:t}),(0,_.jsx)(b,{clientId:r,label:(0,s.__)("Icon","shop-press"),selector:".sp-product-add-to-cart .sp-icon",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:t}),(0,_.jsx)(b,{clientId:r,label:(0,s.__)("Tooltip","shop-press"),selector:".sp-product-add-to-cart.overlay .sp-add-to-cart-label",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:t}),(0,_.jsx)(b,{clientId:r,label:(0,s.__)("Tooltip Arrow","shop-press"),selector:".sp-product-add-to-cart.overlay span:before",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:t})]})]})},I=JSON.parse('{"UU":"shop-press/loop-add-to-cart"}');(0,e.registerBlockType)(I.UU,{edit:e=>{const{attributes:t,setAttributes:r,clientId:n}=e,a=(0,o.useBlockProps)();return(0,_.jsxs)("div",{...a,children:[(0,_.jsx)(x,{attributes:t,setAttributes:r,clientId:n}),(0,_.jsx)(S,{...e,children:(0,_.jsx)(c(),{block:"shop-press/loop-add-to-cart",attributes:t})})]})},icon:function(e){return n.createElement("svg",a({xmlns:"http://www.w3.org/2000/svg",width:38.643,height:39.777,className:"add-to-cart_svg__block-icon"},e),t||(t=n.createElement("g",{"data-name":"Add to Cart"},n.createElement("g",{"data-name":"Group 72099"},n.createElement("g",{"data-name":"Group 72025"},n.createElement("g",{"data-name":"Group 72024"},n.createElement("path",{fill:"#b3b7c0",d:"M20.428 36.228H4.091a4.092 4.092 0 0 1-4.064-4.562L2.589 9.874a1.14 1.14 0 0 1 1.134-1.008H28.81a1.14 1.14 0 0 1 1.134 1.013l1.471 11.671a1.142 1.142 0 1 1-2.268.264l-1.348-10.671H4.734L2.282 31.925a1.81 1.81 0 0 0 1.8 2.021h16.341a1.142 1.142 0 1 1 0 2.28Z","data-name":"Path 10148"})),n.createElement("path",{fill:"#b3b7c0",d:"M22.906 14.093a1.14 1.14 0 0 1-1.142-1.142V7.786a5.5 5.5 0 0 0-11 0v5.162a1.142 1.142 0 1 1-2.28 0V7.783a7.783 7.783 0 1 1 15.565 0v5.165a1.14 1.14 0 0 1-1.144 1.141Z","data-name":"Path 10149"})),n.createElement("g",{"data-name":"Group 74451"},n.createElement("path",{fill:"none",d:"M30.817 25.337a7.5 7.5 0 0 1 2.794.531 7.2 7.2 0 0 1 2.282 1.448 6.8 6.8 0 0 1 1.538 2.147 6.41 6.41 0 0 1 0 5.26 6.8 6.8 0 0 1-1.538 2.147 7.2 7.2 0 0 1-2.282 1.448 7.62 7.62 0 0 1-5.588 0 7.2 7.2 0 0 1-2.284-1.448 6.8 6.8 0 0 1-1.536-2.147 6.41 6.41 0 0 1 0-5.26 6.8 6.8 0 0 1 1.536-2.147 7.2 7.2 0 0 1 2.284-1.448 7.5 7.5 0 0 1 2.794-.531","data-name":"Ellipse 616"}),n.createElement("path",{fill:"#837af5",d:"M30.819 26.081a5.872 5.872 0 1 0 2.293.459 5.9 5.9 0 0 0-2.293-.459m0-1.963a7.829 7.829 0 1 1-3.052.617 7.8 7.8 0 0 1 3.052-.617","data-name":"Ellipse 616 - Outline"}),n.createElement("g",{fill:"#837af5","data-name":"Group 72020"},n.createElement("path",{d:"M30.816 35.107a.855.855 0 0 1-.856-.856v-4.566a.858.858 0 1 1 1.716 0v4.566a.855.855 0 0 1-.856.856Z","data-name":"Line 99"}),n.createElement("path",{d:"M33.099 32.828h-4.566a.856.856 0 1 1 0-1.712h4.566a.856.856 0 0 1 0 1.712","data-name":"Line 100"})))))))}})})()})();