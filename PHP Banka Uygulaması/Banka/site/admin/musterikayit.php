<?php



include("../../baglanti.php");



if(isset($_POST["kaydet"]))
{
    
    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $email = $_POST["email"];
    $tcno = $_POST["tcno"];
    $sifre = password_hash($_POST["sifre"], PASSWORD_DEFAULT );
    $il = $_POST["il"];
    $ilce = $_POST["ilce"];
    $telno = $_POST["telno"];

     

    try 
    {
        $ekle = "INSERT INTO musteriler (ad, soyad, email, tcno, il, ilce, telno) VALUES ('$ad','$soyad','$email', '$tcno','$il','$ilce','$telno')";
        $calistirekle = mysqli_query($baglanti, $ekle);

        $ekle2 = "INSERT INTO musteri_giris (tcno, sifre) VALUES ('$tcno','$sifre')";
        $calistirekle2 = mysqli_query($baglanti, $ekle2);
        
        if ($calistirekle && $calistirekle2)
        {
            echo "
            <script>
            alert('Kayıt başarıyla eklendi.');
            window.location.href = 'adminindex.php?page=musterikayit'
            </script>";
        }
        else
        {
                    echo "
                    <script>
                    alert('Kayıt eklenirken bir sorun oluştu.');
                    window.location.href = 'adminindex.php?page=musterikayit'
                    </script>";
                  
        }
    }
    catch(Exception $e)
    {
        echo "
        <script>
        alert('Kayıt eklenirken bir sorun oluştu. Girdiğiniz bilgilerle eşleşen bir müşteri olabilir.');
        window.location.href = 'adminindex.php?page=musterikayit'
        </script>";
      }


}