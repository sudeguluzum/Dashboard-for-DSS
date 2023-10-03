<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Kayıt Ekranı</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="kontrol2" method="post">
      <h3>Kayıt Ol</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="ad" required placeholder="Ad">
      <input type="text" name="soyad" required placeholder="Soyad">
      <input type="email" name="eposta" required placeholder="E-posta">
      <input type="password" name="sifre" required placeholder="Şifre">
      <input type="submit" name="submit" value="Kayıt Ol" class="form-btn">
      
   </form>

</div>

</body>
</html>