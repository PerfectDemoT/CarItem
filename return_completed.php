<?php 
    
//先设置返回格式
    header('content-type:application/json;charset=utf8');
    //header('Content-type: text/json');
	
	//设置中国时区
date_default_timezone_set('PRC');
	
//接收微信号来查询到底是谁的信息
	$getuser_name = $_GET['user_name'] ;//微信号

//先连接数据库db1
	$conn=mysqli_connect('localhost' , 'root' , '' , 'hackathon') or die(mysql_error);
    
	//设置编码
    mysqli_query($conn, "SET NAMES 'utf8'") ;
    
    //获取内容
    $sql = "select * from completed where user_name='{$getuser_name}' or convey_name='{$getuser_name}' " ;
    $res = mysqli_query($conn, $sql) ;
    
    //定义一个空数组，用来储存全部数据
    $data= array() ;

    //定义一个类储存
    class Pinformation{
        public $user_name ; //微信号
        public $convey_name ; //送货者名称
		public $item_name ; //物品名称
		public $item_class ; //物品类别
		public $time_start ; //发货时间
		public $time_end ; //到达时间
		public $send_address ; //发货地址
		public $get_address ; //接受地址
		public $convey_class ; //快件种类
		public $weight ; //重量
		public $price ; //价格
    }
    
    while($row = mysqli_fetch_assoc($res)){
        $information = new Pinformation() ;
		
        $information->user_name = $row['user_name'] ;
        $information->convey_name = $row['convey_name'] ;
        $information->item_name = $row['item_name'] ;
		$information->item_class = $row['item_class'] ;
		$information->time_start = $row['time_start'] ;
		$information->time_end = $row['time_end'] ;
		$information->send_address = $row['send_address'] ;
		$information->get_address = $row['get_address'] ;
		$information->convey_class = $row['convey_class'] ;
		$information->weight = $row['weight'] ;
		$information->price = $row['price'] ;
		
        $data[] = $information ;
    }
    //现在所有的数据已经在information[]中了

    echo json_encode($data) ;
    
    
    
?>