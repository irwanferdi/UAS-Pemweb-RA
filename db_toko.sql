
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `db_login` (
  `iduser` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `db_login` (`iduser`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user');

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL,
  `harga_barang` int(30) NOT NULL,
  `gambar_barang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `jenis_barang`, `harga_barang`, `gambar_barang`) VALUES
(11, 'ps5 sp edition', 'console', 10000000, '01-ps5.png'),
(12, 'ps4', 'console', 100000, '02-ps4.png'),
(13, 'ps5', 'console', 11233333, '01-ps5.png');

ALTER TABLE `db_login`
  ADD PRIMARY KEY (`iduser`);

ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

ALTER TABLE `db_login`
  MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

