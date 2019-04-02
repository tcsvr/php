<?php 
header('content-type:text/html; charset=utf-8');

include('include/function.php');

if($_POST){
	// 写的代码是提交后才执行的
	// 1  先验证数据的真实性（暂时只能验证是否为空，和长度）
	if(!isset($_POST['username']) || empty($_POST['username'])){
		alert('请填写用户名');
	}
	if(!isset($_POST['content']) || empty($_POST['content'])){
		alert('请填写留言');
	}

	// 2  提交后我才获取数据
	$username = trim($_POST['username']);
	$content = $_POST['content'];
	$img = upload('upload');
	$time = time();  //时间戳
	$info = $username.'||'.$content.'||'.$img.'||'.$time."\r\n";
	
	// 3  如果是注册的话，接下来就是把数据存到数据库
	$filename = "data.txt"; //当作数据库

	$fh = fopen($filename, 'a');  //打开
	$status = fwrite($fh, $info); //写文件
	fclose($fh); //关闭资源

	if($status){
		alert('添加成功','index.php');
	}else{
		alert('添加失败！！！');
	}

}

// 读文件的代码是提交前就执行
$filename = "data.txt";
$farr = file($filename);

$con = array();
foreach($farr as $v){
	$con[] = explode('||', $v);  //把字符串转换成数组
}



include('view/index.html');  //视图 模板  静态页面

 ?>
