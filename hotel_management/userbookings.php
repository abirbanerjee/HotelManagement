<?php
$gid = trim($_GET["id"]);
require_once "config.php";
$query = "SELECT b.checkin, b.checkout, b.duration, l.tariff, b.total_price FROM room_booking b JOIN room_list l ON guest_id = $gid AND b.room_id=l.room_id";

/*
if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($checkin, $checkout, $duration, $tariff);
    while ($stmt->fetch()) {
        printf("%s\t, %s\t, %s\t, %s\n", $checkin, $checkout, $duration, $tariff);
    }
    $stmt->close();
}*/

$result = $con->query($query);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Checkin Date: " . $row["checkin"]. "      Checkout Date: " . $row["checkout"]. "           Duration: " . $row["duration"]. "         Tariff: $" . $row["tariff"]."      Total: $".$row["total_price"]."<br>";
  }
} else {
  echo "0 results";
}
$con->close();
 ?>
