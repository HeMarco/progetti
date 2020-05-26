<?php
 
  //estensione dei file da scaricare
  $estensione = '.zip';
  
  //directory con i file di testo
  $counterdir = 'count/';
    
  //controllo che nell'url ci sia il nome del file da scaricare
  if (isset($_GET['name'])) {

	$nomefile = htmlentities($_GET['name']);
	
	//se il file richiesto esiste avviene il download
	if (@file_exists($nomefile.$estensione)) {
	  
		header('Location: ' . $nomefile.$estensione);
	
		//apro il file .txt relativo al download richiesto e lo incremento di 1
		$file = @fopen("$counterdir/$nomefile.txt","r");
		$count = @fread($file, 100);
		$countplus = ($count + 1);
		@fclose($file);
		$fileb = @fopen("$counterdir/$nomefile.txt","w");
		@fwrite($fileb, $countplus, 100);
		@fclose($fileb);
	
	//se il file da scaricare non dovesse esistere, allora stampo un mex di errore
    } else {

		echo 'File non disponibile';
	}
} 
?>