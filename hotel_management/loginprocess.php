<?php
// Initialize the session
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$user = trim($_POST["username"]);
$pass = trim($_POST["password"]);
printf("%s\n", $user);
$logged = false;
//printf("%s\n", $pass);

$query = "SELECT password FROM hotel_db.guest_list WHERE username='$user'";
if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($password);
    while ($stmt->fetch()) {
        if($password==$pass){
          echo "Logged in!";
          $logged = true;
        }
        else {
          echo "Wrong username or password\n";
          echo "<a href=\"login.php\"> Try again</a>";
        }
    }
    $stmt->close();
}

$query = "SELECT guest_id FROM guest_list WHERE username='$user'";


if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($guest_id);
    while ($stmt->fetch()) {
        //printf("%s\n", $guest_id);
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
    if($logged){
    echo "<meta charset=\"utf-8\" http-equiv=\"refresh\" content=\"3;URL=bookingselection.php?id=$guest_id\"> ";
    }
    else {
      echo "<meta charset=\"utf-8\">";
    }
    ?>
    <title></title>
  </head>
  <body>

  </body>
</html>
