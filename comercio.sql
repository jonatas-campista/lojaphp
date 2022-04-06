-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21-Fev-2019 às 15:49
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comercio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `codcliente` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `endereco` varchar(80) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `telefone` int(17) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`codcliente`, `nome`, `endereco`, `cep`, `telefone`, `cpf`, `email`, `senha`) VALUES
(1, 'Ana', 'Rua Abc 10', '349049943', 90349349, '90909', 'ana@gmail.com', '123'),
(2, 'fdsssd', 'sdsds', '5454', 434343, '434343', 'fdsrffd@fgogfogf', '123'),
(4, 'wereew', 'fdfdfd', '2222', 32222, '222', 'pedro@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `faleconosco`
--

CREATE TABLE `faleconosco` (
  `codfale` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mensagem` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `faleconosco`
--

INSERT INTO `faleconosco` (`codfale`, `nome`, `email`, `mensagem`) VALUES
(1, 'Maria da Silva', 'maria@gmail.com', 'rjkfjiojiodfjiodfjipfddsf'),
(3, 'ana', 'ana@fale.com', 'rifskjfldklkjfd'),
(8, 'Maria', 'maria@gmail.com', 'dlÃ§kkkdskldkls'),
(9, 'Pedro', 'pedro@gmail.com', 'kljflkdfjlkfdjkljdf'),
(10, 'uhhuhhhj', 'ydsyusdyudsuy@dyuudsiudosiuiou', 'oijsfdijodsfoiudidfifd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `codpedido` int(11) NOT NULL,
  `codproduto` int(11) NOT NULL,
  `codcliente` int(11) NOT NULL,
  `qtd` int(11) NOT NULL,
  `preco` float(10,2) NOT NULL,
  `total` float(10,2) NOT NULL,
  `datacompra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`codpedido`, `codproduto`, `codcliente`, `qtd`, `preco`, `total`, `datacompra`) VALUES
(27, 4, 27, 1, 70.00, 70.00, '2019-02-21'),
(28, 4, 29, 1, 80.00, 150.00, '2019-02-21'),
(31, 4, 27, 1, 70.00, 70.00, '2019-02-21'),
(32, 4, 29, 1, 80.00, 150.00, '2019-02-21'),
(33, 4, 26, 1, 100.00, 100.00, '2019-02-21'),
(34, 4, 26, 1, 100.00, 100.00, '2019-02-21'),
(35, 4, 26, 1, 100.00, 100.00, '2019-02-21'),
(36, 4, 26, 1, 100.00, 100.00, '2019-02-21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `codproduto` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `preco` float(10,2) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codproduto`, `descricao`, `categoria`, `preco`, `imagem`) VALUES
(26, 'Comedouro', 'acessÃ³rio', 100.00, 'bbac9a50843ebe90d5c63fff44e0c945.jpg'),
(27, 'Item de Higiene', 'higiene', 70.00, '8722ddc77c74651ccfdd713ce1b159e8.jpg'),
(28, 'RaÃ§Ã£o ', 'raÃ§Ã£o', 100.00, '0def5b9e5f37b3b2526e884bddebf09d.jpg'),
(29, 'Comedouro', 'acessÃ³rio', 80.00, '263de2015cb438ad9b1dea120fbf74bc.jpg'),
(30, 'Caixa de areia', 'higiene', 120.00, 'ac95eddb62ac2ea44e50dcd07e5c68a1.jpg'),
(31, 'Suprimento ', 'alimentaÃ§Ã£o', 200.00, 'a4f835d32d589b1b20e58c8fa09edde6.jpg'),
(32, 'Shampoo', 'higiene', 30.00, 'a29a9aee6c194d0eaa3cfa86fcd55e87.jpg'),
(33, 'Caixa de Transporte', 'seguranÃ§a', 200.00, '6823cbe1d8523bc4e815157a0f9d2bb5.jpg'),
(34, 'Comedouro', 'alimentaÃ§Ã£o', 40.00, 'bbbdc024d8b9931d9cd0bc34978f27e1.jpg'),
(35, 'Brinquedo', 'diversÃ£o', 45.00, '3ade3d2372db07d19697ed5bedc520c5.jpg'),
(36, 'Tapete HigiÃªnico', 'higiene', 150.00, 'b94acb901d8c4d16c178923e37650a98.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codcliente`);

--
-- Indexes for table `faleconosco`
--
ALTER TABLE `faleconosco`
  ADD PRIMARY KEY (`codfale`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`codpedido`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codproduto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `faleconosco`
--
ALTER TABLE `faleconosco`
  MODIFY `codfale` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `codpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `codproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
