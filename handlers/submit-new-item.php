<?php
    require_once "db_cfg.php";

    if (isset($_POST['title'], $_POST['description']) && !empty($_POST['title']) && !empty($_POST['description'])) {
        $sql = $pdo->prepare("INSERT INTO tasks (title, description) VALUES (?, ?)");
        $sql->execute(array($_POST['title'], $_POST['description']));
        echo 'Succesfully inserted data! <br>';
        echo "<a href='/'><button>Main page</button></a>";
    } else {
        echo "Some fields seem to be empty, please, fill them and try again.";
    }
?>
