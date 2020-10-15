-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Feb 2020 pada 02.20
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sisfo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `kelas_mahasiswa` (
  `id_kmhs` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  PRIMARY KEY (`id_kmhs`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `kelas_mahasiswa`
--

INSERT INTO `kelas_mahasiswa` (`id_kmhs`, `id_kelas`, `id_mahasiswa`) VALUES
(7, 3, 3),
(8, 5, 1),
(9, 5, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_dosen`
--

CREATE TABLE IF NOT EXISTS `t_dosen` (
  `id_dosen` int(11) NOT NULL AUTO_INCREMENT,
  `nidn` varchar(20) NOT NULL,
  `nm_dosen` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(30) NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id_dosen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `t_dosen`
--

INSERT INTO `t_dosen` (`id_dosen`, `nidn`, `nm_dosen`, `gender`, `alamat`, `email`, `nohp`, `pendidikan_terakhir`, `foto`) VALUES
(2, '101030000', 'Rifqi', 'Laki-Laki', 'Cirebon', 'Crbb@gmail.com', '089100001', 'S2', ''),
(4, '101111153', 'Agus', 'Laki-Laki', 'Cirebon', 'dsssa@8mail.com', '08611111111', 'S3', 'a.jpg'),
(5, '2017100000', 'Lena Magdalena', 'Perempuan', 'Cirebon', 'lena.magdalena@cici.ac.id', '02122021000', 'S2', 'aa.jpg'),
(7, '2017109', 'Chairun Nas', 'Laki-Laki', 'Blok Selasa Desa Paniis Kecamatan Maja Kabupaten Majalengka', 'roni.pebriana12@gmail.com', '+628561244231', 'S2', 'HIMASI 001 (1).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jadwal`
--

CREATE TABLE IF NOT EXISTS `t_jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_mk` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam` varchar(30) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `t_jadwal`
--

INSERT INTO `t_jadwal` (`id_jadwal`, `id_kelas`, `id_dosen`, `id_mk`, `id_ruangan`, `hari`, `jam`) VALUES
(3, 3, 2, 3, 1, 'Senin', '07:30 - 9:30'),
(4, 4, 4, 3, 1, 'Rabu', '09:30 - 11:30'),
(5, 3, 2, 2, 1, 'Selasa', '12:30 - 14:30'),
(6, 5, 5, 4, 1, 'Kamis', '12:30 - 14:30'),
(7, 5, 4, 3, 1, 'Rabu', '14:30 - 16:30'),
(8, 3, 2, 5, 1, 'Senin', '09:30 - 11:30'),
(9, 5, 2, 5, 1, 'Kamis', '07:30 - 9:30'),
(10, 3, 2, 4, 2, 'Kamis', '14:30 - 16:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kelas`
--

CREATE TABLE IF NOT EXISTS `t_kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `kd_kelas` varchar(10) NOT NULL,
  `nm_kelas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `semester` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `t_kelas`
--

INSERT INTO `t_kelas` (`id_kelas`, `kd_kelas`, `nm_kelas`, `jurusan`, `semester`) VALUES
(3, '01115', 'SIKA 2', 'S1 - Sistem Informasi', 'Semester 1'),
(4, '01116', 'SIKA 3', 'S1 - Sistem Informasi', 'Semester 1'),
(5, '01114', 'SIKA 1', 'S1 - Sistem Informasi', 'Semester 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `t_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT,
  `nim_mahasiswa` varchar(30) NOT NULL,
  `nm_mahasiswa` varchar(70) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(30) NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id_mahasiswa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `t_mahasiswa`
--

INSERT INTO `t_mahasiswa` (`id_mahasiswa`, `nim_mahasiswa`, `nm_mahasiswa`, `gender`, `alamat`, `email`, `nohp`, `foto`) VALUES
(1, '2017114002', 'Danang Haryuda Putra', 'Laki-Laki', 'Cirebon', 'roni.pebriana12@gmail.com', '09811111111', ''),
(3, '20171140023', 'Martin', 'Laki-Laki', 'Cirebon', 'mrtn@gmail.com', '0852111122233', ''),
(4, '20171140043', 'Roni Pebriana', 'Laki-Laki', 'Majalengka', 'roni.pebriana12@gmail.com', '089605853191', 'aaaa.png'),
(5, '2017114008', 'Sudrajat', 'Laki-Laki', 'Desa Paniis Kec. Maja Majalengka', 'roni.pebriana12@gmail.com', '089605853191', 'aaa.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_matakuliah`
--

CREATE TABLE IF NOT EXISTS `t_matakuliah` (
  `id_mk` int(11) NOT NULL AUTO_INCREMENT,
  `kd_mk` varchar(10) NOT NULL,
  `nm_mk` varchar(50) NOT NULL,
  `sks` varchar(5) NOT NULL,
  PRIMARY KEY (`id_mk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `t_matakuliah`
--

INSERT INTO `t_matakuliah` (`id_mk`, `kd_mk`, `nm_mk`, `sks`) VALUES
(2, 'MK02', 'Pemrograman Internet 2', '4'),
(3, 'MK03', 'Pemrograman Internet 3', '3'),
(4, 'MK04', 'Matematika Bisnis', '3'),
(5, 'MK05', 'Manajemen Proyek', '3'),
(6, 'MK06', 'Penjaskes', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_nilai`
--

CREATE TABLE IF NOT EXISTS `t_nilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `id_jadwal` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `n_uas` double NOT NULL,
  `n_uts` double NOT NULL,
  `n_quis` double NOT NULL,
  `n_sikap` double NOT NULL,
  `n_total` double NOT NULL,
  `grade` varchar(1) NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `t_nilai`
--

INSERT INTO `t_nilai` (`id_nilai`, `id_jadwal`, `id_kelas`, `id_mahasiswa`, `n_uas`, `n_uts`, `n_quis`, `n_sikap`, `n_total`, `grade`) VALUES
(7, 9, 5, 4, 80, 70, 80, 90, 3.2, 'B'),
(8, 5, 3, 3, 70, 70, 80, 80, 3, 'B'),
(9, 3, 3, 3, 70, 70, 80, 90, 3.1, 'B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_ruangan`
--

CREATE TABLE IF NOT EXISTS `t_ruangan` (
  `id_ruangan` int(11) NOT NULL AUTO_INCREMENT,
  `kd_ruangan` varchar(50) NOT NULL,
  `nm_ruangan` varchar(255) NOT NULL,
  `kapasitas` int(50) NOT NULL,
  PRIMARY KEY (`id_ruangan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `t_ruangan`
--

INSERT INTO `t_ruangan` (`id_ruangan`, `kd_ruangan`, `nm_ruangan`, `kapasitas`) VALUES
(1, 'R01', 'Ruangan 101', 28),
(2, 'R02', 'Ruangan 102', 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nm_user` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id_user`, `nm_user`, `username`, `password`, `status`) VALUES
(1, 'Roni Pebriana', 'admin', '12345', 'Administrator'),
(6, 'Roni Pebriana', 'user', '12345', 'Mahasiswa'),
(8, 'Martin', '20171140023', '20171140023', 'Mahasiswa'),
(9, 'Rifqi', '101030000', '101030000', 'Dosen'),
(10, 'Agus', '101111153', '101111153', 'Dosen'),
(11, 'Roni Pebriana', '20171140043', '20171140043', 'Mahasiswa'),
(12, 'Danang Haryuda Putra', '2017114002', '2017114002', 'Mahasiswa'),
(13, 'Sudrajat', '2017114008', '2017114008', 'Mahasiswa'),
(14, 'Chairun Nas', '2017109', '2017109', 'Dosen');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
