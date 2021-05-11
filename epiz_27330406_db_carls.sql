-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 01:22 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_carls`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `account_username` char(20) NOT NULL,
  `account_password` char(50) NOT NULL,
  `account_type` char(20) NOT NULL,
  `verify` tinyint(1) NOT NULL,
  `vkey` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `account_username`, `account_password`, `account_type`, `verify`, `vkey`) VALUES
(18, 'iamarkyy3', '7815696ecbf1c96e6894b779456d330e', 'user', 1, '4cfcf5e02188617fbebdf9f442deed24'),
(21, 'valdeznehemiah20', '7815696ecbf1c96e6894b779456d330e', 'user', 1, '7a87d0e796e57b7ded6ba1b4ec0b6621'),
(22, 'charxz', 'dbb87b735127a30da7950fae88d10b6f', 'user', 0, 'fdfe1a098379057e3e38e17354f1a1ce'),
(23, 'monaHydroCarry', '29c42773cb16bffe8cc141d8065cd24f', 'user', 0, 'c8736dcbfe9fdae3638a947ed9386594'),
(25, 'parokyanibasa', '29c42773cb16bffe8cc141d8065cd24f', 'user', 1, '57ab509b21d64af3b56129f05f40757b'),
(26, 'Marky0120', '21232f297a57a5a743894a0e4a801fc3', 'user', 1, '53b02fd1498e242f9c6a896a5f743d4d'),
(27, 'Joey', 'd6ba0682d75eb986237fb6b594f8a31f', 'user', 1, '96130b5fd472705628804d05f21dd23c'),
(28, 'admin', 'admin', 'admin', 0, ''),
(29, 'admin', 'admin', 'admin', 1, ''),
(30, 'admin', 'admin', 'admin', 1, ''),
(31, 'admin', 'admin', 'admin', 1, ''),
(32, 'admin', 'admin', 'admin', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `log_id` int(11) NOT NULL,
  `account_id` char(20) NOT NULL,
  `log_description` char(100) NOT NULL,
  `log_target` char(50) NOT NULL,
  `log_datetime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_info_id` int(11) NOT NULL,
  `admin_lastname` char(50) NOT NULL,
  `admin_firstname` char(50) NOT NULL,
  `admin_middlename` char(50) NOT NULL,
  `admin_status` char(20) NOT NULL,
  `admin_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_info_id`, `admin_lastname`, `admin_firstname`, `admin_middlename`, `admin_status`, `admin_photo`) VALUES
(70, 'Ong3', 'Mona', 'Astrolabos', 'active', 'tg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `assessment_id` int(11) NOT NULL,
  `exam_id` char(20) NOT NULL,
  `user_info_id` int(11) NOT NULL,
  `assessment_score` int(100) NOT NULL,
  `assessment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`assessment_id`, `exam_id`, `user_info_id`, `assessment_score`, `assessment_date`) VALUES
(3, '2', 12, 20, '2021-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(11) NOT NULL,
  `user_info_id` char(20) NOT NULL,
  `exam_question1` int(11) NOT NULL,
  `exam_question2` int(11) NOT NULL,
  `exam_question3` int(11) NOT NULL,
  `exam_question4` int(11) NOT NULL,
  `exam_question5` int(11) NOT NULL,
  `exam_question6` int(11) NOT NULL,
  `exam_question7` int(11) NOT NULL,
  `exam_question8` int(11) NOT NULL,
  `exam_question9` int(11) NOT NULL,
  `exam_question10` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `module_id` int(11) NOT NULL,
  `module_photo` char(20) NOT NULL,
  `module_name` char(20) NOT NULL,
  `module_file` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`module_id`, `module_photo`, `module_name`, `module_file`) VALUES
(2, 'driving1.jpg', 'Sample', 'Sample.pdf'),
(3, 'trafficlight.jpg', 'Driving', 'Sample.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `questionaire`
--

CREATE TABLE `questionaire` (
  `questionaire_id` int(11) NOT NULL,
  `question_description` text NOT NULL,
  `question_answer_correct` text NOT NULL,
  `question_answer_wrong1` text NOT NULL,
  `question_answer_wrong2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionaire`
--

INSERT INTO `questionaire` (`questionaire_id`, `question_description`, `question_answer_correct`, `question_answer_wrong1`, `question_answer_wrong2`) VALUES
(4, 'Ang sasakyan na iyong minamaneho ay tumirik sa highway, dapat mong ilagay ang Early Warning Device (', '4 metro sa likod at harap ng sasakyan', '2 metro sa likod at harap ng sasakyan', '3 metro sa likod at harap ng sasakyan'),
(5, 'Ang pagkakaroon ng lisensya ay isang:', 'pribilehiyo', 'karangalan', 'karapatan'),
(6, 'May dalawang sasakyan na nagtagpo sa pataas na kalsada, sino sa dalawa ang dapat magbigay daan?', 'Ang sasakyan na pababa', 'Ang sasakyan na pataas', ' Ang sasakyan na unang bumusina'),
(7, 'Ang drayber na may \"restriction code no. 1\" sa kanyang lisensya ay maaaring magmaneho ng:', 'motorsiklo', 'trak', 'kotse'),
(8, 'Kung parating ka sa isang kurbada, ano ang dapat mong gawin?', 'Magmarahan/bagalan ang takbo bago dumating sa kurb', 'Bilisan ang takbo habang nasa kurbada', 'Magpreno ng bigla habang tumatakbo sa kurbada'),
(9, 'Ang isa na nakakaapekto sa iyong kakayahang makakita habang nagmamaneho ay?', 'Mga sira o maruming headlight', 'Mahinang ilaw sa kalsada', 'Foggy na kalsada'),
(10, 'Ano ang ibig sabihin ng berdeng palaso (arrow) na ilaw trapiko?', 'Nagpapahintulot sa mga sasakyan na kumaliwa at kum', 'Nagpapahintulot sa pagtawid ng mga taong tatawid', 'Hindi pinayagan ang pagpasok sa interseksyon na it'),
(11, 'Ang mga aksidente sa kalsada ay maiiwasan at mabawasan kung ang driver:', 'ay listo sa mga traffic signs na nakalagay sa mga', 'iinom ng kape bago magmaneho', 'maingat at mabagal magmaneho'),
(12, 'Kung ang isang driver ay mabilis na nagmamaneho sa isang kurbada, siya ay:', 'hindi dapat diinan bigla ang preno', 'hindi dapat na hilahin ang handbrake', 'dapat na diinan bigla ang preno kung kinakailangan'),
(13, 'Ang sasakyan na pribadong nakarehistro at ginamit na pamasada at pagsakay ng pasahero o mga kargamen', 'multa na Php 2,000 at suspension ng lisensya sa lo', 'multa na Php 500', 'anselasyon ng kanyang lisensya'),
(14, 'Ano ang kahulugan ng patay-sinding kulay pulang ilaw trapiko?', 'Huminto at magpatuloy kung ligtas', 'Maghintay ng berdeng ilaw', 'Bagalan ang takbo at tumuloy ng maingat'),
(15, 'Kapag nagmamaneho sa highway sa gabi, dapat mong gamitin ang \"low beam\" na headlights kapag:', 'parehong tama ang mga sagot', 'ikaw ay nasilaw sa ilaw ng kasalubong na sasakyan', 'may drayber na nag-dim din ng kanyan ilaw'),
(16, 'Sa mga rotonda, alin ang may karapatan sa daan?', 'Ang sasakyang nasa paligid ng rotonda', 'Ang sasakyang nakaharap sa berdeng ilaw', 'Ang sasakyang papasok pa lamang sa rotonda'),
(17, 'Ang kailangang distansya sa pagitan ng sinusundang sasakyan ay:', '3-second rule', '5-second rule', '6-second rule'),
(18, 'Ang lisensya na ibinigay sa isang driver ay dapat pahintulutan siyang magpatakbo:', 'anging ang sasakyan lamang ang tinutukoy sa lisens', 'Mga klase lamang ng 1-3 na sasakyan', 'Tanging mga sasakyan na maaari niyang imaneho.'),
(19, 'Kung ang kasalubong na sasakyan ay lumampas sa linya sa gitna para kumaliwa, ikaw ay dapat na:', 'magbigay daan at hintayin na mawala ang trapik', 'dagdagan ang bilis para maunahan mo sya', 'bumusina para maghudyat na ikaw ang mauuna'),
(20, 'Ang tinatawag na blind spot ay ang area sa iyong kaliwa o kanan na hindi mo nakikita sa side view mi', 'lingunin ang likuran para makita ito ng malinaw', 'tignan ang rearview mirror', 'bumaba sa sasakyan para silipin ang likuran'),
(21, 'Ano ang kahulugan ng simbulo na pang-trapiko na kulay pula na pabilog, octagon o baliktad na tatsulo', 'Nagtatakda o nagbabawal', 'Nagbibigay babala', 'Nag-uutos ng direksyon'),
(22, 'Upang maiwasan ang pagbangga sa intersection, dapat na:', 'alamin at isagawa ang mga patakaran tungko lsa pag', 'bumusina bilang hudyat na ikaw ay paparating', 'palaging magpatuloy ng maingat sa isang interseksy'),
(23, 'Kung ang drayber ng sasakyang nasa iyong unahan ay naglabas ng kanyang kaliwang kamay at itinuro ito', 'hihinto', 'kakanan', 'kakaliwa'),
(24, 'Ang panahon ng pagaaral para sa aplikante ng professional driver\'s license ay:', 'Anm na buwan', 'isang buwan', 'dalawang buwan'),
(25, 'Ang mahuhuling lasing sa alak o ipinagbabawal na gamot ay may parusang:', 'Tama lahat ng sagot', 'Pagsuspinde ng lisensya', 'Pagkabilanggo ng anim na buwan'),
(26, 'Kung ang drayber ng sasakyan na nasa unahan mo ay naglabas ng kaliwang kamay na nakaturo sa itaas, s', 'kakanan', 'kakaliwa', 'hihinto'),
(27, '\"Tumutukoy ito sa anumang mga sasakyan pang transportasyon sa lupa na hinihimok sa pamamagitan ng an', 'Sasakyan', 'Muscle car', 'Motorsiklo'),
(28, 'Hindi itinuturing na ligtas na pagmamaneho sa isang expressway kapag:', 'ang driver ay pabago bago ng lane nang walang seny', 'ang iyong bilis ay 60kph', 'ang iyong bilis ay 80kph'),
(29, 'Kapag liliko pakaliwa, kailangan mong magbigay daan sa mga sasakyan na galing sa kasalungat na direk', 'na malapit at delikado', 'hanggang makadaan ang dalawang sasakyan', 'hanggang makadaan ang limang sasakyan'),
(30, 'Kapag gumawa ka ng isang biglaang paglipat lalo na kung ikaw ay nasa isang basa at posibleng madulas', 'Wala sa wastong pagpepreno', 'hand braking', 'Pagtapak sa foot brake'),
(31, 'Kapag papalapit sa riles ng tren kung saan may senyas na may paparating na tren, ikaw ay dapat na:', 'huminto na may 1.5 metro na layo sa riles', 'bagalan ang patakbo at tumuloy ng maingat', 'bilisan ang patakbo at unahan ang tren'),
(32, 'Ang pagkakataon na masaktan o mapatay habang nagmamaneho / sumakay ay nabawasan kung may suot na:', 'Seat belts/helmets', 'Helmet', 'Alarm device'),
(33, 'Ang isang sasakyan na bumabaybay sa highway ay dapat na magbigay daan sa:', 'mga tatawid na tao', 'lahat ng sasakyan na papalabas sa kalsada', 'mga sasakyan na paparating sa interseksyon mula sa'),
(34, 'Sa ilalim ng basic speed law, hindi ka maaaring magpatakbo ng mas matulin kaysa sa:', 'tulin na hindi ligtas', 'nakapaskil na speed limit', 'daloy ng trapiko'),
(35, 'Kapag nagmamaneho sa isang highway, huwag lamang tumitig sa sasakyan na nasa harap mo, sa halip dapa', 'palawakin ang layo ng iyong pag-scan sa halos 12 s', 'dapat kang maging magalang at huminto sa pag-titig', 'tumingin din sa mga sasakyan sa likod mo upang mag');

-- --------------------------------------------------------

--
-- Table structure for table `simulation`
--

CREATE TABLE `simulation` (
  `simulation_id` int(11) NOT NULL,
  `users_info_id` char(20) NOT NULL,
  `simulation_stage` char(50) NOT NULL,
  `simulation_time` char(10) NOT NULL,
  `simulation_score` int(100) NOT NULL,
  `simulation_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `simulation`
--

INSERT INTO `simulation` (`simulation_id`, `users_info_id`, `simulation_stage`, `simulation_time`, `simulation_score`, `simulation_date`) VALUES
(1, '12', 'Stage 1', '01:26', 98, '2021-01-18 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `user_info_id` int(11) NOT NULL,
  `account_id` char(10) NOT NULL,
  `user_photo` char(100) NOT NULL,
  `user_lastname` char(20) NOT NULL,
  `user_firstname` char(20) NOT NULL,
  `user_middlename` char(20) NOT NULL,
  `user_birthdate` char(20) NOT NULL,
  `user_phonenumber` char(20) NOT NULL,
  `user_email` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`user_info_id`, `account_id`, `user_photo`, `user_lastname`, `user_firstname`, `user_middlename`, `user_birthdate`, `user_phonenumber`, `user_email`) VALUES
(12, '23', '5e67c6ce54f25c4ccf703d37 (1).jpg', 'Megistus', 'Mona', 'Astrolabos', '2004-08-31', '09569419235', 'aq.ef.777@gmail.com'),
(14, '25', 'admin.jpg', 'Basa', 'Parokya', 'N', '1992-01-08', '09680520346', 'parokyanibasa@gmail.'),
(15, '26', 'student3.png', 'Ong', 'Mark Anthony', 'Narosa', 'Mon Jul 28 2003 08:0', '09205493689', 'iamarkyy0120@gmail.c'),
(16, '27', 'student4.png', 'Tabunar', 'Joey', 'O', '1991-01-01', '09090909090', 'jtabunar03@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_info_id`);

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`assessment_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `questionaire`
--
ALTER TABLE `questionaire`
  ADD PRIMARY KEY (`questionaire_id`);

--
-- Indexes for table `simulation`
--
ALTER TABLE `simulation`
  ADD PRIMARY KEY (`simulation_id`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`user_info_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `assessment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `questionaire`
--
ALTER TABLE `questionaire`
  MODIFY `questionaire_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `simulation`
--
ALTER TABLE `simulation`
  MODIFY `simulation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `user_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
