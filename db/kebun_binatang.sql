-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2023 at 08:19 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kebun_binatang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `kode_paket` varchar(2) NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  `harga_paket` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`kode_paket`, `nama_paket`, `harga_paket`) VALUES
('P1', 'anak-anak', 5000),
('P2', 'remaja', 6000),
('P3', 'dewasa', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `number` bigint(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstName`, `lastName`, `gender`, `email`, `password`, `number`) VALUES
(476, 'Rahmat', 'Ganteng', 'male', 'rahmat@mail.com', 'rahmat123', 89766557876),
(477, 'dewa', 'adji', 'male', 'dewa@mail.com', 'dewa123', 987654345),
(478, 'Boby ', 'Putra', 'male', 'boby@mail.com', 'boby123', 89677443567),
(479, 'rina', 'madinah', 'female', 'rina@mail.com', 'rina123', 89677565543),
(480, 'Mira', 'Maru', 'female', 'mira@mail.com', 'mira123', 89534223478),
(481, 'Agus', 'Salim', 'male', 'agus.ganteng@mail.com', 'agus123', 89677453367),
(482, 'Ocha ', 'Putri ', 'female', 'ochaput02@gmail.com', '1234567890', 85290670608);

-- --------------------------------------------------------

--
-- Table structure for table `satwa`
--

CREATE TABLE `satwa` (
  `id_satwa` int(11) NOT NULL,
  `nama_binatang` varchar(200) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi_satwa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `satwa`
--

INSERT INTO `satwa` (`id_satwa`, `nama_binatang`, `gambar`, `deskripsi_satwa`) VALUES
(21, 'Ular Jagung', './uploads/corn snake.jpg', 'Ular jagung (Inggris: cornsnake, Pantherophis guttatus) atau ular tikus merah merupakan spesies ular tikus Amerika Utara yang menumpaskan mangsa kecil dengan menjerut. Jolokan \"ular jagung\" berasal dari zaman dahulu apabila kaum petani di selatan Amerika Syarikat menyimpan bulir jagung dalam bekas binaan kayu. Tikus memasuki bekas itu untuk memakan jagung, dan ular jagung datang untuk memakan tikus. Ular jagung kekurangan racun fungsional dan tidak berbahaya serta bermanfaat bagi manusia dengan membantu mengendalikan populasi hama pengerat liar yang merusak tanaman dan menyebarkan penyakit.'),
(22, 'Iguana', './uploads/iguana.jpeg', 'Istilah “iguana” kemungkinan berasal dari bahasa Taino (salah satu suku asli Amerika) yaitu “iwana” yang merujuk pada spesies ini. Iguana adalah jenis kadal dari keluarga Iguanidae, namun sering dianggap sama dengan bunglon yang berasal dari keluarga Chamaeleonidae. Berikut adalah klasifikasi ilmiah fauna reptil yang sangat unik ini, yaitu: Kingdom	 : Animalia, Subkingdom : Bilateria, Infrakingdom : Deuterostomia, Filum : Chordata, Subfilum : Vertebrata, Infrafilum : Gnathostomata, Superkelas : Tetrapoda, Kelas : Reptilia, Ordo : Squamata, Subordo : Iguania, Famili : Iguanidae, Subfamili : Iguaninae, Genus : Iguana, Spesies : Iguana iguana,'),
(23, ' Buaya ', './uploads/buaya.jpg', 'Buaya merupakan reptil yang hidup di air. Buaya salah satu dari 23 jenis spesies hewan amfibi yang umumnya berukuran besar dan termasuk hewan karnivora atau hewan pemakan daging. Ukuran buaya bervariasi. Buaya terkecil adalah kerdil dengan panjang sekitar 5,6 kaki (1,7 meter) dan berat 6-7 kilogram. Sementara buaya terbesar pernah ditemukan dengan panjang 20,24 kaki (6,17 meter) dan berat 907 kilogram. Dilansir Live Science, buaya adalah hewan karnivora atau pemakan daging. Di alam liar, buaya memakan seperti ikan, burung, katak, atau krustasea.Di kebun binatang akan memakan binatang kecil yang telah dibunuh. Buaya akan memakan mangsanya dengan rahang yang besar, kemudian menghancurkannya. Selanjutnya akan menelan seluruh mangsanya. Buaya memilik rahang yang kuat dengan banyak gigi berbentuk kerucut dan kaki pendek dengan jari berselaput cakar.'),
(24, 'Jerapah', './uploads/Jerapah.jpg', 'Jerapah yang sudah dewasa memiliki tinggi sekitar 4,2 hingga 5,4m. Biasanya, jerapah jantan lebih tinggi dari betina. Sangat jarang, jerapah ditemukan lebih tinggi dari kisaran ketinggian rata-rata mereka. Berat rata-rata jerapah dewasa adalah sekitar 1192 kg untuk jantan, dan jerapah betina dewasa memiliki berat sekitar 1180 kg. Si Kecil mungkin telah menyadari kulit jerapah yang memiliki bintik-bintik cokelat tua pada kulit berwarna cokelat muda atau krem. Seiring dengan pola yang tidak biasa pada kulitnya, sebenarnya ketebalan kulit jerapah relatif lebih tebal dibandingkan dengan kulit hewan lainnya. Di antara semua ciri fisiknya, lidah jerapah memiliki fitur yang menarik. Jerapah pada umumnya memiliki panjang lidah sekitar 45cm dan berwarna hitam keunguan. Ini membantu jerapah untuk tetap terlindung dari sinar matahari dan sinar ultraviolet. Tak hanya itu saja, jerapah memiliki indera pendengaran dan penciuman yang baik. Mereka dapat mengingat suatu tempat atau apapun dari baunya, bahkan dapat mengidentifikasi buah dan tanaman beracun dari baunya. Lubang hidung mereka dilindungi dengan otot tambahan, dan mereka dapat menutup lubang hidung mereka yang berotot untuk perlindungan terhadap badai pasir dan semut. Kulit jerapah yang tebal membantu mereka bergerak di hutan dan hutan tanpa mudah terluka oleh cabang-cabang pohon atau benda tajam lainnya. Bahkan bulu jerapah juga memiliki manfaat. Bau jerapah betina memainkan peran penting dalam fungsi seksual mereka. Serta ekornya yang sebagian besar berbulu, dapat membantu mereka mengusir serangga.'),
(25, 'Gajah', './uploads/gajah.jpg', 'Gajah adalah mamalia besar. Sebutan ilmiah gaja adalah familia Elephantidae dan ordo Proboscidea. Ada banyak jens-jenis gajah, namun ada 2 spesies gajah yang diakui gajah afrika (Loxodonta africana) dan gajah asia (Elephas maximus), dan yang lainnya seperti semak afrika dan gajah hutan afrika merupakan spesies yang berbeda (L. africana dan L. cyclotis). Persebaran gajah ditemukan Afrika sub-Sahara, Asia Selatan, dan Asia Tenggara. Ada gajah yang berukuran sangat besar dan tertinggi yaitu gajah afrika jantan yang dapat mencapai 4 m (13 ft) dan massa yang kurang lebih 7.000 kg (15.000 lb) dengan telinga besar dan punggung yang cekung, sementara telinga gajah asia lebih kecil dan punggungnya cembung.'),
(26, 'Harimau', './uploads/Harimaoo.jpg', 'Harimau merupakan kucing terbesar, harimau jantan memiliki berat antara 180 sampai 320 kg. Sedangkan harimau betina berat tubuhnya mencapai 120 sampai 180 kg. Panjang tubuh harimau jantan antara 2,6 sampai 3,3 meter. Sedangkan betina antara 2,3 sampai 2,75 meter. Karakteristik harimau berbeda-beda, tergantung subspesiesnya. Diantara subspesies yang masih hidup, harimau sumatra adalah yang terkecil dan yang terbesar adalah harimau siberia. Umumnya loreng pada harimau bervariasi, dari coklat ke hitam. Subspesies satu dengan yang lainnya memiliki bentuk dan kepadatan loreng yang berbeda-beda. Akan tetapi hampir semua harimau memiliki lebih dari 100 loreng. Harimau jawa (sudah punah) kemungkinan memiliki loreng yang lebih banyak. Pola loreng pada harimau memiliki fungsi mirip dengan sidik jari yang digunakan untuk mengidentifikasi orang. Hal ini karena setiap harimau memiliki pola loreng yang unik yang dapat digunakan untuk membedakan satu sama liannya. Loreng harimau juga berfungsi untuk kamuflase agar tidak terlihat oleh mangsa atau musuhnya.'),
(27, 'Blue Tang', './uploads/Blue tang.jpg', 'Mengenal Ikan Blue Tang, Si Ikan Dory Pemain Film Finding Nemo - Jenis ikan air laut ini pasti sudah familiar bagi Anda karena berbagai keunggulan yang membuat ikan Blue Tang digambarkan sebagai tokoh Dory dalam film animasi habitat laut lepas. Sejak dahulu hingga kini, eksistensinya masih terjaga bahkan semakin banyak digemari pecinta ikan. Berbagai keindahan ikan Blue Tang ini membuatnya banyak digemari karena saat di film digambarkan dengan warna tubuh menyala. Namun, ternyata dapat berubah-ubah sesuai kondisi tinggalnya.'),
(28, 'Badut', './uploads/Badut.jpg', 'Mendengar nama ikan badut tidaklah asing bagi sebagian orang Indonesia, terutama bagi penggemar ikan hias air laut. Ikan ini menjadi semakin dikenal ketika pertama kali tampil pada tahun 2003 sebagai tokoh utama dalam sebuah film animasi karangan sutradara Andrew Stanton yang berjudul Finding Nemo. Film ini berkisah tentang seekor anak ikan badut yang bernama Nemo hilang tertangkap jaring nelayan di Great Barrier Reef, Queensland ketika sedang bermain dengan teman sekolahnya. Lalu, ayah si Nemo yang bernama Marlin yang penakut terpaksa berkelana ke seberang lautan untuk menemukannya kembali putra tercintanya. Ditengah perjalanan, Marlin bertemu seekor ikan blue tang bernama Dory yang kemudian menemaninya mencari Nemo. Film ini berhasil membuat kagum para penontonnya, selain karena jalan ceritanya yang menarik, karakter ikan badut itu sendiri berhasil ditonjolkan. Lucu, imut, lugu, dan menggemaskan adalah beberapa kata yang bisa menggambarkan ikan yang didominasi warna oranye ini.  Ikan badut merupakan ikan karang tropis yang hidup diperairan hangat pada daerah terumbu karang dengan kedalaman kurang dari 50 cm dan berair jernih. Daerah penyebarannya meliputi Samudra pasifik (Fiji), Laut Merah, Samudra Hindia (Indonesia, Malaysia, Thailand, Maladewa, Burma) Dan Great Barrier Reef Autralia. Ikan badut merupakan ikan yang mempunyai penyebaran relatif luas, terutama di daerah Indo Pacific. Beberapa faktor yang mempengaruhi distribusi dan arah distribusi dari ikan badut adalah jumlah larva, ketersediaan anemon laut, faktor-faktor hidrografi, dan adanya daratan penghalang.  Ikan badut atau clownfish berasal dari keluarga Pomacentridae yang terdiri dari dua genus yaitu Premnas dan Amphiprion. Khusus jenis Premnas hanya ditemukan 1 jenis yaitu Premnas biaculeatus (Bloch, 1790) yang biasa dikenal dengan sebutan ikan badut merah maroon. Untuk jenis Amphiprion sendiri terdiri dari 29 spesies, 13 diantaranya ditemukan di perairan Indonesia yaitu Amphiprion polymnus (Linnaeus, 1758), Amphiprion ephippium (Bloch, 1790), Amphiprion percula (Lacepede, 1802), Amphiprion ocellaris, Amphiprion chrysopterus (Cuvier, 1830), Amphiprion clarkii (Bennett, 1830), Amphiprion melanopus (Bleeker, 1852), Amphiprion sebae, Amphiprion akallopisos (Bleeker, 1853), Amphiprion perideralon (Bleeker, 1855), Amphiprion frenatus (Brevoort, 1856), Amphiprion sandaracinos (Allen, 1972), dan Amphiprion leucokranos (Allen, 1973).'),
(29, 'Pari', './uploads/Pari.jpg', 'Ikan pari dalam bahasa Inggris disebut Stingrays termasuk ikan dari subkelas Elasmobranchii. Artinya, ikan ini merupakan ikan bertulang rawan yang terbentuk dari kartilago tulang lunak. Ikan dalam subkelas Elasmobranchii terbagi menjadi dua jenis, yaitu Selachii atau hiu dan Batoidea atau pari. Pari dikelompokkan sebagai ikan batoid karena termasuk ikan bertulang rawan dengan ekor seperti cambuk. Diperkirakan, ada lebih dari 300 spesies ikan pari yang bersifat kosmopolitan di seluruh dunia. Umumnya, ikan pari berenang menggunakan gerakan gelombang sirip pectoral yang berukuran lebar. Warna punggungnya nyaris serupa dengan warna dasar lingkungan sekitarnya. Selain itu, beberapa jenis Stingrays memiliki duri beracun atau organ elektrik yang menjadi alat pelindung diri dari para predator berbahaya.'),
(30, 'Kepodang', './uploads/Kepodang.jpg', 'Kepodang adalah burung berkicau (Passeriformes) yang mempunyai bulu yang indah dan juga terkenal sebagai burung pesolek yang selalu tampil cantik, rapi, dan bersih termasuk dalam membuat sarang. Kepodang merupakan salah satu jenis burung yang sulit dibedakan antara jantan dan betinanya berdasarkan bentuk fisiknya. Burung kepodang termasuk jenis burung kurungan karena dibeli oleh masyarakat sebagai penghias rumah, oleh karenanya burung ini masuk dalam komoditas perdagangan yang membuat populasinya semakin kecil.'),
(31, 'Merak', './uploads/burung merak.jpg', 'Merak adalah keluarga Pavo Cristatus dan dapat ditemukan di hutan. Populasi Merak Biru tersebar di hutan terbuka dengan padang rumput di India, Pakistan, Sri Lanka, Nepal dan Bhutan. Sebelumnya spesies ini ditemukan juga di Bangladesh, namun sekarang kemungkinan besar telah punah di sana. Kata merak sebenarnya mengacu pada burung laki-laki (peafowls), sementara perempuan adalah peahens, dan  yang muda adalah peachicks.   Burung merak adalah salah satu jenis burung terbesar. Mereka menarik perhatian orang di seluruh dunia. Burung megah ini tidak bermigrasi. Merak terutama dibagi menjadi tiga kategori yang paling umum di antara mereka adalah Merak Biru, Merak Hijau, Merak Putih. Ketika banyak orang mendengar tentang merak, hal pertama yang terlintas dalam pikiran adalah warna yang indah dari bulu burung ini. Biru, hijau, emas, dan penampilan dari apa yang tampak seperti mata, tepat di tengah beberapa bulu, adalah kelebihan dari burung ini. Mereka juga memiliki lambang, atau mahkota, di atas kepala mereka, membuat mereka terlihat lebih anggun. Paruh burung-burung merak memiliki rata-rata panjang satu inci.  Burung betina berukuran lebih kecil dari burung jantan. Bulu-bulunya tidak mengilap, berwarna coklat kehijauan dengan garis-garis hitam dan tanpa dihiasi bulu penutup ekor. Burung muda seperti Merak betina.Merak jantan adalah poligami spesies, mempunyai pasangan lebih dari satu. Pada musim berbiak, burung jantan memamerkan bulu ekornya di depan burung betina. Bulu-bulu penutup ekor dibuka membentuk kipas dengan bintik berbentuk mata berwarna biru. Burung betina biasanya menetaskan tiga sampai enam butir telur.'),
(32, 'KakaTua', './uploads/Kakatua.jpg', 'Jenis Kakatua-kecil Jambul-kuning biasanya hidup berpasangan atau berkelompok dalam jumlah kecil. Sangat mencolok ketika terbang, dengan kepakan sayap yang cepat dan kuat diselingi gerakan melayang serta saling meneriaki. Bila sedang bersuara dari tempat bertengger, jambul ditegakkan lalu diturunkan. Jenis ini tertekan dengan ledakan populasi yang mengejutkan selama 10-15 tahun terakhir, akibat penangkapan yang berlebihan untuk perdagangan burung dalam sangkar, dan sekarang langka akibat kegiatan ini.  Spesies ini hidup pada ketinggian 0-1520 meter dari permukaan laut, biasanya berkelompok. Kakatua pada umumnya berusia panjang, hingga mencapai 60 tahun bahkan lebih.');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `kode_tiket` int(11) NOT NULL,
  `nama_lengkap` varchar(20) NOT NULL,
  `jadwal` date NOT NULL,
  `anak_anak` int(2) NOT NULL,
  `remaja` int(2) NOT NULL,
  `dewasa` int(2) NOT NULL,
  `kode_wahana` varchar(2) NOT NULL,
  `total_harga` varchar(20) NOT NULL,
  `pin` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`kode_tiket`, `nama_lengkap`, `jadwal`, `anak_anak`, `remaja`, `dewasa`, `kode_wahana`, `total_harga`, `pin`) VALUES
(1, 'Rahmat Ganteng', '2023-01-30', 2, 3, 1, 'W1', 'Rp. 155000', 0),
(6, 'dewa adji', '2023-02-08', 2, 0, 2, 'W2', 'Rp. 64000', 22855),
(7, 'Boby  Putra', '2023-01-04', 2, 1, 2, 'W3', 'Rp. 180000', 68716),
(8, 'Boby  Putra', '2023-03-01', 1, 1, 2, 'W3', 'Rp. 145000', 31352),
(9, 'rina madinah', '2023-01-27', 4, 0, 2, 'W3', 'Rp. 214000', 58729),
(10, 'Mira Maru', '2023-01-30', 1, 2, 3, 'W1', 'Rp. 158000', 6810),
(11, 'Agus Salim', '2023-01-15', 0, 2, 3, 'W0', 'Rp. 33000', 31818),
(12, 'Ocha  Putri ', '2023-02-17', 0, 4, 0, 'W3', 'Rp. 144000', 97779);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `metode_pembayaran` varchar(20) NOT NULL,
  `status_lunas` bit(2) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wahana`
--

CREATE TABLE `wahana` (
  `kode_wahana` varchar(2) NOT NULL,
  `nama_wahana` varchar(20) NOT NULL,
  `harga` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wahana`
--

INSERT INTO `wahana` (`kode_wahana`, `nama_wahana`, `harga`) VALUES
('W0', 'Tidak Memilih', 0),
('W1', 'Aquarium Laut', 20000),
('W2', 'Memberi Makan', 10000),
('W3', 'Pilih Keduanya', 30000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`kode_paket`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `satwa`
--
ALTER TABLE `satwa`
  ADD PRIMARY KEY (`id_satwa`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`kode_tiket`),
  ADD KEY `nama_wahana` (`kode_wahana`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `wahana`
--
ALTER TABLE `wahana`
  ADD PRIMARY KEY (`kode_wahana`),
  ADD UNIQUE KEY `nama_wahana` (`nama_wahana`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=483;

--
-- AUTO_INCREMENT for table `satwa`
--
ALTER TABLE `satwa`
  MODIFY `id_satwa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `kode_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `wahana` FOREIGN KEY (`kode_wahana`) REFERENCES `wahana` (`kode_wahana`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
