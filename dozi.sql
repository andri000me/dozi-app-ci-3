-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 01, 2020 at 07:39 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dozi`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `deskripsi_artikel` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `status_artikel` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_post` date NOT NULL,
  `foto_artikel` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `deskripsi_artikel`, `id_kategori`, `status_artikel`, `id_user`, `tgl_post`, `foto_artikel`, `role_id`) VALUES
(11, 'PrinterShare Mobile Print 11.30.5 Apk for Android', '<p>Print directly from your Android device via WiFi, Bluetooth, USB or Internet! Now you can instantly print PDF files, office documents (Word, Excel, PowerPoint), bills, invoices and more to a printer right next to you or across the world. Print photos and images (JPG, PNG, GIF), emails and attachments (PDF, DOC, XSL, PPT, TXT), contacts, agenda, sms/mms, call log, web pages (HTML) and other digital content from device memory, cloud storage providers such as Google Drive, One Drive, Box, Dropbox and other applications via Share action. Configure printing options such as paper size, page orientation, number of copies, page range, one- or two-sided printing (duplex mode), print quality (resolution), color or monochrome, input tray and more. PrinterShare also provides native printing support on Android 4.4 (KitKat) and Android 5 (Lollipop) devices. With the free version of the app you can: * Print a test page on nearby printers to ensure compatibility; * Print on Windows shared (SMB/CIFS) or Mac shared printers; * Print on direct USB-OTG connected printers; * Print via Google Cloud Print (including save as PDF); * Print 20 pages in remote mode over the Internet. For unlimited printing you need to purchase PrinterShare Premium Key, a separate small application that simply needs to be on the device to unlock Premium Features of the free app. Prior to buying the key we highly recommend printing the test page to ensure compatibility with your printer. Premium Features: * Nearby direct printing (PDFs, documents, photos and more) via Wi-Fi or Bluetooth without a computer; * Unlimited Remote printing. The receiving end (Windows or Mac) would not have to buy pages or subscribe. * No advertisements PrinterShare supports a wide variety of HP (Officejet, LaserJet, Photosmart, Deskjet and other models including HP Officejet 100 Mobile and HP Officejet 150 Mobile), Epson (Artisan, WorkForce, Stylus and other series), Canon (PIXMA MP/MX/MG and other series), Brother, Kodak , Samsung, Dell, Lexmark, Kyocera and other printers including legacy networkable. A full list of supported printers available at http://printershare.com/help-mobile-supported.sdf. You can also print to unsupported and legacy printers with our free computer software for Mac and Windows available at http://printershare.com. Please note: 1) Requested permissions are needed to print content and are not used to collect your personal data. For a more detailed explanation see our FAQ at http://www.printershare.com/help-mobile-faq.sdf 2) Google Cloud Print requires latest version of Chrome browser on your computer or Google Cloud Print capable printer. For more setup instructions please read http://www.google.com/support/cloudprint/ 3) If something isn&rsquo;t working as expected, please send us an email to support@printershare.com Have a good print! * For direct nearby printing to selected printer models PrinterShare downloads and uses drivers provided by HPLIP (http://hplipopensource.com) and GutenPrint (http://gimp-print.sourceforge.net). These drivers are distributed under GNU General Public License, version 2.</p>', 2, 1, 9, '2020-08-31', 'unnamed.png', 0),
(12, 'Guild of Heroes – fantasy RPG 1.95.4 Apk + Mod Free shopping', '<p>Join the Guild of Heroes and fight the forces of evil in a new fantasy world full of adventures and danger. Here, you&rsquo;ll find a way to glory and recognition. Equip your character and sharpen your skills, practicing sword play and magic. It&rsquo;s a real, free, fantasy-style action &ndash; RPG game for tablets and smart phones. The Guild of Heroes game differs from other games by its simple and handy gameplay. Check it out for yourself! ◆ Jump right into the heat of battle. An intuitive UI will help find your way around the game in no time. But if you want to become a real hero, you&rsquo;ll have to work hard. ◆ Explore a vast and colorful world. Venture on an epic journey across unique locations hiding countless secrets. You will travel through vast expanses of plains, thick forests and immeasurably deep caves and dungeons. ◆ Crush your enemies. Each of them will have unique behaviors and skills. Find their weak spots and leave them with no chance of defeating you. ◆ Defeat mighty bosses. These children of the dark have evolved to become almost invincible. They only fear their own Dark Lords. Kill them to obtain unique ancient artifacts. ◆ Equip your character. Collect your own armor and weapon sets from hundreds of available pieces. ◆ Learn new spells, upgrade them and use them in battle. In this world, all elements can be controlled with magic. Harness them, and even the darkest forces will yield to your power. ◆ Fight shoulder-to-shoulder with your friends. They will always help you defeat the strongest and most vicious enemies. Bring together your own team of warriors and get ready for exciting challenges. ◆ Change your character class as you progress through the game. Choose one of the three available classes: warrior, archer or mage. Change it at any moment without having to replay the game.</p>', 1, 1, 9, '2020-08-31', '5e1f53a9c6ca3.png', 0),
(13, 'Plants vs Zombies 2 8.3.1 Apk + MOD', '<p>In this game (Plants vs. Zombies 2) , you need both thought and precision and speed to use the game tools in the best way. In this game, a small mistake can cause you to lose. There are also special items that are very interesting, exciting and funny to work with! Game Features: Up to 50 different levels of play in different locations and conditions Battle with over 26 species of zombies Gain 49 powerful perennials and get coins to buy homemade snails and increase powers Collect 10 dead-fun achievements Quite accurate simulation for Android as well as PC version Graphics and great sounds and extra clips as a reward How to install: 1. Install Apk or Apk Mod 2. Copy folder com.ea.game.pvz2_row to Android/Obb 3. play and enjoy it</p>', 2, 1, 9, '2020-08-31', '246x0w.png', 0),
(14, 'Last Empire-War Z 1.0.319 Apk + Mod + Data for android', '<p>The world of Last Empire&ndash;War Z is a dangerous place filled with hordes of twisted and powerful zombies. Train your soldiers, build an alliance and develop your city to protect your empire. You&rsquo;ll have to be smart, tough and courageous to survive. Last Empire&ndash;War Z is a zombie-themed Free-to-Play mobile strategy game where players battle zombies and other survivors to build and grow their empire. Join an alliance and team up with your friends and allies from around the world to fight zombies, develop your base and compete in in-game events. Take part in brutal battles and gather the resources to support your troops and grow your city. Unite with allies or play solo, it&rsquo;s up to you! The life or death of your city is in your hands! Game Features ☆ Free to play, social strategy game. ☆View battles throughout the game world in real time, and chat with alliance members worldwide. ☆ Train your troops and your Commander, develop your city and create a powerful army to fight zombies. ☆ Battle zombies and other survivors to expand your city. Win the war for survival with a variety of strategies that are constantly changing. ☆ Zombie Troops: Train deadly, terrifying Zombie Troops to fight for you. They are especially powerful attacking or defending cities. ☆ Experience the challenge and thrill of defeating endless hordes of zombies and dark creatures. ☆ Choose to be a hero, a villain, an ambassador of peace, or someone else&rsquo;s resource provider. It&rsquo;s all up to you. ☆ Come join us and fight in struggle for survival after the end of the world.</p>', 1, 1, 9, '2020-08-31', 'DIoqtxBVAAAac8O.jpg', 0),
(15, 'CyberSphere Online 1.99.32 Apk + Mod (Unlimited Money) for android', '<p>Far future. Mankind is attacked by alien race. Enemy robot forces are advancing on all colonies and even on Earth. Scientists have found a new weapon to defeat enemy, but our research facility has been attacked. We need to transmit collected information. Give us some time!<br />\r\nManage super &ndash; modern combat unit &ldquo;CyberSphere&rdquo;, hold on as long as possible to defend the base from the advancing enemy hordes of robots, aliens and cyborgs.<br />\r\nUse your deadly and diverse arsenal of firearms, missiles, energy weapons, as well as support battle drones for the destruction of the enemy. You can fight alone or join forces with other pilots in online multiplayer mode!<br />\r\nGood luck!</p>\r\n\r\n<p>★ Amazing 3D graphics. It will make you believe, that this game is reality.<br />\r\n★ Singleplayer. You can play this game without internet connection!<br />\r\n★ Online multiplayer. Up to 8 players can play together!<br />\r\n★ Lot of game modes &ndash; deathmatch, team deathmatch, assault, defence, survive!<br />\r\n★ Plenty of weapons. 28 deadly guns.<br />\r\n★ Lot of character types. Manage futuristic tanks, walking robots, cyborgs and soldiers, each with unique special ability!<br />\r\n★ Many support drone models. Use your AI-controlled guardians.<br />\r\n★ Easiness of control. You can manage it intuitively using on-screen controls or gamepad.<br />\r\n★ Global ratings. Become the best robot destroyer in the world!<br />\r\n★ A variety of enemies. Robots, aliens, cyborgs, and dangerous bosses.<br />\r\n★ Small size Under 50 mb!<br />\r\n★ Non-stop action! One of the most interesting action games, it will not let you relax even a single second!</p>', 1, 1, 7, '2020-08-31', '0a13ac7cf2c7b4a1eccd673e4bbaeeee.png', 0),
(16, 'Rocket Royale 2.1.1 Apk + Mod (Free-shopping) for android', '<p>Rocket Royale is an epic multiplayer online battle royale where the action takes place in a dying world. People desperately fight for their lives. But only one survivor&hellip; What a minute! In Rocket Royale not everyone is doomed! Everyone has a real chance to survive! Gather gears and build a rocket to leave this place. Or choose the hardest way and be the only survivor on the battlegrounds! Rocket Royale provides a lot of tactics by crafting and building covers around you! Be creative, act smart and make massive destruction on the sandbox battlefield! Increase your skills and you become the king of the battle royale!</p>\r\n\r\n<p>Play on mobile and build your own way to the victory! Huge map to explore, fast-paced non-stop action, simple controls, destructable enviroment! Loot rare and legendary stuff, shoot yo&rsquo; enemies, gather resources and craft covers! In your arsenal more than 20 weapons and every weapon has its own rarity, parametres and attachments! Upgrade every weapon and work out your own style of playing! Make it to the top of lands of battle! Good luck!</p>\r\n\r\n<p><a href=\"https://www.revdl.com\"><img alt=\"Rocket Royale\" src=\"https://image.revdl.com/2018/rocket-royale-1.png\" style=\"height:280px; width:460px\" /></a></p>\r\n\r\n<p>Rocket Royale</p>\r\n\r\n<p><a href=\"https://www.revdl.com\"><img alt=\"Rocket Royale\" src=\"https://image.revdl.com/2018/rocket-royale-2.png\" style=\"height:280px; width:460px\" /></a></p>\r\n\r\n<p>Rocket Royale</p>\r\n\r\n<p><a href=\"https://www.revdl.com\"><img alt=\"Rocket Royale\" src=\"https://image.revdl.com/2018/rocket-royale-3.png\" style=\"height:280px; width:460px\" /></a></p>\r\n\r\n<p>Rocket Royale</p>', 1, 1, 7, '2020-08-31', 'rocket-royale.png', 0),
(17, 'Sniper Fury 5.5.2b Apk for android', '<p>No time for diplomacy; time for war action. We are calling for the best sniper in the world to join us as we take aim at evil, wherever it hides. This is not a game. There is no room for remorse here, so shoot to kill. A STUNNING FPS FIGHT AGAINST EVIL &bull; 130+ action missions &bull; Unbelievable 3D graphics that will bring you to the near future, from urban skyscrapers to exotic locations &bull; Soldiers, armored vehicles, air units and many more enemy classes &bull; Next-gen &ldquo;bullet time&rdquo; effects capture your every amazing sniper headshot &bull; Sandstorms, blizzards, rainstorms and other rich atmospheric effects MODERN &amp; FUTURE FIREPOWER &bull; Shoot sniper rifles, assault rifles, railguns and top-secret weapons &bull; Gather components to upgrade your military arsenal &bull; Unique personalizations for your weapons PVP MULTIPLAYER CHALLENGE &bull; Steal resources from other players by breaking down their defenses in PvP Multiplayer mode &bull; Build a strong squad to keep your loot safe in PvP Multiplayer mode EASY TO PLAY, MUCH TO MASTER &bull; Varied AI behavior makes each enemy unique and challenging to shoot &amp; kill &bull; Extra rewards for joining the action in special events &bull; Connect to the game community to discover more content, more contests and more rewards! The strong, amazing-looking 3D FPS sniper-shooter game you&rsquo;ve been expecting is here. Join the war and shoot to kill! Rack up great headshots rendered in fantastic graphics, sharpen your skill set, and upgrade and personalize your weapon as a special ops military agent. Prepare the assault and get ready to kill the attackers. Try the multiplayer game in our special PvP mode. Join the war action, and don&rsquo;t forget to rate the game and share with your friends if you like it.</p>', 1, 1, 9, '2020-08-31', 'da8tigo-578c6919-019c-4ecf-9c51-efdf4fc266f0.jpg', 0),
(18, 'Angry Birds Transformers 2.5.0 Apk + Mod (Coins, Unlimited Jenga) for Android', '<p>Angry Birds Transformers is a simple, fun, addictive and fantastic game in the genre of action games. in this game players control an angry bird who is trying to find&nbsp;items stolen by the Decepticons, that fused with the evil green pigs.&nbsp;totally in the game you should&nbsp;run forward nonstop&nbsp;and&nbsp;aim and shoot constantly. play and enjoy it !!!</p>\r\n\r\n<p><strong>MOD1:</strong><br />\r\n&ndash; Infinite Coins After Increased<br />\r\n&ndash; Jenga Unlocked</p>\r\n\r\n<p><strong>MOD2:</strong><br />\r\n&ndash; Infinite Coins After Increased<br />\r\n&ndash; Jenga Unlocked</p>\r\n\r\n<p><a href=\"https://www.revdl.com\"><img alt=\"Angry Birds Transformers\" src=\"https://image.revdl.com/2017/angry-birds-transformers-1.png\" style=\"height:280px; width:460px\" /></a></p>\r\n\r\n<p>Angry Birds Transformers</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.revdl.com\"><img alt=\"Angry Birds Transformers\" src=\"https://image.revdl.com/2017/angry-birds-transformers-2.png\" style=\"height:280px; width:460px\" /></a></p>\r\n\r\n<p>Angry Birds Transformers</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.revdl.com\"><img alt=\"Angry Birds Transformers\" src=\"https://image.revdl.com/2017/angry-birds-transformers-3.png\" style=\"height:280px; width:460px\" /></a></p>\r\n\r\n<p>Angry Birds Transformers</p>', 4, 0, 8, '2020-08-31', 'unname1d.png', 0),
(19, 'Clash Royale 3.3.0 Apk + Mod (Money/private Server /Unlocked) for android', '<p>Clash royale android game is a very popular and super-beautiful game from Supercell, the creator of the popular games of clash of clans and boom beach which is provided for various operating systems and its Android version has been downloaded by android users from around the world more than 500,000,000 times from google play today and is one of the most popular! The Clash Royale is also designed as clash of clans game and You compete with online users around the world! Like all MOBA genre games in this game, the goal is to send troops to enemy troops to destroy the towers and overthrow their king!</p>\r\n\r\n<p>At the same time, protect yourself from the realms of your kingdom, relying on magic, defenses, and soldiers you have! In an incredibly beautiful Clash Royale game, you have a wide range of cards to help you create a battle deck to send to the battlefield. You can even create a cologne for yourself in a game where you share your cards with other members! many of the characters in Clash Royale are the familiar characters of the clash of clans game though you will see new characters like Princesses, Knights and Little Dragons! the new update for the Clash Royale game today is the introduction of your loved ones that you can get it with a single click and become addicted to it for days!</p>', 2, 1, 7, '2020-09-01', 'mM_wyJM0_400x400.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Action'),
(2, 'Starategy'),
(4, 'Art');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `status_komen` int(11) NOT NULL,
  `nama_komen` varchar(100) NOT NULL,
  `email_komen` varchar(100) NOT NULL,
  `isi_komen` text NOT NULL,
  `id_artikel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `status_komen`, `nama_komen`, `email_komen`, `isi_komen`, `id_artikel`) VALUES
(1, 0, 'Harun Saputra', 'harun@gmail.com', 'terimkasih, sangat bermanfaat', 19),
(2, 1, 'Juki', 'juji@gmail.com', 'ok', 19);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `foto_user` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `email`, `role_id`, `foto_user`) VALUES
(7, 'rozi1234', '$2y$10$/Z8FSZKJfP6bLfBFZ6Y0s.QuOmCaG9CduZhDAS.wsWMaCZHdqoI72', 'Rozi', 'ridho@gmail.com', 2, 'client-pic-1.jpg'),
(8, 'gaul123', '$2y$10$yOD.ar6ILxxP2liv0329TOPCyVYTM4N/LOIiGQO3GpLnypSK1o2ni', 'gaul', 'gaul@gmail.com', 2, '2.jpg'),
(9, 'ridho123', '$2y$10$pIpDiwLL1Msxjf3orItjp.thZ4fattlTNnC32Ois7nQ6zYdgu21ZK', 'Ridho', 'ridhosurya71@gmail.com', 1, 'client-pic-2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
