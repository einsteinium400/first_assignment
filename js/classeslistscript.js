function deleteitem()
{
    this.parentElement.parentElement.parentElement.style.display="none";
}

function start()
{
    for (var i=0;i<6;i++)
    {
        document.getElementsByClassName("deleteitem")[i].onclick=deleteitem;
    }
}

window.onload=start