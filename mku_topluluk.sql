-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 May 2014, 17:52:42
-- Sunucu sürümü: 5.5.32
-- PHP Sürümü: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `mku_topluluk`
--
CREATE DATABASE IF NOT EXISTS `mku_topluluk` DEFAULT CHARACTER SET utf16 COLLATE utf16_turkish_ci;
USE `mku_topluluk`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tablo_duyuru`
--

CREATE TABLE IF NOT EXISTS `tablo_duyuru` (
  `DuyuruID` int(11) NOT NULL AUTO_INCREMENT,
  `DuyuruBaslik` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `DuyuruMetni` varchar(800) COLLATE utf8_turkish_ci DEFAULT NULL,
  `DuyuruTarih` datetime DEFAULT NULL,
  `UyeID` int(11) DEFAULT NULL,
  `ResimLink1` varchar(80) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ResimLink2` varchar(80) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`DuyuruID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=19 ;

--
-- Tablo döküm verisi `tablo_duyuru`
--

INSERT INTO `tablo_duyuru` (`DuyuruID`, `DuyuruBaslik`, `DuyuruMetni`, `DuyuruTarih`, `UyeID`, `ResimLink1`, `ResimLink2`) VALUES
(1, 'Duyuru Başlık', 'Duyuru Metni ', '2014-05-02 16:02:51', 1, NULL, NULL),
(2, 'Mazaret Sınavları', 'Mazaret Sınavları 05/05/2014 Tarihinde Yapılacaktır.', '2014-05-02 18:12:05', 1, NULL, NULL),
(3, 'Kayıt Deneme Duyurusu', 'deneme duyuru metin ', '2014-05-03 03:39:48', 1, NULL, NULL),
(4, 'Duyuru', 'duyuru ', '2014-05-03 03:39:48', 1, NULL, NULL),
(5, 'Duyuru', 'duyuru ', '2014-05-03 03:39:48', 1, NULL, NULL),
(6, 'Duyuru', 'duyuru ', '2014-05-03 03:39:48', 1, NULL, NULL),
(7, 'Duyuru', 'duyuru ', '2014-05-03 03:39:48', 1, NULL, NULL),
(8, 'Duyuru', 'duyuru ', '2014-05-03 03:39:48', 1, NULL, NULL),
(9, 'Duyuru', 'duyuru ', '2014-05-03 03:39:48', 1, NULL, NULL),
(10, 'Duyuru', 'duyuru ', '2014-05-03 03:39:48', 1, NULL, NULL),
(11, 'Duyuru', 'duyuru ', '2014-05-03 03:39:48', 1, NULL, NULL),
(12, 'Duyuru', 'duyuru ', '2014-05-03 03:39:48', 1, NULL, NULL),
(13, 'Duyuru', 'duyuru ', '2014-05-03 03:39:48', 1, NULL, NULL),
(14, 'Duyuru', 'duyuru ', '2014-05-03 03:39:48', 1, NULL, NULL),
(15, 'Duyuru', 'duyuru ', '2014-05-03 03:39:48', 1, NULL, NULL),
(16, 'Duyuru', 'duyuru ', '2014-05-03 03:39:48', 1, NULL, NULL),
(17, 'Test Duyuru', 'Test Duyuru Metni ', '2014-05-09 15:02:27', 1, NULL, NULL),
(18, 'Bir Duyuru Başlığı', 'Bir Duyuru Metni ', '2014-05-11 17:44:12', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tablo_etkinlikler`
--

CREATE TABLE IF NOT EXISTS `tablo_etkinlikler` (
  `EtkinlikID` int(11) NOT NULL AUTO_INCREMENT,
  `EtkinlikBaslik` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `EtkinlikMetni` varchar(165) COLLATE utf8_turkish_ci DEFAULT NULL,
  `EtkinlikTarih` datetime DEFAULT NULL,
  `UyeID` int(11) DEFAULT NULL,
  PRIMARY KEY (`EtkinlikID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=27 ;

--
-- Tablo döküm verisi `tablo_etkinlikler`
--

INSERT INTO `tablo_etkinlikler` (`EtkinlikID`, `EtkinlikBaslik`, `EtkinlikMetni`, `EtkinlikTarih`, `UyeID`) VALUES
(3, 'Bahar Şenliği', ' Bahar Şenlikleri Spor Yarışmaları', '2014-05-04 08:15:00', 1),
(4, 'Kayıt Deneme Etkinlik', ' kayıt deneme etkinlik metni', '2015-05-12 13:30:00', 1),
(5, 'kayit deneme', 'kayit deneme', '2015-05-12 13:30:00', 1),
(6, 'kayit deneme', 'kayit deneme', '2015-05-12 13:30:00', 1),
(7, 'kayit deneme', 'kayit deneme', '2015-05-12 13:30:00', 1),
(8, 'kayit deneme', 'kayit deneme', '2015-05-12 13:30:00', 1),
(9, 'kayit deneme', 'kayit deneme', '2015-05-12 13:30:00', 1),
(10, 'kayit deneme', 'kayit deneme', '2015-05-12 13:30:00', 1),
(11, 'kayit deneme', 'kayit deneme', '2015-05-12 13:30:00', 1),
(12, 'kayit deneme', 'kayit deneme', '2015-05-12 13:30:00', 1),
(13, 'kayit deneme', 'kayit deneme', '2015-05-12 13:30:00', 1),
(14, 'kayit deneme', 'kayit deneme', '2015-05-12 13:30:00', 1),
(15, 'kayit deneme', 'kayit deneme', '2015-05-12 13:30:00', 1),
(16, 'kayit deneme', 'kayit deneme', '2015-05-12 13:30:00', 1),
(17, 'kayit deneme', 'kayit deneme', '2015-05-12 13:30:00', 1),
(18, 'kayit deneme', 'kayit deneme', '2015-05-12 13:30:00', 1),
(19, 'kayit deneme', 'kayit deneme', '2015-05-12 13:30:00', 1),
(20, 'kayit deneme', 'kayit deneme', '2015-05-12 13:30:00', 1),
(21, 'kayit deneme', 'kayit deneme', '2015-05-12 13:30:00', 1),
(22, 'kayit deneme', 'kayit deneme', '2015-05-12 13:30:00', 1),
(23, 'kayit deneme', 'kayit deneme', '2015-05-12 13:30:00', 1),
(24, 'kayit deneme', 'kayit deneme', '2015-05-12 13:30:00', 1),
(25, 'Test Deneme Etkinlik', ' test deneme etkinlik ', '2014-06-01 13:00:00', 1),
(26, 'bilal hoca', ' deneme resim', '2014-01-01 13:00:00', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tablo_galeri`
--

CREATE TABLE IF NOT EXISTS `tablo_galeri` (
  `GaleriID` int(11) NOT NULL AUTO_INCREMENT,
  `AlbumAdi` varchar(45) CHARACTER SET utf16 COLLATE utf16_turkish_ci NOT NULL,
  `AlbumTarih` datetime DEFAULT NULL,
  `UyeID` int(11) DEFAULT NULL,
  `DosyaYolu` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`GaleriID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=21 ;

--
-- Tablo döküm verisi `tablo_galeri`
--

INSERT INTO `tablo_galeri` (`GaleriID`, `AlbumAdi`, `AlbumTarih`, `UyeID`, `DosyaYolu`) VALUES
(1, 'Dokuman', '2014-04-27 17:23:00', 1, 'albumler/dokuman'),
(2, 'Haber', '2014-04-27 17:23:00', 1, 'albumler/haber'),
(13, 'TeknikGezi', '2014-05-03 01:52:52', 1, 'albumler/TeknikGezi'),
(14, 'Konferans', '2014-05-03 01:53:03', 1, 'albumler/Konferans'),
(15, 'Soylesi', '2014-05-03 01:53:10', 1, 'albumler/Soylesi'),
(16, 'deneme_adli_album_duzenleme', '2014-05-03 03:37:15', 1, 'albumler/deneme_adli_album'),
(18, 'Son_Deneme_Album', '2014-05-09 14:54:30', 1, 'albumler/Son_Deneme_Album'),
(19, 'salih_album', '2014-05-09 19:55:18', 1, 'albumler/salih_album'),
(20, 'AlbumAdi', '2014-05-11 17:45:43', 1, 'albumler/AlbumAdi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tablo_haberler`
--

CREATE TABLE IF NOT EXISTS `tablo_haberler` (
  `HaberID` int(11) NOT NULL AUTO_INCREMENT,
  `HaberBaslik` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `HaberMetni` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `HaberTarih` datetime NOT NULL,
  `UyeID` int(11) NOT NULL,
  `ResimLink1` varchar(80) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ResimLink2` varchar(80) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ResimLink3` varchar(80) COLLATE utf8_turkish_ci DEFAULT NULL,
  `VideoLink` varchar(80) COLLATE utf8_turkish_ci DEFAULT NULL,
  `GaleriID` int(11) DEFAULT NULL,
  PRIMARY KEY (`HaberID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=30 ;

--
-- Tablo döküm verisi `tablo_haberler`
--

INSERT INTO `tablo_haberler` (`HaberID`, `HaberBaslik`, `HaberMetni`, `HaberTarih`, `UyeID`, `ResimLink1`, `ResimLink2`, `ResimLink3`, `VideoLink`, `GaleriID`) VALUES
(1, 'deneme haber baslik', 'deneme haber metni ', '2014-05-03 03:38:27', 1, 'Haber_140503_03-38-44.jpeg', NULL, NULL, 'NaN', 2),
(2, 'resimsiz bir haber ', 'resimsiz bir haber metni ', '2014-05-03 03:38:47', 1, NULL, NULL, NULL, 'NaN', 2),
(3, 'Başlık', 'düzenle', '2014-05-09 15:52:29', 1, NULL, NULL, NULL, NULL, NULL),
(4, 'Başlık', 'haber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber ', '2014-05-03 03:38:47', 1, NULL, NULL, NULL, NULL, NULL),
(5, 'Başlık', 'haber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber ', '2014-05-03 03:38:47', 1, NULL, NULL, NULL, NULL, NULL),
(6, 'Başlık', 'haber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber ', '2014-05-03 03:38:47', 1, NULL, NULL, NULL, NULL, NULL),
(7, 'Başlık', 'haber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber ', '2014-05-03 03:38:47', 1, NULL, NULL, NULL, NULL, NULL),
(8, 'Başlık', 'haber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber ', '2014-05-03 03:38:47', 1, NULL, NULL, NULL, NULL, NULL),
(9, 'Başlık', 'haber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber ', '2014-05-03 03:38:47', 1, NULL, NULL, NULL, NULL, NULL),
(10, 'Başlık', 'haber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber ', '2014-05-03 03:38:47', 1, NULL, NULL, NULL, NULL, NULL),
(11, 'Başlık', 'haber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber ', '2014-05-03 03:38:47', 1, NULL, NULL, NULL, NULL, NULL),
(12, 'Başlık', 'haber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber ', '2014-05-03 03:38:47', 1, NULL, NULL, NULL, NULL, NULL),
(13, 'Başlık', 'haber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber ', '2014-05-03 03:38:47', 1, NULL, NULL, NULL, NULL, NULL),
(14, 'Başlık', 'haber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber ', '2014-05-03 03:38:47', 1, NULL, NULL, NULL, NULL, NULL),
(15, 'Başlık', 'haber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber ', '2014-05-03 03:38:47', 1, NULL, NULL, NULL, NULL, NULL),
(16, 'Başlık', 'haber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber ', '2014-05-03 03:38:47', 1, NULL, NULL, NULL, NULL, NULL),
(17, 'Başlık', 'haber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber ', '2014-05-03 03:38:47', 1, NULL, NULL, NULL, NULL, NULL),
(18, 'Başlık', 'haber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber ', '2014-05-03 03:38:47', 1, NULL, NULL, NULL, NULL, NULL),
(19, 'Başlık', 'haber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber ', '2014-05-03 03:38:47', 1, NULL, NULL, NULL, NULL, NULL),
(20, 'Başlık', 'haber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber ', '2014-05-03 03:38:47', 1, NULL, NULL, NULL, NULL, NULL),
(21, 'Başlık', 'haber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber ', '2014-05-03 03:38:47', 1, NULL, NULL, NULL, NULL, NULL),
(22, 'Başlık', 'haber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber ', '2014-05-03 03:38:47', 1, NULL, NULL, NULL, NULL, NULL),
(23, 'Başlık', 'haber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber ', '2014-05-03 03:38:47', 1, NULL, NULL, NULL, NULL, NULL),
(24, 'Başlık', 'haber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber ', '2014-05-03 03:38:47', 1, NULL, NULL, NULL, NULL, NULL),
(25, 'Başlık', 'haber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber ', '2014-05-03 03:38:47', 1, NULL, NULL, NULL, NULL, NULL),
(26, 'Başlık', 'haber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber haberhaber haberhaber haber haber haberhaber haberhaber ', '2014-05-03 03:38:47', 1, NULL, NULL, NULL, NULL, NULL),
(27, 'weges', ' gsedg', '2014-05-09 15:52:49', 1, 'Haber_140509_15-53-21.png', NULL, NULL, 'NaN', 2),
(28, 'bilal hoca haber', 'haber ', '2014-05-09 19:54:29', 1, 'Haber_140509_19-54-44.png', NULL, NULL, 'NaN', 2),
(29, 'Bir Haber Başlığı Yaz', 'Bir Haber Metni yaz', '2014-05-11 17:42:59', 1, 'Haber_140511_17-43-24.jpeg', NULL, NULL, 'NaN', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tablo_icerik`
--

CREATE TABLE IF NOT EXISTS `tablo_icerik` (
  `IcerikID` int(11) NOT NULL AUTO_INCREMENT,
  `IcerikAdi` varchar(100) COLLATE utf16_turkish_ci DEFAULT NULL,
  `IcerikTarih` datetime DEFAULT NULL,
  `GaleriID` int(11) DEFAULT NULL,
  `IcerikLink` varchar(100) COLLATE utf16_turkish_ci DEFAULT NULL,
  `UyeID` varchar(45) COLLATE utf16_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`IcerikID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci AUTO_INCREMENT=33 ;

--
-- Tablo döküm verisi `tablo_icerik`
--

INSERT INTO `tablo_icerik` (`IcerikID`, `IcerikAdi`, `IcerikTarih`, `GaleriID`, `IcerikLink`, `UyeID`) VALUES
(1, 'Resim140503_03-37-56.jpeg', '2014-05-03 03:37:42', 16, '../topluluk/albumler/deneme_adli_album/Resim140503_03-37-56.jpeg', '1'),
(2, 'Resim140503_03-37-56.jpeg', '2014-05-03 03:37:42', 16, '../topluluk/albumler/deneme_adli_album/Resim140503_03-37-56.jpeg', '1'),
(3, 'deneme haber baslik', '2014-05-03 03:38:27', 2, '../topluluk/albumler/haber/Haber_140503_03-38-44.jpeg', '1'),
(4, 'Resim140503_03-42-39.jpeg', '2014-05-03 03:41:42', 14, '../topluluk/albumler/Konferans/Resim140503_03-42-39.jpeg', '1'),
(5, 'Resim140503_03-42-39.jpeg', '2014-05-03 03:41:42', 14, '../topluluk/albumler/Konferans/Resim140503_03-42-39.jpeg', '1'),
(6, 'Resim140503_03-42-39.jpeg', '2014-05-03 03:41:42', 14, '../topluluk/albumler/Konferans/Resim140503_03-42-39.jpeg', '1'),
(7, 'Resim140503_03-42-39.jpeg', '2014-05-03 03:41:42', 14, '../topluluk/albumler/Konferans/Resim140503_03-42-39.jpeg', '1'),
(8, 'Resim140503_03-42-40.jpeg', '2014-05-03 03:41:42', 14, '../topluluk/albumler/Konferans/Resim140503_03-42-40.jpeg', '1'),
(9, 'Resim140503_03-42-40.jpeg', '2014-05-03 03:41:42', 14, '../topluluk/albumler/Konferans/Resim140503_03-42-40.jpeg', '1'),
(10, 'Resim140503_03-42-40.jpeg', '2014-05-03 03:41:42', 14, '../topluluk/albumler/Konferans/Resim140503_03-42-40.jpeg', '1'),
(11, 'Resim140503_03-42-40.jpeg', '2014-05-03 03:41:42', 14, '../topluluk/albumler/Konferans/Resim140503_03-42-40.jpeg', '1'),
(12, 'Resim140503_03-42-40.jpeg', '2014-05-03 03:41:42', 14, '../topluluk/albumler/Konferans/Resim140503_03-42-40.jpeg', '1'),
(13, 'Resim140503_03-46-32.jpeg', '2014-05-03 03:46:21', 15, '../topluluk/albumler/Soylesi/Resim140503_03-46-32.jpeg', '1'),
(14, 'Resim140503_03-46-32.jpeg', '2014-05-03 03:46:21', 15, '../topluluk/albumler/Soylesi/Resim140503_03-46-32.jpeg', '1'),
(15, 'Resim140503_03-46-32.jpeg', '2014-05-03 03:46:21', 15, '../topluluk/albumler/Soylesi/Resim140503_03-46-32.jpeg', '1'),
(16, 'Resim140503_03-46-33.jpeg', '2014-05-03 03:46:21', 15, '../topluluk/albumler/Soylesi/Resim140503_03-46-33.jpeg', '1'),
(17, 'Resim140503_03-46-33.jpeg', '2014-05-03 03:46:21', 15, '../topluluk/albumler/Soylesi/Resim140503_03-46-33.jpeg', '1'),
(18, 'Resim140503_03-46-33.jpeg', '2014-05-03 03:46:21', 15, '../topluluk/albumler/Soylesi/Resim140503_03-46-33.jpeg', '1'),
(19, 'Resim140503_03-47-480.jpeg', '2014-05-03 03:47:40', 16, '../topluluk/albumler/deneme_adli_album/Resim140503_03-47-480.jpeg', '1'),
(20, 'Resim140503_03-47-481.jpeg', '2014-05-03 03:47:40', 16, '../topluluk/albumler/deneme_adli_album/Resim140503_03-47-481.jpeg', '1'),
(21, 'Resim140503_03-47-482.jpeg', '2014-05-03 03:47:40', 16, '../topluluk/albumler/deneme_adli_album/Resim140503_03-47-482.jpeg', '1'),
(22, 'Resim140503_03-47-483.jpeg', '2014-05-03 03:47:40', 16, '../topluluk/albumler/deneme_adli_album/Resim140503_03-47-483.jpeg', '1'),
(23, 'deneme -0', '2014-05-09 05:24:02', 1, '../topluluk/albumler/dokuman/Dokuman140509_05-24-23.pdf', '1'),
(24, 'Sinav Sonuçları-0', '2014-05-09 05:24:33', 1, '../topluluk/albumler/dokuman/Dokuman140509_05-25-03.pdf', '1'),
(25, 'Resim140509_02-52-310.png', '2014-05-09 14:52:19', 17, '../topluluk/albumler/Son Deneme Albüm/Resim140509_02-52-310.png', '1'),
(26, 'Resim140509_02-53-560.jpeg', '2014-05-09 14:53:48', 17, '../topluluk/albumler/Son Deneme Albüm/Resim140509_02-53-560.jpeg', '1'),
(27, 'Resim140509_02-54-450.png', '2014-05-09 14:54:35', 18, '../topluluk/albumler/Son_Deneme_Album/Resim140509_02-54-450.png', '1'),
(28, 'weges', '2014-05-09 15:52:49', 2, '../topluluk/albumler/haber/Haber_140509_15-53-21.png', '1'),
(29, 'bilal hoca haber', '2014-05-09 19:54:29', 2, '../topluluk/albumler/haber/Haber_140509_19-54-44.png', '1'),
(30, 'Resim140509_07-55-320.png', '2014-05-09 19:55:23', 19, '../topluluk/albumler/salih_album/Resim140509_07-55-320.png', '1'),
(31, 'Bir Haber Başlığı Yaz', '2014-05-11 17:42:59', 2, '../topluluk/albumler/haber/Haber_140511_17-43-24.jpeg', '1'),
(32, 'Resim140511_05-46-110.jpeg', '2014-05-11 17:45:57', 20, '../topluluk/albumler/AlbumAdi/Resim140511_05-46-110.jpeg', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tablo_uye`
--

CREATE TABLE IF NOT EXISTS `tablo_uye` (
  `UyeID` int(11) NOT NULL AUTO_INCREMENT,
  `KullaniciAdi` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `UyeAd` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `UyeSoyad` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `Sifre` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `Email` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `Telefon` varchar(11) COLLATE utf8_turkish_ci DEFAULT NULL,
  `UyelikTarihi` datetime NOT NULL,
  PRIMARY KEY (`UyeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=20 ;

--
-- Tablo döküm verisi `tablo_uye`
--

INSERT INTO `tablo_uye` (`UyeID`, `KullaniciAdi`, `UyeAd`, `UyeSoyad`, `Sifre`, `Email`, `Telefon`, `UyelikTarihi`) VALUES
(1, 'salihzekicamurcu', 'Salih Zeki', 'Çamurcu', '123456', 'salihzekicamurcu@yahoo.com', '5405415252', '2014-04-28 01:18:22'),
(2, 'erenarslan', 'Eren ', 'Arslan', '963852', 'erenarslan@gmail.com', '0000000000', '2014-04-28 01:20:39'),
(3, 'MehmetAli', 'Mehmet Ali', 'Türkan', '123456', 'mrhmt@gmail.com', '00000000000', '2014-04-29 05:04:06'),
(4, 'durmus', 'Durmuş ', 'Gürbüz', '123456', 'durmusgurbuz@gmail.com', '00000000000', '2014-04-30 02:58:27'),
(6, 'NumanAksu', 'Numan ', 'Aksu', '123456', 'numan_aksu@gmail.com', '00000000000', '2014-04-30 02:59:17'),
(7, 'Kokmazz', 'Korkmaz ', 'Güler', '123852', 'Kkorkmaz@gmail.com', '00000000000', '2014-04-30 02:59:41'),
(8, 'Urall', 'Ural', 'Balkanlı', '125874', 'ural_balkanli@gmail.com', '00000000000', '2014-04-30 03:31:01'),
(9, 'Sefa', 'Sefa', 'Çavuş', '123654', 'sefa_cavus@gmail.com', '00000000000', '2014-04-30 03:31:32'),
(12, 'Ahmet', 'Ahmet', 'Şahin', '123654', 'ahhmet@gmail.com', '0000000000', '2014-04-30 04:08:30'),
(14, 'deneme', 'deneme', 'deneme', 'deneme', 'deneme@deneme.com', '0000000000', '2014-04-30 14:21:56'),
(15, 'deneme', 'deneme', 'deneme', 'deneme', 'deneme@deneme.com', '0000000000', '2014-05-01 21:52:54'),
(16, 'numanturhan', 'Ahmet', 'turhan', '123456', 'numan@hotmail.com', '0000000000', '2014-05-02 18:53:44'),
(17, 'denemekullaniciadi', 'deneme', 'denemesoyad', '741852', 'deneme@hotmail.com', '0000000000', '2014-05-03 03:34:43'),
(18, 'deneme', 'deneme', 'deneme', '123456', 'denem@gmail.com', '0000000000', '2014-05-09 19:52:14'),
(19, 'YakupKutlu', 'Yakup', 'Kutlu', '123456', 'yakupkutlu@mku.edu.tr', '0000000000', '2014-05-11 17:39:57');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tablo_yonetici`
--

CREATE TABLE IF NOT EXISTS `tablo_yonetici` (
  `YoneticiID` int(11) NOT NULL AUTO_INCREMENT,
  `UyeID` varchar(45) CHARACTER SET utf16 COLLATE utf16_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`YoneticiID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `tablo_yonetici`
--

INSERT INTO `tablo_yonetici` (`YoneticiID`, `UyeID`) VALUES
(1, '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
