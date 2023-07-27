<?php
include("../../baglanti.php");

session_start();

$idYetki2 = $_SESSION['userID'];

      $sorguYetki2 = "SELECT * FROM musteri_giris WHERE user_id ='$idYetki2'";
      $calistirYetki2 = mysqli_query($baglanti,$sorguYetki2);
      $kayitYetki2 = mysqli_fetch_assoc($calistirYetki2);
      $kayitsayiyetki2 = mysqli_num_rows($calistirYetki2);

if ($kayitsayiyetki2 >= 1) 
{
    if ($kayitYetki2["power"] == 0) 
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


 include ("header.php");

  $page = @$_GET['page'];

switch ($page) {
    case 'anasayfa':
        include("./musteri_index.php");
        break;
    case 'transfer':
        include("./transfer.php");
        break;
    case 'hesap':
        include("./hesap.php");
        break;
    case 'sifredegistir':
        include("./sifredegistir.php");
        break;
    case 'iletisim':
        include("./iletisim.php");
        break;
    case 'hakkimizda':
        include("./hakkimizda.php");
         break;
  

    default:
        include("./musteri_index.php");
        break;
}



