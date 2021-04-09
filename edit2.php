<?php
include "header.php";
?>
	<h3 align="center">EDIT DATA CLIENT</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from tblcontact where Id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
        <br>
		<form method="post" action="update2.php">
			<table align="center" >
		
				<tr>	
						<td><p align="center">Nama</p></td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['Id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['username']; ?>">
					</td>
				</tr>
				<tr>
					<td><p align="center">Email</p></td>
					<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>
				<tr>
					<td><p align="center">Nomor Tlp</p></td>
					<td><input type="text" name="no_tlp" value="<?php echo $d['phoneno']; ?>"></td>
				</tr>
				<tr>
				<tr>
					<td><p align="center">Alamat</p></td>
					<td><input type="text" name="address" value="<?php echo $d['address']; ?>"></td>
				</tr>
				<tr>
				
				<tr>
					<td><p align="center">Password</p></td>
					<td><input type="text" name="password" value="<?php echo $d['password']; ?>"></td>
				</tr>
				<tr>
					<td><p align="center">Remarks</p></td>
					<td><input type="text" name="remarks" value="<?php echo $d['remarks']; ?>"></td>
				</tr>
				<tr>
				
					<td><p align="center">Tanggal Buat</p></td>
					<td><input type="text" name="date" value="<?php echo $d['datecreated']; ?>"></td>
				</tr>
				<tr>
					<td><p align="center">Status</p></td>
					<td><input type="number" name="status" value="<?php echo $d['status']; ?>"></td>
				</tr>
				<tr>
					<td><p align="center"></p></td>
					<td><input type="submit" value="SIMPAN"></td>
									
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>