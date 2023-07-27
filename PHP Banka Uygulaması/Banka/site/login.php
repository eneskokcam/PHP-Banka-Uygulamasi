<?php



include("../baglanti.php");



if (isset($_POST["giris"])) 
{

  $tc_no = $_POST["tcno"];
  $parola = $_POST["sifre"];
  
}
  


if(isset($tc_no) && isset($parola)){
    
    $secim = "SELECT * FROM musteri_giris WHERE tcno = '$tc_no'";
    $calistir = mysqli_query($baglanti,$secim);
    $kayitsayisi = mysqli_num_rows($calistir);

    $secim2 = "SELECT * FROM yonetici_giris WHERE user_id = '$tc_no' AND sifre = '$parola'";
    $calistir2 = mysqli_query($baglanti,$secim2);
    $kayitsayisi2 = mysqli_num_rows($calistir2);
    
    if($kayitsayisi === 1) {

        $ilgilikayit = mysqli_fetch_assoc($calistir);
        $hashlisifre = $ilgilikayit["sifre"];

        if(password_verify($parola, $hashlisifre)) {
            session_start();
        
        $_SESSION["userID"] = $ilgilikayit["user_id"];
        header("location:pages/index.php");

        }
        else 
        {
        header("location:../login.php?error=passwordortc");
        }

    } 
    elseif($kayitsayisi2 === 1)
    {
        session_start();
        $ilgilikayit2 = mysqli_fetch_assoc($calistir2);
        $_SESSION["userID"] = $ilgilikayit2["user_id"];
        $_SESSION["iban"] = $ilgilikayit2["iban"];
        header("location:admin/adminindex.php");
    }
    else 
    {
        header("location:../login.php?error=passwordortc");
    }
    
   
}

    
