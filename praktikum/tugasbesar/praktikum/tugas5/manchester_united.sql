-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 12:48 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manchester_united`
--

-- --------------------------------------------------------

--
-- Table structure for table `manchesterunited`
--

CREATE TABLE `manchesterunited` (
  `id` int(11) NOT NULL,
  `nama_pemain` varchar(20) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL,
  `lahir` varchar(50) NOT NULL,
  `berat_badan` varchar(10) NOT NULL,
  `tinggi_badan` varchar(10) NOT NULL,
  `foto` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manchesterunited`
--

INSERT INTO `manchesterunited` (`id`, `nama_pemain`, `deskripsi`, `lahir`, `berat_badan`, `tinggi_badan`, `foto`) VALUES
(1, 'Silje Solskjær', 'Ole Gunnar Solskjær KSO adalah manajer sepak bola profesional Norwegia dan mantan pemain yang merupakan manajer klub Liga Premier Manchester United.', '26 Feb 1973(umur 48)· Kristiansund, Norway', '75 kg', '178 cm', 'solskjaer.jpg'),
(2, 'Marcus Rashford', 'Marcus Rashford MBE adalah pemain sepak bola profesional Inggris yang bermain sebagai pemain depan untuk klub Liga Premier Manchester United dan tim nasional Inggris. Sebagai pemain Manchester United sejak usia tujuh tahun, Rashford mencetak dua gol pada debutnya di tim utama melawan Midtjylland di Liga Eropa UEFA pada Februari 2016 dan debutnya di Liga Premier melawan Arsenal tiga hari kemudian. Dia juga mencetak gol dalam derby Manchester pertamanya, serta pada debutnya di Piala EFL dan Liga Champions UEFA. Bersama United, Rashford sejauh ini telah memenangkan Piala FA, Piala EFL, Community Shield FA, dan Liga Europa.', '31 Oct 1997 (umur 23) · Manchester, England', '70 kg', '185 cm', 'rashford.jpg'),
(3, 'Paul Pogba', 'Paul Labile Pogba adalah pemain sepak bola profesional Prancis yang bermain untuk klub Liga Premier Manchester United dan tim nasional Prancis. Dia beroperasi terutama sebagai gelandang tengah, tetapi juga dapat dikerahkan sebagai gelandang serang, gelandang bertahan dan playmaker berbohong dalam.', '15 Mar 1993 (umur 28) · Lagny-sur-Marne, France', '80 kg', '191 cm', 'pogba.jpg'),
(4, 'Anthony Martial', 'Anthony Jordan Martial adalah pemain sepak bola profesional Prancis yang bermain sebagai pemain depan untuk klub Liga Premier Manchester United dan tim nasional Prancis. Bermain sepak bola remaja untuk Les Ulis, Martial memulai karier profesionalnya di Lyon, kemudian dipindahkan ke AS Monaco pada tahun 2013 dengan biaya € 6 juta. Dia adalah anggota skuad Monaco selama dua musim, dan menandatangani kontrak untuk Manchester United pada 2015 dengan biaya awal £ 36 juta yang berpotensi naik menjadi £ 57,6 juta; menjadikannya biaya tertinggi yang dibayarkan untuk seorang remaja dalam sejarah sepak bola pada saat itu. Dia adalah penerima Golden Boy Award 2015 untuk pemain U-21 terbaik di Eropa. Pada musim debutnya bersama Manchester United, ia memenangkan Piala FA 2015-2016', '5 Dec 1995 (umur 25)· Massy, France', '76 kg', '181 cm', 'martial.jpg'),
(5, 'Daniel James', 'Daniel Owen James adalah pemain sepak bola profesional yang bermain sebagai winger untuk klub Liga Premier Manchester United dan tim nasional Wales. James melakukan debut profesionalnya untuk Swansea City pada Februari 2018, dan menandatangani kontrak untuk Manchester United pada Juni 2019. Dia melakukan debut senior wales pada November 2018, setelah sebelumnya mewakili bangsa di berbagai tingkat pemuda.', '10 Nov 1997 (umur 23) · Kingston upon Hull, Englan', '65 kg', '170 cm', 'james.jpg'),
(6, 'Scott McTominay', 'Scott Francis McTominay adalah pemain sepak bola profesional Skotlandia kelahiran Inggris yang bermain sebagai gelandang tengah untuk klub Liga Premier Manchester United dan tim nasional Skotlandia.', '8 Dec 1996 (umur 24) · Lancaster, England', '82 kg', '193 cm', 'mctominay.jpg'),
(7, 'Mason Greenwood', 'Mason Will John Greenwood adalah pemain sepak bola profesional Inggris yang bermain sebagai pemain depan untuk klub Liga Premier Manchester United dan tim nasional Inggris. Greenwood memulai start pertamanya untuk Manchester United pada September 2019 dalam pertandingan Liga Eropa UEFA melawan Astana, di mana ia mencetak gol menjadi pencetak gol termuda klub di kompetisi Eropa pada usia 17 tahun, 353 hari.', '1 Oct 2001 (umur 19) Bradford, United Kingdom', '74 kg', '181 cm', 'greenwood.jpg'),
(8, 'David de Gea', 'David de Gea Quintana adalah pemain sepak bola profesional Spanyol yang bermain sebagai penjaga gawang untuk klub Liga Premier Manchester United dan tim nasional Spanyol. Ia dianggap sebagai salah satu kiper terbaik di dunia.', '7 Nov 1990 (umur 30) · Madrid, Spain', '76 kg', '192 cm', 'degea.jpg'),
(9, 'Harry Maguire', 'Jacob Harry Maguire adalah pemain sepak bola profesional Inggris yang bermain sebagai bek tengah untuk klub Liga Premier Manchester United, yang ia kapteni, dan tim nasional Inggris. Maguire datang melalui sistem pemuda di Sheffield United sebelum lulus ke tim utama pada 2011. Dia total 166 pertandingan profesional untuk Blades dan merupakan Player of the Year mereka tiga kali berturut-turut, juga tampil di PFA Team of the Year untuk League One berkali-kali. Pada 2014, ia pindah ke Hull City dengan harga 2,5 juta poundsterling, yang meminjamkannya ke Wigan Athletic pada 2015. Dia bergabung dengan Leicester City pada 2017 dengan biaya awal £ 12 juta. Dua tahun kemudian, ia pindah ke Manchester United dengan biaya yang diyakini sebesar 80 juta poundsterling, jumlah rekor dunia untuk seorang bek.', '5 Mar 1993 (umur 28) · Sheffield, England', '85 kg', '194 cm', 'maguire.jpg'),
(10, 'Bruno Fernandes', 'Bruno Miguel Borges Fernandes adalah pemain sepak bola profesional Portugal yang bermain sebagai gelandang untuk klub Liga Premier Manchester United dan tim nasional Portugal.', '8 Sep 1994 (umur 26) · Cidade da Maia, Portugal', '65 kg', '179 cm', 'bruno.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manchesterunited`
--
ALTER TABLE `manchesterunited`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manchesterunited`
--
ALTER TABLE `manchesterunited`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
