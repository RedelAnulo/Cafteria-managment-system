<?php
	$conn=mysqli_connect("localhost","root","","cms") or die ("Database can not connected ");

	$db = mysqli_select_db($conn, 'cms') or die("<center><h1>Sorry !! Nothing has to do now !!</h1></center>");
?>
