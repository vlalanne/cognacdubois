<?php

function format_mail($data){
	$message="Client : ".$data['firstName']." ".$data['lastName']."\n";
	$message.="Adresse : ".$data['street']."\n";
	$message.="Code Postal : ".$data['zipCode']."\n";
	$message.="Ville : ".$data['city']."\n";
	$message.="E-mail : ".$data['email']."\n";
	$message.="Telephone : ".$data['phone']."\n";
	$message.="=====================================================================\n";
	$message.="VS : ".$data['cart']['vs']."\n";
	$message.="VSOP : ".$data['cart']['vsop']."\n";
	$message.="Napoleon : ".$data['cart']['napoleon']."\n";
	$message.="XO Bouteille : ".$data['cart']['xo_bottle']."\n";
	$message.="XO Carafe 50cl : ".$data['cart']['xo_s']."\n";
	$message.="XO Carafe 70cl : ".$data['cart']['xo_l']."\n";
	$message.="Pineau Blanc : ".$data['cart']['pineau_white']."\n";
	$message.="Pineau Rose : ".$data['cart']['pineau_red']."\n";
	$message.="Vieux Pineau Blanc : ".$data['cart']['pineau_old']."\n";
	return $message;
}
$input = json_decode(file_get_contents('php://input'), true);

$result = mail("earlduboischristophe@orange.fr", "Nouvelle Commande de ".$input['firstName']." ".$input['lastName'], format_mail($input));

if ($result) {
  echo "{\"message\":\"order send\"}";
} else {
  echo "{\"message\":\"failed to send order\"}";
  http_response_code(500);
}

