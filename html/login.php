<html>
<body>

<?php
	session_start();
	ini_set('display_errors', 1);
	require('myconnect.php');
	$email = $_POST['u_email'];
	$password = $_POST['u_pass'];
	$query = "select logIn('$email', '$password') result from dual";

	echo "$query";
	$stmt =  oci_parse($conn, $query);
	oci_define_by_name($stmt, "RESULT", $res);
	oci_execute($stmt);
	oci_fetch($stmt);

	echo "Result: $res";
	
	if($res == 1) {
		$_SESSION['success'] = 1;
		$query2 = "select UserID from users where Email = '$email'";
		echo $query2;
		$stmt2 = oci_parse($conn, $query2);
		oci_define_by_name($stmt2, "USERID", $uid);
		oci_execute($stmt2);
		oci_fetch($stmt2);		
		echo "UID: $uid";
		$_SESSION['uid'] = $uid;
		header("Location: my-account.php");
	}
	else {
		$_SESSION['success'] = 0;
		header("Location: loginpage.php");	
	}
oci_close($conn);
?>
</body>
</html>
