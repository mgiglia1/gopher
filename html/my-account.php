<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>The Gofer</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">


</head>

<body>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav style="background-color=#ffffff" class="navbar navbar-expand-lg navbar-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                 <img height:"10" width:"10" src="images/tinyGofer.jpg" alt="logo">
		</div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
						<li class="nav-item"><a class="nav-link" href="my-account.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="shop.php">Friends</a></li>
						<li class="dropdown active">
							<a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Trips</a>
							<ul class="dropdown-menu">
								<li><a href="buyerList.php">Buyer</a></li>
								<li><a href="requesterList.php">Requester</a></li>
							</ul>
						</li>
						<li class="nav-item"><a class="nav-link" href="logout.php" >Logout</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>My Dashboard</h2>
                    <!--<ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">My Account</li>
                    </ul>-->
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start My Account  -->
    <div class="my-account-box-main">
        <div class="container">
            <div class="my-account-page">
               <!-- <div class="row">
                    <div class="col-lg-4 col-md-12">
                  -->   <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a><i class="fas fa-dollar-sign"></i></a>
                                </div>
                                <div class="service-desc">
                                    <h4>Your Balances</h4>
                                    <p>Keep track of your balances with friends!</p>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="bottom-box">
                    <div class="row">
		<?php
		require('balances.php');
		//session_start();
        	//use the foreach mechanism to simplify printing out the elements
         	foreach ($_SESSION['balances'] as $row){
                        print '<div class="col-lg-4 col-md-12">';
                            print'<div class="account-box">';
                                print'<div class="service-box">';
                                    print '<div class="service-desc">';
					print'<h4>' .$row['FRIEND']. '</h4>';
                                        print'<ul>';
                                            print'<li>$' .$row['BALANCE'].'</li>';
                                        print'</ul>';
					print'<form id="button-form" action="zeroBalance.php" method="GET"></form>';
					if ($row['BALANCE'] > 0) {
					print'<button type="submit" class="ml-auto btn hvr-hover" form="button-form" name="id" value="'.$row['REQUESTERID'].'" href="#">Paid</button>';
				}
                                    print'</div>';
                                print'</div>';
                            print'</div>';
                        print'</div>';
		} ?>
                    </div>
                </div>
        </div>
    </div>

<div class="my-account-box-main">
        <div class="container">
            <div class="my-account-page">
               <!-- <div class="row">
                    <div class="col-lg-4 col-md-12">
                  -->   <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a><i class="fas fa-user-friends"></i></a>
                                </div>
                                <div class="service-desc">
                                    <h4>Your Friends</h4>
                                    <p>Add more friends on the Friends page!</p>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="bottom-box">
                    <div class="row">
                <?php
		require('friends.php');
                //session_start(); 
                //use the foreach mechanism to simplify printing out the elements
                foreach ($_SESSION['friends'] as $row){
                        print '<div class="col-lg-4 col-md-12">';
                            print'<div class="account-box">';
                                print'<div class="service-box">';
                                    print '<div class="service-desc">';
                                        print'<h4>' .$row['NAME']. '</h4>';
                                        print'<ul>';
                                            print'<li>' .$row['EMAIL'].'</li>';
                                        print'</ul>';
                                    print'</div>';
                                print'</div>';
                            print'</div>';
                        print'</div>';
                } ?>
                    </div>
                </div>
        </div>
    </div>





    <!-- End My Account -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpg" alt="" />
                    <!--<div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>-->
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpg" alt="" />
                    <!--<div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>-->
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                    <!--<div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div-->
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                    <!--<div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>-->
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <!--<div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>-->
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpg" alt="" />
                    <!--<div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>-->
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-07.jpg" alt="" />
                    <!--<div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>-->
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-08.jpg" alt="" />
                    <!--<div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>-->
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpg" alt="" />
                    <!--<div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>-->
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <!--<div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About The Gofer</h4>
                            <p>The Gofer: Molly's E-Shopping List for Trips is you new favorite way to coordinate shoppings trips with friends! If you have ever forgotten to pick up an item at the store, The Gofer will help you to find friends who can help you out. Add friends, make trips, buy items and settle balances all in one FUN place! </p> 
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>The Team</h4>
                            <ul>
                                <li><a href="#">Molly Giglia</a></li>
                                <li><a href="#">Bridget Sabbagh</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: The Gofer, Inc. <br>Room 208 Debartolo Hall<br>Notre Dame, IN 46556 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
            <a href="https://html.design/">html design</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
