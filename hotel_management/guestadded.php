<?php
$f_name = trim($_POST["first_name"]);
$l_name = trim($_POST["last_name"]);
$cnumber = trim($_POST["contact_number"]);
$email = trim($_POST["email_id"]);
$user = trim($_POST["username"]);
$pass = trim($_POST["password"]);
require_once "config.php";
$query = "INSERT into guest_list(first_name, last_name, contact_number, email_id, username, password)VALUES('$f_name','$l_name','$cnumber','$email','$user','$pass')";
if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    echo "<h1>Registered successfully!<br></h1>";
    echo "<h2>redirecting to address page...";
    $stmt->close();
}

$query = "SELECT guest_id FROM guest_list WHERE username = '$user'";


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
    <?php echo "<meta charset=\"utf-8\" http-equiv=\"refresh\" content=\"3;URL=guest_address.php?id=$guest_id\"> "?>
    <title></title>
  </head>
  <body>

  </body>
</html>
