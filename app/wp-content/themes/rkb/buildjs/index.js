!function(e){var n={};function t(i){if(n[i])return n[i].exports;var o=n[i]={i:i,l:!1,exports:{}};return e[i].call(o.exports,o,o.exports,t),o.l=!0,o.exports}t.m=e,t.c=n,t.d=function(e,n,i){t.o(e,n)||Object.defineProperty(e,n,{enumerable:!0,get:i})},t.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},t.t=function(e,n){if(1&n&&(e=t(e)),8&n)return e;if(4&n&&"object"==typeof e&&e&&e.__esModule)return e;var i=Object.create(null);if(t.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:e}),2&n&&"string"!=typeof e)for(var o in e)t.d(i,o,function(n){return e[n]}.bind(null,o));return i},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},t.p="",t(t.s=10)}([function(e,n,t){var i=t(1),o=t(2);"string"==typeof(o=o.__esModule?o.default:o)&&(o=[[e.i,o,""]]);var r={insert:"head",singleton:!1};i(o,r);e.exports=o.locals||{}},function(e,n,t){"use strict";var i,o=function(){return void 0===i&&(i=Boolean(window&&document&&document.all&&!window.atob)),i},r=function(){var e={};return function(n){if(void 0===e[n]){var t=document.querySelector(n);if(window.HTMLIFrameElement&&t instanceof window.HTMLIFrameElement)try{t=t.contentDocument.head}catch(e){t=null}e[n]=t}return e[n]}}(),a=[];function s(e){for(var n=-1,t=0;t<a.length;t++)if(a[t].identifier===e){n=t;break}return n}function c(e,n){for(var t={},i=[],o=0;o<e.length;o++){var r=e[o],c=n.base?r[0]+n.base:r[0],l=t[c]||0,d="".concat(c," ").concat(l);t[c]=l+1;var u=s(d),h={css:r[1],media:r[2],sourceMap:r[3]};-1!==u?(a[u].references++,a[u].updater(h)):a.push({identifier:d,updater:b(h,n),references:1}),i.push(d)}return i}function l(e){var n=document.createElement("style"),i=e.attributes||{};if(void 0===i.nonce){var o=t.nc;o&&(i.nonce=o)}if(Object.keys(i).forEach((function(e){n.setAttribute(e,i[e])})),"function"==typeof e.insert)e.insert(n);else{var a=r(e.insert||"head");if(!a)throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");a.appendChild(n)}return n}var d,u=(d=[],function(e,n){return d[e]=n,d.filter(Boolean).join("\n")});function h(e,n,t,i){var o=t?"":i.media?"@media ".concat(i.media," {").concat(i.css,"}"):i.css;if(e.styleSheet)e.styleSheet.cssText=u(n,o);else{var r=document.createTextNode(o),a=e.childNodes;a[n]&&e.removeChild(a[n]),a.length?e.insertBefore(r,a[n]):e.appendChild(r)}}function p(e,n,t){var i=t.css,o=t.media,r=t.sourceMap;if(o?e.setAttribute("media",o):e.removeAttribute("media"),r&&btoa&&(i+="\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(r))))," */")),e.styleSheet)e.styleSheet.cssText=i;else{for(;e.firstChild;)e.removeChild(e.firstChild);e.appendChild(document.createTextNode(i))}}var f=null,m=0;function b(e,n){var t,i,o;if(n.singleton){var r=m++;t=f||(f=l(n)),i=h.bind(null,t,r,!1),o=h.bind(null,t,r,!0)}else t=l(n),i=p.bind(null,t,n),o=function(){!function(e){if(null===e.parentNode)return!1;e.parentNode.removeChild(e)}(t)};return i(e),function(n){if(n){if(n.css===e.css&&n.media===e.media&&n.sourceMap===e.sourceMap)return;i(e=n)}else o()}}e.exports=function(e,n){(n=n||{}).singleton||"boolean"==typeof n.singleton||(n.singleton=o());var t=c(e=e||[],n);return function(e){if(e=e||[],"[object Array]"===Object.prototype.toString.call(e)){for(var i=0;i<t.length;i++){var o=s(t[i]);a[o].references--}for(var r=c(e,n),l=0;l<t.length;l++){var d=s(t[l]);0===a[d].references&&(a[d].updater(),a.splice(d,1))}t=r}}}},function(e,n,t){(n=t(3)(!1)).push([e.i,'/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */\n\n/* Document\n   ========================================================================== */\n\n/**\n * 1. Correct the line height in all browsers.\n * 2. Prevent adjustments of font size after orientation changes in iOS.\n */\n\nhtml {\n  line-height: 1.15; /* 1 */\n  -webkit-text-size-adjust: 100%; /* 2 */\n}\n\n/* Sections\n   ========================================================================== */\n\n/**\n * Remove the margin in all browsers.\n */\n\nbody {\n  margin: 0;\n}\n\n/**\n * Render the `main` element consistently in IE.\n */\n\nmain {\n  display: block;\n}\n\n/**\n * Correct the font size and margin on `h1` elements within `section` and\n * `article` contexts in Chrome, Firefox, and Safari.\n */\n\nh1 {\n  font-size: 2em;\n  margin: 0.67em 0;\n}\n\n/* Grouping content\n   ========================================================================== */\n\n/**\n * 1. Add the correct box sizing in Firefox.\n * 2. Show the overflow in Edge and IE.\n */\n\nhr {\n  box-sizing: content-box; /* 1 */\n  height: 0; /* 1 */\n  overflow: visible; /* 2 */\n}\n\n/**\n * 1. Correct the inheritance and scaling of font size in all browsers.\n * 2. Correct the odd `em` font sizing in all browsers.\n */\n\npre {\n  font-family: monospace, monospace; /* 1 */\n  font-size: 1em; /* 2 */\n}\n\n/* Text-level semantics\n   ========================================================================== */\n\n/**\n * Remove the gray background on active links in IE 10.\n */\n\na {\n  background-color: transparent;\n}\n\n/**\n * 1. Remove the bottom border in Chrome 57-\n * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.\n */\n\nabbr[title] {\n  border-bottom: none; /* 1 */\n  text-decoration: underline; /* 2 */\n  text-decoration: underline dotted; /* 2 */\n}\n\n/**\n * Add the correct font weight in Chrome, Edge, and Safari.\n */\n\nb,\nstrong {\n  font-weight: bolder;\n}\n\n/**\n * 1. Correct the inheritance and scaling of font size in all browsers.\n * 2. Correct the odd `em` font sizing in all browsers.\n */\n\ncode,\nkbd,\nsamp {\n  font-family: monospace, monospace; /* 1 */\n  font-size: 1em; /* 2 */\n}\n\n/**\n * Add the correct font size in all browsers.\n */\n\nsmall {\n  font-size: 80%;\n}\n\n/**\n * Prevent `sub` and `sup` elements from affecting the line height in\n * all browsers.\n */\n\nsub,\nsup {\n  font-size: 75%;\n  line-height: 0;\n  position: relative;\n  vertical-align: baseline;\n}\n\nsub {\n  bottom: -0.25em;\n}\n\nsup {\n  top: -0.5em;\n}\n\n/* Embedded content\n   ========================================================================== */\n\n/**\n * Remove the border on images inside links in IE 10.\n */\n\nimg {\n  border-style: none;\n}\n\n/* Forms\n   ========================================================================== */\n\n/**\n * 1. Change the font styles in all browsers.\n * 2. Remove the margin in Firefox and Safari.\n */\n\nbutton,\ninput,\noptgroup,\nselect,\ntextarea {\n  font-family: inherit; /* 1 */\n  font-size: 100%; /* 1 */\n  line-height: 1.15; /* 1 */\n  margin: 0; /* 2 */\n}\n\n/**\n * Show the overflow in IE.\n * 1. Show the overflow in Edge.\n */\n\nbutton,\ninput { /* 1 */\n  overflow: visible;\n}\n\n/**\n * Remove the inheritance of text transform in Edge, Firefox, and IE.\n * 1. Remove the inheritance of text transform in Firefox.\n */\n\nbutton,\nselect { /* 1 */\n  text-transform: none;\n}\n\n/**\n * Correct the inability to style clickable types in iOS and Safari.\n */\n\nbutton,\n[type="button"],\n[type="reset"],\n[type="submit"] {\n  -webkit-appearance: button;\n}\n\n/**\n * Remove the inner border and padding in Firefox.\n */\n\nbutton::-moz-focus-inner,\n[type="button"]::-moz-focus-inner,\n[type="reset"]::-moz-focus-inner,\n[type="submit"]::-moz-focus-inner {\n  border-style: none;\n  padding: 0;\n}\n\n/**\n * Restore the focus styles unset by the previous rule.\n */\n\nbutton:-moz-focusring,\n[type="button"]:-moz-focusring,\n[type="reset"]:-moz-focusring,\n[type="submit"]:-moz-focusring {\n  outline: 1px dotted ButtonText;\n}\n\n/**\n * Correct the padding in Firefox.\n */\n\nfieldset {\n  padding: 0.35em 0.75em 0.625em;\n}\n\n/**\n * 1. Correct the text wrapping in Edge and IE.\n * 2. Correct the color inheritance from `fieldset` elements in IE.\n * 3. Remove the padding so developers are not caught out when they zero out\n *    `fieldset` elements in all browsers.\n */\n\nlegend {\n  box-sizing: border-box; /* 1 */\n  color: inherit; /* 2 */\n  display: table; /* 1 */\n  max-width: 100%; /* 1 */\n  padding: 0; /* 3 */\n  white-space: normal; /* 1 */\n}\n\n/**\n * Add the correct vertical alignment in Chrome, Firefox, and Opera.\n */\n\nprogress {\n  vertical-align: baseline;\n}\n\n/**\n * Remove the default vertical scrollbar in IE 10+.\n */\n\ntextarea {\n  overflow: auto;\n}\n\n/**\n * 1. Add the correct box sizing in IE 10.\n * 2. Remove the padding in IE 10.\n */\n\n[type="checkbox"],\n[type="radio"] {\n  box-sizing: border-box; /* 1 */\n  padding: 0; /* 2 */\n}\n\n/**\n * Correct the cursor style of increment and decrement buttons in Chrome.\n */\n\n[type="number"]::-webkit-inner-spin-button,\n[type="number"]::-webkit-outer-spin-button {\n  height: auto;\n}\n\n/**\n * 1. Correct the odd appearance in Chrome and Safari.\n * 2. Correct the outline style in Safari.\n */\n\n[type="search"] {\n  -webkit-appearance: textfield; /* 1 */\n  outline-offset: -2px; /* 2 */\n}\n\n/**\n * Remove the inner padding in Chrome and Safari on macOS.\n */\n\n[type="search"]::-webkit-search-decoration {\n  -webkit-appearance: none;\n}\n\n/**\n * 1. Correct the inability to style clickable types in iOS and Safari.\n * 2. Change font properties to `inherit` in Safari.\n */\n\n::-webkit-file-upload-button {\n  -webkit-appearance: button; /* 1 */\n  font: inherit; /* 2 */\n}\n\n/* Interactive\n   ========================================================================== */\n\n/*\n * Add the correct display in Edge, IE 10+, and Firefox.\n */\n\ndetails {\n  display: block;\n}\n\n/*\n * Add the correct display in all browsers.\n */\n\nsummary {\n  display: list-item;\n}\n\n/* Misc\n   ========================================================================== */\n\n/**\n * Add the correct display in IE 10+.\n */\n\ntemplate {\n  display: none;\n}\n\n/**\n * Add the correct display in IE 10.\n */\n\n[hidden] {\n  display: none;\n}\n',""]),e.exports=n},function(e,n,t){"use strict";e.exports=function(e){var n=[];return n.toString=function(){return this.map((function(n){var t=function(e,n){var t=e[1]||"",i=e[3];if(!i)return t;if(n&&"function"==typeof btoa){var o=(a=i,s=btoa(unescape(encodeURIComponent(JSON.stringify(a)))),c="sourceMappingURL=data:application/json;charset=utf-8;base64,".concat(s),"/*# ".concat(c," */")),r=i.sources.map((function(e){return"/*# sourceURL=".concat(i.sourceRoot||"").concat(e," */")}));return[t].concat(r).concat([o]).join("\n")}var a,s,c;return[t].join("\n")}(n,e);return n[2]?"@media ".concat(n[2]," {").concat(t,"}"):t})).join("")},n.i=function(e,t,i){"string"==typeof e&&(e=[[null,e,""]]);var o={};if(i)for(var r=0;r<this.length;r++){var a=this[r][0];null!=a&&(o[a]=!0)}for(var s=0;s<e.length;s++){var c=[].concat(e[s]);i&&o[c[0]]||(t&&(c[2]?c[2]="".concat(t," and ").concat(c[2]):c[2]=t),n.push(c))}},n}},function(e,n){var t,i,o;$(".accordion").on("click",".accordion_item",(function(){var e=this;$(this).closest(".accordion").children(".accordion_item").find(".info").each((function(n,t){$(t).toggleClass("active",t===e)}))})),(t=jQuery)(".acc_btn").on("click",(function(){i=t(this).parents(".accordion_item"),o=i.find(".info"),i.hasClass("active_block")?(i.removeClass("active_block"),o.slideUp()):(i.addClass("active_block"),o.stop(!0,!0).slideDown(),i.siblings(".active_block").removeClass("active_block").children(".info").stop(!0,!0).slideUp())}))},function(e,n){$(document).ready((function(){$(".show-phone").on("click",(function(){$(".showTel-overlay").fadeIn().css("display","flex")})),$(".showTel-close").on("click",(function(){$(".showTel-overlay").fadeOut().css("display","none")})),$(".diplom-overlay").on("click",(function(){var e=$(this).parent().find("img").attr("src");$(".headerMenu-img").css("background-image","url("+e+")"),$(".diplom-overlay-headerMenu").css("display","flex")}))})),$(document).on("click",(function(e){var n=$(".showTel-headerMenu"),t=$(".show-phone");t.is(e.target)||0!==t.has(e.target).length||n.is(e.target)||0!==n.has(e.target).length||$(".showTel-overlay").fadeOut().css("display","none");var i=$(".diplom-overlay");i.is(e.target)||0!==i.has(e.target).length||$(".diplom-overlay-headerMenu").fadeOut().css("display","none")}))},function(e,n){$(document).ready((function(){$(".anhors").on("click","a",(function(e){e.preventDefault();var n=$(this).attr("href"),t=$(n).offset().top;$("body,html").animate({scrollTop:t},800)}))}))},function(e,n){$(document).ready((function(){$(".servisDrop").on("click",(function(){$(this).children(".dropdown-menu").toggleClass("active"),console.log($(this).children(".dropdown-menu").height()),$(this).children("button").find(".arrow").toggleClass("active"),$(this).children("a").find(".arrow").toggleClass("active")})),$(".servisDrop").click((function(){$(this).closest("li").siblings().find(".dropdown-menu").removeClass("active").parent(".dropdown").children("button").find(".arrow").removeClass("active")}))}))},function(e,n){$(document).ready((function(){$((function(){var e=$("#top_nav"),n=$(this).scrollTop();n>250&&e.css("top",200),$(window).scroll((function(){(n=$(this).scrollTop())+200<250?e.css("top",250-n):e.css("top",200)}))}))}))},function(e,n){$(document).ready((function(){var e=$("#tabs .tab-title a");$("#tabs .tab-title").on("click","a",(function(){e.index(this)}))}))},function(e,n,t){"use strict";t.r(n);t(0),t(4);var i=function(){var e=$(".spec-slider__body .slider .owl-stage .active").index()+1;$(".spec-slider__body .slider__nav .count .current").html(e)},o=(t(5),t(6),t(7),function(){var e=$(event.currentTarget);e.val()?e.parent(".input-wrapper").addClass("input-wrapper--input"):e.parent(".input-wrapper").removeClass("input-wrapper--input")}),r=function(){var e=$(".big-slider");"process"!==e.attr("data-process")&&(e.attr("data-process","process"),setTimeout((function(){e.attr("data-process","false")}),350))},a=function(){$(".search-doctor-list .list__body .item--hidden").removeClass("item--hidden"),$(".search-doctor-list .list__body .more").fadeOut("slow")},s=function(){var e=$("#rev-form input").val(),n=$("#rev-form textarea").val(),t=$("#rev-form .form__submit");""===e||""===n?t.attr("disabled","disabled"):t.removeAttr("disabled")};t(8),t(9);function c(e,n){for(var t=0;t<n.length;t++){var i=n[t];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}var l=new(function(){function e(){!function(e,n){if(!(e instanceof n))throw new TypeError("Cannot call a class as a function")}(this,e)}var n,t,i;return n=e,(t=[{key:"subMenu",value:function(e){e.preventDefault();var n=e.target.nextElementSibling;if(n&&n.classList.contains("sub-menu"))n.classList.toggle("show");else{var t=e.target;window.location=t.getAttribute("href")}}},{key:"closeMenu",value:function(e){var n=document.querySelector(".sub-menu"),t=document.querySelector(".menu-item-has-children");if(n&&t){var i=e.target===n||n.contains(e.target)||t.contains(e.target),o=e.target===t;i||o||document.querySelectorAll(".sub-menu").forEach((function(e){e.classList.remove("show")}))}}},{key:"shadow",value:function(){var e=document.querySelector(".header").getBoundingClientRect().height;document.querySelector(".header-margin").style.height=e+"px",pageYOffset>50?document.querySelector(".header").classList.add("shadow"):document.querySelector(".header").classList.remove("shadow")}},{key:"mobileMenu",value:function(){var e=document.querySelector(".header__menu-btn .humb"),n=document.querySelector(".header__menu-btn span"),t=document.querySelector(".header__bot"),i=document.querySelector(".header__navigation"),o=document.getElementById("mobile-search-form");e.classList.toggle("close"),n.textContent=e.classList.contains("close")?"Закрыть":"Меню",t.style.borderBottom=e.classList.contains("close")?"none":"1px solid #ededed";var r=document.createElement("form");r.setAttribute("id","mobile-search-form"),r.innerHTML='<form id="mobile-search-form"><input type="submit" value=""><input type="text" placeholder="Поиск">',o||i.prepend(r),document.body.classList.toggle("stop-scroll"),i.classList.toggle("show")}}])&&c(n.prototype,t),i&&c(n,i),e}());$(document).ready((function(e){var n;!function(){var e=$(".big-slider");if(e.length<0)return null;var n=$(".big-slider .item"),t=0,i=e.width()-160;n.each((function(){var e=n.length-t,o=80*t,r=40*t,a=n.eq(0).height()-o;$(this).css({"z-index":e,transform:"translateX("+o+"px)",width:i+"px","margin-top":r+"px",height:a+"px"}),t<3&&$(this).addClass("active"),t++}))}(),l.shadow(),$(".spec-slider__body .slider").owlCarousel({loop:!1,nav:!1,dots:!1,autoWidth:!0,autoplay:!1,responsive:{0:{dots:!0,autoWidth:!1,items:1},767:{dots:!0}},callbacks:function(){var e=$(".spec-slider__body .slider"),n=+e.attr("data-count"),t=n+1;t>+e.attr("data-all")&&(t=1),e.attr("data-count",t),$(".spec-slider__body .slider__nav .count .current").html(n)}}).on("translated.owl.carousel",(function(e){i()})),$(".thanks-slider__body").owlCarousel({loop:!1,nav:!0,navText:"",dots:!1,autoWidth:!0,autoplay:!1,margin:32}),$(".pacient-slider__body").owlCarousel({loop:!0,nav:!0,dots:!1,margin:16,items:4,responsive:{0:{dots:!0,items:3},575:{dots:!1,items:4}}}),$(".diplom-slider__body").owlCarousel({loop:!1,nav:!0,navText:"",dots:!1,autoWidth:!0,autoplay:!1,margin:20}),n=$(".spec-slider__body .slider .item").length,$(".spec-slider__body .slider .owl-item").each((function(){$(this).hasClass("cloned")&&n--})),$(".spec-slider__body .slider__nav .count .all").html(n),$(".spec-slider__body .slider").attr("data-all",n),i(),$(".spec-slider__body .slider__nav .slider-btn").on("click",(function(e){!function(e){$(e.currentTarget).hasClass("prev")?$(".spec-slider__body .slider .owl-nav .owl-prev").trigger("click"):$(".spec-slider__body .slider .owl-nav .owl-next").trigger("click")}(e)})),$(".news-tab__head .tabs .tab").on("click",(function(e){!function(e){var n=$(".news-tab__head .tabs .tab"),t=$(e.currentTarget);n.removeClass("active"),t.addClass("active");var i=t.attr("id").split("tab-")[1];$(".news-tab__body").removeClass("show"),$("#body-"+i).addClass("show")}(e)})),$("input,textarea").on("input",o),$(".search-doctor-sidebar .sidebar__options .options__list .option").on("click",(function(e){return function(e){$(".search-doctor-sidebar .sidebar__options .options__list .option .check").removeClass("active"),$(".search-doctor-list .list__body .item").removeClass("item--hidden"),$(e.currentTarget).children(".check").addClass("active");var n=$(e.currentTarget).attr("id")?$(e.currentTarget).attr("id"):"all",t=$(".search-doctor-list .list__latter").html(),i=$(".search-doctor-list .list__body .item .info .name");"all"===n?($(".search-doctor-list").removeAttr("data-serv"),i.each((function(){$(this).html()[0]===t&&$(this).parent(".info").parent(".item").addClass("item--show")}))):($(".search-doctor-list .list__body .item").removeClass("item--show"),$(".search-doctor-list").attr("data-serv",n),i.each((function(){$(this).html()[0]===t&&$(this).parent(".info").parent(".item").hasClass("category-"+n)&&$(this).parent(".info").parent(".item").addClass("item--show")})));var o=$(".search-doctor-list .list__body .item--show");if(o.length<12)$(".search-doctor-list .list__body .more").fadeOut("fast");else{$(".search-doctor-list .list__body .more").fadeIn("fast");var r=0;o.each((function(){++r>12&&$(this).addClass("item--hidden")}))}}(e)})),$(".big-slider .next").on("click",(function(e){return function(e){if("process"!==$(".big-slider").attr("data-process")){r();var n=$(".big-slider .active");if($(".big-slider .prev").removeClass("disabled"),n.eq(0).css({transform:"translateX(-180px)"}).removeClass("active"),n.eq(1).length>0){var t=n.eq(1).height()+80,i=+n.eq(1).css("margin-top").split("px")[0]-40;n.eq(1).css({transform:"translateX(0)","margin-top":i+"px",height:t+"px"})}if(n.eq(2).length>0){var o=n.eq(2).height()+80,a=+n.eq(2).css("margin-top").split("px")[0]-40;n.eq(2).css({transform:"translateX(80px)","margin-top":a+"px",height:o+"px"})}else $(".big-slider .next").addClass("disabled");var s=n.eq(2).next(".item"),c=s.height()+80,l=+s.css("margin-top").split("px")[0]-40;s.css({transform:"translateX(160px)","margin-top":l+"px",height:c+"px"}).addClass("active"),$(".big-slider .item").each((function(){if(!$(this).hasClass("active")){var e=$(this).height()+80,n=$(this).css("margin-top").split("px")[0]-40;$(this).css({"margin-top":n+"px",height:e+"px"})}}))}}()})),$(".big-slider .prev").on("click",(function(e){return function(e){if("process"!==$(".big-slider").attr("data-process")){r();var n=$(".big-slider .active");$(".big-slider .next").removeClass("disabled");var t=n.eq(0),i=t.height(),o=t.height()-80;if(t.css({transform:"translateX(80px)","margin-top":"40px",height:o+"px"}),n.eq(1).length>0){var a=n.eq(1).height()-80,s=+n.eq(1).css("margin-top").split("px")[0]+40;n.eq(1).css({transform:"translateX(160px)","margin-top":s+"px",height:a+"px"})}if(n.eq(2).length>0){var c=n.eq(2).height()-80,l=+n.eq(2).css("margin-top").split("px")[0]+40;n.eq(2).css({transform:"translateX(240px)","margin-top":l+"px",height:c+"px"}).removeClass("active")}var d=t.prev(".item");d.length>0&&d.css({transform:"translateX(0)","margin-top":"0",height:i+"px"}).addClass("active"),$(".big-slider .active").eq(0).prev(".item").length<1&&$(".big-slider .prev").addClass("disabled"),$(".big-slider .item").each((function(){if(!$(this).hasClass("active")&&+$(this).css("margin-top").split("px")[0]>0){var e=$(this).height()-80,n=+$(this).css("margin-top").split("px")[0]+40;$(this).css({"margin-top":n+"px",height:e+"px"})}}))}}()})),$(".search-doctor-list .list__body .more").on("click",a),$("#rev-form input, #rev-form textarea").on("input",s),$(".form_spec .rank .star-block button").on("click",(function(e){return function(e){var n=$(e.currentTarget).index();$(".form_spec .rank .star-block button").each((function(){$(this).children("img").attr("src","http://localhost:3000/rkb/app/wp-content/themes/rkb/media/icon/specialist/star-disable.svg"),($(this).index()<n||$(this).index()===n)&&$(this).children("img").attr("src","http://localhost:3000/rkb/app/wp-content/themes/rkb/media/icon/specialist/star-color.svg")})),$("#rev-input-rating").val(n+1)}(e)})),$(".menu-item-has-children a").on("click",(function(e){return l.subMenu(e)})),$(".header__menu-btn").on("click",l.mobileMenu),$(".aside ul li").on("click",(function(){$(this).hasClass("active")||($(this).siblings().removeClass("active"),$(this).addClass("active"))})),document.body.addEventListener("click",(function(e){return l.closeMenu(e)})),window.addEventListener("scroll",l.shadow)})),$(window).resize((function(){l.shadow()}))}]);