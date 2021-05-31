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
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    
    <link rel="shortcut icon" href="icon.ico" />
    <title><?php echo $title; ?></title>

 
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/templatemo-art-factory.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">

    </head>
    
    <body id="page-top">

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
                    <a class="logo" href="index.php" style="font-size:15px; margin-left: 10px;"><?php echo $navtitle; ?></a>
                    
                     
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php#welcome">Home</a></li>
                            <li class="scroll-to-section"><a href="management.php#features">Management</a></li>
                             <li class="scroll-to-section"><a href="login.php">Sign In</a></li>
                            <li class="scroll-to-section"><a href="faqs.php#faqs">FAQS</a></li>
                            <li class="scroll-to-section"><a href="index.php#about">About</a></li>
                            <li class="scroll-to-section"><a href="contactus.php#contact-us" class="active">Contact Us</a></li>
                          
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
    <br>
  
    <section class="section" id="contact-us">
    
    <div class="col-lg-12">
        <div class="section-heading">
            <h2>Contact Us</h2>
        </div>
    </div>
    <div class="offset-lg-3 col-lg-6">
        <div class="section-heading">
            <p>For all inquiries/questions, please email us using this form below.</p>
        </div>
    </div>
</div>
<br>
<div class="container-fluid">
<div class="row">
  
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div id="map">
       
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.585315232061!2d121.01718651431983!3d14.565690681837419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9a7a83cf46f%3A0xc88ee72b1afd7503!2sManila%20South%20Cemetery!5e0!3m2!1sen!2sph!4v1582360148773!5m2!1sen!2sph" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>


    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="contact-form">
        <form method="POST" action="">
              <div class="row">
              <input type="hidden" name="id" id="id">
                <div class="col-lg-12">
              
                    <input name="email" type="email" id="email" placeholder="Email Address" required="" class="contact-field">
                  
                </div>
                <div class="col-lg-12">
                 
                    <textarea name="message" rows="6" id="message" placeholder="Your Message" required="" class="contact-field"></textarea>
                 
                </div>
                <div class="col-lg-12">
                 
                    <button type="submit" name="insert" id="insert" class="main-button">Send</button>
                
                
                </div>
                </form>
            
              </div>
    
        </div>
    </div>
 
</div>
</div>
<br>
<a href="#page-top" class="btn btn-light btn-lg page-top" role="button" style="float:right; margin-right:10px;"><i class="fas fa-chevron-up"></i></a>
<?php
require_once "db.php";
if(isset($_POST['insert'])){
$email = $_POST['email'];
$message = $_POST['message'];
$sql = "INSERT INTO tblcontact (email, message) VALUE ('$email', '$message')";
if ($conn->query($sql) === TRUE) {
echo "<script type='text/javascript'>alert('Questions/Inquiries successfully sent!');</script>";
echo '<script>window.location.href="contactus.php#contact-us"</script>';
} else {
echo "Error inserting record: " . $conn->error;
}
}
?>
</section>

<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="106886211248656">
      </div>
    

<footer>
<div class="container">
<div class="row">
    <div class="col-lg-7 col-md-12 col-sm-12">
        <p class="copyright">Copyright &copy; <span id="year"></span>  <?php echo $title; ?>

    </div>
    <div class="col-lg-5 col-md-12 col-sm-12">
        <ul class="social">
            <li><a href="https://www.facebook.com/manilasouthcemetery2020/"><i class="fa fa-facebook"></i></a></li>
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

</body>
</html>