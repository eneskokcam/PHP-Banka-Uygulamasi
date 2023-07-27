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
  $sorgu = "SELECT * FROM musteriler WHERE user_id =".$_SESSION['userID'];
  $calistir = mysqli_query($baglanti,$sorgu);
  $kayit = mysqli_fetch_assoc($calistir);
  $kayitbakiye = $kayit["bakiye"];
  $myIban = $kayit["user_id"];
    
  
  ?>


  <?php

    if(isset($_POST["transfer"])) {

      $miktar = $_POST['tutar'];
      $iban = $_POST['iban'];
      $myID = $_SESSION["userID"];
      
      $gideninIban = $_POST['iban'];

      if ($myIban == $gideninIban)
      {
        echo "
        <script>
        alert('Kendinize transfer yapamazsınız.');
        </script>";
      } 
      else 
      {

        if ($miktar <= $kayit['bakiye']) 
        {

          $yeniBakiyeGonderen = $kayit["bakiye"] - $miktar;

          $sorguAlici = "SELECT * FROM musteriler WHERE user_id = $gideninIban";
          $calistirAlici = mysqli_query($baglanti, $sorguAlici);
          $kayitAlici = mysqli_fetch_assoc($calistirAlici);
          @$gideneYeniBakiye = $kayitAlici['bakiye'] + $miktar;

          $islem1 = $baglanti->query("UPDATE musteriler set bakiye = $yeniBakiyeGonderen where user_id = $myID");
          $islem2 = $baglanti->query("UPDATE musteriler set bakiye = $gideneYeniBakiye where user_id = $gideninIban");

          echo
          "
          <script>
          alert('Para transferi başarıyla gerçekleşti.');
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
							<h1 class="fs-4 card-title fw-bold mb-4">Para Transferi</h1>
              <div class="">
      Bakiyeniz : 
      <?php

      $sorgu = "SELECT * FROM musteriler WHERE user_id =".$_SESSION['userID'];
      $calistir = mysqli_query($baglanti,$sorgu);
      $kayit = mysqli_fetch_assoc($calistir);
      $kayitbakiye = $kayit["bakiye"];
      echo $kayitbakiye;
      ?>

    </div>
							<form method="POST" action="index.php?page=transfer&transfer=true" >
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Gönderilecek IBAN</label>
									<input id="iban" type="number" class="form-control" name="iban" minlength="10" maxlength="10" value="" required autofocus>
									<div class="invalid-feedback">
										Hatalı IBAN
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="tutar">Tutar</label>
										
									</div>
									<input id="tutar" type="number" class="form-control" name="tutar" minlength="1" maxlength="10" min="1" max="<?=$kayit['bakiye']?>" required>
								    <div class="invalid-feedback">
								    	Lütfen tutarı girin.
							    	</div>
								</div>

							
								<div class="d-flex align-items-center">
									
									<button type="submit" name= "transfer" class="btn btn-primary ms-auto">
										Gönder
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
<?php
include("footer.php");
?>

  
 

