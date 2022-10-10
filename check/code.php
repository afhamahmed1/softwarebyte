<?php

include_once("../functions/config.php");
include_once("../functions/myfunctions.php");
if (isset($_POST['messages'])) {
    $url = $_POST['url'];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = (isset($_POST["phone"])) ? $_POST["phone"] : "";
    $subject = (isset($_POST["subject"])) ? $_POST["subject"] : "";
    $message = $_POST["message"];
    $query = "insert into messages (name, email, phone, subject, message) values ('$name','$email','$phone','$subject','$message')";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        redirect("../" . $url, "Message Successfully Sent.");
    } else {
        redirect("../" . $url, "Something Went Wrong.");
    }

    // $g_captcha = $_POST['g-recaptcha-response'];

    // if (isset($g_captcha)) {
    //     if (!$g_captcha) {
    //         '<script>alert("PLEASE")</script>';
    //         exit;
    //     } else {
    //         $secret = "6LeTl6khAAAAAIega8r8y_N2JeUKDLDGHR8cOyMt";
    //         $url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $g_captcha;
    //         $response = file_get_contents($url);
    //         $responseKeys = json_decode($response, true);
    //         print_r($responseKeys);
    // die();
    // if ($responseKeys['success']) {
    // $name = $_POST["name"];
    // $email = $_POST["email"];
    // $phone = $_POST["phone"];
    // $subject = $_POST["subject"];
    // $message = $_POST["message"];
    //     echo '<script>alert("success")</script>';
    // } else {
    //     echo '<script>alert("fail")</script>';
    // }
    // }
    // }
} else if (isset($_POST['get_a_quote'])) {
    $url = $_POST['url'];
    $name = $_POST["first_name"] . $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $service = $_POST["service"];
    $message = $_POST["message"];
    $query = "insert into get_a_quote (name, email, phone, service, message) values ('$name','$email','$phone','$service','$message')";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        redirect("../" . $url, "Message Successfully Sent.");
    } else {
        redirect("../" . $url, "Something Went Wrong.");
    }
}
