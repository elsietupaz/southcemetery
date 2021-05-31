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

  <title><?php echo $nav; ?> GCash Buy Lot Payments</title>



  <!-- Custom fonts for this template-->

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">



  <!-- Custom styles for this template -->

  <link href="css/sb-admin-2.min.css" rel="stylesheet">



  <!-- Custom styles for this page -->

  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">



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

     



   

      <li class="nav-item">

        <a class="nav-link" href="listofappointment.php">

          <i class="fas fa-fw fa-calendar"></i>

          <span>List of Appointments</span></a>



      </li>

      

         <li class="nav-item">

        <a class="nav-link" href="announcement.php">

          <i class="fas fa-fw fa-bullhorn"></i>

          <span>Create Announcement</span></a>



      </li>





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



      <li class="nav-item active">

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



        <div class="card shadow mb-4">

            <div class="card-header py-3">

              <h6 class="m-0 font-weight-bold text-primary">GCash Buy A Lot Payments</h6>

            </div>

            <div class="card-body">

       

                            

              <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  <thead>

                    <tr>

                    <th>ID</th>

                    <th>Reference Number</th>

                    <th>Customer's Name</th>

                    <th>Mobile Number</th>

                    <th>Amount</th>

                    <th>Date</th>

                    <th>Receipt</th>

                    <th>Action</th>

                    </tr>

                  </thead>

                  <tfoot>

                    <tr>

                    <th>ID</th>

                    <th>Reference Number</th>

                    <th>Customer's Name</th>

                    <th>Mobile Number</th>

                    <th>Amount</th>

                    <th>Date</th>

                    <th>Receipt</th>

                    <th>Action</th>

                    </tr>

                  </tfoot>

                  <tbody>

                  <?php

                                require_once "dbcon.php";

                                $sql = "SELECT * FROM gcashyearlypayments";

                                $result = $conn->query($sql);

                                if (!empty($result) && $result->num_rows > 0) {

               

                        while($row = $result->fetch_assoc()) {

                            

                            $id= $row['id'];

                            $refnum= $row['reference_number'];

                            $custname= $row['customer_name'] ;

                            $mobile= $row['mobile'] ;

                            $amount= $row['amount'];

                            $date= $row['date'];

                                      ?>

                                      

                      <td><?php echo  $id ?></td>

                      <td><?php echo  $refnum ?></td>

                      <td><?php echo  $custname ?></td>

                      <td><?php echo  $mobile ?></td>

                       <td><?php echo '₱' ."&nbsp;". $amount ?></td>

                      <td><?php echo  $date ?></td>

                      <td> <img id="imageresource" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['imgreceipt']); ?>" width="250" height="400" /></td>

                      <td>

                            <button type='button' class='btn btn-warning btn-sm btn-block editbtn'><i class="fas fa-edit"></i> Edit</button>

                            <button type='button' class='btn btn-success btn-sm btn-block viewbtn'><i class="fas fa-eye"></i> View Receipt</button>

                            <button type='button' class='btn btn-info btn-sm btn-block notifybtn'><i class="fas fa-bell"></i> Notify</button>

                            <button type='button' class='btn btn-danger btn-sm btn-block archivebtn'><i class="fas fa-archive"></i> Archive</button>

                        </td>

                      

                      </tr>

           

           <?php }?>

         </tbody>

  

           <?php } else { echo "No record found"; }?>

 

   </table>

               </div>

              

           </div>

     

         </div>



           </div>



           <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Edit Payment Information</h5>

       

      </div>

      <div class="modal-body">

   

      <form method="POST" action="">

      <input type="hidden" name="uid" id="uid">

  <div class="form-group">

    <label for="refnum">Reference Number</label>

    <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="refnum" id="refnum" class="form-control" required>

    

</div>

  <div class="form-group">

    <label for="name">Customer's Name</label>

    <input type="text" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32) || (event.charCode == 44))' class="form-control" name="name" id="name" aria-describedby="name"  required>

  </div>



  <div class="form-group">

   <label for="mobile">Mobile Number</label>

  <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" id="mobile" class="form-control" name="mobile" maxlength="11" required >                         

  </div>



  <div class="form-group">

    <label for="amount">Amount</label>

    <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="currency form-control" name="amount" id="amount" aria-describedby="section" >

  </div>



  <div class="form-group">

    <label for="date">Date</label>

    <input type="date" class="form-control" name="date" id="date" required>

  </div>





      </div>

      <div class="modal-footer">

      <button type="submit" name="update" id="update" class="btn btn-success" value="update">Update</button>

        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

      </div>

      

    </div>

  </div>

</div>

</form>



           <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Add Payment Information</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

   

      <form method="POST" action="">

      <input type="hidden" name="id" id="id">

      <div class="form-group">

    <label for="refnum">Reference number</label>

    <input type="text" maxlength="9" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="refnum" id="refnum" required>

  </div>

  <div class="form-group">

    <label for="name">Customer's Name</label>

    <input type="text" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32) || (event.charCode == 44))' class="form-control" name="name" id="name" required>

  </div>



  <div class="form-group">

   <label for="mobile">Mobile Number</label>

  <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" id="mobile" class="form-control" name="mobile" maxlength="11" required >                         

  </div>



  <div class="form-group">

    <label for="amount">Amount</label>

    <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="amount" id="amount" required>

  </div>



  <div class="form-group">

    <label for="date">Date</label>

    <input type="date" class="form-control" name="date" id="date" required>

  </div>





      </div>

      <div class="modal-footer">

      <button type="submit" name="insert" id="insert" class="btn btn-success" value="submit">Submit</button>

        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

      </div>

      

    </div>

  </div>

</div>

</form>  



<div class="modal fade" id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">View Receipt</h5>

      

      </div>

      <div class="modal-body">

   

    <form method="POST" action="">



      <input type="hidden" name="vid" id="vid">

      <center>

      <img src="" id="imagepreview" name="imagepreview" style="width: 250px; height: 400px;"  >                    

                            </center>



      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

      </div>

      

    </div>

  </div>

</div>

</form>



<div class="modal fade" id="notifymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Notify Customer</h5>

       

      </div>

      <div class="modal-body">

   

      <form method="POST" action="">

      <input type="hidden" name="uid2" id="uid2">

  <div class="form-group">

    <label for="refnum">Reference Number</label>

    <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="refnum2" id="refnum2" class="form-control" disabled>

    

</div>

  <div class="form-group">

    <label for="name2">Customer's Name</label>

    <input type="text" class="form-control" name="name2" id="name2" aria-describedby="name"  disabled>

  </div>



  <div class="form-group">

   <label for="mobile2">Mobile Number</label>

  <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" id="mobile2" class="form-control" name="mobile2" maxlength="11" readonly>                         

  </div>



  <div class="form-group">

    <label for="amount2">Amount</label>

    <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="amount2" id="amount2" disabled >

  </div>



  <div class="form-group">

    <label for="date2">Date</label>

    <input type="date" class="form-control" name="date2" id="date2" disabled>

  </div>



  <div class="form-group">

    <label for="msg">Message</label>

    <textarea class="form-control" id="message" rows="6" name="message">Good day <?php echo $custname;?>! We already received your payment amounting PHP<?php echo $amount ?>. Here's your REFERENCE NUMBER: <?php echo $refnum ?>. Thank you!</textarea>

  </div>





      </div>

      <div class="modal-footer">

      <button type="submit" name="update2" id="update2" class="btn btn-success" value="update">Send SMS</button>

        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

      </div>

      

    </div>

  </div>

</div>

</form>



<div id="archivemodal" class="modal fade" role="dialog">

                        <div class="modal-dialog">

                            <form method="post">

                                <!-- Modal content-->

                              

                                <div class="modal-content">

                                    <div class="modal-header">

                                    <h4 class="modal-title">Archive</h4>

                                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                                        

                                    </div>

                                    <div class="modal-body">

                               

                                        <input type="hidden" name="did" id="did">

                                        <div class="alert alert-danger">Are you sure you want to archive it? <strong>

                                          </div>

                                         

                                        <div class="modal-footer">

                                       

                                            <button type="submit" name="archive" id="archive" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> YES</button>

                                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>

                                        </div>

                                    </div>

                                </div>

                          

                        </div>

                        </div>



<?php 

function itexmo($number,$message,$apicode,$passwd){

    $url = 'https://www.itexmo.com/php_api/api.php';

    $itexmo = array('1' => $number, '2' => $message, '3' => $apicode, 'passwd' => $passwd);

    $param = array(

        'http' => array(

            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",

            'method'  => 'POST',

            'content' => http_build_query($itexmo),

        ),

    );

    $context  = stream_context_create($param);

    return file_get_contents($url, false, $context);

}



if($_POST){

    $num= $_POST['mobile2'];

    $msg= $_POST['message'];

    $api= "TR-MANIL585120_JA19D";

   

        if(!empty($_POST['mobile2']) && ($_POST['message'])){

            $result = itexmo($num,$msg,$api,"yfsd79bmde");

            if ($result == ""){

               echo "Try again!";

            }else if ($result == 0){

                echo "Message sent!";

                 header("Refresh:0; url=gcashyearlypayment.php");

            }else{	

        

                echo "Error Num ". $result . " was encountered!";

                



            }

        }

}              

?>       









    



      </div>

      <!-- End of Main Content -->

      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      <?php



if(isset($_POST['insert'])){

  $id = $_POST['id'];

  $refnum = $_POST['refnum'];

  $name = $_POST['name'];

  $mobile = $_POST['mobile'];

  $amount = $_POST['amount'];

  $date = $_POST['date'];

  $sql = "INSERT INTO gcashyearlypayments (reference_number, customer_name, mobile, amount, date) VALUE ('$refnum', '$name', '$mobile', '$amount', '$date')";

  if ($conn->query($sql) === TRUE) {

    ?>

    <script>

     swal("Success!", "Payment Information added successfully!","success").then( () => {

       location.href = 'gcashyearlypayment.php'

   })

               

               </script>

               

              <?php

  } else {

      echo "Error inserting record: " . $conn->error;

  }

}

?>

<?php

if(isset($_POST['update'])){

    $id = $_POST['uid'];

    $refnum = $_POST['refnum'];

    $name = $_POST['name'];

    $mobile = $_POST['mobile'];

    $amount = $_POST['amount'];

    $date = $_POST['date'];

    $sql = "UPDATE gcashyearlypayments SET 

        reference_number='$refnum',

        customer_name='$name',

        mobile='$mobile',

        amount='$amount',

        date = '$date'

        WHERE id='$id' ";

    if ($conn->query($sql) === TRUE) {

      ?>

      <script>

       swal("Success!", "Payment Information updated successfully!","success").then( () => {

         location.href = 'gcashyearlypayment.php'

     })

                 

                 </script>

                 

                <?php

    } else {

        echo "Error updating record: " . $conn->error;

    }

}

?>

<?php

if(isset($_POST['archive'])){

  $did = $_POST['did'];



$query = "SELECT * FROM gcashyearlypayments WHERE id='$did'";

$result = mysqli_query($conn,$query);

while($fetch = mysqli_fetch_array($result)){

  if($fetch['id'] === $did){

    mysqli_query($conn, "INSERT INTO archivegcashbuypayments VALUE ('','$fetch[reference_number]','$fetch[customer_name]','$fetch[mobile]','$fetch[amount]','$fetch[date]')") or die(mysqli_error($conn));

    mysqli_query($conn, "DELETE FROM gcashyearlypayments WHERE id = '$fetch[id]'") or die(mysqli_error($conn));

    ?>

    <script>

     swal("Success!", "Payment Information archived successfully!","success").then( () => {

       location.href = 'gcashyearlypayment.php'

   })

               

               </script>

               

              <?php

  }

  }

}  

?>



<?php include 'db.php'; 



$query="SELECT * from tblcontent";

$result= mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))

{



    $title = $row['title'];

    

    }

?>

      <!-- Footer -->

      <footer class="sticky-footer bg-white">

        <div class="container my-auto">

          <div class="copyright text-center my-auto">

          <span class="copyright">Copyright &copy; <span id="year"></span>  <?php echo $title; ?></span>

          </div>

        </div>

      </footer>

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

        <form action="logout.php" method="post">

        <div class="modal-body">Are you sure you want to logout?</div>

        <div class="modal-footer">

          <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>

          <input type="submit" name="Login" class="btn btn-success" value="Logout">  

        </div>

      </div>

    </div>

  </div>

</form>


<?php
require("db.php");
$q = "SELECT firstname, lastname FROM adminreg WHERE username='".$_SESSION["admin"]."'";
$r = mysqli_query($conn,$q);
$a = mysqli_fetch_assoc($r);

?>
  

<!-- Bootstrap core JavaScript-->

<script src="vendor/jquery/jquery.min.js"></script>

  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



  <script>

    document.getElementById("year").innerHTML = new Date().getFullYear();

</script>



  <script>

            $(document).ready(function () {

              $('.addbtn').on('click', function() {



                $('#addmodal').modal('show');



               

              });

            });



        </script>

        

        <script>

            $(document).ready(function () {

              $('.viewbtn').on('click', function() {



                $('#imagepreview').attr('src', $('#imageresource').attr('src')); // here asign the image to the modal when the user click the enlarge link

               $('#viewmodal').modal('show'); // 

              

              });

            });



        </script>

        

        <script>

(function($) {

  $.fn.currencyInput = function() {

    this.each(function() {

      var wrapper = $("<div class='currency-input' />");

      $(this).wrap(wrapper);

      $(this).val(parseFloat($(this).val()).toLocaleString(undefined, {minimumFractionDigits:2, maximumFractionDigits:2}));

      

      $(this).change(function() {

        var min = parseFloat($(this).attr("min"));

        var max = parseFloat($(this).attr("max"));



        var value = parseFloat($(this).val().replace(/,/g, ''));

        if(value < min)

          value = min;

        else if(value > max)

          value = max;

        $(this).val(value.toLocaleString(undefined, {minimumFractionDigits:2, maximumFractionDigits:2})); 

      });

    });

  };

})(jQuery);



$(document).ready(function() {

  $('input.currency').currencyInput();

});

</script>



<script>

            $(document).ready(function () {

              $('.editbtn').on('click', function() {



                $('#editmodal').modal('show');



                $tr = $(this).closest('tr');



                var data = $tr.children('td').map(function() {

                  return $(this).text();

                }).get();



                console.log(data);



                $('#uid').val(data[0]);

                $('#refnum').val(data[1]);

                $('#name').val(data[2]);

                $('#mobile').val(data[3]);

                $('#amount').val(data[4]);

                $('#date').val(data[5]);

              });

            });



        </script>



<script>

            $(document).ready(function () {

              $('.viewbtn').on('click', function() {



                $('#viewmodal').modal('show');



                $tr = $(this).closest('tr');



                var data = $tr.children('td').map(function() {

                  return $(this).text();

                }).get();



                console.log(data);



                $('#vid').val(data[0]);

                $('#refnum1').val(data[1]);

                $('#name1').val(data[2]);

                $('#mobile1').val(data[3]);

                $('#amount1').val(data[4]);

                $('#date1').val(data[5]);

              });

            });



        </script>



<script>

            $(document).ready(function () {

              $('.notifybtn').on('click', function() {



                $('#notifymodal').modal('show');



                $tr = $(this).closest('tr');



                var data = $tr.children('td').map(function() {

                  return $(this).text();

                }).get();



                console.log(data);



                $('#uid2').val(data[0]);

                $('#refnum2').val(data[1]);

                $('#name2').val(data[2]);

                $('#mobile2').val(data[3]);

                $('#amount2').val(data[4]);

                $('#date2').val(data[5]);

              });

            });



        </script>



<script>

            $(document).ready(function () {

              $('.archivebtn').on('click', function() {



                $('#archivemodal').modal('show');

                $tr = $(this).closest('tr');



              var data = $tr.children('td').map(function() {

                return $(this).text();

              }).get();



              console.log(data);



              $('#did').val(data[0]);

             

                });

               

              });



        </script>





  <!-- Core plugin JavaScript-->

  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>



  <!-- Custom scripts for all pages-->

  <script src="js/sb-admin-2.min.js"></script>



  <!-- Page level plugins -->

  <script src="vendor/datatables/jquery.dataTables.min.js"></script>

  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  

  <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

  <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>

  <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>

  <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>



  <script>

$(document).ready(function() {

    $('#dataTable').DataTable( {

        dom: 'Bfrtip',

        buttons: [

            {

                extend: 'print',
                title: ' Manila South Cemetery',
                messageTop: 'List of GCash Buy Lot Payments',
                messageBottom: 'Prepared by: <?php date_default_timezone_set('Asia/Hong_Kong'); echo $a['firstname'] ." ". $a['lastname'] ." ". date("l, F j Y h:i:s A"); ?>',
              
              

                customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '10pt' )
                        .prepend(
                            '<img src="http://localhost/southcemetery/msc.png" style="float:left; widht:50px; height:50px; top:0; left:0;" />'
                        );
 
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                },

                exportOptions: {

                    columns: [ 0, ':visible' ]

                }

            },

            {

                extend: 'excelHtml5',
                messageTop: 'List of GCash Buy Lot Payments',
                messageBottom: 'Prepared by: <?php date_default_timezone_set('Asia/Hong_Kong'); echo $a['firstname'] ." ". $a['lastname'] ." ". date("l, F j Y h:i:s A"); ?>',


                exportOptions: {

                    columns: ':visible'

                }

            },

            {

                extend: 'pdfHtml5',
                messageTop: 'List of GCash Buy Lot Payments',
                messageBottom: 'Prepared by: <?php date_default_timezone_set('Asia/Hong_Kong'); echo $a['firstname'] ." ". $a['lastname'] ." ". date("l, F j Y h:i:s A"); ?>',


                exportOptions: {

                  columns: ':visible'

                }

            },

            'colvis'

        ]

    } );

} );

  </script>

  <!-- Page level custom scripts -->

  <script src="js/demo/datatables-demo.js"></script>





</body>



</html>

