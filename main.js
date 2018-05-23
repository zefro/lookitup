//get element
var modal = document.getElementById('lg');
//get open btn
var modalbtn = document.getElementById('mbtn');
//get close btn
var closebtn = document.getElementsByClassName('close')[0];

//listen for mouse click open
modalbtn.addEventListener('click',openModal);

closebtn.addEventListener('click',closeModal);

window.addEventListener('click',outsideClick);


function openModal(){
	modal.style.display = 'block';
}

function closeModal(){
	modal.style.display = 'none';
}

function outsideClick(e){
	if(e.target == modal){
	modal.style.display = 'none';
	}
}