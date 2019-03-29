<?php 
header('content-type:text/html; charset=utf-8');
// 目录的操作

// 打开目录
/*$dh = opendir('.');

// 操作目录
// echo readdir($dh).'<br>';
while($con = readdir($dh)){
	echo $con.'<br>';
}

// 关闭目录
closedir($dh);*/

// 把目录读到数组中
// $darr = scandir('.');
// print_r($darr);


// 删除目录
// echo rmdir('b');

// 创建目录,创建多层目录加后面的两个参数（0777,true）
// mkdir('b/c/d/e/f/d/ds/s/s',0777,true);





// 返回路径中的文件名部份，当指定了可选参数suffix会将这部分内容去掉;
$path = "c://a/b/d/d/e/index.php";
// echo basename($path);

// 返回路径中的目录部份;
// echo dirname($path);

// 返回一个关联数组，其中包括路径中的三个部份：目录名，文件名，扩
// 展名
// $pathArr = pathinfo($path);

// print_r($pathArr);

// echo 0;










// exit;
// $bool = is_dir('.'); //判断是否是目录
// var_dump($bool);
// exit;

// echo floor(5.2222222*100)/100;
// exit;
//获取文件大小(单位换算)
// 1KB = 1024B 
// 1MB = 1024KB
// 1GB = 1024MB
// echo getfilesize('demo.zip');
function getfilesize($filename){
	$fs = filesize($filename);
	if($fs>1024 && $fs<pow(1024,2)){
		return (floor(($fs/1024)*100)/100).' KB';
	}else if($fs>pow(1024,2) && $fs<pow(1024,3)){
		return (floor(($fs/pow(1024,2))*100)/100).' MB';
	}else if($fs>pow(1024,3) && $fs<pow(1024,4)){
		return (floor(($fs/pow(1024,3))*100)/100).' GB';
	}else{
		return $fs.' B';
	}
}




// 获取文件扩展名
$str = "a/b/c/d/index.jpg";

echo getextention($str);

function getextention($str){
	$ext = substr(strrchr($str, '.'),1);
	switch($ext){
		case 'html': return 'html 文件';
		break;
		case 'css': return 'css 文件';
		break;
		case 'js': return 'js 文件';
		break;
		case 'php': return 'php 文件';
		break;
		case 'jpg': return 'jpg 图片';
		break;
		case 'jpeg': return 'jpeg 图片';
		break;
		case 'png': return 'png 图片';
		break;
		case 'gif': return 'gif 图片';
		break;
		default : return '未知类型';
	}
}




exit;









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

<?php 

error_reporting(E_ALL & ~E_NOTICE);  //过滤掉NOTICE级别提示

$url = $_SERVER['REQUEST_URI'];	     //相对地址获取
$path = './';			     // 当前地址

if (isset($_GET['dir'])) {
    $path = $path . '/' . $_GET['dir']; 
}else{
    $url = $url . '?dir=.';
}

$list = array();

if(is_dir($path)) {
    if($dh = opendir($path)) {   //open
        while (($file = readdir($dh)) !== false) {
            $list[] = $file;
        }
        closedir($dh);		//close
    }else{
        echo "打开出错";
        exit;
    }
}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>

<style>
    td {
        border: 1px solid gray;
    }
</style>
</head>
<body>
    <h1>文件管理系统（demo）</h1>
    <table>
        <tr><td>序号</td>
            <td>名称</td>
            <td>操作</td>
        </tr>
        <?php  foreach ($list as $k => $v) {
    
            echo '<tr>';
            echo '<td>',$k,'</td>';
            echo '<td>',$v,'</td>';
            echo '<td>';
            if(is_dir($path . './' . $v)){   //下一级目录的判断
                echo '<a href=" ',$url . '/',$v,'">浏览</a>';
            }else{
                echo '<a href="./',$_GET['dir'],'/',$v,'">查看</a>';
                
            }
            echo '</td>';       
            echo '</tr>';
    }
        ?>
    </table >
</body>
</html>
