<?php
$beli=50000;
$jual=80000;
$untung=$jual-$beli;
$untungPersen=(($untung/$beli)*100)."%";


echo "Harga Beli=" . $beli."<br>";
echo "Harga Jual=". $jual."<br>";
echo "Keuntungan Rp=" .$untung."<br>";
echo "Persen untung=".$untungPersen."<br>"
?>