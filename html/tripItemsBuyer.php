<html>
<body>

<?php
	session_start();
	require('myconnect.php');
	$items = array();
	$_SESSION['completed'] = 0;
	if(isset($_POST['TripID'])){
		$_SESSION['tripID'] = $_POST['TripID'];
	}
	$tid = $_SESSION['tripID'];
	$query = "select u.name, i.itemid, i.product, i.qty, i.price from trips t join items i on i.tripid=t.tripid join users u on u.userid = i.requesterid where t.tripid = $tid";
	$stmt = oci_parse($conn, $query);
	$r = oci_execute($stmt);
	while($row = oci_fetch_array($stmt, OCI_ASSOC+OCI_RETURN_NULLS)) {
		array_push($items, $row);
	}
	$_SESSION['itemsBuyer'] = $items;
	$it = $_SESSION['itemsBuyer'];
	
	$query2 = "select completed from trips where TripID = $tid";
	echo $query2;
	$stmt = oci_parse($conn, $query2);
	oci_define_by_name($stmt, 'COMPLETED', $completed);
	$r = oci_execute($stmt);
	oci_fetch($stmt);
	echo $completed;
	if($completed == 1){
		$_SESSION['completed'] = 1;
	}
	print($_SESSION['completed']);
	print_r($it);
	header("Location:buyerItems.php");
?>
</body>
</html>

