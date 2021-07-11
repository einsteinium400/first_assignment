function AddStudents() {
    var listObj = document.querySelector('#studentsinfo');
    classId = listObj.dataset.classid;
    classIdStr =""+classId;


    $.getJSON("json/students.json", function (data) {
        $.each(data.students, function (indxOfStudent, studentInfo) {
            console.log(studentInfo.classeId.includes(classId));
            console.log(studentInfo.classeId.includes(classIdStr));
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
                console.log(sHTML)
                $("#listofstudents").append(sHTML);
            }
        });
    });
}


window.onload = function init() {
    AddStudents();
}