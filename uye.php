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
<div class="uye_icerik">
<div id="baslik">Üye</div>
	
	<?php	
	if(isset($_GET['menu'])&&!empty($_GET['menu']))
	{
		$menu=$_GET['menu'];
		if($menu=='profil')
		{
			session_start();
			if(!isset($_SESSION['KullaniciAdi']))
			{
				echo'Oturum Acmalısınız';
			}
			else
			{
			
				$UyeID=$_SESSION['UyeID'];
				include("db_baglan.php");
				$SQL="select * from tablo_uye where UyeID='$UyeID'";
				$sorgu=mysql_query($SQL,$baglanti);
				if($sorgu)
				{
					$gelen_bilgi=mysql_fetch_array($sorgu);
					if($gelen_bilgi)
					{
						$KullaniciID=$gelen_bilgi['UyeID'];
						$KullaniciAdi=$gelen_bilgi['KullaniciAdi'];
						$UyeAd=$gelen_bilgi['UyeAd'];
						$UyeSoyad=$gelen_bilgi['UyeSoyad'];
						$Sifre=$gelen_bilgi['Sifre'];
						$Email=$gelen_bilgi['Email'];
						$Telefon=$gelen_bilgi['Telefon'];
						$UyelikTarihi=$gelen_bilgi['UyelikTarihi'];
					
						
						/*
						
							PROFİL SAYFASI
						
						*/
							
						echo'<fieldset><legend>Profil</legend>
						<form   action="uye_duzenle.php" method="post"><table  border="1">
							<tr><th>Kullanıcı Adı</th><td ><b class="KullaniciAdi">'.$KullaniciAdi.'</b></td></tr>
							
							<tr><th>Adınız</th><td><input tabindex="1" type="text" maxlength="20" name="UyeAd" 
							value="'.$UyeAd.'"/></td></tr>
							<tr><th>Soyadınız</th><td><input tabindex="2" type="text" maxlength="20" name="UyeSoyad"
							value="'.$UyeSoyad.'"/></td></tr>
							<tr><th>Şifre</th><td><input  tabindex="3" type="password" maxlength="6" name="Sifre1" />(6 Karakter)<input type="checkbox" name="sifre_degistir" tabindex="4" value="Degistir" >Şifremi Değiştir</input></td></tr>
							<tr><th>Tekrar Şifre</th><td><input tabindex="5" type="password" maxlength="6"  name="Sifre2" />(6 Karakter)</td></tr>
							<tr><th>Mail Adresi</th><td ><input tabindex="6" type="email" maxlength="80" name="Email" value="'.$Email.'"/></td></tr>
							<tr><th>Telefon</th><td><input type="text"  tabindex="7" min="10" maxlength="10"name="Telefon" value="'.$Telefon.'"/></td></tr> 
							<tr><th> <img src="harfuretme.php?yazi='; 
							$sayi=rand(10000,99999);
							echo $sayi;		
							echo'"/></th><td><input type="text"  tabindex="8" maxlength="5"name="Guvenlik">*</input></td></tr>
							<tr><th>Üyelik Tarihi</th><td><input type="hidden" name="UyelikTarihi" value="'.$UyelikTarihi.'" />'.date("Y-m-d H:i:s").'</td></tr>
							<tr><th><input type="reset" tabindex="10" id="buton" value="Temizle" /></th><td><input tabindex="9" id="buton" type="submit"  name="UyeDuzenle" value="Düzenle" /></td></tr>
							<input type="hidden" name="guvenlik_kodu"  value="'.$sayi.'"></input>
							<input type="hidden" name="ID" value="'.$KullaniciID.'"></input>
							
							</form>	</fieldset>';
						
						
						
						
						/*
						
							PROFİL SAYFASI SONU
						*/
					
					
					}
					else
					{
						include("hata.php");
					}
					
				
				}
			}
			
		}
		else if($menu=='uyeler')
		{
			header("location:uyelistesi.php");
		    
		}
		
		else if($menu=='out')
		{
			/*
				oturum sonlandir
			*/
			session_start();
			//session_destroy();
			unset($_SESSION['UyeID']);
			unset($_SESSION['KullaniciAdi']);
			unset($_SESSION['LoginTarihi']);
			echo'Oturum Sonlandırıldı...<br>';
			header("refresh:2;url=index.php");
		}
		else if($menu=='uyeol')
		{
			/*
		
				YENİ ÜYE KAYIT ALIMI
			
			*/
			session_start();
			if(!isset($_SESSION['KullaniciAdi']))
			{
				echo'<fieldset><legend>Yeni Üye</legend>
				<form   action="yeni_uye.php" method="post"><table>
				<tr><th>Kullanıcı Adı</th><td><input type="text" maxlength="20" name="KullaniciAdi" />*</td></tr>
				<tr><th>Adınız</th><td><input type="text" maxlength="20" name="UyeAd" />*</td></tr>
				<tr><th>Soyadınız</th><td><input type="text" maxlength="20" name="UyeSoyad" />*</td></tr>
				<tr><th>Şifre</th><td><input type="password" maxlength="6" name="Sifre1" />*(6 Karakter)</td></tr>
				<tr><th>Tekrar Şifre</th><td><input type="password" maxlength="6"  name="Sifre2" />*(6 Karakter)</td></tr>
				<tr><th>Mail Adresi</th><td><input type="email"  maxlength="30" name="Email" />*</td></tr>
				<tr><th>Telefon</th><td><input type="text"  min="10" maxlength="10"name="Telefon" /></td></tr> 
				<tr><th> <img src="harfuretme.php?yazi='; 
				$sayi=rand(10000,99999);
				echo $sayi;		
				echo'"/></th><td><input type="text"  maxlength="5"name="Guvenlik">*</input></td></tr>
                <tr><th>Tarih</th><td><input type="hidden" name="UyelikTarihi" value="'.date("Y-m-d H:i:s").'" />'.date("Y-m-d H:i:s").'</td></tr>
				<tr><th><input type="reset" id="buton" value="Temizle" /></th><td><input id="buton" type="submit" 				                 name="UyeKayit" value="Kayıt Ol" /></td></tr>
				<input type="hidden" name="guvenlik_kodu" value="'.$sayi.'"></input>
                </form>	</fieldset>';
			
				/*
				
						YENİ ÜYE KAYIT ALIMI SONU
				*/
			}
			else
			{
				echo'Oturum Açıkken Yeni Bir Üye Kaydı Oluşturulamaz';
				echo'<a href="uye.php?menu=out">Çıkış Yapmak İçin Tıklayınız</a>';
			}
				
		}
		else
		{
			/*
				menu öğelerinden farklı istek
			*/
			include("hata.php");
			
		}
		
		
	}
	else
	{
		/*
				yetkisiz yönlendirme
		*/
	include("hata.php");
	}
?>

</div>
<!-- InstanceEndEditable --></div>

</div>
<!-- InstanceBeginEditable name="EditRegion4" -->

<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
