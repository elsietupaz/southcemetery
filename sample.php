<?php

session_start();

      if(!isset($_SESSION['admin'])) // If session is not set then redirect to Login Page

       {

         header("Location:adminlogin.php");  

       }

       ?>



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

<!DOCTYPE html>

<html lang="en">



<head>



  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">

  <meta name="author" content="">

  <link rel="shortcut icon" href="icon.ico" />

  <title><?php echo $nav; ?> List of Appointments</title>



  <!-- Custom fonts for this template-->

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

 

  <!-- Custom styles for this template-->

  <link href="css/sb-admin-2.min.css" rel="stylesheet">



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css" integrity="sha512-aV/CBF2tMLcys/fQfJ+0vGZRrPYRrA0KNuwqpdaSz9RCmWQIjrdybgvvHxRnzohAFV0e1B5EsnHR6W3XnH7ryg==" crossorigin="anonymous" />



</head>



<body id="page-top">



  <!-- Page Wrapper -->

  <div id="wrapper">



    <!-- Sidebar -->

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">



      <!-- Sidebar - Brand -->

      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">

          <i class="fas fa-user"></i>

           <div class="sidebar-brand-text mx-3"><?php echo $nav; ?></div>

      </a>



      <!-- Divider -->

      <hr class="sidebar-divider my-0">



      <!-- Nav Item - Dashboard -->

      <li class="nav-item">

        <a class="nav-link" href="dashboard.php">

          <i class="fas fa-fw fa-tachometer-alt"></i>

          <span>Dashboard</span></a>

      </li>



      <!-- Divider -->

     



      <!-- Nav Item - Charts -->

      <li class="nav-item active">

        <a class="nav-link" href="listofappointment.php">

          <i class="fas fa-fw fa-calendar"></i>

          <span>List of Appointments</span></a>



      </li>

      

         <li class="nav-item">

        <a class="nav-link" href="announcement.php">

          <i class="fas fa-fw fa-bullhorn"></i>

          <span>Create Announcement</span></a>



      </li>



      <!-- Nav Item - Tables -->

      <li class="nav-item">

        <a class="nav-link" href="users.php">

          <i class="fas fa-fw fa-user"></i>

          <span>Users</span></a>

      </li>



      <li class="nav-item">

        <a class="nav-link" href="deceasedinfo.php">

          <i class="fas fa-fw fa-book"></i>

          <span>Deceased Information</span></a>

      </li>



      <li class="nav-item">

        <a class="nav-link" href="notification.php">

          <i class="fas fa-fw fa-sms"></i>

          <span>Notification</span></a>

      </li>



      <li class="nav-item">

        <a class="nav-link" href="contract.php">

          <i class="fas fa-fw fa-file-contract"></i>

          <span>Contract</span></a>

      </li>



      <li class="nav-item">

        <a class="nav-link" href="gcash.php">

        <i class="fas fa-fw fa-money-check"></i>

          <span>Payments</span></a>

      </li>

      

      <li class="nav-item">

        <a class="nav-link" href="balance.php">

        <i class="fas fa-fw fa-money-bill-alt"></i>

          <span>Balance</span></a>

      </li>





      <li class="nav-item">

        <a class="nav-link" href="map.php">

          <i class="fas fa-fw fa-map"></i>

          <span>Map</span></a>

      </li>



      <li class="nav-item">

        <a class="nav-link" href="inquiries.php">

          <i class="fas fa-fw fa-question-circle"></i>

          <span>Customer's Inquiries</span></a>

      </li>



      <li class="nav-item">

        <a class="nav-link" href="faq.php">

          <i class="fas fa-fw fa-question"></i>

          <span>FAQ</span></a>

      </li>



      <li class="nav-item">

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1" aria-expanded="true" aria-controls="collapseUtilities1">

          <i class="fas fa-fw fa-dollar-sign"></i>

          <span>Lot Prices</span>

        </a>

        <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">

          <div class="bg-white py-2 collapse-inner rounded">

          <h6 class="collapse-header">Prices</h6>

            <a class="collapse-item" href="rentlotprice.php">Rent</a>

            <a class="collapse-item" href="buylotprice.php">Buy</a>

          </div>

        </div>

      </li>



      <li class="nav-item">

        <a class="nav-link" href="gcashsales.php">

        <i class="fas fa-fw fa-chart-bar"></i>

          <span>Monthly Sales</span></a>

      </li>



      <li class="nav-item">

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities3" aria-expanded="true" aria-controls="collapseUtilities3">

          <i class="fas fa-fw fa-archive"></i>

          <span>Archive</span>

        </a>

        <div id="collapseUtilities3" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">

          <div class="bg-white py-2 collapse-inner rounded">

          <h6 class="collapse-header">Data</h6>

            <a class="collapse-item" href="archivedeceased.php">Deceased Information</a>

            <a class="collapse-item" href="archiverentlot.php">Rent Lot Price</a>

            <a class="collapse-item" href="archivebuylot.php">Buy Lot Price</a>

            <a class="collapse-item" href="archiveinquiries.php">Customer's Inquiries</a>

            <a class="collapse-item" href="archivefaq.php">FAQ</a>

            <a class="collapse-item" href="gcasharchive.php">GCash Payments</a>

          </div>

        </div>

      </li>



      <li class="nav-item">

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities4" aria-expanded="true" aria-controls="collapseUtilities4">

          <i class="fas fa-fw fa-file"></i>

          <span>Submitted Documents</span>

        </a>

        <div id="collapseUtilities4" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">

          <div class="bg-white py-2 collapse-inner rounded">

          <h6 class="collapse-header">Lot</h6>

            <a class="collapse-item" href="rentsubmittedform.php">Rent</a>

            <a class="collapse-item" href="buylotsubmittedform.php">Buy</a>

          </div>

        </div>

      </li>



      <!-- Divider -->

      <hr class="sidebar-divider d-none d-md-block">



      <!-- Sidebar Toggler (Sidebar) -->

      <div class="text-center d-none d-md-inline">

        <button class="rounded-circle border-0" id="sidebarToggle"></button>

      </div>



    </ul>

    <!-- End of Sidebar -->



    <!-- Content Wrapper -->

    <div id="content-wrapper" class="d-flex flex-column">



      <!-- Main Content -->

      <div id="content">



        <!-- Topbar -->

        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">



          <!-- Sidebar Toggle (Topbar) -->

          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">

            <i class="fa fa-bars"></i>

          </button>



        

          <!-- Topbar Navbar -->

          <ul class="navbar-nav ml-auto">



            



            <!-- Nav Item - Alerts -->

            <li class="nav-item dropdown no-arrow mx-1">

              

              

              <!-- Dropdown - Alerts -->

              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">

                

                



          

             





            <!-- Nav Item - User Information -->

            <li class="nav-item dropdown no-arrow">

              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hello, <?php echo $_SESSION['admin']; ?>!</span>



              </a>

              <!-- Dropdown - User Information -->

              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <a class="dropdown-item" href="adminsettings.php">

                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>

                  Settings

                </a>



                

                <a class="dropdown-item" href="indexcontentmanager.php">

                  <i class="fas fa-file fa-sm fa-fw mr-2 text-gray-400"></i>

                  Content Manager

                </a>



            

              

                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">

                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>

                  Logout

                </a>

              </div>

            </li>



          </ul>



        </nav>

        <!-- End of Topbar -->



        <!-- Begin Page Content -->

        <div class="container-fluid">

        <div class="row">

                <div class="col-lg-12">

                    <div class="section-heading">

                    <h1 class="mt-4">List of Appointment</h1>

                    </div>

                </div>

                <div class="offset-lg-3 col-lg-6">

                    <div class="section-heading">

                        

                   

                    </div>

                </div>

            </div>

            <br>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Email Confirmation of Appointment
</button>
<br>
<br>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">APPOINTMENT CONFIRMATION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">

  

<input type="hidden" name="aid" id="aid" value=<?php echo $aid; ?>>



<div class="form-group row">

<label for="email">Email Address</label>

<input type="email" id="email" class="form-control" name="email">

</div>



<div class="form-group row">

<label for="message">Message</label>

<textarea class="form-control" style="resize: none;" rows="5" id="message" name="message" ></textarea>

</div>

</div>
      </div>
      <div class="modal-footer">
      <input type="submit" name= "send" id="send" value="Send Confirmation" class="btn btn-success">
      </div>
      </form>
    </div>
  </div>
</div>




    
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

            <?php

 require 'phpmailer/PHPMailerAutoload.php';

 require 'phpmailer/class.phpmailer.php';



 

   

    if (isset($_POST['send'])) {

       

  $email = $_POST['email'];

  $output = $_POST['message'];





        $mail = new PHPMailer;



//$mail->SMTPDebug = 3;                               // Enable verbose debug output



$mail->isSMTP();                                      // Set mailer to use SMTP

$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers

$mail->SMTPAuth = true;                               // Enable SMTP authentication

$mail->Username = 'manilasouthcemetery1920@gmail.com';                 // SMTP username

$mail->Password = 'manilasouthcemetery';                           // SMTP password

$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted

$mail->Port = 465;     

                                // TCP port to connect to



$mail->setFrom('manilasouthcemetery1920@gmail.com', 'Manila South Cemetery');

$mail->addAddress($email);     // Add a recipient



                              

$mail->isHTML(true);    



$mail->Subject = 'APPOINTMENT CONFIRMATION';

$mail->Body    = $output;





if(!$mail->send()) {

    echo 'Message could not be sent.';

    echo 'Mailer Error: ' . $mail->ErrorInfo;

} else{

  ?>

  <script>

   swal("Success!", "Email has been sent!","success").then( () => {

     location.href = 'listofappointment.php'

 })

             

             </script>

             

            <?php



}

       }

    

?>

           

          



            <div class="booking">

       

<div id='calendar'></div>

  <button style="display: none" type="button" id="btnModal" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>





  <div class="modal fade" id="myModal" role="dialog">

      <div class="modal-dialog">



   

          <div class="modal-content">

              <div class="modal-header">

              <h4 class="modal-title">Book Appointment</h4>

                  <button type="button" class="close" data-dismiss="modal">&times;</button>

                

              </div>

              <div class="modal-body">

                  <form>

                      <div class="form-group">

                          <label for="txtTitle">Fullname:</label>

                          <input type="text" name="txtTitle" class="form-control" id="txtTitle">

                      </div>

                      <div class="form-group">

                      <label for="txtEmail">Email Address: </label>

                      <input type="text" name="txtEmail" class="form-control" id="txtEmail">

                      </div>

                      

                  

              </div>

              <div class="modal-footer">
              <button type="button" id="btnBook" class="btn btn-success">Set Appoitment</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                 

</form>

           
          </div>


          </div>

</div>

</div>

    </div>

    

    <script src="vendor/jquery/jquery.min.js"></script>

  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/gcal.min.js" integrity="sha512-7a/GdV+Yb2nLt7zgXbufsOsTJ3NHu4zF1Vdtsn50oRjdeVwAU8EcE4twos9YAnj9MhpvFnEewM4QsbLhSeAH0w==" crossorigin="anonymous"></script>

 

  
    <script>

$(document).ready(function() {

    

    $('#calendar').fullCalendar({

        googleCalendarApiKey: 'AIzaSyDI3ueXNIn4tRLJ6KM6YwmA7uPNFHODwQA',

eventSources: [
{ googleCalendarId: 'en.philippines#holiday@group.v.calendar.google.com',
color: 'red',   // an option!
textColor: 'white'
}

],
eventClick: function(event) {
if (event.url) {
if (event.url.includes('google.com')){
  return false;
}
console.log(event.url.includes('google.com'));

}
},

slotLabelFormat:"hh:mm",

        header: {

            left: 'prev,next today',

            center: 'title',

            right: 'month, agendaWeek'

        },

        eventTextColor: 'black',

        businessHours:

{



        daysOfWeek: [ 0, 1, 2, 3, 4, 5, 6 ], // Monday - Thursday



startTime: '08:00', // a start time (10am in this example)

endTime: '18:00', // an end time (6pm in this example)

},

        defaultDate: new Date(),

        defaultView: 'agendaWeek', 

        selectLongPressDelay: 25,

        allDaySlot: false,

            height: 'auto',

            minTime: '8:00:00',

            maxTime: '17:00:00',



        editable: true,

        events:'data.php',

        longPressDelay: 1,

        selectable:true,

        selectHelper:true,

        selectAllow: function(info) {

if (info.start.isBefore(moment()))

    return false;

return true;          

},

eventRender: function (event, element, view) {
element.find('.fc-title').append('<div class="hr-line-solid-no-margin"></div><span style="font-size: 10px">' + event.email + '</span></div>');
},

        select: function(start, end, allDay)

        {

            var start = moment(start).format('YYYY-MM-DD HH:mm:ss');

            var end = moment(end).format('YYYY-MM-DD HH:mm:ss');



            sessionStorage.setItem('start_date', start);

            sessionStorage.setItem('end_date', end);

            $("#btnModal").trigger("click");

        },

    });
    

    $("#btnBook").click(function(){

        var txtTitle = $("#txtTitle").val();

        var txtEmail = $("#txtEmail").val();

        if(txtTitle && txtEmail)

        {

            $.ajax({

                url:"insert_data.php",

                type:"POST",

                data:{title:txtTitle,email:txtEmail,start:sessionStorage.getItem('start_date'),end:sessionStorage.getItem('end_date')},

                success:function(data)

                {

                  

                    if(data == "success")

                    {
                        

                        sessionStorage.setItem('start_date', "");

                        sessionStorage.setItem('end_date', "");

                        window.location.reload();

                        

                    }

                }
                

            })

        }

        
    

});



</script>
          

      





    



      </div>

      <!-- End of Main Content -->

      <?php include 'db.php'; 



$query="SELECT * from tblcontent";

$result= mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))

{



    $title = $row['title'];

    

    }

?>

<br>

      <!-- Footer -->

     

      <!-- End of Footer -->



    </div>

    <!-- End of Content Wrapper -->



  </div>
  

  <!-- End of Page Wrapper -->



  <!-- Scroll to Top Button-->

  <a class="scroll-to-top rounded" href="#page-top">

    <i class="fas fa-angle-up"></i>

  </a>



  <!-- Logout Modal-->

  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>

          <button class="close" type="button" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">×</span>

          </button>

        </div>

        <div class="modal-body">Are you sure you want to logout?</div>

        <div class="modal-footer">

          <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>

          <a class="btn btn-success" href="login.php">Logout</a>

        </div>

      </div>

    </div>

  </div>



  



  <!-- Core plugin JavaScript-->

  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>



  <!-- Custom scripts for all pages-->

  <script src="js/sb-admin-2.min.js"></script>



  <script>

    document.getElementById("year").innerHTML = new Date().getFullYear();

</script>





</body>



</html>

