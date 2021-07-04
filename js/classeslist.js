function deletefromdb(i)  {
    //var id=btnObj.getAttribute('id');
    var id=document.getElementsByClassName("innerDeleteBtn")[i].id;
    console.log("id = " +id)
    $("#"+id).click(function() {
      console.log(i)
      $.ajax({
        type: "POST",
        url: "delete.php",
        data: { id: id }
      }).done(function( ) {
        location.reload();
      });
    })
}



window.onload = function () {
    var delet=document.getElementsByClassName("innerDeleteBtn");
    for (let i=0;i<delet.length;i++)
    {
        console.log(i)
        deletefromdb(i);
        //delet[i].onclick=deletefromdb(i);
    }

};



