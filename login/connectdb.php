<?php
 
// konfigurasi koneksi
$host       =  "localhost";
$dbuser     =  "lpwwebid_pemweb ";
$dbpass     =  "ramaandika123";
$port       =  "5432";
$dbname     =  "lpwwebid_oprec";
 
// script koneksi php postgree
$link = new PDO("pgsql:host=$host;dbname=$dbname","lpwwebid_pemweb","ramaandika123"); 
 
// if($link)
// {
//     echo "Koneksi Berhasil";
// }else
// {
//     echo "Gagal melakukan Koneksi";
// }
?>