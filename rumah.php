<html>
	<head>
		<title>Bangun Rumah - Yudi Hermawan</title>
	</head>
	<body>
		<form action="" method="POST">
			<h2>Bangun Rumah</h2>
			Ukuran: <input type="number" name="ukuran" value="#ffffff" maxlength="3">&nbsp
			Warna: <input type="color" name="warna">&nbsp
			<input type="submit" value="build now">
		</form>
		<div>
		<?php
			$ukuran= isset($_POST['ukuran']) ? $_POST['ukuran'] : '';
			$warna= isset($_POST['warna']) ? $_POST['warna'] : '';						
			if($ukuran%2==0){
				echo "<script>alert('Sorry harus ganjil')</script>";
				$ukuran=0;
			}
			$tengah=($ukuran/2) + 0.5;
			for($a=1; $a<=$ukuran; $a++){
				for($b=1; $b<=$ukuran; $b++){
					if(($a==$tengah) || (($b==1 || $b==$ukuran) && $a>=$tengah) || ($a==$ukuran) || ($b==$tengah+($a-1)) || ($b==$tengah-($a-1))){
						echo "<a style='color:".$warna."'>* </a>";
					} else{
						echo "<a style='color:white'>* </a>";
					}
				}
				echo "<br/>";
			}
		?>
		</div>
	</body>
</html>