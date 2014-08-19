
 <?php
   
	
	include("fonctionActualite.php");
	$objet= new myClassAfficherActualite();
	$objet-> afficherTouteActualite(1);
	
	$requetee= mysql_query('SELECT * FROM actualite ');
	$nbreresultats=mysql_num_rows($requetee);
	$nbrePage=$nbreresultats/4;
	$i=1;
	while ($i<=$nbrePage)
		{
		echo "<a href=#>".$i."&nbsp;</a>";
		$i++;
		}
 ?>