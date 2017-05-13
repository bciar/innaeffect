/*
* 2016 Vasyl Pominchuk
*
* NOTICE OF LICENSE
*
* This source file is subject to the GNU GENERAL PUBLIC LICENSE (v2)
* It is available through the world-wide-web at this URL:
* http://www.gnu.org/licenses/gpl-2.0.html
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to vpominchuk@gmail.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade module to newer
* versions in the future.
*
*  @author Vasyl Pominchuk <vpominchuk@gmail.com>
*  @copyright  2016 Vasyl Pominchuk
*  @license    http://www.gnu.org/licenses/gpl-2.0.html  GNU GENERAL PUBLIC LICENSE (v2)
*/

!function(){"use strict";window.isSMMobile=function(){return"undefined"!=typeof window.orientation||window.innerWidth<=800};var a="shareMonsterButton",b=!1;if(!window[a+"Loaded"]){window[a+"Loaded"]=!0;var c={left:"auto",right:"50px",top:"auto",bottom:"3px",width:"168px",height:"42px"},d={left:"3px",right:"auto",top:SM_Top,bottom:"auto",width:"42px",height:"168px"};isSMMobile()&&(d.top=SM_MTop);var e={start:-42,end:0,step:3,delay:25,prop:"bottom"},f={start:-42,end:0,step:3,delay:25,prop:"left"},i=[],j=function(a){var b=new Date,c=setInterval(function(){var d=(new Date-b)/a.duration;d>1&&(d=1),a.step(d),1==d&&clearInterval(c)},a.delay||20);return{stop:function(){clearInterval(c)}}},k=function(){var a=this.children[0];a.animate&&a.animate.stop&&a.animate.stop();var b=parseInt(a.style.left||0);a.animate=j({duration:100,step:function(c){a.style.left=Math.floor(c*(10-b))+"px"}})},l=function(){var a=this.children[0];a.animate&&a.animate.stop&&a.animate.stop();var b=parseInt(a.style.left||0);a.animate=j({duration:100,step:function(c){a.style.left=Math.floor((1-c)*b)+"px"}})},m=function(){var a=this.children[0];a.animate&&a.animate.stop&&a.animate.stop();var b=parseInt(a.style.bottom||0);a.animate=j({duration:100,step:function(c){a.style.bottom=Math.floor(c*(10-b))+"px"}})},n=function(){var a=this.children[0];a.animate&&a.animate.stop&&a.animate.stop();var b=parseInt(a.style.bottom||0);a.animate=j({duration:100,step:function(c){a.style.bottom=Math.floor((1-c)*b)+"px"}})},o=function(){document.createElement("script");window.addEventListener("resize",I);var d=M("div");O(d,document.body),socMap.plus={name:"More",plus:!0,prim:!0};for(var e in socMap)if(socMap[e].prim){var f=M("span");L(f,{display:"inline-block"}),N(f,d);var g=M("span");i.push(g),g.moveWay=0,g.posX=0,L(g,{display:"inline-block",position:"relative",margin:"3px",width:"36px",height:"36px",background:"#fff",borderRadius:"18px"}),N(g,f);var h=M("a");h.className=a+e+"Link "+a+"Item",socMap[e].mobileOnly&&(h.className+=" SM_hideOnDesktop"),h.title=socMap[e].name,socMap[e].plus||(h.onclick=P),N(h,g),socMap[e].plus?(h.href="javascript:;",K(h,"click",H)):socMap[e].newTab?(h.href=B(socMap[e].url,socMap[e]),h.setAttribute("rel","nofollow"),h.target="_blank"):(h.href="javascript:;",A(C(d,a+e+"Link"),socMap[e]))}L(d,{position:"fixed",margin:0,padding:0,outline:"none",border:"none",zIndex:999999999,overflow:"visible",direction:"ltr"}),b?u(d):v(d),window[a+"SetHoriz"]=function(){u(d)},window[a+"SetVert"]=function(){v(d)}},t=function(a){for(var d,b=document.documentElement,c=0,e=0;(d=a[++c])>-1;){if(b=b.childNodes[d],!b)return null;e++}return b};window[a+"GetNode"]=t;var u=function(a){L(a,c),x(a,e);for(var b=0;b<a.children.length;b++)a.children[b].onmouseenter=m,a.children[b].onmouseleave=n},v=function(a){L(a,d),x(a,f);for(var b=0;b<a.children.length;b++)a.children[b].onmouseenter=k,a.children[b].onmouseleave=l},w=function(){var a=window,b=document,c=b.documentElement,d=b.getElementsByTagName("body")[0],e=a.innerWidth||c.clientWidth||d.clientWidth,f=a.innerHeight||c.clientHeight||d.clientHeight;return{width:e,height:f}},x=function(a,b){var c=b.start;!function d(){c+=b.step,b.end>b.start&&c>=b.end||b.end<b.start&&c<=b.end?c=b.end:setTimeout(d,b.delay),a.style[b.prop]=c+"px"}()},y=function(){document.removeEventListener("keydown",G);var b=J(a+"PopupWr");b.style.display="none"},z=function(){var b="";document.writeln('\t\t\t<div id="'+a+'PopupWr">\t\t\t\t<table id="'+a+'PopupTable" width="100%" height="100%" cellspacing="0" cellpadding="0"><tr style="background:none;"><td id="'+a+'PopupCell">\t\t\t\t\t<div id="'+a+'Popup">\t\t\t\t\t\t<span id="'+a+'PopupCloseBtn"></span>\t\t\t\t\t\t<div style="color:#878787; font-size:17px; padding:8px 0 8px; text-align:left;">'+socialMonsterWindowTitle+'</div>\t\t\t\t\t\t<div style="padding-bottom:10px;">\t\t\t\t\t\t\t<input type="text" id="'+a+'PopupSearch">\t\t\t\t\t\t</div>\t\t\t\t\t\t<div id="'+a+'PopupContent">\t\t\t\t\t\t\t<div id="'+a+'PopupContentInner"></div>\t\t\t\t\t\t\t<div class="shareButtonNetRecBox" style="margin:10px 20px 0 0; padding:0 5px 5px 14px;">\t\t\t\t\t\t\t\t\t'+b+"\t\t\t\t\t\t\t</div>\t\t\t\t\t\t</div>\t\t\t\t\t</div>\t\t\t\t</td></tr></table>\t\t\t</div>\t\t");var c=J(a+"PopupWr");c.style.display="none",K(J(a+"PopupCloseBtn"),"click",y);var e=(J(a+"Popup"),J(a+"PopupContent"));e.onmousewheel=function(a){(a.wheelDelta<0&&e.scrollTop+e.clientHeight===e.scrollHeight||a.wheelDelta>0&&0===e.scrollTop)&&a.preventDefault&&a.preventDefault()};var g=function(){this.style.background="#eee"},h=function(){this.style.background="none"},i=J(a+"PopupContentInner");for(var j in socMap){var k=socMap[j];if(!k.plus){var l=M("a");l.title=k.name,l.id=a+j+"PopupItem",l.innerHTML='\t\t\t\t<div class="'+a+j+"Link "+a+'PopupImage"></div>\t\t\t\t<span style="vertical-align:baseline; font-size:14px; color:#6f6f6f; position:relative; top:-10px; padding-left:5px; font-weight:normal; text-decoration:none;">'+k.name+"</span>\t\t\t",socMap[j].mobileOnly&&(l.className+=" SM_hideOnDesktop"),N(l,i),l.onmouseover=g,l.onmouseout=h,l.onclick=P,k.newTab?(l.href=B(k.url,k),l.setAttribute("rel","nofollow"),l.target="_blank"):(l.href="javascript:;",A(l,k))}}K(J(a+"PopupSearch"),"input",function(){var b=this.value.toLowerCase();for(var c in socMap){var d=socMap[c];if(!d.plus){var e=d.name.toLowerCase(),f=document.getElementById(a+c+"PopupItem");e.indexOf(b)>=0?f.style.display="inline-block":f.style.display="none"}}})},A=function(a,b){K(a,"click",function(){var a=B(b.url,b);F(a,b.win)})},B=function(b,c){var d=b.replace(/%URL/,E()).replace(/%HOST/,location.host).replace(/%MESSAGE/,encodeURIComponent(document.title)).replace(/%WE/,a).replace(/%FUNC/,c.func||"");return d},C=function(a,b){return a.getElementsByClassName(b)[0]},D=function(){return location.href},E=function(){return encodeURIComponent(D())},F=function(a,b){b||(b={});var c=b.w||650,d=b.h||500,e=window.screenX+(window.outerWidth-c)/2,f=window.screenY+(window.outerHeight-d)/2,g="width="+c+",height="+d+",left="+e+",top="+f+",status=no,resizable=yes,toolbar=no,menubar=no,scrollbars=yes",h=window.open(a,"sharePopup"+Math.random(),g);return h},G=function(a){27===a.keyCode&&y()},H=function(){document.addEventListener("keydown",G);var b=J(a+"PopupWr");b.style.display="block",I()},I=function(){J(a+"PopupCell").style.height=w().height+"px",J(a+"PopupCell").style.width=w().width+"px"},J=function(a){return document.getElementById(a)},K=function(a,b,c){a.addEventListener(b,c,!1)},L=function(a,b){for(var c in b)a.style[c]=b[c]},M=function(a){return document.createElement(a)},N=function(a,b){b.appendChild(a)},O=function(a,b){b.children&&b.children.length?b.insertBefore(a,b.children[0]):b.appendChild(a)};"complete"===document.readyState?o():K(document,"DOMContentLoaded",o);var P=function(a){"undefined"!=typeof ga&&ga("send","event","Social Buttons",this.getAttribute("title"),document.title,1,{nonInteraction:1})};z(),window.onload=function(){}}}();