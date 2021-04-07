<?php
$host="localhost";
$db="id11140736_total";
$user="id11140736_ad_total";
$pass="12345";

$conn=mysqli_connect($host,$user,$pass,$db);
if (!$conn) {
	die("Error al conectar".mysqli_connect_error());
}else{
	echo"Muy bien salchichas";
}
$sql="INSERT INTO registros(correo)values('silvaguerra0927@gmail.com')";
if(mysqli_query($conn,$sql)){
	echo "Registro guardado salchichas";

}else{
	echo "error".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>