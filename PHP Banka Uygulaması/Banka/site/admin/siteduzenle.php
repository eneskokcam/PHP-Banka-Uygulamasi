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

$sorgu = "SELECT * FROM genel_bilgiler";
$verileriCek = mysqli_query($baglanti,$sorgu);
$kayitlar=mysqli_fetch_array($verileriCek);

$hakkimizda = $kayitlar["hakkimizda"];



?>

<link rel="stylesheet" href="../../css/bootstrap.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


<div class= "ml-5 mt-5">
<div class= "ml-5 mr-5">



  <?php

$sorgu = "SELECT * FROM genel_bilgiler";
$verileriCek = mysqli_query($baglanti,$sorgu);
$kayitlar=mysqli_fetch_array($verileriCek);

$hakkimizda = $kayitlar["hakkimizda"];
$iletisim = $kayitlar["iletisim"];


if(isset($_POST['kaydet']))
{
    $hakkimizda2 = $_POST["hakkimizda"];
    $islem = $baglanti->query("UPDATE genel_bilgiler SET hakkimizda='$hakkimizda2'");

    if($islem)
  {
    echo "
    <script>
    alert('Kaydedildi.');
    window.location.href = 'adminindex.php?page=siteduzenle'
    </script>";


  }
  else
  {
    echo "
    <script>
    alert('Kaydedilemedi.');
    window.location.href = 'adminindex.php?page=siteduzenle'
    </script>";

  }
}

if(isset($_POST['kaydet2']))
{
    $iletisim2 = $_POST["iletisim"];
    $islemx = $baglanti->query("UPDATE genel_bilgiler SET iletisim='$iletisim2'");

    if($islemx)
  {
    echo "
    <script>
    alert('Kaydedildi.');
    window.location.href = 'adminindex.php?page=siteduzenle'
    </script>";


  }
  else
  {
    echo "
    <script>
    alert('Kaydedilemedi.');
    window.location.href = 'adminindex.php?page=siteduzenle'
    </script>";

  }
}



echo ("


<form action='adminindex.php?page=siteduzenle&hakedit=true' class='row g-4' method='post'>



<label style='color:white;' class='form-label' for='form4Example3'>HAKKIMIZDA</label>
  <div class=''>
    <textarea class='form-control' id='form4Example3' rows='4' name='hakkimizda'>
$hakkimizda
    </textarea>
    
  </div>


<div class=''>
  <button type='submit' class='btn btn-primary btn-block  ' name='kaydet'>
    Kaydet
  </button>
</div>  
</form>


<br>


<form action='adminindex.php?page=siteduzenle&iletedit=true' class='row g-4' method='post'>



<label style='color:white;' class='form-label' for='form4Example3'>İLETİŞİM</label>
  <div class=''>
    <textarea class='form-control' id='form4Example3' rows='4' name='iletisim'>
$iletisim
    </textarea>
    
  </div>



  <div class=''>
  <button type='submit' class='btn btn-primary btn-block  ' name='kaydet2'>
    Kaydet
  </button>
</div>  
</form>


");
  

  ?>

  </div>   
  </div>

</div>
  </div>