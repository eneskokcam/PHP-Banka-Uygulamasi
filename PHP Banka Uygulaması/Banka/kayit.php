<?php
include("header.php");
?>
<div class="full_bg">
<div class= "ml-5 ">
  <div class= "ml-5">
  <div class= "ml-5 ">
  <div class= "ml-5 "> 
    <a href="index.html"><img src="images/logoxx.png" style= "width:120px; height:100px" alt="#" /></a>
  </div>
  </div>
  </div>
  </div>


<div class="container p-5">



<link rel="stylesheet" href="../../css/bootstrap.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<br>

<form action="site/kayit.php" class="row g-4" method="post">
  <div class="col-md-4">
    <label style="color:white" for="inputEmail4" class="form-label">Ad</label>
    <input type="text" class="form-control" id="ad" name="ad">
  </div>
  <div class="col-md-4">
    <label style="color:white" for="inputEmail4" class="form-label">Soyad</label>
    <input type="soyad" class="form-control" id="soyad" name="soyad">
  </div>
  <div class="col-md-4">
    <label style="color:white" for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="col-md-4">
    <label style="color:white" for="inputPassword4" class="form-label">Şifre</label>
    <input type="password" class="form-control" id="sifre" name="sifre">
  </div>
  <div class="col-md-4">
    <label style="color:white" for="inputPassword4" class="form-label">TC No</label>
    <input type="number" class="form-control" id="tcno" name="tcno" minlength="11" maxlength="11">
  </div>
  <div class="col-4">
    <label style="color:white" for="inputAddress" class="form-label">İl</label>
    <input type="text" class="form-control" id="il" name="il">
  </div>
  <div class="col-4">
    <label style="color:white" for="inputAddress2" class="form-label">İlçe</label>
    <input type="text" class="form-control" id="ilce" name="ilce" >
  </div>
  <div class="col-md-4">
    <label style="color:white" for="phone" class="form-label">Telefon Numarası</label>
    <input type="number" class="form-control" id="telno" name="telno" minlength="10" maxlength="10" >
  </div>
  <div class="col-4 ml-1">
  <button type="submit" class="btn btn-primary" name="kaydet">Kaydol</button>
   
  </div>
 
</form>

</div>


</div>