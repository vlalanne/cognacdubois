<table border="1" class="formTable">
	<tr>
		<th>Produit</th>
		<th>Vieillisement</th>
		<th>Volume</th>
		<th>Prix Unitaire TTC</th>
		<th>Quantité</th>
		<th>Prix Total TTC</th>
	</tr>
	<tr>
		<td>Cognac VS</td>
		<td>7 ans</td>
		<td>70 cl</td>
		<td>18,50€</td>
		<td><?php echo $_POST['qty_vs']; ?>
		</td>
		<td id="total_vs"><?php echo number_format($_POST['qty_vs']*$price_vs, 2); ?>€
		</td>
	</tr>
	<tr>
		<td>Cognac VSOP</td>
		<td>12 ans</td>
		<td>70 cl</td>
		<td>25,00€</td>
		<td><?php echo $_POST['qty_vsop']; ?>
		</td>
		<td id="total_vsop"><?php echo number_format($_POST['qty_vsop']*$price_vsop, 2); ?>€</td>
	</tr>
	<tr>
		<td>Cognac Napoléon</td>
		<td>20 ans</td>
		<td>70 cl</td>
		<td>33,00€</td>
		<td><?php echo $_POST['qty_napoleon']; ?></td>
		<td id="total_napoleon"><?php echo number_format($_POST['qty_napoleon']*$price_napoleon, 2); ?>€</td>
	</tr>
	<tr>
		<td>Cognac XO <i>Bouteille</i>
		</td>
		<td>40 ans</td>
		<td>50 cl</td>
		<td>47,00€</td>
		<td><?php echo $_POST['qty_xo_bottle']; ?></td>
		<td id="total_xo_bottle"><?php echo number_format($_POST['qty_xo_bottle']*$price_xo_bottle, 2); ?>€</td>
	</tr>
	<tr>
		<td>Cognac XO <i>Carafe</i>
		</td>
		<td>40 ans</td>
		<td>50 cl</td>
		<td>50,00€</td>
		<td><?php echo $_POST['qty_xo_s']; ?>
		</td>
		<td id="total_xo_s"><?php echo number_format($_POST['qty_xo_s']*$price_xo_s, 2); ?>€</td>
	</tr>
	<tr>
		<td>Cognac XO <i>Carafe</i>
		</td>
		<td>40 ans</td>
		<td>70 cl</td>
		<td>66,00€</td>
		<td><?php echo $_POST['qty_xo_l']; ?>
		</td>
		<td id="total_xo_l"><?php echo number_format($_POST['qty_xo_l']*$price_xo_l, 2); ?>€</td>
	</tr>
	<tr>
		<td>Pineau Blanc</td>
		<td></td>
		<td>75 cl</td>
		<td>9,20€</td>
		<td><?php echo $_POST['qty_pineau_white']; ?></td>
		<td id="total_pineau_white"><?php echo number_format($_POST['qty_pineau_white']*$price_pineau_white, 2); ?>€</td>
	</tr>
	<tr>
		<td>Pineau Rosé</td>
		<td></td>
		<td>75 cl</td>
		<td>9,40€</td>
		<td><?php echo $_POST['qty_pineau_red']; ?></td>
		<td id="total_pineau_red"><?php echo number_format($_POST['qty_pineau_red']*$price_pineau_red, 2); ?>€</td>
	</tr>
	<tr>
		<td>Vieux Pineau Blanc</td>
		<td>12 ans</td>
		<td>75 cl</td>
		<td>14,50€</td>
		<td><?php echo $_POST['qty_pineau_old']; ?></td>
		<td id="total_pineau_old"><?php echo number_format($_POST['qty_pineau_red']*$price_pineau_old, 2); ?>€</td>
	</tr>
	<tr>
		<td colspan="4">Total</td>
		<td id="total_qty"><?php echo ($_POST['qty_vs']+$_POST['qty_vsop']+$_POST['qty_napoleon']+$_POST['qty_xo_bottle']+$_POST['qty_xo_s']+$_POST['qty_xo_l']+$_POST['qty_pineau_white']+$_POST['qty_pineau_red']+$_POST['qty_pineau_old']); ?>
		</td>
		<td id="total_price"><?php echo number_format($_POST['qty_vs']*$price_vs+$_POST['qty_vsop']*$price_vsop+$_POST['qty_napoleon']*$price_napoleon+$_POST['qty_xo_bottle']*46+$_POST['qty_xo_s']*$price_xo_s+$_POST['qty_xo_l']*$price_xo_l+$_POST['qty_pineau_white']*$price_pineau_white+$_POST['qty_pineau_red']*$price_pineau_red+$_POST['qty_pineau_old']*$price_pineau_old,2); ?>€</td>
	</tr>
<!-- 	<tr> -->
<!-- 		<td colspan="5">Frais de Port</td> -->
<!-- 		<td id="port_price">0,00€ //TODO</td> -->
<!-- 	</tr> -->
<!-- 	<tr> -->
<!-- 		<td colspan="5">Total avec Frais de Port</td> -->
<!-- 		<td id="total_price_with_port">0,00€ //TODO</td> -->
<!-- 	</tr> -->
</table>
