<?php
 header("Content-type: text/html; charset=utf-8");
	include_once("model.php");//链接函数库	
	con('root','','de');
	if(!empty($_GET['id'])){
		$id = $_GET['id'];
		var_dump($id);
	}
		$res1 = del('of','id='.$id);
		if($res1){
		echo"<script>alert('删除成功');window.location.href='1.php';</script>";
	}else{
	echo "<script>alert('删除失败');window.location.href='1.php';</script>";
	}
