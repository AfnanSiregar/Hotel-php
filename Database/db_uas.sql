-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2021 pada 11.08
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(25) NOT NULL,
  `passmin` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`username`, `passmin`) VALUES
('afnan', '1234567890');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id_nama` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_contact`
--

INSERT INTO `tb_contact` (`id_nama`, `fname`, `lname`, `email`, `message`) VALUES
(1, 'Muzayyin', 'Al-Afnan Siregar', 'francafnan@gmail.com', 'HOTEL TERBAIK!\r\n'),
(6, 'Muhammad', 'Rozin', 'rozindzakwan@gmail.com', 'Hotel Terburuk!'),
(7, 'Dion', 'Ferdiansyam', 'dionferdian@gmail.com', 'M4NT4P SLOER!'),
(14, 'Risya', 'Alfadila', 'risyaloak@gmail.com', 'MANTAP SLURRR'),
(15, 'Lulu', 'Fitri', 'ulul@gmail.com', 'top banget'),
(17, 'Galih ', 'Ahmad', 'masgall@gmail.com', 'MANTAP MUZENN!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `email_pemesan` varchar(50) NOT NULL,
  `passpem` varchar(15) NOT NULL,
  `room` varchar(50) NOT NULL,
  `tgl_masuk` varchar(10) NOT NULL,
  `tgl_keluar` varchar(10) NOT NULL,
  `jmlh_org` int(11) NOT NULL,
  `no_rek` varchar(15) NOT NULL,
  `konfirmasi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pemesanan`, `nama_pemesan`, `email_pemesan`, `passpem`, `room`, `tgl_masuk`, `tgl_keluar`, `jmlh_org`, `no_rek`, `konfirmasi`) VALUES
(29, 'Muhammad Rozin Dzakwan', 'rozindzakwan@gmail.com', '12345', 'KING MACHINA DELUXE', '12/9/2021', '12/10/2021', 1, '791272179129712', 'DIKONFIRMASI'),
(30, 'Muzayyin Al-Afnan Siregar', 'francafnan@gmail.com', '54321', 'Ultra Superior Room', '12/9/2021', '12/10/2021', 2, '982198219812098', 'DIKONFIRMASI'),
(31, 'Jamil Hamdi Harahap', 'jamil@gmail.com', '123456', 'Grand Deluxe Room', '12/9/2021', '12/10/2021', 3, '083120981230981', 'DITOLAK'),
(33, 'Lulu Fitri Ramadani Muttaqin', 'lulu@gmail.com', '123', 'Executive Queen MACHINA', '12/9/2021', '12/13/2021', 2, '908210892109821', 'DITOLAK'),
(35, 'Dion Ferdian Syam', 'dion@gmail.com', '12344', 'Classic MACHINA Rooms', '12/9/2021', '12/10/2021', 2, '78287423872387', 'DIKONFIRMASI'),
(36, 'Galih Ahmad Septian', 'masgall@gmail.com', '1234567', 'KING MACHINA DELUXES', '12/9/2021', '12/10/2021', 2, '098230983209823', 'DIKONFIRMASI'),
(38, 'Hasby Ramadhan', 'hasby@gmail.com', '1234', 'Classic MACHINA Rooms', '12/10/2021', '12/11/2021', 1, '123456789012345', '[Belum Dikonfirmasi]'),
(39, 'Syahrul Romadhan Nasution', 'syahrul@gmail.com', '1234', 'KING MACHINA DELUXES', '12/10/2021', '12/11/2021', 2, '1234567890123', '[Belum Dikonfirmasi]'),
(47, 'Mujiburrahman Siregar', 'mujib@gmail.com', '123456789012', 'Classic MACHINA Rooms', '12/10/2021', '12/17/2021', 2, '838723873287923', 'DIKONFIRMASI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rooms`
--

CREATE TABLE `tb_rooms` (
  `id_room` int(11) NOT NULL,
  `nama_room` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rooms`
--

INSERT INTO `tb_rooms` (`id_room`, `nama_room`, `harga`, `deskripsi`) VALUES
(1, 'KING MACHINA DELUXE', 1000000, 'Relax in this stylish and spacious King MACHINA Deluxe room. Catch up on work at the large desk with ergonomic chair and WiFi* or unwind and watch a movie on the 37-inch TV.Refresh in a modern bathroom with a relaxing rain shower and enjoy a restful sleep in our king size 200 cm beds. Special touches include bathrobes and slippers.*MACHINA Honors members who book direct get free WiFi'),
(2, 'MACHINA Family', 1000000, 'This spacious high-floor room with city views features a sitting area to relax with your family.\r\n\r\nRefresh in the marble bathroom with separate bathtub and rain shower and enjoy a restful night\'s sleep in the king-size 200 cm bed.\r\n\r\nWork comfortably at the desk with ergonomic chair and stay connected with WiFi or unwind with a movie on the 37-inch TV and enjoy a drink from the minibar.'),
(3, 'Classic MACHINA Rooms', 5000123, 'Relax in this stylish and spacious Classic Machina Room. Catch up on work at the large desk with ergonomic chair and WiFi* or unwind and watch a movie on the 37-inch TV.Refresh in a modern bathroom with a relaxing rain shower, and enjoy a restful sleep on our queen-size 160 cm beds. Special touches include bathrobes and slippers.*MACHINA Honors members who book direct get free WiFi'),
(4, 'Grand Deluxe Room', 650000, 'This spacious high-floor room with city views features a sitting area to relax with your family.\r\n\r\nRefresh in the marble bathroom with separate bathtub and rain shower and enjoy a restful night\'s sleep in the queen-size 160 cm beds.\r\n\r\nWork comfortably at the desk with ergonomic chair and stay connected with WiFi or unwind with a movie on the 37-inch TV and enjoy a drink from the minibar.'),
(5, 'Ultra Superior Room', 800000, 'This spacious high-floor room with city views features a sitting area to relax with your family.\r\n\r\nRefresh in the marble bathroom with separate bathtub and rain shower and enjoy a restful night\'s sleep in the queen-size 160 cm beds.\r\n\r\nWork comfortably at the desk with ergonomic chair and stay connected with WiFi or unwind with a movie on the 37-inch TV and enjoy a drink from the minibar.'),
(6, 'Executive Queen MACHINA', 1500000, 'This high-floor room with city views includes access to the 11th floor Executive Lounge featuring complimentary breakfast, daily refreshments and evening cocktails.\r\n\r\nRefresh yourself in the marble bathroom with separate bathtub and rain shower and enjoy a restful night\'s sleep in the queen size 160 cm beds.\r\n\r\nWork comfortably at the desk with ergonomic chair and WiFi or unwind with a movie on the 37-inch TV and enjoy a drink from the minibar.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id_nama`);

--
-- Indeks untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indeks untuk tabel `tb_rooms`
--
ALTER TABLE `tb_rooms`
  ADD PRIMARY KEY (`id_room`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id_nama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `tb_rooms`
--
ALTER TABLE `tb_rooms`
  MODIFY `id_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
