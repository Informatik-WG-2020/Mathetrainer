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

$caufgaben = $_POST['aufgabencounter'];

$punkte  = $_POST['punkte'];

echo"<h1> Geschafft!</h1>
<p>Du hast 10 Aufgaben zu Wurzellösen gemacht! Ich hoffe, es hat dir Spaß gemacht oder zumindest geholfen!</p>
<table id='richtigeTabelle'>
            <tr>
                <th>
                    <p>Deine erreichten Punkte: </p>
                </th>
                <th>
                    <p>Die Anzahl der schon gelösten Aufgaben: </p>
                </th>
            </tr>
            <tr> 
                <td>
                    <p>".$punkte." </p>
                </td>
                <td>
                    <p>".$caufgaben." </p>
                </td>
            </tr>
    </table> 
    <form action='index.html' method='post'>
        <p><input type='submit' value='Zurück zur Website!'></p>
    </form>";


?>  

<script src="../jquery.js"></script>
<script src="../sidebar.js"></script>  
</body>
</html>