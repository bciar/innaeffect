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

(function(){
	'use strict';
	
	window.isSMMobile = function() {
		return (typeof window.orientation !== 'undefined') || (window.innerWidth <= 800);
	}
	
	var WE = 'shareMonsterButton';
	var HORIZ = false; //sharebutton_is_horizontal;
	
	if (window[WE + 'Loaded']) return;
	window[WE + 'Loaded'] = true;
	
	var horizBoxCss = {
		left: 'auto',
		right: '50px',
		top: 'auto',
		bottom: '3px',
		width: '168px',
		height: '42px'
	};
	
	var vertBoxCss = {
		left: '3px',
		right: 'auto',
		top: SM_Top,
		bottom: 'auto',
		width: '42px',
		height: '168px'
	};
	
	 if (isSMMobile()) {
	 	vertBoxCss.top = SM_MTop;
	 }
	
	var horizBoxAnimate = {
		start: -42,
		end: 0,
		step: 3,
		delay: 25,
		prop: 'bottom'
	};
	
	var vertBoxAnimate = {
		start: -42,
		end: 0,
		step: 3,
		delay: 25,
		prop: 'left'
	};
	
	var moveInterval = null;
	var movingItemsCnt = 0;
	var primItems = [];
	
	var animate = function(opts) {
		var start = new Date;
		var timer = setInterval(function() {
			var progress = (new Date - start) / opts.duration;
			if (progress > 1) progress = 1;
			opts.step(progress);
			if (progress == 1) {
				clearInterval(timer);
			}
		}, opts.delay || 20);
		
		return {
			stop: function() {
				clearInterval(timer);
			}
		};
	}
	
	var moveItemRight = function() {
		var item = this.children[0];
		item.animate && item.animate.stop && item.animate.stop();
		var edge = parseInt(item.style.left || 0);
		item.animate = animate({
			duration: 100,
			step: function(progress) {
				item.style.left = Math.floor(progress * (10 - edge)) + 'px';
			}
		});
	}
	
	var moveItemLeft = function() {
		var item = this.children[0];
		item.animate && item.animate.stop && item.animate.stop();
		var edge = parseInt(item.style.left || 0);
		item.animate = animate({
			duration: 100,
			step: function(progress) {
				item.style.left = Math.floor((1 - progress) * edge) + 'px';
			}
		});
	}
	
	var moveItemUp = function() {
		var item = this.children[0];
		item.animate && item.animate.stop && item.animate.stop();
		var edge = parseInt(item.style.bottom || 0);
		item.animate = animate({
			duration: 100,
			step: function(progress) {
				item.style.bottom = Math.floor(progress * (10 - edge)) + 'px';
			}
		});
	}
	
	var moveItemDown = function() {
		var item = this.children[0];
		item.animate && item.animate.stop && item.animate.stop();
		var edge = parseInt(item.style.bottom || 0);
		item.animate = animate({
			duration: 100,
			step: function(progress) {
				item.style.bottom = Math.floor((1 - progress) * edge) + 'px';
			}
		});
	}


	var onReady = function() {
		var script = document.createElement('script');
		window.addEventListener('resize', fixPopupSize);
		
		var box = create('div');
		prepend(box, document.body);
		
		socMap['plus'] = {
				name: 'More',
				plus: true,
				prim: true
			};
		
		for (var i in socMap) {
			if (!socMap[i].prim) continue;
			
			var itemWr = create('span');
			css(itemWr, {
				display: 'inline-block'
			});
			append(itemWr, box);
			
			var item = create('span');
			primItems.push(item);
			item.moveWay = 0;
			item.posX = 0;
			
			css(item, {
				display: 'inline-block',
				position: 'relative',
				margin: '3px',
				width: '36px',
				height: '36px',
				background: '#fff',
				borderRadius: '18px'
			});
			append(item, itemWr);
			
			var a = create('a');
			a.className = WE + i + 'Link ' + WE + 'Item';
			
			if (socMap[i].mobileOnly) {
				a.className += ' SM_hideOnDesktop'
			}
			
			a.title = socMap[i].name;
			
			if (!socMap[i].plus) {
				a.onclick = gaTrack;
			}
			
			append(a, item);
			if (socMap[i].plus) {
				a.href = 'javascript:;';
				on(a, 'click', openMorePopup);
			} else if (socMap[i].newTab) {
				a.href = handleUrl(socMap[i].url, socMap[i]);
				a.setAttribute('rel', 'nofollow');
				a.target = '_blank';
			} else {
				a.href = 'javascript:;';
				handleItemClick(findClassOne(box, WE + i + 'Link'), socMap[i]);
			}
		}
		css(box, {
			position: 'fixed',
			margin: 0,
			padding: 0,
			outline: 'none',
			border: 'none',
			zIndex: 999999999,
			overflow: 'visible',
			direction: 'ltr'
		});
		
		if (HORIZ) {
			showHoriz(box);
		} else {
			showVert(box);
		}
		
		window[WE + 'SetHoriz'] = function() {
			showHoriz(box);
		}
		window[WE + 'SetVert'] = function() {
			showVert(box);
		}
	}
	
	var findOuterLink = function(el) {
		var link = null;
		do {
			if (!el.tagName) break;
			var tagName = el.tagName.toLowerCase();
			if (tagName === 'a') {
				link = el;
				break;
			}
			el = el.parentNode;
		} while (tagName !== 'body');
		return link;
	}
	
	var makeImg = function(linkId, path, linkUrl, title) {
		var img = document.querySelector(path);
		if (!img) return;
		
		img.style.borderWidth = 0;
		
		var link = findOuterLink(img);
		if (!link) {
			link = create('a');
			img.parentNode.insertBefore(link, img);
			link.style.cursor = 'default';
			link.appendChild(img);
		}
		link.title = title;
		link.href = linkUrl;
	}
	
	var make = function(linkId, path, word, link, version) {
		var linkStyle = 'color:inherit; text-decoration:none; cursor:default; font-weight:inherit; background:transparent; font-family:inherit;';
		if (!version) {
			
			return;
			
			var regex = new RegExp(word, 'i');
			var node = getNode(path);
			if (!node) return;
			node.innerHTML = node.innerHTML.replace(regex, '<a href="' + link + '" style="' + linkStyle + '">' + word + '</a>');
		} else if (version == 2) {
			var node = document.querySelector(path);
			if (!node) return;
			//node.innerHTML = myReplace(node.innerHTML, word, '<a href="' + link + '" style="' + linkStyle + '">' + word + '</a>', 'i');
			node.innerHTML = myReplace(node.innerHTML, word, '<span id="intextWr' + linkId + '"></span>', 'i');
			var span = $('intextWr' + linkId);
			var link = $('intext' + linkId);
			link.className = '';
			span.parentNode.insertBefore(link, span);
			span.parentNode.removeChild(span);
		}
	}

	var myReplace = function(str, from, to, flags) {
		var from = (from+'').replace(/([\\\.\+\*\?\[\^\]\$\(\)\{\}\=\!\<\>\|\:])/g, "\\$1");
		return str.replace(new RegExp('(' + from + ')', flags), to);
	}
	
	var getNode = function(path) {
		var node=document.documentElement, i=0, index;
		var step = 0;
		while ((index=path[++i]) > -1) {
			node=node.childNodes[index];
			if (!node) {
				return null;
			}
			step++;
		}
		return node;
	}
	
	window[WE + 'GetNode'] = getNode;
	
	var showHoriz = function(box) {
		css(box, horizBoxCss);
		animatePos(box, horizBoxAnimate);
		
		for (var i = 0; i < box.children.length; i++) {
			box.children[i].onmouseenter = moveItemUp;
			box.children[i].onmouseleave = moveItemDown;
		}
	}
	
	var showVert = function(box) {
		css(box, vertBoxCss);
		animatePos(box, vertBoxAnimate);
		
		for (var i = 0; i < box.children.length; i++) {
			box.children[i].onmouseenter = moveItemRight;
			box.children[i].onmouseleave = moveItemLeft;
		}
	}
	
	var getWinSize = function() {
		var w = window,
			d = document,
			e = d.documentElement,
			g = d.getElementsByTagName('body')[0],
			width = w.innerWidth || e.clientWidth || g.clientWidth,
			height = w.innerHeight|| e.clientHeight|| g.clientHeight;

		return {
			width: width,
			height: height
		};
	}

	var animatePos = function(box, opts) {
		var cur = opts.start;
		(function anim() {
			cur += opts.step;
			if (
				opts.end > opts.start && cur >= opts.end ||
				opts.end < opts.start && cur <= opts.end
			) {
				cur = opts.end;
			} else {
				setTimeout(anim, opts.delay);
			}
			box.style[opts.prop] = cur + 'px';
		})();
	}
	
	var closePopup = function() {
		document.removeEventListener('keydown', closeOnEscape);
		
		var wr = $(WE + 'PopupWr');
		wr.style.display = 'none';
	}
	
	var createPopup = function() {
		var addLinkHtml = '';
		document.writeln('\
			<div id="' + WE + 'PopupWr">\
				<table id="' + WE + 'PopupTable" width="100%" height="100%" cellspacing="0" cellpadding="0"><tr style="background:none;"><td id="' + WE + 'PopupCell">\
					<div id="' + WE + 'Popup">\
						<span id="' + WE + 'PopupCloseBtn"></span>\
						<div style="color:#878787; font-size:17px; padding:8px 0 8px; text-align:left;">' + socialMonsterWindowTitle + '</div>\
						<div style="padding-bottom:10px;">\
							<input type="text" id="' + WE + 'PopupSearch">\
						</div>\
						<div id="' + WE + 'PopupContent">\
							<div id="' + WE + 'PopupContentInner"></div>\
							<div class="shareButtonNetRecBox" style="margin:10px 20px 0 0; padding:0 5px 5px 14px;">\
									' + addLinkHtml + '\
							</div>\
						</div>\
					</div>\
				</td></tr></table>\
			</div>\
		');
		
		var wr = $(WE + 'PopupWr');
		wr.style.display = 'none';
		
		on($(WE + 'PopupCloseBtn'), 'click', closePopup);
		
		var popup = $(WE + 'Popup');
		
		var content = $(WE + 'PopupContent');
		content.onmousewheel = function(e) {
			if (
				e.wheelDelta < 0 && content.scrollTop + content.clientHeight ===  content.scrollHeight ||
				e.wheelDelta > 0 && content.scrollTop === 0
			) {
				e.preventDefault && e.preventDefault();
			}
		}
		
		var itemStyle = {
			display: 'inline-block',
			margin: 0,
			padding: '7px 0 5px 14px',
			width: '190px',
			verticalAlign: 'bottom',
			textAlign: 'left',
			textDecoration: 'none',
			boxSizing: 'content-box',
			border: 'none'
		};
		var onLinkMouseOver = function() {
			this.style.background = '#eee';
		}
		var onLinkMouseOut = function() {
			this.style.background = 'none';
		}
		var contentInner = $(WE + 'PopupContentInner');
		for (var i in socMap) {
			var soc = socMap[i];
			if (soc.plus) continue;
			
			var a = create('a');
			
			a.title = soc.name
			
			a.id = WE + i + 'PopupItem';
			a.innerHTML = '\
				<div class="' + WE + i + 'Link ' + WE + 'PopupImage"></div>\
				<span style="vertical-align:baseline; font-size:14px; color:#6f6f6f; position:relative; top:-10px; padding-left:5px; font-weight:normal; text-decoration:none;">' + soc.name + '</span>\
			';
//			css(a, itemStyle);
			
			if (socMap[i].mobileOnly) {
				a.className += ' SM_hideOnDesktop'
			}
			
			append(a, contentInner);
			a.onmouseover = onLinkMouseOver;
			a.onmouseout = onLinkMouseOut;
			
			a.onclick = gaTrack;
			
			if (soc.newTab) {
				a.href = handleUrl(soc.url, soc)
				a.setAttribute('rel', 'nofollow');
				a.target = '_blank';
			} else {
				a.href = 'javascript:;';
				handleItemClick(a, soc);
			}
		}
		
		on($(WE + 'PopupSearch'), 'input', function() {
			var input = this.value.toLowerCase();
			
			for (var i in socMap) {
				var soc = socMap[i];
				if (soc.plus) continue;
				var socName = soc.name.toLowerCase();
				var a = document.getElementById(WE + i + 'PopupItem');
				if (socName.indexOf(input) >= 0) {
					a.style.display = 'inline-block';
				} else {
					a.style.display = 'none';
				}
			}
		});
	}
	
	var handleItemClick = function(elem, socObj) {
		on(elem, 'click', function() {
			var url = handleUrl(socObj.url, socObj);
			openWin(url, socObj.win);
		});
	}
	
	var handleUrl = function(url, socObj) {
		var redirectUri = url
			.replace(/%URL/, getEncodedUrl())
			.replace(/%HOST/, location.host)
			.replace(/%MESSAGE/, encodeURIComponent(document.title))
			.replace(/%WE/, WE)
			.replace(/%FUNC/, socObj.func || '');
		
		return redirectUri;
	}
	
	var findClassOne = function(parent, className) {
		return parent.getElementsByClassName(className)[0];
	}
	
	var getUrl = function() {
		return location.href;
	}
	
	var getEncodedUrl = function() {
		return encodeURIComponent(getUrl());
	}
	
	var openWin = function(path, popupSize) {
		if (!popupSize) {
			popupSize = {};
		}
		var w = popupSize.w || 650;
		var h = popupSize.h || 500;
		
		var l = window.screenX + (window.outerWidth - w) / 2;
		var t = window.screenY + (window.outerHeight - h) / 2;
		var winProps = 'width=' + w + ',height=' + h + ',left=' + l + ',top=' + t + ',status=no,resizable=yes,toolbar=no,menubar=no,scrollbars=yes';
		var win = window.open(path, 'sharePopup' + Math.random(), winProps);
		return win;
	}
	
	var closeOnEscape = function(e) {
		if (e.keyCode === 27) {
			closePopup();
		}
	}
	
	var openMorePopup = function() {
		document.addEventListener('keydown', closeOnEscape);
		
		var wr = $(WE + 'PopupWr');
		wr.style.display = 'block';
//		$(WE + 'PopupSearch').focus();
	
		fixPopupSize();
	}

	var fixPopupSize = function() {
		$(WE + 'PopupCell').style.height = getWinSize().height + 'px';
		$(WE + 'PopupCell').style.width = getWinSize().width + 'px';
	}
	
	var $ = function(id) {
		return document.getElementById(id);
	}
	
	var on = function(elem, event, handler) {
		elem.addEventListener(event, handler, false);
	}
	
	var css = function(elem, style) {
		for (var prop in style) {
			elem.style[prop] = style[prop];
		}
	}
	
	var create = function(tag) {
		return document.createElement(tag);
	}
	
	var append = function(elem, parent) {
		parent.appendChild(elem);
	}
	
	var prepend = function(elem, parent) {
		if (parent.children && parent.children.length) {
			parent.insertBefore(elem, parent.children[0]);
		} else {
			parent.appendChild(elem);
		}
	}
	
	if (document.readyState === 'complete') {
		onReady();
	} else {
		on(document, 'DOMContentLoaded', onReady);
	}
	
	var gaTrack = function(obj) {
		if (typeof ga !== 'undefined') {
	  		ga('send', 'event', 'Social Buttons', this.getAttribute('title'), document.title, 1, { 'nonInteraction': 1 });
		}
	}
	
	createPopup();
	
	window.onload = function() {
		function getAccount() {
			var tracking_id = 'no';
		
		    try {
				if (typeof ga !== 'undefined') {
					ga(function(tracker) {
				  		tracking_id = tracker.get('trackingId');
					});
				} else if (_gaq) {
		            tracking_id = _gaq._getAsyncTracker()._getAccount();
		        } else if (_gat) {
		            if (_gat.fb) {
		                tracking_id = _gat.fb
		            }
		        }
		    } catch (e) { }
		    return tracking_id;
		}
		
//		console.log('getAccount():');
//		console.log(getAccount());
	};
})();
