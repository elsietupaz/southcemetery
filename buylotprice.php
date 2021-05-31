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
  <title><?php echo $nav; ?> Buy Lot Price</title>

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

      <li class="nav-item active">
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
        <div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Buy Lot Price</h6>
    </div>
    <div class="card-body">
    
    <button class='btn btn-primary addbtn' style="float: left;"><i class="fas fa-plus"></i> Add Lot Price</button>

                        <br>
                        <br>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID </th>
            <th>Lot Name </th>
            <th>Lot Price </th>
            <th>Action </th>
            </tr>
          </thead>
          <tfoot>
            <tr>
            <th>ID </th>
            <th>Lot Name </th>
            <th>Lot Price </th>
            <th>Action </th>
            </tr>
          </tfoot>
          <tbody>
          <?php
                        require_once "dbcon.php";
                        $sql = "SELECT * FROM buylot";
                        $result = $conn->query($sql);
                        if (!empty($result) && $result->num_rows > 0) {
       
                while($row = $result->fetch_assoc()) {
                    
                             
                    $id= $row['id'];
                    $lotname= $row['lotname'];
                    $lotprice= $row['lotprice'] ;
                
                              ?>
              <td><?php echo  $id ?></td>
              <td><?php echo  $lotname ?></td>
              <td><?php echo  $lotprice ?></td>
            
          
              <td>
            
                    <button type='button' class='btn btn-warning btn-sm editbtn'><i class="fas fa-edit"></i> Edit</button>
          
              
                    <button type='button' class='btn btn-danger btn-sm archivebtn'><i class="fas fa-archive"></i> Archive</button>
            
              </td>
              </tr>
   
   <?php }?>
 </tbody>

   <?php } else { echo "No record found"; }?>

</table>
    </div>
    </div>
    </div>

 <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Lot Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   
      <form method="POST" action="">
     <input type="hidden" id="uid" name="uid">

  <div class="form-group">
    <label for="lotname">Lot Name</label>
    <input type="text" class="form-control" name="lotname" id="lotname" required>
  </div>

  <div class="form-group">
    <label for="lotprice">Lot Price</label>
    <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="lotprice" id="lotprice" required>
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
        <h5 class="modal-title" id="exampleModalLabel">Add Lot Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   
      <form method="POST" action="">
    
      <input type="hidden" id="id" name="id">
      <div class="form-group">
    <label for="lotname">Lot Name</label>
    <input type="text" class="form-control" name="lotname" id="lotname" required>
  </div>

  <div class="form-group">
    <label for="lotprice">Lot Price</label>
    <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="lotprice" id="lotprice" required>
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
      
      <!-- End of Main Content -->
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <?php

if(isset($_POST['insert'])){
  $id = $_POST['id'];
  $lotname = $_POST['lotname'];
  $lotprice = $_POST['lotprice'];

  $sql = "INSERT INTO buylot (lotname, lotprice) VALUE ('$lotname', '$lotprice')";
  if ($conn->query($sql) === TRUE) {
    ?>
    <script>
     swal("Success!", "Lot Price added successfully!","success").then( () => {
       location.href = 'buylotprice.php'
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
          $lotname = $_POST['lotname'];
          $lotprice = $_POST['lotprice'];
          $sql = "UPDATE buylot SET 
              lotname='$lotname',
              lotprice='$lotprice'
              WHERE id='$id' ";
          if ($conn->query($sql) === TRUE) {
            ?>
            <script>
             swal("Success!", "Lot Price updated successfully!","success").then( () => {
               location.href = 'buylotprice.php'
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
        
        $query = "SELECT * FROM buylot WHERE id='$did'";
        $result = mysqli_query($conn,$query);
        while($fetch = mysqli_fetch_array($result)){
          if($fetch['id'] === $did){
            mysqli_query($conn, "INSERT INTO archivebuyprice VALUE ('','$fetch[lotname]','$fetch[lotprice]')") or die(mysqli_error());
            mysqli_query($conn, "DELETE FROM buylot WHERE id = '$fetch[id]'") or die(mysqli_error());
            ?>
    <script>
     swal("Success!", "Lot Price archived successfully!","success").then( () => {
       location.href = 'buylotprice.php'
   })
               
               </script>
               
              <?php
          }
          }
      }
 

        
  ?>
     </div>
                  
                  </div>
            </div>
        
           
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
              $('.editbtn').on('click', function() {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children('td').map(function() {
                  return $(this).text();
                }).get();

                console.log(data);

                $('#uid').val(data[0]);
                $('#lotname').val(data[1]);
                $('#lotprice').val(data[2]);
           
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
               
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 5 ]
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
