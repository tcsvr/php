<?php
include ('../include/function.php');
header('content-type:text/html; charset=utf-8');

$filename = "datd.txt";
$farr = file($filename);
// pre($farr);
$con = array();
foreach($farr as $v){
    $con[] = explode('->',$v);
}
// pre($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        
        
            <th>
                用户名
            </th>
            <th>
                密码
            </th>
            <th>
                性别
            </th>
            <th>
                创建时间
            </th>
            <tr>
            <?php foreach($con as $v ){ ?>
            <td>
                <?php echo $v[0]; ?>
            </td>
            <td>
                <?php echo $v[1];?>
            </td>
            <td>
                <?php echo $v[2]==1?'男':'女'; ?>
            </td>
            <td>
                <?php echo  date('Y-m-d H:i:s',$v[3]); ?>
            </td>
        </tr>
            <?php } ?>
    </table>
</body>
</html>