

// function myFunction(x) {
//     if (x.matches) { // If media query matches
//       document.body.style.backgroundColor = "yellow";
//     } else {
//       document.body.style.backgroundColor = "pink";
//     }
//   }
  
//   var x = window.matchMedia("(max-width: 700px)")
//   myFunction(x) // Call listener function at run time
//   x.addListener(myFunction) // Attach listener function on state changes

function display() {
    if (document.getElementsByTagName("nav")[0].style.display == "") {
        document.getElementsByTagName("nav")[0].style.display = "flex";
        document.getElementById("hamburgersearch").style.display = "flex";
    }
    else {
        document.getElementsByTagName("nav")[0].style.display = "";
        document.getElementById("hamburgersearch").style.display = "";
    }
}

window.onload = function () {
    var hamb = document.getElementsByClassName("Hamburger");
    hamb[0].onclick = display;
};

