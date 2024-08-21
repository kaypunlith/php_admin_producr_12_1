<?php 
  include("../config/db.php");
  include("../handle/redurect.php");
  $edit_id=$_POST['edit_id'];	
  $title=$_POST['title'];
   $price=$_POST['price'];
   $qty=$_POST['qty'];
   $iamge_name=$_FILES['img']['name'];
   $image_tmp=$_FILES['img']['tmp_name'];	
   $img_dri="../public/image/$iamge_name";
   move_uploaded_file($image_tmp,$img_dri);
  $sql="UPDATE `product_admin` SET `product_image`='$iamge_name',`product_title`='$title',`product_price`='$price',`product_qty`='$qty' WHERE `product_id`=$edit_id";
  $con->query($sql);
  if($sql){
    redirect("../index.php");
  }
?>