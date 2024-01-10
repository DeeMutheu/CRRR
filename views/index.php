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
                        <br><br>
                        <div class="join-area">
                            <div class="started">
                                <h2>Continue as</h2>
                            </div>
                            <a href="login" class="card h-auto">
                                <div class="d-flex align-items-center">
                                    <img src="../assets/images/welcome/road_users.png" width="10%" alt="">
                                    <div class="ms-4">
                                        <h5>Road Users</h5>
                                    </div>
                                </div>
                            </a>
                            <a href="login" class="card h-auto">
                                <div class="d-flex align-items-center">
                                    <img src="../assets/images/welcome/emergency.png" width="10%" alt="">
                                    <div class="ms-4">
                                        <h5>Emergency Services</h5>
                                    </div>
                                </div>
                            </a>
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