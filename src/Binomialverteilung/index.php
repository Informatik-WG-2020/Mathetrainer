<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../style.css">
	<title>Mathetrainer: Binomialverteilung</title>
</head>
<body>
<h1> Binomialverteilung </h1><br>
<?php 
$n = rand(1,200);
$x = rand(0,$n);
$y = $n - $x;
$k = rand(1,$n-1);
$j = rand(1,$k);
echo "Aus einer Urne mit $n Kugeln, von denen $x blau und $y rot sind, werden $k Kugeln zufällig, mit zurücklegen, gezogen.<br>";
echo "Wie groß ist die auf drei Nachkommastellen gerundete Wahrscheinlichkeit dabei genau $j rote Kugeln zu ziehen?<br><br>";
$e = round((getFaculty($k)/(getFaculty($j)* getFaculty($k-$j))) * pow(($y/$n),$j) * pow((1-$y/$n),($k-$j)), 3);
//echo "$e<br>";

  function getFaculty ($intN) 
  { 
    if ( $intN <= 1 ) 
    { 
      return 1; 
    } 

    for ( $intFaculty = 1; $intN > 1; --$intN ) 
    { 
      $intFaculty *= $intN; 
    } 
    return $intFaculty; 
  } 
  echo '<FORM action="auswertung.php" method="GET">
	Ergebnis:<INPUT name="a" size=10>
	<INPUT name="n" style = "display: none" type="text" value="'.$n.'">
	<INPUT name="x" style = "display: none" type="text" value="'.$x.'">
	<INPUT name="y" style = "display: none" type="text" value="'.$y.'">
	<INPUT name="k" style = "display: none" type="text" value="'.$k.'">
	<INPUT name="j" style = "display: none" type="text" value="'.$j.'">
	<INPUT name="e" style = "display: none" type="text" value="'.$e.'">
	<INPUT type="submit" value="GO">
	</form>'
?>


<script src="../jquery.js"></script>
<script src="../sidebar.js"></script>
</body>
</html>