<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml">
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
/*
					TÜM ÜYELERİ GÖRÜNTÜLE
				*/	
				include("db_baglan.php");
				/*
				
					Girilen Sayfa Sayısına Karşılık Bir Veri Grubu Varmı?
				
				*/
				
				$SQL_tum_uye_sayisi="select * from tablo_uye";
				$sorgu_tum_uye_sorgu=mysql_query($SQL_tum_uye_sayisi,$baglanti);
				if($sorgu_tum_uye_sorgu)
				{
					$sayfa_kac_kisi=10;
					/*
						Her Sayfada 10 Kayıt Yer Alacak
					*/
					$kayit_sayisi=mysql_num_rows($sorgu_tum_uye_sorgu);
					$uye_sayisi=$kayit_sayisi/$sayfa_kac_kisi;
				
					if($kayit_sayisi%$sayfa_kac_kisi>=1)
					{
						$uye_sayisi=(int)$uye_sayisi+1;
					}
				}
				
				
				/*
					Gelen Sayfayı belirleme
				*/
				if(isset($_GET['sayfa']))
				{	
					
					if(empty($_GET['sayfa']))
					{
						$sayfa=1;
					}
					else if(!is_numeric($_GET['sayfa']))
					{
						$sayfa=1;
					}
					else if((is_numeric($_GET['sayfa']))&&($_GET['sayfa']<0))
					{
						$sayfa=1;
					}
					else
					{	
						$sayfa=$_GET['sayfa'];
						/*
							kullanıcı mantıklı bir sayfa girmiş
						*/
					}
				}
				else
				{
					$sayfa=1;
				}
				
				if($sayfa>$uye_sayisi)
				{
					/*
						GİRİLEN SAYFA SİSTEMİN İNDEXLEDİĞİ SAYFA SAYISINDAN BÜYÜK İSE İLK SAYFAYI GÖSTER
					
					*/
				
					$sayfa=1;
				}
			
				//echo'sayfam'.$sayfa.'<br>';
				
				
					if($sayfa==1)
					{
						/*
							ilk sayfa görüntülenecekse
						*/
						$ilk_kayit=$sayfa;	
						$son_kayit=$sayfa*10;
					}
					else if($sayfa>1)
					{
						/*
							diğer sayfalar görüntülenecekse
						*/
					
						$son_kayit=$sayfa*10;
						$ilk_kayit=$son_kayit-10;
					}
				
				/*
					echo'<fieldset><legend>Tüm Üyeler</legend>
					<form    method="post"><table border="3">
					<tr><th>Kullanıcı Adı</th><td ><b class="KullaniciAdi">'.$Uye.'<b></td></tr>
					</table></form></fieldset>';
				*/
				$SQL_tumuyeler="select * from tablo_uye";
				$sorgu_tumuyeler=mysql_query($SQL_tumuyeler,$baglanti);
				if($sorgu_tumuyeler)
				{
				
				
					$sayac=0;
					echo'<fieldset><legend>Tüm Üyeler</legend>
							<form    method="post"><table border="3">';
					echo'<tr><th>Üye ID<th>Kullanıcı Adı</th><th>Ad</th><th>Soyad</th><th>Mail</th><th>Telefon</th><th>Üyelik Tarihi</th></tr>';	
					while($veri=mysql_fetch_array($sorgu_tumuyeler))
					{	$sayac++;	
						if($sayac<=$son_kayit&&$sayac>=$ilk_kayit)
						{
							/*
								sayac degeri istenilen sayfa değerleri arasında ise
							
							*/
							
						echo'<tr>
								<td>'.$veri['UyeID'].'</td>
								<td>'.$veri['KullaniciAdi'].'</td>
								<td >'.$veri['UyeAd'].'</td>
								<td >'.$veri['UyeSoyad'].'</td>
								<td >'.$veri['Email'].'</td>';	
								if($veri['Telefon']=='0000000000')
								{
								echo'<td>-</td>';
								}
								else
								{
								echo'<td>'.$veri['Telefon'].'</td>';
								}
								
								echo'<td>'.$veri['UyelikTarihi'].'</td>
							</tr>';
						
						}
						
						//echo'<br>Sayac:'.$sayac;
						
					}
					echo'</table></form></fieldset><hr>';
					echo $kayit_sayisi.' Kişi Sayıldı';
				
				
				
				/*
					TÜM ÜYELERİN GÖRÜNTÜLENMESİ SONU
				*/
				}
					
				/*
					SAYFALAMA
				*/	
				
			$SQL="select * from tablo_uye";
			$sorgu=mysql_query($SQL,$baglanti);
			if($sorgu)
			{
				$sayfa_kac_kisi=10;
				/*
					Her Sayfada 10 Kayıt Yer Alacak
				*/
				$kayit_sayisi=mysql_num_rows($sorgu);
				$sayfa=$kayit_sayisi/$sayfa_kac_kisi;
			
				if($kayit_sayisi%$sayfa_kac_kisi>=1)
				{
					$sayfa=(int)$sayfa+1;
				}
				echo'<div class="sayfalama">';
				for($i=1;$i<=$sayfa;$i++)
				{
				 echo'<a href="tum_uyeler.php?sayfa='.$i.'">'.$i.'</a>';
				}
				echo'</div>';
			}
				
				
				/*
					SAYFALAMA SONU
				*/
				
				
				/*
					YÖNETİCİNİN ÜYELER İLE İLGİLİ İŞLEMLERİ SONU
				*/
?>

<!--InstanceEndEditable -->
 </div>

</div>

</body>
<!-- InstanceEnd --></html>
<link href="css/yonetimPaneli.css" rel="stylesheet" type="text/css" />
