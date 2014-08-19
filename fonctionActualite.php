<?php
include('config/db.php');


class myClassAfficherActualite
{
	function afficherActualiteRecherche($id)
	{

		$requetteActualite = mysql_query("SELECT * FROM actualite WHERE id_actualite='$id'") or die(mysql_error());
	
		$var=mysql_fetch_assoc($requetteActualite);
		$titre=$var["titre_actualite"];
		$contenu=$var["contenu_actualite"];
		$affichage="<h1>".$titre."</h1><p>".$contenu."</p>";

		//$objet= new myClassRemplacer();	
		//$objet->remplacerHtml("[[actualite]]",$affichage,"actutemp.html");
		echo $affichage;
	}
	
	function afficherTouteActualite($numPage)
	{
	     $commence= ($numPage-1)*4;
		 $requeteActualite = mysql_query("SELECT * FROM actualite LIMIT $commence,4 ")or die(mysql_error());
		if ($requeteActualite){
		while($resultat= mysql_fetch_array($requeteActualite))
			 {
				$titreActualite=$resultat['titre_actualite'];
				$contenuActualite=$resultat['contenu_actualite'];
				
				$affichage="<h1>".$titreActualite."</h1><p>".$contenuActualite."</p>";
				//on ajoute la fonction remplace ---------------------------------
				echo $affichage;
				
				
			 }
			 }
			 else{echo "hgjhgyjhgjygj";}
	}
}


?>