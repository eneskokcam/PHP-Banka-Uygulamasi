<?php

$id = $_SESSION['userID'];


$sorgu = "SELECT * FROM musteriler WHERE user_id ='$id'";
$calistir = mysqli_query($baglanti,$sorgu);
$kayit = mysqli_fetch_assoc($calistir);

$ad = $kayit["ad"];
$soyad = $kayit["soyad"];
$hesapno = $kayit["user_id"];
$bakiye = $kayit["bakiye"];
$iban = $kayit["user_id"];


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


       
<br>
<br>

<br>
<br>
<br>
<br>

<div class="p-5">
    <h2 style="color:white;" class="text-center pb-3">Hesap Bilgileri</h2>
    <table style="background-color:white; width: 1000px; margin-left:auto; margin-right:auto" class="table">
        <thead>
            <tr>
                <th> Ad Soyad </th>
                <th> Hesap No </th>
                <th> Bakiye </th>
                <th> IBAN No </th>
            </tr>

        </thead>
        <tbody>
            <tr>
                <td> <?=$ad." ".$soyad?> </td>
                <td> <?=$hesapno?> </td>
                <td> <?=$bakiye?> </td>
                <td> <?=$iban?> </td>
            </tr>
        </tbody>

    </table>
</div>
</div>