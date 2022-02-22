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

$query = "SELECT password FROM employee_list WHERE username='$user'";
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

$query = "SELECT employee_type FROM employee_list WHERE username='$user'";


if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($employee_type);
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
    if($employee_type == 'admin'){
    echo "<meta charset=\"utf-8\" http-equiv=\"refresh\" content=\"3;URL=admin_index.php?\"> ";
    }
    else {
      echo "<meta charset=\"utf-8\" >";
    }
    ?>
    <title></title>
  </head>
  <body>

  </body>
</html>
