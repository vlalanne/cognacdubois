<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style/stylesheet.css" />
<title>Cognac Dubois - Commande Envoyée</title>
</head>
<body>
	<?php include("header.php");include("tools/prices.php"); 
	$toAddress="cognacdubois@free.fr";
	mail($toAddress, "Commande", format_mail($_POST),"From:" . $_POST['email']. "\r\n" );
	?>
	<div class="receipt noprint">
		<h2>Commande terminée.</h2>
		<p class="orderText">
			Votre commande a bien été transmise.<br /> Le prix total incluant les frais de port vous sera communiqué par e-mail
			dès que possible.
			<!-- 			Elle sera expédié dès reception -->
<!-- 			du paiement par chèque bancaire à l'adresse: -->
<!-- 			<br /> //TODO -->
 		</p> 
<!--		<button onclick="window.print()">Imprimer le bon de commande</button>-->
		
	</div>
	<div class="receipt onlyInPrint">
		<center>
			<h2>Bon de Commande</h2>
			<?php include("order_summary.php");?>
			<br>
			<?php include("client_summary.php");?>
		</center>
	</div>
</body>
</html>

<?php
function format_mail($form){
	$message="Client : ".$form['firstname']." ".$form['lastname']."\n";
	$message.="Adresse : ".$form['address_street']."\n";
	$message.="Code Postal : ".$form['address_zip_code']."\n";
	$message.="Ville : ".$form['address_city']."\n";
	$message.="E-mail : ".$form['email']."\n";
	$message.="Telephone : ".$form['phone']."\n";
	$message.="=====================================================================\n";
	$message.="VS : ".$form['qty_vs']."\n";
	$message.="VSOP : ".$form['qty_vsop']."\n";
	$message.="Napoleon : ".$form['qty_napoleon']."\n";
	$message.="XO Bouteille : ".$form['qty_xo_bottle']."\n";
	$message.="XO Carafe 50cl : ".$form['qty_xo_s']."\n";
	$message.="XO Carafe 70cl : ".$form['qty_xo_l']."\n";
	$message.="Pineau Blanc : ".$form['qty_pineau_white']."\n";
	$message.="Pineau Rose : ".$form['qty_pineau_red']."\n";
	$message.="Vieux Pineau Blanc : ".$form['qty_pineau_old']."\n";
	$message.="=====================================================================\n";
	$message.="Commentaires : ".$form['comments']."\n";
	return $message;
}
?>