

<?php
include "connectdb.php";

$data = $_POST['yoi'];
$tes = $data;
$sql = "DELETE FROM post WHERE id_post = '$tes'";
$conn = $link->query($sql);
 header('location: insertpost.php');
?>