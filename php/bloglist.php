<?php
	$sql;
	require_once 'mysqlConnect.php';
	if($_POST['showModel']=='general'){
		$sql='SELECT articleId,title,categoryName,editTime,readerNum,image,substring(content,1,20) FROM blogs INNER JOIN category ON blogs.categoryId=category.categoryId ';
	}else if($_POST['showModel']=='list'){
		$sql='SELECT articleId,title,categoryName,editTime,readerNum FROM blogs INNER JOIN category ON blogs.categoryId=category.categoryId ';
	}
	
	if($_POST['showType']=='all'){
		$sql=$sql.'ORDER BY editTime DESC ';
	}else{
		$sql=$sql.'WHERE blogs.categoryId='.$_POST['showType'].' ORDER BY editTime DESC ';
	}
	
	if($_POST['showModel']=='general'){
		$startNum=((int)$_POST['nowPage']-1)*3;
		$startNum=strval($startNum);
		$sql=$sql.'LIMIT '.$startNum.',3 ';
	}else if($_POST['showModel']=='list'){
		$startNum=((int)$_POST['nowPage']-1)*5;
		$startNum=strval($startNum);
		$sql=$sql.'LIMIT '.$startNum.',5 ';
	}
	$result=mysql_query($sql);
	$bloglist=array();
	while($r=mysql_fetch_assoc($result)){
		$bloglist[]=$r;
	}
	mysql_close();
	echo json_encode($bloglist);
 


?>