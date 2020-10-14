<?php
$nilai = 60;
if ( fmod( $nilai, 2 ) == 0 ) :
echo $nilai.' Adalah Bilangan Genap';
else :
echo 'Bilangan Ganjil';
endif;
phpinfo();
?>