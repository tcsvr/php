<?php 
header('content-type:text/html; charset=utf-8');
// 指针的方式操作数组

$arr = array('a','b','c','d','e','d');

echo '<ul>';
	while($con = current($arr)){
		echo '<li>第 '.key($arr).' 个是 '.$con.'</li>';
		next($arr);
	}
echo '</ul>';





// next($arr);
// next($arr);
// next($arr);
// next($arr);
// next($arr);  //3 4
// prev($arr);  //2  3

// reset($arr); 







$arr = array('a','b','c','d','e','d');



while($con = each($arr)){
	// echo '<p>键'.$con[0].'值'.$con[1].'</p>';
	echo '<p>键'.$con['key'].'值'.$con['value'].'</p>';
}






// 把数组中的值赋给一些变量;
$arr = array('aaaaa','bbbbbb','cccccc');

list($a,$b,$c)=$arr;

echo $a;
echo '<br>';
echo $b;
echo '<br>';
echo $c;
echo '<br>';













 ?>