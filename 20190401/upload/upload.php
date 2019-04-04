<?php 
header('content-type:text/html; charset=utf-8');

include('function.php');




// 文件上传的信息不在$_POST里面，在$_FILES里面。所以我才打印$_FILES
// print_r($_FILES);

echo "<hr>";

// 文件上传的代码是提交后才执行的，所以要先判断是否为提交动作
if($_POST){
	// echo '已提交';
	// pre($_FILES);
	// 0  先判断是否是上传动作

	// 上传失败
	// 判断文件上传情况：
	// 1  错误信息 上传失败返给客户端提示
	$error = $_FILES['upload']['error'];

	if($error!=0){
		if($error==4){
			alert('请选择上传的文件');
		}else{
			alert('上传失败，请重新上传');
		}
	}

	// 2  文件类型 判断允许上传文件的类型。举例上传图片（jpg,gif,png,jpeg）
	$filename = $_FILES['upload']['name'];
	$ext = substr(strrchr($filename, '.'),1);
	$extArr = array('jpg','jpeg','gif','png');
	if(!in_array($ext,$extArr)){
		alert("您上传的文件类型错误，请上传jpg、jpeg、png、gif");
	}
	
	// 3  文件大小 灵活限制上传文件大小
	$size = 1024*1024;
	$fsize = $_FILES['upload']['size'];
	if($fsize>$size){
		alert("文件过大，不能超过2M");
	}
	
	// 上传成功
	// 把临时的文件存下来（文件的路径，文件的名称，文件的扩展名）
	$childPath = date('Y/m/d/',time());
	$path = 'uploads/'.$childPath;

	if(!file_exists($path)){
		mkdir($path,0777,true);
	}
	
	$fname = time().rand(10000,99999);

	$tmp = $_FILES['upload']['tmp_name'];
	
	copy($tmp,$path.$fname.'.'.$ext);
	// move_uploaded_file($tmp,$path.$fname.'.'.$ext);
}






















 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件上传</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<!-- 这一个隐藏域，没有任何意义，只是带提交的状态 -->
		<input type="hidden" name="hid" value="123">
		<!-- 下一个隐藏域就是来控制上传文件的大小的作用 -->
		<!-- <input type="hidden" name="MAX_FILE_SIZE" value="10"> -->
		上传图片：
		<input type="file" name="upload" id=""><br>

		<input type="submit" value="提交">
	</form>
</body>
</html>