-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2021 pada 11.14
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appdata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `noinduk` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `tempatlahir` varchar(255) NOT NULL,
  `tanggallahir` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `namabapak` varchar(255) NOT NULL,
  `namaibu` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `noinduk`, `nama`, `jeniskelamin`, `nisn`, `nik`, `tempatlahir`, `tanggallahir`, `kelas`, `program`, `namabapak`, `namaibu`, `alamat`, `gambar`) VALUES
(75, '202102008', 'Intan Aulia Permatasari', 'Perempuan', '1234-098-08', '5829909984', 'Sumenep', '2005-04-16', 'X', 'Bahasa', 'Ahmad Sudarso S,kom', 'Zahro Aulia M,pd', 'Kolpo, Batang-Batang, Sumenep.', '1607887642_e8a2902052e988bd54a0.png'),
(76, '202102007', 'Ahmad Munawwir', 'Laki-Laki', '1234-098-07', '5829909983', 'Sumenep', '2005-01-05', 'X', 'Bahasa', 'Nahrawi', 'Niwati', 'Gersik Putih, Gapura,  Sumenep.', '1607887654_bf55be09a94b7ab4ac9a.png'),
(77, '202102009', 'Susilo Widodo', 'Laki-Laki', '1234-098-09', '5829909985', 'Sumenep', '2004-10-08', 'XI', 'Bahasa', 'Sutrisno S,kom', 'Fauziyah  M,pd.', 'Gersik Putih, Gapura,  Sumenep.', '1607887669_c42edd1b7b24e54773c0.png'),
(78, '202102010', 'Andin Permatasari', 'Perempuan', '1234-098-10', '5829909986', 'Sumenep', '2004-07-09', 'XI', 'Bahasa', 'Suto Wibowo', 'Hosnawati', 'Kolpo, Batang-Batang, Sumenep.', '1607887681_aa670463eca5aefe6679.png'),
(79, '202102011', 'Jaka Agung Salam', 'Laki-Laki', '1234-098-11', '5829909987', 'Sumenep', '2003-05-18', 'XII', 'Bahasa', 'Herma Firmanto', 'Ferli Kusuma', 'Tobato, Manding, Sumenep.', '1607887694_cf3507126b8f17bc32ad.png'),
(80, '202102012', 'Fatimah Azzahro', 'Perempuan', '1234-098-12', '5829909988', 'Sumenep', '2003-05-23', 'XII', 'Bahasa', 'Agus Gunawan', 'Zini Hidayati', 'Gapura Barat, Gapura, Sumenep.', '1607887710_1b167963b6fa08b9edc0.png'),
(81, '202103013', ' Zaki Hermawan', 'Laki-Laki', '1234-098-13', '5829909989', 'Sumenep', '2005-10-22', 'X', 'IPA', 'Herman', 'Hoyyimah', 'Totosan, Batang-Batang, Sumenep.', '1607887735_3be6e6934727242bb76b.png'),
(82, '202103014', 'Ajeng Rismawati', 'Perempuan', '1234-098-14', '5829909990', 'Sumenep', '2005-02-23', 'X', 'IPA', 'Nawahri', 'Hidayatin', 'Lobuk, Bluto, Sumenep.', '1607887746_03211b186448d3de11d8.png'),
(83, '202103015', 'Moh. Riski Alansyah', 'Laki-Laki', '1234-098-15', '5829909991', 'Sumenep', '2004-11-24', 'XI', 'IPA', 'Sugeng Adi', 'Fatmawati', 'Gapura Timur, Gapura, Sumenep.', '1607887784_29811225a51bfa964590.png'),
(84, '202103016', 'Fifin Rini Putra', 'Perempuan', '1234-098-16', '5829909992', 'Sumenep', '2004-08-25', 'XI', 'IPA', 'Firman', 'Dawiyah', 'Andulang, Gapura, Sumenep.', '1607887795_206ed06025dd4f406d44.png'),
(85, '202103017', 'Riski Aditiya Pratama', 'Laki-Laki', '1234-098-17', '5829909993', 'Sumenep', '2002-03-26', 'XII', 'IPA', 'Gilang Adi', 'Massiyani', 'Kolor, Sumenep.', '1607887805_566d2b35d9c9e2a44cfd.png'),
(86, '202103018', 'Vilda Auriya', 'Perempuan', '1234-098-18', '5829909994', 'Sumenep', '2003-11-27', 'XII', 'IPA', 'Rosi Amin', 'Faizah', 'Pangarangan, Sumenep.', '1607887826_6972c328bbd0b3b4155a.png'),
(87, '202104019', 'Alan Maulana', 'Laki-Laki', '1234-098-19', '5829909995', 'Sumenep', '2005-11-19', 'X', 'IPS', 'Masnin', 'Masuhni', 'Bataal Barat, Manding, Sumenep.', '1607887844_6a37e2d71472576b7a21.png'),
(88, '202104020', 'Nita Agustina', 'Perempuan', '1234-098-20', '5829909996', 'Sumenep', '2005-09-22', 'X', 'IPS', 'Alfin', 'Alwa', 'Gersik Putih, Gapura,  Sumenep.', '1607887870_c3dd5a9111d05ead67b0.png'),
(89, '202104021', 'Farhan Timus', 'Laki-Laki', '1234-098-21', '5829909997', 'Sumenep', '2004-08-28', 'XI', 'IPS', 'H. Samsul', 'Yatun', 'Kolpo, Batang-Batang, Sumenep.', '1607887883_64b117700e9ca606db6c.png'),
(90, '202104022', 'Rina Afkarina Ayu Dewi', 'Perempuan', '1234-098-22', '5829909998', 'Sumenep', '2004-03-22', 'XI', 'IPS', 'H. Saleh', 'Siti Ramlah', 'Gapura Barat, Gapura, Sumenep.', '1607887895_eea128295b546c898c48.png'),
(91, '202104023', 'Arsya Rahman', 'Laki-Laki', '1234-098-23', '5829909999', 'Sumenep', '2003-09-19', 'XII', 'IPS', 'Abd. Waqit', 'Qomariyah', 'Totosan, Batang-Batang, Sumenep.', '1607887906_14da932af03f202d4926.png'),
(92, '202104024', 'Zizil Firda Aulia', 'Perempuan', '1234-098-24', '5829910000', 'Sumenep', '2003-02-07', 'XII', 'IPS', 'Surahwi', 'Duya', 'Lobuk, Bluto, Sumenep.', '1607887917_d0d54c1834e962ec9976.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `gambar`, `nama`, `username`, `password`, `role`) VALUES
(1, 'admin_mutawakkil.png', 'Mutawakkil Alallah', 'mutawakkil', '12345678', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
