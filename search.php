

<?php 

  include('header.php'); 
?>
<style type="text/css">

  .banner3
  {
    background-image: url('https://wallpaperaccess.com/full/24998.jpg');
    background-size: cover;
  }

  img 
  {
     width: 100%;
     height: auto;
      background-color:lightblue;
      padding: 5px;
      border-radius: 10px;
  }

  .w3-image
  {
    width: 100%;
    height: auto;
  }
  
</style>





<main class="container-fluid m-0 p-0">
  <div >
  <div class="  p-4 p-md-5 mb-4 text-white rounded bg-dark banner3">
    <div class="col-md-5 px-0">
      <h1 class=" container display-4 fst-italic">Search Items are </h1>
      <p class="lead my-3 text-white fs-5 text-italic">So I say to you, Ask and it will be given to you; search, and you will find; knock, and the door will be opened for you.</p>
    
    </div>
  </div>
</div>


  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
      New and Update Topics
      </h3>
          
          <?php 
           

               $str=$_POST['find'];
              echo $str;
           
             include('db.php');
              $sql="SELECT * FROM posts WHERE title LIKE '%$str%' OR slug LIKE '%$str%' or description LIKE '%$str%' ORDER BY id DESC";
             $res=mysqli_query($con,$sql);
             if(mysqli_num_rows($res)>0)
             {
               while ($row=mysqli_fetch_assoc($res)) {
                 // code...


                ?>
                 
                  <article class="blog-post m-2 p-2">
        <h2 class="blog-post-title"> <?php echo $row['title']; ?></h2>
        <p class="blog-post-meta m-0 p-0"><i class="fas fa-clock text-info fw-5 m-2"></i> <?php echo $row['date']; ?>
        <br><i class="fas fa-user text-info fw-5 m-2"></i> <?php echo $row['posted_by']; ?></p>
        <p class="blog-post-meta m-0"><i class="fas fa-eye text-info m-2 fw-3"></i><?php   echo"views ".$_SESSION['views'];?></p>

        <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>

        <p class="text-muted fs-5 text-lg-start text-capitalize fw-lighte"><?php echo $row['description']; ?></p>
              



          
        <hr>
        
       
      </article>


                <?php
               }

              }

              else
              {
                 echo '
                  <div class="alert alert-danger" role="alert">not found!
                    </div>
                 ';
              }
              
             

          ?>

     

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
          <a href="about.php">read more</a>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Categorys</h4>
          <ol class="list-unstyled mb-0">
             <?php

              
                include('db.php');

                $sql="SELECT *  FROM Category;";
                 $res=mysqli_query($con,$sql);

                 if(mysqli_num_rows($res)>0)
                 {
                   while($row=mysqli_fetch_assoc($res))
                   {
                    
                    ?>

                    <a href="#"><?php  echo  $row['cato'];  ?>&nbsp; &nbsp; &nbsp;</a>
                    <?php 

                    echo "<br>";
                   }

                 }

             ?>
           
            
          </ol>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>


<?php 

include('footer.php');

?>

