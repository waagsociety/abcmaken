function loaded(el) {
  el.classList.add('loaded')
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

function init() {
  loaded(document.querySelector('.animation-container'))
}

document.addEventListener("DOMContentLoaded", function(event) {
  setTimeout(init, 30);
});



