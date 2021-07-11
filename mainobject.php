<?php

    include 'db.php';

    include "config.php";

    session_start();//on logout session_destroy();

    if(isset($_GET["ClassID"])) { //true if form was submitted
        $query  = "SELECT * FROM tbl_classes_223 WHERE ClassID='" 

        . $_GET["ClassID"] . "'" ;


        

        $result = mysqli_query($connection , $query);

        $row    = mysqli_fetch_array($result);
        
        if(!is_array($row)) {

            header('Location: ' . URL . 'classeslist.php');
        }

    }
    else
    {
        //Throw back to classes on attempt to enter the page without querry string 
        header('Location: ' . URL . 'classeslist.php');
    }

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClassMates</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/mainobject.css">
    <script src="js/general.js"></script>
    <script src="js/mainobject.js"></script>

</head>

<body>
    <header class="wrapper">
        <a href="#" id="logo"></a>
        <input type="text" name="searchItems" id="searchBar" placeholder="Search students, classes, reports...">
        <button type="submit" value="Search" class="search-btn">Search</button>
        <div id="userData">
            <p id="nameGreeting">Hello, <?php echo $_SESSION["usrName"]?></p>
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
        <a href="home.php">
            <p>Dashboard</p>
        </a>
        <a href="classeslist.php" class="current">
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



    <ul id="breadcrumb">
        <li><a href="home.html">Dashboard</a></li>
        <li><a href="classeslist.html">Classes</a></li>
        <li>Class info</li>
    </ul>

    <h1>Class info</h1>
    <main>
        <div id="sideboxes">
            <aside>
                <p id="classinfo">

                    <?php echo $row["Name"]; ?> <br>
                    <?php echo $row["Grade"]; ?> Grade <br>
                    Every <?php echo $row["Day"]; ?><br>
                    <?php 
                        $starttime = date("H:i",strtotime($row["StartTime"]));
                        $endtime = date("H:i",strtotime($row["EndTime"]));
                        echo $starttime. " - " . $endtime ;
                    ?>
                    <br>
                    classrom enviornment: <?php echo enviormentTypeArray[$row["EnviormentType"]]; ?><br>
                    interaction: <?php echo allowedArray[$row["InteractionAllowed"]]; ?><br>
                    avatar change: <?php echo allowedArray[$row["AvatarChangeMode"]]; ?><br>
                </p>
            </aside>
            <aside>
                <h2>Student Alerts</h2>
                <p>Hila from 3rd grade missed 3 lessons</p>
            </aside>
        </div>

        <section id="classroom"></section>

        <section id="studentsinfo" data-classid="<?php echo $row["ClassID"]; ?>">

            <h2><?php echo $row["Name"] . " " . $row["Grade"] . " Grade Students"; ?></h2>
            
            <div id="listofstudents" class= "container">
                <!-- Students of the class -->
            </div>
        </section>

    </main>


</body>
<?php

//close DB connection

mysqli_close($connection);

?>
</html>