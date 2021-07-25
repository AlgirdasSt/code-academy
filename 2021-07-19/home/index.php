<?php

// Parašykite funkciją, kuri priimtų argumentą - masyvą ir sumaišytu jo elementus atsitiktine tvarka, bet pirmą ir paskutinį paliktu vietoje.

$arr1 = ['1', '2', '3', '4', '5','6'];
	
function firstLastMix($data1)
{
	$first = array_shift($data1);
	$last = array_pop($data1);
	$keys = array_keys($data1);
	$mix = shuffle($data1);
	$merge = array_merge($data1);
	$str = implode (", ", $data1);
	return $first. ' '. $last. ' '. $str;
}

var_dump(firstLastMix($arr1));

// Sukurkite masyvą $vartotojas su laukais - vardas, pavardė, amžius, paštas.(Užuomina. Asociatyvus masyvas )

$user = [
	'Vardas' => 'Algirads',
	'Pavardė' => 'Stasiulis',
	'Amžius' => 29,
	'Paštas' => 'Elektroninis',
];

var_dump($user);

	
// Sukurkite funkciją yraPilnametis, kuri priimtų vieną parametrą - $vartotojas(masyvas iš praeitos užduoties) ir GRAŽINTU tekstą su statusu: nepilnametis, pilnametis, pensininkas.

// NOT DONE

function isAdult($data2)
{
	if($data2 < 18){
		return 'nepilnametis';
	}	else if ($data2 >= 18 && $data2 < 65) {
			return 'pilnametis';
	}	elseif ($data2 > 65) {
			return 'zombie';
	}	
};
var_dump(isAdult($user));


		
//     Sukurti skirtingų skaičių masyvą. Sekančias užduotis atlikti su naujomis masyvo kopijomis.   


$arr2 = ['1', '2', '3', '4', '5', '6'];
				
//         Padauginti esamo masyvo narius iš 2	

for ($i=0; $i < count($arr2); $i++) { 
	var_dump($arr2[$i] * 2);


	$arr2[$i] *= 2 ; 
	// *= reiškia masyvo reikšmę padaugina iš to skaičiaus
}

foreach ($arr2 as $value) {

  	$arr2[] = $value * 2;

}

var_dump($arr2);
//         Pakelti masyvo narius kvadratu	

foreach ($arr2 as  $value) {
	// var_dump(spirntf('value: %d', $key, $value);
	$value **= 2;
	var_dump($value);
	}	
var_dump($arr2);
//         Padauginti masyvo narius iš jų index'o

foreach ($arr2 as $key => $value) {
	// var_dump($key => $value);
	// $arr2[$key] = $value * [$key];
	$arr2[$key] *= $key;

}
// & - reiskia reference ( nuoroda, pointeris, linkas). 
//         Atrinkti tiktai teigimų elementų masyvą	
$arr3 = [-1,-5,6,7,-2,8];
$positive = array_filter($arr3, function($num){
	return $num > 0;
});
var_dump($positive);
//         Atrinkti tiktai neigiamų elementų masyvą	
$negative = array_filter($arr3, function($num){
	return $num < 0;
});
var_dump($negative);		
//         Atrinkti tiktai lyginių skaičių masyvą			
//         Atrinkti tiktai nelyginių skaičių masyvą   	
	
// Asociatyvūs masyvai
			
//     Sukurti masyvą, kuris aprašytų knygos duomenis: title, author, year, genre	

$book = [
	'title' => 'Book Title',
	'author'=> 'JKKT',
	'year' => '1965',
	'genre' => 'comedy',
];

//     Sukurti masyvą, kurio elementai būtų masyvai aprašantys knyga

$books = [
	$book,
	[
		'title' => 'Next Book Title',
		'author'=> 'Stephen King',
		'year' => '2205',
		'genre' => 'Horror',	
	]
];
var_dump($books);

$books[] = [
	'title' => 'Third Book Title',
	'author'=> 'Tadas Ivanauskas',
	'year' => '1905',
	'genre' => 'Encyclopedia',	
];
var_dump($books);
//     Išvesti visus knygų masyvo elementus su var_dump;


//     Išvesti visus knygų masyvo elementus HTML lentele;		
//     Išvesti visų visų knygų metų vidurkį;    
		
// Funkcijos
			
//    Sukurti funkciją, kuri ima masyvą ir grąžina didžiausią skaičių masyve.		
//     Sukurti funkciją, kuri ima masyvą ir grąžina mažiausią skaičių masyve.		
//     Sukurti funkciją, kuri ima masyvą ir išrikiuja jo elementus nuo mažiausio iki didžiausio ir grąžina tą masyvą.