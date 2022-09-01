<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?php
$servername = "localhost";
$username = "root";
$password = "Qaz753951!";
 
try {
    $conn = new PDO("mysql:host=$servername;", $username, $password);
    echo "连接成功"; 
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

//查询
$sql = "select * from stu where name=? limit 1";
//准备sql模板
$stmt = $pdo->prepare($sql);
$name = 'a';
//绑定参数
$stmt->bindValue(1,$name);
//执行预处理语句
$stmt->execute();
//推荐这种方式来获取查询结果
while ($row=$stmt->fetch())
{
    print_r($row);
}

if ($stmt->num_rows > 0) {
    // 输出数据
    while($row = $stmt->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["bname"]. " " . $row["aname"]. "<br>";
    }
} else {
    echo "0 结果";
}
//释放查询结果
$stmt = null;
//关闭连接
$pdo = null;
?>
