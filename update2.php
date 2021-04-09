<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_tlp = $_POST['no_tlp'];
$address = $_POST['address'];
$password = md5 ($_POST['password']);
$remarks = $_POST['remarks'];
$date = $_POST['date'];
 $status = $_POST['status'];

// update data ke database
mysqli_query($koneksi,"update tblcontact set username='$nama', email='$email', phoneno='$no_tlp', address='$address', password='$password',remarks='$remarks', datecreated='$date', status='$status' where Id='$id'");
echo "<script>alert('Data telah di edit');window.location='userclient.php'</script>"; 
// mengalihkan halaman kembali ke index.php
//header("location:useradmin.php");
 
?>