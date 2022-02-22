<?php
$bid = trim($_POST["bid"]);
require_once "config.php";
$query = "DELETE FROM room_booking WHERE booking_id = $bid";


if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->close();
    echo "<h3>Booking Deleted</h3>";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" http-equiv="refresh" content="3;booking.php">
    <title></title>
  </head>
  <body>

  </body>
</html>
