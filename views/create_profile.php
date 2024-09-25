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

                <!-- Add New Youth Profile Form -->
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-plus-circle me-1"></i>
                        Add Youth Profile
                    </div>
                    <div class="card-body">
                        <form action="../helpers/profile_details.php" method="POST">
                            <div class="form-row">
                                <!-- First Name -->
                                <div class="form-group col-md-6">
                                    <label for="firstName">First Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="" id="firstName" name="first_name" placeholder="First Name" required>
                                </div>

                                <!-- Last Name -->
                                <div class="form-group col-md-6">
                                    <label for="lastName">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Last Name" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <!-- Date of Birth -->
                                <div class="form-group col-md-6">
                                    <label for="dob">Date of Birth <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="dob" name="date_of_birth" required>
                                </div>

                                <!-- Gender -->
                                <div class="form-group col-md-6">
                                    <label for="gender">Gender</label>
                                    <select class="form-control" id="gender" name="gender">
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <!-- SubCounty -->
                                <div class="form-group col-md-6">
                                    <label for="subcounty">SubCounty <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="subcounty" name="subcounty" placeholder="SubCounty" required>
                                </div>

                                <!-- Ward -->
                                <div class="form-group col-md-6">
                                    <label for="ward">Ward <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="ward" name="ward" placeholder="Ward" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <!-- Occupation -->
                                <div class="form-group col-md-6">
                                    <label for="occupation">Occupation <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Occupation" required>
                                </div>

                                <!-- Sector -->
                                <div class="form-group col-md-6">
                                    <label for="sector">Sector <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="sector" name="sector" placeholder="Sector" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <!-- Education Level -->
                                <div class="form-group col-md-6">
                                    <label for="educationLevel">Education Level <span class="text-danger">*</span></label>
                                    <select class="form-control" id="educationLevel" name="education_level" required>
                                        <option value="" disabled selected>Select Education Level</option>
                                        <option value="primary">Primary</option>
                                        <option value="secondary">Secondary</option>
                                        <option value="diploma">Diploma</option>
                                        <option value="undergraduate">Undergraduate</option>
                                        <option value="postgraduate">Postgraduate</option>
                                        <option value="doctorate">Doctorate</option>
                                    </select>
                                </div>

                                <!-- Marital Status -->
                                <div class="form-group col-md-6">
                                    <label for="maritalStatus">Marital Status <span class="text-danger">*</span></label>
                                    <select class="form-control" id="maritalStatus" name="marital_status">
                                        <option value="">Select Marital Status</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Widowed">Widowed</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Disability Section -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="disabilityStatus">Disability Status <span class="text-danger">*</span></label>
                                    <select class="form-control" id="disabilityStatus" name="disability_status">
                                        <option value="">Select Disability Status</option>
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row" id="disabilityExplanation" style="display: none;">
                                <div class="form-group col-md-12">
                                    <label for="disabilityExplanationText">If Yes, Explain</label>
                                    <textarea class="form-control" id="disabilityExplanationText" name="disability_explanation" placeholder="Explain your disability"></textarea>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" name="Update_Profile" class="btn btn-outline-success"><i class="fas fa-save"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <!-- Custom JavaScript for form behavior -->
    <script>
        document.getElementById('disabilityStatus').addEventListener('change', function() {
            var explanationField = document.getElementById('disabilityExplanation');
            if (this.value === '1') {
                explanationField.style.display = 'block';
            } else {
                explanationField.style.display = 'none';
            }
        });
    </script>
</body>
