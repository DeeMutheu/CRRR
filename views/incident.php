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
require_once('../partials/head.php');
?>

<body class="bg-white">
    <div class="page-wraper">

        <!-- Preloader -->
        <div id="preloader">
            <div class="spinner"></div>
        </div>
        <!-- Preloader end-->
        <?php
        $incidents_sql = mysqli_query(
            $mysqli,
            "SELECT * FROM road_incidents i
            INNER JOIN locations l ON l.location_id = i.road_incident_location_id
            WHERE i.road_incident_id = '{$_GET['view']}'"
        );
        if (mysqli_num_rows($incidents_sql) > 0) {
            while ($incident = mysqli_fetch_array($incidents_sql)) {
        ?>
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
                                    <h5 class="mb-0">Incident Details</h5>
                                </div>
                                <div class="right-content">
                                    <div class="form-check checkmark">
                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault2">
                                        <label class="form-check-label" for="flexCheckDefault2">
                                            <svg width="18" height="18" viewBox="0 0 20 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.6783 1H16.6783C16.9768 0.999982 17.2739 1.06264 17.5529 1.18611L17.9576 0.271637L17.5529 1.18611C17.8321 1.30966 18.0895 1.49246 18.3084 1.72703C18.5274 1.96173 18.7032 2.24332 18.823 2.55692C18.9427 2.87058 19.0033 3.20813 18.9999 3.54952L18.9998 3.54952V3.55952L18.9998 23.8961L18.9998 23.9019C19.0011 24.125 18.9405 24.3396 18.8309 24.5186C18.7216 24.6971 18.5711 24.8286 18.4049 24.9058L18.3955 24.9102L18.3861 24.9148C18.2371 24.9877 18.0756 25.0108 17.9195 24.9851C17.763 24.9594 17.6092 24.884 17.4801 24.7588L17.4744 24.7533L17.4686 24.7479L11.1894 18.8485L11.1702 18.8305L11.1501 18.8135C10.8309 18.5438 10.4257 18.3902 10 18.3902C9.57426 18.3902 9.16907 18.5438 8.8499 18.8135L8.82979 18.8305L8.8106 18.8485L2.53137 24.7479L2.5225 24.7562L2.51384 24.7648C2.38709 24.8898 2.23541 24.9648 2.08123 24.9902C1.9275 25.0155 1.76832 24.9921 1.62181 24.9187L1.60854 24.912L1.59509 24.9058C1.42893 24.8286 1.27843 24.6971 1.16913 24.5186C1.05954 24.3396 0.998878 24.125 1.00017 23.9019H1.00019V23.8961V3.55952H1.00024L1.00014 3.54943C0.99322 2.86376 1.24356 2.21365 1.67989 1.73936C2.11277 1.26881 2.69045 1.01072 3.28296 1H16.6783Z" stroke="#40189D" stroke-width="2"></path>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Header End -->

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
                                    <div class="card-header border-0 pb-0">
                                        <h5 class="card-title">Location : <?php echo $incident['location_name']; ?></h5>
                                    </div>
                                    <div class="card-body">
                                        <iframe width="100%" height="300" src="https://maps.google.com/maps?q=<?php echo $incident['location_name']; ?>&output=embed"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header border-0 pb-0">
                                        <h5 class="card-title">Description</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff <br> sections. The bedding was hardly able to cover it and seemed ready to
                                            slide off any moment.
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
                                            Name: James Doe <br>
                                            Email: jamesdoe@gmail.com <br>
                                            Contacts: +254739876765
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Content End-->


                <!-- Footer -->
                <div class="footer fixed bg-white">
                    <div class="container">
                        <div class="footer-btn d-flex align-items-center">
                            <button type="button" class="btn w-100 btn-primary mb-2 text-center" data-bs-toggle="modal" data-bs-target="#AddModal">Respond</button>
                        </div>
                    </div>
                </div>
                <!-- Footer End -->

                <!-- Respond Modals -->.
                <div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form method="POST">
                                <div class="modal-body text-center text-dark">
                                    <img src="../assets/images/favicon.png" width="90"><br>
                                    <h4>Repond to this Incident</h4>
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