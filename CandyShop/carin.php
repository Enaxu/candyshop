<?php

    //链接数据库
     $host="127.0.0.1";
     $user="root";
     $pass="xldxld";
     $dbname="candyshop";   
     $connection=mysqli_connect($host,$user,$pass,$dbname);
     
    //获取商品信息
    $price_old=$_POST['price_old'];
    $price_new=$_POST['price_new'];
    $start=$_POST['start'];
    $end=$_POST['end'];
    $number=$_POST['number'];
    $name=$_POST['name'];
    $id=$_POST['id'];
   
      
    //判断按了哪个按钮
    if(isset($_POST['mysubmit1'])){
        $sql="INSERT INTO `caiin` (`price_old`,`price_new`,`start`,`end`,`number`,`name`,`id`) VALUES ('$price_old','$price_new','$start','$end','$number','$name','$id')";
        //$result=mysqli_query($connection,$sql);
        
        echo"<meta http-equiv=\"refresh\" content=\"0; url=buy.php?price=".$price_new."&place=".$end."&id=".$id." \">";
        
    }
    
    else if(isset($_POST['mysubmit2'])){
       /* $sql1="SELECT FROM `caiin` WHERE `id`='$id'";
        if($sql1){
            echo"<script>alert('亲，您已经添加了此商品了哦')</script>";
        }
        else{*/
            $sql="INSERT INTO `caiin` (`price_old`,`price_new`,`start`,`end`,`number`,`name`,`id`) VALUES ('$price_old','$price_new','$start','$end','$number','$name','$id')";
            $result=mysqli_query($connection,$sql);
            
            if($result){
               echo"<meta http-equiv=\"refresh\" content=\"0; url=success.php?id=".$id."&price=".$price_new."&place=".$end."\">";
               //echo"<meta http-equiv=\"refresh\" content=\"0; url=buy.php?price=".$price_new."&place=".$end."&id=".$id." \">";
            }
            else{
                echo"<script>alert('亲，您已经添加了此商品了哦')</script>";
                echo"<meta http-equiv=\"refresh\" content=\"0; url=sweet".$id.".html\">";
            }
        //}
    }
    
    
    
    
    //判断按了哪个按钮
  /*  $action=$HTTP_POST_VARS["mysubmit"];
    switch($action){
        case "立即购买":
            
            
            
            break;
        case "加入购物车":
            $sql="INSERT INTO `caiin` (`price_old`,`price_new`,`start`,`end`,`number`,`name`,`id`) VALUES ('$price_old','$price_new','$start','$end','$number','$name','$id')";
            $result=mysqli_query($connection,$sql);
            if($result){
                echo "注册成功";
            }
            else{
                echo "注册失败";
            }
            
            break;
    }*/
     
    
?>