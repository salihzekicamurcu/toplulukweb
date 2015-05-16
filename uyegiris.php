<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/templateindex_site.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Mku Toppluluk sayfaları</title>
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
  if(isset($_POST['Giris']))
  {
	
	/*
		bir üye giriş yaptığında çalışacak
		$_POST['KullaniciAdi']
		$_POST['Sifre']
		$_POST['Guvenlik'] --->KUllanıcının girdiği
		$_POST['guvenlik_kodu'] --->sistemin urettiği kod
		kontrol degiskeni=$_POST['giris']	
	*/
		if(empty($_POST['KullaniciAdi']))
		{
			echo'Kullanıcı Adı Giriniz! <a href="index.php">Geri Dön</a>';
		}
		else if(empty($_POST['Sifre']))
		{
			echo'Şifrenizi Giriniz! <a href="index.php">Geri Dön</a>';
		}
		else if(empty($_POST['Guvenlik']))
		{
			echo'Güvenlik Kodunu Giriniz! <a href="index.php">Geri Dön</a>';
		}
		else
		{
			/*
			
				BOŞ DEGER GİRİLMEMİŞ
			
			*/
		
			$KullaniciAdi=$_POST['KullaniciAdi'];
			$Sifre=$_POST['Sifre'];
			$Guvenlik=$_POST['Guvenlik'];
			$guvenlik_kodu=$_POST['guvenlik_kodu'];
			if(strlen($Sifre)!=6)
			{
				echo'Girdiğiniz Şifre 6 Karekter Olmalıdır! <a href="index.php">Geri Dön</a><br>';
			}
			else if($Guvenlik!=$guvenlik_kodu)
			{
				echo'Güvenlik Kodunu Doğru Girin!<a href="index.php">Geri Dön</a><br>';	
			}
			else
			{
			
				/*
				
					VERİTABANI SORGUSU YAPILABİLİR
				*/
			//	echo$KullaniciAdi.'|'. $Sifre .'|'.$Guvenlik.'|'.$guvenlik_kodu;
				include("db_baglan.php");
				$SQL="Select * from tablo_uye where KullaniciAdi='$KullaniciAdi'";
				$sorgu=mysql_query($SQL,$baglanti);
				if($sorgu)
				{
					$gelen_bilgi=mysql_fetch_array($sorgu);
					$db_sifre=$gelen_bilgi['Sifre'];
					if($Sifre===$db_sifre)
					{
						session_start();
						$_SESSION['UyeID']=$gelen_bilgi['UyeID'];	
						$_SESSION['KullaniciAdi']=$gelen_bilgi['KullaniciAdi'];
						/*$_SESSION['UyeAd']=$gelen_bilgi['UyeAd'];
						$_SESSION['UyeSoyad']=$gelen_bilgi['UyeSoyad'];
						$_SESSION['Sifre']=$gelen_bilgi['Sifre'];
						$_SESSION['Email']=$gelen_bilgi['Email'];
						$_SESSION['Telefon']=$gelen_bilgi['Telefon'];
						$_SESSION['UyelikTarigi']=$gelen_bilgi['UyelikTarihi'];
						*/
						$_SESSION['LoginTarihi']=date("Y-m-d H:i:s");
						echo'oturum aciliyor!';
						header("refresh:2;url=uye.php?menu=profil");
					}
					else
					{
						echo'Yanlış KullanıcıAdı veya Şifre !<a href="index.php">Geri Dön</a><br>';	
					}
				}
				else
				{
					include("hata.php");
				}
			
			
			}
			
			
			
			
			
			

		}
				
		
  }
  else 
  {
	include("hata.php");
  }
 ?>
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
