<?php 

   $id=$_GET['id'];
   //echo $id;

   include('db.php');

   $sql="DELETE FROM `category` WHERE id='$id' ";
   $res=mysqli_query($con,$sql);
   if($res)
   {
     echo "<script>alert(' Delete category  Successfully'); window.open('category.php','_self'); </script>";
   }
   else
   {
   	 echo "<script>alert(' Some thing Wrong Try again '); window.open('category.php','_self');</script>";
   }



?>