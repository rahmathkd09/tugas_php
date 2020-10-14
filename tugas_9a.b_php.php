<?php

function Fibonacci($banyakAngka){

    $awal = 0;
    $lanjut = 1;
    $fibo = 0;

    while ($fibo < $banyakAngka){
        echo ' '.$awal;
        $lanjut2 = $awal + $lanjut;
        $awal = $lanjut;
        $lanjut = $lanjut2;
        $fibo = $fibo + 1;
    }
}




function bilPrima(){

for ($i=1; $i <=200; $i++){
	$a = 0;
	for($j=1;$j<=$i;$j++){
		if($i % $j == 0){
			$a++;
		}
	}
	if($a == 2){
		echo $i, ",";
	}
}
}

echo "Tugas 9.a <br>";
$banyakAngka = 22;
Fibonacci($banyakAngka);
echo "<br>";
echo "Tugas 9.b <br>";

bilprima();

?>



