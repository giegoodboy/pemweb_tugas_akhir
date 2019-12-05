<!DOCTYPE html>
<html>
<head>
	<title>coba tampil photo</title>
</head>
<?php 
mysql_connect("localhost","root","","oprek");

$sql=mysql_query("SELECT * FROM pendaftaran");
while ($data=mysql_fetch_array($sql)) {
?>
<body>
<table>
	<tr>
		<th>photo</th>
	</tr>
	<tr>
		<td><?="<img src='image/".$data['photo']."'style='width:200px; height:200px;'"?></td>
	</tr>
<?php } ?>
</table>

</body>
</html>