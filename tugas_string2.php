  
<?php
$nama = "Rahmat Hidayat";
$acak=rand(1,100);

$a = explode(" ",$nama);
$id = strtolower($a[0]).$acak.strtolower($a[1]);
echo "<br>Nama Anda :",$nama;
echo "<br>User Name anda adalah : ".$id;

?>