'use strict';

$(document).ready(function(){
	console.log('sourced app.js');
	var visited = localStorage.getItem('visited');
	console.log(window.location);
		var message = document.getElementById('message');
		console.log(typeof $message);
		if (message) {
			message.style.margin = '6em 0 0 0';
		}
	if(visited){
		document.getElementById('text').remove();
		document.getElementById('centertitre').innerHTML = '<h3>Au Royaume de la Caillasse</h3>';
		document.getElementById('centertitre').style.margin = '4em 0 0 0';
		document.getElementById('centertitre').style.padding = '1em 0 0 0';
	} else {
		localStorage.setItem('visited', true);
	}
});