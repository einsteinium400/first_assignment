


window.onload=function(){

    var deletebtn=document.getElementsByClassName("deletetask");
    console.log(deletebtn.length);

    for (let i=0;i<deletebtn.length;i++)
    {
        deletebtn[i].onclick=function(){

        var id=deletebtn[i].id;
            $.ajax({
                type: "POST",
                url: "deletetask.php",
                data: { id: id }
              }).done(function( ) {
                location.reload();
            });

        };
    }

}

