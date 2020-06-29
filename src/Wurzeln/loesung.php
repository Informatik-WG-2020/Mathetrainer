<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Mathetrainer: Wurzelrechner</title>
</head>
<body>    

<?php

$eingabe = $_POST['eingabe'];

$ergebnis = $_POST['ergebnis'];

$caufgaben = $_POST['aufgabencounter'];
$caufgaben++;

$punkte  = $_POST['punkte'];

if ($eingabe == $ergebnis) {
    $punkte++;
    if ($caufgaben>=10) 
    {
        echo'
            <table class="invisible">
                    <tr>
                        <td>
                            <p>Super! Deine Antwort ist richtig! Klicke</p>
                        </td>
                        <td> 
                            <form action="fertig.php" method="post">
                                <input type="submit" value="hier">
                                <input type="input" style="display: none" name="aufgabencounter" value='.$caufgaben.'>
                                <input type="input" style="display: none" name="punkte" value='.$punkte.'>
                            </form>
                        </td> 
                    </tr>
            </table>';    
    } 
    else 
    {
        echo'
            <table class="invisible">
                    <tr>
                        <td>
                            <p>Super! Deine Antwort ist richtig! Klicke</p>
                        </td>
                        <td> 
                            <form action="wurzelrechnenNotFirstTime.php" method="post">
                                <input type="submit" value="hier">
                                <input type="input" style="display: none" name="aufgabencounter" value='.$caufgaben.'>
                                <input type="input" style="display: none" name="punkte" value='.$punkte.'>
                            </form>
                        </td> 
                    </tr>
            </table>';
    }
} 
elseif ($caufgaben>=10) 
{
    echo'
    <table class="invisible">
            <tr>
                <td>
                    <p>Schade... Deine Antwort ist leider nicht richtig. Klicke</p>
                </td>
                <td> 
                    <form action="fertig.php" method="post">
                        <input type="submit" value="hier">
                        <input type="input" style="display: none" name="aufgabencounter" value='.$caufgaben.'>
                        <input type="input" style="display: none" name="punkte" value='.$punkte.'>
                    </form>
                </td> 
            </tr>
    </table>';   
} 
else
{
    echo'
    <table class="invisible">
            <tr>
                <td>
                    <p>Schade... Deine Antwort ist leider nicht richtig. Klicke</p>
                </td>
                <td> 
                    <form action="wurzelrechnenNotFirstTime.php" method="post">
                        <input type="submit" value="hier">
                        <input type="input" style="display: none" name="aufgabencounter" value='.$caufgaben.'>
                        <input type="input" style="display: none" name="punkte" value='.$punkte.'>
                    </form>
                </td> 
                <td>
                    , um zur nächsten Aufgabe zu gelangen.
                </td>
            </tr>
    </table>';     
}

echo'
    <table id="richtigeTabelle">
            <tr>
                <th>
                    <p>Deine Eingabe: </p>
                </th>
                <th> 
                    <p>Das richtige Ergebnis: </p>
                </th> 
                <th>
                    <p>Die Anzahl der schon gelösten Aufgaben: </p>
                </th>
                <th>
                    <p>Deine bisherigen Punkte: </p>
                </th>
            </tr>
            <tr>
                <td>
                    <p>'.$eingabe.' </p>
                </td>
                <td> 
                    <p>'.$ergebnis.' </p>
                </td> 
                <td>
                    <p>'.$caufgaben.' </p>
                </td>
                <td>
                    <p>'.$punkte.' </p>
                </td>
            </tr>
    </table>';


/*echo "<p>Hier steht die Eingabe: ".$eingabe."</p>";
echo "<p> Hier steht das Ergebnis".$ergebnis."</p>";
echo "<p> Hier steht der Counter".$caufgaben."</p>";
echo "<p> Hier stehen die Punkte".$punkte."</p>";*/

?>

<script src="../jquery.js"></script>
<script src="../sidebar.js"></script>
</body>
</html>