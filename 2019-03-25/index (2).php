<?php
header('content-type:text/html; charset=utf-8');
include('include/function.php');
// include();文件加载失败后报错，后面的代码会接着执行
// require();文件加载失败后报致命错，后面的代码不会接着执行

// 上面的功能都一样，只是显示加载文件
// include_once();
// require_once();
// alert('修改成功','http://www.baidu.com');
nine();
star();
tg();
echo '<br>';
sum();
echo '<br>';
comp();
qqt();
chess();



?>