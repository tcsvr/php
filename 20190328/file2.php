<?php 
header('content-type:text/html; charset=utf-8');

$str = "ddd\r\n";


// $fh = fopen('data.txt', 'a');
// echo fread($fh, 10);
// echo fwrite($fh, $str);
// fclose($fh);

// $farr = file('data.txt');

// print_r($farr);


// 写
// file_put_contents('data.txt', "xxxxxx\r\n");
// 读
// echo file_get_contents('data.txt');

// 复制，移动，删除文件
// 复制
// echo copy('data.txt', 'aaa.txt');


// 重命名 移动
// rename('aaa.txt', 'abc.txt');  //重命名
// rename('abc.txt','a/abc.txt');   //移动

// 删除文件
// unlink('a/abc.txt');



// 日期函数
// 获取当前时间戳
// echo  time();
// 格式化时间戳
// echo date('Y-m-d H:i:s',time()-3600);

// exit;
// 文件的创建时间 返回的是时间戳
$t = filectime('data.txt');

echo date('Y/m/d H:i:s',$t);
// 文件的修改时间 返回的是时间戳
$t = filemtime('data.txt');

echo date('Y/m/d H:i:s',$t);







 ?>