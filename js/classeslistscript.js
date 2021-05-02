function deleteitem()
{
    console.log("hey");
    this.parentElement.parentElement.parentElement.style.display="none";
}

window.onload = function() {

    console.log("fuck")
    for (var i=0;i<6;i++)
    {
        console.log(deleteitem[i])
        document.getElementsByClassName("deleteitem")[i].onclick=deleteitem;
    }
};