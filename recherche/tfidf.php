<?php
$base = mysql_connect ('localhost', 'root', ''); 
mysql_select_db ('uabtfinale', $base) ; 
$req =mysql_query("SELECT contenu_actualite from actualite ");
$x=array(); $i=0;$j=0;

while ($row=mysql_fetch_array($req)) {  
 // echo 'id:'.$row['ID'];
 //for ($i=1;$i<=;$i++){
  $x[]=$row['contenu_actualite'];
  //};
//print_r ($x);
	//$i++;
	}
mysql_free_result ($req);
  function getindex () {
  global $x;
 //$collection =array();
// for($i=1;$i<=106;$i++){
          //      $i=> $x[i];
			
 $dictionary=array();
  $docCount=array();
  //for($i=1; $i<=20;$i++){
  //echo $x['i'];
  //$doc= $x['i'];
  //$docID=$i;
       foreach($x as $docID=> $doc) {
	   $docID=$docID+1;
                $terms = explode(' ', $doc);
                $docCount[$docID] = count($terms);
//print_r ($x);
                foreach($terms as $term) {
                        if(!isset($dictionary[$term])) {
                                $dictionary[$term] = array('df' => 0, 'postings' => array());
                        }
                        if(!isset($dictionary[$term]['postings'][$docID])) {
                                $dictionary[$term]['df']++;
                                $dictionary[$term]['postings'][$docID] = array('tf' => 0);
                        }

                        $dictionary[$term]['postings'][$docID]['tf']++;
            echo "<pre>";
			//print_r( $dictionary);
              echo "</pre>";	    
				//print_r( $dictionary);
				}
        }

        return array('docCount' => $docCount, 'dictionary' => $dictionary);
}
 function getTfidf($term) {
        $index = getIndex();
        $docCount = count($index['docCount']);
        $entry = $index['dictionary'][$term];
        foreach($entry['postings'] as  $docID => $postings) {
                echo "Document $docID and term $term give TFIDF: " .
                        ($postings['tf'] * log($docCount / $entry['df'], 2));
                echo "\n";
        }
} 
function normalise($doc) {
        foreach($doc as $entry) {
                $total += $entry*$entry;
        }
        $total = sqrt($total);
        foreach($doc as &$entry) {
                $entry = $entry/$total;
        }
        return $doc;
}
  function cosineSim($docA, $docB) {
        $result = 0;
        foreach($docA as $key => $weight) {
                $result += $weight * $docB[$key];
        }
        return $result;
}

?>
<?php
$query = array('is','actualite');
$index = getIndex();
$matchDocs = array();
$docCount = count($index['docCount']);
foreach($query as $qterm) {
        $entry = $index ;
        foreach($entry['postings'] as $docID => $posting) {
		//$matchDocs[$docID]="";
           $matchDocs[$docID] = $posting['tf'] * log($docCount + 1 / $entry['df'] + 1, 2);
        }
}
// length normalise
foreach($matchDocs as $docID => $score) {
        $matchDocs[$docID] = $score/$index['docCount'][$docID];
}
arsort($matchDocs); // high to low
//var_dump($matchDocs);
try {
$dbh = new PDO("mysql:host=localhost;dbname=pfebdd","root","");}
catch (PDOException $e){
echo $e-> getMessage();
}
$queryy = "SELECT * FROM document WHERE ID=$docID";
$stmt= $dbh-> prepare ($queryy);
$stmt->execute ();
echo"<table border='1' cellpaddineg='7'>";
echo "<tr> <td>Title</td><td>link</td><td>vote</td></tr>";
while ($roww=$stmt->fetch(PDO::FETCH_ASSOC)){
echo"<tr><td>";
echo"<a href='file.php?id=$docID'>".$roww['Titre']."</a></td><td>";
echo $roww['Link'];
echo"</td></tr>";
}
?>
<?php
		/*$cnx = mysql_connect( 'localhost', 'root', '' ) ;
  $db  = mysql_select_db( "pfebdd" ) ;
  $output=''; 
		if (isset ($_POST['search'])){
		$searchq=$_POST['search'];
		$searchq= preg_replace("#[^0-9a-z]#i","",$searchq);
		$query=mysql_query("SELECT * FROM fds WHERE nom=$searchq") or die ("could not search");
		$count= mysql_num_rows($query);
		if ($count==0){
		$output = 'there was no search';
		}
		else {
		while ($row = mysql_fetch_array($query)){
		$fname = $row['nom'];
		$lname= $row ['prenom'];
		$id= $row['id_patient'];
		$output .='<div>' .$fname.' '.$lname. '</div>';
		} }}
		print ("$output");
		 */?>