<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/yonetimTemplate.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Yonetim Paneli</title>
<!-- InstanceEndEditable -->
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div class="zemin"><!-- InstanceBeginEditable name="EditRegion4" -->
  <div class="banner">İçerik Yonetim Paneli
    <?php 
session_start();
 if(isset($_SESSION['YoneticiAd']))
{	
echo':'.$_SESSION['YoneticiAd'];
	
}
else
{
die(':oturum aciniz<a href="index.php">Geri</a>');	

}

?>
  </div>
<!-- InstanceEndEditable -->
  <div class="header-menu">
    <ul>
        <li><a href="yonetim.php">Anasayfa</a></li>
        <li><a href="">Topluluk></a>
             <ul>
                <li><a href="#">Tanıtım></a>
						<ul>
                    	<li><a href="tanitim.php?menu=tanitim">Tanıtım Yazısı</a></li>
                        <li><a href="tanitim.php?menu=bilgiler">Bilgiler</a></li>
						<li><a href="tanitim.php?menu=tuzuk">Tüzük</a></li>
                    
                    </ul>
				</li>
                <li><a href="yonetim.php">Yonetim</a></li>
                <li><a href="#">Çalışma Grupları > </a>
                     <ul>
                        <li><a href="#">Grup Kur</a></li>
                        <li><a href="#">Düzenle</a></li>
                        <li><a href="#">Sil</a></li>
                        <li><a href="#">Grupları Görüntüle</a></li>
                    </ul>
                </li>
            </ul>
        </li>
		 <li><a href="">Etkinlik > </a>
                     <ul>
                        <li><a href="etkinlik.php?menu=etkinlikOlustur">Etkinlik Oluştur</a></li>
                        <li><a href="etkinlik.php?menu=etkinlikDuzenle">Etkinlik Düzenle</a></li>
                        <li><a href="etkinlik.php?menu=etkinlikTavsiyeleri">Etkinlik Tavsiyeleri</a></li>
                        <li><a href="etkinlik.php?menu=etkinliklerigoruntule">Etkinlikleri Görüntüle</a></li>
                    </ul>
                </li>
		 <li><a href="#">Haber > </a>
                     <ul>
                        <li><a href="haber.php?menu=haberEkle">Haber Ekle</a></li>
                        <li><a href="haber.php?menu=haberDuzenle">Haber Düzenle</a></li>
                        <li><a href="haber.php?menu=tumHaberler">Tüm Haberler</a></li>
                     </ul>
                </li>		
         <li><a href="">Duyuru > </a>
                     <ul>
                        <li><a href="duyuru.php?menu=duyuruOlustur">Duyuru Oluştur</a></li>
                        <li><a href="duyuru.php?menu=duyuruDuzenle">Duyuru Düzenle</a></li>
                        <li><a href="duyuru.php?menu=duyuruGoruntule">Duyuruları Görüntüle</a></li>
                    </ul>
                </li>
      <li><a href="">Galeri > </a>
                     <ul>
                        <li><a href="#">Albümler></a>
							<ul>
								<li><a href="galeri.php?menu=albumEkle">Albüm Ekle</a></li>
								<li><a href="galeri.php?menu=albumDuzenle">Albüm Düzenle</a></li>
								<li><a href="galeri.php?menu=albumGoruntule">Albüm Görüntüle</a></li>
							</ul>
						</li>
                        <li><a href="#">İcerik></a>
								<ul>
								<li><a href="icerik.php?menu=icerikEkle">İçerik Ekle</a></li>
								<li><a href="icerik.php?menu=icerikYukle">İçerik Yükle</a></li>	
								<li><a href="icerik.php?menu=icerikGoruntule">İçerik Görüntüle</a></li>
							</ul>
						
						</li>
                        <li><a href="#">Diğer></a>
								<ul>
								<li><a href="dokuman.php?menu=dokumanEkle">Döküman Ekle</a></li>
								<li><a href="dokuman.php?menu=dokumanDuzenle">Döküman Düzenle</a></li>
								<li><a href="dokuman.php?menu=dokumanGoruntule">Dökümanları Görüntüle</a></li>
							</ul>
						</li>
                    </ul>
                </li>
        <li><a href="">Üye></a>
			<ul>
				<li><a href="uye.php?menu=uyeDuzenle">Üye Düzenle</a></li>
				<li><a href="uye.php?menu=bekleyenUyelikler">Bekleyen Üyelikler</a></li>
                <li><a href="uye.php?menu=uyeler">Üyeleri Görüntüle</a></li>
               
			</ul>
		
		</li>
        <li class="cikis"><a href="out.php">Çıkış</a></li>
    </ul>
</div>
<div class="icerik"><!-- InstanceBeginEditable name="DegistirilebilirAlan" -->
<?php

	if(isset($_POST['Ara']))
	{
	
		if(isset($_POST['AramaTip']))
		{
			$tip=$_POST['AramaTip'];
			if($tip==1)
			{
				if(!empty($_POST['KullaniciAdi']))
				{
					$KullaniciAdi=$_POST['KullaniciAdi'];
					//echo'"'.$KullaniciAdi.'" Aranıyor...<br>';
					ara($KullaniciAdi,1);
				}
				else
				{
					echo'Kullanıcı Adını Unuttun<br>';
					include("hata.php");
				}
			
			}
			else if($tip==2)
			{
				if(!empty($_POST['UyeAd']))
				{
					
					$UyeAd=$_POST['UyeAd'];
					//echo$UyeAd.' Aranıyor...<br>';
					ara($UyeAd,2);
					
				}
				else
				{
					echo'Ad Girmeyi Unuttun <br>';
					include("hata.php");
				}
			
			}
			else if($tip==3)
			{	
				if(!empty($_POST['UyeSoyad']))
				{
					$UyeSoyad=$_POST['UyeSoyad'];
					//echo$UyeSoyad.' Aranıyor...<br>';
					ara($UyeSoyad,3);
				}
				else
				{
					echo'Soyadı Girmeyi Unuttun<br>';
					include("hata.php");
				}
			
			}
			else
			{
				include("hata.php");
			}
		
		
		}
		else
		{
		
		}
	
	}
	else if(isset($_POST['DuzenlemeUygula']))
	{
	
		/*
			DÜZENLEME İŞLEMLERİNİ YAPIP KAYDETME
		*/
		echo'duzenleme uygula';
		if(empty($_POST['UyeAd']))
		{
			echo'Uye Ad Boş Olamaz';
		}
		else if(empty($_POST['UyeSoyad']))
		{
			echo'Uye Soyad Boş Olamaz';
		}
		else if(empty($_POST['Email']))
		{
			echo'Email Boş Olamaz';
		}
		else if(empty($_POST['Telefon']))
		{
			
			$Telefon="0000000000";
			echo'<br>Telefon Boş Girişmiş<br>';
			
		}
		else if(strlen($_POST['Telefon'])!=10)
		{
				echo'Telefon Numarası 10 Haneli Olmak Zorunda';
		}
		else
		{
		
		
			$UyeID=$_POST['UyeID'];
			$UyeAd=$_POST['UyeAd'];
			$UyeSoyad=$_POST['UyeSoyad'];
			$Email=$_POST['Email'];
			$Telefon=$_POST['Telefon'];
			include("db_baglan.php");
			$SQL="update  tablo_uye set UyeAd='$UyeAd',UyeSoyad='$UyeSoyad',Email='$Email',Telefon='$Telefon' where UyeID='$UyeID'";
			$sorgu=mysql_query($SQL,$baglanti);
			$sorgu_duzenle=mysql_query($SQL,$baglanti);
			if($sorgu_duzenle>0)
			{
				echo'Güncelleştirildi...';
			}
			else
			{
				include("hata.php");
			}
		}
	
	
	}
	else if(isset($_POST['Sil']))
	{
		/*
		
			ÜYEYİ SİL
		*/
		//echo'sil';
		include("db_baglan.php");
		$UyeID=$_POST['UyeID'];
		$SQL="delete from tablo_uye where UyeID='$UyeID'";
		$sorgu=mysql_query($SQL,$baglanti);
		if($sorgu>0)
		{
			echo'Silindi....';
		}
		else
		{
			include("hata.php");
		}
	}
	else
	{
	
		include("hata.php");
	}
	/*
	
		istenilen tipte arama yapan ve üyenin tüm bilgilerini yazan fonksiyon
	*/
	function  ara($deger,$tip)
	{
		include("db_baglan.php");
		if($tip==1)
		{
			/*KULLANICI ADINA GÖRE ARA*/
			$SQL="select * from tablo_uye where KullaniciAdi like '%$deger%'";
		
		}
		else if($tip==2)
		{
			/* ADA GÖRE ARA*/
			$SQL="select * from tablo_uye where UyeAd like'%$deger%'";
		}
		else if($tip==3)
		{
			/*SOYADA GÖRE ARA*/
			$SQL="select * from tablo_uye where UyeSoyad like'%$deger%";
		}
		else
		{
			include("hata.php");
		}
		echo'<br>"'.$deger.'" Aranıyor...<br>';
		$sorgu=mysql_query($SQL,$baglanti);
		if($sorgu>0)
		{
			while($gelen_veri=mysql_fetch_array($sorgu))
			{
			//	print_r($gelen_veri);
				/*
					ARANILAN DEĞERLER BULUNDU DÜZENLEME FORMU
				*/
				echo'<fieldset><legend>Üye Bilgilerini Düzenle</legend>';
				echo'<form action="bul_duzenle.php" method="POST"><table>';
				echo'<tr><td> Üye ID</td><td>'.$gelen_veri['UyeID'].'</td></tr>';
				echo'<tr><td>KullanıcıAdı </td><td>'.$gelen_veri['KullaniciAdi'].'</td></tr>';
				echo'<tr><td>Üye Ad </td>     <td><input type="text" maxlength="20" name="UyeAd" value="'.$gelen_veri['UyeAd'].'"</td></tr>';
				echo'<tr><td>Üye Soyad</td>   <td><input type="text"  maxlength="20" name="UyeSoyad" value="'.$gelen_veri['UyeSoyad'].'"</td></tr>';
				echo'<tr><td>Mail Adresi </td><td><input type="Email" maxlength="20"  name="Email" value="'.$gelen_veri['Email'].'"</td></tr>';
				echo'<tr><td>Telefon </td>    <td><input type="text" maxlength="10" name="Telefon" value="'.$gelen_veri['Telefon'].'"</td></tr>';	
				echo'<tr><td>Üye Olma Tarihi </td><td>'.$gelen_veri['UyelikTarihi'].'</td></tr>';	
				
				echo'<tr><td><input type="reset" value="İptal Et"/>
				<input type="submit" value="Üyeyi Sil" name="Sil"/></td>';
				
				echo'<td><input type="submit" name="DuzenlemeUygula" value="    Değişiklikleri    Kaydet "/></td></tr>';
				
				
				
				echo'<input type="hidden" name="UyeID" value="'.$gelen_veri['UyeID'].'"></input>';
				echo'</table></form>';
				/*
					DÜZENLEME FORMU SONU
				*/
				
			}
			
		}
		else
		{
			echo'Kişi Bulunamadi';
		}
	
	}



?>
<!-- InstanceEndEditable -->




 </div>

</div>

</body>
<!-- InstanceEnd --></html>
<link href="css/yonetimPaneli.css" rel="stylesheet" type="text/css" />
