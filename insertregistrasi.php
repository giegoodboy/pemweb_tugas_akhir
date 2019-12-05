<?php 
include 'connectdb.php';

$host       =  "localhost";
$dbuser     =  "lpwwebid_pemweb";
$dbpass     =  "ramaandika123";
$port       =  "5432";
$dbname     =  "lpwwebid_oprec";

$nama = $_POST['nama'];
$npm = $_POST['npm'];
$username = $_POST['username'];
$password = $_POST['password'];
$email_reg = $_POST['email'];
$bidang_reg = $_POST['divisi'];
$approve ='0';

// if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
//   	}
//   else {
  	
//   }
$pdo = new PDO("pgsql:host=$host;dbname=$dbname","lpwwebid_pemweb","ramaandika123");

$opsi = "select * from register where npm='$npm'";
$opsi = $pdo->query($opsi);

// print_r($opsi->rowCount());

if($opsi->rowCount() > 0){
    // Jika false maka akan muncul alert\
    echo '<script language="javascript">alert("Maaf Data yang anda masukan Sudah ada !"); document.location="registrasi";</script>';
 }
  else{

	$sql = "insert into register (npm,nama,username,password,email_reg,bidang_reg,approve) values ('$npm','$nama','$username','$password','$email_reg','$bidang_reg',$approve)";
	$result = $pdo->query($sql);

  echo '<script language="javascript">alert("Data telah sukses dikirim mohon tunggu konfirmasi dari Admin!"); document.location="index.html";</script>';
	// echo '<script language="javascript">alert("Data Telah Terupload !"); document.location="index.php";</script>';

}

?>