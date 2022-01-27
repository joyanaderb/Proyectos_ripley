<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

/**
 * 
 */
class Pdf extends Dompdf
{
	
	function __construct()
	{
		parent ::__construct();
	}
    
    
    
     function testpdf()
	{



	
        
		  

   

           

    
	
   
        		$dompdf = new PDF();
$html = "<style>@page {
			    margin-top: 0.5cm;
			    margin-bottom: 0.5cm;
			    margin-left: 0.5cm;
			    margin-right: 0.5cm;
			}
			</style>".
        "<body>
        	
<p>DOCUMENTO DE ENTREGA DE EQUIPAMIENTO.</p>



        </body>";

    $dompdf->loadHtml($html);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');

    // Render the HTML as PDF
    $dompdf->render();
    $time = time();

    // Output the generated PDF to Browser
    $dompdf->stream("welcome-". $time);
	
}
    
}



?>