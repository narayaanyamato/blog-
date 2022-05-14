

<?php

$servername="localhost";
$username="root" ;
$password="";
$db="blog";

  $con=mysqli_connect($servername,$username,$password,$db);

  if(!$con)
  {
    //die("<h3>Connection failed..</h3>" .mysqli_connect_error());
     echo '<script>window.open("401.html");</script>';
  }

 


?>