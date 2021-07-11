function AddStudents() {
    var listObj = document.querySelector('#studentsinfo');
    classId = listObj.dataset.classid;
    classIdStr =""+classId;


    $.getJSON("json/students.json", function (data) {
        $.each(data.students, function (indxOfStudent, studentInfo) {
            if (studentInfo.classeId.includes(classId)) {
                sHTML = '<section class="listItem" id="' + studentInfo.Name + '">';
                sHTML += '<img src="' + studentInfo.PhotoUrl + '" alt="' + studentInfo.Name + '" title="' + studentInfo.Name + '">';
                sHTML += '<select class="studentSelect">';
                sHTML += '<option selected>' + studentInfo.Name + '</option>';
                sHTML += '<option value="1">Edit</option>';
                sHTML += '<option value="2">Delete</option>';
                sHTML += '<option value="3">Three</option>';
                sHTML += '</select>';
                sHTML += '</section>';
                $("#listofstudents").append(sHTML);
            }
        });
    });
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


window.onload = function init() {
    AddStudents();

    
    var hamb = document.getElementsByClassName("Hamburger");
    hamb[0].onclick = display;

    const mql = window.matchMedia("(min-width: 621px)");

    mql.addEventListener("change", (e) => {
        if (e.matches)
            document.getElementById("hamburgersearch").style.display = "";

    });

}