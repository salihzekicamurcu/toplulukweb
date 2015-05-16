<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Yonetim Paneli Giriş Sayfası</title>


<link href="css/admin.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="zemin">

<div class="icerik_giris">
<div class="giris">
<?php
	session_start();
	if(isset($_SESSION['YoneticiAd']))
	{	
		header("location:yonetim.php");
		die();
	}

?>
<form action="yonetici_giris.php" method="POST">
<center>
<table border="2">
<tr><td colspan="2"><h3>Login</h3></td></tr>
<tr><td><h4>Kullanıcı Adı</h4></td><td><input tabindex="1" maxlength="20" class="kullaniciAdi" type="text" name="YoneticiKullaniciAdi"></input></td></tr>
<tr><td><h4>Şifre</h4></td><td><input type="password" maxlength="6" tabindex="2" name="YoneticiSifre"></input></td></tr>
<tr><td> 
<?php
$sayi=rand(10000,99999);
echo'<img src="harfuretme.php?yazi='.$sayi.'"/></td>';
echo'
<td><input tabindex="3" type="text" tabindex="3" maxlength="5"name="Guvenlik"></input></td></tr>';
echo'<input type="hidden" name="guvenlik_kodu" value="'.$sayi.'"></input>
';
?>
<tr><td></td><td><input type="reset" name="sil" value="Temizle"></input> &nbsp; <input tabindex="4" type="Submit" name="Giris"  id="buton" value="Giris Yap" ></input></td></tr>
</table>
</form>
<center>
</div>
</div>


</div>


</body>
</html>
<link href="css/yonetimPaneli.css" rel="stylesheet" type="text/css" />
