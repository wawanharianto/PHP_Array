<html>
<head>
	<title>BELAJAR ARRAY</title>
	</head>
<body>
		<?php
			$x="====================================================================";
			$array1 =array("arman","bayu","feri","bagas","sultan");
			echo "Urutan Array :</br>";
			for($i=0;$i<count($array1);$i++)
			{
				echo"Data ke -$i : ",$array1[$i],"</br>";
			}
			echo"</br>$x</br>";
		
		echo" FUNGSI PENGURUTAN : </br>";
		echo"1. FUNGSI PENGURATAN SORT </br></br>";
		sort($array1);
				for($i=0;$i<count($array1);$i++)
			{
				echo"Data ke - ",$i,": ",$array1[$i],"</br>";
			}
		reset($array1);
			
		echo"</br></br>";
		echo"2.FUNGSI PENGURUTAN RSORT </br>";
		rsort($array1);
				for($i=0;$i<count($array1);$i++)
			{
				echo"Data ke -",$i," : ",$array1[$i],"</br>";
			}
		reset($array1);
			
		echo"</br>$x</br>";
		echo"3.FUNGSI PENGURUTAN ASORT </br>";
		asort($array1);
				for($i=0;$i<count($array1);$i++)
			{
				echo"Data ke - ",$i,": ",$array1[$i],"</br>";
			}
		reset($array1);
		
		echo"</br>$x</br>";
		echo"4.FUNGSI PENGURUTAN KSORT </br>";
		ksort($array1);
				for($i=0;$i<count($array1);$i++)
			{
				echo"Data ke -",$i," : ",$array1[$i],"</br>";
			}
		reset($array1);
			
		echo"</br>$x</br>";
		echo"5.FUNGSI PENGURUTAN ARSORT </br>";
		arsort($array1);
				for($i=0;$i<count($array1);$i++)
			{
				echo"Data ke -",$i," : ",$array1[$i],"</br>";
			}
		reset($array1);
			
		echo"</br>$x</br>";
		echo"6.FUNGSI PENGURUTAN  KRSORT</br>";
		krsort($array1);
				for($i=0;$i<count($array1);$i++)
			{
				echo"Data ke -",$i," : ",$array1[$i],"</br>";
			}
		reset($array1);
		
		
		echo"</br>$x</br>";
		echo"TUGAS NOMOR 2 IMPLEMETASI SELAIN FUNGSI DI ATAS </br>";
		echo"1.FUNGSI PENGURUTAN  NATCASESORT</br>";
		natcasesort($array1);
				for($i=0;$i<count($array1);$i++)
			{
				echo"Data ke -",$i," : ",$array1[$i],"</br>";
			}
		reset($array1);
			
		echo"</br>$x</br>";
		echo"2.FUNGSI PENGURUTAN  SHUFFLE</br>";
		shuffle($array1);
				for($i=0;$i<count($array1);$i++)
			{
				echo"Data ke -",$i," : ",$array1[$i],"</br>";
			}
		reset($array1);
			
		echo"</br>$x</br>";
		echo"3.FUNGSI PENGURUTAN  NATSORT</br>";
		natsort($array1);
				for($i=0;$i<count($array1);$i++)
			{
				echo"Data ke -",$i," : ",$array1[$i],"</br>";
			}
		reset($array1);
		
		echo"</br>$x</br>";
		echo"4.FUNGSI PENGURUTAN  ARRAY MULTISORT</br>";
		array_multisort($array1);
				for($i=0;$i<count($array1);$i++)
			{
				echo"Data ke -",$i," : ",$array1[$i],"</br>";
			}
		reset($array1);
		
		echo"</br>$x</br>";
		echo"5.FUNGSI PENGURUTAN  ARRAY USORT</br>";
		usort($array1);
				for($i=0;$i<count($array1);$i++)
			{
				echo"Data ke -",$i," : ",$array1[$i],"</br>";
			}
		reset($array1);
		?>

</body>
</html>