<?php
// Start the session
session_start();

// Hardcoded admin credentials (for demonstration)
$admin_username = "admin";
$admin_password = "password";

// Check if form is submitted
if (isset($_POST['admin_login_submit_btn'])) {
    // Get username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if username and password match the admin credentials
    if ($username === $admin_username && $password === $admin_password) {
        // Authentication successful
        $_SESSION["admin_logged_in"] = true;
        header("Location: admin_dashboard.php");
        exit();
    } else {
        // Authentication failed
        echo "Invalid username or password.";
    }
}
?>
