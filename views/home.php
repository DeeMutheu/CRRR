<?php
/*
 * Created on Jan 9th Jan 2023
 *
 * Devlan Solutions LTD - www.devlan.co.ke 
 *
 * hello@devlan.co.ke
 *
 *
 * The Devlan Solutions LTD End User License Agreement
 *
 * Copyright (c) 2022 Devlan Solutions LTD
 *
 * 1. GRANT OF LICENSE
 * Devlan Solutions LTD hereby grants to you (an individual) the revocable, personal, non-exclusive, and nontransferable right to
 * install and activate this system on two separated computers solely for your personal and non-commercial use,
 * unless you have purchased a commercial license from Devlan Solutions LTD. Sharing this Software with other individuals, 
 * or allowing other individuals to view the contents of this Software, is in violation of this license.
 * You may not make the Software available on a network, or in any way provide the Software to multiple users
 * unless you have first purchased at least a multi-user license from Devlan Solutions LTD.
 *
 * 2. COPYRIGHT 
 * The Software is owned by Devlan Solutions LTD and protected by copyright law and international copyright treaties. 
 * You may not remove or conceal any proprietary notices, labels or marks from the Software.
 *
 * 3. RESTRICTIONS ON USE
 * You may not, and you may not permit others to
 * (a) reverse engineer, decompile, decode, decrypt, disassemble, or in any way derive source code from, the Software;
 * (b) modify, distribute, or create derivative works of the Software;
 * (c) copy (other than one back-up copy), distribute, publicly display, transmit, sell, rent, lease or 
 * otherwise exploit the Software.  
 *
 * 4. TERM
 * This License is effective until terminated. 
 * You may terminate it at any time by destroying the Software, together with all copies thereof.
 * This License will also terminate if you fail to comply with any term or condition of this Agreement.
 * Upon such termination, you agree to destroy the Software, together with all copies thereof.
 *
 * 5. NO OTHER WARRANTIES. 
 * DEVLAN SOLUTIONS LTD DOES NOT WARRANT THAT THE SOFTWARE IS ERROR FREE. 
 * DEVLAN SOLUTIONS LTD SOFTWARE DISCLAIMS ALL OTHER WARRANTIES WITH RESPECT TO THE SOFTWARE, 
 * EITHER EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO IMPLIED WARRANTIES OF MERCHANTABILITY, 
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT OF THIRD PARTY RIGHTS. 
 * SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF IMPLIED WARRANTIES OR LIMITATIONS
 * ON HOW LONG AN IMPLIED WARRANTY MAY LAST, OR THE EXCLUSION OR LIMITATION OF 
 * INCIDENTAL OR CONSEQUENTIAL DAMAGES,
 * SO THE ABOVE LIMITATIONS OR EXCLUSIONS MAY NOT APPLY TO YOU. 
 * THIS WARRANTY GIVES YOU SPECIFIC LEGAL RIGHTS AND YOU MAY ALSO 
 * HAVE OTHER RIGHTS WHICH VARY FROM JURISDICTION TO JURISDICTION.
 *
 * 6. SEVERABILITY
 * In the event of invalidity of any provision of this license, the parties agree that such invalidity shall not
 * affect the validity of the remaining portions of this license.
 *
 * 7. NO LIABILITY FOR CONSEQUENTIAL DAMAGES IN NO EVENT SHALL DEVLAN SOLUTIONS LTD  OR ITS SUPPLIERS BE LIABLE TO YOU FOR ANY
 * CONSEQUENTIAL, SPECIAL, INCIDENTAL OR INDIRECT DAMAGES OF ANY KIND ARISING OUT OF THE DELIVERY, PERFORMANCE OR 
 * USE OF THE SOFTWARE, EVEN IF DEVLAN HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES
 * IN NO EVENT WILL DEVLAN  LIABILITY FOR ANY CLAIM, WHETHER IN CONTRACT 
 * TORT OR ANY OTHER THEORY OF LIABILITY, EXCEED THE LICENSE FEE PAID BY YOU, IF ANY.
 */
session_start();
require_once('../config/config.php');
require_once('../config/checklogin.php');
require_once('../functions/analytics.php');
require_once('../partials/head.php');
?>


<body>
    <div class="page-wraper">

        <!-- Header -->
        <header class="header transparent">
            <div class="main-bar">
                <div class="container">
                    <div class="header-content">
                        <div class="left-content">
                            <a href="javascript:void(0);" class="menu-toggler">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16.0755 2H19.4615C20.8637 2 22 3.14585 22 4.55996V7.97452C22 9.38864 20.8637 10.5345 19.4615 10.5345H16.0755C14.6732 10.5345 13.537 9.38864 13.537 7.97452V4.55996C13.537 3.14585 14.6732 2 16.0755 2Z" fill="#a19fa8" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="#a19fa8" />
                                </svg>
                            </a>
                        </div>
                        <div class="mid-content">
                        </div>
                        <div class="right-content">
                            <a href="javascript:void(0);" class="theme-btn">
                                <svg class="dark" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                </svg>
                                <svg class="light" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="5"></circle>
                                    <line x1="12" y1="1" x2="12" y2="3"></line>
                                    <line x1="12" y1="21" x2="12" y2="23"></line>
                                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                    <line x1="1" y1="12" x2="3" y2="12"></line>
                                    <line x1="21" y1="12" x2="23" y2="12"></line>
                                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header> <!-- Header End -->

        <!-- Preloader -->
        <div id="preloader">
            <div class="spinner"></div>
        </div>
        <!-- Preloader end-->

        <!-- Sidebar -->
        <?php require_once('../partials/sidebar.php'); ?>
        <!-- Sidebar End -->

        <!-- Banner -->
        <?php
        if ($_SESSION['login_rank'] == 'Admin' || $_SESSION['login_rank'] == 'Road User') {
            /* Get This Part With Logged In User Session */
            $users_sql = mysqli_query(
                $mysqli,
                "SELECT * FROM road_users WHERE user_login_id = '{$_SESSION['login_id']}'"
            );
            if (mysqli_num_rows($users_sql) > 0) {
                while ($user = mysqli_fetch_array($users_sql)) {
        ?>
                    <div class="banner-wrapper author-notification">
                        <div class="container inner-wrapper">
                            <div class="dz-info">
                                <span><?php echo $greeting; ?></span>
                                <h2 class="name mb-0"><?php echo $user['user_name']; ?>!</h2>
                            </div>
                            <div class="dz-media media-45 rounded-circle">
                                <a href="profile"><img src="../assets/images/user.png" class="rounded-circle" alt="author-image"></a>
                            </div>
                        </div>
                    </div>
                <?php }
            }
        } else {
            /* Get This Part With Logged In User Session */
            $users_sql = mysqli_query(
                $mysqli,
                "SELECT * FROM response_services WHERE response_service_login_id = '{$_SESSION['login_id']}'"
            );
            if (mysqli_num_rows($users_sql) > 0) {
                while ($user = mysqli_fetch_array($users_sql)) {
                ?>
                    <div class="banner-wrapper author-notification">
                        <div class="container inner-wrapper">
                            <div class="dz-info">
                                <span><?php echo $greeting; ?></span>
                                <h2 class="name mb-0"><?php echo $user['response_service_contact_person_name']; ?>!</h2>
                            </div>
                            <div class="dz-media media-45 rounded-circle">
                                <a href="profile"><img src="../assets/images/user.png" class="rounded-circle" alt="author-image"></a>
                            </div>
                        </div>
                    </div>
        <?php
                }
            }
        }
        ?>
        <!-- Banner End -->

        <!-- Page Content -->
        <div class="page-content">

            <div class="content-inner pt-0">
                <div class="container fb">
                    <!-- Search -->
                    <form class="m-b30">
                        <div class="input-group">
                            <span class="input-group-text">
                                <a href="javascript:void(0);" class="search-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M20.5605 18.4395L16.7528 14.6318C17.5395 13.446 18 12.0262 18 10.5C18 6.3645 14.6355 3 10.5 3C6.3645 3 3 6.3645 3 10.5C3 14.6355 6.3645 18 10.5 18C12.0262 18 13.446 17.5395 14.6318 16.7528L18.4395 20.5605C19.0245 21.1462 19.9755 21.1462 20.5605 20.5605C21.1462 19.9748 21.1462 19.0252 20.5605 18.4395ZM5.25 10.5C5.25 7.605 7.605 5.25 10.5 5.25C13.395 5.25 15.75 7.605 15.75 10.5C15.75 13.395 13.395 15.75 10.5 15.75C7.605 15.75 5.25 13.395 5.25 10.5Z" fill="#B9B9B9" />
                                    </svg>
                                </a>
                            </span>
                            <input type="text" placeholder="Search incidents here..." id="search" onkeyup="FilterFunction()" class="form-control ps-0 bs-0">
                        </div>
                    </form>

                    <!-- Dashboard Area -->
                    <div class="dashboard-area">
                        <!-- Features -->
                        <?php if ($_SESSION['login_rank'] == 'Admin') { ?>
                            <div class="features-box">
                                <div class="row m-b20 g-3">
                                    <div class="col">
                                        <div class="card card-bx card-content bg-secondary">
                                            <div class="card-body">
                                                <div class="card-info">
                                                    <h4 class="title"><?php echo $accepted_incidents; ?></h4>
                                                    <p>Accepted Incidents</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card card-bx card-content bg-secondary">
                                            <div class="card-body">
                                                <div class="card-info">
                                                    <h4 class="title"><?php echo $declined_incidents; ?></h4>
                                                    <p>Declined Incidents</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-b20 g-3">
                                    <div class="col">
                                        <div class="card card-bx card-content bg-secondary">
                                            <div class="card-body">
                                                <div class="card-info">
                                                    <h4 class="title"><?php echo $users; ?></h4>
                                                    <p>Road users</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card card-bx card-content bg-secondary">
                                            <div class="card-body">
                                                <div class="card-info">
                                                    <h4 class="title"><?php echo $response_services; ?></h4>
                                                    <p>Response Services</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- Features End -->


                        <!-- Recent Jobs -->
                        <div class="title-bar">
                            <h5 class="dz-title">Recently Reported Incidents</h5>
                            <a class="btn btn-sm text-primary" href="incidents">More</a>
                        </div>
                        <div class="list item-list recent-jobs-list">
                            <ul>
                                <?php
                                $incidents_sql = mysqli_query(
                                    $mysqli,
                                    "SELECT * FROM road_incidents ri
                                    INNER JOIN locations l ON l.location_id = ri.road_incident_location_id
                                    LIMIT  5"
                                );
                                if (mysqli_num_rows($incidents_sql) > 0) {
                                    while ($incidents = mysqli_fetch_array($incidents_sql)) {
                                ?>
                                        <li class="filter">
                                            <div class="item-content">
                                                <a href="incident?view=<?php echo $incidents['road_incident_id']; ?>" class="item-media"><img src="../assets/images/welcome/incident.png" width="80" alt="logo"></a>
                                                <div class="item-inner">
                                                    <div class="item-title-row">
                                                        <div class="item-subtitle text-danger"><?php echo date('d M Y g:ia', strtotime($incidents['road_incident_date_reported'])); ?></div>
                                                        <h6 class="item-title">
                                                            <a href="incident?view=<?php echo $incidents['road_incident_id']; ?>"><?php echo $incidents['road_incident_type']; ?></a> At <?php echo $incidents['location_name']; ?>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sortable-handler"></div>
                                        </li>
                                    <?php }
                                } else { ?>
                                    <li class="filter">
                                        <div class="item-content">
                                            <a href="incident" class="item-media"><img src="../assets/images/welcome/incident.png" width="80" alt="logo"></a>
                                            <div class="item-inner">
                                                <div class="item-title-row">
                                                    <div class="item-subtitle text-danger"><?php echo date('d M Y g:ia'); ?></div>
                                                    <h6 class="item-title text-danger">No reported incidents</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sortable-handler"></div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <!-- Recent Jobs End -->

                    </div>
                </div>
            </div>

        </div>
        <!-- Page Content End-->


    </div>
    <!--**********************************
    Scripts
***********************************-->
    <?php require_once('../partials/scripts.php'); ?>
</body>


</html>