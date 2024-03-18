<!DOCTYPE html>
<html>

<head>
    <title>Holiday Travel List</title>
</head>

<body>
    <h1>Holiday Travel List</h1>

    <?php
    // Display existing travel items
    $items = file_exists('travel_list.txt') ? file('travel_list.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) : [];
    if (!empty($items)) {
        echo '<ul>';
        foreach ($items as $item) {
            echo '<li>' . htmlspecialchars($item) . '</li>';
        }
        echo '</ul>';
    } else {
        echo '<p>No items in the travel list.</p>';
    }
    ?>

    <h2>Add New Item</h2>
    <form action="add_item.php" method="post">
        <label for="newItem">Item:</label>
        <input type="text" id="newItem" name="newItem" required>
        <button type="submit">Add</button>
    </form>
</body>

</html>