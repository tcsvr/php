<?php 
// 是get方式提交，就用$_GET接收
	// "/form.php?username=aaaaa&password=111111";
	// "?a=1&b=2&c=3";
// 是post方式提交，就用$_POST接收
print_r($_GET)
// print_r($_POST)



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>表单</title>
</head>
<body>
	<!-- get方式 -->
	<a href="?a=1&b=2&c=33333">get提交方式</a>
	<form action="" method="post">
		用户名：<input type="text" name="username"><br>
		密码：<input type="password" name="password" value=""><br>
		<input type="submit" value="提交">
	</form>
</body>
</html>