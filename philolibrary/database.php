<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
require("config.php");
$bn = $_POST['bname'];
$an = $_POST['aname'];
$img = $_POST['imgurl'];
$url = $_POST['url'];
$intro = $_POST['intro'];
$num = $_POST['num'];
$lang = $_POST['lang'];
$type = $_POST['type'];

$sql = "INSERT INTO book (`bname`, `aname`, `img-url`, `url`, `text`, `b-num`, `langage`, `type`) VALUES ('$bn', '$an', '$img', '$url', '$intro', '$num', '$lang', '$type')";

$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
  die('无法插入数据: ' . mysqli_error($conn));
}
echo "数据插入成功\n";
?>