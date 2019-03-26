<?php
header('content-type:text/html; charset=utf-8');

    $arr1 = array("A", "B", "C");
    $arr2 = array("X", "Y", "Z");  
    $arr3 = array();
    for($i=count($arr1)+count($arr2)-1;$i>=0;$i--){
        if($i>=count($arr1)){
            $arr3[$i]=$arr2[$i-count($arr1)];
        }else{
            $arr3[$i]=$arr1[$i];
        }
    }
    // $arr3[0] = $arr2[2];
    // $arr3[1] = $arr2[1];
    // $arr3[2] = $arr2[0];
    // $arr3[3] = $arr1[2];
    // $arr3[4] = $arr1[1];
    // $arr3[5] = $arr1[0];
pre($arr3);
echo '<hr>'   ;
$arr1 = array('A','B','C','D','E','F');  
$arr2 = array();
    for($i=count($arr1)-1;$i>=0;$i--){
        $arr2[$i]=$arr1[$i];
    }
pre($arr2);
echo '<hr>'   ;
$phone = array(
    array('品牌列表:'),
    array('名称(name)','手机屏幕大小(size)','颜色(color)','价格(price)'),
    array('iPhone 6S','4英寸','颜色(color)','4500元'),
    array('小米note','5.7英寸','银色','4500元'),
    array('坚果','5.5英寸','黑色','999元'),
    array('乐视1pro','5.5英寸','银色','1499元')
);

foreach($phone as $av){
    foreach($av as $v){
        echo $v.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;';
    }echo '<br>';
}
// pre($phone);
echo '<hr>'   ;
$pho = array(
    array('name'=>'名称','size'=>' 手机屏幕大小','color'=>'颜色','price'=>'价格'),
    array('name'=>'iPhone 6S','size'=>' 4英寸','color'=>'土豪金','price'=>'4500元'),
    array('name'=>'小米note','size'=>' 5.7英寸','color'=>'银色','price'=>'1999元'),
    array('name'=>'坚果','size'=>' 5.5英寸','color'=>'黑色','price'=>'999元'),
    array('name'=>'乐视1pro','size'=>' 5.5英寸','color'=>'银色','price'=>'1499元'),
);
echo '<hr>'   ;
$t1= array(
	'id' => array(1,2,3,4),
	'name' => array('小米','魅族','苹果','锤子'),
	'price' => array('1999','1799','3999','3000')
);
$t2 = array();
$str = 1;
pre($t1);
echo '<hr>'   ;
$t1 = explode(',',$str);
echo $str;

// foreach($t1 as $kk=>$vv){
//     foreach($vv as $kk1=>$vv1){
//         // echo $vv1;
//         // echo $kk[0][];
//         // $t2= array("$kk1"=>"$vv1");
//         // pre($vv);

//         // pre($kk1);
//         // pre($vv1);
//     }
// }
pre($t2);



/*$test2= array(
	'id0' => array(1,'小米','1999'),
	'id1' => array(2,'魅族','1799'),
	'id2' => array(3,'苹果','3999'),
	'id3' => array(4,'锤子','3000')
);*/























    function pre($con){
        echo '<pre>';
        print_r($con);
        echo '</pre>';
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td{
            text-align:center;
        }
        h4{
            position: relative;
            left:25%;
            margin:0.5em 0;
        }
    </style>
</head>
<body>
    <h4>品牌列表：</h4>
    <table border="1" align="center" width="50%">
        
        <?php foreach($pho as $v){ ?>
        <tr>
            <td><?php  echo $v['name'];  ?></td>
            <td><?php  echo $v['size'];  ?></td>
            <td><?php  echo $v['color'];  ?></td>
            <td><?php  echo $v['price'];  ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>