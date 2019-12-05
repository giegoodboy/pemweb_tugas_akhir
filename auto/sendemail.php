<?php
    include "../connectdb.php";
    $email = $_POST['email'];
    $npm = $_POST['npm'];
    
    $Cari="SELECT * FROM register where approve='1' and email_reg='$email' and npm='$npm'";
    $Tampil = $link->query($Cari);
    $nomer=0;
    foreach( $Tampil as $hasil) {
            $npm              = stripslashes ($hasil['npm']);
            $nama    = stripslashes ($hasil['nama']);
            $username          = stripslashes ($hasil['username']);
            $password              = stripslashes ($hasil['password']);
            $email_reg          = stripslashes ($hasil['email_reg']);
            $bidang_reg              = stripslashes ($hasil['bidang_reg']);
        {
?>
  <!--<tr>-->
  <!--      <td><?=$nomer?></td>-->
  <!--      <td><?=$npm?></td>-->
  <!--      <td><?=$nama?></td>-->
  <!--      <td><?=$username?></td>-->
  <!--      <td><?=$password?></td>-->
  <!--      <td><?=$email_reg?></td>-->
  <!--      <td><?=$bidang_reg?></td>-->
  <!--</tr>-->
   <?php  
        }
    }

?>

<?php
    include "../connectdb.php";
    $email = $_POST['email'];
    
    
    if($Tampil->rowCount() > 0){
        
    ini_set( 'display_errors', 1 );   
    error_reporting( E_ALL );    
    $from = "noreplay@lpw.online";    
    $to = $email;    
    $subject = "Checking Confrim Password";    
    $message = "npm: $npm , nama: $nama , username: $username ,password:   $password , email: $email_reg ,bidang: $bidang_reg ";   
    $headers = "From:" . $from;    
    mail($to,$subject,$message, $headers); 
    echo '<script language="javascript">alert("Silahkan Cek Email untuk Konfirmasi"); document.location="/index.html";</script>';
    }
    else{
    echo '<script language="javascript">alert("Maaf Data yang anda masukan salah atau tidak valid"); document.location="index.html";</script>';
    }

?>