<?php
/*
TTemplate Name: Form3
*/
get_header();  ?>

<?php
$formData = $_POST;


// Convert the array to a JSON string
$formData_json = json_encode($formData);

// Print the JSON string to the browser console
// echo "$formData_json";


// Loop through the form data and print out the key-value pairs


require_once('tcpdf/tcpdf.php');
class MYPDF extends TCPDF
{

    //Page header
    public function Header()
    {
    }

    // Page footer
    public function Footer()
    {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->getAliasNumPage() . '/' . $this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}
// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 001');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 001', PDF_HEADER_STRING, array(0, 64, 255), array(0, 64, 128));
$pdf->setFooterData(array(0, 64, 0), array(0, 64, 128));

// set header and footer fonts
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
    require_once(dirname(__FILE__) . '/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(196, 196, 196), 'opacity' => 1, 'blend_mode' => 'Normal'));

// Set some content to print

// Define the header section
$imagePath = 'https://ongoing.website/websites/travel-wp/wp-content/themes/travel/inc/img/logo.png';
$header = '<table style="margin-bottom:20px;">
             <tr>
               <td><img src="' . $imagePath . '"></td>
               <td><h2>SUMMARY OF ITINERARY</h2></td>
             </tr>
             <tr><td colspan="2"><hr></td></tr>
           </table>
           <br>';

// Define the HTML content
$html = '<table>';

$i = 0;
foreach ($formData as $key => $value) {
    $hr = '';
    if ($i == 0) {
        $key = 'Date';
    } elseif ($i == 1) {
        if ($value == '') {
            $value = '';
            $key = '';
        } else {
            $key = 'Title';
        }
    } elseif ($i == 2) {
        $key = 'Address';
    } elseif ($i == 3) {
        $key = '';
        $value = '<img src="' . $value . '" >';
    } elseif ($i == 4) {
        $key = 'Price';
    } elseif ($i == 5) {
        $key = 'Hotline';
    } elseif ($i == 6) {
        $key = 'Email';
    } elseif ($i == 7) {
        $key = 'Location Name';
        $hr = '<hr>';
    } else {
        $key = '';
        $value = '';
    }

    $html .= '<tr>
            <td>' . $key . '</td>
            <td>' . $value . '</td>
        </tr>' . $hr;

    $i++;
    if ($i == 8) {
        $i = 0;
    }
}
$html .= '</table>';

$html = $header . $html;

// Replace placeholders in the HTML string with the form data values


// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------
$uploads = wp_upload_dir();
$upload_path = $uploads['basedir'];
// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output($upload_path . '/travel_plane.pdf', 'F');
?>
<div class="global_content">
    <div class="container">
        <?php the_content() ?>
    </div>
</div>

<!-- ////////////////Global page content End////////////////// -->

<?php get_footer(); ?>