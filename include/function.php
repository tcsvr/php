<?php

// header('content-type:text/html; charset=utf-8');
//封装一个php的弹窗
function alert($con,$url=''){
    echo "<script>";
    if($url){
        echo "alert('{$con}');window.location.href='{$url}';";
    }else{
        echo "alert('{$con}');window.history.go(-1);";
    }
    echo "</script>";
    exit;
}

function pre($con){
    echo '<pre>';
    print_r($con);
    echo '</pre>';
    exit;
}

function h(){
    echo '<hr>';
}


function b(){
    echo '<br>';
}


function ct($v){
    $v = filectime($v);
    echo date('Y-m-d H:i:s',$v);
}


function mt($v){
    $v = filemtime($v);
    echo date('Y-m-d H:i:s',$v);
}




function nine($row=9,$col=9){
echo '<table border=1>';
        for($ro=1;$ro<=$row;$ro++){
            echo "<tr>";
            for($co=1;$co<=$col;$co++){
                $to=$ro*$co;
                $sum = $to;
                if($ro>=$co){
                    echo '<td>'.$ro.'*'.$co.'='.$sum.'</td>';
                }
                else{
                    echo "<td></td>";
                }         
            }
            echo "</tr>";  
        }
echo '</table>';

}

function star( $num = 11){
    for($a=1; $a<=$num; $a++){
    for($b=$num-1; $b>=$a; $b--){
        echo '&nbsp;';
    }
    for($i=1; $i<=$a*2-1; $i++){
        if($i%2==1){
            echo '*';
        }else{
            echo '&nbsp;';
        }
        // if($i>1 && $i<$a*2-1 && $i!=5 && $i!=10 && $i!=15){
        //     echo '&nbsp;';
        // }else{
        //     echo '*';
        // }
    }
    echo '<br>';
    }

}

function tg($a=3,$b=5){
	// 124678910 没有3 5
	for($i=1; $i<=10; $i++){
		/*if($i==3 || $i==5){
			continue;
		}*/
		if($i!=$a && $i!=$b){
			echo $i;
		}
	}
}

function sum ($max = 10){
$sum = 0;
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

}

function comp($num1 = 10,$num2 = 11,$num3 = 12){
    if($num1>$num2){
        if($num1>$num3){
            echo $num1;
        }else{
            echo $num3;
        }
    }else {
        if($num2>$num3){
            echo $num2;
        }else{
            echo $num3;
        }
    }

}

function qqt($a=62,$b=5){
    for($i = 1; $i <= $a; $i++){
        if($i%$b==1){
            echo '<br>';
        }
        if($i<10){
            echo '<img src="images/0'.$i.'.gif" alt=""/>';
        }else{
            echo '<img src="images/'.$i.'.gif" alt=""/>';
        }
    }
    
}

function chess($ro=8,$co=8){
        echo '<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">';
        for($row=1;$row<=$ro;$row++){
            echo "<tr>";
            for($col=1;$col<=$co;$col++){
                $to=$row+$col;
                if($to%2==0){
                    echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
                }
                else{
                    echo "<td height=30px width=30px bgcolor=#000000></td>";
                }
            }
            echo "</tr>";
        }
    echo '</table>';
}


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
		case 'txt': return 'txt 文件';
		break;
		case 'doc': return 'word 文件';
		break;
		default : return '未知类型';
	}
}





function repay($a,$b){
    $a = 20000;
$b = 1000;

repay($a,$b);

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