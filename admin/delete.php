
<?php 

  $id=$_GET['id'];

     include('db.php');

    $sql=" DELETE FROM `post` WHERE id= $id";

    $res=mysqli_query($con,$sql);
     if($res)
     {
       echo '<script>alert("deleteed data"); window.open("detailspost.php");</script>';
     }

     else
     {
     	 echo '<script>alert("Try again some thing wring data"); window.open("detailspost.php");</script>';
     }



?>