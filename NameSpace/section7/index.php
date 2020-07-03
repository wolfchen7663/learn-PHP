<?php

namespace App;

// 一次定义接下来都可以用
use App\Module\Shop\Controller\User;
// 使用别名解决冲突
use App\Module\Shop\Server\User as UserServer;
use App\Module\Shop\Server\Pay;

include 'Module/Shop/Controller/User.php';
include 'Module/Shop/Server/User.php';
include 'Module/Shop/Server/Pay.php';
User::show();
echo '<hr/>';
Pay::show();
echo '<hr/>';
UserServer::show();
