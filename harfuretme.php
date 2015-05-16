<?php
	
	/*
	
	
		ÜRETİLEN GÜVENLİK KODUNU EKRANA BASAR
	
	
	*/
	
	$yazi=$_GET['yazi'];
	if(!empty($yazi)&&($yazi<=99999&&$yazi>=10000)){
	$resim=imagecreate(100,20);
	$siyah=imagecolorallocate($resim,0,0,0);
	$mavi=imagecolorallocate($resim,51,102,255);
	$beyaz=imagecolorallocate($resim,255,255,255);
	imagefill($resim,0,0,$mavi);
	imagestring($resim,4,35,1,$yazi,$beyaz);
	Header("Content-type:image/png");
	imagepng($resim);
	imagedestroy($resim);
	}
	else 
	{
		die(include("hata.php"));
	}
?>