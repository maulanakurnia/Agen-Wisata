-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2019 at 05:21 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_AgenWisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pemesan`
--

CREATE TABLE `data_pemesan` (
  `id_pemesan` int(11) NOT NULL,
  `id_pemesanan` varchar(20) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pemesan`
--

INSERT INTO `data_pemesan` (`id_pemesan`, `id_pemesanan`, `nama_pemesan`) VALUES
(25, 'PMSN-001', 'isnan Khairi'),
(26, 'PMSN-001', 'rizaldi'),
(27, 'PMSN-002', 'isnan Khairi'),
(28, 'PMSN-002', 'khairi isnan'),
(32, 'PMSN-004', 'isnan Khairi');

-- --------------------------------------------------------

--
-- Table structure for table `detail_wisata`
--

CREATE TABLE `detail_wisata` (
  `id_wisata` char(8) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `lokasi_wisata` text NOT NULL,
  `deskripsi_wisata` text NOT NULL,
  `gambar_wisata` text NOT NULL,
  `rating_wisata` float NOT NULL,
  `harga_wisata` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_wisata`
--

INSERT INTO `detail_wisata` (`id_wisata`, `nama_wisata`, `lokasi_wisata`, `deskripsi_wisata`, `gambar_wisata`, `rating_wisata`, `harga_wisata`) VALUES
('BDG-001', 'Gunung Tangkuban Prahu', 'Bandung, Jawa Barat', 'Gunung Tangkuban Parahu adalah salah satu gunung yang terletak di Provinsi Jawa Barat, Indonesia. Sekitar 20 km ke arah utara Kota Bandung, dengan rimbun pohon pinus dan hamparan kebun teh di sekitarnya, Gunung Tangkuban Parahu mempunyai ketinggian setinggi 2.084 meter. Bentuk gunung ini adalah Stratovulcano dengan pusat erupsi yang berpindah dari timur ke barat. Jenis batuan yang dikeluarkan melalui letusan kebanyakan adalah lava dan sulfur, mineral yang dikeluarkan adalah sulfur belerang, mineral yang dikeluarkan saat gunung tidak aktif adalah uap belerang. Daerah Gunung Tangkuban Parahu dikelola oleh Perum Perhutanan. Suhu rata-rata hariannya adalah 17oC pada siang hari dan 2°C pada malam hari.\r\nGunung Tangkuban Parahu mempunyai kawasan hutan Dipterokarp Bukit, hutan Dipterokarp Atas, hutan Montane, dan Hutan Ericaceous atau hutan gunung.', '27112019204826tangkubanperahu.jpg', 4.5, 200000),
('BDG-002', 'Curug Cinulang ', 'Cicalengka Sindang wangi, Sindulang, Cimanggung, Kabupaten Sumedang', 'Curug Cinulang atau yang biasa disebut dengan Curug Sindulang. Curug tersebut merupakan salah satu curug dari sekian banyak curug yang ada di Jawa Barat. Harga tiket Curug Cinulang juga tidak jauh berbeda dan relatif murah.\r\nKeunikan yang dapat membuat para pengunjung mendatanginya adalah terdapat dua air terjun yang bersebelahan. Tak hanya itu kedua air terjun ini juga sangat memukau siapa saja yang melihatnya.\r\nPemandangan alamnya pun sangat menarik dengan latar belakang perbukitan dengan udara yang sejuk dan bersih. Jadi tak heran jika banyak wisatawan yang ingin berkunjung ke curug ini.', '27112019205029curug-cinulang.jpg', 5, 250000),
('BDG-003', 'Trans Studio Bandung', 'Jl. Gatot Subroto No.289, Cibangkong, Kec. Batununggal, Kota Bandung, Jawa Barat 40273, Indonesia', 'Trans Studio Bandung adalah kawasan wisata terpadu di Kota Bandung, Indonesia. Trans Studio dibangun pada areal seluas 4,2 hektare dengan investasi mencapai Rp 2 triliun sehingga menjadikan sebagai kawasan hiburan terluas dan terlengkap di Bandung. Wahana yang terdapat menawarkan petualangan dan sensasi baru yang tidak kalah menantang seperti pendahulunya yaitu Trans Studio Resort Makassar yang dibuka pada tahun 2009. Trans Studio Bandung dibuka untuk umum pada tanggal 18 Juni 2011. Trans Studio Bandung adalah taman bermain yang paling komplet di kota Bandung\r\nFasilitas \r\n•	Trans Studio Theme Park: Pusat rekreasi indoor berkelas internasional\r\n•	Trans Studio Mall Bandung: Pusat perbelanjaan kelas dunia yang artistik dan nyaman\r\n•	Mega Tower: Kantor pusat Bank Mega cabang Bandung\r\n•	The Trans Luxury Hotel - Hotel bintang 6\r\n•	Ibis Hotel Bandung - Hotel bintang 3', '27112019205214transstudio.jpg', 4.6, 250000),
('BDG-004', 'Wisata Air Panas Ciater', 'Jl. Raya Ciater, Nagrak, Kec. Ciater, Kabupaten Subang, Jawa Barat 40154, Indonesia', 'Jl. Raya Ciater, Nagrak, Kec. Ciater, Kabupaten Subang, Jawa Barat 40154, Indonesia\r\nBerwisata dengan bermain air memang menjadi alternatif liburan yang menyenangkan bagi tubuh dan jiwa. Berlibur bersama orang terdekat seperti keluarga, sahabat, atau bahkan pasangan akan membuat mood naik beberapa persen setelah menjalani aktivitas dan pekerjaan sehari-hari Anda. Salah satu tempat yang bagus untuk liburan di Jawa Barat yaitu Pemandian Air Panas Ciater.\r\nBerlibur dan menghabiskan waktu dengan mengunjungi pemandian air panas memang sesuatu yang menyenangkan. Air yang dikeluarkan suhunya lebih 37°C yang merupakan suhu normal tubuh manusia.\r\nNikmatnya wisata di pemandian air panas adalah, selain merelaksasikan pikiran Anda yang capai ternyata berendam di air panas dapat menyembuhkan berbagai macam penyakit dan bagus untuk kesehatan Anda.\r\n', '27112019205357Air-Panas-Ciater.jpg', 4.5, 80000),
('BDG-005', 'Situ Patenggang', 'Bandung', 'Situ Patenggang atau Situ Patengan adalah suatu danau yang terletak di kawasan objek wisata alam Bandung Selatan, Jawa Barat, Indonesia, tepatnya di Ciwidey. Terletak di ketinggian 1600 meter di atas permukaan laut, danau ini memiliki pemandangan yang sangat eksotik. Situ patenggang juga memiliki pemandangan alam yang asri, karena disekitarnya terdapat hamparan kebun teh.\r\nLuas Situ Patenggang sekitar 45.000 hektar. Serta total luas cagar alamnya mencapai 123.077,15 hektar. Situ patenggang selalu menjadi pilihan wisatawan terutama bagi mereka yang baru pulang dari tempat wisata Kawah Putih. Jaraknya dari wisata kawah putih hanya sekitar 7 KM dan membutuhkan waktu sekitar 10 menit saja.\r\n', '27112019205538Situ-Patenggang.jpg', 4.6, 200000),
('JOG-002', 'Air Terjun Sri Gethuk', 'Playen, Gunung Kidul, DIY', 'Air Terjun Sri Gethuk adalah salah satu keindahan yang tidak akan pernah terlupakan. Inilah dia patahan surga yang terbang ke Gunung Kidul dan singgah di kawasan ini.Inilah objek wisata yang sampai saat ini masih di kelola oleh warga masyarakat sekitar secara sederhana. Walaupun sederhana. Namun, mempunyai makna dan membekas di hati. Bagaimana sederhana bukan berarti seadanya, tetapi tetap menjunjung tinggi kualitas dan keselamatan sebagai sebuah bentuk pelayanan kepada penngunjung yang datang.Nama dari Sri gethuk ini sudah tenar sejak lama. \r\nWarga sekitar lebih suka menyebut nama kawasan ini sebagai air terjun slempret dimana, letak kawasan ini berada di kawasan slempret\r\n', '25112019232541jog-002_srigetuk.jpg', 4.5, 15000),
('JOG-003', 'Monumen Yogya Kembali', 'Ngaglik, Sleman, DIY', 'Monumen Yogya Kembali dibangun pada tanggal 29 Juni 1985 dengan upacara tradisional penanaman kepala kerbau dan peletakan batu pertama oleh Sri Sultan Hamengkubuwono IX dan Sri Paduka Paku Alam VIII. Nama Yogya Kembali dipilih dengan maksud sebagai tetenger (peringatan) dari peristiwa sejarah ditariknya tentara pendudukan Belanda dari ibu kota RI Yogyakarta pada waktu itu, tanggal 29 Juni 1949. Hal ini merupakan tanda awal bebasnya bangsa Indonesia dari kekuasaan pemerintahan Belanda.\r\nPembangunan monumen ini dilakukan dengan memperhitungkan beberapa faktor penting. Titik pusat bangunan ini merupakan sebuah titik yang secara imajiner menghubungkan beberapa titik penting di Yogyakarta yaitu Kraton Jogja, Tugu Yogyakarta, Gunung Merapi, Parang Tritis dan juga Panggung Krapyak. Titik ini sendiri disebut sebagai Sumbu Besar Kehidupan dan penanda dari titik imajiner ini sendiri berada pada lantai 3 bangunan monumen ini.\r\n', '25112019232644jog-003_monjali.jpg', 5, 15000),
('JOG-004', 'Pantai Baron', 'Tanjungsari, Gunung Kidul, DIY', 'Pantai Baron adalah salah satu objek wisata berupa pantai yang terletak di Desa Kemadang, Kecamatan Tanjungsari, Kabupaten Gunungkidul. Lokasi Pantai Baron dapat ditempuh 40 km daeri pusat kota Yogyakarta. Asal mula nama Pantai Baron berasal dari nama seorang bangsawan asal Belanda yang bernama Baron Skeber. Bangsawan tersebut pernah mendaratkan kapalnya di pantai selatan tepatnya di pantai yang saat ini terkenal dengan sebutan Pantai Baron. Jalan menuju objek wisata Pantai Baron cukup baik untuk dilalui kendaraan pribadi, sepeda motor dan bus. \r\nObjek wisata Pantai Baron merupakan pantai yang membentuk cekungan. Seperti pantai lainnya, di Pantai Baron tersedia aneka ikan laut beserta olahannya. Ikan yang biasanya dijual di Pantai Baron adalah udang windu, kakap, bawal putih dan tongkol. Pantai Baron memiliki fasilitas berupa tempat pelelangan ikan, wahana permainan anak-anak, perahu bermesin, dan toko cenderamata. Buah sirkaya, pisang tanduk, sirsak, dan berbagai macam cenderamata yang terbuat dari kerang laut. Cenderamata berbahan kerang yang banyak dijual di Pantai Baron adalah bros, tirai kerang, lampu hias, cermin berhias karang, figura, dan aneka karakter hewan yang juga terbuat dari kerang laut.\r\n', '25112019232752jog-004_baron.jpg', 4.5, 20000),
('JOG-005', 'Gunung Api Purba', 'Patuk, Gunung Kidul , DIY', 'Gunung Nglanggeran adalah sebuah gunung di Daerah Istimewa Yogyakarta, Indonesia. Gunung ini merupakan suatu gunung api purba yang terbentuk sekitar 0,6-70 juta tahun yang lalu atau yang memiliki umur tersier (Oligo-Miosen). Gunung Nglanggeran memiliki batuan yang sangat khas karena didominasi oleh aglomerat dan breksi gunung api. Gunung ini terletak di Desa Nglanggeran, Kecamatan Patuk, Kabupaten Gunung Kidul yang berada pada deretan Pegunungan Baturagung.\r\nDi sekitar Gunung Nglanggeran dapat dijumpai embung yang merupakan bangunan berupa kolam seperti telaga di ketinggian sekitar 500 meter dari permukaan laut. Embung dengan luas sekitar 5.000 meter persegi itu berfungsi menampung air hujan untuk mengairi kebun buah kelengkeng, durian, dan rambutan di sekeliling embung. Pada musim kemarau, para petani bisa memanfaatkan airnya untuk mengairi sawah. Pengunjung bisa naik ke embung dengan tangga. Sampai di sisi embung, pengunjung bisa melihat matahari terbenam dan melihat gunung api purba di seberang embung.\r\n', '25112019232918jog-005_nglanggeran.jpg', 4.7, 20000),
('JOG-006', 'Gembira Loka Zoo', 'Kotagede, Yogyakarta, DIY', 'Letaknya di daerah aliran sungai Gajah Wong. Akses menuju Gembira Loka sangat mudah dengan angkutan kota dan kendaraan. Pada awalnya dimulai dari beberapa hewan macan tutul yang berhasil ditangkap penduduk setempat karena mengganggu desa dan sebagian berasal dari lereng merapi yang hutannya terbakar akibat awan panas.\r\nGembira Loka Zoo memiliki koleksi satwa yang cukup lengkap. Gembira Loka Zoo selalu berusaha memberikan yang terbaik demi kenyamanan pengunjung serta kelestarian alam. Beberapa kali didengar bahwa gajah melahirkan, burung kakatua menetaskan telurnya, serta kuda pacu melahirkan anaknya.\r\n', '25112019233012jog-006_gembiraloka.jpg', 4, 40000),
('JOG-007', 'Pantai Goa Cemara', 'Sanden, Bantul, DIY', 'Pantai Goa Cemara adalah pantai yang terletak di Dusun Patihan, Desa Gadingsari, Kecamatan Sanden, Kabupaten Bantul. Tepatnya berdampingan dengan Pantai Samas dan Pantai Pandansari[1]. Pantai ini memiliki pasir berwarna hitam tapi lembut dengan ombak yang cukup besar kerakteristik pantai selatan. Pantai ini merupakan pantai pengembangan baru dimana terdapat banyak pohong Cemara udang rindang berbentuk seperti goa. Pohon Cemara ini bertujuan untuk melindungi abrasi air laut dan menahan gumuk pasir supaya tidak mengalamai perpindahan akibat tiupan angin[2]. \r\nTak hanya sebagai tempat wisata, di pantai ini Dinas Kelautan dan Perikanan Kabupaten Bantul juga melakukan penangkaran berbagai jenis penyu laut yaitu jenis Penyu Hijau (Chelonia mydas), Penyu Sisik (Eretmochelys imbiata), Penyu Lekang (Lepidochelys olivacea), dan Penyu Belimbing (Dermochelys coriacea). Program penangkaran penyu yang bertajuk \"Save Our Turtles”\r\n', '25112019233130jog-007_goacemara.jpeg', 4.3, 18000),
('SMG-001', 'Klenteng Sam Poo Kong', 'Semarang', 'Klenteng Gedung Batu Sam Po Tong adalah sebuah petilasan, yaitu bekas tempat persinggahan dan pendaratan pertama seorang Laksamana Tiongkok beragama Islam yang bernama Zheng He / Cheng Ho. Catatan: tidak semua anak buah kapal beragama Islam. Kompleks Sam Po Tong berada di daerah Simongan, sebelah barat daya Kota Semarang. Tanda yang menunjukan sebagai bekas petilasan yang berciri keislaman dengan ditemukannya tulisan berbunyi \"Marilah kita mengheningkan cipta dengan mendengarkan bacaan Al Qur\'an\".\r\nKelenteng ini disebut Gedung Batu karena bentuknya merupakan gua batu besar yang berada di sebuah bukit batu. Untuk mengenanh Zheng He, masyarakat Indonesia keturunan Tionh Hoa membangun sebuah kelenteng. Sekarang tempat ini dijadikan tempat peringatan dan pemujaan atau bersembahyang serta tempat untuk berziarah. Untuk keperluan tersebut, di dalam gua batu itu diletakkan sebuah altar serta patung-patung Sam Po Tay Djien. Meskipun Laksamana Cheng Ho adalah seorang muslim, tetapi masyarakat menganggapnya sebagai dewa. Hal ini dapat dimaklumi mengingat agama Kong Hu Cu atau Tao menganggap orang yang sudah meninggal dapat memberikan pertolongan kepada mereka.\r\n', 'smg-001.jpg', 4.3, 50000),
('SMG-002', 'Kampoeng Rawa', 'Rawa Pening, Ambarawa,Semarang, Jawa Tengah', 'Kampoeng Rawa terletak di Kilometer 3 Ring Road Selatan di Ambarawa, Semarang, Jawa Tengah, sebuah jalan yang digunakan untuk perjalanan antara Yogyakarta dan Semarang yang dibuka pada 2012. Secara administratis, kompleks tersebut adalah bagian dari Desa Bejalen. Kompleks tersebut berada di tengah-tengah persawahan dan berbatasan dengan Danau Rawa Pening. Dari tempat tersebut, para pengunjung dapat melihat pemandangan Gunung Merbabu dan Gunung Telomoyo, kedua gunung tersebut berada di sebelah selatan. \r\nRestoran mengapung yang berisi 300 kursi di Kampoeng Rawa terdapat di sebuah danau kecil dan menghidangkan hidangan khas Indonesia menggunakan bahan makanan produksi lokal, yang meliputi lele, gurame, dan tilapia. Hidangannya meliputi nasi goreng dan mie goreng. Semua diapungkan dengan drum plastik, dan untuk menuju bangunan utama pelanggan harus menggunakan rakit yang ditarik tali. \r\n', '25112019234522smg-002_kampoengrawa.jpg', 4.8, 100000),
('SMG-003', 'Lawang Sewu', 'Jl. Pemuda, Sekayu, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah ', 'Lawang Sewu adalah gedung bersejarah di Indonesia yang berlokasi di Kota Semarang, Jawa Tengah. Gedung ini, dahulu yang merupakan kantor dari Nederlands-Indische Spoorweg Maatschappij atau NIS. Dibangun pada tahun 1904 dan selesai pada tahun 1907. Terletak di bundaran Tugu Muda yang dahulu disebut Wilhelminaplein.\r\nMasyarakat setempat menyebutnya Lawang Sewu karena bangunan tersebut memiliki pintu yang sangat banyak, meskipun kenyataannya, jumlah pintunya tidak mencapai seribu. Bangunan ini memiliki banyak jendela yang tinggi dan lebar, sehingga masyarakat sering menganggapnya sebagai pintu (lawang).\r\n', '25112019234716smg-003_lawang1k.jpg', 4.7, 45000),
('SMG-004', 'Curug Lawe', 'Ungaran Barat, Semarang, Jawa Tengah', 'Curug Lawe adalah air terjun yang berada di Kawasan Gunung Ungaran di Semarang. Di Curug Lawe airnya benar-benar bersih dan tentu kondisi alam di sekitarnya sangat indah. Curug Lawe dan Benowo berada disebelah utara anak-anak Gunung Ungaran dan menjadi hulu Kali Banjir Kanal Barat atau Kali Garang di kota Semarang\r\nDisebut Curug Lawe karena air yang jatuh dari tebing curam itu terlihat bagai benang-benang putih, yang dalam bahasa jawa disebut lawe. Versi lain menjelaskan dinamakan Curug Lawe karena konon jumlah air terjun yang ada, baik dari yang besar hingga yang terkecil berjumlah 25 buah yang dalam bahasa jawa Selawe.Dalam satu kawasan terdapat dua air terjun yaitu curug lawe di sisi barat dan curug benowo di sisi timur yang berjarak sekitar 500m antar kedua air terjun.\r\n', '25112019235209smg-004_curuglawe.jpg', 4.8, 30000),
('SMG-005', 'Museum Mandala Bhakti', 'Jalan Soegijapranata No. 1 Semarang Jawa Tengah, Indonesia', 'Museum Mandala Bhakti adalah museum yang terdapat di Semarang Jawa Tengah. Museum ini adalah museum perjuangan TNI yang dirancang oleh arsitek Belanda I. Kuhr E. dari Firma Ooiman dan van Leeuwen pada awalnya digunakan untuk Raad van Justitie atau Pengadilan Tinggi bagi golongan rakyat Eropa di Semarang. Bangunan ini diperkirakan dibangun sekitar tahun 1930. Tahun 1950-an bangunan ini digunakan oleh Kodam IV/Diponegoro sebagai Markas Besar Komando Wilayah Pertahanan II. Dan pada tahun 1985 resmi digunakan untuk museum yang menyimpan koleksi tentang data, dokumentasi, dan persenjataan TNI baik yang tradisional maupun modern.\r\nSeluruh koleksi yang tersimpan dalam museum, merupakan bukti fisik dan faktual sejarah perjalanan Kodam tersebut. Di depan museum Mandala Bhakti diletakan senjata berat 25 PDR field gun yang kondisinya masih baik. Salah satu koleksi yang bernilai sejarah tinggi ialah pistol kuno jenis Luger dan machine gun Browning. Senjata ini diyakini digunakan dalam pertempuran lima hari di Semarang. Museum ini juga memiliki koleksi yang menakjubkan artefak militer Indonesia dan foto-foto dari pahlawan Indonesia.', '25112019235604smg-005_mandalabhakti.jpg', 4.6, 43000),
('SMG-006', 'Kota Tua Semarang', 'Jl. Letjen Suprapto, Tanjung Mas, Semarang Utara, Kota Semarang, Jawa Tengah ', 'Kota Lama Semarangadalah suatu kawasan di Semarang yang menjadi pusat perdagangan pada abad 19-20 . Pada masa itu, untuk mengamankan warga dan wilayahnya, maka kawasan itu dibangun benteng, yang dinamai benteng Vijhoek. Untuk mempercepat jalur perhubungan antar ketiga pintu gerbang dibenteng itu maka dibuat jalan-jalan perhubungan, dengan jalan utamanya dinamai: Heeren Straat. Saat ini bernama Jl. Let Jen Soeprapto. Salah satu lokasi pintu benteng yang ada sampai saat ini adalah Jembatan Berok, yang disebut De Zuider Por.\r\nKawasan Kota Lama Semarang disebut juga Outstadt. Luas kawasan ini sekitar 31 hektare. Dilihat dari kondisi geografi, tampak bahwa kawasan ini terpisah dengan daerah sekitarnya, sehingga tampak seperti kota tersendiri dengan julukan \"Little Netherland\". Kawasan Kota Lama Semarang ini merupakan saksi bisu sejarah Indonesia masa kolonial Belanda lebih dari 2 abad, dan lokasinya berdampingan dengan kawasan ekonomi. Di tempat ini ada sekitar 50 bangunan kuno yang masih berdiri dengan kukuh dan mempunyai sejarah Kolonialisme di Semarang. Secara umum karakter bangunan di wilayah ini mengikuti bangunan-bangunan di benua Eropa sekitar tahun 1700-an. Hal ini bisa dilihat dari detail bangunan yang khas dan ornamen-ornamen yang identik dengan gaya Eropa. ', '25112019235648smg-006_kotalama.jpg', 4.6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_wisata` char(8) NOT NULL,
  `tanggal_pemesanan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tanggal_berangkat` date NOT NULL,
  `tanggal_pulang` date NOT NULL,
  `metode_pembayaran` varchar(250) NOT NULL,
  `total` int(11) NOT NULL,
  `status_wisata` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_user`, `id_wisata`, `tanggal_pemesanan`, `tanggal_berangkat`, `tanggal_pulang`, `metode_pembayaran`, `total`, `status_wisata`) VALUES
('PMSN-001', 6, 'SMG-002', '2019-11-26 07:10:33', '2019-12-04', '2019-12-05', 'indomaret', 200000, 'LUNAS'),
('PMSN-002', 6, 'BDG-001', '2019-11-28 00:58:20', '2019-11-29', '2019-11-30', 'indomaret', 400000, 'LUNAS'),
('PMSN-004', 6, 'BDG-001', '2019-11-28 01:51:32', '2019-11-29', '2019-11-30', 'indomaret', 200000, 'LUNAS');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nama_role` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama_role`) VALUES
(1, 'ADMIN'),
(2, 'USER');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(280) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(280) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `id_role` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `date_created` timestamp NULL DEFAULT NULL,
  `date_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `no_telp`, `id_role`, `gambar`, `date_created`, `date_updated`) VALUES
(1, 'Maulana Kurnia', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '082115155714', 1, 'default.png', '2019-11-22 03:46:02', '2019-11-30 17:17:33'),
(6, 'isnan Khairi  ', 'user@user.com', 'ee11cbb19052e40b07aac0ca060c23ee', '0899999999', 2, 'default.png', '2019-11-23 18:02:48', '2019-11-30 17:18:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pemesan`
--
ALTER TABLE `data_pemesan`
  ADD PRIMARY KEY (`id_pemesan`),
  ADD KEY `id_pemesanan` (`id_pemesanan`);

--
-- Indexes for table `detail_wisata`
--
ALTER TABLE `detail_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_wisata` (`id_wisata`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pemesan`
--
ALTER TABLE `data_pemesan`
  MODIFY `id_pemesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_pemesan`
--
ALTER TABLE `data_pemesan`
  ADD CONSTRAINT `data_pemesan_ibfk_1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_wisata`) REFERENCES `detail_wisata` (`id_wisata`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
