<?php
session_start();
include 'Captcha.php';
$captcha = new Captcha;
$code = $captcha->render();
$_SESSION['captcha'] = $code;
