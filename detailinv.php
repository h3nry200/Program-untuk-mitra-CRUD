<?php
include "header.php";
?>
	<h3 align="center">DETAIL INVOICE</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from tblinvoice where Id='$id'");

	
	while($d = mysqli_fetch_array($data)){
		?>
        <br>
		<form method="post" action="">
			<table align="center" >
		<table width="100%"  border="1" align="center">
			<tr>
			
			<th><p align="center">NAMA</p></th>
			<th><p align="center">USER EMAIL</p></th>
			<th><p align="center">NO INV</p></th>
			<th><p align="center">ALAMAT</p></th>
			<th><p align="center">KOTA</p></th>
			<th><p align="center">TANGGAL ORDER</p></th>
			<th><p align="center">HARGA</p></th>
			<th><p align="center">TIPE SURVEY</p></th>
			<th><p align="center">KETERANGAN</p></th>
			<th><p align="center">STATUS</p></th>
			<th><p align="center">NAMA BANK ACCOUNT</p></th>
			<th><p align="center">NOMOR BANK ACCOUNT</p></th>			
			<th><p align="center">NAMA BANK</p></th>
			<th><p align="center">TANGGAL TRANSFER</p></th>
			<th><p align="center">JUMLAH BAYAR</p></th>
			<th colspan="2"><p align="center">OPSI</p></th>
			</tr>
			
			<tr>
				<td hidden><p align="center"><?php echo $d['Id']; ?></p></td>
				<td><p align="center"><?php echo $d['name_to']; ?></p></td>
				<td><p align="center"><?php echo $d['sales_id']; ?></p></td>
				<td><p align="center"><?php echo $d['invoice_no']; ?></p></td>
				<td><p align="center"><?php echo $d['address_to']; ?></p></td>
				<td><p align="center"><?php echo $d['service']; ?></p></td>
				<td><p align="center"><?php echo $d['datecreated']; ?></p></td>
				<td><p align="center"><?php echo $d['payment_amount']; ?></p></td>
				<td><p align="center"><?php echo $d['courier']; ?></p></td>
				<td><p align="center"><?php echo $d['remarks']; ?></p></td>
				<td><p align="center"><?php echo $d['status']; ?></p></td>
				<td><p align="center"><?php echo $d['account_name']; ?></p></td>
				<td><p align="center"><?php echo $d['account_no']; ?></p></td>
				<td><p align="center"><?php echo $d['bank_name']; ?></p></td>
				<td><p align="center"><?php echo $d['payment_date']; ?></p></td>
				<td><p align="center"><?php echo $d['transfer_receive']; ?></p></td>
				<td><p align="center">
					<a href="updatekonfirm.php?id=<?php echo $d['Id']; ?>">KONFIRM BAYAR</a>
					</p></td>
					<td><p align="center">
					<a href="invoice.php">BACK</a>
				</tr>
			
						
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>