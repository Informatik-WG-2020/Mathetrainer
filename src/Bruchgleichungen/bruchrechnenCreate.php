<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <!--<p id="demo"></p>-->
        <script>
            function faktor(h1, h2) {
                var m=0;
                if(h1 > h2){
                    for(m = 1; m < h1; m++){
                        if(Number.isInteger(h1/m) && Number.isInteger(h2/m)){
                            h1 = h1 / m;
                            h2 = h2 / m;
                            m=1;
                        }
                    }
                } else if( h1 < h2){
                    for(m = 1; m < h2; m++){
                        if(Number.isInteger(h1/m) && Number.isInteger(h2/m)){
                            h1 = h1 / m;
                            h2 = h2 / m;
                            m=1;
                        }
                    }
                } else
                    h1 = 1;
                return h1;
            }



            var position = false; //false ist links; true ist rechts
            var operator = ""; //0=+;1=-;2=*;3=/
            var gleichung = [[0,0,0],[0,0,0]];
            var hilfx1, hilfx2, hilfx3, hilfy1, hilfy2, hilfy3, ahilfx1, ahilfx2, ahilfx3, ahilfy1, ahilfy2, ahilfy3;
            var finalString;
            var fall;

            //Aufgabe generieren
            ahilfx1 = Math.round((Math.random() * 19) + 1);
            ahilfx2 = Math.round((Math.random() * 19) + 1);
            ahilfy1 = Math.round((Math.random() * 19) + 1);
            ahilfy2 = Math.round((Math.random() * 19) + 1);
            //document.getElementById("demo").innerHTML = "hilfx1: " + hilfx1 + ", hilfx2: " + hilfx2 + ", hilfx3: " + hilfx3 + ", hilfy1: " + hilfy1 + ", hilfy2: " + hilfy1 + ", hilfy3: " + hilfy3;

            //Kürzen
            hilfx1 = faktor(ahilfx1, ahilfy1);
            hilfy1 = faktor(ahilfy1, ahilfx1);
            hilfx2 = faktor(ahilfx2, ahilfy2);
            hilfy2 = faktor(ahilfy2, ahilfx2);
            
            if(Math.random() > 0.5){
                position = true;
            }

            var h = Math.random();
            if(h < 0.25){
                if(position == false){
                    //Fall 1
                    fall = "1";
                    operator = new String('ab');
                    ahilfx3 = (hilfx1 * hilfy2) + (hilfx2 * hilfy1);
                    ahilfy3 = hilfy1 * hilfy2;
                    hilfx3 = faktor(ahilfx3, ahilfy3);
                    hilfy3 = faktor(ahilfy3, ahilfx3);
                }else{
                    //Fall 2
                    fall = "2";
                    operator = new String('ba');
                    ahilfx3 = (hilfx1 * hilfy2) - (hilfx2 * hilfy1);
                    ahilfy3 = hilfy1 * hilfy2;
                    hilfx3 = faktor(ahilfx3, ahilfy3);
                    hilfy3 = faktor(ahilfy3, ahilfx3);
                }
            }else if(h < 0.5 && h >= 0.25){
                if(position == false){
                    //Fall 3
                    fall = "3";
                    operator = "-b";
                    ahilfx3 = (hilfx1 * hilfy2) - (hilfx2 * hilfy1);
                    ahilfy3 = hilfy1 * hilfy2;
                    hilfx3 = faktor(ahilfx3, ahilfy3);
                    hilfy3 = faktor(ahilfy3, ahilfx3);
                }else{
                    //Fall 4
                    fall = "4";
                    operator = "b-";
                    ahilfx3 = (hilfx2 * hilfy1) - (hilfx1 * hilfy2);
                    ahilfy3 = hilfy1 * hilfy2;
                    hilfx3 = faktor(ahilfx3, ahilfy3);
                    hilfy3 = faktor(ahilfy3, ahilfx3);
                }
            }else if(h < 0.75 && h >= 0.5){
                if(position == false){
                    //Fall 5
                    fall = "5";
                    operator = "*b";
                    ahilfx3 = hilfx1 * hilfx2;
                    ahilfy3 = hilfy1 * hilfy2;
                    hilfx3 = faktor(ahilfx3, ahilfy3);
                    hilfy3 = faktor(ahilfy3, ahilfx3);
                }else{
                    //Fall 6
                    fall = "6";
                    operator = "b*";
                    ahilfx3 = hilfx1 * hilfy2;
                    ahilfy3 = hilfy1 * hilfx2;
                    hilfx3 = faktor(ahilfx3, ahilfy3);
                    hilfy3 = faktor(ahilfy3, ahilfx3);
                }
            }else if(h >= 0.75){
                if(position == false){
                    //Fall 7
                    fall = "7";
                    operator = "/b";
                    ahilfx3 = hilfx1 * hilfy2;
                    ahilfy3 = hilfy1 * hilfx2;
                    hilfx3 = faktor(ahilfx3, ahilfy3);
                    hilfy3 = faktor(ahilfy3, ahilfx3);
                }else{
                    //Fall 8
                    fall = "8";
                    operator = "b/";
                    ahilfx3 = hilfy1 * hilfx2;
                    ahilfy3 = hilfx1 * hilfy2;
                    hilfx3 = faktor(ahilfx3, ahilfy3);
                    hilfy3 = faktor(ahilfy3, ahilfx3);
                }
            }
            //zwei Variablen löschen
            //var h = Math.round((Math.random() * 8));
            /*
            switch(h) {
                case 0:
                    hilfx1 = "#";
                    hilfy1 = "#";
                    break;
                case 1:
                    hilfx1 = "#";
                    hilfy2 = "#";
                    break;
                case 2:
                    hilfx1 = "#";
                    hilfy3 = "#";
                    break;
                case 3:
                    hilfx2 = "#";
                    hilfy1 = "#";
                    break;
                case 4:
                    hilfx2 = "#";
                    hilfy2 = "#";
                    break;
                case 5:
                    hilfx2 = "#";
                    hilfy3 = "#";
                    break;
                case 6:
                    hilfx3 = "#";
                    hilfy1 = "#";
                    break;
                case 7:
                    hilfx3 = "#";
                    hilfy2 = "#";
                    break;
                case 8:
                    hilfx3 = "#";
                    hilfy3 = "#";
                    break;
            }*/
            finalString = hilfx1 + "c" + hilfx2 + "c" + hilfx3 + "c" + operator + "c" + hilfy1 + "c" + hilfy2 + "c" + hilfy3 + "c" + fall;
            
            //cookie erstellen
            var d = new Date();
            d.setTime(d.getTime() + 1800*1000)
            document.cookie = "aufgabe=" + finalString + "; expires=" + d + "; path=/";



            

            //muss in bruchrechnenCheck eingefügt und für cookies abgeändert werden
            function validateForm() {
                var x = document.forms["x1"]["x2"]["x3"]["y1"]["y2"]["y3"].value;
                if (x == "" || x.length < 3) {
                    alert("Bitte geben Sie gültige Werte zwischen 1 und 99 ein!");
                    return false;
                }
            }
        </script>
        <meta http-equiv="refresh" content="0; URL=/mathetrainer/Bruchgleichungen/index.php">
        Falls die weiterleitung nicht innerhalb von 5 Sekunden Automatisch erfolgt, klicken Sie bitte
        <a href="/mathetrainer/Bruchgleichungen/index.php">hier</a>
        .
    </body>
</html>