<?php 
header('content-type:text/html; charset=utf-8');

// echo 
// print_r()
// var_dump(expression)
// print('awerewrwerewrwerw');




// 格式化字符串
$str1 = "3.3.3abc";

// printf('%b',$str1);  //转换二进制
// printf('%d',$str1); //转换整数
// printf('%.2f',$str1);  //转换成浮点
// printf('%s',$str1);  //原字符串输出
// echo sprintf('%s',$str1);  //原字符串输出


$str2 = 'abc';

// printf('%s',$str2);


// $m = '%s%s%s';
// printf($m,'aaa','bbb','ccc');

$html = "<ul><li>%s</li><li>%s</li></ul>";
// printf($html,'aaaa','bbbb');



// strpos()函数在 haystack 中以区分大小写的方式找到 needle 第一次出现的位置;如果没有找到则返回FALSE;
// $str = 'abcabc';
// var_dump(strpos($str,'a',2));
// var_dump(stripos($str,'A',2));  //加i忽略大小写




// str_replace()函数在subject中以区分大小写的方式搜索 search ，用replace替换找到的所有内容; 如果没有找到search,则subject保持不变;
	// 如果定义了可选参数 count 则只替换subject中count个search

// str_replace('被替换者', '替换者', 目标字符串,[替换的次数]);
// $str = 'abcabcabc';
// echo str_replace('a', '*', $str, $count);  //字符串替换

// echo $count;


// 截取字符串
$str = 'abcdefg';

// echo substr($str, 2);  //cdefg
// echo '<br>';
// echo substr($str, 2, 3);  //cde






// strstr() 函数搜索一个字符串在另一个字符串中的第一次出现。
// 该函数返回字符串的其余部分（从匹配点）。如果未找到所搜索的字符串，则返回
 // false。
$str = 'index.html.txt.php.jpg';

// echo strstr($str,'.');





// 删除字符串
// ltrim();  删除左侧字符串（空白字符）
// rtrim();  删除右侧字符串（空白字符）
// trim();   删除两侧字符串（空白字符）
$a = 'a';
$b = ' b ';
$c = 'c';

// echo $a;
// echo trim($b);
// echo $c;

// $path = "C:/phpStudy/WWW/b1901/20190327";

// echo rtrim($path,'/').'/';

// echo $path;


// 字符串的长度
$str = 'aBcDeFghigK';

// echo strlen($str);
// echo $str[0];

// strtoupper() 将字符串转换为大写字母
// $str = strtoupper($str);
// strtolower() 将字符串转换为小写字母
// echo strtolower($str);


$str = 'ab
cd';
// echo nl2br($str);  //把文本换行转换成HTML的<br>标记

// echo $str;




 
// 6.strip_tags() 删除字符串中HTML XML PHP 标签

// $str = "<h1><a href=''>蓝色的解放路</a></h1>";
// echo strip_tags($str,'<a>');


// $str = "<script>alert(123);</script>";
// echo strip_tags($str);

// echo $str;



// 7. htmlspecialchars() 函数把一些预定义的字符转换为 HTML 实体

$str = "<script>alert(123);</script>";
// echo htmlspecialchars($str);
// echo $str;


// echo md5('123456');  //e10adc3949ba59abbe56e057f20f883e
echo md5(md5(md5('24134324324234234324')));
//e10adc3949ba59abbe56e057f20f883e
//6e90f19fe0fc2daf7e9e22a1cc1c803f





exit;








 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册页</title>
</head>
<body>
	<form action="" method="post">
		username:
		<input type="text" name="" id=""><br>
		<input type="submit" value="注册">
	</form>
</body>
</html>