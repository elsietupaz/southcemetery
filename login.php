<?php



     session_start();

    require_once "db.php";



if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 

                              // true then header redirect it to the home page directly 

 {

    header("Location: customerdashboard.php");

 }

 ?>



    <?php



 if (isset($_POST['Login'])) {



    $username = mysqli_real_escape_string($conn, $_POST['username']);



    $password = mysqli_real_escape_string($conn, $_POST['password']);



    



    if(!filter_var($username,FILTER_VALIDATE_EMAIL)) {



        $username_error = '<div class="alert alert-danger">Incorrect username or password.</div>';



    }



 



    $result = mysqli_query($conn, "SELECT * FROM tblregistration WHERE username = '" . $username. "'");



 if(mysqli_num_rows($result) > 0)  



 {  



      while($row = mysqli_fetch_array($result))  



      {  



           if(password_verify($password, $row["password"]))  



           {  



                //return true;  



                $_SESSION["use"] = $username;  



                header("location:customerdashboard.php");  



           }  



    else {







         $msg= '<div class="alert alert-danger">Error.</div>';



    }



}



 }



}



?>









<meta name="google-signin-client_id" content="749377290815-9612q746bph1oocq7j61ki6e3adft9dq.apps.googleusercontent.com">





<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">



<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>



<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<?php include 'db.php'; 







$query="SELECT * from tblcontent";



$result= mysqli_query($conn,$query);



while($row = mysqli_fetch_assoc($result))



{







    $title = $row['title'];



    $navtitle = $row['navtitle'];



   



    }



?>







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







    <title><?php echo $title; ?></title>



</head>



<script>

$(document).ready(function() {

    // show the alert

    setTimeout(function() {

        $(".alert").alert('close');

    }, 6000);

});

</script>



<body>







<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">



    <div class="container">



    



        <a class="navbar-brand" href="index.php"><?php echo $navtitle; ?></a>



    </div>



</nav>







 



<main class="login-form">



    <div class="cotainer">



        <div class="row justify-content-center">



            <div class="col-md-8">



                <div class="card">



                    <div class="card-header">Login</div>



                



                    <div class="card-body">



                    <?php if(isset($username_error)){







echo $username_error;



 



}







?>



                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off">



                            <div class="form-group row">



                                <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>



                                <div class="col-md-6">



                                    <input type="text" id="username" class="form-control" name="username" required autofocus>



                                    <br>



                                 



                                </div>



                            </div>







                            <div class="form-group row">



                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>



                                <div class="col-md-6">



                                    <input type="password" id="password" class="form-control" name="password" required>



                                    



                                       <input type="checkbox" onclick="myFunction()"> Show the Password



                                 



                                </div>



                            </div>







                            <div class="g-recaptcha" data-sitekey="your_site_key"></div>



<script>



function myFunction() {



var pw_ele = document.getElementById("password");



if (pw_ele.type === "password") {



pw_ele.type = "text";



} else {



pw_ele.type = "password";



}



}



</script>









<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

                            <div class="col-md-6 offset-md-4">



                                <input type="submit" class="form-control btn btn-primary" name="Login" value="Login" id="login">  

                                <br>

                           

                             

                                <br>



                                <a href="registration.php" class="form-control btn btn-link" data-toggle="modal" data-target="#my-popup">



                                   Don't have account? Register here.



                                </a>



                                



                                <a href="customerforgotpassword.php" class="form-control btn btn-link">



                                  Forgot Password?



                                </a>



                              



                            </div>



                  

                            



                            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>



<div class="modal fade" tabindex="-1" role="dialog" id="my-popup">



<div class="modal-dialog" role="document">



    <div class="modal-content">



      <div class="modal-header">



        <h4 class="modal-title">DATA PROTECTION CONSENT</h4>



      </div>



      <div class="modal-body">



        <p style="text-align: justify;">By consenting to this enhanced experience you will see content



        that is more relevant to you . Depending on your privacy settings, our partners and tools may collect and process device identifiers, 



        personal data such as personal information, location and other demographic and interest



        data about you to provide you a personalized experience.</p>







        <p style="text-align: justify;">By agreeing, you agree to process your personal data.</p>



      </div>



      <div class="modal-footer justify-content-start">



        <button type="button" onclick="javascript:window.location.href='registration.php';" class="btn btn-success btn-sm mr-auto" data-dismiss="modal">YES, I AGREE</button>



       <button type="button" onclick="javascript:window.location.href='login.php';" class="btn btn-danger btn-sm" data-dismiss="modal">NO, THANK YOU</button>



       



      </div>



    </div><!-- /.modal-content -->



  </div><!-- /.modal-dialog -->



</div><!-- /.modal -->



 

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