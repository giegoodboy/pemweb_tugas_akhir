<?php 
include 'connectdb.php';

$host       =  "localhost";
$dbuser     =  "lpwwebid_pemweb";
$dbpass     =  "ramaandika123";
$port       =  "5432";
$dbname     =  "lpwwebid_oprec";

$nomer=uniqid();
$nama = $_POST['nama'];
$email = $_POST['email'];
$komentar = $_POST['komentar'];

// if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
//   	}
//   else {
  	
//   }
$pdo = new PDO("pgsql:host=$host;dbname=$dbname","lpwwebid_pemweb","ramaandika123");

$opsi = "select * from komentar where id_komen='$id_komen'";
$opsi = $pdo->query($opsi);

// print_r($opsi->rowCount());

if($opsi->rowCount() > 0){
    // Jika false maka akan muncul alert\
    echo '<script language="javascript">alert("Maaf Data yang anda masukan Sudah ada !"); document.location="index.html";</script>';
}
  else{

	$sql = "insert into komentar (id_komen,email_komen,komentar,nama_k) values ('$nomer','$email','$komentar','$nama')";
	$result = $pdo->query($sql);
	// echo "$sql";
  header('location: index.html');
	// echo '<script language="javascript">alert("Data Telah Terupload !"); document.location="index.php";</script>';

}

?>