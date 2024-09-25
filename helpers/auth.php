<?php

require_once('../config/config.php'); // Include the database connection

if (isset($_POST['submit'])) {
    $user_email = mysqli_real_escape_string($mysqli, $_POST['user_email']);
    $user_password = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['user_password'])));

    // Process Login
    $login_sql = "SELECT * FROM ligi_users WHERE user_email = '{$user_email}' AND user_password = '{$user_password}'";
    $res = mysqli_query($mysqli, $login_sql);

    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);

        // Bind Session Variables
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['user_role'] = $row['user_role'];
        $_SESSION['user_email'] = $row['user_email'];
        $_SESSION['success'] = 'Login successful';

        // Redirect to dashboard or main page
        header("Location: dashboard.php");
        exit();
    } else {
        $err = "Invalid email or password.";
        header("Location: login.php?error=" . urlencode($error));
        exit();
    }
}

/* Sign In */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture form data
    $user_name = $_POST['user_name'] ?? null;
    $user_email = $_POST['user_email'] ?? null;
    $user_phone_number = $_POST['user_phone_number'] ?? null;
    $user_password = $_POST['user_password'] ?? null;
    $confirm_password = $_POST['confirm_password'] ?? null;
    $user_access_level = 'youth'; // Set default access level

    // Print data to debug
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // Check if any data is missing
    if (!$user_name || !$user_email || !$user_phone_number || !$user_password || !$confirm_password) {
        echo "Missing required form data!";
        exit();
    }

    // Check if passwords match
    if ($user_password !== $confirm_password) {
        echo "Passwords do not match!";
        exit();
    }

    // Hash the password for security
    $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

    // Insert data into the database
    $sql = "INSERT INTO ligi_users (user_name, user_email, user_phone_number, user_password, user_access_level) 
            VALUES (?, ?, ?, ?, ?)";

    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("sssss", $user_name, $user_email, $user_phone_number, $hashed_password, $user_access_level);

        if ($stmt->execute()) {
            // Redirect to login page after successful registration
            header("Location: login.php");
            exit();
        } else {
            echo "Error: Could not execute query: $sql. " . $mysqli->error;
        }
    } else {
        echo "Error: Could not prepare query: $sql. " . $mysqli->error;
    }

    // Close the statement and connection
    $stmt->close();
    $mysqli->close();
}

