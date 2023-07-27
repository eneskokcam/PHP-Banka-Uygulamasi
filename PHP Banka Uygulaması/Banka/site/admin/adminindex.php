<?php
include("../../baglanti.php");
      session_start();
      $idYetki = $_SESSION['userID'];

      $sorguYetki = "SELECT * FROM yonetici_giris WHERE user_id ='$idYetki'";
      $calistirYetki = mysqli_query($baglanti,$sorguYetki);
      $kayitYetki = mysqli_fetch_assoc($calistirYetki);
      $kayitsayiyetki = mysqli_num_rows($calistirYetki);
    
      if ($kayitsayiyetki >= 1) 
      {
          if ($kayitYetki["power"] == 1) 
          {
      
      
          } 
          else 
          {
              header("location:../../login.php");
              die();
          }
      
      }
      
      else
      {
          header("location:../../login.php");
          die();
      }


if(!$_SESSION) {
    // session yok
    header("location:../../login.php");
    die();
}




include "adminheader.php";

 $page = @$_GET['page'];

switch ($page) {
    case 'musterikayit':
        include("./kayit.php");
        break;
    case 'musteriler':
        include("./musteriler.php");
        break;
    case 'duzenle':
        include("./duzenle.php");
        break;
    case 'siteduzenle':
        include("./siteduzenle.php");
        break;
    case 'anasayfa':
        include("./index.php");
         break;
   

    default:
        include("index.php");
        break;
}

