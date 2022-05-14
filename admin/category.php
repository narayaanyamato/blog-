
<?php 

session_start();


  if(isset($_SESSION['uname']))
  { 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard | Welcome Admin Pannel </title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Welcome ,<?php echo $_SESSION['uname'];  ?></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                       
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Post</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Posts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="addpost.php">Add Post</a>
                                    <a class="nav-link" href="detailspost.php">post Details</a>
                                    <a class="nav-link" href="category.php">post catogory </a>
                                  
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                         
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                   <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                          <span class="small bg-success text-white rounded p-1"><?php echo "status" ?></span>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-3 text-center text-info">Catogory Details</h1>
                     <hr>
                </main>


                <div class="container mt-5 ">
                    <div class="row">
                        <div class="col-lg-6 mx-auto bg-info rounded-3 p-4">

                            <form method="post" enctype="multipart/form-data" action="" >
                             <div class="from-group mb-3">
                               <input type="text" name="cato"  class="form-control" placeholder="ADD CATEGORY name">         

                               </div>

                                <div class="from-group mb-3">
                               <input type="text" name="cato_id"  class="form-control" placeholder="ADD CATEGORY id ">                              
                               </div>
                            

                            <div class="mb-3">
                                <input type="submit" name="add_cato" class="btn btn-outline-success m-1">
                            </div>
                            
                        </form>
                        
                            
                        </div>
                    </div>
                    
                </div>

                <hr>
                <div class="container">
                    <div class="container">

                     <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">id</th>
                              <th scope="col">catogory name</th>
                              <th scope="col">cato_id</th>
                              
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>

                            <tr>
                                         <?php
                          
                                            include('db.php');
                                            $sql="SELECT * FROM `category`";
                                            $res=mysqli_query($con,$sql);
                                            if(mysqli_num_rows($res)>0)
                                            {
                                                while($row=mysqli_fetch_assoc($res))
                                                {
                                                                                          
                                              ?>
                                            <tr>
                                                 <td><?php echo $row['id'] ;?></td>
                                                <td><?php echo $row['cato'] ;?></td>
                                                  <td><?php echo $row['cato_id']; ?></td>
                                                 <td>
                                                    <a href="update_cato.php?id=<?php echo $row['id']; ?>"  name="update"> <button class="btn btn-outline-success m-1"> Ediit </button></a>
                                                     <a href="cato_del.php?id=<?php echo $row['id']; ?>" name="delete"> <button class="btn btn-outline-danger m-1">Detlete</button></a>

                                                 </td>
                                            </tr>
                                            
                                             <?php
                                                }
                                            }
                                                ?>
                                    
                            </tr>
                          </tbody>
                        </table>
                        
                    </div>
                       
                   </div>



                   <!---modal---- for update---->

                   


                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Blog Duniya 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php }  else{

   header("location:admin_login.php");
}
?>

<?php 


  include('db.php');
  if(isset($_POST['add_cato']))
  {
    
    
    $cato=$_POST['cato'];
    $cat_id=$_POST['cato_id'];
    $sql=" INSERT INTO `category`(`id`, `cato`, `cato_id`) VALUES (null,'$cato','$cat_id')";

    if(mysqli_query($con,$sql))
    {
         echo "<script>alert(' Added Successfully'); </script>";
    }
    else
    {
echo "<script>alert('Something wrong try again'); </script>";
    }
   
  }

?>