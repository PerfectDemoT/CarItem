<?php 
    
//先设置返回格式
    header('content-type:application/json;charset=utf8');
    //header('Content-type: text/json');
	
	//设置中国时区
	date_default_timezone_set('PRC');
	
//接收微信号来查询到底是谁的信息
	$stars = $_GET['stars'] ;
	$name_id = $_GET['name_ID'] ;
	$item_id = $_GET['item_id'] ;
	
//先连接数据库db1
	$conn=mysqli_connect('localhost' , 'root' , '' , 'hackathon') or die(mysql_error);
    
	//设置编码
    mysqli_query($conn, "SET NAMES 'utf8'") ;
    
    //获取内容
    $sql = "updata useritem set stars_num = stars_num+'1' , stars=(stars*stars_num+'{$stars}')/(stars_num+'1') where name_ID='{$name_ID}' and item_ID='{$item_id}'" ;
    $res = mysqli_query($conn, $sql) ;
    
?>