// Sukurkite objektą su raktais Mantas, Paulius, Mindaugas ir reikšmėm 200, 300, 300.

let person = {
	person_1: 'Mantas',
	person_2: 'Paulius',
	person_3: 'Mindaugas',
	salary_1: 200,
	salary_2: 300,
	salary_4: 400
};

// Parodykite eilutes tokiu formatu: Mantas - 200 EU atlyginimas.

console.log(`${person.person_1} - ${person.salary_1} EU atlyginimas.`);
console.log(person.person_2 + ' - ' + person.salary_2 + ' EU atlyginimas.');

// Sukurkite objektą su raktais Mantas, Paulius, Mindaugas ir reikšmėm 200, 300, 300.
let workers = {
    Mantas: 200,
    Paulius: 300,
    Mindaugas: 300
};
// Parodykite eilutes tokiu formatu: Mantas - 200 EU atlyginimas.
for (let key in workers) {
    console.log(`${key} - ${workers[key]} EU`)
}