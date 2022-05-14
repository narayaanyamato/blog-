

<?php 

  include('header.php');
?>

<style type="text/css">
  .w3-image 
  {
     background-color:lightblue;
      padding: 5px;
      border-radius: 10px;
     width: 100%;
     height:auto;
  }

  img 
  {
    
     background-color:lightblue;
      padding: 5px;
      border-radius: 10px;
     width: 100%;
     height:auto;
  }
  .banner-post
  {
    background-image: url('https://image.shutterstock.com/image-photo/female-hands-typing-on-laptop-260nw-1729282783.jpg');
    background-blend-mode: purple;
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>


<main class="container-fluid p-0 m-0">
  <div class="banner">
  <div class="  p-4 p-md-5 mb-4 text-white rounded bg-dark banner-post">
    <div class="col-md-5 px-0">
      <h1 class=" container display-4 fst-italic"> longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
     
    </div>
  </div>
</div>

  </div>



  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        From the Firehose
      </h3>


      <?php 

       include('db.php');
        $sql="SELECT * FROM `posts`";
         $res=mysqli_query($con,$sql);
          if(mysqli_num_rows($res))
           while( $row=mysqli_fetch_assoc($res))
           {

          ?>
             <article class="blog-post m-2 p-2">
        <h2 class="blog-post-title"> <?php echo $row['title']; ?></h2>
        <p class="blog-post-meta"><i class="fas fa-clock text-info fw-5 m-2"></i> <?php echo $row['date']; ?>
        <br><i class="fas fa-user text-info fw-5 m-2"></i> <?php echo $row['posted_by']; ?></p>

        <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>

        <p class="text-muted fs-5 text-lg-start text-capitalize fw-lighte"><?php echo $row['description']; ?></p>

          
        <hr>
        
       
      </article>

          <?php

          }
      ?>

      

     

      
   
    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
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

                    <a href="#"><?php  echo $row['cato'];  ?>&nbsp; &nbsp; &nbsp;</a>
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
            <li><a href="#"><i class="fa fa-github p-2"></i> GitHub</a></li>
            <li><a href="#"><i class="fa fa-twitter p-2"></i>Twitter</a></li>
            <li><a href="#"><i class="fa fa-facebook p-2"></i>Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>


<?php 

include('footer.php');

?>
