<?php
header("Content-type: text/html; charset=utf-8");
	include_once('model.php');
	con('root','','de');
	include_once('add'.'.html');
	if($_POST){
		$name = 'img';
		var_dump($name);
		var_dump($_FILES[$name]['name']);
		if(!empty($_FILES[$name]['name'])){
			$data['img'] =  uploadImg($name);
		}
			$data['name']=$_POST['title'];
			$data['content']=$_POST['con'];
			$data['cid'] = $_POST['cid'];
	}
	var_dump($data);
	$res=add('of',$data);
	if($res){
		//如果成功
		echo"<script>alert('添加成功');</script>";
	}else{
		echo"<script>alert('添加失败');</script>";
	}
	

