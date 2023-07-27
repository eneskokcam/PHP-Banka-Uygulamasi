<?php 

include ("../../baglanti.php"); 
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
  <link rel="stylesheet" href="../../css/bootstrap.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

 
 <br>
<br>
<br>
<br>
<br>
<br>
<br>




 <table style="text-align:left; margin-left:auto; margin-right:auto; width:50%" class="table table-striped table-dark" >
  <thead>
    <tr>
      <th scope="col">Hesap No</th>
      <th scope="col">Ad</th>
      <th scope="col">Soyad</th>
      <th scope="col">Email</th>
      <th scope="col">TC No</th>
      <th scope="col">İl</th>
      <th scope="col">İlçe</th>
      <th scope="col">Tel No</th>
    </tr>
  </thead>
  <tbody>
  <?php 
                 

                 $sorgu = "SELECT * FROM musteriler";
                   $verileriCek = mysqli_query($baglanti,$sorgu);
                
 
                 while ($b=mysqli_fetch_array($verileriCek)){
                      
                     $hesapno = $b['user_id'];
                     $ad = $b['ad'];
                     $soyad = $b['soyad'];
                     $email = $b['email'];
                     $tcno = $b['tcno'];
                     $il = $b['il'];
                     $ilce = $b['ilce'];
                     $telno = $b['telno'];
 
                     echo "<tr>
                     <td>$hesapno</td>
                     <td>$ad</td>
                     <td>$soyad</td>
                     <td>$email</td>
                     <td>$tcno</td>
                     <td>$il</td>
                     <td>$ilce</td>
                     <td>$telno</td>
                     <td><a href='./duzenle.php?id=$hesapno'><p data-placement='top' data-toggle='tooltip' title='Edit' ><button class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit'  ><span class='glyphicon glyphicon-pencil'></span></button></p></a></td>
                     <td><a href='./sil.php?id=$hesapno'><p data-placement='top' data-toggle='tooltip' title='Delete'><button class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#delete' ><span class='glyphicon glyphicon-trash'></span></button></p></a></td>
                 </tr>";
                      
                 }
                  
    ?>
  </tbody>
</table>

</div>