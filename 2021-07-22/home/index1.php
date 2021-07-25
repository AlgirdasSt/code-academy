<?php
// Išvesti į ekraną 10 kartų žodį 'Labas';

for ($i=1; $i < 11 ; $i++) { 
	var_dump('Labas');
};

// Išvesti į ekraną skaičius nuo 1 iki 10;

for ($i=1; $i <= 10; $i++) { 
	var_dump($i);
};

// Išvesti į ekraną skaičius nuo 10 iki 1;

for ($i=10; $i >= 1 ; $i--) { 
	var_dump($i);
};
	
// Išvesti į ekraną visus lyginius skaičius nuo 1 iki 100;

for ($i = 1; $i <= 100; $i++) { 
	if ($i % 2 == 0) {
		var_dump($i);
	}
};
	
// Išvesti į ekraną visus masyvo elementus (skaičiu masyvas);

$arr = [1,2,3,4,5,6,7];
foreach ($arr as $value) {
	var_dump($value);
};
	
// Išvesti į ekraną visų masyvo elementų sumą.;

var_dump(array_sum($arr));

	
// Išvesti į ekraną visų masyvo elementų sandaugą.;

var_dump(array_product($arr));
	
// Išvesti į ekraną kas antrą masyvo elementą;

foreach($arr as $key => $value)
{
  if($key % 2 == 0) //lyginius isveda
    var_dump($key);
};

  // if($key%2 != 0) //isveda nelyginius

// Funkciją, kuri apverstų masyvo elementus;

var_dump(array_reverse($arr));
	
// Sukurti Fibonacci seką(tai tokia seka, kuomet sekantis skaičius yra sudedamas su prieš tai einančiu.)

function fibonacci($num){
	$num_1 = 0;
	$num_2 = 1;
	$output = 0;

	for ($i= 0; $i < $num; $i++) { 
		
		if($i <= 1) {
			$output = $i;
		}else {
			$output = $num_1 + $num_2;
			$num_1 = $num_2;
			$num_2 = $output;
		}
		var_dump($output . ',');
	}
}
fibonacci(10);

// Išvesti visų masyvo elementų vidurkį;(foreach)

foreach ($arr as $key => $value) {
	$average = array_sum($arr) / count($arr);
};

var_dump($average);
	
// Išvesti automobilis masyvą į ekraną; (dvilypis masyvas);

$auto = array
(
	array('Passat','Golf'),
	array('Yaris', 'Avensis'),
	array('Ascona', 'Omega')
);

var_dump($auto);