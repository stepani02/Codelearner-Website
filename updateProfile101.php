<?php
session_start();
require 'connection.php';
$connect = Connect();
$errors = array();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['save_btn'])) {
    try {
        $originalUsername = $_SESSION['username'];

        $newFname = $_POST['first_name'];
        $newLname = $_POST['last_name'];
        $newEmail = $_POST['email_address'];
        $newUsername = $_POST['username'];

        $check_email_query = "SELECT COUNT(*) as email_count FROM tbl_userinfo WHERE email = :email AND username != :original_username";
        $check_email_query_run = $connect->prepare($check_email_query);
        $check_email_data = [
            ':email' => $newEmail,
            ':original_username' => $originalUsername
        ];
        $check_email_query_run->execute($check_email_data);
        $email_result = $check_email_query_run->fetch(PDO::FETCH_ASSOC);

        $check_user_query = "SELECT COUNT(*) as username_count FROM tbl_userinfo WHERE username = :user AND username != :original_username";
        $check_user_query_run = $connect->prepare($check_user_query);
        $check_user_data = [
            ':user' => $newUsername,
            ':original_username' => $originalUsername
        ];
        $check_user_query_run->execute($check_user_data);
        $user_result = $check_user_query_run->fetch(PDO::FETCH_ASSOC);

        if ($email_result['email_count'] > 0) {
            $errors['email'] = "Email already taken. Please choose a different one.";
        }

        if ($user_result['username_count'] > 0) {
            $errors['username'] = "Username already taken. Please choose a different one.";
        }

        if (empty($errors)) {
      
            $_SESSION['profile_update_success'] = true;
            header("Location: updateProfile.php");
            exit();
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

$_SESSION['profile_update_errors'] = $errors;
header("Location: updateProfile.php");
exit();
?>
