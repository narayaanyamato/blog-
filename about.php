

<?php 

  include('header.php'); 
?>
<style type="text/css">
 .banner3
  {
    background-image: url('https://thumbs.dreamstime.com/b/modern-high-contrast-blue-orange-glossy-stripes-abstract-tech-graphic-banner-design-vector-corporate-background-vector-204427293.jpg');
    background-size: cover;
  }
  
</style>





<main class="container-fluid p-0 mt-0 m-0 ">
  <div class="px-4 mt-0 my-5 p-5 text-center banner3">
    <h1 class="display-4 fw-5 text-white text-normal">stay up to date in the email world</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4 text-white">Subscribe for weekly emailswith curated articales guides and videos to enhance your marketing topic or tactics.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <button type="button" class="btn btn-info btn-md px-3 me-sm-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Subscribe</button>
      
      </div>
    </div>
  </div>


  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
      About
      </h3>
        
     <div class="row featurette p-4">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5">
       <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQr--JSjwXe8vqI8CziBtZQ4mdT_uwsVKLXRQ&usqp=CAU" width="100%">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="https://images2.alphacoders.com/536/thumb-350-536054.jpg" width="100%" width="100%">
      </div>
    </div>

    <div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="https://www.freshbooks.com/wp-content/uploads/how-long-does-it-take-business-to-be-successful.jpg.optimal.jpg" alt="" width="100%" height="100%">
    <h1 class="display-5 fw-bold">After 2 new Y</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
     
    </div>
  </div>

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
         <img src="https://d3jmn01ri1fzgl.cloudfront.net/photoadking/webp_thumbnail/5e2973253d781_template_image_1579774757.webp" width="100%">
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

