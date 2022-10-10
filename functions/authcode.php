<?php
session_start();
include("myfunctions.php");
include("config.php");

if (isset($_POST["login_btn"])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "select * from admin where (email = '$username' or name = '$username') and password = '$password'";
    $query_run = mysqli_query($conn, $query);
    if (mysqli_num_rows($query_run) > 0) {
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_assoc($query_run);
        $userid = $userdata['id'];
        $username = $userdata['name'];
        $useremail = $userdata['email'];
        $role_as = $userdata['role_as'];
        $_SESSION['auth_user'] = [
            'userid' => $userid,
            'name' => $username,
            'email' => $email
        ];
        $_SESSION['role_as'] = $role_as;

        if ($role_as == 1) {

            redirect("../admin/index.php", "Welcome to dashboard");
        }
    } else {

        $_SESSION['message'] = 'Please enter the correct email or Password';
        header('Location: ../admin/login.php');
    }
} else {
    redirect("../admin/login.php", "Something went wrong");
}
