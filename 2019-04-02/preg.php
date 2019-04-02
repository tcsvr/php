<?php
header('content-type:text/html; charset=utf-8');
include("../include/function.php");
// $str = 'abcd12345';
// $pattern = "/^[a-z]+/";

// $str = 'abcd12345
// abcd12345
// abcd12345
// abcd12345';
// $pattern = "/[a-z]+/m";

// $str  = 'wdlksjdasd阿斯兰看到杀了就考试时了解到萨洛克就大了';
// $spattern = "/[\x{4E00}-\x{9FA5}]+/u";

// $str  = 'wd lks Mjda sd阿斯兰看到杀了就考 试时了解 到萨洛克就大了';
// $spattern = "/\b[a-zA-Z]+\b/";

// $str  = 'wd lks Mjda sd阿斯兰看到杀了就考 试时了解 到萨洛克就大了';
// $spattern = "/\B[a-zA-Z]+\B/";

// $str  = '120385726 185015617404 17303169207 1537263';
// $spattern = "/1[35789][0-9]{9}/";

// $str  = '120385726 185015617404 17303169207 41537263 23456443 0345-45678324';
// $spattern = "/(0[0-9]{2,3}-)?[23468][0-9]{6,7}$/";

// $str  = 'abcd';
// $spattern = "/[a-z]/";

// preg_match_all($spattern,$str,$match);


// $s = "asdafskhfskfslk";
// $p = "/a/";

// $s = "<p>wode shijei </p> <script>alert('安全过滤')</script>";
// $p = "/<[^<>]+>/";

// $n = preg_replace($p,'',$s);
// echo $n;

// $str = 'a,b.c-d';
// $pattern = '/[.,-]/';
// $arr = preg_split($pattern,$str);
// pre($arr);
$arr = array(
    'asdasd',
    'asd23kjakd',
    '3sd444',
    '12asdjad',
    '12asd',
    'ad24234'

);
$pattern = "/^[a-z]+[\d]+$/";
$a = preg_grep($pattern,$arr);
pre($a);