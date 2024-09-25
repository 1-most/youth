<!-- Sidebar -->
<nav class="navbar navbar-vertical navbar-expand-xl navbar-light navbar-glass">
    <a class="navbar-brand text-left" href="../index-2.html">
        <!-- Logo and Text Section -->
        <div class="d-flex flex-column align-items-center py-2">
            <img src="../public/img/merged_logos.png" width="60%" alt="Ligi Mashinani Logo" class="logo-img">
            <div class="info">
                <h5 class="text-center text-dark">
                    <b>
                        GoMC<br>
                        Youth Portal
                    </b>
                </h5>
            </div>
        </div>
    </a>

    <div class="navbar-collapse collapse show" id="navbarVerticalCollapse">
        <ul class="navbar-nav flex-column">
            <!-- Dashboard Home -->
            <li class="nav-item">
                <a class="nav-link dropdown-indicator d-flex align-items-center" href="#home" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="home">
                    <span class="nav-link-icon mr-2">
                        <i class="fas fa-tachometer-alt"></i>
                    </span>
                    <span>Dashboard Home</span>
                </a>
                <ul class="nav collapse" id="home" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item">
                        <a class="nav-link" href="../views/dashboard.php">
                            <i class="fas fa-home"></i>
                            <span class="d-block">Dashboard Home</span>
                        </a>
                    </li>  

                    <li class="nav-item">
            <a class="nav-link" href="talent_showcase.php">
                <i class="fas fa-paint-brush"></i> Creative and Talent Showcasing
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://ivas.makueni.go.ke/views/login">
                <i class="fas fa-briefcase"></i> Job and Internship Portals
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="youth_groups.php">
                <i class="fas fa-users"></i> Networking & Community
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="resources.php">
                <i class="fas fa-book"></i> Educational Resources
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="mental_health.php">
                <i class="fas fa-heart"></i> Mental Health & Well-being
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="advocacy.php">
                <i class="fas fa-bullhorn"></i> Advocacy Hub
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="sports.php">
                <i class="fas fa-futbol"></i> Sports & Entertainment
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tech_skills.php">
                <i class="fas fa-laptop-code"></i> Tech & Digital Skills
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="volunteer.php">
                <i class="fas fa-hands-helping"></i> Volunteer Opportunities
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="entrepreneurship.php">
                <i class="fas fa-lightbulb"></i> Entrepreneurship & Startups
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="funding.php">
                <i class="fas fa-dollar-sign"></i> Funding & Grants
            </a>
        </li>
                            
                </ul>
            </li>

            <!-- Profile Actions -->
            <li class="nav-item">
                <a class="nav-link dropdown-indicator d-flex align-items-center" href="#profileActions" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="profileActions">
                    <span class="nav-link-icon mr-2">
                        <i class="fas fa-user"></i>
                    </span>
                    <span>Profile Actions</span>
                </a>
                <ul class="nav collapse" id="profileActions" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" href="../views/create_profile.php">
                            <span class="nav-link-icon mr-2">
                                <i class="fas fa-user-plus"></i>
                            </span>
                            <span class="d-block">Create Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" href="../views/update_profile.php">
                            <span class="nav-link-icon mr-2">
                                <i class="fas fa-user-edit"></i>
                            </span>
                            <span class="d-block">Update Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" href="../views/view_profile.php">
                            <span class="nav-link-icon mr-2">
                                <i class="fas fa-user"></i>
                            </span>
                            <span class="d-block">View Profile</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Logout -->
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center" href="../views/logout.php">
                    <span class="nav-link-icon mr-2">
                        <i class="fas fa-sign-out-alt"></i>
                    </span>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- End Sidebar -->
