<html>
</body>

<?php
	require('myconnect.php');
        $itemID = $_POST['itemIDName'];
        $price =(float)$_POST['prodPrice'];
	$query = "update items set price=$price where itemid=$itemID";
        $stmt = oci_parse($conn, $query);
        oci_execute($stmt);
        oci_close($conn);
	
	echo $query;
	header('Location: tripItemsBuyer.php');


?>
</body>
</html>
