<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
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
?>