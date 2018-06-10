window.onscroll = function() {myFunction()};

var header = document.getElementById("hautdepage");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    header.classList.add("basdepage");
  } else {
    header.classList.remove("basdepage");
  }
}
