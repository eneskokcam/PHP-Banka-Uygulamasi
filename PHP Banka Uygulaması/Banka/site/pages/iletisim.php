

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

  <div class= "container p-5">
<?php

$sorgu = "SELECT * FROM genel_bilgiler";
$verileriCek = mysqli_query($baglanti,$sorgu);
$kayitlar=mysqli_fetch_array($verileriCek);

$iletisim = $kayitlar["iletisim"];

echo "
<div style='color:white;' class='container p-5'>
$iletisim
</div>"

?>
</div>  

</div>
  </div>
  </div>
  </div>

</div>  

<?php
include("footer.php");
?>