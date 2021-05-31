<?php

session_start();

      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page

       {

           header("Location:login.php");  

       }

       ?>





  



 

<script>

window.setTimeout(function() {

$(".alert").fadeTo(500, 0).slideUp(500, function(){

  $(this).remove(); 

});

}, 4000);



</script>



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

  

    <section class="section" id="info">

    

    <div class="container">

   <h1 class="mt-4">GCASH</h1>

                       <br>

                       <?php if(isset($msg)){



echo $msg;





}



?>



<?php if(isset($errmsg)){



echo $errmsg;





}



?>



                       <div class="card mb-4">

                            <div class="card-header"><i class="fas fa-file mr-1"></i> INFORMATION/S</div>

                            <div class="card-body">



			

        <form action="" method="post" enctype="multipart/form-data">

            <input type="hidden" name="id" id="id">

        

            <div class="form-group">

                <label for="refnum">Reference Number</label>

                <input type="text" maxlength="13" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="refnum" id="refnum" required>

            </div>

            

            <div class="form-group">

                <label for="name">Customer's Name</label>

                <input type="text" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32) || (event.charCode == 44))' class="form-control" name="name" id="name" required>

            </div>



            <div class="form-group">

                <label for="mobile">Mobile Number</label>

                <input type="text" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="mobile" id="mobile" required>

            </div>



            <div class="form-group">

                <label for="amount">Amount</label>

                <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="currency form-control" name="amount" id="amount" required>

            </div>

            <div class="form-group">

                <label for="date">Date</label>

                <input type="date" class="form-control" name="date" id="date" value="<?php echo date('Y-m-d'); ?>" readonly>

            </div>



            <div class="form-group">

                <label for="receipt">Upload GCash Receipt</label>

                <input type="file" name="receipt" id="receipt" class="form-control-file" required>

            </div>

            <form action="#" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">

                     

                    <input type="checkbox" name="checkbox" value="check" id="agree" required /> I have read and agree to the <a target="_blank" rel="noopener noreferrer" href="MANILA-SOUTH-CEMETERY-TERMS-AND-CONDITION.pdf" class="btn-link">Terms and Condition</a> and <a target="_blank" rel="noopener noreferrer" href="MANILA-SOUTH-CEMETERY-PRIVACY-POLICY.pdf" class="btn-link"> Privacy Policy</a>

                                              <br>

                      <br>

            <button type="submit" id="submit" name="submit" class="btn btn-block btn-success">Submit</button>

        </form>

        </form>

      
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php 

// Include the database configuration file  

require_once 'dbcon.php'; 

 

if(isset($_POST["submit"])){ 

    $id = $_POST['id'];

    $refnum = $_POST['refnum'];

    $name = $_POST['name'];

    $mobile = $_POST['mobile'];

    $amount = $_POST['amount'];

    $date = $_POST['date'];

    



    if(!empty($_FILES["receipt"]["name"])) { 

        // Get file info 

        $fileName = basename($_FILES["receipt"]["name"]); 

        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 

         

        // Allow certain file formats 

        $allowTypes = array('jpg','png','jpeg','gif'); 

        if(in_array($fileType, $allowTypes)){ 

            $image = $_FILES['receipt']['tmp_name']; 

            $imgContent = addslashes(file_get_contents($image)); 

         

            // Insert image content into database 

            $insert = $conn->query("INSERT INTO gcashrentalpayments(reference_number, customer_name, mobile, amount, date, imgreceipt) VALUES ('$refnum', '$name', '$mobile', '$amount', '$date', '$imgContent')");

             

            if($insert){ 

               ?>

                <script>

                swal("Success!", "Information updated successfully!","success").then( () => {

                location.href = 'rentsubmitdocu.php'

                })

          

          </script>
          <?php

            }else{ 

                $errmsg= '<div class="alert alert-danger">Documents upload failed, please try again.</div>'; 

            }  

        }else{ 

            $errmsg= '<div class="alert alert-danger">Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.</div>';  

        } 

    }

} 

 

?>

      



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

        <script>

function formatNumber(e){
  var rex = /(^\d{2})|(\d{1,3})(?=\d{1,3}|$)/g,
      val = this.value.replace(/^0+|\.|,/g,""),
      res;
      
  if (val.length) {
    res = Array.prototype.reduce.call(val, (p,c) => c + p)            // reverse the pure numbers string
               .match(rex)                                            // get groups in array
               .reduce((p,c,i) => i - 1 ? p + "," + c : p + "." + c); // insert (.) and (,) accordingly
    res += /\.|,/.test(res) ? "" : ".0";                              // test if res has (.) or (,) in it
    this.value = Array.prototype.reduce.call(res, (p,c) => c + p);    // reverse the string and display
  }
}

var ni = document.getElementById("amount");

ni.addEventListener("keyup", formatNumber);

</script>


        <script src="js/scripts.js"></script>

   


        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>

        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

        <script src="assets/demo/datatables-demo.js"></script>

        

  </body>

</html>