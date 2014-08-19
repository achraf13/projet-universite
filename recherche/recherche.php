<?php 
include('db.php');
?>

<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
	 <link rel="icon" href="http://getbootstrap.com/favicon.ico">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
	<style>
	 .divpage 
	{
	   background: rgba(169,3,41,0.55);
	   
background: -moz-linear-gradient(top, rgba(169,3,41,0.55) 30%, rgba(156,3,38,0.55) 47%, rgba(143,2,34,0.62) 64%, rgba(109,0,25,0.77) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(30%, rgba(169,3,41,0.55)), color-stop(47%, rgba(156,3,38,0.55)), color-stop(64%, rgba(143,2,34,0.62)), color-stop(100%, rgba(109,0,25,0.77)));
background: -webkit-linear-gradient(top, rgba(169,3,41,0.55) 30%, rgba(156,3,38,0.55) 47%, rgba(143,2,34,0.62) 64%, rgba(109,0,25,0.77) 100%);
background: -o-linear-gradient(top, rgba(169,3,41,0.55) 30%, rgba(156,3,38,0.55) 47%, rgba(143,2,34,0.62) 64%, rgba(109,0,25,0.77) 100%);
background: -ms-linear-gradient(top, rgba(169,3,41,0.55) 30%, rgba(156,3,38,0.55) 47%, rgba(143,2,34,0.62) 64%, rgba(109,0,25,0.77) 100%);
background: linear-gradient(to bottom, rgba(169,3,41,0.55) 30%, rgba(156,3,38,0.55) 47%, rgba(143,2,34,0.62) 64%, rgba(109,0,25,0.77) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019', GradientType=0 );
	}
	.divactualite
	{  
	   background: rgba(169,3,41,0.55);
	   height:auto;
	   
background: -moz-linear-gradient(top, rgba(169,3,41,0.55) 30%, rgba(156,3,38,0.55) 47%, rgba(143,2,34,0.62) 64%, rgba(109,0,25,0.77) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(30%, rgba(169,3,41,0.55)), color-stop(47%, rgba(156,3,38,0.55)), color-stop(64%, rgba(143,2,34,0.62)), color-stop(100%, rgba(109,0,25,0.77)));
background: -webkit-linear-gradient(top, rgba(169,3,41,0.55) 30%, rgba(156,3,38,0.55) 47%, rgba(143,2,34,0.62) 64%, rgba(109,0,25,0.77) 100%);
background: -o-linear-gradient(top, rgba(169,3,41,0.55) 30%, rgba(156,3,38,0.55) 47%, rgba(143,2,34,0.62) 64%, rgba(109,0,25,0.77) 100%);
background: -ms-linear-gradient(top, rgba(169,3,41,0.55) 30%, rgba(156,3,38,0.55) 47%, rgba(143,2,34,0.62) 64%, rgba(109,0,25,0.77) 100%);
background: linear-gradient(to bottom, rgba(169,3,41,0.55) 30%, rgba(156,3,38,0.55) 47%, rgba(143,2,34,0.62) 64%, rgba(109,0,25,0.77) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019', GradientType=0 );
	}
	
	a{
text-decoration: none;
color: wheat;
font-size: 96px;
}
	</style>
</head>
<body>
 <form action="recherche.php" method="POST">
    <div class="generale" style="padding:30px;">
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-addon">
					Recherche
				</div>
		<input class="form-control" type="text" name="recherche" <?php if(isset($_POST["recherche"])){ ?> value="<?php echo $_POST["recherche"];?> "<?php } ?> placeholder="Recherche ....">
			</div><br>
			
		</div>
		<center>
			<button type="submit" name="submit" class="btn btn-primary " style="width:500px;"><b>Rechercher</b></button>

			
		</center>
		
		<hr style="background-color:#011C51; height:5px;">
		<br>
		    <?php 
					if (isset($_POST["submit"]) and ($_POST["recherche"] != '')) 
					{ ?>
			<div class="divpage"  style="padding:5px; width:700px;  margin:auto;  border:4px ;
			-moz-border-radius:10px; -khtml-border-radius:10px; -webkit-border-radius:10px; border-radius:10px;">
					<center>
						<font color="white" size="6" >Pages</font>
					</center>
					
					<?php
							function supprimeAccents($chaine)
								{
									$tofind = "ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ";
									$replac = "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn";
									return(strtr($chaine,$tofind,$replac));
								}
							$motRecherch=mysql_real_escape_string($_POST["recherche"]);
							$motRecherche=supprimeAccents($motRecherch);
							
							$requetepage=mysql_query("SELECT * FROM page WHERE status_page = '1' and (titre_page_formate like '%$motRecherche%' or contenu_page_formate like '%$motRecherche%' )");
							$motExistpage= mysql_num_rows($requetepage);
					?>
							<h3><center><b>Le nombre des resultats obtenus est:</b></center></h3>
							<center><h2><a href="resultatsRecherche.php?page=page&mot=<?php echo  $motRecherche; ?>&numpage=1" ><?php echo  $motExistpage;?></a></h2></center>
					
			
			
			
			</div> 
			<div class="divactualite"  style="padding:5px; width:700px;  margin:auto;  border:4px ;
			-moz-border-radius:10px; -khtml-border-radius:10px; -webkit-border-radius:10px; border-radius:10px;">
					<center>
						<font color="white" size="6" >Actualités</font>
					</center>
					
					<?php
						
							$motRecherch=mysql_real_escape_string($_POST["recherche"]);
							$motRecherche=supprimeAccents($motRecherch);
							$requeteactualite=mysql_query("SELECT * FROM actualite WHERE status_actualite = '1' and (titre_actualite_formate like '%$motRecherche%' or contenu_actualite_formate like '%$motRecherche%' )");
							$motExistactualite= mysql_num_rows($requeteactualite);
					?>
							<h3><center><b>Le nombre des resultats obtenus est:</b></center></h3>
							<center><h2><a href="resultatsRecherche.php?page=actualite&mot=<?php echo  $motRecherche; ?>&numpage=1" ><?php echo  $motExistactualite;?></a></h2></center>
					
			
			
			
			</div> 
			
			<?php } ?>
	</div>
	</form>
</body>
</html>