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


//Add Response Service
if (isset($_POST['Add_Emergency_Service'])) {
    $response_service_name = mysqli_real_escape_string($mysqli, $_POST['response_service_name']);
    $response_service_contact_person_name = mysqli_real_escape_string($mysqli, $_POST['response_service_contact_person_name']);
    $response_service_contact_person_phone = mysqli_real_escape_string($mysqli, $_POST['response_service_contact_person_phone']);
    $response_service_location = mysqli_real_escape_string($mysqli, $_POST['response_service_location']);
    $response_service_description = mysqli_real_escape_string($mysqli, $_POST['response_service_description']);
    $login_email = mysqli_real_escape_string($mysqli, $_POST['login_email']);
    $login_password  = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['login_password'])));

    //Check If Email Exists
    $duplication_checker = "SELECT * FROM login WHERE login_email = '{$login_email}'";
    $res = mysqli_query($mysqli, $duplication_checker);
    if (mysqli_num_rows($res) > 0) {
        $err = "Email already exists";
    } else {
        /* Persist Auth */
        $auth_sql = "INSERT INTO login (login_email, login_password, login_rank)
            VALUES('{$login_email}', '{$login_password}', 'Response Service')";

        if (mysqli_query($mysqli, $auth_sql)) {
            $response_service_login_id  = mysqli_real_escape_string($mysqli, mysqli_insert_id($mysqli));

            /* Persist Response Service Details */
            $add_sql = mysqli_query(
                $mysqli,
                "INSERT INTO response_services (response_service_login_id , response_service_name, response_service_contact_person_name, response_service_contact_person_phone,
                  response_service_location,  response_service_description) VALUES('{$response_service_login_id}', '{$response_service_name}', '{$response_service_contact_person_name}',
                  '{$response_service_contact_person_phone}', '{$response_service_location}', '{$response_service_description}')"
            );

            if ($add_sql) {
                $success = "Response Service Added Successfully";
            } else {
                $err = "Failed, please try again";
            }
        }
    }
}

//Update Response Service
if (isset($_POST['Update_Emergency_Service'])) {
    $response_service_id  = mysqli_real_escape_string($mysqli, $_POST['response_service_id']);
    $response_service_name = mysqli_real_escape_string($mysqli, $_POST['response_service_name']);
    $response_service_contact_person_name = mysqli_real_escape_string($mysqli, $_POST['response_service_contact_person_name']);
    $response_service_contact_person_phone = mysqli_real_escape_string($mysqli, $_POST['response_service_contact_person_phone']);
    $response_service_location = mysqli_real_escape_string($mysqli, $_POST['response_service_location']);
    $response_service_description = mysqli_real_escape_string($mysqli, $_POST['response_service_description']);

    //Update Response Service
    $update_sql = mysqli_query(
        $mysqli,
        "UPDATE response_services SET response_service_name = '{$response_service_name}', response_service_contact_person_name = '{$response_service_contact_person_name}',
        response_service_contact_person_phone = '{$response_service_contact_person_phone}', response_service_location = '{$response_service_location}',
        response_service_description = '{$response_service_description}' WHERE response_service_id = '{$response_service_id}'"
    );

    if ($update_sql) {
        $success = "Response Service Updated Successfully";
    } else {
        $err = "Response Service Update Failed, Try Again";
    }
}

//Delete Response Service


//Update Response Service Auth