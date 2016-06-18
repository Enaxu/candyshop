<?php


    $host="127.0.0.1";
    $user="root";
    $pass="xldxld";
    $dbname="candyshop";
    $connection=mysqli_connect($host,$user,$pass,$dbname);
    
    $name=$_POST['name'];
    $address=$_POST['address'];
    $tel=$_POST['tel'];
    $z_account=$_POST['z_account'];
    $price=$_GET['price'];
    $place=$_GET['place'];
    
    $sql="INSERT INTO `shopper` (`name`,`address`,`tel`,`z_account`,`price`,`place`) VALUES ('$name','$address','$tel','$z_account','$price','$place')";
    $result=mysqli_query($connection,$sql);

    $id=$_GET['id'];
    var_dump("$id");
    echo"<meta http-equiv=\"refresh\" content=\"0; url=buysuccess2.php?id=".$id."\">";
    