<?php
define('FPDF_FONTPATH', '../impresora/font/');
require('rotation.php');


class PDF extends PDF_Rotate
{
function RotatedText($x, $y, $txt, $angle)
{
    //Text rotated around its origin
    $this->Rotate($angle, $x, $y);
    $this->Text($x, $y, $txt);
    $this->Rotate(0);
}
/*
function RotatedImage($file, $x, $y, $w, $h, $angle)
{
    //Image rotated around its upper-left corner
    $this->Rotate($angle, $x, $y);
    $this->Image($file, $x, $y, $w, $h);
    $this->Rotate(0);
}*/
}


//CREACION DE LA CONEXION A LA BASE DE DATOS
// Configura los datos de tu cuenta
include('config.php');


// Conectar a la base de datos
$conexion=mysql_connect ($dbhost, $dbusername, $dbuserpass);
          mysql_select_db($dbname) or die('No se puede seleccionar la base de datos');


//REALIZAMOS LA CONSULTA
$result=mysql_query("SELECT * FROM guias",$conexion)or die(mysql_error());
$numero_filas = mysql_num_rows($result);

$pdf=new PDF();
$pdf->AddPage();


while($datatmp = mysql_fetch_assoc($result)) {

	//DESTINATARIO.
	
	$pdf->SetFont('Arial','',8);
	$pdf->RotatedText(30, 30, utf8_decode('Señor(a):'),0);
	$pdf->SetFont('Arial','B',10);
	$pdf->RotatedText(30, 34,$datatmp['name_rec'],0);
	$pdf->SetFont('Arial','',8);
	$pdf->RotatedText(30, 37,$datatmp['dir_rec'],0);
	$pdf->RotatedText(30, 40,$datatmp['city_rec'],0);
	
	$pdf->SetFont('Arial','',6);
	$pdf->RotatedText(25, 26, utf8_decode('Señor(a):'),270);
	$pdf->SetFont('Arial','B',8);
	$pdf->RotatedText(22, 26,$datatmp['name_rec'],270);
	$pdf->SetFont('Arial','',6);
	$pdf->RotatedText(19, 26,$datatmp['dir_rec'],270);
	$pdf->RotatedText(16, 26,$datatmp['city_rec'],270);
	$pdf->AddPage();
	
	
	
 }
 
//$pdf->RotatedImage('circle.png', 85, 60, 40, 16, 45);
$pdf->Output();

?>