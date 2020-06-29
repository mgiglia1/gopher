<?php
session_start();
 require('myconnect.php');
 $fid = $_GET["id"];
 $uid = $_SESSION['uid'];
echo $fid; 

$query = "insert into friends values($uid, $fid)";
 $stmt = oci_parse($conn, $query);
 oci_execute($stmt);
 oci_close($conn);
//$_SESSION['search'] = "";
header("Location: shop.php");
?>
