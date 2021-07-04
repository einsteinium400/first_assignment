<?php
    include "db.php";
    include "config.php";
    session_start();
    $teacherIDForSql = mysqli_real_escape_string($connection,$_SESSION["usrID"]);
?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClassMates</title>
    <link rel="stylesheet" href="css/general.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/classeslist.css">
    <script src="js/general.js"></script>

</head>

<body>
    <header class="wrapper">
        <a href="#" id="logo"></a>
        <input type="text" name="searchItems" id="searchBar" placeholder="Search students, classes, reports...">
        <button type="submit" value="Search" class="search-btn">Search</button>
        <div id="userData">
        <p id="nameGreeting">Hello, <?php  echo $_SESSION["usrName"]?></p>
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
        <a href="#" class="current">
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
        <li><a href="home.php">Dashboard</a></li>
        <li><a href="#">Classes</a></li>
    </ul>

    <h1>Classes list</h1>

    <div id="functionality">
        <p>
            <a href="addclass.php"> <img src="images/add.png" alt="">
            </a>
            Add
            <a href="#"> <img src="images/listview.png" alt="">
            </a>
        </p>

    </div>

    <main>
        <div>
            <h2>1st class</h2>
            <div>
                <?php 
                //get data from DB
                $query 	= "SELECT * FROM tbl_classes_223 where Grade='1' and teacherID='$teacherIDForSql'";
                $result = mysqli_query($connection, $query);
                if(!$result) {
                    die("DB query failed.");  } 
                while($row = mysqli_fetch_assoc($result)) {//results are in associative array. keys are cols names
                echo '<section>
                    <div>
                    <h3>&nbsp;'. $row["Name"] .'</h3>
                    <p><img class="lessonimage" src="'. $row["Image"] .'" alt="">
                    '. $row["Day"] .'<br>'. $row["StartTime"] .'-'. $row["EndTime"] .'
                        <br>
                        &nbsp; &nbsp; &nbsp; &nbsp;

                        <a href="mainobject.php?ClassID='. $row["ClassID"] .'"> <img src="images/info.png" alt="">
                        </a>
                        info
                        <br>
                        &nbsp; &nbsp; &nbsp;

                        <a href="#"> <img src="images/edit.png" alt="">
                        </a>
                        &nbsp; &nbsp; &nbsp;
                         <a href="#" class="deleteitem"><img src="images/delete.png" alt=""></a>
                        <br>
                        &nbsp; &nbsp; &nbsp; edit &nbsp; &nbsp; delete
                    </p>
                </div>
            </section>';} ?> 
            </div>
        </div>

        <div>
            <h2>2nd class</h2>
            <div>
            <?php 
                //get data from DB
                $query 	= "SELECT * FROM tbl_classes_223 where Grade='2' and teacherID='$teacherIDForSql'";
                $result = mysqli_query($connection, $query);
                if(!$result) {
                    die("DB query failed.");  } 
                while($row = mysqli_fetch_assoc($result)) {//results are in associative array. keys are cols names
                echo '<section>
                    <div>
                    <h3>&nbsp;'. $row["Name"] .'</h3>
                    <p><img class="lessonimage" src="'. $row["Image"] .'" alt="">
                    '. $row["Day"] .'<br>'. $row["StartTime"] .'-'. $row["EndTime"] .'
                        <br>
                        &nbsp; &nbsp; &nbsp; &nbsp;

                        <a href="mainobject.php?ClassID='. $row["ClassID"] .'"> <img src="images/info.png" alt="">
                        </a>
                        info
                        <br>
                        &nbsp; &nbsp; &nbsp;

                        <a href="#"> <img src="images/edit.png" alt="">
                        </a>
                        &nbsp; &nbsp; &nbsp;
                         <a href="#" class="deleteitem"><img src="images/delete.png" alt=""></a>
                        <br>
                        &nbsp; &nbsp; &nbsp; edit &nbsp; &nbsp; delete
                    </p>
                </div>
            </section>';} ?> 
            </div>
            

        </div>


        <div>
            <h2>3rd class</h2>

            <div>
            <?php 
                //get data from DB
                $query 	= "SELECT * FROM tbl_classes_223 where Grade='3' and teacherID='$teacherIDForSql'";
                $result = mysqli_query($connection, $query);
                if(!$result) {
                    die("DB query failed.");  } 
                while($row = mysqli_fetch_assoc($result)) {//results are in associative array. keys are cols names
                echo '<section>
                    <div>
                    <h3>&nbsp;'. $row["Name"] .'</h3>
                    <p><img class="lessonimage" src="'. $row["Image"] .'" alt="">
                    '. $row["Day"] .'<br>'. $row["StartTime"] .'-'. $row["EndTime"] .'
                        <br>
                        &nbsp; &nbsp; &nbsp; &nbsp;

                        <a href="mainobject.php?ClassID='. $row["ClassID"] .'"> <img src="images/info.png" alt="">
                        </a>
                        info
                        <br>
                        &nbsp; &nbsp; &nbsp;

                        <a href="#"> <img src="images/edit.png" alt="">
                        </a>
                        &nbsp; &nbsp; &nbsp;
                         <a href="#" class="deleteitem"><img src="images/delete.png" alt=""></a>
                        <br>
                        &nbsp; &nbsp; &nbsp; edit &nbsp; &nbsp; delete
                    </p>
                </div>
            </section>';} ?> 
            </div>
        </div>
    </main>
</body>
</html>