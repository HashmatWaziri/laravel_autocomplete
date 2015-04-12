<?php
if(!isset($_REQUEST['words']))
exit();

require('cnx.php');

$term = 

$rs = mysql_query('
	SELECT word FROM words 
	WHERE word 
	LIKE "'.ucfirst($_REQUEST['word']).'%" 
	ORDER BY wordtype ASC 
	LIMIT 0,25', $dblink
);

$data = array();

while($row = mysql_fetch_array($rs, MYSQL_ASSOC)){
	$data[] = array(
		'label' => $row['word'],
		'value' => $row['word'],
	);	
}

echo json_encode($data);
flush(); // Vide les tampons de sortie