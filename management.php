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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="icon.ico" />

    <title><?php echo $title; ?></title>



 

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="assets/css/templatemo-art-factory.css">

    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">



    <!--MAPPING -->

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"

    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="

    crossorigin=""/>

    <link rel="stylesheet" href="mapping/assets/plugins/leaflet-routing-machine/dist/leaflet-routing-machine.css" />

    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"

    integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="

    crossorigin=""></script>

    <link rel="stylesheet" href="mapping/assets/plugins/leaflet-search/src/leaflet-search.css" />

    <!-- Custom Map CSS -->

    <link rel="stylesheet" type="text/css" href="mapping/assets/css/map.css">





    </head>

    

    <body id="page-top">



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

                    <a class="logo" href="index.php" style="font-size:15px; margin-left: 10px;"><?php echo $navtitle; ?></a>

                    

                     

                        <ul class="nav">

                            <li class="scroll-to-section"><a href="index.php#welcome">Home</a></li>

                            <li class="scroll-to-section"><a href="management.php" class="active">Management</a></li>

                             <li class="scroll-to-section"><a href="login.php">Sign In</a></li>

                            <li class="scroll-to-section"><a href="faqs.php#faqs">FAQS</a></li>

                            <li class="scroll-to-section"><a href="index.php#about">About</a></li>

                            <li class="scroll-to-section"><a href="contactus.php#contact-us">Contact Us</a></li>

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

<br>

    <br>

    <br>



<section class="section" id="features">

        <div class="container">

            <div class="row">

                <div class="owl-carousel owl-theme">

                    <div class="item service-item">

                        <div class="icon">

                            <i><img src="https://img.icons8.com/wired/64/000000/card-in-use.png"/></i>

                        </div>

                        <h5 class="service-title">Payment Manager</h5>

                        <p>This module is allow to customer to pay their balances or buy/rent a lot with mode of payment of GCash</p>

         

                    </div>

                  

        

                    <div class="item service-item">

                        <div class="icon">

                            <i><img src="https://img.icons8.com/ios/50/000000/treasure-map.png"/></i>

                        </div>

                        <h5 class="service-title">Map Manager</h5>

                        <p>You can quickly find graves without assistance or explore cemeteries at groundlevel right from your devices.

                        </p>

                    </div>

                    <div class="item service-item">

                        <div class="icon">

                            <i><img src="https://img.icons8.com/ios/50/000000/open-document.png"/></i>

                        </div>

                        <h5 class="service-title">Document Manager</h5>

                        <p>It is for managing, tracking and storing document or even receipt for security purposes of the data.</p>

                    </div>



                    <div class="item service-item">

                        <div class="icon">

                            <i><img src="https://img.icons8.com/ios/80/000000/calendar-24.png"/></i>

                        </div>

                        <h5 class="service-title">Schedule Manager</h5>

                        <p>It is for the client or relatives of those deceased individual who want to visit or take a transaction to the cemetery. </p>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <div class="container mt-3">



<h1>SEARCH</h1>

<br>

              <div class="table-responsive">

              <div class="input-group">

              <input id="search-name" class="form-control" type="search" placeholder="Enter your relatives name..." name="search-name">

              <div class="input-group-append">

                <button class="btn btn-success" id="filter-name"><i class="fas fa-search" aria-hidden="true"></i> Search</button>

                <button onClick="window.location.reload();" class="btn btn-info" id="refresh-name"><i class="fa fa-refresh" aria-hidden="true"></i> Reset</button>

           <br>



                </div>

                </div><!-- /input-group -->



                <table class="table table-striped " id="dataTable" width="100%" cellspacing="0">

                  <thead>

                    <tr>

                    <th>Year Died</th>

                    <th>Name of Deceased </th>

                    <th>Section </th>

                    <th>Lot</th>

                    <th>Grave</th>

                    <th>Find</th>

                    </tr>

                  </thead>

                  <tfoot>

                    <tr>

                    <th>Year Died</th>

                    <th>Name of Deceased </th>

                    <th>Section </th>

                    <th>Lot</th>

                    <th>Grave</th>

                    <th>Find</th>

                    </tr>

                  </tfoot>

                  <tbody>

                

                  <?php

                                require_once "db.php";

                                $sql = "SELECT * FROM tbldeceased";

                                $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                        // output data of each row

                        while($row = $result->fetch_assoc()) {

                            

                                      $date= $row['date'];

                                      $name= $row['name'];

                                      $section= $row['section'] ;

                                      $lot= $row['lot'];

                                      $grave= $row['grave'];

                                      ?>

                                      <tr>

                      <td><?php echo  $date ?></td>

                      <td><?php echo  $name ?></td>

                      <td><?php echo  $section ?></td>

                      <td><?php echo  $lot ?></td>

                      <td><?php echo  $grave ?></td>

                      <td>

                   

                    <button type='button' class='locate btn btn-success btn-sm ' id='myButton' onclick="locateOn('. $row_array['latitude'] .','. $row_array['longitude'] .')"><i class="fas fa-map-marker-alt"></i> Locate</button> 

                     

                      </td>

                        </tr>

           

            <?php }?>

          </tbody>

   

            <?php } else { echo "No record found"; }?>

  

    </table>

                </div>

               

            </div>



       <!-- Load Facebook SDK for JavaScript -->

      <div id="fb-root"></div>

      <script>

        window.fbAsyncInit = function() {

          FB.init({

            xfbml            : true,

            version          : 'v10.0'

          });

        };



        (function(d, s, id) {

        var js, fjs = d.getElementsByTagName(s)[0];

        if (d.getElementById(id)) return;

        js = d.createElement(s); js.id = id;

        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';

        fjs.parentNode.insertBefore(js, fjs);

      }(document, 'script', 'facebook-jssdk'));</script>



      <!-- Your Chat Plugin code -->

      <div class="fb-customerchat"

        attribution="setup_tool"

        page_id="106886211248656">

      </div>

         

     



    <footer>

        <div class="container">

            <div class="row">

                <div class="col-lg-7 col-md-12 col-sm-12">

                    <p class="copyright">Copyright &copy; <span id="year"></span>  <?php echo $title; ?>

            

                </div>

                <div class="col-lg-5 col-md-12 col-sm-12">

                    <ul class="social">

                        <li><a href="https://www.facebook.com/manilasouthcemetery2020/"><i class="fa fa-facebook"></i></a></li>

                        <li><a href="https://www.gmail.com"><i class="fa fa-google"></i></a></li>

                    </ul>

                </div>

            </div>

        </div>

    </footer>

    

  

    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <script>

    document.getElementById("year").innerHTML = new Date().getFullYear();

</script>







<script>

$(document).ready( function () {

    $('#dataTable').wrap('<div id="hide" style="display:none"/>');

  var table = $('#dataTable').DataTable();

  

  $('#filter-name').on('click', function () {

    console.log('Searching for name:', $('#search-name').val());

    table.column(1).search($('#search-name').val()).draw();

    $('#hide').css( 'display', 'block' );

  });

} );



    </script>







<script>

$(document).ready( function () {

  $('#dataTable').dataTable( {

    "bFilter": false,

    

    "bPaginate": false,

    stateSave: true,

    "bDestroy": true

  } );

} );



    </script>



<script>

$(document).ready(function() {

  $('#filter-name').prop('disabled', true);



  function validateNextButton() {

    var buttonDisabled = $('#search-name').val().trim() === '';

    $('#filter-name').prop('disabled', buttonDisabled);

  }



  $('#search-name').on('keyup', validateNextButton);

});

</script>

    <script>

    document.getElementById("year").innerHTML = new Date().getFullYear();

</script>



   

<script src="assets/js/owl-carousel.js"></script>

    <script src="assets/js/scrollreveal.min.js"></script>

    <script src="assets/js/waypoints.min.js"></script>

    <script src="assets/js/jquery.counterup.min.js"></script>

    <script src="assets/js/imgfix.min.js"></script> 

    

 

    <script src="assets/js/custom.js"></script>

    <script src="vendor/datatables/jquery.dataTables.min.js"></script>

  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>



  <!-- Page level custom scripts -->

  <script src="js/demo/datatables-demo.js"></script>



  <!--MAPPING -->

  <script src="mapping/assets/plugins/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>

    <script src="mapping/assets/js/Control.Geocoder.js"></script> 

    <script src="mapping/assets/plugins/leaflet-search/src/leaflet-search.js"></script>



     <!-- Geojson Data -->

     <script src="mapping/assets/js/gravesLayer.js" type="text/javascript"></script>

    <script src="mapping/assets/js/search_map.js" type="text/javascript"></script>





  </body>

</html>

 