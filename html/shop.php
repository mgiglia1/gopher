<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<?php
	session_start();
?>
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav style = "background-color: #ffffff" class="navbar navbar-expand-lg navbar-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
		<img height:"10" width: "10" src="images/tinyGofer.jpg" alt="logo">
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
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Friends</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Friends</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-xl-9 col-xl-12 col-xl-12 shop-content-right">
                    <div class="right-product-box">
                      <div class="product-item-filter row"> 
                            <div class="col-12 col-lg-8 text-center text-sm-left">
                            <div class="toolbar-sorter-right">
                            <div class="search-product">
                            <form action="search.php" method="post">
                                <input name="search" class="form-control" placeholder="Search here..." type="text">
                                <button type="submit"> <i class="fa fa-search"></i> </button>
                            </form>
                            </div>
			    </div>
                            </div>
                        </div>

                        <div class="product-categorie-box">
                            <div class="tab-content">
                      		<?php	
						function addFriend() {
                                                        require('myconnect.php');
                                                        $fid = $_GET['id'];
                                                        $uid = $_SESSION['uid'];
                                                        $query = "insert into friends values($uid, $fid)";
                                                        $stmt = oci_parse($conn, $query);
                                                        print '<h1>'.$query.'</h1>';
							oci_execute($stmt);
                                                        oci_close($conn);
                                                }
					$friends = $_SESSION['search'];
					foreach($friends as $f) {
					print'<div class="list-view-box">';
                                        print'<div class="row">';
                                            print'<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">';
                                                print'<div class="products-single fix">';
                                                    print'<div class="box-img-hover">';
                                                        print'<div class="type-lb">';
                                                        print'</div>';
                                                        print'<img src="images/gofer.jpg" class="img-fluid" alt="Image">';
                                                    print'</div>';
                                                print'</div>';
                                            print'</div>';
                                            print'<div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">';
                                                print'<div class="why-text full-width">';
                                                    print'<h4>' .$f['NAME']. '</h4>';
                                                    print'<h5>' .$f['EMAIL']. '</h5>';
                                                    print'<p></p>';
							print'<form action="addFriend.php" method="GET">';
							print'<button type="submit" name="id" value="'.$f['USERID'].'" class="btn hvr-hover" href="#">Add Friend</button>';
        						print'</form>';                                        
	print'</div>';
                                            print'</div>';
                                        print'</div>';
                                    print'</div>';
				}
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Page -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpg" alt="" />
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpg" alt="" />
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpg" alt="" />
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-07.jpg" alt="" />
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-08.jpg" alt="" />
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpg" alt="" />
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
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
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
