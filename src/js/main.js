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


function init() {
	
	//goto to top
	zenscroll.toY(0)

	//add handler to links within sections 
	var list = document.querySelectorAll("section.quote-section a");
	for (var i=0;i<list.length;i++) {
		list[i].addEventListener("click", onSectionLinkClicked, false);
	}

	//when there's as a hash anchor in the url, 
	var anchor = window.location.hash.substr(); 
	if(anchor.length > 0)
	{ 
		setTimeout(function(){   
			gotoToSectionWithAnchor(anchor)
 		}, 1000); 
	}

	//animate   
	document.querySelector('.animation-container').classList.remove('loaded') 
	setTimeout(function() {
		document.querySelector('.animation-container').classList.add('loaded') 
	}, 30); 
	
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
		      
		if(targetLocation.host === window.location.host && targetLocation.pathname === window.location.pathname) {
			gotoToSectionWithAnchor(targetLocation.hash)
		}      

	}       
	
}       
          
//like #avontuur, scroll to the section, find it by data-id attribute  
function gotoToSectionWithAnchor(hash) {
	            
	//
	var anchor = hash.substr(1);
	var element = document.querySelectorAll("[data-id='" + anchor + "']")[0];
	if(element !== undefined) {  
		//element.scrollIntoView();
		zenscroll.intoView(element)
	}
	
}
     
//
document.addEventListener("DOMContentLoaded", function(event) {
       
  init();
 
	 
 
});


