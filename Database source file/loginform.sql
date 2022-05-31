-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 07:49 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginform`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand_images`
--

CREATE TABLE `brand_images` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(300) NOT NULL,
  `image_name` varchar(300) NOT NULL,
  `status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand_images`
--

INSERT INTO `brand_images` (`id`, `brand_name`, `image_name`, `status`) VALUES
(7, 'Adidas', '2022-165254130064698.png', 'active'),
(8, 'Delight', '2022-165254133545385.png', 'active'),
(9, 'cartoon network', '2022-16525413517260.png', 'active'),
(10, 'king forever', '2022-165254136920391.jpg', 'active'),
(11, 'Hobe ekta', '2022-165254146219743.png', 'active'),
(12, 'color brand', '2022-165254147495383.jpg', 'active'),
(13, 'victoria', '2022-165254148951084.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `client_massages`
--

CREATE TABLE `client_massages` (
  `id` int(11) NOT NULL,
  `client_username` varchar(100) NOT NULL,
  `client_email` varchar(100) NOT NULL,
  `client_massege` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_massages`
--

INSERT INTO `client_massages` (`id`, `client_username`, `client_email`, `client_massege`) VALUES
(2, 'minozyses', 'wano@mailinator.com', 'Morbi tincidunt, libero quis imperdiet sagittis, risus orci malesuada nulla, vel gravida libero erat et elit. Maecenas porttitor orci nec quam euismod, a dapibus ex iaculis.'),
(3, 'nyzyjerav', 'wivoxi@mailinator.com', 'Consequat Sed tempo'),
(4, 'nuhilo', 'mavuqe@mailinator.com', 'Quidem voluptas dolo'),
(5, 'Fahim', 'Fahim.hossain69.bd@gmail.com', 'Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.'),
(6, 'jiherehu', 'cezit@mailinator.com', 'Quas sed eos cupidit'),
(7, 'farjana', 'vipowosa@mailinator.com', 'Edit together in real-time with easy sharing, and use comments, suggestions, and action items to keep things moving. Or use @-mentions to pull relevant people, files, and events into your online Docs for rich collaboration.'),
(8, 'kaluikhan', 'wano@mailinator.com', 'ami valo na valo thgaiko tumi???'),
(9, 'Farzana khan', 'wano@mailinator.com', 'Hi , im farzajan im no one.'),
(10, 'jubair', 'jubairamikomuna@gmail.com', 'in a state of peaceful happiness'),
(11, 'mamun', 'vipowosa@mailinator.com', 'hi kemon acho');

-- --------------------------------------------------------

--
-- Table structure for table `my_skills`
--

CREATE TABLE `my_skills` (
  `id` int(11) NOT NULL,
  `skill_name` varchar(100) NOT NULL,
  `skill_persent` int(3) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `my_skills`
--

INSERT INTO `my_skills` (`id`, `skill_name`, `skill_persent`, `status`) VALUES
(1, ' Css ', 20, 'active'),
(2, 'web design', 80, 'active'),
(6, ' HTML ', 95, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios_details`
--

CREATE TABLE `portfolios_details` (
  `id` int(11) NOT NULL,
  `portfolio_descript` longtext NOT NULL,
  `portfolio_name` varchar(200) NOT NULL,
  `portfolio_image` varchar(200) DEFAULT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolios_details`
--

INSERT INTO `portfolios_details` (`id`, `portfolio_descript`, `portfolio_name`, `portfolio_image`, `status`) VALUES
(1, 'A game is a structured form of play, usually undertaken for entertainment or fun, and sometimes used as an educational tool. Games are different from work, which is usually carried out for remuneration, and from art, which is more often an expression of aesthetic or ideological elements.', 'Gaming Type', '2022-165254255469199.jpg', 'active'),
(2, 'Chess is a board game played between two players. It is sometimes called Western chess or international chess to distinguish it from related games such as xiangqi and shogi. The current form of the game emerged in Southern Europe during the second half of the 15th century after evolving from chaturanga, a similar but much older game of Indian origin. Today, chess is one of the world&#039;s most popular games, played by millions of people worldwide.  Chess is an abstract strategy game and involves no hidden information. It is played on a square chessboard with 64 squares arranged in an eight-by-eight grid. At the start, each player (one controlling the white pieces, the other controlling the black pieces) controls sixteen pieces: one king, one queen, two rooks, two bishops, two knights, and eight pawns. The object of the game is to checkmate the opponent&#039;s king, whereby the king is under immediate attack (in &quot;check&quot;) and there is no way for it to escape. There are also several ways a game can end in a draw.  Organized chess arose in the 19th century. Chess competition today is governed internationally by FIDE (International Chess Federation). The first universally recognized World Chess Champion, Wilhelm Steinitz, claimed his title in 1886; Magnus Carlsen is the current World Champion. A huge body of chess theory has developed since the game&#039;s inception. Aspects of art are found in chess composition, and chess in its turn influenced Western culture and art and has connections with other fields such as mathematics, computer science, and psychology.  One of the goals of early computer scientists was to create a chess-playing machine. In 1997, Deep Blue became the first computer to beat the reigning World Champion in a match when it defeated Garry Kasparov. Today&#039;s chess engines are significantly stronger than the best human players, and have deeply influenced the development of chess theory. ', 'Chess Game', '2022-165254285137042.jpg', 'active'),
(3, 'How to find a lost indoor cat  Having an indoor cat go missing can be especially heartbreaking, because we aren&rsquo;t used to them wandering far from our feet! 😿 So, how does one find a lost indoor cat?  The first step is understanding that cats are territorial creatures, and that they often don&rsquo;t leave their territory on purpose.  Indoor cats usually have a much smaller territory than outdoor cats. This means they only feel comfortable exploring their &ldquo;home territory&rdquo;, so they probably won&rsquo;t travel much further than a small distance from where they live.  In fact, a 2017 study found that missing indoor cats were found, on average, a distance of only 39 meters (128 feet) away from home.  Outdoor cats, on the other hand, are known to travel farther. They were found an average distance of 300 meters &ndash; or three football fields &ndash; away.  But now, back to indoor cats. Start searching your immediate surroundings in order to find a lost indoor cat. Call their name, put out some cat food, and check any potential hiding spots like in the garage or up a tree &ndash; and your feline friend will likely be back in your arms in no time.', 'Findout Cat Buddy', '2022-165254290370739.jpg', 'active'),
(5, 'Close to 50 percent of Bangladesh&#039;s population is primarily employed in agriculture, with more than 70 percent of its land dedicated to growing crops. Major crops cultivated include rice, jute, wheat, tea, pulses, oil-seeds, vegetables and fruits. Yet despite agriculture contributing to such a large percentage of Bangladesh&#039;s overall economy, it has remained largely subsistence based, with uncertain crop yields and inefficient infrastructure limiting the ability of farmers to fully commercialize their production. Recognizing this environment, an In-depth Country Assessment, conducted as part of the Global Strategy to Improve Agricultural and Rural Statistics, concluded that the Bangladesh Bureau of Statistics needs to improve internal and external coordination with statistics producers and users. A plan focused specifically on agriculture is needed to complement and supplement national strategies for the development of statistics. Data gaps in several core areas already being studied such as food balance sheets, livestock and agri-environmental indicators need to be filled to produce more effective statistics and enable more informed responses to these issues. Amongst those tasked with using and analyzing statistics, knowledge and skills need to be further developed. ', 'Village Farmer', '2022-165254423671173.jpg', 'active'),
(6, 'Childhood memory refers to memories formed during childhood. Among its other roles, memory functions to guide present behaviour and to predict future outcomes. Memory in childhood is qualitatively and quantitatively different from the memories formed and retrieved in late adolescence and the adult years.', 'Childhood', '2022-165254426068175.jpg', 'active'),
(7, 'Fair  The air quality is generally acceptable for most individuals. However, sensitive groups may experience minor to moderate symptoms from long-term exposure. ', 'Bangladesh Weather ', '2022-165260319772869.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `services_list`
--

CREATE TABLE `services_list` (
  `id` int(11) NOT NULL,
  `service_name` varchar(200) NOT NULL,
  `service_description` text NOT NULL,
  `service_icon` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services_list`
--

INSERT INTO `services_list` (`id`, `service_name`, `service_description`, `service_icon`, `status`) VALUES
(11, 'Web Devloper', 'Im fucking designer who dont know any type of coding skill.\"\"', 'fa fa-reddit-alien', 'Actived'),
(12, 'Css', 'Im fucking designer who dont know any type of coding skill.', 'fa fa-css3', 'Actived'),
(13, 'WordPress ', 'Im fucking designer who dont know any type of coding skill.', 'fa fa-wordpress', 'Actived'),
(14, 'youtube', 'Im fucking designer who dont know any type of coding skill.', 'fa fa-youtube', 'Actived'),
(15, 'E-mail Signature', 'Im fucking designer who dont know any type of coding skill.', 'fa fa-id-card-o', 'Actived'),
(21, 'Web Designer', 'Im fucking designer who dont know any type of coding skill.', 'fa fa-laptop', 'Actived');

-- --------------------------------------------------------

--
-- Table structure for table `singup_page`
--

CREATE TABLE `singup_page` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `phone_numbers` varchar(100) NOT NULL,
  `default_photo_name` varchar(300) NOT NULL DEFAULT 'default_profile_photo.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `singup_page`
--

INSERT INTO `singup_page` (`id`, `name`, `email_address`, `password`, `confirm_password`, `phone_numbers`, `default_photo_name`) VALUES
(1, 'fahim', 'fahim.hossainmunna618913@gmail.com', 'Fahim.@618913', '$insert_db', '0', 'default_profile_photo.png'),
(2, 'fahim', 'fahim.hossainmunna618913@gmail.com', '$Password', '$insert_db', '0', 'default_profile_photo.png'),
(3, 'fahim', 'fahim.hossainmunna618913@gmail.com', 'Fahim.@618913', 'Fahim.@618913', '0', 'default_profile_photo.png'),
(4, 'kiloc', 'qadunib@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(5, '', '', '', '', '0', 'default_profile_photo.png'),
(6, '', '', '', '', '0', 'default_profile_photo.png'),
(7, '', '', '', '', '0', 'default_profile_photo.png'),
(8, 'kucyq', 'xifunuvon@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(9, 'denytiqugy', 'jyqir@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(10, 'ziqizumu', 'kozoses@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(11, 'firis', 'tibogihub@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(12, 'potyl', 'nizoxebaxa@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(13, 'synadicyd', 'nycoze@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(14, '', '', '', '', '0', 'default_profile_photo.png'),
(15, 'bymos', 'juqyto@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(16, 'qygikydi', 'zygyzy@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(17, '', '', '', '', '0', 'default_profile_photo.png'),
(18, 'gyzod', 'fidafiqexe@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(19, '', '', '', '', '0', 'default_profile_photo.png'),
(20, 'qurifilu', 'jevero@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(21, 'xisahum', 'hycozih@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(22, 'ganuqyt', 'rycetepiba@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(23, '', '', '', '', '0', 'default_profile_photo.png'),
(24, '', '', '', '', '0', 'default_profile_photo.png'),
(25, 'quramyg', 'xasybisuze@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(26, 'mykutufav', 'puvakixuba@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(27, 'gacaxez', 'rawobuti@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(28, 'sygide', 'wunyryra@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(29, 'vyqevab', 'nekupero@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(30, 'liqalak', 'zyfu@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(31, 'xidojyc', 'hefadybo@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(32, 'vicyzogi', 'dego@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(33, 'hossain', 'munna@live.com', '', 'Fahim.@618913', '0', 'default_profile_photo.png'),
(34, '', '', '', '', '0', 'default_profile_photo.png'),
(35, 'holulu', 'fahim.hossainmunna618913@gmail.com', 'Fahim.@618913', 'Fahim.@618913', '0', 'default_profile_photo.png'),
(36, 'afrin', 'afrin@gmail.com', '1234ABgt$$', '1234ABgt$$', '0', 'default_profile_photo.png'),
(37, '', '', '', '', '0', 'default_profile_photo.png'),
(38, 'oyshini', 'oyshini@gamil.com', '1234ABgt$$', '1234ABgt$$', '0', 'default_profile_photo.png'),
(39, '', '', '', '', '0', 'default_profile_photo.png'),
(40, 'jabybyb', 'rowequw@mailinatorcom', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(41, 'jabybyb124', 'fahim.hossainmunna618913@gmail.com', 'Pa$$w0rd!', '', '0', 'default_profile_photo.png'),
(42, 'fahim', 'fahim.hossainmunna618913@gmail.com', 'Pa$$w0rd!', '1234ABgt$$', '0', 'default_profile_photo.png'),
(43, 'fahim', 'fahim.hossainmunna618913@gmail.com', 'Pa$$w0rd!', '1234ABgt$$', '0', 'default_profile_photo.png'),
(44, 'fahim', 'fahim.hossainmunna618913@gmail.com', '12345&Gha', '12345&Gha', '0', 'default_profile_photo.png'),
(45, 'Fahim', 'tecno@live.com', 'Fahim.123456', 'Fahim.123456', '0', 'default_profile_photo.png'),
(46, 'tonaxeh', 'zezutucyx@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(47, 'kamlesh', 'kamlakhan.bd@fuckboy.com', 'Tumiamrj@@n2', 'Tumiamrj@@n2', '0', 'default_profile_photo.png'),
(48, 'rabbipatel', 'rabbipatel@narada.com', 'R@bbip@tel556', 'R@bbip@tel556', '0', 'default_profile_photo.png'),
(49, 'jyhahoh', 'gavuqyne@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(50, 'kamlesh', 'kamlesh@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(51, 'lepegi', 'kamlesh@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(52, 'zarixu', 'kamlesh@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '2147483647', 'default_profile_photo.png'),
(53, 'riwop', 'kamlesh@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(54, 'zuzer', 'kamlesh@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(55, 'gijeqitix', 'kamlesh@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(56, 'jognul', 'jognul@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(57, 'Fahim Hossain Munna', 'hossain@live.com', 'rahman.@143', 'Mim.@143', '0', 'default_profile_photo.png'),
(58, 'patadaqa', 'fugikalom@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Pa$$w0rd!', '0', 'default_profile_photo.png'),
(59, 'asmatullah', 'qavoxukolu@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '0', 'default_profile_photo.png'),
(60, 'afrinmim', 'afrinmim11.bd@gmail.com', 'ae175b05b81bcc59240c1fc32bb6e355', '49a52d03a5e4b34df0c69f8c1afed626', '0', 'default_profile_photo.png'),
(61, 'Fahim ', 'nilufa@gmail.com', 'f85141540d16c7f853b6be6290b60880', 'f85141540d16c7f853b6be6290b60880', '1755736548', '61.jpg'),
(62, 'Muhammad', 'yaaali@mailinator.com', 'c4bcad12e84879eeb0c03a5987391363', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '0', 'default_profile_photo.png'),
(63, 'Fahim Hossain ', 'Sihan@hansome.bd.com', 'b2e60a20501f4aecb0934354d67463f3', 'b2e60a20501f4aecb0934354d67463f3', '1755736548', '63.jpeg'),
(64, 'xipadanu', 'nasi@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '0', 'default_profile_photo.png'),
(65, 'gocezyt', 'mobobaco@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '0', 'default_profile_photo.png'),
(66, 'gakoxilu', 'qidoto@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '0', 'default_profile_photo.png'),
(67, 'pixidy', 'dexasexyv@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '0', 'default_profile_photo.png'),
(68, 'kibyk', 'gupejefi@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '12436', '68.jpeg'),
(69, 'murgi', 'valochele@hey.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '1755736548', '69.jpg'),
(70, 'Fahim Hossain Munna', 'fahim.hossain69.bd@gmail.com', '42bbe373c2fad1a44bc8fa32f8da59e0', '42bbe373c2fad1a44bc8fa32f8da59e0', '197745678', '70.jpg'),
(71, 'hello', 'vogelyb@mailinator.com', '49a52d03a5e4b34df0c69f8c1afed626', '49a52d03a5e4b34df0c69f8c1afed626', '1755736548', '71.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `web_profile_settings`
--

CREATE TABLE `web_profile_settings` (
  `id` int(11) NOT NULL,
  `profile_name` varchar(100) NOT NULL,
  `profile_value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_profile_settings`
--

INSERT INTO `web_profile_settings` (`id`, `profile_name`, `profile_value`) VALUES
(1, 'your_name', 'Fahim Hossain (Munna)'),
(2, 'short_bio', '’m a web Developer. I spend my whole day, practically every day, experimenting with HTML, CSS, and Basic JavaScript; dabbling with PHP and Laravel, I build websites that delight and inform. I do it well.'),
(3, 'about_me', 'At the moment, I’m a developer Student on Creative It Institute team in Dhanmonddi, Dhaka,Bangladesh. A slight clarification of the above: I’m actually a philosophy student cleverly disguised as a successful web developer. Since it was relatively clear early on that it would be slightly more than difficult to make a living sitting under a tree while reading Kant, I’ve focused my energies on the web, which happily has proven itself to be a wonderful decision.'),
(4, 'address', 'Khan Tower,Floor-6D,West Canelpar,Bhuighar,Narayanganj.'),
(5, 'email', 'fahim.hossain69.bd@gmail.com'),
(6, 'phone_number', '+8801755736548');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand_images`
--
ALTER TABLE `brand_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_massages`
--
ALTER TABLE `client_massages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_skills`
--
ALTER TABLE `my_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios_details`
--
ALTER TABLE `portfolios_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_list`
--
ALTER TABLE `services_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `singup_page`
--
ALTER TABLE `singup_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_profile_settings`
--
ALTER TABLE `web_profile_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand_images`
--
ALTER TABLE `brand_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `client_massages`
--
ALTER TABLE `client_massages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `my_skills`
--
ALTER TABLE `my_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `portfolios_details`
--
ALTER TABLE `portfolios_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services_list`
--
ALTER TABLE `services_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `singup_page`
--
ALTER TABLE `singup_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `web_profile_settings`
--
ALTER TABLE `web_profile_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
