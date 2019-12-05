<?php 

include "../connectdb.php";
 
$query =  $link->query("select * from setting where status='TERBUKA'");
$query1 =  $link->query("select * from setting where status='DITUTUP'");
// $query1 = $link->query("select * from registrasi where username='$username' and pass='$password'");

// echo $query->rowCount();

if($query->rowCount()>0){
    // Jika false maka akan muncul alert\
    header('location: index.html');

}
elseif($query1->rowCount()>0){
    // Jika false maka akan muncul alert\
    header('location: tutupform.php');

}
else{
    // Jika false maka akan muncul alert\
  
    header('location: index.html');

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