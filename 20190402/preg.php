<?php 
header('content-type:text/html; charset=utf-8');

// $str = 'abce234234';
// $pattern = "/[^a-z]+/";  //在中括号里面加^ 就是取反的意思



// $str = 'abce';
// $pattern = "/^[a-z]+$/";  //^ 加在开头就是开始必须是..... $放在后面是结尾必须是.....




// $str = 'abcea234
// bceab34
// ceabc234
// eabce324
// abce324';
// $pattern = "/^[a-z]+/m";  //m 修饰符  视为多行


// $str = "2354234老师sdfds的风景23423";
// $pattern = "/[\x{4E00}-\x{9FA5}]+/u"; //u 是utf-8的u



// 下面说的是转义
// $str = "lsdf234324....dlsf122432";
// $pattern = "/\.+/"; //把有意义的转成没有意义的

// $str = "lsdf234324....dlsf122432";
// $pattern = "/\d/"; //把没有意义的转成有意义的 \d [0-9]



// $str = "abc hello world a is sdf12321";
// $pattern = "/\b[a-z]+\b/"; //匹配单词


// $str = "abc hello world a is sdf12321";
// $pattern = "/\B[a-z]+\B/"; //除了单词的边界符 （取反）



// 验证手机号 13066806361 18124723457
// 1 35879 0-9=9
$str = "18124723457";
$pattern = "/^1[35789][0-9]{9}$/"; //花括号里面一个参数 代表正好

$status = preg_match($pattern, $str);

/*if(!$status){
	alert('请输入正确手机号','xxxx.xxxxx');
}*/






// + 等价于 {1,}
// * 等价于 {0,}
// 验证座机
// 26384 [0-9]{6,7}  //括号里面两个参数，参数1 最少多少位，参数2 最多多少位
// 0354-29872796
// 0799
// 0790
// 010
// $str = "29872796";
// $str = "0354-29872796";
// $pattern = "/^(0[0-9]{2,3}-)?[26384][0-9]{6,7}$/"; //?最少0次，最多1次






// $str = "abcd";
// $pattern = "/[a-z]/"; //?最少0次，最多1次



// preg_match_all($pattern, $str, $match);


// echo '<pre>';
// print_r($match);
// echo '</pre>';














// 用正则的方式做字符串替换

// $str = "abcdabcdabcdabcdabcdabcd";
// $pattern = "/a/";





// $str = "<p>六点十分吉林省的</p><script>alert('安全过滤');</script>";
// $pattern = "/<[^<>]+>/";




// $str = file_get_contents('data.txt');
// $pattern = "/\r\n/";

// $new = preg_replace($pattern, '<br><br>', $str);
// echo $new;





// 用正则的方式分格字符串，返回一个数组类型

// $str = "a,b.c-d";
// $pattern = "/[.,-]/";

// $arr = preg_split($pattern, $str);

// print_r($arr);


// 返回与模式匹配的数组单元
$arr = array(
	'sdfsd',
	'sdf23423sd',
	'234sdfsd234',
	'234sdfsd',
	'sdfsd32',
	);

$pattern = "/^[a-z]+$/";

$newarr = preg_grep($pattern, $arr);


print_r($newarr);





 ?>