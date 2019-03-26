<?php
header('content-type:text/html; charset=utf-8');

// $aa = 1;
// function aaa(){
//     global $aa;//全局声明
//     $aa = 2;
// }
// aaa();
// echo $aa;


// function sta(){
//     static $a = 1;//记录状态
//     $a++;
//     echo $a;
// }
// sta();
// sta();
// sta();

// $a = 1;
// function ex(&$b){//& = 引用 ；只为了执行；
//     $b+=2;
// }
// ex($a);
// echo $a;


// function sum($a,$b=0){//函数体 参数
//     echo $a+$b;
// }
// sum(5,6);


$a = 20000;
$b = 1000;
re($a,$b);
function re($a,$b){
    static $con = 1;
    $new = $a - $b;
    echo "我第{$con}个月还{$b},还剩{$new}<br>";
    if ($new>0){
        $con++;
        re($new,$b);
    }else{
        exit;
    }
}













exit;




function ret(){
    return 123;
}
echo ret();

?>
