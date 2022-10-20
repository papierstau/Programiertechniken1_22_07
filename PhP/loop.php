<?php
    $x = 42;
    $alpha = "einundzwanzig";
    $y = 0;

    // Kopfgesteuerte Schleife
    // Solange die Bedingung erfüllt wird, wird der Codeblock ausgeführt
    while($x > $y){
        
        echo $y;
        echo "<br>";
        $y+= 0.1;
    }

    // Fussgesteuerte Schleife
    // Vor der Überprüfung wird der Codeblock ausgeführt
    do{
        echo $y;
        echo "<br>";
        $y++;
    }while($x > $y)

    // Zähler gesteuerte Schleife
    // solange der Zähler die Bedingung erfüllt, wird die Schleife ausgeführt
    for($i = 0; $i<=10; $i++){
        echo $i;
    }

    $blumen = array("Rosen", "Pusteblume", "Tulpe","Orchide");

    // Foreach lassen sich im besonderen für Arrays und assoziative Arrays verwenden
    // jedes einzelne Item des Array wird in der Variable zwischengespeichert
    foreach($blumen as $flower){
        var_dump($flower); 
        echo "<br>";
    }

    // assoziatives Array bestehend aus Key und Value
    $age = array("Klaus" => "35", "Bill" => "102", "Perter" => "52");

    // $z ist der Key und $val ist der Value
    foreach($age as $z => $val){
        echo "$z = $val<br>";
    }

    $cars = array(
        array("Volvo", 1950),
        array("Saab", 1967),
        array("Hyundai", 1382)
    );

    // Array wird über die unterschiedliche Indexe angesprochen
    // $cars[$row][$col]
    for($row = 0; $row < 3; $row++){
        echo "<p><b> Reihe Nummer $row</b></p>";
        echo "<ul>";
        for($col = 0; $col < 2; $col++){
            echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
    }

    
?>