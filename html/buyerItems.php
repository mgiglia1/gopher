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
    <!--<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">-->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="css/popUp.css">
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
		<img height: "10" width: "10" src="images/tinyGofer.jpg" alt="logo">
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


    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Manage Trip</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="buyerList.php">Trips</a></li>
                        <li class="breadcrumb-item active">Manage Trip</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table id="requestedItemsTable" class="table">
                            <thead>
                               <tr>
				    <th>Requester</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
				    <th>Total Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
				session_start();
				$items = $_SESSION['itemsBuyer'];
				$counter = 1;
				foreach($items as $i){
				    $itemIDName = "itemID".$counter;
				    $prodName = "prodName".$counter;
				    $quantityName = "quantity".$counter;
				    $buttonName = "updateRowButton".$counter;
				    $rowFormName = "rowForm".$counter;
				    $buttonValue = 'Update Price';
				    $priceName = "priceName".$counter;
				    $requester = "requester".$counter;
	
				    print'<form action="updateItemBuyer.php" id="'.$rowFormName.'" method="post"/></form>';
				    print '<tr>';
                                    print'<td class="name-pr">';
				    //print'<input readonly id="'.$requester.'" type="text" class="c-input-text qty text" name="prodName" form="'.$rowFormName.'" value="'.$i['NAME'].'"/>';
				    print'<span style="font-size: 15pt; font-weight:bold">'. $i['NAME'].'</span>';
				    print'</td>';
				    print'<td class="quantity-box">';
				    print'<input readonly id="'.$itemIDName.'" type="hidden" name="itemIDName" form="'.$rowFormName.'" value="'.$i['ITEMID'].'"/>';
				    print'<input readonly id="'.$prodName.'" type="text" class="c-input-text qty text" name="prodName" form="'.$rowFormName.'" value="'.$i['PRODUCT'].'"/>';
				    print'</td>';
                                    print'<td class="quantity-box"><input readonly id="'.$quantityName.'" type="number" class="c-input-text qty text" name="qty" form="'.$rowFormName.'" value="'.$i['QTY'].'"/></td>';
                                    print'<td class="quantity-box">';
				    if($_SESSION['completed'] == 1){
				    	print'<input readonly id="'.$priceName.'" type="text" class="c-input-text qty text" name="prodPrice" form="'.$rowFormName.'" value="'.$i['PRICE'].'"/>';
				    } else {
					print'<input id="'.$priceName.'" type="text" class="c-input-text qty text" name="prodPrice" form="'.$rowFormName.'" value="'.$i['PRICE'].'"/>';
				    }    
				print'<td class="remove-pr">';
                                    	 print'<div class="update-box">';
						print'<input href="#" type="submit" form="'.$rowFormName.'" name="button" id="'.$buttonName.'" value="'.$buttonValue.'"/>';
                    			print'</div>';
				    print '</td>';
			       	    print '</tr>';
					$counter = $counter + 1;
				} ?>	
				<form action="markComplete.php" id="markCompleteForm" method="post"/></form>
				<tr>
				<td>
				<?php
				if($_SESSION['completed'] == 1){
					print '<h1>This trip has been completed.</h1>';
				}
				?>
				</td>
				<td></td>
				<td></td>
				<td>
					<div class="update-box">
					<input href="#"  type="submit" name="completeButton" form="markCompleteForm" name="completeButton" id="completeButton" value="Mark Trip Complete"/>
				</td> 
			 </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- End Cart -->

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
    <script src="popUp.js"></script>
    <script type="text/javascript">
	function disable(){
		document.getElementsByClassName('c-input-text qty text')[0].readOnly = true;
	}
    </script>
	<!-- ALL PLUGINS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
