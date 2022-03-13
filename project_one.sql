-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 13, 2022 lúc 05:28 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project_one`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(10) NOT NULL,
  `image` varchar(250) NOT NULL,
  `type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id_banner`, `image`, `type`) VALUES
(2, 'banner_1.jpg', 0),
(3, 'banner_2.jpg', 0),
(4, 'banner_3.jpg', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_lesson` int(10) NOT NULL,
  `content` varchar(250) NOT NULL,
  `child` int(10) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments_post`
--

CREATE TABLE `comments_post` (
  `id_comment_post` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_post` int(10) NOT NULL,
  `content` varchar(250) NOT NULL,
  `id_parent` int(10) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comments_post`
--

INSERT INTO `comments_post` (`id_comment_post`, `id_user`, `id_post`, `content`, `id_parent`, `time`) VALUES
(79, 5, 2, 'dược của nó', 0, '2021-12-04 14:18:37'),
(86, 2, 2, ' hay ho thật', 0, '2021-12-06 14:26:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `course` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id_contact`, `name`, `email`, `phone_number`, `course`) VALUES
(1, 'thành', 'thanh@gmail.vn', 354170252, 'Tiếng anh cho trẻ'),
(2, 'admin', 'thanne@gmail.comh', 354140258, 'Khóa Học Tiếng Anh ielts'),
(3, 'thanhne', 'manhquan@gmail.com', 355518, 'Khóa Học Cơ Bản');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course`
--

CREATE TABLE `course` (
  `id_caurse` int(10) NOT NULL,
  `NameCaurse` varchar(50) NOT NULL,
  `img` varchar(150) NOT NULL,
  `price` int(10) NOT NULL,
  `description` mediumtext NOT NULL,
  `type` int(1) NOT NULL,
  `id_route` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `course`
--

INSERT INTO `course` (`id_caurse`, `NameCaurse`, `img`, `price`, `description`, `type`, `id_route`) VALUES
(11, 'Khóa Học Tiếng Anh ielts', 'objective_enc_2017097_1_256.jpg', 70000, 'không có gì tuyệt hơn      ', 1, 3),
(12, 'Khóa Học Cơ Bản', 'objective_en_complete_a2_75_256.jpg', 0, 'chuất                       ', 0, 2),
(15, 'Tiếng Anh TOEIC', 'objective_en_complete_b1_34_256.jpg', 90000, 'được  ', 1, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `forum_post`
--

CREATE TABLE `forum_post` (
  `id_post` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `content` mediumtext NOT NULL,
  `time` datetime NOT NULL,
  `img` varchar(255) NOT NULL,
  `interactions` int(10) NOT NULL,
  `title_post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `forum_post`
--

INSERT INTO `forum_post` (`id_post`, `id_user`, `content`, `time`, `img`, `interactions`, `title_post`) VALUES
(2, 5, '<p>Thế kỷ 21 l&agrave; một thời đại mới, thời đại của Internet v&agrave; to&agrave;n cầu h&oacute;a. Ở mỗi thời đại, lại c&oacute; những nh&acirc;n vật c&oacute; ảnh hưởng v&ocirc; c&ugrave;ng lớn đến thế giới. Ở thế kỷ 20, đ&oacute; l&agrave; Albert Einstein, Adolf Hitler, Winston Churchill, Lenin, Stalin...C&ograve;n thế kỷ 21 đ&oacute; l&agrave; những ai? H&atilde;y c&ugrave;ng Toplist điểm qua 10 gương mặt c&oacute; ảnh hưởng lớn nhất thế kỷ 21 theo tạp ch&iacute; TIME b&igrave;nh chọn nh&eacute;.</p>\r\n\r\n<p><strong>Bill Gates</strong></p>\r\n\r\n<p>Bill Gates, t&ecirc;n thật l&agrave; William Henry &quot;Bill&quot; Gates III, l&agrave; một tỉ ph&uacute; người Mỹ, người s&aacute;ng lập v&agrave; l&agrave; chủ tịch của Microsoft. &Ocirc;ng lu&ocirc;n nằm trong danh s&aacute;ch top 10 người gi&agrave;u nhất thế giới v&agrave; l&agrave; nh&agrave; qu&aacute;n qu&acirc;n từ năm 1995 đến 2014, trừ năm 2008 &ocirc;ng xếp thứ 3.</p>\r\n\r\n<blockquote>\r\n<p>BILL GATES, REAL NAME WILLIAM HENRY &quot;BILL&quot; GATES III, IS AN AMERICAN BILLIONAIRE, FOUNDER AND CHAIRMAN OF MICROSOFT. HE IS ALWAYS ON THE LIST OF THE TOP 10 RICHEST PEOPLE IN THE WORLD AND WAS THE CHAMPION FROM 1995 TO 2014, EXCEPT IN 2008 HE RANKED 3RD.</p>\r\n</blockquote>\r\n\r\n<p>Bill Gates sinh ng&agrave;y sinh ng&agrave;y 28 th&aacute;ng 10 năm 1955. &Ocirc;ng đ&atilde; từng theo học đại học Harvard nhưng v&igrave; đam m&ecirc; với m&aacute;y t&iacute;nh, &ocirc;ng đ&atilde; bỏ học để s&aacute;ng lập ra tập đo&agrave;n Microsoft.</p>\r\n\r\n<blockquote>\r\n<p>BILL GATES WAS BORN ON OCTOBER 28, 1955. HE ATTENDED HARVARD UNIVERSITY, BUT BECAUSE OF HIS PASSION FOR COMPUTERS, HE DROPPED OUT TO FOUND MICROSOFT CORPORATION.</p>\r\n</blockquote>\r\n\r\n<p>Với th&agrave;nh tựu quan trọng của Microsoft: cung cấp hệ điều h&agrave;nh Window v&agrave; nhiều phần mềm, c&ocirc;ng nghệ kh&aacute;c, Bill Gates đ&atilde; được vinh danh trong danh s&aacute;ch những người c&oacute; tầm ảnh hưởng lớn nhất thế kỷ 20 của TIME, giờ đ&acirc;y, Bill Gates lại tiếp tục nằm trong Top 10 nh&acirc;n vật c&oacute; tầm ảnh hưởng lớn nhất thế kỷ 21 với 4 năm được b&igrave;nh chọn: 2004, 2005, 2006 v&agrave; 2010.</p>\r\n\r\n<blockquote>\r\n<p>WITH MICROSOFT&#39;S IMPORTANT ACHIEVEMENT: PROVIDING THE WINDOWS OPERATING SYSTEM AND MANY OTHER SOFTWARE AND TECHNOLOGIES, BILL GATES HAS BEEN HONORED IN TIME&#39;S LIST OF THE MOST INFLUENTIAL PEOPLE OF THE 20TH CENTURY, NOW, BILL GATES GATES CONTINUES TO BE IN THE TOP 10 MOST INFLUENTIAL PEOPLE OF THE 21ST CENTURY WITH 4 YEARS OF VOTING: 2004, 2005, 2006 AND 2010.</p>\r\n</blockquote>\r\n\r\n<p><img alt=\"\" src=\"https://toplist.vn/images/800px/bill-gates-51463.jpg\" /></p>\r\n\r\n<p><strong>Aung San Suu Kyi</strong></p>\r\n\r\n<p>Aung San Suu Kyl l&agrave; một ch&iacute;nh trị gia người Myanmar, v&igrave; những hoạt động ch&iacute;nh trị chống lại sự độc t&agrave;i của ch&iacute;nh quyền qu&acirc;n sự Myanmar m&agrave; b&agrave; phải chịu sự quản th&uacute;c tại gia của ch&iacute;nh quyền suốt 15 năm, cho tới khi được thả gần đ&acirc;y nhất v&agrave;o năm 2011, qua đ&oacute; trở th&agrave;nh một trong những t&ugrave; nh&acirc;n ch&iacute;nh trị được biết đến nhiều nhất tr&ecirc;n thế giới.</p>\r\n\r\n<blockquote>\r\n<p>AUNG SAN SUU KYL IS A MYANMAR POLITICIAN, BECAUSE OF HER POLITICAL ACTIVITIES AGAINST THE DICTATORSHIP OF THE MYANMAR MILITARY GOVERNMENT, SHE WAS UNDER HOUSE ARREST BY THE GOVERNMENT FOR 15 YEARS, UNTIL HER RELEASE. MOST RECENTLY IN 2011, THEREBY BECOMING ONE OF THE MOST KNOWN POLITICAL PRISONERS IN THE WORLD.</p>\r\n</blockquote>\r\n\r\n<p>Aung San Suu Kyi sinh ng&agrave;y 19 th&aacute;ng 6 năm 1945, l&agrave; l&atilde;nh tụ phe đối lập của Myanmar, chủ tịch Đảng Li&ecirc;n minh Quốc gia v&igrave; D&acirc;n chủ. B&agrave; đ&atilde; tham gia cuộc bầu cử phổ th&ocirc;ng năm 1990, gi&agrave;nh 59% tổng số phiếu v&agrave; 81% ghế trong Nghị viện nhưng lại kh&ocirc;ng được ch&iacute;nh quyền qu&acirc;n sự Myanmar c&ocirc;ng nhận m&agrave; ngược lại, bị kết tội v&agrave; phải chịu quản th&uacute;c của ch&iacute;nh quyền.</p>\r\n\r\n<blockquote>\r\n<p>AUNG SAN SUU KYI (BORN JUNE 19, 1945) IS A MYANMAR OPPOSITION LEADER AND CHAIRMAN OF THE NATIONAL LEAGUE FOR DEMOCRACY. SHE PARTICIPATED IN THE POPULAR ELECTIONS IN 1990, WON 59% OF THE TOTAL VOTES AND 81% OF THE SEATS IN THE PARLIAMENT, BUT WAS NOT RECOGNIZED BY THE MYANMAR MILITARY JUNTA, BUT ON THE CONTRARY, WAS CONVICTED AND PUT UNDER HOUSE ARREST BY THE GOVERNMENT. PERMISSION.</p>\r\n</blockquote>\r\n\r\n<p>Với những hoạt động v&igrave; nh&acirc;n quyền, d&acirc;n chủ, chống độc t&agrave;i của m&igrave;nh, b&agrave; Aung San Suu Kyi đ&atilde; được nhận giải Nobel H&ograve;a b&igrave;nh năm 1991, giải tưởng niệm Thorolf Rafto v&agrave; giải thưởng Sakharov cho Tự do Tư tưởng năm 1990, giải Jawaharlal Nehru cho sự Th&ocirc;ng cảm quốc tế của ch&iacute;nh phủ Ấn Độ c&ugrave;ng Giải thưởng Sim&oacute;n Bol&iacute;var của ch&iacute;nh phủ Venezuela v&agrave;o năm 1992, huy chương v&agrave;ng Wallenberg năm 2011 v&agrave; Hu&acirc;n chương V&agrave;ng Quốc hội của Hoa Kỳ năm 2012.</p>\r\n\r\n<blockquote>\r\n<p>AUNG SAN SUU KYI WAS AWARDED THE NOBEL PEACE PRIZE IN 1991, THE THOROLF RAFTO MEMORIAL PRIZE AND THE SAKHAROV PRIZE FOR FREEDOM OF THOUGHT IN 1990, FOR HER ACTIVITIES FOR HUMAN RIGHTS, DEMOCRACY, AND ANTI-DICTATORSHIP. JAWAHARLAL NEHRU FOR INTERNATIONAL SYMPATHY BY THE GOVERNMENT OF INDIA AND THE SIM&Oacute;N BOL&Iacute;VAR AWARD BY THE VENEZUELAN GOVERNMENT IN 1992, THE WALLENBERG GOLD MEDAL IN 2011 AND THE US CONGRESSIONAL GOLD MEDAL IN 2012.</p>\r\n</blockquote>\r\n\r\n<p>Aung San Suu Kyi được tạp ch&iacute; TIME b&igrave;nh chọn v&agrave;o danh s&aacute;ch những người c&oacute; ảnh hưởng lớn nhất Thế giới thế kỷ 21 năm lần v&agrave;o c&aacute;c năm 2004, 2008, 2011, 2013, 2016.</p>\r\n\r\n<blockquote>\r\n<p>AUNG SAN SUU KYI WAS VOTED BY TIME MAGAZINE AS ONE OF THE MOST INFLUENTIAL PEOPLE IN THE WORLD IN THE 21ST CENTURY FIVE TIMES IN 2004, 2008, 2011, 2013, 2016</p>\r\n</blockquote>\r\n\r\n<p><img alt=\"\" src=\"https://toplist.vn/images/800px/aung-san-suu-kyi-51472.jpg\" /></p>\r\n\r\n<p><strong>Vladimir Putin</strong></p>\r\n\r\n<p>Vladimir Vladimirovich Putin l&agrave; một th&agrave;nh vi&ecirc;n của Đảng nước Nga thống nhất v&agrave; hiện đang nắm giữ vị tr&iacute; tổng thống của nước Nga. C&ugrave;ng với Barack Obama, Vladimir Putin l&agrave; một trong hai người đ&agrave;n &ocirc;ng quyền lực nhất thế giới suốt mấy năm vừa qua.</p>\r\n\r\n<blockquote>\r\n<p>VLADIMIR VLADIMIROVICH PUTIN IS A MEMBER OF THE UNITED RUSSIA PARTY AND CURRENTLY HOLDS THE POSITION OF PRESIDENT OF RUSSIA. ALONG WITH BARACK OBAMA, VLADIMIR PUTIN IS ONE OF THE TWO MOST POWERFUL MEN IN THE WORLD OVER THE PAST FEW YEARS.</p>\r\n</blockquote>\r\n\r\n<p>Vladimir Putin sinh ng&agrave;y 7 th&aacute;ng 10 năm 1952 tại Leningrad (Petersburg ng&agrave;y nay). Trước khi tham gia v&agrave;o giới ch&iacute;nh trị Li&ecirc;n X&ocirc;, Putin đ&atilde; từng l&agrave;m việc tại cơ quan t&igrave;nh b&aacute;o KGB, l&agrave;m việc b&agrave;n giấy tại Đ&ocirc;ng Đức v&agrave; giảng dạy Quan hệ Quốc tế tại đại học Leningrad.</p>\r\n\r\n<blockquote>\r\n<p>VLADIMIR PUTIN WAS BORN ON OCTOBER 7, 1952 IN LENINGRAD (PRESENT-DAY PETERSBURG). BEFORE ENTERING SOVIET POLITICS, PUTIN WORKED AT THE KGB INTELLIGENCE AGENCY, WORKED AS A DESK CLERK IN EAST GERMANY, AND TAUGHT INTERNATIONAL RELATIONS AT LENINGRAD UNIVERSITY.</p>\r\n</blockquote>\r\n\r\n<p>Trước khi li&ecirc;n bang X&ocirc; Viết theo chủ nghĩa x&atilde; hội sụp đổ, Putin l&agrave; một đảng vi&ecirc;n của Đảng Cộng sản Li&ecirc;n X&ocirc;. Sau khi Đảng Cộng Sản sụp đổ, Putin kh&ocirc;ng theo đảng ph&aacute;i n&agrave;o từ năm 1991 v&agrave; dần dần nắm giữ c&aacute;c vị tr&iacute; quan trọng trong an ninh Nga. L&uacute;c bấy giờ nước Nga đang kh&aacute; hỗn loạn v&agrave; suy tho&aacute;i do sự sụp đổ từ Đảng Cộng Sản, c&aacute;c hệ lụy kinh tế từ thời bao cấp v&agrave; sự cấm vận của Mỹ v&agrave; phương T&acirc;y từ thời Chiến tranh lạnh. Vladimir Putin trở th&agrave;nh tổng thống nước Nga v&agrave;o năm 1999, đ&atilde; g&oacute;p c&ocirc;ng lớn trong việc kh&ocirc;i phục kinh tế, ch&iacute;nh trị, qu&acirc;n sự của nước Nga, gi&uacute;p Nga lấy lại vị thế của Li&ecirc;n X&ocirc; trước đ&acirc;y, c&acirc;n bằng c&aacute;n c&acirc;n quyền lực với Hoa Kỳ.</p>\r\n\r\n<blockquote>\r\n<p>BEFORE THE FALL OF THE SOCIALIST SOVIET UNION, PUTIN WAS A MEMBER OF THE COMMUNIST PARTY OF THE SOVIET UNION. AFTER THE COLLAPSE OF THE COMMUNIST PARTY, PUTIN DID NOT JOIN ANY PARTY SINCE 1991 AND GRADUALLY TOOK UP IMPORTANT POSITIONS IN RUSSIAN SECURITY. AT THAT TIME, RUSSIA WAS QUITE CHAOTIC AND IN RECESSION DUE TO THE COLLAPSE OF THE COMMUNIST PARTY, THE ECONOMIC CONSEQUENCES OF THE SUBSIDY PERIOD AND THE EMBARGO OF THE US AND THE WEST SINCE THE COLD WAR. VLADIMIR PUTIN BECAME THE PRESIDENT OF RUSSIA IN 1999, HAS MADE GREAT CONTRIBUTIONS TO RESTORING RUSSIA&#39;S ECONOMY, POLITICS AND MILITARY, HELPING RUSSIA REGAIN THE POSITION OF THE FORMER SOVIET UNION, AND BALANCING THE BALANCE OF POWER. WITH THE UNITED STATES.</p>\r\n</blockquote>\r\n\r\n<p>Từ năm 1999 đến nay, Vladimir Putin hết l&agrave;m tổng thống lại l&agrave;m thủ tướng, c&ugrave;ng với Dmitry Medvedev trở th&agrave;nh bộ đ&ocirc;i quyền lực nhất nước Nga. Nhiều người chỉ tr&iacute;ch bộ đ&ocirc;i ch&iacute;nh kh&aacute;ch của Đảng nước Nga thống nhất n&agrave;y đang chuy&ecirc;n quyền, c&ograve;n sử dụng cụm từ &quot;Chủ nghĩa Putin&quot; nhưng tr&ecirc;n thực tế, dưới sự l&atilde;nh đạo của Putin, nước Nga đang trở n&ecirc;n h&ugrave;ng cường v&agrave; người d&acirc;n Nga hết sức ủng hộ.</p>\r\n\r\n<blockquote>\r\n<p>FROM 1999 TO NOW, VLADIMIR PUTIN HAS BECOME BOTH PRESIDENT AND PRIME MINISTER, ALONG WITH DMITRY MEDVEDEV BECOMING THE MOST POWERFUL DUO IN RUSSIA. MANY PEOPLE CRITICIZE THIS UNITED RUSSIA POLITICAL DUO FOR BEING AUTOCRATIC, EVEN USING THE PHRASE &quot;PUTINISM&quot; BUT IN FACT, UNDER PUTIN&#39;S LEADERSHIP, RUSSIA IS BECOMING POWERFUL AND PEOPLE RUSSIANS ARE VERY SUPPORTIVE.</p>\r\n</blockquote>\r\n\r\n<p>Vladimir Putin được tạp ch&iacute; TIME vinh danh 5 lần v&agrave;o c&aacute;c năm 2004, 2008, 2014, 2015, 2016.</p>\r\n\r\n<blockquote>\r\n<p>VLADIMIR PUTIN WAS HONORED 5 TIMES BY TIME MAGAZINE IN 2004, 2008, 2014, 2015, 2016.</p>\r\n</blockquote>\r\n\r\n<p><img alt=\"\" src=\"https://toplist.vn/images/800px/vladimir-putin-51514.jpg\" /></p>\r\n\r\n<p><strong>Steve Jobs</strong></p>\r\n\r\n<p>Steve Jobs, t&ecirc;n thật l&agrave; Steven Paul Jobs, l&agrave; nh&agrave; s&aacute;ng lập, chủ tịch v&agrave; cựu CEO của Apple. Steve Jobs c&ugrave;ng Apple được coi như l&agrave; thương hiệu c&oacute; ảnh hưởng lớn nhất tới c&ocirc;ng nghệ của thế kỷ 21.</p>\r\n\r\n<p>Steve Jobs sinh v&agrave;o ng&agrave;y 24 th&aacute;ng 2 năm 1955 tại San Francisco, California, Hoa Kỳ. Steve được nhận nu&ocirc;i bởi cặp vợ chồng người Mỹ l&agrave; Paul Reinhold Jobs v&agrave; Clara Jobs. Steve Jobs đ&atilde; ghi danh v&agrave;o trường đại học Reed nhưng đ&atilde; bỏ học sau 1 học kỳ b&aacute;n ni&ecirc;n bởi học ph&iacute; trường tư qu&aacute; cao. Tuy nhi&ecirc;n Jobs vẫn tiếp tục dự th&iacute;nh c&aacute;c lớp học tại Reed trong khi phải ngủ dưới s&agrave;n nh&agrave; của những người bạn, đổi lon nước ngọt để lấy tiền ăn v&agrave; nhận c&aacute;c suất ăn miễn ph&iacute; mỗi tuần tại đền Hare Krishna. Sau n&agrave;y Jobs b&agrave;y tỏ rằng: &quot;Nếu t&ocirc;i chưa từng dự lớp học thư ph&aacute;p ri&ecirc;ng lẻ đ&oacute; tại đại học th&igrave; Mac sẽ kh&ocirc;ng bao giờ c&oacute; nhiều kiểu chữ hay ph&ocirc;ng chữ c&oacute; tỉ lệ c&acirc;n xứng như vậy&quot;</p>\r\n\r\n<blockquote>\r\n<p>STEVE JOBS, REAL NAME STEVEN PAUL JOBS, IS THE FOUNDER, CHAIRMAN AND FORMER CEO OF APPLE. STEVE JOBS AND APPLE ARE CONSIDERED AS THE MOST INFLUENTIAL BRANDS IN TECHNOLOGY OF THE 21ST CENTURY.</p>\r\n\r\n<p>STEVE JOBS WAS BORN ON FEBRUARY 24, 1955 IN SAN FRANCISCO, CALIFORNIA, UNITED STATES. STEVE WAS ADOPTED BY AN AMERICAN COUPLE, PAUL REINHOLD JOBS AND CLARA JOBS. STEVE JOBS ENROLLED AT REED COLLEGE BUT DROPPED OUT AFTER A SEMI-ANNUAL SEMESTER BECAUSE PRIVATE SCHOOL FEES WERE TOO HIGH. STILL, JOBS CONTINUED TO ATTEND CLASSES AT REED WHILE SLEEPING ON FRIENDS&#39; FLOORS, EXCHANGING SODA CANS FOR FOOD AND RECEIVING FREE WEEKLY MEALS AT THE HARE KRISHNA TEMPLE. JOBS LATER EXPRESSED, &quot;IF I HADN&#39;T TAKEN THAT ONE-ON-ONE CALLIGRAPHY CLASS IN COLLEGE, THE MAC WOULD NEVER HAVE HAD SO MANY TYPEFACES OR PROPORTIONALLY PROPORTIONED FONTS.&quot;</p>\r\n</blockquote>\r\n\r\n<p>Thực tế l&agrave; d&ugrave; bỏ học đại học, Steve Jobs cũng đ&atilde; c&oacute; nhiều kinh nghiệm trong lĩnh vực c&ocirc;ng nghệ. Ngay từ thời trung học, &ocirc;ng đ&atilde; l&agrave;m th&ecirc;m cho Hewlett-Packard (Tập đo&agrave;n HP) như một nh&acirc;n vi&ecirc;n thời vụ m&ugrave;a h&egrave;. Trong thời gian m&agrave; bạn b&egrave; đang ở tr&ecirc;n giảng đường đại học, Steve Jobs đ&atilde; l&agrave;m việc như một kỹ sư cho Atari - một h&atilde;ng sản xuất tr&ograve; chơi điện tử.</p>\r\n\r\n<blockquote>\r\n<p>IN FACT, DESPITE DROPPING OUT OF COLLEGE, STEVE JOBS ALREADY HAS A LOT OF EXPERIENCE IN THE TECHNOLOGY FIELD. RIGHT FROM HIGH SCHOOL, HE WORKED PART-TIME FOR HEWLETT-PACKARD (HP CORPORATION) AS A SUMMER SEASONAL EMPLOYEE. WHILE HIS FRIENDS WERE IN COLLEGE, STEVE JOBS WORKED AS AN ENGINEER FOR ATARI - A VIDEO GAME MAKER.</p>\r\n</blockquote>\r\n\r\n<p>Năm 1976, Steve Jobs c&ugrave;ng người bạn Steve Wozniak s&aacute;ng lập ra c&ocirc;ng ty Apple Computer trong ga-ra nh&agrave; Jobs. Đ&acirc;y l&agrave; một dấu mốc quan trọng của nh&acirc;n loại bởi sau n&agrave;y Apple đ&atilde; đưa ra c&aacute;c d&ograve;ng m&aacute;y t&iacute;nh ưu việt hơn IBM, hệ điều h&agrave;nh cạnh tranh với Window của Microsoft v&agrave; đặc biệt l&agrave; d&ograve;ng sản phẩm I-phone với hệ điều h&agrave;nh iOS đ&atilde; l&agrave;m thay đổi c&ocirc;ng nghệ điện thoại di động tr&ecirc;n to&agrave;n thế giới. Cho tới thời điểm hiện tại, c&ocirc;ng nghệ cảm ứng ho&agrave;n to&agrave;n chiếm tuyệt đại đa số điện thoại di động v&agrave; Apple được xem như l&agrave; người ti&ecirc;n phong trong c&ocirc;ng nghệ ấy với t&ocirc;n chỉ &quot;Think Different&quot;</p>\r\n\r\n<blockquote>\r\n<p>IN 1976, STEVE JOBS AND HIS FRIEND STEVE WOZNIAK FOUNDED APPLE COMPUTER IN JOBS&#39; GARAGE. THIS IS AN IMPORTANT MILESTONE FOR HUMANITY BECAUSE APPLE LATER LAUNCHED COMPUTER LINES THAT ARE SUPERIOR TO IBM, OPERATING SYSTEMS THAT COMPETE WITH MICROSOFT&#39;S WINDOWS AND ESPECIALLY THE I-PHONE PRODUCT LINE WITH IOS OPERATING SYSTEM. HAS CHANGED MOBILE PHONE TECHNOLOGY ALL OVER THE WORLD. UP TO THE PRESENT TIME, TOUCH TECHNOLOGY COMPLETELY OCCUPIES THE MAJORITY OF MOBILE PHONES AND APPLE IS CONSIDERED AS A PIONEER IN THAT TECHNOLOGY WITH THE MOTTO &quot;THINK DIFFERENT&quot;.</p>\r\n</blockquote>\r\n\r\n<p>D&ugrave; c&oacute; những thăng trầm trong sự nghiệp, thậm ch&iacute; đ&atilde; từng bị đuổi khỏi Apple - c&ocirc;ng ty do ch&iacute;nh m&igrave;nh s&aacute;ng lập ra, Steve Jobs r&otilde; r&agrave;ng đ&atilde; vượt qua tất cả để th&agrave;nh c&ocirc;ng, trở th&agrave;nh người c&oacute; c&ocirc;ng lớn nhất tạo n&ecirc;n th&agrave;nh c&ocirc;ng của Apple n&oacute;i ri&ecirc;ng v&agrave; c&ocirc;ng nghệ n&oacute;i chung. Steve Jobs mất v&agrave;o ng&agrave;y 5 th&aacute;ng 10 năm 2011 bởi bệnh ung thư. &Ocirc;ng được tạp ch&iacute; TIME vinh danh 5 lần v&agrave;o c&aacute;c năm 2004, 2005, 2007, 2008, 2010, trở th&agrave;nh thần tượng của nhiều bạn trẻ, giới doanh nh&acirc;n v&agrave; c&ocirc;ng nghệ tr&ecirc;n to&agrave;n thế giới.</p>\r\n\r\n<blockquote>\r\n<p>DESPITE THE UPS AND DOWNS IN HIS CAREER, EVEN BEING KICKED OUT OF APPLE - THE COMPANY HE FOUNDED, STEVE JOBS CLEARLY OVERCAME ALL TO SUCCEED, BECOMING THE PERSON WITH THE GREATEST MERIT IN CREATING THE SUCCESS. APPLE&#39;S TECHNOLOGY IN PARTICULAR AND TECHNOLOGY IN GENERAL. STEVE JOBS DIED ON OCTOBER 5, 2011 OF CANCER. HE WAS HONORED 5 TIMES BY TIME MAGAZINE IN 2004, 2005, 2007, 2008, 2010, BECOMING THE IDOL OF MANY YOUNG PEOPLE, ENTREPRENEURS AND TECHNOLOGY AROUND THE WORLD.</p>\r\n</blockquote>\r\n\r\n<p><img alt=\"\" src=\"https://toplist.vn/images/800px/nhan-vat-co-anh-huong-lon-nhat-the-gioi-the-ky-21-51443.jpg\" /></p>\r\n\r\n<p><strong>Kim Jong-un</strong></p>\r\n\r\n<p>Kim Jong-un, t&ecirc;n phi&ecirc;n &acirc;m H&aacute;n Việt l&agrave; Kim Ch&iacute;nh &Acirc;n, hiện đang l&agrave; Tổng b&iacute; thư Đảng Lao động, l&atilde;nh đạo tối cao của Cộng h&ograve;a D&acirc;n chủ nh&acirc;n d&acirc;n Triều Ti&ecirc;n.</p>\r\n\r\n<p>Kim Jong-un l&agrave; con trai thứ ba của Kim Jong-il, ch&aacute;u nội của nh&agrave; l&atilde;nh đạo thứ nhất v&agrave; s&aacute;ng lập ra nước Cộng h&ograve;a D&acirc;n chủ nh&acirc;n d&acirc;n Triều Ti&ecirc;n Kim Il-sung (Kim Nhật Th&agrave;nh). Ng&agrave;y 19 th&aacute;ng 12 năm 2011, sau khi cha l&agrave; Kim Jong-il qua đời, Kim Jong-un đ&atilde; thay cha trở th&agrave;nh l&atilde;nh đạo tối cao của Triều Ti&ecirc;n.</p>\r\n\r\n<blockquote>\r\n<p>KIM JONG-UN, WHOSE NAME IS SINO-VIETNAMESE TRANSLITERATION IS KIM CHINH AN, IS CURRENTLY THE GENERAL SECRETARY OF THE WORKERS&#39; PARTY, THE SUPREME LEADER OF THE DEMOCRATIC PEOPLE&#39;S REPUBLIC OF KOREA.</p>\r\n\r\n<p>KIM JONG-UN IS THE THIRD SON OF KIM JONG-IL, THE GRANDSON OF THE FIRST LEADER AND FOUNDER OF THE DEMOCRATIC PEOPLE&#39;S REPUBLIC OF KOREA KIM IL-SUNG (KIM IL-SUNG). ON DECEMBER 19, 2011, AFTER HIS FATHER KIM JONG-IL DIED, KIM JONG-UN REPLACED HIS FATHER AS THE SUPREME LEADER OF NORTH KOREA.</p>\r\n</blockquote>\r\n\r\n<p>Vốn l&agrave; t&acirc;m điểm căng thẳng của Viễn Đ&ocirc;ng từ thời chiến tranh lạnh đến nay, Triều Ti&ecirc;n v&agrave; H&agrave;n Quốc lu&ocirc;n khiến cho giới quan s&aacute;t ch&iacute;nh trị thế giới quan ngại. Triều Ti&ecirc;n l&agrave; quốc gia theo chủ nghĩa x&atilde; hội duy nhất cho tới thời điểm hiện tại c&ograve;n theo ch&iacute;nh s&aacute;ch đ&oacute;ng cửa, bởi vậy quan hệ giữa Triều Ti&ecirc;n v&agrave; c&aacute;c nước tư bản phương T&acirc;y ng&agrave;y c&agrave;ng trở n&ecirc;n xấu đi. Căng thẳng tr&ecirc;n b&aacute;n đảo Triều Ti&ecirc;n ng&agrave;y c&agrave;ng leo thang khi Triều Ti&ecirc;n, dưới sự l&atilde;nh đạo của Kim Jong-un, đang c&oacute; nhiều cuộc thử hạt nh&acirc;n hơn bao giờ hết.</p>\r\n\r\n<blockquote>\r\n<p>AS THE CENTER OF TENSION IN THE FAR EAST SINCE THE COLD WAR, NORTH KOREA AND SOUTH KOREA HAVE ALWAYS MADE WORLD POLITICAL OBSERVERS CONCERNED. NORTH KOREA IS THE ONLY SOCIALIST COUNTRY UP TO THE PRESENT TIME THAT STILL FOLLOWS THE CLOSED-DOOR POLICY, SO RELATIONS BETWEEN NORTH KOREA AND WESTERN CAPITALIST COUNTRIES ARE BECOMING WORSE AND WORSE. TENSIONS ON THE KOREAN PENINSULA ARE ESCALATING AS NORTH KOREA, UNDER THE LEADERSHIP OF KIM JONG-UN, IS CONDUCTING MORE NUCLEAR TESTS THAN EVER BEFORE.</p>\r\n</blockquote>\r\n\r\n<p>Nắm giữ vị tr&iacute; quyền lực to lớn v&agrave; c&oacute; khả năng khơi m&agrave;o cho một cuộc chiến tranh hạt nh&acirc;n, r&otilde; r&agrave;ng Kim Jong-un l&agrave; một trong những nh&acirc;n vật quyền lực nhất thế giới. &Ocirc;ng được tạp ch&iacute; TIME vinh danh 6 lần từ năm 2011 đến năm 2016</p>\r\n\r\n<blockquote>\r\n<p>HOLDING A POSITION OF IMMENSE POWER AND CAPABLE OF STARTING A NUCLEAR WAR, KIM JONG-UN IS CLEARLY ONE OF THE MOST POWERFUL FIGURES IN THE WORLD. HE WAS HONORED BY TIME MAGAZINE 6 TIMES FROM 2011 TO 2016</p>\r\n</blockquote>\r\n\r\n<p><img alt=\"\" src=\"https://toplist.vn/images/800px/kim-jong-un-51548.jpg\" /></p>\r\n\r\n<hr />\r\n<p><a href=\"https://toplist.vn/top-list/nhan-vat-co-anh-huong-lon-nhat-the-gioi-the-ky-21-5648.htm\" target=\"_blank\">ko vote l&agrave; tối sẽ gặp tui</a></p>\r\n\r\n<p><img alt=\"\" src=\"https://i.pinimg.com/564x/01/70/b3/0170b3ae031386b85991cd3ffa89925c.jpg\" /></p>\r\n\r\n<p><code>Thanks mn đ&atilde; xem</code></p>\r\n', '2021-11-26 15:07:16', 'lanh_layout.jpg', 1, 'Top 10 nhân vật có ảnh hưởng lớn nhất thế giới thế kỷ 21'),
(3, 2, '<p><strong>Ch&uacute;ng ta đều đ&atilde; biết đến hiện tượng tự nhi&ecirc;n v&ocirc; c&ugrave;ng quen thuộc: mặt trời chiếu s&aacute;ng v&agrave;o ban ng&agrave;y, mặt trăng chiếu s&aacute;ng v&agrave;o ban đ&ecirc;m. Vậy, &aacute;nh s&aacute;ng m&agrave; Mặt trăng ph&aacute;t s&aacute;ng l&agrave; ở đ&acirc;u?</strong></p>\r\n\r\n<p><strong>C&acirc;u trả lời l&agrave;, Mặt trăng kh&ocirc;ng c&oacute; khả năng tự ph&aacute;t s&aacute;ng, n&oacute; chỉ l&agrave; một tấm gương phản chiếu &aacute;nh s&aacute;ng Mặt trời. Nếu ch&uacute;ng ta đứng từ tr&ecirc;n Mặt trăng quan s&aacute;t Tr&aacute;i đất th&igrave; cũng sẽ thấy n&oacute; rất s&aacute;ng do được nhận &aacute;nh s&aacute;ng từ Mặt trời.</strong></p>\r\n\r\n<p><strong>We all know the very familiar natural phenomenon: the sun shines during the day, the moon shines at night. So, where is the light that the Moon shines on?</strong></p>\r\n\r\n<p><strong>The answer is, the Moon does not have the ability to emit light on its own, it is just a mirror reflecting sunlight. If we stand on the Moon observing the Earth, we will also see that it is very bright because it receives light from the Sun.</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://st.quantrimang.com/photos/image/2016/10/31/mat-trang-1.jpg\" /></p>\r\n\r\n<p><strong>Năm 1969, hai nh&agrave; du h&agrave;nh vũ trụ Neil Armstrong v&agrave; Buzz Aldrin đ&atilde; đặt ch&acirc;n l&ecirc;n mặt trăng, họ đ&atilde; kh&aacute;m ph&aacute; ra rằng bề mặt Mặt Trăng c&oacute; m&agrave;u x&aacute;m đen như b&ecirc; t&ocirc;ng. Do c&oacute; bề mặt gồ ghề v&agrave; gam m&agrave;u tối như vậy n&ecirc;n Mặt trăng chỉ c&oacute; thể phản chiếu từ 3% đến 12% &aacute;nh s&aacute;ng Mặt trời.</strong></p>\r\n\r\n<p><strong>Ch&uacute;ng ta thường thấy, mức độ chiếu s&aacute;ng Mặt trăng v&agrave;o ban đ&ecirc;m thường kh&aacute;c nhau. Đ&oacute; l&agrave; do vị tr&iacute; của Mặt trăng trong quỹ đạo xoay quanh Tr&aacute;i đất mỗi ng&agrave;y đều kh&aacute;c nhau. Mặt trăng quay một v&ograve;ng quanh Tr&aacute;i đất với chu kỳ quỹ đạo 27,32 ng&agrave;y. Trong một chu kỳ n&agrave;y, Mặt trăng được Mặt trời chiếu s&aacute;ng từ c&aacute;c g&oacute;c kh&aacute;c nhau.</strong></p>\r\n\r\n<p><strong>In 1969, two astronauts Neil Armstrong and Buzz Aldrin set foot on the moon, they discovered that the lunar surface is dark gray like concrete. Due to its rough surface and dark color gamut, the Moon can only reflect between 3% and 12% of the Sun&#39;s light.</strong></p>\r\n\r\n<p><strong>We often see, the level of illumination of the Moon at night is often different. That&#39;s because the position of the Moon in its orbit around the Earth is different every day. The Moon rotates around the Earth with an orbital period of 27.32 days. During this one cycle, the Moon is illuminated by the Sun from different angles.</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://st.quantrimang.com/photos/image/2016/10/31/mat-trang-3.jpg\" /></p>\r\n\r\n<p><strong>Khi Mặt trăng ở vị tr&iacute; đối diện với Mặt trời hay n&oacute;i theo c&aacute;ch kh&aacute;c l&agrave; khi kinh độ ho&agrave;ng đạo của Mặt Trăng v&agrave; Mặt Trời ch&ecirc;nh nhau gi&aacute; tr&iacute; 180 độ, Mặt trăng s&aacute;ng nhất. Khi đ&oacute;, to&agrave;n bộ nửa Mặt trăng được Mặt trời chiếu s&aacute;ng cho n&ecirc;n ch&uacute;ng ta c&oacute; thể nh&igrave;n thấy to&agrave;n bộ nửa n&agrave;y từ Tr&aacute;i đất. Đ&oacute; gọi l&agrave; hiện tượng trăng tr&ograve;n.</strong></p>\r\n\r\n<p><strong>Khi Mặt trăng ở vị tr&iacute; giữa Tr&aacute;i đất v&agrave; Mặt trời, mặt chiếu s&aacute;ng của Mặt trăng kh&ocirc;ng quay về ph&iacute;a Tr&aacute;i đất n&ecirc;n ch&uacute;ng ta kh&ocirc;ng thể quan s&aacute;t được Mặt trăng từ Tr&aacute;i đất, hiện tượng n&agrave;y gọi l&agrave; pha Trăng non.</strong></p>\r\n\r\n<p><strong>When the Moon is facing the Sun or in other words, when the ecliptic longitudes of the Moon and the Sun differ by 180 degrees, the Moon is at its brightest. At that time, the entire half of the Moon is illuminated by the Sun, so we can see this whole half from Earth. It&#39;s called a full moon.</strong></p>\r\n\r\n<p><strong>When the Moon is in the position between the Earth and the Sun, the illuminated side of the Moon does not face the Earth, so we cannot observe the Moon from the Earth, this phenomenon is called the New Moon phase.</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://st.quantrimang.com/photos/image/2016/10/31/mat-trang-4.jpg\" /></p>\r\n\r\n<p><strong>Trước v&agrave; sau khi pha Trăng non diễn ra, ch&uacute;ng ta thường thấy một phần của Mặt trăng (Trăng lưỡi liềm) do những ng&agrave;y đ&oacute; do chỉ c&oacute; một phần nhỏ của Mặt trăng phản chiếu &aacute;nh s&aacute;ng Mặt trời. Phần Mặt trăng c&ograve;n lại chỉ thấy &aacute;nh s&aacute;ng mờ do phần n&agrave;y kh&ocirc;ng nhận được &aacute;nh s&aacute;ng trực tiếp từ Mặt trời m&agrave; chỉ nhận được &aacute;nh s&aacute;ng Mặt trời do Tr&aacute;i đất phản chiếu ra, gọi l&agrave; hiện tượng &quot;Tr&aacute;i đất chiếu s&aacute;ng&quot;.</strong></p>\r\n\r\n<p><strong>Sao kim c&oacute; khả năng phản chiếu &aacute;nh s&aacute;ng Mặt trời l&ecirc;n đến 65%, do vậy, ngo&agrave;i Mặt trăng th&igrave; sao Kim l&agrave; thi&ecirc;n thể s&aacute;ng nhất tr&ecirc;n bầu trời đ&ecirc;m.</strong></p>\r\n\r\n<p>*<em>Before and after the New Moon phase occurs, we usually see part of the Moon (Crescent Moon) due to those days because only a small part of the Moon reflects sunlight. The remaining part of the Moon only sees dim light because this part does not receive direct light from the Sun, but only receives sunlight reflected by the Earth, called the &quot;Earth Illumination&quot; phenomenon.</em>&nbsp;*</p>\r\n\r\n<p><strong>Venus has the ability to reflect sunlight up to 65%, so besides the Moon, Venus is the brightest object in the night sky.</strong></p>\r\n', '2021-11-26 15:15:57', 'mat-trang-1.jpg', 1, 'Tại sao mặt trăng lại phát sáng? (song ngữ)'),
(6, 4, '<ul>\r\n	<li>Bicycle/ bike: xe đạp</li>\r\n</ul>\r\n\r\n<p>&ndash; Motorcycle/ motorbike: xe m&aacute;y</p>\r\n\r\n<p>&ndash; Scooter: xe tay ga</p>\r\n\r\n<p>&ndash; Truck/ lorry: xe tải</p>\r\n\r\n<p>&ndash; Van: xe tải nhỏ</p>\r\n\r\n<p>&ndash; Minicab/Cab: xe cho thu&ecirc;</p>\r\n\r\n<p>&ndash; Tram: Xe điện</p>\r\n\r\n<p>&ndash; Caravan: xe nh&agrave; di động</p>\r\n\r\n<p>&ndash; Moped: Xe m&aacute;y c&oacute; b&agrave;n đạp</p>\r\n\r\n<p>&ndash; Bus: xe bu&yacute;t</p>\r\n\r\n<p>&ndash; Taxi: xe taxi</p>\r\n\r\n<p>&ndash; Tube: t&agrave;u điện ngầm ở London</p>\r\n\r\n<p>&ndash; Underground: t&agrave;u điện ngầm</p>\r\n\r\n<p>&ndash; Subway: t&agrave;u điện ngầm</p>\r\n\r\n<p>&ndash; High-speed train: t&agrave;u cao tốc</p>\r\n\r\n<p>&ndash; Railway train: t&agrave;u hỏa</p>\r\n\r\n<p>&ndash; Coach: xe kh&aacute;ch</p>\r\n\r\n<p>&ndash; Boat: thuyền</p>\r\n\r\n<p>&ndash; Ferry: ph&agrave;</p>\r\n\r\n<p>&ndash; Hovercraft: t&agrave;u di chuyển nhờ đệm kh&ocirc;ng kh&iacute;</p>\r\n\r\n<p>&ndash; Speedboat: t&agrave;u si&ecirc;u tốc</p>\r\n\r\n<p>&ndash; Ship: t&agrave;u thủy</p>\r\n\r\n<p>&ndash; Sailboat: thuyền buồm</p>\r\n\r\n<p>&ndash; Cargo ship: t&agrave;u chở h&agrave;ng tr&ecirc;n biển</p>\r\n\r\n<p>&ndash; Cruise ship: t&agrave;u du lịch (du thuyền)</p>\r\n\r\n<p>&ndash; Rowing boat: thuyền c&oacute; m&aacute;i ch&egrave;o</p>\r\n', '2021-12-09 22:03:57', '', 1, 'TỪ VỰNG VỀ PHƯƠNG TIỆN'),
(12, 7, '<p>Glad/ɡl&aelig;d/: Vui mừng, h&agrave;i l&ograve;ng</p>\r\n\r\n<p>Elated/ɪˈleɪtɪd/: Phấn khởi, h&agrave;o hứng</p>\r\n\r\n<p>Ecstatic/ɪkˈst&aelig;tɪk/: Ng&acirc;y ngất hạnh ph&uacute;c</p>\r\n\r\n<p>Excited/ɪkˈsaɪtɪd/: H&agrave;o hứng, cảm thấy k&iacute;ch th&iacute;ch</p>\r\n\r\n<p>Eager/ˈiːɡə(r)/ (Anh-Anh) /ˈiːɡər/ (Anh-Mỹ): H&aacute;o hức</p>\r\n\r\n<p>Proud/praʊd/: Tự h&agrave;o</p>\r\n\r\n<p>Tranquil/ˈtr&aelig;ŋkwɪl/: Y&ecirc;n b&igrave;nh, thư th&aacute;i</p>\r\n\r\n<p>Hopeful/ˈhəʊpfl/: Hy vọng</p>\r\n\r\n<p>Confident /ˈkɒnfɪdənt/ (Anh-Anh) /ˈkɑːnfɪdənt/ (Anh-Mỹ): Tự tin</p>\r\n\r\n<p>Loved/lʌvd/: Y&ecirc;u, được y&ecirc;u thương</p>\r\n\r\n<p>Sad/s&aelig;d/ : Buồn</p>\r\n\r\n<p>Depressed/dɪˈprest/: Thất vọng, suy sụp, hụt hẫng</p>\r\n\r\n<p>Anxious/ˈ&aelig;ŋkʃəs/: Lo lắng, bồn chồn</p>\r\n\r\n<p>Disgusted/dɪsˈɡʌstɪd/: Gh&ecirc; tởm</p>\r\n\r\n<p>Guilty/ˈɡɪlti/: Tội lỗi</p>\r\n\r\n<p>Hurt /hɜːt/ (Anh-Anh) /hɜːrt/ (Anh-Mỹ): Đau đớn, tổn thương</p>\r\n\r\n<p>Lonely /ˈləʊnli/: C&ocirc; đơn</p>\r\n\r\n<p>Angry/ˈ&aelig;ŋɡri/: Tức giận</p>\r\n\r\n<p>Jealous/ˈdʒeləs/: Ghen tị</p>\r\n\r\n<p>Scared/skeəd/ (Anh-Anh)/skerd/ (Anh-Mỹ): Sợ h&atilde;i</p>\r\n', '2021-12-17 21:23:15', 'objective_en_complete_a1_49_a_256.jpg', 1, 'Từ_vựng_chủ_đề_bất_kỳ]#5: Một ít từ miêu tả tâm trạng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `friends`
--

CREATE TABLE `friends` (
  `id_table_friend` int(10) NOT NULL,
  `id_user_one` int(10) NOT NULL,
  `id_user_two` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `friend_request`
--

CREATE TABLE `friend_request` (
  `id_request` int(10) NOT NULL,
  `sender` int(10) NOT NULL,
  `receiver` int(10) NOT NULL,
  `time` datetime NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `friend_request`
--

INSERT INTO `friend_request` (`id_request`, `sender`, `receiver`, `time`, `status`) VALUES
(112, 7, 5, '2022-03-10 09:26:17', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history`
--

CREATE TABLE `history` (
  `id_hytory` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_lesson` int(10) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `history`
--

INSERT INTO `history` (`id_hytory`, `id_user`, `id_lesson`, `time`) VALUES
(132, 5, 49, '2022-03-12 09:54:05'),
(133, 7, 49, '2022-03-10 09:30:20'),
(134, 5, 54, '2022-03-12 09:54:33'),
(136, 1, 49, '2022-03-12 14:14:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lesson`
--

CREATE TABLE `lesson` (
  `id_lesson` int(10) NOT NULL,
  `lessonName` varchar(50) NOT NULL,
  `video` varchar(500) NOT NULL,
  `time` varchar(20) NOT NULL,
  `id_course` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lesson`
--

INSERT INTO `lesson` (`id_lesson`, `lessonName`, `video`, `time`, `id_course`) VALUES
(49, 'family', '0', '12', 12),
(54, ' các loại quả', '0', '1', 12),
(55, 'test 1', '', '', 11),
(56, 'test 1', '', '', 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ordercaurse`
--

CREATE TABLE `ordercaurse` (
  `id_order` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_caurse` int(10) NOT NULL,
  `payments` varchar(50) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `point`
--

CREATE TABLE `point` (
  `id_point` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `point_total` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `point`
--

INSERT INTO `point` (`id_point`, `id_user`, `point_total`) VALUES
(118, 1, 20),
(119, 5, 106),
(120, 7, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `progress`
--

CREATE TABLE `progress` (
  `id_progress` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_causer` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `progress`
--

INSERT INTO `progress` (`id_progress`, `id_user`, `id_causer`) VALUES
(46, 1, 12),
(50, 1, 11),
(52, 5, 12),
(53, 7, 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quiz`
--

CREATE TABLE `quiz` (
  `id_quiz` int(10) NOT NULL,
  `question` varchar(150) NOT NULL,
  `img` varchar(250) NOT NULL,
  `Selectiona` varchar(50) NOT NULL,
  `Selectionb` varchar(50) NOT NULL,
  `Selectionc` varchar(50) NOT NULL,
  `Selectiond` varchar(50) NOT NULL,
  `answer` varchar(10) NOT NULL,
  `id_lesson` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quiz`
--

INSERT INTO `quiz` (`id_quiz`, `question`, `img`, `Selectiona`, `Selectionb`, `Selectionc`, `Selectiond`, `answer`, `id_lesson`) VALUES
(65, 'đây là ai', 'father.jpg', 'father', 'mother', 'bother', 'sisster', 'a', 49),
(66, 'who is this', 'mama.jpg', 'brother', 'farther', 'sister', 'mother', 'c', 49),
(68, 'who is this', 'brother.jpg', 'sister', 'brother', 'mama', 'dady', 'b', 49),
(78, 'who are they', 'family.jpg', 'neighbor', 'family', 'guest', 'relative', 'b', 49),
(79, 'who is this', 'sister.jpg', ' daughter', 'son', 'sister', 'mother', 'c', 49),
(80, 'who are they', 'hang-xom-nhieu-chuyen-2.jpg', 'neighbor', 'farther', 'family', 'relative', 'a', 49),
(81, 'quả cam', '', 'Avocado ', 'Apple ', 'orange', 'guava fruit', 'c', 54),
(82, 'apple', '', 'quả mít', 'quả táo', 'quả ổi', 'quả dứa', 'b', 54),
(83, 'what is this', 'qua cam (5).jpg', 'quả cam', 'quả táo', 'quả dừa', 'quả dứa', 'a', 54),
(84, 'who is this', 'tao.jpg', 'orange', 'coconut', 'apple', 'guava fruit', 'c', 54),
(85, 'who is this', 'oi.jpg', 'quả mít', 'quả táo', 'quả cam', 'quả ổi', 'd', 54),
(86, 'if you go on..................... me like this, i will never be able to finish writing my report', '', 'disturbing', 'afflicting', 'concerning', 'affecting', 'a', 55),
(87, 'turn off this machine ,please .The harsh sound really .....................me carzy', '', 'takes ', 'worries', 'drives', 'bothers', 'c', 55),
(88, 'Everyone knew that.....................this task would require a considerable effort', '', 'working', 'engaging', 'making', 'completing', 'd', 55),
(89, 'The inconsiderate driver was.......................for parking his vehicle in the wrong place', '', 'inflicted', 'condemned', 'harassed', 'fined', 'd', 55),
(90, 'The idea to ...................a visit to the local council residence was welcomed by all the visitors', '', 'do', 'pay', 'go', 'walk', 'b', 55),
(91, 'what are the speakers discussing ?', '', 'a motorcycle', 'a mobile phone', 'a laptop computer', 'an exercise machine', 'b', 56),
(92, 'the travel................will be processed as soon as they are received', '', 'document', 'documents', 'documented', 'documenting', 'b', 56),
(93, '............changer your seating assignment, visit the reservations page on out website', '', 'for', 'Across', 'With', 'To', 'd', 56),
(94, 'before selecting a Dagle steel door ,measure the door opening..............', '', 'careful', 'caring', 'carefully', 'cares', 'c', 56);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rating`
--

CREATE TABLE `rating` (
  `id_Rating` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_parent` int(10) NOT NULL,
  `content` varchar(250) NOT NULL,
  `time` datetime NOT NULL,
  `rating` int(10) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `rating`
--

INSERT INTO `rating` (`id_Rating`, `id_user`, `id_parent`, `content`, `time`, `rating`, `status`) VALUES
(1, 2, 0, 'hay lắm bà con ơi', '2021-11-24 15:06:09', 5, 2),
(17, 1, 1, 'cảm ơn em ', '2021-11-24 16:14:12', 0, 0),
(31, 5, 0, 'lú như con cú', '2021-12-15 15:49:50', 4, 1),
(36, 7, 0, 'Đơn giản vì tôi không thích cho lắm', '2021-12-17 21:09:56', 5, 1),
(37, 5, 0, 'ngáo', '2022-03-12 09:49:49', 4, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `routee`
--

CREATE TABLE `routee` (
  `id_route` int(11) NOT NULL,
  `route` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `routee`
--

INSERT INTO `routee` (`id_route`, `route`, `img`) VALUES
(1, 'Basic', 'notebook.png'),
(2, 'Children', 'studying.png'),
(3, 'Ielts', 'certificate.png'),
(4, 'Training', 'workout.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanh_toan`
--

CREATE TABLE `thanh_toan` (
  `id_payments` int(10) NOT NULL,
  `id_order` int(20) NOT NULL,
  `money` int(10) NOT NULL,
  `note` varchar(255) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `id_user` int(10) NOT NULL,
  `time` varchar(50) NOT NULL,
  `id_caurse` int(10) NOT NULL,
  `trang_thai` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thanh_toan`
--

INSERT INTO `thanh_toan` (`id_payments`, `id_order`, `money`, `note`, `bank`, `id_user`, `time`, `id_caurse`, `trang_thai`) VALUES
(80, 1499463217, 70000, 'Noi dung thanh toan', 'NCB', 1, '2022-03-09 21:15:43', 11, '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `ten_user` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `image` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `start_time` datetime NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `role` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `ten_user`, `user_name`, `image`, `email`, `mat_khau`, `start_time`, `status`, `role`) VALUES
(1, 'nguyễn hoàng', 'admin', 'meo.jpg', 'nguyenvanhoang2444@gmail.com', 'hoang1505', '2021-11-19 14:42:13', 0, 1),
(2, 'thành 3 chấm', 'thanh123', '', 'thanh@gmail.com', '12345', '2021-11-20 04:08:46', 0, 0),
(4, 'hằng nguyễn', 'hang123', '', 'hang@gmail.com', 'hang123', '2021-11-25 09:52:38', 0, 0),
(5, 'long', 'long12345', 'th (19).jfif', 'long@gmail.com', 'long123456', '2021-11-25 09:52:38', 0, 0),
(7, 'Thuần ', 'thuan12345', '', 'thuan@gmail.com', '12345', '2021-12-09 06:26:47', 0, 0),
(8, 'Nguyễn Thanh', 'thanh12345', '', 'thanh@gmail.com', '123', '2021-12-09 13:49:45', 0, 0),
(17, 'nam là nhất', 'nam1505', '', 'namnguyen@gmail.com', 'nam1234', '2021-12-17 13:24:30', 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `fk_user_comment` (`id_user`),
  ADD KEY `fk_lesson_comment` (`id_lesson`);

--
-- Chỉ mục cho bảng `comments_post`
--
ALTER TABLE `comments_post`
  ADD PRIMARY KEY (`id_comment_post`),
  ADD KEY `fk_user_commentPost` (`id_user`),
  ADD KEY `fk_post_commentPost` (`id_post`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Chỉ mục cho bảng `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_caurse`),
  ADD KEY `id_route` (`id_route`);

--
-- Chỉ mục cho bảng `forum_post`
--
ALTER TABLE `forum_post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `fk_user_post` (`id_user`);

--
-- Chỉ mục cho bảng `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id_table_friend`),
  ADD KEY `fk_friend_user` (`id_user_one`),
  ADD KEY `fk_friend_two` (`id_user_two`);

--
-- Chỉ mục cho bảng `friend_request`
--
ALTER TABLE `friend_request`
  ADD PRIMARY KEY (`id_request`),
  ADD KEY `fk_sender` (`sender`),
  ADD KEY `fk_receiver` (`receiver`);

--
-- Chỉ mục cho bảng `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_hytory`),
  ADD KEY `fk_hitory_user` (`id_user`),
  ADD KEY `fk_hitory_lesson` (`id_lesson`);

--
-- Chỉ mục cho bảng `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id_lesson`),
  ADD KEY `pk_ls_couse` (`id_course`);

--
-- Chỉ mục cho bảng `ordercaurse`
--
ALTER TABLE `ordercaurse`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `fk_user_order` (`id_user`),
  ADD KEY `fk_caurse_order` (`id_caurse`);

--
-- Chỉ mục cho bảng `point`
--
ALTER TABLE `point`
  ADD PRIMARY KEY (`id_point`),
  ADD KEY `fk_user_point` (`id_user`);

--
-- Chỉ mục cho bảng `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`id_progress`),
  ADD KEY `fk_user` (`id_user`),
  ADD KEY `fk_course` (`id_causer`);

--
-- Chỉ mục cho bảng `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id_quiz`),
  ADD KEY `fk_quiz_lesson` (`id_lesson`);

--
-- Chỉ mục cho bảng `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_Rating`),
  ADD KEY `fk_user_rating` (`id_user`);

--
-- Chỉ mục cho bảng `routee`
--
ALTER TABLE `routee`
  ADD PRIMARY KEY (`id_route`);

--
-- Chỉ mục cho bảng `thanh_toan`
--
ALTER TABLE `thanh_toan`
  ADD PRIMARY KEY (`id_payments`),
  ADD KEY `fk_sp_course` (`id_caurse`),
  ADD KEY `fk_sp_user` (`id_user`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `comments_post`
--
ALTER TABLE `comments_post`
  MODIFY `id_comment_post` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `course`
--
ALTER TABLE `course`
  MODIFY `id_caurse` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `forum_post`
--
ALTER TABLE `forum_post`
  MODIFY `id_post` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `friends`
--
ALTER TABLE `friends`
  MODIFY `id_table_friend` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `friend_request`
--
ALTER TABLE `friend_request`
  MODIFY `id_request` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT cho bảng `history`
--
ALTER TABLE `history`
  MODIFY `id_hytory` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT cho bảng `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id_lesson` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `ordercaurse`
--
ALTER TABLE `ordercaurse`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `point`
--
ALTER TABLE `point`
  MODIFY `id_point` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT cho bảng `progress`
--
ALTER TABLE `progress`
  MODIFY `id_progress` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id_quiz` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT cho bảng `rating`
--
ALTER TABLE `rating`
  MODIFY `id_Rating` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `routee`
--
ALTER TABLE `routee`
  MODIFY `id_route` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `thanh_toan`
--
ALTER TABLE `thanh_toan`
  MODIFY `id_payments` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_lesson_comment` FOREIGN KEY (`id_lesson`) REFERENCES `lesson` (`id_lesson`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_comment` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `comments_post`
--
ALTER TABLE `comments_post`
  ADD CONSTRAINT `fk_post` FOREIGN KEY (`id_post`) REFERENCES `forum_post` (`id_post`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_commentPost` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`id_route`) REFERENCES `routee` (`id_route`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `forum_post`
--
ALTER TABLE `forum_post`
  ADD CONSTRAINT `fk_user_post` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `fk_friend_two` FOREIGN KEY (`id_user_two`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_friend_user` FOREIGN KEY (`id_user_one`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `friend_request`
--
ALTER TABLE `friend_request`
  ADD CONSTRAINT `fk_receiver` FOREIGN KEY (`receiver`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_sender` FOREIGN KEY (`sender`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `fk_hitory_lesson` FOREIGN KEY (`id_lesson`) REFERENCES `lesson` (`id_lesson`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_hitory_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `lesson`
--
ALTER TABLE `lesson`
  ADD CONSTRAINT `pk_ls_couse` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_caurse`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `ordercaurse`
--
ALTER TABLE `ordercaurse`
  ADD CONSTRAINT `fk_caurse_order` FOREIGN KEY (`id_caurse`) REFERENCES `course` (`id_caurse`),
  ADD CONSTRAINT `fk_user_order` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `point`
--
ALTER TABLE `point`
  ADD CONSTRAINT `fk_user_point` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `progress`
--
ALTER TABLE `progress`
  ADD CONSTRAINT `fk_course` FOREIGN KEY (`id_causer`) REFERENCES `course` (`id_caurse`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `fk_quiz_lesson` FOREIGN KEY (`id_lesson`) REFERENCES `lesson` (`id_lesson`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `fk_user_rating` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `thanh_toan`
--
ALTER TABLE `thanh_toan`
  ADD CONSTRAINT `fk_sp_course` FOREIGN KEY (`id_caurse`) REFERENCES `course` (`id_caurse`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_sp_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
