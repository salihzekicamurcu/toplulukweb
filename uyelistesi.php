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
//echo'tum üyeler';
			
			session_start();
			if(isset($_SESSION['KullaniciAdi']))
		{	
			
			include("db_baglan.php");
			/*
			
				Girilen Sayfa Sayısına Karşılık Bir Veri Grubu Varmı?
			
			*/
			
			$SQL_tum_uye_sayisi="select * from tablo_uye";
			$sorgu_tum_uye_sorgu=mysql_query($SQL_tum_uye_sayisi,$baglanti);
			if($sorgu_tum_uye_sorgu)
			{
				$sayfa_kac_kisi=10;
				/*
					Her Sayfada 10 Kayıt Yer Alacak
				*/
				$kayit_sayisi=mysql_num_rows($sorgu_tum_uye_sorgu);
				$uye_sayisi=$kayit_sayisi/$sayfa_kac_kisi;
			
				if($kayit_sayisi%$sayfa_kac_kisi>=1)
				{
					$uye_sayisi=(int)$uye_sayisi+1;
				}
			}
			
			
			/*
				Gelen Sayfayı belirleme
			*/
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
			
			if($sayfa>$uye_sayisi)
			{
				/*
					GİRİLEN SAYFA SİSTEMİN İNDEXLEDİĞİ SAYFA SAYISINDAN BÜYÜK İSE İLK SAYFAYI GÖSTER
				
				*/
			
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
				<form    method="post"><table border="1">
				<tr><th>Kullanıcı Adı</th><td ><b class="KullaniciAdi">'.$Uye.'<b></td></tr>
				</table></form></fieldset>';
			*/
			$SQL_tumuyeler="select * from tablo_uye";
			$sorgu_tumuyeler=mysql_query($SQL_tumuyeler,$baglanti);
			if($sorgu_tumuyeler)
			{
			
			
				$sayac=0;
				 echo'<fieldset><legend>Tüm Üyeler</legend>
						<form ><table border="1">';
				echo'<tr><th>Sıra</th><th>Ad</th><th>Soyad</th><th>Mail</th></tr>';	
				while($veri=mysql_fetch_array($sorgu_tumuyeler))
				{	$sayac++;	
					if($sayac<$son_kayit&&$sayac>=$ilk_kayit)
					{
						/*
							sayac degeri istenilen sayfa değerleri arasında ise
						
						*/
						
					echo'<tr><td>'.$sayac.'</td><td >'.$veri['UyeAd'].'</td>
							<td >'.$veri['UyeSoyad'].'</td><td >'.$veri['Email'].'</td>	
						</tr>';
					
					}
					
					//echo'<br>Sayac:'.$sayac;
					
				}
				echo'</table></form></fieldset></form><hr>';
				echo $kayit_sayisi.' Kişi Sayıldı';
			}
			
			
			
			
			
			
			
			
			
			
			
			$SQL="select * from tablo_uye";
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
				 echo'<a href="uyelistesi.php?sayfa='.$i.'">'.$i.'</a>';
				}
				echo'</div>';
			}
		}
		else
		{
			echo'oturum açmalısınız';
		}
			
?>

<!-- InstanceEndEditable --></div>

</div>
<!-- InstanceBeginEditable name="EditRegion4" -->
<div  class="footer"> <center>
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
