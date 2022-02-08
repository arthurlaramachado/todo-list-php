<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include "styles.css" ?>
    </style>
    <script src="script.js"></script>
    <title>Document</title>
</head>

<body>
    <div id="form">
        <form action="../../handlers/edit-item.php" method="post">
            <p>New task title: <input type="text" name="title" /></p>
            <p>New task description: <input type="text" name="description" /></p>
            <input 
                type="hidden" 
                name="id" 
                value=<?php
                        $id = (int)$_GET['id'];
                        echo "{$id}";
                    ?>
            >
            <p><input type="submit"/></p>
        </form>
    </div>
</body>

</html>