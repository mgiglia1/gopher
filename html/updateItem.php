<html>
</body>

<?php
	require('myconnect.php');
	$prodName = $_POST['prodName'];
        $qty = $_POST['qty'];
        $itemID = $_POST['itemIDName'];
        $query = "update items set product='$prodName', qty=$qty where itemid=$itemID";
        $stmt = oci_parse($conn, $query);
        oci_execute($stmt);
        oci_close($conn);
	
	//echo $query;
	header('Location: tripItems.php');


?>
</body>
</html>
