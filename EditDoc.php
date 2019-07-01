<?php
include 'DBConfig.php';
error_reporting(0);
session_start();
if ($_REQUEST['editid'] !== 0) {
    $selc = "SELECT *FROM `doctors` WHERE `d_id`='" . $_REQUEST['editid'] . "'";
    //echo $selc;
    //exit;
    //if ($connection->query($selc) == TRUE) {
    $querys = $connection->query($selc);
    if ($querys->num_rows > 0) {
        $row = $querys->fetch_assoc();
    }
    //echo "Record deleted";
    // } else {
    //   echo "wrong";
    // }
}
?>

<?php
if (isset($_POST['editsubmit'])) {
    $u_id = $_REQUEST['editid'];
    $docname = $_POST['dame'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $type = $_POST['type'];
    $mob = $_POST['mob'];
    
    $spec = $_POST['exp'];
    if (empty($docname) || empty($email) || empty($gender) || empty($type) || empty($mob) || empty($spec)) {
        echo "All feilds required";
    } else {
        if ($_FILES['file']['name'] != '') {
            //image upload
            $imagePath = 'docprof/';
            $uniquesavename = time() . uniqid(rand()) . '.jpg';
            $destFile = $imagePath . $uniquesavename; // . '.jpg';
            $filename = $_FILES["file"]["tmp_name"];
            list($width, $height) = getimagesize($filename);
            move_uploaded_file($filename, $destFile);
            $proupdate = "`Profile`='" . $uniquesavename . "',";
        } else {
            $proupdate = '';
        }
        include 'DBConfig.php';
        $edit = "UPDATE `doctors` SET `Name`='" . ucfirst($docname) . "',`E_mail`='" . strtolower($email) . "',`Gender`='" . ucfirst($gender) . "',`Type`='" . ucfirst($type) . "',`Mobile`='" . $mob . "',`Expert`='" . ucfirst($spec) . "'" . $proupdate . "  WHERE `d_id`='" . $u_id . "'";
        //echo $edit;
        //exit;

        if ($connection->query($edit)) {
            header("Location: http://localhost/workphpcode//Hospital/doctors.php");
        } else {
            echo "Not Updated";
        }
    }
}
?>
<?php
include 'DBConfig.php';
error_reporting(0);
session_start();
$sql1 = "SELECT count(status) AS sum FROM `appointments` WHERE status='0'";
    $result10 = mysqli_query($connection, $sql1);
    $contsum = $result10->fetch_assoc();
    
    $sql2 = "SELECT count(status) AS sum FROM `medinfo` WHERE status='0'";
    $result12 = mysqli_query($connection, $sql2);
    $contsum1 = $result12->fetch_assoc();
    
    $sql3 = "SELECT count(status) AS sum FROM `feedback` WHERE status='0'";
    $result11 = mysqli_query($connection, $sql3);
    $contsum2 = $result11->fetch_assoc();
?>


<!DOCTYPE php>
<html lang="en">
    <head>
        <title>Edit Doctor</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">-->
        <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/jquery.timepicker.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/style.css">
               	<style>
#notification_count
{
padding: 0px 3px 3px 7px;
background: #cc0000;
color: #ffffff;
font-weight: bold;
margin-left: 77px;
border-radius: 9px;
-moz-border-radius: 9px;
-webkit-border-radius: 9px;
position: absolute;
font-size: 15px;
z-index: 1;
}
</style>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="AdminHome.php">Hospital<span>Management</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>

                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="AdminHome.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="AdminMediview.php" class="nav-link">View Medicines<?php if($contsum1['sum'] > 0) { ?>
                <span id="notification_count"><?php echo $contsum1['sum']; ?></span>
                <?php } ?></a></li>
                         <li class="nav-item"><a href="Appointments.php" class="nav-link">Appointments<?php if($contsum['sum'] > 0) { ?>
                <span id="notification_count"><?php echo $contsum['sum']; ?></span>
                <?php } ?></a></li>
                        <!--<li class="nav-item active"><a href="doctors.php" class="nav-link">Doctors</a></li>-->                        
                          <li class="nav-item"><a href="doctors.php" class="nav-link">Doctors</a></li>
                          <li class="nav-item"><a href="Patient.php" class="nav-link">Patient</a></li>
                          <li class="nav-item"><a href="FeedbackView.php" class="nav-link">FeedBacks<?php if($contsum2['sum'] > 0) { ?>
                <span id="notification_count"><?php echo $contsum2['sum']; ?></span>
                <?php } ?></a></li>
                        <li class="nav-item"><a href="AddGallery.php" class="nav-link">Gallery</a></li>

                        <li class="nav-item"><a href="index.php" class="nav-link">Logout</a></li>
                      <!--  <li class="nav-item"><a href="contact.php" class="nav-link">Contact us</a></li>-->
                        <!--<li class="nav-item cta"><a href="contact.php" class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>Make an Appointment</span></a></li>-->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->

        <section class="home-slider owl-carousel">
            <div class="slider-item bread-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container" data-scrollax-parent="true">
                    <div class="row slider-text align-items-end">
                        <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                            <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="RepHome.php">Home</a></span> <span>Services</span></p>
                            <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Edit Doctor</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="row justify-content-center mb-5 pb-5">
            <form action="" method="POST" enctype="multipart/form-data">  
                <br>
                 <input type="button" value="Go Back" class="btn btn-primary px-4 py-2" onclick="window.location.href='http://localhost/workphpcode//Hospital/doctors.php'"/>
                 <br>
                <br>
                <input type="text" name ="dame" placeholder="Doctor Name" value ="<?php
if ($row['Name'] !== '') {
    echo $row['Name'];
} else {
    echo $_POST['dame'];
}
?>"><br>
                <input type="text" name ="email" placeholder="Email" value ="<?php
                       if ($row['E_mail'] !== '') {
                           echo $row['E_mail'];
                       } else {
                           echo $_POST['email'];
                       }
                       ?>"><br>
                <input type="text" name ="gender" placeholder="Gender" value ="<?php
                       if ($row['Gender'] !== '') {
                           echo $row['Gender'];
                       } else {
                           echo $_POST['gender'];
                       }
                       ?>"><br>

                <input type="text" name ="type" placeholder="Type" value ="<?php
                if ($row['Type'] !== '') {
                    echo $row['Type'];
                } else {
                    echo $_POST['type'];
                }
                       ?>"><br>      

                <input type="text" name ="mob" placeholder="Mobile" value ="<?php
                if ($row['Mobile'] !== '') {
                    echo $row['Mobile'];
                } else {
                    echo $_POST['mob'];
                }
                       ?>"><br>

                <input type="text" name ="exp" placeholder="Expert" value ="<?php
                if ($row['Expert'] !== '') {
                    echo $row['Expert'];
                } else {
                    echo $_POST['exp'];
                }
                       ?>"><br>



<?php
$imagename = $row['Profile'];
$str2arr = explode(",", $imagename);
foreach ($str2arr as $vale) {

    echo '<img src="docprof/' . $vale . '" style="width:75px" />';
}
?><br>

                Choose Medicine Profile
                <br><input type="file" name ="file"><br>
                <!-- Choose Medicine Profile
                 <br><input type="file" name ="file"><br>-->
                <br><input type="submit" name ="editsubmit" class="btn btn-primary px-4 py-2" value="Update">
            </form>

        </div>

        <footer class="ftco-footer ftco-bg-dark ftco-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-3">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Hosptial Management.</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <div class="ftco-footer-widget mb-4 ml-md-5">
                            <h2 class="ftco-heading-2">Quick Links</h2>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-2 d-block">About</a></li>
                                <li><a href="#" class="py-2 d-block">Features</a></li>
                                <li><a href="#" class="py-2 d-block">Projects</a></li>
                                <li><a href="#" class="py-2 d-block">Blog</a></li>
                                <li><a href="#" class="py-2 d-block">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 pr-md-4">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Recent Blog</h2>
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                                        <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                                        <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Contact us</h2>
                            <div class="block-23 mb-3">
                                <ul>
                                    <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">

                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </footer>


        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

        <!-- Modal -->
        <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalRequestLabel">Make an Appointment</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <div class="form-group">
                                <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
                                <input type="text" class="form-control" id="appointment_name" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <!-- <label for="appointment_email" class="text-black">Email</label> -->
                                <input type="text" class="form-control" id="appointment_email" placeholder="Email">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!-- <label for="appointment_date" class="text-black">Date</label> -->
                                        <input type="text" class="form-control appointment_date" placeholder="Date">
                                    </div>    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!-- <label for="appointment_time" class="text-black">Time</label> -->
                                        <input type="text" class="form-control appointment_time" placeholder="Time">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- <label for="appointment_message" class="text-black">Message</label> -->
                                <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Make an Appointment" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.animateNumber.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/jquery.timepicker.min.js"></script>
        <script src="js/scrollax.min.js"></script>
        <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="js/google-map.js"></script>-->
        <script src="js/main.js"></script>

    </body>
</html>
