<?php
	include('config/db.php');


class myClassAfficherPage
{
	function afficherToutePage()
	{

		$requetePage = mysql_query("SELECT * FROM page where status_page='1'")or die(mysql_error());
	
		while($resultat= mysql_fetch_array($requetePage))
			 {
				$titre=$resultat["titre_page"];
				$contenu=$resultat["contenu_page"];
				$affichage="<h1>".$titre."</h1><p>".$contenu."</p>";
				echo $affichage;
				//$objet= new myClassRemplacer();	
				//$objet->remplacerHtml("[[actualite]]",$affichage,"actutemp.html");
		
			}
	}
}
?>