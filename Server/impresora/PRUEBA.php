<?php

define('FPDF_FONTPATH', 'font/');
require('cellpdf.php');

//CREACION DE LA CONEXION A LA BASE DE DATOS
// Configura los datos de tu cuenta
include('../Login/config.php');


// Conectar a la base de datos
$conexion=mysql_connect ($dbhost, $dbusername, $dbuserpass);
          mysql_select_db($dbname) or die('No se puede seleccionar la base de datos');


//REALIZAMOS LA CONSULTA
$result=mysql_query("SELECT * FROM guias",$conexion)or die(mysql_error());
$numero_filas = mysql_num_rows($result);

$pdf=new CellPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',8);


while($datatmp = mysql_fetch_assoc($result)) {

	//DESTINATARIO.	
$pdf->SetFont('Arial','',6);
$pdf->VCell(10,47,$datatmp['name_desp'].'          '.$datatmp['date']."\n".$datatmp['dir_derp'].'          '.$datatmp['id_guide']."\n".$datatmp['city_desp'],0,0,'D');
$pdf->VCell(10,47,utf8_decode('Señor(a):')."\n".$datatmp['name_rec']."\n".$datatmp['dir_rec'].'          '.$datatmp['heigth']."Grs"."\n".$datatmp['city_rec'].'          '.$datatmp['presio'],0,0,'D');



$pdf->Codabar($pdf->GetX()+47,$pdf->GetY(),$datatmp['id_guide']);
$pdf->SetFont('Arial','',8);
$pdf->Cell(50,60,'                                                                   '.$datatmp['date']."\n"
.'                                    '.$datatmp['id_guide']."\n".utf8_decode('      Señor(a):')
."\n".'      '.$datatmp['name_rec']."\n".'      '.$datatmp['dir_rec']."\n".'      '.$datatmp['city_rec']."\n"."\n"."\n"
.'      '.$datatmp['name_desp']."\n".'      '.$datatmp['dir_derp']."\n".'      '.$datatmp['city_desp']."\n"
."\n".'                                    '.$datatmp['id_guide']."\n"."\n"."\n"."\n",0,0,'t');     
$pdf->Cell(27,58,$datatmp['n1']."\n".$datatmp['n2']."\n".$pdf->PageNo()."\n"."\n"."\n".$datatmp['consecutivo']."\n"."\n"."\n".$datatmp['heigth']."Grs"."\n".$datatmp['presio'],0,1,'R');
	
	
 }
 
$pdf->Output();

?>