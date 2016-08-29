<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style/stylesheet.css" />
<title>Cognac Dubois - Commander</title>
</head>
<body>
	<?php include("header.php"); ?>
	<p class="orderText">
		Cette page vous permet de définir votre commande, d'en calculer le
		prix puis de nous la transmettre.<br> Attention : Les
		prix affichés sont les prix de vente au domaine.<br>  Une fois la
		procédure de commande terminée, le prix total incluant les frais de
		port vous sera communiqué par e-mail.<br> Les commandes sont expédiées<a
			href="#footnote_2" class="footnoteReference">[2]</a> dès réception du
		paiement <u>par chèque bancaire</u> à l'adresse <i>15 rue des Petits
			Prés, Le Brandard, 17800 Coulonges</i>. <br>Le transport est offert pour toute
		expédition de plus de 48 bouteilles groupées en une seule adresse en
		France métropolitaine.
	</p>


	<form method="post" action="confirm_order.php" class="form">
		<table cellpadding="10px">
			<tr>
				<td rowspan="2">
					<table class="formTable" border="1">
						<tr>
							<th>Produit</th>
							<th>Vieillisement</th>
							<th>Volume</th>
							<th>Prix Unitaire TTC<a href="#footnote_1"
								class="footnoteReference">[1]</a>
							</th>
							<th>Quantité</th>
							<th>Prix Total TTC<a href="#footnote_1" class="footnoteReference">[1]</a>
							</th>
						</tr>
						<tr>
							<td>Cognac VS</td>
							<td>7 ans</td>
							<td>70 cl</td>
							<td>18,00€</td>
							<td><input type="number" min="0" name="qty_vs" id="qty_vs"
								value="0" onchange="updateTotal(this.id);" /></td>
							<td id="total_vs">0,00€</td>
						</tr>
						<tr>
							<td>Cognac VSOP</td>
							<td>12 ans</td>
							<td>70 cl</td>
							<td>24,00€</td>
							<td><input type="number" min="0" name="qty_vsop" id="qty_vsop"
								value="0" onchange="updateTotal(this.id);" /></td>
							<td id="total_vsop">0,00€</td>
						</tr>
						<tr>
							<td>Cognac Napoléon</td>
							<td>20 ans</td>
							<td>70 cl</td>
							<td>32,00€</td>
							<td><input type="number" min="0" name="qty_napoleon"
								id="qty_napoleon" value="0" onchange="updateTotal(this.id);" />
							</td>
							<td id="total_napoleon">0,00€</td>
						</tr>
						<tr>
							<td>Cognac XO <i>Bouteille</i>
							</td>
							<td>38 ans</td>
							<td>50 cl</td>
							<td>47,00€</td>
							<td><input type="number" min="0" name="qty_xo_bottle"
								id="qty_xo_bottle" value="0" onchange="updateTotal(this.id);" />
							</td>
							<td id="total_xo_bottle">0,00€</td>
						</tr>
						<tr>
							<td>Cognac XO <i>Carafe</i>
							</td>
							<td>38 ans</td>
							<td>50 cl</td>
							<td>50,00€</td>
							<td><input type="number" min="0" name="qty_xo_s" id="qty_xo_s"
								value="0" onchange="updateTotal(this.id);" /></td>
							<td id="total_xo_s">0,00€</td>
						</tr>
						<tr>
							<td>Cognac XO <i>Carafe</i>
							</td>
							<td>38 ans</td>
							<td>70 cl</td>
							<td>66,00€</td>
							<td><input type="number" min="0" name="qty_xo_l" id="qty_xo_l"
								value="0" onchange="updateTotal(this.id);" /></td>
							<td id="total_xo_l">0,00€</td>
						</tr>
						<tr>
							<td>Pineau Blanc</td>
							<td></td>
							<td>75 cl</td>
							<td>9,00€</td>
							<td><input type="number" min="0" name="qty_pineau_white"
								id="qty_pineau_white" value="0"
								onchange="updateTotal(this.id);" />
							</td>
							<td id="total_pineau_white">0,00€</td>
						</tr>
						<tr>
							<td>Pineau Rosé</td>
							<td></td>
							<td>75 cl</td>
							<td>9,20€</td>
							<td><input type="number" min="0" name="qty_pineau_red"
								id="qty_pineau_red" value="0" onchange="updateTotal(this.id);" />
							</td>
							<td id="total_pineau_red">0,00€</td>
						</tr>
						<tr>
							<td>Vieux Pineau Blanc</td>
							<td>12 ans</td>
							<td>75 cl</td>
							<td>14,00€</td>
							<td><input type="number" min="0" name="qty_pineau_old"
								id="qty_pineau_old" value="0" onchange="updateTotal(this.id);" />
							</td>
							<td id="total_pineau_old">0,00€</td>
						</tr>
						<tr>
							<td colspan="4">Total</td>
							<td id="total_qty">0</td>
							<td id="total_price">0,00€</td>
						</tr>
						<!-- 						<tr> -->
						<!-- 							<td colspan="5">Frais de Port</td> -->
						<!-- 							<td id="port_price">0,00€ //TODO</td> -->
						<!-- 						</tr> -->
						<!-- 						<tr> -->
						<!-- 							<td colspan="5">Total avec Frais de Port</td> -->
						<!-- 							<td id="total_price_with_port">0,00€ //TODO</td> -->
						<!-- 						</tr> -->
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td><label for="lastname">Nom :</label></td>
							<td><input type="text" name="lastname" id="lastname" required />
							</td>
							<td><label for="firstname">Prénom :</label></td>
							<td><input type="text" name="firstname" id="firstname" required />
							</td>
						</tr>
						<tr>
							<td><label for="address_street">Adresse :</label></td>
							<td colspan="3"><textarea name="address_street"
									id="address_street" cols="50" rows="3" required></textarea>
							</td>
						</tr>
						<tr>
							<td><label for="address_zip_code">Code Postal :</label></td>
							<td><input type="text" name="address_zip_code"
								id="address_zip_code" required />
							</td>
							<td><label for="address_city">Ville :</label></td>
							<td><input type="text" name="address_city" id="address_city"
								required /></td>
						</tr>
						<tr>
							<td><label for="email">E-mail :</label></td>
							<td><input type="email" name="email" id="email" required /></td>
							<td><label for="phone">Téléphone :</label></td>
							<td><input type="tel" name="phone" id="phone" /></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td><input type="submit" value="Soumettre la commande"></td>
			</tr>
		</table>
	</form>
	<p class="footnote">
		<a id="footnote_1">1/ Nos prix comprennent toutes les taxes et droits
			compris au départ de la propriété.Les prix indiqués peuvent être
			modifiés en cas d'augmentation de droits sur les alcools.</a><br> </a><a
			id="footnote_2">2/ Les marchandises voyagent aux risques et périls du
			destinataire. En cas d'avaries, faites des réserves sur le bordereau de
			livraison et prévenez-nous immédiatement.<br> Nous nous chargerons de
			faire remplacer la marchandise détériorée par le transporteur.
		</a>
		<script type="text/javascript" src="order.js"></script>

</body>
</html>
