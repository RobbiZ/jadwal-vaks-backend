-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Okt 2018 pada 11.13
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_vaksinasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `custcode` char(5) NOT NULL,
  `custname` varchar(32) NOT NULL,
  `category` enum('PS','Farm','KK','KL','KN') NOT NULL,
  `salesman` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`custcode`, `custname`, `category`, `salesman`) VALUES
('11485', 'RAGIL JAYA KK', 'KK', '1SZ'),
('11506', 'BANGUN DESA FARM', 'Farm', '1QU'),
('13210', 'ANDA PS', 'PS', '0BD'),
('13212', 'BAROKAH KL', 'KL', '1SZ'),
('13213', 'BASRI PS', 'PS', '0BD'),
('13218', 'DONA PS', 'PS', '0BD'),
('13219', 'EKA PUTRA PS', 'PS', '0BD'),
('13223', 'IRAWAN TJANDRA PS', 'PS', '0BD'),
('13225', 'JONO KK', 'KK', '0BD'),
('13226', 'KAMAL MANDIRI PS', 'PS', '0BD'),
('13230', 'SUJIYANTA', 'KL', '1YA'),
('13231', 'LESTARI PS', 'PS', '1YA'),
('13233', 'MANDIRI PS', 'PS', '1YA'),
('13241', 'SABAR PS', 'PS', '0BD'),
('13242', 'SAMUDRA PS', 'PS', '0BD'),
('13243', 'SANDRA PS', 'PS', '0BD'),
('13246', 'SEDJAHTERA PS', 'PS', '1YA'),
('13249', 'SHINDA PS', 'PS', '0BD'),
('13251', 'SURYOTOMO PS', 'PS', '0BD'),
('13255', 'YUMAR PS', 'PS', '0BD'),
('13256', 'AAN SAPUTRA FARM', 'Farm', '1SZ'),
('13257', 'AAN SUMARNA PS', 'PS', '1YA'),
('13258', 'ARUM MANIS FARM', 'Farm', '1QU'),
('13265', 'GIMAN B KL', 'KL', '1YA'),
('13266', 'HARYANTO FARM', 'Farm', '1SZ'),
('13270', 'MANGESTONI FARM', 'Farm', '1YA'),
('13272', 'PT. PEKSI FARM', 'Farm', '1QU'),
('13276', 'SENDANG MAKMUR FARM', 'Farm', '1SZ'),
('13290', 'WIRABUMI KL', 'KL', '1YA'),
('13296', 'JARWO (ADI FARM)', 'Farm', '1SZ'),
('13301', 'MUNCUL JAYA', 'Farm', '1SZ'),
('13304', 'NUSANTARA FARM', 'Farm', '1SZ'),
('13307', 'PUTRA FARM', 'Farm', '1SZ'),
('13314', 'SAWUNG SETO B FARM', 'Farm', '1SZ'),
('13315', 'SIDORAHAYU FARM', 'Farm', '1QU'),
('13316', 'SINAR PERMATA FARM', 'Farm', '1SZ'),
('13321', 'YOGYA FARM', 'Farm', '1SZ'),
('13799', 'SARI PS', 'PS', '1QU'),
('13803', 'BUMI MATARAM', 'KK', '1SZ'),
('13919', 'BOWO PS', 'PS', '0BD'),
('14057', 'RINI JAYA PS', 'PS', '1YA'),
('14341', 'ANUGERAH KL', 'KL', '1QU'),
('14347', 'MAGATEK FARM', 'Farm', '1YA'),
('14491', 'DRH.FARM', 'Farm', '1SZ'),
('14819', 'PUTRI', 'KN', '1SZ'),
('14995', 'BUDIPO PS', 'PS', '0BD'),
('15092', 'IMELDA GUNAWAN', 'KN', '1YA'),
('15167', 'CV. MORO REJEKI', 'KK', '1SZ'),
('15205', 'BAROKAH KL', 'KL', '1SZ'),
('15220', 'RAFLI & DANU''S FARM', 'Farm', '1QU'),
('15321', 'MEKAR TANI PS', 'PS', '1QU'),
('15583', 'MITRA ABADI PS', 'PS', '1YA'),
('16089', 'CAHAYA AGUNG PS', 'PS', '1YA'),
('16149', 'HM PS', 'PS', '0BD'),
('16311', 'MERDEKA PS', 'PS', '1YA'),
('17132', 'SERBA SEHAT FARM', 'Farm', '0BD'),
('17133', 'PT. SEKAWAN SINAR SURYA YOGYA', 'KN', '1YA'),
('17201', 'INDRASTA KK', 'KK', '1SZ'),
('17383', 'GANDHU PS', 'PS', '1YA'),
('17521', 'PT. ADIJAYA WAHANA SATWA', 'Farm', '1SZ'),
('17858', 'SENTRA PULLET FARM', 'Farm', '1SZ'),
('18167', 'PT. MUSTIKA JAYA LESTARI GUNUNG ', 'KN', '1QU'),
('18228', 'PT. MUSTIKA JAYA LESTARI KULONPR', 'KN', '1YA'),
('18290', 'BINTANG FARM', 'Farm', '1SZ'),
('18387', 'PT. AMERTA JAYA SATWA', 'Farm', '1SZ'),
('18739', 'ANUGRAH KL', 'KL', '0BD'),
('19044', 'PT. GANESHA SATRIA NUSANTARA', 'KN', '1SZ'),
('19046', 'GEMILANG FARM', 'Farm', '1SZ'),
('19151', 'BAPAK TOTOK', 'Farm', '1YA'),
('19156', 'PT. METAFORA JAGAT RAYA UNIT JOG', 'KN', '1YA'),
('19192', 'BERKAH MANDIRI PS', 'KK', '1SZ'),
('19211', 'PT. MITRA UNGGAS MAKMUR - A3', 'KN', '1QU'),
('19212', 'PT. MITRA UNGGAS MAKMUR - A4', 'KN', '1YA'),
('19213', 'PT. MITRA UNGGAS MAKMUR - A1', 'KN', '1YA'),
('19307', 'PT. DAMAR BANDHA JAYA', 'Farm', '1QU'),
('19325', 'FATHUR FARM', 'KL', '1YA'),
('19334', 'ROSA FARM', 'Farm', '1YA'),
('19348', 'PT. MITRA UNGGAS MAKMUR - A5', 'KN', '1QU'),
('19442', 'PALAPA KL', 'KL', '1QU'),
('19484', 'RINDA AGUSTINI', 'KK', '1SZ'),
('19558', 'SAYAP MEKAR FARM', 'Farm', '1YA'),
('19630', 'ARIYANTI', 'Farm', '1SZ'),
('1A221', 'ENY PS', 'PS', '0BD'),
('1A222', 'MILIR PS', 'PS', '1SZ'),
('1A223', 'MITA PS', 'PS', '1YA'),
('1A224', 'MUDJI FARM', 'Farm', '1QU'),
('1A250', 'AGRO PS-YOGYAKARTA', 'PS', '0BD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `plasma`
--

CREATE TABLE IF NOT EXISTS `plasma` (
`plasmacode` int(8) NOT NULL,
  `custcode` varchar(5) NOT NULL,
  `plasmaname` varchar(32) NOT NULL,
  `address` varchar(128) NOT NULL,
  `city` varchar(32) NOT NULL,
  `area` enum('DK','LK') NOT NULL,
  `phone` varchar(16) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=298 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `plasma`
--

INSERT INTO `plasma` (`plasmacode`, `custcode`, `plasmaname`, `address`, `city`, `area`, `phone`) VALUES
(111, '18228', 'RINI', 'KALIGESING', 'PURWOREJO', 'LK', '504-621-8927'),
(112, '19046', 'SOKIMAN', 'KALIGESING', 'PURWOREJO', 'LK', '810-292-9388'),
(113, '11485', 'QOMARIYANTO', 'GEDANGSARI', 'GUNUNGKIDUL', 'DK', '856-636-8749'),
(114, '19325', 'WENDI KURNIA', 'SAWANGAN', 'MAGELANG', 'DK', '907-385-4412'),
(115, '13321', 'SUTARYANA', 'GEDANGSARI', 'GUNUNGKIDUL', 'DK', '513-570-1893'),
(116, '19212', 'SEFANI', 'PRINGSURAT', 'TEMANGGUNG', 'LK', '419-503-2484'),
(117, '19211', 'SUPRIYADI', 'CANDIROTO', 'TEMANGGUNG', 'LK', '773-573-6914'),
(118, '13301', 'DEDI', 'PENGASIH', 'KULONPROGO', 'DK', '408-752-3500'),
(119, '13265', 'SETIYONO', 'LENDAH', 'KULONPROGO', 'DK', '605-414-2147'),
(120, '13314', 'MUH ARI WIBOWO', 'GANTIWARNO', 'KLATEN', 'DK', '410-655-8723'),
(121, '17858', 'WITRIYANTO', 'PENGASIH', 'KULONPROGO', 'DK', '215-874-1229'),
(122, '19307', 'HARIS', 'KALIANGKRIK', 'MAGELANG', 'LK', '631-335-3414'),
(123, '18387', 'WAHYU SUCIPTO', 'CANDIROTO', 'TEMANGGUNG', 'LK', '310-498-5651'),
(124, '13304', 'DUL HADI', 'BANDONGAN', 'MAGELANG', 'DK', '440-780-8425'),
(125, '13272', 'ROBERT', 'SAWANGAN', 'MAGELANG', 'LK', '956-537-6195'),
(126, '18739', 'ANDI CAHYANTO', 'SAWANGAN', 'MAGELANG', 'DK', '602-277-4385'),
(127, '13316', 'PRAWITA', 'GANTIWARNO', 'KLATEN', 'DK', '931-313-9635'),
(128, '13304', 'NGADIRIN', 'PENGASIH', 'KULONPROGO', 'DK', '414-661-9598'),
(129, '13265', 'MUHLASIH 2', 'LENDAH', 'KULONPROGO', 'DK', '313-288-7937'),
(130, '13316', 'ANANG', 'TULUNG KLATEN', 'KLATEN', 'DK', '815-828-2147'),
(131, '19192', 'SUTIYO', 'LENDAH', 'KULONPROGO', 'DK', '610-545-3615'),
(132, '1A224', 'SUGENG', 'PENGASIH', 'KULONPROGO', 'DK', '408-540-1785'),
(133, '13258', 'SUBIRMAN', 'GEDANGSARI', 'GUNUNGKIDUL', 'LK', '972-303-9197'),
(134, '14819', 'MIRANTO', 'GEDANGSARI', 'GUNUNGKIDUL', 'LK', '518-966-7987'),
(135, '19192', 'JUMANTO', 'PENGASIH', 'KULONPROGO', 'DK', '732-658-3154'),
(136, '13266', 'ANDI DWI CAHYONO', 'PLAYEN', 'GUNUNGKIDUL', 'DK', '715-662-6764'),
(137, '15167', 'SAHID', 'LENDAH', 'KULONPROGO', 'DK', '913-388-2079'),
(138, '17858', 'SUKASWANTO', 'LENDAH', 'KULONPROGO', 'DK', '410-669-1642'),
(139, '13270', 'JUMARI', 'SENTOLO', 'KULONPROGO', 'DK', '212-582-4976'),
(140, '1A224', 'SUPRAPTOYO', 'GEDANGSARI', 'GUNUNGKIDUL', 'LK', '936-336-3951'),
(141, '15167', 'KLIJO', 'LENDAH', 'KULONPROGO', 'DK', '614-801-9788'),
(142, '19212', 'SUKIMIN', 'LENDAH', 'KULONPROGO', 'DK', '505-977-3911'),
(143, '19348', 'MUHLASIH 1', 'LENDAH', 'KULONPROGO', 'DK', '201-709-6245'),
(144, '18387', 'SYARIF HADI', 'LENDAH', 'KULONPROGO', 'DK', '732-924-7882'),
(145, '15167', 'BARYANTO', 'SENTOLO', 'KULONPROGO', 'DK', '212-860-1579'),
(146, '19046', 'AGUNG MIYANA', 'LENDAH', 'KULONPROGO', 'DK', '504-979-9175'),
(147, '18290', 'SUMARTINI', 'GEDANGSARI', 'GUNUNGKIDUL', 'DK', '212-675-8570'),
(148, '14347', 'SUBUR', 'SENTOLO', 'KULONPROGO', 'DK', '805-832-6163'),
(149, '19558', 'AGUNG', 'DONOMULYO, NANGGULAN', 'KULONPROGO', 'DK', '210-812-9597'),
(150, '14347', 'YOTO', 'LENDAH', 'KULONPROGO', 'DK', '785-463-7829'),
(151, '13290', 'UNTUNG', 'PANDAK', 'BANTUL', 'DK', '541-548-8197'),
(152, '18387', 'TUKIMAN', 'PAKEM', 'SLEMAN', 'DK', '913-413-4604'),
(153, '13301', 'TIKIMIN 3', 'LENDAH', 'KULONPROGO', 'DK', '907-231-4722'),
(154, '19348', 'TEGO', 'LENDAH', 'KULONPROGO', 'DK', '305-606-7291'),
(155, '19484', 'SUHARMOKO', 'NANGGULAN', 'KULONPROGO', 'DK', '907-741-1044'),
(156, '13225', 'SUGITO', 'PANDAK', 'BANTUL', 'DK', '952-768-2416'),
(157, '19192', 'SLAMET', 'NANGGULAN', 'KULONPROGO', 'DK', '617-399-5124'),
(158, '13315', 'SAHID', 'LENDAH', 'KULONPROGO', 'DK', '323-453-2780'),
(159, '18387', 'ROHA', 'KASIHAN', 'BANTUL', 'DK', '608-336-7444'),
(160, '19307', 'PARJO C', 'PANDAK', 'KULONPROGO', 'DK', '215-907-9111'),
(161, '13296', 'PARJO B', 'PANDAK', 'BANTUL', 'DK', '212-402-9216'),
(162, '19558', 'MURDI', 'PANDAK', 'BANTUL', 'DK', '931-875-6644'),
(163, '17201', 'MUGIYONO', 'PANDAK', 'BANTUL', 'DK', '803-925-5213'),
(164, '13258', 'KLEJO', 'LENDAH', 'KULONPROGO', 'DK', '610-814-5533'),
(165, '13230', 'KASWANTO', 'PANDAK', 'BANTUL', 'DK', '908-877-6135'),
(166, '13225', 'KASIATI', 'LENDAH', 'KULONPROGO', 'DK', '516-968-6051'),
(167, '13265', 'JUNI', 'LENDAH', 'BANTUL', 'DK', '215-934-8655'),
(168, '19044', 'JUMARNO', 'SANDEN', 'BANTUL', 'DK', '818-423-4007'),
(169, '18387', 'JUMARI A', 'NANGGULAN', 'KULONPROGO', 'DK', '401-458-2547'),
(170, '13304', 'GUNAWAN', 'PAKEM', 'SLEMAN', 'DK', '215-211-9589'),
(171, '13225', 'GITO', 'LENDAH', 'KULONPROGO', 'DK', '401-960-8259'),
(172, '13256', 'EKO', 'KOKAP', 'KULONPROGO', 'DK', '732-234-1546'),
(173, '13276', 'EFENDI', 'DLINGO', 'BANTUL', 'DK', '512-486-3817'),
(174, '14819', 'DARMI', 'LENDAH', 'KULONPROGO', 'DK', '303-724-7371'),
(175, '17201', 'BASUKI', 'LENDAH', 'KULONPROGO', 'DK', '414-748-1374'),
(176, '19212', 'BAMBANG', 'LENDAH', 'KULONPROGO', 'DK', '212-674-9610'),
(177, '15092', 'ARIF Y', 'LENDAH', 'KULONPROGO', 'DK', '907-797-9628'),
(178, '19348', 'ANDRI D', 'LENDAH', 'KULONPROGO', 'DK', '814-393-5571'),
(179, '13256', 'ANDRI C', 'LENDAH', 'KULONPROGO', 'DK', '410-914-9018'),
(180, '13803', 'ANDRI A', 'LENDAH', 'KULONPROGO', 'DK', '208-862-5339'),
(181, '14491', 'ALI S', 'LENDAH', 'KULONPROGO', 'DK', '415-315-2761'),
(182, '15205', 'AKIR', 'SRANDAKAN', 'KULONPROGO', 'DK', '919-225-9345'),
(183, '17858', 'AGUS', 'PANDAK', 'BANTUL', 'DK', '650-528-5783'),
(184, '19484', 'ANTOK 3', 'NANGGULAN', 'KULONPROGO', 'DK', '925-647-3298'),
(185, '15220', 'SUHARMAN', 'NGOMBOL', 'PURWOREJO', 'LK', '740-343-8575'),
(186, '13314', 'SARDILAH 2', 'PENGASIH', 'KULONPROGO', 'DK', '585-866-8313'),
(187, '15220', 'TEKNO 2', 'BANYUROTO, NANGGULAN', 'KULONPROGO', 'DK', '410-520-4832'),
(188, '13265', 'IRWAN 3', 'MERDIKOREJO, TEMPEL', 'SLEMAN', 'DK', '973-354-2040'),
(189, '19212', 'RIYADI', 'NANGGULAN', 'KULONPROGO', 'DK', '773-446-5569'),
(190, '13315', 'SUSILA 1', 'LENDAH', 'KULONPROGO', 'DK', '973-927-3447'),
(191, '13290', 'EDI MARDIYANTO 1', 'TEMPEL', 'SLEMAN', 'DK', '505-975-8559'),
(192, '19212', 'SUJARWANI 2', 'PENGASIH', 'KULONPROGO', 'DK', '718-332-6527'),
(193, '17521', 'SUJARWANI 1', 'PENGASIH', 'KULONPROGO', 'DK', '904-775-4480'),
(194, '14491', 'ASEP 1', 'LENDAH', 'KULONPROGO', 'DK', '510-993-3758'),
(195, '13225', 'IRWAN 5', 'TEMPEL', 'SLEMAN', 'DK', '216-657-7668'),
(196, '15205', 'SARIMULAN', 'KOKAP', 'KULONPROGO', 'DK', '817-914-7518'),
(197, '19156', 'KAMTO', 'PANJATAN', 'KULONPROGO', 'DK', '310-774-7643'),
(198, '17521', 'DALIMIN', 'SENTOLO', 'KULONPROGO', 'DK', '847-728-7286'),
(199, '13256', 'KEMAT 2', 'DONOMERTO, NANGGULAN', 'KULONPROGO', 'DK', '330-537-5358'),
(200, '18387', 'KEMAT 1', 'DONOMERTO, NA\\', 'KULONPROGO', 'DK', '215-255-1641'),
(201, '18167', 'SUMINTO', 'PENGASIH', 'KULONPROGO', 'DK', '650-803-1936'),
(202, '17132', 'TEKNO 1', 'BANYUROTO, NANGGULAN', 'KULONPROGO', 'DK', '626-572-1096'),
(203, '13276', 'IRWAN 4', 'MERDIKOREJO, TEMPEL', 'SLEMAN', 'DK', '254-782-8569'),
(204, '13307', 'IRWAN 2', 'GIRIKERTO, TURI', 'SLEMAN', 'DK', '907-870-5536'),
(205, '19442', 'SUMIYATI', 'SIDOREJO, LENDAH', 'KULONPROGO', 'DK', '408-703-8505'),
(206, '13265', 'SUYONO 1', 'NANGGULAN', 'KULONPROGO', 'DK', '510-503-7169'),
(207, '15092', 'SUTRIS 1', 'SENTOLO', 'KULONPROGO', 'DK', '317-722-5066'),
(208, '13230', 'KEMAT 3', 'NANGGULAN', 'KULONPROGO', 'DK', '307-704-8713'),
(209, '15092', 'TUGIYAT', 'NANGGULAN', 'KULONPROGO', 'DK', '703-235-3937'),
(210, '19558', 'ANTOK 6', 'NANGGULAN', 'KULONPROGO', 'DK', '504-710-5840'),
(211, '14341', 'ANUGERAH KL', '', '', '', ''),
(212, '15321', 'MEKAR TANI PS', '', '', '', ''),
(213, '19442', 'PALAPA KL', '', '', '', ''),
(214, '19211', 'PT. MITRA UNGGAS MAKMUR - A3', '', '', '', ''),
(215, '19348', 'PT. MITRA UNGGAS MAKMUR - A5', '', '', '', ''),
(216, '18167', 'PT. MUSTIKA JAYA LESTARI GUNUNG ', '', '', '', ''),
(217, '13799', 'SARI PS', '', '', '', ''),
(218, '13212', 'BAROKAH KL', '', '', '', ''),
(219, '15205', 'BAROKAH KL', '', '', '', ''),
(220, '19192', 'BERKAH MANDIRI PS', '', '', '', ''),
(221, '13803', 'BUMI MATARAM', '', '', '', ''),
(222, '15167', 'CV. MORO REJEKI', '', '', '', ''),
(223, '17201', 'INDRASTA KK', '', '', '', ''),
(224, '1A222', 'MILIR PS', '', '', '', ''),
(225, '19044', 'PT. GANESHA SATRIA NUSANTARA', '', '', '', ''),
(226, '14819', 'PUTRI', '', '', '', ''),
(227, '11485', 'RAGIL JAYA KK', '', '', '', ''),
(228, '19484', 'RINDA AGUSTINI', '', '', '', ''),
(229, '13257', 'AAN SUMARNA PS', '', '', '', ''),
(230, '16089', 'CAHAYA AGUNG PS', '', '', '', ''),
(231, '19325', 'FATHUR FARM', '', '', '', ''),
(232, '17383', 'GANDHU PS', '', '', '', ''),
(233, '13265', 'GIMAN B KL', '', '', '', ''),
(234, '15092', 'IMELDA GUNAWAN', '', '', '', ''),
(235, '13231', 'LESTARI PS', '', '', '', ''),
(236, '13233', 'MANDIRI PS', '', '', '', ''),
(237, '16311', 'MERDEKA PS', '', '', '', ''),
(238, '1A223', 'MITA PS', '', '', '', ''),
(239, '15583', 'MITRA ABADI PS', '', '', '', ''),
(240, '19156', 'PT. METAFORA JAGAT RAYA UNIT JOG', '', '', '', ''),
(241, '19213', 'PT. MITRA UNGGAS MAKMUR - A1', '', '', '', ''),
(242, '19212', 'PT. MITRA UNGGAS MAKMUR - A4', '', '', '', ''),
(243, '18228', 'PT. MUSTIKA JAYA LESTARI KULONPR', '', '', '', ''),
(244, '17133', 'PT. SEKAWAN SINAR SURYA YOGYA', '', '', '', ''),
(245, '14057', 'RINI JAYA PS', '', '', '', ''),
(246, '13246', 'SEDJAHTERA PS', '', '', '', ''),
(247, '13230', 'SUJIYANTA', '', '', '', ''),
(248, '13290', 'WIRABUMI KL', '', '', '', ''),
(249, '1A250', 'AGRO PS-YOGYAKARTA', '', '', '', ''),
(250, '13210', 'ANDA PS', '', '', '', ''),
(251, '18739', 'ANUGRAH KL', '', '', '', ''),
(252, '13213', 'BASRI PS', '', '', '', ''),
(253, '13919', 'BOWO PS', '', '', '', ''),
(254, '14995', 'BUDIPO PS', '', '', '', ''),
(255, '13218', 'DONA PS', '', '', '', ''),
(256, '13219', 'EKA PUTRA PS', '', '', '', ''),
(257, '1A221', 'ENY PS', '', '', '', ''),
(258, '16149', 'HM PS', '', '', '', ''),
(259, '13223', 'IRAWAN TJANDRA PS', '', '', '', ''),
(260, '13225', 'JONO KK', '', '', '', ''),
(261, '13226', 'KAMAL MANDIRI PS', '', '', '', ''),
(262, '13241', 'SABAR PS', '', '', '', ''),
(263, '13242', 'SAMUDRA PS', '', '', '', ''),
(264, '13243', 'SANDRA PS', '', '', '', ''),
(265, '13249', 'SHINDA PS', '', '', '', ''),
(266, '13251', 'SURYOTOMO PS', '', '', '', ''),
(267, '13255', 'YUMAR PS', '', '', '', ''),
(268, '19307', 'PT. DAMAR BANDHA JAYA', '', '', '', ''),
(269, '1A224', 'MUDJI FARM', '', '', '', ''),
(270, '15220', 'RAFLI & DANU''S FARM', '', '', '', ''),
(271, '13258', 'ARUM MANIS FARM', '', '', '', ''),
(272, '11506', 'BANGUN DESA FARM', '', '', '', ''),
(273, '13272', 'PT. PEKSI FARM', '', '', '', ''),
(274, '13315', 'SIDORAHAYU FARM', '', '', '', ''),
(275, '17521', 'PT. ADIJAYA WAHANA SATWA', '', '', '', ''),
(276, '18387', 'PT. AMERTA JAYA SATWA', '', '', '', ''),
(277, '13266', 'HARYANTO FARM', '', '', '', ''),
(278, '19630', 'ARIYANTI', '', '', '', ''),
(279, '19046', 'GEMILANG FARM', '', '', '', ''),
(280, '13301', 'MUNCUL JAYA', '', '', '', ''),
(281, '13314', 'SAWUNG SETO B FARM', '', '', '', ''),
(282, '17858', 'SENTRA PULLET FARM', '', '', '', ''),
(283, '14491', 'DRH.FARM', '', '', '', ''),
(284, '13321', 'YOGYA FARM', '', '', '', ''),
(285, '13256', 'AAN SAPUTRA FARM', '', '', '', ''),
(286, '18290', 'BINTANG FARM', '', '', '', ''),
(287, '13296', 'JARWO (ADI FARM)', '', '', '', ''),
(288, '13304', 'NUSANTARA FARM', '', '', '', ''),
(289, '13307', 'PUTRA FARM', '', '', '', ''),
(290, '13276', 'SENDANG MAKMUR FARM', '', '', '', ''),
(291, '13316', 'SINAR PERMATA FARM', '', '', '', ''),
(292, '19558', 'SAYAP MEKAR FARM', '', '', '', ''),
(293, '13270', 'MANGESTONI FARM', '', '', '', ''),
(294, '19334', 'ROSA FARM', '', '', '', ''),
(295, '19151', 'BAPAK TOTOK', '', '', '', ''),
(296, '14347', 'MAGATEK FARM', '', '', '', ''),
(297, '17132', 'SERBA SEHAT FARM', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `stockcode` varchar(8) NOT NULL,
  `productname` varchar(32) NOT NULL,
  `productline` enum('BP','PP') NOT NULL,
  `package` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`stockcode`, `productname`, `productline`, `package`) VALUES
('8200004', 'Medivac Coryza B 250 Ml', 'BP', ''),
('8200005', 'Medivac Coryza B 500 Ml', 'BP', ''),
('8200007', 'Medivac ND Clone 45 1000', 'BP', ''),
('8200008', 'Medivac ND Clone 45 2000', 'BP', ''),
('8200009', 'Medivac ND Clone 45 500', 'BP', ''),
('8200014', 'Medivac ND Emulsion 100Ml', 'BP', ''),
('8200015', 'Medivac ND Emulsion 250Ml', 'BP', ''),
('8200016', 'Medivac ND Emulsion 500Ml', 'BP', ''),
('8200017', 'Medivac Gumboro A 100 Ds', 'BP', ''),
('8200018', 'Medivac Gumboro A 1000 Ds', 'BP', ''),
('8200019', 'Medivac Gumboro A 500 Ds', 'BP', ''),
('8200020', 'Medivac Gumboro B 100 Ds', 'BP', ''),
('8200021', 'Medivac Gumboro B 1000 Ds', 'BP', ''),
('8200022', 'Medivac Gumboro B 2000 Ds', 'BP', ''),
('8200023', 'Medivac Gumboro B 500 Ds', 'BP', ''),
('8200026', 'Medivac ND H B1 100 Ds', 'BP', ''),
('8200027', 'Medivac ND H B1 1000 Ds', 'BP', ''),
('8200028', 'Medivac ND H B1 200 Ds', 'BP', ''),
('8200029', 'Medivac ND H B1 2000 Ds', 'BP', ''),
('8200031', 'Medivac ND H B1 500 Ds', 'BP', ''),
('8200034', 'Medivac IB H-120 1000 Ds', 'BP', ''),
('8200039', 'Medivac ND La Sota 100 Ds', 'BP', ''),
('8200040', 'Medivac ND La Sota 1000Ds', 'BP', ''),
('8200041', 'Medivac ND La Sota 200Ds', 'BP', ''),
('8200042', 'Medivac ND La Sota 2000Ds', 'BP', ''),
('8200043', 'Medivac ND La Sota 50 Ds', 'BP', ''),
('8200044', 'Medivac ND La Sota 500Ds', 'BP', ''),
('8200045', 'Medivac ND-EDS Emul 250Ml', 'BP', ''),
('8200046', 'Medivac ND-EDS Emul 500Ml', 'BP', ''),
('8200047', 'Medivac ND-EDS-IB 250Ml', 'BP', ''),
('8200048', 'Medivac ND-EDS-IB 500Ml', 'BP', ''),
('8200050', 'Medivac ND-IB 1000 Ds', 'BP', ''),
('8200051', 'Medivac ND-IB 2000 Ds', 'BP', ''),
('8200052', 'Medivac ND-IB 500 Ds', 'BP', ''),
('8200053', 'Medivac ND-IB Emul 250 Ml', 'BP', ''),
('8200056', 'Medivac ND-IB-Gmb 500Ml', 'BP', ''),
('8200057', 'Medivac Pox 1000 Ds', 'BP', ''),
('8200058', 'Medivac Pox 500 Ds', 'BP', ''),
('8200063', 'Aminovit 1 Kg', 'PP', ''),
('8200073', 'Broiler Vita 1 Kg', 'PP', ''),
('8200079', 'Coxy 10 G', 'PP', ''),
('8200083', 'Coxy 1 Kg', 'PP', ''),
('8200093', 'Coliquin 1 Kg', 'PP', ''),
('8200099', 'Doxyvet 10 G', 'PP', ''),
('8200103', 'Doxyvet 1 Kg', 'PP', ''),
('8200119', 'Doctril 10 G', 'PP', ''),
('8200123', 'Doctril 1 Kg', 'PP', ''),
('8200133', 'Doxytin 1 Kg', 'PP', ''),
('8200139', 'Egg Stimulant 10 G', 'PP', ''),
('8200143', 'Egg Stimulant 1 Kg', 'PP', ''),
('8200146', 'Egg Stimulant 500 G', 'PP', ''),
('8200153', 'Erysuprim 1 Kg', 'PP', ''),
('8200159', 'Fortevit 10 G', 'PP', ''),
('8200163', 'Fortevit 1 Kg', 'PP', ''),
('8200166', 'Fortevit 500 G', 'PP', ''),
('8200179', 'Koleridin 10 G', 'PP', ''),
('8200183', 'Koleridin 1 Kg', 'PP', ''),
('8200195', 'Medimilk 100 G', 'PP', ''),
('8200201', 'Medimilk 5 Kg', 'PP', ''),
('8200205', 'Neobro 10 G', 'PP', ''),
('8200209', 'Neobro 1 Kg', 'PP', ''),
('8200213', 'Neobro 500 G', 'PP', ''),
('8200227', 'Puyuh Medi Egg 1 Kg', 'PP', ''),
('8200249', 'Puyuh Vitanak 1 Kg', 'PP', ''),
('8200259', 'Strong Egg 1 Kg', 'PP', ''),
('8200264', 'Therapy 10 G', 'PP', ''),
('8200268', 'Therapy 1 Kg', 'PP', ''),
('8200271', 'Therapy 500 G', 'PP', ''),
('8200274', 'Turbo 10 G', 'PP', ''),
('8200278', 'Turbo 1 Kg', 'PP', ''),
('8200281', 'Turbo 500 G', 'PP', ''),
('8200284', 'Tetra Chlor-S 10 G', 'PP', ''),
('8200288', 'Tetra Chlor-S 1 Kg', 'PP', ''),
('8200291', 'Tetra Chlor-S 500 G', 'PP', ''),
('8200298', 'Tyfural 1 Kg', 'PP', ''),
('8200313', 'Trimezyn-S 10 G', 'PP', ''),
('8200317', 'Trimezyn-S 1 Kg', 'PP', ''),
('8200320', 'Trimezyn-S 500 G', 'PP', ''),
('8200323', 'Vermizyn 10 G', 'PP', ''),
('8200324', 'Vita Chicks 10 G', 'PP', ''),
('8200325', 'Vita Chicks 100 G', 'PP', ''),
('8200328', 'Vita Chicks 1 Kg', 'PP', ''),
('8200331', 'Vita Chicks 5 G', 'PP', ''),
('8200332', 'Vita Chicks 500 G', 'PP', ''),
('8200335', 'Vita Strong 10 G', 'PP', ''),
('8200339', 'Vita Strong 1 Kg', 'PP', ''),
('8200351', 'Vita Stress-M 1 Kg', 'PP', ''),
('8200354', 'Vita Stress-M 500 G', 'PP', ''),
('8200357', 'Antisep 120 Ml', 'PP', ''),
('8200358', 'Antisep 1 L', 'PP', ''),
('8200361', 'Antisep 60 Ml', 'PP', ''),
('8200367', 'Adesta 500 ml', 'PP', ''),
('8200369', 'Antikoksi 1 L', 'PP', ''),
('8200372', 'Anti Pick 20 G', 'PP', ''),
('8200378', 'Formades 100 Ml', 'PP', ''),
('8200379', 'Formades 1 L', 'PP', ''),
('8200381', 'Formades 5 L', 'PP', ''),
('8200386', 'Gentamin 100 Ml', 'PP', ''),
('8200387', 'Gentamin 20 Ml', 'PP', ''),
('8200389', 'Inj Vit B Komp 100 Ml', 'PP', ''),
('8200390', 'Inj Vit B Komp 20 Ml', 'PP', ''),
('8200392', 'Inj Vit B Komp 500 Ml', 'PP', ''),
('8200395', 'Injekvit B12 100 ml', 'PP', ''),
('8200398', 'Kututox 100 G', 'PP', ''),
('8200401', 'Kututox Spray 60 G', 'PP', ''),
('8200411', 'Medi Bird 60 Ml', 'PP', ''),
('8200413', 'Mediflox 1 L', 'PP', ''),
('8200422', 'Maladex 1 L', 'PP', ''),
('8200423', 'Medisep 100 Ml', 'PP', ''),
('8200424', 'Medisep 1 L', 'PP', ''),
('8200425', 'Medisep 20 L', 'PP', ''),
('8200426', 'Medisep 5 L', 'PP', ''),
('8200429', 'Medoxy-L 100 Ml', 'PP', ''),
('8200430', 'Medoxy-L 20 Ml', 'PP', ''),
('8200434', 'Medoxy-LA 20 Ml', 'PP', ''),
('8200436', 'Neo Antisep 120 Ml', 'PP', ''),
('8200437', 'Neo Antisep 1 L', 'PP', ''),
('8200438', 'Neo Antisep 20 Ml', 'PP', ''),
('8200441', 'Neo Antisep 60 Ml', 'PP', ''),
('8200443', 'Neo Meditril 100 Ml', 'PP', ''),
('8200444', 'Neo Meditril 1 L', 'PP', ''),
('8200445', 'Neo Meditril 20 Ml', 'PP', ''),
('8200446', 'Neo Meditril 250 Ml', 'PP', ''),
('8200450', 'Obat Tembolok 60 Ml', 'PP', ''),
('8200460', 'Sulfamix Inj 20 Ml', 'PP', ''),
('8200472', 'Vita Plex-D 30 Ml', 'PP', ''),
('8200473', 'Vermixon Sirop 120 Ml', 'PP', ''),
('8200474', 'Vermixon Sirop 1 L', 'PP', ''),
('8200475', 'Vermixon Sirop 20 Ml', 'PP', ''),
('8200476', 'Vermixon Sirop 20 L', 'PP', ''),
('8200477', 'Vermixon Sirop 5 L', 'PP', ''),
('8200478', 'Vermixon Sirop 60 Ml', 'PP', ''),
('8200480', 'Wormectin Inj 2 Ml', 'PP', ''),
('8200481', 'Wormectin Inj 20 Ml', 'PP', ''),
('8200482', 'Wormectin Inj 5 Ml', 'PP', ''),
('8200487', 'Ampicol 1 Kg', 'PP', ''),
('8200493', 'Cacing Exitor 10 Kps', 'PP', ''),
('8200506', 'Koleridin-K 10 Kpl', 'PP', ''),
('8200507', 'Koleridin-K 100 Kpl', 'PP', ''),
('8200509', 'Koleridin-K 50 Kpl', 'PP', ''),
('8200515', 'Nemasol-K 10 Kpl', 'PP', ''),
('8200516', 'Nemasol-K 100 Kpl', 'PP', ''),
('8200518', 'Nemasol-K 300 Kpl', 'PP', ''),
('8200523', 'Super Power 10 Kps', 'PP', ''),
('8200526', 'Supersonic 10 Kps', 'PP', ''),
('8200527', 'Supertop 10 Kps', 'PP', ''),
('8200528', 'Tetra Chlor 10 Kps', 'PP', ''),
('8200529', 'Tetra Chlor 300 Kps', 'PP', ''),
('8200530', 'Tetra Chlor 50 Kps', 'PP', ''),
('8200539', 'Trimezyn-B Plus 10 Kpl', 'PP', ''),
('8200540', 'Trimezyn-K 100 Kpl', 'PP', ''),
('8200541', 'Trimezyn-K 1000 Kpl', 'PP', ''),
('8200542', 'Trimezyn-K 50 Kpl', 'PP', ''),
('8200543', 'Trimezyn-K 500 Kpl', 'PP', ''),
('8200544', 'Trimezyn-K 5000 Kpl', 'PP', ''),
('8200548', 'Vermizyn 22 G', 'PP', ''),
('8200553', 'Vita Plex 50 Kpl', 'PP', ''),
('8200563', 'Vet Strep 125 G', 'PP', ''),
('8200564', 'Vet Strep 25 G', 'PP', ''),
('8200566', 'Vet Strep 5 G', 'PP', ''),
('8200569', 'Wormzol-B 10 Bolus', 'PP', ''),
('8200570', 'Wormzol-B 24 Bolus', 'PP', ''),
('8200571', 'Wormzol-K 10 Kpl', 'PP', ''),
('8200695', 'CIL 18 G', 'PP', ''),
('8201024', 'Medivac Gumboro A1 500 Ds', 'BP', ''),
('8201025', 'Medivac Gumboro A11000 Ds', 'BP', ''),
('8201027', 'Levamid 100 G', 'PP', ''),
('8201028', 'Vita Stress-M 10 G', 'PP', ''),
('8201154', 'Gumbonal 100 G', 'PP', ''),
('8201189', 'Levamid 1 Kg', 'PP', ''),
('8201405', 'Amoxitin 250 G', 'PP', ''),
('8201406', 'Proxan-S 1 Kg', 'PP', ''),
('8201407', 'Proxan-S 250 G', 'PP', ''),
('8201408', 'Larvatox 1 Kg', 'PP', ''),
('8201478', 'Medivac ND-Gumboro 500Ml', 'BP', ''),
('8201491', 'Larvatox 100 G', 'PP', ''),
('8201595', 'Zaldes 1 L', 'PP', ''),
('8201596', 'Zaldes 20 L', 'PP', ''),
('8201609', 'Strong n Fit 300 Ml', 'PP', ''),
('8201628', 'Amoxitin 1 Kg', 'PP', ''),
('8201658', 'Medivac Gumboro A 2000 Ds', 'BP', ''),
('8201684', 'Strong n Fit 120 Ml', 'PP', ''),
('8201716', 'Trimezyn Bolus 12 Bolus', 'PP', ''),
('8201770', 'NA New Formula 1 L', 'PP', ''),
('8201776', 'Collimezyn Sch 250 G', 'PP', ''),
('8201778', 'Medivac NDG7B-EDS-IB500Ml', 'BP', ''),
('8201827', 'Medivac ND-Coryza E 500ml', 'BP', ''),
('8201841', 'Kumavit 250 g', 'PP', ''),
('8201854', 'Medivac Coryza T.S 500Ml', 'BP', ''),
('8201867', 'AMMOTROL 250 gr', 'PP', ''),
('8201873', 'AMMOTROL 100 gr', 'PP', ''),
('8201894', 'Medivac ND-Coryza E 250ml', 'BP', ''),
('8201915', 'Toltradex 100', 'PP', ''),
('8201916', 'Toltradex 1L', 'PP', ''),
('8201925', 'Minovit 1 Kg Polos', 'PP', ''),
('8201927', 'Cipro 12% 1Kg Polos', 'PP', ''),
('8201935', 'Flytox 100gram', 'PP', ''),
('8201958', 'Hexamol 1 Kg Polos', 'PP', ''),
('8201965', 'Dicodine 50', 'PP', ''),
('8201976', 'Solvit 300 ml', 'PP', ''),
('8201982', 'Medivac Coryza Q 500Ml', 'BP', ''),
('8202036', 'Erydoxcy 250 g', 'PP', ''),
('8202044', 'Vitesel Inj 100 ml', 'PP', ''),
('8202056', 'Medivac Coryza T.S 250Ml', 'BP', ''),
('8202147', 'GINGERTOL', 'PP', ''),
('8202195', 'Medivac ND-IB spray 1000 Ds', 'BP', ''),
('8202254', 'Imustim 1 L', 'PP', ''),
('8202255', 'Imustim 250 ml', 'PP', ''),
('8202256', 'Stressvit 100 gram', 'PP', ''),
('8202259', 'Vita B-Plex Bolus 17 Bolus', 'PP', ''),
('8202271', 'Paramed 100G', 'PP', ''),
('8202277', 'Medivac AI T-DC 500Ml', 'BP', ''),
('8202295', 'Heprofit 250 mL', 'PP', ''),
('8202317', 'Medivac ILT lowstres1000Ds', 'BP', ''),
('8202318', 'Medivac ILT lowstres500Ds', 'BP', ''),
('8202340', 'Medivac AI 500 Ml', 'BP', ''),
('8202343', 'Medivac ND-AI 500 Ml', 'BP', ''),
('8202345', 'Medivac ND-AI 250 Ml', 'BP', ''),
('8202346', 'Medivac ND-AI 100 Ml', 'BP', ''),
('8202347', 'Medivac AI 250 Ml', 'BP', 'botol'),
('8202349', 'Medivac ND-AI 0.3 300Ml', 'BP', ''),
('8202350', 'Medivac AI 0.3 300Ml', 'BP', ''),
('8202410', 'Respitoran 250mL', 'PP', ''),
('8202514', 'Medivac AI-T 500Ml', 'BP', ''),
('8202515', 'Medivac NDG7B-AI T 500Ml', 'BP', ''),
('8202562', 'Fithera 250 mL', 'PP', ''),
('8202575', 'Neo Meditril Laga 1 Botol', 'PP', ''),
('8202576', 'Levamid K Laga 1 botol', 'PP', ''),
('8202577', 'Calvita Laga 1 botol', 'PP', ''),
('8202578', 'Solvit Laga 1 botol', 'PP', ''),
('8202586', 'Medivac NDG7-IBV 500Ml', 'BP', ''),
('8202614', 'Medivac NDG7B-AI T 100Ml', 'BP', ''),
('8202615', 'Medivac NDG7B-AI T 250Ml', 'BP', ''),
('8202679', 'Fasbro 250 ml', 'PP', ''),
('8202692', 'Wormectin Plus 50 ml', 'PP', ''),
('8202783', 'Wormectin Plus Bolus 10', 'PP', ''),
('8300112', 'Aminovit Sch 250 G', 'PP', ''),
('8300118', 'Broiler Vita Sch 250 G', 'PP', ''),
('8300123', 'Coliquin Sch 250 G', 'PP', ''),
('8300125', 'Coxy Sch 250 G', 'PP', ''),
('8300132', 'Doctril Sch 250 G', 'PP', ''),
('8300136', 'Doxytin Sch 250 G', 'PP', ''),
('8300143', 'Doxyvet Sch 250 G', 'PP', ''),
('8300145', 'Duoko Sch 250 G', 'PP', ''),
('8300151', 'Egg Stimulant Sch 250 G', 'PP', ''),
('8300158', 'Erysuprim Sch 250 G', 'PP', ''),
('8300164', 'Fortevit Sch 250 G', 'PP', ''),
('8300169', 'Koksidex Sch 250 G', 'PP', ''),
('8300171', 'Koleridin Sch 250 G', 'PP', ''),
('8300190', 'Puyuh Medi Egg Sch 250 G', 'PP', ''),
('8300205', 'Strong Egg Sch 250 G', 'PP', ''),
('8300211', 'Tetra Chlor-S Sch 250 G', 'PP', ''),
('8300218', 'Therapy Sch 250 G', 'PP', ''),
('8300223', 'Trimezyn-S Sch 250 G', 'PP', ''),
('8300229', 'Turbo Sch 250 G', 'PP', ''),
('8300241', 'Vita Chicks Sch 250 G', 'PP', ''),
('8300244', 'Vita Stress-M Sch 250 G', 'PP', ''),
('8300532', 'Ampicol Sch 250 G', 'PP', ''),
('8301081', 'Inj Vit B Komp Btl 100 Ml', 'PP', ''),
('8301103', 'Medoxy-LA Btl 100 Ml', 'PP', ''),
('8301119', 'Neobro Sch 250 G', 'PP', ''),
('8301224', 'LD Btl 100 Ds', 'PP', ''),
('8301225', 'LD Btl 200 Ds', 'PP', ''),
('8301226', 'LD Btl 50 Ds', 'PP', ''),
('8301227', 'LD Btl 500 Ds', 'PP', ''),
('8301228', 'LD Btl 1000 Ds', 'PP', ''),
('8301229', 'LD Btl 2000 Ds', 'PP', ''),
('8301680', 'Kututox Oral Btl 100 ml', 'PP', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`uid` int(8) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(16) NOT NULL,
  `role` enum('admin','koordinator','vaksinator') NOT NULL,
  `token` varchar(64) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`uid`, `username`, `password`, `role`, `token`) VALUES
(10, 'ROBBI', '123456', 'admin', ''),
(11, 'GUNAWAN K', '123456', 'koordinator', ''),
(12, 'JOKO B', '123456', 'vaksinator', ''),
(13, 'NAJIB N', '123456', 'vaksinator', ''),
(14, 'RIAD M R', '123456', 'vaksinator', ''),
(15, 'TIRTA I', '123456', 'vaksinator', ''),
(16, 'ABUDIN', '123456', 'vaksinator', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vaksinasi`
--

CREATE TABLE IF NOT EXISTS `vaksinasi` (
`vacid` int(255) NOT NULL,
  `plasmacode` int(8) NOT NULL,
  `stockcode` varchar(8) NOT NULL,
  `pelaksana` int(8) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` enum('LAYER','BROILER','PEJANTAN','BREEDING','BEBEK') NOT NULL,
  `populasi` int(8) NOT NULL,
  `umur` int(4) NOT NULL,
  `aplikasi` enum('SUBKUTAN','IM-DADA','IM-PAHA','T-MATA','T-MULUT','T-HIDUNG','MINUM','SPRAY','SAYAP') NOT NULL,
  `status` enum('BELUM','SUDAH') NOT NULL DEFAULT 'BELUM',
  `donumber` varchar(16) DEFAULT NULL,
  `batch` varchar(16) DEFAULT NULL,
  `kmstart` int(8) DEFAULT NULL,
  `kmfinish` int(8) DEFAULT NULL,
  `remark` varchar(128) DEFAULT NULL,
  `reschedule` enum('A','B','C','D','E','F','G','H') DEFAULT NULL,
  `newdate` date DEFAULT NULL,
  `cancel` enum('1','2','3','4') DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `vaksinasi`
--

INSERT INTO `vaksinasi` (`vacid`, `plasmacode`, `stockcode`, `pelaksana`, `tanggal`, `jenis`, `populasi`, `umur`, `aplikasi`, `status`, `donumber`, `batch`, `kmstart`, `kmfinish`, `remark`, `reschedule`, `newdate`, `cancel`) VALUES
(1, 172, '8202340', 12, '2018-08-28', 'BROILER', 5000, 5, 'SUBKUTAN', 'SUDAH', '0J900818000123', '998HUY76', 1000, 1050, '', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`custcode`);

--
-- Indexes for table `plasma`
--
ALTER TABLE `plasma`
 ADD PRIMARY KEY (`plasmacode`), ADD KEY `custcode` (`custcode`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`stockcode`), ADD UNIQUE KEY `description` (`productname`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`uid`), ADD UNIQUE KEY `username` (`username`,`token`);

--
-- Indexes for table `vaksinasi`
--
ALTER TABLE `vaksinasi`
 ADD PRIMARY KEY (`vacid`), ADD KEY `plasmacode` (`plasmacode`,`stockcode`,`pelaksana`), ADD KEY `pelaksana` (`pelaksana`), ADD KEY `stockcode` (`stockcode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plasma`
--
ALTER TABLE `plasma`
MODIFY `plasmacode` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=298;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `uid` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `vaksinasi`
--
ALTER TABLE `vaksinasi`
MODIFY `vacid` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
