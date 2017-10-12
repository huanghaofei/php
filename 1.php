<?php
	header("Content-type: text/html; charset=utf-8");
	include_once('model.php');
	con('root','','de');

	 $res=getList('of','cid=6'); 
	echo "<pre>";
	var_dump($res);
	include_once('news'.'.html');
