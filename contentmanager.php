<?php
session_start();
      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("Location:login.php");  
       }
       ?>

<?php
use Phppot2\DataSource2;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

require_once 'DataSource2.php';
$db = new DataSource2();
$conn = $db->getConnection();
require_once ('./excel/autoload.php');

if (isset($_POST["import2"])) {

    $allowedFileType = [
        'application/vnd.ms-excel',
        'text/xls',
        'text/xlsx',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
    ];

    if (in_array($_FILES["file2"]["type"], $allowedFileType)) {

        $targetPath = 'uploads/' . $_FILES['file2']['name'];
        move_uploaded_file($_FILES['file2']['tmp_name'], $targetPath);

        $Reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

        $spreadSheet = $Reader->load($targetPath);
        $excelSheet = $spreadSheet->getActiveSheet();
        $spreadSheetAry = $excelSheet->toArray();
        $sheetCount = count($spreadSheetAry);

        for ($i = 0; $i <= $sheetCount; $i ++) {
            $date = "";
            if (isset($spreadSheetAry[$i][0])) {
                $date = mysqli_real_escape_string($conn, $spreadSheetAry[$i][0]);
            }
            $name = "";
            if (isset($spreadSheetAry[$i][1])) {
                $name = mysqli_real_escape_string($conn, $spreadSheetAry[$i][1]);
            }
            $section = "";
            if (isset($spreadSheetAry[$i][2])) {
              $section = mysqli_real_escape_string($conn, $spreadSheetAry[$i][2]);
          }
          $lot = "";
            if (isset($spreadSheetAry[$i][3])) {
              $lot = mysqli_real_escape_string($conn, $spreadSheetAry[$i][3]);
          }
          $grave = "";
            if (isset($spreadSheetAry[$i][4])) {
              $grave = mysqli_real_escape_string($conn, $spreadSheetAry[$i][4]);
          }


            if (! empty($date) || ! empty($name) || ! empty($section) || ! empty($lot) || ! empty($grave)) {
                $query = "insert into tbldeceased(date,name,section,lot,grave) values(?,?,?,?,?)";
                $paramType = "sssss";
                $paramArray = array(
                    $date,
                    $name,
                    $section,
                    $lot,
                    $grave
                );
                $insertId = $db->insert($query, $paramType, $paramArray);
              
                if (! empty($insertId)) {
                    $type = "success";
                    $message = "Excel Data Imported into the Database";
                } else {
                    $type = "error";
                    $message = "Problem in Importing Excel Data";
                }
            }
        }
    } else {
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
    }
}
?>


<?php
use Phppot1\DataSource1;


require_once 'DataSource1.php';
$db = new DataSource1();
$conn = $db->getConnection();
require_once ('./excel/autoload.php');

if (isset($_POST["import1"])) {

    $allowedFileType = [
        'application/vnd.ms-excel',
        'text/xls',
        'text/xlsx',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
    ];

    if (in_array($_FILES["file1"]["type"], $allowedFileType)) {

        $targetPath = 'uploads/' . $_FILES['file1']['name'];
        move_uploaded_file($_FILES['file1']['tmp_name'], $targetPath);

        $Reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

        $spreadSheet = $Reader->load($targetPath);
        $excelSheet = $spreadSheet->getActiveSheet();
        $spreadSheetAry = $excelSheet->toArray();
        $sheetCount = count($spreadSheetAry);

        for ($i = 0; $i <= $sheetCount; $i ++) {
            $name = "";
            if (isset($spreadSheetAry[$i][0])) {
                $name = mysqli_real_escape_string($conn, $spreadSheetAry[$i][0]);
            }
            $description = "";
            if (isset($spreadSheetAry[$i][1])) {
                $description = mysqli_real_escape_string($conn, $spreadSheetAry[$i][1]);
            }

            if (! empty($name) || ! empty($description)) {
                $query = "insert into buylot(lotname,lotprice) values(?,?)";
                $paramType = "ss";
                $paramArray = array(
                    $name,
                    $description
                );
                $insertId = $db->insert($query, $paramType, $paramArray);
                // $query = "insert into tbl_info(name,description) values('" . $name . "','" . $description . "')";
                // $result = mysqli_query($conn, $query);

                if (! empty($insertId)) {
                    $type = "success";
                    $message = "Excel Data Imported into the Database";
                } else {
                    $type = "error";
                    $message = "Problem in Importing Excel Data";
                }
            }
        }
    } else {
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
    }
}
?>


<?php
use Phppot\DataSource;


require_once 'DataSource.php';
$db = new DataSource();
$conn = $db->getConnection();
require_once ('./excel/autoload.php');

if (isset($_POST["import"])) {

    $allowedFileType = [
        'application/vnd.ms-excel',
        'text/xls',
        'text/xlsx',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
    ];

    if (in_array($_FILES["file"]["type"], $allowedFileType)) {

        $targetPath = 'uploads/' . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);

        $Reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

        $spreadSheet = $Reader->load($targetPath);
        $excelSheet = $spreadSheet->getActiveSheet();
        $spreadSheetAry = $excelSheet->toArray();
        $sheetCount = count($spreadSheetAry);

        for ($i = 0; $i <= $sheetCount; $i ++) {
            $name = "";
            if (isset($spreadSheetAry[$i][0])) {
                $name = mysqli_real_escape_string($conn, $spreadSheetAry[$i][0]);
            }
            $description = "";
            if (isset($spreadSheetAry[$i][1])) {
                $description = mysqli_real_escape_string($conn, $spreadSheetAry[$i][1]);
            }

            if (! empty($name) || ! empty($description)) {
                $query = "insert into yearslot(lotname,lotprice) values(?,?)";
                $paramType = "ss";
                $paramArray = array(
                    $name,
                    $description
                );
                $insertId = $db->insert($query, $paramType, $paramArray);
                // $query = "insert into tbl_info(name,description) values('" . $name . "','" . $description . "')";
                // $result = mysqli_query($conn, $query);

                if (! empty($insertId)) {
                    $type = "success";
                    $message = "Excel Data Imported into the Database";
                } else {
                    $type = "error";
                    $message = "Problem in Importing Excel Data";
                }
            }
        }
    } else {
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
    }
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
  <title><?php echo $nav; ?> Content Manager</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-money-check"></i>
          <span>Payments</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Mode of Payments:</h6>
          <a class="collapse-item" href="paypal.php">Paypal</a>
            <a class="collapse-item" href="gcash.php">GCash</a>
          </div>
        </div>
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
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2" aria-expanded="true" aria-controls="collapseUtilities2">
          <i class="fas fa-fw fa-chart-bar"></i>
          <span>Monthly Sales</span>
        </a>
      <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Sales</h6>
          <a class="collapse-item" href="paypalsales.php">Paypal Sales</a>
          <a class="collapse-item" href="gcashsales.php">GCash Sales</a>
          </div>
        </div>
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
            <a class="collapse-item" href="paypalarchive.php">Paypal Payments</a>
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
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hello, <?php echo $_SESSION['use']; ?>!</span>

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

                <a class="dropdown-item" href="contentmanager.php">
                  <i class="fas fa-file-import fa-sm fa-fw mr-2 text-gray-400"></i>
                  Import Excel File
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
              <h6 class="m-0 font-weight-bold text-primary">Deceased Information</h6>
            </div>
            <div class="card-body">
            
            <form action="" method="post" name="frmExcelImport2" id="frmExcelImport2" enctype="multipart/form-data">
    <label for="import_data">Import Excel file</label>
    <input type="file" class="form-control-file" name="file2" id="file2" accept=".xls,.xlsx">
    <br>
    <button type="submit" id="import2" name="import2" class="btn btn-success btn-submit">Import</button>
</form>
                                <br>
                                <br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID </th>
                    <th>Date </th>
                    <th>Name </th>
                    <th>Section</th>
                    <th>Lot</th>
                    <th>Grave</th>
          
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>ID </th>
                    <th>Date </th>
                    <th>Name </th>
                    <th>Section</th>
                    <th>Lot</th>
                    <th>Grave</th>
                
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
                                require_once "db.php";
                                $sql = "SELECT * FROM tbldeceased";
                                $result = $conn->query($sql);
                                if (!empty($result) && $result->num_rows > 0) {
               
                        while($row = $result->fetch_assoc()) {
                            
                                     
                            $id= $row['id'];
                            $date= $row['date'];
                            $name= $row['name'] ;
                            $section= $row['section'];
                            $lot= $row['lot'];
                            $grave= $row['grave'];
                                      ?>
                      <td><?php echo  $id ?></td>
                      <td><?php echo  $date ?></td>
                      <td><?php echo  $name ?></td>
                      <td><?php echo  $section ?></td>
                      <td><?php echo  $lot ?></td>
                      <td><?php echo  $grave ?></td>
                  
              
                      </tr>
           
           <?php }?>
         </tbody>
  
           <?php } else { echo "No record found"; }?>
 
   </table>
               </div>
              
           </div>
           </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Buy A Lot Prices</h6>
            </div>
            
            <div class="card-body">
            <form action="" method="post" name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
    <label for="import_data">Import Excel file</label>
    <input type="file" class="form-control-file" name="file" id="file" accept=".xls,.xlsx">
    <br>
    <button type="submit" id="import" name="import" class="btn btn-success btn-submit">Import</button>
</form>
            <br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>ID</th>
                    <th>Lot Name </th>
                    <th>Lot Price </th>
                
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>ID</th>
                    <th>Lot Name </th>
                    <th>Lot Price </th>
                   
                    </tr>
                  </tfoot>
                  <tbody>
                
                  <?php
                                require_once "dbcon.php";
                                $sql = "SELECT * FROM yearslot";
                                $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            
                                      $id= $row['id'];
                                      $lotname= $row['lotname'];
                                      $lotprice= $row['lotprice'];
                                      ?>
                                      <tr>
                      <td><?php echo  $id ?></td>
                      <td><?php echo  $lotname ?></td>
                      <td><?php echo  $lotprice ?></td>
                    
                        </tr>
           
            <?php }?>
          </tbody>
   
            <?php } else { echo "No record found"; }?>
  
    </table>
                </div>
               
            </div>
      
          </div>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Rent Lot Prices</h6>
            </div>
            
            <div class="card-body">
            <form action="" method="post" name="frmExcelImport1" id="frmExcelImport1" enctype="multipart/form-data">
    <label for="import_data">Import Excel file</label>
    <input type="file" class="form-control-file" name="file1" id="file1" accept=".xls,.xlsx">
    <br>
    <button type="submit" id="import1" name="import1" class="btn btn-success btn-submit">Import</button>
</form>
            <br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>ID</th>
                    <th>Lot Name </th>
                    <th>Lot Price </th>
                
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>ID</th>
                    <th>Lot Name </th>
                    <th>Lot Price </th>
                   
                    </tr>
                  </tfoot>
                  <tbody>
                
                  <?php
                                require_once "dbcon.php";
                                $sql = "SELECT * FROM buylot";
                                $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            
                                      $id= $row['id'];
                                      $lotname= $row['lotname'];
                                      $lotprice= $row['lotprice'];
                                      ?>
                                      <tr>
                      <td><?php echo  $id ?></td>
                      <td><?php echo  $lotname ?></td>
                      <td><?php echo  $lotprice ?></td>
                    
                        </tr>
           
            <?php }?>
          </tbody>
   
            <?php } else { echo "No record found"; }?>
  
    </table>
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

  
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script>
    document.getElementById("year").innerHTML = new Date().getFullYear();
</script>
 

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>


</body>

</html>
