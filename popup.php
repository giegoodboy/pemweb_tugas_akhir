<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>PAGE CONFRIM</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.2.1/minty/bootstrap.min.css">
<link rel="stylesheet" href="grub/style2.css" type="text/css" />
<style>
.container { margin: 150px auto; text-align: center; }
</style>
</head>

<body style="background-color: #55aeba">
  <div class="container">
    <h1>Terima kasih Telah Menjadi Bagian dari Komunitas KOLU, untuk lebih jelasnya silahkan Bergabung didalm grub dibawah ini</h1>
    <div class="jquery-script-ads" style="margin:30px auto"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
   <!--  <a href="anggotabaru.php"><button  id="alert" class="btn btn-danger">Daftar Anggota Baru</button></a> -->
    <button id="confirm" class="btn btn-danger">Sudah Bergabung</button>
  <div id="button"><a href="#popup">Bergabung</a></div>
    
    <div id="popup">
      <div class="window">
        <a href="#" class="close-button" title="Close">X</a>
        <h5>Scan Barcode To join Grub</h5>
        <img src="grub/barcode.jpeg">
      </div>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="popup/boot4alert.js"></script>
<script>
  $("#alert").on('click',function(){
     boot4.alert(
    {
      msg: "Call Back",
      title: "Test Callback",
      callback: function() {
        console.log("callback");
      }
    },"OK");
  })
  $("#confirm").on('click',function(){
     boot4.confirm({
    msg: "Pastikan Anda Sudah Bergabung ke Dalam Grub",

    title: "Message",
    callback: function(result) {
      if(result){
        // alert('Confirmed')
        window.location = 'anggotabaru.php';
      }
      else{
        console.log("cancel");
      }
    }
  });
  })
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>