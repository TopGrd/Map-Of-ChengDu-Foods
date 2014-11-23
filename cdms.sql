-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 03 月 21 日 04:12
-- 服务器版本: 5.5.24-log
-- PHP 版本: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `cdms`
--

-- --------------------------------------------------------

--
-- 表的结构 `think_comment`
--

CREATE TABLE IF NOT EXISTS `think_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `state` tinyint(4) NOT NULL,
  `toUser_id` int(11) NOT NULL,
  `toComment_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comemnt_user` (`user_id`),
  KEY `fk_food_comment` (`food_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `think_comment`
--

INSERT INTO `think_comment` (`id`, `food_id`, `user_id`, `content`, `date`, `state`, `toUser_id`, `toComment_id`) VALUES
(1, 1, 1, 'asdf', '2014-03-05', 0, 0, 0),
(2, 1, 3, '123456', '2014-03-06', 0, 0, 0),
(3, 1, 3, '123456', '2014-03-06', 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `think_food`
--

CREATE TABLE IF NOT EXISTS `think_food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `introduction` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `state` tinyint(4) NOT NULL COMMENT 'whether this food is correct',
  `star` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `click` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_food_user` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `think_food`
--

INSERT INTO `think_food` (`id`, `name`, `introduction`, `image`, `address`, `state`, `star`, `user_id`, `click`) VALUES
(1, '陈麻婆豆腐', '性价比很高的一家老字号饭店，经典的是他们家的麻婆豆腐， 12元小份，20元大份的，但是所谓的大份也只是很小一盆。豆腐浸润在辣红油中，上面散了一层孜然粉，有一点肉糜和葱，不算太辣，味道很浓。 水煮鱼，鱼肉鲜嫩，入味，但是刺儿多还都是小刺，底料还有绿叶菜和豆芽、老豆腐； 鸡丝凉面，爽口，开胃～ 麻婆豆腐，木有想象的辣，挺油的～ 毛血旺，上面是一层油，底下其实是汤，食材种类很多，很好吃～ 宫保鸡丁，酸甜口味的，花生超级多～ 豌豆尖，挺新鲜的，搭配辣的吃～ 樟茶鸭，很香，有几块皮下脂肪很多有点油腻，但是鸭肉还是很嫩很香的，略微偏咸； 鸡丝凉皮，酸甜辣味道综合，凉皮滑滑嫩嫩的，这道小菜在夏天吃会很赞； 醉豆花，有点类似于上海的水果羹，不过里面放了酒酿和豆腐（原来豆腐还能做甜品），喝起来并不是很甜；', '/cdms/Public/images/1.jpg', ' 1：骡马市店（青羊区西玉龙街197号，电话：028-86754512） 2： 青华路店（青华路10号附10-12号, 电话：028-87317216）    3 ： 文殊院店（文殊坊白云寺街30号） 4：  成都北站店（二环路北三段(成都北站对面)）   5：大石西路店（大石西路80号附89号）', 1, 4, 1, 3),
(2, '川西坝子', '成都很有名的火锅店，不过就是人太多了，有时候去晚了在门口吃小吃都吃饱了，还没轮到你进去，环境很不错，很休闲。在这吃火锅建议不要一盘肉全部下进去，最好的就是慢慢一个个的涮，叫上几个好友一起，别有一番滋味。服务员的态度也很好，下雨天给我们发雨衣之类的东西，有点海底捞的感觉', '/cdms/Public/images/2.jpg', '1茶店子店（金牛区茶店子东街71号(近奥林体育馆)电话：400051751  787579517）      2：蜀汉店（金牛区蜀兴西街16号(近蓝光凯丽豪景)  电话：400051751  787799517）', 1, 5, 1, 0),
(3, '廖老妈蹄花', '廖老妈蹄花这家店的门面看起来觉得没什么特点的，黄色的牌子，红色的子，看着很普通的，进到店里面，店里面看着也不是很到的，但是觉得挺干净的，这里的客人挺多的，味道就知道不错的，服务员热情周到的服务觉得很贴心的，这里的蹄花做法挺多的，吃过的味道都觉得不错的，老妈蹄花汤汁很浓郁的，蹄花吃起来入口即化，香辣蹄花做的很入味的，香辣可口，有嚼劲。', '/cdms/Public/images/3.jpg', '东城根店：东城根南街7-11号             陕西路店：陕西路259号', 1, 5, 1, 0),
(4, '龙抄手', '成都最有名的小吃店，你想吃到的成都小吃这里一应俱全，虽说味道较为中庸，但却也不失为一个不错的选择，重点推荐红油抄手，担担面，钟水饺~', '/cdms/Public/images/4.jpg', ' 文殊坊店 文殊院街35号 •  浣花店 浣花北路9号附3号 •  世纪城店  世纪城路(近世纪城) •  华兴正街店 华兴正街54号(近悦来茶馆) •  十二桥店 西安路十二桥37号附3号', 1, 5, 1, 0),
(5, '顺兴老茶馆', '还有民间的味道这里的味道真的是一个很出名的经常有看到一些老外都在这里你说什么我都习惯了这个味道就一个本地的能不习惯吗。经常看到一些中年人老年人在这里聊天喝茶在配线间小米小吵小任性起来真的是非常惬意的一件事再加上这里的环境有服务员态度很端庄态度会不会找你。是体验老成都文化的绝妙选择', '/cdms/Public/images/5.jpg', '金牛区沙湾路258号国际会展中心3楼(沙湾国际会展中心南侧)电话：028-87693202  世纪城店 世纪城路166号西蜀廊桥(世纪城假日酒店) 新会展中心店 新天府大道中段1号新会展中心廊桥166', 1, 4, 1, 0),
(6, '玉林串串香', '1995年，企业创始人肖德云女士将原成都街头巷尾的手提“麻、辣、烫”引入座堂内，并结合火锅的特性，首创了“串串香”，在成都市玉林小区开办了第一家“串串香”火锅店,取名“玉林串串香”。从此“串串香”风靡蓉城。身为首创，味道自然是不错，而其风靡蓉城的原因除了量贩式进餐模式和独特的菜品味道外，更主要的是它丰富的菜品和低廉实惠的价格，人们花3、5元钱就可品偿到几十种菜品味道，食客由被动的进餐变为主动的进餐，他（她）既是进餐者，又是餐桌上的厨师，上百种菜品任由他（她）自己来调配，使每个食客在享受烹饪的乐趣和“一辣，二甜，三回味”爽感的同时，其个性也得到充分的展现和满足。', '/cdms/Public/images/6.jpg', '大学路(近四川大学后门) •  草堂店 评分:四星商户(26) 青华路(近杜甫草堂) •  同仁路店 评分:四星商户(8) 吉祥街(泸天化斜对面)', 1, 3, 1, 6);

-- --------------------------------------------------------

--
-- 表的结构 `think_tag`
--

CREATE TABLE IF NOT EXISTS `think_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food_id` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `think_user`
--

CREATE TABLE IF NOT EXISTS `think_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL COMMENT 'user''s name',
  `psw` varchar(100) NOT NULL COMMENT 'password',
  `sex` tinyint(4) NOT NULL COMMENT 'male',
  `local` tinyint(4) NOT NULL COMMENT 'native people 0 represent no 1represent yes',
  `email` varchar(200) NOT NULL COMMENT 'email.',
  `icon` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `think_user`
--

INSERT INTO `think_user` (`id`, `name`, `psw`, `sex`, `local`, `email`, `icon`) VALUES
(1, 'user', '202cb962ac59075b964b07152d234b70', 0, 0, 'dai@126.com', '0'),
(2, 'd123', '202cb962ac59075b964b07152d234b70', 0, 0, '123', '0'),
(3, 'mtbook', '202cb962ac59075b964b07152d234b70', 0, 1, '123', '0'),
(6, '12', 'c4ca4238a0b923820dcc509a6f75849b', 0, 0, '1', '/cdms/Public/images/boy.jpg'),
(7, '12', 'c4ca4238a0b923820dcc509a6f75849b', 0, 0, '1', '/cdms/Public/images/boy.jpg');

--
-- 限制导出的表
--

--
-- 限制表 `think_comment`
--
ALTER TABLE `think_comment`
  ADD CONSTRAINT `fk_comemnt_user` FOREIGN KEY (`user_id`) REFERENCES `think_user` (`id`),
  ADD CONSTRAINT `fk_food_comment` FOREIGN KEY (`food_id`) REFERENCES `think_food` (`id`);

--
-- 限制表 `think_food`
--
ALTER TABLE `think_food`
  ADD CONSTRAINT `fk_food_user` FOREIGN KEY (`user_id`) REFERENCES `think_user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
