<?php
$id = trim($_GET["id"]);
require_once "config.php";
$query = "SELECT first_name,last_name from guest_list WHERE guest_id=$id";


if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($first_name, $last_name);
    while ($stmt->fetch()) {
        //printf("%s, %s\n", $first_name, $last_name);
    }
    $stmt->close();
}
echo "<h2>Welcome, ".$first_name." ".$last_name.", </h2>";
echo "<h3><a href = \"userbookings.php?id=".$id."\"> See your bookings</a></h3>";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Select dates and room type</title>
  </head>
  <body>
  <form name="dates" method="post" action="bookingprocess.php">
    Guest ID(registered):<input type="text" name = "gid" value=<?php echo $id ?>><br>
    Enter checkin date in YYYY-MM-DD: <input type="text" name="checkin" placeholder="Enter checkin date"><br>
    Enter checkout date in YYYY-MM-DD: <input type="text" name="checkout" placeholder="Enter checkin date"><br>
    Duration of stay: <input type="text" name="duration" placeholder="enter duration"><br>
    Enter room type: <input type="text" name="roomtype" placeholder="Enter room type(1/2/3)"><br>
  <input type="submit" name="submit" value="submit">
  </form>
  </body>
</html>
