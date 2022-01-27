<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Creacionacta extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	  public function __construct(){
		parent::__construct();

            		$this->load->model("Creacionacta_model");

	}

    
    public function actaregistrada($NroContacto)
	{
        
        
         $this->load->view('actaregistrada');
    }
    
	public function index()
	{

       
        $this->load->model('Creacionacta_model');
$result= $this->Creacionacta_model ->obtenerActaCreada($this->input->get('NroContacto'));
        if($result){
            
            
     
     
    

            $contenido_interno = array(
            
                
            'NroContacto' => $this->input->get('NroContacto'),
            'acta'      => $this->Creacionacta_model->obtenerActaCreada($this->input->get('NroContacto')),
        );


        $this->load->view('editaracta', $contenido_interno);
        }
        
        else{
           
        
   $contenido_interno = array(
            'NroContacto' => $this->input->get('NroContacto'),
             'NomCliente' => $this->input->get('NomCliente'),
             'Direcion1' => $this->input->get('Direcion1'),
             'IdCliente' => $this->input->get('IdCliente'),
             'Comuna1' => $this->input->get('Comuna1'),
             'CUD' => $this->input->get('CUD'),
             'SKU' => $this->input->get('SKU'),
             'FechaRetiroCambio' => $this->input->get('FechaRetiroCambio'),
             'TelComercial1' => $this->input->get('TelComercial1'),
             'motivoReclamo'      => $this->Creacionacta_model->motivoReclamo()
       
           
        );
        
        
        
       
        $this->load->view('creacionacta', $contenido_interno);
         }
        
    }

    
     public function savedata()
	{
		/*load registration view form*/
	   $this->load->model('Creacionacta_model');
$result= $this->Creacionacta_model ->obtenerActaCreada($this->input->get('NroContacto'));   
	
		/*Check submit button */
		if($this->input->post('save'))
		{
            $data['fechaRetiroCambioAuris']=$this->input->post('fechaRetiroCambioAuris');
            $data['estadoActa']=$this->input->post('estadoActa');
            $data['estadoArmadoProducto']=$this->input->post('estadoArmadoProducto');
            $data['estadoEmbalajeProducto']=$this->input->post('estadoEmbalajeProducto');
            $data['estadoUsoProducto']=$this->input->post('estadoUsoProducto');
            $data['cantidadProducto']=$this->input->post('cantidadProducto');
            $data['SKU']=$this->input->post('SKU');   
            $data['descripcionProducto']=$this->input->post('descripcionProducto');
            $data['proveedorProducto']=$this->input->post('proveedorProducto');
            $data['CUD']=$this->input->post('CUD');
            $data['tipoGestion']=$this->input->post('tipoGestion');
            $data['NumBoleta']=$this->input->post('NumBoleta');
            $data['NumTelefono']=$this->input->post('NumTelefono');
            $data['Comuna1']=$this->input->post('Comuna1');
            $data['IdCliente']=$this->input->post('IdCliente');
            $data['Direcion1']=$this->input->post('Direcion1');
            $data['NroContacto']=$this->input->post('NroContacto');
            $data['fechaGeneracion']=$this->input->post('fechaGeneracion');
            $data['motivoReclamo']=$this->input->post('motivoReclamo');
            $data['NomCliente']=$this->input->post('NomCliente');
            
            $data['danoAbolladoSuperior']=$this->input->post('danoAbolladoSuperior');
            $data['danoAbolladoInferior']=$this->input->post('danoAbolladoInferior');
            $data['danoAbolladoIzquierda']=$this->input->post('danoAbolladoIzquierda');
            $data['danoAbolladoDerecha']=$this->input->post('danoAbolladoDerecha');
            $data['danoAbolladoFrontal']=$this->input->post('danoAbolladoFrontal');
            $data['danoAbolladoTrasero']=$this->input->post('danoAbolladoTrasero');
            
            $data['danoCueroRotoSuperior']=$this->input->post('danoCueroRotoSuperior');
            $data['danoCueroRotoInferior']=$this->input->post('danoCueroRotoInferior');
            $data['danoCueroRotoIzquierda']=$this->input->post('danoCueroRotoIzquierda');
            $data['danoCueroRotoDerecha']=$this->input->post('danoCueroRotoDerecha');
            $data['danoCueroRotoFrontal']=$this->input->post('danoCueroRotoFrontal');
            $data['danoCueroRotoTrasero']=$this->input->post('danoCueroRotoTrasero');
            
            $data['danoDescosidoSuperior']=$this->input->post('danoDescosidoSuperior');
            $data['danoDescosidoInferior']=$this->input->post('danoDescosidoInferior');
            $data['danoDescosidoIzquierda']=$this->input->post('danoDescosidoIzquierda');
            $data['danoDescosidoDerecha']=$this->input->post('danoDescosidoDerecha');
            $data['danoDescosidoFrontal']=$this->input->post('danoDescosidoFrontal');
            $data['danoDescosidoTrasero']=$this->input->post('danoDescosidoTrasero');
            
            $data['danoDespegadoSuperior']=$this->input->post('danoDespegadoSuperior');
            $data['danoDespegadoInferior']=$this->input->post('danoDespegadoInferior');
            $data['danoDespegadoIzquierda']=$this->input->post('danoDespegadoIzquierda');
            $data['danoDespegadoDerecha']=$this->input->post('danoDespegadoDerecha');
            $data['danoDespegadoFrontal']=$this->input->post('danoDespegadoFrontal');
            $data['danoDespegadoTrasero']=$this->input->post('danoDespegadoTrasero');
            
            $data['danoMaderaCuarteadaSuperior']=$this->input->post('danoMaderaCuarteadaSuperior');
            $data['danoMaderaCuarteadaInferior']=$this->input->post('danoMaderaCuarteadaInferior');
            $data['danoMaderaCuarteadaIzquierda']=$this->input->post('danoMaderaCuarteadaIzquierda');
            $data['danoMaderaCuarteadaDerecha']=$this->input->post('danoMaderaCuarteadaDerecha');
            $data['danoMaderaCuarteadaFrontal']=$this->input->post('danoMaderaCuarteadaFrontal');
            $data['danoMaderaCuarteadaTrasero']=$this->input->post('danoMaderaCuarteadaTrasero');
            
            $data['danoMaderaGolpeadaSuperior']=$this->input->post('danoMaderaGolpeadaSuperior');
            $data['danoMaderaGolpeadaInferior']=$this->input->post('danoMaderaGolpeadaInferior');
            $data['danoMaderaGolpeadaIzquierda']=$this->input->post('danoMaderaGolpeadaIzquierda');
            $data['danoMaderaGolpeadaDerecha']=$this->input->post('danoMaderaGolpeadaDerecha');
            $data['danoMaderaGolpeadaFrontal']=$this->input->post('danoMaderaGolpeadaFrontal');
            $data['danoMaderaGolpeadaTrasero']=$this->input->post('danoMaderaGolpeadaTrasero');
            
            $data['danoMaderaAgrietadaSuperior']=$this->input->post('danoMaderaAgrietadaSuperior');
            $data['danoMaderaAgrietadaInferior']=$this->input->post('danoMaderaAgrietadaInferior');
            $data['danoMaderaAgrietadaIzquierda']=$this->input->post('danoMaderaAgrietadaIzquierda');
            $data['danoMaderaAgrietadaDerecha']=$this->input->post('danoMaderaAgrietadaDerecha');
            $data['danoMaderaAgrietadaFrontal']=$this->input->post('danoMaderaAgrietadaFrontal');
            $data['danoMaderaAgrietadaTrasero']=$this->input->post('danoMaderaAgrietadaTrasero');
            
            $data['danoPeladuraSuperior']=$this->input->post('danoPeladuraSuperior');
            $data['danoPeladuraInferior']=$this->input->post('danoPeladuraInferior');
            $data['danoPeladuraIzquierda']=$this->input->post('danoPeladuraIzquierda');
            $data['danoPeladuraDerecha']=$this->input->post('danoPeladuraDerecha');
            $data['danoPeladuraFrontal']=$this->input->post('danoPeladuraFrontal');
            $data['danoPeladuraTrasero']=$this->input->post('danoPeladuraTrasero');
            
            $data['danoPicadoSuperior']=$this->input->post('danoPicadoSuperior');
            $data['danoPicadoInferior']=$this->input->post('danoPicadoInferior');
            $data['danoPicadoIzquierda']=$this->input->post('danoPicadoIzquierda');
            $data['danoPicadoDerecha']=$this->input->post('danoPicadoDerecha');
            $data['danoPicadoFrontal']=$this->input->post('danoPicadoFrontal');
            $data['danoPicadoTrasero']=$this->input->post('danoPicadoTrasero');
            
            $data['danoQuebradoSuperior']=$this->input->post('danoQuebradoSuperior');
            $data['danoQuebradoInferior']=$this->input->post('danoQuebradoInferior');
            $data['danoQuebradoIzquierda']=$this->input->post('danoQuebradoIzquierda');
            $data['danoQuebradoDerecha']=$this->input->post('danoQuebradoDerecha');
            $data['danoQuebradoFrontal']=$this->input->post('danoQuebradoFrontal');
            $data['danoQuebradoTrasero']=$this->input->post('danoQuebradoTrasero');
            
            $data['danoRotoSuperior']=$this->input->post('danoRotoSuperior');
            $data['danoRotoInferior']=$this->input->post('danoRotoInferior');
            $data['danoRotoIzquierda']=$this->input->post('danoRotoIzquierda');
            $data['danoRotoDerecha']=$this->input->post('danoRotoDerecha');
            $data['danoRotoFrontal']=$this->input->post('danoRotoFrontal');
            $data['danoRotoTrasero']=$this->input->post('danoRotoTrasero');
            
            
            $data['danoRayadoSuperior']=$this->input->post('danoRayadoSuperior');
            $data['danoRayadoInferior']=$this->input->post('danoRayadoInferior');
            $data['danoRayadoIzquierda']=$this->input->post('danoRayadoIzquierda');
            $data['danoRayadoDerecha']=$this->input->post('danoRayadoDerecha');
            $data['danoRayadoFrontal']=$this->input->post('danoRayadoFrontal');
            $data['danoRayadoTrasero']=$this->input->post('danoRayadoTrasero');
            
            $data['danoSucioSuperior']=$this->input->post('danoSucioSuperior');
            $data['danoSucioInferior']=$this->input->post('danoSucioInferior');
            $data['danoSucioIzquierda']=$this->input->post('danoSucioIzquierda');
            $data['danoSucioDerecha']=$this->input->post('danoSucioDerecha');
            $data['danoSucioFrontal']=$this->input->post('danoSucioFrontal');
            $data['danoSucioTrasero']=$this->input->post('danoSucioTrasero');
            
            
            $data['observacionCliente']=$this->input->post('observacionCliente');
             $data['fechaRealCumplimiento']=$this->input->post('fechaRealCumplimiento');
             $data['DerechoRetracto']=$this->input->post('DerechoRetracto');
           
            
			$response=$this->Creacionacta_model->saverecords($data);
            
          
           redirect("index.php/creacionacta/actaregistrada/".$data['NroContacto']);

            
            
            
			
		}
	}
    
    
    
 public function edit($NroContacto)
     
     
    {

        $contenido_interno = array(
            
            'NroContacto' => $this->input->get('NroContacto'),
            'acta'      => $this->Creacionacta_model->obtenerActaCreada($NroContacto),
        );


        $this->load->view('editaracta', $contenido_interno);
    }
    
   public function update()
	{
		/*load registration view form*/
	
	
         
        $this->load->model('Creacionacta_model');
$result= $this->Creacionacta_model ->obtenerActaCreada($this->input->get('NroContacto'));   
                
           
            
        
		/*Check submit button */
		if($this->input->post('actualizar'))
		{
            
            
            $data['estadoArmadoProducto']=$this->input->post('estadoArmadoProducto');
            $data['estadoEmbalajeProducto']=$this->input->post('estadoEmbalajeProducto');
            $data['estadoUsoProducto']=$this->input->post('estadoUsoProducto');
            $data['cantidadProducto']=$this->input->post('cantidadProducto');
            $data['descripcionProducto']=$this->input->post('descripcionProducto');
            $data['proveedorProducto']=$this->input->post('proveedorProducto');
            $data['tipoGestion']=$this->input->post('tipoGestion');
            $data['NumBoleta']=$this->input->post('NumBoleta');
            $data['NumTelefono']=$this->input->post('NumTelefono');
            $data['Comuna1']=$this->input->post('Comuna1');
            $data['IdCliente']=$this->input->post('IdCliente');
            $data['Direcion1']=$this->input->post('Direcion1');
            $data['NomCliente']=$this->input->post('NomCliente');
            $data['NroContacto']=$this->input->post('NroContacto');
            $data['fechaRetiroCambioAuris']=$this->input->post('fechaRetiroCambioAuris');
            
            $data['danoAbolladoSuperior']=$this->input->post('danoAbolladoSuperior');
            $data['danoAbolladoInferior']=$this->input->post('danoAbolladoInferior');
            $data['danoAbolladoIzquierda']=$this->input->post('danoAbolladoIzquierda');
            $data['danoAbolladoDerecha']=$this->input->post('danoAbolladoDerecha');
            $data['danoAbolladoFrontal']=$this->input->post('danoAbolladoFrontal');
            $data['danoAbolladoTrasero']=$this->input->post('danoAbolladoTrasero');
            
            $data['danoCueroRotoSuperior']=$this->input->post('danoCueroRotoSuperior');
            $data['danoCueroRotoInferior']=$this->input->post('danoCueroRotoInferior');
            $data['danoCueroRotoIzquierda']=$this->input->post('danoCueroRotoIzquierda');
            $data['danoCueroRotoDerecha']=$this->input->post('danoCueroRotoDerecha');
            $data['danoCueroRotoFrontal']=$this->input->post('danoCueroRotoFrontal');
            $data['danoCueroRotoTrasero']=$this->input->post('danoCueroRotoTrasero');
            
            $data['danoDescosidoSuperior']=$this->input->post('danoDescosidoSuperior');
            $data['danoDescosidoInferior']=$this->input->post('danoDescosidoInferior');
            $data['danoDescosidoIzquierda']=$this->input->post('danoDescosidoIzquierda');
            $data['danoDescosidoDerecha']=$this->input->post('danoDescosidoDerecha');
            $data['danoDescosidoFrontal']=$this->input->post('danoDescosidoFrontal');
            $data['danoDescosidoTrasero']=$this->input->post('danoDescosidoTrasero');
            
            $data['danoDespegadoSuperior']=$this->input->post('danoDespegadoSuperior');
            $data['danoDespegadoInferior']=$this->input->post('danoDespegadoInferior');
            $data['danoDespegadoIzquierda']=$this->input->post('danoDespegadoIzquierda');
            $data['danoDespegadoDerecha']=$this->input->post('danoDespegadoDerecha');
            $data['danoDespegadoFrontal']=$this->input->post('danoDespegadoFrontal');
            $data['danoDespegadoTrasero']=$this->input->post('danoDespegadoTrasero');
            
            $data['danoMaderaCuarteadaSuperior']=$this->input->post('danoMaderaCuarteadaSuperior');
            $data['danoMaderaCuarteadaInferior']=$this->input->post('danoMaderaCuarteadaInferior');
            $data['danoMaderaCuarteadaIzquierda']=$this->input->post('danoMaderaCuarteadaIzquierda');
            $data['danoMaderaCuarteadaDerecha']=$this->input->post('danoMaderaCuarteadaDerecha');
            $data['danoMaderaCuarteadaFrontal']=$this->input->post('danoMaderaCuarteadaFrontal');
            $data['danoMaderaCuarteadaTrasero']=$this->input->post('danoMaderaCuarteadaTrasero');
            
            $data['danoMaderaGolpeadaSuperior']=$this->input->post('danoMaderaGolpeadaSuperior');
            $data['danoMaderaGolpeadaInferior']=$this->input->post('danoMaderaGolpeadaInferior');
            $data['danoMaderaGolpeadaIzquierda']=$this->input->post('danoMaderaGolpeadaIzquierda');
            $data['danoMaderaGolpeadaDerecha']=$this->input->post('danoMaderaGolpeadaDerecha');
            $data['danoMaderaGolpeadaFrontal']=$this->input->post('danoMaderaGolpeadaFrontal');
            $data['danoMaderaGolpeadaTrasero']=$this->input->post('danoMaderaGolpeadaTrasero');
            
            $data['danoMaderaAgrietadaSuperior']=$this->input->post('danoMaderaAgrietadaSuperior');
            $data['danoMaderaAgrietadaInferior']=$this->input->post('danoMaderaAgrietadaInferior');
            $data['danoMaderaAgrietadaIzquierda']=$this->input->post('danoMaderaAgrietadaIzquierda');
            $data['danoMaderaAgrietadaDerecha']=$this->input->post('danoMaderaAgrietadaDerecha');
            $data['danoMaderaAgrietadaFrontal']=$this->input->post('danoMaderaAgrietadaFrontal');
            $data['danoMaderaAgrietadaTrasero']=$this->input->post('danoMaderaAgrietadaTrasero');
            
            $data['danoPeladuraSuperior']=$this->input->post('danoPeladuraSuperior');
            $data['danoPeladuraInferior']=$this->input->post('danoPeladuraInferior');
            $data['danoPeladuraIzquierda']=$this->input->post('danoPeladuraIzquierda');
            $data['danoPeladuraDerecha']=$this->input->post('danoPeladuraDerecha');
            $data['danoPeladuraFrontal']=$this->input->post('danoPeladuraFrontal');
            $data['danoPeladuraTrasero']=$this->input->post('danoPeladuraTrasero');
            
            $data['danoPicadoSuperior']=$this->input->post('danoPicadoSuperior');
            $data['danoPicadoInferior']=$this->input->post('danoPicadoInferior');
            $data['danoPicadoIzquierda']=$this->input->post('danoPicadoIzquierda');
            $data['danoPicadoDerecha']=$this->input->post('danoPicadoDerecha');
            $data['danoPicadoFrontal']=$this->input->post('danoPicadoFrontal');
            $data['danoPicadoTrasero']=$this->input->post('danoPicadoTrasero');
            
            $data['danoQuebradoSuperior']=$this->input->post('danoQuebradoSuperior');
            $data['danoQuebradoInferior']=$this->input->post('danoQuebradoInferior');
            $data['danoQuebradoIzquierda']=$this->input->post('danoQuebradoIzquierda');
            $data['danoQuebradoDerecha']=$this->input->post('danoQuebradoDerecha');
            $data['danoQuebradoFrontal']=$this->input->post('danoQuebradoFrontal');
            $data['danoQuebradoTrasero']=$this->input->post('danoQuebradoTrasero');
            
            $data['danoRotoSuperior']=$this->input->post('danoRotoSuperior');
            $data['danoRotoInferior']=$this->input->post('danoRotoInferior');
            $data['danoRotoIzquierda']=$this->input->post('danoRotoIzquierda');
            $data['danoRotoDerecha']=$this->input->post('danoRotoDerecha');
            $data['danoRotoFrontal']=$this->input->post('danoRotoFrontal');
            $data['danoRotoTrasero']=$this->input->post('danoRotoTrasero');
            
            
            $data['danoRayadoSuperior']=$this->input->post('danoRayadoSuperior');
            $data['danoRayadoInferior']=$this->input->post('danoRayadoInferior');
            $data['danoRayadoIzquierda']=$this->input->post('danoRayadoIzquierda');
            $data['danoRayadoDerecha']=$this->input->post('danoRayadoDerecha');
            $data['danoRayadoFrontal']=$this->input->post('danoRayadoFrontal');
            $data['danoRayadoTrasero']=$this->input->post('danoRayadoTrasero');
            
            $data['danoSucioSuperior']=$this->input->post('danoSucioSuperior');
            $data['danoSucioInferior']=$this->input->post('danoSucioInferior');
            $data['danoSucioIzquierda']=$this->input->post('danoSucioIzquierda');
            $data['danoSucioDerecha']=$this->input->post('danoSucioDerecha');
            $data['danoSucioFrontal']=$this->input->post('danoSucioFrontal');
            $data['danoSucioTrasero']=$this->input->post('danoSucioTrasero');
            
            
            $data['observacionCliente']=$this->input->post('observacionCliente');
             $data['DerechoRetracto']=$this->input->post('DerechoRetracto');
            
            $NroContacto = $this->input->post('NroContacto');
           
            $id = $NroContacto;
            
			$response=$this->Creacionacta_model->update($id, $data);
            
           redirect("index.php/creacionacta/edit/".$data['NroContacto']);
			
		}
	} 
   
       
	}

