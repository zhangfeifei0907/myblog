<?php
	require_once 'mysqlConnect.php';
	//$sql='SELECT content FROM blogs WHERE articleId='.$_POST['articleId'];
	$sql='SELECT post_content FROM wp_posts WHERE ID=6';
	$result=mysql_query($sql);
	$content=mysql_result($result,0);
	mysql_close();
	echo $content;

?>