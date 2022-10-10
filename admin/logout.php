<?php
session_start();

if (isset($_SESSION['auth'])) {
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);
    $_SESSION['message'] = "Logged out Successfully";
} else {
    $_SESSION['message'] = "You are already Logged out";
}
header('Location: ../public/index.php');
