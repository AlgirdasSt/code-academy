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
	'Vardas' => ['Algirads'],
	'Pavardė' => ['Stasiulis'],
	'Amžius' => ['29'],
	'Paštas' => ['Elektroninis'],
];

var_dump($user);

	
// Sukurkite funkciją yraPilnametis, kuri priimtų vieną parametrą - $vartotojas(masyvas iš praeitos užduoties) ir GRAŽINTU tekstą su statusu: nepilnametis, pilnametis, pensininkas.

// NOT DONE

// function isAdult($data2)
// {
// 	foreach ($data2 as $key => $value)
// 	{
// 		$age = $data2['Amžius'];
// 	}
// 	if ($age < 18) {
// 		return sprintf('Nepilnametis');
// 	}

// 	return $age;
// }

// var_dump(isAdult($user));


		
//     Sukurti skirtingų skaičių masyvą. Sekančias užduotis atlikti su naujomis masyvo kopijomis.   


$arr2 = ['1', '2', '3', '4', '5', '6'];
				
//         Padauginti esamo masyvo narius iš 2	

foreach ($arr2 as $value) {

  	$arr2[] = $value * 2;

}

var_dump($arr2);
//         Pakelti masyvo narius kvadratu		

//         Padauginti masyvo narius iš jų index'o			
//         Atrinkti tiktai teigimų elementų masyvą			
//         Atrinkti tiktai neigiamų elementų masyvą			
//         Atrinkti tiktai lyginių skaičių masyvą			
//         Atrinkti tiktai nelyginių skaičių masyvą   	
	
// Asociatyvūs masyvai
			
//     Sukurti masyvą, kuris aprašytų knygos duomenis: title, author, year, genre		
//     Sukurti masyvą, kurio elementai būtų masyvai aprašantys knyga		
//     Išvesti visus knygų masyvo elementus su var_dump;		
//     Išvesti visus knygų masyvo elementus HTML lentele;		
//     Išvesti visų visų knygų metų vidurkį;    
		
// Funkcijos
			
//    Sukurti funkciją, kuri ima masyvą ir grąžina didžiausią skaičių masyve.		
//     Sukurti funkciją, kuri ima masyvą ir grąžina mažiausią skaičių masyve.		
//     Sukurti funkciją, kuri ima masyvą ir išrikiuja jo elementus nuo mažiausio iki didžiausio ir grąžina tą masyvą.