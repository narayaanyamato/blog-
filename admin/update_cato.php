


<head>
	<link rel="icon" href="img\ganesh.jpg" height="20%"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="https://kit.fontawesome.com/67f58695eb.js"></script>
</head>



<?php 

                   $id=$_GET['id'];
                     include('db.php');
                    $sql="SELECT * FROM `category` WHERE id=$id ";
                    $res=mysqli_query($con,$sql);
                    if(mysqli_num_rows($res)>0)
                        while($row=mysqli_fetch_assoc($res))
                        
                   ?>

            
                        <div class="container">
                        	<div class="row">
                        		
                        	</div>
                        	
                        </div>

