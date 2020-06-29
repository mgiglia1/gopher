<html>
<body>

<?php
	session_start();
        require('myconnect.php');
        $prodName = $_POST['addProdName'];
        $qty = $_POST['addQty'];
	$tripID = $_SESSION['tripID'];
	$uid = $_SESSION['uid'];
	$query = "insert into items values('',$tripID,$uid, '$prodName', $qty, 0)";
        //echo $query;
	//echo $tripID;
	//echo $uid;
        $stmt = oci_parse($conn, $query);
        oci_execute($stmt);
        oci_close($conn);
	header("Location:tripItems.php");


?>
</body>
</html>
