-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 12 月 27 日 16:01
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `movie`
--

-- --------------------------------------------------------

--
-- 表的结构 `mv_article`
--

CREATE TABLE IF NOT EXISTS `mv_article` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` char(255) DEFAULT NULL,
  `content` text,
  `time` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `del` int(1) DEFAULT NULL,
  `click` int(11) DEFAULT NULL,
  `summary` text,
  `minithumb` char(255) DEFAULT NULL,
  `mediumthumb` char(255) DEFAULT NULL,
  `maxthumb` char(255) DEFAULT NULL,
  `roadshow` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `mv_article`
--

INSERT INTO `mv_article` (`id`, `title`, `content`, `time`, `cid`, `del`, `click`, `summary`, `minithumb`, `mediumthumb`, `maxthumb`, `roadshow`) VALUES
(2, '寻龙诀 (2015)', '<p><span property="v:summary" class="" style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 19px; background-color: rgb(255, 255, 255);">上世纪80年代末，胡八一（陈坤 饰）、王凯旋（黄渤 饰）与Shirley杨（舒淇 饰）在美国打算金盆洗手，本来叱咤风云的摸金校尉沦为街头小贩被移民局追得满街跑。就在此时，意外发现20年前死在草原上的初恋对象丁思甜（杨颖 饰）可能还活着，胡八一、王凯旋、S hirley杨决定再入草原千年古墓……<span property="v:summary" class="" style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 19px; background-color: rgb(255, 255, 255);">上世纪80年代末，胡八一（陈坤 饰）、王凯旋（黄渤 饰）与Shirley杨（舒淇 饰）在美国打算金盆洗手，本来叱咤风云的摸金校尉沦为街头小贩被移民局追得满街跑。就在此时，意外发现20年前死在草原上的初恋对象丁思甜（杨颖 饰）可能还活着，胡八一、王凯旋、S hirley杨决定再入草原千年古墓……</span><span style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 19px; background-color: rgb(255, 255, 255);"></span><span style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 19px; background-color: rgb(255, 255, 255);"></span><span style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 19px; background-color: rgb(255, 255, 255);"></span><span style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 19px; background-color: rgb(255, 255, 255);"></span><span style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 19px; background-color: rgb(255, 255, 255);"></span></span><span style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 19px; background-color: rgb(255, 255, 255);"></span><span style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 19px; background-color: rgb(255, 255, 255);"></span><span style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 19px; background-color: rgb(255, 255, 255);"></span><span style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 19px; background-color: rgb(255, 255, 255);"></span><span style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 19px; background-color: rgb(255, 255, 255);"></span></p><p><span property="v:summary" class="" style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 19px; background-color: rgb(255, 255, 255);"><br/></span><span property="v:summary" class="" style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 19px; background-color: rgb(255, 255, 255);"><br/></span></p>', 1450842070, 1, NULL, 123, '', NULL, NULL, NULL, ''),
(4, '老炮儿 (2015)', '<p><span property="v:summary" class="" style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 19px; background-color: rgb(255, 255, 255);">六爷（冯小刚 饰）就曾是”横行“老北京的老炮儿之一，如今过着悠闲自得的日子，却不想自己的儿子晓波（李易峰 饰）被卷入了与“小爷”小飞（吴亦凡 饰）的纠纷中。六爷试图出面摆平这起纠纷，并找来了昔日老友闷三儿（张涵予 饰）、话匣子（许晴 饰）、灯罩儿（刘桦 饰）帮忙，却发现这个时代已经有了一群新的“话事人”，自己这个顽主的江湖地位已经动摇，并且以往固守的生活方式已经渐渐被时代所抛弃，廉颇老矣尚能饭否？&nbsp;</span><span style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 19px; background-color: rgb(255, 255, 255);"></span><span class="pl" style="font-size: 12px; font-family: Arial, Helvetica, sans-serif; line-height: 18px; color: rgb(102, 102, 102); background-color: rgb(255, 255, 255);"><a href="http://movie.douban.com/help/movie#t0-qs" style="cursor: pointer; color: rgb(102, 102, 153); text-decoration: none;">©豆瓣</a></span></p>', 1450857410, 1, NULL, 129, '六爷（冯小刚 饰）就曾是”横行“老北京的老炮儿之一，如今过着悠闲自得的日子，却不想自己的儿子晓波（李易峰 饰）被卷入了与“小爷”小飞（吴亦凡 饰）的纠纷中。六爷试图出面摆平这起纠纷，并找来了昔日老友闷三儿（张涵予 饰）、话匣子（许晴 饰）、灯罩儿（刘桦 饰）帮忙，却发现这个时代已经有了一群新的“话事人”，自己这个顽主的江湖地位已经动摇，并且以往固守的生活方式已经渐渐被时代所抛弃，廉颇老矣尚能饭否？ ©豆瓣', NULL, NULL, NULL, NULL),
(8, '恶棍天使 (2015)', '<p><span style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 19px; background-color: rgb(255, 255, 255);">因为一起车祸，高智商低情商的学霸女查小刀（孙俪 饰）意外相遇专职替人讨债的恶棍莫非里（邓超 饰）。被莫非里狠狠敲诈一笔的查小刀意志消沉，回想自己与母亲断绝关系，工作被老板开除便愈加绝望。偶然间查小刀看到专治心理疑难杂症折耳根神医（梁超 饰）的广告，走投无路的她决定去神医处求救，没想到在诊所再次遭遇恶棍莫非里。惊慌失措的查小刀害怕见到恶棍莫非里，却没想到被急于转移视线的神医当做“药”介绍给了患有严重失眠症的莫非里。神医也告诉查小刀，莫非里也是能治好她心理问题的“药”，打消疑虑的查小刀跃跃欲试。而也因此，性格迥异的二人成为拍档。两人一个极端嚣张跋扈，一个极端懦弱胆小，在讨债的过程里发生了一连串紧张刺激又亦笑亦泪的故事。</span></p><p><br/></p>', 1450925265, 1, NULL, 168, '因为一起车祸，高智商低情商的学霸女查小刀（孙俪 饰）意外相遇专职替人讨债的恶棍莫非里（邓超 饰）。被莫非里狠狠敲诈一笔的查小刀意志消沉，回想自己与母亲断绝关系，工作被老板开除便愈加绝望。偶然间查小刀看到专治心理疑难杂症折耳根神医（梁超 饰）的广告，走投无路的她决定去神医处求救，没想到在诊所再次遭遇恶棍莫非里。惊慌失措的查小刀害怕见到恶棍莫非里，却没想到被急于转移视线的神医当做“药”介绍给了患有严重失眠症的莫非里。神医也告诉查小刀，莫非里也是能治好她心理问题的“药”，打消疑虑的查小刀跃跃欲试。而也因此，性格迥异的二人成为拍档。两人一个极端嚣张跋扈，一个极端懦弱胆小，在讨债的过程里发生了一连串紧张刺激又亦笑亦泪的故事。', '2015_12/mini_567b5cc47f7b9.jpg', '2015_12/medium_567b5cc47f7b9.jpg', '2015_12/max_567b5cc47f7b9.jpg', ''),
(9, '分手再说我爱你 纪念日 (2015)', '<p><span style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 19px; background-color: rgb(255, 255, 255);">华（方力申 饰）和宝（邓丽欣 饰）结婚十周年，决定到北海道庆祝，但在出发前，华重遇几年前的外遇琪（盛朗熙 饰），二人发觉对对方的情愫从未减退。那边，宝竟突然提出不去北海道，而她对华原来亦有一个不可告人的秘密。<span style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 19px; background-color: rgb(255, 255, 255);">华（方力申 饰）和宝（邓丽欣 饰）结婚十周年，决定到北海道庆祝，但在出发前，华重遇几年前的外遇琪（盛朗熙 饰），二人发觉对对方的情愫从未减退。那边，宝竟突然提出不去北海道，而她对华原来亦有一个不可告人的秘密。<span style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 19px; background-color: rgb(255, 255, 255);">华（方力申 饰）和宝（邓丽欣 饰）结婚十周年，决定到北海道庆祝，但在出发前，华重遇几年前的外遇琪（盛朗熙 饰），二人发觉对对方的情愫从未减退。那边，宝竟突然提出不去北海道，而她对华原来亦有一个不可告人的秘密。<img src="/movie/Uploads/201512/567ffd5e7143d.jpg" title="" alt="dae97895d86dede0c82c97566df50115.jpg"/></span></span></span></p>', 1451228515, 4, NULL, 101, '华（方力申 饰）和宝（邓丽欣 饰）结婚十周年，决定到北海道庆祝，但在出发前，华重遇几年前的外遇琪（盛朗熙 饰），二人发觉对对方的情愫从未减退。那边，宝竟突然提出不去北海道，而她对华原来亦有一个不可告人的秘密。', '', '', '', '2015-12-24(中国大陆) / 2015-12-31(香港)'),
(10, '万万没想到 (2015)', '<p><span style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 19px; background-color: rgb(255, 255, 255);">屌丝小妖王大锤（白客 饰），他生来便与常人不同，两耳尖尖，又有些小法力，总是自诩本地妖王。但让他万万没想到的是，在遇到唐僧师徒四人组后，他的命运发生了逆转；而对于唐僧师徒四人组来说，遇见王大锤也是无比郁闷的第八十二难。双方因此上演了一出相爱相杀，令人捧腹的奇幻冒险。</span></p>', 1451230105, 5, NULL, 100, '屌丝小妖王大锤（白客 饰），他生来便与常人不同，两耳尖尖，又有些小法力，总是自诩本地妖王。但让他万万没想到的是，在遇到唐僧师徒四人组后，他的命运发生了逆转；而对于唐僧师徒四人组来说，遇见王大锤也是无比郁闷的第八十二难。双方因此上演了一出相爱相杀，令人捧腹的奇幻冒险。', '', '', '', ' 2015-12-18(中国大陆)');

-- --------------------------------------------------------

--
-- 表的结构 `mv_cate`
--

CREATE TABLE IF NOT EXISTS `mv_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(255) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `mv_cate`
--

INSERT INTO `mv_cate` (`id`, `name`, `pid`, `sort`) VALUES
(1, '动作电影', 0, 100),
(2, '古装武打', 1, 100),
(3, '警匪片', 1, 101),
(4, '文艺片', 0, 101),
(5, '喜剧', 0, 100);

-- --------------------------------------------------------

--
-- 表的结构 `mv_comment`
--

CREATE TABLE IF NOT EXISTS `mv_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) DEFAULT NULL,
  `username` char(255) DEFAULT NULL,
  `comment` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- 转存表中的数据 `mv_comment`
--

INSERT INTO `mv_comment` (`id`, `aid`, `username`, `comment`) VALUES
(30, 8, 'thinksley', '烂片 么么哒'),
(31, 8, 'thinksley', NULL),
(32, 8, 'thinksley', NULL),
(33, 8, 'thinksley', '爱的发的'),
(34, 8, 'thinksley', '阿道夫'),
(35, 8, 'thinksley', '打发的发'),
(36, 8, 'thinksley', '11'),
(37, 8, 'thinksley', '啊啊啊'),
(38, 8, '', '哈哈'),
(39, 8, 'admin', '啊啊啊'),
(40, 4, '', 'ddd'),
(41, 4, 'admin', 'dfasdf'),
(42, 8, 'aa22', 'aaaa22'),
(43, 8, 'aaaaa5', 'aaaa5');

-- --------------------------------------------------------

--
-- 表的结构 `mv_user`
--

CREATE TABLE IF NOT EXISTS `mv_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(50) DEFAULT NULL,
  `password` char(40) DEFAULT NULL,
  `logintime` int(25) DEFAULT NULL,
  `loginip` char(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `mv_user`
--

INSERT INTO `mv_user` (`id`, `username`, `password`, `logintime`, `loginip`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1451227269, '127.0.0.1'),
(11, 'thinksley', '165ffd639a48a59ec4c1cc361aca7edf', 1451056224, '127.0.0.1'),
(12, '小李', '165ffd639a48a59ec4c1cc361aca7edf', NULL, NULL),
(13, 'xiaoqingshui', '165ffd639a48a59ec4c1cc361aca7edf', NULL, NULL),
(14, 'jie', '165ffd639a48a59ec4c1cc361aca7edf', NULL, NULL),
(15, 'aa', '4124bc0a9335c27f086f24ba207a4912', NULL, NULL),
(16, 'aaaa', '47bce5c74f589f4867dbd57e9ca9f808', NULL, NULL),
(17, 'aa22', '74b87337454200d4d33f80c4663dc5e5', NULL, NULL),
(18, 'aaaaa5', '594f803b380a41396ed63dca39503542', NULL, NULL),
(19, 'thinksley1', '165ffd639a48a59ec4c1cc361aca7edf', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
