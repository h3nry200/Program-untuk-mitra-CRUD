<?php

$connect = mysqli_connect('localhost','root','123','wahw2679_db_pempek3') or die(mysqli_connect_error());
//tampung value
$nama_lengkap = mysqli_real_escape_string($connect, trim($_POST['nama_lengkap']));

$sql =' update tblcontact set status = 1';
mysqli_query($connect, $sql);
echo "<script>alert('Congrate, Your user account have been active. Please Login');window.location='login2.php'</script>";


?>