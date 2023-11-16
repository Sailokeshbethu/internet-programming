<?php
// Include the database connection script
include 'db-connect.php'; // You should create this file with the database connection code

// Check if the form is submitted (assuming a simple form POST method)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle login logic based on the submitted form
    // This is a basic example; replace it with your actual login logic

    // For example, if the form for admin-login.html is submitted
    if (isset($_POST['adminLogin'])) {
        $adminUsername = $_POST['adminUsername'];
        $adminPassword = $_POST['adminPassword'];

        // Perform authentication and other necessary checks here

        // Redirect to a dashboard or another page on successful login
        header("Location: admin-dashboard.php");
        exit();
    }

    // Similar logic for agent and user logins...
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insurance Management System</title>
</head>
<body>
    <h1>Welcome to Insurance Management System</h1>
    
    <form action="admin-login.php" method="post">
        <label for="adminUsername">Username:</label>
        <input type="text" id="adminUsername" name="adminUsername" required><br>

        <label for="adminPassword">Password:</label>
        <input type="password" id="adminPassword" name="adminPassword" required><br>

        <input type="submit" name="adminLogin" value="Admin Login">
    </form>

    <a href="agent-login.php">Agent Login</a><br>
    <a href="user-login.php">User Login</a><br>
</body>
</html>
