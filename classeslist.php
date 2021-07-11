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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="css/bootstrap-iso.min.css">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    
    <script src="js/general.js"></script>
    <script src="js/classeslist.js"></script>

    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/classeslist.css">

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
                    $new_start_time = date('H:i', strtotime($row["StartTime"])); //Time Convertion
                    $new_end_time = date('H:i', strtotime($row["EndTime"])); //Time Convertion
                echo '<section>
                    <div>
                    <h3>&nbsp;'. $row["Name"] .'</h3>
                    <p><img class="lessonimage" src="'. $row["Image"] .'" alt="">
                    '. $row["Day"] .'<br>'. $new_start_time .'-'. $new_end_time .'
                        <br>
                        &nbsp; &nbsp; &nbsp; &nbsp;

                        <a href="mainobject.php?ClassID='. $row["ClassID"] .'"> <img src="images/info.png" alt="">
                        </a>
                        info
                        <br>
                        &nbsp; &nbsp; &nbsp;

                        <a href="addclass.php?ClassID='. $row["ClassID"] .'"> <img src="images/edit.png" alt="">
                        </a>
                        &nbsp; &nbsp; &nbsp;

                        <div class="bootstrap-iso">
                            <!-- Button trigger modal -->
                            <button type="button" class="deleteBtn" data-toggle="modal" data-target="#Class'. $row["ClassID"] .'">
                            <img src="images/delete.png" alt="">
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="Class'. $row["ClassID"] .'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Class deletion</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete the class?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary innerDeleteBtn" id="'. $row["ClassID"] .'">Save changes</button>
                                </div>
                                </div>
                             </div>
                            </div>
                            </div>
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
                    $new_start_time = date('H:i', strtotime($row["StartTime"])); //Time Convertion
                    $new_end_time = date('H:i', strtotime($row["EndTime"])); //Time Convertion
                echo '<section>
                    <div>
                    <h3>&nbsp;'. $row["Name"] .'</h3>
                    <p><img class="lessonimage" src="'. $row["Image"] .'" alt="">
                    '. $row["Day"] .'<br>'. $new_start_time .'-'. $new_end_time .'
                        <br>
                        &nbsp; &nbsp; &nbsp; &nbsp;

                        <a href="mainobject.php?ClassID='. $row["ClassID"] .'"> <img src="images/info.png" alt="">
                        </a>
                        info
                        <br>
                        &nbsp; &nbsp; &nbsp;

                        <a href="addclass.php?ClassID='. $row["ClassID"] .'"> <img src="images/edit.png" alt="">
                        </a>
                        &nbsp; &nbsp; &nbsp;
                        <div class="bootstrap-iso">

                        <!-- Button trigger modal -->
                        <button type="button" class="deleteBtn" data-toggle="modal" data-target="#Class'. $row["ClassID"] .'">
                        <img src="images/delete.png" alt="">
                        </button>

                        <!-- Modal -->
                        <div class="modal fade " id="Class'. $row["ClassID"] .'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Class deletion</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete the class?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary innerDeleteBtn" id="'. $row["ClassID"] .'">Save changes</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        </div>
                         
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
                    $new_start_time = date('H:i', strtotime($row["StartTime"])); //Time Convertion
                    $new_end_time = date('H:i', strtotime($row["EndTime"])); //Time Convertion
                echo '<section>
                    <div>
                    <h3>&nbsp;'. $row["Name"] .'</h3>
                    <p><img class="lessonimage" src="'. $row["Image"] .'" alt="">
                    '. $row["Day"] .'<br>'. $new_start_time .'-'. $new_end_time .'
                        <br>
                        &nbsp; &nbsp; &nbsp; &nbsp;

                        <a href="mainobject.php?ClassID='. $row["ClassID"] .'"> <img src="images/info.png" alt="">
                        </a>
                        info
                        <br>
                        &nbsp; &nbsp; &nbsp;

                        <a href="addclass.php?ClassID='. $row["ClassID"] .'"> <img src="images/edit.png" alt="">
                        </a>
                        &nbsp; &nbsp; &nbsp;
                         
                        <div class="bootstrap-iso">

                        <!-- Button trigger modal -->
                        <button type="button" class="deleteBtn" data-toggle="modal" data-target="#Class'. $row["ClassID"] .'">
                        <img src="images/delete.png" alt="">
                        </button>

                        <!-- Modal -->
                        <div class="modal fade " id="Class'. $row["ClassID"] .'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Class deletion</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete the class?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary innerDeleteBtn" id="'. $row["ClassID"] .'">Save changes</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        </div>
                         
                </div>
            </section>';} ?>
            </div>
        </div>
    </main>
</body>
</html>