<?php
session_start();
require_once('../config/config.php');
require_once('../helpers/auth.php');
require_once('../partials/head.php');
require_once('../partials/scripts.php');
?>

<body>
    <main class="main" id="top">
        <div class="container">
            <div class="row flex-center min-vh-100 py-6">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <?php include('../partials/auth_header.php'); ?>
                    <div class="card">
                        <div class="card-body p-5">
                            <div class="row text-left justify-content-between">
                                <div class="col-auto">
                                    <h5>Log in</h5>
                                </div>
                                <div class="col-auto">
                                    <p class="fs--1 text-600">or <a href="register.php">Create an account</a></p>
                                </div>
                            </div>
                            <form method="post">
                                <div class="form-group">
                                    <input class="form-control" type="email" required name="user_email" placeholder="Email address" required />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" required name="user_password" placeholder="Password" required />
                                </div>
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                        <a class="fs--1" href="forget_password.php">Forget Password?</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block mt-3" type="submit" name="submit">Log in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
