<?php 
    
//先设置返回格式
    header('content-type:application/json;charset=utf8');
    //header('Content-type: text/json');
	
	//设置中国时区
date_default_timezone_set('PRC');
	
//接收添加信息
	$user_name = $_GET['user_name'] ;//微信号
	$convey_name = $_GET['convey_name'] ; //运送者姓名
	$item_name = $_GET['item_name'] ;//物品名称
	$item_class = $_GET['item_class'] ; //物品类别
	$time_start = $_GET['time_start'] ; //开始时间
	$time_end = date("Y-m-d H:i:s") ; //加入时间自动生成.
	$send_address = $_GET['send_address']; //发送地址
	$get_address = $_GET['get_address']; //接受地址
	$convey_class = $_GET['convey_class']; //快件种类
	$weight = $_GET['weight'] ; //重量
	$price = $_GET['price'] ; //价格

//先连接数据库db1
	$conn=mysqli_connect('localhost' , 'root' , '' , 'hackathon') or die(mysql_error);
    
	//设置编码
    mysqli_query($conn, "SET NAMES 'utf8'") ;
	
	//删除该订单在未接收订单表中的信息，将其加入已接收未完成订单
	$delete = "delete from received_uncover where user_name='{$user_name}' and convey_name='{$convey_name}' and item_name='{$item_class}' and weight='{$weight}' " ;
    $res_delete = mysql_query($conn , $delete) ;
	
    
    //添加内容
    $sql = "insert into completed values ('$user_name' , '$convey_name' , '$item_name' , '$itemclass' , '$timestart' , '$time_end' , '$send_address' , '$get_address' , '$convey_class' , '$weight' , '$price')" ;
	
    $res = mysqli_query($conn, $sql) ;
    
 

    
?>