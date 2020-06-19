<?php
$users = ["chin", "we"];
print_r($users);

array_push($users, "ji");
print_r($users);

array_pop($users);
print_r($users);

array_unshift($users, "xiao");
print_r($users);

array_shift($users);
print_r($users);

echo count($users);


//...............................................................................
$allowImageType = [
    "jpeg"=>2000,
    "jpg"=>2000,
    "gif"=>3000,
    "png"=>3333,
];

// 获取扩展名
$file= "chinwe.jpg";
$ext = strtolower(substr(strrchr($file, "."), 1));
// echo strrchr($file, "."); //返回.jpg
echo $ext; // jpg

print_r(array_keys($allowImageType)); // ["jpeg", "jpg", "gif", "png"]
if (in_array($ext, array_keys($allowImageType))) {
    echo "success";
}else {
    echo "false";
}

if(array_key_exists($ext, $allowImageType)) {
    echo "success";
}else {
    echo "wrong";
}

//.................................................................
$people = [
    ["name"=>"c", "age"=>10],
    ["name"=>"c", "age"=>30],
    ["name"=>"e", "age"=>50],
];

$agePeople = array_filter($people,function($person){
    return $person["age"]>30;
});
print_r($agePeople);

$addPrice = array_map(function($person){
    // unset($person["name"]);
    $person["price"] = 100000;
    return $person;
    // return implode("-", $person);
}, $people);
print_r($addPrice);

// 转换数组的下标的大小写
$arr = ['host'=>"localhost", "User"=>"cen", "passWoRd"=>"admin"];
$arr = array_change_key_case($arr, CASE_LOWER);
// CASE_LOWER 小写
// CASE_UPPER 大写
print_r($arr);

// 合并数组
print_r(array_merge([1, 2, 3],[3, 4, 6 ,7]));
print_r(
    array_merge(
        ['host'=>"localhost", "User"=>"cen", "passWoRd"=>"admin"],
        ['name'=>"localhost"]
    )
    );
