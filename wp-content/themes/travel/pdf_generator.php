<?php
require_once('tcpdf/tcpdf.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cookiesJson'])) {
    // Get the JSON data from the POST parameter
    $cookiesJson = $_POST['cookiesJson'];
    $cookiesObj = json_decode($cookiesJson);

    // Create a new PDF instance
    $pdf = new TCPDF();

    // Add a page
    $pdf->AddPage();

    // Add the JSON data to the PDF
    $pdf->writeHTML( $cookiesJson );

    // Set the path of the saved PDF file with a unique name
    $filename = 'cookies_' . uniqid() . '_' . time() . '.pdf';
    $filepath = trailingslashit(ABSPATH) . 'wp-content/uploads/' . $filename;

    // Save the PDF file
    $pdf->Output($filepath, 'F');

    // Send a response back to the client
    echo 'PDF generated successfully';
} else {
    echo 'Invalid request';
}
?>


