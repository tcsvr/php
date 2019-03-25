<?php 
header('content-type:text/html; charset=utf-8');
$aa = 1;
// 函数  封装功能模块的一组语句
	// 函数分为内置函数和自定义函数
	// 自定义函数
	// 递归函数   自己调用自己
	// 函数的好处  
		// 可以复用（重复调用）
		// 使代码结构更加清晰
	// 函数的定义
		// function fname(参数1，参数2){ 函数体 }
		// 函数有参数，必须要带参数
		// 参数的默认值，都在后面
		/*function sum($a,$b=0){
			echo $a+$b;
		}
		sum(5,6);
		// sum(123,345);
		exit;*/




	// 变量的作用域  变量的生命
		// 全局变量   函数外面的变量
		// 局部变量   函数里面的变量，函数里面的变量也能变成全局变量
		/*function aaa(){
			// 函数里面的变量也能变成全局变量要先声明全局变量global
			global $aa;
			$aa = 2;
		}

		aaa();

		echo $aa;
		exit;*/

		// 静态变量  static 可以记录状态

		/*function sta(){
			static $a = 1;
			$a++;
			echo $a;
		}

		sta();
		sta();
		sta();
		exit;*/

	// 函数体里面的3种情况
		// 1  直接输出；
		/*function a1(){
			echo 123213;
		}*/

		// a1();
		// 2  只为了执行；
		/*$a = 1;
		function ex(&$b){
			$b++;
		}

		ex($a);

		echo $a;
		exit;*/


		// 3  拿到返回值  return  返回   谁调用就返给谁
			// return 只能用一次
			// return 后面的代码不再执行
		/*function ret(){
			echo 11111;
			return;
			echo 22222;
		}*/
		

		// ret();

		// 参数分为必填参 和 可选参

	// 递归函数 自己调用自己  （还款系统）
		// 递归函数要注意：要有限制条件
	// $a  欠总金额
	// $b  每月还款金额
	$a = 20000;
	$b = 1000;

	repay($a,$b);

	function repay($a,$b){
		static $count = 1;
		$new = $a-$b;
		echo "我第{$count}个月还{$b}，还剩{$new}<br>";
		if($new>0){
			$count++;
			repay($new,$b);
		}else{
			exit;
		}
	}







 ?>