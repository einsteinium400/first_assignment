<?php
    include 'db.php';
    include 'config.php';
    session_start();
    if( isset($_GET["logout"]))
    {
      session_destroy();
    }
    if(isset($_POST["id"])) { // true if form was submitted
        $query  = "SELECT * FROM tbl_users_223 WHERE id='" 
                . $_POST["id"] 
                . "' and password= '"
                . $_POST["password"]
                ."'";

        $result = mysqli_query($connection , $query);
        $row    = mysqli_fetch_array($result);
     //   echo ($row);
        if(is_array($row)) {
          session_start();
          $_SESSION["usrID"] = $row["id"];
          $_SESSION["usrName"] = $row["name"];
          $_SESSION["Type"] = $row["type"];
          header('Location:home.php');
        } else {
            // echo 'Authentication failed !';
            $message = "Invalid username or password !";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="css/login.css">

    <title>Login</title>
</head>
<body>

  <main>
        <a href="#" id="logo"></a>
        <form action="#" method="post" class="form-signin">

        <div class="form-group">
          <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        </div>

        <div class="form-group">
          <input name="id" class="form-control" placeholder="Enter ID">
          <input name="password" type="password" placeholder="Enter Password" class="form-control">
        </div>

        <div class="form-group">
          <button type="submit" class="btn">Log Me In</button>
        </div>

        <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>
      </form>

  </main>
 
</body>
<?php

//close DB connection

mysqli_close($connection);

?>
</html>