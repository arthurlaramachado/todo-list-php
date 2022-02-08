<?php
    require_once "db_cfg.php";

    $id = (int)$_POST['id'];
    $title = htmlspecialchars($_POST['title']);
    $desc = htmlspecialchars($_POST['description']);

    if (isset($id, $title, $desc) && (!empty($title) || !empty($desc))) {
        $query = "UPDATE tasks SET ".
            (!empty($title) ? "title='{$title}' " : '').
            (!empty($title) && !empty($desc) ? "," : '').
            (!empty($desc) ? "description='{$desc}' " : '').
            "WHERE id=?";
        $sql = $pdo->prepare($query);
        $sql->execute(array($id));
        echo 'Succesfully updated data! <br>';
        echo "<a href='/'><button>Main page</button></a>";
    } else {
        echo "No data was provided to update";
    }
?>