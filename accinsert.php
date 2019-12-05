
<?php
include "connectdb.php";

$data = $_POST['yoi'];
$tes = $data;
echo "$tes";
$sql = "update register set approve=1 where npm= '$tes'";
$result = $link->query($sql);
echo '<script language="javascript">alert("Berhasil Menambahkan"); document.location="viewregister.php";</script>';
?>