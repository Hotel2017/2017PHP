-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 建立日期: 2017 年 06 月 23 日 16:00
-- 伺服器版本: 5.5.55-0ubuntu0.14.04.1
-- PHP 版本: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `final`
--

-- --------------------------------------------------------

--
-- 資料表結構 `dish`
--

CREATE TABLE IF NOT EXISTS `dish` (
  `d_ID` int(11) NOT NULL AUTO_INCREMENT,
  `d_Name` varchar(20) NOT NULL,
  `d_Kind` varchar(20) NOT NULL,
  `d_Intro` varchar(255) NOT NULL,
  `d_Price` varchar(5) NOT NULL,
  `d_EW` varchar(2) NOT NULL,
  `d_Inventory` varchar(5) NOT NULL,
  `d_Img1` varchar(50) NOT NULL,
  `d_Img2` varchar(50) NOT NULL,
  `d_Img3` varchar(50) NOT NULL,
  PRIMARY KEY (`d_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- 資料表的匯出資料 `dish`
--

INSERT INTO `dish` (`d_ID`, `d_Name`, `d_Kind`, `d_Intro`, `d_Price`, `d_EW`, `d_Inventory`, `d_Img1`, `d_Img2`, `d_Img3`) VALUES
(1, '咖哩飯', '', '牛肉、猪肉、雞肉', '60', '中餐', '5', 'chinese', '咖哩飯_1', ''),
(2, '小籠包', '', '猪肉/韭菜/高麗菜/鲜蝦', '50', '中餐', '10', 'chinese', '小籠包_1', '4_2'),
(3, '法式煎鹅肝', '', '上等鹅肝/蘋果、土豆、胡萝卜、面粉、黑胡椒、红酒、燒汁少許', '756', '西餐', '', 'western', '法式煎鵝肝_1', ''),
(4, '番茄肉酱意大利面', '', '番茄/番茄酱/肉末/盐/料酒/沙拉油', '90', '西餐', '2', 'western', '番茄肉醬義大利面_1', ''),
(5, '蛋炒飯好吃', '', '超級好吃的~~XD', '100', '中餐', '20', 'chinese', '蛋炒飯好吃', ''),
(6, '111', '', '555', '4556', '中餐', '1', 'chinese', '111', ''),
(7, '麻醬麵', '', '好吃好吃', '50', '中餐', '20', 'chinese', '麻醬麵', '');

-- --------------------------------------------------------

--
-- 資料表結構 `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `emp_ID` int(11) NOT NULL AUTO_INCREMENT,
  `emp_Pwd` varchar(20) NOT NULL,
  `emp_Name` varchar(20) NOT NULL,
  `emp_Identity` varchar(30) NOT NULL,
  `emp_Email` varchar(30) NOT NULL,
  `emp_Gender` varchar(30) NOT NULL,
  `emp_Position` varchar(10) NOT NULL,
  `emp_Authority` varchar(5) NOT NULL,
  `emp_Addr` varchar(50) NOT NULL,
  `emp_Phone` varchar(20) NOT NULL,
  `emp_Birth` date NOT NULL,
  `emp_EntryDate` date NOT NULL,
  `emp_Dept` varchar(5) NOT NULL,
  PRIMARY KEY (`emp_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 資料表的匯出資料 `employee`
--

INSERT INTO `employee` (`emp_ID`, `emp_Pwd`, `emp_Name`, `emp_Identity`, `emp_Email`, `emp_Gender`, `emp_Position`, `emp_Authority`, `emp_Addr`, `emp_Phone`, `emp_Birth`, `emp_EntryDate`, `emp_Dept`) VALUES
(1, '1', '12345', 'S123456789', '91@gmail.com             ', '男', '服務員', '1', '高雄楠梓區大學南路', '0989898989', '1980-04-20', '2017-04-21', '');

-- --------------------------------------------------------

--
-- 資料表結構 `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `inv_Num` int(11) NOT NULL AUTO_INCREMENT,
  `inv_ID` varchar(10) NOT NULL,
  `rr_OrderNumber` varchar(20) NOT NULL,
  `inv_Date` date DEFAULT NULL,
  `inv_RoomCount` varchar(10) NOT NULL,
  `mem_ID` int(11) DEFAULT NULL,
  `rr_ID` varchar(20) DEFAULT NULL,
  `emp_ID` int(11) DEFAULT NULL,
  `or_ID` int(11) DEFAULT NULL,
  `inv_Price` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`inv_Num`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 資料表的匯出資料 `invoice`
--

INSERT INTO `invoice` (`inv_Num`, `inv_ID`, `rr_OrderNumber`, `inv_Date`, `inv_RoomCount`, `mem_ID`, `rr_ID`, `emp_ID`, `or_ID`, `inv_Price`) VALUES
(8, '293785196', 'dftx78', '2017-06-05', '1', NULL, NULL, NULL, NULL, NULL),
(9, '248815652', 'mqhz4h', '2017-06-05', '1', NULL, NULL, NULL, NULL, NULL),
(10, '234842496', 's33txr', '2017-06-05', '2', NULL, NULL, NULL, NULL, NULL),
(11, '913352566', '5g335z', '2017-06-05', '1', NULL, NULL, NULL, NULL, NULL),
(12, '992317799', 'w3vr6y', '2017-06-06', '1', NULL, NULL, NULL, NULL, NULL),
(13, '792724818', 'ivzar8', '2017-06-06', '1', NULL, NULL, NULL, NULL, NULL),
(14, '586694328', 'h7a5f6', '2017-06-06', '1', NULL, NULL, NULL, NULL, NULL),
(15, '176276921', 'mqhz4h', '2017-06-06', '1', NULL, NULL, NULL, NULL, NULL),
(16, '215214253', 'uydvvv', '2017-06-06', '1', NULL, NULL, NULL, NULL, NULL),
(17, '234678627', 'uydvvv', '2017-06-06', '1', NULL, NULL, NULL, NULL, NULL),
(18, '499173735', 'mqhz4h', '2017-06-06', '1', NULL, NULL, NULL, NULL, NULL),
(19, '266481495', 'uydvvv', '2017-06-06', '1', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 替換檢視表以便查看 `inv_total`
--
CREATE TABLE IF NOT EXISTS `inv_total` (
`d_Price` varchar(5)
,`rr_OrderNumber` varchar(10)
,`or_ID` int(11)
,`d_ID` int(11)
,`or_Quantity` varchar(6)
,`rr_RoomNumber` varchar(10)
,`rr_Checkin` date
,`rr_Checkout` date
,`room_ID` int(11)
);
-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `mem_ID` int(11) NOT NULL AUTO_INCREMENT,
  `mem_Identity` varchar(15) NOT NULL,
  `mem_Pwd` varchar(50) NOT NULL,
  `mem_Email` varchar(50) NOT NULL,
  `mem_Name` varchar(20) NOT NULL,
  `mem_Phone` varchar(20) NOT NULL,
  `mem_Gender` varchar(2) NOT NULL,
  `mem_Date` date NOT NULL,
  `mem_Birth` date NOT NULL,
  `mem_Addr` varchar(50) NOT NULL,
  `mem_Authority` int(11) NOT NULL,
  `mem_Tel` varchar(20) NOT NULL,
  PRIMARY KEY (`mem_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`mem_ID`, `mem_Identity`, `mem_Pwd`, `mem_Email`, `mem_Name`, `mem_Phone`, `mem_Gender`, `mem_Date`, `mem_Birth`, `mem_Addr`, `mem_Authority`, `mem_Tel`) VALUES
(1, 'S123456788', '1', '12@gmail.com', '王凱駿', '0988888888', '男', '2017-04-26', '2000-01-01', '高雄路竹', 0, '07-6969874'),
(2, 'T122222222', '541@gamil.com', '541@gamil.com', '田安得', '0912365987', '男', '2017-04-26', '2001-12-31', '台南安平', 0, '06-8565412'),
(3, 'A122222222', 'abc@gmail.com', 'abc@gmail.com', '梁瀠之', '0955695789', '女', '2017-04-27', '2002-02-02', '台北信義', 0, '02-4752142'),
(4, 'B122222222', '978@gmail.com', '978@gmail.com', '荘于霆', '0929995995', '男', '2017-04-27', '2003-03-03', '台中太平', 0, '04-6142354'),
(5, 'w123456789', 'sie@kdi.com', 'sie@kdi.com', '測試', '0987541254', '男', '2017-05-16', '0000-00-00', '', 0, ''),
(6, 's223233443', 'dfdsd@ffdfd.com', 'dfdsd@ffdfd.com', '測試', '345432354', '男', '2017-05-23', '0000-00-00', '', 0, ''),
(7, 'S124444444', '1234@gmail.com', '1234@gmail.com', '王俊', '0987548785', '男', '2002-01-03', '0000-00-00', '', 0, ''),
(8, 'Y125421401', '1', 'xxxxx@gmail.com', '林義大', '09888112545', '男', '2017-05-31', '0000-00-00', '', 0, ''),
(16, 'T223894900', '123456', 'qu5906@hotmail.com.tw', '5967', '091234569', '男', '2017-06-01', '0000-00-00', '', 0, ''),
(17, 'T223894901', '123456', 'qu5907@hotmail.com.tw', '沉沉神', '0912121213', '男', '2017-06-02', '0000-00-00', '', 0, ''),
(18, 'S111111111', '12@gmail.com', '12@gmail.com', '王俊凱', '4984584156', '男', '2017-06-04', '0000-00-00', '', 0, ''),
(19, 'T111111111', 'qu5907@hotmail.com.tw', 'qu5907@hotmail.com.tw', '耶', '0912603896', '男', '2017-06-04', '0000-00-00', '', 0, ''),
(20, 'T121349976', 'good', 'goodbye@gmail.com', '田阿飛', '0987654321', '男', '2017-06-05', '0000-00-00', '', 0, ''),
(21, 'S124565854', '123@gmail.com', '123@gmail.com', '莊子', '0985452563', '男', '2017-06-05', '0000-00-00', '', 0, ''),
(22, 'R125465874', '1', '2@gmail.com', '測試', '0985478569', '男', '2017-06-05', '0000-00-00', '', 0, ''),
(23, 'B123456789', '9487@gggg.com.tw', '9487@gggg.com.tw', '你老爸', '0988666666', '男', '2017-06-06', '0000-00-00', '', 0, ''),
(24, 'S234567676', '1234@123.com', '1234@123.com', 'qwer', '1234567890', '男', '2017-06-06', '0000-00-00', '', 0, ''),
(25, 'S123432423', '3@gmail.com', '3@gmail.com', 'testfinal', '0923231232', '女', '2017-06-06', '0000-00-00', '', 0, ''),
(26, 'S224366754', 'qqwweerr1013@gmail.com', 'qqwweerr1013@gmail.com', '吳芊慧', '0932858673', '男', '2017-06-22', '0000-00-00', '', 0, ''),
(27, 'T123456789', '123@33.com', '123@33.com', 'uiu', '123', '男', '2017-06-22', '0000-00-00', '', 0, ''),
(28, 'T123456780', '123@33.com', '123@33.com', 'uiu3', '123', '男', '2017-06-22', '0000-00-00', '', 0, '');

-- --------------------------------------------------------

--
-- 資料表結構 `order_record`
--

CREATE TABLE IF NOT EXISTS `order_record` (
  `or_ID` int(11) NOT NULL AUTO_INCREMENT,
  `inv_Num` int(11) NOT NULL,
  `rr_ID` int(11) NOT NULL,
  `emp_ID` int(11) NOT NULL,
  `d_ID` int(11) NOT NULL,
  `or_Date` date NOT NULL,
  `or_Time` time NOT NULL,
  `or_Quantity` varchar(6) NOT NULL,
  PRIMARY KEY (`or_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=82 ;

--
-- 資料表的匯出資料 `order_record`
--

INSERT INTO `order_record` (`or_ID`, `inv_Num`, `rr_ID`, `emp_ID`, `d_ID`, `or_Date`, `or_Time`, `or_Quantity`) VALUES
(2, 0, 4, 0, 5, '2017-06-06', '14:42:00', '2'),
(3, 0, 4, 0, 3, '2017-06-06', '18:00:00', '1'),
(14, 0, 6, 0, 8, '2017-06-05', '21:59:00', '1'),
(15, 0, 4, 0, 1, '2017-06-06', '14:41:00', '1'),
(16, 0, 4, 0, 2, '2017-06-06', '14:41:00', '3'),
(17, 0, 4, 0, 8, '2017-06-06', '14:41:00', '2'),
(20, 0, 27, 0, 6, '2017-06-06', '17:18:00', '2'),
(22, 0, 27, 0, 5, '2017-06-06', '19:32:00', '1'),
(23, 0, 29, 0, 4, '2017-06-06', '20:11:00', '1'),
(24, 0, 30, 0, 4, '2017-06-06', '20:20:00', '1'),
(25, 0, 31, 0, 3, '2017-06-07', '11:40:00', '5'),
(27, 0, 32, 0, 0, '2017-06-08', '16:31:00', '1'),
(28, 0, 32, 0, 0, '2017-06-08', '16:31:00', '1'),
(29, 0, 37, 0, 0, '2017-06-22', '20:33:00', '4'),
(74, 0, 38, 0, 6, '2017-06-23', '13:30:00', '5'),
(75, 0, 38, 0, 1, '2017-06-23', '13:35:00', '3'),
(76, 0, 38, 0, 2, '2017-06-23', '13:35:00', '3'),
(77, 0, 38, 0, 5, '2017-06-23', '13:35:00', '3'),
(78, 0, 38, 0, 6, '2017-06-23', '13:35:00', '5'),
(79, 0, 38, 0, 3, '2017-06-23', '14:38:00', '5'),
(80, 0, 38, 0, 5, '2017-06-23', '14:38:00', '2'),
(81, 0, 38, 0, 6, '2017-06-23', '14:38:00', '1');

-- --------------------------------------------------------

--
-- 替換檢視表以便查看 `price_total`
--
CREATE TABLE IF NOT EXISTS `price_total` (
`Number` varchar(10)
,`total` double
);
-- --------------------------------------------------------

--
-- 資料表結構 `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `room_ID` int(11) NOT NULL AUTO_INCREMENT,
  `room_Name` varchar(20) NOT NULL,
  `room_Level` varchar(5) NOT NULL,
  `room_Price` varchar(5) NOT NULL,
  `room_Size` varchar(3) NOT NULL,
  `room_Intro` text NOT NULL,
  `room_Quantity` varchar(3) NOT NULL,
  `room_Img1` varchar(15) NOT NULL,
  `room_Img2` varchar(15) NOT NULL,
  `room_Img3` varchar(15) NOT NULL,
  `room_Img4` varchar(15) NOT NULL,
  `room_Img5` varchar(15) NOT NULL,
  `room_Remarks` text NOT NULL,
  PRIMARY KEY (`room_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 資料表的匯出資料 `room`
--

INSERT INTO `room` (`room_ID`, `room_Name`, `room_Level`, `room_Price`, `room_Size`, `room_Intro`, `room_Quantity`, `room_Img1`, `room_Img2`, `room_Img3`, `room_Img4`, `room_Img5`, `room_Remarks`) VALUES
(1, '仲夏夜之夢', '1', '2980', '雙人房', '《仲夏夜之夢》是威廉•莎士比亞在約1590年-1596年間創作的浪漫喜劇。它描繪了以雅典大公忒修斯和希波呂忒婚禮為中心的一系列故事。包括四名雅典戀人和六個業餘演員的冒險經歷，而森林裡的仙子們則在背後操作它們的命運。本戲劇是莎士比亞最流行的劇本之一，在全世界都有上演。<br>作為風靡全世界的劇本，以莎士比亞《仲夏夜之夢》為房間之設計發想，以【蒂塔妮亞與奧布朗的和解The Reconciliation of Titania and Oberon】帶出森林迷幻氛圍作為主題呈現，以【奧布朗、提泰妮婭和帕克魚跳舞的仙子oberon titania and puck with fairies dancing】營造仲夏夜仙子古靈精怪的形象，再以仙王奧布朗與仙后蒂塔妮雅The Quarrel of Oberon and Titania】、【荷米亞和萊賽德Hermia and Lysander】刻劃人物互動，並採綠色、白色為主色調，輔以羅馬柱、藤蔓花藝設計、金色雕花、線板設計與紗簾裝飾，藉由膾炙人口的當代經典鉅作，引領旅客進入風靡世界的戲劇情境。', '5', '21', '2_1', '2_2', '2_3', '2_4', '房型使用坪數為18坪 (一大床)\r\n房內附設：\r\n冰箱 / 熱水壺 / 咖啡包 / 茶包 / 礦泉水 / 吹風機 / 毛巾 / 浴巾 / 精美備品組\r\n客房設備：\r\n液晶電視 / 標準床鋪 / 浴缸(乾濕分離衛浴) / 辦公桌椅 / 衣櫃 / 全館免費寬頻上網 / 國際衛星傳訊節目 / 恆溫控制空調系統 / 個人按鍵式保險箱 / 國際直撥外線電話\r\n\r\n入宿均附贈活力早安套餐 (供餐時間07:00～10:00)\r\nCheck in：3 P.M. 、 Check out：12 P.M.\r\n\r\n◎ 凡住房旅客可享新店捷運站接駁服務\r\n服務時間08:00 ~ 17:00，整點發車。(請提前一小時預約)\r\n\r\n'),
(2, '羅密歐與茱麗葉', '2', '3120', '雙人房', '《羅密歐與茱麗葉》是威廉•莎士比亞著名戲劇作品之一，戲劇講述了兩位青年男女相戀，卻因家族仇恨而遭不幸，最後導致兩家和好的故事。戲劇在莎士比亞年代頗為流行，並與《哈姆雷特》一道成為最常上演的戲劇。今天，戲劇主角被認為是青年戀人的典型。<br>作為最廣熟人之的戲劇，以莎士比亞《羅密歐與茱麗葉》為房間之設計發想，以【羅密歐與茱麗葉Romeo and Juliet】兩人相擁吻的場景作為主題開端，以【保羅和弗朗西斯達里米尼Paolo and Francesca da Rimini】帶出劇中糾葛的情感掙扎，房內採紅色、金色為主色調，銅雕擺飾與愛心抱枕帶出愛戀情境氛圍，並將花藝設計、金色雕花、線板設計融入主題，以銅雕擺飾與愛心抱枕刻劃愛戀情境氛圍，藉由羅密歐與茱麗葉的佳美歷史與真摯愛情，帶領旅客遊歷經典鉅作。', '6', '23', '2_1', '2_2', '2_3', '2_4', '房型使用坪數為18坪 (一大床)\r\n房內附設：\r\n冰箱 / 熱水壺 / 咖啡包 / 茶包 / 礦泉水 / 吹風機 / 毛巾 / 浴巾 / 精美備品組\r\n客房設備：\r\n液晶電視 / 標準床鋪 / 浴缸(乾濕分離衛浴) / 辦公桌椅 / 衣櫃 / 全館免費寬頻上網 / 國際衛星傳訊節目 / 恆溫控制空調系統 / 個人按鍵式保險箱 / 國際直撥外線電話\r\n\r\n入宿均附贈活力早安套餐 (供餐時間07:00～10:00)\r\nCheck in：3 P.M. 、 Check out：12 P.M.\r\n\r\n◎ 凡住房旅客可享新店捷運站接駁服務\r\n服務時間08:00 ~ 17:00，整點發車。(請提前一小時預約)\r\n'),
(3, '十日談雙人房', '1', '4900', '雙人房', '才華洋溢的薄伽丘是位多產作家，寫過無數流傳後世的文學作品，居住於那不勒斯，擁有多情放蕩的早年生活，晚年至文藝復興的始源地－佛羅倫斯生活。<br>以黑死病瘟疫為背景，薄伽丘創作了《十日談》，其寫實主義風格，引領後世西方文學發展，與但丁的《神曲》相提並論，被稱之為《人曲》。 作為文藝復興傑出代表，以薄伽丘《十日談》為房間之設計發想，以書中故事經典場景畫作【十日談 The Decameron】作為主題開端，並採蔚藍與金色系為主色調，於房內擺放《十日談》一書；帶領旅客進入書中一百個短篇故事中。', '5', '23', '2_1', '2_2', '2_3', '2_4', '房型使用坪數為7坪 (雙人床)\r\n房內附設：\r\n冰箱 / 熱水壺 / 咖啡包 / 茶包 / 礦泉水 / 吹風機 / 毛巾 / 浴巾 / 精美備品組\r\n客房設備：\r\n液晶電視 / 標準床鋪 / 乾濕分離衛浴 / 辦公桌椅 / 衣櫃 / 全館免費寬頻上網 / 國際衛星傳訊節目 / 恆溫控制空調系統 / 個人按鍵式保險箱 / 國際直撥外線電話\r\n\r\n入宿均附贈活力早安套餐 (供餐時間07:00～10:00)\r\nCheck in：3 P.M. 、 Check out：12 P.M.\r\n'),
(4, '拉斐爾雙人房', '3', '8990', '雙人房', '義大利畫家、建築師，繪畫以「秀美」著稱，畫作中的人物清秀，場景祥和，在佛羅倫斯時期，他吸取十五世紀繪畫精神，並吸取了達文西的技法，而逐漸形成圓潤柔和的風格。他用世俗化的描寫方式處理宗教題材，並且參用生活中母親與幼兒的形象將聖母抱聖嬰的畫像加以理想化。他的作品特色是充分體現了安寧、和諧、協調、對稱及恬靜的秩序。<br /><br>作為文藝復興三傑之一，以拉斐爾為房間之設計發想，由穿越神話及當代詩人的【帕納蘇斯山The Parnassus】作為主題開端，以跨越天地的教會【聖禮的辯論The Fire in the Sacrament】呈現拉斐爾將人神而一的精典場景，再以【帶金翅雀的聖母Madonna of the Goldfinch】表現其細膩和諧的畫風，並採咖啡色、金色與白色系為主色調，搭配金色雕花與線板設計，輔以聖母親吻小天使雕像擺飾，帶領旅客深入平和、文雅性情的拉斐爾筆下的質樸風情。', '3', '24', '2_1', '2_2', '2_3', '2_4', '房型使用坪數為12坪 (雙人床)\r\n房內附設：\r\n冰箱 / 熱水壺 / 咖啡包 / 茶包 / 礦泉水 / 吹風機 / 毛巾 / 浴巾 / 精美備品組\r\n客房設備：\r\n液晶電視 / 標準床鋪 / 浴缸(乾濕分離衛浴) / 辦公桌椅 / 衣櫃 / 全館免費寬頻上網 / 國際衛星傳訊節目 / 恆溫控制空調系統 / 個人按鍵式保險箱 / 國際直撥外線電話\r\n\r\n入宿均附贈活力早安套餐 (供餐時間07:00～10:00)\r\nCheck in：3 P.M. 、 Check out：12 P.M.\r\n\r\n入宿均附贈活力早安套餐 (供餐時間07:00～10:00)\r\nCheck in：3 P.M. 、 Check out：12 P.M.\r\n'),
(5, '神曲四人房', '2', '6990', '四人房', '義大利中世紀詩人－但丁，是現代義大利語的奠基者及歐洲文藝復興時代的開拓人物，以史詩《神曲》留名後世。在義大利被稱至高詩人和義大利語之父。恩格斯評價說：「封建的中世紀的終結和現代資本主義紀元的開端，是以一位大人物為標誌的，這位人物就是義大利人但丁，他是中世紀的最後一位詩人，同時又是新時代的最初一位詩人」。<br />作為文藝復興文學領域的先驅，以但丁《神曲》為房間之設計發想，將書裡所描述之但丁在地獄（Inferno）、煉獄 （Purgatorio）及天堂（Paradiso）遊歷經過，以【地獄圖hell】作為主題開端，以【伊甸園 Garden of Eden】呈現書中場景一隅，由【但丁畫像Dante Portrait】介紹作者，並採橘紅色、金色與墨綠色系為主色調，於房內擺放《神曲》一書，帶領旅客進入但丁筆下的神幻世界。', '3', '41', '4_1', '4_2', '4_3', '4_4', '房型使用坪數為12坪 (雙人床X2)\r\n房內附設：\r\n冰箱 / 熱水壺 / 咖啡包 / 茶包 / 礦泉水 / 吹風機 / 毛巾 / 浴巾 / 精美備品組\r\n客房設備：\r\n液晶電視 / 標準床鋪 / 浴缸(乾濕分離衛浴) / 辦公桌椅 / 衣櫃 / 全館免費寬頻上網 / 國際衛星傳訊節目 / 恆溫控制空調系統 / 個人按鍵式保險箱 / 國際直撥外線電話\r\n\r\n入宿均附贈活力早安套餐 (供餐時間07:00～10:00)\r\nCheck in：3 P.M. 、 Check out：12 P.M.\r\n\r\n◎ 凡住房旅客可享新店捷運站接駁服務\r\n服務時間08:00 ~ 17:00，整點發車。(請提前一小時預約)'),
(6, '羅馬四人房', '3', '10990', '四人房', '做為中古世紀歐洲重要文化集中地，將古希臘文明吸收並延續發展，擁有跨世紀的建築技術、充滿愛恨情仇的神話史詩，成為文藝復興時期，藝術家們效仿及創作的靈感泉源。為完整介紹文藝復興之始源，以古羅馬帝國為房間之設計發想，將象徵黎明曙光的歐若拉女神畫像【曙光與極光女神－極光Aurora】作為主題開端，以代表收穫的【掌管豐收女神－豐度與慷概L''Abondance et la Libéralité】畫作象徵大帝國的繁榮，營造古羅馬神話史詩氛圍；再輔以擁有帝國建築特色的【萬神殿等古蹟Roman Capriccio:The Pantheon  Other Monuments】、【輝煌成就The Consummatation of The Empire】，呈現古羅馬帝國壯麗盛世，並將羅馬柱、馬爾斯戰神雕像等房內裝飾，經典重現羅馬帝國昔日輝煌與磅礡氣勢。', '4', '42', '4_1', '4_2', '4_3', '4_4', '房型使用坪數為12坪 (雙人床X2)\n房內附設：\n冰箱 / 熱水壺 / 咖啡包 / 茶包 / 礦泉水 / 吹風機 / 毛巾 / 浴巾 / 精美備品組\n客房設備：\n液晶電視 / 標準床鋪 / 浴缸(乾濕分離衛浴) / 辦公桌椅 / 衣櫃 / 全館免費寬頻上網 / 國際衛星傳訊節目 / 恆溫控制空調系統 / 個人按鍵式保險箱 / 國際直撥外線電話\n\n入宿均附贈活力早安套餐 (供餐時間07:00～10:00)\nCheck in：3 P.M. 、 Check out：12 P.M.\n\n◎ 凡住房旅客可享新店捷運站接駁服務\n服務時間08:00 ~ 17:00，整點發車。(請提前一小時預約).');

-- --------------------------------------------------------

--
-- 資料表結構 `room_number`
--

CREATE TABLE IF NOT EXISTS `room_number` (
  `rn_ID` int(11) NOT NULL AUTO_INCREMENT,
  `rn_RoomID` int(11) NOT NULL,
  `rn_RoomNumber` varchar(10) NOT NULL,
  PRIMARY KEY (`rn_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 資料表的匯出資料 `room_number`
--

INSERT INTO `room_number` (`rn_ID`, `rn_RoomID`, `rn_RoomNumber`) VALUES
(1, 1, '101'),
(2, 1, '102'),
(3, 1, '103'),
(4, 1, '201'),
(5, 1, '202'),
(6, 2, '104'),
(7, 2, '105'),
(8, 2, '106'),
(9, 2, '203'),
(10, 2, '204'),
(11, 2, '301'),
(12, 3, '205'),
(13, 3, '206'),
(14, 3, '302'),
(15, 3, '303'),
(16, 3, '304'),
(17, 4, '305'),
(18, 4, '306'),
(19, 4, '401'),
(20, 5, '402'),
(21, 5, '403'),
(22, 5, '501'),
(23, 6, '404'),
(24, 6, '405'),
(25, 6, '406'),
(26, 6, '502');

-- --------------------------------------------------------

--
-- 資料表結構 `room_record`
--

CREATE TABLE IF NOT EXISTS `room_record` (
  `rr_ID` int(11) NOT NULL AUTO_INCREMENT,
  `room_ID` int(11) NOT NULL,
  `rr_OrderNumber` varchar(10) NOT NULL,
  `rr_RoomNumber` varchar(10) NOT NULL,
  `inv_Num` int(11) DEFAULT NULL,
  `rr_DATE` datetime NOT NULL,
  `rr_Member` varchar(20) NOT NULL,
  `rr_RoomCount` varchar(10) NOT NULL,
  `rr_Checkin` date NOT NULL,
  `rr_Checkout` date NOT NULL,
  `rr_People` varchar(2) DEFAULT NULL,
  `rr_State` varchar(2) NOT NULL,
  `rr_VisaCheck` varchar(2) NOT NULL,
  `rr_finish` int(2) NOT NULL,
  PRIMARY KEY (`rr_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- 資料表的匯出資料 `room_record`
--

INSERT INTO `room_record` (`rr_ID`, `room_ID`, `rr_OrderNumber`, `rr_RoomNumber`, `inv_Num`, `rr_DATE`, `rr_Member`, `rr_RoomCount`, `rr_Checkin`, `rr_Checkout`, `rr_People`, `rr_State`, `rr_VisaCheck`, `rr_finish`) VALUES
(1, 4, 'w3vr6y', '305', NULL, '2017-06-04 15:45:23', 'T223894901', '1', '2017-06-16', '2017-06-17', NULL, '1', '1', 1),
(2, 4, 'vs6pfs', '306', NULL, '2017-06-04 15:49:26', 'T223894901', '1', '2017-06-16', '2017-06-19', NULL, '0', '0', 0),
(3, 4, 'vs6pfs', '401', NULL, '2017-06-04 15:49:26', 'T223894901', '1', '2017-06-16', '2017-06-19', NULL, '0', '0', 0),
(4, 1, '5g335z', '101', NULL, '2017-06-04 15:52:21', 'T223894901', '1', '2017-06-04', '2017-07-04', NULL, '0', '1', 1),
(5, 4, 'pi6dc6', '305', NULL, '2017-06-04 16:11:03', 'S111111111', '1', '2017-06-17', '2017-06-19', NULL, '1', '1', 0),
(6, 1, 'ivzar8', '102', NULL, '2017-06-04 21:52:30', 'S123456788', '1', '2017-06-04', '2017-06-05', NULL, '0', '1', 1),
(7, 1, '3kpwyw', '102', NULL, '2017-06-04 23:07:50', 'T223894901', '1', '2017-06-28', '2017-06-29', NULL, '1', '1', 0),
(8, 1, 'vwdrhy', '103', NULL, '2017-06-04 23:44:28', 'T111111111', '1', '2017-06-04', '2017-06-05', NULL, '1', '0', 0),
(9, 1, 'h7a5f6', '201', NULL, '2017-06-04 23:49:39', 'T111111111', '1', '2017-06-04', '2017-06-05', NULL, '1', '1', 1),
(10, 2, 'k2wf5b', '104', NULL, '2017-06-04 23:58:29', 'T223894901', '1', '2017-06-04', '2017-06-05', NULL, '0', '0', 0),
(11, 1, 'u2ub5i', '202', NULL, '2017-06-04 23:58:39', 'T223894901', '1', '2017-06-04', '2017-06-05', NULL, '0', '0', 0),
(12, 1, 's8pwni', '102', NULL, '2017-06-05 00:00:27', 'T223894901', '1', '2017-06-06', '2017-06-07', NULL, '0', '0', 0),
(13, 1, 'pymdj2', '102', NULL, '2017-06-05 00:00:38', 'T223894901', '1', '2017-06-05', '2017-06-06', NULL, '0', '0', 0),
(14, 4, 'i2negt', '305', NULL, '2017-06-05 00:01:43', 'T223894901', '1', '2017-06-05', '2017-06-06', NULL, '0', '0', 0),
(15, 1, '67yd2a', '102', NULL, '2017-06-05 00:11:14', 'T223894901', '1', '2017-06-05', '2017-06-06', NULL, '0', '0', 0),
(16, 3, 's33txr', '205', NULL, '2017-06-05 01:03:51', 'T223894901', '1', '2017-06-05', '2017-06-07', NULL, '1', '1', 1),
(17, 3, 's33txr', '206', NULL, '2017-06-05 01:03:51', 'T223894901', '1', '2017-06-05', '2017-06-07', NULL, '1', '1', 1),
(18, 1, 'evj356', '102', NULL, '2017-06-05 15:11:57', 'T121349976', '1', '2017-06-07', '2017-06-08', NULL, '1', '0', 0),
(19, 1, 'hxdh97', '101', NULL, '2017-06-05 15:16:26', 'T121349976', '1', '2017-06-05', '2017-06-06', NULL, '1', '0', 0),
(20, 1, 'j65yzg', '102', NULL, '2017-06-05 15:17:13', 'T121349976', '1', '2017-06-05', '2017-06-06', NULL, '1', '0', 0),
(21, 1, '7uz5jq', '103', NULL, '2017-06-05 15:17:20', 'T121349976', '1', '2017-06-05', '2017-06-06', NULL, '1', '0', 0),
(22, 5, 'mqhz4h', '402', NULL, '2017-06-05 20:10:59', 'S124565854', '1', '2017-06-05', '2017-06-06', NULL, '1', '1', 1),
(23, 3, 'zcxrfw', '205', NULL, '2017-06-05 20:44:32', 'R125465874', '1', '2017-06-09', '2017-06-13', NULL, '1', '0', 0),
(24, 2, 'dftx78', '104', NULL, '2017-06-05 20:45:27', 'R125465874', '1', '2017-06-05', '2017-06-06', NULL, '1', '1', 1),
(25, 1, 'ff4ak7', '103', NULL, '2017-06-06 00:50:26', 'B123456789', '1', '2017-06-06', '2017-06-07', NULL, '1', '1', 0),
(26, 1, '8yw4n9', '101', NULL, '2017-06-06 16:30:12', 'S234567676', '1', '2017-08-06', '2017-08-07', NULL, '1', '1', 0),
(27, 2, 'uydvvv', '104', NULL, '2017-06-06 16:33:08', 'S234567676', '1', '2017-06-05', '2017-06-06', NULL, '1', '1', 1),
(28, 4, 's94buv', '305', NULL, '2017-06-06 19:07:32', 'S123432423', '1', '2017-06-06', '2017-06-07', NULL, '1', '1', 0),
(29, 5, 'fg78pt', '402', NULL, '2017-06-06 19:25:39', 'S123456788', '1', '2017-06-06', '2017-06-07', NULL, '1', '1', 0),
(30, 5, '2fida4', '403', NULL, '2017-06-06 19:35:16', 'S123456788', '1', '2017-06-06', '2017-06-07', NULL, '1', '1', 0),
(31, 3, '63mft2', '302', NULL, '2017-06-06 23:02:59', 'S123456788', '1', '2017-06-06', '2017-06-07', NULL, '1', '1', 0),
(32, 5, 'zqbrak', '402', NULL, '2017-06-07 12:47:21', 'S123456788', '1', '2017-06-07', '2017-06-08', NULL, '1', '0', 0),
(33, 1, 'vmi3zd', '101', NULL, '2017-06-08 15:00:48', 'S123456788', '1', '2017-06-08', '2017-06-09', NULL, '1', '0', 0),
(34, 1, 'm98tii', '102', NULL, '2017-06-22 10:17:34', 'S224366754', '1', '2017-06-22', '2017-06-23', NULL, '1', '0', 0),
(35, 1, 'w57zun', '103', NULL, '2017-06-22 19:33:20', 'T123456789', '1', '2017-06-22', '2017-06-23', NULL, '1', '0', 0),
(36, 1, '2kdc4w', '201', NULL, '2017-06-22 19:33:42', 'T123456780', '1', '2017-06-22', '2017-06-23', NULL, '1', '0', 0),
(37, 2, '54sb6d', '104', NULL, '2017-06-22 19:48:27', 'S234567676', '1', '2017-06-22', '2017-06-23', NULL, '1', '0', 0),
(38, 1, 'hb8bmm', '101', NULL, '2017-06-23 12:28:38', 'S123456788', '1', '2017-06-23', '2017-06-24', NULL, '1', '0', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `text`
--

CREATE TABLE IF NOT EXISTS `text` (
  `text_id` int(5) NOT NULL AUTO_INCREMENT,
  `text_name` varchar(20) NOT NULL,
  `text_title` varchar(20) NOT NULL,
  `text_content` text NOT NULL,
  `text_time` datetime NOT NULL,
  `text_subtitle` varchar(20) NOT NULL,
  PRIMARY KEY (`text_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 資料表的匯出資料 `text`
--

INSERT INTO `text` (`text_id`, `text_name`, `text_title`, `text_content`, `text_time`, `text_subtitle`) VALUES
(1, 'index_introduct', '世界的巔峰', '吾宿山位在世界的巔峰，在天氣好的時候可以看見全世界，運氣好時還能看見自由女神呢！？\r\n吾宿山也未在交通樞紐的附近，無論您是要搭機、坐高鐵、坐捷運、搭公車，這些皆在吾宿山的附近。\r\n交通方便的同時也能兼顧您的娛樂以及休閒需求，您能方便的到達西馬拉亞購物中心、暴風雪商圈、藏獒運動中心、冰山夜市....\r\n無論您想要閒逛、購物、還是用餐或閒遊吾宿山覺得是您在西馬拉雅山上的最佳選擇。\r\n我們秉持著顧客至上的經營理念，每一位客人都是我們的VIP，我們希望能夠用最親切的服務，讓您的旅程更佳的美好。\r\n', '2017-04-28 15:10:16', '吾宿山國際大飯店'),
(3, 'index_promotion1', '歡慶畢業優惠', 'Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.', '0000-00-00 00:00:00', ''),
(5, 'index_promotion2', '藝起遊玩趣', 'Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.', '0000-00-00 00:00:00', ''),
(8, 'index_promotion3', '會員年費特價中', 'Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.', '0000-00-00 00:00:00', ''),
(9, 'index_promotion4', '入住贈送豪華套餐', 'Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.', '0000-00-00 00:00:00', ''),
(11, 'index_local_guide', '', '吾宿山連結 機場/高鐵/捷運/公車 等重要交通樞紐。讓您輕鬆自在暢遊西馬拉雅山的雪地風貌，並且給您商務/娛樂/美食/購物一次滿足！', '2017-05-31 20:42:34', '');

-- --------------------------------------------------------

--
-- 檢視表結構 `inv_total`
--
DROP TABLE IF EXISTS `inv_total`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `inv_total` AS select `dish`.`d_Price` AS `d_Price`,`room_record`.`rr_OrderNumber` AS `rr_OrderNumber`,`order_record`.`or_ID` AS `or_ID`,`order_record`.`d_ID` AS `d_ID`,`order_record`.`or_Quantity` AS `or_Quantity`,`room_record`.`rr_RoomNumber` AS `rr_RoomNumber`,`room_record`.`rr_Checkin` AS `rr_Checkin`,`room_record`.`rr_Checkout` AS `rr_Checkout`,`room_record`.`room_ID` AS `room_ID` from ((`room_record` left join `order_record` on((`room_record`.`rr_ID` = `order_record`.`rr_ID`))) left join `dish` on((`dish`.`d_ID` = `order_record`.`d_ID`)));

-- --------------------------------------------------------

--
-- 檢視表結構 `price_total`
--
DROP TABLE IF EXISTS `price_total`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `price_total` AS select `inv_total`.`rr_OrderNumber` AS `Number`,sum((`inv_total`.`d_Price` * `inv_total`.`or_Quantity`)) AS `total` from `inv_total` group by `inv_total`.`rr_OrderNumber`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
