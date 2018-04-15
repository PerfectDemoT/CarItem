
/*
	0普通
	1佛系
	2加急
*/



/*添加物品类*/

insert into items values ('' , '手机数码');
insert into items values ('' , '鞋包');
insert into items values ('' , '饰品');
insert into items values ('' , '户外运动');
insert into items values ('' , '母婴童装');
insert into items values ('' , '服装');
insert into items values ('' , '家装家纺');
insert into items values ('' , '食品保健');
insert into items values ('' , '家电');
insert into items values ('' , '美妆');



/*给各数据库添加信息*/

/*给未接收的添加信息*/
insert  into unreceive values('Simple Sir','雨伞','户外运动','04012210','04021010','北邮沙河','北邮西土城','2','5','6');
insert  into unreceive values('Simple Sir','蛋糕','食品','04061210','04071010','西二旗地铁站','海淀黄庄','1','1','2');
insert  into unreceive values('Simple Sir','硬盘','手机数码','04112210','04241010','北京南站','北京西站','0','3','3');
insert  into unreceive values('Simple Sir','MAC口红','美妆','04131110','04161111','昌平镇','西土城区','2','0.1','6');


/*给接收未送达的添加信息*/
insert  into received_uncover values('Simple Sir','YY','手机','手机数码','04142210','04161010','北邮沙河','北邮西土城','1','1','1');
insert  into received_uncover values('Simple Sir','巴拉巴拉','运动鞋','鞋包','04132210','04161010','平西王府','苏州街','0','1','3');
insert  into received_uncover values('SS','Simple Sir','小滑板车','母婴童装','04142210','04152010','西二旗地铁站','北京南站','2','5','10');


/*给已完成表添加信息*/
insert  into completed values('Simple Sir','CC','床单','家装家纺','04150810','04151210','东直门','北京南站','2','2','10');
insert  into completed values('Simple Sir','RR','鸡蛋','食品','04140810','04150810','西直门','北京西站','0','2','3');
insert  into completed values('Simple Sir','CC','小电视机','家电','04140810','04142010','生命科学园','沙河地铁站','1','5','3');
insert  into completed values('RR','Simple Sir','平板电脑','手机数码','04150810','04151210','丰台区','北京站','2','1','6');
insert  into completed values('Simple Sir','TT','鲜花','饰品','04150810','04150910','生命科学园','沙河地铁站','1','5','3');
insert  into completed values('Simple Sir','LL','天猫魔盒','手机数码','04151010','04151210','高教园站','西二旗地铁站','1','1','3');
