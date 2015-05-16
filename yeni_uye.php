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
	if(isset($_POST['UyeKayit']))
	{
		/*
				YENİ BİR ÜYE KAYIT OLDUĞUNDA ÇALIŞACAK
		
				$_POST['KullaniciAdi']
				$_POST['UyeAd']
				$_POST['UyeSoyad']
				$_POST['Sifre1']
				$_POST['Sifre2']
				$_POST['Email']
				$_POST['Telefon']
				$_POST['UyelikTarihi']
				$_POST['Guvenlik']
				$_POST['guvenlik_kodu']->hidden
				kontol butonu= $_POST['UyeKayit']
		*/
		if(isset($_POST['UyeKayit']))
		{
			
			if(empty($_POST['KullaniciAdi']))
			{
				echo'Kullanıcı Adı Giriniz! <a href="uye.php?menu=uyeol">Geri Dön</a>';
			}
			else if(empty($_POST['UyeAd']))
			{
				echo'adinizi giriniz <a href="uye.php?menu=uyeol">Geri Dön</a>';
			}
			else if(empty($_POST['UyeSoyad']))
			{
				echo'Soyadınızı Giriniz! <a href="uye.php?menu=uyeol">Geri Dön</a>';
			
			}
			else if(empty($_POST['Sifre1'])||empty($_POST['Sifre2']))
			{
				echo'Şifrenizi Giriniz! <a href="uye.php?menu=uyeol">Geri Dön</a>';
			
			}
			else if (empty($_POST['Email']))
			{
				echo'Email Adresinizi Giriniz <a href="uye.php?menu=uyeol">Geri Dön</a>';
			}
			else if (empty($_POST['Guvenlik']))
			{
				echo'Guvenlik Kodunu Giriniz <a href="uye.php?menu=uyeol">Geri Dön</a>'; 
				
			}
			else
			{
				/*
				BOŞ Deger Girilmemiş
			
				*/
				
				$KullaniciAdi=$_POST['KullaniciAdi'];
				$UyeAd=$_POST['UyeAd'];
				$UyeSoyad=$_POST['UyeSoyad'];
				$Sifre1=$_POST['Sifre1'];
				$Sifre2=$_POST['Sifre2'];
				$Email=$_POST['Email'];
				if(empty($_POST['Telefon']))
				{
					$Telefon="0000000000";
				}
				else
				{
					 if((strlen($_POST['Telefon'])!=10))
						{
							die('Telefon Numaranız 10 Haneli Olmalıdır! <a href="uye.php?menu=uyeol">Geri Dön</a><br>');
							include("hata.php");
						}
						else
						{					
							$Telefon=$_POST['Telefon'];
						}
				}
				$UyelikTarihi=$_POST['UyelikTarihi'];
				$GuvenlikKoduKullanici=$_POST['Guvenlik'];
				$GuvenlikKoduSistem=$_POST['guvenlik_kodu'];
				if($GuvenlikKoduKullanici!=$GuvenlikKoduSistem)
				{
					echo'Guvenlik Kodunu Eşleşmiyor <a href="uye.php?menu=uyeol">Geri Dön</a>';
				}
				else 
				{
					if($Sifre1!=$Sifre2)
					{
						echo'Girdiğiniz Şifre Eşleşmiyor! <a href="uye.php?menu=uyeol">Geri Dön</a>';
					}
					else
					{
						if(strlen($Sifre1)!=6)
						{
							echo'Girdiğiniz Şifre 6 Karekter Olmalıdır! <a href="uye.php?menu=uyeol">Geri Dön</a>';
						}
						else
						{
							
						/*
						$KullaniciAdi=$_POST['KullaniciAdi'];
						$UyeAd=$_POST['UyeAd'];
						$UyeSoyad=$_POST['UyeSoyad'];
						$Sifre1=$_POST['Sifre1'];
						$Sifre2=$_POST['Sifre2'];
						$Email=$_POST['Email'];
						$Telefon=$_POST['Telefon'];
						$UyelikTarihi=$_POST['UyelikTarihi'];
						$GuvenlikKoduKullanici=$_POST['Guvenlik'];
						$GuvenlikKoduSistem=$_POST['guvenlik_kodu'];
						*/
							include("db_baglan.php");
							$SQL="insert into tablo_uye(KullaniciAdi,UyeAd,UyeSoyad,Sifre,Email,Telefon,UyelikTarihi)
							values('$KullaniciAdi','$UyeAd','$UyeSoyad','$Sifre1','$Email','$Telefon','$UyelikTarihi')";
							$sorgu=mysql_query($SQL,$baglanti);
							if($sorgu)
							{
								echo'<a href="index.php">Oturum Açablirsiniz</a>';
								header("refresh:3;url=index.php");
							}
							else 
							{
								header("refresh:3;url=uye.php?menu=yeniuye");
								include("hata.php");
							}
							//mysql_close($baglanti);
			
						/*
				
				
							VERİTABANINA KAYİT İŞLEMLERİ
						*/
						}
						
					
				
					
					}

				}
			}
		}
		else
		{
			echo'İstenen Bilgileri Eksizsiz Girin  <a href="uye.php?menu=uyeol">Geri Dön</a><br>';
			die(include("hata.php"));
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
