<html >
<body>
<form action="" method="POST">
				<div class="form-group">
				<div class="input-group">
				<div class="input-group-addon">text</div>
				<input class="form-control" type="text" name="nom" value="" placeholder="Veuillez saisir le nom">
				</div>
				<button type="submit" name="submit" class="btn btn-danger btn-block" >Enregistrer</button></center>
<?php
 
function supprime_accents($chaine)
	{    $chaine = htmlentities($chaine, ENT_NOQUOTES,'utf-8');
		$tofind = "�����������������������������������������������������";
		$replac = "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn";
		return(strtr($chaine,$tofind,$replac));
	}
	
 $texte = "hg��eyeyy";
 //echo supprime_accents($texte);
  		$titreActualiteFormate= strtr($_POST["nom"], '�����������������������������������������������������','aaaaaaaaaaaaooooooooooooeeeeeeeecciiiiiiiiuuuuuuuuynn');
     echo $titreActualiteFormate ;
?>
</form>
</body>
</html>