<?php 
header('content-type:text/html; charset=utf-8');

// $s = 'ab\'cds\'fsd';
// echo $s;exit;

$con = file_get_contents('wengdo/case_list.html');
$pattern = "/<\/nav>\s+<ul>(.+)<\/ul>/Us";

preg_match($pattern, $con, $ul);

$li = $ul[1];

$pattern = "/<a href=\"case.html\">\s+<img src=\"(.+)\"/U";

preg_match_all($pattern, $li, $matches);

$path = 'wd/';

if(!file_exists($path)){
	mkdir($path,0777,true);
}

$listArr = $matches[1];
foreach($listArr as $v){
	$pathinfo = pathinfo($v);
	$filename = $pathinfo['filename'];

	file_put_contents($path.$filename.'.txt', $v);
}










// preg_match_all(pattern, subject)




 ?>