<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Ekranı</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="form-container" id="deneme">

    <form action="kontrol.php" method="post">
        <h3>GİRİŞ</h3>
      
        <input type="email" name="eposta" required placeholder="E-posta">
        <input type="password" name="sifre" required placeholder="Şifre">
        <input type="submit" name="submit" value="Giriş" class="form-btn">
        <p>Hesabın yok mu? <a href="kayit.php">Kayıt Ol</a></p>
    </form>

</div>

</body>

</html>

