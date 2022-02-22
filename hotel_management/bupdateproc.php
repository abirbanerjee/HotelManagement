<?php
$bid=trim($_POST["bid"]);
$gid=trim($_POST["gid"]);
$checkin=trim($_POST["checkin"]);
$checkout=trim($_POST["checkout"]);
$duration=trim($_POST["duration"]);
$total_price=trim($_POST["total_price"]);
$room_id=trim($_POST["room_id"]);
require_once "config.php";
$query = "UPDATE room_booking SET guest_id=$gid, checkin='$checkin', checkout='$checkout', duration=$duration, total_price=$total_price,room_id=$room_id WHERE (booking_id = $bid)";
if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->close();
}
echo "Record updated";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" http-equiv="refresh" content="3;url=booking.php">
    <title>Record Updated</title>
  </head>
  <body>

  </body>
</html>
