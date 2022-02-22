<?php
$f_name = trim($_POST["first_name"]);
$l_name = trim($_POST["last_name"]);
$cnumber = trim($_POST["contact_no"]);
$email = trim($_POST["email_id"]);
$user = trim($_POST["username"]);
$pass = trim($_POST["password"]);
$emp_type = trim($_POST["employee_type"]);
require_once "config.php";
$query = "INSERT into employee_list(first_name, last_name, contact_no, email_id, username, password, employee_type)VALUES('$f_name','$l_name','$cnumber','$email','$user','$pass', '$emp_type')";
if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    echo "<h1>Employee added successfully!<br></h1>";
    $stmt->close();
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php echo "<meta charset=\"utf-8\" http-equiv=\"refresh\" content=\"3;URL=addemployee.php\"> "?>
    <title></title>
  </head>
  <body>

  </body>
</html>
