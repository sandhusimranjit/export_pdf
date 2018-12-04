<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$mystring = "My page converted to .PDF - variable - with family.";
	echo $mystring;
	echo "<br/>";

require 'pdfcrowd-4.3.7/pdfcrowd.php';
		
try
{
    // create the API client instance
    $pdf = new \Pdfcrowd\HtmlToPdfClient("sandhusimranjit", "752af86efc3201b89173c34addd29e27");

    // run the conversion and write the result to a file
    $pdf->convertStringToFile("<html><body><h1>Hello World!</h1></body></html>");
    header('Content-Type: application/pdf');
    header('Cache-Control: no-cache');
    header('Accept-Ranges: none');
    header("Content-Disposition: inline; filename=\"demo_php.pdf\"");

    echo $pdf;
}
catch(\Pdfcrowd\Error $why)
{
    // report the error
    error_log("Pdfcrowd Error: {$why}\n");

    // handle the exception here or rethrow and handle it at a higher level
    throw $why;
}

?>
</body>
</html>