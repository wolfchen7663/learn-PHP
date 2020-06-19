<?php
// 改变多维数组的键
$database = [
    "hosT"=>"localhost",
    "Admin"=>"chen",
    "pWD"=>"ooo",
    "anoTHer"=>[
        "HOst"=>"192.0.0.2",
        "UsEr"=>"wei"
    ]
];

function cw_array_change_key_case(array $data, int $type=CASE_UPPER):array {
    $action = $type==CASE_UPPER?"strtoupper":"strtolower";
    foreach($data as $key=>$value) {
        unset($data[$key]);
        $data[$action($key)] = is_array($value)?cw_array_change_key_case($value, $type):$value;
    }
    return $data;
}

print_r(cw_array_change_key_case($database, $type=CASE_LOWER));