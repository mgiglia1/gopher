<?php
	session_start();
	//$_SESSION = array();
?>
<html>
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
    <link rel="stylesheet" href="css/login.css">
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
<div class="login-page">
	<div class="form">
	 <img height:"42" width:"42" src="images/smallGofer.jpg" alt="logo">  
  <form method="post" action="login.php" class="login-form">
      <input type="text" placeholder="email" name="u_email"/>
      <input type="password" placeholder="password" name="u_pass"/>
      <button type="submit">login</button>
	        <?php
                if(isset($_SESSION["success"]) && $_SESSION["success"] == 0 ) {
                        echo'<a color = "red"> Incorrect email or password. Please try again!
</a><br>';
                } ?>
      <p class="message">Not registered? <a href="newSignUp.php">Create an account</a></p>
    </form>
  </div>
</div>

</body>
</html>
