
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
                <div class="col-lg-3 col-sm-6 mb-3">
                <a href="event_list.php" class="text-decoration-none">
                        <div class="card bg-light border-light rounded shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-bullhorn"></i> Events</h5>
                                <p class="card-text">upcoming Events <b>8</b></p>
                            </div>
                        </div>
                      </a>
                    </div>
                

               

                        <!-- Creative and Talent Showcasing Section -->
            <div class="row mb-4">
                <div class="col-lg-12">
                    <h3 class="mb-4">Creative and Talent Showcasing</h3>
                    <div class="row">
                        <!-- Music Performance -->
                        <div class="col-md-4 mb-4">
                            <a href="music_performance.php" class="text-decoration-none">
                                <div class="card bg-light border-light rounded shadow-sm h-100">
                                    <img src="images/talent1.jpg" class="card-img-top" alt="Music Performance">
                                    <div class="card-body">
                                        <h5 class="card-title text-primary">Music Performance</h5>
                                        <p class="card-text text-dark">Showcasing the best music talents from across the region.</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Art Exhibition -->
                        <div class="col-md-4 mb-4">
                            <a href="art_exhibition.php" class="text-decoration-none">
                                <div class="card bg-light border-light rounded shadow-sm h-100">
                                    <img src="images/talent2.jpg" class="card-img-top" alt="Art Exhibition">
                                    <div class="card-body">
                                        <h5 class="card-title text-primary">Art Exhibition</h5>
                                        <p class="card-text text-dark">Display of creative visual arts by young artists.</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Tech Innovation -->
                        <div class="col-md-4 mb-4">
                            <a href="tech_innovation.php" class="text-decoration-none">
                                <div class="card bg-light border-light rounded shadow-sm h-100">
                                    <img src="images/talent3.jpg" class="card-img-top" alt="Tech Innovation">
                                    <div class="card-body">
                                        <h5 class="card-title text-primary">Tech Innovation</h5>
                                        <p class="card-text text-dark">Young tech enthusiasts showcasing their innovative projects.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Networking and Community Section -->
            <div class="row mb-4">
                <div class="col-lg-12">
                    <h3 class="mb-4">Networking and Community</h3>
                    <a href="youth_groups.php" class="text-decoration-none">
                        <div class="card bg-light border-light rounded shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title text-primary"><i class="fas fa-network-wired"></i> Join Youth Groups</h5>
                                <p class="card-text text-dark">Be part of a growing network of young professionals, artists, and entrepreneurs. Connect, collaborate, and grow together.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Entrepreneurship Section -->
            <div class="row mb-4">
                <div class="col-lg-6">
                    <h3 class="mb-4">Entrepreneurship & Startups</h3>
                    <a href="entrepreneurship.php" class="text-decoration-none">
                        <div class="card bg-light border-light rounded shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title text-primary"><i class="fas fa-lightbulb"></i> Start Your Business</h5>
                                <p class="card-text text-dark">Explore entrepreneurial programs, access to mentorship, and startup opportunities.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Volunteer Opportunities Section -->
                <div class="col-lg-6">
                    <h3 class="mb-4">Volunteer Opportunities</h3>
                    <a href="volunteer.php" class="text-decoration-none">
                        <div class="card bg-light border-light rounded shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title text-primary"><i class="fas fa-hand-holding-heart"></i> Get Involved</h5>
                                <p class="card-text text-dark">Volunteer for social good causes and community projects that make a difference.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Funding and Grants Section -->
            <div class="row mb-4">
                <div class="col-lg-12">
                    <h3 class="mb-4">Funding & Grants</h3>
                    <a href="Apply_for_Grants.php" class="text-decoration-none">
                        <div class="card bg-light border-light rounded shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title text-primary"><i class="fas fa-money-bill-wave"></i> Apply for Grants</h5>
                                <p class="card-text text-dark">Access financial resources to kickstart your projects and initiatives.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
            </div>
            </main>
      
                <!-- Footer Section -->
                <footer class="footer bg-dark text-white p-4 mt-4">
                    <div class="row">
                        <div class="col-md-4">
                            <h5>About Us</h5>
                            <p>Our mission is to empower the youth with skills, resources, and opportunities to build a brighter future.</p>
                        </div>
                        <div class="col-md-4">
                            <h5>Quick Links</h5>
                            <ul class="list-unstyled">
                                <li><a href="dashboard.php" class="text-white text-decoration-none">Dashboard</a></li>
                                <li><a href="programs.php" class="text-white text-decoration-none">Programs</a></li>
                                <li><a href="contact.php" class="text-white text-decoration-none">Contact Us</a></li>
                                <li><a href="help.php" class="text-white text-decoration-none">Help</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h5>Contact Us</h5>
                            <p>Email: info@youthplatform.com</p>
                            <p>Phone: +254 700 123 456</p>
                            <p>Follow us: 
                                <a href="#" class="text-decoration-none"><i class="fab fa-facebook"></i></a> 
                                <a href="#" class="text-decoration-none"><i class="fab fa-twitter"></i></a> 
                                <a href="#" class="text-decoration-none"><i class="fab fa-instagram"></i></a>
                            </p>
                        </div>
                    </div>
                </footer>
            </div><!-- /.content -->
        </div><!-- /.container-fluid -->

</body>
