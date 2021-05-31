<?php

session_start();

      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page

       {

           header("Location:login.php");  

       }

       ?>



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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css" integrity="sha512-aV/CBF2tMLcys/fQfJ+0vGZRrPYRrA0KNuwqpdaSz9RCmWQIjrdybgvvHxRnzohAFV0e1B5EsnHR6W3XnH7ryg==" crossorigin="anonymous" />

   

    <link rel="shortcut icon" href="icon.ico" />



    <title><?php echo $title; ?></title>





    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="assets/css/templatemo-art-factory.css">

    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">



    





    </head>

    

    <body>

    

 

    <div id="preloader">

        <div class="jumper">

            <div></div>

            <div></div>

            <div></div>

        </div>

    </div>  

    <!-- ***** Preloader End ***** -->

    

    

    <!-- ***** Header Area Start ***** -->

    <header class="header-area header-sticky">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <nav class="main-nav">

                        <!-- ***** Logo Start ***** -->

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

                    <a class="logo" href="customerdashboard.php" style="font-size:15px; margin-left: 10px;"><?php echo $navtitle; ?></a>

                        <!-- ***** Logo End ***** -->

                        <!-- ***** Menu Start ***** -->

                        <ul class="nav">

                      <li class="scroll-to-section"><a href="customerdashboard.php">Home</a></li>

                            <li class="scroll-to-section"><a href="bookappointment.php#appointment" class="active">Appointment</a></li>

                            <li class="scroll-to-section"><a href="customerprofile.php">Profile</a></li>

                            <li class="scroll-to-section"><a href="customerlogout.php">Logout</a></li>

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

  <?php

                            

                         

                        

include("db.php");





  $Username=$_SESSION["use"];

   



  $sql = "SELECT * FROM tblregistration WHERE username='$Username'";

  $result = mysqli_query ($conn,$sql) or die (mysql_error ());

  while ($row = mysqli_fetch_array ($result)){



 

  

  ?>






    <section class="section" id="appointment">

        <div class="container">

          

            <div class="row">

                <div class="col-lg-12">

                    <div class="section-heading">

                        <h2><b>BOOK AN APPOINTMENT</h2></b>

                    </div>

                </div>

                <div class="offset-lg-3 col-lg-6">

                    <div class="section-heading">

                        

                    <p>Please select your date and time of your appointment then fill up the form.</p>
                    

                    </div>
                   

                </div>

            </div>

            <br>

     

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/gcal.min.js" integrity="sha512-7a/GdV+Yb2nLt7zgXbufsOsTJ3NHu4zF1Vdtsn50oRjdeVwAU8EcE4twos9YAnj9MhpvFnEewM4QsbLhSeAH0w==" crossorigin="anonymous"></script>


            <div class="container">
        
  <div id='calendar'></div>
  <br>
 <center> <p style="color:red"><i>For <b>CANCELLATION OF APPOINTMENT</b>, please contact 
 the administrator. Call or text +63 (947) 282 8809.</i></p></center>
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

                            <input type="text" name="txtTitle" class="form-control" id="txtTitle" value="<?php echo $row ['fullname']; ?>" required >

                        </div>
                      

                        <div class="form-group">

                        <label for="txtEmail">Email Address: </label>

                        <input type="email" name="txtEmail" class="form-control" id="txtEmail" value="<?php echo $row ['email']; ?>" required>

                        </div>

                        

                    

                </div>

                <div class="modal-footer">
                <button type="button" id="btnBook" class="btn btn-success">Set Appointment</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    
                   

</form>
<?php

         

}

 ?>


                </div>

            </div>



        </div>

    </div>

</div>

 



    <script>

	$(document).ready(function() {

		

		$('#calendar').fullCalendar({

            googleCalendarApiKey: 'AIzaSyDI3ueXNIn4tRLJ6KM6YwmA7uPNFHODwQA',


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



  start: '08:00', // a start time (10am in this example)

  end: '17:00', // an end time (6pm in this example)

    },

			defaultDate: new Date(),

			defaultView: 'agendaWeek', 

            selectLongPressDelay: 25,
            selectOverlap: false,

            allDaySlot: false,

                height: 'auto',

                minTime: '08:00:00',
        maxTime: '17:00:00',



			editable: false,
          

			events:'data.php',

            longPressDelay: 1,

			selectable:true,

            selectHelper:true,

        

            selectAllow: function(info) {

    if (info.start.isBefore(moment()))

        return false;

    return true;          

},

eventSources: [
{ googleCalendarId: 'en.philippines#holiday@group.v.calendar.google.com',
color: 'red',   // an option!
textColor: 'white'
}

],



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

        

		

	});



	</script>

  



   

    <footer>

        <div class="container">

            <div class="row">

                <div class="col-lg-7 col-md-12 col-sm-12">

                <p class="copyright">Copyright &copy; <span id="year"></span>  <?php echo $title; ?>

            

                </div>



            </div>

        </div>

    </footer>

    

    

  

    <script src="assets/js/popper.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <script>

    document.getElementById("year").innerHTML = new Date().getFullYear();

</script>







    <script src="assets/js/owl-carousel.js"></script>

    <script src="assets/js/scrollreveal.min.js"></script>

    <script src="assets/js/waypoints.min.js"></script>

    <script src="assets/js/jquery.counterup.min.js"></script>

    <script src="assets/js/imgfix.min.js"></script> 

    

    

    <script src="assets/js/custom.js"></script>



  </body>

</html>