<?php 
/*
 * @Author: Twilling 
 * @Date: 2019-03-22 15:12:28 
 * @Last Modified by: mikey.zhaopeng
 * @Last Modified time: 2019-03-25 15:41:16
 */
    header("content-type:text/html; charset=utf8");

    $a = 1;
    $b = 2;
    $c = 3;
    $bool = $a>$b? $a : $b;
    echo $bool>$c? $bool : $c .'<br><br>';


    $count = 1;
	While ($count < 5) {
		echo "$count 平方 = ".pow($count, 2).'<br>';
        $count++;
    }

    var_dump(isset($f));
    var_dump(empty($f));
    echo '<br><br>';


    $day = getdate();
    switch($day['wday']) {
        case 1: echo "星期一";break;
        case 2: echo "星期二";break;
        case 3: echo "星期三";break;
        case 4: echo "星期四";break;
        case 5: echo "星期五";break;
        case 6: echo "星期六";break;
        default: echo "星期日";
    };
    echo '<br>';




    // 乘法表函数
    function Jo($mx, $my){
        $html = '<table border=1>';
        for($y=1; $y<=$my; $y++){
            $html .= '<tr>';
            for($x=1; $x<=$mx; $x++){
                $x<=$y ?
                    $html .= "<td>{$y} * {$x} = ".($x * $y)."</td>":
                    $html .= '<td></td>';
            }
            $html .= '</tr>';
        }
        return $html .= '</table>';
    }
    echo Jo(9, 9);



    // 星星塔函数
    function graph($xin) {
        $html = '';
        $num = 0;
        for($y=0; $y<$xin; $y++) {
            for($x=0; $x<$xin*2; $x++) {
                ($x>=$xin-$y-1) && ($x<=$xin+$y) && ($x%2==$num) ?
                    $html .=  '❤':
                    $html .= '&emsp;';
            }
            $num = !$num;
            $html .=  '<br>';
        }
        return $html;
    }
    echo graph(18);


    // QQ表情函数
    function qq($q, $br) {
        $html = '';
        $tap = '<img src="./images/';
        for ($i=1; $i < $q; $i++) {
            $i < 10 ?
                $html .= "{$tap}0{$i}.gif\">":
                $html .= "{$tap}{$i}.gif\">";
            if($i%$br == 0)
                $html .= '<br>';
        }
        return $html;
    }
    echo qq(62, 5);


    // 国际棋盘函数
    function chess ($x) {
        $html = '<table border=1>';
        $o = 0;
        for ($i=0; $i < $x; $i++) { 
            $html .= '<tr>';
            for ($ii=0; $ii < $x; $ii++) { 
                $ii%2==$o ?
                    $html .= '<td style="background:red;">红色</td>':
                    $html .= '<td style="background:blue;">蓝色</td>';
            }
            $o = !$o;
            $html .= '</tr>';
        }
        $html .= '</table>';
        return $html;
    }
    echo chess(8);



    // 数字递加函数
    function add($number) {
        $html = '';
        $sum = 0;
        for ($i=1; $i <= $number; $i++) { 
            $sum += $i;
            $i<>$number ?
                $html .= "{$i}+":
                $html .= "{$i}={$sum}";
        }
        return $html;
    }
    echo add(18).'<br>';



    // 奇数函数
    function unde($number) {
        $html = '';
        for ($i=1; $i<=$number; $i++) { 
            $i%2==0 ?
                $html .= $i:
                $html .= " <u>{$i}</u> ";
        }
        return $html;
    }
    echo unde(18).'<br>';


    // 比大函数
    function mx(array $number) {
        $max = 0;
        foreach($number as $key) {
            $key>$max ?
                $max = $key:
                $max = $max;
        };
        return '最大值为：'.$max;
    }
    $arr = array(5, 6, 9, 8, 2, -8, 15, 0);
    echo mx($arr).'<br>';



    // 过滤函数
    function ji1($number, array $none) {
        $html = '';
        for ($i=1; $i <=$number; $i++) { 
            foreach($none as $key) {
                $i == $key ?
                    $html .= '&nbsp;':
                    $html .= $i;
                break;
            };
        }
        return $html;
    }
    $abc = array(3, 8);
    echo ji1(10, $abc).'<br>';

    function ji2($number, array $none) {
        $html = '';
        $i=0;
        while(++$i <=$number) {
            foreach($none as $key) {
                $i == $key ?
                    $html .= '&nbsp;':
                    $html .= $i;
                break;
            };
        }
        return $html;
    }
    echo ji2(10, $abc).'<br>';

    function ji3($number, array $none) {
        $html = '';
        $i=1;
        do{
            foreach($none as $key) {
                $i == $key ?
                    $html .= '&nbsp;':
                    $html .= $i;
                break;
            };
        }while(++$i <=$number);
        return $html;
    }
    echo ji3(10, $abc).'<br>';



?>