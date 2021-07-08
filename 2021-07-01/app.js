// document.querySelector("body > div:nth-child(2) > div.p-2_bottom > div").value=""
// document.forms[0].submit();
// function capitalizeFLetter() {
// 	var input = document.getElementById("input");
// 	var x = document.getElementById("div");
// 	var string = input.value;
// 	x.innerHTML = string[0].toUpperCase() + 
// 	string.slice(1);
// };


function upper(){
	let input = document.getElementById('text_input').value;
	document.getElementById('text_input').value = input.toUpperCase();
};
function lower(){
	let input = document.getElementById('text_input').value;
	document.getElementById('text_input').value = input.toLowerCase();
};
function upperFirst(){
	let input = document.getElementById('text_input').value;
	document.getElementById('text_input').value = input[0].toUpperCase() + input.slice(1);
};
function lowerFirst(){
	let input = document.getElementById('text_input').value;
	document.getElementById('text_input').value = input[0].toLowerCase() + input.slice(1);
};

function phonenumbe_2(inputtxt) {
    let phoneno = /^\d{9}$/;
     if (inputtxt.match(phoneno)) {
        return true;
    } else {
        alert("Not a valid Phone Number");
        return false;
    }
}

function readonly(){
	let input = document.getElementById('fill_me_in').readOnly = true;
};

function unblock(){
	let input = document.getElementById('fill_me_in').readOnly = false;
};

function cursors(argument) {
	console.log(argument);
	let target = document.getElementById('exampleFormControlTextarea1');
	target.classList.remove("pe-none");
	target.classList.remove("pe-auto");
	if (argument == 1){
		target.classList.add('pe-none');
	}else if (argument == 2){
		target.classList.add('pe-auto');
	}
};

function colors(argument) {
	console.log(argument);
	let target = document.getElementById('exampleFormControlTextarea1');
	target.classList.remove('text-danger');
	target.classList.remove('text-success');
	target.classList.remove('text-body');
	if (argument == 1){
		target.classList.add('text-danger');
	}else if (argument == 2){
		target.classList.add('text-success');
	}else if (argument == 3){
		target.classList.add('text-body');
	}
};

function resetAll() {
	let target = document.getElementById('exampleFormControlTextarea1');
	target.classList= 'form-control';
};




