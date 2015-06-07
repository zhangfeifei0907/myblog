<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<h1>所有博文</h1>
		<table border=" 1px" cellspacing="0">
			<tr>
				<th>id</th>
				<th>title</th>
				<th>time</th>
				<th>操作</th>
			</tr>
			<?php
			 	require_once 'mysqlConnect.php';
				$sql='select * from article';
				$result=mysql_query($sql);
				while($row=mysql_fetch_assoc($result)){
				echo <<<STR
			    <tr>
			    		<td>{$row['articleId']}</td>
			    		<td><a href="viewArticle.php">{$row['title']}</a></td>
			    		<td>{$row['creatTime']}</td>
			    		<td>
			    			<a href="delArticle.php">删除</a>
			    			<a href="updateArticle.php">修改</a>
			    		</td>
			    </tr>
	
STR;
}
			
			
			?>
			
			
			
			
		</table>
	</body>
</html>
