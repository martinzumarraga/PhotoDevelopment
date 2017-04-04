	function countryChange(){
		var aux=document.getElementById('country').value;
		if(aux=='169' || aux=='70'){
			document.getElementById('regionDiv').style.display='block';
		}else{
			document.getElementById('regionDiv').style.display='none';
		}
	}
	
	function emailChange(){
		var email=document.getElementById('email').value;
		if(email!=""){
			document.getElementById('interesedThemes').style.display='block';
		}else{
			document.getElementById('interesedThemes').style.display='block';
		}
	}

	