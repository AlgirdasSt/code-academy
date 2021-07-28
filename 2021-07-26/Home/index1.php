<?php

// Prisiminkime 1-os pamokos užduotį, kuomet darėme funkciją, kuri konvertuoja lapsnius iš farenheito į celsijų. Papildykime užduotį:  Sukurkime naują php failą, kuris turės laukelį temperatūrai įvesti bei mygtuką, kurį paspaudus gauname konvertuotą temperatūrą.

if (isset($_POST['degree'])) {
	if (is_numeric($_POST['degree'])) {
		$farenheit = $_POST['degree'];
		function temperature($data1){
			
			$celsius  = 5/9 * ($data1-32);

			echo  $celsius;
		}

		temperature($farenheit);

		} else {
			echo 'Iveskite skaiciu';
		};
};
