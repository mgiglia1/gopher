<html>
<body>

<?php
	session_start();
	require('myconnect.php');
	$items = array();
	if(isset($_POST['TripID'])){
		$_SESSION['tripID'] = $_POST['TripID'];
	}
	$uid = $_SESSION['uid'];
	$tid = $_SESSION['tripID'];
	$query = "select * from items where TripID = $tid and RequesterID=$uid";
	$stmt = oci_parse($conn, $query);
	$r = oci_execute($stmt);
	while($row = oci_fetch_array($stmt, OCI_ASSOC+OCI_RETURN_NULLS)) {
		array_push($items, $row);
	}
	$_SESSION['items'] = $items;
	$it = $_SESSION['items'];
	//echo $query;
	//echo $_SESSION['tripID'];
	
	//print_r($it);
	header("Location:requesterItems.php");
?>
</body>
</html>

