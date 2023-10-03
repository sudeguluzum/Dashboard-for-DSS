<?php
session_start();
include ("baglan.php");  
    if($baglan){
   if($_POST){ //postun gidip gitmediğini kontrol etmek
      $uye_id=mysqli_insert_id($baglan);
      $uye_ad=trim($_POST["ad"]);
      $uye_soyad=trim($_POST["soyad"]);
      $eposta=trim($_POST["eposta"]);
      $sifre=trim($_POST["sifre"]);
      $sorgu=mysqli_query($baglan,"INSERT INTO uye (uye_ad,uye_soyad,eposta,sifre)
      VALUES ('".$uye_ad."','".$uye_soyad."','".$eposta."','".$sifre."')");
      if($sorgu==TRUE){
         header('location:index.php');
      }else{
         echo "Hata:".$sorgu."</br>".$baglan->error;
      }
      
      mysqli_close($baglan);
     
   }else{
      echo "Post Hatası";
   }
}else{
      echo "Veritabanına Bağlanmadı";
   } 
 


?>