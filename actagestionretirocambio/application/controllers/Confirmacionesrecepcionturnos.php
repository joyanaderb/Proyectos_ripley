<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Confirmacionesrecepcionturnos extends CI_Controller {

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
        
       
	}

    public function index()
    {
        
          $contenido_interno = array(
               'ConfirmacionesRecepcionTurnos' => $this->Cumpleanoscolaboradores_model->getConfirmacionesRecepcionTurnos(),
        );

 

        $this->load->view('confirmacionrecepcionturno2021', $contenido_interno);
    }
    
 public function all()
    {
        $contenido_interno = array(
            'prestamos' => $this->Prestamos_model->getPrestamos(),
        );

        $contenido_exterior = array(
            'title'     => 'Todos los Prestamos ',
            'contenido' => $this->load->view('backend/prestamos/all', $contenido_interno, true),
        );

        $this->load->view('backend/template', $contenido_exterior);

    }
    
    
   


}

