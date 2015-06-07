<?php
require_once 'db_config.php';
//建立数据库连接
$link=mysql_connect($db_info['db_host'],$db_info['db_user'],$db_info['db_password']);
if($link==FALSE){
	die('can not connect database'.mysql_error());
}
//选择数据库
mysql_select_db($db_info['db_name']) or die('select db error'.mysql_error());
//设置数据库连接采用的字符编码
mysql_set_charset($db_info['db_charset']);


?>