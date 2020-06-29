<?php
session_start();
 require('myconnect.php');
 $fid = $_GET["id"];
 $uid = $_SESSION['uid'];
echo $fid; 

$query = "update balance set balance = 0 where (BuyerID = $uid and RequesterID =  $fid) or (BuyerID = $fid and RequesterID = $uid)";
 $stmt = oci_parse($conn, $query);
 oci_execute($stmt);
 oci_close($conn);
header("Location: my-account.php");
?>
