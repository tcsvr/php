<?php 
header('content-type:text/html; charset=utf-8');
include("../include/function.php");
$str = file_get_contents('wengdo/case_list.html');
// echo $str;

// $pattern = '/src="(.+?(jpg|jpeg|gif|png))/';  // 匹配标签
// preg_match_all($pattern, $str, $match); //执行一个正则表达式匹配 
// echo '<pre>';

$pattern = '/src="(.+?(jpg|jpeg|gif|png))/';  // 匹配标签
preg_match_all($pattern, $str, $match); //执行一个正则表达式匹配 


echo '<pre>';
// print_r($match); //匹配到的结果
echo '</pre>';
foreach($match[1] as $k=>$v){
// pre($v); 
$b = str_replace("images/","",$v);
echo $b;


$txt = './txt';
if(!file_exists($txt)){
    mkdir($txt,0777,true);
}


opendir($txt);
$fm ='./txt/'.$b.'.txt';
$fp = fopen($fm,"a+");
if(filesize($fm) == 0){
    $le = fwrite($fp,$v);
}
// fclose($fm);
// closedir($txt);

}
echo '<br>';
echo '<a href="./txt">1111</a>';
// $m = array();
// $m = explode("images/",$v);
// pre($m);
