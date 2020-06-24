<?php
$datetime = new DateTime();
$interval = new DateInterval("P2DT5H5M");
echo $datetime->format("Y-m-d H:i:s");
echo "<hr/>";
$datetime->add($interval);
echo $datetime->format("Y-m-d H:i:s");
$datetime->sub($interval);
echo "<hr/>";
echo $datetime->format("Y-m-d H:i:s");

