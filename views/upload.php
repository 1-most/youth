
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $target_dir = "uploads/";

    // Create directory if it doesn't exist
    if (!is_dir($target_dir)) {
        mkdir($target_dir);
    }

    // Handling file upload
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $upload_ok = 1;
    $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if file is an image
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $upload_ok = 0;
    }

    // Allow only certain file formats
    if (!in_array($image_file_type, ['jpg', 'jpeg', 'png', 'gif'])) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $upload_ok = 0;
    }

    // Check if $upload_ok is set to 0 by an error
    if ($upload_ok == 1) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            // Save the details to a JSON file (can be a database in real projects)
            $entry = [
                'title' => $title,
                'description' => $description,
                'file_path' => $target_file
            ];
            $data = file_get_contents('showcase.json');
            $json_array = json_decode($data, true);
            $json_array[] = $entry;
            file_put_contents('showcase.json', json_encode($json_array));

            echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
            header("Location: showcase.php");
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
