<?php

    // Variablen werden durch das Formular befüllt
    // $_POST = die Methode
    // [''] Name des input-Feldes
    $userName1 = $_POST['userName'];
    $userEmail = $_POST['userEmail'];

    require('conn.php');


    // SQL-Query welches Variablen hier als Values benutzt
    $insert = $connection->query("INSERT INTO benutzer(user_name, user_email)
    VALUES('$userName1', '$userEmail');");

    $connection = null;
  
?>