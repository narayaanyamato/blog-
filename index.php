

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
     box-shadow: 4px 5px 4px 5px lightslategray;
  }

  img {
    background-color:lightblue;
      padding: 5px;
      border-radius: 10px;
     width: 100%;
     height:auto;
     box-shadow: 4px 5px 4px 5px lightslategray;
  }

  .img_card 
  {
     width: 200px;
     height: 250px;
      box-shadow: 0px 0px 0px 0px lightslategray;
  }
  @media only screen and(max-width: 770px){
    img 
    {
        background-color:lightblue;
      padding: 5px;
      border-radius: 10px;
     width:200px;
     height:400px;
     box-shadow: 4px 5px 4px 5px lightslategray;
    }
  }
   
</style>


<main class="container-fluid m-0 p-0  " class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
  <div class="banner">
  <div class="  p-4 p-md-5 mb-4 text-white rounded bg-dark banner">
    <div class="col-md-5 px-0">
      <h1 class=" container display-4 fst-italic">Blog Duniya</h1>
      <p class="lead my-3"></p>
      <p class="lead mb-3"><a href="post.php" class="text-white fw-bold">Continue reading...</a></p>
    </div>
  </div>
</div>

  </div>


 

 <div class="row mb-2">
    <?php 
        
        include('db.php');
         $sql="SELECT * FROM `posts` ORDER BY id DESC LIMIT 2 ";
         $res=mysqli_query($con,$sql);
         if(mysqli_num_rows($res)>0)
         {
           while($row=mysqli_fetch_assoc($res))
           {
               
              $_SESSION['id']=$row['id']; 
         
             ?>
              
          <div class="col-lg-4">
         <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-lg  position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          
          <h3 class="mb-0"><?php  echo $row['title']; ?></h3>

          <div class="mb-1 text-muted"><i class="fas fa-clock text-info fw-5 m-2"></i> <?php  echo $row['date']; ?></div> <p class="blog-post-meta m-0"><i class="fas fa-eye text-info m-2 fw-3"></i><?php   echo"views ".$_SESSION['views'];?></p>
           
         
          <a href="page.php?id=<?php echo $row['id'] ;?>" class="stretched-link">Continue reading</a>
        </div>
        
      </div>

    </div>
             <?php

           }
         }



       ?>


  </div>



  
  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        From the Firehose
      </h3>


      <?php 

         if(isset($_SESSION['views']))
              $_SESSION['views'] = $_SESSION['views']+1;
          else
              $_SESSION['views']=1;
                
         // echo"views = ".$_SESSION['views'];
            

       include('db.php');
        $sql="SELECT * FROM `posts` WHERE id=7 ";
         $res=mysqli_query($con,$sql);
          if(mysqli_num_rows($res))
            $row=mysqli_fetch_assoc($res);


      ?>

      <article class="blog-post m-2 p-2">
        <h2 class="blog-post-title"> <?php echo $row['title']; ?></h2>
        <p class="blog-post-meta m-0 p-0"><i class="fas fa-clock text-info fw-5 m-2"></i> <?php echo $row['date']; ?>
        <br><i class="fas fa-user text-info fw-5 m-2"></i> <?php echo $row['posted_by']; ?></p>
        <p class="blog-post-meta m-0"><i class="fas fa-eye text-info m-2 fw-3"></i><?php   echo"views ".$_SESSION['views'];?></p>

        <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>

        <p class="text-muted fs-5 text-lg-start text-capitalize fw-lighte"><?php echo $row['description']; ?></p>
              



          
        <hr>
        
        <span><a href="post.php">Read more posts</a> </span>

      </article>

     

      
   
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

                $sql="SELECT *  FROM Category ";
                 $res=mysqli_query($con,$sql);

                 if(mysqli_num_rows($res)>0)
                 {
                  
                   while($row=mysqli_fetch_assoc($res))
                   {
                   
                  
                    ?>

                    <a href="Category.php?id=<?php  echo $row['cato_id'] ?>"><?php  echo $row['cato'];  ?>&nbsp; &nbsp; &nbsp;</a>
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
