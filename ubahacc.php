
<?php
include "connectdb.php";

$data = $_POST['skuy'];
$tes = $data;
echo "$tes";
$sql = "DELETE from register where npm='$tes'";
$result = $link->query($sql);
 header('location: viewregisteracc.php');
// echo "$tes";
?>

