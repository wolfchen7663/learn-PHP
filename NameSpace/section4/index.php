<?php
// 用的少
namespace App;

include 'common.php';

\App\Controller\User::show();
namespace\Controller\USer::show(); // 跟上面效果一样

echo '<hr/>';
$class = __NAMESPACE__.'\\Controller\User';
echo $class::show();
