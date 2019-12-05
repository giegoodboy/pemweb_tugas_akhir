<?php 
include 'connectdb.php';

$host       =  "localhost";
$dbuser     =  "lpwwebid_pemweb";
$dbpass     =  "ramaandika123";
$port       =  "5432";
$dbname     =  "lpwwebid_oprec";

$nama = $_POST['nama'];
$npm = $_POST['npm'];
$divisi = $_POST['divisi'];

// if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
//   	}
//   else {
  	
//   }
$pdo = new PDO("pgsql:host=$host;dbname=$dbname","lpwwebid_pemweb","ramaandika123");

$opsi = "select * from pendaftaran_baru where angkatan='$npm'";
$opsi = $pdo->query($opsi);
$opsi1 = "select * from backup_data_devisi where npm_anggota_b='$npm'";
$opsi1 = $pdo->query($opsi1);


// print_r($opsi->rowCount());

if($opsi1->rowCount() > 0){
    // Jika false maka akan muncul alert\
    echo '<script language="javascript">alert("Npm Sudah Terdaftar"); document.location="index.html";</script>';
    // echo "$opsi1";
	}
	elseif($opsi->rowCount() > 0){
    // Jika false maka akan muncul alert\
	    $sql = "insert into data_devisi (nama_anggota,npm_anggota,devisi_dipilih) values ('$nama','$npm','$divisi')";
		$result = $pdo->query($sql);
		$sql1 = "insert into backup_data_devisi (nama_anggota_b,npm_anggota_b,divisi_dipilih_b) values ('$nama','$npm','$divisi')";
		$result = $pdo->query($sql1);
		// echo "$sql";
	  	echo '<script language="javascript">alert("Selamat Bergabung"); document.location="index.html";</script>';
  	}
  else{
	   echo '<script language="javascript">alert("Npm yang anda gunakan tidak terdaftar!"); document.location="formregister";</script>';
	// echo '<script language="javascript">alert("Data Telah Terupload !"); document.location="index.php";</script>';

}

?>