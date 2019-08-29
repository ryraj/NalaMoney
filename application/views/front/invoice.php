<?php


tcpdf();

$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "Testing";
$obj_pdf->SetTitle($title);
$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, PDF_HEADER_STRING);
//$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 9);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
$obj_pdf->AddPage();
$obj_pdf->setJPEGQuality(75);
ob_start();


$html = 'rajesh kumar yadav';    

    
    
//$obj_pdf->Image(base_url('public/image/logo.png'), 16, 28, 39, 20, 'PNG', 'http://www.tcpdf.org', '', true, 150, '', false, false, 1, false, false, false);

ob_end_clean();
$obj_pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
$obj_pdf->Output('hello', 'I');
