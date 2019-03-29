<?php
header('content-type:text/html; charset=utf-8');
include '../include/function.php';

$filename = 'count.txt';

$count = 1;
if(file_exists($filename) && filesize($filename)>0){
	// 读文件
	/*$fh = fopen($filename, 'r');
	$count = intval(fread($fh, filesize($filename)));
	fclose($fh);*/
	$count = intval(file_get_contents($filename));
}

echo "网站访问记录数：".$count;

$count++;

// 写文件  写新内容 加1的内容
file_put_contents($filename, $count);
/*$fh = fopen($filename, 'w');
fwrite($fh, $count);
fclose($fh);*/






// $me = 'jl.txt';
// $m = fopen($me,'a+');
// fwrite($m,'0');
// $fs = filesize($me);
// echo $fs;
// fclose($m);

h();



$path = empty($_GET) ? '.' : $_GET['path'];

$file = scandir($path);


// $darr = scandir('.');
// $do = getextention('.');
// $sz = getfilesize('.');
// pre ($sz);
// pre ($do);
// pre($darr);



// $url = $_SERVER['REQUEST_URI'];	     //相对地址获取
// echo $url;
// h();
// $path = './';			     // 当前地址

// if (isset($_GET['dir'])) {
//     $path = $path . '/' . $_GET['dir']; 
// }else{
//     $url = $url . '?dir=.';
// }

// $list = array();

// if(is_dir($path)) {
//     if($dh = opendir($path)) {   //open
//         while (($file = readdir($dh)) !== false) {
//             $list[] = $file;
//         }
//         closedir($dh);		//close
//     }else{
//         echo "打开出错";
//         exit;
//     }
// }
// // echo $url.'/'.$v;
// echo $path;



// h();
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
<table border="1" width="80%" align="center">
		<tr>
			<th>文件名</th>
			<th>文件类型</th>
			<th>文件大小</th>
			<th>创建时间</th>
			<th>最后修改时间</th>
		</tr>
		<?php foreach($file as $v){ ?>
		<?php //if(is_dir($v)){ ?>
        <?php 
            if(is_dir($path.'/'.$v)){
            //if(is_dir('./a/'.$v) || is_dir('../'.$v)){ 
        ?>
		<tr>
            <td><a href="
            ?path=<?php echo $path.'/'.$v ?>
            <?php  //echo $url.'/'.$v; ?>
            "><?php echo $v; ?></a></td>
			<td>文件夹</td>
			<td></td>
			<td><?php echo ct($path.'/'.$v);?></td>
			<td><?php echo mt($path.'/'.$v);?></td>
		</tr>
		<?php }else{ ?>
		<tr>
			<td><?php echo $v; ?></td>
			<td><?php echo getextention($path.'/'.$v);?></td>
			<td><?php echo getfilesize($path.'/'.$v);?></td>
			<td><?php echo ct($path.'/'.$v);?></td>
			<td><?php echo mt($path.'/'.$v);?></td>
		</tr>
		<?php } } ?>
	</table>

</body>
</html>

