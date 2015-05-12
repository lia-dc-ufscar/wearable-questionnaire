-- phpMyAdmin SQL Dump
-- version 4.0.10.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 12/05/2015 às 16:33
-- Versão do servidor: 5.0.51a-3ubuntu5
-- Versão do PHP: 5.2.4-2ubuntu5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `questionnaire_wearable`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL auto_increment,
  `participant_id` varchar(1000) character set utf8 NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `questionnarie_name` varchar(1000) character set utf8 NOT NULL,
  `questionnarie_stage` varchar(100) character set utf8 NOT NULL,
  `section_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `question` varchar(1000) character set utf8 NOT NULL,
  `answer_type` varchar(1000) character set utf8 NOT NULL,
  `answer_value` varchar(1000) character set utf8 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=782 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
