<?php
include "header.php";
?>
 
	<h2 align="center">USER ADMINISTRATOR</h2>
	<br/>
<div "container" align="center">
	<a href="tambah.php" align="center">+ TAMBAH DATA</a>
	<br/>
	<br/>

		
	<table width="80%"  border="1" align="center">
		<tr >
			<th><p align="center">NO</p></th>
			<th><p align="center">NAMA</p></th>
			<th><p align="center">EMAIL</p></th>
			<th><p align="center">PASSWORD</p></th>
			<th><p align="center">ALAMAT</p></th>
			<th><p align="center">TANGGAL BUAT</p></th>
			<th><p align="center">STATUS</p></th>
			<th colspan="2"><p align="center">OPSI</p></th>
        </tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tblusers");
		while($d = mysqli_fetch_array($data)){
			?>

			<tr>
				<td><p align="center"><?php echo $no++; ?></p></td>
				<td><p align="center"><?php echo $d['fullname']; ?></p></td>
				<td><p align="center"><?php echo $d['email']; ?></p></td>
				<td><p align="center"><?php echo $d['password']; ?></p></td>
				<td><p align="center"><?php echo $d['address']; ?></p></td>
				<td><p align="center"><?php echo $d['datecreated']; ?></p></td>
				<td><p align="center"><?php echo $d['status']; ?></p></td>
				<td><p align="center">
					<a href="edit.php?id=<?php echo $d['Id']; ?>">EDIT</a>
					</p></td>
					<td><p align="center">
					<a href="hapus.php?id=<?php echo $d['Id']; ?>">HAPUS</a>
					</p></td>
					
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