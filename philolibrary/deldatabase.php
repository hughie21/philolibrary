<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
require("config.php");
    $delsql = "DELETE FROM book WHERE `bname`='$row["bname"]'";
    $conn -> query($delsql);

$conn->close();
?>
