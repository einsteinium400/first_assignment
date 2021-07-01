<?php

include 'db.php';

include "config.php";

session_start();//on logout session_destroy();

$name = $_GET["className"];
$grade = $_GET["grade"];
$date = $_GET["date"];
$classType = $_GET["classType"];
$startTime = $_GET["startTime"];
$endTime = $_GET["endTime"];
$classEnv = $_GET["classEnv"];
$avatarChange = $_GET["avatarChange"];

$nameForSql = mysqli_real_escape_string($connection, $name);
$gradeForSql = mysqli_real_escape_string($connection, $grade);
$startTimeForSql = mysqli_real_escape_string($connection, $startTime);
$endTimeForSql = mysqli_real_escape_string($connection, $endTime);

$timestamp = strtotime($date);
$dayForSql = mysqli_real_escape_string($connection, date('l', $timestamp));




//no session basic id for teacher
$query = "insert into tbl_classes_223(
    `ClassID` ,
    `TeacherID` ,
    `Name` ,
    `Day` ,
    `StartTime` ,
    `EndTime` ,
    `EnviormentType` ,
    `Grade` ,
    `AvatarChangeMode` ,
    `InteractionAllowed`
    )
    values (NULL, '123','$nameForSql','$dayForSql','$startTimeForSql','$endTimeForSql','$classEnv','$gradeForSql','$avatarChange','1')";

// $query = "INSERT INTO tbl_classes_223 (
//     'TeacherID' ,
//     'Name' ,
//     'Day' ,
//     'StartTime' ,
//     'EndTime' ,
//     'EnviormentType' ,
//     'Grade' ,
//     'AvatarChangeMode' ,
//     'InteractionAllowed'
//     )
//     VALUES (
//     '" . $_SESSION["usrID"] ."', '". $name ."', '". date('l', $timestamp) ."', '". $startTime ."', '". $endTime ."', '". $classEnv ."', '". $grade ."', '". $avatarChange."', '1'
//     );";

$result = mysqli_query($connection , $query);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/addClassConfirm.css">

    <title>Dashboard</title>
</head>

<body>
    <header class="wrapper">
        <a href="#" id="logo"></a>
        <input type="text" name="searchItems" id="searchBar" placeholder="Search students, classes, reports...">
        <button type="submit" value="Search" class="search-btn">Search</button>
        <div id="userData">
            <p id="nameGreeting">Hello, <?php echo $_SESSION["usr"]?></p>
            <p id="time">07:52</p>
        </div>

        <a href="#" class="Hamburger">
            <div></div>
            <div></div>
            <div></div>
        </a>


    </header>

    <div id="hamburgersearch">
        <input type="text" name="searchItems" placeholder="Search students, classes, reports...">
        <button type="submit" value="Search" class="search-btn">Search</button>
    </div>


    <nav>
        <a href="#" class="current">
            <p>Dashboard</p>
        </a>
        <a href="classeslist.php">
            <p>Classes</p>
        </a>
        <a href="#">
            <p>Pupils</p>
        </a>
        <a href="#">
            <p>Reports</p>
        </a>
        <a href="#">
            <p>Settings</p>
        </a>
    </nav>

    <main class="wrapper">
        <section class="mainArea">
            <section class="mainSection">
                <!--Place here the main content of the page-->
                <h2> You have succesfully added a class room:</h2>
                    <?php 
                        

                        echo '<p id="classroomInfo">Class name:' . $name . "<br>";
                        echo 'Number of grade:' . $grade . "<br>";
                        echo 'Starting date:' . $date . "<br>";
                        echo 'Type:' . $classType . "<br>";
                        echo 'Start Time:' . $startTime . "<br>";
                        echo 'End Time:' . $endTime . "<br>";
                        echo 'Environment:' . $classEnv . "<br>";
                        if($avatarChange == 1){
                            echo 'Avatar Change: Allowed <br>';
                        }
                        else{
                            echo 'Avatar Change: Not Allowed <br>';
                        }
                        echo '</p>';
                    ?>

                        <a id="backToClassesBtn" href="classeslist.php">Back to classes</a>
                
            </section>
        </section>
    </main>
</body>

</html>