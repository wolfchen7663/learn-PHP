<?php
date_default_timezone_set("PRC");
$date = DateTime::createFromFormat("Y/m/d H:i:s", "2020/02/02 22:22:22");
echo $date->format("Y-m-d H:i:s");