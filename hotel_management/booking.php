<?php
require_once "config.php";
$query = "SELECT b.booking_id, b.checkin, b.checkout, a.first_name, a.last_name from room_booking b join guest_list a where b.guest_id = a.guest_id";
$result = $con->query($query);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Booking id: " . $row["booking_id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "-Checkin: " . $row["checkin"]. "-checkout: " . $row["checkout"]."<br>";
  }
} else {
  echo "0 results";
}
$con->close();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>See and delete booking:</title>
    <form method="post" action="deletebooking.php">
      Enter booking id to delete:<input type="text" name="bid">
      <input type="submit" value="delete">
    </form>
    <form method="post" action="editbooking.php">
      Enter booking id to Update:<input type="text" name="bid">
      <input type="submit" value="edit">
    </form>
  </head>
  <body>

  </body>
</html>
