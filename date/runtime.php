<?php
date_default_timezone_set("PRC");
// 记录一个程序执行的时间
function runtime($start=null, $end=null){
    static $cache=[];
    if($start == null) {
        return $cache;
    }elseif($end == null){
        return $cache[$start] = microtime(true);
    }else {
        $end = $cache[$end]??microtime(true);
        return $end-$cache[$start];
    }

}

runtime("for");
for($i= 0; $i <= 2000000; $i++) {
    $i++;
}
runtime("forEnd");
echo round(runtime("for", "forEnd"), 3);