(()=>{var e={2151:e=>{var t={utf8:{stringToBytes:function(e){return t.bin.stringToBytes(unescape(encodeURIComponent(e)))},bytesToString:function(e){return decodeURIComponent(escape(t.bin.bytesToString(e)))}},bin:{stringToBytes:function(e){for(var t=[],r=0;r<e.length;r++)t.push(255&e.charCodeAt(r));return t},bytesToString:function(e){for(var t=[],r=0;r<e.length;r++)t.push(String.fromCharCode(e[r]));return t.join("")}}};e.exports=t},3939:e=>{var t,r;t="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/",r={rotl:function(e,t){return e<<t|e>>>32-t},rotr:function(e,t){return e<<32-t|e>>>t},endian:function(e){if(e.constructor==Number)return 16711935&r.rotl(e,8)|4278255360&r.rotl(e,24);for(var t=0;t<e.length;t++)e[t]=r.endian(e[t]);return e},randomBytes:function(e){for(var t=[];e>0;e--)t.push(Math.floor(256*Math.random()));return t},bytesToWords:function(e){for(var t=[],r=0,a=0;r<e.length;r++,a+=8)t[a>>>5]|=e[r]<<24-a%32;return t},wordsToBytes:function(e){for(var t=[],r=0;r<32*e.length;r+=8)t.push(e[r>>>5]>>>24-r%32&255);return t},bytesToHex:function(e){for(var t=[],r=0;r<e.length;r++)t.push((e[r]>>>4).toString(16)),t.push((15&e[r]).toString(16));return t.join("")},hexToBytes:function(e){for(var t=[],r=0;r<e.length;r+=2)t.push(parseInt(e.substr(r,2),16));return t},bytesToBase64:function(e){for(var r=[],a=0;a<e.length;a+=3)for(var n=e[a]<<16|e[a+1]<<8|e[a+2],o=0;o<4;o++)8*a+6*o<=8*e.length?r.push(t.charAt(n>>>6*(3-o)&63)):r.push("=");return r.join("")},base64ToBytes:function(e){e=e.replace(/[^A-Z0-9+\/]/gi,"");for(var r=[],a=0,n=0;a<e.length;n=++a%4)0!=n&&r.push((t.indexOf(e.charAt(a-1))&Math.pow(2,-2*n+8)-1)<<2*n|t.indexOf(e.charAt(a))>>>6-2*n);return r}},e.exports=r},7206:e=>{function t(e){return!!e.constructor&&"function"==typeof e.constructor.isBuffer&&e.constructor.isBuffer(e)}e.exports=function(e){return null!=e&&(t(e)||function(e){return"function"==typeof e.readFloatLE&&"function"==typeof e.slice&&t(e.slice(0,0))}(e)||!!e._isBuffer)}},3503:(e,t,r)=>{var a,n,o,s,l;a=r(3939),n=r(2151).utf8,o=r(7206),s=r(2151).bin,(l=function(e,t){e.constructor==String?e=t&&"binary"===t.encoding?s.stringToBytes(e):n.stringToBytes(e):o(e)?e=Array.prototype.slice.call(e,0):Array.isArray(e)||e.constructor===Uint8Array||(e=e.toString());for(var r=a.bytesToWords(e),c=8*e.length,i=1732584193,u=-271733879,p=-1732584194,d=271733878,m=0;m<r.length;m++)r[m]=16711935&(r[m]<<8|r[m]>>>24)|4278255360&(r[m]<<24|r[m]>>>8);r[c>>>5]|=128<<c%32,r[14+(c+64>>>9<<4)]=c;var b=l._ff,g=l._gg,w=l._hh,y=l._ii;for(m=0;m<r.length;m+=16){var v=i,f=u,h=p,S=d;i=b(i,u,p,d,r[m+0],7,-680876936),d=b(d,i,u,p,r[m+1],12,-389564586),p=b(p,d,i,u,r[m+2],17,606105819),u=b(u,p,d,i,r[m+3],22,-1044525330),i=b(i,u,p,d,r[m+4],7,-176418897),d=b(d,i,u,p,r[m+5],12,1200080426),p=b(p,d,i,u,r[m+6],17,-1473231341),u=b(u,p,d,i,r[m+7],22,-45705983),i=b(i,u,p,d,r[m+8],7,1770035416),d=b(d,i,u,p,r[m+9],12,-1958414417),p=b(p,d,i,u,r[m+10],17,-42063),u=b(u,p,d,i,r[m+11],22,-1990404162),i=b(i,u,p,d,r[m+12],7,1804603682),d=b(d,i,u,p,r[m+13],12,-40341101),p=b(p,d,i,u,r[m+14],17,-1502002290),i=g(i,u=b(u,p,d,i,r[m+15],22,1236535329),p,d,r[m+1],5,-165796510),d=g(d,i,u,p,r[m+6],9,-1069501632),p=g(p,d,i,u,r[m+11],14,643717713),u=g(u,p,d,i,r[m+0],20,-373897302),i=g(i,u,p,d,r[m+5],5,-701558691),d=g(d,i,u,p,r[m+10],9,38016083),p=g(p,d,i,u,r[m+15],14,-660478335),u=g(u,p,d,i,r[m+4],20,-405537848),i=g(i,u,p,d,r[m+9],5,568446438),d=g(d,i,u,p,r[m+14],9,-1019803690),p=g(p,d,i,u,r[m+3],14,-187363961),u=g(u,p,d,i,r[m+8],20,1163531501),i=g(i,u,p,d,r[m+13],5,-1444681467),d=g(d,i,u,p,r[m+2],9,-51403784),p=g(p,d,i,u,r[m+7],14,1735328473),i=w(i,u=g(u,p,d,i,r[m+12],20,-1926607734),p,d,r[m+5],4,-378558),d=w(d,i,u,p,r[m+8],11,-2022574463),p=w(p,d,i,u,r[m+11],16,1839030562),u=w(u,p,d,i,r[m+14],23,-35309556),i=w(i,u,p,d,r[m+1],4,-1530992060),d=w(d,i,u,p,r[m+4],11,1272893353),p=w(p,d,i,u,r[m+7],16,-155497632),u=w(u,p,d,i,r[m+10],23,-1094730640),i=w(i,u,p,d,r[m+13],4,681279174),d=w(d,i,u,p,r[m+0],11,-358537222),p=w(p,d,i,u,r[m+3],16,-722521979),u=w(u,p,d,i,r[m+6],23,76029189),i=w(i,u,p,d,r[m+9],4,-640364487),d=w(d,i,u,p,r[m+12],11,-421815835),p=w(p,d,i,u,r[m+15],16,530742520),i=y(i,u=w(u,p,d,i,r[m+2],23,-995338651),p,d,r[m+0],6,-198630844),d=y(d,i,u,p,r[m+7],10,1126891415),p=y(p,d,i,u,r[m+14],15,-1416354905),u=y(u,p,d,i,r[m+5],21,-57434055),i=y(i,u,p,d,r[m+12],6,1700485571),d=y(d,i,u,p,r[m+3],10,-1894986606),p=y(p,d,i,u,r[m+10],15,-1051523),u=y(u,p,d,i,r[m+1],21,-2054922799),i=y(i,u,p,d,r[m+8],6,1873313359),d=y(d,i,u,p,r[m+15],10,-30611744),p=y(p,d,i,u,r[m+6],15,-1560198380),u=y(u,p,d,i,r[m+13],21,1309151649),i=y(i,u,p,d,r[m+4],6,-145523070),d=y(d,i,u,p,r[m+11],10,-1120210379),p=y(p,d,i,u,r[m+2],15,718787259),u=y(u,p,d,i,r[m+9],21,-343485551),i=i+v>>>0,u=u+f>>>0,p=p+h>>>0,d=d+S>>>0}return a.endian([i,u,p,d])})._ff=function(e,t,r,a,n,o,s){var l=e+(t&r|~t&a)+(n>>>0)+s;return(l<<o|l>>>32-o)+t},l._gg=function(e,t,r,a,n,o,s){var l=e+(t&a|r&~a)+(n>>>0)+s;return(l<<o|l>>>32-o)+t},l._hh=function(e,t,r,a,n,o,s){var l=e+(t^r^a)+(n>>>0)+s;return(l<<o|l>>>32-o)+t},l._ii=function(e,t,r,a,n,o,s){var l=e+(r^(t|~a))+(n>>>0)+s;return(l<<o|l>>>32-o)+t},l._blocksize=16,l._digestsize=16,e.exports=function(e,t){if(null==e)throw new Error("Illegal argument "+e);var r=a.wordsToBytes(l(e,t));return t&&t.asBytes?r:t&&t.asString?s.bytesToString(r):a.bytesToHex(r)}}},t={};function r(a){var n=t[a];if(void 0!==n)return n.exports;var o=t[a]={exports:{}};return e[a](o,o.exports,r),o.exports}r.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return r.d(t,{a:t}),t},r.d=(e,t)=>{for(var a in t)r.o(t,a)&&!r.o(e,a)&&Object.defineProperty(e,a,{enumerable:!0,get:t[a]})},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{"use strict";const e=window.wp.blocks,t=window.React;var a;function n(){return n=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var a in r)({}).hasOwnProperty.call(r,a)&&(e[a]=r[a])}return e},n.apply(null,arguments)}const o=window.wp.i18n,s=window.wp.blockEditor,l=window.wp.components;var c=r(3503),i=r.n(c);const u=window.wp.editPost,p=window.wp.data;function d(){return d=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var a in r)({}).hasOwnProperty.call(r,a)&&(e[a]=r[a])}return e},d.apply(null,arguments)}var m=function(e){return t.createElement("svg",d({xmlns:"http://www.w3.org/2000/svg",width:19,height:20,viewBox:"0 0 19 19"},e),t.createElement("path",{d:"M18.21.05c-.046.028-.187.196-.32.376-.132.18-.484.652-.777 1.047a75 75 0 0 0-1.218 1.703q-.346.496-.688.992a4 4 0 0 1-.246-.34 7.3 7.3 0 0 0-.945-1.144c-.313-.305-.52-.442-.864-.559-.32-.113-.882-.121-1.218-.016-.727.22-1.278.852-1.418 1.618-.047.27-.02.726.062 1.03.035.126.074.294.086.372l.02.14-.13.051a1 1 0 0 1-.171.051c-.024 0-.418-.543-.883-1.207-.687-.984-.895-1.258-1.14-1.504a4.1 4.1 0 0 0-1.192-.863c-.684-.324-1.047-.402-1.844-.399-.515 0-.61.008-.914.082a4.23 4.23 0 0 0-1.96 1.051A7.73 7.73 0 0 0 .163 9.695c.598 2.918 2.84 5.239 5.824 6.028 1.13.3 2.364.363 3.48.175a4 4 0 0 1 .345-.05c.003.004.023.164.042.355.082.82-.05 1.102-.625 1.348-.41.176-.437.195-.53.367-.141.27-.106.504.1.645.114.078.516.21.876.296.21.047.375.059.922.055.593 0 .699-.008.93-.066.605-.16 1.14-.399 1.55-.692.504-.355 1.05-.972 1.317-1.488.437-.844.457-1.79.054-2.438l-.11-.171.212-.133c.426-.262.941-.832 1.36-1.5 1.187-1.903 2.26-5.664 2.948-10.34.235-1.61.243-1.742.075-1.895-.188-.171-.559-.242-.723-.14m-.484 2.625c-.465 2.972-1.157 5.75-1.86 7.512-.078.195-.148.378-.16.406-.008.031-.031.05-.05.043-.192-.075-2.36-.918-2.36-.922-.02-.016.426-.973.683-1.477.633-1.234 1.38-2.472 2.391-3.965.602-.886 1.375-1.972 1.406-1.972.004 0-.015.168-.05.375M6.039 2.73c.512.141.973.415 1.336.79.098.101.563.734 1.027 1.41.47.672.899 1.27.953 1.324.247.25.575.375 1.004.375.5 0 .891-.156 1.23-.484.106-.106.235-.27.286-.368.086-.168.09-.199.09-.605 0-.387-.012-.461-.09-.719-.074-.23-.09-.328-.074-.469.043-.476.48-.8.898-.671.324.105 1.074 1.015 1.489 1.812l.183.352-.402.675c-.434.73-1.149 2.086-1.399 2.653-.808 1.847-1.07 3.222-.793 4.172a.5.5 0 0 1 .036.175c-.008.008-.098.032-.2.059a3 3 0 0 0-.457.172c-.215.101-.324.18-.543.39-.152.149-.32.348-.383.454l-.109.191-.238.062c-.578.153-.965.196-1.73.2-.801.004-1.122-.032-1.782-.2a6.8 6.8 0 0 1-3.926-2.714 6.35 6.35 0 0 1-1.11-3.2A6.43 6.43 0 0 1 3.103 3.68c.304-.32.554-.524.828-.672.273-.153.683-.293.972-.336.309-.047.86-.016 1.137.058M4.914 4.34c-.351.14-.523.3-.68.625-.074.152-.086.215-.086.465 0 .398.082.593.344.847.266.254.469.332.88.332.273.004.32-.007.515-.093.379-.176.633-.5.683-.891a1.165 1.165 0 0 0-.691-1.262c-.14-.066-.234-.082-.477-.09-.261-.007-.324 0-.488.067m-1.07 3.41c-.29.102-.512.297-.617.547a.993.993 0 0 0 .523 1.332c.234.105.61.113.832.016.367-.16.598-.485.625-.872.016-.289-.039-.468-.21-.687-.247-.313-.774-.465-1.153-.336m1.511 2.89c-.316.106-.507.305-.605.633a.9.9 0 0 0 .29.934c.6.512 1.55.09 1.55-.684a.84.84 0 0 0-.313-.687.91.91 0 0 0-.922-.195m9.875.925c-.015.07-.398.66-.562.871-.57.731-1.25 1.055-1.605.766-.118-.09-.262-.36-.317-.574-.047-.184-.047-.8 0-1.082.035-.227.18-.828.203-.867.024-.035 2.29.847 2.281.886m-2.41 2.735c.684.203.961.804.711 1.543-.3.89-1.12 1.629-2.105 1.906-.278.078-.781.14-.781.098 0-.012.035-.075.078-.137.129-.188.242-.57.265-.871.008-.152 0-.52-.023-.817-.04-.5-.035-.558.015-.742.168-.594.54-.969 1.028-1.043.238-.035.57-.011.812.063",style:{stroke:"none",fillRule:"evenodd",fill:"#5246ec",fillOpacity:1}}))};function b(e){const{deviceType:r}=(0,p.useSelect)((e=>({deviceType:e(u.store).__experimentalGetPreviewDeviceType()})),[]),{attributes:a,setAttributes:n}=e;styler.currentSelectedBlock!==e.clientId&&(styler.currentSelectedBlock=e.clientId,wp.hooks.doAction("StylerNeedsDestroy","GutenbergStyler"));const o=i()(e.selector);var s=e.wrapper,l=a.styler;if(!e.clientId)return!1;styler&&void 0===styler.GeneratedStyles.gutenberg.wrappers&&(styler.GeneratedStyles.gutenberg.wrappers={}),styler.GeneratedStyles.gutenberg.wrappers[e.clientId]&&styler.GeneratedStyles.gutenberg.wrappers[e.clientId]!==e.wrapperID&&(s=s.replaceAll(a.wrapperID,styler.GeneratedStyles.gutenberg.wrappers[e.clientId]));const c=l.match(/.wrapper-(.*?) /);if(c&&s!==c[0].trim()){l=l.replaceAll(c[0].trim(),s);const t=new RegExp(/\"cid\":\"(.*?)\"/,"g");let r;for(;r=t.exec(l);){var d=Math.floor(window.performance&&window.performance.now&&window.performance.timeOrigin?window.performance.now()+window.performance.timeOrigin:Date.now()).toString();l=l.replaceAll(r[1].trim(),d)}void 0!==e.setAttributes&&e.setAttributes({styler:l}),wp.hooks.doAction("StylerNeedsUpdateLive","GutenbergStyler",l)}styler.ActiveDevice!==r&&(styler.ActiveDevice=r,!0===styler.doDestroy&&(styler.doDestroy=!1,wp.hooks.doAction("StylerNeedsDestroy","GutenbergStyler")),wp.hooks.doAction("StylerNeedsUpdateLive","GutenbergStyler",l)),l=JSON.parse(l);var b={};b=l?void 0===l[o]?{cid:"",data:{}}:l[o]:{cid:"",data:{}};const g=(e,t)=>{switch(e){case"cid":b.cid=t;break;case"data":b.data=t}l[o]=b,wp.hooks.doAction("StylerNeedsUpdateLive","GutenbergStyler",l),n({styler:JSON.stringify(l)})};return(0,t.createElement)("div",{className:"climax-style"},(0,t.createElement)("div",{className:"gutenberg-styler-control-field"},(0,t.createElement)("div",{className:"gutenberg-styler-control-input-wrapper"},(0,t.createElement)("label",{className:"gutenberg-control-title"},e.label),(0,t.createElement)("div",{className:"tmp-styler-gutenberg-dialog-btn","data-title":e.label,"data-id":"gutenberg","data-parent-id":"","data-selector":e.selector,"data-wrapper":s,"data-type":"","data-active-device":r.toLowerCase(),"data-field-id":o,"data-is-svg":e.isSVG,"data-is-input":e.isInput,"data-hover-selector":e.hoverSelector},(0,t.createElement)("input",{type:"hidden",value:"string"==typeof b.data?b.data:JSON.stringify(b.data),"data-setting":"stdata",onInput:e=>{var t=e.target.value;g("data",t)}}),(0,t.createElement)("input",{type:"hidden",value:b.cid,"data-setting":"cid",onInput:e=>{var t=e.target.value;g("cid",t)}}),(0,t.createElement)(m,null)))),void 0!==e.description?(0,t.createElement)("div",{className:"gutenberg-styler-control-field-description"},e.description):"")}b.defaultProps={label:"",selector:"",wrapper:"",isSVG:!1,isInput:!1,hoverSelector:"",description:""};const g=b,w=(e,t,...r)=>{if(!e)return;styler&&void 0===styler.GeneratedStyles.gutenberg.wrappers&&(styler.GeneratedStyles.gutenberg.wrappers={});const a=styler.currentPageID?styler.currentPageID:wp.data.select("core/editor").getCurrentPostId(),n="wrapper-"+Date.now().toString(36)+Math.random().toString(36).substr(20)+"-"+a;return styler.GeneratedStyles.gutenberg.wrappers[e]=n,n},y=(e,t)=>{var r=!0,a=styler.currentPageID?styler.currentPageID:wp.data.select("core/editor").getCurrentPostId();if(a=null===a?"":a,e.split("-").at(-1).toString()!==a.toString())return!1;var n=styler.GeneratedStyles.gutenberg.wrappers;return Object.keys(n).map((a=>{n[a]===e&&a!==t&&(r=!1)})),r};function v(e){const{TagName:t,clientId:r,children:a,attributes:n,className:o}=e;var s=void 0===o?"":o;if(!r){var l="";return n&&(l=n.wrapperID),s=l&&void 0!==s?s+" "+l:l,wp.element.createElement(t,{...e,className:s},a)}return styler&&(void 0===styler.GeneratedStyles&&(styler.GeneratedStyles={}),void 0===styler.GeneratedStyles.gutenberg&&(styler.GeneratedStyles.gutenberg={}),void 0===styler.GeneratedStyles.gutenberg.wrappers&&(styler.GeneratedStyles.gutenberg.wrappers={})),l=n.wrapperID,void 0===styler?.GeneratedStyles?.gutenberg?.wrappers?.[r]?y(l,r)?styler.GeneratedStyles.gutenberg.wrappers[r]=l:l=w(r):styler.GeneratedStyles.gutenberg.wrappers[r]?l=styler.GeneratedStyles.gutenberg.wrappers[r]:y(l,r)?styler.GeneratedStyles.gutenberg.wrappers[r]=l:l=w(r),l!==n.wrapperID&&void 0!==e.setAttributes&&e.setAttributes({wrapperID:l}),l&&(s=s+" "+l),wp.element.createElement(t,{...e,className:s},a)}v.defaultProps={TagName:"div"};const f=v,h=({attributes:e,setAttributes:r,clientId:a})=>(0,t.createElement)(s.InspectorControls,null,(0,t.createElement)(l.PanelBody,{title:(0,o.__)("Styles","shop-press"),initialOpen:!0},(0,t.createElement)(g,{clientId:a,label:(0,o.__)("Wrapper","shop-press"),selector:".sp-attributes-wrapper",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:r}),(0,t.createElement)(g,{clientId:a,label:(0,o.__)("Container","shop-press"),selector:".sp-attributes-wrapper .woocommerce-product-attributes",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:r}),(0,t.createElement)(g,{clientId:a,label:(0,o.__)("Table Body","shop-press"),selector:".woocommerce-product-attributes tbody",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:r}),(0,t.createElement)(g,{clientId:a,label:(0,o.__)("Table Row","shop-press"),selector:".woocommerce-product-attributes tbody tr.woocommerce-product-attributes-item",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:r}),(0,t.createElement)(g,{clientId:a,label:(0,o.__)("Table Header","shop-press"),selector:"tr.woocommerce-product-attributes-item th.woocommerce-product-attributes-item__label",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:r}),(0,t.createElement)(g,{clientId:a,label:(0,o.__)("Value","shop-press"),selector:"tr.woocommerce-product-attributes-item td.woocommerce-product-attributes-item__value",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:r}),(0,t.createElement)(g,{clientId:a,label:(0,o.__)("Value Content","shop-press"),selector:"td.woocommerce-product-attributes-item__value p",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:r}),(0,t.createElement)(g,{clientId:a,label:(0,o.__)("Link","shop-press"),selector:"td.woocommerce-product-attributes-item__value p a",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:r}))),S=JSON.parse('{"UU":"shop-press/product-attributes"}');(0,e.registerBlockType)(S.UU,{edit:e=>{const{attributes:r,setAttributes:a,clientId:n}=e,o=(0,s.useBlockProps)();return(0,t.createElement)("div",{...o},(0,t.createElement)(h,{attributes:r,setAttributes:a,clientId:n}),(0,t.createElement)(f,{...e},(0,t.createElement)("div",{className:"sp-attributes-wrapper"},(0,t.createElement)("table",{className:"woocommerce-product-attributes shop_attributes"},(0,t.createElement)("tbody",null,(0,t.createElement)("tr",{className:"woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_color"},(0,t.createElement)("th",{className:"woocommerce-product-attributes-item__label"},"Color"),(0,t.createElement)("td",{className:"woocommerce-product-attributes-item__value"},(0,t.createElement)("p",null,"Blue, Gray, Green, Red, Yellow"))),(0,t.createElement)("tr",{className:"woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_size"},(0,t.createElement)("th",{className:"woocommerce-product-attributes-item__label"},"Size"),(0,t.createElement)("td",{className:"woocommerce-product-attributes-item__value"},(0,t.createElement)("p",null,"Large, Medium, Small"))))))))},icon:function(e){return t.createElement("svg",n({xmlns:"http://www.w3.org/2000/svg",width:34.169,height:33.834,className:"product-attributes_svg__block-icon"},e),a||(a=t.createElement("g",{"data-name":"Product Attributes"},t.createElement("g",{"data-name":"Group 72091"},t.createElement("g",{"data-name":"Group 71994"},t.createElement("g",{fill:"#b3b7c0","data-name":"Group 71987"},t.createElement("path",{d:"M14.016 31.327H2.544a2.675 2.675 0 0 1-2.527-2.769V10.547a6.77 6.77 0 0 1 1.756-5.054 5.63 5.63 0 0 1 4.141-1.847h20.063a5.64 5.64 0 0 1 4.144 1.848 6.77 6.77 0 0 1 1.754 5.054v3.485a.904.904 0 0 1-1.808 0v-3.576a4.96 4.96 0 0 0-1.271-3.732 3.85 3.85 0 0 0-2.824-1.274H5.909a3.85 3.85 0 0 0-2.822 1.273 4.96 4.96 0 0 0-1.271 3.733v18.166a.866.866 0 0 0 .8.9h11.391a.904.904 0 1 1 0 1.808Z","data-name":"Path 10066"}),t.createElement("path",{d:"M21.501 16.192H10.41a2.755 2.755 0 0 1-2.751-2.751v-1.849a.904.904 0 1 1 1.808 0v1.849a.947.947 0 0 0 .947.947h11.091a.947.947 0 0 0 .947-.947v-1.849a.904.904 0 1 1 1.808 0v1.849a2.755 2.755 0 0 1-2.751 2.755Z","data-name":"Path 10068"}),t.createElement("path",{d:"M1.45 8.479a.9.9 0 0 1-.4-.086.9.9 0 0 1-.457-.517.9.9 0 0 1 .043-.689 26 26 0 0 1 2.076-3.43C4.475 1.32 6.177.091 7.766.09c.85 0 2.228-.016 3.824-.034 4.264-.047 10.1-.112 12.377.035 1.55.1 3.25 1.321 5.036 3.628a26 26 0 0 1 2.145 3.256.9.9 0 0 1 .073.686.9.9 0 0 1-.434.537.9.9 0 0 1-.686.073.9.9 0 0 1-.537-.434 25 25 0 0 0-2-3.025c-1.413-1.817-2.732-2.852-3.712-2.916-2.206-.143-8.008-.078-12.241-.032-1.6.018-2.984.034-3.844.034-.955 0-2.232 1.038-3.6 2.921a24.4 24.4 0 0 0-1.918 3.159.9.9 0 0 1-.812.5Z","data-name":"Path 10120"})))),t.createElement("g",{"data-name":"Group 1"},t.createElement("g",{"data-name":"Group 6"},t.createElement("g",{"data-name":"Group 5"},t.createElement("g",{"data-name":"Group 4"},t.createElement("path",{fill:"#837af5",d:"M22.667 33.834h-4.106a.82.82 0 0 1-.589-.25.82.82 0 0 1-.234-.593l.1-4.143a3.2 3.2 0 0 1 .941-2.178l8.193-8.2a3.44 3.44 0 0 1 4.856 0l1.334 1.333a3.434 3.434 0 0 1 0 4.858l-8.232 8.237a3.18 3.18 0 0 1-2.263.936m6.733-14.72a1.78 1.78 0 0 0-1.268.523l-8.194 8.191a1.55 1.55 0 0 0-.453 1.061l-.082 3.3h3.264a1.54 1.54 0 0 0 1.1-.453l8.232-8.232a1.79 1.79 0 0 0 0-2.537l-1.333-1.33a1.78 1.78 0 0 0-1.268-.523Z","data-name":"Fill 3"}))))))))}})})()})();