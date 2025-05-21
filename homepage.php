<?php
session_start();
include("connect.php");

// Redirect to login page if session is not set
if (!isset($_SESSION['email'])) {
    header("Location: frontbeforelogin.php");
    exit();
}

$email = $_SESSION['email']; // Retrieve email from session

// Fetch user details securely using prepared statements
$query = $conn->prepare("SELECT firstName, lastName FROM newuser WHERE email = ?");
$query->bind_param("s", $email);
$query->execute();
$result = $query->get_result();

$user = $result->fetch_assoc(); // Fetch user details
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            padding: 15%;
        }
        p {
            font-size: 50px;
            font-weight: bold;
        }
        a {
            text-decoration: none;
            color: #007BFF;
            font-size: 20px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <p>
            Welcome 
            <?php 
            if ($user) {
                echo htmlspecialchars($user['firstName'] . ' ' . $user['lastName']); // Display user's name securely
            } else {
                echo "User";
            }
            ?>
            :)
        </p>
        <a href="updateprofile.php">Update Profile</a>
        <br>
        <br>
        <a href="delete.php?id=<?php echo urlencode($_SESSION['email']); ?>" onclick="return confirm('Are you sure you want to delete your account? This action cannot be undone.')">Delete Account</a>
        <br>
        <br>
        <a href="logout.php">Click to go back to main page</a>
    </div>
</body>
</html>


