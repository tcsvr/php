<?php
header('content-type:text/html; charset=utf-8');

// $dh =opendir('.');
// while($con=readdir($dh)){
//     echo $con.'<br>';
// }
// closedir($dh);

$dir = scandir('.');
pre($dir);

// echo rmdir('b');


// mkdir('b/c/a/ssa/asd/asd/asd/das/das/daad/da/s',0777,true);




















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
