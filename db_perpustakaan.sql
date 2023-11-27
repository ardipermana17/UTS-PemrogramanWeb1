/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.22-MariaDB : Database - db_perpustakaan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_perpustakaan` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_perpustakaan`;

/*Table structure for table `data_buku` */

DROP TABLE IF EXISTS `data_buku`;

CREATE TABLE `data_buku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(250) NOT NULL,
  `pengarang` varchar(250) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `tahun_terbit` int(5) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `jumlah_buku` int(11) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `data_buku` */

insert  into `data_buku`(`id_buku`,`judul`,`pengarang`,`penerbit`,`tahun_terbit`,`isbn`,`kategori`,`jumlah_buku`) values 
(1,'sains kuark','kuark','Elek Media Komputindo',2011,'978-602-00-1055-7','komik',344),
(2,'Perempuan Berkalung Sorban','Abidah El khalieqy','Arti Bumi Intaran',2009,'978-979-15836-4-1','novel',19),
(4,'Captain Tsubasa','Kenji Adacihara','Manga Komik',2022,'2332-4674-3639-06','Komik',347),
(5,'a','a','a',2021,'2332-4674-3639-90','Action',12);

/*Table structure for table `data_pengunjung` */

DROP TABLE IF EXISTS `data_pengunjung`;

CREATE TABLE `data_pengunjung` (
  `id_pengunjung` int(11) NOT NULL AUTO_INCREMENT,
  `nim` int(8) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `no_handphone` varchar(16) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  PRIMARY KEY (`id_pengunjung`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `data_pengunjung` */

insert  into `data_pengunjung`(`id_pengunjung`,`nim`,`nama`,`kelas`,`no_handphone`,`alamat`) values 
(1,18111400,'Aldi Rivaldi','TIF RM 18 C','089765456331','Jl. Rahayu 56'),
(2,18111401,'Hafiza Lubna','DKV 19 A','+6288974557123','Jl Karapitan 37'),
(3,18111403,'Ari Permadi','DKV 22 A','087654908113','Jl. Terusan Suryani 55'),
(5,18111402,'Arsyla','BD 20 C','','Jl. Terusan Cibaduyut');

/*Table structure for table `data_petugas` */

DROP TABLE IF EXISTS `data_petugas`;

CREATE TABLE `data_petugas` (
  `id_petugas` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `data_petugas` */

insert  into `data_petugas`(`id_petugas`,`username`,`password`,`fullname`,`no_hp`) values 
(1,'ardi','Kapalapi12','Ardi Permana','087907799217'),
(2,'fadil15','a37faa978366d6538b35682e61f9f1e7ec3954fa','Fadil Fudholi','+6287976884332');

/*Table structure for table `data_transaksi` */

DROP TABLE IF EXISTS `data_transaksi`;

CREATE TABLE `data_transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_buku` int(11) NOT NULL,
  `id_pengunjung` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `data_transaksi` */

insert  into `data_transaksi`(`id_transaksi`,`id_buku`,`id_pengunjung`,`tanggal`,`keterangan`) values 
(1,1,1,'2023-11-13','Membaca'),
(2,1,2,'2023-11-12','meminjam'),
(3,2,1,'2023-11-12','Meminjam');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
