
<?php
// En versiones de PHP anteriores a 4.1.0, $HTTP_POST_FILES debe utilizarse en lugar
// de $_FILES.

$uploaddir = '../data/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "El archivo es valido y fue cargado exitosamente.\n";
} else {
    echo "¡Posible ataque de carga de archivos!\n";
}

echo 'Aqui hay mas informacion de depurado:';
print_r($_FILES);

print "</pre>";

//header("location:procesador.php");


/////////////////////////////////////////////////////////////////////

$databasehost = "localhost"; 
$databasename = "servi_guias"; 
$databasetable = "guias"; 
$databaseusername="root"; 
$databasepassword = ""; 
$fieldseparator = ","; 
$lineseparator = "\n";
$csvfile ="../data/".$_FILES['userfile']['name'];//editar esta linea para seleccionar el archivo
$addauto = 0;
$save = 1; 
$outputfile = "output.sql";        

        if(!file_exists($csvfile)) {    echo "File not found. Make sure you specified the correct path.\n";     exit; }

        $file = fopen($csvfile,"r");

        if(!$file) {    echo "Error opening data file.\n";  exit; }

        $size = filesize($csvfile);

        if(!$size) {    echo "File is empty.\n";    exit; }

        $csvcontent = fread($file,$size);

        fclose($file);

        $con = @mysql_connect($databasehost,$databaseusername,$databasepassword) or die(mysql_error()); @mysql_select_db($databasename) or die(mysql_error());

        $lines = 0; $queries = ""; $linearray = array();

        foreach(split($lineseparator,$csvcontent) as $line) {

            $lines++;

            $line = trim($line," \t");      $line = str_replace("\r","",$line);         /************************************   This line escapes the special character. remove it if entries are already escaped in the csv file   ************************************/   $line = str_replace("'","\'",$line);    /*************************************/         $linearray = explode($fieldseparator,$line);        $linemysql = implode("','",$linearray);         if($addauto)        $query = "insert into $databasetable values('','$linemysql');";     else        $query = "insert into $databasetable values('$linemysql');";        $queries .= $query . "\n";

            @mysql_query($query); }
			

        @mysql_close($con);

        if($save) {         if(!is_writable($outputfile)) {         echo "File is not writable, check permissions.\n";  }       else {      $file2 = fopen($outputfile,"w");
                        if(!$file2) {           echo "Error writing to the output file.\n";         }       else {          fwrite($file2,$queries);            fclose($file2);         }   }    }

		
        echo "Found a total of $lines records in this csv file.\n";
		echo "</br>";
		echo "</br>";
		echo "<p>";
        echo " <a class='btn btn-lg btn-primary' href='generate.php' role='button'><b><h1>Generar Guias</b></h1></a>";
        echo "</p>";
		//header("location:Carga.php");

?>
