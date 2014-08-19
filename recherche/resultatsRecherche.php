<?php 
include('db.php');
include('FunctionPagination.php');
if((isset($_GET["mot"])) and (isset($_GET["page"])))
{
$motReche=$_GET["mot"];
$page=$_GET["page"];
$numeroPage=$_GET["numpage"];
$precedent=$numeroPage-1;
$suivant=$numeroPage+1;
}
else
{
header('location:recherche.php');
exit;
}
?>

<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
	 <link rel="icon" href="http://getbootstrap.com/favicon.ico">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
	
</head>
<body>
	<form action="recherche.php" method="POST">
		<div class="generale" style="padding:30px;">
			<div class="form-group">
				<div class="input-group">
				<div class="input-group-addon">Recherche</div>
				<input class="form-control" type="text" name="recherche" value="<?php echo $_GET["mot"]; ?>" >
				</div>
			</div>
			<center><button type="submit" name="submit" class="btn btn-primary " style="width:500px;"><b>Rechercher</b></button></center>
			<hr style="background-color:#011C51; height:5px;">
			
			<?php 
				$requetePage=mysql_query("SELECT * FROM ".$page." WHERE status_".$page." = '1' and (titre_".$page." like '%$motReche%' or contenu_".$page." like '%$motReche%' ) ") or die(mysql_error());
				$nbreresultats=mysql_num_rows($requetePage);
				$i=1;
				$numPage= ceil($nbreresultats/4);
				$object= new myClassPagination();
				$object->pagination ($page,$motReche,$nbreresultats,$numeroPage);
				?>
				<center><h3><font color="blue"> Pages </font></h3><h4><a href="resultatsRecherche.php?page=<?php echo $page?>&mot=<?php echo $motReche?>&numpage=<?php echo $precedent?>">precedent  -</a> 
				<?php
				
				while ($i<=$numPage){echo "<a href='resultatsRecherche.php?page=".$page."&mot=".$motReche."&numpage=".$i."' style='decoration:none;'>".$i."&nbsp;</a>";
				$i++;}
				?><a href="resultatsRecherche.php?page=<?php echo $page?>&mot=<?php echo $motReche?>&numpage=<?php echo $suivant?>">Suivant</a> </h4> </center> 
				<?php
				
				 ?>
 	</form>	
</body>
</html>		