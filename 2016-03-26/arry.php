<?php
header('content-type:text/html; charset=utf-8');

$arr = array('a'=>'red','b'=>'bule','c'=>'green');//关联数组
$arr1 = array('red','bule','green');//索引数组
//print_r($arr);

//echo $arr['a'];
//print_r($arr1);

//echo $arr1[0];


// pre($arr1);

$arr3 =array();
$arr3['a']=1;
$arr3['b']=1;
$fruits = array("orange","apple","banana");
$language = array("en"=>"english","cn"=>"china");
//echo $fruits[0];

//echo $language["en"];

//print_r($language);

$num = range (1,100);
//print_r($num);
// pre($num);

$letter = range('a','Z');
// var_dump(in_array('a',$letter));
//print_r($letter);
echo '<ul>';
// for($i=0;$i<count($letter);$i++){
//     echo '<li>';
//         echo $letter[$i];
//     echo '</li>';
// }
//数组遍历
// foreach($letter as $k=>$v){
//     echo '<li>';
        // echo $k.'='.$v;
//     echo '</li>';
// }
// echo '</ul>';

$arr8 = array (
    array('id'=>1,'name'=>'王飞','age'=>'18','sex'=>'男'),
    array('id'=>2,'name'=>'曾雨','age'=>'19','sex'=>'女'),
    array('id'=>3,'name'=>'张辽','age'=>'17','sex'=>'男'),
    array('id'=>4,'name'=>'周芸','age'=>'20','sex'=>'女'),
);
foreach($arr8 as $va){
    foreach($va as $v){
        echo $v.'&nbsp;';
    }echo '<br>';
}
// pre($arr8);
// pre($letter);
//print_r($fruits);

// unset($fruits[1]);

//print_r($fruits);
// unset($fruits);

$today = getdate();
//print_r($today);

$week = array("a"=>"星期一","b"=>"星期二","c"=>"星期三");
//echo count($week);

//echo in_array('apple', $fruits);
// var_dump(in_array('apple', $fruits));

$week = array("星期一","星期二","星期三");
$count = count($week);
for($i=0;$i<$count;$i++){
    //echo $week[$i];

}


$arr4 = array(
    'a'=>'bule',
    'b'=>'red',
    'c'=>'yellow',
    'd'=>'green'
);
// sort($arr4);
//  rsort($arr4);
// ksort($arr4);
// krsort($arr4);
// pre($arr4);

$str = '1,2,3,4,5,6';
echo $str;
echo '<br>';
$arr = explode(',',$str);
// pre($arr);

$st = implode('*',$arr);

















function pre($con){
    echo '<pre>';
    print_r($con);
    echo '</pre>';
    exit;
}





?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>学员名单</title>
    <style>
        td{
            text-align:center;
        }
        h1{
            color:red;
        }
    </style>
</head>
<body>
    <h1 align="center" >高级分离术</h1>
    <table border="1" align="center" width="50%">
        <tr>
            <td>编号</td>
            <td>名字</td>
            <td>年龄</td>
            <td>sex</td>
        </tr>
        <?php foreach($arr8 as $v){ ?>
        <tr>
            <td><?php echo $v['id']; ?></td>
            <td><?php echo $v['name']; ?></td>
            <td><?php echo $v['age']; ?></td>
            <td><?php echo $v['sex']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html> -->