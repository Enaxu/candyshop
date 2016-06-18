<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title></title>
<link rel="stylesheet" type="text/css" href="welcome.css" />
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
		<input name="searchtext" type="text" class="text1"/><input id="show" name="show" type="button" value="搜索" class="search" onClick="test();" />
	</form>
	
	<div class="content one">
		<dl>
		
		<?php
		
		      $host="127.0.0.1";
		      $user="root";
		      $pass="xldxld";
		      $dbname="candyshop";
		      $connection=mysqli_connect($host,$user,$pass,$dbname);
		      
		      $searchtext=$_POST['searchtext'];
		      if($connection){
		          //like '%".$searchtext."%'
		          //$sql="SELECT*FROM `sweet` WHERE `name`='$searchtext'";
		         // $result=mysqli_query($connection,$sql);
		          /*if($result){
		           echo "<meta http-equiv=\"refresh\" content=\"0; url=".$searchtext.".html\">";
		           }*/
		           
		           
		           
		          $sql="SELECT*FROM `SWEET` WHERE `name` like '%".$searchtext."%'";
		          $result=mysqli_query($connection,$sql);
		          while($row=mysqli_fetch_assoc($result)){
		              echo"<a href=\"sweet".$row['id'].".html\"><dd class=\"clearfix\"><div>好吃的糖果</div>
     
            					<img src=\"img/sweet".$row['id'].".jpg\"   width=\"216px\" height=\"280px\" />
     
            				</dd></a>";
		          }
		           
		      }
		   ?>   
		   
		   
    		
                        
		</dl>
		
	</div>
</div>
</div>

</div>
</body>
</html>               
                
                
                