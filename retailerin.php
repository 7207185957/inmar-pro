<?php
	$x=$_POST["a"];
	$y=$_POST["b"];
	$z=$_POST["c"];
	$w=$_POST["d"];
	$u=$_POST["e"];
	$r=mysqli_connect("localhost","root","","inmar");
	if(mysqli_query($r,"insert into retailer values('$x','$y','$z','$w','$u');"))
	echo 'Store details successfully added';
?>