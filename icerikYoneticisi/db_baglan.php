<?php
	
	/*
	
		VERİTABANI BAĞLANTISI
	
	
	*/
	$baglanti=mysql_connect("localhost","mkuKullanici","") or die(include("hata.php"));
	mysql_select_db("mku_topluluk",$baglanti)or die(include("hata.php"));
	mysql_set_charset("utf8",$baglanti);
	?>