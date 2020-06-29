<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Freshshop - Ecommerce Bootstrap 4 HTML Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
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
<?php
	session_start();
	ini_set('display_errors', 1);
	require('myconnect.php');
	$uid = $_SESSION['uid'];

	$stmt =  oci_parse($conn, 'begin :cursor := getBalance(:uid); end;');
	$rc = oci_new_cursor($conn);

	oci_bind_by_name($stmt, ':uid', $uid);
	oci_bind_by_name($stmt, ':cursor', $rc, -1, OCI_B_CURSOR);
	
	oci_execute($stmt);
	oci_execute($rc);
	
	/*oci_fetch_all($rc, $cursor, null, null, OCI_FETCHSTATEMENT_BY_ROW);
	echo '<br>';
	
	print_r($cursor);
	*/

	/*while($row = oci_fetch_assoc($rc))
    	{
      	// Declare header and data variables.
      	$header = "";
      	$data = "";
 
      	// Read the reference cursor into a table.
      	foreach ($row as $name => $column)
      	{
		echo $column;
		echo '<br>';
	}
	}*/
/*
	while($row = oci_fetch_array($rc, OCI_ASSOC+OCI_RETURN_NULLS)){
		echo '<br>';
		echo $row['NAME'];
		echo '<br>';
		echo $row['FRIEND'];
		echo '<br>';
		echo $row['BALANCE'];
	}*/
	$_SESSION['balances'] = array();
	//print_r($_SESSION['balances']);
	oci_fetch_all($rc, $cursor, null, null, OCI_FETCHSTATEMENT_BY_ROW);
 	$_SESSION['balances'] = $cursor;
	//print_r($_SESSION['balances']);
oci_close($conn);
?>
</body>
</html>

