<?php
include "header.php";
?>
	<h3 align="center">EDIT DATA ADMIN</h3>
 
<form action="" method="post">		  
<table align="center" >
		
				<tr>	
	
					<td><p align="center">Nama</p></td>
					<td>
						
						<input type="text" name="nama" class="form-control" required>
					</td>
				</tr>
				<tr>
					<td><p align="center">Email</p></td>
					<td><input type="text" name="email" class="form-control""></td>
				</tr>
				
				<tr>
					<td><p align="center">Phone Number</p></td>
					<td><input type="text" name="phone_no" class="form-control""></td>
				</tr>
				<tr>
					<td><p align="center">Alamat</p></td>
					<td><input type="text" name="address" class="form-control""></td>
				</tr>
							
				<tr>
					<td><p align="center">Password</p></td>
					<td><input type="text" name="password" class="form-control"></td>
				</tr>
				<tr>
					<td><p align="center">Konfirm Password</p></td>
					<td><input type="text" name="konfirmasi_password" class="form-control"></td>
				</tr>
				
				<tr>
					<td><p align="center"></p></td>
					<td><input type="submit" name="register_submit" class="btn btn-success"></td>
									
				</tr>		
			</table>

		


<?php
// after clik

if(isset($_POST['register_submit'])){

	
//koneksi sql_reg
$connect = mysqli_connect('localhost','root','123','wahw2679_db_pempek3') or die(mysqli_connect_error());
	
//tampung value
$nama = mysqli_real_escape_string($connect, trim($_POST['nama']));
$email = mysqli_real_escape_string($connect, trim($_POST['email']));
$address = mysqli_real_escape_string($connect, trim($_POST['address']));
$phone_no = mysqli_real_escape_string($connect, trim($_POST['phone_no']));
$password = mysqli_real_escape_string($connect, md5($_POST['password']));
$konfirmasi = mysqli_real_escape_string($connect, md5($_POST['konfirmasi_password']));

$cek_username=mysqli_num_rows(mysqli_query ($connect,"SELECT fullname FROM tblusers WHERE fullname='$_POST[nama]'"));
$cek_email = mysqli_num_rows(mysqli_query ($connect,"SELECT email FROM tblusers WHERE email='$_POST[email]'"));


if ($cek_username >0) {
    echo "<div id='gagal' class='alert alert-danger'>Maaf Nama Anda sudah terdaftar<button type='button' class='close' data-dismiss='alert'><i class='fa fa-times'></i></button></div>";
}
else if ($cek_email >0){
    echo "<div id='gagal' class='alert alert-danger'>Mohon maaf Email anda sudah terdaftar<button type='button' class='close' data-dismiss='alert'><i class='fa fa-times'></i></button></div>";

	// cek apakah konfirmasi password benar?
}
else if($password != $konfirmasi){
 echo "<div id='gagal' class='alert alert-danger'>Maaf Konfirmasi password salah<button type='button' class='close' data-dismiss='alert'><i class='fa fa-times'></i></button></div>";
} 
else {	
$sql =' insert into tblusers (Id,password,email,phoneno,fullname,address,status) value("","'.$password.'","'.$email.'","'.$phone_no.'","'.$nama.'","'.$address.'",1)';
mysqli_query($connect, $sql);





 echo "<script>alert('Data User sudah masuk, silakan Login');window.location='home.php'</script>";
}
}
?>


 
</body>
</html>