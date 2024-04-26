<?php 
$adsoyad = $_POST["adsoyad"];
$eposta = $_POST["eposta"];
$konu = $_POST["konu"];
$mesaj = $_POST["mesaj"];

echo "Adınız ve Soyadınız: ",$adsoyad;
echo "<br>Epostanız: ",$eposta;
echo "<br>Konunuz: ",$konu;
echo "<br>Mesajınız: ",$mesaj;
echo "<br>5 Saniye sonra anasayfaya yönlendiriliyorsunuz...";
header("Refresh: 5, url=../html/index.html");
?>