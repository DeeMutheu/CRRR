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


/* Add Road User */
if (isset($_POST['Add_User'])) {
    $user_name = mysqli_real_escape_string($mysqli, $_POST['user_name']);
    $user_contact_phone  = mysqli_real_escape_string($mysqli, $_POST['user_contact_phone']);
    $login_password = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['login_password'])));
    $login_email = mysqli_real_escape_string($mysqli, $_POST['login_email']);
    $login_rank = mysqli_real_escape_string($mysqli, 'Road User');

    $duplication_checker = "SELECT * FROM login WHERE login_email = '{$login_email}'";
    $res = mysqli_query($mysqli, $duplication_checker);
    if (mysqli_num_rows($res) > 0) {
        $err = "Email already exists";
    } else {
        /* Persist Auth */
        $auth_sql = "INSERT INTO login (login_email, login_password, login_rank)
            VALUES('{$login_email}', '{$login_password}', '{$login_rank}')";

        if (mysqli_query($mysqli, $auth_sql)) {
            /* Get Login ID */
            $user_login_id = mysqli_real_escape_string($mysqli, mysqli_insert_id($mysqli));

            /* Persit Customer Details */
            $add_user = "INSERT INTO road_users (user_login_id, user_name, user_contact_phone)
            VALUES ('{$user_login_id}', '{$user_name}', '{$user_contact_phone}')";

            if (mysqli_query($mysqli, $add_user)) {
                $success = "Road User Added Successfully";
            } else {
                $err = "Failed, please try again";
            }
        } else {
            $err = "Failed to road user account, try again later";
        }
    }
}

/* Update User */
if (isset($_POST['Update_Profile'])) {
    $user_name = mysqli_real_escape_string($mysqli, $_POST['user_name']);
    $user_contact_phone = mysqli_real_escape_string($mysqli, $_POST['user_contact_phone']);
    $login_email = mysqli_real_escape_string($mysqli, $_POST['login_email']);
    $user_login_id = mysqli_real_escape_string($mysqli, $_POST['user_login_id']);

    //Update user
    $update_sql = mysqli_query(
        $mysqli,
        "UPDATE road_users SET user_name = '{$user_name}', user_contact_phone = '{$user_contact_phone}' WHERE user_login_id = '{$user_login_id}'"
    );
    $update_email_sql = mysqli_query(
        $mysqli,
        "UPDATE login SET login_email = '{$login_email}' WHERE login_id = '{$user_login_id}'"
    );

    if ($update_sql && $update_email_sql) {
        $success = "Profile Updated Successfully";
    } else {
        $err = "Profile Update Failed, Try Again";
    }
}


/* Delete User */
if (isset($_POST['Delete_User'])) {
    $user_login_id = mysqli_real_escape_string($mysqli, $_POST['user_login_id']);

    $delete_login_sql = mysqli_query($mysqli, "DELETE FROM login WHERE login_id = '{$user_login_id}'");

    if ($delete_login_sql) {
        $_SESSION['success'] = "User Deleted Successfully";
        header('Location: road_users');
        exit;
    } else {
        $err = "User Delete Failed, Try Again";
    }
}

/* Update Auth */
if (isset($_POST['Update_Auth'])) {
    $login_id = mysqli_real_escape_string($mysqli, $_POST['login_id']);
    $confirm_password = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['confirm_password'])));
    $new_password = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['new_password'])));

    //check if passwords match
    if ($confirm_password != $new_password) {
        $err = "Passwords Does Not Match";
    } else {
        //Persist
        $update_sql = mysqli_query(
            $mysqli,
            "UPDATE login SET login_password = '{$new_password}' WHERE login_id = '{$login_id}'"
        );

        if ($update_sql) {
            $success = "Password Updated Successfully";
        } else {
            $err = "Password Update Failed, Try Again";
        }
    }
}
