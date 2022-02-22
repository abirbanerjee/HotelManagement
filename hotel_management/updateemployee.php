<?php
$emp_id = trim($_POST["empid"]);
require_once "config.php";
$query = "SELECT * FROM employee_list WHERE employee_id = $emp_id";
$result = $con->query($query);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $empid=$row["employee_id"];
    $fname=$row["first_name"];
    $lname=$row["last_name"];
    $contact=$row["contact_no"];
    $email=$row["email_id"];
    $user= $row["username"];
    $pass = $row["password"];
    $usertype= $row["employee_type"];
  }
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update employee record</title>
  </head>
  <body>
    <form class="form form--hidden" action="updateproc.php" method="POST">
   		<h1 class="form__title">Update Records:</h1><br>
   		<div class="form__message form__message--error"></div>
      <div class="form__input-group">
   			<input type="text" name="empid" class="form__input" autofocus
   				placeholder="Employee id"value=<?php echo $empid ?>
   			<div class="form__input-error-message"></div>
   		</div>
      <div class="form__input-group">
   			<input type="text" name="first_name" class="form__input" autofocus
   				placeholder="First Name" value=<?php echo $fname ?>
   			<div class="form__input-error-message"></div>
   		</div>
   		<div class="form__input-group">
   			<input type="text" name="last_name" class="form__input" autofocus
   				placeholder="Last Name" value=<?php echo $lname?>
   			<div class="form__input-error-message"></div>
   		</div>
   		<div class="form__input-group">
   			<input type="text" name="contact_no" class="form__input" autofocus
   				placeholder="Contact Number" value=<?php echo $contact?>
   			<div class="form__input-error-message"></div>
   		</div>
   		<div class="form__input-group">
   			<input type="text" name="email_id" class="form__input" autofocus
   				placeholder="Email ID" value=<?php echo $email?>
   			<div class="form__input-error-message"></div>
   		</div>
   		<div class="form__input-group">
   			<input type="text" name="username" class="form__input" autofocus
   				placeholder="Username" value=<?php echo $user?>
   			<div class="form__input-error-message"></div>
   		</div>
   		<div class="form__input-group">
   			<input type="text" name="password" class="form__input" autofocus
   				placeholder="Password"value=<?php echo $pass?>
   			<div class="form__input-error-message"></div>
   		</div>
   		<div class="form__input-group">
   			<input type="text" name="employee_type" class="form__input" autofocus
   				placeholder="Employee type" value=<?php echo $usertype?>
   			<div class="form__input-error-message"></div>
   		</div>
   		<div class="form-group">
   				<input type="submit" class="btn btn-primary" value="Update">
   		</div>
   	</form>
  </body>
</html>
