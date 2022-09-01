<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
require("config.php");
$bn = $_POST['book'];

$sql = "select * from book where bname like '%".$bn."%' ";
$result=mysqli_query($conn,$sql);
if(!$result){
    die('无法读取数据,请联系管理员修复:'.mysqli_error($conn));
}


echo<<<EOT
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="wideth = device-wideth", initial-scale=1.0>
<title>人类哲学书库~中西方哲学</title>
<link href="./lib/css/nav.css" rel="stylesheet" type="text/css">
<link href="./lib/css/s-box.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- 导航栏 -->
	<header class="bigbox">
		<div class="bigbox r-nav">
			<a href="./index.html">首页</a>
			<a herf="/s-search.php">高级搜索</a>
			<a href="./base/question.html">联系管理员</a>
			<a href="./base/help.html">用户帮助</a>
			<a href="./base/others.html">其他</a>
		</div>
	</header>
    <!--搜索内容-->
    <div class="main">
		<div class="books">
			<ul>
EOT;


		while($row = mysqli_fetch_array($result)){
			echo<<<EOT
				<li>
					<div class="img">
						<a href="{$row['url']}">
							<img src="{$row['img-url']}" width="120" height="150">
						</a>
					</div>
					<div class="b-scan">
						<h3></h3>
						<span class="auth"></span>
						<div class="b-intro">
							<p>"{$row['text']}"<br></p>
							<p></p>
							<p></p>
						</div>
						<div class="b-info">
							字数:
							<span style="color: blue;">"{$row['b-num']}"</span>
							语言:
							<span style="color: blue;">"{$row['langage']}"</span>
							类别:
							<span style="color: blue;">哲学</span>
						</div>
						<a href="{$row['url']}" class="read">
							<button name="read">阅读</button>
						</a>
					</div>
				</li>
EOT;
		}



echo<<<EOT
			</ul>
		</div>
	</div>
</body>
</html>
EOT;

mysqli_close($conn);
?>