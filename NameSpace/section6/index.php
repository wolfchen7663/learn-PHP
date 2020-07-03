<?php

namespace App;

// 一次定义接下来都可以用
use App\Module\Shop\Controller\User;
use App\Module\Shop\Server\Pay;

include 'Module/Shop/Controller/User.php';
include 'Module/Shop/Server/Pay.php';
User::show();
echo '<hr/>';
Pay::show();
