<?php 
//phpinfo();
putenv("ORACLE_HOME=/u01/app/oracle/product/11.2.0/xe");
$conn = oci_connect("admin", "admin", "xe");
if(!$conn){
	print'<h1> not connecting </h1>';
}
?>
