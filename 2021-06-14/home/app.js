let salary = prompt('Įveskite bazinį užmokesčio dydį');
console.log(salary);
const people = 1761463;
const budget = 8487300000;
var	result = (salary * people) / budget * 100;
console.log(result);
document.write(result.toFixed(2) + ' %');