<?php
include 'db.php';
include "config.php";
session_start();//on logout session_destroy();
$description 	= mysqli_real_escape_string($connection, $_GET['description']);
$state= mysqli_real_escape_string($connection, $_GET['state']);
$userid= $_SESSION["usrID"];


if ($state=="insert")
{
    $query = "insert into tbl_tasts_223(description,user_id) values ('$description', '$userid')";
}
else{
    $id= mysqli_real_escape_string($connection, $_GET['id']);
    $query = "update tbl_tasts_223 set description='$description' where id='$id'";
}

$result = mysqli_query($connection, $query);
if(!$result) {
    die("DB query failed.");
}

header("Location: home.php");
exit();

?>

