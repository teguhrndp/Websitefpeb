-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table fpeb.akreditasi: ~0 rows (approximately)

-- Dumping data for table fpeb.sejarah: ~1 rows (approximately)
INSERT INTO `sejarah` (`id`, `deskripsi`, `gambar`, `tahun`, `ket`, `created_at`, `update_at`) VALUES
	(1, '<div class="col-sm-3">\r\n                      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">\r\n                        <div class="card-header"><h5>1958</h5></div>\r\n                        <div class="card-body">\r\n                          <h5 class="card-title"></h5>\r\n                          <p class="card-text">Jurusan Pendidikan Ekonomi memiliki sejarah panjang, dimulai sejak tahun 1958 dengan nama Jurusan Ekonomi dan Hukum di bawah naungan Perguruan Tinggi Pendidikan Guru (PTPG).</p>\r\n                        </div>\r\n                      </div>\r\n                    </div>\r\n                      <div class="col-sm-3">\r\n                        <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">\r\n                          <div class="card-header"><h5>1960</h5></div>\r\n                          <div class="card-body">\r\n                            <h5 class="card-title"></h5>\r\n                            <p class="card-text">Pada tahun 1960 Jurusan Ekonomi dan Hukum dikembangkan menjadi dua jurusan, yaitu Jurusan Ekonomi dan Jurusan Hukum. Tahun 1962 Jurusan Ekonomi berubah nama menjadi Jurusan EKPA (Ekonomi Keuangan Perniagaan dan Administrasi) di bawah FKPS (Fakultas KeguruanPengetahuan Sosial) IKIP Bandung. Tahun 1965 Jurusan EKPA dikembangkan menjadi tiga jurusan, yaitu Jurusan Ekonomi Umum (Ekum), Jurusan Ekonomi Perusahaan (Ekper), dan Jurusan Administrasi di bawah Fakultas Keguruan Ilmu Sosial (FKIS).</p>\r\n                          </div>\r\n                        </div>\r\n                     </div>\r\n                    <div class="col-sm-3">\r\n                    <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">\r\n                        <div class="card-header"><h5>1983</h5></div>\r\n                        <div class="card-body">\r\n                          <h5 class="card-title"></h5>\r\n                          <p class="card-text">Seiring dengan perubahan FKIS menjadi FPIPS (Fakultas Pendidikan Ilmu Pengetahuan Sosial) tahun 1983, ketiga jurusan tersebut digabungkan menjadi satu jurusan, yaitu Jurusan Pendidikan Dunia Usaha yang memiliki empat program studi, yaitu Program Studi Pendidikan Akuntansi, Program Studi Pendidikan Tata Niaga, Program Studi Tata Perkantoran, dan Program Studi Koperasi. <br> Di samping program S-1, Jurusan Pendidikan Dunia Usaha menyelenggarakan program diploma, yaitu Program Pendidikan Tata Buku (D-3), Program Pendidikan Tata Niaga (D-3), Program Pendidikan Keterampilan Jasa (D-2 dan D-3), </p>\r\n                        </div>\r\n                      </div>\r\n                    </div>\r\n                    <div class="col-sm-3">\r\n                      <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">\r\n                        <div class="card-header"><h5>1995</h5></div>\r\n                        <div class="card-body">\r\n                          <h5 class="card-title"></h5>\r\n                          <p class="card-text">Pada tahun 1995 Jurusan Pendidikan Dunia Usaha berubah namanya menjadi Jurusan Pendidikan Ekonomi, dengan program-program studi Pendidikan Akuntansi, Pendidikan Tata Niaga, Pendidikan Administrasi Perkantoran, dan Pendidikan Ekonomi & Koperasi. Mulai tahun 2000 sejalan dengan Wider Mandate di Jurusan Pendidikan Ekonomi dibuka program studi nonkependidikan, yaitu Program Studi Akuntansi dan Program Studi Manajemen.</p>\r\n                        </div>\r\n                      </div>\r\n                    </div>', 'profil-fpeb-2023.mp4', NULL, '<p style=" text-align: justify; text-justify: inter-word;">Fakultas Pendidikan Ekonomi dan Bisnis (FPEB) secara resmi mulai berdiri pada tanggal 28 Oktober 2008 berdasarkan Surat Keputusan Rektor UPI Nomor 6067 tahun 2008. Sebelum menjadi fakultas tersendiri, FPEB merupakan sebuah jurusan yang berada di bawah Fakultas Pendidikan Ilmu Pengetahuan Sosial (FPIPS), yaitu Jurusan Pendidikan Ekonomi.Jurusan tersebut memiliki empat program studi kependidikan dan dua program studi nonkependidikan. Program-program studi kependidikan tersebut adalah Program Studi Pendidikan Akuntansi, Program Studi Pendidikan Manajemen Bisnis, Pendidikan Manajemen Perkantoran, dan Pendidikan Ekonomi dan Koperasi.Sedangkan Program Studi nonkependidikan adalah Program Studi Akuntansi dan Program Studi Manajemen.</p>', NULL, NULL);

-- Dumping data for table fpeb.struktur_organisasi: ~0 rows (approximately)

-- Dumping data for table fpeb.tb_pegawai: ~4 rows (approximately)
INSERT INTO `tb_pegawai` (`id`, `nip`, `nama`, `jabatan`, `status_peg`, `homebase`, `gambar`, `deskripsi`, `links`, `keterangan`, `lang`, `created_at`, `updated_at`) VALUES
	(1, '196110221986031002', 'Prof. Dr. H. Eeng Ahman, M.S.', 'Dekan', 'pns', 'dosen', NULL, '', NULL, NULL, NULL, NULL, NULL),
	(2, '196904041999031011', 'Dr. Lili Adi Wibowo, S.Pd., S.Sos., M.M.', 'Wadek3', 'pns', 'dosen', NULL, '', NULL, NULL, NULL, NULL, NULL),
	(3, '197403072002122005', 'Prof. Dr. Vanessa Gaffar, S.E., Ak., MBA.', 'Wadek1', 'pns', 'dosen', NULL, '', NULL, NULL, NULL, NULL, NULL),
	(4, '197806272003121001', 'Dr. Toni Heryana S.Pd., MM., CRA., CRP', 'Wadek2', 'pns', 'dosen', NULL, '', NULL, NULL, NULL, NULL, NULL);

-- Dumping data for table fpeb.tb_prodi: ~12 rows (approximately)
INSERT INTO `tb_prodi` (`id`, `kodepst`, `nama_prodi`, `jenjang`, `gambar`, `deskripsi`, `web`, `ket`, `lang`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'L015', 'Pendidikan Akuntansi', 'S1', NULL, NULL, 'http://dikakuntansi.upi.edu/', NULL, NULL, NULL, NULL, NULL),
	(2, 'L025', 'Pendidikan Bisnis', 'S1', NULL, NULL, 'http://pendidikanbisnis.upi.edu/', NULL, NULL, NULL, NULL, NULL),
	(3, 'L035', 'Pendidikan Manajemen Perkantoran', 'S1', NULL, NULL, 'http://manper.upi.edu/', NULL, NULL, NULL, NULL, NULL),
	(4, 'L045', 'Pendidikan Ekonomi', 'S1', NULL, NULL, 'http://pendidikanekonomi.upi.edu/', NULL, NULL, NULL, NULL, NULL),
	(5, 'L505', 'Manajemen', 'S1', NULL, NULL, 'http://manajemen.upi.edu/', NULL, NULL, NULL, NULL, NULL),
	(6, 'L515', 'Akuntansi', 'S1', NULL, NULL, 'http://akuntansi.upi.edu/', NULL, NULL, NULL, NULL, NULL),
	(7, 'L525', 'Ilmu Ekonomi dan Keuangan Islam', 'S1', NULL, NULL, 'http://ieki.upi.edu/', NULL, NULL, NULL, NULL, NULL),
	(8, 'P236', 'Pendidikan Ekonomi', 'S2', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
	(9, 'P237', 'Pendidikan Ekonomi', 'S3', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
	(10, 'P516', 'Manajemen', 'S2', NULL, NULL, 'http://manajemen.sps.upi.edu/en_US/', NULL, NULL, NULL, NULL, NULL),
	(11, 'P517', 'Manajemen', 'S3', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
	(12, 'P526', 'Ilmu Akuntansi', 'S2', NULL, NULL, 'http://mia.sps.upi.edu/', NULL, NULL, NULL, NULL, NULL);

-- Dumping data for table fpeb.visi_misi: ~1 rows (approximately)
INSERT INTO `visi_misi` (`id`, `visi`, `misi`, `tujuan`, `gambar`, `ket`, `lang`, `created_at`, `update_at`) VALUES
	(1, '<p>Menjadi fakultas pelopor dan unggul dalam penyelenggaraan pendidikan disiplin ilmu ekonomi dan bisnis berbasis ekonomi syariah.</p>', '<ul><li>Menjadikan ilmu pendidikan sebagai disiplin ilmu yang melandasi penyelenggaraan pendidikan ilmu ekonomi dan bisnis berbasis syariah berdasarkan pendekatan cross fertilization.</li><li>		Mengembangkan kerjasama baik secara regional, nasional, maupun internasional di bidang pendidikan, penelitian, dan pengabdian atas dasar prinsip kesetaraan, saling menghormati, dan saling menguatkan.</li>	<li>		Memberikan layanan profesional kepada masyarakat berbasis hasil penelitian di bidang pendidikan disiplin ilmu ekonomi dan bisnis serta disiplin ilmu ekonomi dan bisnis berbasis syariah.</li>\r\n</ul>', NULL, 'visimisi.jpg', NULL, NULL, '2023-09-28 11:24:51', '2023-09-28 11:24:52');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
