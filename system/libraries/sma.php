-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2013 at 06:49 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sma`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `np` int(11) NOT NULL AUTO_INCREMENT,
  `idnp` varchar(20) DEFAULT NULL,
  `olah1` varchar(20) DEFAULT NULL,
  `olah2` varchar(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jkelamin` varchar(20) DEFAULT NULL,
  `tlps` varchar(20) DEFAULT NULL,
  `ttgl` varchar(50) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `golda` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `anak` int(11) DEFAULT NULL,
  `js` int(11) DEFAULT NULL,
  `thntmt` varchar(20) DEFAULT NULL,
  `asl` varchar(50) DEFAULT NULL,
  `jnk` varchar(20) DEFAULT NULL,
  `bhs` varchar(20) DEFAULT NULL,
  `sttb` varchar(20) DEFAULT NULL,
  `not` varchar(50) DEFAULT NULL,
  `pnot` varchar(20) DEFAULT NULL,
  `almtor` varchar(50) DEFAULT NULL,
  `hpor` varchar(20) DEFAULT NULL,
  `agamaor` varchar(20) DEFAULT NULL,
  `pkrj` varchar(50) DEFAULT NULL,
  `mtrp` varchar(50) DEFAULT NULL,
  `pend` varchar(20) DEFAULT NULL,
  `org` varchar(50) DEFAULT NULL,
  `nw` varchar(50) DEFAULT NULL,
  `almtw` varchar(50) DEFAULT NULL,
  `pkrjw` varchar(20) DEFAULT NULL,
  `tlpw` varchar(20) DEFAULT NULL,
  `eks` varchar(20) DEFAULT NULL,
  `nl` varchar(20) DEFAULT NULL,
  `jn` varchar(20) DEFAULT NULL,
  `pres` varchar(20) DEFAULT NULL,
  `pen` varchar(20) DEFAULT NULL,
  `peny` varchar(20) DEFAULT NULL,
  `ln` varchar(50) DEFAULT NULL,
  `userfile` varchar(255) NOT NULL,
  PRIMARY KEY (`np`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`np`, `idnp`, `olah1`, `olah2`, `nama`, `jkelamin`, `tlps`, `ttgl`, `agama`, `alamat`, `golda`, `email`, `anak`, `js`, `thntmt`, `asl`, `jnk`, `bhs`, `sttb`, `not`, `pnot`, `almtor`, `hpor`, `agamaor`, `pkrj`, `mtrp`, `pend`, `org`, `nw`, `almtw`, `pkrjw`, `tlpw`, `eks`, `nl`, `jn`, `pres`, `pen`, `peny`, `ln`, `userfile`) VALUES
(17, 'NS0000016', 'Tenis', 'Voli', 'Faddli L. Wibowo', 'Laki-Laki', '081264127856', 'P. Siantar, 24-12-1992', 'Islam', 'Jln Ketitiran No.5', 'O', 'bfaddly@yahoo.com', 1, 2, '2013', 'SMP Negeri 2', '90', 'Indonesia', '123456789', 'J. Wibowo', 'J. Wibowo', 'Jln Viyata Yudha No.5', '08132143628476', 'Islam', 'PNS', 'Rp.3000000', 'SMA Sederajat', NULL, 'Tuti', 'Jln Viyata Yudha No.5', 'Ibu Rumah Tangga', '0823918367216', 'Beladiri', '90/90/90', 'catur', '2013', 'maag', '2013', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `stts` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`username`, `password`, `nama_pengguna`, `stts`) VALUES
('admin', '6ee3ce2b00c9c04f22d7bfbabeabaac1', 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
