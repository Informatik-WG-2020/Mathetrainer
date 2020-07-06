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
		
		
		$a = $_GET['s1'];
		$r = $_GET['cr'];
		$f = $_GET['cf'];
		echo "$a<br>"; 
		
	
	if ($_GET['LoA1'] == $_GET['e'])
		{echo "Richtig, sehr gut!!!";
		$r =  $_GET['cr'] + 1;}
	else {echo "Leider falsch!!!";
		$f = $_GET['cf'] + 1;}
		
		echo '<br><br>
		<form action="kopfrechnen.php">
		<input type="submit" name="Back" value="Noch eine Aufgabe!">
		<input style="display: none" type="text" name="lr" value="'.$r.'">
		<input style="display: none" type="text" name="lf" value="'.$f.'">
		
		</form>';
		echo'Richtig: '.$r.'  <br>
			 Falsch: '.$f.'
			 <br><br>
			 <form action="index.php">
		<input type="submit" name="reset" value="reset">
		</form>';
	?>
	
	
	</h3>
	
	<script src="../jquery.js"></script>
	<script src="../sidebar.js"></script>
	</body>
</html>