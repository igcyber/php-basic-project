<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Expense Application</title>
</head>

<body>
    <h1>Expenses</h1>
    <table border="1">
        <tr>
            <th>Description</th>
            <th>Amount</th>
            <th>Category</th>
        </tr>
        <?php
        // Display expenses from session
        if (!empty($_SESSION["expenses"])) {
            foreach ($_SESSION["expenses"] as $expense) {
                echo "<tr>";
                echo "<td>" . $expense["description"] . "</td>";
                echo "<td>" . $expense["amount"] . "</td>";
                echo "<td>" . $expense["category"] . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
    <a href="index.php">Add Another Expense</a>
</body>

</html>