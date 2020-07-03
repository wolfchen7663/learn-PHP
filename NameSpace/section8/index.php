<?php

namespace App;

include 'bootstrap.php';

// 一次定义,接下来都可以用
use App\Module\Shop\Controller\User;
// 使用别名解决冲突
use App\Module\Shop\Server\User as UserServer;
use App\Module\Shop\Server\Pay;

User::show();
echo '<hr/>';
Pay::show();
echo '<hr/>';
UserServer::show();
