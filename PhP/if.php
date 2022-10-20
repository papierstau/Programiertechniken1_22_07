<?php
    $bool = false;
    $pi = 3.14;
    $zahl = 100; 
    $wort = "Feierabend";

    //If-Bedingung werden ausgeführt, wenn diese "wahr" ist
    //ansonsten wird der else-Block ausgeführt
    if(!$bool){
        echo "true";
    }else{
        echo "else";
    }

    echo "<br>";
    // || bedeutet ODER/OR
    // && bedeutet UND/AND
    if($pi == 3.14 || $zahl < 20){
        echo "ODER";
    }
    echo "<br>";

    //das !-Zeichen bedeutet eine Negation(Verneinung der Bedingung)
    if($pi == 3.14 && !$zahl < 20){
        echo "AND";
    }else{
        echo "false";
    }
    echo "<br>";

    // If-Bedingungen können mit einander kombiniert werden
    if($pi != 3.14 || $zahl > 75 && !$wort == "Feierabend" || 12 <= 20){
        echo "richtig";
    }else{
        echo "falsch";
    }

    echo "<br>";

    //Mit elseif können andere Bedingungen überprüft werden
    if(!$pi){
        echo $pi;
    }elseif($zahl == 100){
        echo $zahl;
    }elseif($wort == 5){
        echo $wort;
    }else{
        echo "else";
    }

    //if und elseif können in einander verschachtelt werden
    // können aber auch Schleifen beinhalten
    if($pi){
        if($zahl != 100){
            if($wort == "Feierabend"){
                echo $wort;
            }
            echo "auch richtig";
        }
        echo "ebenfalls richtig";
    }else{
        echo "else";
    }

?>