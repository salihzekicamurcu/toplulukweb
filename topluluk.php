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
<div class="bilgilendirme"> <p>Yazılım Ve İnovasyon Topluluğu<p></div>
<div class="icerik"><!-- InstanceBeginEditable name="DegistirilebilirAlan1" -->
<div class="topluluk_icerik">
<div id="baslik">Topluluk</div>
<?php
	if(isset($_GET['menu']))
	{
		if($_GET['menu']=='tanitim')
		{	
			$dosya=fopen("toplulukBilgileri/TanitimYazisi.txt","r");
			if($dosya)
			{	echo'<h3>Topluğumuz</h3>';
				while(!feof($dosya))
				{
					$veri=fgets($dosya);
					echo$veri.'<br>';
				}
			}
			else
			{
				include("hata.php");
			}
		}
		else if($_GET['menu']=='yonetim')
		{
			$dosya=fopen("toplulukBilgileri/YonetimListesi.txt","r");
			if($dosya)
			{
				echo'<h3>Yönetim Listesi</h3>';
				while(!feof($dosya))
				{
					$veri=fgets($dosya);
					echo$veri.'<br>';
				}
			}
			else
			{
				include("hata.php");
			}
		
		}
		else if($_GET['menu']=='tuzuk')
		{
			$dosya=fopen("toplulukBilgileri/Tuzuk.txt","r");
			if($dosya)
			{	echo'<h3>Tüzük</h3>';
				while(!feof($dosya))
				{
					$veri=fgets($dosya);
					echo$veri.'<br>';
				}
			}
			else
			{
				include("hata.php");
			}
		
		}
		else if($_GET['menu']=='genelbilgiler')
		{
			$dosya=fopen("toplulukBilgileri/GenelBilgiler.txt","r");
			if($dosya)
			{	echo'<h3>Genel Bilgiler</h3>';
				while(!feof($dosya))
				{
					$veri=fgets($dosya);
					echo$veri.'<br>';
				}
			}
			else
			{
				include("hata.php");
			}
		}
		else if($_GET['menu']=='calismagruplari')
		{
			echo'üzerinde çalışıyoruz';
		}
		else
		{
			include("hata.php");
			header("refresh:2;url=index.php");
		}
	}
	else
	{
		include("hata.php");
		header("refresh:2;url=index.php");
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
