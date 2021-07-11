function makeSelected () {
    var selectObj = document.querySelector('#gradeSelector');
    ind = selectObj.dataset.selected;
    selectObj.options[ind-1].selected = true;

    selectObj = document.querySelector('#avatarSelect');
    ind = selectObj.dataset.selected;
    selectObj.options[ind].selected = true;

    ind = selectObj.dataset.selected;
    document.getElementById("env"+ind).checked = true;
}

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



$(function() {
    makeSelected();
 });


 $( function() {
    var availableTags = [
        "Math",
        "Geography",
        "French",
        "English",
        "History",
        "Computer science",
        "C++",
        "web engineering",

    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });

    var hamb = document.getElementsByClassName("Hamburger");
    hamb[0].onclick = display;

    const mql = window.matchMedia("(min-width: 621px)");

    mql.addEventListener("change", (e) => {
        if (e.matches)
            document.getElementById("hamburgersearch").style.display = "";

    });
  } );