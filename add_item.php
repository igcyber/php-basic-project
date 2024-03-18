<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['newItem'])) {
    $newItem = trim($_POST['newItem']);
    if (!empty($newItem)) {
        // Append the new item to the travel list file
        file_put_contents('travel_list.txt', $newItem . PHP_EOL, FILE_APPEND | LOCK_EX);
    }
}
header('Location: index.php'); // Redirect back to the main page
exit;
