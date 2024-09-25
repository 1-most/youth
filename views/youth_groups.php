
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
<div class="container py-5">
    <div class="row text-center mb-5">
        <div class="col-lg-12">
            <h2 class="display-4 font-weight-bold">Join or Create a Youth Group</h2>
            <p class="text-muted">Connect with peers and build a thriving community through youth groups.</p>
        </div>
    </div>

    <div class="row">
      
         
        <div class="col-lg-6 mb-4">
            <div class="card border-0 shadow-lg h-100">
                <div class="card-body p-5 text-center bg-info text-white rounded">
                    <h4 class="card-title"><i class="fas fa-users"></i> Join a Group</h4>
                    <p class="card-text mt-3">Join an existing group to connect with young professionals, entrepreneurs, or artists.</p>

                    <!-- Join Group Form -->
                    <form action="join_group.php" method="POST" class="mt-4">
                        <div class="form-group">
                            <label for="groupSelect" class="form-label">Choose a Group</label>
                            <select class="form-control form-control-lg" id="groupSelect" name="group_id" required>
                                <option value="">-- Select Group --</option>
                                <option value="1">Music Enthusiasts</option>
                                <option value="2">Young Entrepreneurs</option>
                                <option value="3">Tech Innovators</option>
                                <option value="4">Visual Artists Network</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-light btn-lg btn-block mt-3">Join Now</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Create New Group Section -->
        <div class="col-lg-6 mb-4">
            <div class="card border-0 shadow-lg h-100">
                <div class="card-body p-5 text-center bg-success text-white rounded">
                    <h4 class="card-title"><i class="fas fa-plus-circle"></i> Create a Group</h4>
                    <p class="card-text mt-3">Start your own group and lead a community of like-minded individuals.</p>

                    <!-- Create Group Form -->
                    <form action="create_group.php" method="POST" class="mt-4">
                        <div class="form-group">
                            <label for="groupName" class="form-label">Group Name</label>
                            <input type="text" class="form-control form-control-lg" id="groupName" name="group_name" placeholder="Enter Group Name" required>
                        </div>
                        <div class="form-group">
                            <label for="groupDescription" class="form-label">Group Description</label>
                            <textarea class="form-control form-control-lg" id="groupDescription" name="group_description" rows="3" placeholder="Describe the group" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-light btn-lg btn-block mt-3">Create Group</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
