<?php
$enlace = mysqli_connect("localhost", "root", "", "p4");

function konexioaItxi(){
	global $enlace;
	$enlace->close();
}

function gordeFormulario($country, $region, $userName,$lastName,$years,$email,$privacy,$securePassword,$socialNetwork,$secureConnection){
	global $enlace;
	$result=$enlace->query("INSERT INTO itt4_users(user_nicename, user_lastname, user_email, user_country,user_region,user_years)
	VALUES('$userName', '$lastName', '$email', '$country','$region',$years)");
	if($securePassword!='-1'){
		$enlace->query("INSERT INTO like_themes(user_email, theme) VALUES('$email','Secure Password')");
	}
	if($privacy!='-1'){
		$enlace->query("INSERT INTO like_themes(user_email, theme) VALUES('$email','Privacy')");
	}
	if($socialNetwork!='-1'){
		$enlace->query("INSERT INTO like_themes(user_email, theme) VALUES('$email','Social Network')");
	}
	if($secureConnection!='-1'){
		$enlace->query("INSERT INTO like_themes(user_email, theme) VALUES('$email','Secure Connection')");
	}
	if($result){
		return 'ok';
	}else{
		return 'Error:'.$result;
	}
}

?>