function deletealert()
{
    this.parentElement.parentElement.style.display="none";
}

function start()
{
    for (var i=0;i<8;i++)
    {
        document.getElementsByClassName("alert")[i].children[1].children[0].onclick=deletealert;
    }
}

window.onload=start