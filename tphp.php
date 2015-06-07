<?php 
if(get_extension_funcs('mysql')==FALSE) echo 'no mysql';
else echo 'mysql is ok';

$hostName='127.0.0.1';
$user='myBlog';
$password='ff123456';

mysql_connect($hostName,$user,$password)
or die('connection fail');
mysql_select_db('testB')
or die('database select fail');
$sql='select * from student';
$result=mysql_query($sql)
or die('sql select fail');
echo'<table border="2">';
echo <<<TR
<tr>
	<td>name</td>
	<td>studentID</td>
	<td>major</td>
	<td>telphone</td>
	<td>brithday</td>
</tr>
TR;
while($row=mysql_fetch_array($result)){
	echo <<<TR
	<tr>
		<td>{$row['major']}</td>
		<td>{$row[1]}</td>
		<td>{$row[2]}</td>
		<td>{$row[3]}</td>
		<td>{$row[4]}</td>
	
	</tr>
TR;
}
echo '</table>';
mysql_free_result($result);
mysql_close();
?>

