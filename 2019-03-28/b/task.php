<?php
header('content-type:text/html; charset=utf-8');
include '../include/function.php';

$me = 'jl.txt';
$m = fopen($me,'a+');
fwrite($m,'0');
$fs = filesize($me);
echo $fs;
fclose($m);








h();





$darr = scandir('.');
$do = getextention($darr);
$sz = getfilesize('.');
pre ($sz);
pre ($do);
pre($darr);















?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件系统</title>
</head>
<body>

	<table border="1" width="80%" align="center">
		<tr>
			<th>文件名</th>
			<th>文件类型</th>
			<th>文件大小</th>
			<th>创建时间</th>
			<th>最后修改时间</th>
		</tr>
		<?php foreach($darr as $v){ ?>
		<?php //if(is_dir($v)){ ?>
		<?php if(is_dir('./a/'.$v)){ ?>
		<tr>
			<td><a href="<?php echo $v; ?>"><?php echo $v; ?></a></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<?php }else{ ?>
		<tr>
			<td><?php echo $v; ?></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<?php } } ?>
	</table>
</body>
</html>