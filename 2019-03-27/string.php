<?php
header('content-type:text/html; charset=utf-8');
$val = "world";
// echo "hello", $val;
// h();
// print ("hello $val");
// h();
// print "hello world";
// h();
/*
$str = "3.2 test";
	 printf("整数：%b", $str);//装换二进制
	 printf("整数：%d", $str);//装换字整数
	 printf("浮点数：%.3f", $str);//装换浮点数
     printf("字符串：%s", $str);//原字符串输出
h();    
// exit;
    $str = "123.1 test";
	$val = sprintf("%.2f", $str);
    echo $val;
    h();
    $html = "
        <ul>
            <li>%s</li>
            <li>%s</li>
            <li>%s</li>
        </ul>
    ";
    echo sprintf(
        $html,
        '我的',
        '世界',
        '之旅'
    );
    
h();
    echo strpos("Hello world!"," ");
h();
    echo stripos("Hello world!","l",5);//忽略大小写
h();

$str = "test@163.com";
	  $email = str_replace("@", "(at)", $str,$count);
      echo $email;
    //   eco($count);
h();


// echo substr("Hello world", 6);
// h();
// echo substr("hello world", 6, 2);
// h();

      echo strstr("Hello world!","e"); 
      h();
      echo strstr("Hello world!","e",3); 
      h();




    
      $str = "       Hello World! ";
      $a = 'a';
      $b = 'b';
      echo $a;
      echo ltrim($str); 
      echo $b;
      h();
      echo $a;
      echo rtrim($str); 
      echo $b;
      h();
      echo $a;
      echo trim($str); 
      echo $b;
      h();




      $passwd = "123456";
	if(strlen($passwd) < 8){
		echo "密码不能少于8位";
    }
    h();
    echo $passwd[2];
    h();



    $url = "HTTP://WWW.WENGDO.COM/ ";
      echo strtolower($url);
      h();
      $str = "中文 hello world";
	  echo strtoupper($str);
h();



$str = "hello world";
	  echo strrev($str);
h();



$str = "hello
	    world";
	echo nl2br($str);
*/
$str = "<h1><a href=''>red</a></h1>";
echo strip_tags($str,'<h1>');//保留<h1>;






































    function eco($con){
        echo $con.'<br>';
    }

    function h(){
        echo '<hr>';
    }
    function b(){
        echo '<br>';
    }

     function pre($con){
        echo '<pre>';
        print_r($con);
        echo '</pre>';
    }
