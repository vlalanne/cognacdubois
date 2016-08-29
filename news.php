<?php
$dir="news/";
$news=array();
if (is_dir($dir)) {
	if ($dh = opendir($dir)) {
		while (($file = readdir($dh)) !== false) {
			if("news"===substr($file, 0, 4)){
				$news[]=$file;
			}
		}
		closedir($dh);
	}
}
if(count($news)==0){
	echo "<div class=\"news\">Aucune actualité disponible</div>";
}else{
	for($i=count($news)-1;$i>=0;$i--){
		include("news/".$news[$i]);
		echo "<br />";
	}
}
?>