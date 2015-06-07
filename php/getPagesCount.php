<?php
	require_once 'mysqlConnect.php';
	if($_POST['showType']=='all'){
		$sql='SELECT COUNT(*) FROM blogs INNER JOIN category ON blogs.categoryId=category.categoryId';
	}else{
		$sql='SELECT COUNT(*) FROM blogs INNER JOIN category ON blogs.categoryId=category.categoryId WHERE blogs.categoryId='.$_POST['showType'];
	}
	$result=mysql_query($sql);
	$rows=mysql_result($result,0);
	mysql_close();
	$rows=(int)$rows;
	if($_POST['showModel']=='general'){
		$pages=ceil($rows/3);
	}else if($_POST['showModel']=='list'){
		$pages=ceil($rows/5);
	}
	$pages=intval($pages);
	echo $pages;

?>