<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form_type = $_POST["form_type"];
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $last_name = $_POST["last_name"];
    $student_id_number = $_POST["student_id_number"];
    $year_graduated = $_POST["year_graduated"];
    $email_address = $_POST["email_address"];
    $mobile_number = $_POST["mobile_number"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Escape variables for security to prevent SQL injection
    $first_name = mysqli_real_escape_string($connection, $first_name);
    $middle_name = mysqli_real_escape_string($connection, $middle_name);
    $last_name = mysqli_real_escape_string($connection, $last_name);
    $student_id_number = mysqli_real_escape_string($connection, $student_id_number);
    $year_graduated = mysqli_real_escape_string($connection, $year_graduated);
    $email_address = mysqli_real_escape_string($connection, $email_address);
    $mobile_number = mysqli_real_escape_string($connection, $mobile_number);
    $password = mysqli_real_escape_string($connection, $password);
    $confirm_password = mysqli_real_escape_string($connection, $confirm_password);

    // Ensure passwords match
    if ($password !== $confirm_password) {
        echo '<script>alert("Passwords do not match!"); window.history.back();</script>';
        exit;
    }

    // Hash the password for security
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $query = "INSERT INTO users (first_name, middle_name, last_name, student_id_number, year_graduated, email_address, mobile_number, password_hash, confirm_password_hash) 
              VALUES ('$first_name', '$middle_name', '$last_name', '$student_id_number', '$year_graduated', '$email_address', '$mobile_number', '$password_hash', '$password_hash')";

    if (mysqli_query($connection, $query)) {
        echo '<script>alert("Registration successful!"); window.location.href = "index.php";</script>';
        exit;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>