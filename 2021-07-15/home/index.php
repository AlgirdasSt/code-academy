<?php

// Sukurkite 3 kintamuosius: skaičių, raidinės vertės bei tuščią kintamąjį ir juos išveskite į ekraną.

$nmb = 3;
$str = 'a';
$tmp = NULL;

var_dump($nmb, $str, $tmp);
	
// Parašykite skriptą, kuris išspausdintų paskutiniąsias 3 stringo raides.

$str = 'Lorem ipsum dolor sit amet';
var_dump(substr($str, -3));
	
// Sukurkite funkciją negative, kuri priimtų vieną argumentą "$skaicius" ir išvestų į ekraną atitinkamą neigiamą skaičių. (Įvedame 3, išveda -3)




function negative($skaicius)
{
	
	return $skaicius * (-1);
}

var_dump(negative(5));
	
// Sukurkite funkciją kauliukas, kuri imituotų kauliuko metimą. (Į ekraną atspaudintų atsitiktinį skaičių nuo 1 iki 6); Užuomina: rand();

// Variantas be funkcijos
var_dump(rand(1,6));

// Variantas su funkcija

function kauliukas()
{
	echo rand(1,6).'<br>'; 
}

kauliukas();

echo '<br>';

// Parašykite funkciją pusePloto, kuri priimtų 2 argumentus ir išvestų į ekraną pusę abiejų skaičių sandaugą.
$ilgis = 10;
$plotis = 20;
function pusePloto($ilgis,$plotis)
{
	return ($ilgis * $plotis) / 2 ;
	
}
var_dump(pusePloto($ilgis,$plotis));
	
// Sukurkite funkciją 'arEsiDarJaunas', kuri priimtų vieną argumentą amžius ir į ekraną išvestų pranešimą, kiek metų trūksta iki 100. (Pvž.: "Iki šimto jūms trūksta 70 metų! Dar gyventi liko daug!")
$age = 29;

function arEsiDarJaunas($age)
{	
	$target = 100;
	$diff = $target - $age; 
	return 'Iki 100 metų jums trūksta '.$diff.' metų! Dar gyventi liko daug!';
}
var_dump(arEsiDarJaunas($age));


// Sukurkite funkciją, kuri priimtų argumentą farenheitas. Laipsnius iš farenheito konvertuotų į celsijų.
$farenheit = 95;
function temperature($data1)
{
	$celsius  = 5/9 * ($data1-32);

	echo  $celsius;
}

temperature($farenheit);


// Antras variantas mokymosi tikslais, su var_dump().

// $farenheit = 95;
// function temperature($data1)
// {
// 	$celsius  = 5/9 * ($data1-32);
// 	return $celsius;
// }

// var_dump(temperature($farenheit));

?>