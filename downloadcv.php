<?php //downloadCV.php
	$file = "pearl_molefe_res.pdf";
	// Process download
    if(file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename=pearl_molefe');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        flush(); // Flush system output buffer
        readfile($file);
        exit;
	}
	else echo 'file not found';
?>