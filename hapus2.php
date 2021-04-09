<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tblcontact where Id='$id'");
echo "<script>alert('Data telah di hapus');window.location='userclient.php'</script>";
// mengalihkan halaman kembali ke index.php
//header("location:useradmin.php");
 
?>