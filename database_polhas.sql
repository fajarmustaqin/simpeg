-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2022 pada 17.15
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_polhas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `nama_profil` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `bidang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `nama_profil`, `alamat`, `bidang`) VALUES
(1, 'Politeknik Hasnur', 'Ray V, Jl. Brigjen H. hasan Basri, Handil Bakti, Kec. Alalak, Kabupaten Barito Kuala, Kalimantan Selatan 70582', 'Pendidikan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_absensi`
--

CREATE TABLE `tb_absensi` (
  `no` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jam_masuk` varchar(10) NOT NULL,
  `jam_pulang` varchar(10) NOT NULL,
  `ket` enum('Hadir','Sakit','Izin') NOT NULL,
  `ket_lainnya` text NOT NULL,
  `status` enum('menunggu persetujuan','disetujui','ditolak') NOT NULL,
  `nrp_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_absensi`
--

INSERT INTO `tb_absensi` (`no`, `tgl_masuk`, `jam_masuk`, `jam_pulang`, `ket`, `ket_lainnya`, `status`, `nrp_id`) VALUES
(22, '2022-07-04', '08:00', '17:00', 'Hadir', 'absen manual', 'menunggu persetujuan', '1758539');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_doc`
--

CREATE TABLE `tb_doc` (
  `no` int(11) NOT NULL,
  `ktp` varchar(500) NOT NULL,
  `kk` varchar(500) DEFAULT NULL,
  `akte` varchar(500) DEFAULT NULL,
  `buku_nikah` varchar(500) DEFAULT NULL,
  `sim_A` varchar(500) DEFAULT NULL,
  `sim_C` varchar(500) DEFAULT NULL,
  `npwp` varchar(500) DEFAULT NULL,
  `pasport` varchar(500) DEFAULT NULL,
  `bpjs_kes` varchar(500) DEFAULT NULL,
  `bpjs_kerja` varchar(500) DEFAULT NULL,
  `nrp_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_doc`
--

INSERT INTO `tb_doc` (`no`, `ktp`, `kk`, `akte`, `buku_nikah`, `sim_A`, `sim_C`, `npwp`, `pasport`, `bpjs_kes`, `bpjs_kerja`, `nrp_id`) VALUES
(1, '05TPLP014.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1758539'),
(2, '6309060203940002-Tesdiq-KTP - Tesdiq Kaloka.pdf', '6309060203940002-Tesdiq-KK - Tesdiq Kaloka.pdf', '6309060203940002-Tesdiq-AkteLahir - Tesdiq Kaloka.pdf', '6309060203940002-Tesdiq-Ijasah_Transkrip - Tesdiq Kaloka.pdf', '6309060203940002-Tesdiq-Ijasah_Transkrip - Tesdiq Kaloka.pdf', '6309060203940002-Tesdiq-Ijasah_Transkrip - Tesdiq Kaloka.pdf', '6309060203940002-Tesdiq-KTP - Tesdiq Kaloka.pdf', '6309060203940002-Tesdiq-KK - Tesdiq Kaloka.pdf', '6309060203940002-Tesdiq-Kesehatan - Tesdiq Kaloka.pdf', '6309060203940002-Tesdiq-Kesehatan - Tesdiq Kaloka.pdf', '200203');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_identitas`
--

CREATE TABLE `tb_identitas` (
  `nrp` varchar(30) NOT NULL,
  `nama_lengkap` varchar(35) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `jenis_pegawai` enum('Tenaga Pendidik','Tenaga Kependidikan') NOT NULL,
  `foto_pgw` varchar(500) DEFAULT NULL,
  `nidn` varchar(25) DEFAULT NULL,
  `tgl_bergabung` varchar(11) NOT NULL,
  `status_karyawan` enum('THL','SPK','Kontrak','Tetap') NOT NULL,
  `jabatan` text NOT NULL,
  `jenis_kel` enum('Laki-Laki','Perempuan') NOT NULL,
  `temp_lahir` varchar(25) NOT NULL,
  `tgl_lahir` varchar(11) NOT NULL,
  `alamat_domisili` text NOT NULL,
  `alamat_ktp` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `agama` enum('Islam','Katolik','Protestan','Buddha','Hindu','Konghuchu','Lainnya') NOT NULL,
  `kebangsaan` enum('WNI','WNA') NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_identitas`
--

INSERT INTO `tb_identitas` (`nrp`, `nama_lengkap`, `nik`, `jenis_pegawai`, `foto_pgw`, `nidn`, `tgl_bergabung`, `status_karyawan`, `jabatan`, `jenis_kel`, `temp_lahir`, `tgl_lahir`, `alamat_domisili`, `alamat_ktp`, `no_hp`, `telp`, `agama`, `kebangsaan`, `email`) VALUES
('1758539', 'fajar mustaqin', '1502022401010001', 'Tenaga Kependidikan', 'IMG_0212.JPG', '', '2022-02-14', 'Kontrak', 'programmer', 'Laki-Laki', 'bangko', '', 'perumahan puri arwanis																																																																																																																																																																																																															', 'waskita karya, merangin jambi', '082285152593', '445346', 'Islam', 'WNI', 'fajar.mustaqin01@gmail.com'),
('200203', 'Tesdiq Prigel Kaloka', '', 'Tenaga Pendidik', 'tesdiq.png', '27', '2019-02-01', 'Tetap', 'Kaprodi TI', 'Laki-Laki', 'Murung Pudak', '', 'Komplek Wengga Palam I Blok C No. 34 Kel. Guntung Manggis Kec. Landasan Ulin Kota Banjarbaru																																										', 'Jl. Garuda II No. 13 Kel. Bangun Sari, Kec. Murung Pudak, Kab. Tabalong', '08777622783', '', 'Islam', 'WNI', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_info_fisik`
--

CREATE TABLE `tb_info_fisik` (
  `no` int(11) NOT NULL,
  `TB` int(11) DEFAULT NULL,
  `BB` int(11) DEFAULT NULL,
  `gol_darah` varchar(2) DEFAULT NULL,
  `ukuran_pakaian` enum('S','M','L','XL','XXL') DEFAULT NULL,
  `ukuran_sepatu` int(11) DEFAULT NULL,
  `nrp_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_info_fisik`
--

INSERT INTO `tb_info_fisik` (`no`, `TB`, `BB`, `gol_darah`, `ukuran_pakaian`, `ukuran_sepatu`, `nrp_id`) VALUES
(16, 0, 0, '', '', 0, '200203'),
(17, NULL, NULL, NULL, 'XL', NULL, '1758539');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kontak_darurat`
--

CREATE TABLE `tb_kontak_darurat` (
  `no` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `hubungan` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(15) NOT NULL,
  `nrp_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kontak_darurat`
--

INSERT INTO `tb_kontak_darurat` (`no`, `nama`, `hubungan`, `alamat`, `hp`, `nrp_id`) VALUES
(9, '', '', '', '', '200203'),
(10, '', '', '', '', '1758539');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_organisasi_pegawai`
--

CREATE TABLE `tb_organisasi_pegawai` (
  `no` int(11) NOT NULL,
  `nama_organisasi` varchar(30) DEFAULT NULL,
  `jenis` varchar(30) DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  `thn` varchar(4) DEFAULT NULL,
  `nrp_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_organisasi_pegawai`
--

INSERT INTO `tb_organisasi_pegawai` (`no`, `nama_organisasi`, `jenis`, `jabatan`, `thn`, `nrp_id`) VALUES
(16, '', '', '', '', '200203'),
(18, NULL, NULL, NULL, NULL, '1758539');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendidikan`
--

CREATE TABLE `tb_pendidikan` (
  `no` int(11) NOT NULL,
  `no_ijazah_akhr` varchar(40) NOT NULL,
  `jenjang_akhr` enum('SD','SLTP','SLTA','D3','D4','S1','S2','S3') NOT NULL,
  `nama_sekolah_univ` varchar(50) NOT NULL,
  `kota_perguruan` varchar(30) NOT NULL,
  `fakultas` varchar(20) DEFAULT NULL,
  `jurusan` varchar(25) DEFAULT NULL,
  `tahun_lulus` varchar(4) NOT NULL,
  `nrp_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pendidikan`
--

INSERT INTO `tb_pendidikan` (`no`, `no_ijazah_akhr`, `jenjang_akhr`, `nama_sekolah_univ`, `kota_perguruan`, `fakultas`, `jurusan`, `tahun_lulus`, `nrp_id`) VALUES
(9, '', 'S2', '', '', '', '', '', '200203'),
(10, '', 'S1', '', '', NULL, NULL, '', '1758539');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `nrp_id` varchar(30) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` enum('Administrator','Pegawai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`nrp_id`, `nama_pengguna`, `username`, `password`, `level`) VALUES
('1758539', 'administrator', 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
('1758539', 'fajar mustaqin', 'fajar', 'dd12627d9394835d4c4f824c08bdb38b', 'Pegawai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekening_pegawai`
--

CREATE TABLE `tb_rekening_pegawai` (
  `no` int(11) NOT NULL,
  `no_rek` varchar(30) NOT NULL,
  `nama_bank` varchar(15) NOT NULL,
  `cabang_bank` varchar(20) NOT NULL,
  `atas_nama` varchar(25) NOT NULL,
  `nrp_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rekening_pegawai`
--

INSERT INTO `tb_rekening_pegawai` (`no`, `no_rek`, `nama_bank`, `cabang_bank`, `atas_nama`, `nrp_id`) VALUES
(9, '', '', '', '', '200203'),
(10, '33554230945', 'BRI', 'merangin', 'fajar mustaqin', '1758539');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_riwayat_pekerjaan`
--

CREATE TABLE `tb_riwayat_pekerjaan` (
  `no` int(11) NOT NULL,
  `nama_perusahaan` varchar(40) NOT NULL,
  `tahun_periode` varchar(4) DEFAULT NULL,
  `bidang_usaha` varchar(35) DEFAULT NULL,
  `jabatan_terakhir` varchar(25) DEFAULT NULL,
  `gaji_terakhir` varchar(40) DEFAULT NULL,
  `alasan_berhenti` text DEFAULT NULL,
  `nrp_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_riwayat_pekerjaan`
--

INSERT INTO `tb_riwayat_pekerjaan` (`no`, `nama_perusahaan`, `tahun_periode`, `bidang_usaha`, `jabatan_terakhir`, `gaji_terakhir`, `alasan_berhenti`, `nrp_id`) VALUES
(16, '', '', '', '', '', '', '200203'),
(17, '', NULL, NULL, NULL, NULL, NULL, '1758539');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_stts_keluarga`
--

CREATE TABLE `tb_stts_keluarga` (
  `no` int(11) NOT NULL,
  `stts_dikeluarga` enum('Suami','Istri','Anak') DEFAULT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `jenkel` enum('Laki-Laki','Perempuan','','') DEFAULT NULL,
  `tmp_lhir` varchar(20) DEFAULT NULL,
  `tgl_lhir` varchar(11) DEFAULT NULL,
  `pendidikan` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(20) DEFAULT NULL,
  `nrp_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_stts_keluarga`
--

INSERT INTO `tb_stts_keluarga` (`no`, `stts_dikeluarga`, `nama`, `jenkel`, `tmp_lhir`, `tgl_lhir`, `pendidikan`, `pekerjaan`, `nrp_id`) VALUES
(6, '', '', '', '', '', '', '', '200203'),
(7, 'Istri', 'fistara lesti rahmaputri', '', 'sidoarjo', '2000-12-28', 'S1', 'Paragon corp', '1758539'),
(8, 'Anak', 'anisa', '', 'bangko', '2022-12-07', 'SMP', '', '1758539');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_peg` (`nrp_id`);

--
-- Indeks untuk tabel `tb_doc`
--
ALTER TABLE `tb_doc`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_peg` (`nrp_id`);

--
-- Indeks untuk tabel `tb_identitas`
--
ALTER TABLE `tb_identitas`
  ADD PRIMARY KEY (`nrp`);

--
-- Indeks untuk tabel `tb_info_fisik`
--
ALTER TABLE `tb_info_fisik`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_peg` (`nrp_id`);

--
-- Indeks untuk tabel `tb_kontak_darurat`
--
ALTER TABLE `tb_kontak_darurat`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_peg` (`nrp_id`);

--
-- Indeks untuk tabel `tb_organisasi_pegawai`
--
ALTER TABLE `tb_organisasi_pegawai`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_peg` (`nrp_id`);

--
-- Indeks untuk tabel `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_peg` (`nrp_id`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`username`),
  ADD KEY `id_pegwai` (`nrp_id`);

--
-- Indeks untuk tabel `tb_rekening_pegawai`
--
ALTER TABLE `tb_rekening_pegawai`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_peg` (`nrp_id`);

--
-- Indeks untuk tabel `tb_riwayat_pekerjaan`
--
ALTER TABLE `tb_riwayat_pekerjaan`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_peg` (`nrp_id`);

--
-- Indeks untuk tabel `tb_stts_keluarga`
--
ALTER TABLE `tb_stts_keluarga`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_peg` (`nrp_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_absensi`
--
ALTER TABLE `tb_absensi`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_doc`
--
ALTER TABLE `tb_doc`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_info_fisik`
--
ALTER TABLE `tb_info_fisik`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_kontak_darurat`
--
ALTER TABLE `tb_kontak_darurat`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_organisasi_pegawai`
--
ALTER TABLE `tb_organisasi_pegawai`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_rekening_pegawai`
--
ALTER TABLE `tb_rekening_pegawai`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_riwayat_pekerjaan`
--
ALTER TABLE `tb_riwayat_pekerjaan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_stts_keluarga`
--
ALTER TABLE `tb_stts_keluarga`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD CONSTRAINT `tb_absensi_ibfk_1` FOREIGN KEY (`nrp_id`) REFERENCES `tb_identitas` (`nrp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_doc`
--
ALTER TABLE `tb_doc`
  ADD CONSTRAINT `tb_doc_ibfk_1` FOREIGN KEY (`nrp_id`) REFERENCES `tb_identitas` (`nrp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_info_fisik`
--
ALTER TABLE `tb_info_fisik`
  ADD CONSTRAINT `tb_info_fisik_ibfk_1` FOREIGN KEY (`nrp_id`) REFERENCES `tb_identitas` (`nrp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_kontak_darurat`
--
ALTER TABLE `tb_kontak_darurat`
  ADD CONSTRAINT `tb_kontak_darurat_ibfk_1` FOREIGN KEY (`nrp_id`) REFERENCES `tb_identitas` (`nrp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_organisasi_pegawai`
--
ALTER TABLE `tb_organisasi_pegawai`
  ADD CONSTRAINT `tb_organisasi_pegawai_ibfk_1` FOREIGN KEY (`nrp_id`) REFERENCES `tb_identitas` (`nrp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  ADD CONSTRAINT `tb_pendidikan_ibfk_1` FOREIGN KEY (`nrp_id`) REFERENCES `tb_identitas` (`nrp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD CONSTRAINT `tb_pengguna_ibfk_1` FOREIGN KEY (`nrp_id`) REFERENCES `tb_identitas` (`nrp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_rekening_pegawai`
--
ALTER TABLE `tb_rekening_pegawai`
  ADD CONSTRAINT `tb_rekening_pegawai_ibfk_1` FOREIGN KEY (`nrp_id`) REFERENCES `tb_identitas` (`nrp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_riwayat_pekerjaan`
--
ALTER TABLE `tb_riwayat_pekerjaan`
  ADD CONSTRAINT `tb_riwayat_pekerjaan_ibfk_1` FOREIGN KEY (`nrp_id`) REFERENCES `tb_identitas` (`nrp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_stts_keluarga`
--
ALTER TABLE `tb_stts_keluarga`
  ADD CONSTRAINT `tb_stts_keluarga_ibfk_1` FOREIGN KEY (`nrp_id`) REFERENCES `tb_identitas` (`nrp`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
