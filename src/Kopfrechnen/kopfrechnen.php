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
		$a = rand(0,10);
		$z = rand(0,3);
		$b = rand(0,10);
		$e = "";
		$r = $_GET['lr'];
		$f = $_GET['lf'];
		if($z == "0")
			{$z = "+";
		$e=$a+$b;}
		else{if($z == "1")
			{$z = "-";
		$e=$a-$b;}
		else{if($z == "2")
			{$z = "*";
		$e=$a*$b;}
		else{$z = "/";
		$e=$a;
		$a=$e*$b;
		$e=$a/$b;}}}
		
		
		
		echo "$a $z $b = ?";
	
		
	echo'
	<form action="losung.php">
	<input type="number" maxlength="5" placeholder="L&ouml;sung" name="LoA1" value="">
	<input type="submit" value="Aufgabe überprüfen">
	<input style="display: none" type="text" name="s1" value="'.$a.$z.$b."=".$e.'">
	<input style="display: none" type="text" name="e" value="'.$e.'">
	<input style="display: none" type="text" name="cf" value="'.$f.'">
	<input style="display: none" type="text" name="cr" value="'.$r.'">
	</form>';
	echo'Richtig: '.$r.'  <br>
			 Falsch: '.$f.'';
	
	?>
	</h3>
	
	<script src="../jquery.js"></script>
	<script src="../sidebar.js"></script>
	</body>
</html>