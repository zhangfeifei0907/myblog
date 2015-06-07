<?php
header('Content-Type:text/html;charset=utf-8');
require_once 'mysqlConnect.php';
//$sql='select * from article where '.$_POST['word'];
$sql='select * from article';
$result=mysql_query($sql);
$dataset=array();
while($r=mysql_fetch_assoc($result)){
	$dataset[]=$r;
}
echo json_encode($dataset);
?>