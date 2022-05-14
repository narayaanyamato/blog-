

<?php 

  include('header.php');

     include('db.php');
      
?>

<style type="text/css">
  img 
  {
    background-color:lightblue;
      padding: 5px;
      border-radius: 10px;
     width: 100%;
     height:auto;
     box-shadow: 4px 5px 4px 5px lightslategray;
     margin-bottom: 20px;
  }

  p 
  {
    text-align: justify;
    padding: 5px;
    margin: 2px;
    text-transform: capitalize;
  }
  .banner2
  {
    background-image: url('https://cdn.searchenginejournal.com/wp-content/uploads/2019/08/6881c696-7fa0-429d-b830-8ad30998b94e.jpeg');
    background-size: cover;
  }
</style>



<main class="container-fluid p-0 m-0">
  <div >
  <div class="  p-4 p-md-5 mb-4 text-white rounded bg-dark banner2">
    <div class="col-md-5 px-0">
      <h1 class=" container display-4 fst-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3 text-white fs-5 text-italic">Multiple lines of text that form the lede, informing new readers quickly and  efficiently about what’s most interesting in this post’s contents.</p>
    
    </div>
  </div>
</div>


  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
      New and Update Topics
      </h3>

      <?php 

        if(isset($_SESSION['views']))
              $_SESSION['views'] = $_SESSION['views']+1;
          else
              $_SESSION['views']=1;
                
         // echo"views = ".$_SESSION['views'];
        
       $catid=$_GET['id'];
        $sql= "SELECT * FROM `posts` WHERE id='$catid'";
          $res=mysqli_query($con,$sql);
          if(mysqli_num_rows($res)>0)
             $data=mysqli_fetch_assoc($res)

          // echo $data['description'];

           ?>

             
      <article class="blog-post m-2">
        <h2 class="blog-post-title"><?php echo $data['title']; ?></h2>
        <p class="blog-post-meta text-info m-0 p-0"><i class="fas fa-clock m-2"></i><?php echo $data['date']; ?><br> <i class="fas fa-user text-info fw-5 m-2"></i> Post by <?php echo $data['posted_by']; ?> </p>
        <p class="blog-post-meta m-0 p-0"><i class="fas fa-eye text-info m-2 fw-3"></i><?php   echo"views ".$_SESSION['views'];?></p>
         <div class="container"> 
          <div class="row">
            <?php echo $data['description']; ?>
            
          </div>
           
         </div>
        <hr>

        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this 
        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
      </article>

           <?php

      ?>

      
   


      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled">Newer</a>
      </nav>

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
          <a href="about.php">Read more</a>
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

