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

	if(isset($_GET['DuyuruID']))
	{
		if(!empty($_GET['DuyuruID']))
		{
			echo'Duzenle'.$_GET['DuyuruID'];
			$guncelle_id=$_GET['DuyuruID'];
			include("db_baglan.php");
			$SQL="select * from tablo_duyuru where DuyuruID='$guncelle_id'";
			$sorgu_getir=mysql_query($SQL,$baglanti);
			if($sorgu_getir>0)
			{
				while($gelen_veri=mysql_fetch_array($sorgu_getir))
				{
					echo'<br><br>';
					echo'<form action="duyuruDuzenle.php" method="Post">
						<table border ="3">
						';
						echo'<tr><th>Duyuru Başlik </th><td width="100px"><input  type="text" size="100px" value="'.$gelen_veri['DuyuruBaslik'].'" name="DuyuruBaslik"/></td></tr>';
						//echo'<tr><th>Etkinlik Tarih</th><td><input type="text" value="'.$gelen_veri['EtkinlikTarih'].'"/></td></tr>';
						echo'<tr><th>Duyuru Tarih  Seç</th><td>'.$gelen_veri['DuyuruTarih'].'</td></tr>';
						echo'<tr><th>Duyuru Metni</th><td><textarea name="DuyuruMetni" rows="20px" cols="100px">'.$gelen_veri['DuyuruMetni'].' </textarea></td></tr>';
						echo'<tr><td>&nbsp;</td><td><input type="reset" value="Temizle"/>&nbsp;&nbsp;<input type="submit" name="DuzenleDuyuru" value="Düzenle"/></td></tr>';
						$uyeid=$_SESSION['YoneticiID'];
						echo'<input type="hidden" name="UyeID" value="'.$uyeid.'"/>';
						echo'<input type="hidden" name="guncelle_DuyuruID" value="'.$guncelle_id.'"/>';
					
						
					echo'</table></form>';
				
				
				
				}
			}else
			{	
				
				include("hata.php?hata=Sunucu Sorunu");
			}
		}
		
	}
	else if($_POST['DuzenleDuyuru'])
	{
			/*
				HABERİ VERİTABANINA KAYDET
			*/
			
			if(empty($_POST['DuyuruBaslik']))
			{
				/*
					HABER BAŞLIĞı Girilmemiş
				*/
				echo'Başlık Boş Girilmiş';
			}
			else if(empty($_POST['DuyuruMetni']))
			{
				echo'Etkinlik Metni Boş Girilmiş';
			}

			else
			{
				include("db_baglan.php");
				$DuyuruBaslik=$_POST['DuyuruBaslik'];
				$DuyuruMetni=$_POST['DuyuruMetni'];
				$guncelle=$_POST['guncelle_DuyuruID'];

				$uye=$_SESSION['YoneticiID'];
		
							
							
							$SQL_haber="update tablo_duyuru set DuyuruBaslik='$DuyuruBaslik',DuyuruMetni='$DuyuruMetni'
							where DuyuruID='$guncelle'";			
						$sorgu_haberekle=mysql_query($SQL_haber,$baglanti);
						if($sorgu_haberekle>0)
						{
							echo'<br>Duyuru Düzenlendi';
						}
						else
						{
							echo'Düzenlenemedi';
							include("hata.php");
						}					
						/*
						HABERİ VERİTABANINA KAYDET SON
						*/
			/*
				HABER FORMU KURALLARA UYGUN SON 
			*/
		}
	
	
	
	
	
	
	}
	else
	{
		include("hata.php");
	}






?>
<!-- InstanceEndEditable --> </div>

</div>

</body>
<!-- InstanceEnd --></html>
<link href="css/yonetimPaneli.css" rel="stylesheet" type="text/css" />
