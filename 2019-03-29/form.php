<?php
include ('../include/function.php');
header('content-type:text/html; charset=utf-8');

h();
// pre($_POST);
if($_POST){
    if(!isset($_POST['username']) || empty($_POST['username'])){
        alert('请填写用户名');
    }
    if(!isset($_POST['password']) || empty($_POST['password'])){
        alert('请填写用密码');
    }
    $username = trim($_POST['username']);
    $password = md5(md5($_POST['password']));
    $sex = $_POST['sex'];
    $time = time();
    $content = $username.'->'.$password.'->'.$sex.'->'.$time."\r\n";

    $filename = 'datd.txt';
    $fh = fopen($filename,'a');
    $status = fwrite($fh ,$content);
    fclose($fh);
    if($status){
        alert('添加成功');//,'userlist.php');
    }else{
        alert('添加失败！！');
    }

}











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
    <form action="" method="post">
        用户名：<input type="text" name="username" value=""><br>
        密&emsp;码：<input type="password" name="password" value=""><br>
        性&emsp;别:
        <input type="radio" name="sex" checked="checked" value="1" id="man">
        <label for="man">男</label>
        <input type="radio" name="sex" value="0" id="man">
        <label for="man">女</label>
        <input type="submit"  name="" value="提&nbsp;交">
    </form>
</body>
</html>












