<?php
$bid = trim($_POST["bid"]);
require_once "config.php";
$query = "SELECT * from room_booking WHERE booking_id = $bid";
$result = $con->query($query);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $bid=$row["booking_id"];
    $gid=$row["guest_id"];
    $checkin=$row["checkin"];
    $checkout=$row["checkout"];
    $duration=$row["duration"];
    $total_price= $row["total_price"];
    $room_id = $row["room_id"];
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
    <form class="form form--hidden" action="bupdateproc.php" method="POST">
   		<h1 class="form__title">Update Records:</h1><br>
   		<div class="form__message form__message--error"></div>
      <div class="form__input-group">
   			<input type="text" name="bid" class="form__input" autofocus
   				placeholder="Employee id"value=<?php echo $bid ?>
   			<div class="form__input-error-message"></div>
   		</div>
      <div class="form__input-group">
   			<input type="text" name="gid" class="form__input" autofocus
   				placeholder="First Name" value=<?php echo $gid ?>
   			<div class="form__input-error-message"></div>
   		</div>
   		<div class="form__input-group">
   			<input type="text" name="checkin" class="form__input" autofocus
   				placeholder="Last Name" value=<?php echo $checkin?>
   			<div class="form__input-error-message"></div>
   		</div>
   		<div class="form__input-group">
   			<input type="text" name="checkout" class="form__input" autofocus
   				placeholder="Contact Number" value=<?php echo $checkout?>
   			<div class="form__input-error-message"></div>
   		</div>
   		<div class="form__input-group">
   			<input type="text" name="duration" class="form__input" autofocus
   				placeholder="Email ID" value=<?php echo $duration?>
   			<div class="form__input-error-message"></div>
   		</div>
   		<div class="form__input-group">
   			<input type="text" name="total_price" class="form__input" autofocus
   				placeholder="Username" value=<?php echo $total_price?>
   			<div class="form__input-error-message"></div>
   		</div>
   		<div class="form__input-group">
   			<input type="text" name="room_id" class="form__input" autofocus
   				placeholder="Password"value=<?php echo $room_id?>
   			<div class="form__input-error-message"></div>
   		</div>
   		<div class="form-group">
   				<input type="submit" class="btn btn-primary" value="Update">
   		</div>
   	</form>
  </body>
</html>
