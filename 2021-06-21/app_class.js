let age = +prompt('Įveskite savo gymimo metus');

let currentdate = new Date();
let currentyear = currentdate.getFullYear();
let result = currentyear - age;
console.log(currentyear);
document.write('Jūsų amžius ' + result); 
