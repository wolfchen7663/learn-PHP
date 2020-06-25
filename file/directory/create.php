<?php
// mkdir创建目录
// mkdir('cw', 0755);
echo basename(__FILE__); // 取得文件名字
echo "<hr/>";
echo dirname(__FILE__); // 取得文件的路径名

// 删除目录 rmdir 只能删除空目录
rmdir('cw');

// 文件改名/移动 rename 
rename();

// 文件复制 copy
copy();