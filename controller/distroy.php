<?php 
include("../config/db.php");
include("../handle/redurect.php");
   $id=$_POST['del_product'];
   $sql="DELETE FROM `product_admin` WHERE `product_id`='$id'";
   $con->query($sql);
   if($sql){
    redirect("../index.php");
   }

?>