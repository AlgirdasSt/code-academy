// Parasšykitė funkciją kuri grąžina stulpelį su lyginiais skaičiais nuo x iki y.

// // Variantas paprastas.

// function even_number(x,y){
// 	for (let i = x ; i <= y; i++) {
// 		if(i % 2 === 0) {
//     		console.log(i);
//     	}
//     }
// }

// let x = +prompt('Įveskite skaičių X');
// let y = +prompt('Įveskite skaičių Y');
// console.log(even_number(x,y));

// // Variantas su array.

// function even_number(x,y){
// 	let even = [];
// 	for (let i = x ; i <= y; i++) {
// 		if(i % 2 === 0) {
//        		even.push(i);
//     	}
//     }
//     console.log(even);
// }

// let x = +prompt('Įveskite skaičių X');
// let y = +prompt('Įveskite skaičių Y');
// console.log(even_number(x,y));




// Parasšykitė funkciją kuri patikrina ar duotas skaičius yra daugiau nei 3 ir mažiau nei 10

// function number(a){
// 	if (a > 3 && a < 10) {
// 		console.log('Jūsų įvestas skaičius yra didesnis už 3 ir mažesnis už 10');
// 	}
// 	else {
// 		console.log('Jūsų įvestas skaičius yra mažesnis už 3 arba didesnis už 10');
// 	}
	
// }

// let a = +prompt('Įvesk skaičių');
// console.log(number(a));




// Parasšykitė funkciją kuri grąžina teigiamų masyvo skaičių sumą

// function sumEvenNumbers(arr) {
// 	if (Array.isArray(arr) == false) {
// 		return 0;
// 	}

// 	let sum = 0;

// 	for (let value of arr) {
// 		if (typeof value === 'number' && value > 0) {
// 			sum += value;
// 		}
// 	}

// 	return sum;
// }

function sumEvenNumbersV2(arr = []) {
	let sum = 0;

	if (Array.isArray(arr)) {
		for (let value of arr) {
			if (typeof value === 'number' && value > 0) {
				sum += value;
			}
		}
	}

	return sum;
}