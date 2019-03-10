/*
SQLyog Enterprise - MySQL GUI v7.14 
MySQL - 5.5.5-10.1.36-MariaDB : Database - db_fifo_ice_cream
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_fifo_ice_cream` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_fifo_ice_cream`;

/*Table structure for table `det_pembelian` */

DROP TABLE IF EXISTS `det_pembelian`;

CREATE TABLE `det_pembelian` (
  `iddetpembelian` int(11) NOT NULL AUTO_INCREMENT,
  `kodepembelian` varchar(12) DEFAULT NULL,
  `kodebarang` varchar(12) DEFAULT NULL,
  `jumlahbeli` int(11) DEFAULT NULL,
  `hargabeli` double DEFAULT NULL,
  `keluarbarang` int(11) DEFAULT NULL,
  `sisabarang` int(11) DEFAULT NULL,
  PRIMARY KEY (`iddetpembelian`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `det_pembelian` */

insert  into `det_pembelian`(`iddetpembelian`,`kodepembelian`,`kodebarang`,`jumlahbeli`,`hargabeli`,`keluarbarang`,`sisabarang`) values (1,'PB201901-001','B0001',1000,1000,100,900),(2,'PB201901-001','B0002',1000,10000,0,1000);

/*Table structure for table `det_pembeliantemp` */

DROP TABLE IF EXISTS `det_pembeliantemp`;

CREATE TABLE `det_pembeliantemp` (
  `iddetpembelian` int(11) NOT NULL AUTO_INCREMENT,
  `kodebarang` varchar(12) DEFAULT NULL,
  `jumlahbeli` int(11) DEFAULT NULL,
  `hargabeli` double DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  PRIMARY KEY (`iddetpembelian`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `det_pembeliantemp` */

/*Table structure for table `det_penjualan` */

DROP TABLE IF EXISTS `det_penjualan`;

CREATE TABLE `det_penjualan` (
  `iddetpenjualan` int(11) NOT NULL AUTO_INCREMENT,
  `kodepenjualan` varchar(12) DEFAULT NULL,
  `kodebarang` varchar(10) DEFAULT NULL,
  `jumlahjual` int(11) DEFAULT NULL,
  `hargajual` double DEFAULT NULL,
  PRIMARY KEY (`iddetpenjualan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `det_penjualan` */

insert  into `det_penjualan`(`iddetpenjualan`,`kodepenjualan`,`kodebarang`,`jumlahjual`,`hargajual`) values (1,'PJ201901-001','B0001',90,1000),(2,'PJ201901-002','B0001',100,1000);

/*Table structure for table `det_penjualantemp` */

DROP TABLE IF EXISTS `det_penjualantemp`;

CREATE TABLE `det_penjualantemp` (
  `iddetpenjualan` int(11) NOT NULL AUTO_INCREMENT,
  `kodebarang` varchar(10) DEFAULT NULL,
  `jumlahjual` int(11) DEFAULT NULL,
  `hargajual` double DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  PRIMARY KEY (`iddetpenjualan`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `det_penjualantemp` */

/*Table structure for table `pembelian` */

DROP TABLE IF EXISTS `pembelian`;

CREATE TABLE `pembelian` (
  `kodepembelian` varchar(20) NOT NULL,
  `tglpembelian` date DEFAULT NULL,
  `kodesupplier` varchar(10) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`kodepembelian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pembelian` */

insert  into `pembelian`(`kodepembelian`,`tglpembelian`,`kodesupplier`,`keterangan`) values ('PB201901-001','2019-01-26','S002','');

/*Table structure for table `penjualan` */

DROP TABLE IF EXISTS `penjualan`;

CREATE TABLE `penjualan` (
  `kodepenjualan` varchar(12) NOT NULL,
  `tglpenjualan` date DEFAULT NULL,
  `kodesales` varchar(10) DEFAULT NULL,
  `kodetoko` varchar(10) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`kodepenjualan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `penjualan` */

insert  into `penjualan`(`kodepenjualan`,`tglpenjualan`,`kodesales`,`kodetoko`,`keterangan`) values ('PJ201901-001','2019-01-26','K001','T001',''),('PJ201901-002','2019-01-26','K001','T001','');

/*Table structure for table `ref_barang` */

DROP TABLE IF EXISTS `ref_barang`;

CREATE TABLE `ref_barang` (
  `kodebarang` varchar(10) NOT NULL,
  `namabarang` varchar(20) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `gambar` text,
  `hargabelifirst` double DEFAULT NULL,
  PRIMARY KEY (`kodebarang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ref_barang` */

insert  into `ref_barang`(`kodebarang`,`namabarang`,`satuan`,`harga`,`stok`,`gambar`,`hargabelifirst`) values ('B0001','Salad Es krim','Box',1000,710,NULL,NULL),('B0002','Es Krim Beng Beng','Box',1000,900,NULL,NULL);

/*Table structure for table `ref_sales` */

DROP TABLE IF EXISTS `ref_sales`;

CREATE TABLE `ref_sales` (
  `kodesales` varchar(10) NOT NULL,
  `namasales` varchar(20) DEFAULT NULL,
  `notelpsales` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`kodesales`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ref_sales` */

insert  into `ref_sales`(`kodesales`,`namasales`,`notelpsales`) values ('K001','asa','1212'),('K003','eee','23432432');

/*Table structure for table `ref_supplier` */

DROP TABLE IF EXISTS `ref_supplier`;

CREATE TABLE `ref_supplier` (
  `kodesupplier` varchar(10) NOT NULL,
  `namasupplier` varchar(20) DEFAULT NULL,
  `alamat` text,
  `notelp` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`kodesupplier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ref_supplier` */

insert  into `ref_supplier`(`kodesupplier`,`namasupplier`,`alamat`,`notelp`) values ('S002','3dfsdf','sdfsdf','54645');

/*Table structure for table `ref_toko` */

DROP TABLE IF EXISTS `ref_toko`;

CREATE TABLE `ref_toko` (
  `kodetoko` varchar(10) NOT NULL,
  `namatoko` varchar(20) DEFAULT NULL,
  `alamattoko` text,
  `pemiliktoko` varchar(20) DEFAULT NULL,
  `notelptoko` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`kodetoko`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ref_toko` */

insert  into `ref_toko`(`kodetoko`,`namatoko`,`alamattoko`,`pemiliktoko`,`notelptoko`) values ('T001','rr','tt','t','32');

/*Table structure for table `ref_user` */

DROP TABLE IF EXISTS `ref_user`;

CREATE TABLE `ref_user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `namauser` varchar(20) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `akses` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `ref_user` */

insert  into `ref_user`(`iduser`,`namauser`,`password`,`akses`) values (1,'bola','12345678','Gudang'),(2,'bundar','12345678','Sales'),(3,'banget','12345678','Pimpinan');

/*Table structure for table `stokbarang` */

DROP TABLE IF EXISTS `stokbarang`;

CREATE TABLE `stokbarang` (
  `idstok` int(11) NOT NULL AUTO_INCREMENT,
  `kodetransaksi` varchar(12) DEFAULT NULL,
  `tgltransaksi` date DEFAULT NULL,
  `jenistransaksi` enum('Pembelian','Penjualan') DEFAULT NULL,
  `kodebarang` varchar(10) DEFAULT NULL,
  `namabarang` varchar(20) DEFAULT NULL,
  `jumlahbeli` int(11) DEFAULT '0',
  `hargabeli` double DEFAULT '0',
  `jumlahjual` int(11) DEFAULT '0',
  `hpp` double DEFAULT '0',
  `hargajual` double DEFAULT '0',
  `sisa` double DEFAULT '0',
  `hargasisa` double DEFAULT '0',
  PRIMARY KEY (`idstok`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `stokbarang` */

/* Trigger structure for table `det_pembelian` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `insert_det_pembelian` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `insert_det_pembelian` AFTER INSERT ON `det_pembelian` FOR EACH ROW BEGIN
	update ref_barang set stok=stok+new.jumlahbeli where kodebarang=new.kodebarang;
    END */$$


DELIMITER ;

/* Trigger structure for table `det_penjualan` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `update_det_pembelian` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `update_det_pembelian` BEFORE INSERT ON `det_penjualan` FOR EACH ROW BEGIN
	declare jumlahjual_ int;
        declare kodepembelian_ varchar(12);
        declare kodebarang_ varchar(10);
        declare sisabarang_ int;
        set jumlahjual_=new.jumlahjual;
        set kodebarang_=new.kodebarang;
        set kodepembelian_=(SELECT kodepembelian from det_pembelian where kodebarang=kodebarang_ and sisabarang>0 order by kodepembelian asc limit 1);
	set sisabarang_=(select sisabarang from det_pembelian where kodepembelian=kodepembelian_ and kodebarang=kodebarang_);
	
	repeat
          if(sisabarang_>jumlahjual_) then
             update det_pembelian set sisabarang=sisabarang-jumlahjual_,keluarbarang=keluarbarang+jumlahjual_
             where kodepembelian=kodepembelian_ and kodebarang=kodebarang_;
             set jumlahjual_=0;
          end if;
          if(sisabarang_<jumlahjual_)then
	     update det_pembelian set sisabarang=0, keluarbarang=keluarbarang+jumlahjual_ 
	     where kodepembelian=kodepembelian_ and kodebarang=kodebarang_;
             set jumlahjual_=jumlahjual_-sisabarang_;
             set kodepembelian_=(SELECT kodepembelian from det_pembelian where kodebarang=kodebarang_ and sisabarang>0 order by kodepembelian asc limit 1);
	     set sisabarang_=(select sisabarang from det_pembelian where kodepembelian=kodepembelian_ and kodebarang=kodebarang_);
          end if;
	  if(sisabarang_=jumlahjual_) then
            update det_pembelian set sisabarang=0, keluarbarang=keluarbarang+jumlahjual_ 
	    where kodepembelian=kodepembelian_ and kodebarang=kodebarang_; 
            set jumlahjual_=0;
          end if;
          until jumlahjual_=0
	end repeat;
    END */$$


DELIMITER ;

/* Trigger structure for table `det_penjualan` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `insert_det_penjualan` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `insert_det_penjualan` AFTER INSERT ON `det_penjualan` FOR EACH ROW BEGIN
	update ref_barang set stok=stok-new.jumlahjual where kodebarang=new.kodebarang;
    END */$$


DELIMITER ;

/*Table structure for table `vw_pembelian` */

DROP TABLE IF EXISTS `vw_pembelian`;

/*!50001 DROP VIEW IF EXISTS `vw_pembelian` */;
/*!50001 DROP TABLE IF EXISTS `vw_pembelian` */;

/*!50001 CREATE TABLE `vw_pembelian` (
  `iddetpembelian` int(11) NOT NULL,
  `kodepembelian` varchar(12) DEFAULT NULL,
  `kodebarang` varchar(12) DEFAULT NULL,
  `jumlahbeli` int(11) DEFAULT NULL,
  `hargabeli` double DEFAULT NULL,
  `keluarbarang` int(11) DEFAULT NULL,
  `sisabarang` int(11) DEFAULT NULL,
  `tglpembelian` date DEFAULT NULL,
  `kodesupplier` varchar(10) DEFAULT NULL,
  `keterangan` text,
  `namabarang` varchar(20) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `gambar` text,
  `namasupplier` varchar(20) DEFAULT NULL,
  `alamat` text,
  `notelp` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `vw_penjualan` */

DROP TABLE IF EXISTS `vw_penjualan`;

/*!50001 DROP VIEW IF EXISTS `vw_penjualan` */;
/*!50001 DROP TABLE IF EXISTS `vw_penjualan` */;

/*!50001 CREATE TABLE `vw_penjualan` (
  `iddetpenjualan` int(11) NOT NULL,
  `kodepenjualan` varchar(12) DEFAULT NULL,
  `kodebarang` varchar(10) DEFAULT NULL,
  `jumlahjual` int(11) DEFAULT NULL,
  `hargajual` double DEFAULT NULL,
  `tglpenjualan` date DEFAULT NULL,
  `kodesales` varchar(10) DEFAULT NULL,
  `kodetoko` varchar(10) DEFAULT NULL,
  `keterangan` text,
  `namabarang` varchar(20) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `gambar` text,
  `namasales` varchar(20) DEFAULT NULL,
  `notelpsales` varchar(12) DEFAULT NULL,
  `namatoko` varchar(20) DEFAULT NULL,
  `alamattoko` text,
  `pemiliktoko` varchar(20) DEFAULT NULL,
  `notelptoko` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*View structure for view vw_pembelian */

/*!50001 DROP TABLE IF EXISTS `vw_pembelian` */;
/*!50001 DROP VIEW IF EXISTS `vw_pembelian` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_pembelian` AS select `det_pembelian`.`iddetpembelian` AS `iddetpembelian`,`det_pembelian`.`kodepembelian` AS `kodepembelian`,`det_pembelian`.`kodebarang` AS `kodebarang`,`det_pembelian`.`jumlahbeli` AS `jumlahbeli`,`det_pembelian`.`hargabeli` AS `hargabeli`,`det_pembelian`.`keluarbarang` AS `keluarbarang`,`det_pembelian`.`sisabarang` AS `sisabarang`,`pembelian`.`tglpembelian` AS `tglpembelian`,`pembelian`.`kodesupplier` AS `kodesupplier`,`pembelian`.`keterangan` AS `keterangan`,`ref_barang`.`namabarang` AS `namabarang`,`ref_barang`.`satuan` AS `satuan`,`ref_barang`.`harga` AS `harga`,`ref_barang`.`stok` AS `stok`,`ref_barang`.`gambar` AS `gambar`,`ref_supplier`.`namasupplier` AS `namasupplier`,`ref_supplier`.`alamat` AS `alamat`,`ref_supplier`.`notelp` AS `notelp` from (((`det_pembelian` join `pembelian` on((`det_pembelian`.`kodepembelian` = `pembelian`.`kodepembelian`))) join `ref_barang` on((`det_pembelian`.`kodebarang` = `ref_barang`.`kodebarang`))) join `ref_supplier` on((`pembelian`.`kodesupplier` = `ref_supplier`.`kodesupplier`))) */;

/*View structure for view vw_penjualan */

/*!50001 DROP TABLE IF EXISTS `vw_penjualan` */;
/*!50001 DROP VIEW IF EXISTS `vw_penjualan` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_penjualan` AS select `det_penjualan`.`iddetpenjualan` AS `iddetpenjualan`,`det_penjualan`.`kodepenjualan` AS `kodepenjualan`,`det_penjualan`.`kodebarang` AS `kodebarang`,`det_penjualan`.`jumlahjual` AS `jumlahjual`,`det_penjualan`.`hargajual` AS `hargajual`,`penjualan`.`tglpenjualan` AS `tglpenjualan`,`penjualan`.`kodesales` AS `kodesales`,`penjualan`.`kodetoko` AS `kodetoko`,`penjualan`.`keterangan` AS `keterangan`,`ref_barang`.`namabarang` AS `namabarang`,`ref_barang`.`satuan` AS `satuan`,`ref_barang`.`harga` AS `harga`,`ref_barang`.`stok` AS `stok`,`ref_barang`.`gambar` AS `gambar`,`ref_sales`.`namasales` AS `namasales`,`ref_sales`.`notelpsales` AS `notelpsales`,`ref_toko`.`namatoko` AS `namatoko`,`ref_toko`.`alamattoko` AS `alamattoko`,`ref_toko`.`pemiliktoko` AS `pemiliktoko`,`ref_toko`.`notelptoko` AS `notelptoko` from ((((`det_penjualan` join `penjualan` on((`det_penjualan`.`kodepenjualan` = `penjualan`.`kodepenjualan`))) join `ref_sales` on((`penjualan`.`kodesales` = `ref_sales`.`kodesales`))) join `ref_toko` on((`penjualan`.`kodetoko` = `ref_toko`.`kodetoko`))) join `ref_barang` on((`det_penjualan`.`kodebarang` = `ref_barang`.`kodebarang`))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
