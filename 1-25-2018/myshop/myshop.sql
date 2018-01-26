-- user表
-- 用户表
create table IF NOT EXISTS user(
id int unsigned not null auto_increment,
name varchar(50)  not null ,
password varchar(50)  not null ,
regtime int  not null ,
admin tinyint,
primary key(id)
)

-- shop_class表
-- 商品分类表
create table IF NOT EXISTS shopclass(
id int unsigned not null auto_increment,
name varchar(50) not null,
primary key(id)
)

-- brand表 
-- 品牌表
create table IF NOT EXISTS brand(
 id int unsigned not null auto_increment,
name varchar(50) not null,
shopclass_id int not null,
primary key(id)
)


-- shop表
-- 商品表
create table IF NOT EXISTS shop(
id int unsigned not null auto_increment,
name varchar(50) not null,
price float not null,
stock int not null,
upshelf tinyint not null,
image varchar(100) not null,
brand_id int not null,
primary key(id)
)

-- orderstat表
-- 订单状态表
create table IF NOT EXISTS orderstat(
id int unsigned not null auto_increment,
name varchar(30),
primary key(id)
)

-- relation表
-- 发货表
create table IF NOT EXISTS relation(
id int unsigned not null auto_increment,
realname varchar(50) not null,
address varchar(200) not null,
telephone varchar(20) not null,
email varchar(50),
user_id int not null,
primary key(id)
)

-- order表
-- 订单表
create table IF NOT EXISTS orders(
id int unsigned not null auto_increment,
code varchar(50) not null,
user_id int  not null,
shop_id int  not null,
num int not null,
price float not null,
time int  not null,
orderstat_id int  not null,
relation_id int  not null,
primary key(id)
)



-- commit表
-- 评论表
create table IF NOT EXISTS commit(
id int unsigned not null auto_increment,
content text,
user_id int  not null,
shop_id int  not null,
primary key(id)
)