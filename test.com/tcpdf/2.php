<?php

	$command = 'D:\tcpdf\SumatraPDF -print-to printer \\\192.168.2.100\up\\'.date('Y-m-d H::m:s').'.PDF -exit-on-print';

	exec($command); 
	//echo "Complete Print <a href='/up/".$filename.".PDF' target=_blank>".$filename.".PDF</a> to ".$filename;



?>