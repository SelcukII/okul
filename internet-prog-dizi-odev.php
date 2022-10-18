<?php

$sehirler= array("Balıkesir","Bursa","Ankara","Manisa","Samsun","Afyonkarahisar","İstanbul","Muğla","İzmir");

echo "<pre>";
	print_r($sehirler);
	echo "</pre>";    // şehirleri ekrana sırasıyla yazdırma.


	$adet = count($sehirler);
	echo "for döngüsü ile ekrana yazdırma <br />";
	for ($i=0; $i < $adet ; $i++) {  		// for döngüsü ile ekrana şehirleri yazdırma
		echo "$sehirler[$i] <br />";
	}


	echo "<br />";
	echo "foreach döngüsü ile ekrana yazdırma <br />";
	$sehirler2= array("10 nuamara "=>"Balıkesir","Bursa","Ankara","Manisa","Samsun","Afyonkarahisar","İstanbul","Muğla","İzmir");
	foreach ($sehirler2 as $keyss=>  $ad) {
		echo "$keyss".$ad."<br />";
	}



	echo "<br />";
	echo "while döngüsü ile ekrana yazdırma <br />";
	$sayi=0;
	while ($sayi <=count($sehirler)-1) {
		echo "$sehirler[$sayi] <br /> ";
		 $sayi++;
		}




	echo "<br />";
	echo "do while ile ekrana yazdırma <br />";
	$sayac=0;
	do {
		echo $sehirler[$sayac]."<br />";
		$sayac++;
		
	} while ($sayac<count($sehirler));
?>