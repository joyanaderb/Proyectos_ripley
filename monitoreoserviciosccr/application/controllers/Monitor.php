<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitor extends CI_Controller {

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
		$this->load->model("Consulta_model");
        
    
	}

 
    
    
     public function index()
    {

        $contenido_interno = array(
            
             'datos' => $this->Consulta_model->Datos(),
              'datos2' => $this->Consulta_model->Datos2(),
               'datos3' => $this->Consulta_model->Datos3(),
            
        );

       

        $this->load->view('monitor', $contenido_interno);
    }
    
    
    
     public function recarga()
          {

       
$contenido_interno = array(
             
              'datos' => $this->Consulta_model->Datos(),
    'datos2' => $this->Consulta_model->Datos2(),
    'datos3' => $this->Consulta_model->Datos3(),
        );
        
        
       

        $this->load->view('monitor', $contenido_interno);
    }
    
  }