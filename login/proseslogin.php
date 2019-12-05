<?php 

include "connectdb.php";
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
 
$query =  $link->query("select * from administrator where username_admin='$username' and password_admin='$password'");
$query1 =  $link->query("select * from register where username='$username' and password='$password' and approve='1'");
// $query1 = $link->query("select * from registrasi where username='$username' and pass='$password'");

// echo $query->rowCount();

if($query->rowCount()>0){
    // Jika false maka akan muncul alert\
    echo '<script language="javascript">alert("Anda berhasil Login !"); document.location="../fsbfhsbfhsfhuwey4728t276.php";</script>';

}
elseif($query1->rowCount()>0){
    // Jika false maka akan muncul alert\
    echo '<script language="javascript">alert("Anda berhasil Login !"); document.location="../dashboarduser.php";</script>';

}
else{
    // Jika false maka akan muncul alert\
  
    echo '<script language="javascript">alert("Anda Gagal Login !"); document.location="login.php";</script>';

}
// if(pg_num_rows($query1)>0){
//     // Jika false maka akan muncul alert\
//      $_SESSION['status'] = "login";
//     echo '<script language="javascript">alert("Anda berhasil Login !"); document.location="tampiluser.php";</script>';
    
//     /*header('location: index.html');
//     exit()*/
// }
// else{
//     echo '<script language="javascript">alert("Tidak bisa Login !"); document.location="index.php";</script>';
   
// }

?>