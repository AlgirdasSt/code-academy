// for-in
// Sukurkite objektą green: žalia, red: raudona, blue: mėlyna. Parodykite šio objekto raktus ir elementus.

let spalvos = {
	green: 'žalia',
	red: 'raudona',
	blue: 'mėlyna'
};
console.log(spalvos);
for (let key in spalvos) {
    console.log(`${key} - ${spalvos[key]}`);
};

// Sukurkite objektą su raktais Mantas, Paulius, Mindaugas ir reikšmėm 200, 300, 300.
// Parodykite eilutes tokiu formatu: Mantas - 200 EU atlyginimas.

let workers = {
    Mantas: 200,
    Paulius: 300,
    Mindaugas: 300
};
for (let key in workers) {
    console.log(`${key} - ${workers[key]} EU`);
};


// Sukurkite objektą su savaitės dienomis. 
// Raktai jame turėtų būti dienų skaičiai nuo savaitės pradžios 
// (1 -> pirmadienis ir t.t.). 
// Parodykite dabartinę savaitės dieną.
// Sukurkite kintamjį day kuriame saugomas savaitės dienos numeris. 
// Atspausdinkite savaitės dieną naudojant sita kintamajį.

let week_days = {
	1: 'pirmadienis',
	2: 'antradienis',
	3: 'trečiadienis',
	4: 'ketvirtadienis',
	5: 'penktadienis',
	6: 'šeštadienis',
	0: 'sekmadienis' 
};
let date = new Date();
let day = date.getDay();
console.log(day);
console.log(week_days[day]);

// Variantas su for in.

for (let key in week_days){
	if (day == key) {
		console.log(`${week_days[key]}`);
		break;
	}
};


// Duotas objektas {js: ['jQuery', 'Angular'], php: 'hello', css: 'world'}. 
// Parodykite žodį jQuery.

let obj = {js: ['jQuery', 'Angular'], php: 'hello', css: 'world'};

console.log(obj.js[0]);

// Sukurkite objektą. Pirmieji du raktai yra lt ir en.
// Raktai turi savaitės dienų vardų masyvus lietuviškai ir angliškai atitinkamai. 

let obj_1 = {
	lt : ['pirmadienis', 'antradienis', 'trečiadienis', 'ketvirtadienis', 'penktadienis', 'šeštadienis', 'sekmadienis'],
	en : ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday']
};

// Naudodamiesi šiuo masyvu, pirmadienį parodykite lietuvių kalba, o trečiadienį - anglų kalba.

console.log(obj_1.lt[0], obj_1.en[2]);

// Sukurkite kintamsios lang ir day (reikšmės lt arba en) ir naudojant lang ir day parodykite dieną.

let lang = 'lt';
let day_1 = day;

console.log(obj_1[lang][day_1 -1]);