<html>
<body>

<?php
	session_start();
	require('myconnect.php');
	$users = array();
	$uid = $_SESSION['uid'];
	echo $_POST['search'];
	if(isset($_POST['search'])) {
		$searchq = $_POST['search'];
		$query = "select Name, Email, USERID from users where Name like '%$searchq%' and USERID != $uid and USERID not in (select USERID2 from friends where USERID1 = $uid)";
		$stmt = oci_parse($conn, $query);
		$r = oci_execute($stmt);
		while($row = oci_fetch_array($stmt, OCI_ASSOC+OCI_RETURN_NULLS)) {
			array_push($users, $row);
		}
	}
	$_SESSION['search'] = $users; 
	header("Location:shop.php");
?>
</body>
</html>
