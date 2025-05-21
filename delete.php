<?php
session_start();
include("connect.php"); // Include database connection

// Check if ID is set in the URL
if (isset($_GET['id'])) {
    $email = $_GET['id']; // Retrieve email from URL

    // Delete query using prepared statements
    $query = $conn->prepare("DELETE FROM newuser WHERE email = ?");
    $query->bind_param("s", $email);
    if ($query->execute()) {
        // Destroy session and redirect to login page after deletion
        session_destroy();
        header("Location: frontbeforelogin.php");
        exit();
    } else {
        echo "Error deleting account: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}
?>
