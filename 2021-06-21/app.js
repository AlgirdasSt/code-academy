// Sukurkite masyvą a, b, c. Parodykite masyvą naudodami console.log funkciją.
let arr = [
'a','b','c'
];
console.log(arr);

// Naudodamiesi ankstesnės užduoties masyvu, parodykite pirmojo, antrojo ir trečiojo elementų turinį.
console.log(arr[0],arr[1],arr[2]);

// Sukurkite masyvą a, b, c, d ir naudodami jį parodykite eilutė a + b, c + d.
let arr_1 = [
'a','b','c','d'
];
console.log(arr_1[0],' + ',arr_1[1],', ',arr_1[2],' + ',arr_1[3]);

// Sukurkite masyvą su elementais 2, 5, 3, 9. 
let arr_2 = [
2,5,3,9
];
console.log(arr_2);

// Pirmąjį masyvo elementą padauginkite iš antrojo, o trečiąjį elementą iš ketvirtojo. 
console.log(arr_2[0] * arr_2[1],arr_2[2] * arr_2[3]);
let result_1 = arr_2[0] * arr_2[1];
	result_2 = arr_2[2] * arr_2[3];
// Sudėkite rezultatus, priskirkite kintamąjam. Parodykite šio kintamojo reikšmę.
let result_3 = result_1 + result_2 ;
console.log(result_3);

// Daugialypiai masyvai
// Yra pateiktas masyvas [[1, 2, 3], [4, 5, 6], [7,8,9]]. Parodykite skaičių 4 iš šio masyvo.
let multiArray = [
[1,2,3],
[4,5,6],
[7,8,9],
];
console.log(multiArray[1][0]);

// Duoti du masyvai: 1, 2, 3 ir 4, 5, 6. Sujunkite juos.
let arr_3 = [
1,2,3
];
	arr_4 = [
4,5,6
];
console.log(arr_3.concat(arr_4));

// Duotas masyvas 1, 2, 3. Iš jo padarykite masyvą 3, 2, 1.
let arr_5 = [
1,2,3
];
console.log(arr_5.reverse());

// Duotas masyvas 1, 2, 3. Pridėkite elementus 4, 5, 6 į galą ir -1, -2, -3 į priekį.
let arr_6 = [
1,2,3
];
console.log(arr_6);
arr_6.push(4,5,6);
console.log(arr_6);
arr_6.unshift(-3,-2,-1);
console.log(arr_6);

// Duotas masyvas html, css, js. Parodykite pirmąjį ir paskutinį elementus.
let arr_7 = [
'html','css','js'
];

console.log(arr_7[0],arr_7[2]);

// Duotas masyvas 3, 4, 1, 2, 7. Surūšiuokite jį.
let arr_8 = [
3, 4, 1, 2, 7
];
console.log(arr_8);
console.log(arr_8.sort());

// Duotas masyvas 1, 2, 3, 4, 5. Konvertuokite masyvą į 1, 2, 3.
let arr_9 = [
1, 2, 3, 4, 5
];

console.log(arr_9);
console.log(arr_9.slice(0,4));
// slice(0,3)  0 - kiek nupjauna iš priekio, 3 - kiek elementų palieka;
