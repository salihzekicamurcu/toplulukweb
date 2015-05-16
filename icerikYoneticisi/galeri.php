
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

if(isset($_GET['menu']))
{
	if($_GET['menu']=='albumEkle')
	{
			echo'<br><br>';
			echo'<form action="galeri.php"  enctype="multipart/form-data" method="post">
			<table border ="3">
			';
			echo'<tr><th>Albüm Adı</th><td width="100px"><input  type="text" size="100px" name="AlbumAdi"/></td></tr>';
			echo'<tr><th>Tarih</th><td><input type="hidden" value="'.date("Y-m-d H:i:s").'" name="AlbumTarih"/>'.date("Y-m-d H:i:s").'</td></tr>';
			echo'<tr><td>&nbsp;</td><td><input type="reset" value="Temizle"/>&nbsp;&nbsp;<input type="submit" name="AlbumOlustur" value="Kaydet"/></td></tr>';
			$uyeid=$_SESSION['YoneticiID'];
			echo'<input type="hidden" name="UyeID" value="'.$uyeid.'"';
		echo'</table></form>';	
		
		
	
	
	
	
	
	}
	else if($_GET['menu']=='albumDuzenle'||$_GET['menu']=='albumGoruntule')
	{
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
					include("db_baglan.php");
					$SQL_tumhaberler="select * from tablo_galeri";
					$sorgu_tumuyeler=mysql_query($SQL_tumhaberler,$baglanti);
					if($SQL_tumhaberler)
					{
					
					
						$sayac=0;
						echo'<fieldset><legend>Albümleri Yönet</legend>
								<form    method="post"><table border="3">';
						echo'<tr><th>Album ID<th>Album Başlık</th><th>Album Tarih</th><th>Dosya Yolu</th>
						<th>Düzenle</th><th>Sil</th>
						</tr>';	
						while($veri=mysql_fetch_array($sorgu_tumuyeler))
						{	$sayac++;	
							if($sayac<=$son_kayit&&$sayac>=$ilk_kayit)
							{
								/*
									sayac degeri istenilen sayfa değerleri arasında ise
								
								*/
								
							echo'<tr>
									<td>'.$veri['GaleriID'].'</td>
									<td>'.$veri['AlbumAdi'].'</td>
									<td >'.$veri['AlbumTarih'].'</td>
									<td >'.$veri['DosyaYolu'].'</td>';
									echo'<td><a href="albumDuzenle.php?GaleriID='.$veri['GaleriID'].'">Düzenle</a></td>';
									echo'<td><a href="albumSil.php?GaleriID='.$veri['GaleriID'].'">Sil</a></td>';
								echo'</tr>';
							
							}
							
							//echo'<br>Sayac:'.$sayac;
							
						}
						echo'</table></form></hr>';
						//echo $kayit_sayisi.' Kişi Sayıldı';
					
					
				
				
				
				
				
				
				
				
				
				
					
				/*
				
				haber içerik
				
				*/	
				include("db_baglan.php");	
				$SQL="select * from tablo_galeri";
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
					echo'<a href="galeri.php?menu=albumGoruntule&sayfa='.$i.'">'.$i.'</a>';
					}
					echo'</div>';
					}
					
					/*
					
					TÜM HABERLERİ GÖRÜNTÜLE
					
					*/
				}
		
		
		
	
	
	
	/*
	
		album listele son
	*/
	}
	
}
else if($_POST['AlbumOlustur'])
{

	if(empty($_POST['AlbumAdi']))
	{
		echo'Albüm Adı Boş Girilemez';
	}
		else
		{
			$AlbumAdi=$_POST['AlbumAdi'];
			$AlbumTarih=date("Y-m-d H:i:s");
			$UyeID=$_SESSION['YoneticiID'];
			mkdir("../albumler/$AlbumAdi",0777);
			$DosyaYolu="albumler/$AlbumAdi";
			//echo$DosyaYolu;
			include("db_baglan.php");
			$SQL="insert into tablo_galeri(AlbumAdi,AlbumTarih,UyeID,DosyaYolu) values('$AlbumAdi','$AlbumTarih','$UyeID','$DosyaYolu')";
			$sorgu=mysql_query($SQL,$baglanti);
			if($sorgu>0)
			{
				echo'Album Olusturuldu';
			}
			else
			{
			
				include("hata.php");
			}		
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
