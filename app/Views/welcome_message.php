<?php

require_once('../vendor/autoload.php');

$mpdf = new \Mpdf\Mpdf([
	'mode' => 'es',
    'format' => [190, 236],
    'orientation' => 'L'
]);

header("Content-type:application/pdf");

$mpdf->WriteHTML("<p>This is a test</p>");

$mpdf->Output();

exit;
?>