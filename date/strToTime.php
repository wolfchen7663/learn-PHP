<?php
date_default_timezone_set("PRC");
$timeStart = strtotime("2020-06-01 00:00:00"); // 字符串转换为时间戳
$timeEnd=  strtotime("NOW");
$long = $timeEnd - $timeStart;
echo floor($long/3600)."小时".floor(($long%3600/60))."分钟";
