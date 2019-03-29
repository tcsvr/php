<?php 
header('content-type:text/html; charset=utf-8');
$arr = array(1,2,3,4,5,6,7,8);
next($arr);
prev($arr);
reset($arr);
echo key($arr);//获取当前位置的 键（默认第一个）
echo '<br>';
echo current($arr);//获取当前位置的 值（默认第一个）
echo '<hr>';
echo '<ul>';
while($con=current($arr)){
    echo '<li>第'.key($arr).'个是'.$con.'</li>';
    next($arr);
}
echo '</ul>';

$arr = array('a','b','c','d','f');
$a= each($arr);
pre($a);
// while($con = each($arr)){
//     echo '<p>键'.$con['key'].'值'.$con['value'].'</p>';
// }
$arr = array('a','b','c','d','f');
list($a,$b,$c)=$arr;
echo($a);
echo($b);
























































function pre($con){
    echo '<pre>';
    print_r($con);
    echo '</pre>';
}
