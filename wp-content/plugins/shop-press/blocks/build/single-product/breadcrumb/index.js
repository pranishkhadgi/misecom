(()=>{var e={2151:e=>{var t={utf8:{stringToBytes:function(e){return t.bin.stringToBytes(unescape(encodeURIComponent(e)))},bytesToString:function(e){return decodeURIComponent(escape(t.bin.bytesToString(e)))}},bin:{stringToBytes:function(e){for(var t=[],r=0;r<e.length;r++)t.push(255&e.charCodeAt(r));return t},bytesToString:function(e){for(var t=[],r=0;r<e.length;r++)t.push(String.fromCharCode(e[r]));return t.join("")}}};e.exports=t},3939:e=>{var t,r;t="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/",r={rotl:function(e,t){return e<<t|e>>>32-t},rotr:function(e,t){return e<<32-t|e>>>t},endian:function(e){if(e.constructor==Number)return 16711935&r.rotl(e,8)|4278255360&r.rotl(e,24);for(var t=0;t<e.length;t++)e[t]=r.endian(e[t]);return e},randomBytes:function(e){for(var t=[];e>0;e--)t.push(Math.floor(256*Math.random()));return t},bytesToWords:function(e){for(var t=[],r=0,n=0;r<e.length;r++,n+=8)t[n>>>5]|=e[r]<<24-n%32;return t},wordsToBytes:function(e){for(var t=[],r=0;r<32*e.length;r+=8)t.push(e[r>>>5]>>>24-r%32&255);return t},bytesToHex:function(e){for(var t=[],r=0;r<e.length;r++)t.push((e[r]>>>4).toString(16)),t.push((15&e[r]).toString(16));return t.join("")},hexToBytes:function(e){for(var t=[],r=0;r<e.length;r+=2)t.push(parseInt(e.substr(r,2),16));return t},bytesToBase64:function(e){for(var r=[],n=0;n<e.length;n+=3)for(var a=e[n]<<16|e[n+1]<<8|e[n+2],s=0;s<4;s++)8*n+6*s<=8*e.length?r.push(t.charAt(a>>>6*(3-s)&63)):r.push("=");return r.join("")},base64ToBytes:function(e){e=e.replace(/[^A-Z0-9+\/]/gi,"");for(var r=[],n=0,a=0;n<e.length;a=++n%4)0!=a&&r.push((t.indexOf(e.charAt(n-1))&Math.pow(2,-2*a+8)-1)<<2*a|t.indexOf(e.charAt(n))>>>6-2*a);return r}},e.exports=r},7206:e=>{function t(e){return!!e.constructor&&"function"==typeof e.constructor.isBuffer&&e.constructor.isBuffer(e)}e.exports=function(e){return null!=e&&(t(e)||function(e){return"function"==typeof e.readFloatLE&&"function"==typeof e.slice&&t(e.slice(0,0))}(e)||!!e._isBuffer)}},3503:(e,t,r)=>{var n,a,s,o,l;n=r(3939),a=r(2151).utf8,s=r(7206),o=r(2151).bin,(l=function(e,t){e.constructor==String?e=t&&"binary"===t.encoding?o.stringToBytes(e):a.stringToBytes(e):s(e)?e=Array.prototype.slice.call(e,0):Array.isArray(e)||e.constructor===Uint8Array||(e=e.toString());for(var r=n.bytesToWords(e),i=8*e.length,c=1732584193,p=-271733879,u=-1732584194,d=271733878,g=0;g<r.length;g++)r[g]=16711935&(r[g]<<8|r[g]>>>24)|4278255360&(r[g]<<24|r[g]>>>8);r[i>>>5]|=128<<i%32,r[14+(i+64>>>9<<4)]=i;var b=l._ff,y=l._gg,w=l._hh,f=l._ii;for(g=0;g<r.length;g+=16){var m=c,v=p,h=u,S=d;c=b(c,p,u,d,r[g+0],7,-680876936),d=b(d,c,p,u,r[g+1],12,-389564586),u=b(u,d,c,p,r[g+2],17,606105819),p=b(p,u,d,c,r[g+3],22,-1044525330),c=b(c,p,u,d,r[g+4],7,-176418897),d=b(d,c,p,u,r[g+5],12,1200080426),u=b(u,d,c,p,r[g+6],17,-1473231341),p=b(p,u,d,c,r[g+7],22,-45705983),c=b(c,p,u,d,r[g+8],7,1770035416),d=b(d,c,p,u,r[g+9],12,-1958414417),u=b(u,d,c,p,r[g+10],17,-42063),p=b(p,u,d,c,r[g+11],22,-1990404162),c=b(c,p,u,d,r[g+12],7,1804603682),d=b(d,c,p,u,r[g+13],12,-40341101),u=b(u,d,c,p,r[g+14],17,-1502002290),c=y(c,p=b(p,u,d,c,r[g+15],22,1236535329),u,d,r[g+1],5,-165796510),d=y(d,c,p,u,r[g+6],9,-1069501632),u=y(u,d,c,p,r[g+11],14,643717713),p=y(p,u,d,c,r[g+0],20,-373897302),c=y(c,p,u,d,r[g+5],5,-701558691),d=y(d,c,p,u,r[g+10],9,38016083),u=y(u,d,c,p,r[g+15],14,-660478335),p=y(p,u,d,c,r[g+4],20,-405537848),c=y(c,p,u,d,r[g+9],5,568446438),d=y(d,c,p,u,r[g+14],9,-1019803690),u=y(u,d,c,p,r[g+3],14,-187363961),p=y(p,u,d,c,r[g+8],20,1163531501),c=y(c,p,u,d,r[g+13],5,-1444681467),d=y(d,c,p,u,r[g+2],9,-51403784),u=y(u,d,c,p,r[g+7],14,1735328473),c=w(c,p=y(p,u,d,c,r[g+12],20,-1926607734),u,d,r[g+5],4,-378558),d=w(d,c,p,u,r[g+8],11,-2022574463),u=w(u,d,c,p,r[g+11],16,1839030562),p=w(p,u,d,c,r[g+14],23,-35309556),c=w(c,p,u,d,r[g+1],4,-1530992060),d=w(d,c,p,u,r[g+4],11,1272893353),u=w(u,d,c,p,r[g+7],16,-155497632),p=w(p,u,d,c,r[g+10],23,-1094730640),c=w(c,p,u,d,r[g+13],4,681279174),d=w(d,c,p,u,r[g+0],11,-358537222),u=w(u,d,c,p,r[g+3],16,-722521979),p=w(p,u,d,c,r[g+6],23,76029189),c=w(c,p,u,d,r[g+9],4,-640364487),d=w(d,c,p,u,r[g+12],11,-421815835),u=w(u,d,c,p,r[g+15],16,530742520),c=f(c,p=w(p,u,d,c,r[g+2],23,-995338651),u,d,r[g+0],6,-198630844),d=f(d,c,p,u,r[g+7],10,1126891415),u=f(u,d,c,p,r[g+14],15,-1416354905),p=f(p,u,d,c,r[g+5],21,-57434055),c=f(c,p,u,d,r[g+12],6,1700485571),d=f(d,c,p,u,r[g+3],10,-1894986606),u=f(u,d,c,p,r[g+10],15,-1051523),p=f(p,u,d,c,r[g+1],21,-2054922799),c=f(c,p,u,d,r[g+8],6,1873313359),d=f(d,c,p,u,r[g+15],10,-30611744),u=f(u,d,c,p,r[g+6],15,-1560198380),p=f(p,u,d,c,r[g+13],21,1309151649),c=f(c,p,u,d,r[g+4],6,-145523070),d=f(d,c,p,u,r[g+11],10,-1120210379),u=f(u,d,c,p,r[g+2],15,718787259),p=f(p,u,d,c,r[g+9],21,-343485551),c=c+m>>>0,p=p+v>>>0,u=u+h>>>0,d=d+S>>>0}return n.endian([c,p,u,d])})._ff=function(e,t,r,n,a,s,o){var l=e+(t&r|~t&n)+(a>>>0)+o;return(l<<s|l>>>32-s)+t},l._gg=function(e,t,r,n,a,s,o){var l=e+(t&n|r&~n)+(a>>>0)+o;return(l<<s|l>>>32-s)+t},l._hh=function(e,t,r,n,a,s,o){var l=e+(t^r^n)+(a>>>0)+o;return(l<<s|l>>>32-s)+t},l._ii=function(e,t,r,n,a,s,o){var l=e+(r^(t|~n))+(a>>>0)+o;return(l<<s|l>>>32-s)+t},l._blocksize=16,l._digestsize=16,e.exports=function(e,t){if(null==e)throw new Error("Illegal argument "+e);var r=n.wordsToBytes(l(e,t));return t&&t.asBytes?r:t&&t.asString?o.bytesToString(r):n.bytesToHex(r)}}},t={};function r(n){var a=t[n];if(void 0!==a)return a.exports;var s=t[n]={exports:{}};return e[n](s,s.exports,r),s.exports}r.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return r.d(t,{a:t}),t},r.d=(e,t)=>{for(var n in t)r.o(t,n)&&!r.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{"use strict";const e=window.wp.blocks,t=window.React;var n,a;function s(){return s=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var n in r)({}).hasOwnProperty.call(r,n)&&(e[n]=r[n])}return e},s.apply(null,arguments)}const o=window.wp.i18n,l=window.wp.blockEditor,i=window.wp.components,c=window.wp.serverSideRender;var p=r.n(c),u=r(3503),d=r.n(u);const g=window.wp.editPost,b=window.wp.data;function y(){return y=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var n in r)({}).hasOwnProperty.call(r,n)&&(e[n]=r[n])}return e},y.apply(null,arguments)}var w=function(e){return t.createElement("svg",y({xmlns:"http://www.w3.org/2000/svg",width:19,height:20,viewBox:"0 0 19 19"},e),t.createElement("path",{d:"M18.21.05c-.046.028-.187.196-.32.376-.132.18-.484.652-.777 1.047a75 75 0 0 0-1.218 1.703q-.346.496-.688.992a4 4 0 0 1-.246-.34 7.3 7.3 0 0 0-.945-1.144c-.313-.305-.52-.442-.864-.559-.32-.113-.882-.121-1.218-.016-.727.22-1.278.852-1.418 1.618-.047.27-.02.726.062 1.03.035.126.074.294.086.372l.02.14-.13.051a1 1 0 0 1-.171.051c-.024 0-.418-.543-.883-1.207-.687-.984-.895-1.258-1.14-1.504a4.1 4.1 0 0 0-1.192-.863c-.684-.324-1.047-.402-1.844-.399-.515 0-.61.008-.914.082a4.23 4.23 0 0 0-1.96 1.051A7.73 7.73 0 0 0 .163 9.695c.598 2.918 2.84 5.239 5.824 6.028 1.13.3 2.364.363 3.48.175a4 4 0 0 1 .345-.05c.003.004.023.164.042.355.082.82-.05 1.102-.625 1.348-.41.176-.437.195-.53.367-.141.27-.106.504.1.645.114.078.516.21.876.296.21.047.375.059.922.055.593 0 .699-.008.93-.066.605-.16 1.14-.399 1.55-.692.504-.355 1.05-.972 1.317-1.488.437-.844.457-1.79.054-2.438l-.11-.171.212-.133c.426-.262.941-.832 1.36-1.5 1.187-1.903 2.26-5.664 2.948-10.34.235-1.61.243-1.742.075-1.895-.188-.171-.559-.242-.723-.14m-.484 2.625c-.465 2.972-1.157 5.75-1.86 7.512-.078.195-.148.378-.16.406-.008.031-.031.05-.05.043-.192-.075-2.36-.918-2.36-.922-.02-.016.426-.973.683-1.477.633-1.234 1.38-2.472 2.391-3.965.602-.886 1.375-1.972 1.406-1.972.004 0-.015.168-.05.375M6.039 2.73c.512.141.973.415 1.336.79.098.101.563.734 1.027 1.41.47.672.899 1.27.953 1.324.247.25.575.375 1.004.375.5 0 .891-.156 1.23-.484.106-.106.235-.27.286-.368.086-.168.09-.199.09-.605 0-.387-.012-.461-.09-.719-.074-.23-.09-.328-.074-.469.043-.476.48-.8.898-.671.324.105 1.074 1.015 1.489 1.812l.183.352-.402.675c-.434.73-1.149 2.086-1.399 2.653-.808 1.847-1.07 3.222-.793 4.172a.5.5 0 0 1 .036.175c-.008.008-.098.032-.2.059a3 3 0 0 0-.457.172c-.215.101-.324.18-.543.39-.152.149-.32.348-.383.454l-.109.191-.238.062c-.578.153-.965.196-1.73.2-.801.004-1.122-.032-1.782-.2a6.8 6.8 0 0 1-3.926-2.714 6.35 6.35 0 0 1-1.11-3.2A6.43 6.43 0 0 1 3.103 3.68c.304-.32.554-.524.828-.672.273-.153.683-.293.972-.336.309-.047.86-.016 1.137.058M4.914 4.34c-.351.14-.523.3-.68.625-.074.152-.086.215-.086.465 0 .398.082.593.344.847.266.254.469.332.88.332.273.004.32-.007.515-.093.379-.176.633-.5.683-.891a1.165 1.165 0 0 0-.691-1.262c-.14-.066-.234-.082-.477-.09-.261-.007-.324 0-.488.067m-1.07 3.41c-.29.102-.512.297-.617.547a.993.993 0 0 0 .523 1.332c.234.105.61.113.832.016.367-.16.598-.485.625-.872.016-.289-.039-.468-.21-.687-.247-.313-.774-.465-1.153-.336m1.511 2.89c-.316.106-.507.305-.605.633a.9.9 0 0 0 .29.934c.6.512 1.55.09 1.55-.684a.84.84 0 0 0-.313-.687.91.91 0 0 0-.922-.195m9.875.925c-.015.07-.398.66-.562.871-.57.731-1.25 1.055-1.605.766-.118-.09-.262-.36-.317-.574-.047-.184-.047-.8 0-1.082.035-.227.18-.828.203-.867.024-.035 2.29.847 2.281.886m-2.41 2.735c.684.203.961.804.711 1.543-.3.89-1.12 1.629-2.105 1.906-.278.078-.781.14-.781.098 0-.012.035-.075.078-.137.129-.188.242-.57.265-.871.008-.152 0-.52-.023-.817-.04-.5-.035-.558.015-.742.168-.594.54-.969 1.028-1.043.238-.035.57-.011.812.063",style:{stroke:"none",fillRule:"evenodd",fill:"#5246ec",fillOpacity:1}}))};function f(e){const{deviceType:r}=(0,b.useSelect)((e=>({deviceType:e(g.store).__experimentalGetPreviewDeviceType()})),[]),{attributes:n,setAttributes:a}=e;styler.currentSelectedBlock!==e.clientId&&(styler.currentSelectedBlock=e.clientId,wp.hooks.doAction("StylerNeedsDestroy","GutenbergStyler"));const s=d()(e.selector);var o=e.wrapper,l=n.styler;if(!e.clientId)return!1;styler&&void 0===styler.GeneratedStyles.gutenberg.wrappers&&(styler.GeneratedStyles.gutenberg.wrappers={}),styler.GeneratedStyles.gutenberg.wrappers[e.clientId]&&styler.GeneratedStyles.gutenberg.wrappers[e.clientId]!==e.wrapperID&&(o=o.replaceAll(n.wrapperID,styler.GeneratedStyles.gutenberg.wrappers[e.clientId]));const i=l.match(/.wrapper-(.*?) /);if(i&&o!==i[0].trim()){l=l.replaceAll(i[0].trim(),o);const t=new RegExp(/\"cid\":\"(.*?)\"/,"g");let r;for(;r=t.exec(l);){var c=Math.floor(window.performance&&window.performance.now&&window.performance.timeOrigin?window.performance.now()+window.performance.timeOrigin:Date.now()).toString();l=l.replaceAll(r[1].trim(),c)}void 0!==e.setAttributes&&e.setAttributes({styler:l}),wp.hooks.doAction("StylerNeedsUpdateLive","GutenbergStyler",l)}styler.ActiveDevice!==r&&(styler.ActiveDevice=r,!0===styler.doDestroy&&(styler.doDestroy=!1,wp.hooks.doAction("StylerNeedsDestroy","GutenbergStyler")),wp.hooks.doAction("StylerNeedsUpdateLive","GutenbergStyler",l)),l=JSON.parse(l);var p={};p=l?void 0===l[s]?{cid:"",data:{}}:l[s]:{cid:"",data:{}};const u=(e,t)=>{switch(e){case"cid":p.cid=t;break;case"data":p.data=t}l[s]=p,wp.hooks.doAction("StylerNeedsUpdateLive","GutenbergStyler",l),a({styler:JSON.stringify(l)})};return(0,t.createElement)("div",{className:"climax-style"},(0,t.createElement)("div",{className:"gutenberg-styler-control-field"},(0,t.createElement)("div",{className:"gutenberg-styler-control-input-wrapper"},(0,t.createElement)("label",{className:"gutenberg-control-title"},e.label),(0,t.createElement)("div",{className:"tmp-styler-gutenberg-dialog-btn","data-title":e.label,"data-id":"gutenberg","data-parent-id":"","data-selector":e.selector,"data-wrapper":o,"data-type":"","data-active-device":r.toLowerCase(),"data-field-id":s,"data-is-svg":e.isSVG,"data-is-input":e.isInput,"data-hover-selector":e.hoverSelector},(0,t.createElement)("input",{type:"hidden",value:"string"==typeof p.data?p.data:JSON.stringify(p.data),"data-setting":"stdata",onInput:e=>{var t=e.target.value;u("data",t)}}),(0,t.createElement)("input",{type:"hidden",value:p.cid,"data-setting":"cid",onInput:e=>{var t=e.target.value;u("cid",t)}}),(0,t.createElement)(w,null)))),void 0!==e.description?(0,t.createElement)("div",{className:"gutenberg-styler-control-field-description"},e.description):"")}f.defaultProps={label:"",selector:"",wrapper:"",isSVG:!1,isInput:!1,hoverSelector:"",description:""};const m=f,v=(e,t,...r)=>{if(!e)return;styler&&void 0===styler.GeneratedStyles.gutenberg.wrappers&&(styler.GeneratedStyles.gutenberg.wrappers={});const n=styler.currentPageID?styler.currentPageID:wp.data.select("core/editor").getCurrentPostId(),a="wrapper-"+Date.now().toString(36)+Math.random().toString(36).substr(20)+"-"+n;return styler.GeneratedStyles.gutenberg.wrappers[e]=a,a},h=(e,t)=>{var r=!0,n=styler.currentPageID?styler.currentPageID:wp.data.select("core/editor").getCurrentPostId();if(n=null===n?"":n,e.split("-").at(-1).toString()!==n.toString())return!1;var a=styler.GeneratedStyles.gutenberg.wrappers;return Object.keys(a).map((n=>{a[n]===e&&n!==t&&(r=!1)})),r};function S(e){const{TagName:t,clientId:r,children:n,attributes:a,className:s}=e;var o=void 0===s?"":s;if(!r){var l="";return a&&(l=a.wrapperID),o=l&&void 0!==o?o+" "+l:l,wp.element.createElement(t,{...e,className:o},n)}return styler&&(void 0===styler.GeneratedStyles&&(styler.GeneratedStyles={}),void 0===styler.GeneratedStyles.gutenberg&&(styler.GeneratedStyles.gutenberg={}),void 0===styler.GeneratedStyles.gutenberg.wrappers&&(styler.GeneratedStyles.gutenberg.wrappers={})),l=a.wrapperID,void 0===styler?.GeneratedStyles?.gutenberg?.wrappers?.[r]?h(l,r)?styler.GeneratedStyles.gutenberg.wrappers[r]=l:l=v(r):styler.GeneratedStyles.gutenberg.wrappers[r]?l=styler.GeneratedStyles.gutenberg.wrappers[r]:h(l,r)?styler.GeneratedStyles.gutenberg.wrappers[r]=l:l=v(r),l!==a.wrapperID&&void 0!==e.setAttributes&&e.setAttributes({wrapperID:l}),l&&(o=o+" "+l),wp.element.createElement(t,{...e,className:o},n)}S.defaultProps={TagName:"div"};const I=S,A=({attributes:e,setAttributes:r,clientId:n})=>(0,t.createElement)(l.InspectorControls,null,(0,t.createElement)(i.PanelBody,{title:(0,o.__)("Styles","shop-press"),initialOpen:!0},(0,t.createElement)(m,{clientId:n,label:(0,o.__)("Wrapper","shop-press"),selector:".sp-breadcrumbs-wrapper",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:r}),(0,t.createElement)(m,{clientId:n,label:(0,o.__)("Container","shop-press"),selector:".sp-breadcrumbs-wrapper .sp-breadcrumbs",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:r}),(0,t.createElement)(m,{clientId:n,label:(0,o.__)("Breadcrumb","shop-press"),selector:".sp-breadcrumbs nav.woocommerce-breadcrumb",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:r}),(0,t.createElement)(m,{clientId:n,label:(0,o.__)("Link","shop-press"),selector:".sp-breadcrumbs nav.woocommerce-breadcrumb a",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:r}),(0,t.createElement)(m,{clientId:n,label:(0,o.__)("Product Name","shop-press"),selector:".sp-breadcrumbs nav.woocommerce-breadcrumb span",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:r}))),E=JSON.parse('{"UU":"shop-press/product-breadcrumb"}');(0,e.registerBlockType)(E.UU,{edit:e=>{const{attributes:r,setAttributes:n,clientId:a}=e,s=(0,l.useBlockProps)();return(0,t.createElement)("div",{...s},(0,t.createElement)(A,{attributes:r,setAttributes:n,clientId:a}),(0,t.createElement)(I,{...e},(0,t.createElement)(p(),{block:"shop-press/product-breadcrumb",attributes:r})))},icon:function(e){return t.createElement("svg",s({xmlns:"http://www.w3.org/2000/svg",width:39.633,height:37.065,className:"product-breadcrumb_svg__block-icon"},e),n||(n=t.createElement("g",{"data-name":"Group 72097"},t.createElement("path",{fill:"#837af5",d:"M2.928 1.653a1.275 1.275 0 0 0-1.275 1.275v3.513a1.275 1.275 0 0 0 1.275 1.272h7.642a13 13 0 0 0 1.15-1.033c1.215-1.247 1.31-1.949 1.31-2.134A3.4 3.4 0 0 0 11.8 2.63a11 11 0 0 0-1.186-.976zm0-1.654h8.2s3.555 2.2 3.555 4.547-3.555 4.822-3.555 4.822h-8.2A2.93 2.93 0 0 1 0 6.44V2.928A2.93 2.93 0 0 1 2.928 0","data-name":"Path 10142"}),t.createElement("path",{fill:"none",d:"M12.444 0h23.573s3.616 2.283 3.616 4.624-3.616 4.743-3.616 4.743H12.444s3.781-2.398 3.781-4.743S12.444 0 12.444 0","data-name":"Path 10143"}),t.createElement("path",{fill:"#b3b7c0",d:"M16.77 1.653a5 5 0 0 1 1.108 2.971 5.2 5.2 0 0 1-1.178 3.09h18.785a12 12 0 0 0 1.212-1.049c1.187-1.187 1.28-1.861 1.28-2.04s-.091-.836-1.258-1.962a11.5 11.5 0 0 0-1.212-1.01zM12.444 0h23.573s3.616 2.283 3.616 4.624-3.616 4.743-3.616 4.743H12.444s3.781-2.398 3.781-4.743S12.444 0 12.444 0","data-name":"Path 10143 - Outline"}))),a||(a=t.createElement("path",{fill:"#b3b7c0",d:"M34.353 37.06H5.634a5.8 5.8 0 0 1-5.629-5.941L0 13.69a1.081 1.081 0 0 1 2.158 0l.005 17.431a3.637 3.637 0 0 0 3.466 3.784h28.716a1.081 1.081 0 1 1 0 2.158Z","data-name":"Path 9982"})))}})})()})();