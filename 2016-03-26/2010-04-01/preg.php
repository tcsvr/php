<?php 
header('content-type:text/html; charset=utf-8');
include('../include/function.php');
// $s = 'bacda';
// $p = "/a/";//只是代码本身
// echo preg_match($p, $s,$m);//,PREG_OFFSET_CAPTURE,0) ;


// $s = 'abcdefghijklmnopq';
// $p = "/[abc]/";//只要写到中括号里的是或者的意识
// echo preg_match($p, $s,$m);//,PREG_OFFSET_CAPTURE,0) ;执行一个

// $s = 'abcdefghijklmnopq,34943r984ss39829';
// $p = "/[a-z0-9]/";//中括号里的横杆是代码范围
// echo preg_match_all($p, $s,$m);//,PREG_OFFSET_CAPTURE,0) ;

// $s = 'asbcdefghADFGijklmGGnopq,34943r984ss39829';
// $p = "/[a-z0-9A-z]/";//中括号里的横杆是代码范围
// echo preg_match_all($p, $s,$m);//,PREG_OFFSET_CAPTURE,0) ;

// $s = 'asbcdefghADFGijklmGGnopq,34943r984ss39829';
// $p = "/[a-z0-9A-z]/i";//修饰符 i 忽略大小写
// echo preg_match_all($p, $s,$m);//,PREG_OFFSET_CAPTURE,0) ;

// $s = 'abcdefg';
// $p = "/[a-z][a-z][a-z][a-z]/";//4个人任意字母挨到一起的规则
// echo preg_match_all($p, $s,$m);//,PREG_OFFSET_CAPTURE,0) ;

// $s = 'abcdefg';
// $p = "/[a-z]+/";//+ 量词 （最少一次，最多无限次）
// echo preg_match_all($p, $s,$m);//,PREG_OFFSET_CAPTURE,0) ;

// $s = 'abcd45673efg';
// $p = "/[a-z]/";//* 量词 （最少0次，最多无限次）
// echo preg_match_all($p, $s,$m);//,PREG_OFFSET_CAPTURE,0) ;

// $s = 'abcd45673efg';
// $p = "/[^a-z]/";//^ 取反
// echo preg_match_all($p, $s,$m);//,PREG_OFFSET_CAPTURE,0) ;

// $s = 'apx bpx cpx dpx epx fpx';//apx cpx epx
// $p = "/[ace]px/";
// echo preg_match_all($p, $s,$m);//,PREG_OFFSET_CAPTURE,0) ;

// $s = 'apx bpx cpx dpx epx fpx';//apx cpx epx
// $p = "/[ace][p][x]/";
// echo preg_match_all($p, $s,$m);//,PREG_OFFSET_CAPTURE,0) ;

// $s = 'apx bpx cpx dpx epx fpx';//apx cpx epx
// $p = "/apx|cpx|epx/";
// echo preg_match_all($p, $s,$m);//,PREG_OFFSET_CAPTURE,0) ;

// $s = 'apx bpx cpx dpx epx fpx';//apx cpx epx
// $p = "/(apx|cpx|epx)/";
// echo preg_match_all($p,$s,$m);//,PREG_OFFSET_CAPTURE,0) ;

// $s = 'apx bpx cpx 346 +=+ 57
// dpx epx fpx';//apx cpx epx
// $p = "/.+/s";//.除了换行的任意字符  S 修饰符
// preg_match_all($p,$s,$m);//,PREG_OFFSET_CAPTURE,0) ;

// $s = 'apx bpx cpx 346 +=+ 57
// dpx epx fpx';//apx cpx epx
// $p = "/. +/sx";//.除了换行的任意字符  x 忽略空白
// preg_match_all($p,$s,$m);//,PREG_OFFSET_CAPTURE,0) ;

// $s = '<p>apx</p><p>bpx</p><p>cpx</p><p>346</p><p>+=+57</p>
// <p>dpx</p><p>epx</p><p>fpx</p>';
// $p = "/<p>(.+)<\/p>/U";//U 取消贪婪模式
// preg_match_all($p,$s,$m);//,PREG_OFFSET_CAPTURE,0) ;

$s = '<p title="">段落1</p><p>段落2</p><p>段落3</p><p>段落4</p>';
$p = "/<[^<>]+>/";  // 匹配标签


// $s = "<p>apx</p><p>bpx</p><p>cpx</p><p>346</p><p>+=+57</p>
// <p>dpx</p><p>epx</p><p>fpx</p>";
// $p = "/<[^<>]+>/";  // 匹配标签
// $p = "/<[^<>]+>/";//匹配标签
preg_match_all($p,$s,$m);//,PREG_OFFSET_CAPTURE,0) ;
pre($m);




























?>