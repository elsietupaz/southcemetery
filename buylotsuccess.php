<?php
session_start();
      if(!isset($_SESSION['use']))
       {
           header("Location:customerlogin.php");  
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
    <title>Manila South Cemetery</title>

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
                      
                        <a href="customerselect.php" class="logo">MSC</a>
                      
                        <ul class="nav">
                        <li class="scroll-to-section"><a href="customerselect.php">Home</a></li>
                            <li class="scroll-to-section"><a href="yearslotpayment.php" class="active">Buy Lot</a></li>
                            <li class="scroll-to-section"><a href="customerprofile.php">Profile</a></li>
                            <li class="scroll-to-section"><a href="logout.php">Logout</a></li>
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
                     <center>   <h4>Cemetery Management System for Manila South Cemetery</h4></center>
                     <br>
                        <p style="text-align:justify"> The Cemetery Management for Manila South Cemetery allow to plot and display the location of graves with an intuitive interface. With our 2D Mapping visitors and new staff members can quickly find graves without assistance or 
                            explore cemeteries at groundlevel right from their devices.</p>
                       
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="assets/images/south.jpg" class="rounded img-fluid d-block mx-auto" alt="First Vector Graphic">
                    </div>
                </div>
            </div>
        </div>
      
    </div>

    <section class="section" id="appointment">
        <div class="container">
        <?php
require_once 'buylotconfigpaypal.php';
 
// Once the transaction has been approved, we need to complete it.
if (array_key_exists('paymentId', $_GET) && array_key_exists('PayerID', $_GET)) {
    $transaction = $gateway->completePurchase(array(
        'payer_id'             => $_GET['PayerID'],
        'transactionReference' => $_GET['paymentId'],
    ));
    $response = $transaction->send();
 
    if ($response->isSuccessful()) {
        // The customer has successfully paid.
        $arr_body = $response->getData();
 
        $payment_id = $arr_body['id'];
        $payer_id = $arr_body['payer']['payer_info']['payer_id'];
        $payer_email = $arr_body['payer']['payer_info']['email'];
        $amount = $arr_body['transactions'][0]['amount']['total'];
        $currency = PAYPAL_CURRENCY;
        $payment_status = $arr_body['state'];
 
        // Insert transaction data into the database
        $isPaymentExist = $db->query("SELECT * FROM yearpayments WHERE payment_id = '".$payment_id."'");
 
        if($isPaymentExist->num_rows == 0) { 
            $insert = $db->query("INSERT INTO yearpayments(payment_id, payer_id, payer_email, amount, currency, payment_status, payment_date) VALUES('". $payment_id ."', '". $payer_id ."', '". $payer_email ."', '". $amount ."', '". $currency ."', '". $payment_status ."', NOW())");
        }
    } else {
        echo $response->getMessage();
    }
} else {
    echo 'Transaction is declined';
}
?>
<br>
<br>
<style>
#printableArea {
  width: 400px;
  padding: 10px;
  border: 1px solid black !important;
  margin: 0;
}
</style>
<div id="printableArea">
<b><center>MANILA SOUTH CEMETERY</b>
<br>
<i>South Avenue, Manila, Metro Manila</i>
<br>
<br>
<b>------------MSC Official Receipt------------</b>
<br>
<b>Your payment is successful!</b></center>
<br>
<b>Transaction ID:</b> <?php echo $payment_id; ?>
<br>
<b>Payer ID:</b> <?php echo $payer_id; ?>
<br>
<b>Email Address:</b> <?php echo $payer_email; ?>
<br>
<b>Amount:</b> <?php echo $currency , $amount; ?>
<br>
<b><center>------------MSC Official Receipt------------</b></div></center>
<br>
<input type="button" class="form-control btn-success" onclick="printDiv('printableArea')" value="Print"/>
<br>
<br>
<a href="yearslotpayment.php">Back to Buy Lot</a>
<br>
<br>
<a href="buylotsubmitdocu.php">Submit Documents</a>
<br>
<br>
<script>
function printDiv(printableArea) {
     var printContents = document.getElementById(printableArea).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
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

  </body>
</html>