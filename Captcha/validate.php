<?php
session_start();
$code = strtoupper($_SESSION['captcha']);
$receive = strtoupper($_POST['captcha']);
if ($receive == $code) {
    echo 'OK, ENJOY!!!';
} else {
    echo "ERROR!!! TYPE IN AGAIN PLEASE";
}
