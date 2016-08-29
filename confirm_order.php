<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style/stylesheet.css" />
<title>Cognac Dubois - Conformer La Commande</title>
</head>
<body>
	<?php include("header.php");include("tools/prices.php"); ?>
	<table class="form" cellpadding="10px">
		<tr>
			<td rowspan="2"><?php include("order_summary.php");?>
			</td>
			<td><?php include("client_summary.php");?>
			</td>
		</tr>
		<tr>
			<td>
				<form method="post" action="send_order.php">
					<input type="hidden" name="lastname" id="lastname"
						value=<?php echo '"'.$_POST['lastname'].'"'?>> <input
						type="hidden" name="firstname" id="firstname"
						value=<?php echo '"'.$_POST['firstname'].'"'?>> <input
						type="hidden" name="address_street" id="address_street"
						value=<?php echo '"'.$_POST['address_street'].'"'?>> <input
						type="hidden" name="address_zip_code" id="address_zip_code"
						value=<?php echo '"'.$_POST['address_zip_code'].'"'?>> <input
						type="hidden" name="address_city" id="address_city"
						value=<?php echo '"'.$_POST['address_city'].'"'?>> <input
						type="hidden" name="email" id="email"
						value=<?php echo '"'.$_POST['email'].'"'?>> <input type="hidden"
						name="phone" id="phone" value=<?php echo '"'.$_POST['phone'].'"'?>>
					<input type="hidden" name="qty_vs" id="qty_vs"
						value=<?php echo '"'.$_POST['qty_vs'].'"'?>> <input type="hidden"
						name="qty_vsop" id="qty_vsop"
						value=<?php echo '"'.$_POST['qty_vsop'].'"'?>> <input
						type="hidden" name="qty_napoleon" id="qty_napoleon"
						value=<?php echo '"'.$_POST['qty_napoleon'].'"'?>> <input
						type="hidden" name="qty_xo_bottle" id="qty_xo_bottle"
						value=<?php echo '"'.$_POST['qty_xo_bottle'].'"'?>> <input
						type="hidden" name="qty_xo_s" id="qty_xo_s"
						value=<?php echo '"'.$_POST['qty_xo_s'].'"'?>> <input
						type="hidden" name="qty_xo_l" id="qty_xo_l"
						value=<?php echo '"'.$_POST['qty_xo_l'].'"'?>> <input
						type="hidden" name="qty_pineau_white" id="qty_pineau_white"
						value=<?php echo '"'.$_POST['qty_pineau_white'].'"'?>> <input
						type="hidden" name="qty_pineau_red" id="qty_pineau_red"
						value=<?php echo '"'.$_POST['qty_pineau_red'].'"'?>> <input
						type="hidden" name="qty_pineau_old" id="qty_pineau_old"
						value=<?php echo '"'.$_POST['qty_pineau_old'].'"'?>> <label
						for="comments">Commentaires : </label><br>
					<textarea name="comments" id="comments" cols="50" rows="5"></textarea>
					<br> <input type="submit" value="Transmettre La Commande">
				</form> <a href="order.php"><button type="button">Annuler La
						Commande</button> </a>
			</td>
		</tr>
	</table>
</body>
</html>
