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


//get element
var modal2 = document.getElementById('sp');
//get open btn
var modalbtn2 = document.getElementById('mbtn2');
//get close btn
var closebtn2 = document.getElementsByClassName('close2')[0];

//listen for mouse click open
modalbtn2.addEventListener('click',openModal2);

closebtn2.addEventListener('click',closeModal2);

window.addEventListener('click',outsideClick1);


function openModal2(){
	modal2.style.display = 'block';
}

function closeModal2(){
	modal2.style.display = 'none';
}

function outsideClick1(e){
	if(e.target == modal2){
	modal2.style.display = 'none';
	}
}



