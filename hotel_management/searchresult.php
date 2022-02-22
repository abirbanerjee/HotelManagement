<?php
$search = trim($_POST["search"]);
require_once "config.php";
$query = "SELECT branch_id,name FROM hotel_branch WHERE name like '%$search%' or address like '%$search%'";


if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($branch_id, $name);
    while ($stmt->fetch()) {
        //printf("%s, %s\n", $branch_id, $name);
    }
    $stmt->close();
    echo "We found a branch at your selected location <br>";
    switch ($branch_id) {
      case 1:
        echo "<a href=\"mumbai.php\">Visit the hotel details</a>";
        break;
      case 2:
        echo "<a href=\"delhi.php\">Visit the hotel details</a>";
        break;
      case 3:
        echo "<a href=\"kolkata.php\">Visit the hotel details</a>";
        break;
      case 4:
        echo "<a href=\"pune.php\">Visit the hotel details</a>";
        break;
      default:
        echo "<h3> Sorry we are not there yet</h3>";
        break;
    }
}
 ?>
