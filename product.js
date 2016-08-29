function setProduct(productName) {
	var name = document.getElementById('bottleName');
	var description = document.getElementById('bottleDescription');
	var img = document.getElementById('bottle');
	switch (productName) {
	case "vsop":
		name.innerHTML = "VSOP";
		description.innerHTML = "Avec un âge de dégustation de 12 ans, d'une belle couleur ambrée, il possède un bouquet aromatique complexe. Ce VSOP peut être bu seul, accompagné d'un glacon ou encore avec Tonic ou Perrier.";
		img.src = "img/vsop.png";
		break;
	case "napoleon":
		name.innerHTML = "Napoléon";
		description.innerHTML = "Avec un âge de dégustation de 20 ans, sa couleur très ambrée est le signe d'un long séjour en fut de chêne. En effet l'harmonie qui règne dans ce cognac offre des notes fines. En bouche il apparaît beaucoup plus long. Seul ou accompagné d'un glacon, ce cognac est un feu d'artifice pour vos saveurs gustatives.";
		img.src = "img/napoleon.png";
		break;
	case "xo":
		name.innerHTML = "XO";
		description.innerHTML = "Avec un âge de dégustation de 37 ans, c'est un peu notre réserve familiale. Son parfum très subtil assure des notes délicates. Mais c'est en bouche qu'il se révèle très équilibré, il prend place dans votre palais avec une grande délicatesse. Sa longueur en bouche vous permettra d'apprécier tout un panel d'arômes successifs très subtil.";
		img.src = "img/xo.png";
		break;
	case "pineauBlanc":
		name.innerHTML = "Pineau Blanc";
		description.innerHTML = "En gastronomie, le Pineau des Charentes s'harmonise idéalement avec les mets les plus fins. <br> Le Pineau blanc accompagnera avec délicatesse un foie gras et des fromages persillés (Roquefort, Bleu d'Auvergne ...).";
		img.src = "img/pineauWhite.png";
		break;
	case "pineauRose":
		name.innerHTML = "Pineau Rosé";
		description.innerHTML = "En gastronomie, le Pineau des Charentes s'harmonise idéalement avec les mets les plus fins. <br> Le Pineau rosé ou rouge revèlera le goût d'un melon, d'une coupe de fruits ou d'un sorbet, et exprimera tous ses arômes avec un dessert au chocolat.";
		img.src = "img/pineauRed.png";
		break;
	case "vieuxPineauBlanc":
		name.innerHTML = "Vieux Pineau Blanc";
		description.innerHTML = "En gastronomie, le Pineau des Charentes s'harmonise idéalement avec les mets les plus fins.";
		img.src = "img/pineauOld.png";
		break;
	case "vs":
	default:
		name.innerHTML = "VS";
		description.innerHTML = "Avec un âge de dégustation de 7 ans, ce VS a été conçu pour être bu en \"long drink\".";
		img.src = "img/vs.png";
		break;
	}
}