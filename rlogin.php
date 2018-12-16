<?php
	session_start();
	$x=$_POST["a"];
	$y=$_POST["b"];
	$r=mysqli_connect("localhost","root","","inmar");
	$p=mysqli_query($r,"select * from retailer where pno='$x' and email='$y';");
	$c=mysqli_num_rows($p);
	if($c==1)
	{
		$_SESSION["x"]=1;
		$_SESSION["l"]=$x;  
		header('location:successlogin.html');
	}
	else
		header('location:unsuccess.html');
?>