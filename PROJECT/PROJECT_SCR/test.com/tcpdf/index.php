<?php
		require_once('setPDF.php'); 
		require_once('config/lang/eng.php');
		require_once('tcpdf.php');
		require_once('htmltoolkit.php');
		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Siam Apps');
		$pdf->SetTitle('http://siam-apps.blogspot.com');
		$pdf->SetSubject('Auto Print');
		$pdf->SetKeywords('Siam Apps, PDF, Auto Print');
		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
		$pdf->SetMargins(10, 10, 10);
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
		$pdf->setLanguageArray($l);
		$pdf->SetFont('freeserif', 'N', 16);
		
		

		$resolution= array(139.7, 254); // 10x5.5 inch
		$pdf->AddPage('L', $resolution);


	$html=AdjustHTML(stripslashes($_POST['htmls']));
	$filename = date('Y-m-d_hms');
	$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);
	$printer = "Canon";
	$filename = date('Y-m-d_hms');
	$pdf->Output('PDFFF/'.$filename.'.PDF', 'F');
	$command = 'D:\SumatraPDF -print-to '.$printer.' \\\KRATAE\PDFFF\\'.$filename.'.PDF -exit-on-print';

	exec($command); 
	echo "Complete Print <a href='/tcpdf/PDFFF/".$filename.".PDF' target=_blank>".$filename.".PDF</a> to ".$filename;




?>