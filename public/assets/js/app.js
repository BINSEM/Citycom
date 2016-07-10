'use strict';

$(document).ready(function(){
	console.log('sourced app.js');
	var visited = localStorage.getItem('visited');
	console.log(window.location);
	if(visited){
		if (window.location.pathname == "/"){
			window.location = "/magasin";
		}
	} else {
		localStorage.setItem('visited', true);
	}
});