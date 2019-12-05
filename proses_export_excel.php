<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Pendaftaran Baru KoLU.xls");
?>
<h3>Data Pendaftaran Baru</h3>
    
<table border="1" cellpadding="5">
  <tr>
    <th>No</th>
    <th>Nama Mahasiswa</th>
    <th>Npm</th>
    <th>Jurusan</th>
    <th>No hp</th>
    <th>Email</th>
    <th>idline</th>  
    <th>L/P</th>
    <th>Alamat</th> 
    <th>divisi1</th>
    <th>divisi2</th>
    <th>keterangan</th> 
  </tr>
  <?php
  // Load file koneksi.php
  include "connectdb.php";
  
  // Buat query untuk menampilkan semua data siswa
    $Cari="SELECT * FROM pendaftaran_baru";
    $Tampil = $link->query($Cari);
  
  $no = 1; // Untuk penomoran tabel, di awal set dengan 1
  // while($data = $Cari->fetch())
  foreach( $Tampil as $data){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$no."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['angkatan']."</td>";
    echo "<td>".$data['jurusan']."</td>";
    echo "<td>".$data['telp']."</td>";
    echo "<td>".$data['email_baru']."</td>";
    echo "<td>".$data['id_line']."</td>";
    echo "<td>".$data['jenis_kelamin']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td>".$data['devisi1']."</td>";
    echo "<td>".$data['devisi2']."</td>";
    echo "<td>".$data['keterangan']."</td>";
    echo "</tr>";

    $no++; // Tambah 1 setiap kali looping
  }
  ?>
</table>