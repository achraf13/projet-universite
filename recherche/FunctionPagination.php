
<?php 
	
class myClassPagination
 {
 
function pagination ($page,$motReche,$nbreResultats,$numPage)
       { 
	   
	   global $motReche;
			$tableau=array();
            $z=0;    
			$n=($numPage-1)*4;
			$nbreAffichage= 4;
			$requetePage=mysql_query("SELECT * FROM ".$page." WHERE status_".$page." = '1' and (titre_".$page." like '%$motReche%' or contenu_".$page." like '%$motReche%' ) ") or die(mysql_error());
			
			while($resultats = mysql_fetch_array($requetePage))
			{   
				   $z = 0;
				   $id=$resultats["id_".$page];
				   $titrePage= $resultats["titre_".$page];
				   $contenuPage= $resultats["contenu_".$page];
				  
				   $termsContenu = explode(' ', $contenuPage);
				   $termsTitre = explode(' ', $titrePage);
				   
					foreach($termsContenu as $term) 
					{
					  if($term == $motReche){
						$z++;
					  } else{} 
					}
					foreach($termsTitre as $terme) 
					  {
					  if($terme == $motReche) {
						$z++;
					  }else{} 
					  }
					   $tableau[$id]=$z;
					   
				  	  ?><?php
			}	
						arsort($tableau);
						//var_dump($tableau);
						foreach($tableau as $key => $valeur)
						{
						    $requet=mysql_query("SELECT * FROM ".$page." WHERE status_".$page." = '1' and ( id_".$page."=".$key.") ") or die(mysql_error());
							$result=mysql_fetch_assoc($requet);
							$titrePage=$result["titre_".$page];
							$contenuPage=$result["contenu_".$page];
							$requeteAffichageTemporaire= mysql_query("INSERT INTO affichage_pagination (id_affichage,titre_affichage,contenu_affichage) VALUE ('$key','$titrePage','$contenuPage')") or die(mysql_error());
							
						}
						$requeteAffichResultats=mysql_query("SELECT * FROM affichage_pagination LIMIT $n,4 ") or die(mysql_error());
						
						while($resuu= mysql_fetch_array($requeteAffichResultats))
							{
							 $idd=$resuu["id_affichage"];
							 $titreAffichage=$resuu["titre_affichage"];
							 $contenuAffichage=$resuu["contenu_affichage"];
							 //echo $idd;
							  ?><b><h4>
							  <?php 
								echo $titreAffichage; 
							  ?>
								</h4></b>
							  <?php
								$substr = substr($contenuAffichage,0, 100);
								echo $substr."....";  
							 
							 ?>
								<a href="afficherActualite.php?id=<?php echo $idd; ?>"> <button type="button" class="btn btn-primary">Voir plus</button></a>  <hr>
							 <?php
							} 
								$supp=mysql_query("DELETE FROM affichage_pagination");
							
			
	} 
}
?>