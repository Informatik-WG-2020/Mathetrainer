<!DOCTYPE html>
<!-- IDEE:
    - coockie für Punktzahl
    - Lösungsseite (cookie letze Stellen sind falsche Eingabestellen)
    - Negative Brüche oben vor der Zahl ein Minus schreiben
    - aus -- wird +
    - bruchrechnenCheck
    - Sicherheit
-->
<html>
    <head>
        <title>Mathetrainer: Bruchgleichungen</title>
		<link rel="stylesheet" href="../style.css">
    </head>
    <body>
		<a class="icon" href="/mathetrainer/index.html"><image src="/mathetrainer/mathetrainer.png" alt="Mathetrainer-Logo" /></a>
        <?php
            $new = $_COOKIE["aufgabe"][strlen($_COOKIE["aufgabe"])-1];
            if(!isset($_COOKIE["aufgabe"]) && $new != "d" && $new != "e"){
                echo("<script>window.location.href = 'bruchrechnenCreate.php'</script></body></html>");
                die();
            }
            if($new == "d"){
                echo "Deine Antworten sind leider falsch!<br>";
            }elseif($new == "e"){
                echo "Deine Antworten sind richtig!<br>";
            }
        ?>
        <form action="bruchrechnenCheck.php" methode="get" ><!--enctype="multipart/form-data"> onsubmit="return validateForm()"-->
            <?php
                if($new != "d" && $new != "e"){
                    $k1 = rand(0,2);
                    $k2 = rand(0,2);
                }else{
                    $k1 = 3;
                    $k2 = 3;
                }
            ?>
            <br>
            <table>
                <tr>
                    <td>
                        <?php
                            //$finalString = "13c#c431c+=#c6c2c";
                            $finalString = "";
                            settype($finalString, "string");
                            if(isset($_COOKIE["aufgabe"])){
                                $finalString = $_COOKIE["aufgabe"];
                            } /*else {
                                $finalString = $_COOKIE["aufgabeLoesung"];
                                setcookie("aufgabeLoesung","",time() - 1800, "/");
                            }*/
                            //echo $finalString . "<br>";
                            $i = 0;
                            $hilfx1 = "";
                            while($finalString[$i] != "c"){
                                $hilfx1 = $hilfx1 . $finalString[$i];
                                $i++;
                            }
                            if($k1 == 0){
                                $hilfx1 = "' required>";
                            }else{
                                $hilfx1 = $hilfx1 . "' readonly>";
                            }
                            echo "<input type='number' id='x1' name='x1' value='" . $hilfx1; 
                            //setcookie("aufgabe","",time() - 1800, "/");
                        ?>
                        <!--<script>
                            document.cookie = "aufgabe=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
                        </script>-->
                    </td>
                    <td></td>
                    <td>
                        <?php
                            $i++;
                            $hilfx2 = "";
                            while($finalString[$i] != "c"){
                            $hilfx2 = $hilfx2 . $finalString[$i];
                            $i++;
                            }
                            if($k1 == 1){
                                $hilfx2 = "' required>";
                            }else{
                                $hilfx2 = $hilfx2 . "' readonly>";
                            }
                            echo "<input type='number' id='x2' name='x2' value='" . $hilfx2; 
                        ?>
                    </td>
                    <td></td>
                    <td>
                        <?php
                            $i++;
                            $hilfx3 = "";
                            while($finalString[$i] != "c"){
                            $hilfx3 = $hilfx3 . $finalString[$i];
                            $i++;
                            }
                            if($k1 == 2){
                                $hilfx3 = "' required>";
                            }else{
                                $hilfx3 = $hilfx3 . "' readonly>";
                            }
                            echo "<input type='number' id='x3' name='x3' value='" . $hilfx3; 
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><hr></td>
                    <td>
                        <?php
                            $i++;
                            if($finalString[$i] == "a"){
                                echo "<label for='o1'>" . "+" . "</label>";
                            }elseif($finalString[$i] == "b"){
                                echo "<label for='o1'>" . "=" . "</label>";
                            }else{
                                echo "<label for='o1'>" . $finalString[$i] . "</label>";
                            }
                        ?>
                    </td>
                    <td><hr></td>
                    <td>
                        <?php
                            $i++;
                            if($finalString[$i] == "a"){
                                echo "<label for='o1'>" . "+" . "</label>";
                            }elseif($finalString[$i] == "b"){
                                echo "<label for='o1'>" . "=" . "</label>";
                            }else{
                                echo "<label for='o1'>" . $finalString[$i] . "</label>";
                            }
                            $i++;
                        ?>
                    </td>
                    <td><hr></td>
                </tr>
                <tr>
                    <td>
                        <?php
                            $i++;
                            $hilfy1 = "";
                            while($finalString[$i] != "c"){
                            $hilfy1 = $hilfy1 . $finalString[$i];
                            $i++;
                            }
                            if($k2 == 0){
                                $hilfy1 = "' required>";
                            }else{
                                $hilfy1 = $hilfy1 . "' readonly>";
                            }
                            echo "<input type='number' id='y1' name='y1' value='" . $hilfy1; 
                        ?>
                    </td>
                    <td></td>
                    <td>
                        <?php
                            $i++;
                            $hilfy2 = "";
                            while($finalString[$i] != "c"){
                            $hilfy2 = $hilfy2 . $finalString[$i];
                            $i++;
                            }
                            if($k2 == 1){
                                $hilfy2 = "' required>";
                            }else{
                                $hilfy2 = $hilfy2 . "' readonly>";
                            }
                            echo "<input type='number' id='y2' name='y2' value='" . $hilfy2; 
                        ?>
                    </td>
                    <td></td>
                    <td>
                        <?php
                            $i++;
                            $hilfy3 = "";
                            while($finalString[$i] != "c"){
                            $hilfy3 = $hilfy3 . $finalString[$i];
                            $i++;
                            }
                            if($k2 == 2){
                                $hilfy3 = "' required>";
                            }else{
                                $hilfy3 = $hilfy3 . "' readonly>";
                            }
                            echo "<input type='number' id='y3' name='y3' value='" . $hilfy3; 
                        ?>
                    </td>
                </tr>
            </table>
            <br>
            <?php
                echo "<input type='hidden' id='fall' name='fall' value='" . $finalString[strlen($finalString)-1] . "'>";
            ?>
            <button type="button" onclick="window.location.href = 'bruchrechnenCreate.php'">Neue Aufgabe</button>
            <button type="submit" id="abgeben">Abgeben</button>
            <?php
                if($new == "d" or $new == "e"){
                    echo '<script>document.getElementById("abgeben").disabled = "disabled";
                    document.getElementById("abgeben").title = "Aufgabe wurde bereits abgegeben!";
                    </script>';
                } elseif($new != "d" or $new != "e") {
                    echo '<script>document.getElementById("abgeben").removeAttribute("disabled");</script>';
                }
            ?>
        </form>
		
		<script src="../jquery.js"></script>
		<script src="../sidebar.js"></script>
    </body>
</html>