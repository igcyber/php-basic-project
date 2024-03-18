<!-- index.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Expense Application</title>
</head>

<body>
    <h1>Cash Expense Application</h1>
    <form action="expenses.php" method="post">
        <label for="description">Description</label> <br>
        <input type="text" id="description" name="description" required><br><br>
        <label for="amount">Amount</label> <br>
        <input type="number" id="amount" name="amount" required><br><br>
        <label for="category">Category</label> <br>
        <input type="text" id="category" name="category" required><br><br>
        <button type="submit">Add Expense</button>
    </form>
</body>

</html>