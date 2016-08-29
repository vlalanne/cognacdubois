<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style/stylesheet.css" />
<title>Cognac Dubois - Les Produits</title>
</head>
<body>
	<?php include("header.php"); ?>
	<table border="0" width="100%">
		<tr>
			<td width="15%" class="productmenuborder" valign="top" rowspan="2"><div
					id="menu">
					<br />
					<div id="vs" class="productmenu" onmouseover="setProduct(this.id);">VS</div>
					<div id="vsop" class="productmenu"
						onmouseover="setProduct(this.id);">VSOP</div>
					<div id="napoleon" class="productmenu"
						onmouseover="setProduct(this.id);">Napoléon</div>
					<div id="xo" class="productmenu" onmouseover="setProduct(this.id);">XO</div>
					<div id="pineauBlanc" class="productmenu"
						onmouseover="setProduct(this.id);">Pineau Blanc</div>
					<div id="pineauRose" class="productmenu"
						onmouseover="setProduct(this.id);">Pineau Rosé</div>
					<div id="vieuxPineauBlanc" class="productmenu"
						onmouseover="setProduct(this.id);">Vieux Pineau Blanc</div>
				</div>
			</td>
			<td width="50%" id="description" class="body">
				<table class="presentation">
					<tr>
						<td id="bottleName" class="bottleName">VS</td>
						<td width="35%" rowspan="2"><img id="bottle" src="img/vs.png"
							alt="" height="400">
						</td>
					</tr>
					<tr>
						<td id="bottleDescription" class="bottleDescription">Avec un âge
							de dégustation de 7 ans, ce VS a été conçu pour être bu en "long
							drink".</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td height="400px"></td>
		</tr>
	</table>
	<script type="text/javascript" src="product.js"></script>
	<div style="background: url(img/vsop.png) no-repeat -9999px -9999px;"></div>
	<div style="background: url(img/napoleon.png) no-repeat -9999px -9999px;"></div>
	<div style="background: url(img/xo.png) no-repeat -9999px -9999px;"></div>
	<div style="background: url(img/pineauWhite.png) no-repeat -9999px -9999px;"></div>
	<div style="background: url(img/pineauRed.png) no-repeat -9999px -9999px;"></div>
	<div style="background: url(img/pineauOld.png) no-repeat -9999px -9999px;"></div>
</body>
</html>
