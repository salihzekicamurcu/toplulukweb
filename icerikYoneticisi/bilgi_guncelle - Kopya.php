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
                    <li><a href="tanitim.php?menu=YonetimKurulu">YönetimKurulu</a></li>
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
if(isset($_POST['GenelBilgiGuncelle']))
{
	if(!empty($_POST['GenelBilgiler']))
	{
		$GenelBilgi=$_POST['GenelBilgiler'];
		//echo$GenelBilgi;
			$dosya=fopen("../toplulukBilgileri/GenelBilgiler.txt","w");
			if($dosya)
			{
				echo'<h3>Topluluk Bilgisi</h3>';
				echo'<br>'.$GenelBilgi;
				fwrite($dosya,$GenelBilgi);
				fclose($dosya);
				echo'<hr>';
				echo'<br>Şeklinde Güncellendi';
			}
			else
			{
				
				include("hata.php");
				echo'<br> Dizin Hatası Aranan Dosya Bulunamadı,Sistem Yöneticisine Başvurun';
			}
	}
	else
	{
		echo'boş bilgi girdiniz';
	}

}
else if(!empty($_POST['TuzukBilgiGuncelle']))
	{
		$TuzukBilgi=$_POST['TuzukBilgisi'];
		//echo$GenelBilgi;
			$dosya=fopen("../toplulukBilgileri/Tuzuk.txt","w");
			if($dosya)
			{
				echo'<h3>Tüzük Bilgisi</h3>';
				echo'<br>'.$TuzukBilgi;
				fwrite($dosya,$TuzukBilgi);
				fclose($dosya);
				echo'<hr>';
				echo'<br>Şeklinde Güncellendi';
			}
			else
			{
				
				include("hata.php");
				echo'<br> Dizin Hatası Aranan Dosya Bulunamadı,Sistem Yöneticisine Başvurun';
			}
	}
else if(!empty($_POST['YonetimKuruluGuncelle']))
	{
		$YonetimBilgi=$_POST['YonetimKuruluUyeleri'];
		//echo$GenelBilgi;
			$dosya=fopen("../toplulukBilgileri/YonetimListesi.txt","w");
			if($dosya)
			{
				echo'<h3>Tüzük Bilgisi</h3>';
				echo'<br>'.$YonetimBilgi;
				fwrite($dosya,$YonetimBilgi);
				fclose($dosya);
				echo'<hr>';
				echo'<br>Şeklinde Güncellendi';
			}
			else
			{
				
				include("hata.php");
				echo'<br> Dizin Hatası Aranan Dosya Bulunamadı,Sistem Yöneticisine Başvurun';
			}
	}
else if(!empty($_POST['TanitimBilgiGuncelle']))
	{
		$TanitimBilgi=$_POST['TanitimBilgisi'];
		//echo$GenelBilgi;
			$dosya=fopen("../toplulukBilgileri/TanitimYazisi.txt","w");
			if($dosya)
			{
				echo'<h3>Tanitim Bilgisi</h3>';
				echo'<br>'.$TanitimBilgi;
				fwrite($dosya,$TanitimBilgi);
				fclose($dosya);
				echo'<hr>';
				echo'<br>Şeklinde Güncellendi';
			}
			else
			{
				
				include("hata.php");
				echo'<br> Dizin Hatası Aranan Dosya Bulunamadı,Sistem Yöneticisine Başvurun';
			}
	}
else
{
	include("hata.php");
}


?><!-- InstanceEndEditable --> </div>

</div>

</body>
<!-- InstanceEnd --></html>
<link href="css/yonetimPaneli.css" rel="stylesheet" type="text/css" />
