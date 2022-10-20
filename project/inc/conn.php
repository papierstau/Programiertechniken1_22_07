<?php
    // Variablen die für die Verbinndung zur Datenbank benötigt werden
    $servername = 'localhost';
    $userName = 'root';
    $password = '';
    $dbName = 'beispiel';
    // versuche den Codeblock auszuführen
    try {
        // PDO = PhP Data Object, dient als Verbinndung zur Datenbank
        $connection = new PDO('mysql:host='.$servername.'; dbname='.$dbName.'; charset=utf8', $userName, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connection successfully";
    // catch wird nur dann ausgeführt wenn ein Fehler auftritt
    } catch (PDOException $e) {
        echo "connection faild".$e->getMessage();
    }
    
?>