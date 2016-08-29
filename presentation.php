<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style/stylesheet.css" />
<title>Cognac Dubois - Présentation</title>
</head>
<body>
	<?php include("header.php"); ?>
	<table border="0" width="100%" height="100%">
		<tr>
			<td width="15%" class="productmenuborder" valign="top" rowspan="2"><div
					id="menu">
					<br />
					<div id="vignoble" class="productmenu"
						onmouseover="setTopic(this.id);">Les Vignobles</div>
					<div id="vendanges" class="productmenu"
						onmouseover="setTopic(this.id);">Les Vendanges</div>
					<div id="distillation" class="productmenu"
						onmouseover="setTopic(this.id);">La Distillation</div>
					<div id="vieillissement" class="productmenu"
						onmouseover="setTopic(this.id);">Le Vieillissement</div>
				</div>
			</td>
			<td width="50%"><div id="description" class="body">
					<table class="presentation">
						<tr>
							<td id="topicName" class="presentationTitle" colspan="2"></td>
						</tr>
						<tr>
							<td id="topicDescription" class="presentationContent" rowspan="2"></td>
							<td width="35%"><img id="topPicture" class="presentationPicture"
								src="img/map.png" alt="" width="400">
							</td>
						</tr>
						<tr>
							<td width="35%"><img id="bottomPicture" class="presentationPicture"
								src="img/vignoble.png" alt="" width="400">
							</td>
						</tr>
					</table>


				</div>
		
		</tr>
		<tr>
			<td height="400px"></td>
		</tr>
	</table>
	<script type="text/javascript" src="presentation.js"></script>
	<div
		style="background: url(img/map.png) no-repeat -9999px -9999px;"></div>
	<div
		style="background: url(img/vignoble.png) no-repeat -9999px -9999px;"></div>
	<div
		style="background: url(img/vendanges.png) no-repeat -9999px -9999px;"></div>
	<div
		style="background: url(img/vendanges2.png) no-repeat -9999px -9999px;"></div>
	<div
		style="background: url(img/distillation.png) no-repeat -9999px -9999px;"></div>
	<div
		style="background: url(img/distillation2.png) no-repeat -9999px -9999px;"></div>
	<div
		style="background: url(img/vieillissement.png) no-repeat -9999px -9999px;"></div>
	<div
		style="background: url(img/bottles.png) no-repeat -9999px -9999px;"></div>

</body>
</html>
