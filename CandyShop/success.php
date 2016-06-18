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
			
	<div class="content one">
		
		<?php $num=$_GET['id']; 
			echo"<img style=\"width:400px; height:370px;\" src=\"img/sweet".$num.".jpg\" />"; ?>
		<span style="float:right;font-size:24px;color:#db7093;">添加购物车成功!</span>
		<?php echo"<a href=\"sweet".$num.".html\"><input type=\"button\"  value=\"返回商品详情\" class=\"info\"/></a>";
              $id=$_GET['id'];
			  $price=$_GET['price'];
              $place=$_GET['place'];
		      echo"<a href=\"buy.php?id=".$id."&price=".$price."&place=".$place."\"><input type=\"submit\"  value=\"立即购买\" class=\"buy\"/></a>"; ?>

	
		
		</div>
		
</div>
</div>

</div>

</body>

</html>
