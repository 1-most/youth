<?php
session_start();
require_once('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $group_name = mysqli_real_escape_string($conn, $_POST['group_name']);
    $group_description = mysqli_real_escape_string($conn, $_POST['group_description']);
    $user_id = $_SESSION['user_id']; // Assuming the user is logged in

    if (!empty($group_name) && !empty($group_description)) {
        // Query to insert the new group into the database
        $sql = "INSERT INTO groups (group_name, group_description, created_by) VALUES ('$group_name', '$group_description', '$user_id')";
        if (mysqli_query($conn, $sql)) {
            echo "Your group has been created!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Please fill in all fields.";
    }
}
?>
