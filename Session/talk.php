<?php
session_start();
$_SESSION['name']='ji';
$_SESSION = []; // 清除内容
// session_destroy()// 删除内容加目录