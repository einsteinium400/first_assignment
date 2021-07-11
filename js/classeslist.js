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
    var delet=document.getElementsByClassName("innerDeleteBtn");
    for (let i=0;i<delet.length;i++)
    {
        console.log(i)
        deletefromdb(i);
        //delet[i].onclick=deletefromdb(i);
    }

    var hamb = document.getElementsByClassName("Hamburger");
    hamb[0].onclick = display;

    const mql = window.matchMedia("(min-width: 621px)");

    mql.addEventListener("change", (e) => {
        if (e.matches)
            document.getElementById("hamburgersearch").style.display = "";

    });


};



