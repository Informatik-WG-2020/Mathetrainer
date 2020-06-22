<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathetrainer: Wurzelrechner</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
<?php

    $caufgaben = $_POST['aufgabencounter'];
    $punkte = $_POST['punkte'];

    $typderaufgabe = rand(1,6);

    switch ($typderaufgabe) 
    {
        case '1':
            $ergebnis=simpel();
            break;
        
        case '2':
            $ergebnis=multi();
            break;
        case '3':
            $ergebnis=divi();
            break;
        case '4':
            $ergebnis=dreiwurzel();
            break;
        case '5':
            $ergebnis =plusminus();
            break;  
        case '6':
            $ergebnis =plusminus();
            break; 
        
    }

    function simpel()
    {    
        $r = rand(1,20);
        $quadratzahl = $r * $r;
        frage('√'.$quadratzahl);
        return $r;
    }

    function multi()
    {
        $r = rand(1,20);
        $quadratzahl = $r * $r;
        
        do
        {
            $divident = rand(1,$quadratzahl);
        } while(is_integer($quadratzahl/$divident) != true );

        $multiplikator = $quadratzahl / $divident;
        frage('√'.$divident.' * √'.$multiplikator);  
        return $r;
    } 

    function divi()
    {
        $r = rand(1,20);
        $quadratzahl = $r * $r;
        $teiler = rand(1,10);

        $nenner = $quadratzahl * $teiler;

        frage('√'.$nenner." / ".'√'.$teiler);
        return $r;
    }

    function dreiwurzel()
    {
        $r = rand(1,4);
        $quadratzahl = $r * $r * $r;
        
        echo "∛".$quadratzahl;
        return $r;
    }

    function plusminus()
    {
        $r = rand(1,20);
        $quadratzahl = $r * $r;

        do
        {
            $r2 = rand(1,20);
        } while($r2>$r);

        $quadratzahl2 = $r2 * $r2;;

        $r3 = rand(1,2);

        switch ($r3) 
        {
            case '1':
                $r3 = "+";
                break;
            case '2':
                $r3 ='-';
            break;       
        }

        frage('√'.$quadratzahl." ".$r3." √".$quadratzahl2);
        if($r3=='+')
        {
            $ergebnis = $r+$r2;
            return $ergebnis;
        }
        else
        {
            $ergebnis = $r-$r2;
            return $ergebnis;
        }
    }

    function frage($ausgabe)
    {
        echo "<p>Geben Sie an was</p><p>".$ausgabe."</p> vereinfacht ist!"; 
    }


echo'
<table>
        <tr>
            <td>
                <p>Geben Sie hier ihre Lösung an:</p>
            </td>
            <td> 
                <form action="loesung.php" method="post">
                    <input type="number" name="eingabe">
                    <input type="submit" value="Los!">
                    <input type="input" style="display: none" name="ergebnis" value='.$ergebnis.'>
                    <input type="input" style="display: none" name="aufgabencounter" value='.$caufgaben.'>
                    <input type="input" style="display: none" name="punkte" value='.$punkte.'>
                </form>
            </td> 
        </tr>
</table>';
 
?>

<script src="../jquery.js"></script>
<script src="../sidebar.js"></script>
</body>
</html>
