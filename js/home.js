// Comparing based on the description
function compare_items_by_desc(a, b){
    if($(a).data("desc").toLowerCase() < $(b).data("desc").toLowerCase()){
            return -1;
    // a should come after b in the sorted order
    }else if($(a).data("desc").toLowerCase() > $(b).data("desc").toLowerCase()){
            return 1;
    // and and b are the same
    }else{
            return 0;
    }
}
function SortTasks()
{
    listItems = $(".itemListForSort");

    listItems.sort(compare_items_by_desc);
    $(".itemListForSort").remove();
    for(let i = 0; i<listItems.length; i++)
    {
        $("#taskBoardList").append(listItems[i]);
    }
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




window.onload=function(){
    SortTasks();


    var deletebtn=document.getElementsByClassName("deletetask");

    for (let i=0;i<deletebtn.length;i++)
    {
        deletebtn[i].onclick=function(){

        var id=deletebtn[i].id;
        console.log("Last deleted id sent is "+ id);
            $.ajax({
                type: "POST",
                url: "deletetask.php",
                data: { id: id }
              }).done(function( ) {
                location.reload();
            });

        };
    }

    
    var hamb = document.getElementsByClassName("Hamburger");
    hamb[0].onclick = display;

    const mql = window.matchMedia("(min-width: 621px)");

    mql.addEventListener("change", (e) => {
        if (e.matches)
            document.getElementById("hamburgersearch").style.display = "";

    });


}

