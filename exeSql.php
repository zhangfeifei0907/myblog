<?php
header('Content-Type:text/html;charset=utf-8');
require_once 'mysqlConnect.php';
//执行数据库操作
$sql='select * from article';
$result=mysql_query($sql);
echo '<pre>';
$row=mysql_fetch_array($result);
var_dump($row);
$row=mysql_fetch_array($result);
var_dump($row);
echo '</pre>';
//关闭数据库连接
mysql_close();



$sql='select * from article';
$result=mysql_query($sql);
while($row=mysql_fetch_assoc($result)){
	echo <<<STR
	    <tr>
	    		<td>{$row['articleId']}</td>
	    </tr>
	
STR;
}
?>
