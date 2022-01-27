<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	
	public function index()
	{
        
        //VISTA LA CUAL TIENE EL FORMULARIO DE CREACION DE TICKET (FRONT)
		$this->load->view('creaticket');
	}
    


    
    public function apitest()
	{
	
        //VARIABLES DE PRUEBA RESCATADAS DESDE VISTA CREATICKET
$NomCliente = $this->input->post('NomCliente');
        $CorreoCliente = $this->input->post('CorreoCliente');
        $TelComercial1 = $this->input->post('TelComercial1');
        
        //se rescata la url a consumir
        $url = 'https://4taiybz2fc.execute-api.us-east-1.amazonaws.com/prod/api/creagestion';

$curl = curl_init();
        
        //credenciales de autenticacion de api
        $header = array(
  'Authorization: basic',
    'x-api-key: zW5IzO9iSU2qnG7YQQtGA2kFBQ1Iol9k9lkoWIR5',
    'Content-Type: application/json'
);
  
        //datos a cargar en api mediante CURL
$data = array (
  'DatosEncabezado' => 
  array (
    'NumTarea' => 1,
    'UsuOriginador' => 'gvegac',
    'IndAsignaOriginador' => '',
    'GlsGestion' => 'Prueba de integracion AWS unificada',
  ),
  'DatosGestion' => 
  array (
    'NumCampana' => 151,
    'NumMotivo1' => 1,
    'NumMotivo2' => 1,
    'NumMotivo3' => 1,
    'GlsMotivo' => '',
    'IdCliente' => '1520571909',
    'NomCliente' => $NomCliente ,
    'Mail1' => $CorreoCliente ,
    'TelMovil' => '+5698766666',
    'DesDireccion1' => '',
    'NomComuna1' => '',
    'NomCiudad1' => '',
    'CodPostal1' => '',
    'NomRegion1' => '',
    'RefMotivo' => 'Creación de prueba aws unificada',
    'TpoDireccion1' => 'PARTI',
    'DNI' => 0,
    'ACD' => 0,
    'CallID' => 0,
    'ANI' => 0,
    'NumTermino1' => 0,
    'NumTermino2' => 0,
    'NumTermino3' => 0,
    'RefTermino' => '',
    'GlsTermino' => '',
    'IdSucursal' => 0,
    'IdPersona' => 0,
    'NomPersona' => '',
    'AppPersona' => '',
    'ApmPersona' => '',
    'DesDireccion2' => '',
    'NomComuna2' => '',
    'NomCiudad2' => '',
    'CodPostal2' => '',
    'NomRegion2' => '',
    'TpoDireccion2' => '',
    'DesDireccion3' => '',
    'NomComuna3' => '',
    'NomCiudad3' => '',
    'CodPostal3' => '',
    'NomRegion3' => '',
    'TpoDireccion3' => '',
    'Mail2' => '',
    'Mail3' => '',
    'TelComercial1' => $TelComercial1 ,
    'TelComercial2' => '',
    'FaxComercial' => '',
    'TelParticular1' => '',
    'TelParticular2' => '',
    'FaxParticular' => '',
    'TelAsistente' => '',
    'TelOtro' => '',
    'FaxOtro' => '',
    'Beeper' => '',
    'TipoCliente' => '',
    'EstadoCliente' => '',
    'Trato' => '',
    'Data01' => '000120319103001179',
    'Data02' => '20190312',
    'Data03' => 10000,
    'Data04' => 'Débito',
    'Data05' => '',
    'Data06' => '02000300404001',
    'Data07' => '',
    'Data08' => '000125',
    'Data09' => 1990,
    'Data10' => 1,
    'Data11' => '',
    'Data12' => '',
    'Data13' => '',
    'Data14' => '',
    'Data15' => '',
    'Data16' => '',
    'Data17' => '',
    'Data18' => '',
    'Data19' => '',
    'Data20' => '',
    'Data21' => '',
    'Data22' => '',
    'Data23' => '',
    'Data24' => '',
    'Data25' => '',
    'Data26' => '',
    'Data27' => '',
    'Data28' => '',
    'Data29' => '',
    'Data30' => '',
    'Data31' => '',
    'Data32' => '',
    'Data33' => '',
    'Data34' => '',
    'Data35' => '',
    'Data36' => '',
    'Data37' => '',
    'Data38' => '',
    'Data39' => '',
    'Data40' => '',
    'Data41' => '',
    'Data42' => '',
    'Data43' => '',
    'Data44' => '',
    'Data45' => '',
    'Data46' => '',
    'Data47' => '',
    'Data48' => '',
    'Data49' => '',
    'Data50' => '',
    'Data51' => '',
    'Data52' => '',
    'Data53' => '',
    'Data54' => '',
    'Data55' => '',
    'Data56' => '',
    'Data57' => '',
    'Data58' => '',
    'Data59' => '',
    'Data60' => '',
    'Data61' => '',
    'Data62' => '',
    'Data63' => '',
    'Data64' => '',
    'Data65' => '',
    'Data66' => '',
    'Data67' => '',
    'Data68' => '',
    'Data69' => '',
    'Data70' => '',
    'Data71' => '',
    'Data72' => '',
    'Data73' => '',
    'Data74' => '',
    'Data75' => '',
    'Data76' => '',
    'Data77' => '',
    'Data78' => '',
    'Data79' => '',
    'Data80' => '',
    'Data81' => '',
    'Data82' => '',
    'Data83' => '',
    'Data84' => '',
    'Data85' => '',
    'Data86' => '',
    'Data87' => '',
    'Data88' => '',
    'Data89' => '',
    'Data90' => '',
    'Data91' => '',
    'Data92' => '',
    'Data93' => '',
    'Data94' => '',
    'Data95' => '',
    'Data96' => '',
    'Data97' => '',
    'Data98' => '',
    'Data99' => '',
    'Data100' => '',
  ),
);
       

//configuraciones de API destino llama POST y json_encode        
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
curl_setopt($curl, CURLOPT_TIMEOUT, 0);
curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));



        //RESPUESTA DE RETORNO DE API, FALTA DECODIFICARLO PARA MOSTRARLO EN VISTA "RESULTADO CREACION TICKET + numero de ticket generado"
$response = curl_exec($curl);
        
        

curl_close($curl);

        
        
$array = json_decode($response);
        
     
 echo 'Numero de ticket generado:';
echo $array->Data->NumContacto;

        

        
        
          
    
	}
    
  
  
}


