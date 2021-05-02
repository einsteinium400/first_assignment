
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
    // console.log("hey")
    hamb[0].onclick = display;
};