<?php


    include "config.php";

    session_start();//on logout session_destroy();
    // Checking if a user logged and a teacher
    // if(!isset($_SESSION["usr"])) {
    //     //Throw back to login page
    //     header('Location: ' . URL . 'index.php');
    // }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/addform.css">
    <script src="js/general.js"></script>
    <title>Add new class</title>
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
        <a href="home.html" class="current">
            <p>Dashboard</p>
        </a>
        <a href="classeslist.html">
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
        <li><a href="classeslist.php">Classes</a></li>
        <li>Add class</li>
    </ul>

    <main class="wrapper">

        <section class="mainArea">

            <h1>Add Class</h1>
            <section class="mainSection">
                <!--Place here the main content of the page-->
                <form action="classAdded.php" method="GET" autocomplete="on" id="addNewClassForm">
                    <section class="bodyFormLeft">
                        <label class="normalLabel">
                            Classroom name:<input type="text" name="className" class="basicInput" required>
                        </label>
                        <label class="normalLabel">
                            Grade:<select name="grade" class="basicInput">
                                <option value="1">1st</option>
                                <option value="2">2nd</option>
                                <option value="3">3rd</option>
                                <option value="4">4th</option>
                                <option value="5">5th</option>
                            </select>
                        </label>
                        <label class="normalLabel">
                            Date:<input type="date" name="date" class="basicInput" required>
                        </label>
                        <label class="normalLabel">
                            Type:
                            <div>
                                <input type="radio" name="classType" value="Recursive" checked="checked">Recursive
                                <input type="radio" name="classType" value="Once">Once
                            </div>
                        </label>
                        <label class="normalLabel">
                            Start Time:<input type="datetime" name="startTime" class="basicInput"
                                pattern="^([0-1]?[0-9]|2[0-3]):[0-5][0-9]$" required>
                        </label>
                        <label class="normalLabel">
                            End Time:<input type="datetime" name="endTime" class="basicInput"
                                pattern="^([0-1]?[0-9]|2[0-3]):[0-5][0-9]$" required>
                        </label>
                        Enviroment:
                        <label class="normalLabel">
                            <div>
                                <input type="radio" name="classEnv" value="0" checked="checked">Classroom
                            </div>
                            <div>
                                <input type="radio" name="classEnv" value="1">Labratory
                            </div>
                            <div>
                                <input type="radio" name="classEnv" value="2">Outdoor
                            </div>
                        </label>
                        <label class="normalLabel">
                            Interaction allowed:
                            <button id="changeInteraction">Show</button>
                        </label>
                        <label class="normalLabel">
                            Avatar change mode:<select name="avatarChange" class="basicInput">
                                <option value="0">Disable</option>
                                <option value="1">Enable</option>
                            </select>
                        </label>
                    </section>
                    <section class="bodyFormRight">
                        <label class="boxesLabel">
                            Add Students<i class="fas fa-user-plus icon24"></i>
                        </label>
                        <div class="addBox addBoxStudents"></div>
                        <label class="boxesLabel">
                            Upload files<i class="fas fa-folder-plus icon34"></i>
                        </label>
                        <div class="addBox addBoxFiles"></div>
                        <input type="submit" name="submit" class="submitBtn" value="Submit">
                    </section>

                </form>
            </section>
        </section>
    </main>
</body>
</html>