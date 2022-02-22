<?php
$bid = $_GET["id"];
require_once "config.php";
$query = "SELECT duration, room_id FROM room_booking WHERE booking_id = $bid";


if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($duration, $room_id);
    while ($stmt->fetch()) {
        //printf("%s, %s\n", $duration, $room_id);
    }
    $stmt->close();
}

$query = "SELECT tariff FROM room_list WHERE room_id=$room_id";


if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($tariff);
    while ($stmt->fetch()) {
        //printf("%s\n", $tariff);
    }
    $stmt->close();
}
    $total_bill = $duration*$tariff;

    $query = "UPDATE room_booking SET total_price=$total_bill WHERE booking_id=$bid";


if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->close();
}
    echo "<h1>Your total payment due is: $total_bill</h1>";
    echo "<h2>Redirecting you to the payment portal</h2>";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" http-equiv="refresh" content="3;URL=payment.php">
    <title>Total bill</title>
  </head>
  <body>

  </body>
</html>
