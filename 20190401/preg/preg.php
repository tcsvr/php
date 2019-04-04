<?php 
header('content-type:text/html; charset=utf-8');
// preg_match(正则模式, 目标字符串, 匹配到的结果, 改变数组形式, 偏移量从哪里开始匹配);


// 正则表达式
// $str = 'abcd';
// $pattern = "/a/";  //只要直接在正则定界符里面写任何的字符串都是没有意义，只是代码自己本身




// $str = 'abcdefghigklm,n';
// $pattern = "/[dfg,]/";  //只要写到中括号里面的字符就是或者的意思(其中一个)





// $str = 'abcdefghigklm,n1232131233';
// $pattern = "/[a-z0-9,]/";  //中括号里面的横杆代码范围的意思





// $str = 'abcdefgLSDKFJLSDhiSLFLSDgSLDFJLDSklm,n1232131233';
// $pattern = "/[a-z0-9,A-Z]/";  //中括号里面的横杆代码范围的意思




// $str = 'abcdefgLSDKFJLSDhiSLFLSDgSLDFJLDSklm,n1232131233';
// $pattern = "/[a-z0-9,]/i";  //修饰符 i 忽略大小写





// $str = 'sdfdsfefg';
// $pattern = "/[a-z][a-z][a-z][a-z]/";  //4个任意的字母挨到一起的规则



// $str = 'sdfdsfefgsdfdsfefgsd2424324324gsdfdsfefgsdfdsfefg';
// $pattern = "/[a-z]+/";  //+ 量词 （最少1次，最多无限次）



// $str = 'sdfds42432sfefg';
// $pattern = "/[a-z]*/";  //* 量词 （最少0次，最多无限次）






// $str = 'abc123';
// $pattern = "/[^a-z]/";  // ^ 取反  除了的意思







// $str = 'apx bpx cpx dpx epx fpx';
// $pattern = "/[ace]px/";  // 取 apx cpx epx


// $str = 'apx bpx cpx dpx epx fpx';
// $pattern = "/[^ace]px/";  // 取 bpx dpx fpx



// $str = '老师的我风景围绕你了可是可适他当减肥浪蝶狂蜂';
// $pattern = "/我|你|他/";  // | 或者的意思



// $str = '老师的我风景围绕你了可是可适他当减肥浪蝶狂蜂';
// $pattern = "/(我|你|他)/";  // () 是记录 记忆的功能




// $str = 'abcd,;.-=234sd
// lfd2343sf';
// $pattern = "/.+/s";  // . 除了换行的任意字符  s 修饰符 模式中的圆点元字符 “ . “将匹配所有的字符，包括换行符



// $str = 'abcd123';
// $pattern = "/[a-z]+ [0-9]+/x";  // x 修饰符 忽略正则模式里面的空白字符



// $str = '<p>段落1</p><p>段落2</p><p>段落3</p><p>段落4</p>';

// $pattern = "/<p>(.+)<\/p>/U";  // U 取消贪婪模式






// $str = '<p title="">段落1</p><p>段落2</p><p>段落3</p><p>段落4</p>';
// $pattern = "/<[^<>]+>/";  // 匹配标签



$str = file_get_contents('http://www.baidu.com');
// echo $str;exit;

$pattern = "/<title>(.+)<\/title>/";  // 匹配标签



preg_match_all($pattern, $str, $match); //执行一个正则表达式匹配 


echo '<pre>';
print_r($match); //匹配到的结果
echo '</pre>';





 ?>