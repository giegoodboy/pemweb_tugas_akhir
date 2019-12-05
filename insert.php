<?php 
include 'connectdb.php';

$host       =  "localhost";
$dbuser     =  "lpwwebid_pemweb";
$dbpass     =  "ramaandika123";
$port       =  "5432";
$dbname     =  "lpwwebid_oprec";

$nama = $_POST['jeneng'];
$telp = $_POST['nohp'];
$jenis_kelamin = $_POST['jeniskelamin'];
$email = $_POST['Email'];
$alamat = $_POST['Alamat'];
$divisi1 = $_POST['divisi1'];
$divisi2 = $_POST['divisi2'];
$jurusan = $_POST['jurusan'];
$angkatan = $_POST['angkatan'];
$idline = $_POST['idline'];
$keterangan = $_POST['ket'];
$photo = $_FILES['photo']['name'];
$target = "image/".basename($photo);



if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
  	}
  else {
  	
  }
$pdo = new PDO("pgsql:host=$host;dbname=$dbname","lpwwebid_pemweb","ramaandika123");
// $msg = "";
//   if (isset($_POST['upload'])) {
//   	$image = $_FILES['photo']['name'];
// $nama = $_POST['namalengkap'];
// $telp = $_POST['nohp'];
// $jenis_kelamin = $_POST['jeniskelamin'];
// $email = $_POST['Email'];
// $alamat = $_POST['Alamat'];
// $divisi1 = $_POST['divisi1'];
// $divisi2 = $_POST['divisi2'];
// $jurusan = $_POST['jurusan'];
// $angkatan = $_POST['angkatan'];
//   	$target = "images/".basename($image);
 
  	// $sql = "INSERT INTO pendaftaran (nama, telp, jenis_kelamin,email,alamat,divisi1,divisi2,jurusan,angkatan,image) values ('$nama','$telp','$jenis_kelamin','$email','$alamat','$divisi1','$divisi2','$jurusan','$angkatan','$photo')";
  	// mysqli_query($koneksi, $sql);
 
  // 	if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
  // 	$msg = "Image uploaded successfully";
  // 	}else{
  // 	$msg = "Failed to upload image";
  // 	}
  // }
 
// $sql="INSERT INTO pendaftaran (nama, telp, jenis_kelamin,email,alamat,divisi1,divisi2,jurusan,angkatan,photo) values ('$nama','$telp','$jenis_kelamin','$email','$alamat','$divisi1','$divisi2','$jurusan','$angkatan','(photo='$photo')')";
$opsi = "select * from pendaftaran_baru where angkatan='$angkatan'";
$opsi = $pdo->query($opsi);
$opsi1 = "select * from setting where status='DITUTUP'";
$opsi1 = $pdo->query($opsi1);


// print_r($opsi->rowCount());
if ($_FILES['photo']['name'] > 1000000) {
  echo '<script language="javascript">alert("Maaf FILE terlalu Besar !"); document.location="form/index.html";</script>';
}
elseif ($opsi1->rowCount() > 0) {

  echo '<script language="javascript">alert("Pendaftaran Sudah Ditutup, Form Kadaluwarsa ! dan Anda seharusnya tidak membuka form ini hati - hati dengan tindakan anda!!"); document.location="index.html";</script>';
}

elseif($opsi->rowCount() > 0){
    // Jika false maka akan muncul alert\
    echo '<script language="javascript">alert("Maaf Data Npm yang anda masukan Sudah ada !"); document.location="form/index.html";</script>';
 }
  else{
	$sql = "insert into pendaftaran_baru(nama,telp,jenis_kelamin,email_baru,alamat,devisi1,devisi2,jurusan,angkatan,id_line,keterangan,photo) values ('$nama','$telp','$jenis_kelamin','$email','$alamat','$divisi1','$divisi2','$jurusan','$angkatan','$idline','$keterangan','$photo')";
	$result = $pdo->query($sql);

	$sql1 = "insert into backup_pendaftaran(nama_b,telp_b,jenis_kelamin_b,email_baru_b,alamat_b,devisi1_b,devisi2_b,jurusan_b,angkatan_b,id_line_b,keterangan_b,photo_b) values ('$nama','$telp','$jenis_kelamin','$email','$alamat','$divisi1','$divisi2','$jurusan','$angkatan','$idline','$keterangan','$photo')";
	$result = $pdo->query($sql1);
  echo '<script language="javascript">alert("Data telah sukses diupload !"); document.location="popup.php";</script>';
	// echo '<script language="javascript">alert("Data Telah Terupload !"); document.location="index.php";</script>';

}

// mysqli_query($koneksi, "insert into pendaftaran set nama='$nama',telp='$telp',jenis_kelamin='$jenis_kelamin',email='$email',alamat='$alamat',divisi1='$divisi1',divisi2='$divisi2',jurusan='$jurusan',angkatan='$angkatan',idline='$idline',keterangan='$keterangan',photo='$photo'");

// $result = mysqli_query($koneksi,$sql);
// // mysqli_query($connectdb, $query);
// echo"$sql";
// $result = mysqli_query($connectdb, "SELECT * FROM images");

?>