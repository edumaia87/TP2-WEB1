-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Dez-2022 às 12:41
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bookstore`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `address`
--

CREATE TABLE `address` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `street` varchar(45) NOT NULL,
  `district` varchar(45) NOT NULL,
  `number` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `address`
--

INSERT INTO `address` (`id`, `user_id`, `street`, `district`, `number`, `city`, `state`) VALUES
(2, 3, ' H', 'Bernabeu', '32', 'Brejetuba', 'ES'),
(3, 2, 'Jardim de oliva', 'Belo oriente', '56', 'Anápolis', 'GO'),
(4, 5, 'G', 'Vista Alegre', '23', 'Guanhães', 'MG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `book`
--

CREATE TABLE `book` (
  `id` int NOT NULL,
  `title` varchar(45) NOT NULL,
  `image` varchar(100) NOT NULL,
  `author` varchar(45) NOT NULL,
  `description` varchar(150) NOT NULL,
  `price` double NOT NULL,
  `published_date` date NOT NULL,
  `genre` varchar(45) NOT NULL,
  `isbn` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `book`
--

INSERT INTO `book` (`id`, `title`, `image`, `author`, `description`, `price`, `published_date`, `genre`, `isbn`) VALUES
(1, 'Led Zeppelin', '../img/led-zeppelin.jpg', ' Mick Wall ', 'Livro sobre a banda Led Zeppelin', 199.99, '2006-12-09', 'Musical', '85-359-0277-5'),
(2, 'Python fluente', '../img/python-fluente.jpg', 'Luciano Ramalho', 'Livro sobre a linguagem Python', 139.99, '2004-07-13', 'Programação', '99-459-1254-4'),
(4, 'Death Note - Black Edition', '../img/death-note.jpg', 'Tsugumi Ohba', 'Mangá do Death Note', 37.49, '2022-07-29', 'Mangá', '978-8577876853');

-- --------------------------------------------------------

--
-- Estrutura da tabela `buys`
--

CREATE TABLE `buys` (
  `id` int NOT NULL,
  `book_id` int NOT NULL,
  `user_id` int NOT NULL,
  `price` double NOT NULL,
  `sale_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `buys`
--

INSERT INTO `buys` (`id`, `book_id`, `user_id`, `price`, `sale_date`) VALUES
(1, 2, 3, 139.99, '2022-11-29'),
(4, 2, 5, 139.99, '2022-12-09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `publish`
--

CREATE TABLE `publish` (
  `id` int NOT NULL,
  `publisher_id` int NOT NULL,
  `book_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `publish`
--

INSERT INTO `publish` (`id`, `publisher_id`, `book_id`) VALUES
(6, 10, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `publisher`
--

CREATE TABLE `publisher` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cellphone` varchar(50) NOT NULL,
  `cnpj` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `publisher`
--

INSERT INTO `publisher` (`id`, `name`, `email`, `cellphone`, `cnpj`) VALUES
(9, 'Globo', 'globo@outlook.com', '(11) 4003-9393', '04.067.191/0001-60'),
(10, 'Saraiva', 'saraiva@gmail.com', '(44)98855-4477', '12.345.678/0001-91');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `cellphone` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `cpf`, `cellphone`, `user_type`) VALUES
(2, 'Julia Lima', 'julia@outlook.com', '12345', '111.111.111-11', '(33)98888-4444', 'user'),
(3, 'Pablo Correia', 'pablo@outlook.com', '123', '12345678910', '999999999', 'user'),
(4, 'Elon Musk', 'elonmusk@gmail.com', 'admin', '111.444.222-56', '(33)98877-2255', 'admin'),
(5, 'Lucas Rodrigues', 'lucas@gmail.com', '12345', '12345678945', '(21) 98877-4100', 'user'),
(10, 'admin', 'admin@admin.com', 'admin', '111.222-333-44', '(33)98812-2289', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_address_user1_idx` (`user_id`);

--
-- Índices para tabela `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title_UNIQUE` (`title`),
  ADD UNIQUE KEY `isbn_UNIQUE` (`isbn`);

--
-- Índices para tabela `buys`
--
ALTER TABLE `buys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_book_has_user_user1_idx` (`user_id`),
  ADD KEY `fk_book_has_user_book_idx` (`book_id`);

--
-- Índices para tabela `publish`
--
ALTER TABLE `publish`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_publisher_has_book_book1_idx` (`book_id`),
  ADD KEY `fk_publisher_has_book_publisher1_idx` (`publisher_id`);

--
-- Índices para tabela `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `telefone_UNIQUE` (`cellphone`),
  ADD UNIQUE KEY `cnpj_UNIQUE` (`cnpj`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `telefone_UNIQUE` (`cellphone`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `address`
--
ALTER TABLE `address`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `book`
--
ALTER TABLE `book`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `buys`
--
ALTER TABLE `buys`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `publish`
--
ALTER TABLE `publish`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `fk_address_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Limitadores para a tabela `buys`
--
ALTER TABLE `buys`
  ADD CONSTRAINT `fk_book_has_user_book` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`),
  ADD CONSTRAINT `fk_book_has_user_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Limitadores para a tabela `publish`
--
ALTER TABLE `publish`
  ADD CONSTRAINT `fk_publisher_has_book_book1` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`),
  ADD CONSTRAINT `fk_publisher_has_book_publisher1` FOREIGN KEY (`publisher_id`) REFERENCES `publisher` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
