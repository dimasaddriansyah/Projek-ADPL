-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2019 pada 15.24
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nidn` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `pangkat` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nidn`, `nip`, `nama`, `ttl`, `jenis_kelamin`, `pangkat`, `jabatan`, `alamat`, `no_hp`, `email`) VALUES
(1805009, 18050091, 'Dimas Addriansyah Pamungkas', 'Indramayu, 19 September 1999', 'Laki - Laki', 'Dosen', 'Dosen', 'Indramayu', '089888777666', 'dimasaddriansyah14@gmail.com'),
(1805010, 18050101, 'Faisal Basri', 'Indramayu, 17 Januari 2000', 'Laki - Laki', 'Dosen', 'Dosen', 'Indramayu', '089765345231', 'faisalbasri@gmail,com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `files`
--

CREATE TABLE `files` (
  `id_file` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `file_size` varchar(20) NOT NULL,
  `file` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `golongan`
--

CREATE TABLE `golongan` (
  `id_golongan` int(11) NOT NULL,
  `nominal` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `golongan`
--

INSERT INTO `golongan` (`id_golongan`, `nominal`) VALUES
(1, 500000),
(2, 1000000),
(3, 1500000),
(4, 2000000),
(5, 2500000),
(6, 3000000),
(7, 3500000),
(8, 4000000),
(9, 4500000),
(10, 5000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(3) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Teknik Informatika'),
(2, 'Teknik Mesin'),
(3, 'Teknik Pendingin dan Tata Udara'),
(4, 'Keperawatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'D3TI1A'),
(2, 'D3TI1B'),
(3, 'D3TI1C'),
(4, 'D3TI2A'),
(5, 'D3TI2B'),
(6, 'D3TI2C'),
(7, 'D3TI3A'),
(8, 'D3TI3B'),
(9, 'D3TI3C'),
(10, 'D4RPL1'),
(11, 'D4RPL2A'),
(12, 'D4RPL2B'),
(13, 'D4RPL3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_user`
--

CREATE TABLE `level_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level_user`
--

INSERT INTO `level_user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Abu Mushonip', 'abu', 'abu123', 'user'),
(2, 'Achmad Nur Fauzy', 'achmad ', 'achmad123', 'user'),
(3, 'Ade Irawan', 'ade', 'ade123', 'user'),
(4, 'Aldini Eka Putri', 'aldini', 'aldni123', 'user'),
(5, 'Andi Purnomo', 'andi', 'andi123', 'user'),
(6, 'Arif Muthohari', 'arif', 'arif123', 'user'),
(7, 'Ayunda Riyanti', 'ayunda', 'ayunda123', 'user'),
(8, 'Cahyati Indahsari Islamiah', 'cahyati', 'cahyati123', 'user'),
(9, 'Dimas Addriansyah Pamungkas', 'dimas', 'dimas123', 'user'),
(10, 'Faisal Basri', 'faisal', 'faisal123', 'user'),
(14, 'Esti Mulyani', 'admin', 'admin123', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `nama`, `id_kelas`, `id_jurusan`, `id_prodi`, `email`, `no_hp`, `alamat`) VALUES
(1805001, 'Abu Mushonip', 11, 1, 2, 'abumushonip@gmail.com', '089888777666', 'Anjatan'),
(1805002, 'Achmad Nur Fauzy', 11, 1, 2, 'achmadnurfauzy@gmail.com', '089888777669', 'Cirebon'),
(1805003, 'Ade Irawan', 11, 1, 2, 'adeirawan@gmail.com', '089543654765', 'Indramayu'),
(1805004, 'Aldini Eka Putri', 11, 1, 2, 'aldiniekaputri@gmail.com', '089765345231', 'Kuningan'),
(1805009, 'Dimas Addriansyah Pamungkas', 11, 1, 2, 'dimasaddriansyah14@gmail.com', '089514391356', 'Indaramayu'),
(1805010, 'Faisal Basri', 11, 1, 2, 'faisalbasri@gmail,com', '089778877', 'indramayu'),
(1805059, 'Zulfa Khoerul Marah', 12, 1, 2, 'zulfakhoerul00@gmail.com', '089514391357', 'Plumbon');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`) VALUES
(1, 'Teknik Informatika'),
(2, 'Rekayasa Perangkat Lunak'),
(3, 'Teknik Mesin'),
(4, 'Perancangan Manufaktur'),
(5, 'Teknik Pendingin dan Tata Udar'),
(6, 'Keperawatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rab`
--

CREATE TABLE `rab` (
  `id_rab` int(11) NOT NULL,
  `id_unit_kerja` int(11) NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `nama_file` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rab`
--

INSERT INTO `rab` (`id_rab`, `id_unit_kerja`, `tanggal_pelaksanaan`, `nama_file`) VALUES
(1, 1, '2019-12-11', 'lala.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`nama`, `email`, `pesan`) VALUES
('Dimas', '1805009', 'asddaada'),
('Mochammad Arief Rizaldy', '1805017', 'Hey'),
('Zulfa Khoerul Marah', '1805059', 'Lagi Lagi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sppd`
--

CREATE TABLE `sppd` (
  `id` int(3) NOT NULL,
  `nama_pejabat` varchar(50) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `biaya` varchar(50) NOT NULL,
  `maksud_perjalanan` text NOT NULL,
  `angkutan` varchar(50) NOT NULL,
  `berangkat` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `lama_perjalanan` varchar(50) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `nama_pengikut` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukt`
--

CREATE TABLE `ukt` (
  `id_ukt` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `file_size` varchar(50) NOT NULL,
  `file` varchar(225) NOT NULL,
  `nim` varchar(200) NOT NULL,
  `golongan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ukt`
--

INSERT INTO `ukt` (`id_ukt`, `tanggal`, `nama`, `tipe`, `file_size`, `file`, `nim`, `golongan`) VALUES
(15, '2019-12-16', 'Dimas Addriansyah Pamungkas', 'docx', '12175', 'files/Dimas Addriansyah Pamungkas.docx', '1805009', '3500000'),
(16, '2019-12-16', 'Faisal Basri', 'rar', '562680', 'files/Faisal Basri.rar', '1805010', '5000000'),
(19, '2019-12-16', 'Abu Mushonip', 'zip', '6649', 'files/Abu Mushonip.zip', '1805001', '3500000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit_kerja`
--

CREATE TABLE `unit_kerja` (
  `id_unit_kerja` int(11) NOT NULL,
  `nama_unit_kerja` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `unit_kerja`
--

INSERT INTO `unit_kerja` (`id_unit_kerja`, `nama_unit_kerja`) VALUES
(1, 'Himpunan Mahasiswa Teknik Informatika (HIMATIF)'),
(2, 'Himpunan Mahasiswa Mesin (HMM)'),
(3, 'Himpunan Mahasiswa Refrigrasi dan Tata Udara (HIMRA)'),
(4, 'Robotika Politeknik Indramayu (RPI)'),
(5, 'Forum Mahasiswa Bidikmisi (FORMADIKSI)'),
(6, 'Komunitas Pencinta Jurnalistik (KOPEN)'),
(7, 'Seni dan Budaya (SEBURA)');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nidn`);

--
-- Indeks untuk tabel `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id_file`);

--
-- Indeks untuk tabel `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `level_user`
--
ALTER TABLE `level_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`),
  ADD KEY `fk_jurusan` (`id_jurusan`),
  ADD KEY `fk_prodi` (`id_prodi`),
  ADD KEY `fk_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indeks untuk tabel `rab`
--
ALTER TABLE `rab`
  ADD PRIMARY KEY (`id_rab`),
  ADD KEY `fk_unit_kerja` (`id_unit_kerja`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sppd`
--
ALTER TABLE `sppd`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ukt`
--
ALTER TABLE `ukt`
  ADD PRIMARY KEY (`id_ukt`);

--
-- Indeks untuk tabel `unit_kerja`
--
ALTER TABLE `unit_kerja`
  ADD PRIMARY KEY (`id_unit_kerja`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `nidn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1805011;

--
-- AUTO_INCREMENT untuk tabel `files`
--
ALTER TABLE `files`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id_golongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `level_user`
--
ALTER TABLE `level_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `rab`
--
ALTER TABLE `rab`
  MODIFY `id_rab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ukt`
--
ALTER TABLE `ukt`
  MODIFY `id_ukt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `unit_kerja`
--
ALTER TABLE `unit_kerja`
  MODIFY `id_unit_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `fk_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `fk_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `fk_prodi` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`);

--
-- Ketidakleluasaan untuk tabel `rab`
--
ALTER TABLE `rab`
  ADD CONSTRAINT `fk_unit_kerja` FOREIGN KEY (`id_unit_kerja`) REFERENCES `unit_kerja` (`id_unit_kerja`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
