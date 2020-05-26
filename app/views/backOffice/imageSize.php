<?php

class Img{

	static function creerMin($img,$chemin,$name,$mlargeur=100,$mhauteur=100){
		// On coupe l'extension du nom à - 3 à partir de la fin
		$name = substr($name,0,-3);
		// On récupère les dimensions de l'image
		$size=getimagesize($img);
		// On cré une image à partir du fichier récup
		if(substr(strtolower($img),-3)=="jpg"){
			$image = imagecreatefromjpeg($img); 
		}else if(substr(strtolower($img),-3)=="png"){
			$image = imagecreatefrompng($img); 
		}else if(substr(strtolower($img),-3)=="gif"){
			$image = imagecreatefromgif($img); 
		}
		// L'image ne peut etre redimensionne
		else{
			return false; 
		}
		
		// Création des miniatures
		// On cré une image vide de la largeur et hauteur voulue
		$miniature =imagecreatetruecolor ($mlargeur,$mhauteur); 
		// On va gérer la position et le redimensionnement de la grande image
		if($size[0]>($mlargeur/$mhauteur)*$size[1] ){ $dimY=$mhauteur; $dimX=$mhauteur*$size[0]/$size[1]; $decalX=-($dimX-$mlargeur)/2; $decalY=0;}
		if($size[0]<($mlargeur/$mhauteur)*$size[1]){ $dimX=$mlargeur; $dimY=$mlargeur*$size[1]/$size[0]; $decalY=-($dimY-$mhauteur)/2; $decalX=0;}
		if($size[0]==($mlargeur/$mhauteur)*$size[1]){ $dimX=$mlargeur; $dimY=$mhauteur; $decalX=0; $decalY=0;}
		// on modifie l'image crée en y plaçant la grande image redimensionné et décalée
		imagecopyresampled($miniature,$image,$decalX,$decalY,0,0,$dimX,$dimY,$size[0],$size[1]);
		// On sauvegarde le tout
		imagejpeg($miniature,$chemin."/".$name.".jpg",90);
		return true;
	}
}

?>
