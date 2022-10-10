<?php

session_start();
include_once("../middleware/adminMiddleware.php");
include_once('smtp/PHPMailerAutoload.php');
require_once 'credential.php';

function rand_pass($length)
{
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars), 0, $length);
}
function smtp_mailer($to, $subject, $msg, $header)
{
    $mail = new PHPMailer();
    $mail->SMTPDebug  = 3;
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = EMAIL;
    $mail->Password = PASS;
    $mail->SetFrom(EMAIL);
    $mail->Subject = $subject;
    $mail->Header = $mail->Body = $msg;
    $mail->AddAddress($to);
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));

    if (!$mail->Send()) {
        echo $mail->ErrorInfo;
    } else {
        return 'Sent';
    }
}

if (isset($_POST['forget_pass_btn'])) {

    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $query = "select * from admin where email = '$email'";
    $query_run = mysqli_query($conn, $query);
    if (mysqli_num_rows($query_run) > 0) {
        $password = rand_pass(13);
        $message = "Please use this password to login " . $password;
        $To = $email;
        $EMAIL = EMAIL;
        $subject = "Your Recovered Password";
        $header = "From: '$EMAIL" . "\r\n";

        $update_query = "update admin set password = '$password' where email = '$email' ";
        $update_query_run = mysqli_query($conn, $update_query);

        echo smtp_mailer($To, $subject, $message, $header);
        $_SESSION['message'] = "Now re-enter your email and password";
        header("Location: login.php");
    } else {
        $_SESSION['message'] = "Incorrect Email";
        header('Location: forget-pass.php');
    }
}
