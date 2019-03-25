<?php 
header('content-type:text/html; charset=utf-8');


// 1加到10的过程和结果 1+2+3+4+5+6+7+8+9+10=55
// 结果只能用叠加
$sum = 0;
$max = 10;
$box = '';
for($i=1; $i<=$max; $i++){
	// 过程
	if($i<$max){
		// $box = $box . $i.'+';
		$box .= $i.'+';
	}else{
		$box .= $i.'=';
	}

	// 结果
	$sum = $sum+$i;
	// $sum += $i;
}

echo $box.$sum;


// 循环  遍历  迭代



echo '<hr>';


function abc(){
	// 124678910 没有3 5
	for($i=1; $i<=10; $i++){
		/*if($i==3 || $i==5){
			continue;
		}*/
		if($i!=3 && $i!=5){
			echo $i;
		}
	}
}
abc();

abc();















echo '<hr>';

// 星星塔
$num = 50;
for($a=1; $a<=$num; $a++){
	for($b=$num-1; $b>=$a; $b--){
		echo '&nbsp;';
	}
	for($i=1; $i<=$a*2-1; $i++){
		/*if($i%2==1){
			echo '*';
		}else{
			echo '&nbsp;';
		}*/
		if($i>1 && $i<$a*2-1){
			echo '&nbsp;';
		}else{
			echo '*';
		}
	}
	echo '<br>';
}













// exit;



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<ul id="ul">
		<li>3234234</li>
		<li>3234234</li>
		<li>3234234</li>
		<li>3234234</li>
		<li>3234234</li>
		<li>3234234</li>
		<li>3234234</li>
		<li>3234234</li>
		<li>3234234</li>
		<li>3234234</li>
		<li>3234234</li>
		<li>3234234</li>
		<li>3234234</li>
		<li>3234234</li>
		<li>3234234</li>
		<li>3234234</li>
		<li>3234234</li>
		<li>3234234</li>
		<li>3234234</li>
		<li>3234234</li>
		<li>3234234</li>
		<li>3234234</li>
		<li>3234234</li>
	</ul>
</body>
</html>
<script>
	var ul = document.getElementById('ul');
	var li = ul.getElementsByTagName('li');

	// alert(li.length);
	for(var i=0; i<li.length; i++){
		if(i%2==0){
			li[i].style.background = 'red';
		}else{
			li[i].style.background = 'blue';
		}
		
	}
	
	


	// document.write('<hr>');

	var a = 1;

	function aa(){
		a = 2;

	}

	aa();

	// alert(a);



	// window.location.href = 'http://www.baidu.com';
	// alert(window.location.href);


</script>