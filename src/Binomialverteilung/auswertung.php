<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../style.css">
	<title>Mathetrainer: Binomialverteilung</title>
</head>
<body>
<h1> Binomialverteilung: Lösung </h1><br>
<?php

if ($_GET['a']==$_GET['e'])
{echo "Richtig! &#128526&#128513&#127881&#127882&#128512<br><br>";}
else {echo "Nicht richtig&#128520, die Lösung ist ca. ".$_GET['e']."<br><br>";}
echo "Rechenweg:<br><br> <table><tr><td></td><td>" . $_GET['k'] . "! </td><td></td><td></td><td></td><td></td></tr><tr><td>P(X=".$_GET['j'].") = </td><td><hr></td><td> * </td><td>((".$_GET['y']."/".$_GET['n'].")^".$_GET['j'].")</td><td> * </td><td>(1-(".$_GET['y']."/".$_GET['n']."))^(".$_GET['k']."-".$_GET['j'].")</td></tr><tr><td></td><td> (" . $_GET['j'] . "!*(".$_GET['k']." - ".$_GET['j'].")!)<td></td><td></td><td></td><td></td><br>";

//echo "Rechenweg: ($_GET['k']! / ($_GET['j']!*($_GET['k']-$_GET['j'])!)) * ($_GET['y']/$_GET['n'])^$_GET['j'] * (1-$_GET['y']/$_GET['n'])^($_GET['k']-$_GET['j'])<br>";
?>

<script src="../jquery.js"></script>
<script src="../sidebar.js"></script>
</body>
</html>
	
