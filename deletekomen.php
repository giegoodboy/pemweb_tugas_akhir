

<?php
include "connectdb.php";

$data = $_POST['yoi'];
$tes = $data;
$sql = "DELETE FROM komentar WHERE id_komen = '$tes'";
$conn = $link->query($sql);
 header('location: viewdeletekomen.php');
?>