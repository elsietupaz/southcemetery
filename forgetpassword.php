<?php
 require 'phpmailer/PHPMailerAutoload.php';
 require 'phpmailer/class.phpmailer.php';

   require_once "db.php";
   
    if (isset($_POST['forgot'])) {
       
        $email = mysqli_real_escape_string($conn, $_POST['email']);
       
        $result = mysqli_query($conn, "SELECT * FROM adminreg WHERE email = '" . $email. "'");
       $count= mysqli_num_rows($result);
       $data= mysqli_fetch_array($result);

       $idData = $data['id'];
       $emailData = $data['email'];
       $nameData = $data['firstname'];

       $url ='http://'.$_SERVER['SERVER_NAME'].'/adminchangepassword.php?id='.$idData.'&email='.$emailData;

      $output = 'Hi, Please click this link to reset your password.<br>'.$url;

       if($email == $emailData) {

        $mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'manilasouthcemetery1920@gmail.com';                 // SMTP username
$mail->Password = 'manilasouthcemetery';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;    
                                // TCP port to connect to

$mail->setFrom('manilasouthcemetery1920@gmail.com', 'Manila South Cemetery');
$mail->addAddress($email, $nameData);     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'MSC Reset Password';
$mail->Body    = $output;


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    $msg= '<div class="alert alert-success">We have just sent you a link to reset your password.</div>';
}

       }else{
           $errMsg='<div class="alert alert-danger">Your email address invalid!</div>';
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

<?php 
   include 'db.php'; 

$queries="SELECT * from tbladmincontent";
$results= mysqli_query($conn,$queries);
while($rows = mysqli_fetch_assoc($results))
{
 $aid = $rows['aid'];
 $nav = $rows['navtitles'];
}
?>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <!doctype html>
    <html lang="en">
    <head>
 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="icon.ico" />

        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="css/style.css">

        <link rel="icon" href="Favicon.png">

   
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="shortcut icon" href="icon.ico" />
        <title><?php echo $nav; ?></title>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
        <a class="navbar-brand" href="adminlogin.php"><?php echo $nav; ?></a>
        </div>
    </nav>


    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                   
                        <div class="card-header">Forgot Password</div>
                        <div class="card-body">
                        <p>Please enter your email address. We will send you a link to reset your password.</p>
                        <?php if(isset($msg)){

echo $msg;


}

?>
<?php if(isset($errMsg)){

echo $errMsg;
}

?>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off">
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                    <div class="col-md-6">
                                        <input type="email" id="email" class="form-control" name="email" required autofocus>
                                        
                                    </div>
                                </div>

                        


                                <div class="col-md-6 offset-md-4">
                                    <input type="submit" class="btn btn-block btn-primary" name="forgot" value="Send Reset Link">

                
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>




    </body>
    </html>