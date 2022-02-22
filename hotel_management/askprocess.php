<?php
$fname=trim($_POST["first"]);
$lname=trim($_POST["last"]);
$email=trim($_POST["email"]);
$phone=trim($_POST["phone"]);
$message=trim($_POST["message"]);
require_once "config.php";
$query = "INSERT INTO userquery VALUES(DEFAULT, '$fname','$lname','$email','$phone','$message')";

if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->close();
    echo "<h3>Your message has been successfully sent</h3>";
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" http-equiv="refresh" content="3;URL=homepage.php">
    <title>User Queries</title>
  </head>
  <body>

  </body>
</html>
