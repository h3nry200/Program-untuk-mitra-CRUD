<?php
include "classes/class.phpmailer.php";
session_start();
if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum_login");
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>AGENCY.CO.ID</title>
	<link rel="shortcut icon" href="images/Logo Agency.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
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
		 <a class="nav-link mr-3" href="indexindlogin.html">BERANDA</a>
              </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-3" data-toggle="dropdown" href="index.html" role="button" aria-haspopup="true" aria-expanded="false">SERVICE KAMI</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="Outsourcingindlogin.html">Outsourcing Hire Right</a>
                  <a class="dropdown-item" href="Verificationindlogin.html">Verification Trustworthy</a>
                  <a class="dropdown-item" href="Busineesindlogin.html">Business Process Reliable</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link mr-3" href="visionindlogin.html">VISI AND MISI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  mr-3" href="aboutindlogin.html">TENTANG KAMI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mr-3" href="contactindlogin.html">HUBUNGI KAMI</a>
              </li>
            <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle mr-3" data-toggle="dropdown" href="index.html" role="button" aria-haspopup="true" aria-expanded="false"><iframe src="indexind.php" border="0" framspacing="0" align="right-side" marginheight="0" marginwidth="0" vspace="0" hspace="0" frameborder="0"  scrolling="no" height="18px" width="180px" ></iframe></a>
                <div class="dropdown-menu">
				<a class="dropdown-item" href="#">Order</a>
                  <a class="dropdown-item" href="Logout.php">LOG OUT</a>
                </div>
              </li>		  
			  </ul>
    </nav>
  </div>
        <a class="navbar-brand" href="index.html">
		<h5 class="text-white h3 font-weight-bold">AGENCY <span>.CO.ID</span></h5>

		<span class="text-muted"></span>
		  </a>

		  </header>
<br/>
 <h2 align="center">ORDER</h2>
	<br/>
		  


<form action="" method="post">		  
<div class="container-fluid konten" >
<div class="container">

   <div class="row py-2"hidden>
          <div class="col-md-4"hidden>
            <h4 class="text-right courses">Email</h4>
          </div>
          <div class="col-md-4" hidden>
<h4> <input type="text" class="form-control" name="email" value="<?php echo $_SESSION['username'];?>"> </h4>

          </div>
          <div class="col-md-4"hidden>
          </div>
        </div>
		
				<div class="row py-2">
          <div class="col-md-3">
            <h4 class="text-left courses">No Invoice</h4>
          </div>
          <div class="col-md-3">
		  <?php
		  $connect = mysqli_connect('localhost','root','123','wahw2679_db_pempek3') or die(mysqli_connect_error());

$query = 'SELECT Max(invoice_no) AS kode FROM tblinvoice';

$hasil=mysqli_query($connect,$query);
$data=mysqli_fetch_array($hasil);
$idmax=$data['kode'];

//membuat nomor unik baru, perintah sprintf untuk menjadikan string menjadi 5 digit (00001)
$nomor=$idmax++;
$nomorpen =sprintf("%05s",$idmax); //untuk kode awal dapat disesuaikan sendiri
?>

<h4><input type="text" class="form-control" name="no_inv" value= "<?php echo "$nomorpen";?>" readonly></h4>
          </div>
          <div class="col-md-3">
          </div>
		  <div class="col-md-3">
          </div>
        </div>
		
   <div class="row py-2">
          <div class="col-md-3">
            <h4 class="text-left courses">Nama Lengkap</h4>
          </div>
          <div class="col-md-3">
<h4><input type="text" class="form-control" name="nama_lengkap" required></h4>
          </div>
          <div class="col-md-3">
          </div>
		  <div class="col-md-3">
          </div>
        </div>  
		
		<div class="row py-2">
          <div class="col-md-3">
            <h4 class="text-left courses">Alamat Survey</h4>
          </div>
          <div class="col-md-3">
<h4><input type="text" class="form-control" name="alamat" required></h4>
          </div>
          <div class="col-md-3">
          </div>
		  <div class="col-md-3">
          </div>
        </div>
		
				<div class="row py-2">
          <div class="col-md-3">
            <h4 class="text-left courses">Zip Code</h4>
          </div>
          <div class="col-md-3">
<h4><input type="text" class="form-control" name="zip_code" required></h4>
          </div>
          <div class="col-md-3">
          </div>
		  <div class="col-md-3">
          </div>
        </div>
		
				<div class="row py-2">
          <div class="col-md-3">
            <h4 class="text-left courses">No Telp</h4>
          </div>
          <div class="col-md-3">
<h4><input type="text" class="form-control" name="no_telp" required></h4>
          </div>
          <div class="col-md-3">
          </div>
		  <div class="col-md-3">
          </div>
        </div>
		
		
		<div class="row py-2">
          <div class="col-md-3">
            <h4 class="text-left courses">Tipe Survey</h4>
          </div>
          <div class="col-md-3">
<h4><select id="kategori" name="tipe_survey" onchange="tampilkan()" class="form-control" required>
    <option value='0' disabled="disabled" selected/>Pilih</option>
    <option value="ID-100">Survey Rumah</option>
    <option value="ID-200">Survey Kendaraan</option>
    <option value="ID-200">Survey A</option>
    <option value="ID-200">Survey B</option>
    <option value="ID-200">Survey C</option>
	</select></h4>
          </div>
          <div class="col-md-3">
          </div>
		  <div class="col-md-3">
          </div>
        </div>
		
				<div class="row py-2">
          <div class="col-md-3">
            <h4 class="text-left courses">Keterangan</h4>
          </div>
          <div class="col-md-9">
<h4><textarea class="form-control" name="Keterangan" placeholder="Message:" rows="9" required> </textarea></h4>
          </div>
        </div>
		
		
		<div class="row py-2" hidden >
          <div class="col-md-3" hidden >
            <h4 class="text-left courses">Password</h4>
          </div>
          <div class="col-md-3" hidden>
<h4><input type="text" class="form-control" name="password" value="1" required ></h4>
          </div>
          <div class="col-md-3" hidden>
          </div>
<div class="col-md-3">
          </div>
		  </div>
		
		<div class="row py-2" hidden>
          <div class="col-md-3"  hidden>
            <h4 class="text-left courses">Konfirmasi Password</h4>
          </div>
          <div class="col-md-3" hidden>
<h4><input type="text" class="form-control" name="konfirmasi_password"  value="1"  required></h4>
          </div>
          <div class="col-md-3" hidden>
          </div>
		  <div class="col-md-3" hidden>
          </div>
        </div>
		
		  <div class="row py-2">
          <div class="col-md-4" >
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

$no_inv = mysqli_real_escape_string($connect, trim($_POST['no_inv']));
$zip_code = mysqli_real_escape_string($connect, trim($_POST['zip_code']));
$tipe_survey = mysqli_real_escape_string($connect, trim($_POST['tipe_survey']));
$keterangan = mysqli_real_escape_string($connect, trim($_POST['Keterangan']));


$password = mysqli_real_escape_string($connect, md5($_POST['password']));
$konfirmasi = mysqli_real_escape_string($connect, md5($_POST['konfirmasi_password']));


//$cek_username=mysqli_num_rows(mysqli_query ($connect,"SELECT username FROM tblcontact WHERE username='$_POST[nama_lengkap]'"));
//$cek_email = mysqli_num_rows(mysqli_query ($connect,"SELECT email FROM tblcontact WHERE email='$_POST[email]'"));


//if ($cek_username >0) {
//   echo "<div id='gagal' class='alert alert-danger'>Maaf Nama Anda sudah terdaftar<button type='button' class='close' data-dismiss='alert'><i class='fa fa-times'></i></button></div>";
//}
//else if ($cek_email >0){
 //   echo "<div id='gagal' class='alert alert-danger'>Mohon maaf Email anda sudah terdaftar<button type='button' class='close' data-dismiss='alert'><i class='fa fa-times'></i></button></div>";

	// cek apakah konfirmasi password benar?
//}
 if($password != $konfirmasi){
 echo "<div id='gagal' class='alert alert-danger'>Maaf Konfirmasi password salah<button type='button' class='close' data-dismiss='alert'><i class='fa fa-times'></i></button></div>";
//redirect
//header('location: register.php?konfirmasipassword-failed');
} 
else {	
$sql =' insert into tblinvoice (sales_id,invoice_no,name_to,address_to,zipcode_to,phone_to,courier,remarks) value("'.$email.'","'.$no_inv.'","'.$nama_lengkap.'","'.$alamat.'","'.$zip_code.'","'.$no_telp.'","'.$tipe_survey.'","'.$Keterangan.'")';
mysqli_query($connect, $sql);
$sql =' insert into tblkonfirmpayment (account_name,invoice_no,contact_id,remark,payment_date) value("'.$nama_lengkap.'","'.$no_inv.'","'.$email.'","'.$Keterangan.'","2019-05-14")';
mysqli_query($connect, $sql);
$sql =' insert into tblsales (contact_id,qty,remarks) value("'.$email.'","1","'.$Keterangan.'")';
mysqli_query($connect, $sql);



 echo "<script>alert('Terima Kasih, order anda akan di proses secepatnya');window.location='indexindlogin.html'</script>";
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
		 <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
</body>
</html>