-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 13-Nov-2016 às 02:20
-- Versão do servidor: 5.6.33
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `eilogin`
--
CREATE DATABASE IF NOT EXISTS `ex_login` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ex_login`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `username` varchar(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`username`, `nome`, `apelido`, `pass`) VALUES
('cr7', 'cristiano', 'ronaldo', 'bolas'),
('iuri', 'iuri', 'medeiros', 'iupi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);


GRANT USAGE ON *.* TO 'php'@'localhost' IDENTIFIED BY PASSWORD '*8F5FF90079BC601F8EA7C148475658E65A0C029D';

GRANT SELECT, INSERT, UPDATE, DELETE ON `ex_login`.* TO 'php'@'localhost';
