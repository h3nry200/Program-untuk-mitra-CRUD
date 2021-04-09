<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = md5 ($_POST['password']);

$address = $_POST['address'];
$date = $_POST['date'];
 $status = $_POST['status'];

// update data ke database
mysqli_query($koneksi,"update tblusers set fullname='$nama', email='$email', password='$password', address='$address', datecreated='$date', status='$status' where Id='$id'");
echo "<script>alert('Data telah di edit');window.location='useradmin.php'</script>"; 
// mengalihkan halaman kembali ke index.php
//header("location:useradmin.php");
 
?>