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



  <title><?php echo $nav; ?> Users</title>







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











      <li class="nav-item active">



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







        <div class="card shadow mb-4">



            <div class="card-header py-3">



              <h6 class="m-0 font-weight-bold text-primary">Customers</h6>



            </div>



            <div class="card-body">



              <div class="table-responsive">



                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">



                  <thead>



                    <tr>



                    <th>No.</th>



                      <th>Fullname</th>



                      <th>Date of Birthdate</th>



                      <th>Email</th>



                      <th>Mobile</th>



                      <th>Registration Date</th>



                    </tr>



                  </thead>



                  <tfoot>



                    <tr>



                    <th>No.</th>



                      <th>Fullname</th>



                      <th>Date of Birthdate</th>



                      <th>Email</th>



                      <th>Mobile</th>



                      <th>Registration Date</th>



                    </tr>



                  </tfoot>



                  <tbody>



                  <?php



                                require_once "db.php";



                                $sql = "SELECT * FROM tblregistration";



                                $result = $conn->query($sql);



                                if (!empty($result) && $result->num_rows > 0) {



               



                        while($row = $result->fetch_assoc()) {



                            



                                  



                                      $fullname= $row['fullname'];



                                      $dob= $row['birthdate'] ;





                                      $email= $row['email'];



                                      $mobile= $row['mobile'];



                                      $date= $row['date_register'];



                                      ?>



                      <td ><?php echo  $row['id']; ?></td>



                      <td><?php echo  $fullname ?></td>



                      <td><?php echo  $dob ?></td>



                      <td><?php echo  $email ?></td>



                      <td><?php echo  $mobile ?></td>



                      <td><?php echo  $date ?></td>

                    



  



                      </tr>



           



           <?php }?>



         </tbody>



  



           <?php } else { echo "No record found"; }?>



 



   </table>



               </div>



              



           </div>



     



         </div>



          







            </div>







           











    







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



    document.getElementById("year").innerHTML = new Date().getFullYear();



</script>


<script>
$("#dataTable").on('draw.dt', function(){
    let n = 0;
    $(".number").each(function () {
            $(this).html(++n);
        })
})
</script>


  <script>
                
                       


$(document).ready(function() {



   $('#dataTable').DataTable( {
  



        dom: 'Bfrtip',



        buttons: [



            {



                extend: 'print',
                title: ' Manila South Cemetery',
                messageTop: 'List of Users',
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
                title: ' Manila South Cemetery',
                messageTop: 'List of Users',
                messageBottom: 'Prepared by: <?php date_default_timezone_set('Asia/Hong_Kong'); echo $a['firstname'] ." ". $a['lastname'] ." ". date("l, F j Y h:i:s A"); ?>',
                
                
                
             



                exportOptions: {



                    columns: ':visible'



                }



            },



            {



                extend: 'pdfHtml5',
                title: ' Manila South Cemetery',
                messageTop: 'List of Users',
                messageBottom: 'Prepared by: <?php date_default_timezone_set('Asia/Hong_Kong'); echo $a['firstname'] ." ". $a['lastname'] ." ". date("l, F j Y h:i:s A"); ?>',
                
                // customize: function ( doc ) {
                //     doc.content.splice( 1, 0, {
                //         margin: [ 0, 0, 0, 12 ],
                //         alignment: 'left',
                //         image:'data:image/png;base64,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',
                //     } );
                //     console.log(doc.content)
                // },
            
            
          
                



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



