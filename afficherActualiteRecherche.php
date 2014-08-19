<?php
include("fonctionActualite.php");
include("remplacer.php");

if (isset ($_GET["id"]))
{ 
$id= $_GET["id"];
	$requetteActualite = mysql_query("SELECT * FROM actualite WHERE id_actualite='$id'")or die(mysql_error());
	$objet= new myClassAfficherActualite();
	$objet-> afficherActualiteRecherche($id);
	

 }

?>
