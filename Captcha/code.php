<?php
session_start();
include 'Captcha.php';
$captcha = new Captcha();
$code = $captcha->render();
// file_put_contents('test.php', $code);
$_SESSION['captcha'] = $code;
