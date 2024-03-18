<?php
session_start(); // Ensure session is started

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $description = $_POST["description"];
    $amount = $_POST["amount"];
    $category = $_POST["category"];

    // Store expense in session (for simplicity, use session as "database")
    $expense = [
        "description" => $description,
        "amount" => $amount,
        "category" => $category
    ];

    // Check if the "expenses" session variable is set
    if (!isset($_SESSION["expenses"])) {
        $_SESSION["expenses"] = []; // Initialize it as an empty array
    }

    $_SESSION["expenses"][] = $expense; // Add the new expense to the array
}


include_once("expense_result.php");
