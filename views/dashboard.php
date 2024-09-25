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

                <!-- Dashboard Greeting and Navigation -->
                <div class="row mb-2 p-3">
                    <div class="col-sm-6 d-flex align-items-center">
                        <div>
                            <small class="text-dark">Welcome to the Department of Youth, Gender, Sports AND Social Services</small>
                        </div>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right bg-transparent p-0 m-0">
                            <li class="breadcrumb-item"><a href="dashboard.php" class="text-decoration-none text-secondary"><i class="fas fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active text-secondary">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div>

                <!-- Dashboard Overview Cards -->
                <div class="row">
                    <!-- Registered Youth Card -->
                    <div class="col-lg-3 col-sm-6 mb-3">
                        <div class="card bg-light border-light rounded shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-user-friends"></i> Registered Youth</h5>
                                <p class="card-text">Total number of registered youth: <b>1,245</b></p>
                            </div>
                        </div>
                    </div>

                    <!-- Programs Available Card -->
                    <div class="col-lg-3 col-sm-6 mb-3">
                        <div class="card bg-light border-light rounded shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-calendar-check"></i> Programs Available</h5>
                                <p class="card-text">Programs currently available for youth: <b>12</b></p>
                            </div>
                        </div>
                    </div>

                    <!-- Youth Challenges Card -->
                    <div class="col-lg-3 col-sm-6 mb-3">
                        <div class="card bg-light border-light rounded shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-exclamation-circle"></i> Youth Challenges</h5>
                                <p class="card-text">Current challenges faced by youth: <b>34</b></p>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Updates Card -->
                    <div class="col-lg-3 col-sm-6 mb-3">
                        <div class="card bg-light border-light rounded shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-bullhorn"></i> Recent Updates</h5>
                                <p class="card-text">Latest updates and announcements: <b>8</b></p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Additional Information Section -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info" role="alert">
                            <h4 class="alert-heading">Note:</h4>
                            <p>Make sure to keep your profile updated with the latest information. Check the available programs and updates regularly to stay informed about new opportunities and developments.</p>
                        </div>
                    </div>
                </div>
            </div><!-- /.content -->
        </div><!-- /.container-fluid -->
    </main>
</body>
