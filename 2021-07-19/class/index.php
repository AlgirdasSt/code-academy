<?php
// Parašykite funkciją, kuri priimtų 1 argumentą - masyvą skaičių ir grąžintu pirmo ir paskutinio elementų sumos šąknį.
	
// Parašykite funckciją, kuri priimtų 1 argumentą - masyvą iš 5 skaičių ir grąžintu visų masyvo elementų aritmetinį vidurkį.
$arr = [1, 5, 8, 10, 15];

function aritmethicMean($data1)
{
	$average = array_sum($data1) / count($data1);

	return $average;
}

var_dump(aritmethicMean($arr));

//  Parašykite funkciją, kurį priimtų 1 argumentą - string`ų masyvą bei parinktų antrą bei priešpaskutinį elementą.

$arr1 = ['1 Stringas', '2 Stringas', '3 Stringas', '4 Stringas', '5 Stringas'];

function getArray($data2) 
{
    $secondElement = array_slice($data2, 1, 1);
    $penultimate = array_slice($data2, -2, 1);
    return $elements = array_merge();

}

var_dump(getArray($arr1));
var_dump(getArray($arr1));

	




//  Parašykite funkciją, kuri priimtų 1 argumentą - masyvą ir jame sukeistu vietomis pirmą ir paskutinį masyvo elementus.




$arr2 = ['1 element', '2 Element', '3 element', '4 element', '5 element'];

function changeFirstLast($data3)
{
	$swapper = array_swap($data3,0,4);
	return $swapped;
}
var_dump($arr2);
var_dump(changeFirstLast($arr2));





	



Namu darbams liks paskutine uzduotis

// Parašykite funkciją, kuri priimtų argumentą - masyvą ir sumaišytu jo elementus atsitiktine tvarka, bet pirmą ir paskutinį paliktu vietoje.