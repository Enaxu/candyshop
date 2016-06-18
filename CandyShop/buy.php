<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="zh-CN" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<link rel="stylesheet" href="buy.css" type="text/css" />
</head>
<body>
<div="header">
	<div id="header">
	<span><a href="location.html" class="location">亲，请登录</a></span>
	<span><a href="register.html" class="location" style="margin-left:10px;color:black;" name="login">免费注册</a></span>
	<span><a href="shopcar.php" class="location information"  style="margin-left:10px"  name="">我的购物车</a></span>
	<span><a href="" class="location information">我的信息</a></span>	
</div>

<div id="all1">
<div id="mainbody">
	<img src="img/购物车.jpg" class="img1"/>
	<h1 class="car">购物车</h1><br /><br />
	<span style="font-size:18px;">确认收货人信息地址及付款</span>
	<hr /><br /><br />
	<form <?php $price=$_GET['price']; $place=$_GET['place'];$id=$_GET['id'];echo"action=\"buysuccess.php?price=".$price."&place=".$place."&id=".$id."\" "?> method="post">
		<table id="list">
			<tr>
				<td>收件人姓名：</td>
				<td><input type="textbox" class="box" name="name" /></td>
			</tr>
			<tr>
				<td>收件人地址：</td>
				<td><input type="textbox" class="box" name="address"/></td>
			</tr>
			<tr>
				<td>收件人联系方式：</td>
				<td><input type="textbox" class="box" name="tel"/></td>
			</tr>
			<tr>
				<td>支付宝账号：</td>
				<td><input type="textbox" class="box" name="z_account" /></td>
			</tr>
			<tr>
				<td>支付宝密码：</td>
				<td><input type="textbox" class="box" name="z_pwd" /></td>
			</tr>
		</table>
	
		<br /><br />
		<div id="pay">
			<?php
		  
		
		      $price=$_GET['price'];
		      $place=$_GET['place'];
		      $id=$_GET['id'];
		      echo"<span style=\"font-size:12px;\">实付款：  ￥ </span>  ".$price."<br /><br />
                                       <span style=\"font-size:12px;\"> 寄至：</span>".$place."<br />  
	                                   <span style=\"font-size:12px;\">商品：</span>".$id."
            "; ?>
            <br /><br /><br />	
       		<input type="submit" value="提交订单" name="" class="submitpay"/>
		</div>
	</form>
</div>
</div>


</div>

</body>
</html>	