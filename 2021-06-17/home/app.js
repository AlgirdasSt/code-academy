// Sukurkite num kintamąjį ir priskirkite jam reikšmę 3. Parodykite šio kintamojo reikšmę ekrane, naudodami alert funkciją.
let num = 3;
alert (num);

// Sukurkite kintamuosius a = 10 ir b = 2. Ekrane parodykite jų sumą, skirtumą, daugybos ir padalijimo rezultatus.
let a = 10;
	b = 2;
let result_1 = (a + b);
	result_2 = (a - b);
	result_3 = (a * b);
	result_4 = (a / b);
document.write ('a = 10; b = 2');
document.write ('<br>');
document.write ('a + b ='  + (result_1));
document.write ('<br>');
document.write ('a - b ='  + (result_2));
document.write ('<br>');
document.write ('a * b ='  + (result_3));
document.write ('<br>');
document.write ('a / b ='  + (result_4));
document.write ('<br>');
document.write (' ');
document.write ('<br>');

// Sukurkite kintamuosius c = 15 ir d = 2. Susumuokite juos ir priskirkite kintamajam result. Parodykite result kintamojo vertę.
let c = 15;
	d = 2;
let result_5 = (c + d);
document.write ('c = 15; d = 2');
document.write ('<br>');
document.write ('c + d ='  + (result_5));
document.write ('<br>');
document.write (' ');
document.write ('<br>');

// Sukurkite kintamuosius a = 17 ir b = 10. Atimkite kintamąjį b iš a ir priskirkite rezultatą kintamajam c. 
// Tada sukurkite kintamąjį d, priskirkite jam reikšmę 7. Sudėkite kintamuosius c ir d ir priskirkite rezultatą kintamajam result.
let a1 = 17;
	b1 = 10;
let c1 = (a1 - b1);
	d1 = 7;
	result_6 = (c1 + d1);
document.write ('a = 17; b = 10');
document.write ('<br>');
document.write ('a + b = c');
document.write ('<br>');
document.write ('c = '  +  c1);
document.write ('<br>');
document.write ('d = '  +  d1);
document.write ('<br>');
document.write ('c + d = '  + (result_6));
document.write ('<br>');
document.write (' ');
document.write ('<br>');

// Sukurkite kintamąjį str ir priskirkite jam „Hello World!” reikšmę. Parodykite šio kintamojo reikšmę ekrane.
let str = 'Hello World!';
document.write (str);
document.write ('<br>');
document.write (' ');
document.write ('<br>');

// Sukurkite kintamuosius str1 = ‘Hello’ ir str2 = ‘World!’. Naudodami šiuos kintamuosius parodykite frazę „Hello World!“.
let str1 = 'Hello ';
	str2 = 'World!'
document.write (str1 + str2);
document.write ('<br>');
document.write (' ');
document.write ('<br>');

// Sukurkite kintamąjį name ir priskirkite jam savo vardą. Parodykite frazę „Hello, %name%!“.
let name = "Algirdas"
document.write ('Hello, ' + name + ' !');
document.write ('<br>');
document.write (' ');
document.write ('<br>');

// Sukurkite kintamąjį age ir priskirkite jam savo amžių. Parodykite ‘I’m %age% old!’
let age = "29"
document.write ('I`m ' + age + ' old!');
document.write ('<br>');
document.write (' ');
document.write ('<br>');
// Paklauskite vartotojo vardo naudodamiesi prompt metodais. Su alert parodykite pranešimą „Your name %name%“ kur %name% - įvestas vardas.
let name1 = prompt ('Įveskite savo vardą:');
alert ('Your name ' + name1);