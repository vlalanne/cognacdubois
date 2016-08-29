<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style/stylesheet.css" />
<title>Cognac Dubois - Actualités</title>
</head>
<body>
	<?php include("header.php");?>
	
	<table border="0" width="100%" cellpadding="5em">
		<tr>
			<td width="85%" class="productmenuborder" valign="top">
				<p class="newsName">Actualités</p>
				<div class="newsOverflow">
					<?php include("news.php"); ?>
				</div>
			</td>
			<td width="15%" valign="top"><div id="description"
					class="bodyLeftAlign">
					<p class="bottleName">Salons et Manisfestations</p>
					<ul>
						<?php include("events.html"); ?>
					</ul>
					<a
						href="http://cognac.fr/cognac/_fr/3_conso/index.aspx?univers=3_conso&prevention=true">Plus
						...</a>
				</div>
			</td>
		</tr>
	</table>
</body>
</html>
