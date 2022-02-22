<?php
require_once "config.php";
$query = "SELECT * FROM hotel_db.employee_list";


$result = $con->query($query);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["employee_id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "-Contact: " . $row["contact_no"]. "-Email: " . $row["email_id"]."    username: ".$row["username"]."      password: ".$row["password"]. "     user type:".$row["employee_type"]."<br>";
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
    <title>View all employees</title>
  </head>
  <body>
  <a href="newemployee.php">Add Employee details</a><br>
  <a href="deleteemployee.php">Delete employee record</a><br>
  <form name = "update" action="updateemployee.php" method = "post">
    Enter employee number to update record:<input type="text" name="empid">
    <input type="submit", value = "Go">
  </form>
  </body>
</html>
