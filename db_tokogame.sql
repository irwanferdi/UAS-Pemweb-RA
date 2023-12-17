
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
  `nama_barang` varchar(90) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL,
  `harga_barang` int(30) NOT NULL,
  `gambar_barang` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `jenis_barang`, `harga_barang`, `gambar_barang`) VALUES
(11, 'Playstation 1 ', 'console', 350000, '05-ps1.png'),
(15, 'Playstation 3', 'console', 4700000, '03-ps3.png'),
(18, 'Playstation 2', 'console', 600000, '04-ps2.png'),
(19, 'Playstation 5', 'console', 9700000, '01-ps5.png'),
(20, 'PS4 Controller Original (Hitam)', 'controller', 800000, 'CT11-controller ps4.png'),
(21, 'PS3 Controller Purple', 'controller', 200000, 'CT03-controller ps2 purple glow.png'),
(22, 'Read Dead Redemtion (PS3)', 'disc', 180000, '005-RDR (ps3).png'),
(23, 'Spiderman Miles Morales', 'disc', 9350000, '008-spiderman miles morales (ps5).png'),
(24, 'GTA SA (PS2)', 'disc', 23000, '006-gta sa (ps2).png'),
(25, 'Playstation 5 Special Edition', 'console', 1500000, '06-ps5 GOLD special edition.png');

ALTER TABLE `db_login`
  ADD PRIMARY KEY (`iduser`);

ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

ALTER TABLE `db_login`
  MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;