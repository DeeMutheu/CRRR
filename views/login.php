<?php
require_once('../partials/head.php');
?>

<body>
    <div class="page-wraper">

        <!-- Preloader -->
        <div id="preloader">
            <div class="spinner"></div>
        </div>
        <!-- Preloader end-->

        <!-- Welcome Start -->
        <div class="content-body">
            <div class="container vh-100">
                <div class="welcome-area">
                    <div class="welcome-logo">
                        <img src="../assets/images/welcome/favicon.png" width="10%" alt="">
                        <div class="get-started">
                            <h1 class="dz-title">Collaborative Road Rescue Ready Application</h1>
                            <br>
                            <p align="justify">We're thrilled to have you on board for this exciting journey of collaboration and preparedness.
                                Our mission is to create a safer and more connected road experience for everyone.
                            </p>
                        </div>

                        <div class="join-area">
                            <div class="started">
                                <h2>Login</h2>
                                <hr>
                            </div>
                            <div class="account-area">
                                <form class="">
                                    <div class="input-group">
                                        <input type="text" placeholder="Email address" name="login_email" class="form-control">
                                    </div>
                                    <div class="input-group">
                                        <input type="password" placeholder="Password" name="login_password" id="dz-password" class="form-control be-0">
                                        <span class="input-group-text show-pass">
                                            <i class="fa fa-eye-slash"></i>
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </div>
                                    <a href="reset_password" class="btn-link d-block text-center">Forgot your password?</a>
                                    <div class="input-group">
                                        <button type="submit" name="login" class="btn mt-2 btn-primary w-100 btn-rounded">Login</button>
                                    </div>
                                    <div class="input-group">
                                        <p class="text-center mb-0">Don't have an account? <a href="register">Sign Up</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome End -->

    </div>
    <!--**********************************
    Scripts
    ***********************************-->
    <?php require_once('../partials/scripts.php'); ?>
</body>


</html>