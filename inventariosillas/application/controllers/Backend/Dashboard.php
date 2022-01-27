<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Usuarios_model");
          $this->load->model("Dashboard_model");
        if (!$this->session->userdata("login")) {
            redirect(base_url() . "cpanel");
        }
    }

    public function index()
    {
        
        $contenido_interno = array(
           
            'irreparable' => $this->Dashboard_model->getIrreparable(),
             'enserviciotecnico' => $this->Dashboard_model->getEnServicioTecnico(),      
             'enprocesodeformateo' => $this->Dashboard_model->getEnProcesoDeFormateo(),      
             'alaesperadeserviciotecnico' => $this->Dashboard_model->getAlaEsperaDeServicioTecnico(),    
             'robado' => $this->Dashboard_model->getRobado(),
            'prestados' => $this->Dashboard_model->getPrestados(),
              'disponiblesparaprestamo' => $this->Dashboard_model->getDisponiblesParaPrestamo(),


        );
        
        $data = array(
            'title'     => 'Tablero Principal',
            'contenido' => $this->load->view('backend/dashboard', $contenido_interno, true),
        );

        $this->load->view('backend/template', $data);
    }
}
