<html>
<body>


<form action="search.php" method="post">
	<input 	type="text" name="search" placeholder="Search">
	<input type="submit" value="Search">
</form>
<?php
	session_start();
	print_r($_SESSION['search']);
	print_r($_SESSION['search'][0]['NAME']);
?>
</body>
</html>
