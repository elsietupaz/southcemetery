<?php
session_start();
      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("Location:customerlogin.php");  
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

 
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/templatemo-art-factory.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">
    

        <script src='//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.3/moment.min.js'></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
     
        <script src='js/bootstrap-colorpicker.min.js'></script>
        <script src='js/bootstrap-timepicker.min.js'></script>
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

    </div>
    
    <div class="modal" tabindex="-1" role="dialog" id="consent">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">DATA PROTECTION CONSENT</h5>
      
      </div>
      <div class="modal-body">
        <p style="text-align: justify;">By consenting to this enhanced experience you will see content
        that is more relevant to you.Depending on your privacy settings, our partners and tools may collect and process device identifiers, 
        personal data such as personal information, location and other demographic and interest
        data about you to provide you a personalized experience.</p>
<br>
<br>
        <p style="text-align: justify;">By agreeing, you agree to process your personal data.</p>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-success btn-sm mr-auto" data-dismiss="modal">YES, I AGREE</button>



       <button type="button" onclick="javascript:window.location.href='customerotherpayment.php#balance';" class="btn btn-danger btn-sm" data-dismiss="modal">NO, THANK YOU</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    $(function(){
        //instantiate your content as modal
        $('#consent').modal({
            //modal options here, like keyboard: false for e.g.
        });

        //show the modal when dom is ready
        $('#consent').modal('show');
    });
</script>
  
    <section class="section" id="other">
    <br>
    <div class="container">
   <h1 class="mt-4">GCASH PAYMENT</h1>
                       <br>
                     

                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-list mr-1"></i> SCAN-TO-PAY</div>
                            <div class="card-body">
                <br>
               <center> <img src="payguide.png" width="300" height="300"/> <img src="scan.png" width="300" height="300"/></center>
               <br>
            
               <a href="othergcashinfo.php#info" style="float: right;">Next Step >></a>
               
                    <br>

    </div>
    </div>
    </div>
    </div>

    
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