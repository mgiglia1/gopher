<html>
<body>

<?php
	session_start();
	$_SESSION['signUp_success'] = 1;
	ini_set('display_errors', 1);
	require('myconnect.php');
	$name = $_POST['u_name'];
	$email = $_POST['u_email'];
	$password = $_POST['u_pass'];
	$query = "select signUp('$email', '$password', '$name') result from dual";

	echo "$query";
	$stmt =  oci_parse($conn, $query);
	oci_define_by_name($stmt, "RESULT", $res);
	oci_execute($stmt);
	oci_fetch($stmt);

	echo "Result: $res";
	
	if($res == 0) {
		$_SESSION['signUp_success'] = 1;
		$query2 = "insert into users values('', '$password', '$name', '$email')";
		echo "$query2";
		$stmt2 = oci_parse($conn, $query2);
		oci_execute($stmt2);
		header("Location: loginpage.php");
	}
	else {
		$_SESSION['signUp_success'] = 0;
		header("Location: newSignUp.php");	
	}
oci_close($conn);
?>
</body>
</html>
