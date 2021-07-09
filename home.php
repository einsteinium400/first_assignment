<?php
include "db.php";
include "config.php";
session_start();
$teacherIDForSql = mysqli_real_escape_string($connection, $_SESSION["usrID"]);
?>

<?php
// get all data from DB
$query = "SELECT * FROM tbl_tasts_223 where user_id=$teacherIDForSql";
echo $query;
$result = mysqli_query($connection, $query);
if (!$result) {
    die("DB query failed.");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-iso.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <!-- <script src="js/dashboardscript.js"></script> -->
    <script src="js/general.js"></script>
    <script src="js/home.js"></script>

    <title>Dashboard</title>
</head>

<body>
    <header class="wrapper">
        <a href="#" id="logo"></a>
        <input type="text" name="searchItems" id="searchBar" placeholder="Search students, classes, reports...">
        <button type="submit" value="Search" class="search-btn">Search</button>
        <div id="userData">
            <p id="nameGreeting">Hello, <?php echo $_SESSION["usrName"] ?></p>
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

    <ul id="breadcrumb">
        <li><a href="#">Dashboard</a></li>
    </ul>

    <h1>Dashboard</h1>
    <main class="wrapper">
        <section class="mainArea">
            <section class="mainSection">

                <!--Place here the main content of the page-->
                <div id="taskBoard">
                    <ul>
                        <li class="boardHeadline">
                            <h2>Tasks Board</h2>
                            <!-- Bootstrap css layout isolation end, wrap start -->
                            <div class="bootstrap-iso">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary modalbtn" data-toggle="modal"
                                    data-target="#exampleModal">
                                    <!-- Add -->
                                    <i class="fas fa-plus icon34"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            
                                            <form action="savetask.php">
                                            <label>Enter a new task:</label>
                                                <input type=text name="description">
                                           <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                            </div>

                                            </form>
                                                ...
 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of modal -->
                            <!-- Bootstrap end of wrap, back to isolation -->

                            <!-- <i class="fas fa-plus icon34"></i> -->
                        </li>


                        <?php
                        echo '<div class="row">';
                        while ($row = mysqli_fetch_assoc($result)) {
                            //output data from each row
                            echo '<li class="alert">
                            <div>' . $row['description'] . '</div>
                            <div><i id=' . $row['id'] . ' class="deletetask fas fa-check icon24"></i><i class="fas fa-edit icon24"></i></div>
                            </li>';
                        }
                        echo '</div>';
                        ?>

                        <li>
                            <a href="#" class="viewMore">View more</a>
                        </li>
                    </ul>
                </div>
                <div id="pupilsAlerts">
                    <ul>
                        <li class="boardHeadline">
                            <h2>Pupils alerts</h2>
                        </li>
                        <li class="alert">
                            <div>Hila from 1st grade has missed 3 lessons</div>
                            <div><i class="fas fa-check icon24"></i><i class="fas fa-info-circle icon24"></i></div>
                        </li>
                        <li class="alert">
                            <div>Elay from 2nd grade hasen't been active in 5 lessons</div>
                            <div><i class="fas fa-check icon24"></i><i class="fas fa-info-circle icon24"></i></div>
                        </li>
                        <li class="alert">
                            <div>Hila from 1st grade has missed 3 lessons</div>
                            <div><i class="fas fa-check icon24"></i><i class="fas fa-info-circle icon24"></i></div>
                        </li>
                        <li class="alert">
                            <div>Elay from 2nd grade hasen't been active in 5 lessons</div>
                            <div><i class="fas fa-check icon24"></i><i class="fas fa-info-circle icon24"></i></div>
                        </li>
                        <li><a href="#" class="viewMore">View more</a></li>
                    </ul>
                </div>
                <div id="schedule">
                    <ul>
                        <li class="boardHeadline">
                            <h4>Upcoming classes</h4>
                        </li>
                        <li class="daysRow">
                            <p>Today:</p>
                            <p>20/01/21</p>
                        </li>
                        <li>
                            <div>
                                <p>08:00</p>
                                <p>History class, 3rd grade</p>
                            </div>
                            <button class="classStartBtn">Start</button>
                        </li>
                        <li>
                            <div>
                                <p>10:00</p>
                                <p>Math class, 1st grade</p>
                            </div><button class="classStartBtn btnNotActive">Start</button>
                        </li>
                        <li>
                            <div>
                                <p>12:00</p>
                                <p>French class, 1st grade</p>
                            </div><button class="classStartBtn btnNotActive">Start</button>
                        </li>
                        <li class="daysRow">
                            <p>Tommorow:</p>
                            <p>21/01/21</p>
                        </li>
                        <li>
                            <div>
                                <p>08:00</p>
                                <p>History class, 3rd grade</p>
                            </div>
                            <button class="classStartBtn btnNotActive">Start</button>
                        </li>
                    </ul>
                </div>
            </section>
        </section>
    </main>
</body>

</html>