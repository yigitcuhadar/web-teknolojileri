<?php
    $isim = $_POST['firstname'];
    $soyisim = $_POST['lastname'];
    $cinsiyet = $_POST['cinsiyet'];
    $Spor = isset($_POST['spor']) ? $_POST['spor'] : [];
    $Sehir = $_POST['sehir'];
    $bilgi = $_POST['bilgi'];
    $Email = $_POST['email'];
    $Dogum = $_POST['dogum'];

    echo "İsim: $isim <br>";
    echo "Soyisim: $soyisim <br>";
    echo "Cinsiyet: $cinsiyet <br>";
    echo "Şehir: $Sehir <br>";
    echo "E-mail: $Email <br>";
    echo "Seçtiği spor: ";
    foreach ($Spor as $spor) {
        echo "$spor ";
    }
    echo "<br> Önerileriniz: $bilgi <br>";
    echo "Doğum Tarihi: $Dogum <br>";
?>
