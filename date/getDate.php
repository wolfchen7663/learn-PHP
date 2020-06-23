<?php
// ISO 标准格式 2020-11-22 22:22:22

date_default_timezone_set("PRC");
echo date("Y-m-d H:i:s", time()-3600*24*365);

print_r(getdate());
/**
 * 
2019-06-24 16:09:37Array
(
    [seconds] => 37
    [minutes] => 9
    [hours] => 16
    [mday] => 23
    [wday] => 2
    [mon] => 6
    [year] => 2020
    [yday] => 174
    [weekday] => Tuesday
    [month] => June
    [0] => 1592899777
)

 * 
 */