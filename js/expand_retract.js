/****************************************************************************************/
/*
/* FILE NAME: expand_retract.js
/*
/* DESCRIPTION: Code for handling the sizing of the website based on the window it is in.
/*
/*   DATE      BY       DESCRIPTION
/* ========   ======   =============
/* 4/1/2017 Sam Bowden  Created file before header initializations
/*
/****************************************************************************************/
function slideIn(el){
	var elem = document.getElementById(el);
	elem.style.transition = "left 0.5s ease-in 0s";
	elem.style.left = "0px";
}
function slideOut(el){
	var elem = document.getElementById(el);
	elem.style.transition = "left 0.5s ease-out 0s";
	elem.style.left = "-400px";
}
