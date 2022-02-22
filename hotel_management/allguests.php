<?php
$query = "SELECT guest_id, first_name, last_name, contact_number, email_id from hotel_db.guest_list";
require_once "config.php";

$result = $con->query($query);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["guest_id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "-Contact: " . $row["contact_number"]. "-Email: " . $row["email_id"]."<br>";
  }
} else {
  echo "0 results";
}
$con->close();
 ?>
