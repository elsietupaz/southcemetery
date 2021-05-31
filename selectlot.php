<?php
session_start();
      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("Location:login.php");  
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="icon.ico" />
    <title><?php echo $title; ?></title>

 
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
              
                        <li class="scroll-to-section"><a href="customerdashboard.php" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="customerprofile.php">Profile</a></li>
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
                    <center>   <h4 style ="color: black;"><?php echo $header1;?></h4></center>
                   
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

    </div>

    <br>
      <section class="section" id="select">
    <div class="container">
   

   <h1 class="mt-4" style ="color: black;">LOT</h1>
   
    <br>    
    <div class="row">
    

          
<div class="col-xl-6 col-md-6 mb-4">
  <div class="card border-left-primary shadow h-100 py-2">
    <div class="card-body">
    
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">Rent a Lot</div>
          <a href="rentlot.php#rent" class="text-xs font-weight-bold text-dark text-uppercase mb-1">Proceed</a> <i class="fas fa-angle-double-right"></i>
        </div>
        <div class="col-auto">
        <i class="fas fa-cart-arrow-down fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="col-xl-6 col-md-6 mb-4">
  <div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
        <div class="text-lg font-weight-bold text-success text-uppercase mb-1">Buy a Lot</div>
          <a href="buylot.php#buy" class="text-xs font-weight-bold text-dark text-uppercase mb-1">Proceed</a> <i class="fas fa-angle-double-right"></i>
        </div>
        <div class="col-auto">
          <i class="fas fa-cart-arrow-down fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>

    </div>
<br>

    
</main>
</section>

<script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>


    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    

    <script src="assets/js/custom.js"></script>
          
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
   
  </body>
</html>