<?php
include_once("functions/config.php");

$email = $_POST['email'];

$check = "select * from newsletter where email = '$email'";
$check_run = mysqli_query($conn, $check);

$message = 404;

if (mysqli_num_rows($check_run) < 1) {
    $query = "insert into newsletter (email) values ('$email')";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        $message = 200;
        echo $message;
    } else {
        $message = 404;
        echo $message;
    }
} else {
    $message = 300;
    echo $message;
}
