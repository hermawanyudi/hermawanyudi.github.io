<?php
	$ukuran=10;
	for($a=1; $a<=$ukuran; $a++){
		for($b=1; $b<=$ukuran; $b++){
			if(($a==1) || ($a==10)){
				echo "* ";
			} else{
				echo "<a style='color:red'>* </a>";
			}
		}
		echo "<br/>";
	}
?>