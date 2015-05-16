<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/templateindex_site.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>mku Topluluk sayfaları</title>
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
<div class="bilgilendirme"> <p>Yazılım Ve İnovasyon Topluluğu<p></div>
<div class="icerik"><!-- InstanceBeginEditable name="DegistirilebilirAlan1" -->
<?php

	if(isset($_GET['menu']))
	{
		$menu=$_GET['menu'];
		if($menu=="fotografAlbumleri")
		{
			echo'<div class="fotografalbum"><div id="baslik"> Fotoğraf Albumleri</div>';
			include("db_baglan.php");
			$SQL="select   Distinct tablo_icerik.GaleriID,AlbumAdi, AlbumTarih,tablo_galeri.GaleriID as GaleriID ,IcerikLink 
			from tablo_galeri inner join tablo_icerik on
			tablo_galeri.GaleriID=tablo_icerik.GaleriID and  AlbumAdi NOT IN ('Video','Dokuman')
			group by tablo_icerik.GaleriID ";
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
		
			
		
		}
		else if($menu=="videoGaleri")
		{		
				echo'<div class="fotografalbum"><div id="baslik"> Video Galeri</div>';
				for($i=0;$i<5;$i++){
				echo'
				<div class="album"><center>
				<table border="1">
				<tr><td id="baslik">video baslik</td><tr>
				<tr><td id="video"><video width="100%" height="100%" controls="controls" autoplay>
						<source src="video/sila.mp4" type="video/mp4"/>
						</video></td><tr>
				</table></center>
				</div>
				';}
				
		}
		else if($menu=="dokumanlar")
		{	
				include("db_baglan.php");
				echo'<div class="fotografalbum"><div id="baslik"> Dokumanlar Albumleri</div>';
				$SQL="select tablo_icerik.GaleriID,AlbumAdi, AlbumTarih,tablo_galeri.GaleriID as GaleriID ,IcerikLink,tablo_icerik.IcerikAdi 
			from tablo_galeri inner join tablo_icerik on
			tablo_galeri.GaleriID=tablo_icerik.GaleriID and  tablo_icerik.GaleriID=1
			order by tablo_icerik.IcerikTarih   ";
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
		}	
		else
		{
		
		}
	}
	else
	{
	
	}
	
?>

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
