<?php
session_start();
require_once('../helpers/auth.php');
require_once('../partials/head.php');
require_once('../partials/scripts.php');
require_once('../config/config.php'); // Include the database connection
?>

<body>
    <main class="main" id="top">

        <div class="container">
            <div class="row flex-center min-vh-100 py-6">
            <div class="col-sm-12 col-md-8 col-lg-6 col-xl-5">
                    <?php include('../partials/auth_header.php'); ?>
                    <div class="card">
                        <div class="card-body p-5">
                            <div class="row text-left">
                                <div class="col" style="min-width: 7rem">
                                    <h5 id="modalLabel" class="text-center">Register</h5>

                                </div>
                            </div>
                            <form role="form" method="POST" action="register.php" onsubmit="return validateForm()">
                                <div class="row">
                                    <div class="form-group col-sm-12 col-lg-12 col-xl-12">
                                        <label class="form-control-label">Full names <span class="text-danger">*</span></label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" required name="user_name" class="form-control" pattern="(^[a-zA-Z ]+$)" title="Your names must not contain digits">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-lg-6 col-xl-6">
                                        <label class="form-control-label">Email address <span class="text-danger">*</span></label>
                                        <div class="input-group input-group-merge">
                                            <input type="email" required name="user_email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-lg-6 col-xl-6">
                                        <label class="form-control-label">Phone number <span class="text-danger">*</span></label>
                                        <div class="input-group input-group-merge">
                                            <input type="number" required name="user_phone_number" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group mb-4 col-sm-12 col-lg-6 col-xl-6">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <label class="form-control-label">Password <span class="text-danger">*</span></label>
                                            </div>
                                        </div>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" required name="user_password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4 col-sm-12 col-lg-6 col-xl-6">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <label class="form-control-label">Confirm password <span class="text-danger">*</span></label>
                                            </div>
                                        </div>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="confirm_password" required name="confirm_password" class="form-control">
                                        </div>
                                    </div>
                                    <div id="message">
                                        <label class="text-center font-weight-bold">Password must contain the following:</label>
                                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                        <p id="capital" class="invalid">An <b>uppercase</b> letter</p>
                                        <p id="number" class="invalid">A <b>number</b></p>
                                        <p id="symbol" class="invalid">A <b>symbol</b></p>
                                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                                    </div>
                                    <div id="confirm_message">
                                        <p id="match" class="invalid">Passwords <b> match</b></p>
                                    </div>
                                    <div class="form-group col-sm-12 col-lg-12 col-xl-12">
                                        <div class="form-group form-check">
                                            <input type="checkbox" required class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">
                                                By clicking Sign up you acknowledge that you have read and agreed to the
                                                <a target="_blank" href="https://makueni.go.ke/acts-and-policies/"> Privacy Policy </a>
                                                and Government of Makueni County <a target="_blank" href="https://makueni.go.ke/acts-and-policies/"> Terms of Use </a>.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 text-center">
                                    <button type="submit" name="Sign_In" class="btn btn-sm btn-primary btn-icon rounded-pill">
                                        <span class="btn-inner--text">Sign up</span>
                                        <span class="btn-inner--icon"><i class="far fa-user-plus"></i></span>
                                    </button>
                                </div>
                            </form>
                            <div class="card-footer px-md-5"><small>Already have account ?</small>
                                <a href="login" class="small font-weight-bold">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <script src="../public/js/register.js"></script>
</body>