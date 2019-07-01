<?php
error_reporting(0);
session_start();
?>
<?php
if (isset($_POST['mkapp'])) {
    $sts = 0;
    $srs=0;
    $rs=array();
    $ers =0;
    $msh=array();
    $appname = $_POST['apponame'];
    $appmail = $_POST['appomail'];
    $appdate = $_POST['appodate'];
    $apptime = $_POST['appotime'];
    $appgender = $_POST['gender'];
    $apptype = $_POST['type'];
    $appmsg = $_POST['appomsg'];

    if (empty($appname)) {
        $ers =1;
    $msh['aa']="*Required Name";        
    }
    if (empty($appmail)) {
        $ers =1;
    $msh['bb']="*Required Mail";
    }
    if (empty($appdate)) {
        $ers =1;
    $msh['cc']="*Required Date";
    }if (empty($apptime)) {
        $ers =1;
    $msh['dd']="*Required Time";
    }
    if (empty($appmsg)) {
        $ers =1;
    $msh['ee']="*Required MSG";
    }
    if (empty($appname) || empty($appmail) || empty($appdate) || empty($apptime) || empty($appmsg)) {
        
    } else {
        include 'DBConfig.php';
        $insert = "INSERT INTO `appointments` (`Name`,`E-mail`,`date`,`time`,`gender`,`type`,`message`,`status`) VALUES ('" . ucfirst($appname) . "','" . strtolower($appmail) . "','" . $appdate . "','" . $apptime . "','" . ucfirst($appgender) . "','" . ucfirst($apptype) . "','" . ucfirst($appmsg) . "','" . $sts . "')";
        //echo $insert;
        //exit;
        if ($connection->query($insert)) {
            $srs=1;
    $rs['resss']="Appoinment Sucessfully";
            //echo "Appoinment Sucessfully";
        } else {
            $srs=0;
    $rs['resss']="Appoinment Unsucessfully";
            //echo "Appoinment Unsucessfully";
        }
    }
}
?>

<!DOCTYPE php>
<html lang="en">
    <head>
        <title>HOME</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">-->
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
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="index.php">Hospital<span>Management</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>

                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="RepHome.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="Medicineinfo.php" class="nav-link">Add Medicine</a></li>
                        <li class="nav-item"><a href="Medicineview.php" class="nav-link">View Medicine</a></li>
                        <li class="nav-item"><a href="Repfeedback.php" class="nav-link">Feedback</a></li>
                        <!-- <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
                         <li class="nav-item active"><a href="RepLogin.php" class="nav-link">Representative</a></li>
                         <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>-->
                     <!--   <li class="nav-item"><a href="Gallery.php" class="nav-link">Gallery</a></li>-->
                        <li class="nav-item"><a href="Logout.php" class="nav-link">Logout</a></li>
                        <li class="nav-item"><a href="contactus.php" class="nav-link">Contact us</a></li>
                        
                       <!-- <li class="nav-item"><a href="contact.php" class="nav-link">Contact us</a></li>                        -->
                        <li class="nav-item cta"><a href="contact.php" class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>Make an Appointment</span></a></li>
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
                            <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="RepHome.php">Home</a></span> <span><a href="repinfo.php?select_id=<?php echo $_SESSION['mail']; ?>">Personal Information</a></span></p>
                            <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">HELLOW! <?php
                                error_reporting(0);
                                session_start();
                                echo $_SESSION['usersess'];
                                ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <div class="row justify-content-center mb-5 pb-5">
            <form action="" method="POST" enctype="multipart/form-data">             



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
                        <form action="" method="POST">
                            <?php
                            if ($_POST['mkapp'] == 'Make an Appointment') {
                               /// echo '<span style="color:red;">' . $corrres['aaaaa'] . '</span>';
                                if ($srs = 0) {
                                    echo '<span style="color:red;">' . $rs['resss'] . '</span>';
                                } else {
                                    echo '<span style="color:green;">' . $rs['resss'] . '</span>';
                                }
                            }
                            ?>
                            <div class="form-group">
                                <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
                                <input type="text" name="apponame" value="<?php echo $_SESSION['repname'];?>" class="form-control" id="appointment_name" placeholder="Full Name" readonly><?php if ($_POST['mkapp'] == 'Make an Appointment') {
    echo '<span style="color:red;">' . $msh['aa'] . '</span>';
} ?>
                            </div>
                            <div class="form-group">
                                <!-- <label for="appointment_email" class="text-black">Email</label> -->
                                <input type="text" name="appomail" value="<?php echo $_SESSION['repmail'];?>" class="form-control" id="appointment_email" placeholder="Email" readonly><?php if ($_POST['mkapp'] == 'Make an Appointment') {
    echo '<span style="color:red;">' . $msh['bb'] . '</span>';
} ?>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!-- <label for="appointment_date" class="text-black">Date</label> -->
                                        <input type="text" name="appodate" class="form-control appointment_date" placeholder="Date"><?php if ($_POST['mkapp'] == 'Make an Appointment') {
    echo '<span style="color:red;">' . $msh['cc'] . '</span>';
} ?>
                                    </div>    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!-- <label for="appointment_time" class="text-black">Time</label> -->
                                        <input type="text" name="appotime" class="form-control appointment_time" placeholder="Time"><?php if ($_POST['mkapp'] == 'Make an Appointment') {
    echo '<span style="color:red;">' . $msh['dd'] . '</span>';
} ?>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <select name="type">
                                    <option value ="Medical Representative">Medical Representative</option>
                                </select>
                            </div>
                            <br>                            
                            <h5>Choose Gender</h5>
                            <input type="radio" name="gender" value ="Male"<?php
                if ($_SESSION['repgender'] == 'Male') {
                    echo 'checked';
                }
                ?><?php ?>> Male<br>
                            <input  type="radio" name="gender" value ="Female"<?php
                if ($_SESSION['repgender'] == 'Female') {
                    echo 'checked';
                }
                ?><?php ?>> Female<br>
                            <input  type="radio" name="gender" value ="Other"<?php
                if ($_SESSION['repgender'] == 'Other') {
                    echo 'checked';
                }
                ?><?php ?>> Other<br>
                            <br>
                            <div class="form-group">
                                <!-- <label for="appointment_message" class="text-black">Message</label> -->
                                <textarea name="appomsg" id="appointment_message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea><?php if ($_POST['mkapp'] == 'Make an Appointment') {
    echo '<span style="color:red;">' . $msh['ee'] . '</span>';
} ?>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="mkapp" value="Make an Appointment" class="btn btn-primary">
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
    <script>
<?php if ($_POST['mkapp'] != '') { ?>
                                    $('#modalRequest').modal('show');
<?php } ?>
    </script>
</html>