<?php
    require_once "db_cfg.php";

    $sql = $pdo->prepare("SELECT * FROM tasks");
    $sql->execute();

    $res = $sql->fetchAll();
?>