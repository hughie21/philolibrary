<!--
	*@Author: ChenXi-Guan
	*@Date: 2022
	*@LastEditTime:
	*@LastEditors:
	*@Description:
	*FilePath: 
-->

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="wideth = device-wideth", initial-scale=1.0>
<title>高级搜索-人类哲学书库</title>
<link href="./lib/css/nav.css" rel="stylesheet" type="text/css">
<link href="./lib/css/ssear.css" rel="stylesheet" type="text/css">
<script src=".\lib\js\notnull.js" type="text/javaScript"></script>
</head>

<body>
	<!-- 列表 -->
	<header class="bigbox">
		<div class="bigbox r-nav">
			<a href="./index.html">首页</a>
			<a href="s-search.php">高级搜索</a>
			<a href="./base/question.html">联系管理员</a>
			<a href="./base/help.html">用户帮助</a>
			<a href="./base/others.html">其他</a>
		</div>
	</header>
	<!--搜索列表-->
	<div class="main">
		<form id="bs-example bs-example-form" action="s-search=abs" class="bs-example bs-example-form" name="form" method="post" onsubmit="return validateForms()">
			<div class="input-group">
				<div class="option">
					<span class="input-group-addon">书名</span>
					<input name="bname" type="text" class="form-control" placeholder="bookname" aria-describedby="basic-addon1" value="">
				</div>
				<div class="option">
					<span class="input-group-addon">作者名</span>
					<input name="aname" type="text" class="form-control" placeholder="author" aria-describedby="basic-addon1" value="">
				</div>
				<div class="option">
					<span class="input-group-addon">书籍语言</span>
					<input name="lang" type="text" class="form-control" placeholder="language" aria-describedby="basic-addon1" value="">
				</div>
				<div class="input-group-btn">
					<button type = "submit" formaction="s-search=abs.php" formmethod="post" class="btn">模糊搜索</button>
					<button type="submit" formaction="s-search=spc.php" formmethod="post" class="btn">精准搜索</button>
				</div>
			</div>
			<div class="rbox">
				<div class="ill">
					<div class="tit">
						<span>
							高级搜索须知
						</span>
					</div>
					<div class="txt">
						<p>
							 所有搜索栏不得为空，搜索分为模糊搜索与精准搜索
						</p>
						<br>
						<p>
							其中模糊搜索可以缺字，不区分中文外文</br>
							精准搜索不能缺字，区分中外文，且需注意大小写
						</p>
						<br>
						<p>
							若无法搜索出结果请重新搜索或联系我们
						</p>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>