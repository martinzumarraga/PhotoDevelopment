function konprobatu(){
	var mezua="";
	var userName=document.getElementById('userName').value;
	var lastName=document.getElementById('lastName').value;
	var selected=document.getElementById('politics').checked;
	if(selected==false){
		alert('Pribatutasun politikak onartu behar dituzu.');
		mezua="error";
	}
	if(userName==""){
		document.getElementById('userName').style.borderColor="#FF0000";
		mezua="error";
	}else{
		document.getElementById('userName').style.borderColor="";
	}
	if(lastName==""){
		document.getElementById('lastName').style.borderColor="#FF0000";
		mezua="error";			
	}else{
		document.getElementById('lastName').style.borderColor="";
	}
	if(mezua==""){
		return true;
	}else{
		return false;
	}
}

function userAgeChange(){
	var old=document.getElementById('birthday').value;
	if('17'<old){
		document.getElementById('userEmailDiv').style.display='block';
	}else{
		document.getElementById('userEmailDiv').style.display='none';
	}
}