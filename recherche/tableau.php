
<?php
 
function supprime_accents($chaine)
	{
		$tofind = "�����������������������������������������������������";
		$replac = "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn";
		return(strtr($chaine,$tofind,$replac));
	}
 $texte = "�a va ���aa?";
 echo supprime_accents($texte);
 
?>