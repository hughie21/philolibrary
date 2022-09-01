<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
require("config.php");

$sql = "SELECT `bname`, `aname`, `b-num`, `langage`, `type` FROM book";
$result = $conn -> query($sql);

if($result -> num_rows > 0){
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "书名:" . $row["bname"]. "----作者名:" . $row["aname"]. "----字数:" . $row["b-num"] . "----语言:" . $row["langage"] . "----类别:" . $row["type"] . "<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();
?>
