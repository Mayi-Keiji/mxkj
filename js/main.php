<?php
header("Content-type:text/html;charset=utf-8");
session_start();
date_default_timezone_set("Asia/Shanghai");


function getMillisecond() 
{
list($t1, $t2) = explode(' ', microtime());
return (float)sprintf('%.0f',(floatval($t1)+floatval($t2))*1000);
}

$phone = strval($_GET["phone"]);
$timestamp = getMillisecond();
$Code = 'XL_'.$timestamp;



//下面保存在数据库中
//此时填写注册信息
$dbhost='localhost';
$dbuser='root';
$dbpass='root';
$dbname='mayi';

// 连接到数据库
	
$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$connect) exit('数据库连接失败！');
mysqli_query($connect,'set names utf8');//设置编码
{
	$strtime = date('y-m-d h:i:s',time());
	$SQLInsert = "INSERT into tb_czyh_hist(id,code,phone,time) VALUES ( NULL,'".$Code."','".$phone."','".$strtime."')";
	$result=mysqli_query($connect,$SQLInsert);
	echo $SQLInsert;
}	


