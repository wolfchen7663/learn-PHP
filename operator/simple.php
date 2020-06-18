<?php
$num1= 1;
$num2 = 2;
echo $num1 + $num2;
echo $num1*$num2;
echo $num1 / $num2;
echo $num1 - $num2;
echo $num1 % $num2;
echo $num1++;
echo ++$num1;
/**
 * ??双问号 1 判断变量是都存在 2 变量否为真
 */

 $name = "cen";
 echo $name??"NO"; // 变量不存在的话，不会报错，而是直接指向NO

 $year = null;
 echo $year?:"no";

 echo @(30/0); // @屏蔽warring错误