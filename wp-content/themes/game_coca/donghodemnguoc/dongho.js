var h = null; 
var m = null;
var s = null; 
var timeout = null; 	
function dongho(){
	if(h === null){
		var d = new Date();
		h = d.getHours();
		m = d.getMinutes();
		s = d.getSeconds();
		console.log(h);	
	}
	
	
	
	if(s === -1){
		m -= 1;
		s = 59;
	}
	if(m === -1){
		h -= 1;
		m = 59;
	}
	if(h === -1){
		clearTimeout(dongho());
		alert('hết giờ');
		return false;
	}

	document.getElementById("dongho").innerHTML= h +":"+ m +":"+ s;
	setTimeout(function(){
		s--;
		dongho();
	},1000);
}

