<?php
include "db.php";
$stmt = $conn->prepare("SELECT * FROM item");
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $description);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Todo App</title>
</head>
<body>
    <div class="main-sect">
        <form action="./add_item.php" method="post" class="todo-form">
            <h2>Todo List App</h2>
            <p>Add item to list</p>
            <div class="row">
                <input type="text" name="title" class="form-input">
            <input type="submit" value="Add to List" class="btn">
            </div>
        </form>
        <!-- List of added items -->
        <?php while ($stmt->fetch()): ?>
            <div class="list-item">
            <h4><?php echo htmlspecialchars($description); ?></h4>
            <div class="list-btns">
                <button class="item-btn btn-edit">Edit</button>
                <button class="item-btn btn-delete">Delete</button>
            </div>
         </div>
        <?php endwhile; ?>

    </div>
</body>
</html>