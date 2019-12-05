
<?php
include "../connectdb.php";

$sql = "update setting set status='TERBUKA' where nilai='1'";
$result = $link->query($sql);
// echo '<script language="javascript">alert("Berhasil Menambahkan"); document.location="viewregister.php";</script>';
header('location: status.php');
?>