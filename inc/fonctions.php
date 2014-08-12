<?php

//Suppression des accents 
function supprimeAccents($chaine)
	{
		$tofind = "ְֱֲֳִֵאבגדהוׂ׃װױײ״עףפץצרָֹÊֻטיךכַחּֽ־ֿלםמןÙÚÛÜשתûüׁסÿ";
		$replac = "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuNny";
		return(strtr($chaine,$tofind,$replac));
	}
?>