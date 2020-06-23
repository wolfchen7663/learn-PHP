<?php
// 原子组()
// 替换.com

$str = "官网是.com 理由是.com 好处是.com";
$reg = "/(\.)(com)/";
echo preg_replace($reg, '<span style="color:red">\1\2</span>', $str);

// ^边界限定&

