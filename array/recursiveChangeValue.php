<?php
// 改变多维数组的值
$database = [
    "hosT"=>"locAlhost",
    "Admin"=>"cheN",
    "pWD"=>"oOOoo",
    "anoTHer"=>[
        "HOst"=>"LOCalHoST",
        "UsEr"=>"WeI"
    ]
];

function cw_array_change_value_case(array $data, int $case=CASE_UPPER):array{
    $action = $case==CASE_UPPER?"strtoupper":"strtolower";
    foreach($data as $k=>$v) {
        $data[$k] = is_array($v)?cw_array_change_value_case($v, $case):$action($v);
    }
    return $data;
}
print_r(cw_array_change_value_case($database, CASE_LOWER));