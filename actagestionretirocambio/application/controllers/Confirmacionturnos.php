<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Confirmacionturnos extends CI_Controller {

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
		$this->load->model("Cumpleanoscolaboradores_model");
        
        if (!$this->session->userdata("logueado")) {
            redirect(base_url() . "index.php/usuarios/iniciar_sesion");
        }
	}

    public function index()
    {

        
      

        $this->load->view('confirmacionturnos');
    }
    

    
    
    public function savedata()
	{
		/*load registration view form*/
	
	
		/*Check submit button */
		if($this->input->post('save'))
		{
		    $data['nombre']=$this->input->post('nombre');
			$data['rut_completo']=$this->input->post('rut_completo');
			$data['nombre_servicio']=$this->input->post('nombre_servicio');
			$response=$this->Cumpleanoscolaboradores_model->saverecords($data);
			
		}
	}


}

