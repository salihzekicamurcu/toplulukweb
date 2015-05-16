<header>
<style>
#images {
    width: 600px;
    height: 300px;
    overflow: hidden;
    position: relative;
    margin: 20px auto;
	float:left;
	z-index=0;
}
#images img {
    width: 600px;
    height: 300px;
    position: absolute;
    top: 0;
    left: -400px;
    z-index: 0;
    opacity: 0;
    transition: all linear 500ms;
    -o-transition: all linear 1800ms;
    -moz-transition: all linear 5000ms;
    -webkit-transition: all linear 500ms;
}
#slider
{
	float:left;
	margin: 0px 0px 0px 5px;
}
#images img:target {
    left: 0;
    z-index: 2;
    opacity: 1;
}
#images img:first-child {
    left: 0;
}

#slider a {
    text-decoration: none;
    background: #E3F1FA;
    border: 1px solid #C6E4F2;
    padding: 4px 6px;
    color: #222;
}
#slider a:hover {
    background: #C6E4F2;
}
</style>
<header>
<body>
<?php
include("db_baglan.php");
$SQL="select *from tablo_icerik   where GaleriID<>'1' order by  IcerikID desc limit 9";
		$sorgu=mysql_query($SQL,$baglanti);
		$sayac=1;
		if($sorgu>0)
		{
			echo'<div id="images">';
		
			while($gelen_veri=mysql_fetch_array($sorgu))
			{	
			   $link=$gelen_veri['IcerikLink'];
				$ad=$gelen_veri['IcerikAdi'];
				if($sayac==1)
				 echo'<img id="image1"  title="'.$ad.'"   src="'.$link.'" />';
				else if($sayac==2)
				 echo'<img id="image2"  title="'.$ad.'"   src="'.$link.'" />';
				else if($sayac==3)      
				  echo'<img id="image3" title="'.$ad.'"  src="'.$link.'" />';
				else if($sayac==4)      
				 echo'<img id="image4"  title="'.$ad.'"  src="'.$link.'" />';
				else if($sayac==5)      
				  echo'<img id="image5"  title="'.$ad.'"  src="'.$link.'" />';
				else if($sayac==6)      
				  echo'<img id="image6"  title="'.$ad.'"  src="'.$link.'" />';
				else if($sayac==7)      
				  echo'<img id="image7"  title="'.$ad.'"  src="'.$link.'" />';
				else if($sayac==8)      
				  echo'<img id="image8"  title="'.$ad.'"  src="'.$link.'" />';
				else if($sayac==9)      
				  echo'<img id="image9"  title="'.$ad.'"  src="'.$link.'" />';	
				$sayac++;
			}
			echo'</div>';
			echo'<div id="slider">
				<a href="#image1">1</a>
				<a href="#image2">2</a>
				<a href="#image3">3</a>
				<a href="#image4">4</a>
				<a href="#image5">5</a>
				<a href="#image6">6</a>
				<a href="#image7">7</a>
				<a href="#image8">8</a>
				<a href="#image9">9</a>
					</div>';
		}
		?>

    





<body>