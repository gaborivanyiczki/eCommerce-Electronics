-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31 Mai 2017 la 11:19
-- Versiune server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_db`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cat_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `categories`
--

INSERT INTO `categories` (`cat_id`, `name`, `cat_image`) VALUES
(1, 'Telefoane, Tablete & Accesorii', ''),
(2, 'Televizoare - Video', ''),
(3, 'Electrocasnice Mici', ''),
(4, 'Electrocasnice Mari', ''),
(5, 'Laptop - Desktop - IT', ''),
(6, 'Camere foto - video', ''),
(7, 'Home Audio - Video', ''),
(8, 'Ingrijire Personala', ''),
(9, 'Casa - Auto - Gradina', '');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_amount` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_id` int(11) NOT NULL,
  `order_status` text NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_sdescription` text NOT NULL,
  `product_bimage` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_sdescription`, `product_bimage`, `product_quantity`, `date`) VALUES
(3, 'Samsung Galaxy S7 EDGE', 200, 'Telefonul este suficient de puternic pentru a iesi in evidenta. Samsung Galaxy J5 imbina stilul elegant cu functionalitatea.', 'http://localhost/eCommerce/images/t1.jpg', 'fsafgagasfasfasgfasfasfas', 'http://localhost/eCommerce/images/t1.jpg', 5, '2017-05-23 12:28:12'),
(4, 'Iphone 7S Black', 300, 'Telefonul este suficient de puternic pentru a iesi in evidenta. Samsung Galaxy J5 imbina stilul elegant cu functionalitatea.', 'http://localhost/eCommerce/images/t2.jpg', 'fsafasgasfdasfasas', 'http://localhost/eCommerce/images/t2.jpg', 4, '2017-05-23 12:28:13'),
(5, 'LG Optimus L7', 500, 'Telefonul este suficient de puternic pentru a iesi in evidenta. Samsung Galaxy J5 imbina stilul elegant cu functionalitatea.', 'http://localhost/eCommerce/images/t3.jpg', 'gfasfascscxfasfas', 'http://localhost/eCommerce/images/t3.jpg', 4, '2017-05-23 12:28:14'),
(6, 'Huawei P9', 1000, 'Telefonul este suficient de puternic pentru a iesi in evidenta. Samsung Galaxy J5 imbina stilul elegant cu functionalitatea.', 'http://localhost/eCommerce/images/t4.jpg', 'gfasfascscxfasfas', 'http://localhost/eCommerce/images/t4.jpg', 4, '2017-05-23 12:28:14'),
(7, 'Huawei P9', 1000, 'Telefonul este suficient de puternic pentru a iesi in evidenta. Samsung Galaxy J5 imbina stilul elegant cu functionalitatea.', 'http://localhost/eCommerce/images/t4.jpg', 'gfasfascscxfasfas', 'http://localhost/eCommerce/images/t4.jpg', 4, '2017-05-23 12:28:14'),
(8, 'Huawei P9', 1000, 'Telefonul este suficient de puternic pentru a iesi in evidenta. Samsung Galaxy J5 imbina stilul elegant cu functionalitatea.', 'http://localhost/eCommerce/images/t4.jpg', 'gfasfascscxfasfas', 'http://localhost/eCommerce/images/t4.jpg', 4, '2017-05-23 12:28:14');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `products_subcategories`
--

CREATE TABLE `products_subcategories` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `products_subcategories`
--

INSERT INTO `products_subcategories` (`id`, `product_id`, `subcategory_id`) VALUES
(9, 4, 3),
(10, 5, 3),
(11, 3, 3),
(12, 6, 3);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nume_rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `roles`
--

INSERT INTO `roles` (`id`, `nume_rol`) VALUES
(1, 'User'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `subcategories`
--

CREATE TABLE `subcategories` (
  `subcat_id` int(11) NOT NULL,
  `subcat_name` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `subcategories`
--

INSERT INTO `subcategories` (`subcat_id`, `subcat_name`, `date_created`, `category_id`, `description`, `image`) VALUES
(3, 'Telefoane Mobile', '2017-05-23 13:15:18', 1, 'Smartphone-uri de la furnizori cu incredere precum: Apple, Samsung, LG, Huawei, Allview, Alcatel', 'http://projects.dev/eCommerce/images/subcat1.jpg'),
(4, 'Accesorii Telefoane', '2017-05-23 13:13:35', 1, 'Huse,incarcatoare,baterii externe si alte accesorii pentru telefoane.', 'http://projects.dev/eCommerce/images/subcat2.jpg'),
(6, 'Tablete', '2017-05-23 13:15:48', 1, 'Tablete de la diversi furnizori precum: Apple, Samsung, Allview, Microsoft', 'http://projects.dev/eCommerce/images/subcat3.jpg'),
(7, 'Accesorii tablete', '2017-05-23 13:13:48', 1, 'Huse,incarcatoare,baterii externe si alte accesorii pentru tablete.', 'http://projects.dev/eCommerce/images/subcat4.jpg');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '1',
  `email` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `role_id`, `email`, `password`) VALUES
(7, 'test22222', 1, '', 'testestestr11'),
(8, 'admin', 2, 'xd.gaga@yahoo.com', 'admin1234'),
(9, 'test100', 1, 'test@gmail.com', 'test110'),
(10, 'andrei2011', 1, 'tsteste@test.com', 'fgasgasgasfas'),
(11, 'users1', 1, 'user@user.com', 'users2');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `utilizatori`
--

CREATE TABLE `utilizatori` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` set('Female','Male','','') NOT NULL,
  `job` set('Student','Absolvent','Salariat','Somer','Altceva') NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_orders_products` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `products_subcategories`
--
ALTER TABLE `products_subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `FK_products_categories_subcategories_subcategories` (`subcategory_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`subcat_id`),
  ADD KEY `FK_subcategories_categories` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `FK_users_roles` (`role_id`);

--
-- Indexes for table `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products_subcategories`
--
ALTER TABLE `products_subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `utilizatori`
--
ALTER TABLE `utilizatori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restrictii pentru tabele sterse
--

--
-- Restrictii pentru tabele `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_orders_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Restrictii pentru tabele `products_subcategories`
--
ALTER TABLE `products_subcategories`
  ADD CONSTRAINT `FK_products_categories_subcategories_subcategories` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`subcat_id`),
  ADD CONSTRAINT `products_subcategories_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Restrictii pentru tabele `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `FK_subcategories_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`cat_id`);

--
-- Restrictii pentru tabele `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_users_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
