<?php 

if($_POST){
	echo '已提交';
}else{
	echo '没有';
}

echo "<hr>";

print_r($_POST);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>表单处理</title>
</head>
<body>
	<form action="" method="post">
		username:
		<input type="text" name="username" id=""><br>
		password:
		<input type="password" name="password" id=""><br>
		<input type="submit" value="提交">
	</form>
</body>
</html>