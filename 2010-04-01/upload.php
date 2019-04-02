<?php 
header('content-type:text/html; charset=utf-8');
include('../include/function.php');
{ if($_POST){
    pre($_FILES);
}

$fl = $_FILES['upload']['name'];
$se = substr(strrchr($fl,'.'),'1');
$set = array('png','gif','jpg','jpeg');
if(!in_array($se,$set)){
    alert('文件格式不正确，请使用 jpg png,gif,jpeg');
}

$size = 402400;
$fz = $_FILES['upload']['size'];
if($fz>$size){
    alert("文件大小不能超过2M");
}

$er = $_FILES['upload']['error'];
if($er!=0){
    if($er==4){
        alert('请选择上传文件');
    }else{
        alert('请重新上传文件');
    }
}
echo $se;

$tmp = $_FILES['upload']['tmp_name'];
$fm = time().rand(10000,99999);
$chid = date('Y/m/d/',time());
$spth = 'images/'.$chid;
if(!file_exists($spth)){
    mkdir($spth,0777,true);
}
copy($tmp,$spth.$fm.'.'.$se);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>文件上传</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="hid" value="123"><!--带提交状态-->
        <!-- <input type="hidden" name="MAX_FILE_SIZE" value="3538">控制上传文件大小 -->
        <input type="file" placeholder="" id="" name="upload"><br><br>
        <input type="submit" value="提交" name="dosubmit" class="submit btn btn-info">
    </form>
</body>
</html>