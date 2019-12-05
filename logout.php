<?php
//function start lagi
session_start();

//cek apakah session terdaftar
session_unset();
session_destroy();
echo '<script language="javascript">alert("Anda berhasil Logout !"); document.location="./index.html";</script>';
?>