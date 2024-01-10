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
                        <svg class="text-primary" width="100" height="100" viewBox="0 0 119 119" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="119" height="119" rx="59.5" fill="#40189D" />
                            <mask id="mask0_9_4" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="119" height="119">
                                <rect width="119" height="119" rx="59.5" fill="#40189D" />
                            </mask>
                            <g mask="url(#mask0_9_4)">
                                <path d="M30.9784 55.4984H55.1098C55.1098 55.7567 54.9814 56.4024 54.7247 57.4356C54.5535 58.3827 54.3396 59.545 54.0829 60.9226C53.8262 62.3002 53.5695 63.807 53.3127 65.4429C53.1416 67.0787 53.056 68.5855 53.056 69.9631C53.056 70.8241 53.1416 71.7281 53.3127 72.6752C53.4839 73.6223 53.7834 74.5263 54.2113 75.3873C54.6391 76.1622 55.2381 76.851 56.0083 77.4537C56.864 77.9703 57.8908 78.2286 59.0889 78.2286C61.3137 78.2286 63.068 77.3246 64.3515 75.5165C65.7207 73.6223 66.9187 70.2214 67.9456 65.3137L80.9097 3.83871H108.763L96.1843 63.1182C95.0719 68.198 93.1465 72.3308 90.4082 75.5165C87.6699 78.6161 84.5038 81.0268 80.9097 82.7488C77.4013 84.4708 73.6361 85.5901 69.6142 86.1067C65.5923 86.7094 61.7416 87.0108 58.062 87.0108C53.7834 87.0108 50.1038 86.7094 47.0232 86.1067C43.9426 85.5901 41.2043 84.8152 38.8083 83.782C36.4978 82.7488 34.4013 81.5004 32.5187 80.0367C30.6361 78.4869 28.7536 76.808 26.871 74.9999L30.9784 55.4984Z" fill="white" />
                            </g>
                        </svg>
                        <div class="get-started">
                            <h1 class="dz-title">Collaborative Road Rescue Ready</h1>
                            <p>Mobile Application</p>
                        </div>
                    </div>
                    <div class="join-area">
                        <div class="started">
                            <h2>Continue as</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        </div>
                        <a href="login" class="card h-auto">
                            <div class="d-flex align-items-center">
                                <img src="../assets/images/welcome/road_users.png" width="10%" alt="">
                                <div class="ms-4">
                                    <h5>Road Users</h5>
                                    <p>Finding a job here never been easier than before</p>
                                </div>
                            </div>
                        </a>
                        <a href="login" class="card h-auto">
                            <div class="d-flex align-items-center">
                                <img src="../assets/images/welcome/emergency.png" width="10%" alt="">
                                <div class="ms-4">
                                    <h5>Emergency Services</h5>
                                    <p>Let’s recruit your great candidate faster here</p>
                                </div>
                            </div>
                        </a>
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