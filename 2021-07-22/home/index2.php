<?php
// Parašykite funkciją, kuri mestų kauliuką iki kol iškris 5 arba 6. Visus savo metimus išvestų į ekrana.(while).

$y = rand(1,6);
while ($y <= 6) {
    echo $y;
    if ($y >= 5 ) {
    	return;
    } else {
    	$y = rand(1,6);
    };
};

// Papildomas funkcionalumas žaidimui(papildomas sudėtingumas):


	
// Metame 2 kauliukus (arba vieną kauliuką 2 kartus).
// 	taisyklės:
// 	Jeigu kauliukų suma yra mažiau už 5 reiškia - jūs iškarto pralaimejote.
// 	Jeigu kauliukų suma daugiau už 5 ir:
// 	Išmesta buvo 6 ir 6, reiškia - laimėjote dviratį.
// 	Abiejų kauliukų išmestas skaičius yra vienodas, bet ne 6 ir 6 - reiškia jūs laimėjote bilietą į kiną.
// 	Kitais atvejais – kauliukas metamas dar kartą.
	
// Žaidimas turi vykti iki kol žaidėjas laimės / pralaimės(while)
	
// Visa žaidimo eiga turėtų būti išvesta į ekraną.