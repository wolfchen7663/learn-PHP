<?php
session_start();
// print_r($_SESSION);
// echo $POST['captcha']
$receive = strtoupper($_POST['captcha']);
if ($receive == $_SESSION['captcha']) {
    echo 'u can login';
} else {
    echo 'Please try again later';
}
