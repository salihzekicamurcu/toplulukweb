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
	if($_GET['menu']=='dokumanEkle')
	{
		echo'<br><br>';
					echo'<form action="dokuman.php"  enctype="multipart/form-data" method="post">
						<table border ="3">
						';
						echo'<tr><th>Tarih</th><td><input type="hidden" value="'.date("Y-m-d H:i:s").'" name="IcerikTarih"/>'.date("Y-m-d H:i:s").'</td></tr>';
						echo'<tr><td>Tanım</td><td><input type="text" name="IcerikAdi"></input></td></tr>';
						echo'<tr><th>Resim</th><td><input type="File"  name="resimler[]" id="resimler[]" multiple="multiple"  /></td></tr>';
						echo'<tr><td>&nbsp;</td><td><input type="reset" value="Temizle"/>&nbsp;&nbsp;<input type="submit" name="ResimKaydet" value="Kaydet"/></td></tr>';
						$uyeid=$_SESSION['YoneticiID'];
						echo'<input type="hidden" name="GaleriID" value="1"';
						
						
					echo'</table></form>';
		
	}
	else if($_GET['menu']=='icerikGoruntule')
	{
		
			//echo'<a href="../galeri.php?menu=fotografAlbumleri">Goruntule</a>';
	
	}
	
}
else if(isset($_POST['ResimKaydet']))
{
	$GaleriID=$_POST['GaleriID'];
	$IcerikTarih=$_POST['IcerikTarih'];
	$UyeID=$_SESSION['YoneticiID'];
	if(empty($_POST['IcerikAdi'])){
	$ad='icerik';
	}
	else{
	$ad=$_POST['IcerikAdi'];}
	
	include("db_baglan.php");
	$SQL="select DosyaYolu from tablo_galeri where GaleriID=1 ";
	$sorgu=mysql_query($SQL,$baglanti);
	if($sorgu>0)
	{
		if($veri=mysql_fetch_array($sorgu))
		{
			$link='../topluluk/'.$veri['DosyaYolu'];
			echo'link:'.$link;
		}
	}
	
	
	$klasor=$link;
	$dosya_sayi=count($_FILES['resimler']['name']); 
    for($i=0;$i<$dosya_sayi;$i++)
	{
		$tur=$_FILES['resimler']['type'][$i];
		$uzanti=explode("/",$tur);
		
		$_FILES['resimler']['name'][$i]="Dokuman".date("ymd_h-i-s").'.'.$uzanti[1];
		$IcerikAdi=$ad.'-'.$i;
		
		echo'<br>'.$IcerikAdi;
       $yol=$link.'/'.$_FILES['resimler']['name'][$i];
	   if(!empty($_FILES['resimler']['name'][$i])){ 
         copy($_FILES['resimler']['tmp_name'][$i],"../".$veri['DosyaYolu'].'/'.$_FILES['resimler']['name'][$i]); 
         $resim_sorgu = mysql_query("insert into tablo_icerik (IcerikAdi,IcerikTarih,GaleriID,IcerikLink,UyeID) 
		values('$IcerikAdi','$IcerikTarih',1,'$yol','$UyeID')",$baglanti);
		if($resim_sorgu>0)
		{
			echo'Yuklendi';
		}
		else
		{
			include("hata.php");
		}
        }
    }
}









?>
<!-- InstanceEndEditable --> </div>

</div>

</body>
<!-- InstanceEnd --></html>
<link href="css/yonetimPaneli.css" rel="stylesheet" type="text/css" />
