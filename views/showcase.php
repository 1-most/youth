<!-- showcase.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talent Showcase</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Creative and Talent Showcase</h2>
        <div class="row">
            <?php
            $data = file_get_contents('showcase.json');
            $entries = json_decode($data, true);
            
            if ($entries) {
                foreach ($entries as $entry) {
                    echo '
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="' . $entry['file_path'] . '" class="card-img-top" alt="' . htmlspecialchars($entry['title']) . '">
                            <div class="card-body">
                                <h5 class="card-title">' . htmlspecialchars($entry['title']) . '</h5>
                                <p class="card-text">' . htmlspecialchars($entry['description']) . '</p>
                            </div>
                        </div>
                    </div>';
                }
            } else {
                echo '<p>No entries yet.</p>';
            }
            ?>
        </div>
    </div>
</body>
</html>
