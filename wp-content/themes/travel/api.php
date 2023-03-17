<?php
/*
Template Name: API
*/
// Read the JSON data from the request body
require_once('tcpdf/tcpdf.php');
$jsonData = file_get_contents('php://input');

// Parse the JSON data into a PHP array
$data = json_decode($jsonData, true);


$pdf = new TCPDF();
$pdf->SetAutoPageBreak(false);
$pdf->AddPage();

// Set the font and font size
$pdf->SetFont('helvetica', 'B', 16);



// Loop through the form data and create a PDF file
foreach ($data as $key => $value) {
  $pdf->Cell(40, 10, $key, 1);
  $pdf->Cell(0, 10, $value, 1);
  $pdf->Ln();
}

// Output the PDF to the browser
$path = '/wp-content/uploads/travel_plane.pdf';

// Output the PDF to the specified path
$pdf->Output($path, 'F');
 ?>
