<?php 
    
//先设置返回格式
    header('content-type:application/json;charset=utf8');
    //header('Content-type: text/json');
	
	//设置中国时区
date_default_timezone_set('PRC');
	
//接收添加信息
	$user_name = $_GET['user_name'] ;//微信号
	$item_name = $_GET['item_name'] ;//物品名称
	$item_class = $_GET['item_class'] ; //物品类别
	$time_start = $_GET['time_start'] ; //期待发货时间
	$time_end = $_GET['time_end'] ; //期待到达时间.
	$send_address = $_GET['send_address']; //发送地址
	$get_address = $_GET['get_address']; //接受地址
	$convey_class = $_GET['convey_class'] ; //快件种类
	$weight = $_GET['weight'] ; //重量
	$price = $_GET['price'] ; //价格

//先连接数据库db1
	$conn=mysqli_connect('localhost' , 'root' , '' , 'hackathon') or die(mysql_error);
    
	//设置编码
    mysqli_query($conn, "SET NAMES 'utf8'") ;
    
    //添加内容
    $sql = "insert into unreceive values ('$user_name'  , '$item_name' , '$item_class' , '$time_start' , '$time_end' , '$send_address' , '$get_address' , '$convey_class' , '$weight' , '$price')" ;
	
    $res = mysqli_query($conn, $sql) ;
    
 

    
?>