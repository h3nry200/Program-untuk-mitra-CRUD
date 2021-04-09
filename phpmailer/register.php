<? php
require_once (phpmailer/mail.php)
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>AGENCY.CO.ID</title>
	<link rel="shortcut icon" href="../images/Logo Agency.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
 
<body>

<header>
  <input type="checkbox" id="tag-menu"/>
  <label class="fa fa-bars menu-bar" for="tag-menu"></label>
  <div class="jw-drawer">
 
  <nav>
      <ul>
      <!--  <li><a href="#"><i class="fa fa-facebook"></i>&nbsp;&nbsp;Facebook</a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i>&nbsp;&nbsp;Google Plus</a></li>
        <li><a href="#"><i class="fa fa-twitter"></i>&nbsp;&nbsp;Twitter</a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i>&nbsp;&nbsp;LinkedIn</a></li>
        <li><a href="#"><i class="fa fa-pinterest"></i>&nbsp;&nbsp;Pinterest</a></li> -->
		 <li class="nav-item">
		 <a class="nav-link  mr-3" href="../indexind.html">BERANDA</a>
              </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">SERVICE KAMI</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="../Outsourcingind.html">Outsourcing Hire Right</a>
                  <a class="dropdown-item" href="../Verificationind.html">Verification Trustworthy</a>
                  <a class="dropdown-item" href="../Busineesind.html">Business Process Reliable</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link mr-3" href="../visionind.html">VISI AND MISI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  mr-3" href="../aboutind.html">TENTANG KAMI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mr-3" href="../contactind.html">HUBUNGI KAMI</a>
              </li>
<li class="nav-item">
                <a class="nav-link active mr-3" href="Login.php">LOGIN</a>
              </li>
			  </ul>
    </nav>
  </div>
        <a class="navbar-brand" href="../index.html">
		<h5 class="text-white h3 font-weight-bold">AGENCY <span>.CO.ID</span></h5>

		<span class="text-muted"></span>
		  </a>

		  </header>
<br/>
 <h2 align="center">REGISTER</h2>
	<br/>
		  
		  <div class="container" align="center">
     <img src="../images/Logo Agency.png" height="300px"  width="300px"  align="center" />
</div>

<form action="" method="post">		  
<div class="container-fluid konten" >
<div class="container">
   
   <div class="row py-2">
          <div class="col-md-4">
            <h4 class="text-right courses">Nama Lengkap</h4>
          </div>
          <div class="col-md-4">
<h4><input type="text" class="form-control" name="nama_lengkap" required></h4>
          </div>
          <div class="col-md-4">
          </div>
        </div>
		
		   <div class="row py-2">
          <div class="col-md-4">
            <h4 class="text-right courses">Email</h4>
          </div>
          <div class="col-md-4">
<h4><input type="text" class="form-control" name="email" required></h4>
          </div>
          <div class="col-md-4">
          </div>
        </div>
		
		<div class="row py-2">
          <div class="col-md-4">
            <h4 class="text-right courses">Alamat Rumah</h4>
          </div>
          <div class="col-md-4">
<h4><input type="text" class="form-control" name="alamat" required></h4>
          </div>
          <div class="col-md-4">
          </div>
        </div>
		
		<div class="row py-2">
          <div class="col-md-4">
            <h4 class="text-right courses">Nomor Telepon</h4>
          </div>
          <div class="col-md-4">
<h4><input type="text" class="form-control" name="no_telp" required></h4>
          </div>
          <div class="col-md-4">
          </div>
        </div>
		
		<div class="row py-2">
          <div class="col-md-4">
            <h4 class="text-right courses">Password</h4>
          </div>
          <div class="col-md-4">
<h4><input type="text" class="form-control" name="password" required></h4>
          </div>
          <div class="col-md-4">
          </div>
        </div>
		
		<div class="row py-2">
          <div class="col-md-4">
            <h4 class="text-right courses">Konfirmasi Password</h4>
          </div>
          <div class="col-md-4">
<h4><input type="text" class="form-control" name="konfirmasi_password" required></h4>
          </div>
          <div class="col-md-4">
          </div>
        </div>
		
		  <div class="row py-2">
          <div class="col-md-4">
          </div>
          <div class="col-md-4">
<h4><input type="submit" name="register_submit" class="btn btn-success"></h4>

          </div>
          <div class="col-md-4">
          </div>
        </div>
<br>
<br>
<br>
		</div>				
		</div>	
</form>
		
<!-- <form action="" method="post">
<div class="form-group">
<label for="nama">Nama Lengkap</label>
<input type="text" class="form-control" name="nama_lengkap" required>
</div>
<div class="form-group">
<label for="nama">Email</label>
<input type="text" class="form-control" name="email" required>
</div>
<div class="form-group">
<label for="nama">Nomor Telepon</label>
<input type="text" class="form-control" name="no_telp" required>
</div>
<div class="form-group">
<label for="nama">Alamat Rumah</label>
<input type="text" class="form-control" name="alamat" required>
</div>
<div class="form-group">
<label for="nama">Password</label>
<input type="text" class="form-control" name="password" required>
</div>
<div class="form-group">
<label for="nama">Konfirmasi Password</label>
<input type="text" class="form-control" name="konfirmasi_password" required>
</div>

<div class="form-group">
<input type="submit" name="register_submit" class="btn btn-success">
</div>

</form> -->

<?php
// after clik

if(isset($_POST['register_submit'])){

	
//koneksi sql_reg
$connect = mysqli_connect('localhost','root','123','wahw2679_db_pempek3') or die(mysqli_connect_error());
	
//tampung value
$nama_lengkap = mysqli_real_escape_string($connect, trim($_POST['nama_lengkap']));
$email = mysqli_real_escape_string($connect, trim($_POST['email']));
$no_telp = mysqli_real_escape_string($connect, trim($_POST['no_telp']));
$alamat = mysqli_real_escape_string($connect, trim($_POST['alamat']));

$password = mysqli_real_escape_string($connect, md5($_POST['password']));
$konfirmasi = mysqli_real_escape_string($connect, md5($_POST['konfirmasi_password']));

$cek_username=mysqli_num_rows(mysqli_query ($connect,"SELECT username FROM tblcontact WHERE username='$_POST[nama_lengkap]'"));
$cek_email = mysqli_num_rows(mysqli_query ($connect,"SELECT email FROM tblcontact WHERE email='$_POST[email]'"));

 
if ($cek_username >0) {
    echo "<div id='gagal' class='alert alert-danger'>Maaf Nama Anda sudah terdaftar<button type='button' class='close' data-dismiss='alert'><i class='fa fa-times'></i></button></div>";
}
else if ($cek_email >0){
    echo "<div id='gagal' class='alert alert-danger'>Mohon maaf Email anda sudah terdaftar<button type='button' class='close' data-dismiss='alert'><i class='fa fa-times'></i></button></div>";

	// cek apakah konfirmasi password benar?
}
else if($password != $konfirmasi){
 echo "<div id='gagal' class='alert alert-danger'>Maaf Konfirmasi password salah<button type='button' class='close' data-dismiss='alert'><i class='fa fa-times'></i></button></div>";
//redirect
//header('location: register.php?konfirmasipassword-failed');
} 
else {	
$sql =' insert into tblcontact (id,password,email,phoneno,username,status) value("","'.$password.'","'.$email.'","'.$no_telp.'","'.$nama_lengkap.'",3)';
mysqli_query($connect, $sql);

mail($to,$subject,$message,$header);

 echo "<script>alert('Terima Kasih Sudah Melakukan Registrasi, Silakan Login');window.location='login.php'</script>";
//header("location:login.php" );
}
}
?>

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
<div class="floatwa">
<a href="https://wa.me/6281311991686?text=Hai Pempek.id." target="_blank"><div class="tombolwa">CHAT WHATSAPP</div></a></div>

    <div class="container-fluid footer2">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <p><a class="navbar-brand text-white font-weight-bold" href="index.html"> AGENCY <span>.CO.ID</span></a>  <span class="text-muted">&copy;2019 PRIVACY POLICY</span></p>
								
		  </div>
    
        </div>
      </div>
	     </div>
		
		
<!--Add the following script at the bottom of the web page (before </body></html>)-->
<script type="text/javascript">function add_chatinline(){var hccid=92226694;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline(); </script>		
		 <script src="../js/jquery-3.2.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	
</body>
</html>