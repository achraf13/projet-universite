<?php

//Suppression des accents 
function supprimeAccents($chaine)
	{
		$tofind = "�����������������������������������������������������";
		$replac = "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuNny";
		return(strtr($chaine,$tofind,$replac));
	}
?>