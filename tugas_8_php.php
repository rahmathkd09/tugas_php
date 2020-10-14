<?php
	function ketupat(){
		for( $a=10;$a>0;$a--){
			for($i=1; $i<=$a; $i++){
				echo "_";
			}
			for($b=10;$b>$a;$b--){
				echo "x";
			}
			for($c=10;$c>$a;$c--){
				echo "x";
			}
			echo "<br>";
		}

		for($i=0; $i<=10;$i++){
			for($j=1;$j<=$i;$j++){
				echo "_";
			}
			for($k=10; $k>$i;$k--){
				echo "x";
			}
			for($l=10; $l>$i;$l--){
				echo "x";
			}
			echo "<br>";
		}
	}

	echo "<table><tr>";
	for ($a = 1 ; $a< 10; $a++){
		echo "<td>",ketupat(),"</td>";
	}
	echo "</tr>";
	echo "<tr>";
	for ($a = 1 ; $a< 10; $a++){
		echo "<td>",ketupat(),"</td>";
	}
	echo "</tr></table>";
?>