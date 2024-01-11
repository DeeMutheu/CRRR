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
require_once('../partials/head.php');
?>


<body>
    <div class="page-wraper">

        <!-- Header -->
        <?php require_once('../partials/header.php'); ?>
        <!-- Header End -->

        <!-- Preloader -->
        <div id="preloader">
            <div class="spinner"></div>
        </div>
        <!-- Preloader end-->

        <!-- Sidebar -->
        <?php require_once('../partials/sidebar.php'); ?>
        <!-- Sidebar End -->

        <!-- Banner -->
        <div class="banner-wrapper author-notification">
            <div class="container inner-wrapper">
                <div class="dz-info">
                    <span>Good Morning</span>
                    <h2 class="name mb-0">Henry Kanwil</h2>
                </div>
                <div class="dz-media media-45 rounded-circle">
                    <a href="profile"><img src="../assets/images/author/pic1.png" class="rounded-circle" alt="author-image"></a>
                </div>
            </div>
        </div>
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
                            <input type="text" placeholder="Search incidents here..." class="form-control ps-0 bs-0">
                        </div>
                    </form>

                    <!-- Dashboard Area -->
                    <div class="dashboard-area">
                        <!-- Features -->
                        <div class="features-box">
                            <div class="row m-b20 g-3">
                                <div class="col">
                                    <div class="card card-bx card-content bg-primary">
                                        <div class="card-body">
                                            <div class="card-info">
                                                <h4 class="title">29</h4>
                                                <p>Reported Incidents</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card card-bx card-content bg-secondary">
                                        <div class="card-body">
                                            <div class="card-info">
                                                <h4 class="title">3</h4>
                                                <p>Declined Incidents</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Features End -->

                        <!-- Recent Jobs -->
                        <div class="title-bar">
                            <h5 class="dz-title">Recently Reported Incidents</h5>
                            <a class="btn btn-sm text-primary" href="incidents">More</a>
                        </div>
                        <div class="list item-list recent-jobs-list">
                            <ul>
                                <li>
                                    <div class="item-content">
                                        <a href="incident" class="item-media"><img src="../assets/images/welcome/incident.png" width="80" alt="logo"></a>
                                        <div class="item-inner">
                                            <div class="item-title-row">
                                                <div class="item-subtitle">Date Reported: </div>
                                                <h6 class="item-title"><a href="incident">Incident Type</a></h6>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="item-price">Location: </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sortable-handler"></div>
                                </li>

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