<?php
include("header.php");
?>
<link rel="stylesheet" href="css/bootstrap.css">
<div class="full_bg" >
<div class= "ml-5 ">
  <div class= "ml-5">
  <div class= "ml-5 ">
  <div class= "ml-5 "> 
  <a href="index.html"><img src="images/logoxx.png" style= "width:120px; height:100px" alt="#" /></a>
  </div>
  </div>
  </div>
  </div>
<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
					<br>
					<br>
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Giriş</h1>
							<form method="POST" action="site/login.php" >
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">TC Kimlik Numarası</label>
									<input id="tcno" type="number" class="form-control" name="tcno" minlength="11" maxlength="11" value="" required autofocus>
									<div class="invalid-feedback">
										TC NO geçersiz
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Şifre</label>
										<a href="sifrehatirlat.php" class="float-end">
											
										</a>
									</div>
									<input id="password" type="password" class="form-control" name="sifre"  required>
								    <div class="invalid-feedback">
								    	Lütfen şifrenizi girin.
							    	</div>
								</div>

								<?php  
									if(@$_GET["error"] && @$_GET["error"] === "passwordortc"){
									echo "<p class='text-danger m-2'><strong>TC No veya Şifre Hatalı</strong></p>";
									}elseif(@$_GET["error"] && @$_GET["error"] === "passwordortc"){
									echo "<p class='text-danger m-2'>TC No veya Şifre Hatalı</p>";
									}
								?>

								<div class="d-flex align-items-center">
									
									<button type="submit" name= "giris" class="btn btn-primary ms-auto">
										Giriş
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Müşterimiz değil misiniz? <a href="kayit.php" class="text-dark">Hesabınızı oluşturun.</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/login.js"></script>

  <br>
  <br>
 
<?php
include("footer.php");
?>  
  
</body>
</html>