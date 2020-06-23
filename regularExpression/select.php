<?php
//  | 选择符
$str = "后盾网houdunwang.com , 后盾人 houdunren.com";
$preg = '/(houdunwang|houdunren)(\.com)/';
$replace = '<a href="http://www.\1\2">\0</a>';
echo preg_replace($preg, $replace, $str); 