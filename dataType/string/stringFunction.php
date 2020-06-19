<?php
/**很重要很基础的函数 */
/**英文长度 */
$string = "hello world";
echo strlen($string);
/**中文长度 */
$chinese = "陈卫挺帅";
echo mb_strlen($chinese,"utf8");
echo mb_strlen("你好啊", "utf8");

/**单词首字母大写 */
echo ucfirst("world");
/**所有单词的开头字母都大写 */
echo ucwords("hello world");

/**变成大写 */
echo strtoupper("hello");
/**变成小写 */
echo strtolower("WORLD");

/**去除左右的空格 */
echo trim("                 \n\t hello    ");
echo ltrim("    hello");
echo rtrim("hello   ");

/**哈希字符串 */
echo md5("chenwei"."7663");
/**主要用于文件名转换(特殊字符转换) */
$file = "user-1-info";
echo md5($file);

/**拆分字符串 ,拆分完是数组*/
$name = "chen.wei";
$arr = explode(".", $name);
print_r($arr);

/**合并字符串 */
$email = ["email", "992510191@qq.com"];
$my_email = implode(":", $email);
print_r(ucfirst($my_email));

/**截取字符串 */
$password= "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
echo substr($password, 0, 6);// 6 表示的是截取的数量

/**截取中文 */
$say_chinese ="我们都是好孩子，我们都是好孩子，我们都是好孩子，我们都是好孩子，我们都是好孩子";
echo mb_substr($say_chinese, 0, 5, "utf8");

/**字符串重复 */
$str = "h";
echo str_repeat($str, 3);

/**连接字符串 */
// $str1.%str2