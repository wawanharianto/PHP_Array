<html>
<head><title> Tugas no.2</title>
</head>
<center>
<body>
<h1 style="color:red;">BANGUN RUANG KERUCUT</h1>
	<?php
	$r=14;
	$s=10;
	$phi=3.14;
	echo ("Panjang Jari-Jari : $r <br>");
	echo ("Panjang Sisi : $s <br>");
	echo ("<br>");
	
	echo ("LUAS ALAS BANGUN RUANG KERUCUT<br>");
	$luasalas= $phi * $r * $r;
	echo ("Luas Alas = phi x jari-jari x jari-jari <br>");
	echo ("Luas Alas = $phi x $r x $r <br>");
	echo ("Luas Alas = $luasalas <br>");
	echo ("<br>");
	
	
	echo ("LUAS PERMUKAAN  BANGUN RUANG KERUCUT <br>");
	$luaspermukaan=($phi*$r*$r)+($phi*$r*$s);
	echo ("Luas Permukaan = phi x jari-jari x jari-jari + phi x jari-jari x sisi <br>");
	echo ("Luas Permukaan = $phi x $r x$r + $phi x $r x $s <br>");
	echo ("Luas Permukaan = $luaspermukaan <br>");
	?>
</body>




<br>
<footer> copyright.2018 Nama :Wawan Harianto Nim:17102175
</footer>
</center>

</html>

