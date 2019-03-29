<?php
header('content-type:text/html; charset=utf-8');

$filename = 'date.txt';



$fh = fopen($filename,'r');

// var_dump($fh);

$fs = filesize('date.txt');
// echo $fs;
$txt = fread($fh,$fs);
echo iconv('gbk','utf-8',$txt);//处理乱码;
// echo fgets($fh);

// while($con = fgets($fh)){
//     echo $con.'<br>';
// }

// echo fwrite($fh,'absc');
// echo fread($fh,4);
// while($con = fgets($fh)){
//     echo $con.'<br>';
// }
// fclose($fh);
// pre(file($filename));










































































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