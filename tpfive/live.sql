//直播设计
//球队表
create table `live_team`(
  `t_id` tinyint(1) unsigned NOT NULL  auto_increment,
  `team_name` varchar(30)   NOT NULL  DEFAULT '',
  `image` varchar(30)   NOT NULL DEFAULT '',
  `type`   tinyint(1) unsigned NOT NULL  DEFAULT 0,
 `create_time` int(10) unsigned NOT NULL DEFAULT 0,
 `update_time` int(10)  unsigned NOT NULL DEFAULT 0,
 PRIMARY KEY (`t_id`)
 )ENGINE=MyIsam AUTO_INCREMENT=1 DEFAULT charset=utf8;  
//直播表
create table `live_game`(
  `g_id` int(10) unsigned NOT NULL  auto_increment,
  `a_id` int(10) unsigned NOT NULL  , //A队ID
  `b_id` int(10) unsigned NOT NULL ,  //B队ID
  `a_score` int(10) unsigned NOT NULL ,  //A队比分
  `b_score` int(10) unsigned NOT NULL  ,  //B队比分
  `narrator` varchar(30)   NOT NULL  DEFAULT '', //直播员
  `image` varchar(30)   NOT NULL DEFAULT '',
  `status`   tinyint(1) unsigned NOT NULL  DEFAULT 0, //该直播目前的状态
 `start_time` int(10) unsigned NOT NULL DEFAULT 0,
 `create_time` int(10) unsigned NOT NULL DEFAULT 0,
 `update_time` int(10)  unsigned NOT NULL DEFAULT 0,
 PRIMARY KEY (`g_id`)
 )ENGINE=MyIsam AUTO_INCREMENT=1 DEFAULT charset=utf8;  
//球员表
create table `live_player`(
  `p_id` int(10) unsigned NOT NULL  auto_increment,
  `player_name` varchar(30)   NOT NULL  DEFAULT '', //球员
  `image` varchar(30)   NOT NULL DEFAULT '',
  `age` tinyint(1)   NOT NULL  DEFAULT '', //球员年龄
  `weight` float(4,2)   NOT NULL  DEFAULT '', //球员体重
  'height' float(4,2)   NOT NULL  DEFAULT '', //球员身高
  `position` varchar(20) NOT NULL DEFAULT '', //球员位置 
  `status`   tinyint(1) unsigned NOT NULL  DEFAULT 0, //球员目前的状态
  `create_time` int(10) unsigned NOT NULL DEFAULT 0,
  `update_time` int(10)  unsigned NOT NULL DEFAULT 0,
 PRIMARY KEY (`p_id`)
 )ENGINE=MyIsam AUTO_INCREMENT=1 DEFAULT charset=utf8;  
//赛事赛况表
create table `live_outs`(
  `o_id` int(10) unsigned NOT NULL  auto_increment,
  `g_id` int(10) unsigned NOT NULL  , //直播ID
  `t_id` int(10) unsigned NOT NULL ,  //球队ID
  `content` varchar(200)  NOT NULL ,  //赛事内容
  `image` varchar(30)   NOT NULL DEFAULT '',
  `type`   tinyint(1) unsigned NOT NULL  DEFAULT 0, //赛事的几节进程
  `status`   tinyint(1) unsigned NOT NULL  DEFAULT 0, //该赛事目前的状态
 `create_time` int(10) unsigned NOT NULL DEFAULT 0,
 PRIMARY KEY (`o_id`)
 )ENGINE=MyIsam AUTO_INCREMENT=1 DEFAULT charset=utf8;  
//聊天室表
create table `live_chart`(
  `c_id` int(10) unsigned NOT NULL  auto_increment,
  `g_id` int(10) unsigned NOT NULL  , //直播ID
  `user_id` int(10) unsigned NOT NULL ,  //用户ID
  `content` varchar(200)  NOT NULL ,  //聊天内容
  `status`   tinyint(1) unsigned NOT NULL  DEFAULT 0, //该赛事目前的状态
 `create_time` int(10) unsigned NOT NULL DEFAULT 0,
 PRIMARY KEY (`c_id`)
 )ENGINE=MyIsam AUTO_INCREMENT=1 DEFAULT charset=utf8; 
//数据表
暂无