<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    span{
        border:1px solid red;
        margin:2px;
        width:80px;
        height:20px;
        display: inline-block;
    }
    div{
        display: inline-block;
        width:30px;
        height:30px;
        background: #999;
        margin:0;
        padding:0;
    }
    </style>
</head>
<body>
    <?php
        for($i=1;$i<=9;$i++){
                // for($x=8;$x>=$i;$x--){

                // echo "<span></span>";
                // }

                for ($j=1;$j<=$i;$j++){
                $p=$i*$j;
                echo "<span>$i*$j=$p</span>";
                // echo "<span></span>";
            }//j   in
            echo "<br/>";

        }//i  out

        echo '<hr>';

        for($a=1;$a<=10;$a++){
            for($p=10;$p>=$a;$p--){
                echo '&nbsp;';
            }
           
            for($b=1;$b<=$a;$b++){
                  echo '*&nbsp';
            }
                
            echo "<br/>";
        }

        echo '<hr>';
?>
        <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
        <!-- cell 270px wide (8 columns x 60px) -->
        <?php
        for($row=1;$row<=8;$row++){
            echo "<tr>";
            for($col=1;$col<=8;$col++){
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
        ?>
    </table>
    <?php
    echo '<hr>';
    $sum = 0;
    for($su=1;$su<=10;$su++){
        if($su<10){
            echo $su.'+';
        }else{
            echo $su.'=';
        }
        $sum = $sum + $su;
    }
    echo $sum;
    echo '<hr>';
    for($jo=1;$jo<11;$jo++){
        if($jo%2==1){
            echo "<u>$jo</u>";
        }else{
            echo $jo;
        }
    }
    echo '<hr>';
    $num1 = 10;
    $num2 = 11;
    $num3 = 12;
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
echo '<hr>';
for($sa=1;$sa<11;$sa++){
    if($sa%5==3){
        echo '&nbsp;';
    }else{
        echo $sa;
    }
}
echo '<hr>';
$wa = 1;
while($wa<11){
    if($wa%5==3){
        echo '&nbsp;';
    }else{
        echo $wa;
    }
    $wa++;
}
echo '<hr>';
$da = 1;
do{
    if($da%5==3){
        echo '&nbsp;';
    }else{
        echo $da;
    }
    $da++;

}while($da<11);
echo'<hr>';

for($i = 1; $i <= 62; $i++){
    if($i%5==1){
        echo '<br>';
    }
    if($i<10){
        echo '<img src="images/0'.$i.'.gif" alt=""/>';
    }else{
        echo '<img src="images/'.$i.'.gif" alt=""/>';
    }
}
echo'<hr>';
    ?>
    <table border=1>
    <?php
        for($ro=1;$ro<=9;$ro++){
            echo "<tr>";
            for($co=1;$co<=9;$co++){
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
        ?>
    </table>
<?php
    echo'<hr>';
    for($a=1;$a<=10;$a++){
        for($p=10;$p>=$a;$p--){
            echo '&nbsp;&nbsp;';
        }
       
        for($b=1;$b<=$a;$b++){
              echo '*&nbsp;&nbsp;';
        }
        echo "<br/>";
    }


?>
</body>
</html>







































