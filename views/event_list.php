
<?php
session_start();
require_once('../partials/head.php');
require_once('../partials/scripts.php');

?>

<body>
    <main class="main" id="top">
        <div class="container-fluid">
            <!-- Sidebar -->
            <?php include('../partials/youth_sidenav.php'); ?>
        
            <!-- Main Content Area -->
            <div class="content">
                <!-- Header Section -->
                <?php include('../partials/header.php'); ?>

                <!-- Navigation Bar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Youth Platform</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            
                        </div>
                    </div>
                </nav>

                
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
            border-radius: 10px;
            overflow: hidden;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 28px;
        }
        .search-bar, .filters, .sort-options {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        .search-bar input, .filters select, .sort-options select {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 0 10px;
        }
        .search-bar button {
            padding: 10px 15px;
            font-size: 16px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        .search-bar button:hover {
            background-color: #0056b3;
        }
        .search-bar i {
            margin-right: 5px;
            color: white;
        }
        .create-event {
            text-align: center;
            margin-top: 20px;
        }
        .create-event a {
            display: inline-flex;
            align-items: center;
            padding: 10px 15px;
            text-decoration: none;
            color: white;
            background-color: #28a745;
            border-radius: 5px;
            font-size: 16px;
        }
        .create-event a:hover {
            background-color: #218838;
        }
        .create-event i {
            margin-right: 8px;
        }
        .filters label, .sort-options label {
            font-weight: bold;
            margin-right: 10px;
            display: flex;
            align-items: center;
            color: #333;
        }
        .filters select:focus, .sort-options select:focus {
            border-color: #007bff;
            outline: none;
        }
        .event-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .event-list li {
            display: flex;
            align-items: center;
            background: #fff;
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
            overflow: hidden;
        }
        .event-list li:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 16px rgba(0,0,0,0.2);
        }
        .event-list img {
            width: 120px;
            height: 80px;
            border-radius: 8px;
            object-fit: cover;
            margin-right: 20px;
        }
        .event-info {
            flex: 1;
        }
        .event-info h2 {
            margin: 0 0 10px;
            color: #333;
        }
        .event-info p {
            margin: 5px 0;
            color: #666;
            display: flex;
            align-items: center;
        }
        .event-info p i {
            margin-right: 8px;
            color: #007bff;
            font-size: 1.2em;
        }
        .event-info .status {
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
        }
        .event-info .status.upcoming {
            background-color: #28a745;
        }
        .event-info .status.ongoing {
            background-color: #ffc107;
            color: black;
        }
        .event-info .status.completed {
            background-color: #dc3545;
        }
        .event-info .details-link {
            text-decoration: none;
            color: #007bff;
            font-size: 16px;
            font-weight: bold;
            display: flex;
            align-items: center;
            margin-top: 10px;
            transition: color 0.3s;
        }
        .event-info .details-link i {
            margin-left: 8px;
        }
        .event-info .details-link:hover {
            color: #0056b3;
            text-decoration: underline;
        }
        .pagination {
            text-align: center;
            margin-top: 20px;
        }
        .pagination a, .pagination span {
            display: inline-block;
            padding: 10px 15px;
            margin: 0 5px;
            text-decoration: none;
            color: white;
            background-color: #007bff;
            border-radius: 5px;
        }
        .pagination a:hover {
            background-color: #0056b3;
        }
        .pagination .active {
            background-color: #0056b3;
            color: white;
            border: none;
        }
        @media (max-width: 600px) {
            .search-bar input, .filters select, .sort-options select {
                width: 100%;
                margin: 5px 0;
            }
            .search-bar button {
                width: 100%;
                margin-top: 10px;
            }
            .event-list li {
                flex-direction: column;
                align-items: flex-start;
            }
            .event-list img {
                margin-bottom: 10px;
                width: 100%;
                height: auto;
            }
            .event-info .details-link {
                margin-left: 0;
            }
        }
    </style>

<body>
    <div class="container">
        <h1 class="text-center">Event List</h1>

        <div class="row mb-3">
            <div class="col-md-4">
                <input type="text" id="search" class="form-control" placeholder="Search events by name...">
            </div>
            <div class="col-md-4">
                <select id="location" class="form-select">
                    <option value="">All Locations</option>
                    <option value="Location1">Location1</option>
                    <option value="Location2">Location2</option>
                    <!-- Add more locations as needed -->
                </select>
            </div>
            <div class="col-md-4">
                <select id="category" class="form-select">
                    <option value="">All Categories</option>
                    <option value="Category1">Category1</option>
                    <option value="Category2">Category2</option>
                    <!-- Add more categories as needed -->
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <select id="sort" class="form-select">
                    <option value="date">Date</option>
                    <option value="name">Name</option>
                    <option value="location">Location</option>
                </select>
            </div>
            <div class="col-md-8 text-end">
                <button id="search-button" class="btn btn-primary"><i class="fas fa-search"></i> Search</button>
            </div>
        </div>

        <div class="row">
            <?php
            // Include database connection
            include('db_connection.php'); // Adjust path as necessary

            // Check if connection was successful
            if (!isset($conn)) {
                echo '<div class="alert alert-danger">Database connection failed.</div>';
                exit();
            }


        

            // Fetch events
            $searchQuery = isset($_GET['q']) ? $_GET['q'] : '';
            $locationFilter = isset($_GET['location']) ? $_GET['location'] : '';
            $categoryFilter = isset($_GET['category']) ? $_GET['category'] : '';
            $sortOption = isset($_GET['sort']) ? $_GET['sort'] : 'date';
            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            $limit = 10;
            $offset = ($page - 1) * $limit;

            $sql = "SELECT * FROM events WHERE 1=1";
            if ($searchQuery) {
                $sql .= " AND event_name LIKE '%$searchQuery%'";
            }
            if ($locationFilter) {
                $sql .= " AND location = '$locationFilter'";
            }
            if ($categoryFilter) {
                $sql .= " AND category = '$categoryFilter'";
            }
            $sql .= " ORDER BY $sortOption LIMIT $limit OFFSET $offset";

            $result = $conn->query($sql);

            if ($result) {
                while ($event = $result->fetch_assoc()) {
                    echo '<div class="col-md-4 mb-3">';
                    echo '    <div class="event-item">';
                    if ($event['image']) {
                        echo '        <img src="' . $event['image'] . '" alt="' . htmlspecialchars($event['event_name']) . '">';
                    } else {
                        echo '        <img src="https://via.placeholder.com/350x200" alt="Default image">';
                    }
                    echo '        <div class="event-info">';
                    echo '            <h5>' . htmlspecialchars($event['event_name']) . '</h5>';
                    echo '            <p><i class="fas fa-calendar-alt"></i> <strong>Date:</strong> ' . htmlspecialchars($event['date']) . '</p>';
                    echo '            <p><i class="fas fa-clock"></i> <strong>Time:</strong> ' . htmlspecialchars($event['time']) . '</p>';
                    echo '            <p><i class="fas fa-map-marker-alt"></i> <strong>Location:</strong> ' . htmlspecialchars($event['location']) . '</p>';
                    echo '            <p><i class="fas fa-info-circle"></i> <strong>Status:</strong> <span class="event-status ' . htmlspecialchars($event['status']) . '">' . htmlspecialchars($event['status']) . '</span></p>';
                    echo '            <p>' . htmlspecialchars(substr($event['description'], 0, 100)) . '...</p>';
                    echo '            <a href="event_detail.php?id=' . $event['id'] . '" class="btn btn-info">View Details</a>';
                    echo '        </div>';
                    echo '    </div>';
                    echo '</div>';
                }
            } else {
                echo '<div class="alert alert-danger">Error fetching events: ' . $conn->error . '</div>';
            }

            // Pagination
            $resultTotal = $conn->query("SELECT COUNT(*) as total FROM events WHERE 1=1" . ($searchQuery ? " AND event_name LIKE '%$searchQuery%'" : "") . ($locationFilter ? " AND location = '$locationFilter'" : "") . ($categoryFilter ? " AND category = '$categoryFilter'" : ""));
            if ($resultTotal) {
                $totalEvents = $resultTotal->fetch_assoc()['total'];
                $totalPages = ceil($totalEvents / $limit);

                echo '<div class="col-12 text-center mt-4">';
                echo '    <nav aria-label="Page navigation">';
                echo '        <ul class="pagination">';
                if ($page > 1) {
                    echo '            <li class="page-item"><a class="page-link" href="?page=1&q=' . $searchQuery . '&location=' . $locationFilter . '&category=' . $categoryFilter . '&sort=' . $sortOption . '">&laquo; First</a></li>';
                    echo '            <li class="page-item"><a class="page-link" href="?page=' . ($page - 1) . '&q=' . $searchQuery . '&location=' . $locationFilter . '&category=' . $categoryFilter . '&sort=' . $sortOption . '">Previous</a></li>';
                }
                for ($i = 1; $i <= $totalPages; $i++) {
                    if ($i == $page) {
                        echo '            <li class="page-item active" aria-current="page"><span class="page-link">' . $i . '</span></li>';
                    } else {
                        echo '            <li class="page-item"><a class="page-link" href="?page=' . $i . '&q=' . $searchQuery . '&location=' . $locationFilter . '&category=' . $categoryFilter . '&sort=' . $sortOption . '">' . $i . '</a></li>';
                    }
                }
                if ($page < $totalPages) {
                    echo '            <li class="page-item"><a class="page-link" href="?page=' . ($page + 1) . '&q=' . $searchQuery . '&location=' . $locationFilter . '&category=' . $categoryFilter . '&sort=' . $sortOption . '">Next</a></li>';
                    echo '            <li class="page-item"><a class="page-link" href="?page=' . $totalPages . '&q=' . $searchQuery . '&location=' . $locationFilter . '&category=' . $categoryFilter . '&sort=' . $sortOption . '">Last &raquo;</a></li>';
                }
                echo '        </ul>';
                echo '    </nav>';
                echo '</div>';
            }
            ?>
        </div>

        <div class="text-center mt-4">
            <a href="event_form.php" class="btn btn-success"><i class="fas fa-plus"></i> Create New Event</a>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('search-button').addEventListener('click', function() {
            const searchQuery = document.getElementById('search').value;
            const locationFilter = document.getElementById('location').value;
            const categoryFilter = document.getElementById('category').value;
            const sortOption = document.getElementById('sort').value;
            const queryString = `?q=${searchQuery}&location=${locationFilter}&category=${categoryFilter}&sort=${sortOption}`;
            window.location.href = queryString;
        });
    </script>
</body>
</html>
