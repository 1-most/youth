<?php
session_start();
require_once('../config/config.php');

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get form data with default values
$profile_id = mysqli_real_escape_string($mysqli, $_SESSION['profile_id']);
$first_name = isset($_POST['first_name']) ? $_POST['first_name'] : NULL;
$last_name = isset($_POST['last_name']) ? $_POST['last_name'] : NULL;
$date_of_birth = isset($_POST['date_of_birth']) ? $_POST['date_of_birth'] : NULL;
$gender = isset($_POST['gender']) ? $_POST['gender'] : NULL;
$location = isset($_POST['location']) ? $_POST['location'] : NULL;
$citizenship = isset($_POST['citizenship']) ? $_POST['citizenship'] : NULL;
$occupation = isset($_POST['occupation']) ? $_POST['occupation'] : NULL;
$sector = isset($_POST['sector']) ? $_POST['sector'] : NULL;
$education_level = isset($_POST['education_level']) ? $_POST['education_level'] : NULL;
$marital_status = isset($_POST['marital_status']) ? $_POST['marital_status'] : NULL;
$disability_status = isset($_POST['disability_status']) ? $_POST['disability_status'] : 0; // Default to 0 if not set
$disabilityExplanation = isset($_POST['disability_explanation']) ? $_POST['disability_explanation'] : '';

// Prepare an SQL statement
$stmt = $mysqli->prepare("INSERT INTO youth_profile (
    first_name, last_name, date_of_birth, gender, location, citizenship, 
    occupation, sector, education_level, marital_status, disability_status, disability_explanation
) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// Check if prepare() succeeded
if (!$stmt) {
    die("Prepare failed: " . $mysqli->error);
}

// Bind parameters (assuming all fields are strings, adjust as necessary)
$stmt->bind_param("ssssssssssss", 
    $first_name, $last_name, $date_of_birth, $gender, $location, $citizenship, 
    $occupation, $sector, $education_level, $marital_status, $disability_status, $disabilityExplanation
);

if ($stmt->execute()) {
    // Redirect to the youth dashboard page
    echo "Profile created successfully";
    header("Location: ../views/dashboard.php");
    exit(); // Ensure no further code is executed after the redirect
} else {
    echo "Error: " . $stmt->error;
}
// Close statement and connection
$stmt->close();
$mysqli->close();


?>
