(()=>{var e={2151:e=>{var t={utf8:{stringToBytes:function(e){return t.bin.stringToBytes(unescape(encodeURIComponent(e)))},bytesToString:function(e){return decodeURIComponent(escape(t.bin.bytesToString(e)))}},bin:{stringToBytes:function(e){for(var t=[],r=0;r<e.length;r++)t.push(255&e.charCodeAt(r));return t},bytesToString:function(e){for(var t=[],r=0;r<e.length;r++)t.push(String.fromCharCode(e[r]));return t.join("")}}};e.exports=t},3939:e=>{var t,r;t="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/",r={rotl:function(e,t){return e<<t|e>>>32-t},rotr:function(e,t){return e<<32-t|e>>>t},endian:function(e){if(e.constructor==Number)return 16711935&r.rotl(e,8)|4278255360&r.rotl(e,24);for(var t=0;t<e.length;t++)e[t]=r.endian(e[t]);return e},randomBytes:function(e){for(var t=[];e>0;e--)t.push(Math.floor(256*Math.random()));return t},bytesToWords:function(e){for(var t=[],r=0,s=0;r<e.length;r++,s+=8)t[s>>>5]|=e[r]<<24-s%32;return t},wordsToBytes:function(e){for(var t=[],r=0;r<32*e.length;r+=8)t.push(e[r>>>5]>>>24-r%32&255);return t},bytesToHex:function(e){for(var t=[],r=0;r<e.length;r++)t.push((e[r]>>>4).toString(16)),t.push((15&e[r]).toString(16));return t.join("")},hexToBytes:function(e){for(var t=[],r=0;r<e.length;r+=2)t.push(parseInt(e.substr(r,2),16));return t},bytesToBase64:function(e){for(var r=[],s=0;s<e.length;s+=3)for(var n=e[s]<<16|e[s+1]<<8|e[s+2],a=0;a<4;a++)8*s+6*a<=8*e.length?r.push(t.charAt(n>>>6*(3-a)&63)):r.push("=");return r.join("")},base64ToBytes:function(e){e=e.replace(/[^A-Z0-9+\/]/gi,"");for(var r=[],s=0,n=0;s<e.length;n=++s%4)0!=n&&r.push((t.indexOf(e.charAt(s-1))&Math.pow(2,-2*n+8)-1)<<2*n|t.indexOf(e.charAt(s))>>>6-2*n);return r}},e.exports=r},7206:e=>{function t(e){return!!e.constructor&&"function"==typeof e.constructor.isBuffer&&e.constructor.isBuffer(e)}e.exports=function(e){return null!=e&&(t(e)||function(e){return"function"==typeof e.readFloatLE&&"function"==typeof e.slice&&t(e.slice(0,0))}(e)||!!e._isBuffer)}},3503:(e,t,r)=>{var s,n,a,o,l;s=r(3939),n=r(2151).utf8,a=r(7206),o=r(2151).bin,(l=function(e,t){e.constructor==String?e=t&&"binary"===t.encoding?o.stringToBytes(e):n.stringToBytes(e):a(e)?e=Array.prototype.slice.call(e,0):Array.isArray(e)||e.constructor===Uint8Array||(e=e.toString());for(var r=s.bytesToWords(e),i=8*e.length,p=1732584193,c=-271733879,u=-1732584194,d=271733878,g=0;g<r.length;g++)r[g]=16711935&(r[g]<<8|r[g]>>>24)|4278255360&(r[g]<<24|r[g]>>>8);r[i>>>5]|=128<<i%32,r[14+(i+64>>>9<<4)]=i;var y=l._ff,w=l._gg,h=l._hh,b=l._ii;for(g=0;g<r.length;g+=16){var f=p,v=c,m=u,_=d;p=y(p,c,u,d,r[g+0],7,-680876936),d=y(d,p,c,u,r[g+1],12,-389564586),u=y(u,d,p,c,r[g+2],17,606105819),c=y(c,u,d,p,r[g+3],22,-1044525330),p=y(p,c,u,d,r[g+4],7,-176418897),d=y(d,p,c,u,r[g+5],12,1200080426),u=y(u,d,p,c,r[g+6],17,-1473231341),c=y(c,u,d,p,r[g+7],22,-45705983),p=y(p,c,u,d,r[g+8],7,1770035416),d=y(d,p,c,u,r[g+9],12,-1958414417),u=y(u,d,p,c,r[g+10],17,-42063),c=y(c,u,d,p,r[g+11],22,-1990404162),p=y(p,c,u,d,r[g+12],7,1804603682),d=y(d,p,c,u,r[g+13],12,-40341101),u=y(u,d,p,c,r[g+14],17,-1502002290),p=w(p,c=y(c,u,d,p,r[g+15],22,1236535329),u,d,r[g+1],5,-165796510),d=w(d,p,c,u,r[g+6],9,-1069501632),u=w(u,d,p,c,r[g+11],14,643717713),c=w(c,u,d,p,r[g+0],20,-373897302),p=w(p,c,u,d,r[g+5],5,-701558691),d=w(d,p,c,u,r[g+10],9,38016083),u=w(u,d,p,c,r[g+15],14,-660478335),c=w(c,u,d,p,r[g+4],20,-405537848),p=w(p,c,u,d,r[g+9],5,568446438),d=w(d,p,c,u,r[g+14],9,-1019803690),u=w(u,d,p,c,r[g+3],14,-187363961),c=w(c,u,d,p,r[g+8],20,1163531501),p=w(p,c,u,d,r[g+13],5,-1444681467),d=w(d,p,c,u,r[g+2],9,-51403784),u=w(u,d,p,c,r[g+7],14,1735328473),p=h(p,c=w(c,u,d,p,r[g+12],20,-1926607734),u,d,r[g+5],4,-378558),d=h(d,p,c,u,r[g+8],11,-2022574463),u=h(u,d,p,c,r[g+11],16,1839030562),c=h(c,u,d,p,r[g+14],23,-35309556),p=h(p,c,u,d,r[g+1],4,-1530992060),d=h(d,p,c,u,r[g+4],11,1272893353),u=h(u,d,p,c,r[g+7],16,-155497632),c=h(c,u,d,p,r[g+10],23,-1094730640),p=h(p,c,u,d,r[g+13],4,681279174),d=h(d,p,c,u,r[g+0],11,-358537222),u=h(u,d,p,c,r[g+3],16,-722521979),c=h(c,u,d,p,r[g+6],23,76029189),p=h(p,c,u,d,r[g+9],4,-640364487),d=h(d,p,c,u,r[g+12],11,-421815835),u=h(u,d,p,c,r[g+15],16,530742520),p=b(p,c=h(c,u,d,p,r[g+2],23,-995338651),u,d,r[g+0],6,-198630844),d=b(d,p,c,u,r[g+7],10,1126891415),u=b(u,d,p,c,r[g+14],15,-1416354905),c=b(c,u,d,p,r[g+5],21,-57434055),p=b(p,c,u,d,r[g+12],6,1700485571),d=b(d,p,c,u,r[g+3],10,-1894986606),u=b(u,d,p,c,r[g+10],15,-1051523),c=b(c,u,d,p,r[g+1],21,-2054922799),p=b(p,c,u,d,r[g+8],6,1873313359),d=b(d,p,c,u,r[g+15],10,-30611744),u=b(u,d,p,c,r[g+6],15,-1560198380),c=b(c,u,d,p,r[g+13],21,1309151649),p=b(p,c,u,d,r[g+4],6,-145523070),d=b(d,p,c,u,r[g+11],10,-1120210379),u=b(u,d,p,c,r[g+2],15,718787259),c=b(c,u,d,p,r[g+9],21,-343485551),p=p+f>>>0,c=c+v>>>0,u=u+m>>>0,d=d+_>>>0}return s.endian([p,c,u,d])})._ff=function(e,t,r,s,n,a,o){var l=e+(t&r|~t&s)+(n>>>0)+o;return(l<<a|l>>>32-a)+t},l._gg=function(e,t,r,s,n,a,o){var l=e+(t&s|r&~s)+(n>>>0)+o;return(l<<a|l>>>32-a)+t},l._hh=function(e,t,r,s,n,a,o){var l=e+(t^r^s)+(n>>>0)+o;return(l<<a|l>>>32-a)+t},l._ii=function(e,t,r,s,n,a,o){var l=e+(r^(t|~s))+(n>>>0)+o;return(l<<a|l>>>32-a)+t},l._blocksize=16,l._digestsize=16,e.exports=function(e,t){if(null==e)throw new Error("Illegal argument "+e);var r=s.wordsToBytes(l(e,t));return t&&t.asBytes?r:t&&t.asString?o.bytesToString(r):s.bytesToHex(r)}},1020:(e,t,r)=>{"use strict";var s=r(1609),n=Symbol.for("react.element"),a=Symbol.for("react.fragment"),o=Object.prototype.hasOwnProperty,l=s.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED.ReactCurrentOwner,i={key:!0,ref:!0,__self:!0,__source:!0};function p(e,t,r){var s,a={},p=null,c=null;for(s in void 0!==r&&(p=""+r),void 0!==t.key&&(p=""+t.key),void 0!==t.ref&&(c=t.ref),t)o.call(t,s)&&!i.hasOwnProperty(s)&&(a[s]=t[s]);if(e&&e.defaultProps)for(s in t=e.defaultProps)void 0===a[s]&&(a[s]=t[s]);return{$$typeof:n,type:e,key:p,ref:c,props:a,_owner:l.current}}t.Fragment=a,t.jsx=p,t.jsxs=p},4848:(e,t,r)=>{"use strict";e.exports=r(1020)},1609:e=>{"use strict";e.exports=window.React}},t={};function r(s){var n=t[s];if(void 0!==n)return n.exports;var a=t[s]={exports:{}};return e[s](a,a.exports,r),a.exports}r.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return r.d(t,{a:t}),t},r.d=(e,t)=>{for(var s in t)r.o(t,s)&&!r.o(e,s)&&Object.defineProperty(e,s,{enumerable:!0,get:t[s]})},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{"use strict";const e=window.wp.blocks;var t,s,n=r(1609);function a(){return a=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var s in r)({}).hasOwnProperty.call(r,s)&&(e[s]=r[s])}return e},a.apply(null,arguments)}const o=window.wp.i18n,l=window.wp.blockEditor,i=window.wp.components,p=window.wp.serverSideRender;var c=r.n(p),u=r(3503),d=r.n(u);const g=window.wp.editPost,y=window.wp.data;function w(){return w=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var s in r)({}).hasOwnProperty.call(r,s)&&(e[s]=r[s])}return e},w.apply(null,arguments)}var h=function(e){return n.createElement("svg",w({xmlns:"http://www.w3.org/2000/svg",width:19,height:20,viewBox:"0 0 19 19"},e),n.createElement("path",{d:"M18.21.05c-.046.028-.187.196-.32.376-.132.18-.484.652-.777 1.047a75 75 0 0 0-1.218 1.703q-.346.496-.688.992a4 4 0 0 1-.246-.34 7.3 7.3 0 0 0-.945-1.144c-.313-.305-.52-.442-.864-.559-.32-.113-.882-.121-1.218-.016-.727.22-1.278.852-1.418 1.618-.047.27-.02.726.062 1.03.035.126.074.294.086.372l.02.14-.13.051a1 1 0 0 1-.171.051c-.024 0-.418-.543-.883-1.207-.687-.984-.895-1.258-1.14-1.504a4.1 4.1 0 0 0-1.192-.863c-.684-.324-1.047-.402-1.844-.399-.515 0-.61.008-.914.082a4.23 4.23 0 0 0-1.96 1.051A7.73 7.73 0 0 0 .163 9.695c.598 2.918 2.84 5.239 5.824 6.028 1.13.3 2.364.363 3.48.175a4 4 0 0 1 .345-.05c.003.004.023.164.042.355.082.82-.05 1.102-.625 1.348-.41.176-.437.195-.53.367-.141.27-.106.504.1.645.114.078.516.21.876.296.21.047.375.059.922.055.593 0 .699-.008.93-.066.605-.16 1.14-.399 1.55-.692.504-.355 1.05-.972 1.317-1.488.437-.844.457-1.79.054-2.438l-.11-.171.212-.133c.426-.262.941-.832 1.36-1.5 1.187-1.903 2.26-5.664 2.948-10.34.235-1.61.243-1.742.075-1.895-.188-.171-.559-.242-.723-.14m-.484 2.625c-.465 2.972-1.157 5.75-1.86 7.512-.078.195-.148.378-.16.406-.008.031-.031.05-.05.043-.192-.075-2.36-.918-2.36-.922-.02-.016.426-.973.683-1.477.633-1.234 1.38-2.472 2.391-3.965.602-.886 1.375-1.972 1.406-1.972.004 0-.015.168-.05.375M6.039 2.73c.512.141.973.415 1.336.79.098.101.563.734 1.027 1.41.47.672.899 1.27.953 1.324.247.25.575.375 1.004.375.5 0 .891-.156 1.23-.484.106-.106.235-.27.286-.368.086-.168.09-.199.09-.605 0-.387-.012-.461-.09-.719-.074-.23-.09-.328-.074-.469.043-.476.48-.8.898-.671.324.105 1.074 1.015 1.489 1.812l.183.352-.402.675c-.434.73-1.149 2.086-1.399 2.653-.808 1.847-1.07 3.222-.793 4.172a.5.5 0 0 1 .036.175c-.008.008-.098.032-.2.059a3 3 0 0 0-.457.172c-.215.101-.324.18-.543.39-.152.149-.32.348-.383.454l-.109.191-.238.062c-.578.153-.965.196-1.73.2-.801.004-1.122-.032-1.782-.2a6.8 6.8 0 0 1-3.926-2.714 6.35 6.35 0 0 1-1.11-3.2A6.43 6.43 0 0 1 3.103 3.68c.304-.32.554-.524.828-.672.273-.153.683-.293.972-.336.309-.047.86-.016 1.137.058M4.914 4.34c-.351.14-.523.3-.68.625-.074.152-.086.215-.086.465 0 .398.082.593.344.847.266.254.469.332.88.332.273.004.32-.007.515-.093.379-.176.633-.5.683-.891a1.165 1.165 0 0 0-.691-1.262c-.14-.066-.234-.082-.477-.09-.261-.007-.324 0-.488.067m-1.07 3.41c-.29.102-.512.297-.617.547a.993.993 0 0 0 .523 1.332c.234.105.61.113.832.016.367-.16.598-.485.625-.872.016-.289-.039-.468-.21-.687-.247-.313-.774-.465-1.153-.336m1.511 2.89c-.316.106-.507.305-.605.633a.9.9 0 0 0 .29.934c.6.512 1.55.09 1.55-.684a.84.84 0 0 0-.313-.687.91.91 0 0 0-.922-.195m9.875.925c-.015.07-.398.66-.562.871-.57.731-1.25 1.055-1.605.766-.118-.09-.262-.36-.317-.574-.047-.184-.047-.8 0-1.082.035-.227.18-.828.203-.867.024-.035 2.29.847 2.281.886m-2.41 2.735c.684.203.961.804.711 1.543-.3.89-1.12 1.629-2.105 1.906-.278.078-.781.14-.781.098 0-.012.035-.075.078-.137.129-.188.242-.57.265-.871.008-.152 0-.52-.023-.817-.04-.5-.035-.558.015-.742.168-.594.54-.969 1.028-1.043.238-.035.57-.011.812.063",style:{stroke:"none",fillRule:"evenodd",fill:"#5246ec",fillOpacity:1}}))};function b(e){const{deviceType:t}=(0,y.useSelect)((e=>({deviceType:e(g.store).__experimentalGetPreviewDeviceType()})),[]),{attributes:r,setAttributes:s}=e;styler.currentSelectedBlock!==e.clientId&&(styler.currentSelectedBlock=e.clientId,wp.hooks.doAction("StylerNeedsDestroy","GutenbergStyler"));const a=d()(e.selector);var o=e.wrapper,l=r.styler;if(!e.clientId)return!1;styler&&void 0===styler.GeneratedStyles.gutenberg.wrappers&&(styler.GeneratedStyles.gutenberg.wrappers={}),styler.GeneratedStyles.gutenberg.wrappers[e.clientId]&&styler.GeneratedStyles.gutenberg.wrappers[e.clientId]!==e.wrapperID&&(o=o.replaceAll(r.wrapperID,styler.GeneratedStyles.gutenberg.wrappers[e.clientId]));const i=l.match(/.wrapper-(.*?) /);if(i&&o!==i[0].trim()){l=l.replaceAll(i[0].trim(),o);const t=new RegExp(/\"cid\":\"(.*?)\"/,"g");let r;for(;r=t.exec(l);){var p=Math.floor(window.performance&&window.performance.now&&window.performance.timeOrigin?window.performance.now()+window.performance.timeOrigin:Date.now()).toString();l=l.replaceAll(r[1].trim(),p)}void 0!==e.setAttributes&&e.setAttributes({styler:l}),wp.hooks.doAction("StylerNeedsUpdateLive","GutenbergStyler",l)}styler.ActiveDevice!==t&&(styler.ActiveDevice=t,!0===styler.doDestroy&&(styler.doDestroy=!1,wp.hooks.doAction("StylerNeedsDestroy","GutenbergStyler")),wp.hooks.doAction("StylerNeedsUpdateLive","GutenbergStyler",l)),l=JSON.parse(l);var c={};c=l?void 0===l[a]?{cid:"",data:{}}:l[a]:{cid:"",data:{}};const u=(e,t)=>{switch(e){case"cid":c.cid=t;break;case"data":c.data=t}l[a]=c,wp.hooks.doAction("StylerNeedsUpdateLive","GutenbergStyler",l),s({styler:JSON.stringify(l)})};return(0,n.createElement)("div",{className:"climax-style"},(0,n.createElement)("div",{className:"gutenberg-styler-control-field"},(0,n.createElement)("div",{className:"gutenberg-styler-control-input-wrapper"},(0,n.createElement)("label",{className:"gutenberg-control-title"},e.label),(0,n.createElement)("div",{className:"tmp-styler-gutenberg-dialog-btn","data-title":e.label,"data-id":"gutenberg","data-parent-id":"","data-selector":e.selector,"data-wrapper":o,"data-type":"","data-active-device":t.toLowerCase(),"data-field-id":a,"data-is-svg":e.isSVG,"data-is-input":e.isInput,"data-hover-selector":e.hoverSelector},(0,n.createElement)("input",{type:"hidden",value:"string"==typeof c.data?c.data:JSON.stringify(c.data),"data-setting":"stdata",onInput:e=>{var t=e.target.value;u("data",t)}}),(0,n.createElement)("input",{type:"hidden",value:c.cid,"data-setting":"cid",onInput:e=>{var t=e.target.value;u("cid",t)}}),(0,n.createElement)(h,null)))),void 0!==e.description?(0,n.createElement)("div",{className:"gutenberg-styler-control-field-description"},e.description):"")}b.defaultProps={label:"",selector:"",wrapper:"",isSVG:!1,isInput:!1,hoverSelector:"",description:""};const f=b,v=(e,t,...r)=>{if(!e)return;styler&&void 0===styler.GeneratedStyles.gutenberg.wrappers&&(styler.GeneratedStyles.gutenberg.wrappers={});const s=styler.currentPageID?styler.currentPageID:wp.data.select("core/editor").getCurrentPostId(),n="wrapper-"+Date.now().toString(36)+Math.random().toString(36).substr(20)+"-"+s;return styler.GeneratedStyles.gutenberg.wrappers[e]=n,n},m=(e,t)=>{var r=!0,s=styler.currentPageID?styler.currentPageID:wp.data.select("core/editor").getCurrentPostId();if(s=null===s?"":s,e.split("-").at(-1).toString()!==s.toString())return!1;var n=styler.GeneratedStyles.gutenberg.wrappers;return Object.keys(n).map((s=>{n[s]===e&&s!==t&&(r=!1)})),r};function _(e){const{TagName:t,clientId:r,children:s,attributes:n,className:a}=e;var o=void 0===a?"":a;if(!r){var l="";return n&&(l=n.wrapperID),o=l&&void 0!==o?o+" "+l:l,wp.element.createElement(t,{...e,className:o},s)}return styler&&(void 0===styler.GeneratedStyles&&(styler.GeneratedStyles={}),void 0===styler.GeneratedStyles.gutenberg&&(styler.GeneratedStyles.gutenberg={}),void 0===styler.GeneratedStyles.gutenberg.wrappers&&(styler.GeneratedStyles.gutenberg.wrappers={})),l=n.wrapperID,void 0===styler?.GeneratedStyles?.gutenberg?.wrappers?.[r]?m(l,r)?styler.GeneratedStyles.gutenberg.wrappers[r]=l:l=v(r):styler.GeneratedStyles.gutenberg.wrappers[r]?l=styler.GeneratedStyles.gutenberg.wrappers[r]:m(l,r)?styler.GeneratedStyles.gutenberg.wrappers[r]=l:l=v(r),l!==n.wrapperID&&void 0!==e.setAttributes&&e.setAttributes({wrapperID:l}),l&&(o=o+" "+l),wp.element.createElement(t,{...e,className:o},s)}_.defaultProps={TagName:"div"};const S=_;var x=r(4848);const I=({attributes:e,setAttributes:t,clientId:r})=>{const{icon:s,icon_pos:n,overlay:a,show_label:p}=e,c=()=>{t({icon:{value:"",url:"",type:""}})};return(0,x.jsxs)(l.InspectorControls,{children:[(0,x.jsxs)(i.PanelBody,{title:(0,o.__)("General","shop-press"),initialOpen:!0,children:[(0,x.jsx)(i.ToggleControl,{label:(0,o.__)("Show Label","shop-press"),checked:p,onChange:()=>t({show_label:!p})}),(0,x.jsx)(i.ToggleControl,{label:(0,o.__)("Floating Position","shop-press"),checked:a,onChange:()=>t({overlay:!a})}),(0,x.jsx)(i.SelectControl,{label:(0,o.__)("Icon Position","shop-press"),value:n,options:[{label:"Left",value:"left"},{label:"Right",value:"right"}],onChange:e=>t({icon_pos:e}),__nextHasNoMarginBottom:!0}),(0,x.jsxs)(l.MediaUploadCheck,{children:[(0,x.jsx)(l.MediaUpload,{onSelect:e=>(e=>{const{id:r,url:s,type:n}=e;t({icon:{value:r,url:s,type:n}})})(e),allowedTypes:["image"],value:s?.value,render:({open:e})=>(0,x.jsxs)(x.Fragment,{children:[(0,x.jsx)(i.__experimentalHeading,{children:(0,o.__)("Icon","shop-press")}),(0,x.jsxs)("div",{style:{display:"flex",gap:"10px"},children:[(0,x.jsx)(i.Button,{variant:"primary",onClick:e,children:(0,o.__)("Upload","shop-press")}),s?.value&&(0,x.jsx)(i.Button,{variant:"secondary",onClick:c,children:(0,o.__)("Remove","shop-press")})]})]})}),s&&(0,x.jsx)("div",{style:{marginTop:"15px"},children:(0,x.jsx)("img",{width:70,src:s?.url})})]})]}),(0,x.jsxs)(i.PanelBody,{title:(0,o.__)("Styles","shop-press"),initialOpen:!1,children:[(0,x.jsx)(f,{clientId:r,label:(0,o.__)("Wrapper","shop-press"),selector:".sp-wishlist-loop",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:t}),(0,x.jsx)(f,{clientId:r,label:(0,o.__)("Button","shop-press"),selector:".sp-wishlist-loop .sp-wishlist-button",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:t}),(0,x.jsx)(f,{clientId:r,label:(0,o.__)("Icon Wrapper","shop-press"),selector:".sp-wishlist-loop .sp-wishlist-icon",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:t}),(0,x.jsx)(f,{clientId:r,label:(0,o.__)("Icon","shop-press"),selector:".sp-wishlist-loop .sp-wishlist-icon i.sp-icon",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:t}),(0,x.jsx)(f,{clientId:r,label:(0,o.__)("Active Icon","shop-press"),selector:".sp-wishlist-loop[data-status='yes'] .sp-wishlist-icon i.sp-icon",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:t}),(0,x.jsx)(f,{clientId:r,label:(0,o.__)("Label","shop-press"),selector:".sp-wishlist-loop .sp-wishlist-label",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:t}),(0,x.jsx)(f,{clientId:r,label:(0,o.__)("Active Label","shop-press"),selector:".sp-wishlist-loop[data-status='yes'] .sp-wishlist-label",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:t}),(0,x.jsx)(f,{clientId:r,label:(0,o.__)("Tooltip","shop-press"),selector:".sp-wishlist.overlay .sp-wishlist-label",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:t}),(0,x.jsx)(f,{clientId:r,label:(0,o.__)("Tooltip Arrow","shop-press"),selector:".sp-wishlist.overlay span:before",wrapper:`.${e.wrapperID}`,attributes:e,setAttributes:t})]})]})},A=JSON.parse('{"UU":"shop-press/loop-wishlist"}');(0,e.registerBlockType)(A.UU,{edit:e=>{const{attributes:t,setAttributes:r,clientId:s}=e,n=(0,l.useBlockProps)();return(0,x.jsxs)("div",{...n,children:[(0,x.jsx)(I,{attributes:t,setAttributes:r,clientId:s}),(0,x.jsx)(S,{...e,children:(0,x.jsx)(c(),{block:"shop-press/loop-wishlist",attributes:t})})]})},icon:function(e){return n.createElement("svg",a({xmlns:"http://www.w3.org/2000/svg",width:30.836,height:38.059,className:"wishlist-button_svg__block-icon"},e),t||(t=n.createElement("g",{"data-name":"Group 72104"},n.createElement("g",{fill:"#b3b7c0","data-name":"Group 72028"},n.createElement("path",{d:"M21.864 14.911a1.013 1.013 0 0 1-1.013-1.013V7.455a5.431 5.431 0 0 0-10.862 0v6.444a1.013 1.013 0 0 1-2.026 0V7.456a7.456 7.456 0 0 1 14.912 0v6.443a1.013 1.013 0 0 1-1.011 1.012","data-name":"Path 10138"}),n.createElement("path",{d:"M28.214 38.059H2.623a2.623 2.623 0 0 1-2.619-2.77l1.432-24.762a2.62 2.62 0 0 1 2.619-2.476h22.726a2.62 2.62 0 0 1 2.619 2.478l1.432 24.757a2.623 2.623 0 0 1-2.619 2.772ZM4.057 10.074a.6.6 0 0 0-.6.563L2.025 35.4a.6.6 0 0 0 .6.63h25.589a.6.6 0 0 0 .594-.636l-1.432-24.757a.6.6 0 0 0-.593-.562Z","data-name":"Path 10139"})))),s||(s=n.createElement("g",{"data-name":"Group 72169"},n.createElement("g",{"data-name":"Group 72168"},n.createElement("path",{fill:"#837af5",stroke:"#837af5",strokeWidth:1.5,d:"M15.683 31.483c-.063 0-.388.864-.437.824-.266-.214-6.527-5.263-7.464-8.252a5.07 5.07 0 0 1 .365-4.249 3.61 3.61 0 0 1 2.744-1.754 5.07 5.07 0 0 1 4.529 2.006 5.07 5.07 0 0 1 4.527-2 3.6 3.6 0 0 1 2.744 1.754 5.07 5.07 0 0 1 .361 4.264c-.933 2.974-7.193 8.024-7.459 8.238-.05.04.152-.824.088-.826Zm-4.23-12.906a4 4 0 0 0-.5.03 3.07 3.07 0 0 0-2.334 1.49 4.56 4.56 0 0 0-.314 3.777c.807 2.576 6.077 7.007 7.11 7.855 1.033-.85 6.3-5.278 7.106-7.841a4.56 4.56 0 0 0-.31-3.789 3.07 3.07 0 0 0-2.334-1.49 4.71 4.71 0 0 0-4.225 2.073.28.28 0 0 1-.236.129.28.28 0 0 1-.235-.129 4.84 4.84 0 0 0-3.73-2.109Z","data-name":"Path 10208"})))))}})})()})();