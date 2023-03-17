<?php
/*
Template Name: API
*/
// Read the JSON data from the request body
require('tcpdf/tcpdf.php');
$jsonData = file_get_contents('php://input');

// Parse the JSON data into a PHP array
$data = json_decode($jsonData, true);
session_start();
$_SESSION["final_data"] = $data;

$pdf = new TCPDF();
$pdf->SetAutoPageBreak(false);
$pdf->AddPage();

// Set the font and font size
$pdf->SetFont('helvetica', 'B', 16);



// Loop through the form data and create a PDF file
foreach ($_SESSION["final_data"] as $key => $value) {
  $pdf->Cell(40, 10, $key, 1);
  $pdf->Cell(0, 10, $value, 1);
  $pdf->Ln();
}

// Output the PDF to the browser
$pdf->Output('form_submission.pdf', 'D');
 ?>
