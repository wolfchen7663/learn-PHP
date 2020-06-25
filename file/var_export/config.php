<?php
// var_export() 输出符合PHP语法的格式
$db = ['host'=>'localhost', 'user'=>'root', 'password'=>'admin88'];
// print_r($db);
$config = var_export($db, true);
file_put_contents('database.php', '<?php return '.$config.';');
$config = include 'database.php';
echo $config['user'];