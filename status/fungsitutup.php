
<?php
include "../connectdb.php";

$sql = "update setting set status='DITUTUP' where nilai='1'";
$result = $link->query($sql);
header('location: status.php');
?>