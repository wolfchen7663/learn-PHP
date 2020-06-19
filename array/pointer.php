<?php
$lessons = [
    ["name"=>"css", "click"=>"11"],
    ["name"=>"js", "click"=>"12"],
    ["name"=>"php", "click"=>"13"],
];
echo key($lessons);
print_r($lessons[key($lessons)]["name"]) ;
print_r(current($lessons));
next($lessons);
print_r(current($lessons));
prev($lessons);
print_r(current($lessons));