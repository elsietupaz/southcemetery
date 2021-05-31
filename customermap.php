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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="icon.ico" />

    <title><?php echo $title; ?></title>


    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/templatemo-art-factory.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">

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
           
                    <a href="index.php" class="logo"><?php echo $navtitle; ?></a>
                   
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php#welcome">Home</a></li>
                            <li class="scroll-to-section"><a href="index.php#about">About</a></li>
                            <li class="scroll-to-section"><a href="index.php#features">Features</a></li>
                            <li class="scroll-to-section"><a href="index.php#frequently-question">FAQ's</a></li>
                            <li class="scroll-to-section"><a href="search.php">Search</a></li>
                            <li class="scroll-to-section"><a href="customermap.php" class="active">Map</a></li>
                            <li class="scroll-to-section"><a href="index.php#contact-us">Contact Us</a></li>
                            <li class="scroll-to-section"><a href="customerlogin.php">Sign In</a></li>
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
                        <img src="assets/images/south.jpg" class="rounded img-fluid d-block mx-auto" alt="First Vector Graphic">
                    </div>
                </div>
            </div>
        </div>

    </div>

<br>


<div class="container mt-3">

<h1>Map</h1>
<br>

<h1>UNDER DEVELOPMENT</h1>
            </div>
            
     
      
<br>
    

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12">
                <p class="copyright">Copyright &copy; <span id="year"></span>  <?php echo $title; ?>
            
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/MNLSouthCemetery/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.gmail.com"><i class="fa fa-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    

    <script src="assets/js/jquery-2.1.0.min.js"></script>
    <script>
    document.getElementById("year").innerHTML = new Date().getFullYear();
</script>



    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>





    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    
 
    <script src="assets/js/custom.js"></script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>


  </body>
</html>