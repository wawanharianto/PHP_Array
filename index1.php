<html>
<head>
<title>Tugas No.1 BANK </title>
</head>
<center>
<body>
<h2 style="color : Red","size :25cm">PERHITUNGAN PERBANKAN</h2>
	<?php
		$SaldoAwal = 2000000;
		$Bunga = 0.03;
		$bulan = 11;
		
		echo ("Saldo Awal Tabungan : Rp.$SaldoAwal <br>");
		//variable bertipe integer
		echo ("Bunga Tabungan /bulan : 3% <br>");
		//variable bertipe real
		echo (" Lama tabungan : 11 bulan <br>");
		$bunga11bulan = ($SaldoAwal * $Bunga*$bulan);
		echo ("Bunga setelah 11 bulan :Rp. $bunga11bulan <br>");
		$saldoakhir = $SaldoAwal + $bunga11bulan;
		echo ("Saldo Tabungan akhir :Rp. $saldoakhir <br>");
	?>
<br>
<a href='TUGAS2.php'> TUGAS no.2</a>	
</body>		
</center>
</html>