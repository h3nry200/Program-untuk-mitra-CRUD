<?php 
$koneksi = mysqli_connect("localhost","root","123","wahw2679_db_pempek3");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();

}
 
?>