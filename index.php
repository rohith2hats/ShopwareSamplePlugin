<?php
// Define the fixed email and password
$fixed_email = "user@example.com";
$fixed_password = "password123";

// Check if the form has been submitted
if (isset($_POST['loginss'])) {
    // Retrieve user input from the form
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];

    // Check if the user input matches the fixed email and password
    if ($user_email === $fixed_email && $user_password === $fixed_password) {
        // Successful login
        echo "Login successful!";
        // You can redirect the user to another page here if you want
    } else {
        // Login failed
        echo "Invalid email or password. Please try again.";
    }
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Login Form</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="index.php">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
