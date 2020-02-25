/*!
 * Glide.js v3.4.1
 * (c) 2013-2019 Jędrzej Chałubek <jedrzej.chalubek@gmail.com> (http://jedrzejchalubek.com/)
 * Released under the MIT License.
 */
!function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):t.Glide=e()}(this,function(){"use strict";var n={type:"slider",startAt:0,perView:1,focusAt:0,gap:10,autoplay:!1,hoverpause:!0,keyboard:!0,bound:!1,swipeThreshold:80,dragThreshold:120,perTouch:!1,touchRatio:.5,touchAngle:45,animationDuration:400,rewind:!0,rewindDuration:800,animationTimingFunc:"cubic-bezier(.165, .840, .440, 1)",throttle:10,direction:"ltr",peek:0,breakpoints:{},classes:{direction:{ltr:"glide--ltr",rtl:"glide--rtl"},slider:"glide--slider",carousel:"glide--carousel",swipeable:"glide--swipeable",dragging:"glide--dragging",cloneSlide:"glide__slide--clone",activeNav:"glide__bullet--active",activeSlide:"glide__slide--active",disabledArrow:"glide__arrow--disabled"}};function i(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},t=function(t,e,n){return e&&o(t.prototype,e),n&&o(t,n),t};function o(t,e){for(var n=0;n<e.length;n++){var i=e[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}var a=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var n=arguments[e];for(var i in n)Object.prototype.hasOwnProperty.call(n,i)&&(t[i]=n[i])}return t};function y(t){return parseInt(t)}function s(t){return"string"==typeof t}function u(t){var e=void 0===t?"undefined":r(t);return"function"===e||"object"===e&&!!t}function c(t){return"function"==typeof t}function l(t){return void 0===t}function f(t){return t.constructor===Array}function d(t,e,n){Object.defineProperty(t,e,n)}function h(t,e){var n=a({},t,e);return e.hasOwnProperty("classes")&&(n.classes=a({},t.classes,e.classes),e.classes.hasOwnProperty("direction")&&(n.classes.direction=a({},t.classes.direction,e.classes.direction))),e.hasOwnProperty("breakpoints")&&(n.breakpoints=a({},t.breakpoints,e.breakpoints)),n}var v=(t(e,[{key:"on",value:function(t,e){if(f(t))for(var n=0;n<t.length;n++)this.on(t[n],e);this.hop.call(this.events,t)||(this.events[t]=[]);var i=this.events[t].push(e)-1;return{remove:function(){delete this.events[t][i]}}}},{key:"emit",value:function(t,e){if(f(t))for(var n=0;n<t.length;n++)this.emit(t[n],e);this.hop.call(this.events,t)&&this.events[t].forEach(function(t){t(e||{})})}}]),e);function e(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{};i(this,e),this.events=t,this.hop=t.hasOwnProperty}var p=(t(m,[{key:"mount",value:function(t){var e=0<arguments.length&&void 0!==t?t:{};return this._e.emit("mount.before"),u(e)&&(this._c=function(t,e,n){var i={};for(var r in e)c(e[r])&&(i[r]=e[r](t,i,n));for(var o in i)c(i[o].mount)&&i[o].mount();return i}(this,e,this._e)),this._e.emit("mount.after"),this}},{key:"mutate",value:function(t){var e=0<arguments.length&&void 0!==t?t:[];return f(e)&&(this._t=e),this}},{key:"update",value:function(t){var e=0<arguments.length&&void 0!==t?t:{};return this.settings=h(this.settings,e),e.hasOwnProperty("startAt")&&(this.index=e.startAt),this._e.emit("update"),this}},{key:"go",value:function(t){return this._c.Run.make(t),this}},{key:"move",value:function(t){return this._c.Transition.disable(),this._c.Move.make(t),this}},{key:"destroy",value:function(){return this._e.emit("destroy"),this}},{key:"play",value:function(t){var e=0<arguments.length&&void 0!==t&&t;return e&&(this.settings.autoplay=e),this._e.emit("play"),this}},{key:"pause",value:function(){return this._e.emit("pause"),this}},{key:"disable",value:function(){return this.disabled=!0,this}},{key:"enable",value:function(){return this.disabled=!1,this}},{key:"on",value:function(t,e){return this._e.on(t,e),this}},{key:"isType",value:function(t){return this.settings.type===t}},{key:"settings",get:function(){return this._o},set:function(t){u(t)&&(this._o=t)}},{key:"index",get:function(){return this._i},set:function(t){this._i=y(t)}},{key:"type",get:function(){return this.settings.type}},{key:"disabled",get:function(){return this._d},set:function(t){this._d=!!t}}]),m);function m(t){var e=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{};i(this,m),this._c={},this._t=[],this._e=new v,this.disabled=!1,this.selector=t,this.settings=h(n,e),this.index=this.settings.startAt}function g(){return(new Date).getTime()}function b(n,i,r){var o=void 0,s=void 0,u=void 0,a=void 0,c=0;r=r||{};function l(){c=!1===r.leading?0:g(),o=null,a=n.apply(s,u),o||(s=u=null)}function t(){var t=g();c||!1!==r.leading||(c=t);var e=i-(t-c);return s=this,u=arguments,e<=0||i<e?(o&&(clearTimeout(o),o=null),c=t,a=n.apply(s,u),o||(s=u=null)):o||!1===r.trailing||(o=setTimeout(l,e)),a}return t.cancel=function(){clearTimeout(o),c=0,o=s=u=null},t}var w={ltr:["marginLeft","marginRight"],rtl:["marginRight","marginLeft"]};function _(t){if(t&&t.parentNode){for(var e=t.parentNode.firstChild,n=[];e;e=e.nextSibling)1===e.nodeType&&e!==t&&n.push(e);return n}return[]}function k(t){return!!(t&&t instanceof window.HTMLElement)}var S='[data-glide-el="track"]';var H=(t(T,[{key:"on",value:function(t,e,n,i){var r=3<arguments.length&&void 0!==i&&i;s(t)&&(t=[t]);for(var o=0;o<t.length;o++)this.listeners[t[o]]=n,e.addEventListener(t[o],this.listeners[t[o]],r)}},{key:"off",value:function(t,e,n){var i=2<arguments.length&&void 0!==n&&n;s(t)&&(t=[t]);for(var r=0;r<t.length;r++)e.removeEventListener(t[r],this.listeners[t[r]],i)}},{key:"destroy",value:function(){delete this.listeners}}]),T);function T(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{};i(this,T),this.listeners=t}var x=["ltr","rtl"],O={">":"<","<":">","=":"="};function A(t,e){return{modify:function(t){return e.Direction.is("rtl")?-t:t}}}function M(i,r,o){var s=[function(e,n){return{modify:function(t){return t+n.Gaps.value*e.index}}},function(t,e){return{modify:function(t){return t+e.Clones.grow/2}}},function(n,i){return{modify:function(t){if(0<=n.settings.focusAt){var e=i.Peek.value;return u(e)?t-e.before:t-e}return t}}},function(o,s){return{modify:function(t){var e=s.Gaps.value,n=s.Sizes.width,i=o.settings.focusAt,r=s.Sizes.slideWidth;return"center"===i?t-(n/2-r/2):t-r*i-e*i}}}].concat(i._t,[A]);return{mutate:function(t){for(var e=0;e<s.length;e++){var n=s[e];c(n)&&c(n().modify)&&(t=n(i,r,o).modify(t))}return t}}}var C=!1;try{var P=Object.defineProperty({},"passive",{get:function(){C=!0}});window.addEventListener("testPassive",null,P),window.removeEventListener("testPassive",null,P)}catch(t){}var L=C,z=["touchstart","mousedown"],j=["touchmove","mousemove"],D=["touchend","touchcancel","mouseup","mouseleave"],E=["mousedown","mousemove","mouseup","mouseleave"];function R(t){return u(t)?function(n){return Object.keys(n).sort().reduce(function(t,e){return t[e]=n[e],t[e],t},{})}(t):{}}var W={Html:function(e,t){var n={mount:function(){this.root=e.selector,this.track=this.root.querySelector(S),this.slides=Array.prototype.slice.call(this.wrapper.children).filter(function(t){return!t.classList.contains(e.settings.classes.cloneSlide)})}};return d(n,"root",{get:function(){return n._r},set:function(t){s(t)&&(t=document.querySelector(t)),k(t)&&(n._r=t)}}),d(n,"track",{get:function(){return n._t},set:function(t){k(t)&&(n._t=t)}}),d(n,"wrapper",{get:function(){return n.track.children[0]}}),n},Translate:function(r,o,s){var u={set:function(t){var e=M(r,o).mutate(t);o.Html.wrapper.style.transform="translate3d("+-1*e+"px, 0px, 0px)"},remove:function(){o.Html.wrapper.style.transform=""}};return s.on("move",function(t){var e=o.Gaps.value,n=o.Sizes.length,i=o.Sizes.slideWidth;return r.isType("carousel")&&o.Run.isOffset("<")?(o.Transition.after(function(){s.emit("translate.jump"),u.set(i*(n-1))}),u.set(-i-e*n)):r.isType("carousel")&&o.Run.isOffset(">")?(o.Transition.after(function(){s.emit("translate.jump"),u.set(0)}),u.set(i*n+e*n)):u.set(t.movement)}),s.on("destroy",function(){u.remove()}),u},Transition:function(n,i,t){var r=!1,e={compose:function(t){var e=n.settings;return r?t+" 0ms "+e.animationTimingFunc:t+" "+this.duration+"ms "+e.animationTimingFunc},set:function(t){var e=0<arguments.length&&void 0!==t?t:"transform";i.Html.wrapper.style.transition=this.compose(e)},remove:function(){i.Html.wrapper.style.transition=""},after:function(t){setTimeout(function(){t()},this.duration)},enable:function(){r=!1,this.set()},disable:function(){r=!0,this.set()}};return d(e,"duration",{get:function(){var t=n.settings;return n.isType("slider")&&i.Run.offset?t.rewindDuration:t.animationDuration}}),t.on("move",function(){e.set()}),t.on(["build.before","resize","translate.jump"],function(){e.disable()}),t.on("run",function(){e.enable()}),t.on("destroy",function(){e.remove()}),e},Direction:function(t,e,n){var i={mount:function(){this.value=t.settings.direction},resolve:function(t){var e=t.slice(0,1);return this.is("rtl")?t.split(e).join(O[e]):t},is:function(t){return this.value===t},addClass:function(){e.Html.root.classList.add(t.settings.classes.direction[this.value])},removeClass:function(){e.Html.root.classList.remove(t.settings.classes.direction[this.value])}};return d(i,"value",{get:function(){return i._v},set:function(t){-1<x.indexOf(t)&&(i._v=t)}}),n.on(["destroy","update"],function(){i.removeClass()}),n.on("update",function(){i.mount()}),n.on(["build.before","update"],function(){i.addClass()}),i},Peek:function(n,t,e){var i={mount:function(){this.value=n.settings.peek}};return d(i,"value",{get:function(){return i._v},set:function(t){u(t)?(t.before=y(t.before),t.after=y(t.after)):t=y(t),i._v=t}}),d(i,"reductor",{get:function(){var t=i.value,e=n.settings.perView;return u(t)?t.before/e+t.after/e:2*t/e}}),e.on(["resize","update"],function(){i.mount()}),i},Sizes:function(t,i,e){var n={setupSlides:function(){for(var t=this.slideWidth+"px",e=i.Html.slides,n=0;n<e.length;n++)e[n].style.width=t},setupWrapper:function(t){i.Html.wrapper.style.width=this.wrapperSize+"px"},remove:function(){for(var t=i.Html.slides,e=0;e<t.length;e++)t[e].style.width="";i.Html.wrapper.style.width=""}};return d(n,"length",{get:function(){return i.Html.slides.length}}),d(n,"width",{get:function(){return i.Html.root.offsetWidth}}),d(n,"wrapperSize",{get:function(){return n.slideWidth*n.length+i.Gaps.grow+i.Clones.grow}}),d(n,"slideWidth",{get:function(){return n.width/t.settings.perView-i.Peek.reductor-i.Gaps.reductor}}),e.on(["build.before","resize","update"],function(){n.setupSlides(),n.setupWrapper()}),e.on("destroy",function(){n.remove()}),n},Gaps:function(e,o,t){var n={apply:function(t){for(var e=0,n=t.length;e<n;e++){var i=t[e].style,r=o.Direction.value;i[w[r][0]]=0!==e?this.value/2+"px":"",e!==t.length-1?i[w[r][1]]=this.value/2+"px":i[w[r][1]]=""}},remove:function(t){for(var e=0,n=t.length;e<n;e++){var i=t[e].style;i.marginLeft="",i.marginRight=""}}};return d(n,"value",{get:function(){return y(e.settings.gap)}}),d(n,"grow",{get:function(){return n.value*(o.Sizes.length-1)}}),d(n,"reductor",{get:function(){var t=e.settings.perView;return n.value*(t-1)/t}}),t.on(["build.after","update"],b(function(){n.apply(o.Html.wrapper.children)},30)),t.on("destroy",function(){n.remove(o.Html.wrapper.children)}),n},Move:function(t,i,r){var e={mount:function(){this._o=0},make:function(t){var e=this,n=0<arguments.length&&void 0!==t?t:0;this.offset=n,r.emit("move",{movement:this.value}),i.Transition.after(function(){r.emit("move.after",{movement:e.value})})}};return d(e,"offset",{get:function(){return e._o},set:function(t){e._o=l(t)?0:y(t)}}),d(e,"translate",{get:function(){return i.Sizes.slideWidth*t.index}}),d(e,"value",{get:function(){var t=this.offset,e=this.translate;return i.Direction.is("rtl")?e+t:e-t}}),r.on(["build.before","run"],function(){e.make()}),e},Clones:function(v,p,t){var e={mount:function(){this.items=[],v.isType("carousel")&&(this.items=this.collect())},collect:function(t){for(var e=0<arguments.length&&void 0!==t?t:[],n=p.Html.slides,i=v.settings,r=i.perView,o=i.classes,s=r+ +!!v.settings.peek,u=n.slice(0,s),a=n.slice(-s),c=0;c<Math.max(1,Math.floor(r/n.length));c++){for(var l=0;l<u.length;l++){var f=u[l].cloneNode(!0);f.classList.add(o.cloneSlide),e.push(f)}for(var d=0;d<a.length;d++){var h=a[d].cloneNode(!0);h.classList.add(o.cloneSlide),e.unshift(h)}}return e},append:function(){for(var t=this.items,e=p.Html,n=e.wrapper,i=e.slides,r=Math.floor(t.length/2),o=t.slice(0,r).reverse(),s=t.slice(r,t.length),u=p.Sizes.slideWidth+"px",a=0;a<s.length;a++)n.appendChild(s[a]);for(var c=0;c<o.length;c++)n.insertBefore(o[c],i[0]);for(var l=0;l<t.length;l++)t[l].style.width=u},remove:function(){for(var t=this.items,e=0;e<t.length;e++)p.Html.wrapper.removeChild(t[e])}};return d(e,"grow",{get:function(){return(p.Sizes.slideWidth+p.Gaps.value)*e.items.length}}),t.on("update",function(){e.remove(),e.mount(),e.append()}),t.on("build.before",function(){v.isType("carousel")&&e.append()}),t.on("destroy",function(){e.remove()}),e},Resize:function(t,e,n){var i=new H,r={mount:function(){this.bind()},bind:function(){i.on("resize",window,b(function(){n.emit("resize")},t.settings.throttle))},unbind:function(){i.off("resize",window)}};return n.on("destroy",function(){r.unbind(),i.destroy()}),r},Build:function(n,i,t){var e={mount:function(){t.emit("build.before"),this.typeClass(),this.activeClass(),t.emit("build.after")},typeClass:function(){i.Html.root.classList.add(n.settings.classes[n.settings.type])},activeClass:function(){var e=n.settings.classes,t=i.Html.slides[n.index];t&&(t.classList.add(e.activeSlide),_(t).forEach(function(t){t.classList.remove(e.activeSlide)}))},removeClasses:function(){var e=n.settings.classes;i.Html.root.classList.remove(e[n.settings.type]),i.Html.slides.forEach(function(t){t.classList.remove(e.activeSlide)})}};return t.on(["destroy","update"],function(){e.removeClasses()}),t.on(["resize","update"],function(){e.mount()}),t.on("move.after",function(){e.activeClass()}),e},Run:function(o,n,i){var t={mount:function(){this._o=!1},make:function(t){var e=this;o.disabled||(o.disable(),this.move=t,i.emit("run.before",this.move),this.calculate(),i.emit("run",this.move),n.Transition.after(function(){e.isStart()&&i.emit("run.start",e.move),e.isEnd()&&i.emit("run.end",e.move),(e.isOffset("<")||e.isOffset(">"))&&(e._o=!1,i.emit("run.offset",e.move)),i.emit("run.after",e.move),o.enable()}))},calculate:function(){var t=this.move,e=this.length,n=t.steps,i=t.direction,r=function(t){return"number"==typeof t}(y(n))&&0!==y(n);switch(i){case">":">"===n?o.index=e:this.isEnd()?o.isType("slider")&&!o.settings.rewind||(this._o=!0,o.index=0):r?o.index+=Math.min(e-o.index,-y(n)):o.index++;break;case"<":"<"===n?o.index=0:this.isStart()?o.isType("slider")&&!o.settings.rewind||(this._o=!0,o.index=e):r?o.index-=Math.min(o.index,y(n)):o.index--;break;case"=":o.index=n}},isStart:function(){return 0===o.index},isEnd:function(){return o.index===this.length},isOffset:function(t){return this._o&&this.move.direction===t}};return d(t,"move",{get:function(){return this._m},set:function(t){var e=t.substr(1);this._m={direction:t.substr(0,1),steps:e?y(e)?y(e):e:0}}}),d(t,"length",{get:function(){var t=o.settings,e=n.Html.slides.length;return o.isType("slider")&&"center"!==t.focusAt&&t.bound?e-1-(y(t.perView)-1)+y(t.focusAt):e-1}}),d(t,"offset",{get:function(){return this._o}}),t},Swipe:function(d,h,v){var n=new H,p=0,m=0,g=0,i=!1,r=!!L&&{passive:!0},t={mount:function(){this.bindSwipeStart()},start:function(t){if(!i&&!d.disabled){this.disable();var e=this.touches(t);p=null,m=y(e.pageX),g=y(e.pageY),this.bindSwipeMove(),this.bindSwipeEnd(),v.emit("swipe.start")}},move:function(t){if(!d.disabled){var e=d.settings,n=e.touchAngle,i=e.touchRatio,r=e.classes,o=this.touches(t),s=y(o.pageX)-m,u=y(o.pageY)-g,a=Math.abs(s<<2),c=Math.abs(u<<2),l=Math.sqrt(a+c),f=Math.sqrt(c);if(!(180*(p=Math.asin(f/l))/Math.PI<n))return!1;t.stopPropagation(),h.Move.make(s*function(t){return parseFloat(t)}(i)),h.Html.root.classList.add(r.dragging),v.emit("swipe.move")}},end:function(t){if(!d.disabled){var e=d.settings,n=this.touches(t),i=this.threshold(t),r=n.pageX-m,o=180*p/Math.PI,s=Math.round(r/h.Sizes.slideWidth);this.enable(),i<r&&o<e.touchAngle?(e.perTouch&&(s=Math.min(s,y(e.perTouch))),h.Direction.is("rtl")&&(s=-s),h.Run.make(h.Direction.resolve("<"+s))):r<-i&&o<e.touchAngle?(e.perTouch&&(s=Math.max(s,-y(e.perTouch))),h.Direction.is("rtl")&&(s=-s),h.Run.make(h.Direction.resolve(">"+s))):h.Move.make(),h.Html.root.classList.remove(e.classes.dragging),this.unbindSwipeMove(),this.unbindSwipeEnd(),v.emit("swipe.end")}},bindSwipeStart:function(){var e=this,t=d.settings;t.swipeThreshold&&n.on(z[0],h.Html.wrapper,function(t){e.start(t)},r),t.dragThreshold&&n.on(z[1],h.Html.wrapper,function(t){e.start(t)},r)},unbindSwipeStart:function(){n.off(z[0],h.Html.wrapper,r),n.off(z[1],h.Html.wrapper,r)},bindSwipeMove:function(){var e=this;n.on(j,h.Html.wrapper,b(function(t){e.move(t)},d.settings.throttle),r)},unbindSwipeMove:function(){n.off(j,h.Html.wrapper,r)},bindSwipeEnd:function(){var e=this;n.on(D,h.Html.wrapper,function(t){e.end(t)})},unbindSwipeEnd:function(){n.off(D,h.Html.wrapper)},touches:function(t){return-1<E.indexOf(t.type)?t:t.touches[0]||t.changedTouches[0]},threshold:function(t){var e=d.settings;return-1<E.indexOf(t.type)?e.dragThreshold:e.swipeThreshold},enable:function(){return i=!1,h.Transition.enable(),this},disable:function(){return i=!0,h.Transition.disable(),this}};return v.on("build.after",function(){h.Html.root.classList.add(d.settings.classes.swipeable)}),v.on("destroy",function(){t.unbindSwipeStart(),t.unbindSwipeMove(),t.unbindSwipeEnd(),n.destroy()}),t},Images:function(t,e,n){var i=new H,r={mount:function(){this.bind()},bind:function(){i.on("dragstart",e.Html.wrapper,this.dragstart)},unbind:function(){i.off("dragstart",e.Html.wrapper)},dragstart:function(t){t.preventDefault()}};return n.on("destroy",function(){r.unbind(),i.destroy()}),r},Anchors:function(t,e,n){var i=new H,r=!1,o=!1,s={mount:function(){this._a=e.Html.wrapper.querySelectorAll("a"),this.bind()},bind:function(){i.on("click",e.Html.wrapper,this.click)},unbind:function(){i.off("click",e.Html.wrapper)},click:function(t){o&&(t.stopPropagation(),t.preventDefault())},detach:function(){if(o=!0,!r){for(var t=0;t<this.items.length;t++)this.items[t].draggable=!1,this.items[t].setAttribute("data-href",this.items[t].getAttribute("href")),this.items[t].removeAttribute("href");r=!0}return this},attach:function(){if(o=!1,r){for(var t=0;t<this.items.length;t++)this.items[t].draggable=!0,this.items[t].setAttribute("href",this.items[t].getAttribute("data-href"));r=!1}return this}};return d(s,"items",{get:function(){return s._a}}),n.on("swipe.move",function(){s.detach()}),n.on("swipe.end",function(){e.Transition.after(function(){s.attach()})}),n.on("destroy",function(){s.attach(),s.unbind(),i.destroy()}),s},Controls:function(i,e,t){var n=new H,r=!!L&&{passive:!0},o={mount:function(){this._n=e.Html.root.querySelectorAll('[data-glide-el="controls[nav]"]'),this._c=e.Html.root.querySelectorAll('[data-glide-el^="controls"]'),this.addBindings()},setActive:function(){for(var t=0;t<this._n.length;t++)this.addClass(this._n[t].children)},removeActive:function(){for(var t=0;t<this._n.length;t++)this.removeClass(this._n[t].children)},addClass:function(t){var e=i.settings,n=t[i.index];n&&(n.classList.add(e.classes.activeNav),_(n).forEach(function(t){t.classList.remove(e.classes.activeNav)}))},removeClass:function(t){var e=t[i.index];e&&e.classList.remove(i.settings.classes.activeNav)},addBindings:function(){for(var t=0;t<this._c.length;t++)this.bind(this._c[t].children)},removeBindings:function(){for(var t=0;t<this._c.length;t++)this.unbind(this._c[t].children)},bind:function(t){for(var e=0;e<t.length;e++)n.on("click",t[e],this.click),n.on("touchstart",t[e],this.click,r)},unbind:function(t){for(var e=0;e<t.length;e++)n.off(["click","touchstart"],t[e])},click:function(t){t.preventDefault(),e.Run.make(e.Direction.resolve(t.currentTarget.getAttribute("data-glide-dir")))}};return d(o,"items",{get:function(){return o._c}}),t.on(["mount.after","move.after"],function(){o.setActive()}),t.on("destroy",function(){o.removeBindings(),o.removeActive(),n.destroy()}),o},Keyboard:function(t,e,n){var i=new H,r={mount:function(){t.settings.keyboard&&this.bind()},bind:function(){i.on("keyup",document,this.press)},unbind:function(){i.off("keyup",document)},press:function(t){39===t.keyCode&&e.Run.make(e.Direction.resolve(">")),37===t.keyCode&&e.Run.make(e.Direction.resolve("<"))}};return n.on(["destroy","update"],function(){r.unbind()}),n.on("update",function(){r.mount()}),n.on("destroy",function(){i.destroy()}),r},Autoplay:function(e,n,t){var i=new H,r={mount:function(){this.start(),e.settings.hoverpause&&this.bind()},start:function(){var t=this;e.settings.autoplay&&l(this._i)&&(this._i=setInterval(function(){t.stop(),n.Run.make(">"),t.start()},this.time))},stop:function(){this._i=clearInterval(this._i)},bind:function(){var t=this;i.on("mouseover",n.Html.root,function(){t.stop()}),i.on("mouseout",n.Html.root,function(){t.start()})},unbind:function(){i.off(["mouseover","mouseout"],n.Html.root)}};return d(r,"time",{get:function(){var t=n.Html.slides[e.index].getAttribute("data-glide-autoplay");return y(t||e.settings.autoplay)}}),t.on(["destroy","update"],function(){r.unbind()}),t.on(["run.before","pause","destroy","swipe.start","update"],function(){r.stop()}),t.on(["run.after","play","swipe.end"],function(){r.start()}),t.on("update",function(){r.mount()}),t.on("destroy",function(){i.destroy()}),r},Breakpoints:function(t,e,n){var i=new H,r=t.settings,o=R(r.breakpoints),s=a({},r),u={match:function(t){if(void 0!==window.matchMedia)for(var e in t)if(t.hasOwnProperty(e)&&window.matchMedia("(max-width: "+e+"px)").matches)return t[e];return s}};return a(r,u.match(o)),i.on("resize",window,b(function(){t.settings=h(r,u.match(o))},t.settings.throttle)),n.on("update",function(){o=R(o),s=a({},r)}),n.on("destroy",function(){i.off("resize",window)}),u}};function G(){return i(this,G),function(t,e){if(!t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!e||"object"!=typeof e&&"function"!=typeof e?t:e}(this,(G.__proto__||Object.getPrototypeOf(G)).apply(this,arguments))}return function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function, not "+typeof e);t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,enumerable:!1,writable:!0,configurable:!0}}),e&&(Object.setPrototypeOf?Object.setPrototypeOf(t,e):t.__proto__=e)}(G,p),t(G,[{key:"mount",value:function(t){var e=0<arguments.length&&void 0!==t?t:{};return function t(e,n,i){null===e&&(e=Function.prototype);var r=Object.getOwnPropertyDescriptor(e,n);if(void 0===r){var o=Object.getPrototypeOf(e);return null===o?void 0:t(o,n,i)}if("value"in r)return r.value;var s=r.get;return void 0!==s?s.call(i):void 0}(G.prototype.__proto__||Object.getPrototypeOf(G.prototype),"mount",this).call(this,a({},W,e))}}]),G});

var a,b;a=this,b=function(){"use strict";function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}function s(e){return e.innerHTML=""}function d(t,e,n,i,o,r){i({event:t,query:e instanceof HTMLInputElement?e.value:e.innerHTML,matches:o.matches,results:o.list.map(function(e){return e.value}),selection:o.list.find(function(e){return t.keyCode===f?e.index===Number(r.getAttribute(a)):"mousedown"===t.type?e.index===Number(t.currentTarget.getAttribute(a)):void 0})}),s(n)}function e(e,t){t=t||{bubbles:!1,cancelable:!1,detail:void 0};var n=document.createEvent("CustomEvent");return n.initCustomEvent(e,t.bubbles,t.cancelable,t.detail),n}var a="data-id",n="autoComplete_list",l="autoComplete_result",t="autoComplete_highlighted",h="autoComplete_selected",f=13,v=38,m=40,Q=function(e){return"string"==typeof e?document.querySelector(e):e()},U=function(e){var t=document.createElement(e.element);return t.setAttribute("id",n),e.container&&e.container(t),e.destination.insertAdjacentElement(e.position,t),t},u=function(e){return"<span class=".concat(t,">").concat(e,"</span>")},c=function(e,o,r){var s=document.createDocumentFragment();o.forEach(function(e,t){var n=document.createElement(r.element),i=o[t].index;n.setAttribute(a,i),n.setAttribute("class",l),r.content?r.content(e,n):n.innerHTML=e.match||e,s.appendChild(n)}),e.appendChild(s)},p=function(t,n,i,o){function r(e){c.classList.remove(h),a=1===e?c.nextSibling:c.previousSibling}function s(e){(c=e).classList.add(h)}var a,l=n.childNodes,u=l.length-1,c=void 0;t.onkeydown=function(e){if(0<l.length)switch(e.keyCode){case v:c?(r(0),s(a||l[u])):s(l[u]);break;case m:c?(r(1),s(a||l[0])):s(l[0]);break;case f:c&&d(e,t,n,i,o,c)}},l.forEach(function(e){e.onmousedown=function(e){return d(e,t,n,i,o)}})},g=s;e.prototype=window.Event.prototype;var y={CustomEventWrapper:"function"==typeof window.CustomEvent&&window.CustomEvent||e,initElementClosestPolyfill:function(){Element.prototype.matches||(Element.prototype.matches=Element.prototype.msMatchesSelector||Element.prototype.webkitMatchesSelector),Element.prototype.closest||(Element.prototype.closest=function(e){var t=this;do{if(t.matches(e))return t;t=t.parentElement||t.parentNode}while(null!==t&&1===t.nodeType);return null})}};return function(){function K(e){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,K);var t=e.selector,n=void 0===t?"#autoComplete":t,i=e.data,o=i.key,r=i.src,s=i.cache,a=void 0===s||s,l=e.query,u=e.trigger,c=(u=void 0===u?{}:u).event,d=void 0===c?["input"]:c,h=u.condition,f=void 0!==h&&h,v=e.searchEngine,m=void 0===v?"strict":v,p=e.threshold,g=void 0===p?0:p,y=e.debounce,b=void 0===y?0:y,E=e.resultsList,w=(E=void 0===E?{}:E).render,C=void 0!==w&&w,L=E.container,k=void 0!==L&&L,x=E.destination,S=E.position,T=void 0===S?"afterend":S,M=E.element,R=void 0===M?"ul":M,q=E.navigation,H=void 0!==q&&q,A=e.sort,P=void 0!==A&&A,I=e.placeHolder,j=e.maxResults,N=void 0===j?5:j,_=e.resultItem,V=(_=void 0===_?{}:_).content,W=void 0!==V&&V,D=_.element,F=void 0===D?"li":D,O=e.noResults,z=e.highlight,B=void 0!==z&&z,G=e.onSelection,J=C?U({container:k,destination:x||Q(n),position:T,element:R}):null;this.selector=n,this.data={src:function(){return"function"==typeof r?r():r},key:o,cache:a},this.query=l,this.trigger={event:d,condition:f},this.searchEngine="loose"===m?"loose":"function"==typeof m?m:"strict",this.threshold=g,this.debounce=b,this.resultsList={render:C,view:J,navigation:H},this.sort=P,this.placeHolder=I,this.maxResults=N,this.resultItem={content:W,element:F},this.noResults=O,this.highlight=B,this.onSelection=G,this.init()}return function(e,t,n){t&&i(e.prototype,t),n&&i(e,n)}(K,[{key:"search",value:function(e,t){var n=t.toLowerCase();if("loose"===this.searchEngine){e=e.replace(/ /g,"");for(var i=[],o=0,r=0;r<n.length;r++){var s=t[r];o<e.length&&n[r]===e[o]&&(s=this.highlight?u(s):s,o++),i.push(s)}return o===e.length&&i.join("")}if(n.includes(e))return e=new RegExp("".concat(e),"i").exec(t),this.highlight?t.replace(e,u(e)):t}},{key:"listMatchedResults",value:function(n){var u=this;return new Promise(function(e){var l=[];n.filter(function(i,o){function e(e){var t=e?i[e]:i;if(t){var n="function"==typeof u.searchEngine?u.searchEngine(u.queryValue,t):u.search(u.queryValue,t);n&&e?l.push({key:e,index:o,match:n,value:i}):n&&!e&&l.push({index:o,match:n,value:i})}}if(u.data.key){var t=!0,n=!1,r=void 0;try{for(var s,a=u.data.key[Symbol.iterator]();!(t=(s=a.next()).done);t=!0){e(s.value)}}catch(e){n=!0,r=e}finally{try{t||null==a.return||a.return()}finally{if(n)throw r}}}else e()});var t=u.sort?l.sort(u.sort).slice(0,u.maxResults):l.slice(0,u.maxResults);return e({matches:l.length,list:t})})}},{key:"ignite",value:function(){var a=this,l=Q(this.selector);this.placeHolder&&l.setAttribute("placeholder",this.placeHolder);function t(t){Promise.resolve(a.data.cache?a.dataStream:a.data.src()).then(function(e){a.dataStream=e,function(t){function n(e,t){l.dispatchEvent(new y.CustomEventWrapper("autoComplete",{bubbles:!0,detail:{event:e,input:i,query:o,matches:t?t.matches:null,results:t?t.list:null},cancelable:!0}))}var i=l instanceof HTMLInputElement||l instanceof HTMLTextAreaElement?l.value.toLowerCase():l.innerHTML.toLowerCase(),o=a.queryValue=a.query&&a.query.manipulate?a.query.manipulate(i):i,e=a.resultsList.render,r=a.trigger.condition?a.trigger.condition(o):o.length>a.threshold&&o.replace(/ /g,"").length;if(e){var s=a.resultsList.view;g(s);r?a.listMatchedResults(a.dataStream,t).then(function(e){n(t,e),a.resultsList.render&&(0===e.list.length&&a.noResults?a.noResults():(c(s,e.list,a.resultItem),a.onSelection&&(a.resultsList.navigation?a.resultsList.navigation(t,l,s,a.onSelection,e):p(l,s,a.onSelection,e))))}):n(t)}else!e&&r&&a.listMatchedResults(a.dataStream,t).then(function(e){n(t,e)})}(t)})}this.trigger.event.forEach(function(e){l.addEventListener(e,function(n,i){var o;return function(){var e=this,t=arguments;clearTimeout(o),o=setTimeout(function(){return n.apply(e,t)},i)}}(function(e){return t(e)},a.debounce))})}},{key:"init",value:function(){var t=this;this.data.cache?Promise.resolve(this.data.src()).then(function(e){t.dataStream=e,t.ignite()}):this.ignite(),y.initElementClosestPolyfill()}}]),K}()},"object"==typeof exports&&"undefined"!=typeof module?module.exports=b():"function"==typeof define&&define.amd?define(b):a.autoComplete=b();



let glides = document.querySelectorAll(".glide");


glides.forEach(function (e, i) {

    let glides_slide = e.getAttribute('data-slide-count') || 7;
    if (e.querySelectorAll(".VerticalBookCard__tinyBook").length < glides_slide) {
        e.querySelector(".glide__arrows").innerHTML = "";
        return;
    }
    new Glide(e, {
        perView: glides_slide,
        type: "carousel",
        startAt: 0,
        breakpoints: {
            800: {
                perView: 3
            },
            340: {
                perView: 2
            }
        }
    }).mount();

    if (document.querySelectorAll('.loader')) {
        document.querySelectorAll('.loader').forEach(function (e, i) {
            e.classList.remove('show')
        });
    }
});



if (document.querySelector('.single-slider')) {
    wheelSlider();
}

function wheelSlider() {
    window.addEventListener('wheel', function (event) {
        if (event.deltaY < 0) {
            document.querySelector('.single-slider .arrowRight').click()
        }
        else if (event.deltaY > 0) {
            document.querySelector('.single-slider .arrowLeft').click()
        }
    });
}



new autoComplete({
    data: {
        src: async () => {
            const query = document.querySelector("#autoComplete").value;
            const source = await fetch(
                `${ajax_login_object.search_url}?search=${query}`
            );
            const data = await source.json();
            return data.recipes;
        },
        key: ["Title"],
        cache: false
    },
    placeHolder: "Поиск",
    selector: "#autoComplete",
    threshold: 3,
    debounce: 300,
    searchEngine: "strict",
    resultsList: {
        render: true,
        container: source => {
            source.setAttribute("id", "autoComplete_list");
        },
        destination: document.querySelector("#autoComplete"),
        position: "afterend",
        element: "ul",
    },
    maxResults: 12,
    highlight: true,
    resultItem: {
        content: (data, source) => {
            let picture = '';
            if (data.value.File) {
                picture = "<img class='autoComplete_picture' src='" + data.value.File + "'></img>";
            }
            source.innerHTML = picture + data.match;
        },
        element: "li"
    },
    noResults: () => {
        const result = document.createElement("li");
        result.setAttribute("class", "no_result");
        result.setAttribute("tabindex", "1");
        result.innerHTML = "No Results";
        document.querySelector("#autoComplete_list").appendChild(result);
    },
    onSelection: feedback => {
        document.querySelector("#autoComplete").value =
            feedback.selection.value.Title;
        window.location = feedback.selection.value.slug;
    }
});

function showMessageNotAuth(e, message) {
    e.preventDefault();
    alert(message);
}

document.addEventListener('click', function () {
    document.querySelector('#autoComplete_list').innerHTML = '';
})


let password = document.getElementById("new_password")
    , confirm_password = document.getElementById("confirm_password");

function validatePassword() {
    if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Пароли не совпадают");
    } else {
        confirm_password.setCustomValidity('');
    }
}
if (password) {
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
}

let switcher = document.querySelectorAll('.FormTextInput__passwordVisibilitySwitcher');
switcher.forEach(function (e, i) {
    e.addEventListener('click', function (e) {
        switchValue(e);
    })
})

function switchValue(e) {
    e.preventDefault();

    let parent = e.target.closest('.FormTextInput__control');
    parent.classList.toggle('visible');
    parent.querySelector('input').type = 'password';

    if (parent.classList.contains('visible')) {
        parent.querySelector('input').type = 'text';
    }
}


function handleChangeFiles(files, img) {
    for (let i = 0; i < files.length; i++) {
        let file = files[i];

        if (!file.type.startsWith('image/')) { alert('Загрузите изображение'); continue }

        let image = document.querySelector(img);

        let reader = new FileReader();
        reader.onload = (function (aImg) { return function (e) { aImg.src = e.target.result; }; })(image);
        reader.readAsDataURL(file);
    }
}

let inputElement = document.querySelector('input[name="profile_image"]');
if (inputElement) {
    inputElement.addEventListener("change", function () {
        handleChangeFiles(this.files, '.UserSettingsAvatar__userImagePreviewContent');
    });
}




document.addEventListener('click', function (event) {
    if (!document.querySelector('.BookStatusChangePopup__buttonFunctional')) return;

    let e = event.target;
    let add = 'add_book_my_list';
    let remove = 'remove_book_my_list';
    let data = {
        'book': book_id,
    };
    if (e.classList.contains(add)) {
        event.preventDefault();
        requestPostData(route_booklist_add, data)
            .then(e => showModal(e.message));
        let els = document.getElementsByClassName(add);
        [].forEach.call(els, function (el) {
            el.innerHTML = '<i class="fas fa-minus"></i><span class="menu-title">Удалить из списка</span>'
        });
        reverseClassList(e, remove, add);

    } else if (e.classList.contains(remove)) {
        event.preventDefault();
        requestPostData(route_booklist_remove, data)
            .then(e => showModal(e.message));
        let els = document.getElementsByClassName(remove);
        [].forEach.call(els, function (el) {
            el.innerHTML = '<i class="fas fa-plus"></i> <span class="menu-title">Добавить в список</span> ';
        });

        reverseClassList(e, add, remove);
    }
})

function reverseClassList(e, classadd, classremove) {
    e.classList.add(classadd);
    e.classList.remove(classremove);
}


async function requestPostData(route, data) {

    let meta = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    let response = await fetch(route, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8',
            'X-CSRF-TOKEN': meta
        },
        body: JSON.stringify(data)
    });

    return await response.json();
}

let download_files = document.querySelectorAll('.download_file');
download_files.forEach(function (el, i) {
    el.addEventListener('click', function (e) {
        if (!e.target.dataset.format) return;
        e.preventDefault();
        let data = {
            'file': document.querySelector('input[name="book_id"]').value,
            'format': e.target.dataset.format
        }
        requestPostData(download_route, data)
            .then(e => {
                if (e.status == 'success') {
                    console.log(e.message);
                    window.location.href = e.message;
                } else {
                    console.log(e.message)
                }
            })
    })
})


function download(data, filename, type) {
    var file = new Blob([data], { type: type });
    if (window.navigator.msSaveOrOpenBlob) // IE10+
        window.navigator.msSaveOrOpenBlob(file, filename);
    else { // Others
        var a = document.createElement("a"),
            url = URL.createObjectURL(file);
        a.href = url;
        a.download = filename;
        document.body.appendChild(a);
        a.click();
        setTimeout(function () {
            document.body.removeChild(a);
            window.URL.revokeObjectURL(url);
        }, 0);
    }
}


function showLoader(el) {
    let content = window.document;
    if (el) content = el;
    let loader = content.querySelector('.loader');
    if (loader) loader.classList.add('show')
}

function hideLoader(el) {
    let content = window.document;
    if (el) content = el;
    let loader = content.querySelector('.loader');
    if (loader) loader.classList.remove('show')
}

let collapse_btn = document.querySelectorAll('*[data-toggle="collapse"] .toggle-icon');

collapse_btn.forEach(function (e, i) {
    e.addEventListener('click', function () {
        e.closest('*[data-toggle="collapse"]').classList.toggle('open');
    })
})

var trigger = document.querySelectorAll(".trigger");
var modal = document.querySelector(".modal");
var closeButton = document.querySelectorAll(".close-button");


window.addEventListener("click", function (e) {
    let enable = document.querySelector('.show-modal');
    if (enable && e.target.classList.contains('show-modal')) {
        toggleModal(enable);
    }
});

window.addEventListener('click', function (e) {
    if (e.target.classList.contains('close-button')) {
        if (e.target.closest('.show-modal')) {
            e.target.closest('.show-modal').classList.remove('show-modal');
        }
    }
});

function toggleModal(enable) {
    hideLoader(enable);
    enable.classList.toggle("show-modal");
}

trigger.forEach(function (e) {
    e.addEventListener("click", function (e) {
        e.preventDefault();
        elem = document.querySelector(e.target.getAttribute('data-modal'));
        toggleModal(elem);
    });
})

closeButton.forEach(function (e) {
    e.addEventListener("click", function () {
        toggleModal(elem);
    });
})

let modals = document.querySelectorAll('.alert');

modals.forEach(function (e) {


    let i = 0,
        time = 3000;

    let timerId = setInterval(function () {
        if (i < 100) {
            i++;
        } else {
            clearInterval(timerId);
        }
        if (!e.querySelector('.progress')) return;
        e.querySelector('.progress').style.right = i + '%';

    }, (time / 120));

    setTimeout(function () {
        e.classList.add('hide');
    }, time);

})


document.querySelectorAll('.close').forEach(function (e) {
    e.addEventListener('click', function (e) {
        if (e.target.closest('.alert')) {
            e.target.closest('.alert').classList.add('hide');
        }
    })
})

document.querySelectorAll('form.ajax').forEach(function (element) {
    element.addEventListener('submit', function (e) {
        e.preventDefault();
        let formData = new FormData(this);
        showLoader(element);
        requestPost(this.action, formData)
            .then((data) => {
                if (data.status == 'success') {
                    window.location = data.message.redirect;
                }
                setTimeout(function () {
                    hideLoader(element);
                    removeMessage(element);
                    for (let fields in data.message.field) {
                        let field = element.querySelector(`input[name='${fields}']`);
                        appendMessage(field, data.status, data.message.field[fields]);
                    }
                }, 500)
            })
    })
})

function appendMessage(element, status, message) {

    let row = element.closest('.Form__formRow');
    row.classList.add(status);
    row.appendChild(createMessage(status, message));
}

function removeMessage(element) {
    let row = element.closest('.ajax');

    let errors = document.querySelectorAll('.error');
    if (errors.length) {
        errors.forEach(function (error, i) {
            error.classList.remove('error')
        });
    }


    let msg = row.querySelectorAll('.ValidationMessage');
    if (msg.length) {
        msg.forEach(function (message, i) {
            message.remove();
        })
    };
}

function createMessage(status, messages) {
    let msg = document.createElement('div');
    msg.classList.add(`${status}`, `ValidationMessage`);
    let message = '';
    messages.forEach(function (e) {
        message += `<span>${e}</span>`;
    });
    msg.innerHTML = message;
    return msg;
}

async function requestPost(route, data) {

    let meta = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    let response = await fetch(route, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': meta
        },
        body: data
    });

    return await response.json();
}

let filter_input = document.querySelector('.select');
if (filter_input) {
    filter_input.addEventListener('change', function (e) {
        add_params_url();
        let form = this.closest('form');
        let body = document.body;
        let formData = new FormData(form);
        showLoader(body);
        requestPost(form.action, formData)
            .then((data) => {
                if (data.status == 'success') {
                    document.querySelector('.wrapper-row').innerHTML = data.message;
                    hideLoader(body);
                } else {
                    console.log(data.message);
                }
            })
    })
}

function add_params_url() {
    let params = {};
    let select;
    document.querySelectorAll('.select').forEach(function (e) {
        select = e.options[e.selectedIndex].value;
        if (select !== '0') {
            params[e.name] = select;
        }
    });
    let regexp = /page\/\d\//;
    let location = window.location.href;
    console.log(select)
    if (location.search(regexp) !== -1) {
        location = location.replace(regexp, '');
        // location += '?' + $.param(params);
        location += '?' + new URLSearchParams(Object.entries(params));
        window.location = location;
    }
    if (params) history.pushState('', '', '?' + new URLSearchParams(Object.entries(params)));
    // $(".subscribe_organization option[data-value='" + select + "']").attr('selected', 'selected');
}


function showModal(message) {

    let modal = document.createElement('div');
    modal.innerHTML += `<div class="modal show-modal">
        <div class="modal-content">
        <span class="close-button">×</span>
        <div class="card AuthFormDialog__inner">${message}</div>
        </div>
        </div>`;
    document.body.append(modal);

}


let Keyboard = window.SimpleKeyboard.default;

const russian = {
    default: [
        "\u0451 1 2 3 4 5 6 7 8 9 0 - = {bksp}",
        "{tab} \u0439 \u0446 \u0443 \u043a \u0435 \u043d \u0433 \u0448 \u0449 \u0437 \u0445 \u044a \\",
        "{lock} \u0444 \u044b \u0432 \u0430 \u043f \u0440 \u043e \u043b \u0434 \u0436 \u044d {enter}",
        "{shift} \\ \u044f \u0447 \u0441 \u043c \u0438 \u0442 \u044c \u0431 \u044e / {shift}",
        ".com @ {space}"
    ],
    shift: [
        '\u0401 ! " \u2116 ; % : ? * ( ) _ + {bksp}',
        "{tab} \u0419 \u0426 \u0423 \u041a \u0415 \u041d \u0413 \u0428 \u0429 \u0417 \u0425 \u042a /",
        "{lock} \u0424 \u042b \u0412 \u0410 \u041f \u0420 \u041e \u041b \u0414 \u0416 \u042d {enter}",
        "{shift} / \u042f \u0427 \u0421 \u041c \u0418 \u0422 \u042c \u0411 \u042e / {shift}",
        ".com @ {space}"
    ]
};

let myKeyboard = new Keyboard({
    onChange: input => onChange(input),
    onKeyPress: button => onKeyPress(button),
    layout: russian
});

function onChange(input) {
    document.querySelector(".input").value = input;
    console.log("Input changed", input);
}

function onKeyPress(button) {
    console.log("Button pressed", button);
}

document.querySelector('.virtual_kd').addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector('.simple-keyboard').classList.toggle('show');
})


var observer = new IntersectionObserver(function (entries) {
    // no intersection with screen
    if (entries[0].intersectionRatio === 0)
        document.querySelector("#nav-container").classList.add("nav-container-sticky");
    // fully intersects with screen
    else if (entries[0].intersectionRatio === 1)
        document.querySelector("#nav-container").classList.remove("nav-container-sticky");
}, { threshold: [0, 1] });

observer.observe(document.querySelector("#nav-container-top"));


window.addEventListener('load', function () {

    let data = {
        'file': book_id,
        'format': document.querySelector('input[name="book_format"]').value,
        'init': true
    }
    requestPostData(download_route, data)
        .then(e => {
            if (e.status == 'success') {
                window.open(e.message)
            } else {
                console.log(download_route + ':' + e.message)
            }
        });
})