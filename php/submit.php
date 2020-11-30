<?php

if(isset($_POST['url']) && $_POST['url'] == '' && $_POST['message'] != ''){

	$youremail = 'contactpro@angeliquecalfati.com';

	$body = "Voici le formulaire de contact, envoyé depuis mon site web, par :
	Nom:  $_POST[name]
	E-Mail: $_POST[email]
	Message: $_POST[message]";

	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	mail($youremail, 'Formulaire de contact', $body, $headers );

}

//header('Location: http://www.angeliquecalfati.com/merci.html');
//exit('Redirecting you to http://www.angeliquecalfati.com/merci.html');



?>




