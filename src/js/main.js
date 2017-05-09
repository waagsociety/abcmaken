//polyfill for closest
if (window.Element && !Element.prototype.closest) {
	Element.prototype.closest = function(s) {
		var matches = (this.document || this.ownerDocument).querySelectorAll(s),
			i, el = this;
		do {
			i = matches.length;
			while (--i >= 0 && matches.item(i) !== el) {};
		} while ((i < 0) && (el = el.parentElement));
		return el;
	};
}

function getMousePos(e) {
  return {
    x: e.clientX,
    y: e.clientY,
  }
}


function initArticleNav(prevClass, nextClass) {
  document.onkeydown = (e) => {
    e = e || window.event
    switch(e.which || e.keyCode) {
      case 37:
        document.querySelector(prevClass).click()
        break
      case 39:
        document.querySelector(nextClass).click()
        break
      default: return
    }
    e.preventDefault()
  }
}


window.onunload = window.onbeforeunload = (function(){

	//we leave this page, remove the loaded
	//document.querySelector('.animation-container').classList.remove('loaded')


})

//force scroll animation when backbutton hit (Safari needs this)
window.onpageshow = function(event) {
	 	init();
};

//
window.onpagehide = function(event) {
	 	document.querySelector('.animation-container').classList.remove('loaded')
};

//
var gInited = false;
function init() {

  //onpageshow, DOMContentLoaded both may call
	if(gInited)
	{
		return;
	}
	gInited = true;

	//goto to top
	zenscroll.toY(0)

	//add handler to links within sections
	var links1 = document.querySelectorAll("section a");
	for (var i=0;i<links1.length;i++) {
		links1[i].addEventListener("click", onSectionLinkClicked, false);
	}

	//add handler to links in site map overlay
	var links2 = document.querySelectorAll(".menu-panel a");
	for (var i=0;i<links2.length;i++) {
		links2[i].addEventListener("click", onIndexLinkClicked, false);
	}

	//add handler to links in header "tag cloud" items
	var linksHeader = document.querySelectorAll(".intro-text a");
	for (var i=0;i<linksHeader.length;i++) {
		linksHeader[i].addEventListener("click", onIndexLinkClicked, false);
	}

	//when there's as a hash anchor in the url,
	var anchor = window.location.hash.substr();
	if(anchor.length > 0)
	{
		setTimeout(function(){
			gotoToSectionWithAnchor(anchor)
 		}, 500);
	}

	//animate
	document.querySelector('.animation-container').classList.remove('loaded')
	setTimeout(function() {
		document.querySelector('.animation-container').classList.add('loaded')
	}, 30);

}

//link in the site index was clicked
function onIndexLinkClicked(e) {

	document.querySelector('.navigation').classList.remove('active');
	document.body.classList.remove('menu-open');
	var targetLocation = document.createElement('a');
	targetLocation.href = e.target.href;
	if(targetLocation.host === window.location.host && targetLocation.pathname === window.location.pathname) {
		gotoToSectionWithAnchor(targetLocation.hash)
	}

}

//a link in a section was clicked, find out which section it belongs to, put a link to the section in the browser history to make backbutton work nicely
function onSectionLinkClicked(e) {

	var s = e.target.closest("section");
	if(s !== undefined)
	{
		var currentSectionLink = window.location.pathname + "#" + s.getAttribute("data-id");
		history.replaceState({}, "", currentSectionLink);

	  //internal links by anchor in path must be handled here
		var targetLocation = document.createElement('a');
		targetLocation.href = e.target.href;

		//check if this is a link within our domain
		if(targetLocation.host === window.location.host) {
			//check if this is a link within this page
			if(targetLocation.pathname === window.location.pathname)
			{
				gotoToSectionWithAnchor(targetLocation.hash)
			}
		}
		else
		{
			window.open(e.target.href, '_blank');
			e.preventDefault();
		}

	}


}

zenscroll.setup(200, 0)
//like #avontuur, scroll to the section, find it by data-id attribute
function gotoToSectionWithAnchor(hash) {
	var anchor = hash.substr(1);
	var element = document.querySelectorAll("[data-id='" + anchor + "']")[0];
	if(element !== undefined) {
		//element.scrollIntoView();
		element.classList.add('active');
		zenscroll.to(element, 300)
	}

}

//
document.addEventListener("DOMContentLoaded", function(event) {
  init();
});


/*
 * Konami-JS ~
 * :: Now with support for touch events and multiple instances for
 * :: those situations that call for multiple easter eggs!
 * Code: https://github.com/snaptortoise/konami-js
 * Examples: http://www.snaptortoise.com/konami-js
 * Copyright (c) 2009 George Mandis (georgemandis.com, snaptortoise.com)
 * Version: 1.4.7 (3/2/2016)
 * Licensed under the MIT License (http://opensource.org/licenses/MIT)
 * Tested in: Safari 4+, Google Chrome 4+, Firefox 3+, IE7+, Mobile Safari 2.2.1 and Dolphin Browser
 */

var Konami = function (callback) {
	var konami = {
		addEvent: function (obj, type, fn, ref_obj) {
			if (obj.addEventListener)
				obj.addEventListener(type, fn, false);
			else if (obj.attachEvent) {
				// IE
				obj["e" + type + fn] = fn;
				obj[type + fn] = function () {
					obj["e" + type + fn](window.event, ref_obj);
				}
				obj.attachEvent("on" + type, obj[type + fn]);
			}
		},
		input: "",
		pattern: "38384040373937396665",
		load: function (link) {
			this.addEvent(document, "keydown", function (e, ref_obj) {
				if (ref_obj) konami = ref_obj; // IE
				konami.input += e ? e.keyCode : event.keyCode;
				if (konami.input.length > konami.pattern.length)
					konami.input = konami.input.substr((konami.input.length - konami.pattern.length));
				if (konami.input == konami.pattern) {
					konami.code(link);
					konami.input = "";
					e.preventDefault();
					return false;
				}
			}, this);
			this.iphone.load(link);
		},
		code: function (link) {
			window.location = link
		},
		iphone: {
			start_x: 0,
			start_y: 0,
			stop_x: 0,
			stop_y: 0,
			tap: false,
			capture: false,
			orig_keys: "",
			keys: ["UP", "UP", "DOWN", "DOWN", "LEFT", "RIGHT", "LEFT", "RIGHT", "TAP", "TAP"],
			code: function (link) {
				konami.code(link);
			},
			load: function (link) {
				this.orig_keys = this.keys;
				konami.addEvent(document, "touchmove", function (e) {
					if (e.touches.length == 1 && konami.iphone.capture == true) {
						var touch = e.touches[0];
						konami.iphone.stop_x = touch.pageX;
						konami.iphone.stop_y = touch.pageY;
						konami.iphone.tap = false;
						konami.iphone.capture = false;
						konami.iphone.check_direction();
					}
				});
				konami.addEvent(document, "touchend", function (evt) {
					if (konami.iphone.tap == true) konami.iphone.check_direction(link);
				}, false);
				konami.addEvent(document, "touchstart", function (evt) {
					konami.iphone.start_x = evt.changedTouches[0].pageX;
					konami.iphone.start_y = evt.changedTouches[0].pageY;
					konami.iphone.tap = true;
					konami.iphone.capture = true;
				});
			},
			check_direction: function (link) {
				x_magnitude = Math.abs(this.start_x - this.stop_x);
				y_magnitude = Math.abs(this.start_y - this.stop_y);
				x = ((this.start_x - this.stop_x) < 0) ? "RIGHT" : "LEFT";
				y = ((this.start_y - this.stop_y) < 0) ? "DOWN" : "UP";
				result = (x_magnitude > y_magnitude) ? x : y;
				result = (this.tap == true) ? "TAP" : result;

				if (result == this.keys[0]) this.keys = this.keys.slice(1, this.keys.length);
				if (this.keys.length == 0) {
					this.keys = this.orig_keys;
					this.code(link);
				}
			}
		}
	}

	typeof callback === "string" && konami.load(callback);
	if (typeof callback === "function") {
		konami.code = callback;
		konami.load();
	}

	return konami;
};
