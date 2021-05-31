

<?php



     session_start();

    require_once "db.php";



if(!isset($_SESSION['use']))   // Checking whether the session is already there or not if 

                              // true then header redirect it to the home page directly 

 {

    header("Location: login.php");

 }

 ?>



<?php include 'db.php'; 



$query="SELECT * from tblcontent";

$result= mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))

{



    $title = $row['title'];

    $navtitle = $row['navtitle'];

    $header1 = $row['header1'];

    $description1 = $row['description1'];

    $header2 = $row['header2'];

    $description2 = $row['description2'];

    }

?>

<!DOCTYPE html>

<html lang="en">



  <head>



  <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="Template Mo">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <link rel='stylesheet' href='https://fullcalendar.io/js/fullcalendar-3.1.0/fullcalendar.min.css' />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="icon.ico" />

    <title><?php echo $title; ?></title>



    <!-- Additional CSS Files -->

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="assets/css/templatemo-art-factory.css">

    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">

    

        <script src='//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.3/moment.min.js'></script>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

     

        <script src='js/main.js'></script>



    </head>

    

    <body>

    



    <div id="preloader">

        <div class="jumper">

            <div></div>

            <div></div>

            <div></div>

        </div>

    </div>  

    

    <header class="header-area header-sticky">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <nav class="main-nav">

                    

                    <?php include 'db.php'; 



$query="SELECT * from tblcontent";

$result= mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))

{



    ?>

    <img class="pt-1 logo" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['navlogo']); ?>" style="width: 70px;"/>

   

    <?php

}

?>     

                    <a class="logo" href="customerdashboard.php" style="font-size:15px; margin-left: 10px;"><?php echo $navtitle; ?></a>

                 

                        <ul class="nav">

                        <li class="scroll-to-section"><a href="customerdashboard.php">Home</a></li>

                         

                            <li class="scroll-to-section"><a href="customerprofile.php" class="active">Profile</a></li>

                            <li class="scroll-to-section"><a href="customerlogout.php">Logout</a></li>

                        </ul>

                        <a class='menu-trigger'>

                            <span>Menu</span>

                        </a>

                 

                    </nav>

                </div>

            </div>

        </div>

    </header>

 



<br>

<br>

<br>



    <div class="welcome-area" id="welcome">



    

        <div class="header-text">

            <div class="container">

                <div class="row">

                    <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">

                    <center>   <h4><?php echo $header1;?></h4></center>

                     <br>

                     <p style="text-align:justify"><?php echo $description1;?></p>

                       

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">

                    <?php include 'db.php'; 



$query="SELECT * from tblcontent";

$result= mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))

{



    ?>

    <img class="rounded img-fluid d-block mx-auto" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['headerimage1']); ?>" />

    <?php

}

?>

                    </div>

                </div>

            </div>

        </div>

        <!-- ***** Header Text End ***** -->

    </div>

    <!-- ***** Welcome Area End ***** -->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php



if(isset($_POST['update']))

{

       $id = $_POST['id'];

         $fullname =  trim($_POST['fullname']);

         $dob = strtotime($_POST["dob"]);



         $dob = date('Y-m-d H:i:s', $dob);

        

         $email =  trim($_POST['email']);

         $mobile =  trim($_POST['mobile']);

         $username =  trim($_POST['username']);

         

        $newpass = mysqli_real_escape_string($conn, $_POST['newpass']);



        $hashed_newpass = password_hash($newpass, PASSWORD_DEFAULT);



        $conpass = mysqli_real_escape_string($conn, $_POST['conpass']);



        $hashed_conpass = password_hash($conpass, PASSWORD_DEFAULT);



        

        if(strlen($newpass) < 6) {



            $newpass_error = '<div class="alert alert-danger">Password must be minimum of 6 characters</div>';



        }       



        if($newpass != $conpass) {



            $conpass_error = '<div class="alert alert-danger">New Password and Confirm New Password does not match</div>';



        }







        else {





          

$sql = "UPDATE tblregistration SET 

             fullname='$fullname',

             birthdate='$dob',

             email='$email',

             mobile='$mobile',

              username='$username',

              password = '$hashed_newpass',

              cpassword = '$hashed_conpass'

             WHERE id='$id'";

if ($conn->query($sql) === TRUE) {

    ?>

    <script>

     swal("Success!", "Information updated successfully!","success").then( () => {

       location.href = 'customerprofile.php'

   })

               

               </script>

               

              <?php

         } else {

             echo "Error updating record: " . $conn->error;

         }

            }

        }



?>



<script>



window.setTimeout(function() {



    $(".alert").fadeTo(500, 0).slideUp(500, function(){



        $(this).remove(); 



    });



}, 4000);







</script>

    <section class="section" id="appointment">

        <div class="container">

        <div id="layoutSidenav_content">

                <main>

                    <div class="container-fluid">

                        <h1 class="mt-4">Settings</h1>

                        <br>

    

                        <div class="card mb-4">

                            <div class="card-header"><i class="fas fa-cog mr-1"></i>Settings </div>

                            <div class="card-body">



                    

                            <?php

                            

                         

                        

       include("db.php");

 



         $Username=$_SESSION["use"];

          



         $sql = "SELECT * FROM tblregistration WHERE username='$Username'";

         $result = mysqli_query ($conn,$sql) or die (mysql_error ());

         while ($row = mysqli_fetch_array ($result)){



        

         

         ?>





 

             <br>

             

             <form method="post" action="">

                             <div class="form-group row">

                             <input type="hidden" name="id" id="id" value="<?php echo $row ['id']; ?> ">

                                 <label for="fullname" class="col-md-4 col-form-label text-md-right">Full Name</label>

                                 <div class="col-md-6">

                                     <input type="text"  class="form-control" name="fullname" id="fullname" required value="<?php echo $row ['fullname']; ?> " autofocus>

                                    

                                 </div>

                             </div>



                             <div class="form-group row">

                                 <label for="dob" class="col-md-4 col-form-label text-md-right">Date of Birth</label>

                                 <div class="col-md-6">

                                     <input type="date"  class="form-control" name="dob" id="dob" value="<?php echo strftime('%Y-%m-%d',strtotime($row['birthdate'])); ?>" >

                                 </div>

                             </div>

                             <?php

                             $bdate= $row ['birthdate'];
                                $age = date_diff(date_create($bdate), date_create('now'))->y;
                             ?>

                             <div class="form-group row">

                            <label for="age" class="col-md-4 col-form-label text-md-right">Age</label>

                            <div class="col-md-6">

                                <input type="text"  class="form-control" name="age" id="age" value="<?php echo $age ." ". "years old" ;?>" disabled >

                            </div>

                            </div>

 

            

                             <div class="form-group row">

                                 <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                                 <div class="col-md-6">

                                     <input type="email"  class="form-control" name="email" id="email" value="<?php echo $row ['email']; ?> " >

                                     <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>

                                 </div>

                             </div>

 

                              <div class="form-group row">

                                 <label for="mobile" class="col-md-4 col-form-label text-md-right">Mobile No.</label>

                                 <div class="col-md-6">

                                     <input type="text"  class="form-control" name="mobile" id="mobile" maxlength="11" value="<?php echo $row ['mobile']; ?> "  >

                                      <span class="text-danger"><?php if (isset($mobile_error)) echo $mobile_error; ?></span>

                                 </div>

                             </div>

                           

 

                             <div class="form-group row">

                                 <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>

                                 <div class="col-md-6">

                                     <input type="text"  class="form-control" name="username" id="username" value="<?php echo $row ['username']; ?> "  >

                                 </div>

                             </div>

               

                             <div class="col-md-6 offset-md-4">

                                 <input type="submit" name= "update" value="Update" class="btn btn-primary btn-block">

                             
                                 </div>

                                 </form>

                                 

                                 <?php

         

        }

         ?>




        <script>



        function Toggle() { 



        var temp = document.getElementById("newpass"); 



        if (temp.type == "password") { 



        temp.type = "text"; 



        } 



        else { 



        temp.type = "password"; 



        } 



        } 

        </script>

      








                <script>



                function Toggles() { 



                var temp = document.getElementById("conpass"); 



                if (temp.type == "password") { 



                temp.type = "text"; 



                } 



                else { 



                temp.type = "password"; 



                } 



                } 



                </script>

                    

    

</main>

<script src="assets/js/popper.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>





    <script src="assets/js/owl-carousel.js"></script>

    <script src="assets/js/scrollreveal.min.js"></script>

    <script src="assets/js/waypoints.min.js"></script>

    <script src="assets/js/jquery.counterup.min.js"></script>

    <script src="assets/js/imgfix.min.js"></script> 

    



    <script src="assets/js/custom.js"></script>

          

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

        <script src="js/scripts.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

        <script src="assets/demo/chart-area-demo.js"></script>

        <script src="assets/demo/chart-bar-demo.js"></script>

        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>

        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

        <script src="assets/demo/datatables-demo.js"></script>

  </body>

</html>