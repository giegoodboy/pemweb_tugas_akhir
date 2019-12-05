

<?php
include "connectdb.php";

$data = $_POST['yoi'];
$tes = $data;
$sql = "DELETE FROM pendaftaran_baru WHERE angkatan = '$tes'";
$conn = $link->query($sql);
echo '<script language="javascript">alert("Data telah sukses dihapus !"); document.location="tabledataall.php";</script>';
?>