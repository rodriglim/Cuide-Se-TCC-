-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 11, 2022 at 07:52 PM
-- Server version: 5.7.28
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcuide`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCategoria` varchar(25) NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nomeCategoria`) VALUES
(1, 'Veganos'),
(2, 'Sem Lactose'),
(3, 'Sem Gluten'),
(4, 'Sem Acucar');

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCliente` varchar(45) NOT NULL,
  `sobrenomeCliente` varchar(45) NOT NULL,
  `emailCliente` varchar(200) NOT NULL,
  `senhaCliente` char(8) NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `estabelecimento`
--

DROP TABLE IF EXISTS `estabelecimento`;
CREATE TABLE IF NOT EXISTS `estabelecimento` (
  `idEstabelecimento` int(11) NOT NULL AUTO_INCREMENT,
  `nomeEstabelecimento` varchar(200) NOT NULL,
  `emailEstabelecimento` varchar(45) NOT NULL,
  `senhaEstabelecimento` varchar(8) NOT NULL,
  `imgEstabelecimento` text NOT NULL,
  `cidadeEstabelecimento` varchar(45) NOT NULL,
  `bairroEstabelecimento` varchar(45) NOT NULL,
  `ruaEstabelecimento` varchar(45) NOT NULL,
  `cnpjEstabelecimento` char(18) NOT NULL,
  `telefoneEstabelecimento` char(14) DEFAULT NULL,
  `Categoria_idCategoria` int(11) NOT NULL,
  PRIMARY KEY (`idEstabelecimento`),
  KEY `fk_Estabelecimento_Categoria` (`Categoria_idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `estabelecimento`
--

INSERT INTO `estabelecimento` (`idEstabelecimento`, `nomeEstabelecimento`, `emailEstabelecimento`, `senhaEstabelecimento`, `imgEstabelecimento`, `cidadeEstabelecimento`, `bairroEstabelecimento`, `ruaEstabelecimento`, `cnpjEstabelecimento`, `telefoneEstabelecimento`, `Categoria_idCategoria`) VALUES
(1, 'B Vegan', 'bvegan@gmail.com', 'veganb22', 'data:image/jpeg;base64,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', 'Feira de Santana', 'Santa Mônica', 'Bela Vista', '11.111.111/1111-22', '(75)4002-8922', 1),
(2, 'Rango Vegan', 'veganrangp@gmail.com', 'vegan745', 'https://media-cdn.tripadvisor.com/media/photo-s/15/3e/29/ae/decoracao-lindeza.jpg', 'Feira de Santana', 'Lagoa Salgada', 'Palmeira Branca', '22.112.112/1122-23', '(75)4202-8922', 1),
(3, 'Prashadam Restaurante Natural', 'prashadam@gmail.com', 'natu2022', 'https://static.wixstatic.com/media/ccddf0_a54f846760c24eb98772485c618bfb0d~mv2.png/v1/fill/w_440,h_440,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/entrada_PNG.png', 'Feira de Santana', 'Nova Esperança', 'Eduardo Fróes da Mota', '33.112.112/1122-33', '(75)4303-8933', 1),
(4, 'Gourmet Light', 'light@light.br', '2022ligh', 'https://lh3.googleusercontent.com/p/AF1QipOIaSSjbyr0So29VKPGr3C86Wn3E8KUNGkKHWBz=w768-h768-n-o-k-v1', 'Feira de Santana', 'Santa Mônica', 'São Domingos', '44.112.112/1122-44', '(75)4443-4433', 2),
(5, 'Dhiafeto', 'fetodhi@gmail.com', 'dhif2222', 'https://saudefortaleza.com.br/wp-content/uploads/2014/12/Dom-Pastel-7.jpg', 'Feira de Santana', 'Jardim Cruzeiro', 'Juazeiro', '55.112.112/1122-45', '(75)9993-4455', 2),
(6, 'S\'lactose', 'lactose@gmail.com.br', 'milk2023', 'https://media-cdn.tripadvisor.com/media/photo-s/15/33/41/1c/mesas-y-almacen-al-fondo.jpg', 'Feira de Santana', 'Getúlio Vargas', 'Avenida Getúlio Vargas', '65.162.612/1122-65', '(75)8993-4455', 2),
(7, 'Supermercado Terra', 'terra@gmail.com.br', 'terra194', 'https://fastly.4sqi.net/img/general/600x600/9997645_04BvsyJDFbPbCa1D2D4xf9gi0pMk3Mt7GMdnFBzFTPo.jpg', 'Feira de Santana', 'Getúlio Vargas', 'Barcelona', '95.162.612/1122-74', '(75)4022-2922', 3),
(10, 'NaturVida', 'natura@gmail.com.br', 'natu1415', 'https://i1.wp.com/naturvida.com.br/wp-content/uploads/2020/03/ea83974768dde21e59c605accc9308ddd2ba52fb3023135f66e0c50ebd7fa3a5.jpg', 'Feira de Santana', 'Santa Mônica', 'Nossa Senhora Aparecida', '98.162.612/1122-65', '(75)4215-9874', 3),
(11, 'GrãoFino', 'finagrao@gmail.com.br', 'fino1748', 'https://www.naocontemgluten.org/wp-content/uploads/2019/08/grao-fino-padarias-sem-gluten-em-sao-paulo.jpg', 'Feira de Santana', 'Centro', 'Olímpio Vital', '98.324.742/1152-97', '(75)5303-7433', 3),
(12, 'Life', 'life@gmail.com', '1478life', 'https://lh3.googleusercontent.com/p/AF1QipPNClwzkd1FQy2nNY0q_HY7J0mH0fZIxLfF9q7q=w1080-h608-p-no-v0', 'Feira de Santana', 'Getúlio Vargas', 'Avenida Getúlio Vargas', '12.574.915/2422-43', '(75)9993-4158', 4),
(13, 'Maria Doce', 'docemaria23@gmail.com.br', 'maria22', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRStfoLBhF2PcsRHR4Asz34jhXgcPM5SS5qfg&usqp=CAU', 'Feira de Santana', 'Jardim Cruzeiro', 'Jacobina', '05.248.314/1122-16', '(75)9254-9874', 4),
(14, 'Casa do Doce', 'docecasa@gmail.com.br', '1478casa', 'https://i.pinimg.com/550x/d4/30/2e/d4302ea74e1917ec241f668f373816a1.jpg', 'Feira de Santana', 'Nova Esperança', 'Eduardo Fróes da Mota', '97.745.932/7412-65', '(75)9657-4455', 4);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `estabelecimento`
--
ALTER TABLE `estabelecimento`
  ADD CONSTRAINT `fk_Estabelecimento_Categoria` FOREIGN KEY (`Categoria_idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
