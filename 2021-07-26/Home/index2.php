

<!-- // Skaičiuotuvas turi turėti sudėtį, atimtį, daugybą, dalybą ir pakelimą kvadratu.
	
// Front-end‘as(HTML kodas) ir Back-end‘as(PHP skriptas) turi būti atskiruose failuose
	
// Visi ankstesni rezultatai turi matytis.
	
// Atnaujinus(refreshin‘us) naršyklės langą, atsakymai išlieka. -->

<?php
session_start();
				// If the submit button has been pressed
if(isset($_POST['submit']))
{
					// Check number values
	if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
	{
						// Calculate total
		if($_POST['operation'] == 'plus')
		{
			$total = $_POST['number1'] + $_POST['number2'];	
		}
		if($_POST['operation'] == 'minus')
		{
			$total = $_POST['number1'] - $_POST['number2'];	
		}
		if($_POST['operation'] == 'times')
		{
			$total = $_POST['number1'] * $_POST['number2'];	
		}
		if($_POST['operation'] == 'divided by')
		{
			$total = $_POST['number1'] / $_POST['number2'];	
		}
		if($_POST['operation'] == 'square')
		{
			$total = $_POST['number1'] * $_POST['number1'];	
			// print only square number1
			echo "<h1>{$_POST['number1']} {$_POST['operation']} equals {$total}</h1>";
		} else {

						// Print total to the browser
		echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";
		}
	} else {

						// Print error message to the browser
		echo 'Numeric values are required';

	}
}

?>
