
<?php
 
function supprime_accents($chaine)
	{
		$tofind = "ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ";
		$replac = "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn";
		return(strtr($chaine,$tofind,$replac));
	}
 $texte = "Ça va éééaa?";
 echo supprime_accents($texte);
 
?>