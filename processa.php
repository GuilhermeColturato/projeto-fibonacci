<?php
	$n = $_GET["termo"];
	$a = 0;
	$b = 1;
	
	echo "Sequência de Fibonacci do termo 1 ao termo $n é: </br>";
	
	echo "0 <br/> 1 <br/>";
	
	for($i=1; $i<=$n-2; $i++){
		$b = $a + $b;
		$a = $b - $a;
		echo $b. "<br/>";
	}
?>