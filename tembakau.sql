-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 04:25 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tembakau`
--

-- --------------------------------------------------------

--
-- Table structure for table `atribut`
--

CREATE TABLE `atribut` (
  `id_atribut` char(7) NOT NULL,
  `nama_atribut` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atribut`
--

INSERT INTO `atribut` (`id_atribut`, `nama_atribut`) VALUES
('ATR0001', 'Aroma'),
('ATR0002', 'Asal'),
('ATR0003', 'Benangsari vs Putik'),
('ATR0004', 'Bendol muka daun'),
('ATR0005', 'Bentuk buah'),
('ATR0006', 'Bentuk bunga'),
('ATR0007', 'Bentuk daun'),
('ATR0008', 'Bentuk Tanaman'),
('ATR0009', 'Bethok (TEV)'),
('ATR0010', 'Bulu batang'),
('ATR0011', 'Cucumber Mosaic Virus (CMV)'),
('ATR0012', 'Daerah pengembangan'),
('ATR0013', 'Diameter tabung bunga (mm)'),
('ATR0014', 'Erwinia carotovora'),
('ATR0015', 'Fusarium'),
('ATR0016', 'Habitus'),
('ATR0017', 'Hasil per-Ha (kg/ha)'),
('ATR0018', 'Irisan melintang daun'),
('ATR0019', 'Jenis tanaman, Spesies'),
('ATR0020', 'Jumlah daun produksi (lembar / pohon)'),
('ATR0021', 'Kadar Gula (%)'),
('ATR0022', 'Kadar Nikotin (%)'),
('ATR0023', 'Kekasaran urat daun'),
('ATR0024', 'Kekompakan bunga'),
('ATR0025', 'Ketahanan terhadap Hama'),
('ATR0026', 'Ketahanan terhadap penyakit'),
('ATR0027', 'Keterangan'),
('ATR0028', 'Krosok (ton/ha)'),
('ATR0029', 'Lebar daun (cm)'),
('ATR0030', 'Lebar sayap daun (cm)'),
('ATR0031', 'Meloidoggne spp.'),
('ATR0032', 'Metode Curing'),
('ATR0033', 'Metode pemuliaan'),
('ATR0034', 'Nematoda Meloidogyne spp'),
('ATR0035', 'Nilai Indek daun'),
('ATR0036', 'Nilai Indek Mutu'),
('ATR0037', 'Nilai Indek Tanaman'),
('ATR0038', 'Nisbah /Indeks daun'),
('ATR0039', 'Ombak Tepi daun'),
('ATR0040', 'Panjang bunga (mm)'),
('ATR0041', 'Panjang daun (cm)'),
('ATR0042', 'Panjang ruas'),
('ATR0043', 'Pemilik varietas'),
('ATR0044', 'Pemulia'),
('ATR0045', 'Peneliti'),
('ATR0046', 'Peneliti pendukung'),
('ATR0047', 'Peneliti Pengusul'),
('ATR0048', 'Penggembungan bunga (mm)'),
('ATR0049', 'Permukaan daun'),
('ATR0050', 'Phylotaksi'),
('ATR0051', 'Phytophthora nicotianae'),
('ATR0052', 'Posisi bunga vs daun atas'),
('ATR0053', 'Potensi Produksi'),
('ATR0054', 'Rajangan kering (ton/ha)'),
('ATR0055', 'Ralstonia solanacearum'),
('ATR0056', 'Ruas Batang / Internodia'),
('ATR0057', 'Sifat Morfologi'),
('ATR0058', 'Sirung'),
('ATR0059', 'Species'),
('ATR0060', 'Sudut daun'),
('ATR0061', 'Tangkai daun'),
('ATR0062', 'Tebal daun'),
('ATR0063', 'Teknisi'),
('ATR0064', 'Telinga daun (cm)'),
('ATR0065', 'Tepi daun'),
('ATR0066', 'Tetua betina'),
('ATR0067', 'Tetua jantan'),
('ATR0068', 'Tinggi tanaman (cm)'),
('ATR0069', 'Tipe / tangkai daun'),
('ATR0070', 'Tipe daun'),
('ATR0071', 'Tipe Tembakau'),
('ATR0072', 'Tipe varietas'),
('ATR0073', 'Tobacco Mosaic Virus (TMV)'),
('ATR0074', 'Ujung daun'),
('ATR0075', 'Ujung mahkota'),
('ATR0076', 'Ukuran mahkota (mm)'),
('ATR0077', 'Umur berbunga (hst)'),
('ATR0078', 'Umur panen (hst)'),
('ATR0079', 'Umur Tanaman'),
('ATR0080', 'Varietas'),
('ATR0081', 'Warna'),
('ATR0082', 'Warna batang'),
('ATR0083', 'Warna biji'),
('ATR0084', 'Warna daun'),
('ATR0085', 'Warna Kepala Sari'),
('ATR0086', 'Warna mahkota bunga'),
('ATR0087', 'Warna rajangan');

--
-- Triggers `atribut`
--
DELIMITER $$
CREATE TRIGGER `tr_id_atribut` BEFORE INSERT ON `atribut` FOR EACH ROW BEGIN
SET @hitung = CONVERT((RIGHT((SELECT id_atribut FROM `atribut` ORDER by id_atribut DESC LIMIT 1), 4)), UNSIGNED) + 1;
if (@hitung > 1) THEN
if (@hitung < 10) THEN 
SET new.id_atribut = concat('ATR000',@hitung);
ELSEIF (@hitung < 100) THEN
SET new.id_atribut = concat('ATR00',@hitung);
ELSEIF (@hitung < 1000) THEN
SET new.id_atribut = concat('ATR0',@hitung);
ELSE
SET new.id_atribut = concat('ATR',@hitung);
END IF;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `benih_varietas`
--

CREATE TABLE `benih_varietas` (
  `id_varietas` char(7) NOT NULL,
  `id_benih` char(7) NOT NULL,
  `persediaan_sampai` date DEFAULT NULL,
  `jumlah_gr` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `benih_varietas`
--

INSERT INTO `benih_varietas` (`id_varietas`, `id_benih`, `persediaan_sampai`, `jumlah_gr`) VALUES
('V0001', 'B0001', '2018-05-04', '-'),
('V0002', 'B0002', '2018-05-04', '-'),
('V0003', 'B0003', '2018-05-04', '-'),
('V0004', 'B0004', '2018-05-04', '-'),
('V0005', 'B0005', '2018-05-04', '-'),
('V0006', 'B0006', '2018-05-04', '-'),
('V0007', 'B0007', '2018-05-04', '-'),
('V0008', 'B0008', '2018-05-04', '-'),
('V0009', 'B0009', '2018-05-04', '6,675'),
('V0010', 'B0010', '2018-05-04', '19,622'),
('V0011', 'B0011', '2018-05-04', '12,688'),
('V0012', 'B0012', '2018-05-04', '0'),
('V0013', 'B0013', '2018-05-04', '-'),
('V0014', 'B0014', '2018-05-04', '0,471'),
('V0015', 'B0015', '2018-05-04', '3,963'),
('V0016', 'B0016', '2018-05-04', '-'),
('V0017', 'B0017', '2018-05-04', '-'),
('V0018', 'B0018', '2018-05-04', '-'),
('V0019', 'B0019', '2018-05-04', '-'),
('V0020', 'B0020', '2018-05-04', '-'),
('V0021', 'B0021', '2018-05-04', '-'),
('V0022', 'B0022', '2018-05-04', '-'),
('V0023', 'B0023', '2018-05-04', '-'),
('V0024', 'B0024', '2018-05-04', '-'),
('V0025', 'B0025', '2018-05-04', '-'),
('V0026', 'B0026', '2018-05-04', '30,856'),
('V0027', 'B0027', '2018-05-04', '-'),
('V0028', 'B0028', '2018-05-04', '-'),
('V0029', 'B0029', '2018-05-04', '-'),
('V0030', 'B0030', '2018-05-04', '-');

--
-- Triggers `benih_varietas`
--
DELIMITER $$
CREATE TRIGGER `tr_id_benih_varietas` BEFORE INSERT ON `benih_varietas` FOR EACH ROW BEGIN
SET @hitung = CONVERT((RIGHT((SELECT id_benih FROM `benih_varietas` ORDER by id_benih DESC LIMIT 1), 4)), UNSIGNED) + 1;
if (@hitung > 1) THEN
if (@hitung < 10) THEN 
SET new.id_benih = concat('B000',@hitung);
ELSEIF (@hitung < 100) THEN
SET new.id_benih = concat('B00',@hitung);
ELSEIF (@hitung < 1000) THEN
SET new.id_benih = concat('B0',@hitung);
ELSE
SET new.id_benih = concat('B',@hitung);
END IF;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `deskripsi_varietas`
--

CREATE TABLE `deskripsi_varietas` (
  `id_varietas` char(5) NOT NULL,
  `id_deskripsi_varietas` char(7) NOT NULL,
  `narasi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deskripsi_varietas`
--

INSERT INTO `deskripsi_varietas` (`id_varietas`, `id_deskripsi_varietas`, `narasi`) VALUES
('V0001', 'DSV0001', ''),
('V0002', 'DSV0002', ''),
('V0003', 'DSV0003', ''),
('V0004', 'DSV0004', ''),
('V0005', 'DSV0005', ''),
('V0006', 'DSV0006', ''),
('V0007', 'DSV0007', ''),
('V0008', 'DSV0008', 'Varietas ini diperoleh dari hasil seleksi varietas lokal yang berasal dari Prancak, Kecamat-an Pasongsongan, Kabupaten Sumenep. Varietas Prancak-95 dilepas oleh Menteri Pertanian pa-da tahun 1997 dengan SK nomor 731/Kpts/TP.240/7/97.\nHabitus tanaman seperti kerucut, bila telah dipangkas akan berbentuk silin-dris. Tinggi tanaman rata-rata berki-sar antara 60 dan 80 cm, jumlah daun 14-18 lembar. Bentuk daunnya oval agak sempit, duduk daun pada batang membentuk sudut lancip. Varietas ini tahan terhadap pe-nyakit lanas (Phytophthora nicotia-nae var. nicotianae). \nProduktivitasnya rata-rata 804 kg rajangan/ha, indeks mutu 57, kadar nikotin rata-rata 2,13%. Tembakau rajangan Prancak-95 mempunyai aroma yang harum dan gurih, sesuai untuk bahan baku rokok keretek. Varietas ini lebih sesuai untuk lahan kering, di daerah pegunungan dan tegalan. Dinas Perkebunan Kabupaten Pamekasan dan Sumenep mulai menangkarkan benih sebar Prancak-95 pada 1996 dan 1997. Benih sebar yang dihasilkan dibagikan kepada pedagang bibit sehingga bibit yang dipasarkan berasal dari sumber benih yang jelas. Produktivitas Prancak-95 di tingkat petani berkisar antara 0,45-0,8 ton/ha, tergantung jenis lahan dan pengelolaan ta-naman oleh petani. Saat ini penggunaan Prancak-95 diperkirakan mencapai 50-60% dari total areal tembakau madura, tersebar di Kabupaten Sumenep, Pamekasan, dan sebagian Sampang.\nPengembangan tembakau madura Prancak-95 didukung dengan adanya kemitraan antara petani dan PT Sadhana Arifnusa (pemasok tembakau PT HM Sampoerna) dan pemasok PT PR Gudang Garam serta peran aktif dari instansi terkait. Dalam kemitraan ini, pengelola menyediakan benih sebar, sedangkan Dinas Perkebunan dan Kehutanan Kabupaten Pamekasan membina petani penangkar yang merangkap sebagai pedagang bibit.\n'),
('V0009', 'DSV0009', 'Tembakau temanggung menyumbang 70-80% terhadap total pendapatan petani. Peranan tembakau temanggung untuk rokok keretek sangat penting karena berfungsi sebagai pemberi rasa dan aroma yang khas. Permasalahan yang ada di daerah pengembangan tembakau temanggung adalah penyakit lincat yang disebabkan oleh kompleks patogen Phytophthora nicotianae, Ralstonia solanacearum, dan Meloidogyne spp. dan degradasi lahan karena erosi. Oleh karena itu, telah dikembangkan varietas tahan penyakit licat, yaitu Kemloko-2 dan Kemloko-3 serta teknologi konservasi untuk menanggulangi erosi. Teknologi pengendalian erosi dan penyakit lincat dapat menurunkan tingkat erosi sebesar 66%, menekan kematian tanaman sebesar 44%, serta meningkatkan hasil dan mutu tembakau masing masing sebesar 31% dan 8%.'),
('V0010', 'DSV0010', 'Tembakau temanggung menyumbang 70-80% terhadap total pendapatan petani. Peranan tembakau temanggung untuk rokok keretek sangat penting karena berfungsi sebagai pemberi rasa dan aroma yang khas. Permasalahan yang ada di daerah pengembangan tembakau temanggung adalah penyakit lincat yang disebabkan oleh kompleks patogen Phytophthora nicotianae, Ralstonia solanacearum, dan Meloidogyne spp. dan degradasi lahan karena erosi. Oleh karena itu, telah dikembangkan varietas tahan penyakit licat, yaitu Kemloko-2 dan Kemloko-3 serta teknologi konservasi untuk menanggulangi erosi. Teknologi pengendalian erosi dan penyakit lincat dapat menurunkan tingkat erosi sebesar 66%, menekan kematian tanaman sebesar 44%, serta meningkatkan hasil dan mutu tembakau masing masing sebesar 31% dan 8%.'),
('V0011', 'DSV0011', ''),
('V0012', 'DSV0012', ''),
('V0013', 'DSV0013', 'Tembakau kasturi adalah tembakau kerosok lokal VO sebagai bahan campuran (blending) untuk rokok keretek, yang dikembangkan di daerah Jember dan Bondowoso. Dari seluruh produksi nasional tembakau kasturi, 11,36% diekspor dengan label Besuki VO dan 88,64% dikonsumsi dalam negeri sebagai bahan baku rokok keretek. Pabrik Rokok Gudang Garam, Sampoerna, dan Djarum merupakan pengguna terbesar kerosok kasturi. Semula yang ditanam oleh petani adalah varietas lokal berupa populasi tanaman yang masih sangat beragam. Sejak tahun 1997 dilakukan pemuliaan untuk memperbaiki varietas lokal yang ada. Seleksi terhadap varietas lokal menghasilkan dua varietas yang diputihkan/dilepas pada tahun 2006, yaitu Kasturi 1 dan Kasturi 2 berdasarkan SK Mentan No: 132/Kpts/SR.120/2/ 2007 dan No: 133/Kpts/SR.120/2/2007. Saat ini luas areal penanaman tembakau kasturi pada dua daerah pengembangan mencapai 3.197 ha, dengan rata-rata produktivitas di tingkat petani mencapai 985 kg krosok/ha atau senilai Rp12.805.000,00'),
('V0014', 'DSV0014', 'Tembakau kasturi adalah tembakau kerosok lokal VO sebagai bahan campuran (blending) untuk rokok keretek, yang dikembangkan di daerah Jember dan Bondowoso. Dari seluruh produksi nasional tembakau kasturi, 11,36% diekspor dengan label Besuki VO dan 88,64% dikonsumsi dalam negeri sebagai bahan baku rokok keretek. Pabrik Rokok Gudang Garam, Sampoerna, dan Djarum merupakan pengguna terbesar kerosok kasturi. Semula yang ditanam oleh petani adalah varietas lokal berupa populasi tanaman yang masih sangat beragam. Sejak tahun 1997 dilakukan pemuliaan untuk memperbaiki varietas lokal yang ada. Seleksi terhadap varietas lokal menghasilkan dua varietas yang diputihkan/dilepas pada tahun 2006, yaitu Kasturi 1 dan Kasturi 2 berdasarkan SK Mentan No: 132/Kpts/SR.120/2/ 2007 dan No: 133/Kpts/SR.120/2/2007. Saat ini luas areal penanaman tembakau kasturi pada dua daerah pengembangan mencapai 3.197 ha, dengan rata-rata produktivitas di tingkat petani mencapai 985 kg krosok/ha atau senilai Rp12.805.000,00'),
('V0015', 'DSV0015', ''),
('V0016', 'DSV0016', ''),
('V0017', 'DSV0017', ''),
('V0018', 'DSV0018', ''),
('V0019', 'DSV0019', ''),
('V0020', 'DSV0020', ''),
('V0021', 'DSV0021', ''),
('V0022', 'DSV0022', ''),
('V0023', 'DSV0023', ''),
('V0024', 'DSV0024', ''),
('V0025', 'DSV0025', ''),
('V0026', 'DSV0026', ''),
('V0027', 'DSV0027', ''),
('V0028', 'DSV0028', ''),
('V0029', 'DSV0029', ''),
('V0030', 'DSV0030', ''),
('V0031', 'DSV0031', '');

--
-- Triggers `deskripsi_varietas`
--
DELIMITER $$
CREATE TRIGGER `tr_id_deskripsi_varietas` BEFORE INSERT ON `deskripsi_varietas` FOR EACH ROW BEGIN
SET @hitung = CONVERT((RIGHT((SELECT id_deskripsi_varietas FROM `deskripsi_varietas` ORDER by id_deskripsi_varietas DESC LIMIT 1), 4)), UNSIGNED) + 1;
if (@hitung > 1) THEN
if (@hitung < 10) THEN 
SET new.id_deskripsi_varietas = concat('DSV000',@hitung);
ELSEIF (@hitung < 100) THEN
SET new.id_deskripsi_varietas = concat('DSV00',@hitung);
ELSEIF (@hitung < 1000) THEN
SET new.id_deskripsi_varietas = concat('DSV0',@hitung);
ELSE
SET new.id_deskripsi_varietas = concat('DSV',@hitung);
END IF;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `detail_deskripsi`
--

CREATE TABLE `detail_deskripsi` (
  `id_deskripsi_varietas` char(7) NOT NULL,
  `id_atribut` char(7) NOT NULL,
  `detail_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_deskripsi`
--

INSERT INTO `detail_deskripsi` (`id_deskripsi_varietas`, `id_atribut`, `detail_value`) VALUES
('DSV0001', 'ATR0019', 'Tembakau, Nicotiana tabaccum.'),
('DSV0001', 'ATR0002', 'Introduksi, hibrida silang tunggal dari Amerika Serikat.'),
('DSV0001', 'ATR0072', 'Hibrida.'),
('DSV0001', 'ATR0066', 'Cytoplasmic male sterile NC 1127.'),
('DSV0001', 'ATR0067', 'NC 810.'),
('DSV0001', 'ATR0057', ''),
('DSV0001', 'ATR0016', 'Kerucut.'),
('DSV0001', 'ATR0068', '213,9 ? 8,72.'),
('DSV0001', 'ATR0082', 'Hijau muda.'),
('DSV0001', 'ATR0020', '30,5 ? 2,59.'),
('DSV0001', 'ATR0058', 'Sedang.'),
('DSV0001', 'ATR0069', 'Duduk, sudut daun sedang.'),
('DSV0001', 'ATR0041', '54,6 ? 3,78.'),
('DSV0001', 'ATR0029', '31,3 ? 2,50.'),
('DSV0001', 'ATR0050', '2/5 ka.'),
('DSV0001', 'ATR0038', '0,57.'),
('DSV0001', 'ATR0030', 'Sangat sempit (2,29 ? 0,61).'),
('DSV0001', 'ATR0023', 'Sedang, sudut urat daun lancip.'),
('DSV0001', 'ATR0007', 'Elip sempit, bentuk ujung daun runcing.'),
('DSV0001', 'ATR0018', 'Cekung, irisan bujur daun agak lengkung.'),
('DSV0001', 'ATR0004', 'Sedang, sedikit melipat.'),
('DSV0001', 'ATR0039', 'Lemah, torehan tepi daun berombak.'),
('DSV0001', 'ATR0064', 'Tidak ada atau sangat pendek (3,65 ? 0,65).'),
('DSV0001', 'ATR0084', 'Hijau, warna ibu tulang daun hijau keputihan.'),
('DSV0001', 'ATR0077', 'Tengahan (60,3 ? 3,56).'),
('DSV0001', 'ATR0040', 'Pendek (<=47,4).'),
('DSV0001', 'ATR0013', 'Kecil (<=4,4).'),
('DSV0001', 'ATR0048', 'Lemah (<=8).'),
('DSV0001', 'ATR0076', 'Sedang (9-11).'),
('DSV0001', 'ATR0075', 'Sangat kuat, warna pink muda, putik sempurna.'),
('DSV0001', 'ATR0003', 'Lebih pendek.'),
('DSV0001', 'ATR0006', 'Kerucut terbalik.'),
('DSV0001', 'ATR0052', 'Di atas.'),
('DSV0001', 'ATR0006', 'Terbuka.'),
('DSV0001', 'ATR0005', 'Bulat telur.'),
('DSV0001', 'ATR0053', ''),
('DSV0001', 'ATR0028', '1,73-1,99.'),
('DSV0001', 'ATR0036', '55,37 - 78,35.'),
('DSV0001', 'ATR0037', '95,84 - 152,03.'),
('DSV0001', 'ATR0022', '2,07 - 4,22.'),
('DSV0001', 'ATR0026', ''),
('DSV0001', 'ATR0051', 'Moderat tahan.'),
('DSV0001', 'ATR0055', 'Moderat tahan.'),
('DSV0001', 'ATR0032', 'Tahap pelayuan/penguningan selama 38 jam, tahap pengikatan warna selama 47,6 jam, tahap pengeringan daun selama 25,2 jam, dan tahap pengeringan gagang selama24,0 jam.'),
('DSV0001', 'ATR0044', 'Fatkhur Rochman, Emy Sulistyowati, Ruly Hamida, dan Sri Adikadarsih.'),
('DSV0001', 'ATR0046', 'Hamzah, Joko Triyono Rahardjo, Djajadi, Ali Permadi, Kristiana Sri Wijayanti, Muhammad Syakir, Fadjry Djufry, dan Fajarudin.'),
('DSV0001', 'ATR0043', 'PT. Benih Emas Indonesia.'),
('DSV0002', 'ATR0019', 'Tembakau, Nicotiana tabaecum.'),
('DSV0002', 'ATR0002', 'Introduksi, hibrida silang tunggal dari Amerika Serikat.'),
('DSV0002', 'ATR0072', 'Hibrida.'),
('DSV0002', 'ATR0066', 'Cytoplasmic male sterile GLH 1994-RCL.'),
('DSV0002', 'ATR0067', 'K 326 (RTMV).'),
('DSV0002', 'ATR0057', ''),
('DSV0002', 'ATR0016', 'Kerucut.'),
('DSV0002', 'ATR0068', '199,7 ? 14,8.'),
('DSV0002', 'ATR0082', 'Hijau muda.'),
('DSV0002', 'ATR0020', '27,4 ? 1,35.'),
('DSV0002', 'ATR0058', 'Sedang.'),
('DSV0002', 'ATR0069', 'Duduk, sudut daun lancip.'),
('DSV0002', 'ATR0041', '60,81 ? 5,80.'),
('DSV0002', 'ATR0029', '29,91 ? 3,26.'),
('DSV0002', 'ATR0050', '5/13 kl.'),
('DSV0002', 'ATR0038', '0,49.'),
('DSV0002', 'ATR0030', '1,77 ? 0,24.'),
('DSV0002', 'ATR0023', 'Sedang, sudut urat daun lancip.'),
('DSV0002', 'ATR0007', 'Elip lebar, bentuk ujung daun meruneing.'),
('DSV0002', 'ATR0018', 'Cekung, irisan bujur daun lengkung.'),
('DSV0002', 'ATR0004', 'Sedang, sedikit melipat.'),
('DSV0002', 'ATR0039', 'Lemah, torehan tepi daun berombak.'),
('DSV0002', 'ATR0064', 'Tidak ada atau sangat pendek (3,57?0,84).'),
('DSV0002', 'ATR0084', 'Hijau, warna ibu tulang daun hijau keputihan.'),
('DSV0002', 'ATR0077', '58,7 ? 1,34.'),
('DSV0002', 'ATR0040', 'Panjang (>=51.7).'),
('DSV0002', 'ATR0013', 'Sedang (47,5 - 51,6).'),
('DSV0002', 'ATR0048', 'Lemah (>=8).'),
('DSV0002', 'ATR0076', 'Sedang (20 - 23).'),
('DSV0002', 'ATR0075', 'Sangat kuat, warna pink, putik sempurna.'),
('DSV0002', 'ATR0003', 'Lebih pendek.'),
('DSV0002', 'ATR0006', 'Kerucut terbalik.'),
('DSV0002', 'ATR0052', 'Di atas.'),
('DSV0002', 'ATR0006', 'Terbuka.'),
('DSV0002', 'ATR0005', 'Bulat telur.'),
('DSV0002', 'ATR0053', ''),
('DSV0002', 'ATR0028', '1,88 - 2,13.'),
('DSV0002', 'ATR0036', '70,28 - 86,99.'),
('DSV0002', 'ATR0037', '133,45 - 178,82.'),
('DSV0002', 'ATR0022', '2,11 - 4,11.'),
('DSV0002', 'ATR0026', ''),
('DSV0002', 'ATR0051', 'Moderat tahan.'),
('DSV0002', 'ATR0055', 'Moderat tahan.'),
('DSV0002', 'ATR0032', 'Tahap pelayuanjpenguningan selama 39,6 jam, tahap pengikatan warna selama 54,0 jam, tahap pengeringan daun selama 25,2 jam, dan tahap pengeringan gagang selama 24,0 jam.'),
('DSV0002', 'ATR0044', 'Fatkhur Rochman, Emy Sulistyowati, Ruly Hamida, dan Aprilia Ridhawati.'),
('DSV0002', 'ATR0046', 'Hamzah, Joko Triyono Rahardjo, Djajadi, Ali Permadi, Kristiana Sri Wijayanti, Muhammad Syakir, Fadjry Djufry, dan Fajarudin.'),
('DSV0002', 'ATR0043', 'PT. Benih Emas Indonesia.'),
('DSV0003', 'ATR0019', 'Tembakau, Nicotiana tabaccum.'),
('DSV0003', 'ATR0002', 'Introduksi, hibrida silang tunggal dari Amerika Serikat. '),
('DSV0003', 'ATR0072', 'Hibrida.'),
('DSV0003', 'ATR0066', 'Cytoplasmic male sterile NC 297-66-615.'),
('DSV0003', 'ATR0067', 'NCTG-6011-616.'),
('DSV0003', 'ATR0057', ''),
('DSV0003', 'ATR0016', 'Kerucut.'),
('DSV0003', 'ATR0068', '205?9,89.'),
('DSV0003', 'ATR0082', 'Hijau.'),
('DSV0003', 'ATR0020', '27 ? 1,15.'),
('DSV0003', 'ATR0058', 'Tidak ada.'),
('DSV0003', 'ATR0069', 'Duduk, sudut daun laneip.'),
('DSV0003', 'ATR0041', '58?4,74.'),
('DSV0003', 'ATR0029', '32,8?3,02.'),
('DSV0003', 'ATR0050', '3/8 ka.'),
('DSV0003', 'ATR0038', '0,57.'),
('DSV0003', 'ATR0030', 'Sangat sempit (2,26?0,61).'),
('DSV0003', 'ATR0023', 'Sedang, sudut urat daun sangat laneip.'),
('DSV0003', 'ATR0007', 'Elip sempit, bentuk ujung daun meruncing.'),
('DSV0003', 'ATR0018', 'Agak lengkung, irisan bujur agak lengkung.'),
('DSV0003', 'ATR0004', 'Sedang, sedikit melipat.'),
('DSV0003', 'ATR0039', 'Lemah, torehan tepi daun berombak.'),
('DSV0003', 'ATR0064', 'Tidak ada atau sangat pendek (4,25 ? 0,67).'),
('DSV0003', 'ATR0084', 'Hijau, warna ibu tulang daun hijau keputihan.'),
('DSV0003', 'ATR0077', 'Tengahan (60,6 ? 2,63).'),
('DSV0003', 'ATR0040', 'Panjang (58 ? 4,74).'),
('DSV0003', 'ATR0013', 'Kecil (?4,4).'),
('DSV0003', 'ATR0048', 'Sedang (9 - 11).'),
('DSV0003', 'ATR0076', 'Sedang (20 - 23)'),
('DSV0003', 'ATR0075', 'ujung mahkota sangat kuat, warna pink muda.'),
('DSV0003', 'ATR0003', '-'),
('DSV0003', 'ATR0006', '-'),
('DSV0003', 'ATR0052', 'Di atas.'),
('DSV0003', 'ATR0024', 'Terbuka.'),
('DSV0003', 'ATR0005', 'Bulat telur.'),
('DSV0003', 'ATR0053', ''),
('DSV0003', 'ATR0028', '1,73 - 2,03.'),
('DSV0003', 'ATR0036', '62,34 - 85,74.'),
('DSV0003', 'ATR0037', '108,02 - 158,66.'),
('DSV0003', 'ATR0022', '2,19 - 4,21.'),
('DSV0003', 'ATR0026', ''),
('DSV0003', 'ATR0051', 'Moderat Tahan.'),
('DSV0003', 'ATR0055', 'Moderat Tahan.'),
('DSV0003', 'ATR0032', 'Tahap pelayuan/penguningan selama 42 jam, tahap pengikatan warna selama 51,6 jam, tahap pengeringan daun selama 25,2 jam, dan tahap pengeringan gagang selama 24,0 jam.'),
('DSV0003', 'ATR0044', 'Fatkhur Rochman, Emy Sulistyowati, Ruly Hamida, dan Sri Yulaikah.'),
('DSV0003', 'ATR0046', 'Hamzah, Joko Triyono Rahardjo, Djajadi, Ali Permadi, Kristiana Sri Wijayanti, Muhammad Syakir, Fadjry Djufry, dan Fajarudin.'),
('DSV0003', 'ATR0043', 'PT. Benih Emas Indonesia.'),
('DSV0004', 'ATR0002', 'Kultivar Gagang Rejeb Sidi'),
('DSV0004', 'ATR0072', 'Galur Murni'),
('DSV0004', 'ATR0057', ''),
('DSV0004', 'ATR0016', 'Kerucut'),
('DSV0004', 'ATR0068', '103,2 ? 18,1'),
('DSV0004', 'ATR0042', 'Panjang bertambah'),
('DSV0004', 'ATR0082', 'Hijau tua.'),
('DSV0004', 'ATR0010', 'Berbulu.'),
('DSV0004', 'ATR0020', '21,7 ? 0,7.'),
('DSV0004', 'ATR0060', 'Sedang.'),
('DSV0004', 'ATR0074', 'Runcing.'),
('DSV0004', 'ATR0065', 'Berombak sedang.'),
('DSV0004', 'ATR0049', 'Sedikit berbendol.'),
('DSV0004', 'ATR0062', 'Tebal.'),
('DSV0004', 'ATR0084', 'Hijau.'),
('DSV0004', 'ATR0050', '3/8 ka.'),
('DSV0004', 'ATR0061', 'Bertangkai.'),
('DSV0004', 'ATR0030', 'Sangat sempit.'),
('DSV0004', 'ATR0064', 'Sempit.'),
('DSV0004', 'ATR0041', '49,6 ? 3,0.'),
('DSV0004', 'ATR0029', '31,2 ? 2,2.'),
('DSV0004', 'ATR0007', 'Lanset.'),
('DSV0004', 'ATR0038', '0,60 - 0,64.'),
('DSV0004', 'ATR0077', '52,4 ? 1,5.'),
('DSV0004', 'ATR0086', 'Merah muda tua.'),
('DSV0004', 'ATR0005', 'Bulat telur.'),
('DSV0004', 'ATR0083', 'Coklat.'),
('DSV0004', 'ATR0078', '84,6 ? 3,6.'),
('DSV0004', 'ATR0053', ''),
('DSV0004', 'ATR0054', '0,82 - 0,95.'),
('DSV0004', 'ATR0036', '58,19 - 75,28.'),
('DSV0004', 'ATR0037', '7L,72 - 86,99.'),
('DSV0004', 'ATR0022', '3,L2 - 5,42.'),
('DSV0004', 'ATR0026', ''),
('DSV0004', 'ATR0051', 'Moderat tahan.'),
('DSV0004', 'ATR0055', 'Moderat tahan.'),
('DSV0004', 'ATR0012', 'Sesuai untuk pengembangan di Kabupaten Tulungagung, Provinsi Jawa Timur'),
('DSV0004', 'ATR0044', 'Ruly Hamida, Fatkhur Rochman, Sesanti, Basuki, Emy Sulistyowati, Sri Yulaikah, dan Sri Adikadarsih.'),
('DSV0004', 'ATR0046', 'Cece Suhara, Djajadi, Muhammad Syakir, Fadjry, Djufry, Tatang Suhartono, Suprapti, dan Rodi\''),
('DSV0004', 'ATR0063', 'Slamet.'),
('DSV0004', 'ATR0043', 'Pemerintah Daerah Kabupaten Tulungagung, Provinsi Jawa Timur.'),
('DSV0005', 'ATR0002', 'Persilangan Kemloko2x K 399'),
('DSV0005', 'ATR0033', 'Persilangan konvensional, silang balik 2 kali, seleksi pedigree dan penggaluran'),
('DSV0005', 'ATR0059', 'Nicotiana tabacum.'),
('DSV0005', 'ATR0071', 'Temanggung.'),
('DSV0005', 'ATR0072', 'Galur murni.'),
('DSV0005', 'ATR0016', 'Kerucut.'),
('DSV0005', 'ATR0068', 'Tinggi (130,91 ? 12,40)'),
('DSV0005', 'ATR0082', 'Hijau keputihan.'),
('DSV0005', 'ATR0020', 'Sedikit (19,93 ? 1,21)'),
('DSV0005', 'ATR0058', 'Sedang.'),
('DSV0005', 'ATR0070', 'Duduk, sudut daun: lancip.'),
('DSV0005', 'ATR0041', 'Panjang (49,67 ? 2,44)'),
('DSV0005', 'ATR0029', 'Sempit (26,11 ? 1,03)'),
('DSV0005', 'ATR0038', '0,48 - 0,54.'),
('DSV0005', 'ATR0050', '3/8 kanan.'),
('DSV0005', 'ATR0030', 'Sedang.'),
('DSV0005', 'ATR0023', 'Sedang.'),
('DSV0005', 'ATR0007', 'Lanset, ujung: runcing.'),
('DSV0005', 'ATR0018', 'Cembung /agak lengkung.'),
('DSV0005', 'ATR0004', 'Tidak ada, sedikit melipat.'),
('DSV0005', 'ATR0039', 'Tidak ada, torehan: rata.'),
('DSV0005', 'ATR0064', 'Sedang.'),
('DSV0005', 'ATR0084', 'Hijau, warna ibu tulang daun: hijau keputihan.'),
('DSV0005', 'ATR0077', 'Tengahan (62,89 ? 15,85).'),
('DSV0005', 'ATR0086', 'Pink, putik sempurna, benang sari lebih panjang.'),
('DSV0005', 'ATR0075', 'Lemah, ukuran mahkota besar.'),
('DSV0005', 'ATR0040', 'Panjang.'),
('DSV0005', 'ATR0013', 'Sedang, penggembungan tabung sedang-'),
('DSV0005', 'ATR0006', 'Bulat, kerucut terbalik.'),
('DSV0005', 'ATR0024', 'Sangat terbuka, diatas daun teratas.'),
('DSV0005', 'ATR0005', 'Bulat telur.'),
('DSV0005', 'ATR0083', 'Coklat.'),
('DSV0005', 'ATR0017', '699,09 - 966,08'),
('DSV0005', 'ATR0036', '37,19 - 54,97.'),
('DSV0005', 'ATR0037', '25,85 - 36,74.'),
('DSV0005', 'ATR0022', '3,51 - 3,65.'),
('DSV0005', 'ATR0026', ''),
('DSV0005', 'ATR0051', 'Moderat tahan.'),
('DSV0005', 'ATR0055', 'Moderat tahan.'),
('DSV0005', 'ATR0031', 'Moderat tahan.'),
('DSV0005', 'ATR0012', 'Untuk pengembangan Pada lahan di Lereng Gunung Sindoro.'),
('DSV0005', 'ATR0044', 'Fatkhur Rochman, Sesanti Basuki, Suwarso, Sri Yulaikah dan Ruly Hamida.'),
('DSV0005', 'ATR0046', 'Supriyono, Djajadi, Cece Suhara, Masrik, Amin, Muhammad Syakir, Fadjry, Djufry, Emy Sulistyowati, Untung Prabowo dan Dadi Riswanto.'),
('DSV0005', 'ATR0043', 'Milik bersama Balai Penelitian Tanaman Pemanis dan Serat, dan Pemerintah Kabupaten Temanggung'),
('DSV0006', 'ATR0002', 'Persilangan Kemloko1x K 399'),
('DSV0006', 'ATR0033', 'Persilangan konvensional, silang balik 2 kali, seleksi pedigree dan penggaluran'),
('DSV0006', 'ATR0059', 'Nicotiana tabacum.'),
('DSV0006', 'ATR0071', 'Temanggung.'),
('DSV0006', 'ATR0072', 'Galur murni.'),
('DSV0006', 'ATR0016', 'Kerucut.'),
('DSV0006', 'ATR0068', 'Tinggi (132,27 ? 15,02)'),
('DSV0006', 'ATR0082', 'Hijau.'),
('DSV0006', 'ATR0020', 'Sedikit (20,00 ? 0,70)'),
('DSV0006', 'ATR0058', 'Sedang.'),
('DSV0006', 'ATR0070', 'Duduk, sudut daun: lanciP.'),
('DSV0006', 'ATR0041', 'Panjang (48,91 ? 1,05)'),
('DSV0006', 'ATR0029', 'Sempit (25,07 ? 0,74)'),
('DSV0006', 'ATR0038', '0,48 - 0,53.'),
('DSV0006', 'ATR0050', '3/8 kanan.'),
('DSV0006', 'ATR0030', 'Sedang.'),
('DSV0006', 'ATR0023', 'Sedang.'),
('DSV0006', 'ATR0007', 'Lanset, ujung: runcing.'),
('DSV0006', 'ATR0018', 'Cembung /agak lengkung.'),
('DSV0006', 'ATR0004', 'Tidak ada, sedikit melipat.'),
('DSV0006', 'ATR0039', 'Tidak ada, torehan: rata.'),
('DSV0006', 'ATR0064', 'Sedang.'),
('DSV0006', 'ATR0084', 'Hijau, warna ibu tulang daun: hijau keputihan.'),
('DSV0006', 'ATR0077', 'Tengahan (63,18 ? 15,44).'),
('DSV0006', 'ATR0086', 'Pink, putik sempurna, benang sari lebih panjang.'),
('DSV0006', 'ATR0075', 'Membulat lemah, ukuran mahkota besar.'),
('DSV0006', 'ATR0040', 'Panjang.'),
('DSV0006', 'ATR0013', 'Sedang, penggembungan tabung : sedang'),
('DSV0006', 'ATR0006', 'Bulat, kerucut terbalik.'),
('DSV0006', 'ATR0024', 'Sedang, diatas daun teratas'),
('DSV0006', 'ATR0005', 'Bulat telur.'),
('DSV0006', 'ATR0083', 'Coklat.'),
('DSV0006', 'ATR0017', '893,17 - 1.070,83'),
('DSV0006', 'ATR0036', '39,62 - 59,38'),
('DSV0006', 'ATR0037', '29,53 - 42,37'),
('DSV0006', 'ATR0022', '3,24- 4,54'),
('DSV0006', 'ATR0026', ''),
('DSV0006', 'ATR0051', 'Moderat tahan.'),
('DSV0006', 'ATR0055', 'Moderat tahan.'),
('DSV0006', 'ATR0031', 'Moderat tahan.'),
('DSV0006', 'ATR0012', 'Untuk pengembangan pada lahan di Lereng Gunung Sumbing.'),
('DSV0006', 'ATR0044', 'Fatkhur Rochman, Sesanti Basuki, Suwarso, Sri Yulaikah dan Ruly Hamida.'),
('DSV0006', 'ATR0046', 'Supriyono, Djajadi, Cece Suhara, Masrik, Amin, Muhammad Syakir, Fadjry, Djufry, Emy Sulistyowati, Untung Prabowo dan Dadi Riswanto.'),
('DSV0006', 'ATR0043', 'Milik bersama Balai Penelitian Tanaman Pemanis dan Serat, dan Pemerintah Kabupaten Temanggung'),
('DSV0007', 'ATR0002', 'Persilangan Kemloko2 x Prancak 95'),
('DSV0007', 'ATR0033', 'Persilangan konvensional, silang balik 2 kali, seleksi pedigree dan penggaluran'),
('DSV0007', 'ATR0059', 'Nicotiana tabacum.'),
('DSV0007', 'ATR0071', 'Temanggung.'),
('DSV0007', 'ATR0072', 'Galur murni.'),
('DSV0007', 'ATR0016', 'Kerucut.'),
('DSV0007', 'ATR0068', 'Tinggi (138,51 ? 3,86)'),
('DSV0007', 'ATR0082', 'Hijau muda.'),
('DSV0007', 'ATR0020', 'Sedikit (20,49 ? 0,50)'),
('DSV0007', 'ATR0058', 'Lemah'),
('DSV0007', 'ATR0070', 'Duduk, sudut daun: lancip.'),
('DSV0007', 'ATR0041', 'Panjang (50,91 ? 1,22)'),
('DSV0007', 'ATR0029', 'Sempit (30,18 ? 0,64)'),
('DSV0007', 'ATR0038', '0,50 - 0,66.'),
('DSV0007', 'ATR0050', '3/8 kanan.'),
('DSV0007', 'ATR0030', 'Sedang.'),
('DSV0007', 'ATR0023', 'Sedang.'),
('DSV0007', 'ATR0007', 'Lanset, ujung: runcing.'),
('DSV0007', 'ATR0018', 'Cembung /agak lengkung.'),
('DSV0007', 'ATR0004', 'Tidak ada, lipatan sedikit.'),
('DSV0007', 'ATR0039', 'Lemah, torehan rata'),
('DSV0007', 'ATR0064', 'Sedang.'),
('DSV0007', 'ATR0084', 'Hijau muda, warna ibu tulang daun hijau keputihan.'),
('DSV0007', 'ATR0077', 'Tengahan (62,33 ? 15,62).'),
('DSV0007', 'ATR0086', 'Pink, putik sempurna, benang sari lebih panjang.'),
('DSV0007', 'ATR0075', 'Lemah, ukuran mahkota besar.'),
('DSV0007', 'ATR0040', 'Panjang.'),
('DSV0007', 'ATR0013', 'Sedang, penggembungan tabung sedang'),
('DSV0007', 'ATR0006', 'Bulat, kerucut terbalik.'),
('DSV0007', 'ATR0024', 'Sedang, diatas daun teratas.'),
('DSV0007', 'ATR0005', 'Bulat telur.'),
('DSV0007', 'ATR0083', 'Coklat.'),
('DSV0007', 'ATR0017', '861,24 - 1.060,76'),
('DSV0007', 'ATR0036', '37,01 - 49,77'),
('DSV0007', 'ATR0037', '25,37 - 47,84'),
('DSV0007', 'ATR0022', '3,00 - 3,54'),
('DSV0007', 'ATR0026', ''),
('DSV0007', 'ATR0051', 'Moderat tahan.'),
('DSV0007', 'ATR0055', 'Moderat tahan.'),
('DSV0007', 'ATR0031', 'Moderat tahan.'),
('DSV0007', 'ATR0012', 'Untuk pengembangan tidak pada lahan sawah'),
('DSV0007', 'ATR0044', 'Fatkhur Rochman, Sesanti Basuki, Suwarso, Sri Yulaikah dan Ruly Hamida.'),
('DSV0007', 'ATR0046', 'Supriyono, Djajadi, Cece Suhara, Masrik, Amin, Muhammad Syakir, Fadjry, Djufry, Emy Sulistyowati, Untung Prabowo dan Dadi Riswanto.'),
('DSV0007', 'ATR0043', 'Milik bersama Balai Penelitian Tanaman Pemanis dan Serat, dan Pemerintah Kabupaten Temanggung'),
('DSV0008', 'ATR0002', 'Varietas lokal Prancak dari Desa Prancak, Kec. Pasongsongan Kab. Sumenep'),
('DSV0008', 'ATR0059', 'Nicotiana tabacum L.'),
('DSV0008', 'ATR0008', 'Piramid'),
('DSV0008', 'ATR0068', '57 - 67 cm'),
('DSV0008', 'ATR0056', 'Sama panjang, agak rapat'),
('DSV0008', 'ATR0082', 'Hijau muda, berbulu dan mengkilap'),
('DSV0008', 'ATR0020', '12 - 18 lembar'),
('DSV0008', 'ATR0060', 'Lancip, sekitar 60 derajat'),
('DSV0008', 'ATR0050', '3/8, putar kekanan'),
('DSV0008', 'ATR0061', 'Duduk, tidak bertangkai'),
('DSV0008', 'ATR0030', 'Sedang'),
('DSV0008', 'ATR0064', 'Pendek, lebar, tidak memeluk batang'),
('DSV0008', 'ATR0007', 'Bulat telur, indeks daun 0,58 - 0,62, ujung runcing, permukaan datar agak bendul, berbulu dan bergetah (gum), dan tepi daun halus'),
('DSV0008', 'ATR0079', 'berbunga, 54 - 74 hari, panen 84 - 104 hari'),
('DSV0008', 'ATR0086', 'Merah muda sampai merah'),
('DSV0008', 'ATR0085', 'Krem'),
('DSV0008', 'ATR0005', 'Bulat telur'),
('DSV0008', 'ATR0083', 'Coklat.'),
('DSV0008', 'ATR0054', '0,630 - 1,490 ton'),
('DSV0008', 'ATR0036', '54,07 - 97,03'),
('DSV0008', 'ATR0022', '0,59 - 2,41'),
('DSV0008', 'ATR0026', 'Tahan terhadap penyakit lanas, tidak tahan terhadap virus mosaik tembakau (TMV)'),
('DSV0008', 'ATR0025', 'Tidak tahan terhadap hama pengisap daun (Aphis sp), hama Heliotis spp, dan hama Spodotera sp'),
('DSV0008', 'ATR0027', 'Sesuai pada iklim C&D (Schmidt Ferguson, 1951), kemarau > 4 bulan, tegas, lahan kering'),
('DSV0008', 'ATR0047', 'Suwarso, A.Rachman SK, Anik Herwati, Soerjono, Subiyakto, Bagus Hari Adi'),
('DSV0009', 'ATR0002', 'Persilangan / Sindoro 1 x Coker 51'),
('DSV0009', 'ATR0033', 'Back Cross 3 kali'),
('DSV0009', 'ATR0059', 'Nicotianae tabacum'),
('DSV0009', 'ATR0016', 'Silindris'),
('DSV0009', 'ATR0068', '134,77 - 149,57'),
('DSV0009', 'ATR0042', 'Rapat'),
('DSV0009', 'ATR0082', 'Hijau'),
('DSV0009', 'ATR0010', 'Berbulu'),
('DSV0009', 'ATR0020', '18,43 - 21,10'),
('DSV0009', 'ATR0060', 'Tegak'),
('DSV0009', 'ATR0074', 'Runcing'),
('DSV0009', 'ATR0065', 'Berombak'),
('DSV0009', 'ATR0049', 'Rata'),
('DSV0009', 'ATR0062', 'Tipis'),
('DSV0009', 'ATR0084', 'Hijau'),
('DSV0009', 'ATR0050', '2 per 5'),
('DSV0009', 'ATR0061', 'Duduk'),
('DSV0009', 'ATR0030', 'Sempit'),
('DSV0009', 'ATR0064', 'Lebar'),
('DSV0009', 'ATR0041', '47,52 - 51,77'),
('DSV0009', 'ATR0029', '22,32 - 25,95'),
('DSV0009', 'ATR0007', 'Lonjong'),
('DSV0009', 'ATR0035', '0,501 - 0,502'),
('DSV0009', 'ATR0077', '94,76 - 100,00'),
('DSV0009', 'ATR0086', 'Merah muda'),
('DSV0009', 'ATR0085', 'Krem'),
('DSV0009', 'ATR0005', 'Bulat Telur'),
('DSV0009', 'ATR0083', 'Coklat'),
('DSV0009', 'ATR0078', '120 - 140'),
('DSV0009', 'ATR0054', '0,704 ? 0,28 ton/ha'),
('DSV0009', 'ATR0036', '40,28 ? 5,42'),
('DSV0009', 'ATR0037', '28,38 ? 12,81'),
('DSV0009', 'ATR0022', '5,52 ? 3,46'),
('DSV0009', 'ATR0021', '2,96% (relatif sedang)'),
('DSV0009', 'ATR0026', ''),
('DSV0009', 'ATR0055', 'Tahan'),
('DSV0009', 'ATR0034', 'Tahan'),
('DSV0009', 'ATR0045', 'Abdul Rachman SK, Fatkhur Rochman, Gembong Dalmadyo, Suwarso, A.S. Murdiyati, dan Sesanti Basuki'),
('DSV0010', 'ATR0002', 'Persilangan / Sindoro 1 x Coker 51'),
('DSV0010', 'ATR0033', 'Back Cross 2 kali'),
('DSV0010', 'ATR0059', 'Nicotianae tabacum'),
('DSV0010', 'ATR0016', 'Silindris'),
('DSV0010', 'ATR0068', '148,77 - 164,43'),
('DSV0010', 'ATR0042', 'Rapat'),
('DSV0010', 'ATR0082', 'Hijau'),
('DSV0010', 'ATR0010', 'Berbulu'),
('DSV0010', 'ATR0020', '18,90 - 21,97'),
('DSV0010', 'ATR0060', 'Tegak'),
('DSV0010', 'ATR0074', 'Runcing'),
('DSV0010', 'ATR0065', 'Berombak'),
('DSV0010', 'ATR0049', 'Rata'),
('DSV0010', 'ATR0062', 'Tipis'),
('DSV0010', 'ATR0084', 'Hijau'),
('DSV0010', 'ATR0050', '3 per 6'),
('DSV0010', 'ATR0061', 'Duduk'),
('DSV0010', 'ATR0030', 'Lebar'),
('DSV0010', 'ATR0064', 'Lebar'),
('DSV0010', 'ATR0041', '37,57 - 49,15'),
('DSV0010', 'ATR0029', '20,99 - 24,96'),
('DSV0010', 'ATR0007', 'Lonjong'),
('DSV0010', 'ATR0035', '0,505 - 0,508'),
('DSV0010', 'ATR0077', '89,33 - 99,33'),
('DSV0010', 'ATR0086', 'Merah muda'),
('DSV0010', 'ATR0085', 'Krem'),
('DSV0010', 'ATR0005', 'Bulat Telur'),
('DSV0010', 'ATR0083', 'Coklat'),
('DSV0010', 'ATR0078', '119 - 139'),
('DSV0010', 'ATR0054', '0,695 ? 0,16 ton/ha'),
('DSV0010', 'ATR0036', '36,01 ? 7,01'),
('DSV0010', 'ATR0037', '25,50 ? 9,49'),
('DSV0010', 'ATR0022', '6,02 - 3,72 %'),
('DSV0010', 'ATR0021', '1,98 % (relatif sedang)'),
('DSV0010', 'ATR0026', ''),
('DSV0010', 'ATR0055', 'Sangat Tahan'),
('DSV0010', 'ATR0034', 'Tahan'),
('DSV0010', 'ATR0045', 'Fatkhur Rochman, Abdul Rachman SK, Gembong Dalmadyo, Suwarso AS, Murdiyati, dan Sri Yulaikah'),
('DSV0011', 'ATR0002', 'Prambanan / Yogyakarta'),
('DSV0011', 'ATR0059', 'Nicotianae tabacum Ll'),
('DSV0011', 'ATR0080', 'Bligon 1'),
('DSV0011', 'ATR0016', 'Kerucut'),
('DSV0011', 'ATR0068', '153 ? 9,45'),
('DSV0011', 'ATR0042', '2,5 cm / panjang bertambah'),
('DSV0011', 'ATR0082', 'Hijau'),
('DSV0011', 'ATR0010', 'Berbulu'),
('DSV0011', 'ATR0020', '32 - 35'),
('DSV0011', 'ATR0060', '40 ? 6,05 (tegak)'),
('DSV0011', 'ATR0041', '37 - 45 cm'),
('DSV0011', 'ATR0029', '21 - 25 cm'),
('DSV0011', 'ATR0007', 'Lonjong'),
('DSV0011', 'ATR0074', 'Meruncing'),
('DSV0011', 'ATR0065', 'Licin / rata'),
('DSV0011', 'ATR0049', 'Rata'),
('DSV0011', 'ATR0062', 'Tebal'),
('DSV0011', 'ATR0081', 'Hijau'),
('DSV0011', 'ATR0050', '2/5 putar ke kiri'),
('DSV0011', 'ATR0061', 'Duduk'),
('DSV0011', 'ATR0030', 'Sedang'),
('DSV0011', 'ATR0064', '2,6 cm (lebar)'),
('DSV0011', 'ATR0058', 'Ada kecil - sedang'),
('DSV0011', 'ATR0077', '70 - 74 hari'),
('DSV0011', 'ATR0086', 'Merah muda'),
('DSV0011', 'ATR0054', '1,2 - 1,4 ton/ha'),
('DSV0011', 'ATR0036', '84,35'),
('DSV0011', 'ATR0022', '2 - 3%'),
('DSV0011', 'ATR0012', 'Lahan sawah di Sleman dan Magelang'),
('DSV0011', 'ATR0045', 'Sesanti Basuki, Suwarso, Anik Herwati dan Sri Yulaikah'),
('DSV0012', 'ATR0002', 'Boyolali / Jawa Tengah'),
('DSV0012', 'ATR0059', 'Nicotianae tabacum'),
('DSV0012', 'ATR0080', 'Grompol Jatim IJ'),
('DSV0012', 'ATR0016', 'Kerucut'),
('DSV0012', 'ATR0068', '108 ? 11,01'),
('DSV0012', 'ATR0042', '2,5 cm , panjang bertambah'),
('DSV0012', 'ATR0082', 'Hijau'),
('DSV0012', 'ATR0010', 'Berbulu'),
('DSV0012', 'ATR0020', '30 - 36 lembar'),
('DSV0012', 'ATR0060', '65? ? 6,41 (tegak)'),
('DSV0012', 'ATR0041', '43 ? 3,90 cm'),
('DSV0012', 'ATR0029', '28 ? 5,71 cm'),
('DSV0012', 'ATR0035', '0,65 '),
('DSV0012', 'ATR0007', 'Lonjong'),
('DSV0012', 'ATR0074', 'Meruncing'),
('DSV0012', 'ATR0065', 'Licin'),
('DSV0012', 'ATR0049', 'Bergelombang'),
('DSV0012', 'ATR0062', 'Tebal'),
('DSV0012', 'ATR0084', 'Hijau tua'),
('DSV0012', 'ATR0050', '3/8 putar ke kiri'),
('DSV0012', 'ATR0061', 'Bertangkai'),
('DSV0012', 'ATR0030', 'Sempit dan bergelombang'),
('DSV0012', 'ATR0064', 'Lebar'),
('DSV0012', 'ATR0058', 'Tidak ada'),
('DSV0012', 'ATR0077', '85 ? 7,40 hari'),
('DSV0012', 'ATR0086', 'Merah muda'),
('DSV0012', 'ATR0054', '2,9 - 3,2 ton krosok/ha'),
('DSV0012', 'ATR0036', '78 - 84'),
('DSV0012', 'ATR0022', '3 - 4 %'),
('DSV0012', 'ATR0026', ''),
('DSV0012', 'ATR0073', 'Tahan'),
('DSV0012', 'ATR0011', 'Tahan'),
('DSV0012', 'ATR0012', 'Lahan sawah di Boyolali'),
('DSV0012', 'ATR0045', 'Sesanti Basuki, A. Rachman SK, Fatkhur Rochman dan A.S Murdiyati'),
('DSV0013', 'ATR0002', 'PTP 27 Jember'),
('DSV0013', 'ATR0033', 'Pengujian dari aksesi Plasma Nutfah'),
('DSV0013', 'ATR0059', 'Nicotianae tabacum'),
('DSV0013', 'ATR0080', 'Kasturi'),
('DSV0013', 'ATR0016', 'Kerucut'),
('DSV0013', 'ATR0068', '71,9 ? 8,7'),
('DSV0013', 'ATR0042', 'Rapat'),
('DSV0013', 'ATR0082', 'Hijau'),
('DSV0013', 'ATR0010', 'Berbulu'),
('DSV0013', 'ATR0020', '17,7 ? 1,33'),
('DSV0013', 'ATR0060', 'Tegak'),
('DSV0013', 'ATR0074', 'Meruncing'),
('DSV0013', 'ATR0065', 'Licin'),
('DSV0013', 'ATR0049', 'Rata'),
('DSV0013', 'ATR0062', 'Tebal'),
('DSV0013', 'ATR0084', 'Hijau'),
('DSV0013', 'ATR0050', '2/5 putar ke kiri'),
('DSV0013', 'ATR0061', 'Duduk'),
('DSV0013', 'ATR0030', 'Lebar licin (> 2,57)'),
('DSV0013', 'ATR0064', 'Lebar'),
('DSV0013', 'ATR0041', '52,38 ? 5,57'),
('DSV0013', 'ATR0029', '26,08 ? 3,58'),
('DSV0013', 'ATR0007', 'Lonjong'),
('DSV0013', 'ATR0035', '0,486'),
('DSV0013', 'ATR0077', '66 ? 2,30'),
('DSV0013', 'ATR0086', 'Merah muda'),
('DSV0013', 'ATR0085', 'Krem'),
('DSV0013', 'ATR0005', 'Bulat Telur'),
('DSV0013', 'ATR0083', 'Coklat'),
('DSV0013', 'ATR0078', '87 ? 1,13'),
('DSV0013', 'ATR0054', '1,75 ? 0,011'),
('DSV0013', 'ATR0036', '81,75 ? 0,98'),
('DSV0013', 'ATR0037', '140,35 ? 6,13'),
('DSV0013', 'ATR0022', '3,21% ? 0,08%'),
('DSV0013', 'ATR0045', 'Suwarso, Anik Herwati, Sesanti Basuki, Sri Yulaikah, dan Fatkhur Rochman'),
('DSV0014', 'ATR0002', 'Desa Ledok Ombo'),
('DSV0014', 'ATR0033', 'Pengujian dari aksesi Plasma Nutfah'),
('DSV0014', 'ATR0059', 'Nicotianae tabacum'),
('DSV0014', 'ATR0080', 'Kasturi'),
('DSV0014', 'ATR0016', 'Kerucut'),
('DSV0014', 'ATR0068', '74,5 ? 9'),
('DSV0014', 'ATR0042', 'Rapat'),
('DSV0014', 'ATR0082', 'Hijau'),
('DSV0014', 'ATR0010', 'Berbulu rapat'),
('DSV0014', 'ATR0020', '17,7 ? 1,33'),
('DSV0014', 'ATR0060', 'Tegak'),
('DSV0014', 'ATR0074', 'Meruncing'),
('DSV0014', 'ATR0065', 'Licin'),
('DSV0014', 'ATR0049', 'Rata'),
('DSV0014', 'ATR0062', 'Tebal'),
('DSV0014', 'ATR0084', 'Hijau'),
('DSV0014', 'ATR0050', '2/5 putar ke kiri'),
('DSV0014', 'ATR0061', 'Duduk'),
('DSV0014', 'ATR0030', 'Lebar licin (> 2,57)'),
('DSV0014', 'ATR0064', 'Lebar'),
('DSV0014', 'ATR0041', '51,68 ? 4,5'),
('DSV0014', 'ATR0029', '27,35 ? 2,2'),
('DSV0014', 'ATR0007', 'Lonjong'),
('DSV0014', 'ATR0035', '0,529'),
('DSV0014', 'ATR0077', '60,4 ? 1,6'),
('DSV0014', 'ATR0086', 'Merah muda'),
('DSV0014', 'ATR0085', 'Krem'),
('DSV0014', 'ATR0005', 'Bulat Telur'),
('DSV0014', 'ATR0083', 'Coklat'),
('DSV0014', 'ATR0078', '87 ? 2,98'),
('DSV0014', 'ATR0054', '1,77 ? 0,011'),
('DSV0014', 'ATR0036', '82,40 ? 1,03'),
('DSV0014', 'ATR0037', '144,23 ? 5,02'),
('DSV0014', 'ATR0022', '3,54% ? 0,04%'),
('DSV0014', 'ATR0045', 'Anik Herwati, Suwarso, Sesanti Basuki, Sri Yulaikah dan Fatkhur Rochman'),
('DSV0015', 'ATR0002', 'Desa Talun / Kec. Sumberejo / Bojonegoro'),
('DSV0015', 'ATR0033', 'Seleksi individu'),
('DSV0015', 'ATR0059', 'Nicotianae tabacum'),
('DSV0015', 'ATR0080', 'Virginia Rajangan'),
('DSV0015', 'ATR0016', 'Piramid'),
('DSV0015', 'ATR0068', '147,123 ? 2,13'),
('DSV0015', 'ATR0042', 'Rapat'),
('DSV0015', 'ATR0082', 'Hijau kekuningan'),
('DSV0015', 'ATR0010', 'Berbulu'),
('DSV0015', 'ATR0020', '27 ? 1,12'),
('DSV0015', 'ATR0060', 'Tegak '),
('DSV0015', 'ATR0074', 'Meruncing'),
('DSV0015', 'ATR0065', 'Berombak'),
('DSV0015', 'ATR0049', 'Berploi'),
('DSV0015', 'ATR0062', 'Tebal'),
('DSV0015', 'ATR0084', 'Hijau kekuningan'),
('DSV0015', 'ATR0050', '2/5 putar ke kiri'),
('DSV0015', 'ATR0061', 'Duduk'),
('DSV0015', 'ATR0030', 'Sempit berploi (<2,57)'),
('DSV0015', 'ATR0064', 'Sempit memeluk batang'),
('DSV0015', 'ATR0041', '62,23 ? 1,98'),
('DSV0015', 'ATR0029', '31,11 ? 2,00'),
('DSV0015', 'ATR0007', 'Lonjong'),
('DSV0015', 'ATR0035', '0,5'),
('DSV0015', 'ATR0077', '67 ? 2,87'),
('DSV0015', 'ATR0086', 'Merah muda'),
('DSV0015', 'ATR0085', 'Krem'),
('DSV0015', 'ATR0005', 'Bulat Telur'),
('DSV0015', 'ATR0083', 'Coklat'),
('DSV0015', 'ATR0078', '118 ? 1,89'),
('DSV0015', 'ATR0054', '1,61 ? 0,432'),
('DSV0015', 'ATR0036', '77,12 ? 3,986'),
('DSV0015', 'ATR0037', '91,01 ? 4,32'),
('DSV0015', 'ATR0022', '1,12 ? 0,032'),
('DSV0015', 'ATR0021', '15,54 ? 0,80'),
('DSV0015', 'ATR0026', ''),
('DSV0015', 'ATR0011', 'Moderat'),
('DSV0015', 'ATR0012', 'Sesuai untuk lahan sawah dan tegal di Bojonegoro'),
('DSV0015', 'ATR0045', 'Anik Herwati, Suwarso dan AS. Murdiyati'),
('DSV0016', 'ATR0002', 'Brazil (ProfilGen do Brasil Ltda)'),
('DSV0016', 'ATR0059', 'Nicotianae tabacum'),
('DSV0016', 'ATR0016', 'Piramid'),
('DSV0016', 'ATR0068', '146,57 ? 12,63'),
('DSV0016', 'ATR0082', 'Putih kehijauan'),
('DSV0016', 'ATR0010', 'Berbulu'),
('DSV0016', 'ATR0020', '19,12 ? 2,49'),
('DSV0016', 'ATR0060', 'Tegak'),
('DSV0016', 'ATR0074', 'Runcing'),
('DSV0016', 'ATR0065', 'Licin'),
('DSV0016', 'ATR0049', 'Rata'),
('DSV0016', 'ATR0062', 'Tipis'),
('DSV0016', 'ATR0084', 'Hijau keputihan'),
('DSV0016', 'ATR0050', '3 per 8'),
('DSV0016', 'ATR0061', 'Duduk'),
('DSV0016', 'ATR0030', 'Lebar'),
('DSV0016', 'ATR0064', 'Lebar'),
('DSV0016', 'ATR0041', '68,42 ? 5,39'),
('DSV0016', 'ATR0029', '36,78 ? 4,66'),
('DSV0016', 'ATR0007', 'Lonjong'),
('DSV0016', 'ATR0035', '0,537 ? 0,028'),
('DSV0016', 'ATR0077', '60,17 ? 1,94'),
('DSV0016', 'ATR0086', 'Merah muda'),
('DSV0016', 'ATR0085', 'Krem'),
('DSV0016', 'ATR0005', 'Bulat Telur'),
('DSV0016', 'ATR0083', 'Coklat'),
('DSV0016', 'ATR0054', '2,045 ? 0,075'),
('DSV0016', 'ATR0036', '65,46 ? 2,38'),
('DSV0016', 'ATR0037', '133,95 ? 8,66'),
('DSV0016', 'ATR0022', '2,39 - 2,42 %'),
('DSV0016', 'ATR0026', ''),
('DSV0016', 'ATR0055', 'Tahan'),
('DSV0016', 'ATR0051', 'Rentan'),
('DSV0016', 'ATR0034', 'Moderat tahan'),
('DSV0016', 'ATR0011', '-'),
('DSV0016', 'ATR0073', 'Rentan'),
('DSV0016', 'ATR0045', 'Fatkhur Rochman, A.S Murdiyati, Gembong Dalmadyo dan Suwarso'),
('DSV0017', 'ATR0002', 'Brazil (ProfilGen do Brasil Ltda)'),
('DSV0017', 'ATR0059', 'Nicotianae tabacum'),
('DSV0017', 'ATR0016', 'Piramid'),
('DSV0017', 'ATR0068', '158,21 ? 16,70'),
('DSV0017', 'ATR0082', 'Putih kehijauan'),
('DSV0017', 'ATR0010', 'Berbulu'),
('DSV0017', 'ATR0020', '22,33 ? 2,19'),
('DSV0017', 'ATR0060', 'Tegak'),
('DSV0017', 'ATR0074', 'Runcing'),
('DSV0017', 'ATR0065', 'Licin'),
('DSV0017', 'ATR0049', 'Berploi'),
('DSV0017', 'ATR0062', 'Tipis'),
('DSV0017', 'ATR0084', 'Hijau keputihan'),
('DSV0017', 'ATR0050', '3 per 8'),
('DSV0017', 'ATR0061', 'Duduk'),
('DSV0017', 'ATR0030', 'Lebar'),
('DSV0017', 'ATR0064', 'Lebar'),
('DSV0017', 'ATR0041', '69,70 ? 4,75'),
('DSV0017', 'ATR0029', '37,90 ? 3,81'),
('DSV0017', 'ATR0007', 'Lonjong'),
('DSV0017', 'ATR0035', '0,544 ? 0,031'),
('DSV0017', 'ATR0077', '63,67 ? 3,27'),
('DSV0017', 'ATR0086', 'Merah muda'),
('DSV0017', 'ATR0085', 'Krem'),
('DSV0017', 'ATR0005', 'Bulat telur'),
('DSV0017', 'ATR0083', 'Coklat'),
('DSV0017', 'ATR0054', '2,112 ? 0,193'),
('DSV0017', 'ATR0036', '66,70 ? 1,07'),
('DSV0017', 'ATR0037', '141,02 ? 14,59'),
('DSV0017', 'ATR0022', '1,69 - 2,69 %'),
('DSV0017', 'ATR0026', ''),
('DSV0017', 'ATR0055', 'Agak tahan'),
('DSV0017', 'ATR0051', 'Agak tahan'),
('DSV0017', 'ATR0034', '-'),
('DSV0017', 'ATR0073', 'Tahan'),
('DSV0017', 'ATR0009', 'Tahan'),
('DSV0017', 'ATR0015', 'Rentan'),
('DSV0017', 'ATR0045', 'Fatkhur Rochman, Gembong Dalmadyo, A.S. Murdiyati dan Suwarso'),
('DSV0018', 'ATR0002', 'Brazil (ProfilGen do Brasil Ltda)'),
('DSV0018', 'ATR0059', 'Nicotianae tabacum'),
('DSV0018', 'ATR0016', 'Piramid'),
('DSV0018', 'ATR0068', '151,82 ? 8,85'),
('DSV0018', 'ATR0082', 'Putih kehijauan'),
('DSV0018', 'ATR0010', 'Berbulu'),
('DSV0018', 'ATR0020', '20,67 ? 1,42'),
('DSV0018', 'ATR0060', 'Tegak'),
('DSV0018', 'ATR0074', 'Runcing'),
('DSV0018', 'ATR0065', 'Licin'),
('DSV0018', 'ATR0049', 'Rata'),
('DSV0018', 'ATR0062', 'Tipis'),
('DSV0018', 'ATR0084', 'Hijau keputihan'),
('DSV0018', 'ATR0050', '3 per 8'),
('DSV0018', 'ATR0061', 'Duduk'),
('DSV0018', 'ATR0030', 'Lebar'),
('DSV0018', 'ATR0064', 'Lebar'),
('DSV0018', 'ATR0041', '67,28 ? 4,14'),
('DSV0018', 'ATR0029', '37,03 ? 4,56'),
('DSV0018', 'ATR0007', 'Lonjong'),
('DSV0018', 'ATR0035', '0,544 ? 0,037'),
('DSV0018', 'ATR0077', '66,17 ? 3,37'),
('DSV0018', 'ATR0086', 'Merah muda'),
('DSV0018', 'ATR0085', 'Krem'),
('DSV0018', 'ATR0005', 'Bulat telur'),
('DSV0018', 'ATR0083', 'Coklat'),
('DSV0018', 'ATR0054', '1,24 ? 0,140'),
('DSV0018', 'ATR0036', '66,98 ? 0,63'),
('DSV0018', 'ATR0037', '157,25 ? 18,05'),
('DSV0018', 'ATR0022', '2,42 - 3,58 %'),
('DSV0018', 'ATR0026', ''),
('DSV0018', 'ATR0055', 'Rentan'),
('DSV0018', 'ATR0051', 'Agak tahan'),
('DSV0018', 'ATR0034', '-'),
('DSV0018', 'ATR0073', 'Tahan'),
('DSV0018', 'ATR0009', 'Agak tahan'),
('DSV0018', 'ATR0045', 'Fatkhur Rochman, Suwarso, A.S. Murdiyati dan Gembong Dalmadyo'),
('DSV0019', 'ATR0002', 'Varietas lokal dari desa Cangkring, diterima dari Dinas Perkebunan Dati II Sumenep'),
('DSV0019', 'ATR0059', 'Nicotianae tabacum'),
('DSV0019', 'ATR0008', 'Piramid'),
('DSV0019', 'ATR0068', '60 - 65 cm'),
('DSV0019', 'ATR0042', 'Makin ke atas makin rapat'),
('DSV0019', 'ATR0082', 'Hijau muda, berbulu dan mengkilap'),
('DSV0019', 'ATR0010', 'Berbulu dan bergetah'),
('DSV0019', 'ATR0020', '12 - 17 lembar'),
('DSV0019', 'ATR0060', 'lancip'),
('DSV0019', 'ATR0074', 'Runcing'),
('DSV0019', 'ATR0065', 'Agak berombak'),
('DSV0019', 'ATR0049', 'Datar agak berbendol'),
('DSV0019', 'ATR0050', '2/5 putar ke kanan'),
('DSV0019', 'ATR0061', 'Duduk, tidak bertangkai'),
('DSV0019', 'ATR0030', 'Sedang'),
('DSV0019', 'ATR0064', 'Pendek, lebar, tidak memeluk batang'),
('DSV0019', 'ATR0035', '0,54'),
('DSV0019', 'ATR0007', 'Lonjong'),
('DSV0019', 'ATR0077', '51 - 68 hari'),
('DSV0019', 'ATR0078', '81 - 98 hari'),
('DSV0019', 'ATR0086', 'Merah muda sampai merah'),
('DSV0019', 'ATR0085', 'Krem'),
('DSV0019', 'ATR0005', 'Bulat telur'),
('DSV0019', 'ATR0083', 'Coklat'),
('DSV0019', 'ATR0054', '0,505 - 0,930'),
('DSV0019', 'ATR0036', '52,59 - 95,55'),
('DSV0019', 'ATR0022', '1,73 - 3,32 %'),
('DSV0019', 'ATR0026', 'Tahan terhadap penyakit lanas, tidak tahan terhadap penyakit Tobacco Mosaic Virus (TMV)'),
('DSV0019', 'ATR0025', 'Tidak tahan terhadap hama pengisap daun, hama Heliotin spp, dan hama Spodoptera sp'),
('DSV0019', 'ATR0012', 'Ssesuai pada iklim C&D, kemarau 4 bulan, tegas, lahan kering, sawah'),
('DSV0019', 'ATR0045', 'Suwarso, A. Rachman S.K, Anik Herwati, Bagus Hari Adi,  Soerjono, Subiyakto'),
('DSV0020', 'ATR0002', 'Amerika Serikat'),
('DSV0020', 'ATR0059', 'Nicotianae tabacum'),
('DSV0020', 'ATR0080', 'Coker 176'),
('DSV0020', 'ATR0016', 'Piramid'),
('DSV0020', 'ATR0068', '111 ? 7,17'),
('DSV0020', 'ATR0042', '3,75 ? 0,77, panjang bertambah'),
('DSV0020', 'ATR0082', 'Hijau kekuningan'),
('DSV0020', 'ATR0010', 'Berbulu'),
('DSV0020', 'ATR0020', '31 ? 1,52 lembar'),
('DSV0020', 'ATR0060', 'Tegak'),
('DSV0020', 'ATR0074', 'Meruncing'),
('DSV0020', 'ATR0065', 'Licin'),
('DSV0020', 'ATR0049', 'Berploi'),
('DSV0020', 'ATR0062', 'Tebal'),
('DSV0020', 'ATR0084', 'Hijau kekuningan'),
('DSV0020', 'ATR0050', '3/15 putar ke kanan'),
('DSV0020', 'ATR0061', 'Duduk tidak bertangkai'),
('DSV0020', 'ATR0030', 'Lebar, licin'),
('DSV0020', 'ATR0064', 'Lebar, memeluk batang'),
('DSV0020', 'ATR0041', '45 ? 3,96'),
('DSV0020', 'ATR0029', '30 ? 4,89'),
('DSV0020', 'ATR0007', 'Lonjong, lebar meruncing'),
('DSV0020', 'ATR0035', '0,340'),
('DSV0020', 'ATR0077', '86 ? 2,06 hst'),
('DSV0020', 'ATR0086', 'Merah muda'),
('DSV0020', 'ATR0085', 'Krem'),
('DSV0020', 'ATR0005', 'Bulat telur'),
('DSV0020', 'ATR0083', 'Coklat'),
('DSV0020', 'ATR0054', '1,13 - 1,83 ton/ha'),
('DSV0020', 'ATR0036', '64,13 - 68,73'),
('DSV0020', 'ATR0022', '-'),
('DSV0020', 'ATR0037', '79,63 - 154,94'),
('DSV0020', 'ATR0026', ''),
('DSV0020', 'ATR0051', 'Rentan'),
('DSV0020', 'ATR0055', 'Moderat'),
('DSV0020', 'ATR0034', 'Tahan'),
('DSV0020', 'ATR0073', 'Tahan'),
('DSV0020', 'ATR0045', 'Anik Herwati, Suwarso dan A.S. Murdiyati'),
('DSV0021', 'ATR0002', 'Amerika Serikat'),
('DSV0021', 'ATR0059', 'Nicotianae tabacum'),
('DSV0021', 'ATR0080', 'Dixie Bright 101'),
('DSV0021', 'ATR0016', 'Piramid'),
('DSV0021', 'ATR0068', '172 ? 7,04'),
('DSV0021', 'ATR0042', '4,3 - 4,5 panjang bertambah'),
('DSV0021', 'ATR0082', 'Hijau kekuningan'),
('DSV0021', 'ATR0010', 'Berbulu'),
('DSV0021', 'ATR0020', '29 - 35 lembar'),
('DSV0021', 'ATR0060', 'Tegak'),
('DSV0021', 'ATR0074', 'Meruncing'),
('DSV0021', 'ATR0065', 'Bergerigi'),
('DSV0021', 'ATR0049', 'Berbendol'),
('DSV0021', 'ATR0062', 'Tebal'),
('DSV0021', 'ATR0084', 'Hijau kekuningan'),
('DSV0021', 'ATR0050', '3/8 putar ke kanan'),
('DSV0021', 'ATR0061', 'Duduk tidak bertangkai'),
('DSV0021', 'ATR0030', 'Sempit, berploi'),
('DSV0021', 'ATR0064', 'Sempit, memeluk batang'),
('DSV0021', 'ATR0041', '47 ? 2,56'),
('DSV0021', 'ATR0029', '28 ? 2,46'),
('DSV0021', 'ATR0007', 'Lonjong, lebar meruncing'),
('DSV0021', 'ATR0035', '0,340'),
('DSV0021', 'ATR0077', '72 ? 2,27'),
('DSV0021', 'ATR0086', 'Merah muda'),
('DSV0021', 'ATR0085', 'Krem'),
('DSV0021', 'ATR0005', 'Bulat telur'),
('DSV0021', 'ATR0083', 'Coklat'),
('DSV0021', 'ATR0054', '1,41 - 2,22'),
('DSV0021', 'ATR0036', '65,4 74,9'),
('DSV0021', 'ATR0022', '1,83 - 1,96'),
('DSV0021', 'ATR0026', ''),
('DSV0021', 'ATR0051', 'Tahan'),
('DSV0021', 'ATR0055', 'Tahan'),
('DSV0021', 'ATR0034', 'Tahan'),
('DSV0021', 'ATR0073', 'Tahan'),
('DSV0021', 'ATR0045', 'Suwarso, Anik Herwati dan A.S Murdiyati'),
('DSV0022', 'ATR0002', 'PT.Sadhana Bondowoso, Jawa Timur'),
('DSV0022', 'ATR0059', 'Nicotianae tabacum'),
('DSV0022', 'ATR0016', 'Kerucut'),
('DSV0022', 'ATR0068', '146 ? 27'),
('DSV0022', 'ATR0042', 'Panjang berganti'),
('DSV0022', 'ATR0082', 'Hijau kekuningan'),
('DSV0022', 'ATR0020', '24,9 ? 3,9'),
('DSV0022', 'ATR0060', 'Tegak'),
('DSV0022', 'ATR0074', 'Runcing'),
('DSV0022', 'ATR0065', 'Licin'),
('DSV0022', 'ATR0049', 'Rata'),
('DSV0022', 'ATR0062', 'Tebal'),
('DSV0022', 'ATR0084', 'Hijau kekuningan'),
('DSV0022', 'ATR0050', '3/8 ki'),
('DSV0022', 'ATR0061', 'Duduk'),
('DSV0022', 'ATR0030', 'Lebar'),
('DSV0022', 'ATR0064', 'Lebar'),
('DSV0022', 'ATR0041', '49,13 ? 6,5'),
('DSV0022', 'ATR0029', '24,1 ? 3,9'),
('DSV0022', 'ATR0007', 'Lonjong'),
('DSV0022', 'ATR0058', 'Tidak ada'),
('DSV0022', 'ATR0077', '81,85 ? 4,9'),
('DSV0022', 'ATR0086', 'Merah muda'),
('DSV0022', 'ATR0054', '0,94'),
('DSV0022', 'ATR0036', '70,73'),
('DSV0022', 'ATR0037', '65,70'),
('DSV0022', 'ATR0022', '1,9'),
('DSV0022', 'ATR0026', ''),
('DSV0022', 'ATR0051', 'Tahan'),
('DSV0022', 'ATR0014', 'Tahan'),
('DSV0022', 'ATR0055', 'Tahan'),
('DSV0022', 'ATR0087', 'Deep orange/ kuning sangat tua (cemerlang)'),
('DSV0022', 'ATR0001', 'Harum'),
('DSV0022', 'ATR0045', 'Sri Yulaikah, Ssuwarso, Surjadi, Bambang Heliyanto, Djajadi dan Titik Yuliyanti'),
('DSV0023', 'ATR0002', 'Desa Curahdami lahan tegal'),
('DSV0023', 'ATR0059', 'Nicotianae tabacum'),
('DSV0023', 'ATR0016', 'Kerucut'),
('DSV0023', 'ATR0068', '150,8 ? 27,6'),
('DSV0023', 'ATR0042', 'Panjang berganti'),
('DSV0023', 'ATR0082', 'Hijau kekuningan'),
('DSV0023', 'ATR0020', '22,5 ? 3'),
('DSV0023', 'ATR0060', 'Tegak'),
('DSV0023', 'ATR0074', 'Meruncing'),
('DSV0023', 'ATR0065', 'Beringgik'),
('DSV0023', 'ATR0049', 'Berbendol'),
('DSV0023', 'ATR0062', 'Tebal'),
('DSV0023', 'ATR0084', 'Hijau kekuningan'),
('DSV0023', 'ATR0050', '2/5 ka'),
('DSV0023', 'ATR0061', 'Duduk'),
('DSV0023', 'ATR0030', 'Lebar'),
('DSV0023', 'ATR0064', 'Lebar'),
('DSV0023', 'ATR0041', '45,7 ? 6'),
('DSV0023', 'ATR0029', '24,5 ? 4,8'),
('DSV0023', 'ATR0007', 'Lonjong'),
('DSV0023', 'ATR0058', 'Ttidak ada'),
('DSV0023', 'ATR0077', '80,9 ? 4,1'),
('DSV0023', 'ATR0086', 'Merah muda'),
('DSV0023', 'ATR0054', '0,73'),
('DSV0023', 'ATR0036', '71,88'),
('DSV0023', 'ATR0037', '52,49'),
('DSV0023', 'ATR0022', '1,89'),
('DSV0023', 'ATR0026', ''),
('DSV0023', 'ATR0051', 'Tahan'),
('DSV0023', 'ATR0014', 'Sangat tahan'),
('DSV0023', 'ATR0055', 'Tahan'),
('DSV0023', 'ATR0087', 'Orange (kuning tua)'),
('DSV0023', 'ATR0001', 'Sangat harum'),
('DSV0023', 'ATR0045', 'Sri Yulaikah, Suwarso, Sukadji, Fatkhur Rochman, Anik Herwati dan Sesanti Basuki'),
('DSV0024', 'ATR0002', 'Varietas lokal dari petani Desa Sumber Centeng Kec. Kotaanyar Kab. Probolinggo Jawa Timur'),
('DSV0024', 'ATR0033', 'Pemurnian varietas lokal'),
('DSV0024', 'ATR0059', 'Nicotianae tabacum'),
('DSV0024', 'ATR0016', 'Silindris'),
('DSV0024', 'ATR0068', '130,6 ? 10,7'),
('DSV0024', 'ATR0042', 'Panjang bertambah'),
('DSV0024', 'ATR0082', 'Hijau kekuningan'),
('DSV0024', 'ATR0010', 'Berbulu'),
('DSV0024', 'ATR0020', '23,9 ? 1,5'),
('DSV0024', 'ATR0060', 'Datar'),
('DSV0024', 'ATR0074', 'Meruncing'),
('DSV0024', 'ATR0065', 'Berombak'),
('DSV0024', 'ATR0049', 'Rata'),
('DSV0024', 'ATR0062', 'Tebal'),
('DSV0024', 'ATR0084', 'Hijau agak kekuningan'),
('DSV0024', 'ATR0050', '2/5 ka'),
('DSV0024', 'ATR0061', 'Duduk'),
('DSV0024', 'ATR0030', 'Lebar licin'),
('DSV0024', 'ATR0064', 'Sangat lebar'),
('DSV0024', 'ATR0041', '56,4 ? 6,1'),
('DSV0024', 'ATR0029', '27,5 ? 3,1'),
('DSV0024', 'ATR0007', 'Lonjong-panjang'),
('DSV0024', 'ATR0035', '0,48 - 0,49'),
('DSV0024', 'ATR0077', '69,7 ? 2,1'),
('DSV0024', 'ATR0086', 'Merah muda'),
('DSV0024', 'ATR0085', 'Krem'),
('DSV0024', 'ATR0005', 'Bulat telur'),
('DSV0024', 'ATR0083', 'Coklat'),
('DSV0024', 'ATR0078', '89,6 ? 3,2'),
('DSV0024', 'ATR0054', '0,998 - 1,242'),
('DSV0024', 'ATR0036', '65,98 - 91,59'),
('DSV0024', 'ATR0037', '70,46 - 102,69'),
('DSV0024', 'ATR0022', '1,39 - 3,09'),
('DSV0024', 'ATR0021', '-'),
('DSV0024', 'ATR0026', ''),
('DSV0024', 'ATR0055', '-'),
('DSV0024', 'ATR0034', '-'),
('DSV0024', 'ATR0045', 'Fatkhur Rochman, Mahbub Zunaidi, Djajadi, Suwarso dan Sesanti Basuki'),
('DSV0025', 'ATR0002', 'Varietas lokal dari petani Desa Glagah Kec. Pakuniran Kab. Probolinggo Jawa Timur'),
('DSV0025', 'ATR0033', 'Pemurnian varietas lokal'),
('DSV0025', 'ATR0059', 'Nicotianae tabacum'),
('DSV0025', 'ATR0016', 'Kerucut'),
('DSV0025', 'ATR0068', '155,3 ? 22,5'),
('DSV0025', 'ATR0042', 'Panjang berganti'),
('DSV0025', 'ATR0082', 'Hijau kekuningan'),
('DSV0025', 'ATR0010', 'Berbulu'),
('DSV0025', 'ATR0020', '25,3 ? 2,2'),
('DSV0025', 'ATR0060', 'Tegak'),
('DSV0025', 'ATR0074', 'Runcing'),
('DSV0025', 'ATR0065', 'Beringgit'),
('DSV0025', 'ATR0049', 'Berbendol'),
('DSV0025', 'ATR0062', 'Tipis'),
('DSV0025', 'ATR0084', 'Hijau kekuningan'),
('DSV0025', 'ATR0050', '3/8 ki'),
('DSV0025', 'ATR0061', 'Duduk'),
('DSV0025', 'ATR0030', 'Lebar licin'),
('DSV0025', 'ATR0064', 'Lebar'),
('DSV0025', 'ATR0041', '48,1 ? 4,1'),
('DSV0025', 'ATR0029', '24,5 ? 1,9'),
('DSV0025', 'ATR0007', 'Lonjong'),
('DSV0025', 'ATR0035', '0,47 - 0,52'),
('DSV0025', 'ATR0077', '65,8 ? 5,1'),
('DSV0025', 'ATR0086', 'Merah muda'),
('DSV0025', 'ATR0085', 'Krem'),
('DSV0025', 'ATR0005', 'Bulat telur'),
('DSV0025', 'ATR0083', 'Coklat'),
('DSV0025', 'ATR0078', '86,3 ? 2,8'),
('DSV0025', 'ATR0054', '0,937 - 1,049'),
('DSV0025', 'ATR0036', '64,48 - 87,01'),
('DSV0025', 'ATR0037', '59,24 - 87,48'),
('DSV0025', 'ATR0022', '2,38 - 3,89'),
('DSV0025', 'ATR0021', '-'),
('DSV0025', 'ATR0026', ''),
('DSV0025', 'ATR0055', '-'),
('DSV0025', 'ATR0034', '-'),
('DSV0025', 'ATR0045', 'Fatkhur Rochman, Evi Roseliawati, Sri Yulaikah, A.S. Murdiyati, Titiek Yulianti dan Anik Herwati'),
('DSV0026', 'ATR0002', 'Persilangan T.Madura x Oriental (Prancak 95 x Ismir)'),
('DSV0026', 'ATR0059', 'Nicotianae tabacum L'),
('DSV0026', 'ATR0016', 'Kerucut'),
('DSV0026', 'ATR0068', '46,7 ? 8,98'),
('DSV0026', 'ATR0042', '5,8'),
('DSV0026', 'ATR0082', 'Hijau muda'),
('DSV0026', 'ATR0010', 'Halus agak rapat'),
('DSV0026', 'ATR0020', '13,01 ? 1,88'),
('DSV0026', 'ATR0060', 'Tegak'),
('DSV0026', 'ATR0074', 'Runcing'),
('DSV0026', 'ATR0065', 'Agak bergelombang'),
('DSV0026', 'ATR0049', 'Rata, halus'),
('DSV0026', 'ATR0062', 'Sedang'),
('DSV0026', 'ATR0084', 'Hijau muda'),
('DSV0026', 'ATR0050', '3/8 putar ke kiri'),
('DSV0026', 'ATR0061', 'Duduk, tidak bertangkai'),
('DSV0026', 'ATR0030', 'Lebar'),
('DSV0026', 'ATR0064', 'Lebar, tidak memeluk batang'),
('DSV0026', 'ATR0041', '31,2 ? 4,03'),
('DSV0026', 'ATR0029', '16,0 ? 2,02'),
('DSV0026', 'ATR0007', 'Bulat telur (Ovatus)'),
('DSV0026', 'ATR0035', '0,513'),
('DSV0026', 'ATR0077', '57,56 ? 2,63'),
('DSV0026', 'ATR0086', 'Merah muda'),
('DSV0026', 'ATR0085', 'Hijau muda'),
('DSV0026', 'ATR0005', 'Bulat telur'),
('DSV0026', 'ATR0083', 'Coklat'),
('DSV0026', 'ATR0054', '0,892 ? 0,227'),
('DSV0026', 'ATR0036', '62,45 ? 11,14'),
('DSV0026', 'ATR0022', '1,76 ? 0,38'),
('DSV0026', 'ATR0037', '60,07 ? 22,09'),
('DSV0026', 'ATR0026', ''),
('DSV0026', 'ATR0051', 'Moderat tahan'),
('DSV0026', 'ATR0045', 'Suwarso, Anik Herwati, A.S.Murdiyati, Cece Suhara, Joko Hartono'),
('DSV0027', 'ATR0002', 'Persilangan T.Madura x Oriental (Prancak 95 x Ismir)'),
('DSV0027', 'ATR0059', 'Nicotianae tabacum L'),
('DSV0027', 'ATR0016', 'Kerucut'),
('DSV0027', 'ATR0068', '42,50 ? 8,71'),
('DSV0027', 'ATR0042', '5,8'),
('DSV0027', 'ATR0082', 'Hijau muda'),
('DSV0027', 'ATR0010', 'Halus agak rapat'),
('DSV0027', 'ATR0020', '13,01 ? 1,88'),
('DSV0027', 'ATR0060', 'Tegak'),
('DSV0027', 'ATR0074', 'Runcing'),
('DSV0027', 'ATR0065', 'Agak bergelombang'),
('DSV0027', 'ATR0049', 'Rata, halus'),
('DSV0027', 'ATR0062', 'Sedang'),
('DSV0027', 'ATR0084', 'Hijau muda'),
('DSV0027', 'ATR0050', '3/8 putar ke kiri'),
('DSV0027', 'ATR0061', 'Duduk, tidak bertangkai'),
('DSV0027', 'ATR0030', 'Lebar'),
('DSV0027', 'ATR0064', 'Lebar, tidak memeluk batang'),
('DSV0027', 'ATR0041', '26,50 ? 0,95'),
('DSV0027', 'ATR0029', '15,40 ? 0,92'),
('DSV0027', 'ATR0007', 'Bulat telur (Ovatus)'),
('DSV0027', 'ATR0035', '0,581'),
('DSV0027', 'ATR0077', '55,89 ? 2,33'),
('DSV0027', 'ATR0086', 'Merah muda'),
('DSV0027', 'ATR0085', 'Hijau muda'),
('DSV0027', 'ATR0005', 'Bulat telur'),
('DSV0027', 'ATR0083', 'Coklat'),
('DSV0027', 'ATR0054', '0,789 ? 0,238'),
('DSV0027', 'ATR0036', '68,52 ? 9,33'),
('DSV0027', 'ATR0022', '2,00 ? 0,62'),
('DSV0027', 'ATR0037', '56,07 ? 19,00'),
('DSV0027', 'ATR0026', ''),
('DSV0027', 'ATR0051', 'Tahan'),
('DSV0027', 'ATR0045', 'Anik Herwati, Suwarso, A.S Murdiyati, Cece Suhara, Joko Hartono'),
('DSV0028', 'ATR0002', 'Genjah Kemloko (lokal)'),
('DSV0028', 'ATR0033', 'Seleksi individu'),
('DSV0028', 'ATR0059', 'Nicotianae tabacum'),
('DSV0028', 'ATR0016', 'Silindris'),
('DSV0028', 'ATR0068', '136,92 - 171,44'),
('DSV0028', 'ATR0042', 'Panjang berganti 5,57 - 7,49'),
('DSV0028', 'ATR0082', 'Hijau'),
('DSV0028', 'ATR0010', 'Berbulu'),
('DSV0028', 'ATR0020', '18 - 23'),
('DSV0028', 'ATR0060', 'Tegak'),
('DSV0028', 'ATR0074', 'Runcing'),
('DSV0028', 'ATR0065', 'Licin, menggulung (semua daun)'),
('DSV0028', 'ATR0049', 'Rata'),
('DSV0028', 'ATR0062', 'Tebal'),
('DSV0028', 'ATR0084', 'Hijau'),
('DSV0028', 'ATR0050', '3/8 putar ke kiri'),
('DSV0028', 'ATR0061', 'Duduk tidak bertangkai'),
('DSV0028', 'ATR0030', 'Sempit licin'),
('DSV0028', 'ATR0064', 'Lebar memluk batang'),
('DSV0028', 'ATR0041', '38,08 - 46,02'),
('DSV0028', 'ATR0029', '18,76 - 22,74'),
('DSV0028', 'ATR0007', 'Lonjong, memanjang'),
('DSV0028', 'ATR0035', '0,493'),
('DSV0028', 'ATR0077', '65,04 - 79,36'),
('DSV0028', 'ATR0086', 'Merah muda sampai merah'),
('DSV0028', 'ATR0085', 'Krem'),
('DSV0028', 'ATR0005', 'Bulat telur'),
('DSV0028', 'ATR0083', 'Coklat'),
('DSV0028', 'ATR0078', '95 - 120'),
('DSV0028', 'ATR0054', '0,74742 - 0,97088'),
('DSV0028', 'ATR0036', '43,52 - 52,26'),
('DSV0028', 'ATR0022', '3,39 - 8,21'),
('DSV0028', 'ATR0021', '2,33'),
('DSV0028', 'ATR0026', ''),
('DSV0028', 'ATR0034', 'Rentan'),
('DSV0028', 'ATR0055', 'Moderat tahan'),
('DSV0028', 'ATR0051', 'Sangat rentan'),
('DSV0028', 'ATR0045', 'Abdul Rachman SK, Fatkhur Rochman, Suwarso dan Sesanti Basuki'),
('DSV0029', 'ATR0002', 'Brasil (ProfiGen do Brasil Ltda)'),
('DSV0029', 'ATR0059', 'Nicotianae tabacum'),
('DSV0029', 'ATR0080', 'PVH 20 (Hibrida)'),
('DSV0029', 'ATR0016', 'Kerucut'),
('DSV0029', 'ATR0068', '121,1 ? 8,13'),
('DSV0029', 'ATR0042', 'Pendek bertambah'),
('DSV0029', 'ATR0082', 'Hijau kekuningan'),
('DSV0029', 'ATR0010', 'Berbulu'),
('DSV0029', 'ATR0020', '27,05 ? 1,41'),
('DSV0029', 'ATR0060', 'Tegak'),
('DSV0029', 'ATR0074', 'Runcing'),
('DSV0029', 'ATR0065', 'Licin'),
('DSV0029', 'ATR0049', 'Berploi'),
('DSV0029', 'ATR0062', 'Tebal'),
('DSV0029', 'ATR0084', 'Hijau kekuningan'),
('DSV0029', 'ATR0050', '3/8 putar ke kanan'),
('DSV0029', 'ATR0061', 'Duduk'),
('DSV0029', 'ATR0030', 'Lebar berploi (>2,57)'),
('DSV0029', 'ATR0064', 'Lebar (2,57 - 5,14)'),
('DSV0029', 'ATR0041', '66,1 ? 4,24'),
('DSV0029', 'ATR0029', '32,44 ? 1,65'),
('DSV0029', 'ATR0007', 'Lonjong'),
('DSV0029', 'ATR0077', '84,8 ? 1,30'),
('DSV0029', 'ATR0086', 'Merah muda'),
('DSV0029', 'ATR0085', 'Hijau (Male sterile)'),
('DSV0029', 'ATR0054', '1,47 ? 0,231'),
('DSV0029', 'ATR0036', '63,56 ? 4,321'),
('DSV0029', 'ATR0037', '93,37 ? 10,21'),
('DSV0029', 'ATR0026', ''),
('DSV0029', 'ATR0051', 'Tahan'),
('DSV0029', 'ATR0073', 'Tahan'),
('DSV0029', 'ATR0011', 'Moderat tahan'),
('DSV0029', 'ATR0055', 'Moderat tahan'),
('DSV0029', 'ATR0009', 'Rentan'),
('DSV0029', 'ATR0045', 'Bahrudin S, Poermini, Anik Herwati dan Fatkhur Rochman'),
('DSV0030', 'ATR0002', 'Brasil (ProfiGen do Brasil Ltda)'),
('DSV0030', 'ATR0059', 'Nicotianae tabacum'),
('DSV0030', 'ATR0080', 'PVH 21 (Hibrida)'),
('DSV0030', 'ATR0016', 'Kerucut'),
('DSV0030', 'ATR0068', '133,7 ? 6,39'),
('DSV0030', 'ATR0042', 'Pendek bertambah'),
('DSV0030', 'ATR0082', 'Hijau kekuningan'),
('DSV0030', 'ATR0010', 'Berbulu'),
('DSV0030', 'ATR0020', '23,8 ? 0,84'),
('DSV0030', 'ATR0060', 'Tegak'),
('DSV0030', 'ATR0074', 'Runcing'),
('DSV0030', 'ATR0065', 'Licin'),
('DSV0030', 'ATR0049', 'Berploi'),
('DSV0030', 'ATR0062', 'Tebal'),
('DSV0030', 'ATR0084', 'Hijau kekuningan'),
('DSV0030', 'ATR0050', '3/8 putar ke kiri'),
('DSV0030', 'ATR0061', 'Duduk'),
('DSV0030', 'ATR0030', 'Lebar berploi (>2,57)'),
('DSV0030', 'ATR0064', 'Lebar (2,57 - 5,14)'),
('DSV0030', 'ATR0041', '62,3 ? 3,63'),
('DSV0030', 'ATR0029', '31,96 ? 4,16'),
('DSV0030', 'ATR0007', 'Lonjong'),
('DSV0030', 'ATR0077', '84,8 ? 1,34'),
('DSV0030', 'ATR0086', 'Merah muda'),
('DSV0030', 'ATR0085', 'Hijau (Male sterile)'),
('DSV0030', 'ATR0054', '1,52 ? 0,451'),
('DSV0030', 'ATR0036', '65,90 ? 5,621'),
('DSV0030', 'ATR0037', '100,11 ? 9,324'),
('DSV0030', 'ATR0026', ''),
('DSV0030', 'ATR0051', 'Tahan'),
('DSV0030', 'ATR0073', 'Tahan'),
('DSV0030', 'ATR0011', 'Tahan'),
('DSV0030', 'ATR0055', 'Sangat rentan'),
('DSV0030', 'ATR0009', 'Moderat tahan'),
('DSV0030', 'ATR0045', 'Bahruddin S, Mei Yusri, Anik Herwati dan Fatkhur Rochman'),
('DSV0031', 'ATR0002', 'Sidoarjo');

-- --------------------------------------------------------

--
-- Table structure for table `gambar_leaflet`
--

CREATE TABLE `gambar_leaflet` (
  `id_leaflet` char(7) NOT NULL,
  `id_gambar` char(7) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar_leaflet`
--

INSERT INTO `gambar_leaflet` (`id_leaflet`, `id_gambar`, `file`) VALUES
('LFL0001', 'IMG0001', 'konservasilahantemanggung1.jpg'),
('LFL0001', 'IMG0002', 'konservasilahantemanggung2.jpg'),
('LFL0002', 'IMG0003', 'pemb temb.jpg'),
('LFL0002', 'IMG0004', 'pemb temb2.jpg'),
('LFL0003', 'IMG0005', 'penyakitkrupuk1.jpg'),
('LFL0003', 'IMG0006', 'penyakitkrupuk2.jpg'),
('LFL0004', 'IMG0007', 'penyakitlanas1.jpg'),
('LFL0004', 'IMG0008', 'penyakitlanas2.jpg'),
('LFL0005', 'IMG0009', 'penyakitlayubakteri1.jpg'),
('LFL0005', 'IMG0010', 'penyakitlayubakteri2.jpg'),
('LFL0006', 'IMG0011', 'penyakitlayufusarium1.jpg'),
('LFL0006', 'IMG0012', 'penyakitlayufusarium2.jpg'),
('LFL0007', 'IMG0013', 'prosesingtembakautemanggung1.jpg'),
('LFL0007', 'IMG0014', 'prosesingtembakautemanggung2.jpg'),
('LFL0008', 'IMG0015', 'temb madura.jpg'),
('LFL0008', 'IMG0016', 'temb madurai.jpg'),
('LFL0009', 'IMG0017', 'tembakausrintil1.jpg'),
('LFL0009', 'IMG0018', 'tembakausrintil2.jpg'),
('LFL0010', 'IMG0019', 'tembvirginia1.jpg'),
('LFL0010', 'IMG0020', 'tembvirginia2.jpg'),
('LFL0011', 'IMG0021', 'varietasunggultemanggung1.jpg'),
('LFL0011', 'IMG0022', 'varietasunggultemanggung2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `leaflet`
--

CREATE TABLE `leaflet` (
  `id_leaflet` char(7) NOT NULL,
  `nama_leaflet` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaflet`
--

INSERT INTO `leaflet` (`id_leaflet`, `nama_leaflet`) VALUES
('LFL0001', 'Konservasi lahan temanggung'),
('LFL0002', 'Pembibitan tembakau'),
('LFL0003', 'Penyakit kerupuk/keriting'),
('LFL0004', 'Penyakit lanas'),
('LFL0005', 'Penyakit layu bakteri'),
('LFL0006', 'Penyakit fusarium'),
('LFL0007', 'Prosesing tembakau temanggung'),
('LFL0008', 'Tembakau madura'),
('LFL0009', 'Tembakau srintil'),
('LFL0010', 'Tembakau virginia'),
('LFL0011', 'Varietas unggul temanggung');

--
-- Triggers `leaflet`
--
DELIMITER $$
CREATE TRIGGER `tr_id_leaflet` BEFORE INSERT ON `leaflet` FOR EACH ROW BEGIN
SET @hitung = CONVERT((RIGHT((SELECT id_leaflet FROM `leaflet` ORDER by id_leaflet DESC LIMIT 1), 4)), UNSIGNED) + 1;
if (@hitung > 1) THEN
if (@hitung < 10) THEN 
SET new.id_leaflet = concat('LFL000',@hitung);
ELSEIF (@hitung < 100) THEN
SET new.id_leaflet = concat('LFL00',@hitung);
ELSEIF (@hitung < 1000) THEN
SET new.id_leaflet = concat('LFL0',@hitung);
ELSE
SET new.id_leaflet = concat('LFL',@hitung);
END IF;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `teknologi_budidaya`
--

CREATE TABLE `teknologi_budidaya` (
  `id_teknologi_budidaya` char(7) NOT NULL,
  `jenis_teknologi_budidaya` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teknologi_budidaya`
--

INSERT INTO `teknologi_budidaya` (`id_teknologi_budidaya`, `jenis_teknologi_budidaya`, `deskripsi`) VALUES
('TBD0001', 'Penangkaran benih', ''),
('TBD0002', 'Pesemaian', ''),
('TBD0003', 'Pemupukan', ''),
('TBD0004', 'Pemupukan bebas chlor', ''),
('TBD0005', 'Pengendalian penyakit', ''),
('TBD0006', 'Pengendalian hama', ''),
('TBD0007', 'Panen dan pasca panen', ''),
('TBD0008', 'Kesesuaian lahan', ''),
('TBD0009', 'Budidaya tembakau cerutu', '');

--
-- Triggers `teknologi_budidaya`
--
DELIMITER $$
CREATE TRIGGER `tr_id_teknologi_budidaya` BEFORE INSERT ON `teknologi_budidaya` FOR EACH ROW BEGIN
SET @hitung = CONVERT((RIGHT((SELECT id_teknologi_budidaya FROM `teknologi_budidaya` ORDER by id_teknologi_budidaya DESC LIMIT 1), 4)), UNSIGNED) + 1;
if (@hitung > 1) THEN
if (@hitung < 10) THEN 
SET new.id_teknologi_budidaya = concat('TBD000',@hitung);
ELSEIF (@hitung < 100) THEN
SET new.id_teknologi_budidaya = concat('TBD00',@hitung);
ELSEIF (@hitung < 1000) THEN
SET new.id_teknologi_budidaya = concat('TBD0',@hitung);
ELSE
SET new.id_teknologi_budidaya = concat('TBD',@hitung);
END IF;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `varietas`
--

CREATE TABLE `varietas` (
  `id_varietas` char(5) NOT NULL,
  `nama_varietas` varchar(100) NOT NULL,
  `tanggal_diterbitkan` date DEFAULT NULL,
  `file_SK` varchar(255) DEFAULT NULL,
  `file_gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `varietas`
--

INSERT INTO `varietas` (`id_varietas`, `nama_varietas`, `tanggal_diterbitkan`, `file_SK`, `file_gambar`) VALUES
('V0001', 'Varietas NC 471', '2017-11-23', 'SK NC 471.pdf', 'Virginia Hibrida NC 471.jpg'),
('V0002', 'Varietas GL 26H', '2017-11-23', 'SK GL 26H.pdf', 'Virginia Hibrida GL 26 H.jpg'),
('V0003', 'Varietas GF 318', '2017-11-16', 'SK GF 318.pdf', 'Virginia Hibrida GF 318.jpg'),
('V0004', 'Varietas Gagang Rejeb Sidi', '2017-11-13', 'SK Gagang Sidi.pdf', 'Gagang Sidi.jpg'),
('V0005', 'Tembakau Temanggung Varietas Kemloko 6 Agribun', '2017-09-14', 'SK Kemloko 6 Agribun.pdf', 'Kemloko 6.jpg'),
('V0006', 'Tembakau Temanggung Varietas Kemloko 5 Agribun', '2017-09-14', 'SK Kemloko 5 Agribun.pdf', 'Kemloko 5.jpg'),
('V0007', 'Tembakau Temanggung Varietas Kemloko 4 Agribun', '2017-09-14', 'SK Kemloko 4 Agribun.pdf', 'Kemloko 4.jpg'),
('V0008', 'Tembakau Prancak-95', '2014-01-29', 'Tembakau - Prancak 95.pdf', 'prancak95a.jpeg'),
('V0009', 'Varietas Kemloko 2', '2014-01-29', 'Tembakau - Kemloko 2.pdf', 'kemloko 2.jpeg'),
('V0010', 'Varietas Kemloko 3', '2014-01-29', 'Tembakau - Kemloko 3.pdf', 'kemloko 3.jpeg'),
('V0011', 'Varietas Bligon 1', '2014-01-29', 'Tembakau - Bligon 1.pdf', 'bligon 1.jpeg'),
('V0012', 'Varietas Grompol Jatim 1', '2014-01-29', 'Tembakau - Grompol Jatim 1.pdf', 'grompol 1 jatim.jpeg'),
('V0013', 'Varietas Tembakau Kasturi 1', '2014-01-29', 'Tembakau - Kasturi 1.pdf', 'kasturi 1.jpeg'),
('V0014', 'Varietas Tembakau Kasturi 2', '2014-01-29', 'Tembakau - Kasturi 2.pdf', 'kasturi 2.jpeg'),
('V0015', 'Tembakau - Bojonegoro 1', '0000-00-00', 'Tembakau - Bojonegoro 1.pdf', ''),
('V0016', 'Tembakau - Burley HP 14 P', '0000-00-00', 'Tembakau - Burley HP 14 P.pdf', ''),
('V0017', 'Tembakau - Burley NC3', '0000-00-00', 'Tembakau - Burley NC3.pdf', ''),
('V0018', 'Tembakau - Burley TN 90', '0000-00-00', 'Tembakau - Burley TN 90.pdf', ''),
('V0019', 'Tembakau - Cangkring 95', '0000-00-00', 'Tembakau - Cangkring 95.pdf', ''),
('V0020', 'Tembakau - Coker 176', '0000-00-00', 'Tembakau - Coker 176.pdf', ''),
('V0021', 'Tembakau - Dixie Bright 101', '0000-00-00', 'Tembakau - Dixie Bright 101.pdf', ''),
('V0022', 'Tembakau - Maesan 1', '0000-00-00', 'Tembakau - Maesan 1.pdf', ''),
('V0023', 'Tembakau - Maesan 2', '0000-00-00', 'Tembakau - Maesan 2.pdf', ''),
('V0024', 'Tembakau - Paiton 1', '0000-00-00', 'Tembakau - Paiton 1.pdf', ''),
('V0025', 'Tembakau - Paiton 2', '0000-00-00', 'Tembakau - Paiton 2.pdf', ''),
('V0026', 'Tembakau - Prancak N1', '0000-00-00', 'Tembakau - Prancak N1.pdf', ''),
('V0027', 'Tembakau - Prancak N2', '0000-00-00', 'Tembakau - Prancak N2.pdf', ''),
('V0028', 'Tembakau - Sindoro 1', '0000-00-00', 'Tembakau - Sindoro 1.pdf', ''),
('V0029', 'Tembakau - Virginia PVH 20', '0000-00-00', 'Tembakau - Virginia PVH 20.pdf', ''),
('V0030', 'Tembakau - Virginia PVH 21', '0000-00-00', 'Tembakau - Virginia PVH 21.pdf', ''),
('V0031', 'Varietas Baru', '2016-06-22', 'Varietas Baru.pdf', 'VB.jpg');

--
-- Triggers `varietas`
--
DELIMITER $$
CREATE TRIGGER `tr_id_varietas` BEFORE INSERT ON `varietas` FOR EACH ROW BEGIN
SET @hitung = CONVERT((RIGHT((SELECT id_varietas FROM `varietas` ORDER by id_varietas DESC LIMIT 1), 4)), UNSIGNED) + 1;
if (@hitung > 1) THEN
if (@hitung < 10) THEN 
SET new.id_varietas = concat('V000',@hitung);
ELSEIF (@hitung < 100) THEN
SET new.id_varietas = concat('V00',@hitung);
ELSEIF (@hitung < 1000) THEN
SET new.id_varietas = concat('V0',@hitung);
ELSE
SET new.id_varietas = concat('V',@hitung);
END IF;
END IF;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atribut`
--
ALTER TABLE `atribut`
  ADD PRIMARY KEY (`id_atribut`);

--
-- Indexes for table `benih_varietas`
--
ALTER TABLE `benih_varietas`
  ADD PRIMARY KEY (`id_benih`),
  ADD KEY `id_varietas` (`id_varietas`);

--
-- Indexes for table `deskripsi_varietas`
--
ALTER TABLE `deskripsi_varietas`
  ADD PRIMARY KEY (`id_deskripsi_varietas`),
  ADD KEY `id_varietas` (`id_varietas`);

--
-- Indexes for table `detail_deskripsi`
--
ALTER TABLE `detail_deskripsi`
  ADD KEY `id_deskripsi_varietas` (`id_deskripsi_varietas`),
  ADD KEY `id_atribut` (`id_atribut`);

--
-- Indexes for table `gambar_leaflet`
--
ALTER TABLE `gambar_leaflet`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_leaflet` (`id_leaflet`);

--
-- Indexes for table `leaflet`
--
ALTER TABLE `leaflet`
  ADD PRIMARY KEY (`id_leaflet`);

--
-- Indexes for table `teknologi_budidaya`
--
ALTER TABLE `teknologi_budidaya`
  ADD PRIMARY KEY (`id_teknologi_budidaya`);

--
-- Indexes for table `varietas`
--
ALTER TABLE `varietas`
  ADD PRIMARY KEY (`id_varietas`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `benih_varietas`
--
ALTER TABLE `benih_varietas`
  ADD CONSTRAINT `benih_varietas_ibfk_1` FOREIGN KEY (`id_varietas`) REFERENCES `varietas` (`id_varietas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `deskripsi_varietas`
--
ALTER TABLE `deskripsi_varietas`
  ADD CONSTRAINT `deskripsi_varietas_ibfk_1` FOREIGN KEY (`id_varietas`) REFERENCES `varietas` (`id_varietas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_deskripsi`
--
ALTER TABLE `detail_deskripsi`
  ADD CONSTRAINT `detail_deskripsi_ibfk_1` FOREIGN KEY (`id_deskripsi_varietas`) REFERENCES `deskripsi_varietas` (`id_deskripsi_varietas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_deskripsi_ibfk_2` FOREIGN KEY (`id_atribut`) REFERENCES `atribut` (`id_atribut`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gambar_leaflet`
--
ALTER TABLE `gambar_leaflet`
  ADD CONSTRAINT `gambar_leaflet_ibfk_1` FOREIGN KEY (`id_leaflet`) REFERENCES `leaflet` (`id_leaflet`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
