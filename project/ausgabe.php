<?php
    // beinhalte einmalig die php-Datei
    include_once('inc/conn.php');
    // Wenn die Connection steht ...
    if($connection){
        // SQL-Query als Variable gespeichert
        $ausgabe = 'SELECT * FROM benutzer';
        // Als Array werden die Daten benutzt und as $row zwischen gespeichert
        //assoziatives Array
        // Values können über Key angesprochen werden
        // Innerhalb der foreach-Schleife werden die Daten der Datenbank ausgegeben
        foreach($connection->query($ausgabe) as $row){
            echo $row['user_id']." ".$row['user_name']."<br>";
        }
    }
    $connection = null;
?>