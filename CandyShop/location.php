<?php

$username=$_POST['username'];
$password=$_POST['password'];


$host="127.0.0.1";
$user="root";
$pass="xldxld";
$dbname="candyshop";
$connection=mysqli_connect($host,$user,$pass,$dbname);

if($connection){
	//$password=md5($password);
	/*$sql="INSERT INTO  userinfo(username,password)  VALUES ('$username','$password')";
	$result=mysqli_query($connection,$sql);
	if($result){
		echo $username."注册成功";
	}
	else{
		echo "注册失败";
	}*/
	
	
	$sql="SELECT*FROM `account` WHERE `User_name`='$username' AND `User_password`='$password'";
	$result=mysqli_query($connection,$sql);
	//exit($result);
	if($result){
		//var_dump($result);
		$row=mysqli_fetch_array($result);
		//var_dump($row);
		if($row){
			//var_dump($row);
			echo "<meta http-equiv=\"refresh\" content=\"0; url=welcome.php\">";
		}
		else{
			echo"<script>alert('亲，您还未注册账号，请立即注册')</script>";
			echo "<meta http-equiv=\"refresh\" content=\"0; url=location.html\">";
			
		}
	}
}




?>
