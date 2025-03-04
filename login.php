<?php
session_start();

require_once "config.php";

// Function for user authentication
function authenticateUser($connection, $email_address, $password)
{
    $query = "SELECT id, email_address, password_hash FROM users WHERE email_address = ?";

    // Use prepared statement to prevent SQL injection
    $stmt = mysqli_prepare($connection, $query);
    if (!$stmt) {
        die("Error preparing statement: " . mysqli_error($connection));
    }

    mysqli_stmt_bind_param($stmt, "s", $email_address);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    if (!$result) {
        die("Error fetching result: " . mysqli_error($connection));
    }

    $row = mysqli_fetch_assoc($result);

    mysqli_stmt_close($stmt);

    return $row;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_address = $_POST["email_address"];
    $password = $_POST["password"];

    // Authenticate the user
    $userData = authenticateUser($connection, $email_address, $password);

    if ($userData && password_verify($password, $userData['password_hash'])) {
        // Set session variables
        $_SESSION['user_id'] = $userData['id'];
        $_SESSION['email_address'] = $userData['email_address'];

        // Redirect to dashboard
        header("Location: dashboard.php");
        exit;
    } else {
        // Redirect to login with an error
        header("Location: index.php?error=invalid_credentials");
        exit();
    }   
}
mysqli_close($connection);
?>
