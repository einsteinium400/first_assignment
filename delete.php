<?php
    $id = $_POST["id"];
    //$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    function deletefromdb($id){
        include 'db.php';
        include "config.php";
        $query 	= "DELETE FROM tbl_classes_223 where classID=$id";
        $result = mysqli_query($connection, $query);
        mysqli_close($connection);
    }
    deletefromdb($id);
?>