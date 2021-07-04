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
window.onload = function init() {
    makeSelected();
}