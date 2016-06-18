<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="zh-CN" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<link rel="stylesheet" type="text/css" href="shopcar.css" />
</head>

<body>
<div id="all">
	<div id="header">
	<span><a href="location.html" class="location">亲，请登录</a></span>
	<span><a href="register.html" class="location" style="margin-left:10px;color:black;" name="login">免费注册</a></span>
	<span><a href="shopcar.html" class="location information"  style="margin-left:10px"  name="">我的购物车</a></span>
	<span><a href="" class="location information">我的信息</a></span>	
	</div>

<div id="all1">
<div id="mainbody">
	<img src="img/购物车.jpg" class="img1"/>
	<h1 class="car">购物车</h1>
	<form action="search.php" method="post" class="form1">
		<input name="searchtext" type="text" class="text1"/><input name="" type="button" value="搜索" class="search"/>
	</form>
	
	<div class="content one">
			<dl>
				<?php
				//链接数据库
				$host="127.0.0.1";
				$user="root";
				$pass="xldxld";
				$dbname="candyshop";
				$connection=mysqli_connect($host,$user,$pass,$dbname);
				
				$sql="SELECT*FROM `caiin`";
				$result=mysqli_query($connection,$sql);
				while($row=mysqli_fetch_assoc($result)){
				    echo"<a href=\"sweet".$row['id'].".html\"><dd class=\"clearfix\"><div>好吃的糖果</div>
			
					<img src=\"img/sweet".$row['id'].".jpg\"   width=\"216px\" height=\"280px\" />
			
				</dd></a>";
				}
				
				?>
			
			</dl>		
		</div>
	
</div>

</div>
</div>

</body>
</html>
