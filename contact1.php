

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>contact form | contact Us !</title>
  </head>
  <body>

     <div class="container mt-5 bg-light p-4">
       <h1 class="text-center ">Contact form </h1>
       <div class="row">
           <div class="col-md-6 mx-auto d-block">
             <form method="post" name="contact" action="#" onsubmit="return validate(); ">
                <div class="mb-3">
                  <label for="name" class="form-label">Name:</label>
                  <input type="text" class="form-control" name="name" id="name">
                   <div id="Name">

                   </div>
                </div>
                <div class="mb-3">
                  <label for="address" class="form-label">Address:</label>
                  <textarea class="form-control" name="address" id="address" ></textarea>
                </div>
                 <div id="Address">

                 </div>
                 <div class="mb-3">
                   <label for="dist" class="form-label"> Dist:</label>
                 <select class="form-select" name="dist" aria-label="Default select example" id="dist">
                     <option selected value="0">-- select Dist--</option>
                       <?php
                          
                           include('db.php');
                    $sql="SELECT * FROM `dist` ";
                    $res=mysqli_query($con,$sql);
                    if(mysqli_num_rows($res)>0)
                    {
                        while($row=mysqli_fetch_assoc($res))
                        {
                          

                              ?>
                                 <option value="<?php  echo" ". $row['bname']." "; ?>"><?php  echo"<td>". $row['bname']."</td>"; ?></option>
                              <?php
                             
                        }
                    }
                        ?>
                 </select>
                 </div>
                   <div id="Dist">

                   </div>
                  <div class="mb-3">
                  <label for="block" class="form-label"> Block:</label>
                  <select class="form-select" name="block" aria-label="Default select example" id="block">
                    <option selected value="0">-- select Block--</option>
                        <?php
                          
                           include('db.php');
                    $sql="SELECT * FROM `block` ";
                    $res=mysqli_query($con,$sql);
                    if(mysqli_num_rows($res)>0)
                    {
                        while($row=mysqli_fetch_assoc($res))
                        {
                          

                              ?>
                                 <option value="<?php  echo"<td>". $row['bname']."</td>"; ?>"><?php  echo" ". $row['bname']." "; ?></option>
                              <?php
                             
                        }
                    }
                        ?>
                  </select>

                  </div>
                       <div id="Block">

                       </div>
                  <div class="mb-3">
                          <div class="form-check">
                            <label class="form-check-label fs-5" for="flexRadioDefault1">
                              Select Gender: &nbsp; &nbsp; &nbsp; &nbsp;
                            </label>
                        <input  type="radio" name="Gender" value="male" id="Gender"  >   Male  &nbsp; &nbsp;
                        <input  type="radio" name="Gender" value="female" id="Gender" >  Female &nbsp; &nbsp;
                          <input  type="radio" name="Gender" value="Other" id="Gender" >  Other

                        </div>

                  </div>
                  <div id="gndr">

                  </div>
                  <div class="d-grid gap-2 col-6 mx-auto mt-3">
                     <button type="submit"name="Submit"  class="btn btn-info text-center">Submit</button>
                 </div>

             </form>
           </div>
       </div>

     </div>


     

    <script type="text/javascript">
          function validate()
          {
            var name=document.getElementById('name').value;
             var address=document.getElementById('address').value;
             var dist=document.getElementById('dist').value;
              var block=document.getElementById('block').value;


            //for name
            if (name=="")
             {
              document.getElementById('Name').innerHTML="User name cant be empty";
                document.getElementById('Name').style.color="red";
              return false;
            }
            else
            {
              if(name.length<=2)
              {
                document.getElementById('Name').innerHTML="User name cant be empty 2 Charater";
                  document.getElementById('Name').style.color="red";
                return false;
              }

              else {
                re = /^[a-zA-Z\s]+$/;

                if(!re.test(name))
                {
                  document.getElementById('Name').innerHTML="User name cant be Number and Symbol";
                    document.getElementById('Name').style.color="red";
                  return false;
                }

              }

            }


         // address
            if(address=="")
            {
              document.getElementById('Address').innerHTML="Enter your Address";
                document.getElementById('Address').style.color="red";
              return false;
            }


            //Dist
            if(dist==0)
            {
              document.getElementById('Dist').innerHTML="select your Dist.";
                document.getElementById('Dist').style.color="red";
              return false;
            }

            
            //block

            if(block==0)
            {
              document.getElementById('Block').innerHTML="select your block..";
                document.getElementById('Block').style.color="red";
              return false;
            }

         

      let gender=document.getElementById('Gender').value;
            if(gender=="" )
            {
              document.getElementById('gndr').innerHTML="select your Gender..";
                document.getElementById('gndr').style.color="red";
              return false;
            }

           



          }

          if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>

  </body>
</html>





<?php



  if (isset($_POST['Submit'])) {
    
      include('db.php');
      $name=$_POST['name'];
      $address=$_POST['address'];
      $dist=$_POST['dist'];
      $block=$_POST['block'];
      $gndr=$_POST['Gender'];
       $sql="INSERT INTO `contact`(`id`, `name`, `address`, `dist`, `block`, `gender`) VALUES (null,'$name','$address','$dist','$block','$gndr')";
       if (mysqli_query($con,$sql)) {
         
           echo '<script>alert("Submit data successfully"); window.open("contact.php","_self");</script>';
       }

       else
       {
          echo '<script>alert("Some thing Wrong try again:"); </script>';
       }
  }

  
 ?>
