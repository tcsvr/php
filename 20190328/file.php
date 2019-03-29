<?php 
header('content-type:text/html; charset=utf-8');

$filename = 'data.txt';
// 文件的操作
// 打开文件
// $fh = fopen($filename, 'r');

// 获取文件大小
// $fs = filesize($filename);

// 操作文件  按大小来读  按行来读
// 按大小来读
// $txt = fread($fh, $fs);

// 处理中文乱码
// echo iconv('gb2312', 'utf-8', $txt);

// 按行来读
/*while($con = fgets($fh)){
	echo $con.'<br>';
}*/

// 文件写
// echo fwrite($fh, 'a');

// 关闭文件
// fclose($fh);



// file()  把文件读取到数组中，用换行符来分隔
$farr = file($filename);

echo '<div>';
foreach($farr as $v){
	echo '<p>'.iconv('gb2312', 'utf-8', $v).'</p>';
}

echo '</div>';

// 目录的操作





 ?>