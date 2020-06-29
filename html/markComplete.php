<html>
</body>

<?php
	session_start();
	require('myconnect.php');
	$tid = $_SESSION['tripID'];
        $query = "update trips set completed=1 where tripid=$tid";
        $stmt = oci_parse($conn, $query);
        oci_execute($stmt);
        oci_close($conn);
	//echo $query;
	header('Location: buyerList.php');


?>
</body>
</html>
