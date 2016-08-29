setTopic("vignoble");

function setTopic(topicName) {
	var name = document.getElementById('topicName');
	var description = document.getElementById('topicDescription');
	var topImg = document.getElementById('topPicture');
	var bottomImg = document.getElementById('bottomPicture');
	switch (topicName) {
	case "vendanges":
		name.innerHTML = "Les Vendanges";
		description.innerHTML = "Les vendanges, fin septembre, début octobre, le raisin est récolté puis pressé. Le jus de raisin est stocké dans des cuves en inox, le temps que s'opère le cycle de fermentation, en attente de distillation.";
		topImg.src = "img/vendanges.png";
		bottomImg.src = "img/vendanges2.jpg";
		break;
	case "distillation":
		name.innerHTML = "La Distillation";
		description.innerHTML = "La distillation s'effectue selon une méthode traditionnelle sur la propriété en deux chauffes à l'aide de l'alambic en cuivre.";
		topImg.src = "img/distillation.jpg";
		bottomImg.src = "img/distillation2.png";
		break;
	case "vieillissement":
		name.innerHTML = "Le Viellissement";
		description.innerHTML = "Les eaux-de-vie nouvelles sont stockées en fûts de chêne du Limousin, dans l'obscurité des vieux chais. Au fil des années, les saveurs et les parfums vont simultanément se développer durant cette longue métamorphose.";
		topImg.src = "img/vieillissement.png";
		bottomImg.src = "img/bottles.jpg";
		break;
	case "vignoble":
	default:
		name.innerHTML = "Les Vignobles";
		description.innerHTML = "Les dix-huit hectares du vignoble s'étendent sur des sols calcaires aux confins des deux Charentes en pleine Petite Champagne. Les plus grands soins sont apportés tant à la conduite du vignoble qu'à la phase essentielle  de la vinification : distillation traditionnelle, vieillissement des eaux-de-vie en fûts de chêne du limousin.";
		topImg.src = "img/map.png";
		bottomImg.src = "img/vignoble.png";
		break;
	}
}