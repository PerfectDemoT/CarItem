//建立用户表
create table users(
	id int auto_increment comment'内部ID可用来计数',
	user_name varchar(20) not null comment '微信昵称',
	gender varchar(3) comment '性别',
	tele varchar(15) not null comment '电话号码' ,
	credit int not null comment '信用星级',
	addtime varchar(20) not null comment '添加时间',
	convey_success int not null comment '匹配成功次数',
	primary key(id)
)charset=utf8;


//创建物品类别表
create table items(
	id int auto_increment comment'物品类别ID可用来计数',
	item_class varchar(20) not null comment'物品类别',
	primary key(id)
)charset=utf8;


//未接收订单表
create table unreceive(
	user_name varchar(20) not null comment '发货人微信昵称',
	item_name varchar(20) not null comment '物品名称',
	item_class varchar(20) not null comment '物品类别',
	time_start varchar(20) not null comment '期待发货时间',
	time_end varchar(20) not null comment '期待到达时间',
	send_address varchar(40) not null comment'发送地址',
	get_address varchar(40) not null comment'接受地址',
	convey_class varchar(10) not null comment'快件种类' ,
	weight float not null comment '重量',
	price float not null comment '价格'
)charset=utf8;


//已接收未完成订单表
create table received_uncover(
	user_name varchar(20) not null comment '发货人微信名称',
	convey_name varchar(20) not null comment '送货人微信名称',
	item_name varchar(20) not null comment '物品名称',
	item_class varchar(20) not null comment '物品类别',
	time_start varchar(20) not null comment '实际发货时间',
	time_end varchar(20) not null comment '期待到达时间',
	send_address varchar(40) not null comment'发送地址',
	get_address varchar(40) not null comment'接受地址',
	convey_class varchar(10) not null comment'快件种类' ,
	weight int not null comment '重量',
	price float not null comment '价格'
)charset=utf8;



//已完成订单表
create table completed(
	user_name varchar(20) not null comment '发货人微信名称',
	convey_name varchar(20) not null comment '送货人微信名称',
	item_name varchar(20) not null comment '物品名称',
	item_class varchar(20) not null comment '物品类别',
	time_start varchar(20) not null comment '期待发货时间',
	time_end varchar(20) not null comment '实际到达时间',
	send_address varchar(40) not null comment'发送地址',
	get_address varchar(40) not null comment'接受地址',
	convey_class varchar(10) not null comment'快件种类' ,
	weight int not null comment '重量',
	price float not null comment '价格'
)charset=utf8;



//物品：物品类别，运送物品的用户，评分，对该类物品评分次数
create table useritem(
	convey_name varchar(20) not null comment'用户微信昵称',
	name_ID int not null comment'用户ID',
	item_class varchar(20) not null comment'物品类别',
	item_ID int not null comment'物品类别ID',
	stars int not null comment'物品评价星级',
	stars_num int not null comment'给该类物品评分次数'
)charset=utf8;




/*
	用品表:
		手机数码，
		鞋包
		饰品
		户外运动
		母婴童装
		服装
		家装家纺
		食品保健
		家电
		美妆
*/
