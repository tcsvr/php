<?php 
header('content-type:text/html; charset=utf-8,gbk');
include('../include/function.php');
set_time_limit(0);
$con = file_get_contents('http://www.xbiquge.la/34/34262/');
// echo $con;
$pattern = "/<div id=\"list\">\s+<dl>(.+)<\/dl>/s";

// $pattern = "/<\/nav>\s+<ul>(.+)<\/ul>/Us";
// $pattern = "/<a href=\"case.html\">\s+<img src=\"(.+)\"/U";
preg_match($pattern,$con,$dl);

$dd = $dl[1];
$pat = "/<dd><a href=\'(.+)\' >(.+)<\/a>/Us";

preg_match_all($pat,$dd,$da,PREG_SET_ORDER);

// pre($da);
$path = 'tst/';

if(!file_exists($path)){
	mkdir($path,0777,true);
}
foreach($da as $v){
    // $ps = "//"
    $link = $v[1];
    $tite = $v[2];
    // pre($da);
    // echo $v[2].'<br>';
    // pre($tite);
	// $pathinfo = pathinfo($tite);
    // $filename = $pathinfo['filename'];

    $co = file_get_contents('http://www.xbiquge.la'.$link);
    // // pre($co);
    $p = "/<div id=\"content\">(.+)<\/div>/Us";
    // pre($p);
    preg_match_all($p,$co,$dv);
    $dv1 = $dv[1];
    // pre($dv1);
    $sp = "/<[^<>]+>/";
    $ps = "/&nbsp;/";
    $n = preg_replace($sp,"\r\n",$dv1);
    $nn = preg_replace($ps,' ',$n);
    // // pre($nn);
    // file_put_contents($path.$tite.'.txt',"");
    file_put_contents(iconv('utf-8','gbk',$path.$tite) .'.txt', $nn);

}


// pre($dt);