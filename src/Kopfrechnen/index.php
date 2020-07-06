<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../style.css">
	<title>Mathetrainer: Kopfrechnen</title>
	</head>
	
	<body>
	<a class="icon" href="/mathetrainer/index.html"><image src="/mathetrainer/mathetrainer.png" alt="Mathetrainer-Logo" /></a>
	<h1><b>Kopfrechnen → Königsdisziplin</b></h1>
	<h3>
	<?php
		$a = rand(0,100);
		$z = rand(0,3);
		$b = rand(0,100);
		
		$c = rand(0,10);
		$d = rand(1,10);
		$e = "";
		$r = "0";
		$f = "0";
		if($z == "0")
		{
			$z = "+";
			$e=$a+$b;
		}
		elseif($z == "1")
		{
			$z = "-";
			$e=$a-$b;
		}
		elseif($z == "2")
		{
			$z = "*";
			$e=$c*$d;
		}
		else
		{
			$z = "/";
			$e=$c;
			$c=$e*$d;
			$e=$c/$d;
		}
		
		if ($z=="+" or $z=="-")
		{
			echo "$a $z $b = ?";
		}
		else
		{
			echo "$c $z $d = ?";
		}
		
	
		
	echo'
	<form action="losung.php">
	<input type="number" maxlength="5" placeholder="L&ouml;sung" name="LoA1" value="">
	<input type="submit" value="Aufgabe überprüfen">
	<input style="display: none" type="text" name="s1" value="'.$a.$z.$b."=".$e.'">
	<input style="display: none" type="text" name="s2" value="'.$c.$z.$d."=".$e.'">
	<input style="display: none" type="text" name="e" value="'.$e.'">
	<input style="display: none" type="text" name="cf" value="'.$f.'">
	<input style="display: none" type="text" name="cr" value="'.$r.'">
	<input style="display: none" type="text" name="z" value="'.$z.'">
	</form>';
	echo'Richtig: '.$r.'  <br>
			 Falsch: '.$f.'';
	
	?>
	</h3>
	
	<script src="../jquery.js"></script>
	<script src="../sidebar.js"></script>
	</body>
</html>