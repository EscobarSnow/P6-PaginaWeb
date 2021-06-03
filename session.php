<?php
$con = mysqli_connect("localhost", "root", "", "escobarsnow");
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($con,"select DNI,id_client from client where DNI='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['DNI'];
$loggedin_id=$row['id_client'];
if(!isset($loggedin_session) || $loggedin_session==NULL) {
	echo "Go back";
	header("Location: index.php");
}
?>