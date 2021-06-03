<?php 
session_start();
$con = mysqli_connect("localhost", "root", "", "escobarsnow");
$DNI=$_POST['DNI'];
$result = mysqli_query($con,"SELECT * FROM client WHERE DNI='$DNI'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
 header("location: loginregistre.php?remarks=failed"); 
}else {
 $nom=$_POST['nom'];
 $cognom=$_POST['cognom'];
 $DNI=$_POST['DNI'];    
 $telefon=$_POST['telefon'];
 $correu=$_POST['correu'];
 $clau=$_POST['clau'];
 if(mysqli_query($con,"INSERT INTO client(nom, cognom, DNI, telefon, correu, clau)VALUES('$nom', '$cognom', '$DNI', '$telefon', '$correu', '$clau')")){ 
	header("location: loginregistre.php?remarks=success");
 }else{
	 $e=mysqli_error($con);
	header("location: loginregistre.php?remarks=error&value=$e");	 
 }
}
?>