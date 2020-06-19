<?php
// 高效的改变数组的值
$database = [
    "hosT"=>"localhost",
    "Admin"=>"chen",
    "pWD"=>"ooo",
    "anoTHer"=>[
        "HOst"=>"192.0.0.2",
        "UsEr"=>"wei"
    ]
];

function change_array_value(array $data, int $type=CASE_UPPER):array {
    array_walk_recursive($data, function(&$v, $k, $type){
        $action = $type==CASE_UPPER?"strtoupper":"strtolower";
        $v = $action($v).strtoupper("change");
    }, $type);
    return $data;
}
// array_walk_recursive($database, function(&$v, &$k, $type){
//     $action = $type==CASE_UPPER?"strtoupper":"strtolower";
//     $v = $action($v);
// }, CASE_UPPER);

print_r(change_array_value($database));