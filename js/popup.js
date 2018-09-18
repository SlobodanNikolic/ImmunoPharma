
function addEvent(obj, evt, fn) {
    if (obj.addEventListener) {
        obj.addEventListener(evt, fn, false);
    }
    else if (obj.attachEvent) {
        obj.attachEvent("on" + evt, fn);
    }
}

window.addEventListener('DOMContentLoaded', function(){

            // Get the modal
var modal = document.getElementById('myModal');


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

console.log(modal);
console.log(span);

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// modal.style.display = "block";
addEvent(document, "mouseout", function(e) {
  e = e ? e : window.event;
  var from = e.relatedTarget || e.toElement;
  if (!from || from.nodeName == "HTML") {
      // stop your drag event here
      // for now we can just use an alert
      if(localStorage.getItem("popup")==null){
        localStorage.setItem("popup", 1);
        modal.style.display = "block";
      }
  }
});

});










