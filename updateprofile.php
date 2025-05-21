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

// Handle form submission for updating profile
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];

    // Update query using prepared statements
    $updateQuery = $conn->prepare("UPDATE newuser SET firstName = ?, lastName = ? WHERE email = ?");
    $updateQuery->bind_param("sss", $firstName, $lastName, $email);

    if ($updateQuery->execute()) {
        echo "Profile updated successfully!";
        header("Location: homepage.php"); // Redirect to homepage after update
        exit();
    } else {
        echo "Error updating profile: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
</head>
<body>
    <h2>Update Profile</h2>
    <form method="POST" action="">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" value="<?php echo htmlspecialchars($user['firstName']); ?>" required><br><br>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" value="<?php echo htmlspecialchars($user['lastName']); ?>" required><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
