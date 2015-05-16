<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/templateindex_site.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Mku Topluluk sayfaları</title>
<!-- InstanceEndEditable -->
<link href="css/ana.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">

</script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div class="banner"><a href="#">   </a>  
</div>
 <div class="menu">
        <ul>
			<li><a href="index.php#image1">Anasayfa</a></li>
            <li><a href="">Topluluk</a>
                <ul>
                    <li><a href="topluluk.php?menu=tanitim">Tanıtım</a></li>
					<li><a href="topluluk.php?menu=yonetim">Yönetim</a></li>
                    <li><a href="topluluk.php?menu=tuzuk">Tüzük</a></li>
                     <li><a href="topluluk.php?menu=genelbilgiler">Genel Bilgiler</a></li>
                    <li><a href="topluluk.php?menu=calismagruplari">Çalışma Grupları</a></li>
                </ul>
            </li>
            <li><a href="etkinlikler.php">Etkinlikler</a>
                 <ul>
                    <li><a href="etkinlikler.php?menu=gecmisEtkinlikler">Geçmiş Etkinlikler</a></li>
                    <li><a href="etkinlikler.php?menu=guncelEtkinlikler">Güncel</a></li>
                    <li><a href="etkinlikler.php?menu=etkinlikTavsiyesi">Etkinlik Tavsiyesi</a></li>
                 </ul>
            </li>
            <li><a href="haberler.php">Haberler</a>
             <ul>
                    <li><a href="haberler.php">Üniversiteden</a></li>
                    <li><a href="haberler.php">Topluluktan</a></li> 
					
                </ul>
            
            </li>
            <li><a href="">Galeri</a>
				<ul>
				 <li><a href="galeri.php?menu=fotografAlbumleri">Fotoğraflar </a></li>
				 <li><a href="galeri.php?menu=dokumanlar">Diğer</a></li>
				</ul>
            </li>
			<li><a href="duyurular.php">Duyurular</a>
			 <ul>
                    <li><a href="duyurular.php?menu=universiteDuyuruları">Üniversiteden</a></li>
                    <li><a href="duyurular.php?menu=toplulukDuyurulari">Topluluktan</a></li> 
					 <li><a href="duyurular.php?menu=calismaGrubu">Çalışma Grupları</a></li>
                  
                </ul>
			</li>
			<li><a href="">Otomasyon</a></li>
        	<li><a href="">Üye </a>
				<ul>
                    <li><a href="uye.php?menu=profil">Profil</a></li>
                    <li><a href="uye.php?menu=uyeler">Üyelerimiz</a></li> 
                    <li><a href="uye.php?menu=uyeol">Üye Ol</a></li>
                    <li><a href="icerikYoneticisi/index.php">Yonetici Girişi</a></li>  
					<li><a href="uye.php?menu=out">Çıkış Yap</a></li> 
				</ul>		
			</li>
        </ul>
          	<input type="text" name="arama"  size="40" method="get" maxlength="30" formaction="#"  value="arama">
        <div style="clear: both"></div>
    </div>
<div class="zemin">
<div class="bilgilendirme"> <p>MKU Topluluklar Web Sayfası<p></div>
<div class="icerik"><!-- InstanceBeginEditable name="DegistirilebilirAlan1" -->
<div class="ozet">
<?php
include("slide.php");
?>
</div>
<div class="uyegiris"> 
<?php
@session_start();
if(isset($_SESSION['KullaniciAdi']))
{
	$x=1;
}
else
{
	$x=0;
}
//oturum acık degil
if($x==0){
echo'<fieldset><legend>Giriş</legend>
<form action="uyegiris.php" method="post">
<table  >
<tr><th>Kullanici Adı:</td><td><input tabindex="1" maxlength="20" type="text" name="KullaniciAdi"></input></td></tr>
<tr><th>Şifre:</th><td><input maxlength="6"  tabindex="2" type="password" name="Sifre"></input></td></tr>
<tr><td> <img src="harfuretme.php?yazi='; 
$sayi=rand(10000,99999);
echo $sayi;
echo'"/></th><td><input type="text" tabindex="3" maxlength="5"name="Guvenlik"></input></td></tr>
<tr><th><input id="buton" tabindex="5" formaction="uye.php?menu=uyeol" type="submit"  value="Üye Ol"></input></th><th><input  id="buton" type="submit" name="Giris"  tabindex="4" value="Giris Yap"></input></th></tr>
</table>
<input type="hidden" name="guvenlik_kodu" value="'.$sayi.'"></input>
</form>
</fieldset>';
}
//oturum acik
else
{

echo'<fieldset><legend>Oturum Açık</legend>
<form action="uye.php?menu=out" method="post">
<table id="giris">
<tr><th colspan="2"><a href=uye.php?menu=profil>'.$_SESSION['KullaniciAdi'].'</a></th></tr>
<tr><th colspan="2"><a href=uye.php?menu=profil><img src="img/oturum.png" width="30px" height="30px"></img></a></td></tr>
<tr><th colspan="2"><input  id="buton" type="submit"  tabindex="1" formaction="uye.php?menu=profil" value="Profil "></input><input  id="buton" type="submit" tabindex="2" name="Çık" value="Çıkış Yap"></input></th></tr>
</table>
<input type="hidden" name="guvenlik_kodu" value="<?php echo$sayi; ?>"></input>
</form>
</fieldset>';
}
?>
<div class="sosyalmedya">
<fieldset><legend>Sosyal Medya Hesaplarımız</legend>
<a href="#"><img title="facebook" src="img/sosyal_medya/facebook.png" width="40px" height="50px" /> </a>
<a href="#"><img title="twitter"src="img/sosyal_medya/twitter.png" width="40px"  height="50px" />  </a>
<a href="#"><img title="google+" src="img/sosyal_medya/google.png" width="40px"   height="50px" />   </a>
<a href="#"><img title="youtube" src="img/sosyal_medya/youtube.png" width="40px"  height="50px" />  </a> 
</fieldset>
</div>
</div>
<div class="haber-etkinlik-duyuru">
<div class="haber"><div class="baslik">Haberler</div> 
<?php
include("db_baglan.php");
$SQL="select *from tablo_haberler  order by  HaberTarih desc limit 5 ";
		$sorgu=mysql_query($SQL,$baglanti);
		if($sorgu>0)
		{
			while($veri=mysql_fetch_array($sorgu))
			{

					
						if(empty($veri['ResimLink1']))
						{
							$resimLink='img/haber.png';
						}
							echo'<table >';
							echo'<tr><td>'.$veri['HaberBaslik'].'</td></tr>';
							echo'<tr><td><a href="haberOku.php?HaberID='.$veri['HaberID'].'">Devamını Oku...</a></td></tr>';
							echo'</table>';
			}
		
		}
?>
</div>

<div class="haber"><div class="baslik">Etkinlikler</div>
<?php
include("db_baglan.php");
$SQL="select *from tablo_etkinlikler  order by  EtkinlikID desc limit 5";
		$sorgu=mysql_query($SQL,$baglanti);
		if($sorgu>0)
		{
			while($veri=mysql_fetch_array($sorgu))
			{

							echo'<table >';
							echo'<tr><td>'.$veri['EtkinlikBaslik'].'</td></tr>';
							echo'<tr><td><a href="etkinlikOku.php?EtkinlikID='.$veri['EtkinlikID'].'">Devamını Oku...</a></td></tr>';
							echo'</table>';
			}
		
		}
?>


</div>
<div class="duyuru"><div class="baslik">Duyurular</div>
<?php
include("db_baglan.php");
$SQL="select *from tablo_duyuru  order by  DuyuruID  desc limit 5";
		$sorgu=mysql_query($SQL,$baglanti);
		if($sorgu>0)
		{
			while($veri=mysql_fetch_array($sorgu))
			{

							echo'<table >';
							echo'<tr><td>'.$veri['DuyuruBaslik'].'</td></tr>';
							echo'<tr><td><a href="duyuruOku.php?DuyuruID='.$veri['DuyuruID'].'">Devamını Oku...</a></td></tr>';
							echo'</table>';
			}
		
		}
?>
</div>
</div>
<div class="galeri">
<div class="Fotograflar"><div class="baslik">Galeriler</div>

<div class="fotografalbum"><div id="baslik"> Fotoğraf Album</div>
		<?php
		include("db_baglan.php");
			$SQL="select   Distinct tablo_icerik.GaleriID,AlbumAdi, AlbumTarih,tablo_galeri.GaleriID as GaleriID ,IcerikLink 
			from tablo_galeri inner join tablo_icerik on
			tablo_galeri.GaleriID=tablo_icerik.GaleriID and  AlbumAdi NOT IN ('Video','Dokuman')
			group by tablo_icerik.GaleriID order by tablo_icerik.IcerikID DESC limit  4  ";
			$sorgu=mysql_query($SQL,$baglanti);
			if($sorgu>0)
			{	
				while($veri=mysql_fetch_array($sorgu))
				{
					if(empty($veri['IcerikLink']))
					{
						$KapakFotograf="../topluluk/albumler/album_icon.png";
					}
					else
					{
						$KapakFotograf=$veri['IcerikLink'];
					}
					$GaleriID=$veri['GaleriID'];
					$AlbumTarih=$veri['AlbumTarih'];
					
				echo'
				<div class="album"><center>
				<table border="1">
				<tr><td id="baslik">'.$veri['AlbumAdi'].'</td><tr>
				<tr><td id="foto"><img width="100%" height="100%"src="'.$KapakFotograf.'"></td><tr>
				<tr><td><a href="albumGoruntule.php?GaleriID='.$GaleriID.'">Albümü Gör..</a></td></tr>
				</table></center>
				</div>
				';
					
					
					
				}
			}
		
		
		
		
		
		
		
		
		?>
</div>
</div>

<div class="Fotograflar"><div class="baslik">Dokunlar</div>

<div class="fotografalbum"><div id="baslik"> Dokunlar</div>
<?php
include("db_baglan.php");
			$SQL="select tablo_icerik.GaleriID,AlbumAdi, AlbumTarih,tablo_galeri.GaleriID as GaleriID ,IcerikLink,tablo_icerik.IcerikAdi
			from tablo_galeri inner join tablo_icerik on
			tablo_galeri.GaleriID=tablo_icerik.GaleriID and  tablo_icerik.GaleriID=1
			 order by tablo_icerik.IcerikTarih limit 8  ";
			$sorgu=mysql_query($SQL,$baglanti);
			if($sorgu>0)
			{	
				while($veri=mysql_fetch_array($sorgu))
				{
					
						$KapakFotograf="../topluluk/albumler/dokuman.png";
					
						$dosya=$veri['IcerikLink'];
					
					$GaleriID=$veri['GaleriID'];
					$AlbumTarih=$veri['AlbumTarih'];
					
				echo'
				<div class="album"><center>
				<table border="1">
				<tr><td id="baslik">'.$veri['IcerikAdi'].'</td><tr>
				<tr><td id="foto"><img width="100%" height="100%"src="'.$KapakFotograf.'"></td><tr>
				<tr><td><a href="'.$dosya.'">İndir</a></td><tr>
				
				</table></center>
				</div>
				';
					
					
					
				}
			}
		
		
		
		
		
		
		
		
		?>


</div>

</div>
</div>

</div>
			





<!-- InstanceEndEditable --></div>

</div>
<!-- InstanceBeginEditable name="EditRegion4" -->
<div  class="footer">  <center>
<div class="yazi">
  <p>Mku Topluluklar Web Sitesi © Tüm Hakları Saklıdır.®</p>
  <p>İnternet Programlama II Proje 2014</p>
  <p>salihzekicamurcu</p>
  <p>&nbsp;</p>
</div>

</center> </div>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
