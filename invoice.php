<?php
include "header.php";
?>
 
	<h2 align="center">DATA INVOICE</h2>
	<br/>
<div "container" align="center">
<!--	<a href="tambah.php" align="center">+ TAMBAH DATA</a> -->
	<br/>
	<br/>

	<?php 
		include 'koneksi.php';
		?>
 
		<br/><br/><br/>
 
		<form method="get" align="center">
			<label >SILAKAN PILIH TANGGAL</label>
			<input type="date" name="tanggal">
						<label >AND</label>
						<input type="date" name="tanggal2">

			<input type="submit" value="FILTER">
		</form>
 
		<br/> <br/>
 
		<table width="80%"  border="1" align="center">
			<tr>
			<th><p align="center">NO</p></th>
			<th><p align="center">NAMA</p></th>
			<th><p align="center">USER EMAIL</p></th>
			<th><p align="center">NO INV</p></th>
			<th><p align="center">ALAMAT</p></th>
			<th><p align="center">KOTA</p></th>
			<th><p align="center">TIPE SURVEY</p></th>
			<th><p align="center">ZIPCODE</p></th>
			<th><p align="center">TANGGAL ORDER</p></th>
			<th><p align="center">HARGA</p></th>			
			<th><p align="center">STATUS</p></th>
			<th colspan="2"><p align="center">OPSI</p></th>
			</tr>
			<?php 
			$no = 1;
 
			if(isset($_GET['tanggal'])){
				$tgl = $_GET['tanggal'];
								$tgl2 = $_GET['tanggal2'];
				$sql = mysqli_query($koneksi,"select * from tblinvoice where datecreated between '$tgl' and '$tgl2'");
			}else{
				$sql = mysqli_query($koneksi,"select * from tblinvoice");
			}
			
			while($d = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><p align="center"><?php echo $no++; ?></p></td>
				<td><p align="center"><?php echo $d['name_to']; ?></p></td>
				<td><p align="center"><?php echo $d['sales_id']; ?></p></td>
				<td><p align="center"><?php echo $d['invoice_no']; ?></p></td>
				<td><p align="center"><?php echo $d['address_to']; ?></p></td>
				<td><p align="center"><?php echo $d['service']; ?></p></td>
				<td><p align="center"><?php echo $d['courier']; ?></p></td>
				<td><p align="center"><?php echo $d['zipcode_to']; ?></p></td>
				<td><p align="center"><?php echo $d['datecreated']; ?></p></td>
				<td><p align="center"><?php echo $d['payment_amount']; ?></p></td>
			
				<td><p align="center"><?php echo $d['status']; ?></p></td>
				<td><p align="center">
					<a href="detailinv.php?id=<?php echo $d['Id']; ?>">DETAIL</a>
					</p></td>
					<td><p align="center">
					<a href="hapusinv.php?id=<?php echo $d['Id']; ?>">HAPUS</a>
			</tr>
			<?php 
			}
			?>
		</table>
	

	</div>
	<br>
	<br>
<?php
include "footer.php";
?>