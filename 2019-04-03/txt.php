<?php 
header('content-type:text/html; charset=utf-8,gbk');
include('../include/function.php');
set_time_limit(0);
$con = file_get_contents('http://www.xbiquge.la/15/15428/');
// echo $con;
$pattern = "/<div id=\"list\">\s+<dl>(.+)<\/dl>/s";

// $pattern = "/<\/nav>\s+<ul>(.+)<\/ul>/Us";
// $pattern = "/<a href=\"case.html\">\s+<img src=\"(.+)\"/U";
preg_match($pattern,$con,$dl);

$dd = $dl[1];
$pat = "/<dd><a href=\'(.+)\' >(.+)<\/a>/Us";

preg_match_all($pat,$dd,$da);

$dt = $da[1];
$dm = $da[2];
foreach($dt as $s){
    $co = file_get_contents('http://www.xbiquge.la'.$s);
    $p = "/<div id=\"content\">(.+)<\/div>/Us";
    preg_match_all($p,$co,$dv);
    $dv1 = $dv[1];
    $sp = "/<[^<>]+>/";
    $ps = "/&nbsp;/";
    $n = preg_replace($sp,"\r\n",$dv1);
    $nn = preg_replace($ps,' ',$n);
    pre($nn);
}

// if(!file_exists($path)){
// 	mkdir($path,0777,true);
// }
file_put_contents('机械师'.'.txt', $nn);

// foreach($nn as $c){
//     pre($c);
// }
// $path = '机械师/';

// if(!file_exists($path)){
// 	mkdir($path,0777,true);
// }

// foreach($dm as $v){
// 	$pathinfo = pathinfo($v);
//     $filename = $pathinfo['filename'];
//     file_put_contents($path.$filename.'.txt', $nn);
// }


// pre($dt);