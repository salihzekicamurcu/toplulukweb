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
		if(isset($_POST['UyeDuzenle']))
		{
			
			if(empty($_POST['UyeAd']))
			{
				echo'adinizi giriniz <a href="uye.php?menu=profil">Geri Dön</a>';
			}
			else if(empty($_POST['UyeSoyad']))
			{
				echo'Soyadınızı Giriniz! <a href="uye.php?menu=profil">Geri Dön</a>';
			
			}
			else if(isset($_POST['sifre_degistir'])&&(empty($_POST['Sifre1'])||empty($_POST['Sifre2'])))
			{
				echo'Şifrenizi Giriniz! <a href="uye.php?menu=profil">Geri Dön</a>';
			}
			else if (empty($_POST['Email']))
			{
				echo'Email Adresinizi Giriniz <a href="uye.php?menu=profil">Geri Dön</a>';
			}
			else if (empty($_POST['Guvenlik']))
			{
				echo'Guvenlik Kodunu Giriniz <a href="uye.php?menu=profil">Geri Dön</a>'; 
				
			}
			else
			{
				/*
				BOŞ Deger Girilmemiş
			
				*/
				$iD=$_POST['ID'];
				//	$KullaniciAdi=$_POST['KullaniciAdi'];
				$UyeAd=$_POST['UyeAd'];
				$UyeSoyad=$_POST['UyeSoyad'];
				if(isset($_POST['sifre_degistir']))
				{
					$Sifre1=$_POST['Sifre1'];
					$Sifre2=$_POST['Sifre2'];
				}
				else
				{
						//	die("şifre değiştir");
				
				
				}
				
				$Email=$_POST['Email'];
				if(empty($_POST['Telefon']))
				{
					$Telefon="0000000000";
				}
				else
				{
					 if((strlen($_POST['Telefon'])!=10))
						{
							die('Telefon Numaranız 10 Haneli Olmalıdır! <a href="uye.php?menu=profil">Geri Dön</a><br>');
							include("hata.php");
						}
						else
						{					
							$Telefon=$_POST['Telefon'];
						}
				}
				$GuvenlikKoduKullanici=$_POST['Guvenlik'];
				$GuvenlikKoduSistem=$_POST['guvenlik_kodu'];
				if($GuvenlikKoduKullanici!=$GuvenlikKoduSistem)
				{
					echo'Guvenlik Kodunu Eşleşmiyor <a href="uye.php?menu=profil">Geri Dön</a>';
				}
				else 
				{
						if(isset($_POST['sifre_degistir']))
						{
									if($Sifre1!=$Sifre2)
									{
										echo'Girdiğiniz Şifre Eşleşmiyor! <a href="uye.php?menu=profil">Geri Dön</a>';
									}
									else
									{
										if(strlen($Sifre1)!=6)
										{
											echo'Girdiğiniz Şifre 6 Karekter Olmalıdır! <a href="uye.php?menu=profil">Geri Dön</a>';
										
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
										$SQL="update  tablo_uye set UyeAd='$UyeAd',UyeSoyad='$UyeSoyad',Sifre='$Sifre1',Email='$Email',Telefon='$Telefon' where UyeID='$iD'";
										$sorgu=mysql_query($SQL,$baglanti);
										if($sorgu)
										{
											echo'Profiliniz Güncellendi';
											header("refresh:1;url=uye.php?menu=profil");
										}
										else 
										{
											header("refresh:3;url=uye.php?menu=profil");
											include("hata.php");
										}
										//mysql_close($baglanti);
											/*
												VERİTABANINA KAYİT İŞLEMLERİ
											*/
											/*
												ŞİFRE GÜNCELLEME SONU
											*/
										}
									}
						}		
						else
						{
											/*
						
												ŞİFRE GÜNCELLEMESİ YOK
							
											*/
	
											/*
											$UyeID=$_POST['UyeID'];
											$UyeAd=$_POST['UyeAd'];
											$UyeSoyad=$_POST['UyeSoyad'];
											$Email=$_POST['Email'];
											$Telefon=$_POST['Telefon'];
											*/
											include("db_baglan.php");
										$SQL="UPDATE  tablo_uye SET UyeAd='$UyeAd',UyeSoyad='$UyeSoyad',Email='$Email',Telefon='$Telefon' 
												 where UyeID like '$iD'";
										$sorgu=mysql_query($SQL,$baglanti);
										if($sorgu)
										{
											echo'Profiliniz Güncellendi';
											header("refresh:2;url=uye.php?menu=profil");
										}
										else 
										{	
											header("refresh:3;url=uye.php?menu=profil");
											include("hata.php");
										}
										//mysql_close($baglanti);
						
									/*
							
							
										VERİTABANINA KAYİT İŞLEMLERİ
									*/
							
							

						/*
							ŞİFRE HARİCİ GÜNCELLEME (2. TÜR) SONU
						*/
							
						}
				}

				}
			}//sistemden beklenen işlemin sonu
		else
		{
		/*
			YETKİSİZ YÖNLENDİRME
		*/
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
