<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
echo "数据开始插入";
$servername = "localhost";
$username = "root";
$password = "Qaz753951!";
$dbname = "booksheet";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die('Could not connect: '.mysqli_connect_error()); 
}else{
    mysqli_select_db($conn, "booksheet");
    mysqli_query($conn,"set names utf8");
}

$bn = $_POST['bname'];
$an = $_POST['aname'];
$img = $_POST['imgurl'];
$url = $_POST['url'];
$intro = $_POST['intro'];
$num = $_POST['intro'];
$lang = $_POST['lang'];
$type = $_POST['type'];

$sql = "INSERT INTO book".
"(bname, aname, img-url, url, text, b-num, langage, type)".
"VALUES".
"('$bn', '$an', '$img', '$url', '$intro', '$num', '$lang', '$type')";

$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
  die('无法插入数据: ' . mysqli_error($conn));
}
echo "数据插入成功\n";
?>