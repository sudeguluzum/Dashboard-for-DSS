<?php
session_start();
include ("baglan.php");
if($baglan){
   if($_POST){ //postun gidip gitmediğini kontrol etmek
      $eposta=strip_tags(trim($_POST["eposta"]));
      $sifre=strip_tags(trim($_POST["sifre"]));
      $sorgu=mysqli_query($baglan,"SELECT * FROM uye WHERE eposta='".$eposta."' AND sifre='".$sifre."'");
      if(mysqli_num_rows($sorgu)>0){
         $row=mysqli_fetch_row($sorgu);
         $_SESSION['uye_id']=$row[0];
         $_SESSION['uye_ad']=$row[1];
         $_SESSION['uye_soyad']=$row[2];
         $_SESSION['eposta']=$row[3];
         $_SESSION['sifre']=$row[4]; 

       header("Location: dashboard.php"); 
      }else{

         echo '<script type="text/javascript">
         alert("E-posta ya da Şifre Hatalı");
         location.href = "index.php";
         </script>';
         exit;
      }
   }else{
      echo "Post Hatası";
   }
   }else{
      echo "Veritabanına Bağlanmadı";
   }
?>