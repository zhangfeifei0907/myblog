<?php
  require_once 'mysqlConnect.php';
  //get the last articleId
  $sql='SELECT MAX(articleId) FROM blogs';
  $result=mysql_query($sql);
  $tempId=$result.mysql_result($result, 0);
  $strId=substr(strstr($tempId,'#'), 2);
  $newId=intval($strId)+1;
  $newId=strval($newId);
  
  $createTime=date("Y-m-d H:i:s",time());
  $img='none';
  $title=$_POST['title'];
  $categoryId=$_POST['categoryId']; 
  $keywords=$_POST['keyword'];
  $content=$_POST['content'];
  $readerNum=33;
  //echo "$img";
  
    $sql="INSERT INTO blogs(articleId,title,categoryId,keywords,content,image,readerNum,creatTime,editTime) VALUES ('$newId','$title',$categoryId,'$keywords','$content','$img',$readerNum,'$createTime','$createTime');";
    echo $sql;
    if(mysql_query($sql)){
    		echo 'success';
    }else{
    	    echo mysql_error();
    };
	//mysql_close();

?>