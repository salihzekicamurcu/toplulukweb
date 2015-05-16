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
		if(empty($_GET['menu']))
		{
			include("hata.php");
		}
		else
		{
			
				/*
					HABER EKLE DÜZENLE SİL
				*/
		if($_GET['menu']=='haberEkle')
		{
					echo'<br><br>';
					echo'<form action="haber.php"  enctype="multipart/form-data" method="post">
						<table border ="3">
						';
						echo'<tr><th>Haber Başlığı</th><td width="100px"><input  type="text" size="100px" name="HaberBaslik"/></td></tr>';
						echo'<tr><th>Haber Tarih</th><td><input type="hidden" value="'.date("Y-m-d H:i:s").'" name="HaberTarih"/>'.date("Y-m-d H:i:s").'</td></tr>';
						echo'<tr><th>Haber Metni</th><td><textarea name="HaberMetni" rows="20px" cols="100px"> </textarea></td></tr>';
						echo'<tr><th>Resim</th><td><input type="File"  name="Resimler" /></td></tr>';
						echo'<tr><th>Video</th><td><input type="url" name="Video"/><td></tr>';
					//	echo'<tr><th>Galeri</th><td><select name="GaleriID"/></td></tr>';
						echo'<tr><td>&nbsp;</td><td><input type="reset" value="Temizle"/>&nbsp;&nbsp;<input type="submit" name="HaberKaydet" value="Kaydet"/></td></tr>';
						$uyeid=$_SESSION['YoneticiID'];
						echo'<input type="hidden" name="UyeID" value="'.$uyeid.'"';
						
						
					echo'</table></form>';
				
		}
		else if($_GET['menu']=='tumHaberler'||($_GET['menu']=='haberDuzenle'))
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
					$SQL_tumhaberler="select * from tablo_haberler";
					$sorgu_tumuyeler=mysql_query($SQL_tumhaberler,$baglanti);
					if($SQL_tumhaberler)
					{
					
					
						$sayac=0;
						echo'<fieldset><legend>Haberleri Yönet</legend>
								<form    method="post"><table border="3">';
						echo'<tr><th>Haber ID<th>Haber Başlık</th><th>Haber Metni</th><th>Haber Tarih</th><th>Resim Link</th><th> Video Link</th>
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
									<td>'.$veri['HaberID'].'</td>
									<td>'.$veri['HaberBaslik'].'</td>
									<td >'.$veri['HaberMetni'].'</td>
									<td >'.$veri['HaberTarih'].'</td>
									<td >'.$veri['ResimLink1'].'</td>';	
									echo'<td>'.$veri['VideoLink'].'</td>';
									echo'<td><a href="haberDuzenle.php?HaberID='.$veri['HaberID'].'">Düzenle</a></td>';
									echo'<td><a href="haberSil.php?HaberID='.$veri['HaberID'].'">Sil</a></td>';
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
				$SQL="select * from tablo_haberler";
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
					echo'<a href="haber.php?menu=tumHaberler&sayfa='.$i.'">'.$i.'</a>';
					}
					echo'</div>';
					}
					
					/*
					
					TÜM HABERLERİ GÖRÜNTÜLE
					
					*/
				}
				
				else
				{
					include("hata.php");
				}
	
		
		}
		}
	}
	else if(isset($_POST['HaberKaydet']))
	{
			$haberEkle=false;
			/*
				HABERİ VERİTABANINA KAYDET
			*/
			
			if(empty($_POST['HaberBaslik']))
			{
				/*
					HABER BAŞLIĞı Girilmemiş
				*/
				echo'Başlık Boş Girilmiş';
			}
			else if(empty($_POST['HaberMetni']))
			{
				echo'Haber Metni Boş Girilmiş';
			}
			
			else
			{
				include("db_baglan.php");
				$HaberBaslik=$_POST['HaberBaslik'];
				$HaberMetni=$_POST['HaberMetni'];
				$HaberTarih=$_POST['HaberTarih'];
				$UyeID=$_POST['UyeID'];
				$GaleriID=2;
				if(!empty($_POST['video']))
				{
					$VideoLink=$_POST['Video'];
				}
				else
				{
					$VideoLink='NaN';
				}	
			
			
			
					/*
					RESİM  YÜKLEME
					*/				
				if($_FILES['Resimler']['tmp_name'])
				{ 	
					$resim_var=true;
					$klasor="../albumler/haber";
					$tur=$_FILES['Resimler']['type'];
					$bol_dizi=explode("/",$tur);
					if($bol_dizi[1]=='jpg'||$bol_dizi[1]=='jpeg'||$bol_dizi[1]=='png')
					{
					
						$resim_link=$_FILES['Resimler']['name']='Haber_'.date("ymd_H-i-s").'.'.$bol_dizi[1];
						if(copy($_FILES['Resimler']['tmp_name'],$klasor."/".$_FILES['Resimler']['name']))
						{ 
							$link2="../topluluk/albumler/haber/".$_FILES['Resimler']['name'];
									
							$SQL="insert into tablo_icerik(IcerikAdi,IcerikTarih,GaleriID,IcerikLink,UyeID)
							values('$HaberBaslik','$HaberTarih',2,'$link2','$UyeID')";
							$sorgu=mysql_query($SQL,$baglanti);
							if($sorgu>0)
							{
								echo'Resimler Yüklendi';
							}
							else
							{
								echo'Resimler Yüklenemedi';
								include("hata.php");
								$haberEkle=false;
							}
						}
						else
						{
							$haberEkle=false;
							include("hata.php");
						}
						
					}
					else
					{
						echo'Dosya Uzantısı Uygun Değil';
						include("hata.php");
					}
						
				}
				else
				{
					$resim_var=false;
				}
				
			
				
							/*$HaberBaslik;
							$HaberMetni;
							$HaberTarih;
							$UyeID;
							$ResimLink1;
							$ResimLink2;
							$ResimLink3;
							$VideoLink;
							$GaleriID;*/
							if($resim_var==true){
							$SQL_haber="insert into tablo_haberler(HaberBaslik,HaberMetni,HaberTarih,ResimLink1,UyeID,VideoLink,GaleriID)
							values('$HaberBaslik','$HaberMetni','$HaberTarih','$resim_link','$UyeID','$VideoLink',2)
							";	
							}
							else if($resim_var==false)
							{
							$SQL_haber="insert into tablo_haberler(HaberBaslik,HaberMetni,HaberTarih,UyeID,VideoLink,GaleriID)
							values('$HaberBaslik','$HaberMetni','$HaberTarih','$UyeID','$VideoLink',2)
							";
							
							}
							
						$sorgu_haberekle=mysql_query($SQL_haber,$baglanti);
						if($sorgu_haberekle>0)
						{
							echo'<br>Haber Eklendi';
						}
						else
						{
							echo'haber eklenemedi';
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
<!-- InstanceEndEditable --> 
</div>
</div>
</body>
<!-- InstanceEnd --></html>
<link href="css/yonetimPaneli.css" rel="stylesheet" type="text/css" />
