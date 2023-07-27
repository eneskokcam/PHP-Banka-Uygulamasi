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

  <?php

    if(isset($_POST["guncelle"])) 
    {
        $id = $_SESSION['userID'];

        $sorgu = "SELECT * FROM musteri_giris WHERE user_id ='$id'";
        $calistir = mysqli_query($baglanti,$sorgu);
        $kayit = mysqli_fetch_assoc($calistir);
        $kayitsifre = $kayit["sifre"];
        


      $mevcutsifre = $_POST['mevcutsifre'];
      $yenisifre = $_POST['yenisifre'];
      $yenisifrehash = password_hash($yenisifre, PASSWORD_DEFAULT );
      $myID = $_SESSION["userID"];


      if ($mevcutsifre == $yenisifre )
      {
        echo "
        <script>
        alert('Yeni şifreniz eskisi ile aynı olamaz.');
        </script>"; 
            
       
      }
      else
      {

        if(password_verify($mevcutsifre, $kayitsifre))  
        {

          
          $islem = $baglanti->query("UPDATE musteri_giris set sifre = '$yenisifrehash' where user_id = '$myID'");
          echo "
          <script>
          alert('Şifreniz başarıyla güncellendi.');
          </script>";
          
         
          
        }
        else
        {
              echo "
              <script>
              alert('Şifreniz güncellenirken bir hata oluştu.');
              </script>";
        }
      }  
    }


  ?>

  <link rel="stylesheet" href="../../css/bootstrap.css">
<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
					<br>

					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Şifre Güncelle</h1>
              <div class="">
     
    </div>
							<form method="POST" action="index.php?page=sifredegistir&sifredegistir=true" >
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Mevcut Şifre</label>
									<input id="mevcutsifre" type="password" class="form-control" name="mevcutsifre" minlength="6" maxlength="6" value="" required autofocus>
									<div class="invalid-feedback">
										Hatalı IBAN
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="tutar">Yeni Şifre</label>
										
									</div>
									<input id="yenisifre" type="password" class="form-control" name="yenisifre" minlength="6" maxlength="6" required>
								    <div class="invalid-feedback">
								    	Lütfen tutarı girin.
							    	</div>
								</div>

							
								<div class="d-flex align-items-center">
									
									<button type="submit" name= "guncelle" class="btn btn-primary ms-auto">
										Şifre Güncelle
									</button>
								</div>
							</form>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>

</div>

</div>
  
 
<?php
include("footer.php");
?>