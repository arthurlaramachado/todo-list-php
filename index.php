<html>

<head>
    <style>
        <?php include "index.css" ?>
    </style>
    <script src="index.js"></script>
    <title>Teste PHP</title>
</head>

<body>
    <div id="table-header">
        <h1>Todo List: </h1>
        <button id="add-item">+ Add item</button>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span id="modal-close-btn">&times;</span>
            <form action="./handlers/submit-new-item.php" method="post">
                <p>Task title: <input type="text" name="title" /></p>
                <p>Task description: <input type="text" name="description" /></p>
                <p><input type="submit" /></p>
            </form>
        </div>
    </div>

    <div id="todo-list">
        <table>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
                require_once "./handlers/get_todo_list.php";
                $editSymbol = "\u{270E}";

                foreach ($res as $key => $value) {
                    echo "<tr>";
                    echo "<td>{$value['title']}</td>";
                    echo "<td>{$value['description']}</td>";
                    echo "<td><div class='buttons'><a href='./pages/edit-item/edit-item.php?id={$value['id']}'><button>{$editSymbol}</button></a></div></td>";
                    echo "<td><div class='buttons'><a href='./handlers/delete-item.php?delete={$value['id']}'><button>&times;</button></a></div></td>";
                    echo "</tr>";
                };
            ?>
        </table>
    </div>
</body>

</html>