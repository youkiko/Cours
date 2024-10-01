<?php


/* 
	Function qui creer ou modifie une sauvgarde en fichier 'csv' à partir d'un tableau d'object
*/


function arrayToCsv($fileName, &$donnees, $delimiter = ",", $header = array())
{
$file = fopen($fileName, 'w');
fputcsv($file, $header, $delimiter);
foreach($donnees as $row) {
    $row = (array) $row;
    fputcsv($file, $row, $delimiter);
    }
fclose($file);
}

/*
function qui récup un fichier csv pour remplir un tableau d'object
*/

function csvtoarray(&$donnees, $fileName, $delimiter = ',')
{
	if(!file_exists($fileName) || !is_readable($fileName)) return false;

	$header =null;

	if(($handle = fopen ($fileName, 'r')) !== false);

	while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {

		if(!$header)

		$header = $row;

	else
		$donnees[] = array_combine($header, $row);
	}
	fclose($handle);
}