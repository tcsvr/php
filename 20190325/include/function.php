<?php 

// 封装一个PHP的弹窗（alert）
function alert($con,$url=''){
	echo "<script>";
	if($url){
		// 有url地址的
		echo "alert('{$con}');window.location.href='{$url}';";
	}else{
		// 没有url地址，我就让它跳转到上一页历史
		echo "alert('{$con}');window.history.go(-1);";
	}
	echo "</script>";
	exit;
}


function a(){
	echo 'aaaaa';
}




















 ?>