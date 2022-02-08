<?php
    //db cfg, put your own database
    $dbLocation = 'mysql:host=localhost;dbname=todo_list';
    $user = 'root';
    $password = "";
    $pdo = new PDO($dbLocation, $user, $password);

    //catches any errors
    //Not really good idea in production
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>