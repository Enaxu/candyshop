<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="zh-CN" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<link rel="stylesheet" href="success.css" type="text.css" />
</head>

<body style="background-image: url(img/千玺背景.jpg);">
<div id="all">
	<div id="header">
	<span><a href="location.html" class="location">亲，请登录</a></span>
	<span><a href="register.html" class="location" style="margin-left:10px;color:black;" name="login">免费注册</a></span>
	<span><a href="shopcar.php" class="location information"  style="margin-left:10px"  name="">我的购物车</a></span>
	<span><a href="" class="location information">我的信息</a></span>	
	</div>

<div id="all1">
<div id="mainbody">	
	<img src="img/千玺和楠楠.jpg" class="img1"/>
	
	<h1 class="title">糖果网</h1>
	<form action="search.php" method="post" class="form1">
		<input name="searchtext" type="text" class="text1"/><input name="" type="button" value="搜索" class="search"/>
	</form>
	
	<div class="content one" style="background:#fda;">
		<?php 
		  $id=$_GET['id'];
		  echo"<img style=\"width:400px; height:370px;float:left;\" src=\"img/sweet".$id.".jpg\" />";
		?>
		<p style="margin-left:540px;margin-top:170px;font-size:30px;color:#f51;">恭喜您，已经付款成功！</p>
		

	
		
	</div>
		
</div>
</div>

</div>

</body>

</html>
	
