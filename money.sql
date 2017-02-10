
create database if not exists `money`;

--钱包账户表
create table if not exists `account`(
`id` int unsigned not null auto_increment primary key COMMENT 'id',
`name` char(50) UNIQUE COMMENT '用户名',
`mobile` char(11) UNIQUE COMMENT '手机号',
`email` varchar(320) UNIQUE COMMENT '邮箱',
`money` int not null default 0 COMMENT '账户余额',
`pass` char(32) not null COMMENT '登录密码',
`pass_str` char(32) not null COMMENT '密码随机串',
`pay_pass` char(32) not null COMMENT '支付密码',
`status` tinyint(1) not null default 1 COMMENT '账户状态(0关闭 1开启 2账户冻结)',
`time` int COMMENT '开通时间'
)engine=innodb default charset=utf8;

--登录日志表
create table if not exists `log`(
`ip` char(128) not null COMMENT '登录ip',
`address` varchar(255) not null COMMENT '登录地址',
`time` int COMMENT '登录时间'
)engine=innodb default charset=utf8;


--记录表
create table if not exists `record`(
`id` int unsigned not null auto_increment primary key COMMENT 'id',
`title` varchar(255) not null COMMENT '标题',
`amount` int not null default 0 COMMENT '操作金额(分为单位)',
`time` int COMMENT '操作时间'
)engine=innodb default charset=utf8;




--管理员表
create table if not exists `admin`(
	`id` int unsigned not null auto_increment primary key COMMENT 'id',
	`name` varchar(255) NOT NULL COMMENT '用户名',
	`pwd` char(32) not null COMMENT '密码',
	`pwd_str` char(32) not null COMMENT '密码随机串',
	`tel` char(20) default null,
	`email` varchar(255) default null
)engine=innodb default charset=utf8;