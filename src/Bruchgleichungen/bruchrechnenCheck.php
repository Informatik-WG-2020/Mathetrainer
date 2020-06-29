<?php
            function factor($h1, $h2) {
                $m = 0;
                if($h1 > $h2){
                    for($m = 1; $m < $h1; $m++){
                        if(is_int($h1/$m) && is_int($h2/$m)){
                            $h1 = $h1 / $m;
                            $h2 = $h2 / $m;
                            $m=1;
                        }
                    }
                } else if($h1 < $h2){
                    for($m = 1; $m < $h2; $m++){
                        if(is_int($h1/$m) && is_int($h2/$m)){
                            $h1 = $h1 / $m;
                            $h2 = $h2 / $m;
                            $m=1;
                        }
                    }
                } else
                    $h1 = 1;
                return $h1;
            }


            $rhilfx1 = "";
            $rhilfx2 = "";
            $rhilfx3 = "";
            $rhilfy1 = "";
            $rhilfy2 = "";
            $rhilfy3 = "";
            $finalString = $_COOKIE['aufgabe'];
            $i = 0;
            while($finalString[$i] != "c"){
                $rhilfx1 = $rhilfx1 . $finalString[$i];
                $i++;
            }
            $i++;
            while($finalString[$i] != "c"){
                $rhilfx2 = $rhilfx2 . $finalString[$i];
                $i++;
            }
            $i++;
            while($finalString[$i] != "c"){
                $rhilfx3 = $rhilfx3 . $finalString[$i];
                $i++;
            }
            $i++;
            $operator = $finalString[$i];
            $i++;
            $operator = $operator . $finalString[$i];
            $i+=2;
            while($finalString[$i] != "c"){
                $rhilfy1 = $rhilfy1 . $finalString[$i];
                $i++;
            }
            $i++;
            while($finalString[$i] != "c"){
                $rhilfy2 = $rhilfy2 . $finalString[$i];
                $i++;
            }
            $i++;
            while($finalString[$i] != "c"){
                $rhilfy3 = $rhilfy3 . $finalString[$i];
                $i++;
            }
            $i += 2;

            $q=1;
            $richtig = true;
            $position = "";
            $ahilfx1 = $_GET["x1"];
            $ahilfx2 = $_GET["x2"];
            $ahilfx3 = $_GET["x3"];
            $ahilfy1 = $_GET["y1"];
            $ahilfy2 = $_GET["y2"];
            $ahilfy3 = $_GET["y3"];
            $hilfx1 = factor($ahilfx1, $ahilfy1);
            $hilfy1 = factor($ahilfy1, $ahilfx1);
            $hilfx2 = factor($ahilfx2, $ahilfy2);
            $hilfy2 = factor($ahilfy2, $ahilfx2);
            $hilfx3 = factor($ahilfx3, $ahilfy3);
            $hilfy3 = factor($ahilfy3, $ahilfx3);
            /*echo $rhilfx1 . " | " . $hilfx1 . " |";
            echo $rhilfx2 . " | " . $hilfx2 . " |";
            echo $rhilfx3 . " | " . $hilfx3 . " |";
            echo $rhilfy1 . " | " . $hilfy1 . " |";
            echo $rhilfy2 . " | " . $hilfy2 . " |";
            echo $rhilfy3 . " | " . $hilfy3;*/
            if($hilfx1 != $rhilfx1){
                $position = $position ."0";
                $richtig = false;
            }
            if($hilfx2 != $rhilfx2){
                $position = $position ."1";
                $richtig = false;
            }
            if($hilfx3 != $rhilfx3){
                $position = $position ."2";
                $richtig = false;
            }
            if($hilfy1 != $rhilfy1){
                $position = $position ."3";
                $richtig = false;
            }
            if($hilfy2 != $rhilfy2){
                $position = $position ."4";
                $richtig = false;
            }
            if($hilfy3 != $rhilfy3){
                $position = $position ."5";
                $richtig = false;
            }
            if($richtig == false){
                $finalString = $finalString . $position . "d";
            }elseif($richtig == true){
                $finalString = $finalString . $position . "e";
            }

            setrawcookie("aufgabe",$finalString ,time() + 1800, "/");


            /*
            switch($_GET["fall"]) {
                case 1:
                    $ahilfx3 = ($hilfx1 * $hilfy2) + ($hilfx2 * $hilfy1);
                    $ahilfy3 = $hilfy1 * $hilfy2;
                    $hilfx3 = factor($ahilfx3, $ahilfy3);
                    $hilfy3 = factor($ahilfy3, $ahilfx3);
                    if($hilfx3 == $_GET["x3"] && $hilfy3 == $_GET["y3"]){
                        echo "Richtig";
                    }else{
                        echo "Falsch";
                    }
                    break;
                case 2:
                    $ahilfx3 = ($hilfx1 * $hilfy2) - ($hilfx2 * $hilfy1);
                    $ahilfy3 = $hilfy1 * $hilfy2;
                    $hilfx3 = factor($ahilfx3, $ahilfy3);
                    $hilfy3 = factor($ahilfy3, $ahilfx3);
                    if($hilfx3 == $_GET["x3"] && $hilfy3 == $_GET["y3"]){
                        echo "Richtig";
                    } else {
                       echo "Falsch";
                    }
                    break;
                case 3:
                    $ahilfx3 = ($hilfx1 * $hilfy2) - ($hilfx2 * $hilfy1);
                    $ahilfy3 = $hilfy1 * $hilfy2;
                    $hilfx3 = factor($ahilfx3, $ahilfy3);
                    $hilfy3 = factor($ahilfy3, $ahilfx3);
                    if($hilfx3 == $_GET["x3"] && $hilfy3 == $_GET["y3"]){
                        echo "Richtig";
                    }else{
                        echo "Falsch";
                    }
                    break;
                case 4:
                    $ahilfx3 = ($hilfx2 * $hilfy1) - ($hilfx1 * $hilfy2);
                    $ahilfy3 = $hilfy1 * $hilfy2;
                    $hilfx3 = factor($ahilfx3, $ahilfy3);
                    $hilfy3 = factor($ahilfy3, $ahilfx3);
                    if($hilfx3 == $_GET["x3"] && $hilfy3 == $_GET["y3"]){
                        echo "Richtig";
                    }else{
                        echo "Falsch";
                    }
                    break;
                case 5:
                    $ahilfx3 = $hilfx1 * $hilfx2;
                    $ahilfy3 = $hilfy1 * $hilfy2;
                    $hilfx3 = factor($ahilfx3, $ahilfy3);
                    $hilfy3 = factor($ahilfy3, $ahilfx3);
                    if($hilfx3 == $_GET["x3"] && $hilfy3 == $_GET["y3"]){
                        echo "Richtig";
                    }else{
                        echo "Falsch";
                    }
                    break;
                case 6:
                    $ahilfx3 = $hilfx1 * $hilfy2;
                    $ahilfy3 = $hilfy1 * $hilfx2;
                    $hilfx3 = factor($ahilfx3, $ahilfy3);
                    $hilfy3 = factor($ahilfy3, $ahilfx3);
                    if($hilfx3 == $_GET["x3"] && $hilfy3 == $_GET["y3"]){
                        echo "Richtig";
                    }else{
                        echo "Falsch";
                    }
                    break;
                case 7:
                    $ahilfx3 = $hilfx1 * $hilfy2;
                    $ahilfy3 = $hilfy1 * $hilfx2;
                    $hilfx3 = factor($ahilfx3, $ahilfy3);
                    $hilfy3 = factor($ahilfy3, $ahilfx3);
                    if($hilfx3 == $_GET["x3"] && $hilfy3 == $_GET["y3"]){
                        echo "Richtig";
                    }else{
                        echo "Falsch";
                    }
                    break;
                case 8:
                    $ahilfx3 = $hilfy1 * $hilfx2;
                    $ahilfy3 = $hilfx1 * $hilfy2;
                    $hilfx3 = factor($ahilfx3, $ahilfy3);
                    $hilfy3 = factor($ahilfy3, $ahilfx3);
                    if($hilfx3 == $_GET["x3"] && $hilfy3 == $_GET["y3"]){
                        echo "Richtig";
                    }else{
                        echo "Falsch";
                    }
                    break;
            }*/
            //settype($finalString, "string");
            //$finalString = $hilfx1 . "c" . $hilfx2 . "c" . $hilfx3 . "c" . $operator . "c" . $hilfy1 . "c" . $hilfy2 . "c" . $hilfy3 . "c" . $_GET["fall"];
            //setrawcookie("aufgabeLoesung", $finalString, time() + (1800), "/");
            //echo '<script>var d = new Date(); d.setTime(d.getTime() + 1800*1000); document.cookie = "aufgabeLoesung="' . $finalString . '"; expires=" + d + "; path=/";</script>';
        ?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <br>
        <meta http-equiv="refresh" content="0; URL=/mathetrainer/Bruchgleichungen/index.php">
        Falls die weiterleitung nicht innerhalb von 5 Sekunden Automatisch erfolgt, klicken Sie bitte
        <a href="/mathetrainer/Bruchgleichungen/index.php">hier</a>
    </body>
</html>