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
    array('iPhone 6S','4英寸','土豪金','1499元'),
    array('小米note','5.7英寸','银色','4500元'),
    array('坚果','5.5英寸','黑色','999元'),
    array('乐视1pro','5.5英寸','银色','1499元')
);

foreach($phone as $av){
    foreach($av as $v){
        echo "<span class=span>$v</span>";
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
// pre($t1);
// echo $t1['id'][0];
// echo $t1['id'][1];
// echo $t1['id'][2];
// echo $t1['id'][3];

// echo $t1['name'][0];
// echo $t1['name'][1];
// echo $t1['name'][2];
// echo $t1['name'][3];

// echo $t1['price'][0];
// echo $t1['price'][1];
// echo $t1['price'][2];
// echo $t1['price'][3];
foreach($t1 as $a=>$b){
    // pre($a);
    $str = array($a);

    // pre($str);
}

for($i=0;$i < count($t1['id']);$i++){
    $t2= array(
        'id'.$i=>array($t1['id'][$i],$t1['name'][$i],$t1['price'][$i],)
    );
    pre($t2);
}
// echo '<hr>'  ;
// foreach($t1 as $i=>$v){
//     // pre($i);
//     foreach($v as $a=>$b){
//         // pre($a);
//         // pre($b);
//         $str = "$i"."$a".',';
//         $arr = explode(',',$str);
//         pre($arr);

//         pre($str);
//         $t2 = array(
//             $i[0].$a=>array($a,$b,$v)
//         );
//     }

    // for($i=0;$i<count($t1['id']);$i++){
    //     $t2= array(
    //         'id'.$i=>array($t1['id'][$i],$t1['name'][$i],$t1['price'][$i],)
    //     );
    // }
      
// }
// pre($t2);
echo '<hr>';
$arr = array(225,220,43,155,562,70,55,150);
// echo $arr[0];
// echo $arr[1];
// echo $arr[2];
// echo $arr[3];
// echo $arr[4];
// echo $arr[5];
// echo $arr[6];
// echo $arr[7];
$box = array();
// foreach ($arr as $k=>$v){
    for($i = 0;$i < count($arr);$i++){
        for($j = 0;$j<count($arr);$j++){
            if($arr[$i]>$arr[$j]){
                $box = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $box;
            }
        }
    }                
pre($arr);
/*
    echo '<hr>';
    if($arr[0]<$arr[1]){
        $box = $arr[0];
        $arr[0] = $arr[1];
        $arr[1] = $box;
        pre($arr);
    }
    if($arr[1]<$arr[2]){
        $box = $arr[1];
        $arr[1] = $arr[2];
        $arr[2] = $box;
        pre($arr);
    }
    if($arr[2]<$arr[3]){
        $box = $arr[2];
        $arr[2] = $arr[3];
        $arr[3] = $box;
        pre($arr);
    }
    if($arr[3]<$arr[4]){
        $box = $arr[3];
        $arr[3] = $arr[4];
        $arr[4] = $box;
        pre($arr);
    }
    if($arr[4]<$arr[5]){
        $box = $arr[4];
        $arr[4] = $arr[5];
        $arr[5] = $box;
        pre($arr);
    }
    if($arr[5]<$arr[6]){
        $box = $arr[5];
        $arr[5] = $arr[6];
        $arr[6] = $box;
        pre($arr);
    }
    if($arr[6]<$arr[7]){
        $box = $arr[6];
        $arr[6] = $arr[7];
        $arr[7] = $box;
        pre($arr);
    }
    if($arr[0]<$arr[1]){
        $box = $arr[0];
        $arr[0] = $arr[1];
        $arr[1] = $box;
        pre($arr);
    }
    if($arr[1]<$arr[2]){
        $box = $arr[1];
        $arr[1] = $arr[2];
        $arr[2] = $box;
        pre($arr);
    }
    if($arr[2]<$arr[3]){
        $box = $arr[2];
        $arr[2] = $arr[3];
        $arr[3] = $box;
        pre($arr);
    }
    if($arr[3]<$arr[4]){
        $box = $arr[3];
        $arr[3] = $arr[4];
        $arr[4] = $box;
        pre($arr);
    }
    if($arr[4]<$arr[5]){
        $box = $arr[4];
        $arr[4] = $arr[5];
        $arr[5] = $box;
        pre($arr);
    }
    if($arr[5]<$arr[6]){
        $box = $arr[5];
        $arr[5] = $arr[6];
        $arr[6] = $box;
        pre($arr);
    }
    if($arr[0]<$arr[1]){
        $box = $arr[0];
        $arr[0] = $arr[1];
        $arr[1] = $box;
        pre($arr);
    }
    if($arr[1]<$arr[2]){
        $box = $arr[1];
        $arr[1] = $arr[2];
        $arr[2] = $box;
        pre($arr);
    }
    if($arr[2]<$arr[3]){
        $box = $arr[2];
        $arr[2] = $arr[3];
        $arr[3] = $box;
        pre($arr);
    }
    if($arr[3]<$arr[4]){
        $box = $arr[3];
        $arr[3] = $arr[4];
        $arr[4] = $box;
        pre($arr);
    }
    if($arr[4]<$arr[5]){
        $box = $arr[4];
        $arr[4] = $arr[5];
        $arr[5] = $box;
        pre($arr);
    }
    if($arr[0]<$arr[1]){
        $box = $arr[0];
        $arr[0] = $arr[1];
        $arr[1] = $box;
        pre($arr);
    }
    if($arr[1]<$arr[2]){
        $box = $arr[1];
        $arr[1] = $arr[2];
        $arr[2] = $box;
        pre($arr);
    }
    if($arr[2]<$arr[3]){
        $box = $arr[2];
        $arr[2] = $arr[3];
        $arr[3] = $box;
        pre($arr);
    }
    if($arr[3]<$arr[4]){
        $box = $arr[3];
        $arr[3] = $arr[4];
        $arr[4] = $box;
        pre($arr);
    }
    if($arr[0]<$arr[1]){
        $box = $arr[0];
        $arr[0] = $arr[1];
        $arr[1] = $box;
        pre($arr);
    }
    if($arr[1]<$arr[2]){
        $box = $arr[1];
        $arr[1] = $arr[2];
        $arr[2] = $box;
        pre($arr);
    }
    if($arr[2]<$arr[3]){
        $box = $arr[2];
        $arr[2] = $arr[3];
        $arr[3] = $box;
        pre($arr);
    }
    if($arr[0]<$arr[1]){
        $box = $arr[0];
        $arr[0] = $arr[1];
        $arr[1] = $box;
        pre($arr);
    }
    if($arr[1]<$arr[2]){
        $box = $arr[1];
        $arr[1] = $arr[2];
        $arr[2] = $box;
        pre($arr);
    }
    if($arr[0]<$arr[1]){
        $box = $arr[0];
        $arr[0] = $arr[1];
        $arr[1] = $box;
        pre($arr);
    }
*/
echo '<hr>';

$list = array(
	'市场部'=>array(
		array('1','高某','市场部经理','5000'),
		array('2','罗某','职员','3000'),
		array('3','周某','职员','2400')
	),
	'产品部'=>array(
		array('1','高某','产品部经理','6000'),
		array('2','罗某','职员','4000'),
		array('3','周某','职员','2300')
	),
	'财务部'=>array(
		array('1','高某','财务部经理','6000'),
		array('2','罗某','职员','4000'),
		array('3','周某','职员','2300')
	),
	'咨询部'=>array(
		array('1','罗某','咨询部主管','8000'),
		array('2','谭某','职员','9000'),
		array('3','陈某','职员','8300'),
		array('3','陈某','职员','8300'),
		array('3','陈某','职员','8300')
	),
);
// pre($list);



















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
        .span{
            display: inline-block;
            width:11em;
            border:.1em solid red;
            margin:.1em;
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

       <!-- <h4>品牌列表：</h4>

    <table border="1" align="center" width="50%">
        
        <?php foreach($list as $k=>$v){ ?>
            <tr><td><?php  echo $k['市场部'];  ?></td></tr>
            <tr><td><?php  echo $k['产品部'];  ?></td></tr>
            <tr><td><?php  echo $k['财务部'];  ?></td></tr>
            <tr><td><?php  echo $k['咨询部'];  ?></td></tr>
        <?php } ?>
    </table> -->
    <h4>工资表：</h4>

    <table border="1" align="center" width="50%">
        
        <?php foreach($list as $k=>$v){ ?>
            <tr>
                <td colspan="<?php  echo count($list); ?>">
                    <?php  echo $k.'10月份工资';  ?>
                </td>
                    <?php foreach($v as $k1=>$v1){ ?>
                        <tr>
                            <?php foreach($v1 as $k2=>$v2){ ?>
                            <td>
                                <?php echo $v2; ?>
                            </td>
                            <?php }?>
                        </tr>
                    <?php }?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>