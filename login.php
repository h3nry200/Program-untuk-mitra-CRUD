<?php
include "header.php";

?>
	<br/>
	<h2 align="center">LOGIN</h2>
	<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>
<div class="container" align="center">
     <img src="images/logo-MPF-final1.png" height="200px"  width="300px"  align="left" />
</div>

	<form method="post"  action="cek_login.php">
	
    <div class="container-fluid konten">
<div class="container">
   
   <div class="row py-4">
          <div class="col-md-4">
            <h4 class="text-right courses">Email</h4>
          </div>
          <div class="col-md-4">
<h4><input type="text" name="username" placeholder="Masukkan Email"></h4>
          </div>
          <div class="col-md-4">
          </div>
        </div>
		
		   <div class="row py-2">
          <div class="col-md-4">
            <h4 class="text-right courses">Password</h4>
          </div>
          <div class="col-md-4">
<h4><input type="password" name="password" placeholder="Masukkan Password"></h4>
          </div>
          <div class="col-md-4">
          </div>
        </div>
		
		  <div class="row py-2">
          <div class="col-md-4">
          </div>
          <div class="col-md-4">
<h4><input type="submit" value="LOGIN"></h4>
<p><a href="register.php">REGISTER</a>
          </div>
          <div class="col-md-4">
          </div>
        </div>

		</div>			
		
		</div>			
 
<!--	<form method="post"  action="cek_login.php">
	
		<table align="center">
			<tr >
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>

				</tr>
<tr>
<td> </td>
</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>			
	</form> -->
	<br>
	<style>
.floatwa {
position:fixed;
bottom:0px;
right: 0px;
background-color:#2f7e49;
width:20%;
z-index:1000;
padding:2px;
margin:auto;
text-align:center;
float:none;
box-shadow: 0px -2px 10px #c0c0c0;
}

.tombolwa {
    <!-- border: 1px #56aa71 solid; -->
   
background-color:#2f7e49;
width:50%;
padding:4px;
text-align:center;
margin:0;
border-radius: 5px;
margin:auto;
text-align:center;
float:none;
}
.floatwa a{
color:white;
}
</style>

<?php
include "footer.php";
?>