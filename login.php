<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // E-posta ve şifreyi küçük harfe çevirme
    $email = strtolower($_POST["email1"]);
    $password = strtolower($_POST["sifre1"]);

    // Kimlik bilgilerini kontrol etme
    if ($email == "b211210383@sakarya.edu.tr" && $password == "b211210383") {
        echo "<h1>HOŞGELDİNİZ b211210383</h1>";
        // 2 saniye sonra yönlendirme
        header("Refresh: 3; url=http://b211210383.infinityfreeapp.com/hakkinda.html");

        exit(); // Header'dan sonra başka kod çalışmasını engelleme
    } else {
        echo "<script>alert('mail ya da şifre yanlış, lütfen tekrar deneyiniz')</script>";
        // 2 saniye sonra yönlendirme
        header("Refresh: 2; url=http://b211210383.infinityfreeapp.com/index.html");
        exit(); // Header'dan sonra başka kod çalışmasını engelleme
    }
}
?>


<style type="text/css">
h1 { text-align: center; }
</style>
