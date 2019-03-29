<?php 
header('content-type:text/html; charset=utf-8');

// 引入PHP文件的函数有4个
// include();  文件加载失败后报错，后面的代码会接着执行
// require();  文件加载失败后报致命错，后面的代码不会执行
// 上面的功能都一样。只是在加载文件的时候先判断一下以前有没有加载过。有我就不再加载了。没有我才加载。确保是加载一次
// include_once();
// require_once();

// include('include/function1.php');
require('include/function1.php');


// alert('修改成功！');
// a();

echo 123123;







 ?>