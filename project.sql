/*
Navicat MySQL Data Transfer

Source Server         : InUheart server
Source Server Version : 50617
Source Host           : 106.15.199.175:3306
Source Database       : project

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-09-14 23:16:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `appointment`
-- ----------------------------
DROP TABLE IF EXISTS `appointment`;
CREATE TABLE `appointment` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `teacher` varchar(10) COLLATE utf8_bin NOT NULL,
  `room` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `time` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `date` date DEFAULT NULL,
  `available` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`ID`),
  KEY `PK_teacher` (`teacher`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='老师的可预约情况';

-- ----------------------------
-- Records of appointment
-- ----------------------------
INSERT INTO `appointment` VALUES ('1', '张三', '理科大楼111', '8:00-10:00', '2016-10-08', '1');
INSERT INTO `appointment` VALUES ('2', '李京京', '理科大楼123', '9:00-10:30', '2016-10-08', '1');
INSERT INTO `appointment` VALUES ('3', '王伟', '理科大楼222', '9:00-10:30', '2017-03-24', '1');
INSERT INTO `appointment` VALUES ('5', 'ZJC', '理科大楼128', '14:00-15:00', '2017-03-24', '1');

-- ----------------------------
-- Table structure for `appoint_result`
-- ----------------------------
DROP TABLE IF EXISTS `appoint_result`;
CREATE TABLE `appoint_result` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL DEFAULT '0',
  `AppointID` int(11) NOT NULL DEFAULT '0',
  `Information` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `Accept` tinyint(1) DEFAULT '0',
  `Complete` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`ID`,`UserID`,`AppointID`),
  KEY `PK_userid` (`UserID`),
  KEY `PK_appointid` (`AppointID`),
  CONSTRAINT `PK_appointid` FOREIGN KEY (`AppointID`) REFERENCES `appointment` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `PK_userid` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='学生预约的结果，老师可查看预约';

-- ----------------------------
-- Records of appoint_result
-- ----------------------------
INSERT INTO `appoint_result` VALUES ('2', '2', '5', '123123', '1', '0');
INSERT INTO `appoint_result` VALUES ('20', '17', '1', '22323', '0', '0');

-- ----------------------------
-- Table structure for `chat_event`
-- ----------------------------
DROP TABLE IF EXISTS `chat_event`;
CREATE TABLE `chat_event` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `from` bigint(20) unsigned NOT NULL DEFAULT '0',
  `to` bigint(20) unsigned NOT NULL DEFAULT '0',
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `type` char(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `source` int(10) DEFAULT NULL,
  `target` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6163 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of chat_event
-- ----------------------------
INSERT INTO `chat_event` VALUES ('6161', '1217471254', '1149146403', '1505402118', 'disconnect', '', null, null);
INSERT INTO `chat_event` VALUES ('6162', '1129102379', '1149146403', '1505402119', 'disconnect', '', null, null);

-- ----------------------------
-- Table structure for `chat_ip`
-- ----------------------------
DROP TABLE IF EXISTS `chat_ip`;
CREATE TABLE `chat_ip` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from` bigint(20) unsigned NOT NULL DEFAULT '0',
  `to` bigint(20) unsigned NOT NULL DEFAULT '0',
  `range` bigint(20) unsigned NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `range` (`range`)
) ENGINE=MyISAM AUTO_INCREMENT=989 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of chat_ip
-- ----------------------------

-- ----------------------------
-- Table structure for `chat_online`
-- ----------------------------
DROP TABLE IF EXISTS `chat_online`;
CREATE TABLE `chat_online` (
  `id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `to` bigint(20) unsigned NOT NULL DEFAULT '0',
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` int(10) NOT NULL DEFAULT '0',
  `source` int(10) DEFAULT NULL,
  `target` int(10) DEFAULT NULL,
  `rank` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of chat_online
-- ----------------------------
INSERT INTO `chat_online` VALUES ('1389036060', '1313695344', '1505402118', '2147483647', '2', '2', 'admin');
INSERT INTO `chat_online` VALUES ('1217471254', '1149146403', '1505402118', '2147483647', '2', '19', 'admin');
INSERT INTO `chat_online` VALUES ('1148936566', '1189216205', '1505402132', '2147483647', '2', '2', 'admin');
INSERT INTO `chat_online` VALUES ('1189216205', '0', '1505402134', '2147483647', '2', '0', 'admin');
INSERT INTO `chat_online` VALUES ('1307318115', '1313695344', '1505402122', '2147483647', '2', '2', 'admin');

-- ----------------------------
-- Table structure for `chicken_soup`
-- ----------------------------
DROP TABLE IF EXISTS `chicken_soup`;
CREATE TABLE `chicken_soup` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Content` varchar(2000) COLLATE utf8_bin DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of chicken_soup
-- ----------------------------
INSERT INTO `chicken_soup` VALUES ('1', '用眼神谈判', '快到飞往巴黎的航班的登机口时，我们从一路飞奔变为一溜小跑。飞机尚未起飞，但登机通道已经关闭。登机口的工作人员正在平静地整理着票根。登机口到机舱口之间的登机桥已被收起。\n“等等，我们还没登机！”我喘着气喊道。\n“抱歉，”登机口工作人员说，“登机时间已过。”\n“可我们的转乘航班10分钟前才刚到。他们答应我们会提前打电话通知登机口的。”\n“抱歉，登机口一旦关闭，任何人都不能登机。”\n飞机引擎嗡嗡的轰鸣声越来越急促，一个家伙拿着一根亮亮的指挥棒不慌不忙地出现在机场跑道上。\n我想了一会儿，然后领着男友来到玻璃窗正中间的位置，这个位置正对着飞机驾驶员座舱。我们站在那儿，我全神贯注地注视着飞机驾驶员，希望引起他们的注意。\n一名飞机驾驶员抬起了头，他看到我们可怜兮兮地站在玻璃窗前。我直视着他的眼睛，眼里充满了悲伤和哀求。\n那一刻，时间仿佛都凝滞了。最后，那名飞机驾驶员的嘴唇动了几下，另一名驾驶员也抬起了头。我又紧盯着他的眼睛，只见他点了点头。\n飞机引擎嗡嗡的轰鸣声渐渐缓和了下来，我们听到登机口工作人员的电话响了。一位工作人员转向我们，眼睛瞪得大大的。\n“拿上你们的行李！”她说，“飞机驾驶员让你们快点儿登机！”\n我和男友高兴地抓起行李包，向那两名飞机驾驶员挥挥手，匆匆上了飞机。\n这显然就是一个“谈判”的过程。\n这个过程中，“我”虽然没有说出一言一语，却以一种意志明确、条理清楚、高度有效的方式获得了成功。这个过程中包含了很多技巧：\n要沉着冷静。感情用事只会毁掉谈判，必须强迫自己冷静下来。\n准备充分。哪怕只有5秒钟的时间，都要整理好自己的思路。\n找出决策者。这次谈判的决策者就是飞机驾驶员。不要在其他人身上浪费时间，他们无权改变规定。\n专注于自己的目标，而不是计较是非对错。无论是转乘航班误点，还是转乘航班应该为没有提前通知登机口而承担责任，这些通通不重要。因为你的目标是登上飞往巴黎的飞机。\n进行人际沟通。在谈判中，人几乎是决定一切的因素。\n承认对方的地位和权力，看重他们。如果你能做到这点，对方通常会利用他们的职权帮助你实现目标。', '2015-11-02 01:53:22');
INSERT INTO `chicken_soup` VALUES ('4', '讨分数的人', '    一阵小跑声过后，学校走廊里，一个男生小声而急促地叫我，我立定问他：“有什么事吗？”\r\n    他期期艾艾地说：“我——我能到你的办公室去说吗？”我点点头。他进来后，小心翼翼关上门后，将手上卷着的画纸摊开在我面前说：“老师你看，我觉得自己画得挺好的，为什么只有65分呢？我看他这张还没我的好呢，他都70分呢。”他把同桌的那张画也摊了开来。\r\n    啊，原来是来讨说法的。这是一张美术作业，临摹书上的一幅写意国画《梅花麻雀图》。这算是期中考试了。\r\n    两张画摊在桌上，我给他分析：“你这张，梅花点得还蛮像样，麻雀的形体姿态也不错，可偏偏是‘点睛之笔’不准确，眼睛画偏了，这不是犯了常识性的错吗？他这张也有缺点，梅花浓淡深浅缺少变化，但作为画面主体的麻雀画得还是到位的……”\r\n    他听明白了，似乎也服气，但还不走，磨磨蹭蹭，抓了一会儿头皮，终于说出了要说的话：“老师，你这次能不能开开恩，送我5分，下次还你，行不行？”\r\n    我笑了起来，教书好些年了，还没碰到过这样的学生。\r\n    “你说说看，为什么一定要送你5分呢？”\r\n    “你表扬过我的，说过我画画蛮好的。”\r\n    “啊，我表扬过你？”\r\n    “是的，你表扬过我两次，一次画素描头像，你说我暗部画得蛮透气，没有闷掉。还有一次画水彩，你说我天空染得蛮透明，没有弄脏。”\r\n    “可是这次你只能得65分呀，再说这是考试，老师应该公正，是不是？”\r\n    “可是我这次已经向我爸说过我美术考得不错的，否则老爸要说我吹牛，又要打我的……”\r\n    “65分已经超过及格线了，以后再努力一下就是了。”\r\n    “不不不，老师，我只好实话告诉你，这次期中考，几门主课我都没考好，语文65分，英语刚及格，数学只得了55分。我爸气死了，用皮带抽我，用脚踢我，说我没有一门考得像样，我说我副科蛮好的，美术至少能考70分……老师，你看——”\r\n    他撩起一条裤腿，露出了几条青紫的伤痕。\r\n    我不再多说，拿出一张宣纸，让他重画一幅。\r\n    半小时后，我用朱笔在他的画上写了个“70”，很醒目。出门时，他向我鞠躬，又轻轻问一句：“老师不会告诉其他同学的，对吗？”我含笑。\r\n    多年以后……\r\n    我在地铁月台上等车，一旁座椅上一个男子向我微笑行注目礼，而后站起来说：“您不是教我们美术课的老师吗？”\r\n    “你是？”我记不得他是哪位了。\r\n    他说：“我就是那个向你讨分数的学生呀！”于是我想起了20多年前的那一幕。月台上，我俩相互把上述故事一点点补充完整。\r\n    我问他现在在哪里工作，他说了一家公司的名称。\r\n    “那么，你现在是否经常向你的老板要求加薪？”我和他开起了玩笑。\r\n    他笑了，有些腼腆地说：“我们公司人不多，我当家。”\r\n    “啊，那你就是老板了，你后来学的什么专业？”\r\n    “计算机专业，毕业后搞软件设计。”\r\n    “你过去数学好像不怎么好的，怎么选了这一行？”\r\n    “老师，你还记不记得，那次在你办公室里你对我说的一句话，你说，像你这么聪明，想得出讨分数的人，怎么可以数学不及格？”\r\n    我说过吗？记不清了。可是他却一直记着，并为此改变了自己。', '2015-12-02 03:12:55');
INSERT INTO `chicken_soup` VALUES ('5', '总在最慢的队伍', '    问：为什么在超市排队，我选的队伍总是最慢的？\r\n    答：大多数时候不是你真的运气不佳，只不过是你总对倒霉的事情印象深刻。\r\n    “我发誓，隔壁队伍的红衣美女在我排到一半的时候才出现，可是人家现在已经结完账走人了，我前面的前面的那个大妈却还在数硬币。为什么我总是如此不走运？”\r\n    心理学家会搬出“普遍受害者理论”来解释这种现象。当你所在的队伍走得很快时，你的注意力多半集中在前方的目标上，自然也不会对排队留下太多印象。而如果你不巧排在了一支慢队伍中，你就没法抑制“怎么这么慢”这个念头了。若心急又找不到什么事情来打发时间，这个念头就不断地被强化。结果就是，你觉得自己总是最倒霉的那个。\r\n    事实上，理性分析一下你就会知道，从概率上来讲，你确实没法总是走运——就拿你和你左右两边共三支队伍来说，在2/3的时间内，旁边的队伍中总有一支比你的快。\r\n    20世纪初期的哥本哈根电信交换局面临着一个类似的问题：如何确定电话总机的接线数目，以保证用户的平均等待时间最短？那时的电话都是通过人工接通的。负责解决这个问题的数学家厄朗后来创立了一门学科叫作“排队理论”，现在已经被广泛应用于电信、交通工程、计算机网络、资源共享的随机服务系统，以及工厂、商店、办公室和医院的服务设计。\r\n    按照排队理论，最公平的做法就是把所有人排成一条蛇形队列，每位顾客依次去下一个有空的结账口。许多银行、机场安检和政府机构，以及一些商场和快餐店就是这样做的，但对超市来说，这种做法反而在整体上更没有效率，因为浪费了顾客在等待时把购买的东西送上传送带的时间。\r\n    试想一下，如果你是超市经理，你会如何设计排队策略？蛇形队列意味着超市需要提供更大的排队空间，以及维持秩序的人力。而且，一些购物意愿不太强烈的顾客说不定直接就被这条长龙吓退了。对于正在排队的人来说，也不好说到底哪种情况会让他们更加焦虑，是一眼望不到头但是前进速度恒定，还是前面人不多但旁边的队伍经常更快？\r\n    话说回来，即使是一大群闹哄哄地等待办理酒店入住的排队理论学家，他们最好的选择也许就是随机分成6列，然后听天由命。用来自麻省理工学院的专家拉森的话来说：“酒店大堂一点也不适合蛇形队列。站在酒店经理的立场上考虑一下你就知道，就算不完全公平，分成6个平行的队列常常更快也更加有序。”', '2016-05-22 03:49:49');
INSERT INTO `chicken_soup` VALUES ('6', '身边的溪流', '    8年前，我曾在伊犁的深山中疲惫地步行一天，其间迷了路，沿着向山地低处流淌的小溪找到阿希河的河道，河边就是公路，继续往南走就可以到达一个哈萨克人的村子，那里有我要去访问的一间水泵机房。临近天黑我才到达目的地，素昧平生的主人一直在河边等候。\r\n    因为是夏季，草丛里会有毒蛇活动，早晨出发时，我认识的哈萨克朋友让我穿上一双雨靴——蛇牙咬不透这种胶鞋。太阳落山后，山里迅速寒冷起来，我在空寂而起伏的山地草原上忽然感到了恐惧，我不知道会不会遇到狼，于是在沿途的林地里捡了一根趁手的桦树枝防身。几十岁的人，为了给自己壮胆，时不时挥动那根桦木棒，好像又回到了想象自己是个勇敢武将的少年状态。\r\n    当暮色和寒气越来越重时，我才遇到一辆吉普车，司机告诉我走错路了。因为方向不同，司机建议我上他的车，去两小时车程之外的矿区暂住一夜，那里有招待所，第二天他可以捎我去目的地。另一个方案是，送我回到走错岔路的地方，往山下走，找到小溪，沿着溪流再往低地走，就可以找到公路，那样离我的目的地就不会太远。\r\n    很久以后，我回想起那次步行，依旧不会忘记我在焦躁和疲惫中，找到向山下流淌的溪水时的喜悦。事实上，我还没有看到它，就听到了它的声音。那会儿，我感到“水声淙淙”的“淙淙”是多么准确，而这种简单的、对词语的感悟分散了疲惫感，使我的心情又平静下来，支持我往山下步行。\r\n    在天黑前的寒意中，在苍茫的草丛中，溪水还闪耀着一些残余的反光，很快，乌云聚集在山地里，预示着这个夜晚不会有星光和月亮。在这个天气多变的雨季，说不定夜里还会下雨。找到那条溪流的兴奋感，还包括看到溪边向山下延伸的管道，而且管道显得还很新——这仿佛告诉我，我想多了，这里也是人们经常工作的地方：我用溪水洗了脸，觉得“没什么好怕的”，并且大喊大叫着沿着草丛往山下跑，脑子里颠簸的各种杂念，使我奇怪地想起抱着头往山下滚的鲁智深。\r\n    写到这里，那条小溪的声音又回响在耳边。', '2016-08-02 03:51:27');
INSERT INTO `chicken_soup` VALUES ('7', '守得安静，才有精进', '    91岁的叶嘉莹女士曾表示：她喜欢多些安静的时间，多读些好书，多些静思，多些与先哲的神交。百岁高龄的杨绛先生守静功力更是了得，她和钱钟书在春节也一样专注学问，面对前来拜年的客人只透过门缝寒暄几句，没有让客人进屋，有些不近人情。正是因为有了这种超常守静的功力，才铸成大美之作。\r\n    “动静等观”。人的生命与动密不可分，生活中要有动态美，但不能过，更不能变味。追求动态美更不能演变成：公共场所的喧嚣，极尽显露能事的夸张动作，声嘶力竭的吼叫，酒桌上的推杯换盏，资讯的有量无质。这都属于厚动薄静，不具有持久的生命力。\r\n    守静能安。韩国的一项长期跟踪实验显示：长期身处节奏过快、喧嚣的环境，少年易有注意力不集中、多动症等疾患，成年人逻辑推理能力会弱化，主管短期愉悦的细胞会更活跃。美国的脑科学研究也证实：长期守静有利于神经细胞轴突的延长，有利于信息在脑细胞中的存储、分辨、比较与联系，有利于提升记忆力、分析力、判断力与决策力。这些恰恰应验了“水静极而形象明，心静极而智慧生”“非宁静无以致远，非淡泊无以明志”等诸多中华古训。\r\n    守静以削冗举要。信息爆炸的当今，削冗力、举要力至关重要。此力不举，个人就无法从杂乱的海量信息中甄别出主信息与有效信息。此力足，主信息得以甄别，有效信息得以链接，创新性认知易得，大美之作可成。而削冗力、举要力、甄别力、链接力的提升无一不需要守静。万万不可因占有信息的过于求多而挤没了“思”的时间，车多而不管理堵路，信息多而不整理堵心，学而不思则罔。过多的信息缺乏整理，带来的只能是负效用。只有在“不窥牖，见天道”的守静中方能带来创新与突破。\r\n    守静以求“信息一致”。神经生物学进一步证实，注重整理信息使头脑中信息得以一致，不但有益于认知创新，而且有益于提升积极情绪占比。杨绛百岁时感言：我们曾如此期盼外界的认可，到最后才知道世界是自己的。人生最曼妙的风景，竟是内心的淡定与从容。谁得“内在信息一致”之法，谁就得“真实幸福”之道。\r\n    守静而“无不为”，“大音希声，大象无形”。叶、杨两位大师因守静有了大为，并得人生之大乐。“重为轻根，静为躁君”，环境略显喧嚣时，多些静，或许更好。', '2016-10-07 03:52:11');
INSERT INTO `chicken_soup` VALUES ('8', '天黑了，心亮着', '    春香，还在舌尖徘徊；春愁，还在心头徜徉。夏天，说来就来了。\r\n    日长夜短的夏天，白天大多是亮堂堂的，虽然也会有淋漓来袭，也会有潮湿加身，但更多的时候，是带有炽热和焦灼的华丽，让人生的忧伤以汗水的方式滴落。在夏日，那些奋力穿越千年万年，又离散了的阳光，拼命许下的，难道就是身前身后的寂寥和怅惘？\r\n    夏夜来得晚。虽说来得晚，却是异常快，说黑就黑了。在夏夜的黑暗静寂里，许多不眠不休的思绪，河流般流淌；许多激情，又怎会轻易为黑暗静寂包裹收藏？无论一个人，还是一群人，心绪一旦融入夏夜的氛围，便有了清晰的去向和来路。这注定是星光满天的季节，注定是一个枝繁叶茂的季节，那些尽心播种的人，又何须殚精竭虑，为变幻莫测的未来和前景神伤？\r\n    夏夜，星光是如此灿烂，所有黏湿而繁冗的睡眠，也随之构架起一个个活力四射的梦幻世界。总是一不经心，辽阔的星空就让一些醒着或睡去的人，有了一份憧憬，有了一份翘盼，有了一份期待，那分明是缘于生命的，可以拔节、可以生长的人生故事啊！在情感的星河中恣意流转、浪漫依洄、如歌荡漾。\r\n    古希腊哲学家苏格拉底说，人懂得的东西越多，就会发现自己不知道的事情越多。正因为这样，我们总是借助黑暗，掩饰自己，躲在梦与季节的深处，听花与黑夜唱尽梦魇，唱尽繁华，唱断所有记忆的来路。尘世的一切，总是被时光冲涮着。岁月无声，一缕缕星光照过来，让我们看见了自己的卑微，也让我们学会努力地释放自己的光泽。天边偶尔划过的流星，掠过茫茫时空，淡定安然地陨落之时，又该照彻多少人的心扉？\r\n    凡俗生活中，一个找不到生命方向的人，多半是因自己的心空失去了光亮。要走出黑暗，必须适应在黑暗中体悟和摸索，学会由心灵引路，让心灵歌唱。茫茫宇宙中，我们的苦难再多，也装不满地球，对于上苍赐予我们的，轮回流转的黑暗和光亮，我们要心存感念。就算是天黑了，只要我们的心灵亮着，一样可以在秋天收获喜悦，收获快乐。\r\n    大千世界，需要有一些为生命歌唱的人。当别人唱着的时候，他在唱；当别人不再唱的时候，他还在唱。别人唱着的时候，听不出他唱得如何绝妙；当别人不再唱了，才发现，他的声息是如此清新敞亮，内敛安详。他心中的光亮无论白天黑夜，一直都在，几乎无时无刻不在每个人的心空流淌。\r\n    任世事变幻，岁月沧桑，人类的心灵世界，最终还是由自己主宰。生而为人，只要心中有烛，心头有光，就会找到爱和美的方向。这正是生活的法则，你哭，它也哭；你笑，它便笑；你心头有光，它绝无可能让你找不到生命的出口。', '2016-11-05 03:52:54');
INSERT INTO `chicken_soup` VALUES ('9', '请相信，这是一个美好的过程', '  母亲经常收到我夜里2点多给她回的短信，或者在清晨6点多的电话中，听到我一夜未睡而表现出的奇异兴奋。她开始担心起我的身体，甚至语重心长地告诉我，如果工作太累，就辞掉吧，我们养你。听到这话，自然心头一暖，要是几年前，我在A公司实习的时候，一定会泪如雨下。\r\n  那时的我错误百出，被人算计，真的是灰头土脸。那时，如果母亲说了这话，我估计会立刻放下所有，买张机票飞回家，永不回来。可是今天，我的感觉是，有他们支持真好。\r\n  我曾经是那么脆弱、敏感的一个人。同事的一句责怪，我可以难受好长一段时间。老板的一顿训斥，我可以觉得自己从此前程尽毁。可是，正是这些小打小闹的批评，让我从一个天真浪漫的孩子，一步一步变成今日的我。记得换工作以后上班的第一天，老板指着花瓶说，记得以后勤快点，帮我换鲜花。我的工作还有，维护日常工作议程，会议记录，对了，还要翻译文件。\r\n  如果换作刚毕业那时的我，一定转身就走：我来这里，可不是为了服务你一个人的。但是那天，我兴高采烈地感谢了她的安排，并且与每一个我见到的人说早安。\r\n  每次开会前，我会把所有同事需要的资料都放在桌上，然后给他们倒好水。慢慢我观察到，每一个同事喜欢的饮品都不一样。我开始记录他们每个人的爱好，然后下次开会，提前准备好。惟一发挥的，不过是会议记录，我将会议记录做成分析报告，按照老板的阅读习惯，交上去。分析报告里，甚至会有数据模型，以及详细的行业分析。我每天去换花的时候，都会很用心地调整它的位置，然后喷上水。当然，我也会计算，在老板进办公室的时候，让鲜花刚好以最好的姿态迎接她。\r\n  我从不觉得工作是无意义的，很多没有工作经验的孩子，都想一上来就做大项目，跟大单子。我却十分喜欢助理这样的工作。有什么工作，比让你学习强者的工作模式更加令人进步迅速呢？我十分认真地研究她的日程表，做什么项目，该与谁见面；一个项目，有多少人员投入，报价是多少，成本是多少；如何安抚员工，又如何威逼利诱员工；如何和客户砍价，如何让客户相信我们的专业，如何去与同行寒暄竞争。这些在商学院永远学不到的东西，在那段时间里，我学得不亦乐乎。老板也越来越喜欢我，渐渐地，做什么事情都带上我。\r\n  也许是过了浮夸的年纪吧，觉得脚踏实地的努力，让自己心安许多。其实我一路都知道，这只是一个过程，一个让自己羽翼丰满，拥有足够的资格去承担的过程。\r\n  这个行业，投入了全球最Smart的人。比你优秀的人，一定多到你数不过来。如果盲目地去追随别人的脚步，很容易迷失在这场追逐的游戏中。我没有按照公式去走我的旅途，而是脚踏实地走好每一步。不会的东西，我从来都厚着脸皮去问有经验的同事。从小到大，我一向积极主动地去照顾别人，也得到很多人无私的关心。有人说，这个行业竞争这么激烈，怎么可能交心呢？可是，只要他是一个人，总会有需要被关心、被理解的时候，而这个时候，那个出现的人，可不可以是你？\r\n  后来，我终于可以做自己擅长并且喜欢的工作了。\r\n  当昔日的同学，看到今日光鲜的你，羡慕不已的时候，请不要对她说，你有多么辛苦。只要微笑就好。\r\n  当昔日的朋友，跟你说，我们多久没有见面、没有聊天了，在我们心酸不已的时候，只要微笑就好。\r\n  我们失去的即是我们所获的成本，我们总不能什么都想要。永远记得，能够理解你的人，永远都会理解你。而会失去的东西，从来都不曾属于你。\r\n  做自己才是最重要的事情。我会听从前辈的建议，无论是工作上的，还是生活上的，但那并不代表，我就要按照他们所说的做。一些明明我知道会有的痛，依旧会去尝试；一些明明我知道会有的心酸，仍然会去体会。在我们年轻的时候，就要勇敢地尝试人生不同的可能性。这样，我们才能够在未来的人生旅途中，走出属于我们的路。\r\n  幸福，与你有多少双鞋子，多少件名牌套装，住多大的房子无太大关系。\r\n  幸福源于你的人生经历。\r\n  幸福源于你是一个怎么样的人，而你又以何种姿态度过你的一生。', '2016-11-06 07:07:49');

-- ----------------------------
-- Table structure for `mute`
-- ----------------------------
DROP TABLE IF EXISTS `mute`;
CREATE TABLE `mute` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of mute
-- ----------------------------

-- ----------------------------
-- Table structure for `online_appoint`
-- ----------------------------
DROP TABLE IF EXISTS `online_appoint`;
CREATE TABLE `online_appoint` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `User` int(20) NOT NULL,
  `Date` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `Time` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `Accept` int(11) DEFAULT '0',
  `Complete` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of online_appoint
-- ----------------------------
INSERT INTO `online_appoint` VALUES ('11', '1', '2017-03-02-19:33', null, '0', '0');

-- ----------------------------
-- Table structure for `room`
-- ----------------------------
DROP TABLE IF EXISTS `room`;
CREATE TABLE `room` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `roomnumber` int(5) NOT NULL DEFAULT '4',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of room
-- ----------------------------
INSERT INTO `room` VALUES ('1', '4');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(15) COLLATE utf8_bin NOT NULL,
  `Schoolnumber` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `Password` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `Rank` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `Phone` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`ID`,`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='用户账户信息';

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'zjc', '10132130235', 'zjc', 'user', null);
INSERT INTO `user` VALUES ('2', 'ZJC', '0001', '666', 'admin', null);
INSERT INTO `user` VALUES ('3', '张三', '0002', 'zhangsan', 'admin', null);
INSERT INTO `user` VALUES ('4', '李四', '0003', 'lisi', 'admin', null);
INSERT INTO `user` VALUES ('5', '王五', '0004', 'wangwu', 'admin', null);
INSERT INTO `user` VALUES ('7', 'abc', '10132130234', 'abc', 'user', null);
INSERT INTO `user` VALUES ('8', 'def', '10132130236', 'cde', 'user', null);
INSERT INTO `user` VALUES ('17', '10132130101', '10132130101', '123456', 'user', '12312312312');
INSERT INTO `user` VALUES ('18', '10132130102', '10132130102', '123456', 'user', null);
INSERT INTO `user` VALUES ('19', '10132130103', '10132130103', '123456', 'user', null);
INSERT INTO `user` VALUES ('20', '10132130104', '10132130104', '123456', 'user', null);
INSERT INTO `user` VALUES ('21', '10132130105', '10132130105', '123456', 'user', null);
INSERT INTO `user` VALUES ('22', '10132130106', '10132130106', '123456', 'user', null);
INSERT INTO `user` VALUES ('23', '10132130107', '10132130107', '123456', 'user', null);
INSERT INTO `user` VALUES ('24', '10142510201', '10142510201', '123456', 'user', null);
INSERT INTO `user` VALUES ('25', '10142510202', '10142510202', '123456', 'user', null);
INSERT INTO `user` VALUES ('26', '10142510203', '10142510203', '123456', 'user', null);
INSERT INTO `user` VALUES ('27', '10142510204', '10142510204', '123456', 'user', null);
INSERT INTO `user` VALUES ('28', '10142510205', '10142510205', '123456', 'user', null);
INSERT INTO `user` VALUES ('29', '10142510206', '10142510206', '123456', 'user', null);
INSERT INTO `user` VALUES ('30', '10142510207', '10142510207', '123456', 'user', null);
