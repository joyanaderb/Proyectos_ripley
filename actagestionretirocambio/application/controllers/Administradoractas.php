<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administradoractas extends CI_Controller {

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

            if (!$this->session->userdata("logueado")) {
            redirect(base_url() . "index.php/usuarios/iniciar_sesion");
        }
	}

    
	public function index()
	{
        
        	$this->load->helper('url');

		//load model
		$this->load->model('Main_model');

        
   $contenido_interno = array(
                        'actascreadas' => $this->Creacionacta_model->getActasCreadas(),
                        'cities' => $this->Main_model->getCity()
        );
        
        
        
       
        $this->load->view('administradoractas', $contenido_interno);
        
    }

public function getCityDepartment(){
		// POST data
		$postData = $this->input->post();

		//load model
		$this->load->model('Main_model');

		// get data
		$data = $this->Main_model->getCityDepartment($postData);

		echo json_encode($data);
	}
  
    
  public function getDepartmentUsers(){
		// POST data
		$postData = $this->input->post();

		//load model
		$this->load->model('Main_model');

		// get data
		$data = $this->Main_model->getDepartmentUsers($postData);

		echo json_encode($data);
	} 
    
    
     public function savedata()
	{
		/*load registration view form*/
	
	
		/*Check submit button */
		if($this->input->post('save'))
		{
            $data['estadoActa']=$this->input->post('estadoActa');
            $data['estadoArmadoProducto']=$this->input->post('estadoArmadoProducto');
            $data['estadoEmbalajeProducto']=$this->input->post('estadoEmbalajeProducto');
            $data['estadoUsoProducto']=$this->input->post('estadoUsoProducto');
            $data['cantidadProducto']=$this->input->post('cantidadProducto');
            $data['SKU']=$this->input->post('SKU');   
            $data['CUD']=$this->input->post('CUD');
            $data['tipoGestion']=$this->input->post('tipoGestion');
            $data['NumBoleta']=$this->input->post('NumBoleta');
            $data['NumTelefono']=$this->input->post('NumTelefono');
            $data['Comuna1']=$this->input->post('Comuna1');
            $data['IdCliente']=$this->input->post('IdCliente');
            $data['Direcion1']=$this->input->post('Direcion1');
            $data['NroContacto']=$this->input->post('NroContacto');
            $data['NomCliente']=$this->input->post('NomCliente');
			$response=$this->Creacionacta_model->saverecords($data);
			
		}
	}
    
    
    
 public function edit($NroContacto)
     
     
    {

        $contenido_interno = array(
            
            'NroContacto' => $this->input->get('NroContacto'),
            'acta'      => $this->Creacionacta_model->obtenerActaCreada($NroContacto),
        );

      

        $this->load->view('creacionacta', $contenido_interno);
    }
    
 public function update()
	{

	       
           $data = array(
        'table_name' => 'actas_creadas', // pass the real table name
        'NroContacto' => $this->input->post('NroContacto'),
        'estadoActa' => $this->input->post('estadoActa'),
               'fechaRealCumplimiento'  => $this->input->post('fechaRealCumplimiento'),
                'fechaRetiroCambioAuris'  => $this->input->post('fechaRetiroCambioAuris')
    );
     
     $dataHistorial = array(
        'table_name' => 'historial_actas', // pass the real table name
        'NroContacto' => $this->input->post('NroContacto'),
         'fechaGeneracion' => $this->input->post('fechaGeneracion'),
        'estadoActa' => $this->input->post('estadoActa'),
         'tipoGestion' => $this->input->post('tipoGestion'),
         'Comuna1' => $this->input->post('Comuna1'),
               'fechaRealCumplimiento'  => $this->input->post('fechaRealCumplimiento'),
         'FechaUltimaModificacion'  => $this->input->post('FechaUltimaModificacion'),
      'nombreModificador'  => $this->input->post('nombreModificador'),        
    );

    $this->load->model('Creacionacta_model'); // load the model first
    $response =$this->Creacionacta_model->update3($data); // call the method from the model
   $response2 =$this->Creacionacta_model->HistorialCambios($dataHistorial);
            
           redirect("index.php/administradoractas");
			
		
 }
    
     public function editAdmin()
     
     
    { 
     
      $NroContacto = $this->input->get('NroContacto');
  
        $contenido_interno = array(
                     'resultado'=> $this->Creacionacta_model ->getEditarActaAdmin($NroContacto), 

        );
         
         $this->load->view('editarActaAdmin', $contenido_interno);
     }
    
      public function historialdeticketpornumeroticket(){
 

         $NroContacto = $this->input->get('NroContacto');
  
        $contenido_interno = array(
          
                     'resultado'=> $this->Creacionacta_model ->getBuscadordehistoricopornumeroticket($NroContacto), 

        );

    

        $this->load->view('historialticket', $contenido_interno);
    }
       
	}

