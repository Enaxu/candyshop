<?php 

$username=$_POST['username'];
$password=$_POST['password'];
$password2=$_POST['password2'];


$host="127.0.0.1";
$user="root";
$pass="xldxld";
$dbname="candyshop";
//mysqli_query($dbname,"set names 'utf-8'");  
$connection=mysqli_connect($host,$user,$pass,$dbname);
//var_dump($connection);
if($connection){
	//$password=md5($password);
	
	if($password==$password2){
	   // mysqli_query($dbname,"set names 'utf-8'"); 
	    $sql="INSERT INTO `account` (`User_name`,`User_password`) VALUES ('$username','$password')";
	    //var_dump($sql);
	    $result=mysqli_query($connection,$sql);
	    //var_dump($result);
	    if($result){
	        echo"<meta http-equiv=\"refresh\" content=\"0; url=welcome.php\">";
	    }
	    else{
	        echo"<script>alert('您注册的姿势可能不对，请重新注册')</script>";
	        echo"<meta http-equiv=\"refresh\" content=\"0; url=register.html\">";
	    }
	}
	else{
	    echo"<script>alert('亲，请确认您两次输入的密码一致')</script>";
	    echo"<meta http-equiv=\"refresh\" content=\"0; url=register.html\">";
	}
    
	
	
	
	
	
	
}


?>