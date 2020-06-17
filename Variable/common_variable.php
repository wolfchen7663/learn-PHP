<?php
$name = "chen";
print_r($name);
print_r($GLOBALS["name"]);
function show() {
    echo $GLOBALS["name"];
}
// unset($name);
var_dump(isset($name));
show();
?>