<?php
$empid = trim($_POST["emp_id"]);

require_once "config.php";
$query = "SELECT first_name,last_name FROM employee_list WHERE employee_id = $empid";
if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($first_name, $last_name);
    while ($stmt->fetch()) {
        printf(" Deleted employee: %s %s\n", $first_name, $last_name);
    }
    $stmt->close();
}
$query = "DELETE FROM employee_list WHERE employee_id = $empid";


if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->close();
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post" id="reg" name="reg" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

  Enter employee number to delete:<input type="text" name="emp_id">
  <input type="submit" value="Delete employee"><br>
  <a href="addemployee.php">Go back to list of employees</a>
</form>
  </body>
</html>
