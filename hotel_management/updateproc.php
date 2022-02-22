<?php
$uid=trim($_POST["empid"]);
$first = trim($_POST["first_name"]);
$last = trim($_POST["last_name"]);
$contact = trim($_POST["contact_no"]);
$email = trim($_POST["email_id"]);
$user = trim($_POST["username"]);
$pass = trim($_POST["password"]);
$emp_type = trim($_POST["employee_type"]);
require_once "config.php";
$query = "UPDATE employee_list SET first_name='$first', last_name='$last', contact_no=$contact, email_id='$email', username='$user',password='$pass', employee_type='$emp_type' WHERE (employee_id = $uid)";
if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->close();
}
echo "Record updated";
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8" http-equiv="refresh" content="3;url=addemployee.php">
     <title></title>
   </head>
   <body>

   </body>
 </html>
