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
require_once('../helpers/incidents.php');
require_once('../partials/head.php');
?>

<body class="bg-white">
    <div class="page-wraper">

        <!-- Preloader -->
        <div id="preloader">
            <div class="spinner"></div>
        </div>
        <!-- Preloader end-->
        <!-- Header -->
        <header class="header">
            <div class="main-bar">
                <div class="container">
                    <div class="header-content">
                        <div class="left-content">
                            <a href="javascript:void(0);" class="back-btn">
                                <svg width="18" height="18" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.03033 0.46967C9.2966 0.735936 9.3208 1.1526 9.10295 1.44621L9.03033 1.53033L2.561 8L9.03033 14.4697C9.2966 14.7359 9.3208 15.1526 9.10295 15.4462L9.03033 15.5303C8.76406 15.7966 8.3474 15.8208 8.05379 15.6029L7.96967 15.5303L0.96967 8.53033C0.703403 8.26406 0.679197 7.8474 0.897052 7.55379L0.96967 7.46967L7.96967 0.46967C8.26256 0.176777 8.73744 0.176777 9.03033 0.46967Z" fill="#a19fa8" />
                                </svg>
                            </a>
                        </div>
                        <div class="mid-content">
                            <h5 class="mb-0">Reported Incident</h5>
                        </div>
                        <div class="right-content">
                            <a href="javascript:void(0);" class="menu-toggler">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16.0755 2H19.4615C20.8637 2 22 3.14585 22 4.55996V7.97452C22 9.38864 20.8637 10.5345 19.4615 10.5345H16.0755C14.6732 10.5345 13.537 9.38864 13.537 7.97452V4.55996C13.537 3.14585 14.6732 2 16.0755 2Z" fill="#a19fa8" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="#a19fa8" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->
        <?php
        require_once('../partials/sidebar.php');

        $incidents_sql = mysqli_query(
            $mysqli,
            "SELECT * FROM road_incidents i
            INNER JOIN road_users u ON u.user_id = i.road_incident_user_id
            WHERE i.road_incident_id = '{$_GET['view']}'"
        );
        if (mysqli_num_rows($incidents_sql) > 0) {
            while ($incident = mysqli_fetch_array($incidents_sql)) {

        ?>


                <!-- Page Content -->
                <div class="page-content bottom-content">
                    <div class="content-body">
                        <div class="container">
                            <div class="border-bottom">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="title"><?php echo $incident['road_incident_type']; ?></h5>
                                        <span class="d-block mb-2 text-danger">Reported on <?php echo date('d M Y', strtotime($incident['road_incident_date_reported'])); ?> at <?php echo date('g:ia', strtotime($incident['road_incident_date_reported'])); ?> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <?php if ($incident['road_incident_location'] != '') { ?>
                                        <div class="card-header border-0 pb-0">
                                            <h5 class="card-title">Location : <?php echo $incident['location_name']; ?></h5>
                                        </div>
                                        <div class="card-body">
                                            <iframe width="100%" height="300" src="https://maps.google.com/maps?q=<?php echo $incident['location_name']; ?>&output=embed"></iframe>
                                        </div>
                                    <?php } else { ?>
                                        <h5 class="card-title">Location</h5>
                                        <div class="card-body">
                                            <iframe width="100%" height="300" src="https://maps.google.com/maps?q=<?php echo $incident['incident_lat']; ?>,<?php echo $incident['incident_lng']; ?>&output=embed"></iframe>
                                        </div>
                                    <?php } ?>

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header border-0 pb-0">
                                        <h5 class="card-title">Description</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text" align="justify">
                                            <?php echo $incident['road_incident_description']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header border-0 pb-0">
                                        <h5 class="card-title">Reported By</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                            Name: <?php echo $incident['user_name']; ?><br>
                                            Contacts: <?php echo $incident['user_contact_phone']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            /* Get Interactions */
                            $interactions_sql = mysqli_query(
                                $mysqli,
                                "SELECT * FROM emergency_interactions ei
                                INNER JOIN response_services rs ON rs.response_service_id = ei.emergency_interaction_service_id
                                WHERE ei.emergency_interaction_incident_id = '{$_GET['view']}'"
                            );
                            if (mysqli_num_rows($interactions_sql) > 0) {
                                while ($response_service = mysqli_fetch_array($interactions_sql)) {
                            ?>
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header border-0 pb-0">
                                                <h5 class="card-title">Emergency Service Responded</h5>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text">
                                                    Name: <?php echo $response_service['response_service_name']; ?><br>
                                                    Contact Person Name: <?php echo $response_service['response_service_contact_person_name']; ?><br>
                                                    Contact Person Phone: <?php echo $response_service['response_service_contact_person_phone']; ?><br>

                                                </p>
                                                <p><b>Comments / Remarks</b></p>
                                                <p class="card-text" align="justify">
                                                    <?php echo $response_service['emergency_interaction_details']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>
                <!-- Page Content End-->
                <?php
                /* Show This Link If The  Incident Has Not Been Responded To */
                if ($incident['road_incident_response_service_id'] != '') {
                } else {
                    /* Only show this to admin and emergency service */
                    if ($_SESSION['login_rank'] == 'Admin') { ?>

                        <!-- Footer -->
                        <div class="footer fixed bg-white">
                            <div class="container">
                                <div class="footer-btn d-flex align-items-center">
                                    <button type="button" class="btn w-100 btn-primary mb-2 text-center" data-bs-toggle="modal" data-bs-target="#AddModal">Respond</button>
                                </div>
                            </div>
                        </div>
                        <!-- Footer End -->
                    <?php } else if ($_SESSION['login_rank'] == 'Response Service') { ?>
                        <!-- Footer -->
                        <div class="footer fixed bg-white">
                            <div class="container">
                                <div class="footer-btn d-flex align-items-center">
                                    <button type="button" class="btn w-100 btn-primary mb-2 text-center" data-bs-toggle="modal" data-bs-target="#Add_Modal">Respond</button>
                                </div>
                            </div>
                        </div>
                        <!-- Footer End -->

                <?php }
                }
                ?>

                <!-- Respond Modals -->.
                <div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form method="POST">
                                <div class="modal-body text-center text-dark">
                                    <img src="../assets/images/favicon.png" width="90"><br>
                                    <h4>Select response service to respond to this incident</h4>
                                    <input type="hidden" name="emergency_interaction_incident_id" value="<?php echo $_GET['view']; ?>">
                                    <select class="form-control" name="emergency_interaction_service_id">
                                        <option value="">Select Response Service</option>
                                        <?php
                                        //Get Response Services
                                        $services_sql = mysqli_query(
                                            $mysqli,
                                            "SELECT * FROM response_services"
                                        );
                                        if (mysqli_num_rows($services_sql) > 0) {
                                            while ($services = mysqli_fetch_array($services_sql)) {
                                        ?>
                                                <option class="form-control" value="<?php echo $services['response_service_id']; ?>"><?php echo $services['response_service_name']; ?></option>
                                        <?php }
                                        } ?>
                                    </select>
                                    <br>
                                    <label>Comments / Remarks</label>
                                    <textarea class="form-control" name="emergency_interaction_details"></textarea>
                                    <hr>
                                    <button type="button" class="text-center btn btn-danger btn-sm" data-bs-dismiss="modal">No, Decline</button>
                                    <input type="submit" name="RespondIncident" value="Yes, Respond" class="text-center btn btn-success btn-sm">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="Add_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form method="POST">
                                <div class="modal-body text-center text-dark">
                                    <img src="../assets/images/favicon.png" width="90"><br>
                                    <h4>Respond to this incident?</h4>
                                    <input type="hidden" name="emergency_interaction_incident_id" value="<?php echo $_GET['view']; ?>">
                                    <?php
                                    //Get Response Services
                                    $services_sql = mysqli_query(
                                        $mysqli,
                                        "SELECT * FROM response_services WHERE response_service_login_id  = '{$_SESSION['login_id']}'"
                                    );
                                    if (mysqli_num_rows($services_sql) > 0) {
                                        while ($services = mysqli_fetch_array($services_sql)) {
                                    ?>
                                            <input type="hidden" name="emergency_interaction_service_id" value="<?php echo $services['response_service_id']; ?>">
                                    <?php }
                                    } ?>
                                    <label>Comments / Remarks</label>
                                    <textarea class="form-control" required name="emergency_interaction_details"></textarea>
                                    <hr>
                                    <button type="button" class="text-center btn btn-danger btn-sm" data-bs-dismiss="modal">No, Decline</button>
                                    <input type="submit" name="RespondIncident" value="Yes, Respond" class="text-center btn btn-success btn-sm">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Modals -->
        <?php }
        } ?>
    </div>
    <!--**********************************
    Scripts
***********************************-->
    <?php require_once('../partials/scripts.php'); ?>
</body>


</html>