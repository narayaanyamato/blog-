

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Loghin | admin</title>
  <link rel="icon" href="img\ganesh.jpg" height="20%"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>



	<main class="form-signin bg-light shadow-lg rounded">
  <form  method="post">
   
    <h1 class="h3 mb-3 fw-normal">Admin Login</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" name="name"  placeholder="name@example.com" required>
      <label for="floatingInput">Uname:</label>
    </div>
    <div class="form-floating mb-2">
      <input type="password" class="form-control" id="floatingPassword" name="pass"  placeholder="Password" required  autocomplete="off">
      <label for="floatingPassword"  autocomplete="off">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" name="sub" type="submit" onclick="">Sign in</button>
   
  </form>
</main>



</body>
</html>

<?php 

  session_start();
  include('db.php');
  if(isset($_POST['sub']))
  {
    
    
    $name=$_POST['name'];
    $_SESSION['uname']=$name;
    $pass=$_POST['pass'];
    
    $sql=" SELECT * FROM `admin` WHERE name='$name' and pass='$pass '" ;
    $res=mysqli_query($con,$sql);
     if(mysqli_num_rows($res)>0)
     {
      echo "<script>alert('Login Successfully'); window.open('index.php','_blank');</script>";
     }

     else
     {
      echo "<script>alert('invalid username password try again'); window.open('admin_login.php','_self');</script>";
     }
  }

?>