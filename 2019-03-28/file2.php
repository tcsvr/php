<?php
header('content-type:text/html; charset=utf-8');
file_put_contents('date.txt',"xxxxx\r\nasdasd");
// echo file_get_contents('date.txt');

// echo copy('date.txt','data.txt');

// rename('data.txt','abc');//重命名
// rename('data.txt','a/wo.txt');//移动

// unlink('a/wo.txt');

// echo time();
echo date('Y-m-d H:i:s',time());
h();
$t = filectime('date.txt');
echo date('Y/m/d H:i:s' ,$t);
h();
$t = filemtime('date.txt');
echo date('Y/m/d H:i:s' ,$t);

























function eco($con){
    echo $con.'<br>';
}

function h(){
    echo '<hr>';
}
function b(){
    echo '<br>';
}

 function pre($con){
    echo '<pre>';
    print_r($con);
    echo '</pre>';
}
?>