<?php
include 'db.php';
include "config.php";
session_start();//on logout session_destroy();
$description 	= mysqli_real_escape_string($connection, $_GET['description']);
$userid= $_SESSION["usrID"];

$query = "insert into tbl_tasts_223(description,user_id) values ('$description', '$userid')";

$result = mysqli_query($connection, $query);
// echo $result;
if(!$result) {
    die("DB query failed.");

}
// echo $query;

header("Location: home.php");
exit();

?>

