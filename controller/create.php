<?php 
   include("../config/db.php");
   include("../handle/redurect.php");
   $title=$_POST['title'];
   $price=$_POST['price'];
   $qty=$_POST['qty'];
   $iamge_name=$_FILES['img']['name'];
   $image_tmp=$_FILES['img']['tmp_name'];	
   $img_dri="../public/image/$iamge_name";
   move_uploaded_file($image_tmp,$img_dri);
   $img='123.png';
   $sql="INSERT INTO `product_admin`(`product_id`, `product_image`, `product_title`, `product_price`, `product_qty`)
    VALUES (null,'$iamge_name','$title','$price','$qty')";
    $con->query($sql);
    if($sql){
       redirect("../index.php");
    }
?>