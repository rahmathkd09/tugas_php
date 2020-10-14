<?php
$hargaJambu=15000;
$jumlahDus=6;
$beratJambu=$jumlahDus*5;
$hargaDus=2000;

echo "=====================================<br>";
echo "Harga Jambu = Rp".$hargaJambu."/Kg"."<br>";
echo "Harga Kardus = Rp".$hargaDus."/dus"."<br>";
echo "Total Penjualan (Berikut Kardus)= Rp".(($hargaJambu*$beratJambu)+($jumlahDus*$hargaDus))."<br>";


echo "=====================================";


?>