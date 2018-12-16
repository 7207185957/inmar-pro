<?php
session_start();
$x=$_POST["a"];
$y=$_POST["b"];
$r=mysqli_connect("localhost","root","","inmar");
$p=mysqli_query($r,"select * from shopper where uname='$x' and pwd='$y';");
$c=mysqli_num_rows($p);
//echo $c;
if($c==1)
{  $_SESSION["x"]=1;
   $_SESSION["l"]=$x;
 header('location:successlogin.html');
}
else
 header('location:index.html');
?>