<?php
require_once('tcpdf/tcpdf.php');

// Create new PDF document
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// Add a page to the PDF document
$pdf->AddPage();

// Set the font and font size
$pdf->SetFont('helvetica', '', 12);

// Get the form data from a POST request
$formData = $_POST['formData'];

// Loop through the form data and add to PDF document
foreach ($formData as $key => $value) {
    $pdf->Cell(0, 10, $key . ': ' . $value, 0, 1);
}

// Save the PDF document to a file
$pdf->Output('form-data.pdf', 'F');

?>