<?php
   require_once "db.php";
   if(isset($_GET['email'])){
    $email = mysqli_real_escape_string($conn, $_GET['email']);
    $query = "select * from adminreg where email='$email'";
    $run = mysqli_query($conn,$query);
    if(mysqli_num_rows($run)>0){
        $row=mysqli_fetch_array($run);
        $id  =$row['id'];
        $email = $row['email'];
    }
   }
    if (isset($_POST['submit'])) {
        
     
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
        $hashed_cpassword = password_hash($cpassword, PASSWORD_DEFAULT);
        
        
        if(strlen($password) < 6) {
            $password_error = '<div class="alert alert-danger">Password must be minimum of 6 characters</div>';
        }       
        if($password != $cpassword) {
            $confirmpassword_error = '<div class="alert alert-danger">Password and Confirm Password doesnt match</div>';
        }
       
        else {
       
        $query1 ="UPDATE adminreg SET password = '".$hashed_password."', cpassword = '".$hashed_cpassword."' WHERE id = '$_POST[id]'";
        $result= mysqli_query($conn, $query1);
       
        if($result){
            $msg= '<div class="alert alert-success">Your password has been updated!</div>';
            
            
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
                        <div class="card-header">Change Password</div>
                        <div class="card-body">
                              <?php if(isset($msg)){

echo $msg;
}

?>
  <?php if(isset($password_error)){

echo $password_error;
}

?>
  <?php if(isset($confirmpassword_error)){

echo $confirmpassword_error;
}

?>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off">
                        
                            <input type="hidden" name="id" id="id" value="<?php echo $row ['id']; ?> ">

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                    <input type="checkbox" onclick="Toggle()"> Show Password
                                     
                                </div>
                            </div>

                                 <div class="form-group row">
                                <label for="cpassword" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="cpassword" class="form-control" name="cpassword"  required>
                                    <input type="checkbox" onclick="Toggles()"> Show Password
                                     
                                </div>
                            </div>
                        


                                <div class="col-md-6 offset-md-4">
                                    <input type="submit" class="btn btn-block btn-primary" name="submit" id="submit" value="Change Password">

                
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script>
                        function Toggle() { 
            var temp = document.getElementById("password"); 
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
            var temp = document.getElementById("cpassword"); 
            if (temp.type == "password") { 
                temp.type = "text"; 
            } 
            else { 
                temp.type = "password"; 
            } 
        } 


                        </script>
    </main>




    </body>
    </html>