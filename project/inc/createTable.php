<?php 

    // Diese Datei nur einmal ausführen!!!!!

    // require besagt, dass die angebene php-Datei benötigt wird
    require('conn.php');

    // $connection aus der conn.php
    // query erlaubt es uns ein SQL-Query auszuführen
    $createTable = $connection->query('CREATE TABLE benutzer(
        user_id INT AUTO_INCREMENT, user_name VARCHAR(255),
         user_email VARCHAR(255), PRIMARY KEY(user_id)) ENGINE = INNODB');
    
    $connection = null;

?>