<?php
$gid = trim($_POST["gid"]);
$in = trim($_POST["checkin"]);
$out = trim($_POST["checkout"]);
$dur = trim($_POST["duration"]);
$type = trim($_POST["roomtype"]);
require_once "config.php";
$query = "INSERT INTO room_booking(guest_id,checkin,checkout,duration,room_id) VALUES($gid,'$in','$out',$dur,$type)";
if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->close();
    echo "<h1>Booking successful.</h1>";
}

$query = "SELECT COUNT(booking_id) from room_booking";


if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($booking_id);
    while ($stmt->fetch()) {
        printf("Your booking id is:%s\n", $booking_id);
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php echo "<meta charset=\"utf-8\" http-equiv=\"refresh\" content=\"3;URL=billing.php?id=$booking_id\"> "?>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
