-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2023 at 11:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veggie`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `img_about` text NOT NULL,
  `title_about` varchar(200) NOT NULL,
  `description_about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `img_about`, `title_about`, `description_about`) VALUES
(1, 'beans.png', 'About us', 'Nori grape silver beet broccoli kombu beet greens fava bean potato quandong celery. Bunya nuts black-eyed pea prairie turnip leek lentil turnip greens parsni.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `email_contact` varchar(250) NOT NULL,
  `address_contact` varchar(250) NOT NULL,
  `phonen_contact` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `email_contact`, `address_contact`, `phonen_contact`) VALUES
(1, 'Clevermindpob@gmail.com', 'Amman-Jordan -King Hussein Business Park ZINC -23', '0799048621');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id_footer` int(11) NOT NULL,
  `facebook_footer` varchar(250) NOT NULL,
  `instagram_footer` varchar(250) NOT NULL,
  `twitter_footer` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id_footer`, `facebook_footer`, `instagram_footer`, `twitter_footer`) VALUES
(1, 'https://www.facebook.com/ClevermindICT/', 'https://www.instagram.com/clevermindpob/', 'https://twitter.com/search?q=cleverMindICT');

-- --------------------------------------------------------

--
-- Table structure for table `form_contact`
--

CREATE TABLE `form_contact` (
  `id_form` int(11) NOT NULL,
  `name_form` varchar(250) NOT NULL,
  `email_form` varchar(250) NOT NULL,
  `message_form` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_contact`
--

INSERT INTO `form_contact` (`id_form`, `name_form`, `email_form`, `message_form`) VALUES
(6, 'Ali', 'ali@gmail.com', 'thanks , hi welcom !'),
(7, 'khalid', 'khalid@gmail.com', 'message number tow '),
(8, 'omar', 'omar@yahoo.com', 'message number three');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id_header` int(11) NOT NULL,
  `img_tab` text NOT NULL,
  `title_tab` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id_header`, `img_tab`, `title_tab`) VALUES
(1, 'Website Logo.png', 'veggie');

-- --------------------------------------------------------

--
-- Table structure for table `mneu_cart_desserts`
--

CREATE TABLE `mneu_cart_desserts` (
  `id_cart_desserts` int(11) NOT NULL,
  `name_recipe_desserts` varchar(200) NOT NULL,
  `content_recipe_desserts` varchar(300) NOT NULL,
  `price_recipe_desserts` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mneu_cart_desserts`
--

INSERT INTO `mneu_cart_desserts` (`id_cart_desserts`, `name_recipe_desserts`, `content_recipe_desserts`, `price_recipe_desserts`) VALUES
(1, 'SMOKED RICOTTA TERRINE', 'ricotta, shallots, cheddar, capers', '12'),
(2, 'PAN FRIED COURGETTE FLOWERS', 'courgette flowers, goats cheese, red onion, pine nuts', '11'),
(3, 'COURGETTE FLOWERS', 'courgette flowers, goats cheese, red onion, pine nuts', '16'),
(4, 'SMOKED RICOTTA TERRINE', 'ricotta, shallots, cheddar, capers', '12'),
(5, 'PAN FRIED COURGETTE FLOWERS', 'courgette flowers, goats cheese, red onion, pine nuts', '11'),
(11, 'FRIED COURGETTE FLOWERS', 'courgette flowers, goats cheese, red onion, pine nutsS', '33'),
(12, 'SMOKED RICOTTA TERRINE', 'courgette flowers, goats cheese, red onion, pine nuts', '87');

-- --------------------------------------------------------

--
-- Table structure for table `mneu_cart_drinks`
--

CREATE TABLE `mneu_cart_drinks` (
  `id_cart_drinks` int(11) NOT NULL,
  `name_recipe_drinks` varchar(200) NOT NULL,
  `content_recipe_drinks` varchar(300) NOT NULL,
  `price_recipe_drinks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mneu_cart_drinks`
--

INSERT INTO `mneu_cart_drinks` (`id_cart_drinks`, `name_recipe_drinks`, `content_recipe_drinks`, `price_recipe_drinks`) VALUES
(1, 'COURGETTE FLOWERS', 'courgette flowers, goats cheese, red onion, pine nuts', '11'),
(2, 'SMOKED RICOTTA TERRINE', 'ricotta, shallots, cheddar, capers', '12'),
(3, 'COURGETTE FLOWERS', 'courgette flowers, goats cheese, red onion, pine nuts', '11'),
(4, 'SMOKED RICOTTA TERRINE', 'ricotta, shallots, cheddar, capers', '12');

-- --------------------------------------------------------

--
-- Table structure for table `mneu_cart_main`
--

CREATE TABLE `mneu_cart_main` (
  `id_cart_main` int(11) NOT NULL,
  `name_recipe_main` varchar(200) NOT NULL,
  `content_recipe_main` varchar(300) NOT NULL,
  `price_recipe_main` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mneu_cart_main`
--

INSERT INTO `mneu_cart_main` (`id_cart_main`, `name_recipe_main`, `content_recipe_main`, `price_recipe_main`) VALUES
(1, 'SAMPHIRE FRITTERS WITH FENNEL CEVICHE', 'fresh samphire, plain flour, cornflower, eggs, fennel', '19'),
(2, 'PAN FRIED COURGETTE FLOWERS', 'courgette flowers, goats cheese, red onion, pine nuts', '13'),
(3, 'SMOKED RICOTTA TERRINE', 'ricotta, shallots, cheddar, capers', '12'),
(4, 'PAN FRIED COURGETTE FLOWERS', 'courgette flowers, goats cheese, red onion, pine nuts', '11'),
(5, 'PAN FRIED COURGETTE FLOWERS', 'courgette flowers, goats cheese, red onion, pine nuts', '16'),
(6, 'SAMPHIRE FRITTERS WITH FENNEL CEVICHE', 'fresh samphire, plain flour, cornflower, eggs, fennel', '19'),
(7, 'PAN FRIED COURGETTE FLOWERS', 'courgette flowers, goats cheese, red onion, pine nuts', '13'),
(8, 'SMOKED RICOTTA TERRINE', 'ricotta, shallots, cheddar, capers', '12'),
(9, 'PAN FRIED COURGETTE FLOWERS', 'courgette flowers, goats cheese, red onion, pine nuts', '11'),
(10, 'PAN FRIED COURGETTE FLOWERS', 'courgette flowers, goats cheese, red onion, pine nuts', '16'),
(12, 'njkn', 'asasad ,dcsafca,f afa', '888'),
(13, 'njknp', 'asasad ,dcsafca,f afa', '634'),
(14, 'rrgdr', 'ofdgkr,irgaew,rgr,agr', '23');

-- --------------------------------------------------------

--
-- Table structure for table `mneu_cart_starters`
--

CREATE TABLE `mneu_cart_starters` (
  `id_cart_starters` int(11) NOT NULL,
  `name_recipe_starters` varchar(200) NOT NULL,
  `content_recipe_starters` varchar(300) NOT NULL,
  `price_recipe_starters` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mneu_cart_starters`
--

INSERT INTO `mneu_cart_starters` (`id_cart_starters`, `name_recipe_starters`, `content_recipe_starters`, `price_recipe_starters`) VALUES
(1, 'SMOKED RICOTTA TERRINE', 'ricotta, shallots, cheddar, capers', '12'),
(2, 'SAMPHIRE FRITTERS WITH FENNEL CEVICHE', 'fresh samphire, plain flour, cornflower, eggs, fennel', '19'),
(4, 'PAN FRIED COURGETTE FLOWERS', 'courgette flowers, goats cheese, red onion, pine nuts', '13'),
(5, 'SMOKED RICOTTA TERRINE', 'courgette flowers, goats cheese, red onion, pine nuts', '12'),
(6, 'PAN FRIED COURGETTE FLOWERS', 'courgette flowers, goats cheese, red onion, pine nuts', '11'),
(7, 'FRIED COURGETTE FLOWERS', 'courgette flowers, goats cheese, red onion, pine nuts', '16'),
(8, 'SMOKED RICOTTA TERRINE', 'ricotta, shallots, cheddar, capers', '12'),
(9, 'SAMPHIRE FRITTERS WITH FENNEL CEVICHE', 'fresh samphire, plain flour, cornflower, eggs, fennel', '19'),
(10, 'PAN FRIED COURGETTE FLOWERS', 'courgette flowers, goats cheese, red onion, pine nuts', '13'),
(11, 'SMOKED RICOTTA TERRINE', 'ricotta, shallots, cheddar, capers', '12'),
(14, 'PAN FRIED COURGETTE FLOWERS', 'courgette flowers, goats cheese, red onion, pine nuts', '11'),
(15, 'PAN FRIED COURGETTE FLOWERS', 'courgette flowers, goats cheese, red onion, pine nuts', '16');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `img_slider` text NOT NULL,
  `title_slider` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `img_slider`, `title_slider`) VALUES
(1, 'hero01.png', 'Veggie gram fava bean leek dandelion silver beet eggplant bush tomato'),
(2, 'hero02.png', 'Dandelion cucumber earthnut pea peanut soko zucchini'),
(8, 'contact-bg.png', 'Veggie gram fava bean leek dandelion silver beet eggplant bush tomato'),
(10, 'pexels-pixabay-460672.jpg', 'Veggie gram fava bean leek dandelion silver beet ');

-- --------------------------------------------------------

--
-- Table structure for table `specials`
--

CREATE TABLE `specials` (
  `id_special` int(11) NOT NULL,
  `img_special1` text NOT NULL,
  `title_special1` varchar(150) NOT NULL,
  `description_special1` varchar(250) NOT NULL,
  `price_special1` varchar(100) NOT NULL,
  `img_special2` text NOT NULL,
  `title_special2` varchar(150) NOT NULL,
  `description_special2` varchar(250) NOT NULL,
  `price_special2` varchar(100) NOT NULL,
  `img_special3` text NOT NULL,
  `title_special3` varchar(150) NOT NULL,
  `description_special3` varchar(250) NOT NULL,
  `price_special3` varchar(100) NOT NULL,
  `img_special4` text NOT NULL,
  `title_special4` varchar(150) NOT NULL,
  `description_special4` varchar(250) NOT NULL,
  `price_special4` varchar(100) NOT NULL,
  `img_special5` text NOT NULL,
  `title_special5` varchar(150) NOT NULL,
  `description_special5` varchar(250) NOT NULL,
  `price_special5` varchar(100) NOT NULL,
  `img_special6` text NOT NULL,
  `title_special6` varchar(150) NOT NULL,
  `description_special6` varchar(250) NOT NULL,
  `price_special6` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specials`
--

INSERT INTO `specials` (`id_special`, `img_special1`, `title_special1`, `description_special1`, `price_special1`, `img_special2`, `title_special2`, `description_special2`, `price_special2`, `img_special3`, `title_special3`, `description_special3`, `price_special3`, `img_special4`, `title_special4`, `description_special4`, `price_special4`, `img_special5`, `title_special5`, `description_special5`, `price_special5`, `img_special6`, `title_special6`, `description_special6`, `price_special6`) VALUES
(1, 'special-1.png', 'Greens fava', 'Nori grape silver beet broccoli kombu beet greens fava', '19', 'special-2.png', 'Celery quand', 'Celery quandong swiss chard chicory earthnut pea', '18', 'special-3.png', 'Pea horser', 'Kohlrabi radish okra azuki bean corn fava bean mustard', '7', 'special-4.png', 'Soko radicchio', 'Dandelion zucchini burdock yarrow chickpea dandelion', '25', 'special-5.png', 'Tigernut', 'Grape silver beet watercress potato tigernut', '14', 'special-6.png', 'Yarrow sweet', 'Gumbo kakadu plum komatsuna black-eyed pea green', '8');

-- --------------------------------------------------------

--
-- Table structure for table `under_slider`
--

CREATE TABLE `under_slider` (
  `id_under` int(11) NOT NULL,
  `img_under1` text NOT NULL,
  `title_under1` varchar(200) NOT NULL,
  `description_under1` varchar(500) NOT NULL,
  `img_under2` text NOT NULL,
  `title_under2` varchar(200) NOT NULL,
  `description_under2` varchar(500) NOT NULL,
  `img_under3` text NOT NULL,
  `title_under3` varchar(200) NOT NULL,
  `description_under3` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `under_slider`
--

INSERT INTO `under_slider` (`id_under`, `img_under1`, `title_under1`, `description_under1`, `img_under2`, `title_under2`, `description_under2`, `img_under3`, `title_under3`, `description_under3`) VALUES
(1, 'icon-vege.svg', 'Turnip green', 'Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi amaranth water spinach avocado daikon napa cabbage.', 'icon-coffee.svg', 'beetroot water', 'Nori grape silver beet broccoli kombu beet greens fava bean potato quandong celery. Bunya nuts black-eyed pea prairie turnip leek.', 'icon-sweet.svg', 'get social', 'Pea horseradish azuki bean lettuce avocado asparagus okra. Kohlrabi radish okra azuki bean corn fava bean mustard tigernut jícama.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id_footer`);

--
-- Indexes for table `form_contact`
--
ALTER TABLE `form_contact`
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id_header`);

--
-- Indexes for table `mneu_cart_desserts`
--
ALTER TABLE `mneu_cart_desserts`
  ADD PRIMARY KEY (`id_cart_desserts`);

--
-- Indexes for table `mneu_cart_drinks`
--
ALTER TABLE `mneu_cart_drinks`
  ADD PRIMARY KEY (`id_cart_drinks`);

--
-- Indexes for table `mneu_cart_main`
--
ALTER TABLE `mneu_cart_main`
  ADD PRIMARY KEY (`id_cart_main`);

--
-- Indexes for table `mneu_cart_starters`
--
ALTER TABLE `mneu_cart_starters`
  ADD PRIMARY KEY (`id_cart_starters`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `specials`
--
ALTER TABLE `specials`
  ADD PRIMARY KEY (`id_special`);

--
-- Indexes for table `under_slider`
--
ALTER TABLE `under_slider`
  ADD PRIMARY KEY (`id_under`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id_footer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form_contact`
--
ALTER TABLE `form_contact`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id_header` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mneu_cart_desserts`
--
ALTER TABLE `mneu_cart_desserts`
  MODIFY `id_cart_desserts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mneu_cart_drinks`
--
ALTER TABLE `mneu_cart_drinks`
  MODIFY `id_cart_drinks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mneu_cart_main`
--
ALTER TABLE `mneu_cart_main`
  MODIFY `id_cart_main` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mneu_cart_starters`
--
ALTER TABLE `mneu_cart_starters`
  MODIFY `id_cart_starters` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `specials`
--
ALTER TABLE `specials`
  MODIFY `id_special` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `under_slider`
--
ALTER TABLE `under_slider`
  MODIFY `id_under` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
