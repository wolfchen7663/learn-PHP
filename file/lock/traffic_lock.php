<?php
// 取消文件的阻塞 LOCK_NB

$handle = fopen('cw.txt', 'wb');
$status = flock($handle, LOCK_EX | LOCK_NB, $wouldblock);
// $wouldblock 判断是否阻塞 不阻塞 则返回 false  阻塞 则返回 true
if (!$wouldblock) {
    fwrite($handle, 'houdunren');
} else {
    echo 'FILE IS LOCKED';
}
flock($handle, LOCK_UN);
fclose($handle);
