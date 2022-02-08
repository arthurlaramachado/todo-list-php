<?php
    require_once "db_cfg.php";

    $id = (int)$_GET['delete'];
    $pdo->exec("DELETE FROM tasks WHERE id={$id}");
    echo "Field of id={$id} successfully deleted <br>";
    echo "<a href='/'><button>Main page</button></a>";
?>