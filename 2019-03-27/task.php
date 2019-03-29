<?php
header('content-type:text/html; charset=utf-8');
//1
$a = 'test.abc.jpg';
echo substr(strrchr($a,'.'),'1');
h();


$a = 'test.abc.jpg';
    echo $a = strrev(strstr(strrev($a),".","1"));
h();


$a = 'test.abc.jpg';
str_replace('.','.',$a,$con);

echo substr(strstr(substr(strstr($a,'.'),'1'),'.'),'1');
h();


$a = 'test.abc.jpg';
$aa = explode('.',$a);
echo end($aa);
h();
h();


//2
$a = 'adfjdlks';
echo strrev($a);
h();



$a = 'adfjdlks';
$b = '';
for($i=strlen($a)-1;$i>=0;$i--){
    $b.=$a[$i];
} 
// foreach($b as $v){
    echo $b;
// }
h();
h();


//3
$a = 'adfjdlksa';
for($i=0;$i<strlen($a);$i++){
    if($i%2==0){
         echo $a[$i];
    }
}
h();
h();


//4
$a = 'aFAasdKEa';
for($i=0;$i<strlen($a);$i++){
    if($a[$i]==strtolower($a[$i])){
        echo strtoupper($a[$i]);
    }else{
        echo strtolower($a[$i]);
    }

}

h();
// $a = 'aFAasdKEa';
// if(ord($a)){

// }

// if($a[0]=='a'){
//     echo strtoupper($a[0]);
// }else{
//     echo strtolower($a[0]);
// }
// 使用 RFC 2045 语义格式化 $data
//  $new_string  =  chunk_split ( base64_encode ( $data ));



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
