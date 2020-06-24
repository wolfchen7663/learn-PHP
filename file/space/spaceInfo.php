<?php
// include './count.php';
require './count.php';
echo countSpace(disk_total_space('.')).'<hr/>';
echo countSpace(disk_free_space('.'));