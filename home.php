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
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="js/dashboardscript.js"></script>
    <script src="js/general.js"></script>

    <title>Dashboard</title>
</head>

<body>
    <header class="wrapper">
        <a href="#" id="logo"></a>
        <input type="text" name="searchItems" id="searchBar" placeholder="Search students, classes, reports...">
        <button type="submit" value="Search" class="search-btn">Search</button>
        <div id="userData">
            <p id="nameGreeting">Hello, Ron Azulai</p>
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
                            <h2>Tasks Board</h2><i class="fas fa-plus icon34"></i>
                        </li>
                        <li class="alert">
                            <div>Call Emily Cohen parents</div>
                            <div><i class="fas fa-check icon24"></i><i class="fas fa-info-circle icon24"></i></div>
                        </li>
                        <li class="alert">
                            <div>Check history tests for 3rd grade</div>
                            <div><i class="fas fa-check icon24"></i><i class="fas fa-info-circle icon24"></i></div>
                        </li>
                        <li class="alert">
                            <div>Preapare a lesson about WW2</div>
                            <div><i class="fas fa-check icon24"></i><i class="fas fa-info-circle icon24"></i></div>
                        </li>
                        <li class="alert">
                            <div>Send reports to Menashe</div>
                            <div><i class="fas fa-check icon24"></i><i class="fas fa-info-circle icon24"></i></div>
                        </li>
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