<?php
$names = 
    ["name"=>"css", "click"=>"11"];
list("name"=>$name, "click"=>$click) = $names;
echo $name;


$lessons = [
    ["name"=>"css", "click"=>"11"],
    ["name"=>"js", "click"=>"12"],
    ["name"=>"php", "click"=>"13"],
];
foreach($lessons as $key=>$lesson) {
    $lessons[$key]["click"] += 50; // 这样可以改变原数组,以便于二次处理数据。
    print_r($lesson);
    echo $key;
}
