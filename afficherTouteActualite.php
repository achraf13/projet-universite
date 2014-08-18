
 <?php
 
	include("fonctionActualite.php");
	$objet= new myClassAfficherActualite();
	$objet-> afficherTouteActualite(1);
	
	$requetee= mysql_query('SELECT * FROM actualite ');
	$nbreresultats=mysql_num_rows($requetee);
	$i=1;
	while ($i<=$nbreresultats)
		{
		echo "<a href=#>".$i."&nbsp;</a>";
		$i++;
		}
 ?>