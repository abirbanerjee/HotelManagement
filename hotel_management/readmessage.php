<?php
require_once "config.php";
$query = "select * from userquery";
$result = $con->query($query);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["query id"]. " - Name: " . $row["fname"]. " " . $row["lname"]. "  Contact: " . $row["phone"]. "  Email: " . $row["email"]." Message:  ".$row["message"]."<br>";
  }
} else {
  echo "0 results";
}
$con->close();
?>
