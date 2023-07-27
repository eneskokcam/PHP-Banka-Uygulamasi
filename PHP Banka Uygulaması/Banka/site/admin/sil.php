
<?php
include ("../../baglanti.php"); 
include ("adminheader.php"); 

?>
<div class="full_bg">
<div class= "ml-5 ">
  <div class= "ml-5">
  <div class= "ml-5 ">
  <div class= "ml-5 "> 
  <a href="index.html"><img src="../../images/logoxx.png" style= "width:120px; height:100px" alt="#" /></a>
  </div>
  </div>
  </div>
  </div>

  <div class="container p-5">

<?php

$hesapno = $_GET['id'];

$sorgu = "SELECT * FROM musteriler WHERE user_id='$hesapno'";
$verileriCek = mysqli_query($baglanti,$sorgu);
$kayitlar=mysqli_fetch_array($verileriCek);

$ad = $kayitlar['ad'];
$soyad = $kayitlar['soyad'];
$email = $kayitlar['email'];
$tcno = $kayitlar['tcno'];
$il = $kayitlar['il'];
$ilce = $kayitlar['ilce'];
$telno = $kayitlar['telno'];


    $islem = $baglanti->query("DELETE FROM musteriler WHERE user_id='$hesapno'");
    $islem2 = $baglanti->query("DELETE FROM musteri_giris WHERE user_id='$hesapno'");
    
  if($islem && $islem2)
  {
    echo "
    <script>
    alert('Kayıt başarıyla silindi.');
    window.location.href = 'adminindex.php?page=musteriler'
    </script>";


  }
  else
  {
    echo "
    <script>
    alert('Kayıt silinemedi');
    window.location.href = 'adminindex.php?page=musteriler'
    </script>";

  }
   

 ?>
</div>

  </div>