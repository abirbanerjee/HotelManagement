<?php
$gid = trim($_POST["gid"]);
$line1 = trim($_POST["address_line1"]);
$city = trim($_POST["city"]);
$state = trim($_POST["state"]);
$country = trim($_POST["country"]);
$pin = trim($_POST["pin_code"]);
$address_proof = trim($_POST["address_proof_id"]);

require_once "config.php";
$query = "INSERT INTO guest_address VALUES($gid,'$line1','$city','$state','$country',$pin,'$address_proof')";


if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->close();
    echo "<h2>Address added successfully, redirecting to login page.</h2>";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8"http-equiv="refresh" content="3;URL=login.php" >
    <title></title>
  </head>
  <body>

  </body>
</html>
