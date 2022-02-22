<?php
$search = trim($_POST["search"]);
require_once "config.php";
$query = "SELECT a.branch_id, a.descr, a.att_name, b.name FROM attractions a JOIN hotel_branch b WHERE att_name LIKE '%$search%' and a.branch_id = b.branch_id";
if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($branch_id, $descr, $att_name, $name);
    while ($stmt->fetch()) {
        //printf("%s, %s, %s, %s\n", $branch_id, $descr, $att_name, $name);
    }
    $stmt->close();
}
echo "Your search matches ".$att_name.". Description: ".$descr." Which can be visited from our ".$name." branch.<br>";
echo "<a href = \"".$name.".php\"> Go to the brach page.</a>"
?>
