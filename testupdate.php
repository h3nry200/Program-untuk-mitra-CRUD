<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"update tblinvoice set status='sudah konfirmasi' where Id='$id'");
echo "<script>alert('Pembayaran telah di konfirmasi');window.location='invoice.php'</script>";
// mengalihkan halaman kembali ke index.php
//header("location:useradmin.php");
 
?>