/*
Navicat MySQL Data Transfer

Source Server         : mcgins
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : mcgins

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-08-28 22:15:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `t_activity`
-- ----------------------------
DROP TABLE IF EXISTS `t_activity`;
CREATE TABLE `t_activity` (
  `activity_id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_title` varchar(255) DEFAULT NULL,
  `activity_desc` varchar(255) DEFAULT NULL,
  `activity_content` text,
  `activity_img` varchar(255) DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  PRIMARY KEY (`activity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_activity
-- ----------------------------
INSERT INTO `t_activity` VALUES ('1', '新闻标题是这里', '俺说的是骄傲的就是多好看教案上点击爱上点击按开始大家说的话阿萨德就看见大海大师课很多爱上大家哈市速度会撒娇和电话时间的话撒的。谎啥都看哈师大撒交大速度就爱看啥都好。', '么么哒', 'share1.jpg', null);
INSERT INTO `t_activity` VALUES ('2', '哈哈哈', '嘻嘻嘻', '木马木马', 'share2.jpg', null);
INSERT INTO `t_activity` VALUES ('3', '呼呼呼', '啦啦啦', null, 'share3.jpg', null);
INSERT INTO `t_activity` VALUES ('4', '呀呀呀', '呦呦呦', null, 'share1.jpg', null);
INSERT INTO `t_activity` VALUES ('5', '叽叽叽', '咋咋咋', null, 'share2.jpg', null);
INSERT INTO `t_activity` VALUES ('6', '噜噜噜', '呼呼呼', null, 'share3.jpg', null);

-- ----------------------------
-- Table structure for `t_admin`
-- ----------------------------
DROP TABLE IF EXISTS `t_admin`;
CREATE TABLE `t_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL,
  `admin_photo` varchar(255) DEFAULT NULL,
  `admin_power` int(11) DEFAULT NULL,
  `add_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_admin
-- ----------------------------
INSERT INTO `t_admin` VALUES ('1', 'admin', 'admin', 'uploads/20160824070535_29809.jpg', '0', '2016-08-23 12:56:35');
INSERT INTO `t_admin` VALUES ('2', 'mcgins', 'mcgins', 'img/avatar.png', '1', '2016-08-23 19:52:17');

-- ----------------------------
-- Table structure for `t_course`
-- ----------------------------
DROP TABLE IF EXISTS `t_course`;
CREATE TABLE `t_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `levels` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `courses` varchar(255) DEFAULT NULL,
  `intro` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_course
-- ----------------------------
INSERT INTO `t_course` VALUES ('1', 'Enlightening', '4-6岁（幼儿园 Kindergarten）', '听说读写+拼读+绘本(EMC + Phonics+Little books)', '听说读写启蒙：主题式课程单元，帮助儿童认识自己及周围环境，掌握日常生活词汇、生活用语、重点句型、简单日常对话、课堂用语。\r\n\r\n拼读启蒙：掌握基本拼读规律，能朗读简单短文、绘本。养成自信，培养语感，激发兴趣，享受双语的乐趣，幼小衔接。');
INSERT INTO `t_course` VALUES ('2', 'Activating', '7-9岁（一至三年级Grade 1-3）', '听说读写+拼读+语法+阅读(AMC + Phonics + Grammar + Primary Reading)', '听说读写进阶：进入小学初级英语学习阶段，多元化课程设计，通过英语认识世界、认识自我，形成内在学习动机，积累重点词汇、句型，听说读写并进。\r\n\r\n小学语法入门：零枯燥学语法，语法知识自然掌握，形成语感，掌握规律，为阅读、写作打牢基础。\r\n\r\n拼读+阅读：掌握发音规律，见词能读，听音能写，由读词向读文章进阶。');
INSERT INTO `t_course` VALUES ('3', 'Growing', '10-12岁（三至五年级 Grade 3-5）', '听说读写+拼读+语法+精读 (GMC + Phonics + Grammar + Top Reading)', '说读写飞跃：进入小学中高级英语学习阶段，运用与应试并驾齐驱，了解西方文化，培养自主学习能力，养成良好的学习习惯和思考能力，保持内在学习动机。巩固加强已有英语知识。本阶段词汇量设定高于国家规定的小学毕业生的英语课标。\r\n\r\n小学语法强化：配套语法教程，完成本阶段后，语法能力相当于初一水平。\r\n\r\n拼读+精读：拼读辅助背单词， 由朗读文章向阅读理解飞跃，训练边读边理解的能力，全面提高阅读水平，为小升初做好准备。');
INSERT INTO `t_course` VALUES ('4', 'Rising', '13-15岁（初中 Middle School）', '听说读写+语法+体裁精读+写作 (RMC + Grammar + Genre Reading + Writing)', '中听说读写：在轻松应对学校英语考试的同时，挑战同年龄美国孩子学习内容及学习模式，使综合英语能力超越同龄人，为中考及雅思、托福等出国考试打下坚实基础。\r\n\r\n初中语法强化：通过大量的“隐性”练习，让学生不知不觉中记住用法、掌握规律、活学活用，全面辅助提升听说读写综合能力。\r\n\r\n体裁精读+写作：英美文学赏析，不同体裁阅读，调研、报告、演讲能力训练，培养英语的实力。');

-- ----------------------------
-- Table structure for `t_faq`
-- ----------------------------
DROP TABLE IF EXISTS `t_faq`;
CREATE TABLE `t_faq` (
  `FAQ_id` int(11) NOT NULL AUTO_INCREMENT,
  `FAQ_title` varchar(255) DEFAULT NULL,
  `FAQ_content` varchar(255) DEFAULT NULL,
  `add_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`FAQ_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_faq
-- ----------------------------
INSERT INTO `t_faq` VALUES ('1', '孩子几岁学英语合适？', '从儿童语言发展的角度来讲，儿童从出生就自带一个“语言学习装置”。但是，不同的生活、语言环境对启动这个“装置”有着重要的影响。在非英语国家，只要在不影响孩子母语正常发展的情况下，一个专业、系统、安全、舒适的英语学习环境可以帮助任何年龄段的孩子有效地学习英语。\r', '2016-08-18 22:52:47');
INSERT INTO `t_faq` VALUES ('2', '麦金思有外教课吗？', '目前，麦金思没有常规外教班，但将来会不定期安排外教活动课。同时，麦金思美国教研团队正在筹划线上外教系统，全部外教均为美国当地的英语教师。美国一线教师与学生进行面对面口语交流。敬请期待。\r目前，麦金思没有常规外教班，但将来会不定期安排外教活动课。同时，麦金思美国教研团队正在筹划线上外教系统，全部外教均为美国当地的英语教师。美国一线教师与学生进行面对面口语交流。敬请期待。\r', '2016-08-18 22:54:30');
INSERT INTO `t_faq` VALUES ('3', '上外教课有必要吗？', '我们的国内外英语教育专家团队和家长，经过多年的经验得出：在非英语国家，外教课的学习效果其实没有中教课的学习效果好。外教的真正目的，是帮助孩子敢于开口，在没有母语做支撑的情况下，也可以正常用英语与人交流。麦金思的教学模式是全英文授课，老师的纯正口语会让孩子感受到与外教课上一样的语言环境，同时，麦金思的老师在专业的培训下，更能了解中国孩子学习英语的方式和常见错误，有效帮助孩子提升英语能力，达到外教课上事半功倍的效果。', '2016-08-18 22:55:15');
INSERT INTO `t_faq` VALUES ('4', '麦金思的师资如何？', '麦金思的教师是经过层层选拔、考核、培训，获得麦金思美国教研团队认可、达到麦金思专业教学标准的青少儿英语教师。\r', '2016-08-18 22:55:39');
INSERT INTO `t_faq` VALUES ('5', '我的孩子该上哪个阶段的课？', '麦金思专业的学习顾问和教师会根据孩子的实际情况为您的孩子制定最合适的学习规划，配置最适合的课程。欢迎致电或上门咨询。', '2016-08-18 22:56:03');
INSERT INTO `t_faq` VALUES ('6', '孩子学了一段时间，感觉没效果，怎么办？', '不必担心，这是一个完全正常的儿童语言发展过程。从儿童语言习得的角度来看，英语学习是一个需要经过大量输入、反复练习的过程。而且每个孩子的自身情况，如学习风格、吸收情况、左右脑分配方式等均有不同，会致使学习效果外显的时间有提前或延后的差别。麦金思的教师会了解每个孩子的情况，做出实时有效的调整，让每个孩子在自身原有英语基础上均有所提升。', '2016-08-18 22:56:27');
INSERT INTO `t_faq` VALUES ('7', '国家把中高考英语分数比例下调了，意味着什么？', '此次下调只是将英语在总分中的分值降低，但提高了听力的比重。也就是说，提高了对英语实际运用能力的要求。实际运用能力是日积月累的训练结果，而不会是像“答题技巧”一样速成的。因此，打好英语基础，听说读写并进，真正体味英语文化，不但积累了实际运用能力，而且使学校的英语学习和考试变得轻松自如。', '2016-08-18 22:56:53');
INSERT INTO `t_faq` VALUES ('8', '我的孩子上的英语辅导都是名师讲题，能提分。麦金思英语学习对我的孩子有用吗？', '当然有用。麦金思的课程设置是以英语运用能力和应试能力双提升为目的的。运用能力指的是能用英语进行沟通、阅读、思考、表达，把英语作为“第二母语”一样驾驭的实力。应试能力是指应对学校英语课程和考试的能力，但往往会忽略英语的实际运用，从而使英语发挥不到其真正用途。在麦金思，我们通过互动、启发、探索的方式，让孩子自主学习、找到合适有效的方法，通过自己的英语实力来轻松应对学校考试，同时还能将英语如同工具般熟练运用，为将来考取世界名校、出国深造等打下坚实基础。', '2016-08-18 22:57:30');
INSERT INTO `t_faq` VALUES ('9', '家长应该帮助孩子复习、练习吗？', '为了达到最佳学习效果，麦金思诚恳地建议家长配合老师的教学及作业安排。请咨询我们专业的学习顾问和老师，了解如何帮助孩子。', '2016-08-18 22:57:53');
INSERT INTO `t_faq` VALUES ('10', '麦金思每个班有多少个孩子？', '所有班级均为精品小班，每班为5-10人，确保每个孩子都得到关注。', '2016-08-18 22:58:20');

-- ----------------------------
-- Table structure for `t_index`
-- ----------------------------
DROP TABLE IF EXISTS `t_index`;
CREATE TABLE `t_index` (
  `index_id` int(11) NOT NULL AUTO_INCREMENT,
  `index_ch` varchar(255) DEFAULT NULL,
  `index_feature` varchar(255) DEFAULT NULL,
  `index_carousel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`index_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_index
-- ----------------------------
INSERT INTO `t_index` VALUES ('1', '特色一', '首家引进被美国英语教育界公认，并获得普遍赞誉的“最适合中国儿童英语学习”的原版教材。', 'img/banner1.jpg');
INSERT INTO `t_index` VALUES ('2', '特色二', '由美国TESL硕士、K-12 ESL\r美国教育部注册教师、曾任教\r于美国公立学校、并曾担任美\r国加州知名培训机构校区总监\r的Ms.Laura，亲自督导教学、\r培训师资。', 'img/banner2.jpg');
INSERT INTO `t_index` VALUES ('3', '特色三', '美国英语教育专家团队全程提供教学支持，实时更新来自美国最新的教学资源与方法。', 'img/banner3.jpg');
INSERT INTO `t_index` VALUES ('4', '特色四', '教师团队均经过严格选拔、考核、培训，拥有TESL青少儿英语教师资格，个人教学能力均达到麦金思教学标准。', 'img/banner4.jpg');
INSERT INTO `t_index` VALUES ('5', '特色五', '确保轻松应对在校英语\r考试，并无缝对接美国中小\r学课程，为考取名校、出国\r留学、出国考试打牢基础 。', null);
INSERT INTO `t_index` VALUES ('6', '特色六', ' 独家特色美国游学、文化\r体验项目，零距离感受真正美\r国文化。', null);
INSERT INTO `t_index` VALUES ('7', '特色七', '采用美国青少儿教育大纲\r提出的“启发式”“探索式”\r教学法，培养学生独立学习和\r辩证思维的能力。', null);
INSERT INTO `t_index` VALUES ('8', '特色八', '权威测评体系，为每个孩\r子量身定制专属英语学习规划。', null);

-- ----------------------------
-- Table structure for `t_job`
-- ----------------------------
DROP TABLE IF EXISTS `t_job`;
CREATE TABLE `t_job` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_welfare` varchar(255) DEFAULT NULL,
  `job_teacher_recruit` varchar(255) DEFAULT NULL,
  `job_teacher_qualifications` varchar(255) DEFAULT NULL,
  `job_advisor_study` varchar(255) DEFAULT NULL,
  `job_advisor_qualifications` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_job
-- ----------------------------
INSERT INTO `t_job` VALUES ('1', '1.国际化的工作环境：愉快，互助，分享，专业，公平，合作，平等，重视能力', '1.全英文教授麦金思课程体系，授课对象为4-15岁青少儿；', '1.热爱英语教学，了解儿童身心发展；', '1.日常教务教学管理', '1.大专以上学历，英语、教育、心理学专业，有与4-15岁青少年儿童工作经验者优先；');
INSERT INTO `t_job` VALUES ('2', '2.专业的培训机制', '2.依照麦金思标准化流程按时做好备课及教学研讨等，确保教学质量；', '2.英语口语表达流畅，语感良好，发音标准；', '2.为来电及上门咨询者详细解答问题、积极开展课程推荐、体验课程预约和报名签约', '2.有亲和力，真诚，勤奋，负责，有爱心，踏实稳重，执行力强，善于思考总结，服务意识强，抗压能力强，沟通表达能力良好；');
INSERT INTO `t_job` VALUES ('3', '3.体验真正美国文化，有机会与美国团队合作，出访美国', '3.参与培训、教研和会议等活动；', '3.具备责任心、爱心、耐心、亲和力；', '3.参与培训、教研和会议等活动；', '3.有教育或其他行业销售经验者优先；');
INSERT INTO `t_job` VALUES ('4', '4.有竞争力的薪资，包括底薪、提成等', '4.电话回访，日常沟通，同步辅导，作业批改等；', '4.本科以上英语、师范或教育专业，至少2年以上全职少儿英语教学经验，英语水平相当于专业4级或以上优先考虑；', '4.对学生的英语学习进展给予专业反馈和建议；', '4.熟练运用办公软件');
INSERT INTO `t_job` VALUES ('5', '5.五险，6天8小时工作制', '5.对学生的学习效果进行有效反馈，及时做出教学调整方案；', '5.有团队协作精神，良好的沟通表达能力，有服务意识，进取心，很强的组织协调能力；', '5.负责与老师、学生、家长、主管的全面有效沟通，确保信息统一和客户满意度', null);
INSERT INTO `t_job` VALUES ('6', '6.公平、透明的职业晋升平台，表现优秀的学习顾问，可提前竞聘或调整为主管岗位', '6.组织试听课、公开课，协助关单、续费等招生活动，与学习顾问协力为学员量身定制学习规划；', '6.可以适应弹性工作时间安排，如周末工作；', '6.协同团队完成每月的销售指标；', null);
INSERT INTO `t_job` VALUES ('7', '7.丰富多样的团队活动', '7.领导交付的其他任务。', '7.有学习钻研与创新意识，积极学习探索国际英语教学及儿童心理学前沿理论知识，并将其运用到工作中；', '7.组织参与市场推广等招生活动', null);
INSERT INTO `t_job` VALUES ('8', null, null, '8.教学水平及课控能力突出，英语教育专业知识丰富，乐于分享', '8.完成上级交付的其它工作任务安排', null);

-- ----------------------------
-- Table structure for `t_team`
-- ----------------------------
DROP TABLE IF EXISTS `t_team`;
CREATE TABLE `t_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_team
-- ----------------------------
INSERT INTO `t_team` VALUES ('1', '教学督导', 'Ms.Laura Zhou', 'member1.jpg', '美国TESL硕士， K-12 ESL美国育部注册教师，曾任教于美国公立学校，曾任美国加州知名培训机构校区总监。她帮助过很多世界各地的移民家庭学习英语并适应美国生活，帮助中国孩子找到学习方法、提高综合英语水平和应试能力。她的学生小到2岁半，大到60岁。 Laura老师带领麦金思教学团队一起探究适合中国青少儿语言发展的教学模式和方法。她尊重孩子的自我塑造和学习能力。她的专业研究领域为英语学习风格和学习策略，及儿童发展学。她的教育理念是“用心育人的教师会改变孩子的一生”。');
INSERT INTO `t_team` VALUES ('2', '美国教育专家', 'Dr. Sandy Chan', 'member2.jpg', 'Sandy博士带领麦金思美国教研专家团队为我们精心挑选并实时更新最适合中国孩子的英语教学资源，为我们的教师团队提供培训和教学支持。Sandy博士及团队成员在国内外有着多年的英语教学经验，在美国从事TESL和课程教学方面的研究数年，指导过很多国内外优秀英语教师，深知中国孩子学习英语的特点，并在国内外重要学术期刊发表过许多有关英语教研方面的文章。Sandy博士的教育理念是“找到每个孩子身上的亮点，点亮他们的人生”。');
INSERT INTO `t_team` VALUES ('3', '运营总监', 'Mr. Harris Zhang', 'member3.jpg', '本科就读于哈尔滨工业大学，持有美国工商管理硕士（MBA），美国会计与金融管理硕士，曾任职于美国和加拿大知名会计师事务所、企业战略咨询公司。他在北美工作期间，曾多次组织参与过扶持资助贫困儿童及家庭的计划，深知儿童教育的重要性。他决定投身于儿童教育事业，只为将最好的教育带给中国青少年儿童。');
INSERT INTO `t_team` VALUES ('4', '核心成员', 'Dr. Sandy Chan', 'member4.jpg', 'Sandy博士带领麦金思美国教研专家团队为我们精心挑选并实时更新最适合中国孩子的英语教学资源，为我们的教师团队提供培训和教学支持。Sandy博士及团队成员在国内外有着多年的英语教学经验，在美国从事TESL和课程教学方面的研究数年，指导过很多国内外优秀英语教师，深知中国孩子学习英语的特点，并在国内外重要学术期刊发表过许多有关英语教研方面的文章。Sandy博士的教育理念是“找到每个孩子身上的亮点，点亮他们的人生”。');

-- ----------------------------
-- Table structure for `t_webinfo`
-- ----------------------------
DROP TABLE IF EXISTS `t_webinfo`;
CREATE TABLE `t_webinfo` (
  `webinfo_id` int(11) NOT NULL AUTO_INCREMENT,
  `webinfo_tel` varchar(255) DEFAULT NULL,
  `webinfo_mail` varchar(255) DEFAULT NULL,
  `webinfo_website` varchar(255) DEFAULT NULL,
  `webinfo_phone` varchar(255) DEFAULT NULL,
  `webinfo_wechat` varchar(255) DEFAULT NULL,
  `webinfo_addr` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`webinfo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_webinfo
-- ----------------------------
INSERT INTO `t_webinfo` VALUES ('1', '0451-55157643', '09162839876@qq.com', 'www.mcgins.com', '13809764375', '86142083571', '地址要换行');
