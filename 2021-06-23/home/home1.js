// For and While
// Atspausdinkite skaičių stulpelį nuo 1 iki 100.

// for (let i = 0; i <= 100; i++) {
// 	console.log('for',i);
// }

// let i = 1;

// while (i <= 100) {
// 	console.log('while', i);

// 	i++;
// }

// Atspausdinkite skaičių stulpelį nuo 11 iki 33.

// for (let i = 11; i <= 33 ; i++) {
// 	console.log('for', i);
// }

// let i = 11;

// while (i <= 33) {
// 	console.log('while',i);
// 	i++;
// }

// Atspausdinkite stulpelį su lyginiais skaičiais nuo 0 iki 100.

// for (let i = 0; i <= 100; i++) {
// 	if (i % 2 == 0) {
// 		console.log(i);
// 	}
// }

// for (let i = 0; i <= 100; i+=2) {
// 	console.log('for i+=2', i);
// }

// Naudodami ciklą parodykite sumą nuo 1 iki 100.

// let result = 0,
// 	count  = 1;

// while (count != 100) {
// 	result += count; // result = result + count;

// 	count++;
// 	console.log(result)
// }


// For ir masyvai
// Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite visus masyvo elementus ekrane.

// let arr = [1, 2, 3, 4, 5];
// for (let i = 0; i <= arr.length; i++) {
// 	console.log(arr[i]);
// }

// for (let i = things.length - 1; i >= 0; i--) {
// 	console.log(things[i]);
// }


// Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite šio masyvo elementų sumą.
result = 0;
let	arr = [1, 2, 3, 4, 5];
for (let i = 0 ; i < arr.length; i++) {
	(result += arr[i]);
}
console.log(result);