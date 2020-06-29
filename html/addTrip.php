<html>
<body>

<?php
	session_start();
	require('myconnect.php');
	$uid = $_SESSION['uid'];
	echo $uid;
	echo '<br>';
	echo isset($_POST['Date']);
	if($_POST['Date'] == '' || $_POST['Store'] == '') {
		echo 'You must fill all fields';
		header("Location: buyerList.php");
	}
	else {
	$date = $_POST['Date'];
	echo $date;
	$store = $_POST['Store'];
	echo $store;
	$query = "insert into trips values('', '$store','$date', $uid, 0)";

	echo "$query";
	$stmt = oci_parse($conn, $query);
	oci_execute($stmt);
	
	header("Location: buyerList.php");	
	}
	oci_close($conn);
?>
</body>
</html>
