<?php
$con = mysqli_connect("localhost", "root", "", "escobarsnow");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$DNI=mysqli_real_escape_string($con,$_POST['DNI']);
	$clau=mysqli_real_escape_string($con,$_POST['clau']);
	$result = mysqli_query($con,"SELECT * FROM client");
	$c_rows = mysqli_num_rows($result);
	if ($c_rows!=$DNI) {
		header("location: loginregistre.php?remark_login=failed");
	}
	$sql="SELECT DNI FROM client WHERE DNI='$DNI' and clau='$clau'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	$active=$row['active'];
	$count=mysqli_num_rows($result);
	if($count==1) {
		$_SESSION['login_user']=$DNI;
		header("location: index.php?remark_login=success");
	}
}
?>