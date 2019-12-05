<?php 
include 'connectdb.php';

$host       =  "localhost";
$dbuser     =  "lpwwebid_pemweb";
$dbpass     =  "ramaandika123";
$port       =  "5432";
$dbname     =  "lpwwebid_oprec";

$id_post =uniqid();
$judul   = $_POST['judul'];
$isi     = $_POST['isi'];
$tanggal = date('d-m-Y-H:i:s');

// if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
//   	}
//   else {
  	
//   }
$pdo = new PDO("pgsql:host=$host;dbname=$dbname","lpwwebid_pemweb","ramaandika123");

$opsi = "select * from post where id_post='$id_post'";
$opsi = $pdo->query($opsi);

// print_r($opsi->rowCount());

if($opsi->rowCount() > 0){
    // Jika false maka akan muncul alert\
    echo '<script language="javascript">alert("Maaf Data yang anda masukan Sudah ada !"); document.location="index.html";</script>';
}
  else{

	$sql = "insert into post (id_post,judul,isi,tgl) values ('$id_post','$judul','$isi','$tanggal')";
	$result = $pdo->query($sql);
	// echo "$sql";
  header('location: insertpost.php');
	// echo '<script language="javascript">alert("Data Telah Terupload !"); document.location="index.php";</script>';

}

?>