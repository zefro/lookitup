

//get element
var modal3 = document.getElementById('mode');
//get open btn
var modalbtn3 = document.getElementById('prof');
//get close btn
var closebtn3 = document.getElementsByClassName('close3')[0];

//listen for mouse click open
modalbtn3.addEventListener('click',openModal3);

closebtn3.addEventListener('click',closeModal3);

window.addEventListener('click',outsideClick);


function openModal3(){
	modal3.style.display = 'block';
}

function closeModal3(){
	modal3.style.display = 'none';
}

function outsideClick(e){
	if(e.target == modal3){
	modal3.style.display = 'none';
	}
}



//get element
var modal4 = document.getElementById('mode2');
//get open btn
var modalbtn4 = document.getElementById('prof2');
//get close btn
var closebtn4 = document.getElementsByClassName('close4')[0];

//listen for mouse click open
modalbtn4.addEventListener('click',openModal4);

closebtn4.addEventListener('click',closeModal4);

window.addEventListener('click',outsideClick);


function openModal4(){
	modal4.style.display = 'block';
}

function closeModal4(){
	modal4.style.display = 'none';
}

function outsideClick(e){
	if(e.target == modal3){
	modal4.style.display = 'none';
	}
}


