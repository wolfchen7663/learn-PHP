<?php
function add(){
    static $num = 1;  // execute just once of the start
    $num = $num + 1;
    return $num.'<br/>';
}
echo add(); // 2
echo add(); // 3
echo add(); // 4
?>