<?php 
session_start();
if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum_login");
}
?>
 <h4 align="right"> <font color="red"> <?php echo $_SESSION['username'];
?></font> </h4>