<?php
include "header.php";
?>
	<h3 align="center">KONFIRMASI PEMBAYARAN</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from tblinvoice where Id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
        <br>
		<form method="post" action="updatekonfirm.php">
			<table align="center" >
		
				<tr>	
	
					<td><p align="center">Nama</p></td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['Id']; ?>">
						<input readonly type="text" name="nama" value="<?php echo $d['name_to']; ?>">
					</td>
				</tr>
				<tr>
					<td><p align="center">No Invoice</p></td>
					<td><input readonly type="text" name="noinv" value="<?php echo $d['invoice_no']; ?>"></td>
				</tr>
				<tr>
					<td><p align="center">Harga</p></td>
					<td><input readonly type="text" name="harga" value="<?php echo $d['payment_amount']; ?>"></td>
				</tr>
				
				<tr>
					<td><p align="center">Nomor Bank Account</p></td>
					<td><input readonly type="text" name="nobank" value="<?php echo $d['account_no']; ?>"></td>
				</tr>
				<tr>
					<td><p align="center">Nama Account Bank</p></td>
					<td><input readonly type="text" name="namabank" value="<?php echo $d['account_name']; ?>"></td>
				</tr>
				<tr>
					<td><p align="center">Nama Bank</p></td>
					<td><input readonly type="text" name="nabank" value="<?php echo $d['bank_name']; ?>"></td>
				</tr>
				<tr>
					<td><p align="center">Tanggal Bayar</p></td>
					<td><input readonly type="text" name="date" value="<?php echo $d['payment_date']; ?>"></td>
				</tr>
				<tr>
					<td><p align="center">Status</p></td>
					
					<td><input type="text" name="status" value="<?php echo $d['status']; ?>"></td> 
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