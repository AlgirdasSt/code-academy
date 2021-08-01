<!-- https://www.youtube.com/watch?v=JaRq73y5MJk -->

<?php

session_start();

define('TARGET_DIR', 'uploads');

require 'index.html';

if (isset($_FILES['file'])) {
	$file = $_FILES['file'];
	// print_r($file);
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	// $fileType = $_FILES['file']['Type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png', 'pdf');

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 50000000 ) {
				$fileNameNew = uniqid('', true) . "." . $fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				header("Location: index.php? upload success");
				$_SESSION['images'][] = [
					'name' => $fileNameNew,
				];

			} else {
				echo "Per didelis failo dydis";
			}
		} else {
			echo "Error uploading your file";
		}
	} else {
		echo "Netinkamas failo formatas";
	}
};

// var_dump($_SESSION);